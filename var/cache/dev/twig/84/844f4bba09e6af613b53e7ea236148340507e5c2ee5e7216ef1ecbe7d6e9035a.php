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

/* ./protofolio/contact.html.twig */
class __TwigTemplate_58b6258e7f0c6459ac36031e0f25858aca99800a86cd3e00631947c2967f4e87 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./protofolio/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./protofolio/contact.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>contact - AJDAINI ILYASS</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/contact.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/modal.css"), "html", null, true);
        echo "\">
\t<!-- local fonts -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fonts/style.css"), "html", null, true);
        echo "\">
 \t<!-- font awesome -->
\t <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("librairy/fontawesome-5.12.0/css/all.min.css"), "html", null, true);
        echo "\">
</head>
<body>


<header class=\"box\">
\t<nav>
\t\t<div class=\"logo-container\">
\t\t\t<img src=\"./img/logo.png\" width=\"100\">
\t\t</div>
\t\t<ul>
\t\t\t";
        // line 23
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) {
            echo "<li class=\"active\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">SE CONNECTER</a></li>";
        }
        // line 24
        echo "\t\t\t<li class=\"active\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">ACCUEIL</a></li>
\t\t</ul>
\t</nav>
\t
\t<div class=\"back-img\">
\t\t\t\t<div id=\"contact-text\">
\t\t\t\t\t<h1>CONTACTEZ MOI !</h1>
\t\t\t\t\t<p style=\"margin-top: -20px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>sed do eiusmod
\t\t\t\t\ttempor incididunt ut labore et dolore magna aliqua.</p>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t   \t\t\t<img src=\"../img/hiclipart.com.png\" width=\"300\" style=\"position: absolute; right: 0;\">
\t\t\t\t</div>
\t</div>

</header>

<main>

\t";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["continue"]) || array_key_exists("continue", $context) ? $context["continue"] : (function () { throw new RuntimeError('Variable "continue" does not exist.', 43, $this->source); })()), "status", [], "array", false, false, false, 43)) {
            // line 44
            echo "
\t\t";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 46
                echo "\t\t<div class=\"alert error\"><i class=\"fas fa-times-circle\" style=\"font-size: 30px; padding-right: 6px; position: relative; top: 5px;\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 46), "html", null, true);
                echo "</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "
\t\t";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors_contact"]) || array_key_exists("errors_contact", $context) ? $context["errors_contact"] : (function () { throw new RuntimeError('Variable "errors_contact" does not exist.', 49, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 50
                echo "\t\t<div class=\"alert error\"><i class=\"fas fa-times-circle\" style=\"font-size: 30px; padding-right: 6px; position: relative; top: 5px;\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 50), "html", null, true);
                echo "</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "
\t";
        } else {
            // line 54
            echo "\t
\t<div class=\"alert error\"><i class=\"fas fa-times-circle\" style=\"font-size: 30px; padding-right: 6px; position: relative; top: 5px;\"></i> ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["continue"]) || array_key_exists("continue", $context) ? $context["continue"] : (function () { throw new RuntimeError('Variable "continue" does not exist.', 55, $this->source); })()), "message", [], "array", false, false, false, 55), "html", null, true);
            echo "</div>

\t";
        }
        // line 58
        echo "
\t";
        // line 59
        if ((isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 59, $this->source); })())) {
            // line 60
            echo "\t<div class=\"alert success\"><i class=\"fas fa-check-circle\" style=\"font-size: 30px; padding-right: 6px; position: relative; top: 5px;\"></i>votre message a bien été envoyé !</div>
\t";
        }
        // line 62
        echo "
\t";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_start');
        echo "
\t";
        // line 64
        $context["sujet"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "sujet", [], "any", false, false, false, 64);
        // line 65
        echo "\t";
        $context["ville"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "ville", [], "any", false, false, false, 65);
        // line 66
        echo "\t";
        $context["message"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "message", [], "any", false, false, false, 66);
        // line 67
        echo "

\t";
        // line 69
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69)) {
            // line 70
            echo "
\t<div class=\"input-group \">
\t\t<label for=\"nom\">Nom</label>
\t\t<input type=\"text\" id=\"nom\" name=\"nom\" />
\t</div>

\t<div class=\"input-group \">
\t\t<label for=\"prenom\">Prenom</label>
\t\t<input type=\"text\" id=\"prenom\" name=\"prenom\" />
\t</div>

\t<div class=\"input-group \">
\t\t<label for=\"email\">Email</label>
\t\t<input type=\"text\" id=\"email\" name=\"email\" />
\t</div>

\t";
        }
        // line 87
        echo "

