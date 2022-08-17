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

/* base.html.twig */
class __TwigTemplate_0604ac2f5d90134d889d00a32cd645b368cd1df25cd33685acede1fd99ad82ce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>
\t\t\t";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "\t\t</title>
\t\t<link
\t\trel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t";
        // line 13
        echo "
\t\t";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "

\t\t";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "
\t</head>

\t<body>
\t\t";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 124
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 125
        echo "\t\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 200
        echo "\t</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Village Green
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "\t\t\t";
        // line 16
        echo "\t\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css\">
\t\t\t<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" rel=\"stylesheet\"/>
\t\t\t<link
\t\t\thref=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
\t\t\t";
        // line 23
        echo "\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\"/>
\t\t\t";
        // line 26
        echo "\t\t\t<link href=\"/assets/css/styles.css\" rel=\"stylesheet\">
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "\t\t\t<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\" integrity=\"sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\" integrity=\"sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 42
        echo "\t<header>
\t
\t<div class=\"row\">
\t<div class=\"divLogo\">
\t<a href=\"";
        // line 46
        echo "/accueil";
        echo "\">
\t<img src=\"/assets/src/logovillage.png\" class=\"logo\" alt=\"village green\" title=\"village green\">
\t</a>
\t</div>
\t<!-- NAVBAR 1 -->

\t<div class=\"navbar navbar-expand-lg navbar-light col-12\" id=\"navbar1\">
\t<div class=\"navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav ml-auto\">
\t<li class=\"nav-item mr-2\">
\t<a class=\" accueil nav-link active\" href=\"";
        // line 56
        echo "/accueil";
        echo "\">Accueil
\t</a>
\t</li>\t
\t\t\t\t\t\t\t\t\t
\t\t";
        // line 60
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60)) {
            // line 61
            echo "\t<li class=\"nav-item dropdown text-center mr-4 ml-4 row\">
\t<a class=\"nav-link dropdown-toggle mr-2 prenom row col-4\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t<span class=\"row col-4 prenom\">Salut ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "client", [], "any", false, false, false, 63), "prenom", [], "any", false, false, false, 63), "html", null, true);
            echo "</span>
\tMon compte
\t</a>
\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t<a class=\"dropdown-item\" href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recap_profil");
            echo "\">Profil</a>
\t<a class=\"dropdown-item\" href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t</div>
\t\t";
        } else {
            // line 71
            echo "    <li class=\"nav-item dropdown\">
   <a class=\"nav-link dropdown-toggle mr-2\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\tEspace client
\t</a>
   <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t<a class=\"dropdown-item\" href=\"";
            // line 76
            echo "/login";
            echo "\">Se connecter</a>
\t<a class=\"dropdown-item\" href=\"";
            // line 77
            echo "/register";
            echo "\">S'inscrire</a>
\t</div>
\t</li>
\t
\t\t\t";
        }
        // line 81
        echo "\t
\t\t\t<form class=\"form-inline my-2 my-lg-0\">
    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"\" aria-label=\"Search\">
    <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Rechercher</button>
    </form>\t
<li class=\"nav-item mr-2 paniernav \">
\t    <a class=\" nav-link\" href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier");
        echo "\"><i class=\"fal fa-shopping-cart\"></i>
\t\t\t";
        // line 88
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "session", [], "any", false, false, false, 88), "get", [0 => "panier"], "method", false, false, false, 88)) {
            // line 89
            echo "\t\t\t";
            $context["TotalPanier"] = 0;
            // line 90
            echo "\t\t\t ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "session", [], "any", false, false, false, 90), "get", [0 => "panier"], "method", false, false, false, 90));
            foreach ($context['_seq'] as $context["key"] => $context["cpte"]) {
                // line 91
                echo "\t\t\t ";
                if (preg_match("/^\\d+\$/", $context["key"])) {
                    // line 92
                    echo "\t\t\t\t";
                    $context["TotalPanier"] = ((isset($context["TotalPanier"]) || array_key_exists("TotalPanier", $context) ? $context["TotalPanier"] : (function () { throw new RuntimeError('Variable "TotalPanier" does not exist.', 92, $this->source); })()) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "session", [], "any", false, false, false, 92), "get", [0 => "panier"], "method", false, false, false, 92), $context["key"], [], "array", false, false, false, 92));
                    // line 93
                    echo "\t\t\t";
                }
                // line 94
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['cpte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "\t<span class=\" position-absolute top-1 translate-middle badge rounded-pill bg-danger text-center\">";
            echo twig_escape_filter($this->env, (isset($context["TotalPanier"]) || array_key_exists("TotalPanier", $context) ? $context["TotalPanier"] : (function () { throw new RuntimeError('Variable "TotalPanier" does not exist.', 95, $this->source); })()), "html", null, true);
            echo "</span>
\t\t\t";
        }
        // line 97
        echo "\t</a>
