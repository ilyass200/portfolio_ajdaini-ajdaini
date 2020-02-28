<?php

namespace App\Controller;

// Symfony
use App\Entity\Contact;
use App\Entity\Personne;
use App\Form\ContactType;
use App\Repository\ContactRepository;
use App\Repository\PersonneRepository;
use Doctrine\ORM\EntityManagerInterface;
// Form
use App\Form\PersonneType;
use App\Repository\TypePersonneRepository;
use Symfony\Component\HttpFoundation\Request;
// Entity
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// Repository
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
// FormType
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
// Doctrine
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Validator\ConstraintViolation;
use Symfony\Component\Form\FormError;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Repository\AvisRepository;
use App\Form\AvisType;
use App\Entity\Avis;

class PortfolioController extends AbstractController

{
    /**
     * @Route("/", name="index")
     */
    public function index(Request $req,SessionInterface $session,AvisRepository $AvisRepository, PersonneRepository $PersonneRepository,EntityManagerInterface $manager)
    {
        $usr = $this->get('security.token_storage')->getToken()->getUser();
        $accepte_avs = $AvisRepository->findBy(['accepte_avs'=>true]);
        $first_connection = false;

        if(!$session->get('first_connection'))
        {
            $first_connection = true;
            $session->set('first_connection',true);
        }
            
        $avisForm = $this->createForm(AvisType::class);
        $data = $req->request;
        $avisForm->handleRequest($req);
        $errors = [];
        $success = false;
        $form_response = ['success'=>false];

        if($req->getMethod() === "POST" && $avisForm->isSubmitted())
        {
            $errors = $avisForm->getErrors(true, false);;

            $urs_avis = $AvisRepository->findOneBy(['id_personne'=>$usr->getId()]);
            
            if(count($errors) < 1)
            {
                if($urs_avis)
                {
                    $avisForm->get('contenu_avs')->addError(new FormError('Vous avez déjà inscrit un avis !'));
                }
            }

            if($avisForm->isValid())
            {
                $avis = new Avis();
                $avis->setContenuAvs($data->get('contenu_avs'));
                $avis->setDateAvs(new \DateTime('now'));
                $author = $PersonneRepository->find($usr->getId());
                $avis->setIdPersonne($author);

                $manager->persist($avis);
                $manager->flush();

                $form_response = ['success'=> true,'message'=> 'Votre avis a bien été enregistrer !']; 
            }
        }
        
        $form_response = json_encode($form_response);

        return $this->render('./protofolio/index.html.twig',
        [
            'accepte_avs'=> $accepte_avs,
            'form' => $avisForm->createView(),
            'errors' => $errors,
            'form_response' => $form_response,
            'first_connection' => $first_connection
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $req,ValidatorInterface $validator,TypePersonneRepository $TypePersonneRepository,PersonneRepository $PersonneRepository, ContactRepository $ContactRepository, EntityManagerInterface $manager)
    {
        $form = $this->createForm(ContactType::class);
        $data = $req->request;
        $form->handleRequest($req);

        $errors_user = [];
        $success = false;
        $create_user = false;
        $errors_contact = $form->getErrors();
        $continue = ['status'=>true];

        if($req->getMethod() === "POST" && $form->isSubmitted())
        {
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $securityContext = $this->container->get('security.authorization_checker');

            if(!$securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED'))
            {
                $verifyEmailUser = $PersonneRepository->findOneBy(array('email_prs'=>$data->get('email')));
                    
                if($verifyEmailUser)
                {                        
                    if($verifyEmailUser->getIdTypePersonne()->getId() == 2)
                    {
                        $continue = ['status'=>false,'message'=>'il semble que vous ayez déjà un compte, connectez-vous pour me contacter.'];
                    }
                    elseif($verifyEmailUser->getIdTypePersonne()->getId() == 3)
                    {
                        $verifiyContact = $ContactRepository->findOneBy(array('id_personne'=>$verifiyEmailUser->getId())); 

                        if($verifiyContact)
                        {
                            $continue = ['status'=>false,'message'=>'Votre email est deja inscrit, vous ne pouvez nous contacter qu\'une seule fois'];
                        }
                    }
                }
                else
                {
                    $user = new Personne();
                    $user->setNomPrs($data->get('nom'));
                    $user->setPrenomPrs($data->get('prenom'));
                    $user->setEmailPrs($data->get('email'));
                    $type_visiteur_prs = $TypePersonneRepository->find(3);
                    $user->setIdTypePersonne($type_visiteur_prs);
                    $errors_user = $validator->validate($user);
                    $create_user = true;
                }
            }
            else
            {
                $verifiyContact = $ContactRepository->findOneBy(array('id_personne'=>$user->getId())); 

                if($verifiyContact)
                {
                    $continue = ['status'=>false,'message'=>'Votre email est deja inscrit, vous ne pouvez nous contacter qu\'une seule fois'];
                }
            }
            
            if($continue['status'] && count($errors_user) < 1 && $form->isValid())
            {
                $contact = new Contact();
                $contact->setSujet($data->get('sujet'));
                $contact->setVille($data->get('ville'));
                $contact->setMessage($data->get('message'));
                $contact->setDate(new \DateTime('now'));
                $contact->setPersonne($user);
                $errors_contact = $validator->validate($contact);

                if(!$data->get('conditions'))
                {                    
                    $error = new ConstraintViolation('veuillez accepter les conditions générales d\'utilisation !','',[],$contact,'conditions',null);
                    $errors_contact->add($error); 
                }
                else
                {
                        ($create_user ? $manager->persist($user) : "");
                        $manager->persist($contact);
                        $manager->flush();

                        $success = true;
                }
            }
        
        }
        
        return $this->render('./protofolio/contact.html.twig',
        [
        'errors' => $errors_user,
        'errors_contact' => $errors_contact,
        'form' => $form->createView(),
        'success' => $success,
        'continue' => $continue
        ]
    ); 
    }

    /**
     * @Route("/registration", name="registration")
     */    
    public function registration(Session $session,Request $req,ValidatorInterface $validator,TypePersonneRepository $TypePersonneRepository, EntityManagerInterface $manager,UserPasswordEncoderInterface $UserPassword)
    {

        $securityContext = $this->container->get('security.authorization_checker');

        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('index');
        }

        $form_response = [];

        $form = $this->createForm(PersonneType::class);
        $data = $req->request;
        $form->handleRequest($req);
        $success = true;

        $errors = [];
        
        if($req->getMethod() === "POST" && $form->isSubmitted())
        {
        
            (strlen($data->get('mdp_prs')) < 1 ?  $form->get('mdp_prs')->addError(new FormError('le champ mot de passe ne doit pas être vide')) : '');


            (count($form->get('mdp_prs')->getErrors()) < 1 && $data->get('mdp_repeat_prs') !== $data->get('mdp_prs') ? $form->get('mdp_prs')->addError(new FormError('Les mots de passe ne correspondent pas')): "");

            if(count($form->get('email_prs')->getErrors()) < 1)
            {
                $PersonneRepository = $this->getDoctrine()->getRepository(Personne::class);
                $verifiyEmail = $PersonneRepository->findOneBy(['email_prs'=>$data->get('email_prs')]);

                if($verifiyEmail && $verifiyEmail->getIdTypePersonne()->getId() != 3)
                {
                    $form->get('email_prs')->addError(new FormError('Cet e-mail existe déjà dans notre base de données')); 
                }

            }

            if(!$data->get('conditions_prs'))
            {
                $success = false;
                $form_response = ['success'=>false,'message'=>"Veuillez accepter nos conditions d'utilisation !"];
            }


            if($form->isValid() && $success)
            {
                $membre = $TypePersonneRepository->find(2);
                
                if($verifiyEmail && $verifiyEmail->getIdTypePersonne()->getId() == 3)
                {
                    $user = $verifiyEmail;
                    $encodedPass = $UserPassword->encodePassword($user,$data->get('mdp_prs'));
                    $user->setPrenomPrs($data->get('prenom_prs'));
                    $user->setNomPrs($data->get('nom_prs'));
                    $user->setMdpPrs($encodedPass);
                    $user->setIdTypePersonne($membre);

                    $manager->flush();
                    $success = true;
                    $form_response = ['success'=> true,'message'=>'votre compte a bien été créé !'];
                }
                else
                {
                    $user = new Personne();
                    $encodedPass = $UserPassword->encodePassword($user,$data->get('mdp_prs'));
                    $user->setPrenomPrs($data->get('prenom_prs'));
                    $user->setNomPrs($data->get('nom_prs'));
                    $user->setEmailPrs($data->get('email_prs'));
                    $user->setMdpPrs($encodedPass);
                    $user->setIdTypePersonne($membre);
                
                    $manager->persist($user);
                    $manager->flush();
                    $form_response = ['success'=> true,'message'=>'votre compte a bien été créé !'];
                }
            }
            else
            {
            }
            
            $errors = $form->getErrors();
        }

        $form_response = json_encode($form_response);

        return $this->render('./protofolio/registration.html.twig',
        [
            'form' => $form->createView(),
            'errors' => $errors,
            'form_response' => $form_response,
            'test'=>'HELLO WOLRD !'
        ]);
    }

    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {
        $securityContext = $this->container->get('security.authorization_checker');
        $success = false;

        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('index');
        }
        

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        ($error ? false : true);
        
        return $this->render('protofolio/login.html.twig', 
        ['last_username' => $lastUsername, 
        'error' => $error,
        'success' => $success
        ]
        );
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
        throw new \Exception('This method can be blank - it will be intercepted by the logout key on your firewall');
    }  
}
