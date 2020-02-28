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

/* ./protofolio/index.html.twig */
class __TwigTemplate_618d00a986649b0696b6b4f7d44d214fd21337daa14f50745ac90f043e79496e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./protofolio/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./protofolio/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>AJDAIN ILYASS</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<!-- google fonts -->
\t<link href=\"https://fonts.googleapis.com/css?family=Fredoka+One&display=swap\" rel=\"stylesheet\">
 \t<link href=\"https://fonts.googleapis.com/css?family=Roboto&display=swap\" rel=\"stylesheet\">
 \t<link href=\"https://fonts.googleapis.com/css?family=Quicksand&display=swap\" rel=\"stylesheet\">
\t<link href=\"https://fonts.googleapis.com/css?family=Comfortaa&display=swap\" rel=\"stylesheet\">
\t<link href=\"https://fonts.googleapis.com/css?family=Fredoka+One&display=swap\" rel=\"stylesheet\">
\t<link href=\"https://fonts.googleapis.com/css?family=Hind+Madurai&display=swap\" rel=\"stylesheet\">
\t<link href=\"https://fonts.googleapis.com/css?family=Passion+One&display=swap\" rel=\"stylesheet\">
\t<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
\t<!-- local css -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/modal.css"), "html", null, true);
        echo "\">
\t<!-- local fonts -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fonts/style.css"), "html", null, true);
        echo "\">
 \t<!-- font awesome -->
 \t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("librairy/fontawesome-5.12.0/css/all.min.css"), "html", null, true);
        echo "\">
</head>

<body id=\"home\">

<header>
\t<nav>
\t\t<ul>
\t\t\t<li><a href=\"#about-me\"><i class=\"fas fa-user-tie\"></i></a></li>
\t\t\t<li><a href=\"#skills\"><i class=\"fas fa-code\"></i></a></li>
\t\t\t<li><a href=\"#graduations\"><i class=\"fas fa-graduation-cap\"></i></a></li>
\t\t\t<li><a href=\"#hobbies\"><i class=\"fas fa-biking\"></i></a></li>
\t\t\t<li><a href=\"#languages\"><i class=\"fas fa-language\"></i></a></li>
\t\t\t<li><a href=\"#projets\"><i class=\"fas fa-project-diagram\"></i></a></li>
\t\t</ul>
\t</nav>
\t\t<div id=\"header-content\" class=\"header-content\">
\t\t\t<img src=\"./img/Sans titre-11.png\">
\t\t\t<h3><span style=\"color: #a8a349;\">\"HELLO</span> WORLD,<br>i'm web <span style=\"color: #a8a349;\">developer.\"</span></h3>
\t\t</div>
\t\t<div id=\"mouse-container\">
\t\t\t<center>
\t\t\t\t<span><i class=\"fas fa-mouse\"></i></span>
\t\t\t</center>
\t\t</div>
</header>


<div id=\"about-me\" class=\"info-container\">
<hr>
\t<center>
\t\t<h2>QUI SUIS-JE ?</h2>
\t</center>
\t
\t\t<div class=\"info-box\">
\t\t\t<div class=\"info-box-1\">
\t\t\t\t<span ><i class=\"fas fa-question-circle\"></i></span>
\t\t\t\t<img src=\"./img/14650776_340516429628249_7341851507964216583_n.png\" width=\"299\">
\t\t\t</div>
\t\t\t<div class=\"info-box-2\">
\t\t\t\t<p>
\t\t\t\t\t<span>\"</span><span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span>\"</span>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>

\t<div class=\"more-button-container\">
\t\t<center>
\t\t<button class=\"more-button active\">PLUS</button>\t
\t\t</center>

\t\t<div class=\"more-container\">
\t\t\t<p>
\t\t\t\t<span>\"</span><span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span>\"</span>
\t\t\t</p>
\t\t</div>

\t</div>

</div>


<div id=\"skills\" class=\"info-container\">
<hr>
\t<center>
\t\t<h2>COMPETENCES</h2>
\t</center>
\t
\t<div class=\"info-box\">

