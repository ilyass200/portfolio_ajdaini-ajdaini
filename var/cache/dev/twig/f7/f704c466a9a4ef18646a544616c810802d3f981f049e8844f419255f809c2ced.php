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

/* protofolio/login.html.twig */
class __TwigTemplate_897490256a94e121d9319439f317cc0db09958f3ea12642e489c1d77264628c4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "protofolio/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "protofolio/login.html.twig"));

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
</head>

<body>
  ";
        // line 16
        $context["messageError"] = "";
        // line 17
        echo "  ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "  ";
            $context["messageError"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "messageKey", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "messageData", [], "any", false, false, false, 18), "security");
            // line 19
            echo "  ";
        }
        // line 20
        echo "
  <header class=\"box\">
    <nav>
      <div class=\"logo-container\">
        <img src=\"./img/logo.png\" width=\"100\">
      </div>
      <ul>
        <li class=\"active\"><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">ACCUEIL</a></li>
        <li class=\"active\"><a href=\"";
        // line 28
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
      <div style=\"position: relative; top: 10%\">
        <p class=\"login-txt\">Accès membre </p>
        <p class=\"users-icon\"><i class=\"fa fa-users\"></i></p>
        <form method=\"POST\">
            <div style=\"width: 100%; position: relative;\">
       
        <div class=\"centered\">

            <div class=\"group\">
              <input type=\"text\" id=\"email\" name=\"email_prs\" required=\"required\"/>
              <label for=\"email\">Name</label>
              <div class=\"bar\"></div>
            </div>
          
            <div class=\"group\">
                <input type=\"password\" id=\"pwd\" name=\"mdp_prs\" required=\"required\"/>
                <label for=\"pwd\">Password</label>
                <div class=\"bar\"></div>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\"
            value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
     >
            
        </div>

        <center>

          <p class=\"p-account\">Vous n'avez pas de compte ? <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
        echo "\">créer un compte </a></p>
        </center>

            <div class=\"buttons\">
                <button id=\"validation\" class=\"blob-btn\">
                  LOG IN
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
                
            </div>
        </form>

      </div>
    </div>
</div>

</div>

<div id=\"alert-area\" class=\"alert-area\"></div>

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
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/alert_box.js"), "html", null, true);
        echo "\"></script>
<script>

var succ = new Boolean(";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 137, $this->source); })()), "html", null, true);
        echo ");

let message = \"";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["messageError"]) || array_key_exists("messageError", $context) ? $context["messageError"] : (function () { throw new RuntimeError('Variable "messageError" does not exist.', 139, $this->source); })()), "html", null, true);
        echo "\"; 

if(succ == false && message.length > 1)
{
  let alert_area = document.querySelector('.alert-area');

  var alertbox = new AlertBox('#alert-area', {
  closeTime: 5000,
  persistent: false,
  hideCloseButton: false
  });

  
  alertbox.show(message);
  let alert_box = document.querySelector('.alert-box');
  alert_box.classList.add('error')
}




</script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "protofolio/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 139,  214 => 137,  208 => 134,  145 => 74,  135 => 67,  93 => 28,  89 => 27,  80 => 20,  77 => 19,  74 => 18,  71 => 17,  69 => 16,  62 => 12,  57 => 10,  52 => 8,  43 => 1,);
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
</head>

<body>
  {% set messageError = \"\" %}
  {% if error %}
  {% set messageError = error.messageKey|trans(error.messageData, 'security')  %}
  {% endif %}

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
      <div style=\"position: relative; top: 10%\">
        <p class=\"login-txt\">Accès membre </p>
        <p class=\"users-icon\"><i class=\"fa fa-users\"></i></p>
        <form method=\"POST\">
            <div style=\"width: 100%; position: relative;\">
       
        <div class=\"centered\">

            <div class=\"group\">
              <input type=\"text\" id=\"email\" name=\"email_prs\" required=\"required\"/>
              <label for=\"email\">Name</label>
              <div class=\"bar\"></div>
            </div>
          
            <div class=\"group\">
                <input type=\"password\" id=\"pwd\" name=\"mdp_prs\" required=\"required\"/>
                <label for=\"pwd\">Password</label>
                <div class=\"bar\"></div>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\"
            value=\"{{ csrf_token('authenticate') }}\"
     >
            
        </div>

        <center>

          <p class=\"p-account\">Vous n'avez pas de compte ? <a href=\"{{ path('registration') }}\">créer un compte </a></p>
        </center>

            <div class=\"buttons\">
                <button id=\"validation\" class=\"blob-btn\">
                  LOG IN
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
                
            </div>
        </form>

      </div>
    </div>
</div>

</div>

<div id=\"alert-area\" class=\"alert-area\"></div>

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

var succ = new Boolean({{success}});

let message = \"{{messageError}}\"; 

if(succ == false && message.length > 1)
{
  let alert_area = document.querySelector('.alert-area');

  var alertbox = new AlertBox('#alert-area', {
  closeTime: 5000,
  persistent: false,
  hideCloseButton: false
  });

  
  alertbox.show(message);
  let alert_box = document.querySelector('.alert-box');
  alert_box.classList.add('error')
}




</script>

</body>
</html>", "protofolio/login.html.twig", "/var/www/protofolio/templates/protofolio/login.html.twig");
    }
}
