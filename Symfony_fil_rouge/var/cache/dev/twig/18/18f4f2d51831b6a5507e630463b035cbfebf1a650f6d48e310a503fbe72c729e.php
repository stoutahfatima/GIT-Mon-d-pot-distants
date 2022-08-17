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

/* facture/index.html.twig */
class __TwigTemplate_b3f8a025f7b1117518ae89d1d0c7c2c4f9022bcae968aa81d46970566033c28b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    <title>Facture</title>
    <style>
        body {
            /*font-size: 20px;*/
          
            font-size: 1.4rem;
            font-weight: 400;
            line-height: 1.5;
        }
        .table-facture th,
        .table-facture td {
            border: 1px solid gray;
            padding: 5px;
        }
        .table-facture {
            border-collapse: collapse;
            width: 100%;
        }
        .table-facture th,
        .table-facture td {
            border: 1px solid gray;
            padding: 5px;
        }
        .table-facture .lib-total {
            text-align: right;
            border-style: none;
        }
        td.lib-acti {
            /*font-style: italic;*/
            width: 200px;
            text-align: center;
        }
        td.fld-num,
        th.fld-num {
            text-align: right;
            width: 60px;
        }
        td.fld-log {
            text-align: center;
        }
        .table-facture thead {
            background-color: green;
            color: white;
        }
        .table-facture tbody {
            /*background-color: ivory;*/
        }
        table > caption {
            font-size: 20px;
            padding: 5px;
        }
        .container {
            display: table;
            width: 100%;
            padding-left: 4px;
            padding-right: 4px;
        }
        .container div {
            display: table-cell;
        }
        .entreprise {
            width: 60%;
        }
        .bgcaddie {
            color: #011D7A !important;
        }
        .textLogo {
            font-weight: bold;
            font-size: 2.8rem;
        }
        .LinkLogo, .LinkLogo:hover, .LinkLogo:focus {
            text-decoration: none;
        }
        .text-dark {
            color: #343a40 !important;
        }
    </style>
</head>
<body>
<div class=\"container\">
    <div class=\"entreprise\">
        <a class=\"LinkLogo\" href=\"/\">
            <span class=\"textLogo bgcaddie\">Village</span><i class=\"fa fa-solid fa-guitar\"></i>
            <span class=\"textLogo text-dark\">Green</span>
        </a>

        <p>10 rue de la guitare <br>80000 Amiens</p>
    </div>
    <div>
        <p>";
        // line 98
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 98, $this->source); })()), "client", [], "any", false, false, false, 98), "genre", [], "any", false, false, false, 98)), "html", null, true);
        echo "
            ";
        // line 99
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 99, $this->source); })()), "client", [], "any", false, false, false, 99), "nom", [], "any", false, false, false, 99)), "html", null, true);
        echo "
            ";
        // line 100
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 100, $this->source); })()), "client", [], "any", false, false, false, 100), "prenom", [], "any", false, false, false, 100)), "html", null, true);
        echo " </p>
        <p> </p>
        <p>
            </p>
        </p>
        <p><strong>Tél: ";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 105, $this->source); })()), "client", [], "any", false, false, false, 105), "tel", [], "any", false, false, false, 105), "html", null, true);
        echo "</strong></p>
        <p><strong>Date: ";
        // line 106
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 106, $this->source); })()), "date", [], "any", false, false, false, 106), "Y-m-d"), "html", null, true);
        echo "</strong></p>

    </div>
</div>


<table class=\"table-facture\">
    <caption>Facture n°";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 113, $this->source); })()), "id", [], "any", false, false, false, 113), "html", null, true);
        echo "</caption>
    <thead>
    <tr>
        <th>Produit</th>
        <th>Quantité</th>
        <th>Prix unitaire</th>
    </tr>
    </thead>
    <tbody>
        ";
        // line 122
        $context["total"] = 0;
        // line 123
        echo "        ";
        $context["quantite"] = 0;
        // line 124
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 124, $this->source); })()), "contenirs", [], "any", false, false, false, 124));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 125
            echo "        <tr>

            <td class=\"fld-log\">";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "produits", [], "any", false, false, false, 127), "nom", [], "any", false, false, false, 127), "html", null, true);
            echo "</td>
            <td class=\"fld-num\">";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "qtitecommande", [], "any", false, false, false, 128), "html", null, true);
            echo "</td>
            <td class=\"lib-acti\">";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "prixvente", [], "any", false, false, false, 129), "html", null, true);
            echo "€</td>
        </tr>
        ";
            // line 131
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 131, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["row"], "prixvente", [], "any", false, false, false, 131) * twig_get_attribute($this->env, $this->source, $context["row"], "qtitecommande", [], "any", false, false, false, 131)));
            // line 132
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "    </tbody>

    <tfoot>
    <tr>
        <th colspan=\"2\">Sous Total HT</th>
        <td class=\"lib-acti\">€</td>
    </tr>
    <tr>
        <th colspan=\"2\">Tva</th>
        
        <td class=\"lib-acti\">€</td>
    </tr>

    <tr>
        <th colspan=\"2\">Total TTC</th>
        <td class=\"lib-acti\">€</td>
    </tr>
    </tfoot>