\t<div class=\"info-box-1\">
\t\t<span ><i class=\"fas fa-code\"></i></span>
\t\t<img src=\"./img/skills-img.png\" width=\"299\">
\t</div>
\t<div class=\"info-box-2\">
\t\t<p>
\t\t\t<span>\"</span><span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span>\"</span>
\t\t</p>
\t</div>

\t</div>
</div>

<div id=\"graduations\" class=\"info-container\">
<hr>
\t<center>
\t\t<h2>FORMATIONS</h2>
\t</center>
\t
\t<div class=\"info-box\">

\t<div class=\"info-box-1\">
\t\t<span ><i class=\"fas fa-graduation-cap\"></i></span>
\t\t<img src=\"./img/graduation-img.png\" width=\"299\">
\t</div>
\t<div class=\"info-box-2\">
\t\t<p>
\t\t\t<span>\"</span><span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span>\"</span>
\t\t</p>
\t</div>

\t</div>
</div>

<div id=\"hobbies\" class=\"info-container\">
<hr>
\t<center>
\t\t<h2>LOISIRS</h2>
\t</center>
\t
\t<div class=\"info-box\">

\t<div class=\"info-box-1\">
\t\t<span><i class=\"fas fa-biking\"></i></a></span>
\t\t<img src=\"./img/hobbies-img.png\" width=\"299\">
\t</div>
\t<div class=\"info-box-2\">
\t\t<p>
\t\t\t<span>\"</span><span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span>\"</span>
\t\t</p>
\t</div>

\t</div>
</div>

<div id=\"languages\" class=\"info-container\">
<hr>
\t<center>
\t\t<h2>LANGUES</h2>
\t</center>
\t
\t<div class=\"info-box\">

\t<div class=\"info-box-1\">
\t\t<span><i class=\"fas fa-language\"></i></a></span>
\t\t<img src=\"./img/languages-img.png\" width=\"299\">
\t</div>
\t<div class=\"info-box-2\">
\t\t<p>
\t\t\t<span>\"</span><span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span>\"</span>
\t\t</p>
\t</div>

\t</div>
</div>

<div id=\"projets\" class=\"info-container\">
<hr>
\t<center>
\t\t<h2>PROJETS</h2>
\t</center>
\t
\t<div class=\"info-box\">

\t\t<div class=\"info-box-1\">
\t\t\t<span><i class=\"fas fa-project-diagram\"></i></a></span>
\t\t\t<img src=\"./img/projects-img.png\" width=\"299\">
\t\t</div>

\t\t<div class=\"info-box-2\">
\t\t\t<p>
\t\t\t\t<span>\"</span><span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span>\"</span>
\t\t\t</p>
\t\t</div>

\t</div>
</div>

<div id=\"languages\" class=\"info-container\">
\t<hr>
\t\t<center>
\t\t\t<h2>AVIS</h2>
\t\t</center>
\t\t
\t\t<div class=\"info-box\">
\t
\t\t<div class=\"info-box-1\">
\t\t\t<span><i class=\"fas fa-check-double\"></i></span>
\t\t\t<img src=\"./img/languages-img.png\" width=\"299\">
\t\t</div>
\t\t<div class=\"info-box-2 avis_container\" style=\"position: relative;\">
\t\t\t\t";
        // line 238
        if (-1 === twig_compare(twig_length_filter($this->env, (isset($context["accepte_avs"]) || array_key_exists("accepte_avs", $context) ? $context["accepte_avs"] : (function () { throw new RuntimeError('Variable "accepte_avs" does not exist.', 238, $this->source); })())), 1)) {
            // line 239
            echo "
\t\t\t\t<h1 style=\"margin-top: 60px; color: #474747;\">aucun avis pour le moment</h1>

\t\t\t\t";
        } else {
            // line 243
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["accepte_avs"]) || array_key_exists("accepte_avs", $context) ? $context["accepte_avs"] : (function () { throw new RuntimeError('Variable "accepte_avs" does not exist.', 243, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
                // line 244
                echo "\t\t\t\t<div class=\"avis_content\">
\t\t\t\t<p>
\t\t\t\t<strong><span>Nom de l'auteur : </span> ";
                // line 246
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["avis"], "idPersonne", [], "any", false, false, false, 246), "nomPrs", [], "any", false, false, false, 246), "html", null, true);
                echo "</strong><br>
