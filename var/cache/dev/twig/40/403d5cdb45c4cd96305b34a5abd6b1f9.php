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

/* layout/footer.html.twig */
class __TwigTemplate_daf8b7ae54b0df3f4efa635ecef2253e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/footer.html.twig"));

        // line 1
        echo "<div class=\"row mx-0\">
\t<div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 py-lg-none py-md-none py-sm-3 py-3\">
\t\t<a href=\"https://www.gba.gob.ar/\" target=\"_blank\"><img alt=\"Logo provincia de Buenos Aires\" class=\"logo-footer\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo_gba.svg"), "html", null, true);
        echo "\" /></a>
\t\t<div class=\"redes-sociales\">
\t\t\t<p class=\"redes-sociales-title\">Redes Sociales</p>
\t\t\t<a target=\"_blank\" aria-label=\"Logo Facebook\" href=\"https://www.facebook.com/BAProvincia/\"><i class=\"fab fa-facebook-f\"></i></a>
\t\t\t<a target=\"_blank\" aria-label=\"Logo Twitter\" href=\"https://twitter.com/baprovincia\"><i class=\"fab fa-twitter\"></i></a>
\t\t</div>
\t</div>
\t<div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 py-lg-none py-md-none py-sm-3 py-3\">
\t\t<h5>Guía Servicios</h5>
\t\t<p><a href=\"https://portal.gba.gob.ar/web/portal/\" target=\"_blank\" >Portal de trámites</a></p>
\t\t<p><a href=\"http://www.gba.gob.ar/registrodelaspersonas\" target=\"_blank\">Registro de las Personas</a></p>
\t\t<p><a href=\"https://www.gba.gob.ar/seguridadvial\" target=\"_blank\">Seguridad Vial</a></p>
\t\t<p><a href=\"http://www.arba.gov.ar/\" target=\"_blank\" title=\"\">ARBA</a></p>
\t\t<p><a href=\"https://www.boletinoficial.gba.gob.ar/\" title=\"\" target=\"_blank\">Boletín Oficial</a></p>
\t\t<p><a href=\"http://www.gba.gob.ar/registrodelaspersonas/pasaporte\" title=\"\" target=\"_blank\">Pasaporte</a></p>
\t\t<p><a href=\"http://www.gba.gob.ar/contrataciones\" target=\"_blank\">Contrataciones</a></p>
\t\t<p><a href=\"http://sistemas.gba.gov.ar/consulta/expedientes/\" target=\"_blank\" title=\"\">Expedientes</a></p>
\t\t<p><a href=\"http://www.gba.gob.ar/pliegosactividad/\" target=\"_blank\">Pliegos</a></p>
\t\t<p><a href=\"https://www.gba.gob.ar/asuntos_parlamentarios_y_electorales/datos_elecciones_2017\" target=\"_blank\">Elecciones</a></p>
\t\t<p><a href=\"http://www.gba.gov.ar/servicios\" target=\"_blank\">Ver Todos</a></p>
\t\t<p><a href=\"https://www.gba.gob.ar/Politicasdeprivacidad\" target=\"_blank\">Políticas de privacidad</a></p>
\t</div>
\t<div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 py-lg-none py-md-none py-sm-3 py-3\">
\t\t<h5>Áreas de Gobierno</h5>
\t\t<p><a href=\"https://www.bancoprovincia.com.ar/\" target=\"_blank\">Banco Provincia</a></p>
\t\t<p><a href=\"http://www.ips.gba.gob.ar/jubilaciones_pensiones.html\" target=\"_blank\">Beneficios Previsionales</a></p>
\t</div>
\t<div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 py-lg-none py-md-none py-sm-3 py-3\">
\t\t<h5>Uso Interno</h5>
\t\t<p><span><a href=\"https://mail.gba.gob.ar\" target=\"_blank\"> Webmail GBA <span class=\"color-white\">(nuevo)</span></a></span></p>
\t\t<p><a href=\"https://webmail.gba.gob.ar/\" target=\"_blank\">Webmail HORDE</a></p>
\t\t<p><a href=\"https://sistemas.gba.gob.ar/login.php\" target=\"_blank\" title=\"\">Sistemas</a></p>
\t\t<p><a href=\"https://www.gba.gob.ar/capitalhumano\" title=\"\" target=\"_blank\">Capital Humano</a></p>
\t\t<p><a href=\"http://www.gba.gob.ar/mesadeayuda\" target=\"_blank\">Mesa de Ayuda</a></p>
\t\t<p><a href=\"http://gdeba.gba.gob.ar/\" target=\"_blank\">GDEBA</a></p>
\t</div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layout/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row mx-0\">
\t<div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 py-lg-none py-md-none py-sm-3 py-3\">
\t\t<a href=\"https://www.gba.gob.ar/\" target=\"_blank\"><img alt=\"Logo provincia de Buenos Aires\" class=\"logo-footer\" src=\"{{ asset('images/logo_gba.svg') }}\" /></a>
\t\t<div class=\"redes-sociales\">
\t\t\t<p class=\"redes-sociales-title\">Redes Sociales</p>
\t\t\t<a target=\"_blank\" aria-label=\"Logo Facebook\" href=\"https://www.facebook.com/BAProvincia/\"><i class=\"fab fa-facebook-f\"></i></a>
\t\t\t<a target=\"_blank\" aria-label=\"Logo Twitter\" href=\"https://twitter.com/baprovincia\"><i class=\"fab fa-twitter\"></i></a>
\t\t</div>
\t</div>
\t<div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 py-lg-none py-md-none py-sm-3 py-3\">
\t\t<h5>Guía Servicios</h5>
\t\t<p><a href=\"https://portal.gba.gob.ar/web/portal/\" target=\"_blank\" >Portal de trámites</a></p>
\t\t<p><a href=\"http://www.gba.gob.ar/registrodelaspersonas\" target=\"_blank\">Registro de las Personas</a></p>
\t\t<p><a href=\"https://www.gba.gob.ar/seguridadvial\" target=\"_blank\">Seguridad Vial</a></p>
\t\t<p><a href=\"http://www.arba.gov.ar/\" target=\"_blank\" title=\"\">ARBA</a></p>
\t\t<p><a href=\"https://www.boletinoficial.gba.gob.ar/\" title=\"\" target=\"_blank\">Boletín Oficial</a></p>
\t\t<p><a href=\"http://www.gba.gob.ar/registrodelaspersonas/pasaporte\" title=\"\" target=\"_blank\">Pasaporte</a></p>
\t\t<p><a href=\"http://www.gba.gob.ar/contrataciones\" target=\"_blank\">Contrataciones</a></p>
\t\t<p><a href=\"http://sistemas.gba.gov.ar/consulta/expedientes/\" target=\"_blank\" title=\"\">Expedientes</a></p>
\t\t<p><a href=\"http://www.gba.gob.ar/pliegosactividad/\" target=\"_blank\">Pliegos</a></p>
\t\t<p><a href=\"https://www.gba.gob.ar/asuntos_parlamentarios_y_electorales/datos_elecciones_2017\" target=\"_blank\">Elecciones</a></p>
\t\t<p><a href=\"http://www.gba.gov.ar/servicios\" target=\"_blank\">Ver Todos</a></p>
\t\t<p><a href=\"https://www.gba.gob.ar/Politicasdeprivacidad\" target=\"_blank\">Políticas de privacidad</a></p>
\t</div>
\t<div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 py-lg-none py-md-none py-sm-3 py-3\">
\t\t<h5>Áreas de Gobierno</h5>
\t\t<p><a href=\"https://www.bancoprovincia.com.ar/\" target=\"_blank\">Banco Provincia</a></p>
\t\t<p><a href=\"http://www.ips.gba.gob.ar/jubilaciones_pensiones.html\" target=\"_blank\">Beneficios Previsionales</a></p>
\t</div>
\t<div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 py-lg-none py-md-none py-sm-3 py-3\">
\t\t<h5>Uso Interno</h5>
\t\t<p><span><a href=\"https://mail.gba.gob.ar\" target=\"_blank\"> Webmail GBA <span class=\"color-white\">(nuevo)</span></a></span></p>
\t\t<p><a href=\"https://webmail.gba.gob.ar/\" target=\"_blank\">Webmail HORDE</a></p>
\t\t<p><a href=\"https://sistemas.gba.gob.ar/login.php\" target=\"_blank\" title=\"\">Sistemas</a></p>
\t\t<p><a href=\"https://www.gba.gob.ar/capitalhumano\" title=\"\" target=\"_blank\">Capital Humano</a></p>
\t\t<p><a href=\"http://www.gba.gob.ar/mesadeayuda\" target=\"_blank\">Mesa de Ayuda</a></p>
\t\t<p><a href=\"http://gdeba.gba.gob.ar/\" target=\"_blank\">GDEBA</a></p>
\t</div>
</div>", "layout/footer.html.twig", "/home/lorena/LRJ/lrj/templates/layout/footer.html.twig");
    }
}
