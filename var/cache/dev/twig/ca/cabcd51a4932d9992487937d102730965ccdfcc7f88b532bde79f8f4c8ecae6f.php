<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ./protofolio/registration.html.twig */
class __TwigTemplate_36d138cb7a4a4939f091a2e609ff62bd3148acad9e841134c2a4122c89485e03 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./protofolio/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./protofolio/registration.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Document</title>
\t<!-- local fonts -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fonts/style.css"), "html", null, true);
        echo "\">
 \t<!-- font awesome -->
 \t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("librairy/fontawesome-5.12.0/css/all.min.css"), "html", null, true);
        echo "\">
  <!-- lcoal css -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/login.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/registration.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/modal.css"), "html", null, true);
        echo "\">
</head>
<body>



  <header class=\"box\">
    <nav>
      <div class=\"logo-container\">
        <img src=\"./img/logo.png\" width=\"100\">
      </div>
      <ul>
        <li class=\"active\"><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">ACCUEIL</a></li>
        <li class=\"active\"><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">CONTACT</a></li>
      </ul>
    </nav>
  </header>




<div class=\"body-container\">

<div class=\"img-back-div\" style=\"flex: 1; position: relative; background: url('./img/undraw_lost_online_wqob.svg') no-repeat left top; background-size: 100%;\">
</div>

<img class=\"img-back\" src=\"./img/undraw_lost_online_wqob.svg\" alt=\"\">

<div class=\"login-container\">
    <div class=\"login-box\">
      <div style=\"position: relative; top: 15%\">
        <p class=\"login-txt\">crée un compte</p>
        <center>
          <p class=\"user-icon\"><i class=\"fas fa-user-circle\"></i></p>
        </center>

        <div style=\"width: 100%; position: relative;\">
       
        <div class=\"centered\">

          ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_start');
        echo "



          <div class=\"group ";
        // line 58
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "prenom_prs", [], "any", false, false, false, 58), "vars", [], "any", false, false, false, 58), "valid", [], "any", false, false, false, 58)) {
            echo "error";
        }
        echo "\">
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "prenom_prs", [], "any", false, false, false, 59), 'widget');
        echo "
            <label style=\"color: #886E0F;\" for=\"prenom\">Prenom 
            <span>";
        // line 61
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "prenom_prs", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "valid", [], "any", false, false, false, 61)) {
            echo "( ";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "prenom_prs", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "errors", [], "any", false, false, false, 61), ["ERROR:" => ""]), "html", null, true);
            echo " )";
        }
        echo "</span>
            </label>
            <div class=\"bar bar-regis\"></div>
          </div>

          <div class=\"group ";
        // line 66
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "nom_prs", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "valid", [], "any", false, false, false, 66)) {
            echo "error";
        }
        echo "\">
            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "nom_prs", [], "any", false, false, false, 67), 'widget');
        echo "
            <label style=\"color: #886E0F;\" for=\"nom\">Nom 
            <span>";
        // line 69
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "nom_prs", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "valid", [], "any", false, false, false, 69)) {
            echo " ( ";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "nom_prs", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "errors", [], "any", false, false, false, 69), ["ERROR:" => ""]), "html", null, true);
            echo " )";
        }
        echo "</span>
            </label>
            <div class=\"bar bar-regis\"></div>
          </div>

          <div class=\"group ";
        // line 74
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "email_prs", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "valid", [], "any", false, false, false, 74)) {
            echo "error";
        }
        echo "\">
            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "email_prs", [], "any", false, false, false, 75), 'widget');
        echo "
            <label style=\"color: #886E0F;\" for=\"email\">Email 
            <span>";
        // line 77
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "email_prs", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "valid", [], "any", false, false, false, 77)) {
            echo "( ";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "email_prs", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "errors", [], "any", false, false, false, 77), ["ERROR:" => ""]), "html", null, true);
            echo " )";
        }
        echo "</span>
            </label>
            <div class=\"bar bar-regis\"></div>
          </div>

          <div class=\"group ";
        // line 82
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "mdp_prs", [], "any", false, false, false, 82), "vars", [], "any", false, false, false, 82), "valid", [], "any", false, false, false, 82)) {
            echo "error";
        }
        echo "\">
            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "mdp_prs", [], "any", false, false, false, 83), 'widget');
        echo "
            <label style=\"color: #886E0F;\" for=\"mdp\">Mot de Passe 
            <span> ";
        // line 85
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "mdp_prs", [], "any", false, false, false, 85), "vars", [], "any", false, false, false, 85), "valid", [], "any", false, false, false, 85)) {
            echo "( ";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "mdp_prs", [], "any", false, false, false, 85), "vars", [], "any", false, false, false, 85), "errors", [], "any", false, false, false, 85), ["ERROR:" => ""]), "html", null, true);
            echo " )";
        }
        echo "</span>
            </label>
            <div class=\"bar bar-regis\"></div>
          </div>

          <div class=\"group\">
            <input type=\"password\" name=\"mdp_repeat_prs\" id=\"pwd_repeat\"/>
            <label style=\"color: #886E0F;\" for=\"pwd_repeat\">Répétez votre mot de passe</label>
            <div class=\"bar bar-regis\"></div>
        </div>


        <div class=\"group tg-list-item\">
          <input class=\"tgl tgl-light\" name=\"conditions_prs\" id=\"cb2\" type=\"checkbox\"/>
          <label style=\"color: #886E0F;\" class=\"tgl-btn\" for=\"cb2\"></label>
          <p id=\"conditions\">
          <span class=\"cond_accept_off\">j ai lu et j'accepte les <a href=\"#conditions-generales\">conditions générales d'utilisation</a></span> 
          <span class=\"cond_accept_on\"></span>
        </p>
        </div>

        <center>

          <p class=\"p-account\">Vous avez déjà un compte ? <a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">se connecter</a></p>
        </center>

        <div class=\"buttons\">
          <button type=\"submit\" class=\"blob-btn\" style=\"z-index: 0;\">
            SIGN UP
            <span class=\"blob-btn__inner\">
              <span class=\"blob-btn__blobs\">
                <span class=\"blob-btn__blob\"></span>
                <span class=\"blob-btn__blob\"></span>
                <span class=\"blob-btn__blob\"></span>
                <span class=\"blob-btn__blob\"></span>
              </span>
            </span>
          </button>
          <br/>
      </div>
        
        <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\">
          <defs>
            <filter id=\"goo\">
              <feGaussianBlur in=\"SourceGraphic\" result=\"blur\" stdDeviation=\"10\"></feGaussianBlur>
              <feColorMatrix in=\"blur\" mode=\"matrix\" values=\"1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7\" result=\"goo\"></feColorMatrix>
              <feBlend in2=\"goo\" in=\"SourceGraphic\" result=\"mix\"></feBlend>
            </filter>
          </defs>
        </svg>

          ";
        // line 136
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), 'form_end');
        echo "

            
        </div>

                
            </div>
        </form>
        
        <div id=\"alert-area\" class=\"alert-area\"></div>

      </div>
    </div>
