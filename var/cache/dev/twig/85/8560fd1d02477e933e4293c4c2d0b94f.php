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

/* persona/edit.html.twig */
class __TwigTemplate_eceb2c8e22c91b77d4fadac6e5fd73f5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "persona/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "persona/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "persona/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
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
        echo "\t<li class=\"breadcrumb-item\">
\t\t<a href='";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "'>
\t\t\t<i class=\"feather icon-home\"></i>
\t\t</a>
\t</li>
\t<li class=\"breadcrumb-item\">
\t\t<a>Personas
\t\t</a>
\t</li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "\t<div class=\"d-grid gap-1 d-md-flex justify-content-md-end\">
\t\t<a class=\"mb-2 btn btn-outline-primary\" style=\"float: right\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_persona_index");
        echo "\">Volver</a>
\t</div>


\t<div class=\"card\">
\t\t<div class=\"card-body d-flex align-items-center justify-content-between\">
\t\t\t<h5 class=\"mb-0\">Ver y Editar Persona</h5>
\t\t\t<button type=\"button\" class=\"btn btn-icon btn-outline-warning\" data-toggle=\"collapse\" data-target=\".pro-dont-edit\" aria-expanded=\"true\" aria-controls=\"pro-dont-edit-1 pro-dont-edit-2\" id=\"btnEdit\">
\t\t\t\t<i class=\"feather icon-edit-2\"></i>
\t\t\t</button>
\t\t</div>
\t\t<div class=\"card-body border-top pro-dont-edit collapse show\" id=\"pro-dont-edit-1\">
\t\t\t<div class=\"form-group row\">
\t\t\t\t<label class=\"col-sm-3 col-form-label font-weight-bolder\">Id</label>
\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37), "html", null, true);
        echo "
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"form-group row\">
\t\t\t\t<label class=\"col-sm-3 col-form-label font-weight-bolder\">Nombre</label>
\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 44, $this->source); })()), "nombre", [], "any", false, false, false, 44), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group row\">
\t\t\t\t<label class=\"col-sm-3 col-form-label font-weight-bolder\">Fecha de Creación</label>
\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t";
        // line 51
        ((twig_get_attribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 51, $this->source); })()), "createdAt", [], "any", false, false, false, 51)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 51, $this->source); })()), "createdAt", [], "any", false, false, false, 51), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 57
        echo "
\t\t<div class=\"card-body border-top pro-dont-edit collapse\" id=\"pro-dont-edit-2\">

\t\t\t";
        // line 60
        echo twig_include($this->env, $context, "persona/_form.html.twig", ["button_label" => "Actualizar"]);
        echo "

\t\t\t<a style=\"float: right\">";
        // line 62
        echo twig_include($this->env, $context, "persona/_delete_form.html.twig", ["button_label" => "Eliminar"]);
        echo "</a>

\t\t</div>
\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 70
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 71
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\"/>
\t<style>
\t\tspan.select2-container {
\t\t\twidth: 100% !important;
\t\t}
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
\t<script>
\t\t\$(document).ready(function () {
\$('.select2').select2();";
        // line 86
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "vars", [], "any", false, false, false, 86), "valid", [], "any", false, false, false, 86)) {
            // line 87
            echo "\$('#btnEdit').click();";
        }
        // line 88
        echo "});
\t</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "persona/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 88,  251 => 87,  249 => 86,  241 => 82,  231 => 81,  212 => 71,  202 => 70,  186 => 62,  181 => 60,  176 => 57,  168 => 51,  158 => 44,  148 => 37,  130 => 22,  127 => 21,  117 => 20,  98 => 9,  95 => 8,  85 => 7,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{parent()}}
{% endblock %}

{% block headerBreadcrumb %}
\t<li class=\"breadcrumb-item\">
\t\t<a href='{{ path('index') }}'>
\t\t\t<i class=\"feather icon-home\"></i>
\t\t</a>
\t</li>
\t<li class=\"breadcrumb-item\">
\t\t<a>Personas
\t\t</a>
\t</li>
{% endblock headerBreadcrumb %}


{% block body %}
\t<div class=\"d-grid gap-1 d-md-flex justify-content-md-end\">
\t\t<a class=\"mb-2 btn btn-outline-primary\" style=\"float: right\" href=\"{{ path('app_persona_index') }}\">Volver</a>
\t</div>


\t<div class=\"card\">
\t\t<div class=\"card-body d-flex align-items-center justify-content-between\">
\t\t\t<h5 class=\"mb-0\">Ver y Editar Persona</h5>
\t\t\t<button type=\"button\" class=\"btn btn-icon btn-outline-warning\" data-toggle=\"collapse\" data-target=\".pro-dont-edit\" aria-expanded=\"true\" aria-controls=\"pro-dont-edit-1 pro-dont-edit-2\" id=\"btnEdit\">
\t\t\t\t<i class=\"feather icon-edit-2\"></i>
\t\t\t</button>
\t\t</div>
\t\t<div class=\"card-body border-top pro-dont-edit collapse show\" id=\"pro-dont-edit-1\">
\t\t\t<div class=\"form-group row\">
\t\t\t\t<label class=\"col-sm-3 col-form-label font-weight-bolder\">Id</label>
\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t{{ persona.id }}
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"form-group row\">
\t\t\t\t<label class=\"col-sm-3 col-form-label font-weight-bolder\">Nombre</label>
\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t{{ persona.nombre }}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group row\">
\t\t\t\t<label class=\"col-sm-3 col-form-label font-weight-bolder\">Fecha de Creación</label>
\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t{{persona.createdAt ? persona.createdAt|date('d-m-Y') : ''}}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t{# Esto es el edit #}

\t\t<div class=\"card-body border-top pro-dont-edit collapse\" id=\"pro-dont-edit-2\">

\t\t\t{{ include('persona/_form.html.twig', {'button_label': 'Actualizar'}) }}

\t\t\t<a style=\"float: right\">{{ include('persona/_delete_form.html.twig', {'button_label': 'Eliminar'}) }}</a>

\t\t</div>
\t</div>

{% endblock %}


{% block stylesheets %}
\t{{ parent() }}
\t<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\"/>
\t<style>
\t\tspan.select2-container {
\t\t\twidth: 100% !important;
\t\t}
\t</style>
{% endblock %}


{% block javascripts %}
\t{{ parent() }}
\t<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
\t<script>
\t\t\$(document).ready(function () {
\$('.select2').select2();{% if not form.vars.valid %}
\$('#btnEdit').click();{% endif %}
});
\t</script>
{% endblock %}
", "persona/edit.html.twig", "/home/lorena/LRJ/lrj/templates/persona/edit.html.twig");
    }
}
