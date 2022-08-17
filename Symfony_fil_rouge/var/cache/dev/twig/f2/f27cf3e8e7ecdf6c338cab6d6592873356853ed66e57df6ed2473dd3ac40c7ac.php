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

/* produit/index.html.twig */
class __TwigTemplate_e032a004870d14049c36ecb6381f872d7e63c8c2d4a00fcfe75e7aa5e4286e62 extends Template
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
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "produit/index.html.twig", 1);
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

        // line 17
        echo "</style>
    <section>
        <div class=\"container bg-center\">
            <div class=\"row p-3\">

            ";
        // line 25
        echo "                <div class=\"row col-12\">
                    <div class=\"row col-12 d-flex align-items-center justify-content-between\">
                        <div class=\"col-4\">
                            <h1>Liste des produits</h1>
                        </div>
                        <div class=\"col-2\">
                            <a class=\"btn-block btn btn-warning text-light font-weight-bold text-light\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_new");
        echo "\"role=\"button\">+ Ajouter un produit</a>
                        </div>
                    </div>
                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Nom</th>
                            <th>Prix</th>
                            <th>Status</th>
                            <th>Stock</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 46, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 47
            echo "                            <tr>
                                <td><img src=\"/assets/src/";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "photo", [], "any", false, false, false, 48), "html", null, true);
            echo "\" class=\"img-fluid\" width=\"120px\"></td>
                                <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 49), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prixht", [], "any", false, false, false, 50), "html", null, true);
            echo " €</td>
                                <td>";
            // line 51
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 51), 0))) {
                echo " <span class=\"text-success\">Disponible</span>";
            } else {
                echo "<span class=\"text-danger\">Indisponible</span>";
            }
            echo "</td>
                                <td>";
            // line 52
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 52), 0))) {
                echo "<span class=\"text-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 52), "html", null, true);
                echo "</span>";
            }
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\"><i class=\"far fa-eye fa-2x mr-3 text-primary\" title=\"Voir le produit\"></i></a>
                                    <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\"><i class=\"far fa-edit fa-2x text-secondary\" title=\"Editer le produit\"></i></a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "                            <tr>
                                <td colspan=\"10\">Aucun enregistrement trouvé</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 63,  153 => 59,  144 => 55,  140 => 54,  131 => 52,  123 => 51,  119 => 50,  113 => 49,  109 => 48,  106 => 47,  101 => 46,  83 => 31,  75 => 25,  68 => 17,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block body %}
{# CSS #}
{# <style>

.fa-eye{

    color:rgb(190, 92, 35);
}
.fa-edit{

    color:rgb(53, 140, 175);
}

 #}
</style>
    <section>
        <div class=\"container bg-center\">
            <div class=\"row p-3\">

            {# <div class=\"col-2 mb-5 mt-3 ml-auto\">
                <a class=\"btn-block btn btn-primary text-light font-weight-bold text-light\" href=\"\"role=\"button\">+ Ajouter un produit</a>
            </div> #}
                <div class=\"row col-12\">
                    <div class=\"row col-12 d-flex align-items-center justify-content-between\">
                        <div class=\"col-4\">
                            <h1>Liste des produits</h1>
                        </div>
                        <div class=\"col-2\">
                            <a class=\"btn-block btn btn-warning text-light font-weight-bold text-light\" href=\"{{ path('produit_new')}}\"role=\"button\">+ Ajouter un produit</a>
                        </div>
                    </div>
                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Nom</th>
                            <th>Prix</th>
                            <th>Status</th>
                            <th>Stock</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for produit in produits %}
                            <tr>
                                <td><img src=\"/assets/src/{{ produit.photo }}\" class=\"img-fluid\" width=\"120px\"></td>
                                <td><a href=\"{{ path('produit_show', {'id': produit.id}) }}\">{{ produit.nom }}</a></td>
                                <td>{{ produit.prixht}} €</td>
                                <td>{% if produit.stock >0 %} <span class=\"text-success\">Disponible</span>{% else %}<span class=\"text-danger\">Indisponible</span>{% endif %}</td>
                                <td>{% if produit.stock >0 %}<span class=\"text-success\">{{produit.stock}}</span>{% endif %}</td>
                                <td>
                                    <a href=\"{{ path('produit_show', {'id': produit.id}) }}\"><i class=\"far fa-eye fa-2x mr-3 text-primary\" title=\"Voir le produit\"></i></a>
                                    <a href=\"{{ path('produit_edit', {'id': produit.id}) }}\"><i class=\"far fa-edit fa-2x text-secondary\" title=\"Editer le produit\"></i></a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"10\">Aucun enregistrement trouvé</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>
{% endblock %}", "produit/index.html.twig", "C:\\Users\\fatim\\Desktop\\Symfony_fil_rouge\\templates\\produit\\index.html.twig");
    }
}
