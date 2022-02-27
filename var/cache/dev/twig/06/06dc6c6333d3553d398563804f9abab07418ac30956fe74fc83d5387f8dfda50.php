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

/* artiste/infos.html.twig */
class __TwigTemplate_27a53d9413fd4da578689f67951ab2b740c7988a0f215fe6ef7a856116765cc9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artiste/infos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artiste/infos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "artiste/infos.html.twig", 1);
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

        echo "Artistes
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
        $this->loadTemplate("templates/nav.html.twig", "artiste/infos.html.twig", 8)->display($context);
        // line 9
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<h2 class=\"text-center mx-auto\">Détail Artiste</h2>
\t\t\t<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\" id=\"sticky-sidebar\">
\t\t\t\t<div class=\"card bg-light sticky-top mb-4 mx-auto text-center\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h4 class=\"card-title\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["artiste"]) || array_key_exists("artiste", $context) ? $context["artiste"] : (function () { throw new RuntimeError('Variable "artiste" does not exist.', 15, $this->source); })()), "pseudo", [], "any", false, false, false, 15), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t<p class=\"card-text\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["artiste"]) || array_key_exists("artiste", $context) ? $context["artiste"] : (function () { throw new RuntimeError('Variable "artiste" does not exist.', 16, $this->source); })()), "localisation", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
\t\t\t\t\t\t<row><img src=";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["artiste"]) || array_key_exists("artiste", $context) ? $context["artiste"] : (function () { throw new RuntimeError('Variable "artiste" does not exist.', 17, $this->source); })()), "imgArtiste", [], "any", false, false, false, 17))), "html", null, true);
        echo " width=\"200\" height=\"200\" class=\"img-fluid img-center mx-auto\"></row>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div><br>
\t\t\t\t\t\t\t<a class=\"btn btn-block btn-primary\" href=\"#\">Discuter avec l'artiste</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-8 col-8 mb-4\">
\t\t\t\t<div class=\"card bg-light mb-8\" style=\"margin: 0 -12px 0 -12px;\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h4 style=\"text-align: center;\">PRESENTATION</h4>
\t\t\t\t\t\t<p class=\"mb-2\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["artiste"]) || array_key_exists("artiste", $context) ? $context["artiste"] : (function () { throw new RuntimeError('Variable "artiste" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 33
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
            // line 34
            echo "
\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t<div class=\"card bg-light mb-3\">
\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t<u>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "libelle", [], "any", false, false, false, 43), "html", null, true);
            echo "</u>
\t\t\t\t\t\t\t\t\t\t\t</h4><br>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"descDiv";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "description", [], "any", false, false, false, 47), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-3\" style=\"text-align: right;\">Cout de Prestation :<br><strong style=\"font-size: xx-large;\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "prix", [], "any", false, false, false, 51), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t€</strong>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary text-center\">Ajouter au panier</button>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\tTemps de Prestation :
\t\t\t\t\t\t\t\t\t\t<strong>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "temps", [], "any", false, false, false, 61), "html", null, true);
            echo "</strong>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prestation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
\t\t\t</div>
\t\t</div>
\t</div>

";
        // line 74
        $this->loadTemplate("templates/footer.html.twig", "artiste/infos.html.twig", 74)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "artiste/infos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 74,  191 => 69,  177 => 61,  164 => 51,  157 => 47,  153 => 46,  147 => 43,  136 => 34,  131 => 33,  125 => 29,  110 => 17,  106 => 16,  102 => 15,  94 => 9,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Artistes
{% endblock %}

{% block body %}

\t{% include \"templates/nav.html.twig\" %}
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<h2 class=\"text-center mx-auto\">Détail Artiste</h2>
\t\t\t<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\" id=\"sticky-sidebar\">
\t\t\t\t<div class=\"card bg-light sticky-top mb-4 mx-auto text-center\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h4 class=\"card-title\">{{artiste.pseudo}}</h4>
\t\t\t\t\t\t<p class=\"card-text\">{{artiste.localisation}}</p>
\t\t\t\t\t\t<row><img src={{asset(\"images/\"~artiste.imgArtiste)}} width=\"200\" height=\"200\" class=\"img-fluid img-center mx-auto\"></row>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div><br>
\t\t\t\t\t\t\t<a class=\"btn btn-block btn-primary\" href=\"#\">Discuter avec l'artiste</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-8 col-8 mb-4\">
\t\t\t\t<div class=\"card bg-light mb-8\" style=\"margin: 0 -12px 0 -12px;\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h4 style=\"text-align: center;\">PRESENTATION</h4>
\t\t\t\t\t\t<p class=\"mb-2\">{{artiste.description}}</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{# récupérer les informations de la table prestations #}
\t\t\t\t{%for prestation in prestations %}

\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t<div class=\"card bg-light mb-3\">
\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t<u>{{prestation.libelle}}</u>
\t\t\t\t\t\t\t\t\t\t\t</h4><br>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"descDiv{{prestation.id}}\">
\t\t\t\t\t\t\t\t\t\t\t{{prestation.description}}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-3\" style=\"text-align: right;\">Cout de Prestation :<br><strong style=\"font-size: xx-large;\">{{prestation.prix}}
\t\t\t\t\t\t\t\t\t\t€</strong>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary text-center\">Ajouter au panier</button>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\tTemps de Prestation :
\t\t\t\t\t\t\t\t\t\t<strong>{{prestation.temps}}</strong>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t{% endfor %}

\t\t\t</div>
\t\t</div>
\t</div>

{% include \"templates/footer.html.twig\" %}{% endblock %}
", "artiste/infos.html.twig", "/var/www/app/templates/artiste/infos.html.twig");
    }
}
