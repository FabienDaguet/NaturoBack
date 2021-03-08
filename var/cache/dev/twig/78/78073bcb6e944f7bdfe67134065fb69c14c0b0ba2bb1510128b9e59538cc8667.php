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

/* pages/contact.html.twig */
class __TwigTemplate_19cdf87b05d9dedb59c689a24ecd9fcd6f6af64ca97f69c7664df1a17ca80828 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/contact.html.twig", 1);
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

        echo "Contact";
        
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
            <h1 class=\"content__title\">Me <span class=\"content--color break\">contacter</span> </h1>
        </div>
        <div class=\"container\">
            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"name\"><i class=\"fas fa-user-alt form__element-icon\"></i> Nom
                        Prénom :</label>
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), 'row', ["attr" => ["class" => "form__element-input"]]);
        echo "
                </div>
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"email\"><i class=\"fas fa-envelope form__element-icon\"></i> Email
                        :</label>
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "email", [], "any", false, false, false, 22), 'row', ["attr" => ["class" => "form__element-input"]]);
        echo "
                </div>
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"phone\"><i class=\"fas fa-phone-alt form__element-icon\"></i>
                        Téléphone :</label>
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "phone", [], "any", false, false, false, 27), 'row', ["attr" => ["class" => "form__element-input"]]);
        echo "
                </div>
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"object\"><i class=\"fas fa-th-list form__element-icon\"></i> Objet
                        :</label>
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "objet", [], "any", false, false, false, 32), 'row', ["attr" => ["class" => "form__element-input"]]);
        echo "
                </div>
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"message\"><i class=\"fas fa-pen form__element-icon\"></i>
                        Message</label>
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "message", [], "any", false, false, false, 37), 'row', ["attr" => ["class" => "form__message", "cols" => "58", "rows" => "10", "wrap" => "hard"]]);
        echo "
                </div>

                <div class=\"submit__container\">
                    <div class=\"form__element form__element-submit\">
                        <input class=\"form__submit\" type=\"submit\" value=\"Envoyer\">
                    </div>
                </div>
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "


        <!--
            <form action=\"/email\" method=\"post\">
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"name\"><i class=\"fas fa-user-alt form__element-icon\"></i> Nom
                        Prénom :</label>
                    <input class=\"form__element-input\" type=\"text\" id=\"name\" name=\"name\" required>
                </div>
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"email\"><i class=\"fas fa-envelope form__element-icon\"></i> Email
                        :</label>
                    <input class=\"form__element-input\" type=\"email\" id=\"email\" name=\"email\" required>
                </div>
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"phone\"><i class=\"fas fa-phone-alt form__element-icon\"></i>
                        Téléphone :</label>
                    <input class=\"form__element-input\" type=\"tel\" id=\"phone\" name=\"phone\" required>
                </div>
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"object\"><i class=\"fas fa-th-list form__element-icon\"></i> Objet
                        :</label>
                    <select class=\"form__element-input\" name=\"object\" id=\"object\" required>
                        <option value=\"\">Veuillez sélectionner un objet</option>
                        <option value=\"Prise de rendez-vous\">Prise de rendez-vous</option>
                        <option value=\"Annuler un rendez-vous\">Annuler un rendez-vous</option>
                        <option value=\"Demande de renseignement\">Demande de renseignement</option>
                    </select>
                </div>
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"message\"><i class=\"fas fa-pen form__element-icon\"></i>
                        Message</label>
                    <textarea class=\"form__message\" name=\"message\" id=\"message\" cols=\"30\" rows=\"10\" wrap=\"hard\"
                        placeholder=\"votre message\"></textarea>
                </div>

                <div class=\"submit__container\">
                    <div class=\"form__element form__element-submit\">
                        <input class=\"form__submit\" type=\"submit\" value=\"Envoyer\">
                    </div>
                </div>

            </form>
        -->    
        </div>

    </article>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 45,  136 => 37,  128 => 32,  120 => 27,  112 => 22,  104 => 17,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact{% endblock %}

{% block body %}

    <article class=\"content\">

        <div class=\"content__title-container\">
            <h1 class=\"content__title\">Me <span class=\"content--color break\">contacter</span> </h1>
        </div>
        <div class=\"container\">
            {{ form_start(form) }}
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"name\"><i class=\"fas fa-user-alt form__element-icon\"></i> Nom
                        Prénom :</label>
                    {{ form_row(form.name, { 'attr': { 'class': 'form__element-input' } }) }}
                </div>
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"email\"><i class=\"fas fa-envelope form__element-icon\"></i> Email
                        :</label>
                    {{ form_row(form.email, { 'attr': { 'class': 'form__element-input' } }) }}
                </div>
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"phone\"><i class=\"fas fa-phone-alt form__element-icon\"></i>
                        Téléphone :</label>
                    {{ form_row(form.phone, { 'attr': { 'class': 'form__element-input' } }) }}
                </div>
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"object\"><i class=\"fas fa-th-list form__element-icon\"></i> Objet
                        :</label>
                    {{ form_row(form.objet, { 'attr': { 'class': 'form__element-input' } }) }}
                </div>
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"message\"><i class=\"fas fa-pen form__element-icon\"></i>
                        Message</label>
                    {{ form_row(form.message, { 'attr': { 'class': 'form__message', 'cols' : '58', 'rows' : '10', 'wrap' : \"hard\" } }) }}
                </div>

                <div class=\"submit__container\">
                    <div class=\"form__element form__element-submit\">
                        <input class=\"form__submit\" type=\"submit\" value=\"Envoyer\">
                    </div>
                </div>
            {{ form_end(form) }}


        <!--
            <form action=\"/email\" method=\"post\">
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"name\"><i class=\"fas fa-user-alt form__element-icon\"></i> Nom
                        Prénom :</label>
                    <input class=\"form__element-input\" type=\"text\" id=\"name\" name=\"name\" required>
                </div>
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"email\"><i class=\"fas fa-envelope form__element-icon\"></i> Email
                        :</label>
                    <input class=\"form__element-input\" type=\"email\" id=\"email\" name=\"email\" required>
                </div>
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"phone\"><i class=\"fas fa-phone-alt form__element-icon\"></i>
                        Téléphone :</label>
                    <input class=\"form__element-input\" type=\"tel\" id=\"phone\" name=\"phone\" required>
                </div>
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"object\"><i class=\"fas fa-th-list form__element-icon\"></i> Objet
                        :</label>
                    <select class=\"form__element-input\" name=\"object\" id=\"object\" required>
                        <option value=\"\">Veuillez sélectionner un objet</option>
                        <option value=\"Prise de rendez-vous\">Prise de rendez-vous</option>
                        <option value=\"Annuler un rendez-vous\">Annuler un rendez-vous</option>
                        <option value=\"Demande de renseignement\">Demande de renseignement</option>
                    </select>
                </div>
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"message\"><i class=\"fas fa-pen form__element-icon\"></i>
                        Message</label>
                    <textarea class=\"form__message\" name=\"message\" id=\"message\" cols=\"30\" rows=\"10\" wrap=\"hard\"
                        placeholder=\"votre message\"></textarea>
                </div>

                <div class=\"submit__container\">
                    <div class=\"form__element form__element-submit\">
                        <input class=\"form__submit\" type=\"submit\" value=\"Envoyer\">
                    </div>
                </div>

            </form>
        -->    
        </div>

    </article>

{% endblock %}
", "pages/contact.html.twig", "C:\\Users\\dague\\Desktop\\backend\\NaturopathieBack\\templates\\pages\\contact.html.twig");
    }
}
