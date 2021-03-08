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

/* pages/history.html.twig */
class __TwigTemplate_8c895d0288d75a9ad52a54a6475341bbeb90b4f56275a3f02ac0dd20135d9b55 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'history' => [$this, 'block_history'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/history.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/history.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/history.html.twig", 1);
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

        echo "Histoire";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_history($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "history"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "history"));

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
            <h1 class=\"content__title\">Un peu <span class=\"content--color break\">d'histoire</span></h1>
        </div>

        <div class=\"content__paragraph content__paragraph--spacing\">
            <p>C’est Hippocrate (médecin grec né sur l’Île de Cos / mort à Larissa - 460-370 avant JC - Père
                fondateur de la médecine occidentale) qui a établis les 5principes de la naturopathie :</p>
        </div>

        <div class=\"content--center\">
            <p>« Primum non nocere » = En premier lieu ne pas nuire</p>
        </div>
        <div class=\"content--center\">
            <p>« Vis medicatrix naturae » = La nature est guérisseuse</p>
        </div>
        <div class=\"content--center\">
            <p>« Tolle causam » = Identifier et traiter la cause</p>
        </div>
        <div class=\"content--center\">
            <p>« Diende purgare» = Détoxifier et purifier l’organisme</p>
        </div>
        <div class=\"content--center\">
            <p>« Docere » = La naturopathie enseigne</p>
        </div>

        <div class=\"img__container img__container-history\">
            <img class=\"img__content img__content-history\" src=\"img/hippocrate.jpg\"
                alt=\"Portrait Hippocrate de Cos\">
        </div>

        <section class=\"section\">
            <p class=\"content__paragraph--spacing\">En France, Pierre-Valentin Marchesseau (1911-1994) est considéré
                comme le « père de la naturopathie » pour avoir importé et traduit les techniques en 1935. En 1973,
                il créé l’Institut d’Hygiène Vitale à Paris. Il formera de grands noms de la naturopathie.</p>

            <div class=\"img__container img__container-history\">
                <img class=\"img__content img__content-history\" src=\"img/marchesseau.jpg\"
                    alt=\"Portrait Pierre-Valentin Marchesseau\">
            </div>

            <p class=\"content__paragraph--spacing\">En 1997 la naturopathie a été reconnue par le Parlement Européen
                comme médecine non conventionnelle.</p>
            <p class=\"content__paragraph--spacing\">L’OMS – Organisation Mondiale de la Santé – l’a reconnue en 2001
                comme 3 ème médecine traditionnelle mondiale, après les médecines chinoise et ayurvédique</p>
            <p class=\"content__paragraph--spacing\">La définition de l’OMS est : « la naturopathie est un ensemble de
                méthodes de soins visant à renforcer les défenses de l’organisme par des moyens considérés comme
                naturels et biologiques »</p>
            <p class=\"content__paragraph--spacing\">Le naturopathe, contrairement au médecin, va rechercher la cause
                du
                dérèglement et va se servir de techniques naturelles pour y parvenir, comme le réglage alimentaire,
                l’activité physique, la relaxation, la gestion du stress ...</p>

            <p class=\"warning\">Attention : La naturopathie est une médecine non conventionnelle, complémentaire qui
                vient donc en complément de la médecine traditionnelle et non la remplacer. Elle n’a pas vocation à
                faire des diagnostics, seuls les médecins y sont habilités, tout comme un naturopathe n’a pas à vous
                demander d’arrêter un traitement médical ou vous faire une ordonnance.</p>

            <p class=\"content--center content--upper\">Le naturopathe est éducateur de santé, le client est acteur de
                sa santé</p>

        </section>

    </article>
   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/history.html.twig";
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

{% block title %}Histoire{% endblock %}

{% block history %}active{% endblock %}

{% block body %}

    <article class=\"content\">

        <div class=\"content__title-container\">
            <h1 class=\"content__title\">Un peu <span class=\"content--color break\">d'histoire</span></h1>
        </div>

        <div class=\"content__paragraph content__paragraph--spacing\">
            <p>C’est Hippocrate (médecin grec né sur l’Île de Cos / mort à Larissa - 460-370 avant JC - Père
                fondateur de la médecine occidentale) qui a établis les 5principes de la naturopathie :</p>
        </div>

        <div class=\"content--center\">
            <p>« Primum non nocere » = En premier lieu ne pas nuire</p>
        </div>
        <div class=\"content--center\">
            <p>« Vis medicatrix naturae » = La nature est guérisseuse</p>
        </div>
        <div class=\"content--center\">
            <p>« Tolle causam » = Identifier et traiter la cause</p>
        </div>
        <div class=\"content--center\">
            <p>« Diende purgare» = Détoxifier et purifier l’organisme</p>
        </div>
        <div class=\"content--center\">
            <p>« Docere » = La naturopathie enseigne</p>
        </div>

        <div class=\"img__container img__container-history\">
            <img class=\"img__content img__content-history\" src=\"img/hippocrate.jpg\"
                alt=\"Portrait Hippocrate de Cos\">
        </div>

        <section class=\"section\">
            <p class=\"content__paragraph--spacing\">En France, Pierre-Valentin Marchesseau (1911-1994) est considéré
                comme le « père de la naturopathie » pour avoir importé et traduit les techniques en 1935. En 1973,
                il créé l’Institut d’Hygiène Vitale à Paris. Il formera de grands noms de la naturopathie.</p>

            <div class=\"img__container img__container-history\">
                <img class=\"img__content img__content-history\" src=\"img/marchesseau.jpg\"
                    alt=\"Portrait Pierre-Valentin Marchesseau\">
            </div>

            <p class=\"content__paragraph--spacing\">En 1997 la naturopathie a été reconnue par le Parlement Européen
                comme médecine non conventionnelle.</p>
            <p class=\"content__paragraph--spacing\">L’OMS – Organisation Mondiale de la Santé – l’a reconnue en 2001
                comme 3 ème médecine traditionnelle mondiale, après les médecines chinoise et ayurvédique</p>
            <p class=\"content__paragraph--spacing\">La définition de l’OMS est : « la naturopathie est un ensemble de
                méthodes de soins visant à renforcer les défenses de l’organisme par des moyens considérés comme
                naturels et biologiques »</p>
            <p class=\"content__paragraph--spacing\">Le naturopathe, contrairement au médecin, va rechercher la cause
                du
                dérèglement et va se servir de techniques naturelles pour y parvenir, comme le réglage alimentaire,
                l’activité physique, la relaxation, la gestion du stress ...</p>

            <p class=\"warning\">Attention : La naturopathie est une médecine non conventionnelle, complémentaire qui
                vient donc en complément de la médecine traditionnelle et non la remplacer. Elle n’a pas vocation à
                faire des diagnostics, seuls les médecins y sont habilités, tout comme un naturopathe n’a pas à vous
                demander d’arrêter un traitement médical ou vous faire une ordonnance.</p>

            <p class=\"content--center content--upper\">Le naturopathe est éducateur de santé, le client est acteur de
                sa santé</p>

        </section>

    </article>
   
{% endblock %}
", "pages/history.html.twig", "C:\\Users\\dague\\Desktop\\backend\\NaturopathieBack\\templates\\pages\\history.html.twig");
    }
}