</table>
</body>
</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "facture/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 133,  213 => 132,  211 => 131,  206 => 129,  202 => 128,  198 => 127,  194 => 125,  189 => 124,  186 => 123,  184 => 122,  172 => 113,  162 => 106,  158 => 105,  150 => 100,  146 => 99,  142 => 98,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    <title>Facture</title>
    <style>
        body {
            /*font-size: 20px;*/
          
            font-size: 1.4rem;
            font-weight: 400;
            line-height: 1.5;
        }
        .table-facture th,
        .table-facture td {
            border: 1px solid gray;
            padding: 5px;
        }
        .table-facture {
            border-collapse: collapse;
            width: 100%;
        }
        .table-facture th,
        .table-facture td {
            border: 1px solid gray;
            padding: 5px;
        }
        .table-facture .lib-total {
            text-align: right;
            border-style: none;
        }
        td.lib-acti {
            /*font-style: italic;*/
            width: 200px;
            text-align: center;
        }
        td.fld-num,
        th.fld-num {
            text-align: right;
            width: 60px;
        }
        td.fld-log {
            text-align: center;
        }
        .table-facture thead {
            background-color: green;
            color: white;
        }
        .table-facture tbody {
            /*background-color: ivory;*/
        }
        table > caption {
            font-size: 20px;
            padding: 5px;
        }
        .container {
            display: table;
            width: 100%;
            padding-left: 4px;
            padding-right: 4px;
        }
        .container div {
            display: table-cell;
        }
        .entreprise {
            width: 60%;
        }
        .bgcaddie {
            color: #011D7A !important;
        }
        .textLogo {
            font-weight: bold;
            font-size: 2.8rem;
        }
        .LinkLogo, .LinkLogo:hover, .LinkLogo:focus {
            text-decoration: none;
        }
        .text-dark {
            color: #343a40 !important;
        }
    </style>
</head>
<body>
<div class=\"container\">
    <div class=\"entreprise\">
        <a class=\"LinkLogo\" href=\"/\">
            <span class=\"textLogo bgcaddie\">Village</span><i class=\"fa fa-solid fa-guitar\"></i>
            <span class=\"textLogo text-dark\">Green</span>
        </a>

        <p>10 rue de la guitare <br>80000 Amiens</p>
    </div>
    <div>
        <p>{{ commande.client.genre|capitalize }}
            {{ commande.client.nom|capitalize }}
            {{ commande.client.prenom|capitalize }} </p>
        <p> </p>
        <p>
            </p>
        </p>
        <p><strong>Tél: {{ commande.client.tel }}</strong></p>
        <p><strong>Date: {{ commande.date|date('Y-m-d')}}</strong></p>

    </div>
</div>


<table class=\"table-facture\">
    <caption>Facture n°{{commande.id}}</caption>
    <thead>
    <tr>
        <th>Produit</th>
        <th>Quantité</th>
        <th>Prix unitaire</th>
    </tr>
    </thead>
    <tbody>
        {% set total = 0 %}
        {% set quantite = 0 %}
        {% for row in commande.contenirs %}
        <tr>

            <td class=\"fld-log\">{{row.produits.nom}}</td>
            <td class=\"fld-num\">{{row.qtitecommande}}</td>
            <td class=\"lib-acti\">{{row.prixvente}}€</td>
        </tr>
        {% set total = total + row.prixvente * row.qtitecommande %}
        {% endfor %}
    </tbody>

    <tfoot>
    <tr>
        <th colspan=\"2\">Sous Total HT</th>
        <td class=\"lib-acti\">€</td>
    </tr>
    <tr>
        <th colspan=\"2\">Tva</th>
        
        <td class=\"lib-acti\">€</td>
    </tr>

    <tr>
        <th colspan=\"2\">Total TTC</th>
        <td class=\"lib-acti\">€</td>
    </tr>
    </tfoot>
</table>
</body>
</html>


", "facture/index.html.twig", "C:\\Users\\fatim\\Desktop\\Symfony_fil_rouge\\templates\\facture\\index.html.twig");
    }
}
