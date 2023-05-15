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

/* user/profile.html.twig */
class __TwigTemplate_cfc109ed3accf9b124d06732a897bc92 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'headerTitle' => [$this, 'block_headerTitle'],
            'headerBreadcrumb' => [$this, 'block_headerBreadcrumb'],
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerTitle"));

        // line 4
        echo "Mi perfil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_headerBreadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerBreadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerBreadcrumb"));

        // line 8
        echo "<li class=\"breadcrumb-item\"><a href='";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "'><i class=\"feather icon-home\"></i></a></li>
<li class=\"breadcrumb-item\"><a>Mi perfil</a></li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "<div class=\"card\">
    <div class=\"card-body d-flex align-items-center justify-content-between\">
        <h5 class=\"mb-0\">Ver Perfil y Editar Contraseña</h5>
        <button type=\"button\" class=\"btn btn-icon btn-warning\" data-toggle=\"collapse\"
            data-target=\".pro-dont-edit\" aria-expanded=\"true\" aria-controls=\"pro-dont-edit-1 pro-dont-edit-2\" id=\"btnEdit\">
            <i class=\"feather icon-edit-2\"></i>
        </button>
    </div>
    ";
        // line 22
        $context["rol"] = ["ROLE_SUPER_ADMIN" => "Super Administrador", "ROLE_ADMIN" => "Administrador", "ROLE_USER" => "Rol de Usuario Deprecado", "ROLE_USER_EXTERNAL" => "Rol de Usuario Externo"];
        // line 28
        echo "    <div class=\"card-body border-top pro-dont-edit collapse show\" id=\"pro-dont-edit-1\">
        <div class=\"form-group row\">
            <label class=\"col-sm-3 col-form-label font-weight-bolder\">Id</label>
            <div class=\"col-sm-9\">
                ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32), "html", null, true);
        echo "
            </div>
            
        </div>
        <div class=\"form-group row\">
            <label class=\"col-sm-3 col-form-label font-weight-bolder\">Username</label>
            <div class=\"col-sm-9\">
                ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "username", [], "any", false, false, false, 39), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"form-group row\">
            <label class=\"col-sm-3 col-form-label font-weight-bolder\">Roles</label>
            <div class=\"col-sm-9\">
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "roles", [], "any", false, false, false, 45));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["rolname"]) {
            // line 46
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rol"]) || array_key_exists("rol", $context) ? $context["rol"] : (function () { throw new RuntimeError('Variable "rol" does not exist.', 46, $this->source); })()), $context["rolname"], [], "array", false, false, false, 46), "html", null, true);
            echo " 
                ";
            // line 47
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 47)) {
                // line 48
                echo "                    |
                ";
            }
            // line 50
            echo "                
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rolname'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </div>
        </div>
        <div class=\"form-group row\">
            <label class=\"col-sm-3 col-form-label font-weight-bolder\">Creado En</label>
            <div class=\"col-sm-9\">
                ";
        // line 57
        ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "createdAt", [], "any", false, false, false, 57)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "createdAt", [], "any", false, false, false, 57), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "
            </div>
        </div>
    </div>

    ";
        // line 63
        echo "
    <div class=\"card-body border-top pro-dont-edit collapse\" id=\"pro-dont-edit-2\">
        ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_start');
        echo "
            <div class=\"form-group row\">
                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "password", [], "any", false, false, false, 67), 'label', ["label" => "Contraseña"]);
        echo "
                <div class=\"col-sm-9\">
                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "password", [], "any", false, false, false, 69), 'widget');
        echo "
                </div>
            </div>
            <div class=\"form-group row\">
                <label class=\"col-sm-3 col-form-label\"></label>
                <div class=\"col-sm-9\">
                    <button class=\"btn btn-outline-primary\">";
        // line 75
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 75, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>
                </div>
            </div>
        ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'form_end');
        echo "
    </div>