\t<div class=\"input-group ";
        // line 89
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 89, $this->source); })()), "vars", [], "any", false, false, false, 89), "valid", [], "any", false, false, false, 89)) {
            echo "error";
        }
        echo "\">
\t\t";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 90, $this->source); })()), 'label');
        echo "
\t\t";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 91, $this->source); })()), 'widget');
        echo "
\t</div>

\t<div class=\"input-group ";
        // line 94
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ville"]) || array_key_exists("ville", $context) ? $context["ville"] : (function () { throw new RuntimeError('Variable "ville" does not exist.', 94, $this->source); })()), "vars", [], "any", false, false, false, 94), "valid", [], "any", false, false, false, 94)) {
            echo "error";
        }
        echo "\">
\t\t";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["ville"]) || array_key_exists("ville", $context) ? $context["ville"] : (function () { throw new RuntimeError('Variable "ville" does not exist.', 95, $this->source); })()), 'label');
        echo "
\t\t";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["ville"]) || array_key_exists("ville", $context) ? $context["ville"] : (function () { throw new RuntimeError('Variable "ville" does not exist.', 96, $this->source); })()), 'widget');
        echo "
\t</div>

\t<div class=\"input-group ";
        // line 99
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 99, $this->source); })()), "vars", [], "any", false, false, false, 99), "valid", [], "any", false, false, false, 99)) {
            echo "error";
        }
        echo "\">
\t\t";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 100, $this->source); })()), 'label');
        echo "
\t\t";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 101, $this->source); })()), 'widget');
        echo "
\t</div>\t


\t<div id=\"checkbox-box\" style=\"font-family: 'Gilroy-Bold ☞';\">
\t\t<input id=\"conditions\" type=\"checkbox\" name=\"conditions\" style=\"display: none;\">
\t\t<label for=\"conditions\" class=\"toggle\"><span></span></label>
\t\t<p style=\"color: #525151;\"><i style=\"color: #D96262\" class=\"fas fa-exclamation-triangle\"></i> J'autorise ce site à conserver mes donneés personnelles transmises via ce formulaire.
\t\t\tAucune exploitation commerciale ne sera faite des données conservées.
\t\t\tVoir <a href=\"#conditions-generales\">notre politique de gestion des données personnelles.</a></p>

\t</div> \t

\t";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "valid", [], "any", false, false, false, 114), 'widget', ["attr" => ["class" => "button_msg"]]);
        echo "

\t";
        // line 116
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), 'form_end');
        echo "

      \t
</main>

<div id=\"conditions-generales\" class=\"modal-window\">
\t<div>
\t  <a href=\"#\" title=\"Close\" class=\"modal-close\">Fermer</a>
\t  <h1>Mentions légales</h1>
\t  <p>Cette page décrit les mentions légales qui s'appliquent à tout internaute visitant ce site. En le consultant vous vous engagez sans réserve à les respecter. Les mentions légales pouvant être modifiées à tout moment et sans préavis, nous vous invitons à les consulter régulièrement.</p>
\t  <h2>Conditions d'utilisation</h2>
\t  <p>Notre site n'est en aucun cas responsable du contenu généré par l'utilisateur. Le contenu posté exprime les opinions de leur auteur seulement. Les textes et messages publiés sont la propriété de ceux qui les postent. Nous faisons notre possible pour modérer les propos inappropriés qui pourraient être postés ici, mais nous nous dégageons de toute responsabilité sur ce que vous postez. Vous demeurez le seul responsable de vos actes et de vos messages au regard de la loi.
  
\t\tVous acceptez de ne pas utiliser le service pour poster ou lier vers un contenu qui est diffamatoire, injurieux, haineux, menaçant, spams ou pourriels, étant de nature à offenser, ayant un contenu réservé aux adultes ou répréhensible, contenant des renseignements personnels des autres, risquant de violer les droits d'auteurs, encourageant une activité illégale ou contraire à toutes les lois.
\t\t
\t\tLe respect est la principale qualité de notre communauté. Tout manque de respect à l'encontre d'un membre, néophyte ou non, entraînera également des sanctions, à savoir avertissements, bannissements voire poursuites selon la gravité de la situation.
\t\t
\t\tnotre site décline toute responsabilité concernant les rencontres réelles.</p>
  
\t\t<h2>Informations nominatives et données personnelles</h2>
  
\t\t<p>Notre site ne divulguera pas à des tiers les données personnelles vous concernant que vous pourriez lui communiquer. Elles ne seront utilisées que dans le but de vous répondre le plus efficacement possible.</p>
\t 
\t\t  <h2>Dispositions juridictionnelles</h2>
  
