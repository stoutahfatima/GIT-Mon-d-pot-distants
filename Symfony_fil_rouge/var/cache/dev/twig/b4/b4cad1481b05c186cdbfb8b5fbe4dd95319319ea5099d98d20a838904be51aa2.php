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

/* profil/profil.html.twig */
class __TwigTemplate_0dd7921df6961718c4a9f73176fadff50b9d2753782cc74ff7c599a6d1f1ef45 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil/profil.html.twig", 1);
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

        echo " Profil ";
        
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
\t\t<div class=\"row pb-3 pt-4\" style=\"justify-content:center\">
            <div class=\"col-sm-7\">
                <form method=\"post\" action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_client");
        echo "\">

                    <h1 id=\"titre\"> Complêtez votre profil </h1>

                    <div class=\"row\" id=\"infos\">
                        <div class=\"col-12\">

                            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", [0 => "connexion"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 19
            echo "                            <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                            <br>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"genre\" id=\"genre\" value=\"M\">
                                <label class=\"form-check-label\" for=\"radio1\">Un homme</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"genre\" id=\"genre\" value=\"Mme\" onclick=\"myFunction()\">
                                <label class=\"form-check-label\" for=\"radio2\">Une femme</label>
                            </div>
                            <br><br>
                            <div class=\"form-group\">
                                <label for=\"nom\">Nom :</label>
                                <input required type=\"text\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "client", [], "any", false, false, false, 33), "nom", [], "any", false, false, false, 33), "html", null, true);
        echo "\" class=\"form-control\" id=\"nom\" name=\"nom\">
                            </div>
                            <br>
                            <div class=\"form-group\">
                                <label for=\"prenom\">Prénom :</label>
                                <input required type=\"text\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "client", [], "any", false, false, false, 38), "prenom", [], "any", false, false, false, 38), "html", null, true);
        echo "\" class=\"form-control\" id=\"prenom\" name=\"prenom\">
                            </div>
                            <br>
                            <div class=\"form-group\">
                                <label for=\"adresse\">Adresse :</label>
                                <input required type=\"text\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "client", [], "any", false, false, false, 43), "adresse", [], "any", false, false, false, 43), "html", null, true);
        echo "\" class=\"form-control\" id=\"adresse\" name=\"adresse\">
                            </div>
                            <br>
                            <div class=\"form-group\">
                                <label for=\"cp\">Code postal :</label>
                                <input required type=\"text\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "client", [], "any", false, false, false, 48), "cp", [], "any", false, false, false, 48), "html", null, true);
        echo "\" class=\"form-control\" id=\"cp\" name=\"cp\">
                            </div>
                            <br>
                            <div class=\"form-group\">
                                <label for=\"ville\">Ville :</label>
                                <input required type=\"text\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "client", [], "any", false, false, false, 53), "ville", [], "any", false, false, false, 53), "html", null, true);
        echo "\" class=\"form-control\" id=\"ville\" name=\"ville\">
                            </div>
                            <br>
                            <label for=\"type\">Vous êtes :</label> <br>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"type\" id=\"type\" value=\"par\">
                                <label class=\"form-check-label\" for=\"radio1\">Un particulier</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"type\" id=\"type\" value=\"pro\" onclick=\"myFunction()\">
                                <label class=\"form-check-label\" for=\"radio2\">Un professionnel</label>
                            </div>
                            <br>
                            <div class=\"form-group\" id=\"raison\" style=\"display:none\">
                                <label for=\"Raison\">Raison sociale :</label>
                                <input type=\"text\" value=\"\" class=\"form-control\" name=\"raison\">
                            </div>
                            <br>
                            <div class=\"form-group\">
                                <label for=\"telephone\">Téléphone :</label>
                                <input required type=\"tel\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "client", [], "any", false, false, false, 73), "tel", [], "any", false, false, false, 73), "html", null, true);
        echo "\" class=\"form-control\" id=\"telephone\" name=\"tel\">
                            </div>


                            <input type=\"hidden\" name=\"_csrf_token\" value=\"\">
                        </div>
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"col-12 bouton-connexion\">
                            <button type=\"submit\" class=\"btn btn-success font-weight-bold text-light\">
                                Valider mes informations
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    function myFunction()
    {
    divInfo = document.getElementById('raison');
    if (divInfo.style.display == 'none')
    divInfo.style.display = 'block';
    else
    divInfo.style.display = 'none';
    }
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profil/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 73,  164 => 53,  156 => 48,  148 => 43,  140 => 38,  132 => 33,  118 => 21,  109 => 19,  105 => 18,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Profil {% endblock %}

