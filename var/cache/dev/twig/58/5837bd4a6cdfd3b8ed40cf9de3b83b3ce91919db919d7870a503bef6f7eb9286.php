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
class __TwigTemplate_80ebc20a08ecd8f008a08529e602bf1da6f12e437a3281f6dc7a5e569f346b51 extends Template
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
        <div class=\"contact-rules\">
            Pour les personnes qui souhaitent prendre rendez-vous ou qui aimerais avoir plus de renseignement, je vous invite à renseigner le formulaire de contact afin de me contacter et je vous rappelerais pour repondre à toutes vos questions.
        </div>

            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"mailer_form_name\"><i class=\"fas fa-user-alt form__element-icon\"></i> Nom
                        Prénom :</label>
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), 'row', ["attr" => ["class" => "form__element-input"]]);
        echo "
                </div>
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"mailer_form_email\"><i class=\"fas fa-envelope form__element-icon\"></i> Email
                        :</label>
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), 'row', ["attr" => ["class" => "form__element-input"]]);
        echo "
                </div>
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"mailer_form_phone\"><i class=\"fas fa-phone-alt form__element-icon\"></i>
                        Téléphone :</label>
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "phone", [], "any", false, false, false, 30), 'row', ["attr" => ["class" => "form__element-input"]]);
        echo "
                </div>
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"mailer_form_objet\"><i class=\"fas fa-th-list form__element-icon\"></i> Objet
                        :</label>
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "objet", [], "any", false, false, false, 35), 'row', ["attr" => ["class" => "form__element-input"]]);
        echo "
                </div>
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"mailer_form_message\"><i class=\"fas fa-pen form__element-icon\"></i>
                        Message</label>
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "message", [], "any", false, false, false, 40), 'row', ["attr" => ["class" => "form__message", "cols" => "58", "rows" => "10", "wrap" => "hard"]]);
        echo "
                </div>

                <div class=\"submit__container\">
                    <div class=\"form__element form__element-submit\">
                        <input class=\"form__submit\" type=\"submit\" value=\"Envoyer\">
                    </div>
                </div>
            ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end');
        echo "

            <iframe class=\"maps\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2640.7950229177227!2d3.0069886158953425!3d48.55632002988139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ef4fab8f5de473%3A0x86aaf652157eadc4!2s15%20Rue%20de%20la%20Lib%C3%A9ration%2C%2077370%20Nangis!5e0!3m2!1sfr!2sfr!4v1615207002437!5m2!1sfr!2sfr\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>

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
        return array (  150 => 48,  139 => 40,  131 => 35,  123 => 30,  115 => 25,  107 => 20,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
        <div class=\"contact-rules\">
            Pour les personnes qui souhaitent prendre rendez-vous ou qui aimerais avoir plus de renseignement, je vous invite à renseigner le formulaire de contact afin de me contacter et je vous rappelerais pour repondre à toutes vos questions.
        </div>

            {{ form_start(form) }}
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"mailer_form_name\"><i class=\"fas fa-user-alt form__element-icon\"></i> Nom
                        Prénom :</label>
                    {{ form_row(form.name, { 'attr': { 'class': 'form__element-input' } }) }}
                </div>
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"mailer_form_email\"><i class=\"fas fa-envelope form__element-icon\"></i> Email
                        :</label>
                    {{ form_row(form.email, { 'attr': { 'class': 'form__element-input' } }) }}
                </div>
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"mailer_form_phone\"><i class=\"fas fa-phone-alt form__element-icon\"></i>
                        Téléphone :</label>
                    {{ form_row(form.phone, { 'attr': { 'class': 'form__element-input' } }) }}
                </div>
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"mailer_form_objet\"><i class=\"fas fa-th-list form__element-icon\"></i> Objet
                        :</label>
                    {{ form_row(form.objet, { 'attr': { 'class': 'form__element-input' } }) }}
                </div>
                <div class=\"form__element\">
                    <label class=\"form__label\" for=\"mailer_form_message\"><i class=\"fas fa-pen form__element-icon\"></i>
                        Message</label>
                    {{ form_row(form.message, { 'attr': { 'class': 'form__message', 'cols' : '58', 'rows' : '10', 'wrap' : \"hard\" } }) }}
                </div>

                <div class=\"submit__container\">
                    <div class=\"form__element form__element-submit\">
                        <input class=\"form__submit\" type=\"submit\" value=\"Envoyer\">
                    </div>
                </div>
            {{ form_end(form) }}

            <iframe class=\"maps\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2640.7950229177227!2d3.0069886158953425!3d48.55632002988139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ef4fab8f5de473%3A0x86aaf652157eadc4!2s15%20Rue%20de%20la%20Lib%C3%A9ration%2C%2077370%20Nangis!5e0!3m2!1sfr!2sfr!4v1615207002437!5m2!1sfr!2sfr\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>

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
", "pages/contact.html.twig", "D:\\Work\\NaturoBack\\templates\\pages\\contact.html.twig");
    }
}
