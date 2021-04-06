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
class __TwigTemplate_337d45db4c38708f742c81bca6d98da085fcf5e0a2143d16e9757f3dfe41ac42 extends Template
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

        echo "Blog";
        
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
        echo "    <div class = \"content\">
        <div class=\"content__title-container\">
            <h1 class=\"content__title blog-title\">Le <span class=\"content--color break\">blog</span> </h1>
        </div>

        <section class=\"category__section\">
            <div class=\"category__container\">
                <div class=\"category__all\">
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allCategory"]) || array_key_exists("allCategory", $context) ? $context["allCategory"] : (function () { throw new RuntimeError('Variable "allCategory" does not exist.', 14, $this->source); })()));
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
            // line 15
            echo "                        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 15), 1))) {
                // line 16
                echo "                            <div class=\"category__side left-side\">
                            ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 17
$context["loop"], "last", [], "any", false, false, false, 17)) {
                // line 18
                echo "                            <div class=\"category__side rigth-side\">
                            ";
            } else {
                // line 20
                echo "                            <div class=\"category__side center-side\">  
                        ";
            }
            // line 22
            echo "                            <div class=\"category__media\">
                                <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\">
                                    <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("upload/img/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "catImg", [], "any", false, false, false, 24), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 24), "html", null, true);
            echo "\" class=\"category__img\">
                                    <span class=\"category__name\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "catName", [], "any", false, false, false, 25), "html", null, true);
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
        // line 30
        echo "                </div>
            </div>
        </section>

        <article>

            <section>
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastPosts"]) || array_key_exists("lastPosts", $context) ? $context["lastPosts"] : (function () { throw new RuntimeError('Variable "lastPosts" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 38
            echo "                    <div class=\"preview__container\">

                        <div class=\"preview__img\">
                        
                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\"><img class=\"img__content img__content--transform\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("upload/img/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "postImg", [], "any", false, false, false, 42), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 42), "html", null, true);
            echo "\"></a>
                        
                            <div class=\"preview__descr\">
                                <span class=\"category__indicator\"><a class=\"category__link\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "postCategory", [], "any", false, false, false, 45), "slug", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "postCategory", [], "any", false, false, false, 45), "catName", [], "any", false, false, false, 45), "html", null, true);
            echo "</a></span>
                                <h4 class=\"article__title\"><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "postTitle", [], "any", false, false, false, 46), "html", null, true);
            echo "</a></h4>
                            </div>
                        </div>    

                        <p>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["post"], "postContent", [], "any", false, false, false, 50)), "truncate", [0 => 170], "method", false, false, false, 50), "html", null, true);
            echo "... <br> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"\">lire la suite</a></p>

                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </section>

            
                ";
        // line 57
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["lastPosts"]) || array_key_exists("lastPosts", $context) ? $context["lastPosts"] : (function () { throw new RuntimeError('Variable "lastPosts" does not exist.', 57, $this->source); })()));
        echo "
           

        </article>
    </div>
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
        return array (  226 => 57,  221 => 54,  209 => 50,  200 => 46,  194 => 45,  183 => 42,  177 => 38,  173 => 37,  164 => 30,  145 => 25,  138 => 24,  134 => 23,  131 => 22,  127 => 20,  123 => 18,  121 => 17,  118 => 16,  115 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Blog{% endblock %}

{% block body %}
    <div class = \"content\">
        <div class=\"content__title-container\">
            <h1 class=\"content__title blog-title\">Le <span class=\"content--color break\">blog</span> </h1>
        </div>

        <section class=\"category__section\">
            <div class=\"category__container\">
                <div class=\"category__all\">
                    {% for category in allCategory %}
                        {% if loop.index == 1 %}
                            <div class=\"category__side left-side\">
                            {% elseif loop.last %}
                            <div class=\"category__side rigth-side\">
                            {% else %}
                            <div class=\"category__side center-side\">  
                        {% endif %}
                            <div class=\"category__media\">
                                <a href=\"{{ path('category', {slug: category.slug}) }}\">
                                    <img src=\"{{ asset('upload/img/') }}{{ category.catImg }}\" alt=\"{{ category.slug }}\" class=\"category__img\">
                                    <span class=\"category__name\">{{category.catName}}</span>
                                </a>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </section>

        <article>

            <section>
                {% for post in lastPosts %}
                    <div class=\"preview__container\">

                        <div class=\"preview__img\">
                        
                            <a href=\"{{ path('post', {slug: post.slug}) }}\"><img class=\"img__content img__content--transform\" src=\"{{ asset('upload/img/') }}{{post.postImg}}\" alt=\"{{ post.slug }}\"></a>
                        
                            <div class=\"preview__descr\">
                                <span class=\"category__indicator\"><a class=\"category__link\" href=\"{{ path('category', {slug: post.postCategory.slug}) }}\">{{post.postCategory.catName}}</a></span>
                                <h4 class=\"article__title\"><a href=\"{{ path('post', {slug: post.slug}) }}\">{{post.postTitle}}</a></h4>
                            </div>
                        </div>    

                        <p>{{post.postContent |u.truncate(170)}}... <br> <a href=\"{{ path('post', {slug: post.slug}) }}\" class=\"\">lire la suite</a></p>

                    </div>
                {% endfor %}
            </section>

            
                {{ knp_pagination_render(lastPosts) }}
           

        </article>
    </div>
{% endblock %}
", "blog/blog.html.twig", "C:\\Users\\fagay\\Desktop\\naturo\\NaturoBack\\templates\\blog\\blog.html.twig");
    }
}
