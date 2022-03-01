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

/* prestation/index.html.twig */
class __TwigTemplate_c205b474920f1db9ef6cec069184f5c0f6e9ed6b6c5ad5bbf366e50831e3e8fd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prestation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prestation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "prestation/index.html.twig", 1);
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

        echo "Prestations
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
        $this->loadTemplate("templates/nav.html.twig", "prestation/index.html.twig", 8)->display($context);
        // line 9
        echo "
\t<div class=\"container\">
\t\t<h2 class=\"text-center mx-auto\" style=\"margin-top :4% ; margin-bottom : 3%\">Prestations</h2>
\t\t<div class=\"row \">
\t\t\t<div class=\"col\" style=\"padding-right :4% ; \">
\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
            // line 15
            echo "\t\t\t\t\t<div class=\"row mt-4\">
\t\t\t\t\t\t<!--<div class=\"col-xs-12 col-sm-12 col-md-3 col-lg-3\">-->
\t\t\t\t\t\t<div class=\"card bg-light mb-3\" style=\"width: 100%;\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "libelle", [], "any", false, false, false, 23), "html", null, true);
            echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"descDiv";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "description", [], "any", false, false, false, 27), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\" style=\"text-align: right;\">Coût de la prestation :<br><strong style=\"font-size: xx-large;\"><?= \$cout; ?>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "prix", [], "any", false, false, false, 31), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t€</strong><br>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary text-center\">Ajouter au panier</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_infos_artiste", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prestation"], "artiste", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">Proposé par
\t\t\t\t\t\t\t\t\t\t\t<strong>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prestation"], "artiste", [], "any", false, false, false, 40), "pseudo", [], "any", false, false, false, 40), "html", null, true);
            echo "</strong>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\tTemps de Prestation :
\t\t\t\t\t\t\t\t\t\t<strong>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "temps", [], "any", false, false, false, 45), "html", null, true);
            echo "</strong>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prestation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t</div>
\t</div>
\t";
        // line 54
        $this->loadTemplate("templates/footer.html.twig", "prestation/index.html.twig", 54)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "prestation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 54,  168 => 52,  155 => 45,  147 => 40,  143 => 39,  132 => 31,  125 => 27,  121 => 26,  115 => 23,  105 => 15,  101 => 14,  94 => 9,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Prestations
{% endblock %}

{% block body %}

\t{% include \"templates/nav.html.twig\" %}

\t<div class=\"container\">
\t\t<h2 class=\"text-center mx-auto\" style=\"margin-top :4% ; margin-bottom : 3%\">Prestations</h2>
\t\t<div class=\"row \">
\t\t\t<div class=\"col\" style=\"padding-right :4% ; \">
\t\t\t\t{% for prestation in prestations %}
\t\t\t\t\t<div class=\"row mt-4\">
\t\t\t\t\t\t<!--<div class=\"col-xs-12 col-sm-12 col-md-3 col-lg-3\">-->
\t\t\t\t\t\t<div class=\"card bg-light mb-3\" style=\"width: 100%;\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{prestation.libelle}}</strong>
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"descDiv{{prestation.id}}\">
\t\t\t\t\t\t\t\t\t\t\t{{prestation.description}}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\" style=\"text-align: right;\">Coût de la prestation :<br><strong style=\"font-size: xx-large;\"><?= \$cout; ?>{{prestation.prix}}
\t\t\t\t\t\t\t\t\t\t€</strong><br>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary text-center\">Ajouter au panier</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"app_infos_artiste\", {'id':prestation.artiste.id})}}\">Proposé par
\t\t\t\t\t\t\t\t\t\t\t<strong>{{prestation.artiste.pseudo}}</strong>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\tTemps de Prestation :
\t\t\t\t\t\t\t\t\t\t<strong>{{prestation.temps}}</strong>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
\t{% include \"templates/footer.html.twig\" %}
{% endblock %}
", "prestation/index.html.twig", "/var/www/app/templates/prestation/index.html.twig");
    }
}
