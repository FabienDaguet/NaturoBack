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
class __TwigTemplate_c8cd0614d64d46d37b040c04e3e772479e88dd0f74f4dc4b7420d809905654a6 extends Template
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
            'body' => [$this, 'block_body'],
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
<html lang =\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
            integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\">
        <script src=\"https://kit.fontawesome.com/41b8da89ad.js\" crossorigin=\"anonymous\"></script>
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
        <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap\" rel=\"stylesheet\">
    </head>
    <body>
        <div class=\"locker page\">
            <div class=\"body-content\">
                <div class=\"header__container\">
                    <header class=\"header d-flex align-items-center justify-content-center\">
                        <div class=\"logo__container logo__container--header\">
                            <a href=\"index.html\"><img class=\"logo\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"logo du site\"></a>
                        </div>
                        <div data-bs-toggle=\"offcanvas\" data-bs-target=\"#menu\" class=\"menu-btn navbar-toggler d-md-none\">
                            <div class=\"navbar-toggler-icon\">
                                <span class=\"menu-btn__span\"></span>
                                <span class=\"menu-btn__span\"></span>
                                <span class=\"menu-btn__span\"></span>
                                <span class=\"menu-btn__span\"></span>
                            </div>
                        </div>
                    </header>
                    <nav class=\"nav pb-0 pt-0 navbar-expand-md\">
                        <div class=\"d-flex flex-direction-column justify-content-center navbar-collapse offcanvas-collapse p-0\" id=\"menu\">
                            <div class=\"text-start\">
                                <ul class=\"navbar-nav w-100 flex-column flex-md-row justify-content-between\">
                                    <li class=\"nav-item\">
                                        <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" class=\"p-2 nav-link text-decoration-none link\" >Accueil</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history");
        echo "\" class=\"p-2 nav-link text-decoration-none link\">Un peu d'histoire</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aboutMe");
        echo "\" class=\"p-2 nav-link text-decoration-none link\">Qui suis-je</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seance");
        echo "\" class=\"p-2 nav-link text-decoration-none link\">La séance</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prices");
        echo "\" class=\"p-2 nav-link text-decoration-none link\">Tarifs</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"p-2 nav-link text-decoration-none link\">Contact</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\" class=\"p-2 nav-link text-decoration-none link\">Blog</a>
                                    </li>
                                </ul>
                            </div>    
                        </div>
                    </nav>
                </div>
                
                ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 64
            echo "                    <div class=\"alert alert-success\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
                ";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "            </div>    
            <footer class=\"footer\">
                <div class=\"logo__container\">
                    <a href=\"#\"><img class=\"logo\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"logo du site\"></a>
                </div>
                <p class=\"footer__link\">Mentions légales</p>
            </footer>
        </div>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD\"
        crossorigin=\"anonymous\"></script>
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
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

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 67,  190 => 5,  176 => 79,  165 => 71,  160 => 68,  158 => 67,  155 => 66,  146 => 64,  142 => 63,  131 => 55,  125 => 52,  119 => 49,  113 => 46,  107 => 43,  101 => 40,  95 => 37,  76 => 21,  62 => 10,  58 => 9,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang =\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
            integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"icon\" href=\"{{ asset('img/logo.png') }}\">
        <script src=\"https://kit.fontawesome.com/41b8da89ad.js\" crossorigin=\"anonymous\"></script>
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
        <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap\" rel=\"stylesheet\">
    </head>
    <body>
        <div class=\"locker page\">
            <div class=\"body-content\">
                <div class=\"header__container\">
                    <header class=\"header d-flex align-items-center justify-content-center\">
                        <div class=\"logo__container logo__container--header\">
                            <a href=\"index.html\"><img class=\"logo\" src=\"{{ asset('img/logo.png') }}\" alt=\"logo du site\"></a>
                        </div>
                        <div data-bs-toggle=\"offcanvas\" data-bs-target=\"#menu\" class=\"menu-btn navbar-toggler d-md-none\">
                            <div class=\"navbar-toggler-icon\">
                                <span class=\"menu-btn__span\"></span>
                                <span class=\"menu-btn__span\"></span>
                                <span class=\"menu-btn__span\"></span>
                                <span class=\"menu-btn__span\"></span>
                            </div>
                        </div>
                    </header>
                    <nav class=\"nav pb-0 pt-0 navbar-expand-md\">
                        <div class=\"d-flex flex-direction-column justify-content-center navbar-collapse offcanvas-collapse p-0\" id=\"menu\">
                            <div class=\"text-start\">
                                <ul class=\"navbar-nav w-100 flex-column flex-md-row justify-content-between\">
                                    <li class=\"nav-item\">
                                        <a href=\"{{ path('index') }}\" class=\"p-2 nav-link text-decoration-none link\" >Accueil</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"{{ path('history') }}\" class=\"p-2 nav-link text-decoration-none link\">Un peu d'histoire</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"{{ path('aboutMe') }}\" class=\"p-2 nav-link text-decoration-none link\">Qui suis-je</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"{{ path('seance') }}\" class=\"p-2 nav-link text-decoration-none link\">La séance</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"{{ path('prices') }}\" class=\"p-2 nav-link text-decoration-none link\">Tarifs</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"{{ path('contact') }}\" class=\"p-2 nav-link text-decoration-none link\">Contact</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"{{ path('blog') }}\" class=\"p-2 nav-link text-decoration-none link\">Blog</a>
                                    </li>
                                </ul>
                            </div>    
                        </div>
                    </nav>
                </div>
                
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success\" role=\"alert\">{{ message }} </div>
                {% endfor %}

                {% block body %}{% endblock %}
            </div>    
            <footer class=\"footer\">
                <div class=\"logo__container\">
                    <a href=\"#\"><img class=\"logo\" src=\"{{ asset('img/logo.png') }}\" alt=\"logo du site\"></a>
                </div>
                <p class=\"footer__link\">Mentions légales</p>
            </footer>
        </div>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD\"
        crossorigin=\"anonymous\"></script>
        <script src=\"{{ asset('js/app.js') }}\"></script>
    </body>
</html>
", "base.html.twig", "C:\\Users\\dague\\Desktop\\A jour\\NaturoBack\\templates\\base.html.twig");
    }
}
