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

/* profil/recap_profil.html.twig */
class __TwigTemplate_2fe8029d2c24b9333a1af02e2242796d33e23d2e4651c922e142b769739e0312 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/recap_profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/recap_profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil/recap_profil.html.twig", 1);
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

        echo " app.user.client ";
        
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
<section>
\t<div class=\"container bg-center\">
\t\t<h1 id=\"titre\" class=\" pt-3 pl-5\">Votre profil</h1>
\t\t<div class=\"row mr-5 ml-5 \">
\t\t\t<div class=\"col-6\" id=\"infos-client\">
\t\t\t\t<p class=\"adresse\">Adresse de facturation</p>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "client", [], "any", false, false, false, 13), "genre", [], "any", false, false, false, 13)), "html", null, true);
        echo "\" aria-label=\"Disabled input example\" disabled>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "client", [], "any", false, false, false, 14), "nom", [], "any", false, false, false, 14)), "html", null, true);
        echo "\" aria-label=\"Disabled input example\" disabled>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "client", [], "any", false, false, false, 15), "prenom", [], "any", false, false, false, 15)), "html", null, true);
        echo "\" aria-label=\"Disabled input example\" disabled>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "client", [], "any", false, false, false, 16), "adresse", [], "any", false, false, false, 16)), "html", null, true);
        echo "\" aria-label=\"Disabled input example\" disabled>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "client", [], "any", false, false, false, 17), "ville", [], "any", false, false, false, 17)), "html", null, true);
        echo "\" aria-label=\"Disabled input example\" disabled>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "client", [], "any", false, false, false, 18), "cp", [], "any", false, false, false, 18)), "html", null, true);
        echo "\" aria-label=\"Disabled input example\" disabled>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "client", [], "any", false, false, false, 19), "tel", [], "any", false, false, false, 19), "html", null, true);
        echo "\" aria-label=\"Disabled input example\" disabled>
\t\t\t</div>
\t\t\t<div class=\"col-6\" id=\"infos-client\">
\t\t\t\t<p class=\"adresse\">Adresse de livraison</p>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "client", [], "any", false, false, false, 23), "genre", [], "any", false, false, false, 23)), "html", null, true);
        echo "\" aria-label=\"Disabled input example\" disabled>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "client", [], "any", false, false, false, 24), "nom", [], "any", false, false, false, 24)), "html", null, true);
        echo "\" aria-label=\"Disabled input example\" disabled>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "client", [], "any", false, false, false, 25), "prenom", [], "any", false, false, false, 25)), "html", null, true);
        echo "\" aria-label=\"Disabled input example\" disabled>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "client", [], "any", false, false, false, 26), "adresse", [], "any", false, false, false, 26)), "html", null, true);
        echo "\" aria-label=\"Disabled input example\" disabled>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "client", [], "any", false, false, false, 27), "ville", [], "any", false, false, false, 27)), "html", null, true);
        echo "\" aria-label=\"Disabled input example\" disabled>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "client", [], "any", false, false, false, 28), "cp", [], "any", false, false, false, 28)), "html", null, true);
        echo "\" aria-label=\"Disabled input example\" disabled>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "client", [], "any", false, false, false, 29), "tel", [], "any", false, false, false, 29), "html", null, true);
        echo "\" aria-label=\"Disabled input example\" disabled>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row justify-content-between\">
\t\t\t<div class=\"col-12 mt-5 mb-2\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-warning\">
\t\t\t\t\t<a class=\"valider font-weight-bold text-light\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_client");
        echo "\">Modifier mes informations</a>
\t\t\t\t</button>
\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">
\t\t\t\t\t<a class=\"valider font-weight-bold text-light\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_valider");
        echo "\">Valider mes informations et passer ma commande</a>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
    </div>
</section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profil/recap_profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 38,  161 => 35,  152 => 29,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  132 => 24,  128 => 23,  121 => 19,  117 => 18,  113 => 17,  109 => 16,  105 => 15,  101 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} app.user.client {% endblock %}

{% block body %}

<section>
\t<div class=\"container bg-center\">
\t\t<h1 id=\"titre\" class=\" pt-3 pl-5\">Votre profil</h1>
\t\t<div class=\"row mr-5 ml-5 \">
\t\t\t<div class=\"col-6\" id=\"infos-client\">
\t\t\t\t<p class=\"adresse\">Adresse de facturation</p>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"{{ app.user.client.genre|capitalize }}\" aria-label=\"Disabled input example\" disabled>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"{{ app.user.client.nom|capitalize }}\" aria-label=\"Disabled input example\" disabled>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"{{ app.user.client.prenom|capitalize }}\" aria-label=\"Disabled input example\" disabled>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"{{ app.user.client.adresse|capitalize }}\" aria-label=\"Disabled input example\" disabled>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"{{ app.user.client.ville|capitalize }}\" aria-label=\"Disabled input example\" disabled>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"{{ app.user.client.cp|capitalize }}\" aria-label=\"Disabled input example\" disabled>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"{{ app.user.client.tel }}\" aria-label=\"Disabled input example\" disabled>
\t\t\t</div>
\t\t\t<div class=\"col-6\" id=\"infos-client\">
\t\t\t\t<p class=\"adresse\">Adresse de livraison</p>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"{{ app.user.client.genre|capitalize }}\" aria-label=\"Disabled input example\" disabled>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"{{ app.user.client.nom|capitalize }}\" aria-label=\"Disabled input example\" disabled>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"{{ app.user.client.prenom|capitalize }}\" aria-label=\"Disabled input example\" disabled>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"{{ app.user.client.adresse|capitalize }}\" aria-label=\"Disabled input example\" disabled>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"{{ app.user.client.ville|capitalize }}\" aria-label=\"Disabled input example\" disabled>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"{{ app.user.client.cp|capitalize }}\" aria-label=\"Disabled input example\" disabled>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"{{ app.user.client.tel }}\" aria-label=\"Disabled input example\" disabled>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row justify-content-between\">
\t\t\t<div class=\"col-12 mt-5 mb-2\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-warning\">
\t\t\t\t\t<a class=\"valider font-weight-bold text-light\" href=\"{{ path('profil_client') }}\">Modifier mes informations</a>
\t\t\t\t</button>
\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">
\t\t\t\t\t<a class=\"valider font-weight-bold text-light\" href=\"{{ path('panier_valider') }}\">Valider mes informations et passer ma commande</a>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
    </div>
</section>


{% endblock %}", "profil/recap_profil.html.twig", "C:\\Users\\fatim\\Desktop\\Symfony_fil_rouge\\templates\\profil\\recap_profil.html.twig");
    }
}
