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

/* collectif/index.html.twig */
class __TwigTemplate_5d33f5f215c8593205215962f5780e824639968d19d4e98f8aba354a26837935 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "collectif/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "collectif/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "collectif/index.html.twig", 1);
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
        $this->loadTemplate("templates/nav.html.twig", "collectif/index.html.twig", 8)->display($context);
        // line 9
        echo "    <main>
    <div class=\"container\">
        <h2 class=\"sous-titre mb-5\">QUI SOMMES NOUS ?</h2>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-6\">
                    <p style=\"color : #ffffff ;\">Le monde de la culture est dans une mauvaise passe à cause de la crise
                        sanitaire actuelle.<br> <br>Le collectif Art-A-Dom se mobilise pour permettre aux artistes de se produire
                        à la demande.
                        Chant, musique, danse mais aussi magie ou bien encore du rire… Les artistes viennent chez vous, à
                        domicile ou dans la rue selon votre souhait  ! Une bonne <br>initiative du collectif Art-A-Dom
                        ... <br><br>
                        Concrètement, il est possible de réserver une prestation à domicile à condition <br>d’habiter
                        dans le périmètre de production de l'artiste en question. Sinon <br>des prestations en
                        ligne sont possibles (prendre contact directement avec les artistes) via notre site. </p>
                </div>
                <div class=\"col-6\">
                    <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/artiste.jpg"), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"row mt-5\">
                <div class=col-6>
                    <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/artiste2.jpg"), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-5\">
                    <p class=\"description \" style=\"color : #ffffff ;\">Actuellement 3 catégories de prestations : <br> - La magie avec nos magiciens talenteux<br>- Nos comédiens qui se déplacent pour vous faire rire<br>-
                        Les concerts de musique ou encore les petites symphonies pour accompagner vos évènements
                </div>
            </div>
        </div>
    </div>

</main>
\t";
        // line 42
        $this->loadTemplate("templates/footer.html.twig", "collectif/index.html.twig", 42)->display($context);
        // line 43
        echo "\t</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "collectif/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 43,  135 => 42,  121 => 31,  113 => 26,  94 => 9,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Art-A-Dom!
{% endblock %}

{% block body %}

\t{% include \"templates/nav.html.twig\" %}
    <main>
    <div class=\"container\">
        <h2 class=\"sous-titre mb-5\">QUI SOMMES NOUS ?</h2>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-6\">
                    <p style=\"color : #ffffff ;\">Le monde de la culture est dans une mauvaise passe à cause de la crise
                        sanitaire actuelle.<br> <br>Le collectif Art-A-Dom se mobilise pour permettre aux artistes de se produire
                        à la demande.
                        Chant, musique, danse mais aussi magie ou bien encore du rire… Les artistes viennent chez vous, à
                        domicile ou dans la rue selon votre souhait  ! Une bonne <br>initiative du collectif Art-A-Dom
                        ... <br><br>
                        Concrètement, il est possible de réserver une prestation à domicile à condition <br>d’habiter
                        dans le périmètre de production de l'artiste en question. Sinon <br>des prestations en
                        ligne sont possibles (prendre contact directement avec les artistes) via notre site. </p>
                </div>
                <div class=\"col-6\">
                    <img src=\"{{asset(\"images/artiste.jpg\")}}\">
                </div>
            </div>
            <div class=\"row mt-5\">
                <div class=col-6>
                    <img src=\"{{asset(\"images/artiste2.jpg\")}}\">
                </div>
                <div class=\"col-5\">
                    <p class=\"description \" style=\"color : #ffffff ;\">Actuellement 3 catégories de prestations : <br> - La magie avec nos magiciens talenteux<br>- Nos comédiens qui se déplacent pour vous faire rire<br>-
                        Les concerts de musique ou encore les petites symphonies pour accompagner vos évènements
                </div>
            </div>
        </div>
    </div>

</main>
\t{% include \"templates/footer.html.twig\" %}
\t</main>
{% endblock %}
", "collectif/index.html.twig", "/var/www/app/templates/collectif/index.html.twig");
    }
}
