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

/* layout/sidebar.html.twig */
class __TwigTemplate_e64417bcc5c763e64886985091533a27 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/sidebar.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-pills flex-column ml-0\">

";
        // line 3
        $context["ruta"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "attributes", [], "any", false, false, false, 3), "get", [0 => "_route"], "method", false, false, false, 3);
        // line 4
        echo "
";
        // line 5
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 6
            echo "\t";
            // line 7
            echo "\t<li class=\"nav-item\">
\t\t<a \tclass=\"nav-link item-fondo ";
            // line 8
            if ((((isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 8, $this->source); })()) == "subject_obligation") || ((isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 8, $this->source); })()) == "volunteer"))) {
                echo "activo";
            }
            echo "\" 
\t\t\t\tdata-toggle=\"collapse\" 
\t\t\t\thref=\"#lista-cumplimiento\" 
\t\t\t\taria-expanded=\"false\" aria-controls=\"lista-cumplimiento\">
\t\t\t<i class=\"material-icons d-lg-inline-block d-md-inline-block d-sm-none d-none\">
\t\t\t\tfile_copy
\t\t\t</i>
\t\t\tCumplimiento de Presentación
\t\t</a>
\t\t<ul id=\"lista-cumplimiento\" class=\"nav ml-3 collapse\">
\t\t\t";
            // line 19
            echo "\t\t\t<li class=\"nav-item\">
\t\t\t\t<a \tid=\"link-obligados\" 
\t\t\t\t\t\tclass=\"nav-link ";
            // line 21
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "attributes", [], "any", false, false, false, 21), "get", [0 => "_route"], "method", false, false, false, 21) == "subject_obligation")) {
                echo "activo";
            }
            echo "\" 
\t\t\t\t\t\thref=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subject_obligation");
            echo "\">
\t\t\t\t\t<i class=\"material-icons\">keyboard_arrow_right</i> 
\t\t\t\t\tObligados
\t\t\t\t</a>
\t\t\t</li>
\t\t\t";
            // line 28
            echo "\t\t\t<li class=\"nav-item\">
\t\t\t\t<a \tid=\"link-voluntarios\" 
\t\t\t\t\t\tclass=\"nav-link ";
            // line 30
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "attributes", [], "any", false, false, false, 30), "get", [0 => "_route"], "method", false, false, false, 30) == "volunteer")) {
                echo "activo";
            }
            echo "\" 
\t\t\t\t\t\thref=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("volunteer");
            echo "\">
\t\t\t\t\t<i class=\"material-icons\">keyboard_arrow_right</i> 
\t\t\t\t\tVoluntarios
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</li>

";
        }
        // line 40
        echo "
";
        // line 41
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 42
            echo "\t";
            // line 43
            echo "\t<li class=\"nav-item\">
\t\t<a \tclass=\"nav-link item-fondo ";
            // line 44
            if (((isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 44, $this->source); })()) == "user_admin")) {
                echo " activo ";
            }
            echo "\" 
\t\t\t\thref=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_admin");
            echo "\">
\t\t\t<i class=\"fas fa-users\"></i>
\t\t\tAdministrar Usuarios
\t\t</a>
\t</li>
";
        }
        // line 51
        echo "
";
        // line 52
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 53
            echo "\t";
            // line 54
            echo "\t<li class=\"nav-item\">
\t\t<a \tclass=\"nav-link item-fondo ";
            // line 55
            if (((isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 55, $this->source); })()) == "user")) {
                echo " activo ";
            }
            echo "\" 
\t\t\t\thref=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user");
            echo "\">
\t\t\t<i class=\"fas fa-users\"></i>
\t\t\tUsuarios
\t\t</a>
\t</li>
";
        }
        // line 62
        echo "
</ul>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layout/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 62,  155 => 56,  149 => 55,  146 => 54,  144 => 53,  142 => 52,  139 => 51,  130 => 45,  124 => 44,  121 => 43,  119 => 42,  117 => 41,  114 => 40,  102 => 31,  96 => 30,  92 => 28,  84 => 22,  78 => 21,  74 => 19,  59 => 8,  56 => 7,  54 => 6,  52 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"nav nav-pills flex-column ml-0\">

{% set ruta  =app.request.attributes.get('_route') %}

{% if is_granted('ROLE_USER') %}
\t{# Cumplimiento #}
\t<li class=\"nav-item\">
\t\t<a \tclass=\"nav-link item-fondo {% if ruta == 'subject_obligation' or ruta == 'volunteer' %}activo{% endif %}\" 
\t\t\t\tdata-toggle=\"collapse\" 
\t\t\t\thref=\"#lista-cumplimiento\" 
\t\t\t\taria-expanded=\"false\" aria-controls=\"lista-cumplimiento\">
\t\t\t<i class=\"material-icons d-lg-inline-block d-md-inline-block d-sm-none d-none\">
\t\t\t\tfile_copy
\t\t\t</i>
\t\t\tCumplimiento de Presentación
\t\t</a>
\t\t<ul id=\"lista-cumplimiento\" class=\"nav ml-3 collapse\">
\t\t\t{# Obligados #}
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a \tid=\"link-obligados\" 
\t\t\t\t\t\tclass=\"nav-link {% if app.request.attributes.get('_route') == 'subject_obligation' %}activo{% endif %}\" 
\t\t\t\t\t\thref=\"{{path('subject_obligation')}}\">
\t\t\t\t\t<i class=\"material-icons\">keyboard_arrow_right</i> 
\t\t\t\t\tObligados
\t\t\t\t</a>
\t\t\t</li>
\t\t\t{# Voluntarios #}
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a \tid=\"link-voluntarios\" 
\t\t\t\t\t\tclass=\"nav-link {% if app.request.attributes.get('_route') == 'volunteer' %}activo{% endif %}\" 
\t\t\t\t\t\thref=\"{{path('volunteer')}}\">
\t\t\t\t\t<i class=\"material-icons\">keyboard_arrow_right</i> 
\t\t\t\t\tVoluntarios
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</li>

{% endif %}

{% if is_granted('ROLE_ADMIN') %}
\t{# Administrar Usuarios #}
\t<li class=\"nav-item\">
\t\t<a \tclass=\"nav-link item-fondo {% if ruta == 'user_admin'  %} activo {% endif %}\" 
\t\t\t\thref=\"{{path('user_admin')}}\">
\t\t\t<i class=\"fas fa-users\"></i>
\t\t\tAdministrar Usuarios
\t\t</a>
\t</li>
{% endif %}

{% if is_granted('ROLE_USER') %}
\t{# Administrar Usuarios #}
\t<li class=\"nav-item\">
\t\t<a \tclass=\"nav-link item-fondo {% if ruta == 'user'  %} activo {% endif %}\" 
\t\t\t\thref=\"{{path('user')}}\">
\t\t\t<i class=\"fas fa-users\"></i>
\t\t\tUsuarios
\t\t</a>
\t</li>
{% endif %}

</ul>", "layout/sidebar.html.twig", "/home/lorena/LRJ/lrj/templates/layout/sidebar.html.twig");
    }
}
