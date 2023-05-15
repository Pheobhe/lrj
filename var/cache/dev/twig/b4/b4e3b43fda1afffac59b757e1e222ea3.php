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

/* emails/base_email.html.twig */
class __TwigTemplate_82d332dce5c7b0933e3818d464c34e17 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/base_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/base_email.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 292
        echo "    </head>
    <body>

      ";
        // line 296
        echo "      ";
        $this->displayBlock('header', $context, $blocks);
        // line 301
        echo "
      ";
        // line 302
        $this->displayBlock('body', $context, $blocks);
        // line 304
        echo "
      ";
        // line 306
        echo "      ";
        $this->displayBlock('footer', $context, $blocks);
        // line 311
        echo "
      ";
        // line 312
        $this->displayBlock('javascripts', $context, $blocks);
        // line 314
        echo "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t\t\t\t\t<style>
\t\t\t\t\t\t\t@font-face{
\t\t\t\t\t\t\t\tfont-family: 'DIN-Bold';
\t\t\t\t\t\t\t\tsrc: url('../fonts/DINNextRoundedLTPro-Bold.otf') format('opentype');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t@font-face{
\t\t\t\t\t\t\t\tfont-family: 'DIN-ExtraBold';
\t\t\t\t\t\t\t\tsrc: url('../fonts/DINNextRoundedLTPro-Extra Bold.otf') format('opentype');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t@font-face{
\t\t\t\t\t\t\t\tfont-family: 'DIN-Light';
\t\t\t\t\t\t\t\tsrc: url('../fonts/DINNextRoundedLTPro-Light.otf') format('opentype');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t@font-face{
\t\t\t\t\t\t\t\tfont-family: 'DIN-Medium';
\t\t\t\t\t\t\t\tsrc: url('../fonts/DINNextRoundedLTPro-Medium.otf') format('opentype');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t@font-face{
\t\t\t\t\t\t\t\tfont-family: 'DIN-Regular';
\t\t\t\t\t\t\t\tsrc: url('../fonts/DINNextRoundedLTPro-Regular.otf') format('opentype');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t*{
\t\t\t\t\t\t\t\tfont-family: 'DIN-Regular', 'sans-serif';
\t\t\t\t\t\t\t\tcolor: #454346;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\ti {
\t\t\t\t\t\t\t\tvertical-align: bottom;
\t\t\t\t\t\t\t\tfont-size: 25px !important;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\thtml {
\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t\theight: 100%;
\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tbody {
\t\t\t\t\t\t\t\tdisplay: flex;
\t\t\t\t\t\t\t\tflex-wrap: wrap;
\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t\theight: 100%;
\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t/* Iconos y Letra */
\t\t\t\t\t\t\t.md-16 { font-size: 16px !important; }
\t\t\t\t\t\t\t.md-18 { font-size: 18px !important; }
\t\t\t\t\t\t\t.md-24 { font-size: 24px !important; }
\t\t\t\t\t\t\t.md-28 { font-size: 28px !important; }
\t\t\t\t\t\t\t.md-32 { font-size: 32px !important; }
\t\t\t\t\t\t\t.md-36 { font-size: 36px !important; }
\t\t\t\t\t\t\t.md-48 { font-size: 48px !important; }

\t\t\t\t\t\t\t.gris-fondo {
\t\t\t\t\t\t\t\tbackground-color: #f3f3f3 !important; /* Gris de fondo */
\t\t\t\t\t\t\t}


\t\t\t\t\t\t\t/**** HEADER *****/
\t\t\t\t\t\t\theader {
\t\t\t\t\t\t\t\talign-self: flex-start;
\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\theader .btn:focus {
\t\t\t\t\t\t\t\tbox-shadow: none;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tbutton{
\t\t\t\t\t\t\t\tword-break: normal;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t.bold{
\t\t\t\t\t\t\t\tfont-weight: bolder;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t/* Boton Usuario Logueado */
\t\t\t\t\t\t\t.dropdown-menu{
\t\t\t\t\t\t\t\tmin-width: 10rem;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.dropdown-menu img {
\t\t\t\t\t\t\t\t\twidth: 1.7rem;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.dropdown-item {
\t\t\t\t\t\t\t\t\tpadding: 0rem 1.5rem;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.dropdown-item:focus, .dropdown-item:hover {
\t\t\t\t\t\t\t\t\tcolor: #454346;
\t\t\t\t\t\t\t\t\ttext-decoration: none;
\t\t\t\t\t\t\t\t\tbackground-color: transparent;
\t\t\t\t\t\t\t\t\topacity: 0.9;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.dropdown-item, .btn{
\t\t\t\t\t\t\t\tcolor: #454346;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.flecha {
\t\t\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t\t\t\tmargin-left: 1em;
\t\t\t\t\t\t\t\tmargin-top: 1em;
\t\t\t\t\t\t\t\tvertical-align: text-bottom;
\t\t\t\t\t\t\t\tcontent: \"\";
\t\t\t\t\t\t\t\tborder-top: .3em solid;
\t\t\t\t\t\t\t\tborder-right: .3em solid transparent;
\t\t\t\t\t\t\t\tborder-bottom: 0;
\t\t\t\t\t\t\t\tborder-left: .3em solid transparent;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t/* FIN Boton Usuario Logueado */

\t\t\t\t\t\t\t/* Logo Provincia */
\t\t\t\t\t\t\t.logo-gba {
\t\t\t\t\t\t\t\ttext-align: left;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.img-logo {
\t\t\t\t\t\t\t\twidth: 8rem;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t/* FIN Logo Provincia */

\t\t\t\t\t\t\t/* Header verde */
\t\t\t\t\t\t\t.header-uno {
\t\t\t\t\t\t\t\tbackground-color: #9ACA3C; /* verde-provincia */
\t\t\t\t\t\t\t\theight: 103px;
\t\t\t\t\t\t\t\tdisplay: flex;
\t\t\t\t\t\t\t\tjustify-content: space-between;
\t\t\t\t\t\t\t\talign-items: center;
\t\t\t\t\t\t\t\tflex-wrap: nowrap;
\t\t\t\t\t\t\t\tpadding: 0 2%;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t/* FIN Header verde */

\t\t\t\t\t\t\t/* Header gris */
\t\t\t\t\t\t\t.header-dos {
\t\t\t\t\t\t\t\tbackground-color: #414042;
\t\t\t\t\t\t\t\theight: 108px;
\t\t\t\t\t\t\t\tjustify-content: left;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t/* FIN Header gris */

\t\t\t\t\t\t\t/* Titulo */
\t\t\t\t\t\t\t.title-header {
\t\t\t\t\t\t\t\tcolor: #fff;
\t\t\t\t\t\t\t\ttext-shadow: 3px 3px 4px #202020;
\t\t\t\t\t\t\t\tmargin-left: 3%;
\t\t\t\t\t\t\t\tfont-size: 40px;
\t\t\t\t\t\t\t\ttext-align: left;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t/* FIN Titulo */

\t\t\t\t\t\t\t.userButton{
\t\t\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t\t\t\tcolor: black;
\t\t\t\t\t\t\t\ttext-align: center;
\t\t\t\t\t\t\t\tpadding: 2px 16px;
\t\t\t\t\t\t\t\ttext-decoration: none;
\t\t\t\t\t\t\t\tfont-size: 12px;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\theader.fixed{
\t\t\t\t\t\t\t\tz-index: 100;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t/***** FIN HEADER *****/

\t\t\t\t\t\t\t/***** MAIN *****/
\t\t\t\t\t\t\tmain.fixed{
\t\t\t\t\t\t\t\ttop: 211px;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tmain{
\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tmain .row{
\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t.main {
\t\t\t\t\t\t\t\tmin-height: 250px;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t/****** MENU ******/
\t\t\t\t\t\t\t.menu{
\t\t\t\t\t\t\t\tpadding: 1%;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.menu{
\t\t\t\t\t\t\t\tbackground-color: #757575;
\t\t\t\t\t\t\t\tmax-width: 250px !important;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.menu a,
\t\t\t\t\t\t\t.menu span,
\t\t\t\t\t\t\t.menu i{
\t\t\t\t\t\t\t\tcolor: #fff;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.menu strong{
\t\t\t\t\t\t\t\tcursor: pointer;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.menu .nav-link{
\t\t\t\t\t\t\t\tpadding: 0.7rem 1rem;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.menu a{
\t\t\t\t\t\t\t\tfont-size: 16px !important;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.menu a:hover {
\t\t\t\t\t\t\t\tcolor: #fff;
\t\t\t\t\t\t\t\ttext-decoration: none;
\t\t\t\t\t\t\t\tcursor: pointer;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.menu .activo {
\t\t\t\t\t\t\t\tfont-weight: bold;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t/* Botones menu */
\t\t\t\t\t\t\t.icon-help,
\t\t\t\t\t\t\t.icon-help-mobile{
\t\t\t\t\t\t\t\twidth: 2rem;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.icon-help-mobile{
\t\t\t\t\t\t\t\tdisplay: none;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.icon-help{
\t\t\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.item-fondo {
\t\t\t\t\t\t\t\tbackground-color: dimgray;
\t\t\t\t\t\t\t\tmargin: 1% 0 2% 0;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t/* Fin Botones Menu */

\t\t\t\t\t\t\t/***** FIN MENU *****/

\t\t\t\t\t\t\t/**** CONTENIDO ******/

\t\t\t\t\t\t\t.contenido {
\t\t\t\t\t\t\t\tpadding: 4%;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t.titulo-contenido{
\t\t\t\t\t\t\t\tfont-weight: bold;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t/*** FIN CONTENIDO ***/

\t\t\t\t\t\t\t/***** FIN MAIN *****/

\t\t\t\t\t\t\t/******* FOOTER *************/
\t\t\t\t\t\t\tfooter{
\t\t\t\t\t\t\t\talign-self: flex-end;
\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t\tbackground-color: #414042;
\t\t\t\t\t\t\t\t\tborder-bottom: 1px solid #414042;
\t\t\t\t\t\t\t\t\tmargin-bottom: 0px;
\t\t\t\t\t\t\t\t\tpadding: 1% 1%;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tfooter p a,
\t\t\t\t\t\t\tfooter p,
\t\t\t\t\t\t\tfooter h5{
\t\t\t\t\t\t\t\tcolor: #fff;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tfooter p{
\t\t\t\t\t\t\t\tfont-size: 12px;
\t\t\t\t\t\t\t\tline-height: 1;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tfooter .row{
\t\t\t\t\t\t\t\tpadding: 2% 2% 2% 7%;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tfooter a:hover{
\t\t\t\t\t\t\t\tcolor: #fff;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.logo-footer{
\t\t\t\t\t\t\t\twidth: 65%;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.redes-sociales{
\t\t\t\t\t\t\t\tmargin-top: 7%;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.redes-sociales .fa-twitter,
\t\t\t\t\t\t\t.redes-sociales .fa-facebook-f{
\t\t\t\t\t\t\t\tfont-size: 30px;
\t\t\t\t\t\t\t\tcolor: #fff;
\t\t\t\t\t\t\t\tpadding-right: 7%;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.redes-sociales-title{
\t\t\t\t\t\t\t\tfont-weight: bold;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t/******** FIN FOOTER ********/
\t\t\t\t\t
\t\t\t\t\t</style>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 296
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 297
        echo "\t      <header>
\t        <img src=\"";
        // line 298
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 298, $this->source); })()), "header", [], "any", false, false, false, 298), "html", null, true);
        echo "\" alt=\"header\" style=\"width:75%;\">
        </header>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 302
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 303
        echo "      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 306
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 307
        echo "        <footer>
          ";
        // line 308
        $this->loadTemplate("./layout/footer.html.twig", "emails/base_email.html.twig", 308)->display($context);
        // line 309
        echo "        </footer>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 312
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 313
        echo "      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "emails/base_email.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  501 => 313,  491 => 312,  480 => 309,  478 => 308,  475 => 307,  465 => 306,  455 => 303,  445 => 302,  432 => 298,  429 => 297,  419 => 296,  125 => 7,  115 => 6,  97 => 5,  85 => 314,  83 => 312,  80 => 311,  77 => 306,  74 => 304,  72 => 302,  69 => 301,  66 => 296,  61 => 292,  59 => 6,  55 => 5,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}{% endblock %}</title>
        {% block stylesheets %}
\t\t\t\t\t<style>
\t\t\t\t\t\t\t@font-face{
\t\t\t\t\t\t\t\tfont-family: 'DIN-Bold';
\t\t\t\t\t\t\t\tsrc: url('../fonts/DINNextRoundedLTPro-Bold.otf') format('opentype');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t@font-face{
\t\t\t\t\t\t\t\tfont-family: 'DIN-ExtraBold';
\t\t\t\t\t\t\t\tsrc: url('../fonts/DINNextRoundedLTPro-Extra Bold.otf') format('opentype');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t@font-face{
\t\t\t\t\t\t\t\tfont-family: 'DIN-Light';
\t\t\t\t\t\t\t\tsrc: url('../fonts/DINNextRoundedLTPro-Light.otf') format('opentype');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t@font-face{
\t\t\t\t\t\t\t\tfont-family: 'DIN-Medium';
\t\t\t\t\t\t\t\tsrc: url('../fonts/DINNextRoundedLTPro-Medium.otf') format('opentype');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t@font-face{
\t\t\t\t\t\t\t\tfont-family: 'DIN-Regular';
\t\t\t\t\t\t\t\tsrc: url('../fonts/DINNextRoundedLTPro-Regular.otf') format('opentype');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t*{
\t\t\t\t\t\t\t\tfont-family: 'DIN-Regular', 'sans-serif';
\t\t\t\t\t\t\t\tcolor: #454346;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\ti {
\t\t\t\t\t\t\t\tvertical-align: bottom;
\t\t\t\t\t\t\t\tfont-size: 25px !important;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\thtml {
\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t\theight: 100%;
\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tbody {
\t\t\t\t\t\t\t\tdisplay: flex;
\t\t\t\t\t\t\t\tflex-wrap: wrap;
\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t\theight: 100%;
\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t/* Iconos y Letra */
\t\t\t\t\t\t\t.md-16 { font-size: 16px !important; }
\t\t\t\t\t\t\t.md-18 { font-size: 18px !important; }
\t\t\t\t\t\t\t.md-24 { font-size: 24px !important; }
\t\t\t\t\t\t\t.md-28 { font-size: 28px !important; }
\t\t\t\t\t\t\t.md-32 { font-size: 32px !important; }
\t\t\t\t\t\t\t.md-36 { font-size: 36px !important; }
\t\t\t\t\t\t\t.md-48 { font-size: 48px !important; }

\t\t\t\t\t\t\t.gris-fondo {
\t\t\t\t\t\t\t\tbackground-color: #f3f3f3 !important; /* Gris de fondo */
\t\t\t\t\t\t\t}


\t\t\t\t\t\t\t/**** HEADER *****/
\t\t\t\t\t\t\theader {
\t\t\t\t\t\t\t\talign-self: flex-start;
\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\theader .btn:focus {
\t\t\t\t\t\t\t\tbox-shadow: none;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tbutton{
\t\t\t\t\t\t\t\tword-break: normal;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t.bold{
\t\t\t\t\t\t\t\tfont-weight: bolder;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t/* Boton Usuario Logueado */
\t\t\t\t\t\t\t.dropdown-menu{
\t\t\t\t\t\t\t\tmin-width: 10rem;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.dropdown-menu img {
\t\t\t\t\t\t\t\t\twidth: 1.7rem;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.dropdown-item {
\t\t\t\t\t\t\t\t\tpadding: 0rem 1.5rem;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.dropdown-item:focus, .dropdown-item:hover {
\t\t\t\t\t\t\t\t\tcolor: #454346;
\t\t\t\t\t\t\t\t\ttext-decoration: none;
\t\t\t\t\t\t\t\t\tbackground-color: transparent;
\t\t\t\t\t\t\t\t\topacity: 0.9;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.dropdown-item, .btn{
\t\t\t\t\t\t\t\tcolor: #454346;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.flecha {
\t\t\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t\t\t\tmargin-left: 1em;
\t\t\t\t\t\t\t\tmargin-top: 1em;
\t\t\t\t\t\t\t\tvertical-align: text-bottom;
\t\t\t\t\t\t\t\tcontent: \"\";
\t\t\t\t\t\t\t\tborder-top: .3em solid;
\t\t\t\t\t\t\t\tborder-right: .3em solid transparent;
\t\t\t\t\t\t\t\tborder-bottom: 0;
\t\t\t\t\t\t\t\tborder-left: .3em solid transparent;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t/* FIN Boton Usuario Logueado */

\t\t\t\t\t\t\t/* Logo Provincia */
\t\t\t\t\t\t\t.logo-gba {
\t\t\t\t\t\t\t\ttext-align: left;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.img-logo {
\t\t\t\t\t\t\t\twidth: 8rem;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t/* FIN Logo Provincia */

\t\t\t\t\t\t\t/* Header verde */
\t\t\t\t\t\t\t.header-uno {
\t\t\t\t\t\t\t\tbackground-color: #9ACA3C; /* verde-provincia */
\t\t\t\t\t\t\t\theight: 103px;
\t\t\t\t\t\t\t\tdisplay: flex;
\t\t\t\t\t\t\t\tjustify-content: space-between;
\t\t\t\t\t\t\t\talign-items: center;
\t\t\t\t\t\t\t\tflex-wrap: nowrap;
\t\t\t\t\t\t\t\tpadding: 0 2%;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t/* FIN Header verde */

\t\t\t\t\t\t\t/* Header gris */
\t\t\t\t\t\t\t.header-dos {
\t\t\t\t\t\t\t\tbackground-color: #414042;
\t\t\t\t\t\t\t\theight: 108px;
\t\t\t\t\t\t\t\tjustify-content: left;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t/* FIN Header gris */

\t\t\t\t\t\t\t/* Titulo */
\t\t\t\t\t\t\t.title-header {
\t\t\t\t\t\t\t\tcolor: #fff;
\t\t\t\t\t\t\t\ttext-shadow: 3px 3px 4px #202020;
\t\t\t\t\t\t\t\tmargin-left: 3%;
\t\t\t\t\t\t\t\tfont-size: 40px;
\t\t\t\t\t\t\t\ttext-align: left;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t/* FIN Titulo */

\t\t\t\t\t\t\t.userButton{
\t\t\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t\t\t\tcolor: black;
\t\t\t\t\t\t\t\ttext-align: center;
\t\t\t\t\t\t\t\tpadding: 2px 16px;
\t\t\t\t\t\t\t\ttext-decoration: none;
\t\t\t\t\t\t\t\tfont-size: 12px;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\theader.fixed{
\t\t\t\t\t\t\t\tz-index: 100;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t/***** FIN HEADER *****/

\t\t\t\t\t\t\t/***** MAIN *****/
\t\t\t\t\t\t\tmain.fixed{
\t\t\t\t\t\t\t\ttop: 211px;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tmain{
\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tmain .row{
\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t.main {
\t\t\t\t\t\t\t\tmin-height: 250px;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t/****** MENU ******/
\t\t\t\t\t\t\t.menu{
\t\t\t\t\t\t\t\tpadding: 1%;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.menu{
\t\t\t\t\t\t\t\tbackground-color: #757575;
\t\t\t\t\t\t\t\tmax-width: 250px !important;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.menu a,
\t\t\t\t\t\t\t.menu span,
\t\t\t\t\t\t\t.menu i{
\t\t\t\t\t\t\t\tcolor: #fff;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.menu strong{
\t\t\t\t\t\t\t\tcursor: pointer;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.menu .nav-link{
\t\t\t\t\t\t\t\tpadding: 0.7rem 1rem;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.menu a{
\t\t\t\t\t\t\t\tfont-size: 16px !important;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.menu a:hover {
\t\t\t\t\t\t\t\tcolor: #fff;
\t\t\t\t\t\t\t\ttext-decoration: none;
\t\t\t\t\t\t\t\tcursor: pointer;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.menu .activo {
\t\t\t\t\t\t\t\tfont-weight: bold;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t/* Botones menu */
\t\t\t\t\t\t\t.icon-help,
\t\t\t\t\t\t\t.icon-help-mobile{
\t\t\t\t\t\t\t\twidth: 2rem;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.icon-help-mobile{
\t\t\t\t\t\t\t\tdisplay: none;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.icon-help{
\t\t\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.item-fondo {
\t\t\t\t\t\t\t\tbackground-color: dimgray;
\t\t\t\t\t\t\t\tmargin: 1% 0 2% 0;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t/* Fin Botones Menu */

\t\t\t\t\t\t\t/***** FIN MENU *****/

\t\t\t\t\t\t\t/**** CONTENIDO ******/

\t\t\t\t\t\t\t.contenido {
\t\t\t\t\t\t\t\tpadding: 4%;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t.titulo-contenido{
\t\t\t\t\t\t\t\tfont-weight: bold;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t/*** FIN CONTENIDO ***/

\t\t\t\t\t\t\t/***** FIN MAIN *****/

\t\t\t\t\t\t\t/******* FOOTER *************/
\t\t\t\t\t\t\tfooter{
\t\t\t\t\t\t\t\talign-self: flex-end;
\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t\tbackground-color: #414042;
\t\t\t\t\t\t\t\t\tborder-bottom: 1px solid #414042;
\t\t\t\t\t\t\t\t\tmargin-bottom: 0px;
\t\t\t\t\t\t\t\t\tpadding: 1% 1%;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tfooter p a,
\t\t\t\t\t\t\tfooter p,
\t\t\t\t\t\t\tfooter h5{
\t\t\t\t\t\t\t\tcolor: #fff;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tfooter p{
\t\t\t\t\t\t\t\tfont-size: 12px;
\t\t\t\t\t\t\t\tline-height: 1;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tfooter .row{
\t\t\t\t\t\t\t\tpadding: 2% 2% 2% 7%;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tfooter a:hover{
\t\t\t\t\t\t\t\tcolor: #fff;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.logo-footer{
\t\t\t\t\t\t\t\twidth: 65%;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.redes-sociales{
\t\t\t\t\t\t\t\tmargin-top: 7%;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.redes-sociales .fa-twitter,
\t\t\t\t\t\t\t.redes-sociales .fa-facebook-f{
\t\t\t\t\t\t\t\tfont-size: 30px;
\t\t\t\t\t\t\t\tcolor: #fff;
\t\t\t\t\t\t\t\tpadding-right: 7%;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.redes-sociales-title{
\t\t\t\t\t\t\t\tfont-weight: bold;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t/******** FIN FOOTER ********/
\t\t\t\t\t
\t\t\t\t\t</style>
        {% endblock %}
    </head>
    <body>

      {# Header #}
      {% block header %}
\t      <header>
\t        <img src=\"{{data.header}}\" alt=\"header\" style=\"width:75%;\">
        </header>
      {% endblock %}

      {% block body %}
      {% endblock %}

      {# Footer #}
      {% block footer %}
        <footer>
          {% include './layout/footer.html.twig' %}
        </footer>
      {% endblock %}

      {% block javascripts %}
      {% endblock %}
    </body>
</html>
", "emails/base_email.html.twig", "/home/lorena/LRJ/lrj/templates/emails/base_email.html.twig");
    }
}
