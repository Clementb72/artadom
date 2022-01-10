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

/* acceuil/index.html.twig */
class __TwigTemplate_4a658ba90d63b732a9ae133612879e6919013b10ecac472b82ab124271c1bc26 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acceuil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acceuil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "acceuil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Art-A-Dom!
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t";
        // line 8
        $this->loadTemplate("templates/nav.html.twig", "acceuil/index.html.twig", 8)->display($context);
        // line 9
        echo "

\t<main>
\t\t<div class=\"container s002\">
\t\t\t<form action=\"index.php\" method=\"get\">
\t\t\t\t<fieldset>
\t\t\t\t\t";
        // line 15
        if ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "\t\t\t\t\t\t<p>ok</p>
\t\t\t\t\t";
        } else {
            // line 18
            echo "\t\t\t\t\t\t<p>else</p>

\t\t\t\t\t";
        }
        // line 21
        echo "
\t\t\t\t\t<legend>TROUVER UN ARTISTE</legend>
\t\t\t\t</fieldset>
\t\t\t\t<div class=\"inner-form\">
\t\t\t\t\t<input type=\"hidden\" id=\"section\" name=\"section\" value=\"artistes\">
\t\t\t\t\t<div class=\"input-field first-wrap\">
\t\t\t\t\t\t<div class=\"icon-wrap\">
\t\t\t\t\t\t\t<p style='transform: translate(0%,35%);'>🔎</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input id=\"Pseudo\" name=\"Pseudo\" type=\"text\" placeholder=\"Rechercher un artiste ...\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field second-wrap\">
\t\t\t\t\t\t<div class=\"icon-wrap\">
\t\t\t\t\t\t\t<p style='transform: translate(0%,35%);'>💰</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input id=\"prixMin\" name=\"prixMin\" type=\"text\" placeholder=\"Prix min...\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field second-wrap\">
\t\t\t\t\t\t<div class=\"icon-wrap\">
\t\t\t\t\t\t\t<p style='transform: translate(0%,35%);'>💰</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input id=\"prixMax\" name=\"prixMax\" type=\"text\" placeholder=\"Prix max...\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field third-wrap\">
\t\t\t\t\t\t";
        // line 48
        echo "\t\t\t\t\t\t<!--this goes unused-->
\t\t\t\t\t\t<input class=\"datepicker\" id=\"return\" type=\"text\" placeholder=\"30 Aug 2018\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field fifth-wrap\">
\t\t\t\t\t\t<button class=\"btn-search\" type=\"submit\">RECHERCHER</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>

\t</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "acceuil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 48,  113 => 21,  108 => 18,  104 => 16,  102 => 15,  94 => 9,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Art-A-Dom!
{% endblock %}

{% block body %}

\t{% include \"templates/nav.html.twig\" %}


\t<main>
\t\t<div class=\"container s002\">
\t\t\t<form action=\"index.php\" method=\"get\">
\t\t\t\t<fieldset>
\t\t\t\t\t{% if user %}
\t\t\t\t\t\t<p>ok</p>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<p>else</p>

\t\t\t\t\t{% endif %}

\t\t\t\t\t<legend>TROUVER UN ARTISTE</legend>
\t\t\t\t</fieldset>
\t\t\t\t<div class=\"inner-form\">
\t\t\t\t\t<input type=\"hidden\" id=\"section\" name=\"section\" value=\"artistes\">
\t\t\t\t\t<div class=\"input-field first-wrap\">
\t\t\t\t\t\t<div class=\"icon-wrap\">
\t\t\t\t\t\t\t<p style='transform: translate(0%,35%);'>🔎</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input id=\"Pseudo\" name=\"Pseudo\" type=\"text\" placeholder=\"Rechercher un artiste ...\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field second-wrap\">
\t\t\t\t\t\t<div class=\"icon-wrap\">
\t\t\t\t\t\t\t<p style='transform: translate(0%,35%);'>💰</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input id=\"prixMin\" name=\"prixMin\" type=\"text\" placeholder=\"Prix min...\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field second-wrap\">
\t\t\t\t\t\t<div class=\"icon-wrap\">
\t\t\t\t\t\t\t<p style='transform: translate(0%,35%);'>💰</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input id=\"prixMax\" name=\"prixMax\" type=\"text\" placeholder=\"Prix max...\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field third-wrap\">
\t\t\t\t\t\t{# <div class=\"icon-wrap\">
\t\t\t\t\t\t\t<p style='transform: translate(0%,35%);'>📅</p>
\t\t\t\t\t\t</div> #}
\t\t\t\t\t\t<!--this goes unused-->
\t\t\t\t\t\t<input class=\"datepicker\" id=\"return\" type=\"text\" placeholder=\"30 Aug 2018\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field fifth-wrap\">
\t\t\t\t\t\t<button class=\"btn-search\" type=\"submit\">RECHERCHER</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>

\t</main>
{% endblock %}
", "acceuil/index.html.twig", "/var/www/app/templates/acceuil/index.html.twig");
    }
}
