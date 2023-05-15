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

/* carga/showForm.html.twig */
class __TwigTemplate_84e8dea9bed0580ee4286e30e8d153c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'headerBreadcrumb' => [$this, 'block_headerBreadcrumb'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carga/showForm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carga/showForm.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "carga/showForm.html.twig", 1);
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

    // line 8
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerTitle"));

        // line 9
        echo "\tCarga de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 9, $this->source); })()), "nombre", [], "any", false, false, false, 9), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_headerBreadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerBreadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerBreadcrumb"));

        // line 13
        echo "\t<li class=\"breadcrumb-item\">
\t\t<a href='";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "'>
\t\t\t<i class=\"feather icon-home\"></i>
\t\t</a>
\t</li>
\t<li class=\"breadcrumb-item\">
\t\t<a>Carga</a>
\t</li>
\t<li class=\"breadcrumb-item\">
\t\t<a>Pago ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 22, $this->source); })()), "nombre", [], "any", false, false, false, 22), "html", null, true);
        echo "</a>
\t</li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "
  
\t<div class=\"col-sm-12\">

\t\t<div class=\"card\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"tab\">
\t\t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actividades"]) || array_key_exists("actividades", $context) ? $context["actividades"] : (function () { throw new RuntimeError('Variable "actividades" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actividadTmp"]) {
            // line 36
            echo "  \t\t\t\t\t\t\t<a class=\"tablinks ";
            if ((twig_get_attribute($this->env, $this->source, $context["actividadTmp"], "id", [], "any", false, false, false, 36) == twig_get_attribute($this->env, $this->source, (isset($context["actividad"]) || array_key_exists("actividad", $context) ? $context["actividad"] : (function () { throw new RuntimeError('Variable "actividad" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36))) {
                echo "active";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carga_items", ["pago" => twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36), "pago" => twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36), "actividad" => twig_get_attribute($this->env, $this->source, $context["actividadTmp"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actividadTmp"], "nombre", [], "any", false, false, false, 36), "html", null, true);
            echo "</a>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividadTmp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"tab\">
\t\t\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagos"]) || array_key_exists("pagos", $context) ? $context["pagos"] : (function () { throw new RuntimeError('Variable "pagos" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lugarTmp"]) {
            // line 43
            echo "\t\t\t\t\t\t\t<a class=\"tablinks ";
            if ((twig_get_attribute($this->env, $this->source, $context["lugarTmp"], "id", [], "any", false, false, false, 43) == twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43))) {
                echo "active";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carga_items", ["pago" => twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43), "pago" => twig_get_attribute($this->env, $this->source, $context["lugarTmp"], "id", [], "any", false, false, false, 43), "actividad" => twig_get_attribute($this->env, $this->source, (isset($context["actividad"]) || array_key_exists("actividad", $context) ? $context["actividad"] : (function () { throw new RuntimeError('Variable "actividad" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lugarTmp"], "nombre", [], "any", false, false, false, 43), "html", null, true);
            echo "</a>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lugarTmp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t\t\t</div>\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"row contentResponses\">
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"vtab\">
\t\t\t\t\t\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["preguntas"]) || array_key_exists("preguntas", $context) ? $context["preguntas"] : (function () { throw new RuntimeError('Variable "preguntas" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["preguntaTmp"]) {
            // line 52
            echo "\t\t\t\t\t\t\t\t\t<a class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["preguntaTmp"], "id", [], "any", false, false, false, 52) == twig_get_attribute($this->env, $this->source, (isset($context["pregunta"]) || array_key_exists("pregunta", $context) ? $context["pregunta"] : (function () { throw new RuntimeError('Variable "pregunta" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52))) {
                echo "active";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carga_items", ["pago" => twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52), "pago" => twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52), "actividad" => twig_get_attribute($this->env, $this->source, (isset($context["actividad"]) || array_key_exists("actividad", $context) ? $context["actividad"] : (function () { throw new RuntimeError('Variable "actividad" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52), "pregunta" => twig_get_attribute($this->env, $this->source, $context["preguntaTmp"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["preguntaTmp"], "nombre", [], "any", false, false, false, 52), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['preguntaTmp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<div class=\"input-group input-group-sm vtabcontent\" >
\t
\t\t\t\t\t\t<div class=\"card-header text-center\">
\t\t\t\t\t\t";
        // line 61
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "children", [], "any", false, false, false, 61)) > 2)) {
            // line 62
            echo "\t\t\t\t\t\t\t";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form');
            echo "
\t\t\t\t\t\t";
        }
        // line 64
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div>
\t\t\t\t<a class=\"mb-4 btn btn-outline-primary\" style=\"float: right\" href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carga_index");
        echo "\">Cambiar Período</a>
