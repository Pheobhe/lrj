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

/* pago/edit.html.twig */
class __TwigTemplate_67164937afde4a7d6aa30c9f13861fbf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pago/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pago/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pago/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_headerBreadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerBreadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerBreadcrumb"));

        // line 7
        echo "\t<li class=\"breadcrumb-item\">
\t\t<a href='";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "'>
\t\t\t<i class=\"feather icon-home\"></i>
\t\t</a>
\t</li>
\t<li class=\"breadcrumb-item\">
\t\t<a>Pagos</a>
\t</li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
\t<div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
\t\t<a class=\"mb-4 btn btn-outline-primary\" style=\"float: right\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lugar_index");
        echo "\">Volver
\t\t</a>
\t</div>

\t<div class=\"card\">

\t\t<div class=\"card-body d-flex align-items-center justify-content-between\">
\t\t\t<h5 class=\"mb-0\">Ver y Editar Pago</h5>
\t\t\t<button type=\"button\" class=\"btn btn-icon btn-outline-warning\" data-toggle=\"collapse\" data-target=\".pro-dont-edit\" aria-expanded=\"true\" aria-controls=\"pro-dont-edit-1 pro-dont-edit-2\" id=\"btnEdit\">
\t\t\t\t<i class=\"feather icon-edit-2\"></i>
\t\t\t</button>
\t\t</div>
\t\t<div class=\"card-body border-top pro-dont-edit collapse show\" id=\"pro-dont-edit-1\">
\t\t\t<div class=\"form-group row\">
\t\t\t\t<label class=\"col-sm-3 col-form-label font-weight-bolder\">Id</label>
\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36), "html", null, true);
        echo "
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"form-group row\">
\t\t\t\t<label class=\"col-sm-3 col-form-label font-weight-bolder\">Nombre</label>
\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 43, $this->source); })()), "nombre", [], "any", false, false, false, 43), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group row\">
\t\t\t\t<label class=\"col-sm-3 col-form-label font-weight-bolder\">Fecha de Creación</label>
\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t";
        // line 50
        ((twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 50, $this->source); })()), "createdAt", [], "any", false, false, false, 50)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 50, $this->source); })()), "createdAt", [], "any", false, false, false, 50), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"card-body border-top pro-dont-edit collapse\" id=\"pro-dont-edit-2\">
\t\t\t";
        // line 56
        echo twig_include($this->env, $context, "pago/_form.html.twig", ["button_label" => "Actualizar"]);
        echo "
\t\t\t<a style=\"float: right\">";
        // line 57
        echo twig_include($this->env, $context, "pago/_delete_form.html.twig", ["button_label" => "Eliminar"]);
        echo "</a>

\t\t</div>
\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 64
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 65
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

    // line 75
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
\t<script>
\t\t\$(document).ready(function () {
\$('.select2').select2();";
        // line 80
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "vars", [], "any", false, false, false, 80), "valid", [], "any", false, false, false, 80)) {
            echo "\$('#btnEdit').click();";
        }
        // line 81
        echo "});
\t</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pago/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 81,  245 => 80,  237 => 76,  227 => 75,  208 => 65,  198 => 64,  182 => 57,  178 => 56,  169 => 50,  159 => 43,  149 => 36,  130 => 20,  126 => 18,  116 => 17,  98 => 8,  95 => 7,  85 => 6,  72 => 3,  62 => 2,  39 => 1,);
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
\t\t<a>Pagos</a>
\t</li>
{% endblock headerBreadcrumb %}

{% block body %}

\t<div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
\t\t<a class=\"mb-4 btn btn-outline-primary\" style=\"float: right\" href=\"{{ path('app_lugar_index') }}\">Volver
\t\t</a>
\t</div>

\t<div class=\"card\">

\t\t<div class=\"card-body d-flex align-items-center justify-content-between\">
\t\t\t<h5 class=\"mb-0\">Ver y Editar Pago</h5>
\t\t\t<button type=\"button\" class=\"btn btn-icon btn-outline-warning\" data-toggle=\"collapse\" data-target=\".pro-dont-edit\" aria-expanded=\"true\" aria-controls=\"pro-dont-edit-1 pro-dont-edit-2\" id=\"btnEdit\">
\t\t\t\t<i class=\"feather icon-edit-2\"></i>
\t\t\t</button>
\t\t</div>
\t\t<div class=\"card-body border-top pro-dont-edit collapse show\" id=\"pro-dont-edit-1\">
\t\t\t<div class=\"form-group row\">
\t\t\t\t<label class=\"col-sm-3 col-form-label font-weight-bolder\">Id</label>
\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t{{ pago.id }}
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"form-group row\">
\t\t\t\t<label class=\"col-sm-3 col-form-label font-weight-bolder\">Nombre</label>
\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t{{ pago.nombre }}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group row\">
\t\t\t\t<label class=\"col-sm-3 col-form-label font-weight-bolder\">Fecha de Creación</label>
\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t{{pago.createdAt ? pago.createdAt|date('d-m-Y') : ''}}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"card-body border-top pro-dont-edit collapse\" id=\"pro-dont-edit-2\">
\t\t\t{{ include('pago/_form.html.twig', {'button_label': 'Actualizar'}) }}
\t\t\t<a style=\"float: right\">{{ include('pago/_delete_form.html.twig', {'button_label': 'Eliminar' }) }}</a>

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
\$('.select2').select2();{% if not form.vars.valid %}\$('#btnEdit').click();{% endif %}
});
\t</script>
{% endblock %}
", "pago/edit.html.twig", "/home/lorena/LRJ/lrj/templates/pago/edit.html.twig");
    }
}
