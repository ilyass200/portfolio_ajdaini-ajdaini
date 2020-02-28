<?php

namespace App\Entity;

use Serializable;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonneRepository")
 */
class Personne implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_prs;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(
     *     message= "le champ nom ne doit pas être vide"
     * )
     * @Assert\Length(
     *      max = 50,
     *      maxMessage = "Le champ nom ne peut être plus long que {{ limit }} caractères "
     * )
     */
    private $nom_prs;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(
     *     message= "le champ prenom ne doit pas être vide"
     * )
     * @Assert\Length(
     *      max = 50,
     *      maxMessage = "Le champ prenom ne peut être plus long que {{ limit }} caractères "
     * )
     */
    private $prenom_prs;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(
     *     message= "Le champ email ne doit pas être vide"
     * )
     * @Assert\Email(
     *     message = "L'e-mail '{{ value }}' n'est pas un e-mail valide"
     * )
     * @Assert\Length(
     *      max = 150,
     *      maxMessage = "Le champ email ne peut être plus long que {{ limit }} caractères "
     * )
     */
    private $email_prs;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(
     *      min = 6,
     *      max = 50,
     *      maxMessage = "Le champ mot de passe ne peut être plus long que {{ limit }} caractères ",
     *      minMessage = "mot de passe est trop court, {{ limit }} caractères minimum " 
     * )
     */
    private $mdp_prs;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TypePersonne", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false,name="id_type_personne", referencedColumnName="id_type_prs")
     */
    private $id_type_personne;

    public function getId(): ?int
    {
        return $this->id_prs;
    }

    public function getNomPrs(): ?string
    {
        return $this->nom_prs;
    }

    public function setNomPrs(string $nom_prs): self
    {
        $this->nom_prs = $nom_prs;

        return $this;
    }

    public function getPrenomPrs(): ?string
    {
        return $this->prenom_prs;
    }

    public function setPrenomPrs(string $prenom_prs): self
    {
        $this->prenom_prs = $prenom_prs;

        return $this;
    }

    public function getEmailPrs(): ?string
    {
        return $this->email_prs;
    }

    public function setEmailPrs(string $email_prs): self
    {
        $this->email_prs = $email_prs;

        return $this;
    }

    public function getMdpPrs(): ?string
    {
        return $this->mdp_prs;
    }

    public function setMdpPrs(string $mdp_prs): self
    {
        $this->mdp_prs = $mdp_prs;

        return $this;
    }

    public function getIdTypePersonne(): ?TypePersonne
    {
        return $this->id_type_personne;
    }

    public function setIdTypePersonne(TypePersonne $id_type_personne): self
    {
        $this->id_type_personne = $id_type_personne;

        return $this;
    }

    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    public function getPassword()
    {
        return $this->getMdpPrs();
    }

    public function getUsername()
    {
        return $this->getEmailPrs();
    }

    public function getSalt()
    {
        return null;
    }

    public function eraseCredentials(){}

}
