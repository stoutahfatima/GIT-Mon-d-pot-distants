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

/* accueil/accueil.html.twig */
class __TwigTemplate_c087530e80f021055a9f156cba9c2c0a65e901511f053d7f76bdcddddf2fd672 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/accueil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

";
        // line 8
        echo "<style>
.overlay-image .image {
    display: block;
    width: 100%;
}

</style>


";
        // line 18
        echo "<section>
\t\t<div class=\"row p-4\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<img src=\"assets/src/Images.jpg\" class=\"w-100\" height=\"500\">
\t\t\t<br>
\t\t\t<br>
\t\t<div class=\"row mt-2 mb-2\">
\t\t\t<img src=\"assets/src/banniere centre 4 pictos.png\" class=\"w-100\">
\t\t</div>

\t\t<div class=\"row p-4\">
\t\t\t<h2> Nos Catégories!</h2>
\t\t</div>
\t\t";
        // line 32
        echo "\t\t<div class=\"row p-2\">\t\t\t
\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 34
            echo "\t\t\t<div class=\"col-sm-3 p-0 \">
\t\t\t\t<div class=\" overlay-image\"> 
\t\t\t\t\t<a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("souscategorie", ["id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">\t 
\t\t\t\t\t\t<img class=\"img-border-radius\" src=\"assets/src/";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "photos", [], "any", false, false, false, 37), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "nom", [], "any", false, false, false, 37), "html", null, true);
            echo "\"height=\"188px\"/>
\t\t\t\t\t</a>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t
\t\t<div class=\"row p-4\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<h2> Meilleurs ventes!</h2>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<h2>Nos partenaires</h2>
\t\t\t</div>
\t\t\t<div class=\"col-sm-2\">
\t\t\t\t<div class=\"overlay-image\">
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\">
\t\t\t\t\t\t<div class=\"hover\">
\t\t\t\t\t\t\t<img class=\"image\" src=\"assets/src/TOP VENTES guitare.png\" alt=\"Top vente guitare roll over\" height=\"248\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-2\">
\t\t\t\t<div class=\"overlay-image\">
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\">
\t\t\t\t\t\t<div class=\"hover\">
\t\t\t\t\t\t\t<img class=\"image\" src=\"assets/src/TOP VENTES saxo.png \" alt=\"Top vente saxo\" height=\"248\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-8\">
\t\t\t\t<img class=\"w-100\" src=\"assets/src/partenaires 4 logos.png\" alt=\"partenaires\" height=\"248\"/>
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
        return "accueil/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 43,  113 => 37,  109 => 36,  105 => 34,  101 => 33,  98 => 32,  83 => 18,  72 => 8,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}


{# CSS #}
<style>
.overlay-image .image {
    display: block;
    width: 100%;
}

</style>


{# CORPS DE LA PAGE #}
<section>
\t\t<div class=\"row p-4\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<img src=\"assets/src/Images.jpg\" class=\"w-100\" height=\"500\">
\t\t\t<br>
\t\t\t<br>
\t\t<div class=\"row mt-2 mb-2\">
\t\t\t<img src=\"assets/src/banniere centre 4 pictos.png\" class=\"w-100\">
\t\t</div>

\t\t<div class=\"row p-4\">
\t\t\t<h2> Nos Catégories!</h2>
\t\t</div>
\t\t{# CORDES #}
\t\t<div class=\"row p-2\">\t\t\t
\t\t\t{% for row in home %}
\t\t\t<div class=\"col-sm-3 p-0 \">
\t\t\t\t<div class=\" overlay-image\"> 
\t\t\t\t\t<a href=\"{{ path('souscategorie',{id:row.id})}}\">\t 
\t\t\t\t\t\t<img class=\"img-border-radius\" src=\"assets/src/{{row.photos}}\" alt=\"{{row.nom}}\"height=\"188px\"/>
\t\t\t\t\t</a>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endfor %}
\t\t\t
\t\t<div class=\"row p-4\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<h2> Meilleurs ventes!</h2>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<h2>Nos partenaires</h2>
\t\t\t</div>
\t\t\t<div class=\"col-sm-2\">
\t\t\t\t<div class=\"overlay-image\">
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\">
\t\t\t\t\t\t<div class=\"hover\">
\t\t\t\t\t\t\t<img class=\"image\" src=\"assets/src/TOP VENTES guitare.png\" alt=\"Top vente guitare roll over\" height=\"248\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-2\">
\t\t\t\t<div class=\"overlay-image\">
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\">
\t\t\t\t\t\t<div class=\"hover\">
\t\t\t\t\t\t\t<img class=\"image\" src=\"assets/src/TOP VENTES saxo.png \" alt=\"Top vente saxo\" height=\"248\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-8\">
\t\t\t\t<img class=\"w-100\" src=\"assets/src/partenaires 4 logos.png\" alt=\"partenaires\" height=\"248\"/>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

    {% endblock %}
", "accueil/accueil.html.twig", "C:\\Users\\fatim\\Desktop\\Symfony_fil_rouge\\templates\\accueil\\accueil.html.twig");
    }
}
