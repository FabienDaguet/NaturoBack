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
class __TwigTemplate_e3bc38c48b95d514c00581736d659650a8cbb6933bf84eab1e4c7711c044948c extends Template
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
<html lang=\"fr\">
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
        <div class=\"locker\">
            <header class=\"header d-flex align-items-center justify-content-center\">
                <div class=\"logo__container logo__container--header\">
                    <a href=\"index.html\"><img class=\"logo\" src=\"";
        // line 19
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
                <div class=\"navbar-collapse offcanvas-collapse p-0\" id=\"menu\">
                    <ul class=\"navbar-nav w-100 flex-column flex-md-row justify-content-around\">
                        <li class=\"nav-item\">
                             <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" class=\"p-3 nav-link active text-decoration-none  link\">Accueil</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history");
        echo "\" class=\"p-3 nav-link text-decoration-none link\">Un peu d'histoire</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aboutMe");
        echo "\" class=\"p-3 nav-link text-decoration-none link\">Qui suis-je</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seance");
        echo "\" class=\"p-3 nav-link text-decoration-none link\">La séance</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prices");
        echo "\" class=\"p-3 nav-link text-decoration-none link\">Tarifs</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"p-3 nav-link text-decoration-none link\">Contact</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\" class=\"p-3 nav-link text-decoration-none link\">Blog</a>
                        </li>
                    </ul>
                </div>
            </nav>
            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 59
            echo "                <div class=\"alert alert-success\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
            ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "
            <footer class=\"footer\">
                <div class=\"logo__container\">
                    <a href=\"#\"><img class=\"logo\" src=\"";
        // line 66
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
        // line 74
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

    // line 62
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
        return array (  204 => 62,  185 => 5,  171 => 74,  160 => 66,  155 => 63,  153 => 62,  150 => 61,  141 => 59,  137 => 58,  129 => 53,  123 => 50,  117 => 47,  111 => 44,  105 => 41,  99 => 38,  93 => 35,  74 => 19,  62 => 10,  58 => 9,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
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
        <div class=\"locker\">
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
                <div class=\"navbar-collapse offcanvas-collapse p-0\" id=\"menu\">
                    <ul class=\"navbar-nav w-100 flex-column flex-md-row justify-content-around\">
                        <li class=\"nav-item\">
                             <a href=\"{{ path('index') }}\" class=\"p-3 nav-link active text-decoration-none  link\">Accueil</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('history') }}\" class=\"p-3 nav-link text-decoration-none link\">Un peu d'histoire</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('aboutMe') }}\" class=\"p-3 nav-link text-decoration-none link\">Qui suis-je</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('seance') }}\" class=\"p-3 nav-link text-decoration-none link\">La séance</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('prices') }}\" class=\"p-3 nav-link text-decoration-none link\">Tarifs</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('contact') }}\" class=\"p-3 nav-link text-decoration-none link\">Contact</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('blog') }}\" class=\"p-3 nav-link text-decoration-none link\">Blog</a>
                        </li>
                    </ul>
                </div>
            </nav>
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success\" role=\"alert\">{{ message }} </div>
            {% endfor %}

            {% block body %}{% endblock %}

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
", "base.html.twig", "C:\\Users\\dague\\Desktop\\backend\\NaturopathieBack\\templates\\base.html.twig");
    }
}
