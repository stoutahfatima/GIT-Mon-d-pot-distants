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

/* admin_accueil/accueil.html.twig */
class __TwigTemplate_b5858f1949dfd786fb14095a14265f7f9061fec6e82cd88dd40e793d9b797ef8 extends Template
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
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_accueil/accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_accueil/accueil.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin_accueil/accueil.html.twig", 1);
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

        echo "Hello AdminAccueilController!";
        
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
.container{

    height: 550%;
    width: 200%;
}

</style>



";
        // line 19
        echo "<section>
\t<div class=\"container bg-center\">
        <div class=\"row p-3\" style=\"justify-content:center\">
            <h1 class=\"mb-4\">Liste des commandes</h1>
            <table class=\"table\">
                <thead class=\"\">
                    <tr>
                        <th>N°</th>
                        <th>Commande passée le</th>
                        <th>Client</th>
                        <th>Adresse</th>
                        <th>Ville</th>
                        <th>CP</th>
                        <th>Quantité</th>
                        <th>HT</th>
                        <th>TTC</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 40
            echo "                        <tr>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "date", [], "any", false, false, false, 42), "d-m-Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "client", [], "any", false, false, false, 43), "nom", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "adresselivraison", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "villelivraison", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "cplivraison", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                            ";
            // line 47
            $context["total"] = 0;
            // line 48
            echo "                            ";
            $context["quantite"] = 0;
            // line 49
            echo "                            ";
            $context["tva"] = 0;
            // line 50
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["commande"], "contenirs", [], "any", false, false, false, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 51
                echo "                            ";
                $context["tva"] = (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 51, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["row"], "prixvente", [], "any", false, false, false, 51) * twig_get_attribute($this->env, $this->source, $context["row"], "qtitecommande", [], "any", false, false, false, 51))) * 0.05);
                // line 52
                echo "                            ";
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 52, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["row"], "prixvente", [], "any", false, false, false, 52) * twig_get_attribute($this->env, $this->source, $context["row"], "qtitecommande", [], "any", false, false, false, 52)));
                // line 53
                echo "                            ";
                $context["quantite"] = ((isset($context["quantite"]) || array_key_exists("quantite", $context) ? $context["quantite"] : (function () { throw new RuntimeError('Variable "quantite" does not exist.', 53, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["row"], "qtitecommande", [], "any", false, false, false, 53));
                // line 54
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                            <td>";
            echo twig_escape_filter($this->env, (isset($context["quantite"]) || array_key_exists("quantite", $context) ? $context["quantite"] : (function () { throw new RuntimeError('Variable "quantite" does not exist.', 55, $this->source); })()), "html", null, true);
            echo "</td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 56, $this->source); })()), 2, ".", " "), "html", null, true);
            echo " €</td>
                            <td class=\"text-danger\">";
            // line 57
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 57, $this->source); })()) + (isset($context["tva"]) || array_key_exists("tva", $context) ? $context["tva"] : (function () { throw new RuntimeError('Variable "tva" does not exist.', 57, $this->source); })())), 2, ".", " "), "html", null, true);
            echo " €</td>
                            <td>
                                <p>
                                    <a class=\"\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facturePdf", ["commande" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\" download  title=\"Télécharger la facture\">
                                        <i class=\"fa fa-file-pdf-o fa-2x text-danger bg-light\"></i>
                                    </a>
                                </p>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                </tbody>
            </table>
        </div>
\t</div>
</section>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_accueil/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 67,  197 => 60,  191 => 57,  187 => 56,  182 => 55,  176 => 54,  173 => 53,  170 => 52,  167 => 51,  162 => 50,  159 => 49,  156 => 48,  154 => 47,  150 => 46,  146 => 45,  142 => 44,  138 => 43,  134 => 42,  130 => 41,  127 => 40,  123 => 39,  101 => 19,  88 => 7,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Hello AdminAccueilController!{% endblock %}

{% block body %}
{# CSS #}
<style>
.container{

    height: 550%;
    width: 200%;
}

</style>



{# CORPS DE LA PAGE #}
<section>
\t<div class=\"container bg-center\">
        <div class=\"row p-3\" style=\"justify-content:center\">
            <h1 class=\"mb-4\">Liste des commandes</h1>
            <table class=\"table\">
                <thead class=\"\">
                    <tr>
                        <th>N°</th>
                        <th>Commande passée le</th>
                        <th>Client</th>
                        <th>Adresse</th>
                        <th>Ville</th>
                        <th>CP</th>
                        <th>Quantité</th>
                        <th>HT</th>
                        <th>TTC</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {% for commande in commandes %}
                        <tr>
                            <td>{{ commande.id }}</td>
                            <td>{{ commande.date|date('d-m-Y') }}</td>
                            <td>{{ (commande.client.nom) }}</td>
                            <td>{{ commande.adresselivraison}}</td>
                            <td>{{ commande.villelivraison }}</td>
                            <td>{{ commande.cplivraison }}</td>
                            {% set total = 0 %}
                            {% set quantite = 0 %}
                            {% set tva = 0 %}
                            {% for row in commande.contenirs %}
                            {%  set tva = (total + row.prixvente * row.qtitecommande)* 0.05 %}
                            {% set total = (total + row.prixvente * row.qtitecommande) %}
                            {%  set quantite = quantite + row.qtitecommande %}
                            {% endfor %}
                            <td>{{ quantite }}</td>
                            <td>{{ total|number_format(2, '.', ' ') }} €</td>
                            <td class=\"text-danger\">{{ (total + tva)|number_format(2, '.', ' ') }} €</td>
                            <td>
                                <p>
                                    <a class=\"\" href=\"{{ path('facturePdf',{commande:commande.id}) }}\" download  title=\"Télécharger la facture\">
                                        <i class=\"fa fa-file-pdf-o fa-2x text-danger bg-light\"></i>
                                    </a>
                                </p>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
\t</div>
</section>




{% endblock %}
", "admin_accueil/accueil.html.twig", "C:\\Users\\fatim\\Desktop\\Symfony_fil_rouge\\templates\\admin_accueil\\accueil.html.twig");
    }
}
