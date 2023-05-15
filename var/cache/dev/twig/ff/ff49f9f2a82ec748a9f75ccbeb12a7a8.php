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

/* @HelloBootstrapTable/table/hello_bootstrap_table_toolbar.html.twig */
class __TwigTemplate_24e89e1773c358fbf7e0a8ca05478079 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@HelloBootstrapTable/table/hello_bootstrap_table_toolbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@HelloBootstrapTable/table/hello_bootstrap_table_toolbar.html.twig"));

        // line 1
        echo "<div
     style=\"float:left; padding-top: 6px;\">
    <form id=\"bulk_form_";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 3, $this->source); })()), "tableName", [], "any", false, false, false, 3), "html", null, true);
        echo "\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 3, $this->source); })()), "tableOptions", [], "any", false, false, false, 3), "bulkUrl", [], "any", false, false, false, 3), "html", null, true);
        echo "\">
        <select name=\"bulk_action\"
                class=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 5, $this->source); })()), "tableOptions", [], "any", false, false, false, 5), "bulkActionSelectClassNames", [], "any", false, false, false, 5), "html", null, true);
        echo "\"
                style=\"width: auto; display: inline-block; vertical-align: middle; margin-right: 5px;\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 7, $this->source); })()), "tableOptions", [], "any", false, false, false, 7), "bulkActions", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["value"] => $context["name"]) {
            // line 8
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        </select>
        <input type=\"hidden\" name=\"selected_ids\"/>
        <button type=\"submit\"
                class=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 13, $this->source); })()), "tableOptions", [], "any", false, false, false, 13), "bulkButtonClassNames", [], "any", false, false, false, 13), "html", null, true);
        echo "\"
                style=\"display: inline-block; vertical-align: middle;\">
            ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 15, $this->source); })()), "tableOptions", [], "any", false, false, false, 15), "bulkButtonName", [], "any", false, false, false, 15), "html", null, true);
        echo "
        </button>
    </form>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@HelloBootstrapTable/table/hello_bootstrap_table_toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 15,  79 => 13,  74 => 10,  63 => 8,  59 => 7,  54 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div
     style=\"float:left; padding-top: 6px;\">
    <form id=\"bulk_form_{{ table.tableName }}\" method=\"post\" action=\"{{ table.tableOptions.bulkUrl }}\">
        <select name=\"bulk_action\"
                class=\"{{ table.tableOptions.bulkActionSelectClassNames }}\"
                style=\"width: auto; display: inline-block; vertical-align: middle; margin-right: 5px;\">
            {% for value, name in table.tableOptions.bulkActions %}
                <option value=\"{{ value }}\">{{ name }}</option>
            {% endfor %}
        </select>
        <input type=\"hidden\" name=\"selected_ids\"/>
        <button type=\"submit\"
                class=\"{{ table.tableOptions.bulkButtonClassNames }}\"
                style=\"display: inline-block; vertical-align: middle;\">
            {{ table.tableOptions.bulkButtonName }}
        </button>
    </form>
</div>", "@HelloBootstrapTable/table/hello_bootstrap_table_toolbar.html.twig", "/home/lorena/LRJ/lrj/vendor/hello-sebastian/hello-bootstrap-table-bundle/src/Resources/views/table/hello_bootstrap_table_toolbar.html.twig");
    }
}
