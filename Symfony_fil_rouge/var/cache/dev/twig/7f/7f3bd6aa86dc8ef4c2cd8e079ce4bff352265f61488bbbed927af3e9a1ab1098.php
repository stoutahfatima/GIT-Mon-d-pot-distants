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

/* security/login.html.twig */
class __TwigTemplate_07647d0158e3e503fcc37408877021902525e09e4399eef92ff46d8eed8d6879 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Log in!";
        
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
#pathinscription{
\tcolor:blue;
}
</style>

<section>
\t\t";
        // line 15
        echo "\t\t<div class=\"row p-3\">
\t\t\t<nav style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
\t\t\t\t<ol class=\"breadcrumb\" id=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item \">
\t\t\t\t\t\t<a id=\"arianne\" href=\"";
        // line 19
        echo "/accueil";
        echo "\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Connexion</li>
\t\t\t\t</ol>
\t\t\t</nav>
\t\t\t<div class=\"row pt-2 pb-2\" style=\"justify-content:center\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<div class=\"row p-5\" style=\"justify-content:center\">
\t\t\t\t\t\t";
        // line 28
        echo "\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t";
        // line 30
        echo "\t\t\t\t\t\t\t";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })())) {
            // line 31
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 31, $this->source); })()), "messageKey", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 31, $this->source); })()), "messageData", [], "any", false, false, false, 31), "security"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 33
        echo "\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\tYou are logged in as
\t\t\t\t\t\t\t\t\t";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "username", [], "any", false, false, false, 36), "html", null, true);
            echo ",
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 40
        echo "
\t\t\t\t\t\t\t<h1 class=\"h3 mb-3 font-weight-normal\">Connexion</h1>
\t\t\t\t\t\t\t<label for=\"inputEmail\">Email</label>
\t\t\t\t\t\t\t<input type=\"email\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
\t\t\t\t\t\t\t<label for=\"inputPassword\">Mot de passe</label>
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 54
        echo "\t\t\t\t\t\t\t\t\t<div class=\"checkbox mb-3\">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\"> Remember me
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-lg btn-success\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\tSign in
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t<div class=\"col text-right\">
\t\t\t\t\t\t\t\t\t<p>Pas encore inscrit ?
\t\t\t\t\t\t\t\t\t\t<a id=\"pathinscription\" href=\"";
        // line 69
        echo "/register";
        echo "\">Inscription</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 69,  162 => 54,  155 => 47,  148 => 43,  143 => 40,  137 => 37,  133 => 36,  129 => 34,  126 => 33,  120 => 31,  117 => 30,  114 => 28,  103 => 19,  97 => 15,  88 => 7,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
{# CSS #}
<style>
#pathinscription{
\tcolor:blue;
}
</style>

<section>
\t\t{# FIL D'ARIANNE BREADCRUMB #}
\t\t<div class=\"row p-3\">
\t\t\t<nav style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
\t\t\t\t<ol class=\"breadcrumb\" id=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item \">
\t\t\t\t\t\t<a id=\"arianne\" href=\"{{'/accueil'}}\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Connexion</li>
\t\t\t\t</ol>
\t\t\t</nav>
\t\t\t<div class=\"row pt-2 pb-2\" style=\"justify-content:center\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<div class=\"row p-5\" style=\"justify-content:center\">
\t\t\t\t\t\t{# FORMULAIRE #}
\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t{# ERREURS #}
\t\t\t\t\t\t\t{% if error %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\tYou are logged in as
\t\t\t\t\t\t\t\t\t{{ app.user.username }},
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Logout</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t<h1 class=\"h3 mb-3 font-weight-normal\">Connexion</h1>
\t\t\t\t\t\t\t<label for=\"inputEmail\">Email</label>
\t\t\t\t\t\t\t<input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
\t\t\t\t\t\t\t<label for=\"inputPassword\">Mot de passe</label>
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{# Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
\t\t\t\t\t\t\t\t\tSee https://symfony.com/doc/current/security/remember_me.html
\t\t\t\t\t\t\t\t\t#}
\t\t\t\t\t\t\t\t\t<div class=\"checkbox mb-3\">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\"> Remember me
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-lg btn-success\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\tSign in
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t<div class=\"col text-right\">
\t\t\t\t\t\t\t\t\t<p>Pas encore inscrit ?
\t\t\t\t\t\t\t\t\t\t<a id=\"pathinscription\" href=\"{{'/register'}}\">Inscription</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

{% endblock %}
", "security/login.html.twig", "C:\\Users\\fatim\\Desktop\\Symfony_fil_rouge\\templates\\security\\login.html.twig");
    }
}
