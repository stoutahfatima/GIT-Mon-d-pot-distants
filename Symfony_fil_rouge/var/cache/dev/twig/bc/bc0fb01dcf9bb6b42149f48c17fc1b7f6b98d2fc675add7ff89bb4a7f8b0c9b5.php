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

/* contenir/panier_valider.html.twig */
class __TwigTemplate_7d970a2c9fcf5ad063cc7c43ed5aa620a2d793776c858032f63bf808a5256bcb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contenir/panier_valider.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contenir/panier_valider.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contenir/panier_valider.html.twig", 1);
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

        echo " Félicitations pour votre commande !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<style>
.image{
width:55%;
text-align: center;
display: table-cell;
vertical-align: middle;
}
</style>

<section>
\t<div class=\"container bg-center\">
\t\t<div class=\"row pb-3 pt-4\" style=\"justify-content:center\">
\t\t\t<div class=\"image p-5\">
\t\t\t\t<img class=\"img-fluid\" src='/assets/src/felicitation.jpeg' alt=\"felicitations\" id=\"felicitations-image\">
\t\t\t</div>
\t\t</div>
\t\t<div>
            <div class=\"p-5 text-center\" id=\"felicitations\">
\t\t\t\t<h1 class=\"message\">
\t\t\t\t\tVotre commande a bien été enregistrée, merci !
\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>
\t\t<div>
\t\t\t<div class=\"p-5\" id=\"bouton-valide\">
\t\t\t\t<button type=\"button\" class=\"btn btn-warning \">
\t\t\t\t\t<a class=\"valider text-light\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Retour à l'accueil</a>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t</div>
</section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contenir/panier_valider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Félicitations pour votre commande !{% endblock %}

{% block body %}

<style>
.image{
width:55%;
text-align: center;
display: table-cell;
vertical-align: middle;
}
</style>

<section>
\t<div class=\"container bg-center\">
\t\t<div class=\"row pb-3 pt-4\" style=\"justify-content:center\">
\t\t\t<div class=\"image p-5\">
\t\t\t\t<img class=\"img-fluid\" src='/assets/src/felicitation.jpeg' alt=\"felicitations\" id=\"felicitations-image\">
\t\t\t</div>
\t\t</div>
\t\t<div>
            <div class=\"p-5 text-center\" id=\"felicitations\">
\t\t\t\t<h1 class=\"message\">
\t\t\t\t\tVotre commande a bien été enregistrée, merci !
\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>
\t\t<div>
\t\t\t<div class=\"p-5\" id=\"bouton-valide\">
\t\t\t\t<button type=\"button\" class=\"btn btn-warning \">
\t\t\t\t\t<a class=\"valider text-light\" href=\"{{ path('accueil') }}\">Retour à l'accueil</a>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t</div>
</section>


{% endblock %}", "contenir/panier_valider.html.twig", "C:\\Users\\fatim\\Desktop\\Symfony_fil_rouge\\templates\\contenir\\panier_valider.html.twig");
    }
}
