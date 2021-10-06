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

/* pages/index.html.twig */
class __TwigTemplate_2b7974974876574a997817d30b179cc4dd14944f198ad00aebc592e361f8fdbd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/index.html.twig", 1);
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

        echo "Bienvenue";
        
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
    <article class=\"content\">

        <div class=\"content__title-container\">
            <h1 class=\"content__title\">Qu'est ce que la <span class=\"content--color break\">naturopathie</span> ?
            </h1>
        </div>

        <div class=\"content__paragraph\">
            <p class=\"content__paragraph--spacing\">C’est un allemand John H. Scheel qui en 1895 est à l’origine du
                mot «naturopathie» qui vient de deux mots anglais «nature» et «path».</p>
            <div class=\"content--center\">
                <p class=\"content__paragraph--spacing\">La naturopathie se traduit par le « chemin de la nature ».
                </p>
            </div>
            <p class=\"content--upper content__paragraph--spacing\">« La naturopathie est l'art d'aider les personnes
                à conserver, trouver ou retrouver leur santé et leur bien être, de façon et par des moyens naturels»
            </p>
        </div>

        <p>Elle repose sur 3 grands piliers que sont :</p>
        <div class=\"flex__container\">
            <div class=\"content__list\">
                <div class=\"content__list-element-container\">
                    <span class=\"content__list-element \">une alimentation saine, vivante, équilibrée</span>
                </div>
                <div class=\"content__list-element-container\">
                    <span class=\"content__list-element\">la gestion du stress et des émotions</span>
                </div>
                <div class=\"content__list-element-container\">
                    <span class=\"content__list-element\">la gestion des mouvements et respiration</span>
                </div>
            </div>
            <div class=\"img__flex-container\">
                <div class=\"img__container\">
                    <img class=\"img__content\" src=\"img/alimentation.jpg\" alt=\"alimentation\">
                </div>
                <div class=\"img__container\">
                    <img class=\"img__content\" src=\"img/stress.jpg\" alt=\"stress\">
                </div>
                <div class=\"img__container\">
                    <img class=\"img__content\" src=\"img/respiration.jpg\" alt=\"respiration\">
                </div>
            </div>
        </div>

    </article>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bienvenue{% endblock %}

{% block body %}

    <article class=\"content\">

        <div class=\"content__title-container\">
            <h1 class=\"content__title\">Qu'est ce que la <span class=\"content--color break\">naturopathie</span> ?
            </h1>
        </div>

        <div class=\"content__paragraph\">
            <p class=\"content__paragraph--spacing\">C’est un allemand John H. Scheel qui en 1895 est à l’origine du
                mot «naturopathie» qui vient de deux mots anglais «nature» et «path».</p>
            <div class=\"content--center\">
                <p class=\"content__paragraph--spacing\">La naturopathie se traduit par le « chemin de la nature ».
                </p>
            </div>
            <p class=\"content--upper content__paragraph--spacing\">« La naturopathie est l'art d'aider les personnes
                à conserver, trouver ou retrouver leur santé et leur bien être, de façon et par des moyens naturels»
            </p>
        </div>

        <p>Elle repose sur 3 grands piliers que sont :</p>
        <div class=\"flex__container\">
            <div class=\"content__list\">
                <div class=\"content__list-element-container\">
                    <span class=\"content__list-element \">une alimentation saine, vivante, équilibrée</span>
                </div>
                <div class=\"content__list-element-container\">
                    <span class=\"content__list-element\">la gestion du stress et des émotions</span>
                </div>
                <div class=\"content__list-element-container\">
                    <span class=\"content__list-element\">la gestion des mouvements et respiration</span>
                </div>
            </div>
            <div class=\"img__flex-container\">
                <div class=\"img__container\">
                    <img class=\"img__content\" src=\"img/alimentation.jpg\" alt=\"alimentation\">
                </div>
                <div class=\"img__container\">
                    <img class=\"img__content\" src=\"img/stress.jpg\" alt=\"stress\">
                </div>
                <div class=\"img__container\">
                    <img class=\"img__content\" src=\"img/respiration.jpg\" alt=\"respiration\">
                </div>
            </div>
        </div>

    </article>

{% endblock %}
", "pages/index.html.twig", "D:\\Work\\NaturoBack\\templates\\pages\\index.html.twig");
    }
}