\t\t\t\t<strong><span>Prenom de l'auteur : </span> ";
                // line 247
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["avis"], "idPersonne", [], "any", false, false, false, 247), "prenomPrs", [], "any", false, false, false, 247), "html", null, true);
                echo "</strong><br>
\t\t\t\t<strong><span>Avis : </span> ";
                // line 248
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "contenuAvs", [], "any", false, false, false, 248), "html", null, true);
                echo "</strong>
\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 253
            echo "\t\t\t\t";
        }
        // line 254
        echo "\t\t</div>
\t
\t\t</div>

\t\t<center>
\t\t\t<div class=\"btn-links-container\">
\t\t\t<a class=\"contact-btn\" href=\"";
        // line 260
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 260, $this->source); })()), "user", [], "any", false, false, false, 260)) {
            echo "#ajouter-un-avis";
        } else {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        }
        echo "\">AJOUTER UN AVIS</a>
\t\t\t<a class=\"contact-btn\" href=\"";
        // line 261
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">ME CONTACTER</a>
\t\t\t</div>
\t\t</center>
\t</div>


";
        // line 267
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 267, $this->source); })()), "user", [], "any", false, false, false, 267)) {
            // line 268
            echo "
<div id=\"ajouter-un-avis\" class=\"modal-window\">
\t<div style=\"background: #EEEEEE;\">
\t  <a href=\"#\" title=\"Close\" class=\"modal-close\">Fermer</a>
\t  <h1>Ajouter un avis</h1>
\t  <p style=\"color: #E36767;\"><i class=\"fas fa-exclamation-triangle\"></i> Votre avis serra d'abord analyser avant d’être publié pour empêcher dans l'avenir la diffusion de contenu inapproprié ou encore lutter contre les spams</p>
\t  ";
            // line 274
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 274, $this->source); })()), 'form_start');
            echo "

\t  <div class=\"wrapper\">

\t\t";
            // line 278
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 278, $this->source); })()), "contenu_avs", [], "any", false, false, false, 278), "vars", [], "any", false, false, false, 278), "valid", [], "any", false, false, false, 278)) {
                // line 279
                echo "
\t\t";
                // line 280
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 280, $this->source); })()), "contenu_avs", [], "any", false, false, false, 280), 'widget', ["attr" => ["maxlength" => "500", "placeholder" => "Laisser un avis...", "autofocus" => ""]]);
                // line 281
                echo "
\t\t
\t\t";
            } else {
                // line 284
                echo "
\t\t";
                // line 285
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 285, $this->source); })()), "contenu_avs", [], "any", false, false, false, 285), 'widget', ["attr" => ["style" => "border: 1px #E36767 solid;", "maxlength" => "500", "placeholder" => "Laisser un avis...", "autofocus" => ""]]);
                // line 286
                echo "

\t\t";
            }
            // line 289
            echo "
\t  <div id=\"the-count\">
\t\t<span id=\"current\">0</span>
\t\t<span id=\"maximum\">/ 500</span>
\t  </div>
\t</div>

\t<p style=\"margin-bottom: 5px; color: #E36767;\">";
            // line 296
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 296, $this->source); })()), "contenu_avs", [], "any", false, false, false, 296), "vars", [], "any", false, false, false, 296), "errors", [], "any", false, false, false, 296), ["ERROR:" => ""]), "html", null, true);
            echo "</p>



\t<button type=\"submit\" class=\"button-success\">Envoyer</button>

\t  ";
            // line 302
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 302, $this->source); })()), 'form_end');
            echo "
\t  </div>
  </div>

  <div id=\"alert-area\" class=\"alert-area\"></div>

";
        }
        // line 309
        echo "

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


";
        // line 331
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 331, $this->source); })()), "user", [], "any", false, false, false, 331)) {
            // line 332
            echo "
\t<div class=\"wrapper-circle\" style=\"position: fixed ; bottom: 30px; left: 30px;\">
\t  <div class=\"circle pulse\"></div>
\t  <a href=\"";
            // line 335
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"circle\">
\t\t<span style=\"font-size: 30px; color: rgb(28, 28, 28); position : relative; left: 22px; top: 20px;\"><i class=\"fas fa-sign-out-alt\"></i></span>
\t  </a>
\t</div>

";
        }
        // line 341
        echo "

