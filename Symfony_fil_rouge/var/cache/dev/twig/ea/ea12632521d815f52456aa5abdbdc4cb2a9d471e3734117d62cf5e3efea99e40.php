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

/* contenir/panier.html.twig */
class __TwigTemplate_ad1bfe116785d9a113d7dca867ae547830af2876f19e2809d9218281834e4298 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contenir/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contenir/panier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contenir/panier.html.twig", 1);
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

input{
    width:25%;
}
</style>

<section>
        <div class=\"bg-light p-3\">
            <h1>Votre panier</h1>
        </div>
        ";
        // line 16
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 16, $this->source); })())), 0))) {
            // line 17
            echo "            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Produit</th>
                        <th>Quantité</th>
                        <th>Prix</th>
                        <th>Total</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 31
                echo "                        <tr>
                            <td><a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\"><img class=\"photoproduit\" src=\"/assets/src/ ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 32), "photo", [], "any", false, false, false, 32), "html", null, true);
                echo "\"></a></td>
                            <td><a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 33), "nom", [], "any", false, false, false, 33), "html", null, true);
                echo "</a></td>
                            <td>
                                <form action=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_update", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\" method=\"post\">
                                    ";
                // line 37
                echo "                                    <input type=\"number\" id=\"qte\" name=\"qte\" min=\"0\" max=\"1000\" onchange=\"this.form.submit()\"  value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 37), "html", null, true);
                echo "\">
                                </form>
                            </td>
                            <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 40), "prixht", [], "any", false, false, false, 40), 2, ".", " "), "html", null, true);
                echo "€</td>
                            <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 41), "prixht", [], "any", false, false, false, 41) * twig_get_attribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 41)), 2, ".", " "), "html", null, true);
                echo " €</td>
                            <td>
                                
                            </td>
                            <td>
                                <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\" type=\"submit\" class=\"btn btn-danger btn-sm\">
                                    <i class=\"fas fa-trash\"></i>
                                </a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"4\"class=\"text-right\">HT: </td>
                        <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 56, $this->source); })()), 2, ".", " "), "html", null, true);
            echo " €</td>
                    </tr>
                    <tr>
                        <td colspan=\"4\"class=\"text-right\">TVA: </td>
                        <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 60, $this->source); })()) * 0.05), 2, ".", " "), "html", null, true);
            echo "€</td>
                    </tr>
                    <tr>
                        <td colspan=\"4\" class=\"text-right total\">Total TTC: </td>
                        <td class=\"total\">";
            // line 64
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 64, $this->source); })()) + ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 64, $this->source); })()) * 0.05)), 2, ".", " "), "html", null, true);
            echo " €</td>
                        <td></td>
                    </tr>
                    <tr >
                        <td colspan=\"5\" class=\"text-right\">
                            <a href=\"";
            // line 69
            echo "/accueil";
            echo "\" class=\"col-2 btn btn-secondary btn-block\">
                            Retour
                            </a>
                            <a type=\"submit\" href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("informations_client");
            echo "\" class=\"col-2 mt-0 btn btn-success btn-block\">
                            Valider le panier
                            </a>                                                                                
                        </td>
                    </tr>
                </tfoot>
            </table>
        ";
        } else {
            // line 80
            echo "            <p> C'est vide!</p>
        ";
        }
        // line 82
        echo "\t</div>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contenir/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 82,  198 => 80,  187 => 72,  181 => 69,  173 => 64,  166 => 60,  159 => 56,  153 => 52,  141 => 46,  133 => 41,  129 => 40,  122 => 37,  118 => 35,  111 => 33,  105 => 32,  102 => 31,  98 => 30,  83 => 17,  81 => 16,  68 => 5,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
{# CSS #}
<style>

input{
    width:25%;
}
</style>

<section>
        <div class=\"bg-light p-3\">
            <h1>Votre panier</h1>
        </div>
        {% if items | length > 0  %}
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Produit</th>
                        <th>Quantité</th>
                        <th>Prix</th>
                        <th>Total</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                {% for item in items %}
                        <tr>
                            <td><a href=\"{{path('details',{id:item.produit.id})}}\"><img class=\"photoproduit\" src=\"/assets/src/ {{item.produit.photo}}\"></a></td>
                            <td><a href=\"{{path('details',{id:item.produit.id})}}\">{{item.produit.nom}}</a></td>
                            <td>
                                <form action=\"{{ path('panier_update',{'id':item.produit.id}) }}\" method=\"post\">
                                    {# <label for=\"quantite\">Qté</label> #}
                                    <input type=\"number\" id=\"qte\" name=\"qte\" min=\"0\" max=\"1000\" onchange=\"this.form.submit()\"  value=\"{{item.quantite}}\">
                                </form>
                            </td>
                            <td>{{(item.produit.prixht)|number_format(2, '.', ' ')}}€</td>
                            <td>{{(item.produit.prixht * item.quantite)|number_format(2, '.', ' ')}} €</td>
                            <td>
                                
                            </td>
                            <td>
                                <a href=\"{{ path('panier_delete',{'id':item.produit.id}) }}\" type=\"submit\" class=\"btn btn-danger btn-sm\">
                                    <i class=\"fas fa-trash\"></i>
                                </a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"4\"class=\"text-right\">HT: </td>
                        <td>{{total|number_format(2, '.', ' ')}} €</td>
                    </tr>
                    <tr>
                        <td colspan=\"4\"class=\"text-right\">TVA: </td>
                        <td>{{(total * 0.05)|number_format(2, '.', ' ')}}€</td>
                    </tr>
                    <tr>
                        <td colspan=\"4\" class=\"text-right total\">Total TTC: </td>
                        <td class=\"total\">{{(total + total * 0.05)|number_format(2, '.', ' ')}} €</td>
                        <td></td>
                    </tr>
                    <tr >
                        <td colspan=\"5\" class=\"text-right\">
                            <a href=\"{{'/accueil'}}\" class=\"col-2 btn btn-secondary btn-block\">
                            Retour
                            </a>
                            <a type=\"submit\" href=\"{{ path('informations_client') }}\" class=\"col-2 mt-0 btn btn-success btn-block\">
                            Valider le panier
                            </a>                                                                                
                        </td>
                    </tr>
                </tfoot>
            </table>
        {% else %}
            <p> C'est vide!</p>
        {% endif %}
\t</div>
</section>

{% endblock %}
", "contenir/panier.html.twig", "C:\\Users\\fatim\\Desktop\\Symfony_fil_rouge\\templates\\contenir\\panier.html.twig");
    }
}
