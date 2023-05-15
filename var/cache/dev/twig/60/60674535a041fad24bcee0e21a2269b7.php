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

/* user/edit.html.twig */
class __TwigTemplate_bd37f0164763b97e40216a5ae7a60049 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
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
        echo "Editar Usuarios
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
<li class=\"breadcrumb-item\"><a>Usuarios</a></li>
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

        // line 13
        echo "<div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
\t\t<a class=\"mr-4 btn btn-outline-primary\" style=\"float: right\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\">Volver </a>
\t</div>


    
<div class=\"card\">
    <div class=\"card-body d-flex align-items-center justify-content-between\">
        <h5 class=\"mb-0\">Ver y Editar Perfil</h5>
        <button type=\"button\" class=\"btn btn-icon btn-outline-warning\" data-toggle=\"collapse\"
            data-target=\".pro-dont-edit\" aria-expanded=\"true\" aria-controls=\"pro-dont-edit-1 pro-dont-edit-2\" id=\"btnEdit\">
            <i class=\"feather icon-edit-2\"></i>
        </button>
    </div>
    ";
        // line 27
        $context["rol"] = ["ROLE_SUPER_ADMIN" => "Super Administrador", "ROLE_ADMIN" => "Administrador", "ROLE_USER" => "Rol de Usuario Deprecado", "ROLE_USER_EXTERNAL" => "Rol de Usuario Externo"];
        // line 33
        echo "    <div class=\"card-body border-top pro-dont-edit collapse show\" id=\"pro-dont-edit-1\">
        <div class=\"form-group row\">
            <label class=\"col-sm-3 col-form-label font-weight-bolder\">Id</label>
            <div class=\"col-sm-9\">
                ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37), "html", null, true);
        echo "
            </div>
            
        </div>
        <div class=\"form-group row\">
            <label class=\"col-sm-3 col-form-label font-weight-bolder\">Username</label>
            <div class=\"col-sm-9\">
                ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "username", [], "any", false, false, false, 44), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"form-group row\">
            <label class=\"col-sm-3 col-form-label font-weight-bolder\">Roles</label>
            <div class=\"col-sm-9\">
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "roles", [], "any", false, false, false, 50));
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
            // line 51
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rol"]) || array_key_exists("rol", $context) ? $context["rol"] : (function () { throw new RuntimeError('Variable "rol" does not exist.', 51, $this->source); })()), $context["rolname"], [], "array", false, false, false, 51), "html", null, true);
            echo " 
                ";
            // line 52
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 52)) {
                // line 53
                echo "                    |
                ";
            }
            // line 55
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
        // line 57
        echo "            </div>
        </div>
        <div class=\"form-group row\">
            <label class=\"col-sm-3 col-form-label font-weight-bolder\">Persona</label>
            <div class=\"col-sm-9\">
                ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "persona", [], "any", false, false, false, 62), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"form-group row\">
            <label class=\"col-sm-3 col-form-label font-weight-bolder\">Creado En</label>
            <div class=\"col-sm-9\">
                ";
        // line 68
        ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 68, $this->source); })()), "createdAt", [], "any", false, false, false, 68)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 68, $this->source); })()), "createdAt", [], "any", false, false, false, 68), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "
            </div>
        </div>
    </div>

    ";
        // line 74
        echo "
    <div class=\"card-body border-top pro-dont-edit collapse\" id=\"pro-dont-edit-2\">
        ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'form_start');
        echo "
            <div class=\"form-group row\">
                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "username", [], "any", false, false, false, 78), 'label', ["label" => "Username"]);
        echo "
                <div class=\"col-sm-9\">
                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "username", [], "any", false, false, false, 80), 'widget');
        echo "
                </div>
            </div>
            <div class=\"form-group row\">
                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "roles", [], "any", false, false, false, 84), 'label', ["label" => "Roles"]);
        echo "
                <div class=\"col-sm-9\">
                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "roles", [], "any", false, false, false, 86), 'widget');
        echo "
                </div>
            </div>
            <div class=\"form-group row\">
                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "persona", [], "any", false, false, false, 90), 'label', ["label" => "Persona"]);
        echo "
                <div class=\"col-sm-9\">
                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "persona", [], "any", false, false, false, 92), 'widget');
        echo "
                </div>
            </div>
            <div class=\"form-group row\">
                ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "password", [], "any", false, false, false, 96), 'label', ["label" => "Contraseña"]);
        echo "
                <div class=\"col-sm-9\">
                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "password", [], "any", false, false, false, 98), 'widget');
        echo "
                </div>
            </div>
             
            <div class=\"form-group row\">
                <label class=\"col-sm-3 col-form-label\"></label>
                <div class=\"col-sm-9\">
                    <button class=\"btn btn-outline-primary\">";
        // line 105
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 105, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>
                </div>
            </div>
        ";
        // line 108
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'form_end');
        echo "
        ";
        // line 109
        echo twig_include($this->env, $context, "user/_delete_form.html.twig");
        echo "
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 115
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 116
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

    // line 126
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 127
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$('.select2').select2();
            ";
        // line 132
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "vars", [], "any", false, false, false, 132), "valid", [], "any", false, false, false, 132)) {
            // line 133
            echo "                \$('#btnEdit').click();
            ";
        }
        // line 135
        echo "        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 135,  365 => 133,  363 => 132,  354 => 127,  344 => 126,  325 => 116,  315 => 115,  300 => 109,  296 => 108,  290 => 105,  280 => 98,  275 => 96,  268 => 92,  263 => 90,  256 => 86,  251 => 84,  244 => 80,  239 => 78,  234 => 76,  230 => 74,  222 => 68,  213 => 62,  206 => 57,  191 => 55,  187 => 53,  185 => 52,  180 => 51,  163 => 50,  154 => 44,  144 => 37,  138 => 33,  136 => 27,  120 => 14,  117 => 13,  107 => 12,  93 => 8,  83 => 7,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block headerTitle %}