";
        // line 343
        if ((isset($context["first_connection"]) || array_key_exists("first_connection", $context) ? $context["first_connection"] : (function () { throw new RuntimeError('Variable "first_connection" does not exist.', 343, $this->source); })())) {
            // line 344
            echo "
<div id=\"alert-area\" class=\"alert-area\"></div>

";
        }
        // line 348
        echo "
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/alert_box.js"), "html", null, true);
        echo "\"></script>
<script>

\$('textarea').keyup(function() {
    
\tvar characterCount = \$(this).val().length,
\t\tcurrent = \$('#current'),
\t\tmaximum = \$('#maximum'),
\t\ttheCount = \$('#the-count');
\t  
\tcurrent.text(characterCount);
   
\t
\t/*This isn't entirely necessary, just playin around*/
\tif (characterCount < 70) {
\t  current.css('color', '#666');
\t}
\tif (characterCount > 70 && characterCount < 90) {
\t  current.css('color', '#6d5555');
\t}
\tif (characterCount > 90 && characterCount < 100) {
\t  current.css('color', '#793535');
\t}
\tif (characterCount > 100 && characterCount < 120) {
\t  current.css('color', '#841c1c');
\t}
\tif (characterCount > 120 && characterCount < 139) {
\t  current.css('color', '#8f0001');
\t}
\t
\tif (characterCount >= 470) {
\t  maximum.css('color', '#8f0001');
\t  current.css('color', '#8f0001');
\t  theCount.css('font-weight','bold');
\t} else {
\t  maximum.css('color','#666');
\t  theCount.css('font-weight','normal');
\t}
\t
\t\t
  });
  
var alert = document.querySelector('.alert');

var alertbox = new AlertBox('#alert-area', {
  closeTime: 5000,
  persistent: false,
  hideCloseButton: false
});



let form_response = JSON.parse( ";
        // line 403
        echo json_encode((isset($context["form_response"]) || array_key_exists("form_response", $context) ? $context["form_response"] : (function () { throw new RuntimeError('Variable "form_response" does not exist.', 403, $this->source); })()));
        echo " );
let alert_area = document.querySelector('.alert-area');

if(form_response.success)
{  
  alertbox.show(form_response.message);
  let alert_box = document.querySelector('.alert-box');
  alert_box.classList.add('success')
}

";
        // line 413
        if ((isset($context["first_connection"]) || array_key_exists("first_connection", $context) ? $context["first_connection"] : (function () { throw new RuntimeError('Variable "first_connection" does not exist.', 413, $this->source); })())) {
            // line 414
            echo "
alertbox.show(\"Hey, Bienvenue dans mon portfolio !\");
let alert_box = document.querySelector('.alert-box');
alert_box.classList.add('success')

";
        }
        // line 420
        echo "
</script>



</body>
</html>
\t";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "./protofolio/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  563 => 420,  555 => 414,  553 => 413,  540 => 403,  485 => 351,  481 => 350,  477 => 348,  471 => 344,  469 => 343,  465 => 341,  456 => 335,  451 => 332,  449 => 331,  425 => 309,  415 => 302,  406 => 296,  397 => 289,  392 => 286,  390 => 285,  387 => 284,  382 => 281,  380 => 280,  377 => 279,  375 => 278,  368 => 274,  360 => 268,  358 => 267,  349 => 261,  341 => 260,  333 => 254,  330 => 253,  319 => 248,  315 => 247,  311 => 246,  307 => 244,  302 => 243,  296 => 239,  294 => 238,  75 => 22,  70 => 20,  65 => 18,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<title>AJDAIN ILYASS</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<!-- google fonts -->
\t<link href=\"https://fonts.googleapis.com/css?family=Fredoka+One&display=swap\" rel=\"stylesheet\">
 \t<link href=\"https://fonts.googleapis.com/css?family=Roboto&display=swap\" rel=\"stylesheet\">
 \t<link href=\"https://fonts.googleapis.com/css?family=Quicksand&display=swap\" rel=\"stylesheet\">
\t<link href=\"https://fonts.googleapis.com/css?family=Comfortaa&display=swap\" rel=\"stylesheet\">
\t<link href=\"https://fonts.googleapis.com/css?family=Fredoka+One&display=swap\" rel=\"stylesheet\">
\t<link href=\"https://fonts.googleapis.com/css?family=Hind+Madurai&display=swap\" rel=\"stylesheet\">
\t<link href=\"https://fonts.googleapis.com/css?family=Passion+One&display=swap\" rel=\"stylesheet\">
\t<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
\t<!-- local css -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/style.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/modal.css') }}\">
\t<!-- local fonts -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/fonts/style.css') }}\">
 \t<!-- font awesome -->
 \t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('librairy/fontawesome-5.12.0/css/all.min.css') }}\">