\t\t  <p>Le site et son contenu sont régis par le Droit Français, et tout litige éventuel s'y rapportant sera soumis à la compétence des tribunaux français.</p>
  
\t  </div>
  </div>

  ";
        // line 146
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "user", [], "any", false, false, false, 146)) {
            // line 147
            echo "
  <div class=\"wrapper-circle\">
\t<div class=\"circle pulse\"></div>
\t<a href=\"";
            // line 150
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"circle\">
\t  <span style=\"font-size: 30px; color: rgb(28, 28, 28); position : relative; left: 22px; top: 20px;\"><i class=\"fas fa-sign-out-alt\"></i></span>
\t</a>
  </div>

";
        }
        // line 156
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

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "./protofolio/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 156,  311 => 150,  306 => 147,  304 => 146,  271 => 116,  266 => 114,  250 => 101,  246 => 100,  240 => 99,  234 => 96,  230 => 95,  224 => 94,  218 => 91,  214 => 90,  208 => 89,  204 => 87,  185 => 70,  183 => 69,  179 => 67,  176 => 66,  173 => 65,  171 => 64,  167 => 63,  164 => 62,  160 => 60,  158 => 59,  155 => 58,  149 => 55,  146 => 54,  142 => 52,  133 => 50,  129 => 49,  126 => 48,  117 => 46,  113 => 45,  110 => 44,  108 => 43,  85 => 24,  79 => 23,  65 => 12,  60 => 10,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<title>contact - AJDAINI ILYASS</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/contact.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/modal.css') }}\">
\t<!-- local fonts -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/fonts/style.css') }}\">
 \t<!-- font awesome -->
\t <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('librairy/fontawesome-5.12.0/css/all.min.css') }}\">
</head>
<body>


<header class=\"box\">
\t<nav>
\t\t<div class=\"logo-container\">
\t\t\t<img src=\"./img/logo.png\" width=\"100\">
\t\t</div>
\t\t<ul>
\t\t\t{% if not app.user %}<li class=\"active\"><a href=\"{{ path('app_login') }}\">SE CONNECTER</a></li>{% endif %}
\t\t\t<li class=\"active\"><a href=\"{{ path('index' )}}\">ACCUEIL</a></li>
\t\t</ul>
\t</nav>
\t
\t<div class=\"back-img\">
\t\t\t\t<div id=\"contact-text\">
\t\t\t\t\t<h1>CONTACTEZ MOI !</h1>
\t\t\t\t\t<p style=\"margin-top: -20px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>sed do eiusmod
\t\t\t\t\ttempor incididunt ut labore et dolore magna aliqua.</p>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t   \t\t\t<img src=\"../img/hiclipart.com.png\" width=\"300\" style=\"position: absolute; right: 0;\">
\t\t\t\t</div>
\t</div>

</header>

<main>

\t{% if continue['status'] %}

\t\t{% for error in errors %}
\t\t<div class=\"alert error\"><i class=\"fas fa-times-circle\" style=\"font-size: 30px; padding-right: 6px; position: relative; top: 5px;\"></i> {{error.message}}</div>
\t\t{% endfor %}

\t\t{% for error in errors_contact %}
\t\t<div class=\"alert error\"><i class=\"fas fa-times-circle\" style=\"font-size: 30px; padding-right: 6px; position: relative; top: 5px;\"></i> {{error.message}}</div>
\t\t{% endfor %}

\t{% else %}
\t
\t<div class=\"alert error\"><i class=\"fas fa-times-circle\" style=\"font-size: 30px; padding-right: 6px; position: relative; top: 5px;\"></i> {{continue['message']}}</div>

\t{% endif %}

\t{% if success %}
\t<div class=\"alert success\"><i class=\"fas fa-check-circle\" style=\"font-size: 30px; padding-right: 6px; position: relative; top: 5px;\"></i>votre message a bien été envoyé !</div>
\t{% endif %}

\t{{form_start(form)}}
\t{% set sujet = form.sujet %}
\t{% set ville = form.ville %}
\t{% set message = form.message %}


\t{% if not app.user %}

\t<div class=\"input-group \">
\t\t<label for=\"nom\">Nom</label>
\t\t<input type=\"text\" id=\"nom\" name=\"nom\" />
\t</div>

\t<div class=\"input-group \">
\t\t<label for=\"prenom\">Prenom</label>
\t\t<input type=\"text\" id=\"prenom\" name=\"prenom\" />
\t</div>

