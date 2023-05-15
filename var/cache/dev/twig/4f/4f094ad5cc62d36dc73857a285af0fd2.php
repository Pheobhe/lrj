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

/* base.html.twig */
class __TwigTemplate_646ae6c6b79b3286a008cdbed311fe20 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'headerPage' => [$this, 'block_headerPage'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'headerBreadcrumb' => [$this, 'block_headerBreadcrumb'],
            'content' => [$this, 'block_content'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">

<head>
    <title>La Receta Justa</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"keywords\" content=\"\">
    <meta name=\"author\" content=\"Ministerio de Gobierno\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\" />
    ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "

</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class=\"loader-bg\">
        <div class=\"loader-track\">
            <div class=\"loader-fill\"></div>
        </div>
    </div>
    <nav class=\"pcoded-navbar theme-horizontal menu-light brand-blue\">
        <div class=\"navbar-wrapper\">
            <div class=\"navbar-content sidenav-horizontal\" id=\"layout-sidenav\">
                <ul class=\"nav pcoded-inner-navbar sidenav-inner\">
                    ";
        // line 47
        echo twig_include($this->env, $context, "layout/menu.html.twig");
        echo "
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class=\"navbar pcoded-header navbar-expand-lg header-blue navbar-light\">
        <div class=\"m-header\">
            <a class=\"mobile-menu\" id=\"mobile-collapse\" href=\"#!\"><span></span></a>
            <a href=\"#!\" class=\"b-brand\">
                <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/lrj.png"), "html", null, true);
        echo "\" alt=\"\" class=\"logo\">
            </a>
            <a href=\"#!\" class=\"mob-toggler\">
                <i class=\"feather icon-more-vertical\"></i>
            </a>
        </div>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                    <a href=\"#!\" class=\"full-screen\" onclick=\"javascript:toggleFullScreen()\"><i
                            class=\"feather icon-maximize\"></i></a>
                </li>
            </ul>
            <ul class=\"navbar-nav ml-auto\">
                <li>
                
                <li>
                    <div class=\"dropdown drp-user\">
                        <a href=\"#!\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" class=\"img-radius wid-40\"
                                alt=\"User-Profile-Image\">

                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right profile-notification\">
                            <div class=\"pro-head\">
                                <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" class=\"img-radius\" alt=\"User-Profile-Image\">
                                <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"dud-logout\" title=\"Logout\">
                                    <i class=\"feather icon-log-out\"></i>
                                </a>
                            </div>
                            <span class=\"role\">";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "username", [], "any", false, false, false, 89), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "getStringRole", [], "any", false, false, false, 89), "html", null, true);
        echo ")</span>
                            <ul class=\"pro-body\">
                                <li>
                                    <a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile");
        echo "\" class=\"dropdown-item\">
                                        <i class=\"feather icon-user\"></i> Mis Datos 
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"dropdown-item\">
                                        <i class=\"feather icon-log-out\"></i> Cerrar sesión 
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <section class=\"pcoded-main-container\">
        <div class=\"pcoded-content\">
        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 110));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 111
            echo "        <div class=\"alert alert-success\">
            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
            ";
            // line 113
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 116));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 117
            echo "            <div class=\"alert alert-danger\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                ";
            // line 119
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "            ";
        $this->displayBlock('headerPage', $context, $blocks);
        // line 143
        echo "            <div class=\"row\">
                ";
        // line 144
        $this->displayBlock('content', $context, $blocks);
        // line 150
        echo "            </div>
        </div>
    </section>


    <footer class=\"mt-auto text-center text-dark\" style=\"background-color: #f1f1f1;\">
        ";
        // line 157
        echo "            ";
        // line 162
        echo "            <div class=\"text-center text-dark p-3\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
                © 2022 Desarrollado por:
                <a class=\"text-dark\">Defalco Lorena</a>
            </div>
        ";
        // line 167
        echo "    </footer>


    ";
        // line 170
        $this->displayBlock('javascripts', $context, $blocks);
        // line 245
        echo "</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 21
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/plugins/prism-coy.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icofont/icofont.css"), "html", null, true);
        echo "\">
    <!-- data tables css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/plugins/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/plugins/PNotifyBrightTheme.css"), "html", null, true);
        echo "\" />
    <!-- file upload -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.filer/css/jquery.filer.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\"
        href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 122
    public function block_headerPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerPage"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerPage"));

        // line 123
        echo "            <div class=\"page-header\">
                <div class=\"page-block\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-sm-12\">
                            <div class=\"page-header-title\">

                                <h5 class=\"m-b-10\"> ";
        // line 129
        $this->displayBlock('headerTitle', $context, $blocks);
        echo "</h5>
                            </div>
                            <ul class=\"breadcrumb\">
                                ";
        // line 132
        $this->displayBlock('headerBreadcrumb', $context, $blocks);
        // line 137
        echo "                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 129
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerTitle"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 132
    public function block_headerBreadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerBreadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerBreadcrumb"));

        // line 133
        echo "                                <li class=\"breadcrumb-item\"><a href=\"index.html\"><i class=\"feather icon-home\"></i></a>
                                </li>
                                <li class=\"breadcrumb-item\"><a href=\"#\"></a></li>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 144
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 145
        echo "                <div class=\"col-sm-12\">
                    ";
        // line 146
        $this->displayBlock('body', $context, $blocks);
        // line 148
        echo "                </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 146
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 147
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 170
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 171
        echo "

    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor-all.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pcoded.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/prism.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/horizontal-menu.js"), "html", null, true);
        echo "\"></script>
    <!-- datatable Js -->
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/data-basic-custom.js"), "html", null, true);
        echo "\"></script>
    <!-- pnotify Js -->
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/PNotify.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/PNotifyButtons.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/PNotifyCallbacks.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/PNotifyDesktop.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/PNotifyConfirm.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/notify-event.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 190
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.filer/js/jquery.filer.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/filer/custom-filer.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/filer/jquery.fileuploads.init.js"), "html", null, true);
        echo "\"></script>
    <script>
        (function () {
            if (\$('#layout-sidenav').hasClass('sidenav-horizontal') || window.layoutHelpers.isSmallScreen()) {
                return;
            }
            try {
                window.layoutHelpers._getSetting(\"Rtl\")
                window.layoutHelpers.setCollapsed(
                    localStorage.getItem('layoutCollapsed') === 'true',
                    false
                );
            } catch (e) {}
        })();
        \$(function () {
            \$('#layout-sidenav').each(function () {
                new SideNav(this, {
                    orientation: \$(this).hasClass('sidenav-horizontal') ? 'horizontal' :
                        'vertical'
                });
            });
            \$('body').on('click', '.layout-sidenav-toggle', function (e) {
                e.preventDefault();
                window.layoutHelpers.toggleCollapsed();
                if (!window.layoutHelpers.isSmallScreen()) {
                    try {
                        localStorage.setItem('layoutCollapsed', String(window.layoutHelpers
                        .isCollapsed()));
                    } catch (e) {}
                }
            });
        });
        \$(document).ready(function () {
            \$(\"#pcoded\").pcodedmenu({
                themelayout: 'horizontal',
                MenuTrigger: 'hover',
                SubMenuTrigger: 'hover',
            });
        });
        \$('.animation-toggle').hover(function () {
            var anim = \$(this).attr('data-animate');
            \$(this).addClass('animated');
            \$(this).addClass(anim);
            if (flag) {
                \$('html, body').animate({
                    scrollTop: '600px'
                }, 800);
                flag = false;
            }
        });

    </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  519 => 192,  515 => 191,  510 => 190,  506 => 188,  502 => 187,  498 => 186,  494 => 185,  490 => 184,  486 => 183,  481 => 181,  477 => 180,  473 => 179,  468 => 177,  464 => 176,  460 => 175,  456 => 174,  452 => 173,  448 => 171,  438 => 170,  428 => 147,  418 => 146,  407 => 148,  405 => 146,  402 => 145,  392 => 144,  379 => 133,  369 => 132,  351 => 129,  336 => 137,  334 => 132,  328 => 129,  320 => 123,  310 => 122,  298 => 30,  293 => 28,  288 => 26,  284 => 25,  279 => 23,  275 => 22,  270 => 21,  260 => 20,  248 => 245,  246 => 170,  241 => 167,  235 => 162,  233 => 157,  225 => 150,  223 => 144,  220 => 143,  217 => 122,  208 => 119,  204 => 117,  199 => 116,  190 => 113,  186 => 111,  182 => 110,  166 => 97,  158 => 92,  150 => 89,  143 => 85,  139 => 84,  130 => 78,  108 => 59,  93 => 47,  76 => 32,  74 => 20,  70 => 19,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">

