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

/* accueil/souscategories.html.twig */
class __TwigTemplate_103817c7f615761943eb998e52f0fa073066388f729e467de52d26b6f9bbc411 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/souscategories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/souscategories.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/souscategories.html.twig", 1);
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

        // line 6
        echo "<style>
.overlay-image .image {
    display: block;
    height:45%;
    width:45%
}
</style>


<section>
\t\t<div class=\"row p-3\">
\t\t\t<nav style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
\t\t\t\t<ol class=\"breadcrumb\" id=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item \">
\t\t\t\t\t\t<a id=\"arianne\" href=\"";
        // line 20
        echo "/accueil";
        echo "\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 23
        echo "\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["listesouscategories"]) || array_key_exists("listesouscategories", $context) ? $context["listesouscategories"] : (function () { throw new RuntimeError('Variable "listesouscategories" does not exist.', 23, $this->source); })())), "categorie", [], "any", false, false, false, 23), "nom", [], "any", false, false, false, 23), "html", null, true);
        echo "</li>
\t\t\t\t</ol>
\t\t\t</nav>
\t\t</div>
        <div class=\"row pb-5\" style=\"justify-content:center\">
\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listesouscategories"]) || array_key_exists("listesouscategories", $context) ? $context["listesouscategories"] : (function () { throw new RuntimeError('Variable "listesouscategories" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 29
            echo "            <div class=\"col-sm-4 p-0 mt-3 mb-3\">
\t\t\t\t<div class=\"overlay-image\">
\t\t\t\t\t<a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeproduits", ["id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t<div class=\"hover\">
\t\t\t\t\t\t\t<img class=\"image mx-auto\" src=\"/assets/src/";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "photos", [], "any", false, false, false, 33), "html", null, true);
            echo "\" alt=\"Photos_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "nom", [], "any", false, false, false, 33), "html", null, true);
            echo "\" />
                        </div>
                        <div class=\"liens\">
                            <span>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "nom", [], "any", false, false, false, 36), "html", null, true);
            echo "</span>
                        </div>
\t\t\t\t\t</a>
\t\t\t\t</div>
            </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            
\t\t\t
        </div>    
\t</div>
</section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/souscategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 42,  119 => 36,  111 => 33,  106 => 31,  102 => 29,  98 => 28,  89 => 23,  84 => 20,  68 => 6,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
{# CSS #}
<style>
.overlay-image .image {
    display: block;
    height:45%;
    width:45%
}
</style>


<section>
\t\t<div class=\"row p-3\">
\t\t\t<nav style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
\t\t\t\t<ol class=\"breadcrumb\" id=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item \">
\t\t\t\t\t\t<a id=\"arianne\" href=\"{{'/accueil'}}\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t{# Récupère le 1er objet de liste sous rubrique, et y récupère le nom de sa rubrique associée #}
\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">{{listesouscategories|first.categorie.nom}}</li>
\t\t\t\t</ol>
\t\t\t</nav>
\t\t</div>
        <div class=\"row pb-5\" style=\"justify-content:center\">
\t\t{% for row in listesouscategories %}
            <div class=\"col-sm-4 p-0 mt-3 mb-3\">
\t\t\t\t<div class=\"overlay-image\">
\t\t\t\t\t<a href=\"{{ path('listeproduits',{id:row.id})}}\">
\t\t\t\t\t\t<div class=\"hover\">
\t\t\t\t\t\t\t<img class=\"image mx-auto\" src=\"/assets/src/{{row.photos}}\" alt=\"Photos_{{row.nom}}\" />
                        </div>
                        <div class=\"liens\">
                            <span>{{row.nom}}</span>
                        </div>
\t\t\t\t\t</a>
\t\t\t\t</div>
            </div>
\t\t{% endfor %}
            
\t\t\t
        </div>    
\t</div>
</section>


{% endblock %}
", "accueil/souscategories.html.twig", "C:\\Users\\fatim\\Desktop\\Symfony_fil_rouge\\templates\\accueil\\souscategories.html.twig");
    }
}