\t<div class=\"input-group \">
\t\t<label for=\"email\">Email</label>
\t\t<input type=\"text\" id=\"email\" name=\"email\" />
\t</div>

\t{% endif %}


\t<div class=\"input-group {% if not sujet.vars.valid %}error{% endif %}\">
\t\t{{ form_label(sujet) }}
\t\t{{ form_widget(sujet) }}
\t</div>

\t<div class=\"input-group {% if not ville.vars.valid %}error{% endif %}\">
\t\t{{ form_label(ville) }}
\t\t{{ form_widget(ville) }}
\t</div>

\t<div class=\"input-group {% if not message.vars.valid %}error{% endif %}\">
\t\t{{ form_label(message) }}
\t\t{{ form_widget(message) }}
\t</div>\t


\t<div id=\"checkbox-box\" style=\"font-family: 'Gilroy-Bold ☞';\">
\t\t<input id=\"conditions\" type=\"checkbox\" name=\"conditions\" style=\"display: none;\">
\t\t<label for=\"conditions\" class=\"toggle\"><span></span></label>
\t\t<p style=\"color: #525151;\"><i style=\"color: #D96262\" class=\"fas fa-exclamation-triangle\"></i> J'autorise ce site à conserver mes donneés personnelles transmises via ce formulaire.
\t\t\tAucune exploitation commerciale ne sera faite des données conservées.
\t\t\tVoir <a href=\"#conditions-generales\">notre politique de gestion des données personnelles.</a></p>

\t</div> \t

\t{{ form_widget(form.valid,{'attr':{'class':'button_msg'}})}}

\t{{form_end(form)}}

      \t
</main>

<div id=\"conditions-generales\" class=\"modal-window\">
\t<div>
\t  <a href=\"#\" title=\"Close\" class=\"modal-close\">Fermer</a>
\t  <h1>Mentions légales</h1>
\t  <p>Cette page décrit les mentions légales qui s'appliquent à tout internaute visitant ce site. En le consultant vous vous engagez sans réserve à les respecter. Les mentions légales pouvant être modifiées à tout moment et sans préavis, nous vous invitons à les consulter régulièrement.</p>
\t  <h2>Conditions d'utilisation</h2>
\t  <p>Notre site n'est en aucun cas responsable du contenu généré par l'utilisateur. Le contenu posté exprime les opinions de leur auteur seulement. Les textes et messages publiés sont la propriété de ceux qui les postent. Nous faisons notre possible pour modérer les propos inappropriés qui pourraient être postés ici, mais nous nous dégageons de toute responsabilité sur ce que vous postez. Vous demeurez le seul responsable de vos actes et de vos messages au regard de la loi.
  
\t\tVous acceptez de ne pas utiliser le service pour poster ou lier vers un contenu qui est diffamatoire, injurieux, haineux, menaçant, spams ou pourriels, étant de nature à offenser, ayant un contenu réservé aux adultes ou répréhensible, contenant des renseignements personnels des autres, risquant de violer les droits d'auteurs, encourageant une activité illégale ou contraire à toutes les lois.
\t\t
\t\tLe respect est la principale qualité de notre communauté. Tout manque de respect à l'encontre d'un membre, néophyte ou non, entraînera également des sanctions, à savoir avertissements, bannissements voire poursuites selon la gravité de la situation.
\t\t
\t\tnotre site décline toute responsabilité concernant les rencontres réelles.</p>
  
\t\t<h2>Informations nominatives et données personnelles</h2>
  
\t\t<p>Notre site ne divulguera pas à des tiers les données personnelles vous concernant que vous pourriez lui communiquer. Elles ne seront utilisées que dans le but de vous répondre le plus efficacement possible.</p>
\t 
\t\t  <h2>Dispositions juridictionnelles</h2>
  
\t\t  <p>Le site et son contenu sont régis par le Droit Français, et tout litige éventuel s'y rapportant sera soumis à la compétence des tribunaux français.</p>
  
\t  </div>
  </div>

  {% if app.user %}

  <div class=\"wrapper-circle\">
\t<div class=\"circle pulse\"></div>
\t<a href=\"{{ path('logout') }}\" class=\"circle\">
\t  <span style=\"font-size: 30px; color: rgb(28, 28, 28); position : relative; left: 22px; top: 20px;\"><i class=\"fas fa-sign-out-alt\"></i></span>
\t</a>
  </div>

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

</body>
</html>", "./protofolio/contact.html.twig", "/var/www/protofolio/templates/protofolio/contact.html.twig");
    }
}
