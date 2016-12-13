<?php

/* AsesoresSABundle:Default:listarTransaccion.html.twig */
class __TwigTemplate_b6be715cf975eb62acfb49d2d19b254f44f1074c072fbf72b5d636a5c6a25ee6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSABundle:Default:listarTransaccion.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31f9f82aa5e168353193bece23d56062a93bb139861f01e70b310f99d8670745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f9f82aa5e168353193bece23d56062a93bb139861f01e70b310f99d8670745->enter($__internal_31f9f82aa5e168353193bece23d56062a93bb139861f01e70b310f99d8670745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSABundle:Default:listarTransaccion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31f9f82aa5e168353193bece23d56062a93bb139861f01e70b310f99d8670745->leave($__internal_31f9f82aa5e168353193bece23d56062a93bb139861f01e70b310f99d8670745_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ce72f5e5ef7edb10109fd5b12a1d9b971a9bced8539354f6fa8c9b6172448e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce72f5e5ef7edb10109fd5b12a1d9b971a9bced8539354f6fa8c9b6172448e1->enter($__internal_6ce72f5e5ef7edb10109fd5b12a1d9b971a9bced8539354f6fa8c9b6172448e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Transacciones";
        
        $__internal_6ce72f5e5ef7edb10109fd5b12a1d9b971a9bced8539354f6fa8c9b6172448e1->leave($__internal_6ce72f5e5ef7edb10109fd5b12a1d9b971a9bced8539354f6fa8c9b6172448e1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_73f9d766a4c9a470e360a4a6d657890103d6187d8eff42eb9e10f75859b22b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f9d766a4c9a470e360a4a6d657890103d6187d8eff42eb9e10f75859b22b8f->enter($__internal_73f9d766a4c9a470e360a4a6d657890103d6187d8eff42eb9e10f75859b22b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3 class=\"text-center\">Lista de Transacciones</h3>
                <center><a class=\"btn btn-primary\" role=\"button\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pdf");
        echo "\">PDF</a></center>
                <div id=\"listT\" class=\"table-responsive\" style=\"overflow: auto; text-align: center\">
                        
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_73f9d766a4c9a470e360a4a6d657890103d6187d8eff42eb9e10f75859b22b8f->leave($__internal_73f9d766a4c9a470e360a4a6d657890103d6187d8eff42eb9e10f75859b22b8f_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_952f1964b2fe03bcd5282fbb3c54faa5e5f7a832ef15d0e7df83604f6a6740b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952f1964b2fe03bcd5282fbb3c54faa5e5f7a832ef15d0e7df83604f6a6740b0->enter($__internal_952f1964b2fe03bcd5282fbb3c54faa5e5f7a832ef15d0e7df83604f6a6740b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/js/transaccion/listarTransaccion.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/js/dataTables.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_952f1964b2fe03bcd5282fbb3c54faa5e5f7a832ef15d0e7df83604f6a6740b0->leave($__internal_952f1964b2fe03bcd5282fbb3c54faa5e5f7a832ef15d0e7df83604f6a6740b0_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSABundle:Default:listarTransaccion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 22,  87 => 21,  81 => 19,  75 => 18,  60 => 10,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layout.html.twig' %}

{% block title %}Lista de Transacciones{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3 class=\"text-center\">Lista de Transacciones</h3>
                <center><a class=\"btn btn-primary\" role=\"button\" href=\"{{ path('pdf') }}\">PDF</a></center>
                <div id=\"listT\" class=\"table-responsive\" style=\"overflow: auto; text-align: center\">
                        
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\" src=\"{{ asset('bundles/asesoressa/js/transaccion/listarTransaccion.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/asesoressa/js/dataTables.min.js') }}\"></script>
{% endblock %}", "AsesoresSABundle:Default:listarTransaccion.html.twig", "C:\\xampp\\htdocs\\Repositorios\\sym\\src\\AsesoresSABundle/Resources/views/Default/listarTransaccion.html.twig");
    }
}
