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

/* blog/post.html.twig */
class __TwigTemplate_1b512e7efd91084d38c0287da863aa14f0917b2f080b15a83b8136a6dd8c5b6d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/post.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/post.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/post.html.twig", 1);
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
    <div class=\"post__category-img-container\">
        <img class=\"post__category-img\" src=\"img/alim.jpg\" alt=\"fruits\">
    </div>

    <article class=\"content\">

        <div class=\"content__title-container post__head\">
            <span class=\"category\"><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Blog</a> \\ <a href=\"category.html\">Categorie \\</a></span>
            <h1 class=\"content__title post__title\">Titre de <span class=\"content--color break\">l'articles</span> </h1>
        </div>

        <section>
            <div class=\"preview__container\">
                <div class=\"preview__img\">
                    <img class=\"img__content post__img\" src=\"img/alimentation.jpg\" alt=\"plat sain\">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam possimus amet
                        eveniet adipisci
                        suscipit aliquid velit, fuga cum sequi eligendi. Voluptatibus ab sed dolores magni, ratione
                        voluptate blanditiis dolorum sunt!
                        Quas adipisci animi eaque temporibus nisi ex aut ipsam doloribus necessitatibus, id tempora
                        illo
                        rerum nesciunt facilis corrupti Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni doloremque saepe cumque veniam aut sint beatae adipisci facere deleniti, quo in exercitationem ad laudantium molestias vitae ratione natus eveniet odio.
                        Vel deleniti quia cumque eius illum quaerat, minima fugit repellendus laudantium excepturi quisquam ab? Accusamus optio sapiente laudantium suscipit? Officiis fuga ut placeat necessitatibus odit tempora asperiores est nostrum fugiat.
                        Placeat nihil ratione velit, maxime fugiat autem! Quae eum sequi dicta quidem distinctio velit fugit totam possimus exercitationem animi ab perspiciatis odit, aliquid accusantium a, placeat, dolorum ipsam aut iste.
                        Quasi nulla ab sequi obcaecati quaerat molestiae dolores possimus dolorum a minima asperiores necessitatibus rem laudantium nisi quae expedita eius illo quibusdam deserunt nihil, quos exercitationem provident ullam deleniti? Quisquam!
                        Officiis, laborum iure veritatis fuga eos labore. Veniam laudantium placeat omnis atque nam fugiat, corrupti quis ipsum neque ad adipisci ipsa repellendus tempora, iure suscipit voluptatum magni doloremque. Nisi, nam?
                        Corrupti quo deleniti possimus. Excepturi maiores nostrum sunt perferendis, sit, aut ex amet rem eligendi illum eaque animi quasi, ab neque minima? Velit exercitationem odit fuga qui maxime sequi cupiditate.
                        Deserunt saepe numquam eum? Ullam libero ducimus excepturi cum voluptatum, quibusdam eligendi nostrum ea molestias odit qui? Delectus, molestias rerum nemo, minus sed voluptates nobis nostrum molestiae laudantium mollitia sapiente!
                        Dolor, nisi. Neque placeat aliquam voluptatibus minima possimus similique sapiente magnam, illo, fuga eaque et cupiditate a ipsa est, expedita id facilis voluptas sint laudantium modi repudiandae ipsam earum! Veritatis.
                        Perspiciatis ad voluptatibus quasi possimus, voluptatem minima? Quasi modi quis dolores praesentium animi. Dolorem, eum atque? Vero, laudantium quo aliquid, dolor voluptatem optio labore modi non at quas voluptas! Nulla?
                        Ab, amet blanditiis. Cum quia quod odio illo dolor quasi hic quis provident odit itaque quo ducimus voluptatum, facilis voluptates praesentium vel quam. Rerum cupiditate, placeat voluptatem quia nemo maxime?</p>
        </div>

        <span><a href=\"articles.html\">Retour</a></span>

    </article>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 16,  108 => 8,  98 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello BlogController!{% endblock %}

