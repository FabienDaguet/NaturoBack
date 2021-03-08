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

/* pages/prices.html.twig */
class __TwigTemplate_ca4f6fb285de25a838531b0f2de1bcc051e8e65514f9fe4cef8aa2d907ab1643 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'prices' => [$this, 'block_prices'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/prices.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/prices.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/prices.html.twig", 1);
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

        echo "Qui suis-je";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_prices($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "prices"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "prices"));

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
    <article class=\"content\">

        <div class=\"content__title-container\">
            <h1 class=\"content__title\">Les <span class=\"content--color break\">tarifs</span> </h1>
        </div>

        <section class=\"section price-section\">
            <h5 class=\"content--color price__section\">1ere consultation 1h50</h5>
            <div class=\"price__container\">
                <div>
                    <span>Tarifs adultes :</span>
                    <div class=\"content__list price\">
                        <span class=\"content__list-element content__list-element--spacing\">en cabinet = 80€</span>
                        <span class=\"content__list-element content__list-element--spacing\">à domicile = 90€*</span>
                        <span class=\"content__list-element content__list-element--spacing\">en ligne = 80€</span>
                    </div>
                </div>
                <div>
                    <span>Tarifs enfants :</span>
                    <div class=\"content__list price\">
                        <span class=\"content__list-element content__list-element--spacing\">en cabinet = 60€</span>
                        <span class=\"content__list-element content__list-element--spacing\"> à domicile = 70€*</span>
                    </div>
                </div>
            </div>


            <h5 class=\"content--color\">Suivi 45mn-1h</h5>
            <div class=\"price__container\">
                <div>
                    <span>Tarifs adultes :</span>
                    <div class=\"content__list price\">
                        <span class=\"content__list-element content__list-element--spacing\">en cabinet = 60€</span>
                        <span class=\"content__list-element content__list-element--spacing\">à domicile = 70€*</span>
                        <span class=\"content__list-element content__list-element--spacing\">en ligne = 60€</span>
                    </div>
                </div>
                <div>
                    <span>Tarifs enfants :</span>
                    <div class=\"content__list price\">
                        <span class=\"content__list-element content__list-element--spacing\">en cabinet = 50€</span>
                        <span class=\"content__list-element content__list-element--spacing\">à domicile = 60€*</span>
                    </div>
                </div>
            </div>


            <p class=\"warning\">*Domicile à 15km alentours</p>

        </section>

    </article>
        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/prices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 8,  98 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Qui suis-je{% endblock %}

{% block prices %}active{% endblock %}

{% block body %}

    <article class=\"content\">

        <div class=\"content__title-container\">
            <h1 class=\"content__title\">Les <span class=\"content--color break\">tarifs</span> </h1>
        </div>

        <section class=\"section price-section\">
            <h5 class=\"content--color price__section\">1ere consultation 1h50</h5>
            <div class=\"price__container\">
                <div>
                    <span>Tarifs adultes :</span>
                    <div class=\"content__list price\">
                        <span class=\"content__list-element content__list-element--spacing\">en cabinet = 80€</span>
                        <span class=\"content__list-element content__list-element--spacing\">à domicile = 90€*</span>
                        <span class=\"content__list-element content__list-element--spacing\">en ligne = 80€</span>
                    </div>
                </div>
                <div>
                    <span>Tarifs enfants :</span>
                    <div class=\"content__list price\">
                        <span class=\"content__list-element content__list-element--spacing\">en cabinet = 60€</span>
                        <span class=\"content__list-element content__list-element--spacing\"> à domicile = 70€*</span>
                    </div>
                </div>
            </div>


            <h5 class=\"content--color\">Suivi 45mn-1h</h5>
            <div class=\"price__container\">
                <div>
                    <span>Tarifs adultes :</span>
                    <div class=\"content__list price\">
                        <span class=\"content__list-element content__list-element--spacing\">en cabinet = 60€</span>
                        <span class=\"content__list-element content__list-element--spacing\">à domicile = 70€*</span>
                        <span class=\"content__list-element content__list-element--spacing\">en ligne = 60€</span>
                    </div>
                </div>
                <div>
                    <span>Tarifs enfants :</span>
                    <div class=\"content__list price\">
                        <span class=\"content__list-element content__list-element--spacing\">en cabinet = 50€</span>
                        <span class=\"content__list-element content__list-element--spacing\">à domicile = 60€*</span>
                    </div>
                </div>
            </div>


            <p class=\"warning\">*Domicile à 15km alentours</p>

        </section>

    </article>
        
{% endblock %}
", "pages/prices.html.twig", "C:\\Users\\dague\\Desktop\\backend\\NaturopathieBack\\templates\\pages\\prices.html.twig");
    }
}