</head>

<body id=\"home\">

<header>
\t<nav>
\t\t<ul>
\t\t\t<li><a href=\"#about-me\"><i class=\"fas fa-user-tie\"></i></a></li>
\t\t\t<li><a href=\"#skills\"><i class=\"fas fa-code\"></i></a></li>
\t\t\t<li><a href=\"#graduations\"><i class=\"fas fa-graduation-cap\"></i></a></li>
\t\t\t<li><a href=\"#hobbies\"><i class=\"fas fa-biking\"></i></a></li>
\t\t\t<li><a href=\"#languages\"><i class=\"fas fa-language\"></i></a></li>
\t\t\t<li><a href=\"#projets\"><i class=\"fas fa-project-diagram\"></i></a></li>
\t\t</ul>
\t</nav>
\t\t<div id=\"header-content\" class=\"header-content\">
\t\t\t<img src=\"./img/Sans titre-11.png\">
\t\t\t<h3><span style=\"color: #a8a349;\">\"HELLO</span> WORLD,<br>i'm web <span style=\"color: #a8a349;\">developer.\"</span></h3>
\t\t</div>
\t\t<div id=\"mouse-container\">
\t\t\t<center>
\t\t\t\t<span><i class=\"fas fa-mouse\"></i></span>
\t\t\t</center>
\t\t</div>
</header>


<div id=\"about-me\" class=\"info-container\">
<hr>
\t<center>
\t\t<h2>QUI SUIS-JE ?</h2>
\t</center>
\t
\t\t<div class=\"info-box\">
\t\t\t<div class=\"info-box-1\">
\t\t\t\t<span ><i class=\"fas fa-question-circle\"></i></span>
\t\t\t\t<img src=\"./img/14650776_340516429628249_7341851507964216583_n.png\" width=\"299\">
\t\t\t</div>
\t\t\t<div class=\"info-box-2\">
\t\t\t\t<p>
\t\t\t\t\t<span>\"</span><span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span>\"</span>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>

\t<div class=\"more-button-container\">
\t\t<center>
\t\t<button class=\"more-button active\">PLUS</button>\t
\t\t</center>

\t\t<div class=\"more-container\">
\t\t\t<p>
\t\t\t\t<span>\"</span><span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span>\"</span>
\t\t\t</p>
\t\t</div>

\t</div>

</div>


<div id=\"skills\" class=\"info-container\">
<hr>
\t<center>
\t\t<h2>COMPETENCES</h2>
\t</center>
\t
\t<div class=\"info-box\">

\t<div class=\"info-box-1\">
\t\t<span ><i class=\"fas fa-code\"></i></span>
\t\t<img src=\"./img/skills-img.png\" width=\"299\">
\t</div>
\t<div class=\"info-box-2\">
\t\t<p>
\t\t\t<span>\"</span><span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span>\"</span>
\t\t</p>
\t</div>

\t</div>
</div>

<div id=\"graduations\" class=\"info-container\">
<hr>
\t<center>
\t\t<h2>FORMATIONS</h2>
\t</center>
\t
\t<div class=\"info-box\">