</div>
\t
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 84
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 85
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
    <style >
        span.select2-container{
            width:100%!important;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$('.select2').select2();
            ";
        // line 101
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "vars", [], "any", false, false, false, 101), "valid", [], "any", false, false, false, 101)) {
            // line 102
            echo "                \$('#btnEdit').click();
            ";
        }
        // line 104
        echo "        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 104,  306 => 102,  304 => 101,  295 => 96,  285 => 95,  266 => 85,  256 => 84,  241 => 78,  235 => 75,  226 => 69,  221 => 67,  216 => 65,  212 => 63,  204 => 57,  197 => 52,  182 => 50,  178 => 48,  176 => 47,  171 => 46,  154 => 45,  145 => 39,  135 => 32,  129 => 28,  127 => 22,  117 => 14,  107 => 12,  93 => 8,  83 => 7,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block headerTitle %}
Mi perfil
{% endblock headerTitle %}

{% block headerBreadcrumb %}
<li class=\"breadcrumb-item\"><a href='{{ path('index') }}'><i class=\"feather icon-home\"></i></a></li>
<li class=\"breadcrumb-item\"><a>Mi perfil</a></li>
{% endblock headerBreadcrumb %}

{% block body %}
{# Esto es el show #}
<div class=\"card\">
    <div class=\"card-body d-flex align-items-center justify-content-between\">
        <h5 class=\"mb-0\">Ver Perfil y Editar Contraseña</h5>
        <button type=\"button\" class=\"btn btn-icon btn-warning\" data-toggle=\"collapse\"
            data-target=\".pro-dont-edit\" aria-expanded=\"true\" aria-controls=\"pro-dont-edit-1 pro-dont-edit-2\" id=\"btnEdit\">
            <i class=\"feather icon-edit-2\"></i>
        </button>
    </div>
    {% set rol = {    
            \"ROLE_SUPER_ADMIN\": \"Super Administrador\",
            \"ROLE_ADMIN\" : \"Administrador\",
            \"ROLE_USER\" : \"Rol de Usuario Deprecado\",
            \"ROLE_USER_EXTERNAL\" : \"Rol de Usuario Externo\",
    } %}
    <div class=\"card-body border-top pro-dont-edit collapse show\" id=\"pro-dont-edit-1\">
        <div class=\"form-group row\">
            <label class=\"col-sm-3 col-form-label font-weight-bolder\">Id</label>
            <div class=\"col-sm-9\">
                {{ user.id }}
            </div>
            
        </div>
        <div class=\"form-group row\">
            <label class=\"col-sm-3 col-form-label font-weight-bolder\">Username</label>
            <div class=\"col-sm-9\">
                {{ user.username }}
            </div>
        </div>
        <div class=\"form-group row\">
            <label class=\"col-sm-3 col-form-label font-weight-bolder\">Roles</label>
            <div class=\"col-sm-9\">
                {% for rolname in  user.roles %}
                {{ rol[rolname] }} 
                {% if not loop.last %}
                    |
                {% endif %}
                
                {% endfor %}
            </div>
        </div>
        <div class=\"form-group row\">
            <label class=\"col-sm-3 col-form-label font-weight-bolder\">Creado En</label>
            <div class=\"col-sm-9\">
                {{ user.createdAt ? user.createdAt|date('d-m-Y') : '' }}
            </div>
        </div>
    </div>

    {# Esto es el edit #}

    <div class=\"card-body border-top pro-dont-edit collapse\" id=\"pro-dont-edit-2\">
        {{ form_start(form) }}
            <div class=\"form-group row\">
                {{ form_label(form.password, 'Contraseña') }}
                <div class=\"col-sm-9\">
                    {{ form_widget(form.password) }}
                </div>
            </div>
            <div class=\"form-group row\">
                <label class=\"col-sm-3 col-form-label\"></label>
                <div class=\"col-sm-9\">
                    <button class=\"btn btn-outline-primary\">{{ button_label|default('Guardar') }}</button>
                </div>
            </div>
        {{ form_end(form) }}
    </div>
</div>
\t
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
    <style >
        span.select2-container{
            width:100%!important;
        }
    </style>
{% endblock %}


{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$('.select2').select2();
            {% if not form.vars.valid %}
                \$('#btnEdit').click();
            {% endif %}
        });
    </script>
{% endblock %}", "user/profile.html.twig", "/home/lorena/LRJ/lrj/templates/user/profile.html.twig");
    }
}
