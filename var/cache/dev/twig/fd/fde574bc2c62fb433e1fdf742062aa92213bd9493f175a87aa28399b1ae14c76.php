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

/* protofolio/login_test.html.twig */
class __TwigTemplate_cdd289ff03d6ea61ab8dbd63ccb0415b4dcb79dd3f1c74d022d82def991ac284 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "protofolio/login_test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "protofolio/login_test.html.twig"));

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



  <header class=\"box\">
    <nav>
      <div class=\"logo-container\">
        <img src=\"./img/logo.png\" width=\"100\">
      </div>
      <ul>
        <li><a href=\"../index.html\">ACCUEIL</a></li>
        <li class=\"active\"><a href=\"./contact.html\">CONTACT</a></li>
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
        <p class=\"login-txt\">LOGIN</p>
        <p style=\"text-align:center; font-size: 80px; margin-top: 0;  margin-bottom: -10px; color: #886E0F;\"><i class=\"fa fa-users\"></i></p>
        <form action=\"\">
            <div style=\"width: 100%; position: relative;\">
       
        <div class=\"centered\">

            <div class=\"group\">
              <input type=\"text\" id=\"email\" required=\"required\"/>
              <label for=\"email\">Name</label>
              <div class=\"bar\"></div>
            </div>
          
            <div class=\"group\">
                <input type=\"password\" id=\"pwd\" required=\"required\"/>
                <label for=\"pwd\">Password</label>
                <div class=\"bar\"></div>
            </div>
            
        </div>

            <div class=\"buttons\">
                <button class=\"blob-btn\">
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
<footer>
\t<div class=\"footer-flex\" style=\"position: relative;top: 50px;\">
\t\t<ul class=\"footer-infos\">
\t\t\t<li><i class=\"fas fa-phone-alt\"></i><span>06 09 98 98 98</span></li>
\t\t\t<li><i class=\"fas fa-envelope\"></i><span>email@gmail.com</span></li>
\t\t\t<li><i class=\"fas fa-map-marker-alt\"></i><span>Rennes, France</span></li>
\t\t</ul>
\t\t<div class=\"footer-links\">
\t\t\t<a href=\"#github\"><i class=\"fab fa-github\"></i></a>
\t\t\t<a href=\"#linkedin\"><i class=\"fab fa-linkedin-in\"></i></a>
\t\t</div>
\t</div>
\t<div class=\"copyright\">
\t\t<center>
\t\t\t<p>© 2019 copyright AJDAINI ILYASS</p>
\t\t</center>
\t</div>
</footer>


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "protofolio/login_test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  57 => 10,  52 => 8,  43 => 1,);
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



  <header class=\"box\">
    <nav>
      <div class=\"logo-container\">
        <img src=\"./img/logo.png\" width=\"100\">
      </div>
      <ul>
        <li><a href=\"../index.html\">ACCUEIL</a></li>
        <li class=\"active\"><a href=\"./contact.html\">CONTACT</a></li>
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
        <p class=\"login-txt\">LOGIN</p>
        <p style=\"text-align:center; font-size: 80px; margin-top: 0;  margin-bottom: -10px; color: #886E0F;\"><i class=\"fa fa-users\"></i></p>
        <form action=\"\">
            <div style=\"width: 100%; position: relative;\">
       
        <div class=\"centered\">

            <div class=\"group\">
              <input type=\"text\" id=\"email\" required=\"required\"/>
              <label for=\"email\">Name</label>
              <div class=\"bar\"></div>
            </div>
          
            <div class=\"group\">
                <input type=\"password\" id=\"pwd\" required=\"required\"/>
                <label for=\"pwd\">Password</label>
                <div class=\"bar\"></div>
            </div>
            
        </div>

            <div class=\"buttons\">
                <button class=\"blob-btn\">
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
<footer>
\t<div class=\"footer-flex\" style=\"position: relative;top: 50px;\">
\t\t<ul class=\"footer-infos\">
\t\t\t<li><i class=\"fas fa-phone-alt\"></i><span>06 09 98 98 98</span></li>
\t\t\t<li><i class=\"fas fa-envelope\"></i><span>email@gmail.com</span></li>
\t\t\t<li><i class=\"fas fa-map-marker-alt\"></i><span>Rennes, France</span></li>
\t\t</ul>
\t\t<div class=\"footer-links\">
\t\t\t<a href=\"#github\"><i class=\"fab fa-github\"></i></a>
\t\t\t<a href=\"#linkedin\"><i class=\"fab fa-linkedin-in\"></i></a>
\t\t</div>
\t</div>
\t<div class=\"copyright\">
\t\t<center>
\t\t\t<p>© 2019 copyright AJDAINI ILYASS</p>
\t\t</center>
\t</div>
</footer>


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

</body>
</html>", "protofolio/login_test.html.twig", "/var/www/protofolio/templates/protofolio/login_test.html.twig");
    }
}