</div>
</div>



<div id=\"conditions-generales\" class=\"modal-window\">
  <div>
    <a href=\"#\" title=\"Close\" class=\"modal-close\">Fermer</a>
    <h1>Mentions légales</h1>
    <p>Cette page décrit les mentions légales qui s'appliquent à tout internaute visitant ce site. En le consultant vous vous engagez sans réserve à les respecter. Les mentions légales pouvant être modifiées à tout moment et sans préavis, nous vous invitons à les consulter régulièrement.</p>
    <h2>Conditions d'utilisation</h2>
    <p>Notre site n'est en aucun cas responsable du contenu généré par l'utilisateur. Le contenu posté exprime les opinions de leur auteur seulement. Les textes et messages publiés sont la propriété de ceux qui les postent. Nous faisons notre possible pour modérer les propos inappropriés qui pourraient être postés ici, mais nous nous dégageons de toute responsabilité sur ce que vous postez. Vous demeurez le seul responsable de vos actes et de vos messages au regard de la loi.

      Vous acceptez de ne pas utiliser le service pour poster ou lier vers un contenu qui est diffamatoire, injurieux, haineux, menaçant, spams ou pourriels, étant de nature à offenser, ayant un contenu réservé aux adultes ou répréhensible, contenant des renseignements personnels des autres, risquant de violer les droits d'auteurs, encourageant une activité illégale ou contraire à toutes les lois.
      
      Le respect est la principale qualité de notre communauté. Tout manque de respect à l'encontre d'un membre, néophyte ou non, entraînera également des sanctions, à savoir avertissements, bannissements voire poursuites selon la gravité de la situation.
      
      notre site décline toute responsabilité concernant les rencontres réelles.</p>

      <h2>Informations nominatives et données personnelles</h2>

      <p>Notre site ne divulguera pas à des tiers les données personnelles vous concernant que vous pourriez lui communiquer. Elles ne seront utilisées que dans le but de vous répondre le plus efficacement possible.</p>
   
        <h2>Dispositions juridictionnelles</h2>

        <p>Le site et son contenu sont régis par le Droit Français, et tout litige éventuel s'y rapportant sera soumis à la compétence des tribunaux français.</p>

    </div>
