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

/* blog/blog.html.twig */
class __TwigTemplate_8088480502c52d17fb61934a8bf51889598f05d15b5468d87eb5e0c5f9ed2890 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'blog' => [$this, 'block_blog'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/blog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/blog.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/blog.html.twig", 1);
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

        echo "Hello BlogController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_blog($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "blog"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "blog"));

        echo "active";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <div class=\"content__title-container\">
        <h1 class=\"content__title blog-title\">Le <span class=\"content--color break\">blog</span> </h1>
    </div>

    <section class=\"category__section\">
        <div class=\"category__container\">
            <div class=\"category__all\">
                <div class=\"category__side left-side\">
                    <div class=\"category__media\">
                        <a href=\"category.html\">
                            <img src=\"img/alimentation.jpg\" alt=\"alimentation\" class=\"category__img\">
                            <span class=\"category__name\">catégorie 1</span>
                        </a>
                    </div>
                </div>
                <div class=\"category__side center-side\">
                    <div class=\"category__media\">
                        <a href=\"category.html\">
                            <img src=\"img/alimentation.jpg\" alt=\"alimentation\" class=\"category__img\">
                            <span class=\"category__name\">catégorie 2</span>
                        </a>
                    </div>
                </div>
                <div class=\"category__side rigth-side\">
                    <div class=\"category__media\">
                        <a href=\"category.html\">
                            <img src=\"img/alimentation.jpg\" alt=\"alimentation\" class=\"category__img\">
                            <span class=\"category__name\">catégorie 3</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <article class=\"content\">

        <section>
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastPosts"]) || array_key_exists("lastPosts", $context) ? $context["lastPosts"] : (function () { throw new RuntimeError('Variable "lastPosts" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 48
            echo "                <div class=\"preview__container\">

                    <div class=\"preview__img\">
                        <a href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post");
            echo "\"><img class=\"img__content\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "postImg", [], "any", false, false, false, 51), "html", null, true);
            echo "\" alt=\"plat sain\"></a>
                    </div>

                    <span class=\"category__indicator\"><a class=\"category__link\" href=\"category.html\"></a></span>

                    <h4 class=\"article__title\"><a href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post");
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "postTitle", [], "any", false, false, false, 56), "html", null, true);
            echo "</a></h4>

                    <p>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "postContent", [], "any", false, false, false, 58), "html", null, true);
            echo "</p>

                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </section>

        <div>
            <nav>
                <ul class=\"pagination__nav\">
                    <li class=\"pagination__button\">
                        <a class=\"pagination__link\" href=\"#\">1</a>
                    </li>
                    <li class=\"pagination__button\">
                        <a class=\"pagination__link\" href=\"#\">2</a>
                    </li>
                    <li class=\"pagination__button\">
                        <a class=\"pagination__link\" href=\"#\">3</a>
                    </li>
                </ul>
            </nav>
        </div>

    </article>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 62,  175 => 58,  168 => 56,  158 => 51,  153 => 48,  149 => 47,  108 => 8,  98 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello BlogController!{% endblock %}

{% block blog %}active{% endblock %}

{% block body %}

    <div class=\"content__title-container\">
        <h1 class=\"content__title blog-title\">Le <span class=\"content--color break\">blog</span> </h1>
    </div>

    <section class=\"category__section\">
        <div class=\"category__container\">
            <div class=\"category__all\">
                <div class=\"category__side left-side\">
                    <div class=\"category__media\">
                        <a href=\"category.html\">
                            <img src=\"img/alimentation.jpg\" alt=\"alimentation\" class=\"category__img\">
                            <span class=\"category__name\">catégorie 1</span>
                        </a>
                    </div>
                </div>
                <div class=\"category__side center-side\">
                    <div class=\"category__media\">
                        <a href=\"category.html\">
                            <img src=\"img/alimentation.jpg\" alt=\"alimentation\" class=\"category__img\">
                            <span class=\"category__name\">catégorie 2</span>
                        </a>
                    </div>
                </div>
                <div class=\"category__side rigth-side\">
                    <div class=\"category__media\">
                        <a href=\"category.html\">
                            <img src=\"img/alimentation.jpg\" alt=\"alimentation\" class=\"category__img\">
                            <span class=\"category__name\">catégorie 3</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <article class=\"content\">

        <section>
            {% for post in lastPosts %}
                <div class=\"preview__container\">

                    <div class=\"preview__img\">
                        <a href=\"{{ path('post') }}\"><img class=\"img__content\" src=\"{{ post.postImg }}\" alt=\"plat sain\"></a>
                    </div>

                    <span class=\"category__indicator\"><a class=\"category__link\" href=\"category.html\"></a></span>

                    <h4 class=\"article__title\"><a href=\"{{ path('post') }}\">{{post.postTitle}}</a></h4>

                    <p>{{post.postContent}}</p>

                </div>
            {% endfor %}
        </section>

        <div>
            <nav>
                <ul class=\"pagination__nav\">
                    <li class=\"pagination__button\">
                        <a class=\"pagination__link\" href=\"#\">1</a>
                    </li>
                    <li class=\"pagination__button\">
                        <a class=\"pagination__link\" href=\"#\">2</a>
                    </li>
                    <li class=\"pagination__button\">
                        <a class=\"pagination__link\" href=\"#\">3</a>
                    </li>
                </ul>
            </nav>
        </div>

    </article>

{% endblock %}
", "blog/blog.html.twig", "C:\\Users\\dague\\Desktop\\backend\\NaturopathieBack\\templates\\blog\\blog.html.twig");
    }
}
