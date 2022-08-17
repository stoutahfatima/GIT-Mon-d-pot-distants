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

/* registration/register.html.twig */
class __TwigTemplate_4528ba387b3402fec685ce4a6b5ede23267d1ba63c62a0b216d9b957f8653b83 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Register";
        
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

        // line 7
        echo "<style>
#pathconnexion{
\tcolor:blue;
}
</style>

<section>
\t
\t\t";
        // line 16
        echo "\t\t<div class=\"row p-3\">
\t\t\t<nav style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
\t\t\t\t<ol class=\"breadcrumb\" id=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item \">
\t\t\t\t\t\t<a id=\"arianne\" href=\"";
        // line 20
        echo "/accueil";
        echo "\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Inscription</li>
\t\t\t\t</ol>
\t\t\t</nav>
\t\t\t";
        // line 26
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 27
            echo "\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t";
        // line 30
        echo "\t\t\t<div class=\"row pt-2 pb-2\" style=\"justify-content:center\">
\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t<div class=\"row p-5\">
\t\t\t\t\t\t";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t<h1 class=\"mb-3 font-weight-normal\">Inscription</h1>
\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), 'row');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "prenom", [], "any", false, false, false, 40), 'row');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'row');
        echo "
\t\t\t\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "plainPassword", [], "any", false, false, false, 44), 'row', ["label" => "Mot de passe"]);
        echo "
\t\t\t\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "agreeTerms", [], "any", false, false, false, 45), 'row', ["label" => "Accepte les CGU"]);
        echo "
\t\t\t\t\t\t";
        // line 47
        echo "\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-lg btn-success\" type=\"submit\">Confirmer</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t<div class=\"col text-right\">
\t\t\t\t\t\t\t<p>Déjà inscrit ?
\t\t\t\t\t\t\t\t<a id=\"pathconnexion\" href=\"";
        // line 54
        echo "/login";
        echo "\">Connexion</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
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
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 54,  170 => 51,  164 => 47,  160 => 45,  156 => 44,  152 => 43,  146 => 40,  140 => 37,  133 => 33,  128 => 30,  126 => 29,  117 => 27,  112 => 26,  104 => 20,  98 => 16,  88 => 7,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
{# CSS #}
<style>
#pathconnexion{
\tcolor:blue;
}
</style>

<section>
\t
\t\t{# FIL D'ARIANNE BREADCRUMB #}
\t\t<div class=\"row p-3\">
\t\t\t<nav style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
\t\t\t\t<ol class=\"breadcrumb\" id=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item \">
\t\t\t\t\t\t<a id=\"arianne\" href=\"{{'/accueil'}}\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Inscription</li>
\t\t\t\t</ol>
\t\t\t</nav>
\t\t\t{# ERREURS #}
\t\t\t{% for flashError in app.flashes('verify_email_error') %}
\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
\t\t\t{% endfor %}
\t\t\t{# FORMULAIRE #}
\t\t\t<div class=\"row pt-2 pb-2\" style=\"justify-content:center\">
\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t<div class=\"row p-5\">
\t\t\t\t\t\t{{ form_start(registrationForm) }}
\t\t\t\t\t\t<h1 class=\"mb-3 font-weight-normal\">Inscription</h1>
\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t{{ form_row(registrationForm.nom) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t{{ form_row(registrationForm.prenom) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{{ form_row(registrationForm.email) }}
\t\t\t\t\t\t{{ form_row(registrationForm.plainPassword, { label: 'Mot de passe'}) }}
\t\t\t\t\t\t{{ form_row(registrationForm.agreeTerms, {label:'Accepte les CGU'}) }}
\t\t\t\t\t\t{# SUBMIT #}
\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-lg btn-success\" type=\"submit\">Confirmer</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{{ form_end(registrationForm) }}
\t\t\t\t\t\t<div class=\"col text-right\">
\t\t\t\t\t\t\t<p>Déjà inscrit ?
\t\t\t\t\t\t\t\t<a id=\"pathconnexion\" href=\"{{'/login'}}\">Connexion</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

</section>


{% endblock %}
", "registration/register.html.twig", "C:\\Users\\fatim\\Desktop\\Symfony_fil_rouge\\templates\\registration\\register.html.twig");
    }
}
