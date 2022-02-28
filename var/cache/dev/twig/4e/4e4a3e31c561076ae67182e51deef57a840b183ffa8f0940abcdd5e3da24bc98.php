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

/* templates/footer.html.twig */
class __TwigTemplate_f77f97ac448bb41a079e10f052a6e6ec2bede50312a6099caa1f6a5148dadaa5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templates/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templates/footer.html.twig"));

        // line 1
        echo "<footer class=\"text-light mt-5 container-fluid\" style=\"border-style: none; background: #081521; padding-top : 2% ; \">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-lg-4 col-xl-4 mx-auto\">
                <h5>A propos</h5>
                <hr class=\"bg-white mb-2 mt-0 d-inline-block mx-auto w-25\">
                <p class=\"mb-0\">
                    Des prestations à des prix abordables pour tous. Plus d’infos et réservations à saisir rapidement, au
                    06 66 66 66 66 ou artadom@gmail.com
                </p>
            </div>

            <div class=\"col-md-4 col-lg-4 col-xl-4 mx-auto\">
                <h5>Informations</h5>
                <hr class=\"bg-white mb-2 mt-0 d-inline-block mx-auto w-25\">
                <ul class=\"list-unstyled\">
                    <li><a href=";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_acceuil");
        echo " style=\"text-decoration: none ;\">Accueil</a></li>
                    <li><a href=";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_collectif");
        echo " style=\"text-decoration: none ;\">Collectif</a></li>
                    <li><a href=";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_artistes");
        echo " style=\"text-decoration: none ;\">Artistes</a></li>
                    <li><a href=\"index.php?section=prestations\" style=\"text-decoration: none ;\">Prestations</a></li>
                </ul>
            </div>
            <div class=\"col-md-4 col-lg-4 col-xl-4\">
                <h5>Contact</h5>
                <hr class=\"bg-white mb-2 mt-0 d-inline-block mx-auto w-25\">
                <ul class=\"list-unstyled\">
                    <li><a href=\"#\" style=\"text-decoration: none ;\"><i class=\"fa fa-home mr-2\"></i> Artadom</a></li>
                    <li><a href=\"mailto:artadom@gmail.com\" style=\"text-decoration: none ;\"><i
                                    class=\"fa fa-envelope mr-2\"></i> artadom@gmail.com</a></li>
                    <li><a href=\"tel:+33628768900.\" style=\"text-decoration: none ;\"><i class=\"fas fa-phone\"></i>+
                            33 6 66 66 66 66</a></li>
                </ul>
            </div>
            <div class=\"col-12 copyright mt-3\">
                <hr>
                <p class=\"text-right text-muted\"><span>v. 1.0</span></p>
            </div>
        </div>
    </div>
</footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "templates/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  65 => 18,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"text-light mt-5 container-fluid\" style=\"border-style: none; background: #081521; padding-top : 2% ; \">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-lg-4 col-xl-4 mx-auto\">
                <h5>A propos</h5>
                <hr class=\"bg-white mb-2 mt-0 d-inline-block mx-auto w-25\">
                <p class=\"mb-0\">
                    Des prestations à des prix abordables pour tous. Plus d’infos et réservations à saisir rapidement, au
                    06 66 66 66 66 ou artadom@gmail.com
                </p>
            </div>

            <div class=\"col-md-4 col-lg-4 col-xl-4 mx-auto\">
                <h5>Informations</h5>
                <hr class=\"bg-white mb-2 mt-0 d-inline-block mx-auto w-25\">
                <ul class=\"list-unstyled\">
                    <li><a href={{url(\"app_acceuil\")}} style=\"text-decoration: none ;\">Accueil</a></li>
                    <li><a href={{url(\"app_collectif\")}} style=\"text-decoration: none ;\">Collectif</a></li>
                    <li><a href={{url(\"app_artistes\")}} style=\"text-decoration: none ;\">Artistes</a></li>
                    <li><a href=\"index.php?section=prestations\" style=\"text-decoration: none ;\">Prestations</a></li>
                </ul>
            </div>
            <div class=\"col-md-4 col-lg-4 col-xl-4\">
                <h5>Contact</h5>
                <hr class=\"bg-white mb-2 mt-0 d-inline-block mx-auto w-25\">
                <ul class=\"list-unstyled\">
                    <li><a href=\"#\" style=\"text-decoration: none ;\"><i class=\"fa fa-home mr-2\"></i> Artadom</a></li>
                    <li><a href=\"mailto:artadom@gmail.com\" style=\"text-decoration: none ;\"><i
                                    class=\"fa fa-envelope mr-2\"></i> artadom@gmail.com</a></li>
                    <li><a href=\"tel:+33628768900.\" style=\"text-decoration: none ;\"><i class=\"fas fa-phone\"></i>+
                            33 6 66 66 66 66</a></li>
                </ul>
            </div>
            <div class=\"col-12 copyright mt-3\">
                <hr>
                <p class=\"text-right text-muted\"><span>v. 1.0</span></p>
            </div>
        </div>
    </div>
</footer>", "templates/footer.html.twig", "/var/www/app/templates/templates/footer.html.twig");
    }
}
