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

/* pages/seance.html.twig */
class __TwigTemplate_2329ca140d0d95c85acf3854f9a3af6d4e8b765397dc6c3b51738057d6c2f73d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/seance.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/seance.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/seance.html.twig", 1);
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

        echo "La séance";
        
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
            <h1 class=\"content__title\">La <span class=\"content--color break\">séance</span> </h1>
        </div>
        <div class=\"container\">
            <p>Après vous avoir eu au téléphone pour la prise de rendez-vous et vous avoir expliqué le rôle du naturopathe et ses limites, voici comment va se passer la séance :</p>
            <p>Lors de votre première consultation, qui durera environ 1h30, je vais par un questionnaire d’hygiène de vie établir un bilan de vitalité et par la même votre Programme d’Hygiène de Vie personnalisé.</p>
            <p>Ce questionnaire sera scindé en plusieurs parties afin de me permettre de mieux comprendre :</p>
            <ul>
                <li>Votre ou vos problématique(s) et les traitements y afférents</li>
                <li>Les causes potentielles des dysfonctionnements constatés comme par exemple un stress, de la fatigue, des problématiques digestifs etc …</li>
                <li>Votre niveau de vitalité</li>
                <li>L’objectif exact de votre suivi</li>
                <li>Vos habitudes alimentaires et de votre hygiène de vie</li>
                <li>L’environnement qu’il soit professionnel ou personnel</li>
            </ul>
            <p>Nous ferons donc en sorte de trouver la cause de ce ou ces déséquilibre(s) afin que vous puissiez retrouver votre bien-être et votre vitalité</p>
            <p>Une fois votre programme d’hygiène de vie établi, nous programmerons un rendez-vous de suivi afin de rééquilibrer, si besoin ce dernier, pour avancer au fur et à mesure et arriver à l’objectif fixé.</p>
            <p>Nous allons donc travailler ensemble sur les trois grands piliers que sont l’alimentation saine vivante et variée, la gestion du stress et des émotions et enfin les mouvements et respirations, programme qui pourra être accompagné d’un complément de techniques naturelles comme la phytothérapie, l’aromathérapie, les Fleurs de Bach …</p>
            <p>Je suis également spécialisée dans les troubles du sommeil. 
            Le sommeil se trouve être l’un des 5 points cardinaux de la vitalité, au même titre que l’alimentation, les mouvements et respiration, la gestion du stress et des émotions.
            Vous trouverez quelques informations dans l’onglet « Sommeil »</p>
            <p class=\"content--center content--upper\">Le naturopathe est éducateur de santé, le client est acteur de
                sa santé</p>

            <p class=\"warning\">Attention : La naturopathie est une médecine non conventionnelle, complémentaire qui
            vient donc en complément de la médecine traditionnelle et non la remplacer. Elle n’a pas vocation à
            faire des diagnostics, seuls les médecins y sont habilités, tout comme un naturopathe n’a pas à vous
            demander d’arrêter un traitement médical ou vous faire une ordonnance.</p>
        </div>

    </article>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/seance.html.twig";
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

{% block title %}La séance{% endblock %}

{% block body %}

    <article class=\"content\">

        <div class=\"content__title-container\">
            <h1 class=\"content__title\">La <span class=\"content--color break\">séance</span> </h1>
        </div>
        <div class=\"container\">
            <p>Après vous avoir eu au téléphone pour la prise de rendez-vous et vous avoir expliqué le rôle du naturopathe et ses limites, voici comment va se passer la séance :</p>
            <p>Lors de votre première consultation, qui durera environ 1h30, je vais par un questionnaire d’hygiène de vie établir un bilan de vitalité et par la même votre Programme d’Hygiène de Vie personnalisé.</p>
            <p>Ce questionnaire sera scindé en plusieurs parties afin de me permettre de mieux comprendre :</p>
            <ul>
                <li>Votre ou vos problématique(s) et les traitements y afférents</li>
                <li>Les causes potentielles des dysfonctionnements constatés comme par exemple un stress, de la fatigue, des problématiques digestifs etc …</li>
                <li>Votre niveau de vitalité</li>
                <li>L’objectif exact de votre suivi</li>
                <li>Vos habitudes alimentaires et de votre hygiène de vie</li>
                <li>L’environnement qu’il soit professionnel ou personnel</li>
            </ul>
            <p>Nous ferons donc en sorte de trouver la cause de ce ou ces déséquilibre(s) afin que vous puissiez retrouver votre bien-être et votre vitalité</p>
            <p>Une fois votre programme d’hygiène de vie établi, nous programmerons un rendez-vous de suivi afin de rééquilibrer, si besoin ce dernier, pour avancer au fur et à mesure et arriver à l’objectif fixé.</p>
            <p>Nous allons donc travailler ensemble sur les trois grands piliers que sont l’alimentation saine vivante et variée, la gestion du stress et des émotions et enfin les mouvements et respirations, programme qui pourra être accompagné d’un complément de techniques naturelles comme la phytothérapie, l’aromathérapie, les Fleurs de Bach …</p>
            <p>Je suis également spécialisée dans les troubles du sommeil. 
            Le sommeil se trouve être l’un des 5 points cardinaux de la vitalité, au même titre que l’alimentation, les mouvements et respiration, la gestion du stress et des émotions.
            Vous trouverez quelques informations dans l’onglet « Sommeil »</p>
            <p class=\"content--center content--upper\">Le naturopathe est éducateur de santé, le client est acteur de
                sa santé</p>

            <p class=\"warning\">Attention : La naturopathie est une médecine non conventionnelle, complémentaire qui
            vient donc en complément de la médecine traditionnelle et non la remplacer. Elle n’a pas vocation à
            faire des diagnostics, seuls les médecins y sont habilités, tout comme un naturopathe n’a pas à vous
            demander d’arrêter un traitement médical ou vous faire une ordonnance.</p>
        </div>

    </article>

{% endblock %}
", "pages/seance.html.twig", "C:\\Users\\fagay\\Desktop\\naturo\\NaturoBack\\templates\\pages\\seance.html.twig");
    }
}