Editar Usuarios
{% endblock headerTitle %}

{% block headerBreadcrumb %}
<li class=\"breadcrumb-item\"><a href='{{ path('index') }}'><i class=\"feather icon-home\"></i></a></li>
<li class=\"breadcrumb-item\"><a>Usuarios</a></li>
{% endblock headerBreadcrumb %}

{% block body %}
<div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
\t\t<a class=\"mr-4 btn btn-outline-primary\" style=\"float: right\" href=\"{{ path('user_index') }}\">Volver </a>
\t</div>


    
<div class=\"card\">
    <div class=\"card-body d-flex align-items-center justify-content-between\">
        <h5 class=\"mb-0\">Ver y Editar Perfil</h5>
        <button type=\"button\" class=\"btn btn-icon btn-outline-warning\" data-toggle=\"collapse\"
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
            <label class=\"col-sm-3 col-form-label font-weight-bolder\">Persona</label>
            <div class=\"col-sm-9\">
                {{ user.persona }}
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
                {{ form_label(form.username, 'Username') }}
                <div class=\"col-sm-9\">
                    {{ form_widget(form.username) }}
                </div>
            </div>
            <div class=\"form-group row\">
                {{ form_label(form.roles, 'Roles') }}
                <div class=\"col-sm-9\">
                    {{ form_widget(form.roles) }}
                </div>
            </div>
            <div class=\"form-group row\">
                {{ form_label(form.persona, 'Persona') }}
                <div class=\"col-sm-9\">
                    {{ form_widget(form.persona) }}
                </div>
            </div>
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
        {{ include('user/_delete_form.html.twig') }}
    </div>
</div>

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
{% endblock %}", "user/edit.html.twig", "/home/lorena/LRJ/lrj/templates/user/edit.html.twig");
    }
}
