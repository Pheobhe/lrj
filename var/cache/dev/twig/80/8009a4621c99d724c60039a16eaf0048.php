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

/* menu/menu_admin.html.twig */
class __TwigTemplate_0737f8d1f664acefc84298374070ec0d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin' => [$this, 'block_admin'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/menu_admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/menu_admin.html.twig"));

        // line 1
        $this->displayBlock('admin', $context, $blocks);
        // line 42
        echo " ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_admin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin"));

        // line 2
        echo "
<li class=\"nav-item\">
    <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\" class=\"nav-link \">
    <span class=\"pcoded-micon\">
    <i class=\"feather icon-users\"></i></span><span class=\"pcoded-mtext\">Usuarios </span></a></li>


<li class=\"nav-item pcoded-hasmenu\">
    <a href=\"#!\" class=\"nav-link \"><span class=\"pcoded-micon\"><i class=\"feather icon-tool\"></i>
    </span><span
            class=\"pcoded-mtext\">Configuración General</span></a>
    <ul class=\"pcoded-submenu\">
        <li><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_persona_index");
        echo "\">Personas</a></li>
        <li><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pago_index");
        echo "\">Pagos</a></li>
        <li><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actividad_index");
        echo "\">Actividades</a></li>
        ";
        // line 18
        echo "         
    </ul>
</li>

";
        // line 32
        echo "
 ";
        // line 38
        echo "<li class=\"nav-item\">
    <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carga_index");
        echo "\" class=\"nav-link \"><span class=\"pcoded-micon\"><i class=\"feather icon-edit\"></i></span><span
            class=\"pcoded-mtext\">Realizar Carga</span></a>
</li>
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "menu/menu_admin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  107 => 39,  104 => 38,  101 => 32,  95 => 18,  91 => 16,  87 => 15,  83 => 14,  70 => 4,  66 => 2,  56 => 1,  46 => 42,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block admin %}

<li class=\"nav-item\">
    <a href=\"{{path('user_index')}}\" class=\"nav-link \">
    <span class=\"pcoded-micon\">
    <i class=\"feather icon-users\"></i></span><span class=\"pcoded-mtext\">Usuarios </span></a></li>


<li class=\"nav-item pcoded-hasmenu\">
    <a href=\"#!\" class=\"nav-link \"><span class=\"pcoded-micon\"><i class=\"feather icon-tool\"></i>
    </span><span
            class=\"pcoded-mtext\">Configuración General</span></a>
    <ul class=\"pcoded-submenu\">
        <li><a href=\"{{path('app_persona_index')}}\">Personas</a></li>
        <li><a href=\"{{path('app_pago_index')}}\">Pagos</a></li>
        <li><a href=\"{{path('app_actividad_index')}}\">Actividades</a></li>
        {# <li><a href=\"{{path('app_periodo_index')}}\">Períodos</a></li> #}
         
    </ul>
</li>

{# <li class=\"nav-item pcoded-hasmenu\">
    <a href=\"#!\" class=\"nav-link \"><span class=\"pcoded-micon\"><i class=\"feather icon-layers\"></i>
    </span><span
            class=\"pcoded-mtext\">Configuración de Preguntas</span></a>
    <ul class=\"pcoded-submenu\">
        <li><a href=\"{{path('app_pregunta_index')}}\">Preguntas</a></li>
        <li><a href=\"{{path('app_opcion_index')}}\">Opcion</a></li>
        
           </ul>
</li> #}

 {# <li class=\"nav-item\">
    <a href=\"{{path('app_respuesta_index')}}\" class=\"nav-link \"><span class=\"pcoded-micon\"><i class=\"feather icon-file\"></i></span><span
            class=\"pcoded-mtext\">Respuestas</span></a>
            
</li> #}
<li class=\"nav-item\">
    <a href=\"{{path('app_carga_index')}}\" class=\"nav-link \"><span class=\"pcoded-micon\"><i class=\"feather icon-edit\"></i></span><span
            class=\"pcoded-mtext\">Realizar Carga</span></a>
</li>
 {% endblock %} ", "menu/menu_admin.html.twig", "/home/lorena/LRJ/lrj/templates/menu/menu_admin.html.twig");
    }
}