\t</li>
\t\t\t\t\t\t\t\t\t
\t</ul>
\t</div>
\t</div>
\t\t\t\t\t\t<!-- NAVBAR 2 -->
\t<nav class=\"navbar navbar-expand-lg navbar-light col-12\" id=\"navbar2\">
\t<a class=\"navbar-brand\" href=\"#\"></a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t<span class=\"navbar-toggler-icon\"></span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t<ul class=\"navbar-nav ml-auto\">
\t\t\t";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 112, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 113
            echo "\t<li class=\"nav-item \">
\t<a class=\"nav-link souscategorie \" href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("souscategorie", ["id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 114)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "nom", [], "any", false, false, false, 114), "html", null, true);
            echo "</a>
\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "\t</ul>
\t</div>
\t</nav>
\t</div>
\t</div>
\t\t\t</header>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 124
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 125
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 126
        echo "\t\t\t
<!--footer -->

   <div class=\"row pt-\">
<footer class=\"footer\">
    <div class=\"container bottom_border\">
      <div class=\"row pt-\">
           <div class=\" col-sm-6 col-md col-sm-8 col-12 col\">
         <h5 class=\"headin5_amrc col_white_amrc pt2\">Contactez-Nous!</h5>
<!--headin5_amrc-->
     <h6 class=\"headin5_amrc col_white_amrc pt2\">Ouverture:</h6>
    <p class=\"mb10\">Du Lundi Au Vendredi de 8h à 19h .<br> Samedi de 09h à15h. </p>

    <p><i class=\"fa fa-location-arrow\"></i> 9878/25 sec 9 rohini 35 </p>

      <p><i class=\"fa fa-phone\"></i>  +00 1 40 38 50 40  </p>

      <p><i class=\"fa fa fa-envelope\"></i> info@villagegreen.com  </p>

      </div>
\t  
<div class=\" col-sm-6 col-md col-sm-8 col-12 col\">
<h5 class=\"headin5_amrc col_white_amrc pt2\">Village Green Stores!</h5>

<!--headin5_amrc-->
<ul class=\"footer_ul_amrc\">
<li><a href=\"https://www.thomann.de/fr/index.html\">Guitares-Amplificateurs-Effet:182 avenue jean jaurés 75019 Paris</a></li>
<br>
<li><a href=\"https://www.thomann.de/fr/index.html\">Batteries:7 av.du Nouveau Conservatoire 75019 Paris</a></li>
<br>
<li><a href=\"https://www.thomann.de/fr/index.html\">Clavier Eclairage:184 Av Jean Jaurés 80990 Amiens</a></li>

</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=\" col-sm-6 col-md col-sm-8 col-12 col\">
<h5 class=\"headin5_amrc col_white_amrc pt2\">Suivez-Nous</h5>
<!--headin5_amrc ends here-->

<ul class=\"footer_ul2_amrc\">
<li><a href=\"#\"><i class=\"fab fa-twitter fleft padding-right\"></i> </a><p>Village Green<a href=\"#\">https://www.village green.com/</a></p></li>
<li><a href=\"#\"><i class=\"fab fa-twitter fleft padding-right\"></i> </a><p>Village Green<a href=\"#\">https://www.village green.com/</a></p></li>
<li><a href=\"#\"><i class=\"fab fa-twitter fleft padding-right\"></i> </a><p>Village Green<a href=\"#\">https://www.village green.com/</a></p></li>
</ul>
<!--footer_ul2_amrc ends here-->
</div>
</div>
</div>


<div class=\"container\">
<ul class=\"foote_bottom_ul_amrc\">
<li><a href=\"https://www.thomann.de/fr/index.html\">Guitares</a></li>
<li><a href=\"https://www.thomann.de/fr/index.html\">Batteries</a></li>
<li><a href=\"https://www.thomann.de/fr/index.html\">Studios</a></li>
<li><a href=\"https://www.thomann.de/fr/index.html\">Cables</a></li>
<li><a href=\"https://www.thomann.de/fr/index.html\">Vents</a></li>
<li><a href=\"https://www.thomann.de/fr/index.html\">Cases</a></li>
</ul>
<!--foote_bottom_ul_amrc ends here-->
<p class=\"text-center\">Copyright @2022 | Designed With by <a href=\"#\">Village Green</a></p>

