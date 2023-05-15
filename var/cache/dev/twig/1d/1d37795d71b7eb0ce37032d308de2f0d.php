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

/* login/index.html.twig */
class __TwigTemplate_f2d86c66ece3dcf6cb6c4ce8e328cdb2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent = $this->loadTemplate("base-login.html.twig", "login/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"auth-wrapper\">
    <div class=\"auth-content\">
        <div class=\"card\">
            <div class=\"row align-items-center text-center\">
                <div class=\"col-md-12\">
                    <div class=\"card-body\">
                        <form class=\"md-float-material\" action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
                            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/lrj1.png"), "html", null, true);
        echo "\" class=\"img-fluid mb-4\">
                            ";
        // line 14
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "                            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })()), "messageKey", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })()), "messageData", [], "any", false, false, false, 15), "security"), "html", null, true);
            echo "
                            </div>
                            ";
        }
        // line 18
        echo "                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"feather icon-user-x\"></i></span>
                                </div>
                                <input type=\"string\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\" name=\"_username\" id=\"inputDni\"
                                    class=\"form-control\" placeholder=\"Nombre de Usuario\" required>
                            </div>
                            <div class=\"input-group mb-4\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"feather icon-lock\"></i></span>
                                </div>
                                <input type=\"password\" name=\"_password\" id=\"inputPassword\" class=\"form-control\"
                                    placeholder=\"Contraseña\" required>
                            </div>
                            <br>
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                            ";
        // line 35
        echo "                            <button class=\"btn btn-primary btn-block mb-4\">Entrar</button>
                            <p class=\"mb-2\">Salud & Estetica</p>
                            <p class=\"mb-2\"><b>La Receta Justa</b></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 35,  114 => 33,  100 => 22,  94 => 18,  87 => 15,  85 => 14,  81 => 13,  77 => 12,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-login.html.twig' %}


{% block body %}

<div class=\"auth-wrapper\">
    <div class=\"auth-content\">
        <div class=\"card\">
            <div class=\"row align-items-center text-center\">
                <div class=\"col-md-12\">
                    <div class=\"card-body\">
                        <form class=\"md-float-material\" action=\"{{ path('login') }}\" method=\"post\">
                            <img src=\"{{ asset('images/lrj1.png') }}\" class=\"img-fluid mb-4\">
                            {% if error %}
                            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}
                            </div>
                            {% endif %}
                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"feather icon-user-x\"></i></span>
                                </div>
                                <input type=\"string\" value=\"{{ last_username }}\" name=\"_username\" id=\"inputDni\"
                                    class=\"form-control\" placeholder=\"Nombre de Usuario\" required>
                            </div>
                            <div class=\"input-group mb-4\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"feather icon-lock\"></i></span>
                                </div>
                                <input type=\"password\" name=\"_password\" id=\"inputPassword\" class=\"form-control\"
                                    placeholder=\"Contraseña\" required>
                            </div>
                            <br>
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                            {# <br><a href=\"{{ path('restore_passwd') }}\">Olvidé mi contraseña</a><br> #}
                            <button class=\"btn btn-primary btn-block mb-4\">Entrar</button>
                            <p class=\"mb-2\">Salud & Estetica</p>
                            <p class=\"mb-2\"><b>La Receta Justa</b></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "login/index.html.twig", "/home/lorena/LRJ/lrj/templates/login/index.html.twig");
    }
}
