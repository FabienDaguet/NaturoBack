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

/* pages/aboutMe.html.twig */
class __TwigTemplate_e91a669eb3374c50976932f4ea34c409ecd473619f7f8d74415def0125e59f2f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/aboutMe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/aboutMe.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/aboutMe.html.twig", 1);
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

        <div class=\"content--center\">
            <h1 class=\"content__title\">Qui <span class=\"content--color break\">suis-je</span> ?</h1>
        </div>
        <div class=\"container\">
            <div class=\"profil-picture__container\">
                <img class=\"profil-picture\" src=\"img/marchesseau.jpg\" alt=\"Laurence Baudet\">
            </div>

            <p>Je m’appelle Laurence Baudet, je suis certifiée de l’école Plantasanté à Obernai en Alsace depuis
                septembre 2020.</p>
            <p>J’ai travaillé durant de nombreuses années dans le domaine des assurances patrimoniales, un jour je
                me suis réveillée en me disant que ce métier ne me ressemblait plus, que je me perdais.</p>
            <p>J’ai réalisé que j’avais besoin de travailler avec l’humain et mettre l’humain au centre de mon
                métier avec des moyens naturels et c’est tout naturellement que j’ai décidé de suivre des cours de
                naturopathie qui m’ont permis d’accéder à un mieux être, tant physiquement que psychiquement.</p>
            <p>Aujourd’hui, je vous propose de vous accompagner par un Programme d’Hygiène de Vie individuel afin de
                vous permettre de trouver ou retrouver le chemin du bien être et que vous deveniez l’acteur
                principal de votre santé.</p>
        </div>


    </article>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/aboutMe.html.twig";
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

{% block title %}Qui suis-je{% endblock %}

{% block body %}

    <article class=\"content\">

        <div class=\"content--center\">
            <h1 class=\"content__title\">Qui <span class=\"content--color break\">suis-je</span> ?</h1>
        </div>
        <div class=\"container\">
            <div class=\"profil-picture__container\">
                <img class=\"profil-picture\" src=\"img/marchesseau.jpg\" alt=\"Laurence Baudet\">
            </div>

            <p>Je m’appelle Laurence Baudet, je suis certifiée de l’école Plantasanté à Obernai en Alsace depuis
                septembre 2020.</p>
            <p>J’ai travaillé durant de nombreuses années dans le domaine des assurances patrimoniales, un jour je
                me suis réveillée en me disant que ce métier ne me ressemblait plus, que je me perdais.</p>
            <p>J’ai réalisé que j’avais besoin de travailler avec l’humain et mettre l’humain au centre de mon
                métier avec des moyens naturels et c’est tout naturellement que j’ai décidé de suivre des cours de
                naturopathie qui m’ont permis d’accéder à un mieux être, tant physiquement que psychiquement.</p>
            <p>Aujourd’hui, je vous propose de vous accompagner par un Programme d’Hygiène de Vie individuel afin de
                vous permettre de trouver ou retrouver le chemin du bien être et que vous deveniez l’acteur
                principal de votre santé.</p>
        </div>


    </article>

{% endblock %}
", "pages/aboutMe.html.twig", "C:\\Users\\fagay\\Desktop\\naturo\\NaturoBack\\templates\\pages\\aboutMe.html.twig");
    }
}
