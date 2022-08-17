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

/* accueil/details.html.twig */
class __TwigTemplate_d3626b6a999b627083bbbf50650aa3e6280bfe7d404f578cfca1e232a50cb3df extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
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
h5{
    font-size: 2.5em;
}

</style>

<section>
\t

    ";
        // line 27
        echo "\t\t<div class=\"row p-3\">
\t\t\t<nav style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
\t\t\t\t<ol class=\"breadcrumb\" id=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item \">
\t\t\t\t\t\t<a id=\"arianne\" href=\"";
        // line 31
        echo "/accueil";
        echo "\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">
\t\t\t\t\t\t<a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("souscategorie", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 34, $this->source); })()), "souscategorie", [], "any", false, false, false, 34), "categorie", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 34, $this->source); })()), "souscategorie", [], "any", false, false, false, 34), "categorie", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34), "html", null, true);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 36, $this->source); })()), "souscategorie", [], "any", false, false, false, 36), "nom", [], "any", false, false, false, 36), "html", null, true);
        echo "
\t\t\t\t\t</li>
\t\t\t\t</ol>
\t\t\t</nav>

\t\t\t<form action=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t<div class=\"row p-5\" style=\"justify-content:center\">
\t\t\t\t\t";
        // line 44
        echo "\t\t\t\t\t<div class=\"carte card mb-3\">
\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<img src=\"/assets/src/";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 47, $this->source); })()), "photo", [], "any", false, false, false, 47), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"row card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 51, $this->source); })()), "nom", [], "any", false, false, false, 51), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t\t\t\t<span id=\"spanprix\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 52, $this->source); })()), "prixht", [], "any", false, false, false, 52), "html", null, true);
        echo "€</span>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 53, $this->source); })()), "caracteristiques", [], "any", false, false, false, 53), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 54, $this->source); })()), "description", [], "any", false, false, false, 54), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t";
        // line 56
        echo "\t\t\t\t\t\t\t\t\t<div class=\"quantite mx-auto\">
\t\t\t\t\t\t\t\t\t\t";
        // line 57
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 57, $this->source); })()), "stock", [], "any", false, false, false, 57), 0))) {
            // line 58
            echo "\t\t\t\t\t\t\t\t\t\t<label for=\"quantite\">Quantité</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"number\" id=\"qte\" name=\"qte\" min=\"1\" max=\"1000\" value=\"1\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            // line 62
            echo "\t\t\t\t\t\t\t\t\t<div class=\"panier\">
\t\t\t\t\t\t\t\t\t\t<span class=\"a-button-inner\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"a-icon a-icon-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t<input id=\"add-to-cart-button\" name=\"submit.add-to-cart\" title=\"Ajouter au panier\"class=\"a-button-input\" type=\"submit\" value=\"Ajouter au panier\" aria-labelledby=\"submit.add-to-cart-announce\">
\t\t\t\t\t\t\t\t\t\t\t<span id=\"submit.add-to-cart-announce\" class=\"a-button-text\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            // line 70
            echo "\t\t\t\t\t\t\t\t\t<div class=\"stock\">
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"dispo\" style=\"color:rgb(21,141,60)\">En stock</small>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 74
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"dispo\" style=\"color:rgb(228,31,31)\">Indisponible</small>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 76
        echo "\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t    ";
        // line 83
        echo "\t\t        </div>
            </form>
\t\t</div>
\t</div>
</section>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 83,  180 => 76,  176 => 74,  170 => 70,  161 => 62,  156 => 58,  154 => 57,  151 => 56,  147 => 54,  143 => 53,  139 => 52,  135 => 51,  128 => 47,  123 => 44,  118 => 41,  110 => 36,  103 => 34,  97 => 31,  91 => 27,  68 => 5,  58 => 3,  35 => 1,);
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
h5{
    font-size: 2.5em;
}

</style>

<section>
\t

    {# FIL D'ARIANNE BREADCRUMB #}
\t\t<div class=\"row p-3\">
\t\t\t<nav style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
\t\t\t\t<ol class=\"breadcrumb\" id=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item \">
\t\t\t\t\t\t<a id=\"arianne\" href=\"{{'/accueil'}}\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">
\t\t\t\t\t\t<a href=\"{{ path('souscategorie',{id:produit.souscategorie.categorie.id})}}\">{{produit.souscategorie.categorie.nom}}</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">{{produit.souscategorie.nom}}
\t\t\t\t\t</li>
\t\t\t\t</ol>
\t\t\t</nav>

\t\t\t<form action=\"{{ path(\"panier_add\",{'id':produit.id}) }}\" method=\"post\">
\t\t\t\t<div class=\"row p-5\" style=\"justify-content:center\">
\t\t\t\t\t{# CARD #}
\t\t\t\t\t<div class=\"carte card mb-3\">
\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<img src=\"/assets/src/{{produit.photo}}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"row card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{produit.nom}}</h5>
\t\t\t\t\t\t\t\t\t<span id=\"spanprix\">{{produit.prixht}}€</span>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">{{produit.caracteristiques}}</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">{{produit.description}}</p>
\t\t\t\t\t\t\t\t\t{# CHOIX QUANTITE #}
\t\t\t\t\t\t\t\t\t<div class=\"quantite mx-auto\">
\t\t\t\t\t\t\t\t\t\t{% if produit.stock > 0 %}
\t\t\t\t\t\t\t\t\t\t<label for=\"quantite\">Quantité</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"number\" id=\"qte\" name=\"qte\" min=\"1\" max=\"1000\" value=\"1\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{# AJOUTER AU PANIER #}
\t\t\t\t\t\t\t\t\t<div class=\"panier\">
\t\t\t\t\t\t\t\t\t\t<span class=\"a-button-inner\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"a-icon a-icon-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t<input id=\"add-to-cart-button\" name=\"submit.add-to-cart\" title=\"Ajouter au panier\"class=\"a-button-input\" type=\"submit\" value=\"Ajouter au panier\" aria-labelledby=\"submit.add-to-cart-announce\">
\t\t\t\t\t\t\t\t\t\t\t<span id=\"submit.add-to-cart-announce\" class=\"a-button-text\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{# STOCK #}
\t\t\t\t\t\t\t\t\t<div class=\"stock\">
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"dispo\" style=\"color:rgb(21,141,60)\">En stock</small>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"dispo\" style=\"color:rgb(228,31,31)\">Indisponible</small>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t    {# FIN CARD #}
\t\t        </div>
            </form>
\t\t</div>
\t</div>
</section>



{% endblock %}", "accueil/details.html.twig", "C:\\Users\\fatim\\Desktop\\Symfony_fil_rouge\\templates\\accueil\\details.html.twig");
    }
}
