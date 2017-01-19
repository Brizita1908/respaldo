<?php

/* ::layout.html.twig */
class __TwigTemplate_e55ac49062de11c2674dfaf45fd63db7aa4cb3668e61478c19f8af31c1dc9557 extends Twig_Template
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
        $__internal_e0f7a0bfed1ae530acfbda18ee183d03c84261b2e2331714bafef55cb69f67cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f7a0bfed1ae530acfbda18ee183d03c84261b2e2331714bafef55cb69f67cf->enter($__internal_e0f7a0bfed1ae530acfbda18ee183d03c84261b2e2331714bafef55cb69f67cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0f7a0bfed1ae530acfbda18ee183d03c84261b2e2331714bafef55cb69f67cf->leave($__internal_e0f7a0bfed1ae530acfbda18ee183d03c84261b2e2331714bafef55cb69f67cf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_26ff64e4517374a6301e95bf312107afa06f8a65e387335b3e21377553b0c13a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ff64e4517374a6301e95bf312107afa06f8a65e387335b3e21377553b0c13a->enter($__internal_26ff64e4517374a6301e95bf312107afa06f8a65e387335b3e21377553b0c13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenido Asesores SA";
        
        $__internal_26ff64e4517374a6301e95bf312107afa06f8a65e387335b3e21377553b0c13a->leave($__internal_26ff64e4517374a6301e95bf312107afa06f8a65e387335b3e21377553b0c13a_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cce203df801ac136bae8acd70b06dcb9b3af3eaf4b680c200f7182ca3f325515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce203df801ac136bae8acd70b06dcb9b3af3eaf4b680c200f7182ca3f325515->enter($__internal_cce203df801ac136bae8acd70b06dcb9b3af3eaf4b680c200f7182ca3f325515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_cce203df801ac136bae8acd70b06dcb9b3af3eaf4b680c200f7182ca3f325515->leave($__internal_cce203df801ac136bae8acd70b06dcb9b3af3eaf4b680c200f7182ca3f325515_prof);

    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f8826a83e2b6cff8b710326bec74e25b53598074820472d23f8fceee30114223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8826a83e2b6cff8b710326bec74e25b53598074820472d23f8fceee30114223->enter($__internal_f8826a83e2b6cff8b710326bec74e25b53598074820472d23f8fceee30114223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_f8826a83e2b6cff8b710326bec74e25b53598074820472d23f8fceee30114223->leave($__internal_f8826a83e2b6cff8b710326bec74e25b53598074820472d23f8fceee30114223_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_dafc1cc5c782e81ac6f82abf6cee23c952b66017ce916833ee189a7282d8314a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dafc1cc5c782e81ac6f82abf6cee23c952b66017ce916833ee189a7282d8314a->enter($__internal_dafc1cc5c782e81ac6f82abf6cee23c952b66017ce916833ee189a7282d8314a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "\t
";
        
        $__internal_dafc1cc5c782e81ac6f82abf6cee23c952b66017ce916833ee189a7282d8314a->leave($__internal_dafc1cc5c782e81ac6f82abf6cee23c952b66017ce916833ee189a7282d8314a_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d83817022da2cc953f2866621b8c76fa82bad34dd54d198f17644a05c1ed169e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83817022da2cc953f2866621b8c76fa82bad34dd54d198f17644a05c1ed169e->enter($__internal_d83817022da2cc953f2866621b8c76fa82bad34dd54d198f17644a05c1ed169e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
";
        
        $__internal_d83817022da2cc953f2866621b8c76fa82bad34dd54d198f17644a05c1ed169e->leave($__internal_d83817022da2cc953f2866621b8c76fa82bad34dd54d198f17644a05c1ed169e_prof);

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
        return array (  200 => 73,  196 => 72,  192 => 71,  188 => 70,  184 => 69,  179 => 68,  173 => 67,  165 => 61,  159 => 60,  144 => 49,  135 => 43,  131 => 42,  122 => 36,  118 => 35,  114 => 34,  110 => 33,  106 => 32,  92 => 23,  80 => 13,  74 => 12,  65 => 8,  61 => 7,  56 => 6,  50 => 5,  38 => 3,  11 => 1,);
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
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
{% endblock %}", "::layout.html.twig", "C:\\xampp\\htdocs\\respaldo\\app/Resources\\views/layout.html.twig");
    }
}