\t<div class=\"info-box-1\">
\t\t<span ><i class=\"fas fa-graduation-cap\"></i></span>
\t\t<img src=\"./img/graduation-img.png\" width=\"299\">
\t</div>
\t<div class=\"info-box-2\">
\t\t<p>
\t\t\t<span>\"</span><span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span>\"</span>
\t\t</p>
\t</div>

\t</div>
</div>

<div id=\"hobbies\" class=\"info-container\">
<hr>
\t<center>
\t\t<h2>LOISIRS</h2>
\t</center>
\t
\t<div class=\"info-box\">

\t<div class=\"info-box-1\">
\t\t<span><i class=\"fas fa-biking\"></i></a></span>
\t\t<img src=\"./img/hobbies-img.png\" width=\"299\">
\t</div>
\t<div class=\"info-box-2\">
\t\t<p>
\t\t\t<span>\"</span><span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span>\"</span>
\t\t</p>
\t</div>

\t</div>
</div>

<div id=\"languages\" class=\"info-container\">
<hr>
\t<center>
\t\t<h2>LANGUES</h2>
\t</center>
\t
\t<div class=\"info-box\">

\t<div class=\"info-box-1\">
\t\t<span><i class=\"fas fa-language\"></i></a></span>
\t\t<img src=\"./img/languages-img.png\" width=\"299\">
\t</div>
\t<div class=\"info-box-2\">
\t\t<p>
\t\t\t<span>\"</span><span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span>\"</span>
\t\t</p>
\t</div>

\t</div>
</div>

<div id=\"projets\" class=\"info-container\">
<hr>
\t<center>
\t\t<h2>PROJETS</h2>
\t</center>
\t
\t<div class=\"info-box\">

\t\t<div class=\"info-box-1\">
\t\t\t<span><i class=\"fas fa-project-diagram\"></i></a></span>
\t\t\t<img src=\"./img/projects-img.png\" width=\"299\">
\t\t</div>

\t\t<div class=\"info-box-2\">
\t\t\t<p>
\t\t\t\t<span>\"</span><span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span>\"</span>
\t\t\t</p>
\t\t</div>

\t</div>
</div>

<div id=\"languages\" class=\"info-container\">
\t<hr>
\t\t<center>
\t\t\t<h2>AVIS</h2>
\t\t</center>
\t\t
\t\t<div class=\"info-box\">
\t
\t\t<div class=\"info-box-1\">
\t\t\t<span><i class=\"fas fa-check-double\"></i></span>
\t\t\t<img src=\"./img/languages-img.png\" width=\"299\">
\t\t</div>
\t\t<div class=\"info-box-2 avis_container\" style=\"position: relative;\">
\t\t\t\t{% if accepte_avs|length < 1 %}

\t\t\t\t<h1 style=\"margin-top: 60px; color: #474747;\">aucun avis pour le moment</h1>

\t\t\t\t{% else %}
\t\t\t\t{% for avis in accepte_avs %}
\t\t\t\t<div class=\"avis_content\">
\t\t\t\t<p>
\t\t\t\t<strong><span>Nom de l'auteur : </span> {{avis.idPersonne.nomPrs}}</strong><br>
\t\t\t\t<strong><span>Prenom de l'auteur : </span> {{avis.idPersonne.prenomPrs}}</strong><br>
\t\t\t\t<strong><span>Avis : </span> {{ avis.contenuAvs}}</strong>
\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t{% endfor %}
\t\t\t\t{% endif %}
\t\t</div>
\t
\t\t</div>

\t\t<center>
\t\t\t<div class=\"btn-links-container\">
\t\t\t<a class=\"contact-btn\" href=\"{% if app.user %}#ajouter-un-avis{% else %}{{path('app_login')}}{% endif %}\">AJOUTER UN AVIS</a>
\t\t\t<a class=\"contact-btn\" href=\"{{ path('contact') }}\">ME CONTACTER</a>
\t\t\t</div>
\t\t</center>
\t</div>


{% if app.user %}

<div id=\"ajouter-un-avis\" class=\"modal-window\">
\t<div style=\"background: #EEEEEE;\">
\t  <a href=\"#\" title=\"Close\" class=\"modal-close\">Fermer</a>
\t  <h1>Ajouter un avis</h1>
\t  <p style=\"color: #E36767;\"><i class=\"fas fa-exclamation-triangle\"></i> Votre avis serra d'abord analyser avant d’être publié pour empêcher dans l'avenir la diffusion de contenu inapproprié ou encore lutter contre les spams</p>
\t  {{ form_start(form) }}