{% block blog %}active{% endblock %}

{% block body %}

    <div class=\"post__category-img-container\">
        <img class=\"post__category-img\" src=\"img/alim.jpg\" alt=\"fruits\">
    </div>

    <article class=\"content\">

        <div class=\"content__title-container post__head\">
            <span class=\"category\"><a href=\"{{ path('blog') }}\">Blog</a> \\ <a href=\"category.html\">Categorie \\</a></span>
            <h1 class=\"content__title post__title\">Titre de <span class=\"content--color break\">l'articles</span> </h1>
        </div>

        <section>
            <div class=\"preview__container\">
                <div class=\"preview__img\">
                    <img class=\"img__content post__img\" src=\"img/alimentation.jpg\" alt=\"plat sain\">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam possimus amet
                        eveniet adipisci
                        suscipit aliquid velit, fuga cum sequi eligendi. Voluptatibus ab sed dolores magni, ratione
                        voluptate blanditiis dolorum sunt!
                        Quas adipisci animi eaque temporibus nisi ex aut ipsam doloribus necessitatibus, id tempora
                        illo
                        rerum nesciunt facilis corrupti Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni doloremque saepe cumque veniam aut sint beatae adipisci facere deleniti, quo in exercitationem ad laudantium molestias vitae ratione natus eveniet odio.
                        Vel deleniti quia cumque eius illum quaerat, minima fugit repellendus laudantium excepturi quisquam ab? Accusamus optio sapiente laudantium suscipit? Officiis fuga ut placeat necessitatibus odit tempora asperiores est nostrum fugiat.
                        Placeat nihil ratione velit, maxime fugiat autem! Quae eum sequi dicta quidem distinctio velit fugit totam possimus exercitationem animi ab perspiciatis odit, aliquid accusantium a, placeat, dolorum ipsam aut iste.
                        Quasi nulla ab sequi obcaecati quaerat molestiae dolores possimus dolorum a minima asperiores necessitatibus rem laudantium nisi quae expedita eius illo quibusdam deserunt nihil, quos exercitationem provident ullam deleniti? Quisquam!
                        Officiis, laborum iure veritatis fuga eos labore. Veniam laudantium placeat omnis atque nam fugiat, corrupti quis ipsum neque ad adipisci ipsa repellendus tempora, iure suscipit voluptatum magni doloremque. Nisi, nam?
                        Corrupti quo deleniti possimus. Excepturi maiores nostrum sunt perferendis, sit, aut ex amet rem eligendi illum eaque animi quasi, ab neque minima? Velit exercitationem odit fuga qui maxime sequi cupiditate.
                        Deserunt saepe numquam eum? Ullam libero ducimus excepturi cum voluptatum, quibusdam eligendi nostrum ea molestias odit qui? Delectus, molestias rerum nemo, minus sed voluptates nobis nostrum molestiae laudantium mollitia sapiente!
                        Dolor, nisi. Neque placeat aliquam voluptatibus minima possimus similique sapiente magnam, illo, fuga eaque et cupiditate a ipsa est, expedita id facilis voluptas sint laudantium modi repudiandae ipsam earum! Veritatis.
                        Perspiciatis ad voluptatibus quasi possimus, voluptatem minima? Quasi modi quis dolores praesentium animi. Dolorem, eum atque? Vero, laudantium quo aliquid, dolor voluptatem optio labore modi non at quas voluptas! Nulla?
                        Ab, amet blanditiis. Cum quia quod odio illo dolor quasi hic quis provident odit itaque quo ducimus voluptatum, facilis voluptates praesentium vel quam. Rerum cupiditate, placeat voluptatem quia nemo maxime?</p>
        </div>

        <span><a href=\"articles.html\">Retour</a></span>

    </article>

{% endblock %}
", "blog/post.html.twig", "C:\\Users\\dague\\Desktop\\backend\\NaturopathieBack\\templates\\blog\\post.html.twig");
    }
}
