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

/* accueil/listeproduits.html.twig */
class __TwigTemplate_01d0dd2531e9064ee81d3058fab1271cb6c1786fc609c33241937fcf15f9b649 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/listeproduits.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/listeproduits.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/listeproduits.html.twig", 1);
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
#spanprix {
font-size: 2.5em;
}

#submit.add-to-cart-announce{
font-size: 0.5em !important;
}

label{
\tmargin-bottom:0;
}

</style>

<section>
\t
\t\t";
        // line 24
        echo "\t\t<div class=\"row p-3\">
\t\t\t<nav style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
\t\t\t\t<ol class=\"breadcrumb\" id=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item \">
\t\t\t\t\t\t<a id=\"arianne\" href=\"";
        // line 28
        echo "/accueil";
        echo "\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 31
        echo "\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">
\t\t\t\t\t";
        // line 32
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 32, $this->source); })())), 0))) {
            // line 33
            echo "\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("souscategorie", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 33, $this->source); })())), "souscategorie", [], "any", false, false, false, 33), "categorie", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 33, $this->source); })())), "souscategorie", [], "any", false, false, false, 33), "categorie", [], "any", false, false, false, 33), "nom", [], "any", false, false, false, 33), "html", null, true);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 35, $this->source); })())), "souscategorie", [], "any", false, false, false, 35), "nom", [], "any", false, false, false, 35), "html", null, true);
            echo "
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t</ol>
\t\t\t</nav>

\t\t\t<div class=\"row p-5\" style=\"justify-content:center\">
\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 43
            echo "\t\t\t\t";
            // line 44
            echo "\t\t\t\t\t<div class=\"carte card mb-3\">
\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details", ["id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"/assets/src/";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "photo", [], "any", false, false, false, 48), "html", null, true);
            echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"row card-body\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details", ["id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "nom", [], "any", false, false, false, 54), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details", ["id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "caracteristiques", [], "any", false, false, false, 57), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<span id=\"spanprix\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "prixht", [], "any", false, false, false, 59), "html", null, true);
            echo "€</span>
\t\t\t\t\t\t\t\t\t";
            // line 61
            echo "\t\t\t\t\t\t\t\t\t<div class=\"stock\">
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 63
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["row"], "stock", [], "any", false, false, false, 63), 0))) {
                // line 64
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"dispo\" style=\"color:rgb(21,141,60)\">En stock</small>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 66
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"dispo\" style=\"color:rgb(228,31,31)\">Indisponible</small>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 68
            echo "\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 73
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t\t</div>
\t\t</div>
\t</section>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/listeproduits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 76,  188 => 73,  182 => 68,  178 => 66,  174 => 64,  172 => 63,  168 => 61,  164 => 59,  159 => 57,  155 => 56,  150 => 54,  146 => 53,  138 => 48,  134 => 47,  129 => 44,  127 => 43,  123 => 42,  117 => 38,  111 => 35,  103 => 33,  101 => 32,  98 => 31,  93 => 28,  87 => 24,  68 => 6,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
{# CSS #}
<style>
#spanprix {
font-size: 2.5em;
}

#submit.add-to-cart-announce{
font-size: 0.5em !important;
}

label{
\tmargin-bottom:0;
}

</style>

<section>
\t
\t\t{# MODIFIER LE FIL D'ARIANNE ENLEVER LE BRUT ET PASSER LES VALEURS CONTROLLEUR #}
\t\t<div class=\"row p-3\">
\t\t\t<nav style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
\t\t\t\t<ol class=\"breadcrumb\" id=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item \">
\t\t\t\t\t\t<a id=\"arianne\" href=\"{{'/accueil'}}\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t{# Récupère le 1er objet de liste sous categorie, et y récupère le nom de sa categorie associée #}
\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">
\t\t\t\t\t{% if produit|length > 0 %}
\t\t\t\t\t\t<a href=\"{{ path('souscategorie',{id:produit|first.souscategorie.categorie.id})}}\">{{produit|first.souscategorie.categorie.nom}}</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">{{produit|first.souscategorie.nom}}
\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t</ol>
\t\t\t</nav>

\t\t\t<div class=\"row p-5\" style=\"justify-content:center\">
\t\t\t\t{% for row in produit %}
\t\t\t\t{# CARD #}
\t\t\t\t\t<div class=\"carte card mb-3\">
\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('details',{id:row.id})}}\">
\t\t\t\t\t\t\t\t\t<img src=\"/assets/src/{{row.photo}}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"row card-body\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('details',{id:row.id})}}\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{row.nom}}</h5>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('details',{id:row.id})}}\">
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">{{row.caracteristiques}}</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<span id=\"spanprix\">{{row.prixht}}€</span>
\t\t\t\t\t\t\t\t\t{# STOCK #}
\t\t\t\t\t\t\t\t\t<div class=\"stock\">
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t\t\t{% if row.stock > 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"dispo\" style=\"color:rgb(21,141,60)\">En stock</small>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"dispo\" style=\"color:rgb(228,31,31)\">Indisponible</small>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{# FIN CARD #}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</section>




{% endblock %}
", "accueil/listeproduits.html.twig", "C:\\Users\\fatim\\Desktop\\Symfony_fil_rouge\\templates\\accueil\\listeproduits.html.twig");
    }
}