<head>
    <title>La Receta Justa</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"keywords\" content=\"\">
    <meta name=\"author\" content=\"Ministerio de Gobierno\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('images/favicon.png') }}\" />
    {% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/plugins/prism-coy.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/style.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/icofont/icofont.css') }}\">
    <!-- data tables css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/plugins/dataTables.bootstrap4.min.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/plugins/PNotifyBrightTheme.css') }}\" />
    <!-- file upload -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/js/jquery.filer/css/jquery.filer.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\"
        href=\"{{ asset('assets/js/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css') }}\">
    {% endblock %}


</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class=\"loader-bg\">
        <div class=\"loader-track\">
            <div class=\"loader-fill\"></div>
        </div>
    </div>
    <nav class=\"pcoded-navbar theme-horizontal menu-light brand-blue\">
        <div class=\"navbar-wrapper\">
            <div class=\"navbar-content sidenav-horizontal\" id=\"layout-sidenav\">
                <ul class=\"nav pcoded-inner-navbar sidenav-inner\">
                    {{ include('layout/menu.html.twig')}}
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class=\"navbar pcoded-header navbar-expand-lg header-blue navbar-light\">
        <div class=\"m-header\">
            <a class=\"mobile-menu\" id=\"mobile-collapse\" href=\"#!\"><span></span></a>
            <a href=\"#!\" class=\"b-brand\">
                <img src=\"{{ asset('images/lrj.png') }}\" alt=\"\" class=\"logo\">
            </a>
            <a href=\"#!\" class=\"mob-toggler\">
                <i class=\"feather icon-more-vertical\"></i>
            </a>
        </div>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                    <a href=\"#!\" class=\"full-screen\" onclick=\"javascript:toggleFullScreen()\"><i
                            class=\"feather icon-maximize\"></i></a>
                </li>
            </ul>
            <ul class=\"navbar-nav ml-auto\">
                <li>
                
                <li>
                    <div class=\"dropdown drp-user\">
                        <a href=\"#!\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"{{ asset('images/user.png') }}\" class=\"img-radius wid-40\"
                                alt=\"User-Profile-Image\">

                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right profile-notification\">
                            <div class=\"pro-head\">
                                <img src=\"{{ asset('images/user.png') }}\" class=\"img-radius\" alt=\"User-Profile-Image\">
                                <a href=\"{{ path('app_logout') }}\" class=\"dud-logout\" title=\"Logout\">
                                    <i class=\"feather icon-log-out\"></i>
                                </a>
                            </div>
                            <span class=\"role\">{{app.user.username}} ({{app.user.getStringRole}})</span>
                            <ul class=\"pro-body\">
                                <li>
                                    <a href=\"{{ path('user_profile') }}\" class=\"dropdown-item\">
                                        <i class=\"feather icon-user\"></i> Mis Datos 
                                    </a>
                                </li>
                                <li>
                                    <a href=\"{{ path('app_logout') }}\" class=\"dropdown-item\">
                                        <i class=\"feather icon-log-out\"></i> Cerrar sesión 
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <section class=\"pcoded-main-container\">
        <div class=\"pcoded-content\">
        {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
            {{ message }}
        </div>
        {% endfor %}
        {% for message in app.flashes('danger') %}
            <div class=\"alert alert-danger\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                {{ message }}
            </div>
        {% endfor %}
            {% block headerPage %}
            <div class=\"page-header\">
                <div class=\"page-block\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-sm-12\">
                            <div class=\"page-header-title\">

                                <h5 class=\"m-b-10\"> {% block headerTitle %}{% endblock %}</h5>
                            </div>
                            <ul class=\"breadcrumb\">
                                {% block headerBreadcrumb %}
                                <li class=\"breadcrumb-item\"><a href=\"index.html\"><i class=\"feather icon-home\"></i></a>
                                </li>
                                <li class=\"breadcrumb-item\"><a href=\"#\"></a></li>
                                {% endblock %}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {% endblock %}
            <div class=\"row\">
                {% block content %}
                <div class=\"col-sm-12\">
                    {% block body %}
                    {% endblock %}
                </div>
                {% endblock content %}
            </div>
        </div>
    </section>


    <footer class=\"mt-auto text-center text-dark\" style=\"background-color: #f1f1f1;\">
        {# <div class=\"pt-4\"> #}
            {# <li class=\"list-inline-item\">
                <h7 class=\"mb-1\">Si tenes algun problema en el sitio te solicitamos que ingreses a
                    soporte.mjus.gba.gob.ar con tu usuario y pass del mail institucional y generes un tiquet informando
                    la problematica</h7>
            </li> <br><br /> #}
            <div class=\"text-center text-dark p-3\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
                © 2022 Desarrollado por:
                <a class=\"text-dark\">Defalco Lorena</a>
            </div>
        {# </div>     #}
    </footer>


    {% block javascripts %}


    <script src=\"{{ asset('assets/js/vendor-all.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/plugins/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/pcoded.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/plugins/prism.js') }}\"></script>
    <script src=\"{{ asset('assets/js/horizontal-menu.js') }}\"></script>
    <!-- datatable Js -->
    <script src=\"{{ asset('assets/js/plugins/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/plugins/dataTables.bootstrap4.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/pages/data-basic-custom.js') }}\"></script>
    <!-- pnotify Js -->
    <script src=\"{{ asset('assets/js/plugins/PNotify.js') }}\"></script>
    <script src=\"{{ asset('assets/js/plugins/PNotifyButtons.js') }}\"></script>
    <script src=\"{{ asset('assets/js/plugins/PNotifyCallbacks.js') }}\"></script>
    <script src=\"{{ asset('assets/js/plugins/PNotifyDesktop.js') }}\"></script>
    <script src=\"{{ asset('assets/js/plugins/PNotifyConfirm.js') }}\"></script>
    <script src=\"{{ asset('assets/js/pages/notify-event.js') }}\"></script>
    {#file upload#}
    <script src=\"{{ asset('assets/js/jquery.filer/js/jquery.filer.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/filer/custom-filer.js') }}\"></script>
    <script src=\"{{ asset('assets/js/filer/jquery.fileuploads.init.js') }}\"></script>
    <script>
        (function () {
            if (\$('#layout-sidenav').hasClass('sidenav-horizontal') || window.layoutHelpers.isSmallScreen()) {
                return;
            }
            try {
                window.layoutHelpers._getSetting(\"Rtl\")
                window.layoutHelpers.setCollapsed(
                    localStorage.getItem('layoutCollapsed') === 'true',
                    false
                );
            } catch (e) {}
        })();
        \$(function () {
            \$('#layout-sidenav').each(function () {
                new SideNav(this, {
                    orientation: \$(this).hasClass('sidenav-horizontal') ? 'horizontal' :
                        'vertical'
                });
            });
            \$('body').on('click', '.layout-sidenav-toggle', function (e) {
                e.preventDefault();
                window.layoutHelpers.toggleCollapsed();
                if (!window.layoutHelpers.isSmallScreen()) {
                    try {
                        localStorage.setItem('layoutCollapsed', String(window.layoutHelpers
                        .isCollapsed()));
                    } catch (e) {}
                }
            });
        });
        \$(document).ready(function () {
            \$(\"#pcoded\").pcodedmenu({
                themelayout: 'horizontal',
                MenuTrigger: 'hover',
                SubMenuTrigger: 'hover',
            });
        });
        \$('.animation-toggle').hover(function () {
            var anim = \$(this).attr('data-animate');
            \$(this).addClass('animated');
            \$(this).addClass(anim);
            if (flag) {
                \$('html, body').animate({
                    scrollTop: '600px'
                }, 800);
                flag = false;
            }
        });

    </script>
    {% endblock %}
</body>

</html>", "base.html.twig", "/home/lorena/LRJ/lrj/templates/base.html.twig");
    }
}
