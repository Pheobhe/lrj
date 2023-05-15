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

/* layout/menu.html.twig */
class __TwigTemplate_63e31e508b5b5baf4793d2cd82f42286 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/menu.html.twig"));

        // line 1
        echo "<li class=\"nav-item\">
    <a href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" class=\"nav-link \">
        <span class=\"pcoded-micon\">
            <i class=\"feather icon-home\"></i>
        </span>
        <span class=\"pcoded-mtext\">Inicio</span>
    </a>
</li>
";
        // line 9
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 10
            echo twig_include($this->env, $context, "menu/menu_admin.html.twig");
            echo "
";
        }
        // line 12
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 13
            echo twig_include($this->env, $context, "menu/menu_user.html.twig");
            echo "
";
        }
        // line 15
        echo "

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layout/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  65 => 13,  63 => 12,  58 => 10,  56 => 9,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"nav-item\">
    <a href=\"{{path('index')}}\" class=\"nav-link \">
        <span class=\"pcoded-micon\">
            <i class=\"feather icon-home\"></i>
        </span>
        <span class=\"pcoded-mtext\">Inicio</span>
    </a>
</li>
{% if is_granted('ROLE_SUPER_ADMIN') %}
{{ include('menu/menu_admin.html.twig')}}
{% endif %}
{% if is_granted('ROLE_USER') %}
{{ include('menu/menu_user.html.twig')}}
{% endif %}


", "layout/menu.html.twig", "/home/lorena/LRJ/lrj/templates/layout/menu.html.twig");
    }
}