{% block body %}

<section>
\t<div class=\"container bg-center\">
\t\t<div class=\"row pb-3 pt-4\" style=\"justify-content:center\">
            <div class=\"col-sm-7\">
                <form method=\"post\" action=\"{{ path('post_client') }}\">

                    <h1 id=\"titre\"> Complêtez votre profil </h1>

                    <div class=\"row\" id=\"infos\">
                        <div class=\"col-12\">

                            {% for flash_error in app.flashes('connexion') %}
                            <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
                            {% endfor %}
                            <br>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"genre\" id=\"genre\" value=\"M\">
                                <label class=\"form-check-label\" for=\"radio1\">Un homme</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"genre\" id=\"genre\" value=\"Mme\" onclick=\"myFunction()\">
                                <label class=\"form-check-label\" for=\"radio2\">Une femme</label>
                            </div>
                            <br><br>
                            <div class=\"form-group\">
                                <label for=\"nom\">Nom :</label>
                                <input required type=\"text\" value=\"{{app.user.client.nom}}\" class=\"form-control\" id=\"nom\" name=\"nom\">
                            </div>
                            <br>
                            <div class=\"form-group\">
                                <label for=\"prenom\">Prénom :</label>
                                <input required type=\"text\" value=\"{{app.user.client.prenom}}\" class=\"form-control\" id=\"prenom\" name=\"prenom\">
                            </div>
                            <br>
                            <div class=\"form-group\">
                                <label for=\"adresse\">Adresse :</label>
                                <input required type=\"text\" value=\"{{app.user.client.adresse}}\" class=\"form-control\" id=\"adresse\" name=\"adresse\">
                            </div>
                            <br>
                            <div class=\"form-group\">
                                <label for=\"cp\">Code postal :</label>
                                <input required type=\"text\" value=\"{{app.user.client.cp}}\" class=\"form-control\" id=\"cp\" name=\"cp\">
                            </div>
                            <br>
                            <div class=\"form-group\">
                                <label for=\"ville\">Ville :</label>
                                <input required type=\"text\" value=\"{{app.user.client.ville}}\" class=\"form-control\" id=\"ville\" name=\"ville\">
                            </div>
                            <br>
                            <label for=\"type\">Vous êtes :</label> <br>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"type\" id=\"type\" value=\"par\">
                                <label class=\"form-check-label\" for=\"radio1\">Un particulier</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"type\" id=\"type\" value=\"pro\" onclick=\"myFunction()\">
                                <label class=\"form-check-label\" for=\"radio2\">Un professionnel</label>
                            </div>
                            <br>
                            <div class=\"form-group\" id=\"raison\" style=\"display:none\">
                                <label for=\"Raison\">Raison sociale :</label>
                                <input type=\"text\" value=\"\" class=\"form-control\" name=\"raison\">
                            </div>
                            <br>
                            <div class=\"form-group\">
                                <label for=\"telephone\">Téléphone :</label>
                                <input required type=\"tel\" value=\"{{app.user.client.tel}}\" class=\"form-control\" id=\"telephone\" name=\"tel\">
                            </div>


                            <input type=\"hidden\" name=\"_csrf_token\" value=\"\">
                        </div>
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"col-12 bouton-connexion\">
                            <button type=\"submit\" class=\"btn btn-success font-weight-bold text-light\">
                                Valider mes informations
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    function myFunction()
    {
    divInfo = document.getElementById('raison');
    if (divInfo.style.display == 'none')
    divInfo.style.display = 'block';
    else
    divInfo.style.display = 'none';
    }
</script>
{% endblock %}", "profil/profil.html.twig", "C:\\Users\\fatim\\Desktop\\Symfony_fil_rouge\\templates\\profil\\profil.html.twig");
    }
}
