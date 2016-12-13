<?php

/* ::layout.html.twig */
class __TwigTemplate_55fede7d12ff70ba1693cc8867ec5f6bfacf01a10f50048ff1855d94d6b45516 extends Twig_Template
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
        $__internal_576edfa0013b62e9e74e4aaf81560d1792b54fdd68e0993dfe3810e80d9f63a9 = $this->env->getExtension("native_profiler");
        $__internal_576edfa0013b62e9e74e4aaf81560d1792b54fdd68e0993dfe3810e80d9f63a9->enter($__internal_576edfa0013b62e9e74e4aaf81560d1792b54fdd68e0993dfe3810e80d9f63a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_576edfa0013b62e9e74e4aaf81560d1792b54fdd68e0993dfe3810e80d9f63a9->leave($__internal_576edfa0013b62e9e74e4aaf81560d1792b54fdd68e0993dfe3810e80d9f63a9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6aa6288228880054be9b7e2364e32696a79716a498c12b2667d274110d934c1a = $this->env->getExtension("native_profiler");
        $__internal_6aa6288228880054be9b7e2364e32696a79716a498c12b2667d274110d934c1a->enter($__internal_6aa6288228880054be9b7e2364e32696a79716a498c12b2667d274110d934c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenido Asesores SA";
        
        $__internal_6aa6288228880054be9b7e2364e32696a79716a498c12b2667d274110d934c1a->leave($__internal_6aa6288228880054be9b7e2364e32696a79716a498c12b2667d274110d934c1a_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d83b919f202134c688383967b1d0bf5fc5e3e934ba852eb67d7fd45577bf17bc = $this->env->getExtension("native_profiler");
        $__internal_d83b919f202134c688383967b1d0bf5fc5e3e934ba852eb67d7fd45577bf17bc->enter($__internal_d83b919f202134c688383967b1d0bf5fc5e3e934ba852eb67d7fd45577bf17bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asesoressa/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asesoressa/css/estilos.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asesoressa/css/dataTables.min.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d83b919f202134c688383967b1d0bf5fc5e3e934ba852eb67d7fd45577bf17bc->leave($__internal_d83b919f202134c688383967b1d0bf5fc5e3e934ba852eb67d7fd45577bf17bc_prof);

    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6a2f04af635c2277a5b0b2a32d184ae942de9ec4394a58108e6fdcef0fe75973 = $this->env->getExtension("native_profiler");
        $__internal_6a2f04af635c2277a5b0b2a32d184ae942de9ec4394a58108e6fdcef0fe75973->enter($__internal_6a2f04af635c2277a5b0b2a32d184ae942de9ec4394a58108e6fdcef0fe75973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        echo $this->env->getExtension('routing')->getPath("Bienvenida");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asesoressa/images/asesoresSA1.jpg"), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("listarAseguradora");
        echo "\">Aseguradoras</a></li>
\t            <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("listarCliente");
        echo "\">Clientes</a></li>
\t            <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("listarMovimiento");
        echo "\">Movimientos</a></li>
\t            <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("listarRamo");
        echo "\">Ramos</a></li>
                    <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("listarUsuario");
        echo "\">Usuarios</a></li>
\t          </ul>
\t        </li>
                <li class=\"dropdown\">
\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Transacción<span class=\"caret\"></span></a>
\t          <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("nuevaPoliza");
        echo "\">Registro de Transacción</a></li>
                    <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("verTransaccion");
        echo "\">Lista de Transacciones</a></li>
\t          </ul>
\t        </li>
                <li class=\"dropdown\">
\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Bienvenido, Usuario<span class=\"caret\"></span></a>
\t          <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("cerrarSesion");
        echo "\">Cerrar Sesión</a></li>
\t          </ul>
\t        </li>
\t      </ul>
\t    </div><!-- /.navbar-collapse -->
\t  </div><!-- /.container-fluid -->
\t</nav>
";
        
        $__internal_6a2f04af635c2277a5b0b2a32d184ae942de9ec4394a58108e6fdcef0fe75973->leave($__internal_6a2f04af635c2277a5b0b2a32d184ae942de9ec4394a58108e6fdcef0fe75973_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d6108344aab73ae29d942c90f071d097ddee505cb1845cbaab4f8b2debc6d7f = $this->env->getExtension("native_profiler");
        $__internal_8d6108344aab73ae29d942c90f071d097ddee505cb1845cbaab4f8b2debc6d7f->enter($__internal_8d6108344aab73ae29d942c90f071d097ddee505cb1845cbaab4f8b2debc6d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "\t
";
        
        $__internal_8d6108344aab73ae29d942c90f071d097ddee505cb1845cbaab4f8b2debc6d7f->leave($__internal_8d6108344aab73ae29d942c90f071d097ddee505cb1845cbaab4f8b2debc6d7f_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c2e5ac1e38d754d0b7ef48713a7c0616c712f1420c44cca960db7eef3d3ea888 = $this->env->getExtension("native_profiler");
        $__internal_c2e5ac1e38d754d0b7ef48713a7c0616c712f1420c44cca960db7eef3d3ea888->enter($__internal_c2e5ac1e38d754d0b7ef48713a7c0616c712f1420c44cca960db7eef3d3ea888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asesoressa/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asesoressa/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asesoressa/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asesoressa/js/additional-methods.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_c2e5ac1e38d754d0b7ef48713a7c0616c712f1420c44cca960db7eef3d3ea888->leave($__internal_c2e5ac1e38d754d0b7ef48713a7c0616c712f1420c44cca960db7eef3d3ea888_prof);

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
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}Bienvenido Asesores SA{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/asesoressa/css/bootstrap.min.css') }}" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/asesoressa/css/estilos.css') }}" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/asesoressa/css/dataTables.min.css') }}" />*/
/* {% endblock %}*/
/* */
/* */
/* {% block sidebar %}*/
/*     <nav class="navbar navbar-inverse">*/
/* 	  <div class="container-fluid">*/
/* 	    <!-- Brand and toggle get grouped for better mobile display -->*/
/* 	    <div class="navbar-header">*/
/* 	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/* 	        <span class="sr-only">Toggle navigation</span>*/
/* 	        <span class="icon-bar"></span>*/
/* 	        <span class="icon-bar"></span>*/
/* 	        <span class="icon-bar"></span>*/
/* 	      </button>*/
/* 	      <a class="navbar-brand" href="{{ path('Bienvenida') }}"><img src="{{ asset('bundles/asesoressa/images/asesoresSA1.jpg') }}" class="img-responsive img-thumbnail brand" alt="Asesoses SA Logo" /></a>*/
/* 	    </div>*/
/* 	*/
/* 	    <!-- Collect the nav links, forms, and other content for toggling -->*/
/* 	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/* 	      <ul class="nav navbar-nav navbar-right">*/
/* 	        <li class="dropdown">*/
/* 	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestión de Datos <span class="caret"></span></a>*/
/* 	          <ul class="dropdown-menu">*/
/*                     <li><a href="{{ path('listarAseguradora') }}">Aseguradoras</a></li>*/
/* 	            <li><a href="{{ path('listarCliente') }}">Clientes</a></li>*/
/* 	            <li><a href="{{ path('listarMovimiento') }}">Movimientos</a></li>*/
/* 	            <li><a href="{{ path('listarRamo') }}">Ramos</a></li>*/
/*                     <li><a href="{{ path('listarUsuario') }}">Usuarios</a></li>*/
/* 	          </ul>*/
/* 	        </li>*/
/*                 <li class="dropdown">*/
/* 	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Transacción<span class="caret"></span></a>*/
/* 	          <ul class="dropdown-menu">*/
/*                     <li><a href="{{ path('nuevaPoliza') }}">Registro de Transacción</a></li>*/
/*                     <li><a href="{{ path('verTransaccion') }}">Lista de Transacciones</a></li>*/
/* 	          </ul>*/
/* 	        </li>*/
/*                 <li class="dropdown">*/
/* 	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bienvenido, Usuario<span class="caret"></span></a>*/
/* 	          <ul class="dropdown-menu">*/
/*                     <li><a href="{{ path('cerrarSesion') }}">Cerrar Sesión</a></li>*/
/* 	          </ul>*/
/* 	        </li>*/
/* 	      </ul>*/
/* 	    </div><!-- /.navbar-collapse -->*/
/* 	  </div><!-- /.container-fluid -->*/
/* 	</nav>*/
/* {% endblock %}*/
/*         */
/* */
/* */
/* {% block body %}*/
/* 	*/
/* {% endblock %}*/
/* */
/*         */
/*         */
/*     */
/* {% block javascripts %}*/
/*     <script type="text/javascript" src="{{ asset('bundles/asesoressa/js/jquery.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('bundles/asesoressa/js/bootstrap.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('bundles/asesoressa/js/jquery.validate.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('bundles/asesoressa/js/additional-methods.js') }}"></script>*/
/* {% endblock %}*/