</div>

<footer>
\t<div class=\"footer-flex\" style=\"position: relative;top: 50px;\">
\t\t<ul class=\"footer-infos\">
\t\t\t<li><i class=\"fas fa-phone-alt\"></i><span>06 09 98 98 98</span></li>
\t\t\t<li><i class=\"fas fa-envelope\"></i><span>email@gmail.com</span></li>
\t\t\t<li><i class=\"fas fa-map-marker-alt\"></i><span>Rennes, France</span></li>
\t\t</ul>
\t\t<div class=\"footer-links\">
\t\t\t<a target=\"_ublank\" href=\"https://github.com/ilyass200\"><i class=\"fab fa-github\"></i></a>
\t\t\t<a target=\"_ublank\" href=\"https://www.linkedin.com/in/ilyass-ajdaini\"><i class=\"fab fa-linkedin-in\"></i></a>
\t\t</div>
\t</div>
\t<div class=\"copyright\">
\t\t<center>
\t\t\t<p>© 2019 copyright AJDAINI ILYASS</p>
\t\t</center>
\t</div>
</footer>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/alert_box.js"), "html", null, true);
        echo "\"></script>
<script>
</script>



<script>

var alertbox = new AlertBox('#alert-area', {
  closeTime: 5000,
  persistent: false,
  hideCloseButton: false
});



let form_response = JSON.parse( ";
        // line 214
        echo json_encode((isset($context["form_response"]) || array_key_exists("form_response", $context) ? $context["form_response"] : (function () { throw new RuntimeError('Variable "form_response" does not exist.', 214, $this->source); })()));
        echo " );
let alert_area = document.querySelector('.alert-area');

if(!form_response.success)
{
  alertbox.show(form_response.message);
  let alert_box = document.querySelector('.alert-box');
  alert_box.classList.add('error')
}
else
{
  alertbox.show(form_response.message);
  let alert_box = document.querySelector('.alert-box');
  alert_box.classList.add('success')
}


var btnRadius = \$('.cd-modal-bg').width()/2,
    left = \$('.cd-modal-bg').offset().left + btnRadius,
    top = \$('.cd-modal-bg').offset().top + btnRadius - \$(window).scrollTop(),
    scale = scaleValue(top, left, btnRadius, \$(window).height(), \$(window).width());

function scaleValue( topValue, leftValue, radiusValue, windowW, windowH) {
   var maxDistHor = ( leftValue > windowW/2) ? leftValue : (windowW - leftValue),
       maxDistVert = ( topValue > windowH/2) ? topValue : (windowH - topValue);
   return Math.ceil(Math.sqrt( Math.pow(maxDistHor, 2) + Math.pow(maxDistVert, 2) )/radiusValue);
}
</script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "./protofolio/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 214,  332 => 198,  267 => 136,  236 => 108,  206 => 85,  201 => 83,  195 => 82,  183 => 77,  178 => 75,  172 => 74,  160 => 69,  155 => 67,  149 => 66,  137 => 61,  132 => 59,  126 => 58,  119 => 54,  89 => 27,  85 => 26,  70 => 14,  66 => 13,  62 => 12,  57 => 10,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Document</title>
\t<!-- local fonts -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/fonts/style.css') }}\">
 \t<!-- font awesome -->
 \t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('librairy/fontawesome-5.12.0/css/all.min.css') }}\">
  <!-- lcoal css -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/login.css') }}\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/registration.css') }}\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/modal.css') }}\">
</head>
<body>



  <header class=\"box\">
    <nav>
      <div class=\"logo-container\">
        <img src=\"./img/logo.png\" width=\"100\">
      </div>
      <ul>
        <li class=\"active\"><a href=\"{{ path('index') }}\">ACCUEIL</a></li>
        <li class=\"active\"><a href=\"{{ path('contact') }}\">CONTACT</a></li>
      </ul>
    </nav>
  </header>




<div class=\"body-container\">

<div class=\"img-back-div\" style=\"flex: 1; position: relative; background: url('./img/undraw_lost_online_wqob.svg') no-repeat left top; background-size: 100%;\">
</div>

<img class=\"img-back\" src=\"./img/undraw_lost_online_wqob.svg\" alt=\"\">