<ul class=\"social_footer_ul\">
<li><a href=\"https://www.thomann.de/fr/index.html\"><i class=\"fab fa-facebook-f\"></i></a></li>
<li><a href=\"https://www.thomann.de/fr/index.html\"><i class=\"fab fa-twitter\"></i></a></li>
<li><a href=\"https://www.thomann.de/fr/index.html\"><i class=\"fab fa-linkedin\"></i></a></li>
<li><a href=\"https://www.thomann.de/fr/index.html\"><i class=\"fab fa-instagram\"></i></a></li>
</ul>
<!--social_footer_ul ends here-->
</div>
</footer>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  382 => 126,  372 => 125,  354 => 124,  338 => 117,  327 => 114,  324 => 113,  320 => 112,  303 => 97,  297 => 95,  291 => 94,  288 => 93,  285 => 92,  282 => 91,  277 => 90,  274 => 89,  272 => 88,  268 => 87,  260 => 81,  252 => 77,  248 => 76,  241 => 71,  235 => 68,  231 => 67,  224 => 63,  220 => 61,  218 => 60,  211 => 56,  198 => 46,  192 => 42,  182 => 41,  167 => 31,  157 => 30,  146 => 26,  142 => 23,  134 => 16,  132 => 15,  122 => 14,  102 => 7,  89 => 200,  86 => 125,  83 => 124,  81 => 41,  75 => 37,  73 => 30,  69 => 28,  67 => 14,  64 => 13,  59 => 9,  57 => 7,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>
\t\t\t{% block title %}Village Green
\t\t\t{% endblock %}
\t\t</title>
\t\t<link
\t\trel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t{# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}

\t\t{% block stylesheets %}
\t\t\t{# Bootstrap #}
\t\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css\">
\t\t\t<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" rel=\"stylesheet\"/>
\t\t\t<link
\t\t\thref=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
\t\t\t{# Fontawesome #}
\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\"/>
\t\t\t{# CSS #}
\t\t\t<link href=\"/assets/css/styles.css\" rel=\"stylesheet\">
\t\t{% endblock %}


\t\t{% block javascripts %}
\t\t\t<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\" integrity=\"sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\" integrity=\"sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
\t\t{% endblock %}

\t</head>

\t<body>
\t\t{% block header %}
\t<header>
\t
\t<div class=\"row\">
\t<div class=\"divLogo\">
\t<a href=\"{{'/accueil'}}\">
\t<img src=\"/assets/src/logovillage.png\" class=\"logo\" alt=\"village green\" title=\"village green\">
\t</a>
\t</div>
\t<!-- NAVBAR 1 -->

\t<div class=\"navbar navbar-expand-lg navbar-light col-12\" id=\"navbar1\">
\t<div class=\"navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav ml-auto\">
\t<li class=\"nav-item mr-2\">
\t<a class=\" accueil nav-link active\" href=\"{{'/accueil'}}\">Accueil
\t</a>
\t</li>\t
\t\t\t\t\t\t\t\t\t
\t\t{% if app.user %}
\t<li class=\"nav-item dropdown text-center mr-4 ml-4 row\">
\t<a class=\"nav-link dropdown-toggle mr-2 prenom row col-4\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t<span class=\"row col-4 prenom\">Salut {{app.user.client.prenom}}</span>
\tMon compte
\t</a>
\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t<a class=\"dropdown-item\" href=\"{{path('recap_profil')}}\">Profil</a>
\t<a class=\"dropdown-item\" href=\"{{path('app_logout')}}\">Déconnexion</a>
\t</div>
\t\t{% else %}
    <li class=\"nav-item dropdown\">
   <a class=\"nav-link dropdown-toggle mr-2\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\tEspace client
\t</a>
   <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t<a class=\"dropdown-item\" href=\"{{'/login'}}\">Se connecter</a>
\t<a class=\"dropdown-item\" href=\"{{'/register'}}\">S'inscrire</a>
\t</div>
\t</li>
\t
\t\t\t{% endif %}\t
\t\t\t<form class=\"form-inline my-2 my-lg-0\">
    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"\" aria-label=\"Search\">
    <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Rechercher</button>
    </form>\t
<li class=\"nav-item mr-2 paniernav \">
\t    <a class=\" nav-link\" href=\"{{path('panier')}}\"><i class=\"fal fa-shopping-cart\"></i>
\t\t\t{% if app.session.get('panier')%}
\t\t\t{% set TotalPanier =0 %}
\t\t\t {% for key,cpte in app.session.get('panier') %}
\t\t\t {% if key matches '/^\\\\d+\$/' %}
\t\t\t\t{% set TotalPanier =  TotalPanier + app.session.get('panier')[key] %}
\t\t\t{% endif %}
\t\t\t{% endfor %}
\t<span class=\" position-absolute top-1 translate-middle badge rounded-pill bg-danger text-center\">{{ TotalPanier }}</span>
\t\t\t{% endif %}
\t</a>
\t</li>
\t\t\t\t\t\t\t\t\t
\t</ul>
\t</div>
\t</div>
\t\t\t\t\t\t<!-- NAVBAR 2 -->
\t<nav class=\"navbar navbar-expand-lg navbar-light col-12\" id=\"navbar2\">
\t<a class=\"navbar-brand\" href=\"#\"></a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t<span class=\"navbar-toggler-icon\"></span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t<ul class=\"navbar-nav ml-auto\">
\t\t\t{% for row in home %}
\t<li class=\"nav-item \">
\t<a class=\"nav-link souscategorie \" href=\"{{ path('souscategorie',{id:row.id})}}\">{{row.nom}}</a>
\t</li>
\t\t\t{% endfor %}
\t</ul>
\t</div>
\t</nav>
\t</div>
\t</div>
\t\t\t</header>
\t\t{% endblock header %}
\t\t{% block body %}{% endblock body %}
\t\t{% block footer %}
\t\t\t
<!--footer -->

   <div class=\"row pt-\">
<footer class=\"footer\">
    <div class=\"container bottom_border\">
      <div class=\"row pt-\">
           <div class=\" col-sm-6 col-md col-sm-8 col-12 col\">
         <h5 class=\"headin5_amrc col_white_amrc pt2\">Contactez-Nous!</h5>
<!--headin5_amrc-->
     <h6 class=\"headin5_amrc col_white_amrc pt2\">Ouverture:</h6>
    <p class=\"mb10\">Du Lundi Au Vendredi de 8h à 19h .<br> Samedi de 09h à15h. </p>

    <p><i class=\"fa fa-location-arrow\"></i> 9878/25 sec 9 rohini 35 </p>

      <p><i class=\"fa fa-phone\"></i>  +00 1 40 38 50 40  </p>

      <p><i class=\"fa fa fa-envelope\"></i> info@villagegreen.com  </p>

      </div>
\t  
<div class=\" col-sm-6 col-md col-sm-8 col-12 col\">
<h5 class=\"headin5_amrc col_white_amrc pt2\">Village Green Stores!</h5>

<!--headin5_amrc-->
<ul class=\"footer_ul_amrc\">
<li><a href=\"https://www.thomann.de/fr/index.html\">Guitares-Amplificateurs-Effet:182 avenue jean jaurés 75019 Paris</a></li>
<br>
<li><a href=\"https://www.thomann.de/fr/index.html\">Batteries:7 av.du Nouveau Conservatoire 75019 Paris</a></li>
<br>
<li><a href=\"https://www.thomann.de/fr/index.html\">Clavier Eclairage:184 Av Jean Jaurés 80990 Amiens</a></li>

</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=\" col-sm-6 col-md col-sm-8 col-12 col\">
<h5 class=\"headin5_amrc col_white_amrc pt2\">Suivez-Nous</h5>
<!--headin5_amrc ends here-->

<ul class=\"footer_ul2_amrc\">
<li><a href=\"#\"><i class=\"fab fa-twitter fleft padding-right\"></i> </a><p>Village Green<a href=\"#\">https://www.village green.com/</a></p></li>
<li><a href=\"#\"><i class=\"fab fa-twitter fleft padding-right\"></i> </a><p>Village Green<a href=\"#\">https://www.village green.com/</a></p></li>
<li><a href=\"#\"><i class=\"fab fa-twitter fleft padding-right\"></i> </a><p>Village Green<a href=\"#\">https://www.village green.com/</a></p></li>
</ul>
<!--footer_ul2_amrc ends here-->
</div>
</div>
</div>


<div class=\"container\">
<ul class=\"foote_bottom_ul_amrc\">
<li><a href=\"https://www.thomann.de/fr/index.html\">Guitares</a></li>
<li><a href=\"https://www.thomann.de/fr/index.html\">Batteries</a></li>
<li><a href=\"https://www.thomann.de/fr/index.html\">Studios</a></li>
<li><a href=\"https://www.thomann.de/fr/index.html\">Cables</a></li>
<li><a href=\"https://www.thomann.de/fr/index.html\">Vents</a></li>
<li><a href=\"https://www.thomann.de/fr/index.html\">Cases</a></li>
</ul>
<!--foote_bottom_ul_amrc ends here-->
<p class=\"text-center\">Copyright @2022 | Designed With by <a href=\"#\">Village Green</a></p>

<ul class=\"social_footer_ul\">
<li><a href=\"https://www.thomann.de/fr/index.html\"><i class=\"fab fa-facebook-f\"></i></a></li>
<li><a href=\"https://www.thomann.de/fr/index.html\"><i class=\"fab fa-twitter\"></i></a></li>
<li><a href=\"https://www.thomann.de/fr/index.html\"><i class=\"fab fa-linkedin\"></i></a></li>
<li><a href=\"https://www.thomann.de/fr/index.html\"><i class=\"fab fa-instagram\"></i></a></li>
</ul>
<!--social_footer_ul ends here-->
</div>
</footer>
\t\t{% endblock footer %}
\t</body>
</html>

", "base.html.twig", "C:\\Users\\fatim\\Desktop\\Symfony_fil_rouge\\templates\\base.html.twig");
    }
}