\t  <div class=\"wrapper\">

\t\t{% if form.contenu_avs.vars.valid %}

\t\t{{ form_widget(form.contenu_avs, 
\t\t\t{'attr':{'maxlength':\"500\",'placeholder':'Laisser un avis...','autofocus':''}}) }}
\t\t
\t\t{% else %}

\t\t{{ form_widget(form.contenu_avs, 
\t\t\t{'attr':{'style':'border: 1px #E36767 solid;','maxlength':\"500\",'placeholder':'Laisser un avis...','autofocus':''}}) }}

\t\t{% endif %}

\t  <div id=\"the-count\">
\t\t<span id=\"current\">0</span>
\t\t<span id=\"maximum\">/ 500</span>
\t  </div>
\t</div>

\t<p style=\"margin-bottom: 5px; color: #E36767;\">{{form.contenu_avs.vars.errors|replace({'ERROR:':''})}}</p>



\t<button type=\"submit\" class=\"button-success\">Envoyer</button>

\t  {{ form_end(form) }}
\t  </div>
  </div>

  <div id=\"alert-area\" class=\"alert-area\"></div>

{% endif %}


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


{% if app.user %}

\t<div class=\"wrapper-circle\" style=\"position: fixed ; bottom: 30px; left: 30px;\">
\t  <div class=\"circle pulse\"></div>
\t  <a href=\"{{ path('logout') }}\" class=\"circle\">
\t\t<span style=\"font-size: 30px; color: rgb(28, 28, 28); position : relative; left: 22px; top: 20px;\"><i class=\"fas fa-sign-out-alt\"></i></span>
\t  </a>
\t</div>

{% endif %}


{% if first_connection %}

<div id=\"alert-area\" class=\"alert-area\"></div>

{% endif %}

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/script.js') }}\"></script>
<script src=\"{{ asset('js/alert_box.js') }}\"></script>
<script>

\$('textarea').keyup(function() {
    
\tvar characterCount = \$(this).val().length,
\t\tcurrent = \$('#current'),
\t\tmaximum = \$('#maximum'),
\t\ttheCount = \$('#the-count');
\t  
\tcurrent.text(characterCount);
   
\t
\t/*This isn't entirely necessary, just playin around*/
\tif (characterCount < 70) {
\t  current.css('color', '#666');
\t}
\tif (characterCount > 70 && characterCount < 90) {
\t  current.css('color', '#6d5555');
\t}
\tif (characterCount > 90 && characterCount < 100) {
\t  current.css('color', '#793535');
\t}
\tif (characterCount > 100 && characterCount < 120) {
\t  current.css('color', '#841c1c');
\t}
\tif (characterCount > 120 && characterCount < 139) {
\t  current.css('color', '#8f0001');
\t}
\t
\tif (characterCount >= 470) {
\t  maximum.css('color', '#8f0001');
\t  current.css('color', '#8f0001');
\t  theCount.css('font-weight','bold');
\t} else {
\t  maximum.css('color','#666');
\t  theCount.css('font-weight','normal');
\t}
\t
\t\t
  });
  
var alert = document.querySelector('.alert');

var alertbox = new AlertBox('#alert-area', {
  closeTime: 5000,
  persistent: false,
  hideCloseButton: false
});



let form_response = JSON.parse( {{form_response|json_encode|raw }} );
let alert_area = document.querySelector('.alert-area');

if(form_response.success)
{  
  alertbox.show(form_response.message);
  let alert_box = document.querySelector('.alert-box');
  alert_box.classList.add('success')
}

{% if first_connection %}

alertbox.show(\"Hey, Bienvenue dans mon portfolio !\");
let alert_box = document.querySelector('.alert-box');
alert_box.classList.add('success')

{% endif %}

</script>



</body>
</html>
\t", "./protofolio/index.html.twig", "/var/www/protofolio/templates/protofolio/index.html.twig");
    }
}
