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
class __TwigTemplate_e4f7d2f22a55d9107975380223a8e3d655ca95a24102b8eb442a8dcacf69473e extends Template
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
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allCategory"]) || array_key_exists("allCategory", $context) ? $context["allCategory"] : (function () { throw new RuntimeError('Variable "allCategory" does not exist.', 16, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 17
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 17), 1))) {
                // line 18
                echo "                        <div class=\"category__side left-side\">
                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 19
$context["loop"], "index", [], "any", false, false, false, 19), 2))) {
                // line 20
                echo "                        <div class=\"category__side center-side\">  
                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 21
$context["loop"], "index", [], "any", false, false, false, 21), 3))) {
                // line 22
                echo "                        <div class=\"category__side rigth-side\">
                    ";
            }
            // line 24
            echo "                        <div class=\"category__media\">
                            <a href=\"category.html\">
                                <img src=\"img/alimentation.jpg\" alt=\"alimentation\" class=\"category__img\">
                                <span class=\"category__name\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "catName", [], "any", false, false, false, 27), "html", null, true);
            echo "</span>
                            </a>
                        </div>
                    </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </div>
        </div>
    </section>

    <article class=\"content\">

        <section>
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastPosts"]) || array_key_exists("lastPosts", $context) ? $context["lastPosts"] : (function () { throw new RuntimeError('Variable "lastPosts" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 40
            echo "                <div class=\"preview__container\">

                    <div class=\"preview__img\">
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\"><img class=\"img__content\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "postImg", [], "any", false, false, false, 43), "html", null, true);
            echo "\" alt=\"plat sain\"></a>
                    </div>

                    <span class=\"category__indicator\"><a class=\"category__link\" href=\"category.html\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "postCategory", [], "any", false, false, false, 46), "catName", [], "any", false, false, false, 46), "html", null, true);
            echo "</a></span>

                    <h4 class=\"article__title\"><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "postTitle", [], "any", false, false, false, 48), "html", null, true);
            echo "</a></h4>

                    <p>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["post"], "postContent", [], "any", false, false, false, 50)), "truncate", [0 => 200], "method", false, false, false, 50), "html", null, true);
            echo "...</p>

                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
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
        return array (  224 => 54,  214 => 50,  207 => 48,  202 => 46,  194 => 43,  189 => 40,  185 => 39,  176 => 32,  157 => 27,  152 => 24,  148 => 22,  146 => 21,  143 => 20,  141 => 19,  138 => 18,  135 => 17,  118 => 16,  108 => 8,  98 => 7,  79 => 5,  60 => 3,  37 => 1,);
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
                {% for category in allCategory %}
                    {% if loop.index== 1 %}
                        <div class=\"category__side left-side\">
                        {% elseif loop.index == 2 %}
                        <div class=\"category__side center-side\">  
                        {% elseif loop.index == 3 %}
                        <div class=\"category__side rigth-side\">
                    {% endif %}
                        <div class=\"category__media\">
                            <a href=\"category.html\">
                                <img src=\"img/alimentation.jpg\" alt=\"alimentation\" class=\"category__img\">
                                <span class=\"category__name\">{{category.catName}}</span>
                            </a>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </section>

    <article class=\"content\">

        <section>
            {% for post in lastPosts %}
                <div class=\"preview__container\">

                    <div class=\"preview__img\">
                        <a href=\"{{ path('post', {id: post.id}) }}\"><img class=\"img__content\" src=\"{{ post.postImg }}\" alt=\"plat sain\"></a>
                    </div>

                    <span class=\"category__indicator\"><a class=\"category__link\" href=\"category.html\">{{post.postCategory.catName}}</a></span>

                    <h4 class=\"article__title\"><a href=\"{{ path('post', {id: post.id}) }}\">{{post.postTitle}}</a></h4>

                    <p>{{post.postContent |u.truncate(200)}}...</p>

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
