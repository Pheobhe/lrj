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

/* @HelloBootstrapTable/table/hello_bootstrap_table.html.twig */
class __TwigTemplate_aceaf1a6e7e2a220126f10371e34bdae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@HelloBootstrapTable/table/hello_bootstrap_table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@HelloBootstrapTable/table/hello_bootstrap_table.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 1, $this->source); })()), "tableOptions", [], "any", false, false, false, 1), "enableCheckbox", [], "any", false, false, false, 1)) {
            // line 2
            echo "    ";
            $this->loadTemplate("@HelloBootstrapTable/table/hello_bootstrap_table_toolbar.html.twig", "@HelloBootstrapTable/table/hello_bootstrap_table.html.twig", 2)->display($context);
        }
        // line 4
        echo "
<table
        class=\"hello-bootstrap-table\"
        data-side-pagination=\"server\"

        data-classes=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 9, $this->source); })()), "tableOptions", [], "any", false, false, false, 9), "tableClassNames", [], "any", false, false, false, 9), "html", null, true);
        echo "\"
        data-columns=\"";
        // line 10
        echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 10, $this->source); })()), "columns", [], "any", false, false, false, 10)), "html", null, true);
        echo "\"
        data-url=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 11, $this->source); })()), "callbackUrl", [], "any", false, false, false, 11), "html", null, true);
        echo "\"
        data-bulk-identifier=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 12, $this->source); })()), "tableOptions", [], "any", false, false, false, 12), "bulkIdentifier", [], "any", false, false, false, 12), "html", null, true);
        echo "\"

        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 14, $this->source); })()), "tableDataset", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 15
            echo "            ";
            if (twig_test_iterable($context["value"])) {
                // line 16
                echo "                data-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, json_encode($context["value"]), "html", null, true);
                echo "\"
            ";
            } elseif (((            // line 17
$context["value"] === true) || ($context["value"] === false))) {
                // line 18
                echo "                data-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, json_encode($context["value"]), "html", null, true);
                echo "\"
            ";
            } else {
                // line 20
                echo "                data-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"
            ";
            }
            // line 22
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "></table>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@HelloBootstrapTable/table/hello_bootstrap_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 23,  105 => 22,  97 => 20,  89 => 18,  87 => 17,  80 => 16,  77 => 15,  73 => 14,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if table.tableOptions.enableCheckbox %}
    {% include \"@HelloBootstrapTable/table/hello_bootstrap_table_toolbar.html.twig\" %}
{% endif %}

<table
        class=\"hello-bootstrap-table\"
        data-side-pagination=\"server\"

        data-classes=\"{{ table.tableOptions.tableClassNames }}\"
        data-columns=\"{{ table.columns|json_encode }}\"
        data-url=\"{{ table.callbackUrl }}\"
        data-bulk-identifier=\"{{ table.tableOptions.bulkIdentifier }}\"

        {% for key, value in table.tableDataset %}
            {% if value is iterable %}
                data-{{ key }}=\"{{ value|json_encode }}\"
            {% elseif value is same as(true) or value is same as(false) %}
                data-{{ key }}=\"{{ value|json_encode }}\"
            {% else %}
                data-{{ key }}=\"{{ value }}\"
            {% endif %}
        {% endfor %}
></table>", "@HelloBootstrapTable/table/hello_bootstrap_table.html.twig", "/home/lorena/LRJ/lrj/vendor/hello-sebastian/hello-bootstrap-table-bundle/src/Resources/views/table/hello_bootstrap_table.html.twig");
    }
}