\t\t\t</div>

\t\t</div>

\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "\t\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t\t<script>
\t\t
\t\t</script>

\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 86
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 87
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t";
        // line 88
        echo $this->extensions['HelloSebastian\HelloBootstrapTableBundle\Twig\BootstrapTableTwigExtension']->helloBootstrapTableCss($this->env);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "carga/showForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 88,  317 => 87,  307 => 86,  290 => 80,  280 => 79,  264 => 72,  254 => 64,  248 => 62,  246 => 61,  237 => 54,  222 => 52,  218 => 51,  210 => 45,  195 => 43,  191 => 42,  185 => 38,  170 => 36,  166 => 35,  156 => 27,  146 => 26,  133 => 22,  122 => 14,  119 => 13,  109 => 12,  96 => 9,  86 => 8,  73 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{parent()}}
{% endblock %}


{% block headerTitle %}
\tCarga de {{persona.nombre}}
{% endblock headerTitle %}

{% block headerBreadcrumb %}
\t<li class=\"breadcrumb-item\">
\t\t<a href='{{ path('index') }}'>
\t\t\t<i class=\"feather icon-home\"></i>
\t\t</a>
\t</li>
\t<li class=\"breadcrumb-item\">
\t\t<a>Carga</a>
\t</li>
\t<li class=\"breadcrumb-item\">
\t\t<a>Pago {{pago.nombre}}</a>
\t</li>
{% endblock headerBreadcrumb %}

{% block body %}

  
\t<div class=\"col-sm-12\">

\t\t<div class=\"card\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"tab\">
\t\t\t\t\t\t{% for actividadTmp in actividades %}
  \t\t\t\t\t\t\t<a class=\"tablinks {% if actividadTmp.id == actividad.id %}active{% endif %}\" href=\"{{ path('app_carga_items', {pago: pago.id, pago: pago.id, actividad:actividadTmp.id}) }}\">{{actividadTmp.nombre}}</a>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"tab\">
\t\t\t\t\t\t{% for lugarTmp in pagos %}
\t\t\t\t\t\t\t<a class=\"tablinks {% if lugarTmp.id == pago.id %}active{% endif %}\" href=\"{{ path('app_carga_items', {pago: pago.id, pago: lugarTmp.id, actividad:actividad.id}) }}\">{{lugarTmp.nombre}}</a>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"row contentResponses\">
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"vtab\">
\t\t\t\t\t\t\t\t{% for preguntaTmp in preguntas %}
\t\t\t\t\t\t\t\t\t<a class=\"{% if preguntaTmp.id == pregunta.id %}active{% endif %}\" href=\"{{ path('app_carga_items', {pago: pago.id, pago: pago.id, actividad:actividad.id, pregunta: preguntaTmp.id}) }}\">{{preguntaTmp.nombre}}</a>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<div class=\"input-group input-group-sm vtabcontent\" >
\t
\t\t\t\t\t\t<div class=\"card-header text-center\">
\t\t\t\t\t\t{% if form.children|length > 2 %}
\t\t\t\t\t\t\t{{ form(form) }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div>
\t\t\t\t<a class=\"mb-4 btn btn-outline-primary\" style=\"float: right\" href=\"{{ path('app_carga_index') }}\">Cambiar Período</a>
\t\t\t</div>

\t\t</div>

\t{% endblock %}

\t{% block javascripts %}
\t\t{{ parent() }}
\t\t<script>
\t\t
\t\t</script>

\t{% endblock %}
{% block stylesheets %}
    {{ parent() }}
\t{{ hello_bootstrap_table_css() }}
{% endblock %}

", "carga/showForm.html.twig", "/home/lorena/LRJ/lrj/templates/carga/showForm.html.twig");
    }
}
