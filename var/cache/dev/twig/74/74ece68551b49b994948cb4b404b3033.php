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

/* persona/show.html.twig */
class __TwigTemplate_ff637c0622bb4b0e24c32f4b8a82329a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'headerBreadcrumb' => [$this, 'block_headerBreadcrumb'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "persona/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "persona/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "persona/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_headerBreadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerBreadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerBreadcrumb"));

        // line 4
        echo "\t<li class=\"breadcrumb-item\">
\t\t<a href='";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "'>
\t\t\t<i class=\"feather icon-home\"></i>
\t\t</a>
\t</li>
\t<li class=\"breadcrumb-item\">
\t\t<a>Personas</a>
\t</li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "\t<div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
\t\t<a class=\"mb-2 btn btn-outline-primary\" style=\"float: right\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_persona_index");
        echo "\">Volver</a>
\t</div>
\t<div class=\"card\">
\t\t<div class=\"card-body\">
\t\t\t<h5>Ver Persona</h5>
\t\t\t<br/>
\t\t\t<table class=\"table\">
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Identificador</th>
\t\t\t\t\t\t<td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 26, $this->source); })()), "id_per", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t\t<td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 30, $this->source); })()), "nombre", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Creación</th>
\t\t\t\t\t\t<td>";
        // line 34
        ((twig_get_attribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 34, $this->source); })()), "createdAt", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 34, $this->source); })()), "createdAt", [], "any", false, false, false, 34), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<br/>
\t\t\t";
        // line 40
        echo "\t\t\t<a class=\"btn btn-outline-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_persona_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
        echo "\">Editar</a>
\t\t\t";
        // line 41
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 42
            echo "\t\t\t\t<a style=\"float: right\">
\t\t\t\t\t";
            // line 43
            echo twig_include($this->env, $context, "persona/_delete_form.html.twig");
            echo "
\t\t\t\t</a>
\t\t\t";
        }
        // line 46
        echo "
\t\t\t";
        // line 48
        echo "\t\t</div>
\t</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "persona/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 48,  154 => 46,  148 => 43,  145 => 42,  143 => 41,  138 => 40,  130 => 34,  123 => 30,  116 => 26,  103 => 16,  100 => 15,  90 => 14,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block headerBreadcrumb %}
\t<li class=\"breadcrumb-item\">
\t\t<a href='{{ path('index') }}'>
\t\t\t<i class=\"feather icon-home\"></i>
\t\t</a>
\t</li>
\t<li class=\"breadcrumb-item\">
\t\t<a>Personas</a>
\t</li>
{% endblock headerBreadcrumb %}

{% block body %}
\t<div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
\t\t<a class=\"mb-2 btn btn-outline-primary\" style=\"float: right\" href=\"{{ path('app_persona_index') }}\">Volver</a>
\t</div>
\t<div class=\"card\">
\t\t<div class=\"card-body\">
\t\t\t<h5>Ver Persona</h5>
\t\t\t<br/>
\t\t\t<table class=\"table\">
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Identificador</th>
\t\t\t\t\t\t<td>{{ persona.id_per }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t\t<td>{{ persona.nombre }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Creación</th>
\t\t\t\t\t\t<td>{{ persona.createdAt ? persona.createdAt|date('d-m-Y') : '' }}</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<br/>
\t\t\t{# {% if respuesta.user == app.user or is_granted('ROLE_SUPER_ADMIN') %} #}
\t\t\t<a class=\"btn btn-outline-primary\" href=\"{{ path('app_persona_edit', {'id': persona.id}) }}\">Editar</a>
\t\t\t{% if is_granted('ROLE_SUPER_ADMIN') %}
\t\t\t\t<a style=\"float: right\">
\t\t\t\t\t{{ include('persona/_delete_form.html.twig') }}
\t\t\t\t</a>
\t\t\t{% endif %}

\t\t\t{# {% endif %} #}
\t\t</div>
\t</div>


{% endblock %}
", "persona/show.html.twig", "/home/lorena/LRJ/lrj/templates/persona/show.html.twig");
    }
}
