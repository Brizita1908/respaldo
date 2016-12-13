<?php

/* ::layout.html.twig */
class __TwigTemplate_728406e660d895db65a7c33d99f863d8adcadfdc8db889e79a90b1b87da60295 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aeee02ae878df0a2e5c950a3d1f274bf6c591676152348d36dc2bdcfe121df04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeee02ae878df0a2e5c950a3d1f274bf6c591676152348d36dc2bdcfe121df04->enter($__internal_aeee02ae878df0a2e5c950a3d1f274bf6c591676152348d36dc2bdcfe121df04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeee02ae878df0a2e5c950a3d1f274bf6c591676152348d36dc2bdcfe121df04->leave($__internal_aeee02ae878df0a2e5c950a3d1f274bf6c591676152348d36dc2bdcfe121df04_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f5fec1ce36dabe8de66bde3f132b103352db9143fc5a10ddca751e7f6b948de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f5fec1ce36dabe8de66bde3f132b103352db9143fc5a10ddca751e7f6b948de->enter($__internal_9f5fec1ce36dabe8de66bde3f132b103352db9143fc5a10ddca751e7f6b948de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenido Asesores SA";
        
        $__internal_9f5fec1ce36dabe8de66bde3f132b103352db9143fc5a10ddca751e7f6b948de->leave($__internal_9f5fec1ce36dabe8de66bde3f132b103352db9143fc5a10ddca751e7f6b948de_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e1f3c522656d990084e906d76f48e91bf6597b56eca191996a12800322efcab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f3c522656d990084e906d76f48e91bf6597b56eca191996a12800322efcab0->enter($__internal_e1f3c522656d990084e906d76f48e91bf6597b56eca191996a12800322efcab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/css/estilos.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/css/dataTables.min.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_e1f3c522656d990084e906d76f48e91bf6597b56eca191996a12800322efcab0->leave($__internal_e1f3c522656d990084e906d76f48e91bf6597b56eca191996a12800322efcab0_prof);

    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2e9d9a9c840d9af7af124cb7d1b97f978f52e64a64a6f512f90b3533aa209fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e9d9a9c840d9af7af124cb7d1b97f978f52e64a64a6f512f90b3533aa209fc6->enter($__internal_2e9d9a9c840d9af7af124cb7d1b97f978f52e64a64a6f512f90b3533aa209fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 13
        echo "    <nav class=\"navbar navbar-inverse\">
\t  <div class=\"container-fluid\">
\t    <!-- Brand and toggle get grouped for better mobile display -->
\t    <div class=\"navbar-header\">
\t      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
\t        <span class=\"sr-only\">Toggle navigation</span>
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t      </button>
\t      <a class=\"navbar-brand\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Bienvenida");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/images/asesoresSA1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-thumbnail brand\" alt=\"Asesoses SA Logo\" /></a>
\t    </div>
\t
\t    <!-- Collect the nav links, forms, and other content for toggling -->
\t    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t      <ul class=\"nav navbar-nav navbar-right\">
\t        <li class=\"dropdown\">
\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Gestión de Datos <span class=\"caret\"></span></a>
\t          <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listarAseguradora");
        echo "\">Aseguradoras</a></li>
\t            <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listarCliente");
        echo "\">Clientes</a></li>
\t            <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listarMovimiento");
        echo "\">Movimientos</a></li>
\t            <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listarRamo");
        echo "\">Ramos</a></li>
                    <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listarUsuario");
        echo "\">Usuarios</a></li>
\t          </ul>
\t        </li>
                <li class=\"dropdown\">
\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Transacción<span class=\"caret\"></span></a>
\t          <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevaPoliza");
        echo "\">Registro de Transacción</a></li>
                    <li><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verTransaccion");
        echo "\">Lista de Transacciones</a></li>
\t          </ul>
\t        </li>
                <li class=\"dropdown\">
\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Bienvenido, Usuario<span class=\"caret\"></span></a>
\t          <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cerrarSesion");
        echo "\">Cerrar Sesión</a></li>
\t          </ul>
\t        </li>
\t      </ul>
\t    </div><!-- /.navbar-collapse -->
\t  </div><!-- /.container-fluid -->
\t</nav>
";
        
        $__internal_2e9d9a9c840d9af7af124cb7d1b97f978f52e64a64a6f512f90b3533aa209fc6->leave($__internal_2e9d9a9c840d9af7af124cb7d1b97f978f52e64a64a6f512f90b3533aa209fc6_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_06d662eb3d30f95021030a1517a5e87e1126e86dcd32d09a9e4cd21e846f3438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d662eb3d30f95021030a1517a5e87e1126e86dcd32d09a9e4cd21e846f3438->enter($__internal_06d662eb3d30f95021030a1517a5e87e1126e86dcd32d09a9e4cd21e846f3438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "\t
";
        
        $__internal_06d662eb3d30f95021030a1517a5e87e1126e86dcd32d09a9e4cd21e846f3438->leave($__internal_06d662eb3d30f95021030a1517a5e87e1126e86dcd32d09a9e4cd21e846f3438_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_04cecf6b90fdc91590e3555439e796347aeac18bd1af53456c2ea7a0dda56928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04cecf6b90fdc91590e3555439e796347aeac18bd1af53456c2ea7a0dda56928->enter($__internal_04cecf6b90fdc91590e3555439e796347aeac18bd1af53456c2ea7a0dda56928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/js/additional-methods.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_04cecf6b90fdc91590e3555439e796347aeac18bd1af53456c2ea7a0dda56928->leave($__internal_04cecf6b90fdc91590e3555439e796347aeac18bd1af53456c2ea7a0dda56928_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 71,  188 => 70,  184 => 69,  179 => 68,  173 => 67,  165 => 61,  159 => 60,  144 => 49,  135 => 43,  131 => 42,  122 => 36,  118 => 35,  114 => 34,  110 => 33,  106 => 32,  92 => 23,  80 => 13,  74 => 12,  65 => 8,  61 => 7,  56 => 6,  50 => 5,  38 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block title %}Bienvenido Asesores SA{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/asesoressa/css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/asesoressa/css/estilos.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/asesoressa/css/dataTables.min.css') }}\" />
{% endblock %}


{% block sidebar %}
    <nav class=\"navbar navbar-inverse\">
\t  <div class=\"container-fluid\">
\t    <!-- Brand and toggle get grouped for better mobile display -->
\t    <div class=\"navbar-header\">
\t      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
\t        <span class=\"sr-only\">Toggle navigation</span>
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t      </button>
\t      <a class=\"navbar-brand\" href=\"{{ path('Bienvenida') }}\"><img src=\"{{ asset('bundles/asesoressa/images/asesoresSA1.jpg') }}\" class=\"img-responsive img-thumbnail brand\" alt=\"Asesoses SA Logo\" /></a>
\t    </div>
\t
\t    <!-- Collect the nav links, forms, and other content for toggling -->
\t    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t      <ul class=\"nav navbar-nav navbar-right\">
\t        <li class=\"dropdown\">
\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Gestión de Datos <span class=\"caret\"></span></a>
\t          <ul class=\"dropdown-menu\">
                    <li><a href=\"{{ path('listarAseguradora') }}\">Aseguradoras</a></li>
\t            <li><a href=\"{{ path('listarCliente') }}\">Clientes</a></li>
\t            <li><a href=\"{{ path('listarMovimiento') }}\">Movimientos</a></li>
\t            <li><a href=\"{{ path('listarRamo') }}\">Ramos</a></li>
                    <li><a href=\"{{ path('listarUsuario') }}\">Usuarios</a></li>
\t          </ul>
\t        </li>
                <li class=\"dropdown\">
\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Transacción<span class=\"caret\"></span></a>
\t          <ul class=\"dropdown-menu\">
                    <li><a href=\"{{ path('nuevaPoliza') }}\">Registro de Transacción</a></li>
                    <li><a href=\"{{ path('verTransaccion') }}\">Lista de Transacciones</a></li>
\t          </ul>
\t        </li>
                <li class=\"dropdown\">
\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Bienvenido, Usuario<span class=\"caret\"></span></a>
\t          <ul class=\"dropdown-menu\">
                    <li><a href=\"{{ path('cerrarSesion') }}\">Cerrar Sesión</a></li>
\t          </ul>
\t        </li>
\t      </ul>
\t    </div><!-- /.navbar-collapse -->
\t  </div><!-- /.container-fluid -->
\t</nav>
{% endblock %}
        


{% block body %}
\t
{% endblock %}

        
        
    
{% block javascripts %}
    <script type=\"text/javascript\" src=\"{{ asset('bundles/asesoressa/js/jquery.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/asesoressa/js/bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/asesoressa/js/jquery.validate.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/asesoressa/js/additional-methods.js') }}\"></script>
{% endblock %}", "::layout.html.twig", "C:\\xampp\\htdocs\\Repositorios\\sym\\app/Resources\\views/layout.html.twig");
    }
}
