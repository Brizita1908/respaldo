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
        $__internal_760742084272df3258ee95d3f1da62e2da551b41c1a16c0b973046dcc53db500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760742084272df3258ee95d3f1da62e2da551b41c1a16c0b973046dcc53db500->enter($__internal_760742084272df3258ee95d3f1da62e2da551b41c1a16c0b973046dcc53db500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSABundle:Default:listarTransaccion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_760742084272df3258ee95d3f1da62e2da551b41c1a16c0b973046dcc53db500->leave($__internal_760742084272df3258ee95d3f1da62e2da551b41c1a16c0b973046dcc53db500_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f75000a38630fa4a7ff785166d3d57d0683d81af1640aded7addf23954849c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75000a38630fa4a7ff785166d3d57d0683d81af1640aded7addf23954849c03->enter($__internal_f75000a38630fa4a7ff785166d3d57d0683d81af1640aded7addf23954849c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Transacciones";
        
        $__internal_f75000a38630fa4a7ff785166d3d57d0683d81af1640aded7addf23954849c03->leave($__internal_f75000a38630fa4a7ff785166d3d57d0683d81af1640aded7addf23954849c03_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da385cae557d8fc26ec8fe0a99489c73aa5d254219f0c44508f2b235e8a088b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da385cae557d8fc26ec8fe0a99489c73aa5d254219f0c44508f2b235e8a088b2->enter($__internal_da385cae557d8fc26ec8fe0a99489c73aa5d254219f0c44508f2b235e8a088b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3 class=\"text-center\">Lista de Transacciones</h3>
                <a class=\"link-btn\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pdf");
        echo "\">PDF</a>
                <div id=\"listT\" class=\"table-responsive\" style=\"overflow: auto; text-align: center\">
                        
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_da385cae557d8fc26ec8fe0a99489c73aa5d254219f0c44508f2b235e8a088b2->leave($__internal_da385cae557d8fc26ec8fe0a99489c73aa5d254219f0c44508f2b235e8a088b2_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4074b28d4fbfc6831c7cca93b29d1c4fc31335a3f8cd233ee59fa52d6080d87e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4074b28d4fbfc6831c7cca93b29d1c4fc31335a3f8cd233ee59fa52d6080d87e->enter($__internal_4074b28d4fbfc6831c7cca93b29d1c4fc31335a3f8cd233ee59fa52d6080d87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4074b28d4fbfc6831c7cca93b29d1c4fc31335a3f8cd233ee59fa52d6080d87e->leave($__internal_4074b28d4fbfc6831c7cca93b29d1c4fc31335a3f8cd233ee59fa52d6080d87e_prof);

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
                <a class=\"link-btn\" href=\"{{ path('pdf') }}\">PDF</a>
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
