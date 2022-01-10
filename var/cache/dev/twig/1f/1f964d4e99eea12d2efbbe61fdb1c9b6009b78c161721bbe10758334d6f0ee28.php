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

/* templates/nav.html.twig */
class __TwigTemplate_ef23def78cc3411b1c944faaa3f45c2791ac891518ed24d929edd2d8192b592b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templates/nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templates/nav.html.twig"));

        // line 1
        echo "<body>
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<a class=\"navbar-brand col-1\" href=";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_acceuil");
        echo "><img src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo " class=\"img-fluid img-responsive\" img-size=\"100x100\"></a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>

\t\t\t\t\t<div class=\"collapse navbar-collapse\">
\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t<li class=\"nav-item active mx-5\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" style=\"color: #fff;\" href=";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_acceuil");
        echo ">Accueil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item \">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" style=\"color: #fff;\" href=\"index.php?section=collectif\">Le collectif</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item mx-5\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" style=\"color: #fff;\" href=\"index.php?section=artistes\">Les artistes</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" style=\"color: #fff;\" href=\"index.php?section=prestations\">Les prestations</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t";
        // line 28
        if ((null === (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()))) {
            // line 29
            echo "\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
\t\t\t\t\t\t\t\t<a href=";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_register");
            echo ">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light\">Inscription</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
\t\t\t\t\t\t\t\t<a href=";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_login");
            echo ">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">Connexion</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } else {
            // line 40
            echo "\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\tUtilisateur: ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"index.php?section=voirCompte\">Voir compte</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"index.php?section=ajoutPrestation\">Ajouter une prestation</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_logout");
            echo ">Se déconnecter</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 57
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t</div>
</body>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "templates/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 57,  118 => 52,  105 => 42,  101 => 40,  93 => 35,  85 => 30,  82 => 29,  80 => 28,  63 => 14,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<body>
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<a class=\"navbar-brand col-1\" href={{url(\"app_acceuil\")}}><img src={{asset('images/logo.png')}} class=\"img-fluid img-responsive\" img-size=\"100x100\"></a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>

\t\t\t\t\t<div class=\"collapse navbar-collapse\">
\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t<li class=\"nav-item active mx-5\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" style=\"color: #fff;\" href={{url(\"app_acceuil\")}}>Accueil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item \">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" style=\"color: #fff;\" href=\"index.php?section=collectif\">Le collectif</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item mx-5\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" style=\"color: #fff;\" href=\"index.php?section=artistes\">Les artistes</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" style=\"color: #fff;\" href=\"index.php?section=prestations\">Les prestations</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t{% if user is null %}
\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
\t\t\t\t\t\t\t\t<a href={{url(\"app_register\")}}>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light\">Inscription</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
\t\t\t\t\t\t\t\t<a href={{url(\"app_login\")}}>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">Connexion</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\tUtilisateur: {{user.email}}
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"index.php?section=voirCompte\">Voir compte</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"index.php?section=ajoutPrestation\">Ajouter une prestation</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href={{url(\"app_logout\")}}>Se déconnecter</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t</div>
</body>
", "templates/nav.html.twig", "/var/www/app/templates/templates/nav.html.twig");
    }
}
