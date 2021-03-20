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

/* email/contact.html.twig */
class __TwigTemplate_e64228fca52b1cc220c437d6440e3e184bd7f0b6547cd797843fcf0f6c62f275 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/contact.html.twig"));

        // line 1
        echo "<html lang =\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
            integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
        <script src=\"https://kit.fontawesome.com/41b8da89ad.js\" crossorigin=\"anonymous\"></script>
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
        <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap\" rel=\"stylesheet\">
    </head>
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <body>
            <div class=\"col-sm-10 col-md-8 col-lg-4 m-auto\">
                <div class=\"header__container\">
                    <header class=\"header m-auto\">
                        <div class=\"logo__container\">
                            <img class=\"logo\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 17, $this->source); })()), "image", [0 => "@images/logo.png"], "method", false, false, false, 17), "html", null, true);
        echo "\" alt=\"header email\">
                        </div>
                    </header>
                </div>
                <div class=\"text-center\">
                    <h1 class=\"display3 mb-5\"> Contact pour: ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["objet"]) || array_key_exists("objet", $context) ? $context["objet"] : (function () { throw new RuntimeError('Variable "objet" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " </h1>
                </div>
                <p class =\"mb-4\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "</p>
                <p> Mes informations :</p>
                <p>Nom Prénom:  <span class=\"fw-bold\">";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "</span> </p>
                <p>Téléphone:  <span class=\"fw-bold\">";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "</p></span>
                <p>Email:  <span class=\"fw-bold\">";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["mail"]) || array_key_exists("mail", $context) ? $context["mail"] : (function () { throw new RuntimeError('Variable "mail" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "</p></span>
            </div>
        </body>
    ";
        $___internal_10513b04b1856c759fb05198c8d103c3b51eddac2f9ab931d868f610a6de2833_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        echo Twig\Extra\CssInliner\twig_inline_css($___internal_10513b04b1856c759fb05198c8d103c3b51eddac2f9ab931d868f610a6de2833_, twig_source($this->env, "@styles/app.css"));
        // line 32
        echo "</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "email/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 32,  97 => 11,  90 => 28,  86 => 27,  82 => 26,  77 => 24,  72 => 22,  64 => 17,  57 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang =\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
            integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
        <script src=\"https://kit.fontawesome.com/41b8da89ad.js\" crossorigin=\"anonymous\"></script>
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
        <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap\" rel=\"stylesheet\">
    </head>
    {% apply inline_css(source('@styles/app.css')) %}
        <body>
            <div class=\"col-sm-10 col-md-8 col-lg-4 m-auto\">
                <div class=\"header__container\">
                    <header class=\"header m-auto\">
                        <div class=\"logo__container\">
                            <img class=\"logo\" src=\"{{ email.image('@images/logo.png') }}\" alt=\"header email\">
                        </div>
                    </header>
                </div>
                <div class=\"text-center\">
                    <h1 class=\"display3 mb-5\"> Contact pour: {{ objet }} </h1>
                </div>
                <p class =\"mb-4\">{{ message }}</p>
                <p> Mes informations :</p>
                <p>Nom Prénom:  <span class=\"fw-bold\">{{ name }}</span> </p>
                <p>Téléphone:  <span class=\"fw-bold\">{{ phone }}</p></span>
                <p>Email:  <span class=\"fw-bold\">{{ mail }}</p></span>
            </div>
        </body>
    {% endapply %}
</html>", "email/contact.html.twig", "C:\\Users\\fagay\\Desktop\\naturo\\NaturoBack\\templates\\email\\contact.html.twig");
    }
}