<div class=\"login-container\">
    <div class=\"login-box\">
      <div style=\"position: relative; top: 15%\">
        <p class=\"login-txt\">crée un compte</p>
        <center>
          <p class=\"user-icon\"><i class=\"fas fa-user-circle\"></i></p>
        </center>

        <div style=\"width: 100%; position: relative;\">
       
        <div class=\"centered\">

          {{form_start(form)}}



          <div class=\"group {% if not form.prenom_prs.vars.valid %}error{% endif %}\">
            {{ form_widget(form.prenom_prs) }}
            <label style=\"color: #886E0F;\" for=\"prenom\">Prenom 
            <span>{% if not form.prenom_prs.vars.valid %}( {{form.prenom_prs.vars.errors|replace({'ERROR:':''})}} ){% endif %}</span>
            </label>
            <div class=\"bar bar-regis\"></div>
          </div>

          <div class=\"group {% if not form.nom_prs.vars.valid %}error{% endif %}\">
            {{ form_widget(form.nom_prs) }}
            <label style=\"color: #886E0F;\" for=\"nom\">Nom 
            <span>{% if not form.nom_prs.vars.valid %} ( {{form.nom_prs.vars.errors|replace({'ERROR:':''})}} ){% endif %}</span>
            </label>
            <div class=\"bar bar-regis\"></div>
          </div>

          <div class=\"group {% if not form.email_prs.vars.valid %}error{% endif %}\">
            {{ form_widget(form.email_prs) }}
            <label style=\"color: #886E0F;\" for=\"email\">Email 
            <span>{% if not form.email_prs.vars.valid %}( {{form.email_prs.vars.errors|replace({'ERROR:':''})}} ){% endif %}</span>
            </label>
            <div class=\"bar bar-regis\"></div>
          </div>

          <div class=\"group {% if not form.mdp_prs.vars.valid %}error{% endif %}\">
            {{ form_widget(form.mdp_prs) }}
            <label style=\"color: #886E0F;\" for=\"mdp\">Mot de Passe 
            <span> {% if not form.mdp_prs.vars.valid %}( {{form.mdp_prs.vars.errors|replace({'ERROR:':''})}} ){% endif %}</span>
            </label>
            <div class=\"bar bar-regis\"></div>
          </div>

          <div class=\"group\">
            <input type=\"password\" name=\"mdp_repeat_prs\" id=\"pwd_repeat\"/>
            <label style=\"color: #886E0F;\" for=\"pwd_repeat\">Répétez votre mot de passe</label>
            <div class=\"bar bar-regis\"></div>
        </div>


        <div class=\"group tg-list-item\">
          <input class=\"tgl tgl-light\" name=\"conditions_prs\" id=\"cb2\" type=\"checkbox\"/>
          <label style=\"color: #886E0F;\" class=\"tgl-btn\" for=\"cb2\"></label>
          <p id=\"conditions\">
          <span class=\"cond_accept_off\">j ai lu et j'accepte les <a href=\"#conditions-generales\">conditions générales d'utilisation</a></span> 
          <span class=\"cond_accept_on\"></span>
        </p>
        </div>

        <center>

          <p class=\"p-account\">Vous avez déjà un compte ? <a href=\"{{ path('app_login') }}\">se connecter</a></p>
        </center>

        <div class=\"buttons\">
          <button type=\"submit\" class=\"blob-btn\" style=\"z-index: 0;\">
            SIGN UP
            <span class=\"blob-btn__inner\">
              <span class=\"blob-btn__blobs\">
                <span class=\"blob-btn__blob\"></span>
                <span class=\"blob-btn__blob\"></span>
                <span class=\"blob-btn__blob\"></span>
                <span class=\"blob-btn__blob\"></span>
              </span>
            </span>
          </button>
          <br/>
      </div>
        
        <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\">
          <defs>
            <filter id=\"goo\">
              <feGaussianBlur in=\"SourceGraphic\" result=\"blur\" stdDeviation=\"10\"></feGaussianBlur>
              <feColorMatrix in=\"blur\" mode=\"matrix\" values=\"1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7\" result=\"goo\"></feColorMatrix>
              <feBlend in2=\"goo\" in=\"SourceGraphic\" result=\"mix\"></feBlend>
            </filter>
          </defs>
        </svg>

          {{form_end(form)}}

            
        </div>

                
            </div>
        </form>
        
        <div id=\"alert-area\" class=\"alert-area\"></div>

      </div>
    </div>
</div>
</div>



<div id=\"conditions-generales\" class=\"modal-window\">
  <div>
    <a href=\"#\" title=\"Close\" class=\"modal-close\">Fermer</a>
    <h1>Mentions légales</h1>
    <p>Cette page décrit les mentions légales qui s'appliquent à tout internaute visitant ce site. En le consultant vous vous engagez sans réserve à les respecter. Les mentions légales pouvant être modifiées à tout moment et sans préavis, nous vous invitons à les consulter régulièrement.</p>
    <h2>Conditions d'utilisation</h2>
    <p>Notre site n'est en aucun cas responsable du contenu généré par l'utilisateur. Le contenu posté exprime les opinions de leur auteur seulement. Les textes et messages publiés sont la propriété de ceux qui les postent. Nous faisons notre possible pour modérer les propos inappropriés qui pourraient être postés ici, mais nous nous dégageons de toute responsabilité sur ce que vous postez. Vous demeurez le seul responsable de vos actes et de vos messages au regard de la loi.

      Vous acceptez de ne pas utiliser le service pour poster ou lier vers un contenu qui est diffamatoire, injurieux, haineux, menaçant, spams ou pourriels, étant de nature à offenser, ayant un contenu réservé aux adultes ou répréhensible, contenant des renseignements personnels des autres, risquant de violer les droits d'auteurs, encourageant une activité illégale ou contraire à toutes les lois.
      
      Le respect est la principale qualité de notre communauté. Tout manque de respect à l'encontre d'un membre, néophyte ou non, entraînera également des sanctions, à savoir avertissements, bannissements voire poursuites selon la gravité de la situation.
      
      notre site décline toute responsabilité concernant les rencontres réelles.</p>

      <h2>Informations nominatives et données personnelles</h2>

      <p>Notre site ne divulguera pas à des tiers les données personnelles vous concernant que vous pourriez lui communiquer. Elles ne seront utilisées que dans le but de vous répondre le plus efficacement possible.</p>
   
        <h2>Dispositions juridictionnelles</h2>

        <p>Le site et son contenu sont régis par le Droit Français, et tout litige éventuel s'y rapportant sera soumis à la compétence des tribunaux français.</p>

    </div>
</div>

<footer>
\t<div class=\"footer-flex\" style=\"position: relative;top: 50px;\">
\t\t<ul class=\"footer-infos\">
\t\t\t<li><i class=\"fas fa-phone-alt\"></i><span>06 09 98 98 98</span></li>
\t\t\t<li><i class=\"fas fa-envelope\"></i><span>email@gmail.com</span></li>
\t\t\t<li><i class=\"fas fa-map-marker-alt\"></i><span>Rennes, France</span></li>
\t\t</ul>
\t\t<div class=\"footer-links\">
\t\t\t<a target=\"_ublank\" href=\"https://github.com/ilyass200\"><i class=\"fab fa-github\"></i></a>
\t\t\t<a target=\"_ublank\" href=\"https://www.linkedin.com/in/ilyass-ajdaini\"><i class=\"fab fa-linkedin-in\"></i></a>
\t\t</div>
\t</div>
\t<div class=\"copyright\">
\t\t<center>
\t\t\t<p>© 2019 copyright AJDAINI ILYASS</p>
\t\t</center>
\t</div>
</footer>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<script src=\"{{ asset('js/alert_box.js') }}\"></script>
<script>
</script>



<script>

var alertbox = new AlertBox('#alert-area', {
  closeTime: 5000,
  persistent: false,
  hideCloseButton: false
});



let form_response = JSON.parse( {{form_response|json_encode|raw }} );
let alert_area = document.querySelector('.alert-area');

if(!form_response.success)
{
  alertbox.show(form_response.message);
  let alert_box = document.querySelector('.alert-box');
  alert_box.classList.add('error')
}
else
{
  alertbox.show(form_response.message);
  let alert_box = document.querySelector('.alert-box');
  alert_box.classList.add('success')
}


var btnRadius = \$('.cd-modal-bg').width()/2,
    left = \$('.cd-modal-bg').offset().left + btnRadius,
    top = \$('.cd-modal-bg').offset().top + btnRadius - \$(window).scrollTop(),
    scale = scaleValue(top, left, btnRadius, \$(window).height(), \$(window).width());

function scaleValue( topValue, leftValue, radiusValue, windowW, windowH) {
   var maxDistHor = ( leftValue > windowW/2) ? leftValue : (windowW - leftValue),
       maxDistVert = ( topValue > windowH/2) ? topValue : (windowH - topValue);
   return Math.ceil(Math.sqrt( Math.pow(maxDistHor, 2) + Math.pow(maxDistVert, 2) )/radiusValue);
}
</script>
</body>
</html>", "./protofolio/registration.html.twig", "/var/www/protofolio/templates/protofolio/registration.html.twig");
    }
}
