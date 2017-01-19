<?php

/* AsesoresSABundle:Default:listarTransaccion.html.twig */
class __TwigTemplate_4dbca1b1fa10d5ca53c7788ce06e4bcf3a4ce8e94b3b09a6ba5c8fab7fe5ae5e extends Twig_Template
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
        $__internal_19605bed45827df05b3e8c76e4e6d07c554520ed2e2c087068a477d47efc63c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19605bed45827df05b3e8c76e4e6d07c554520ed2e2c087068a477d47efc63c2->enter($__internal_19605bed45827df05b3e8c76e4e6d07c554520ed2e2c087068a477d47efc63c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSABundle:Default:listarTransaccion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19605bed45827df05b3e8c76e4e6d07c554520ed2e2c087068a477d47efc63c2->leave($__internal_19605bed45827df05b3e8c76e4e6d07c554520ed2e2c087068a477d47efc63c2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b861eaf2c8ac66eb2761328a17d0b0f8680df4c0fba7c41e62064f8dc85f0d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b861eaf2c8ac66eb2761328a17d0b0f8680df4c0fba7c41e62064f8dc85f0d0c->enter($__internal_b861eaf2c8ac66eb2761328a17d0b0f8680df4c0fba7c41e62064f8dc85f0d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Transacciones";
        
        $__internal_b861eaf2c8ac66eb2761328a17d0b0f8680df4c0fba7c41e62064f8dc85f0d0c->leave($__internal_b861eaf2c8ac66eb2761328a17d0b0f8680df4c0fba7c41e62064f8dc85f0d0c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f334f5efedb50f14613e2e47c8330829d47e73d6ead46d399d5a6849dbe1916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f334f5efedb50f14613e2e47c8330829d47e73d6ead46d399d5a6849dbe1916->enter($__internal_1f334f5efedb50f14613e2e47c8330829d47e73d6ead46d399d5a6849dbe1916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1f334f5efedb50f14613e2e47c8330829d47e73d6ead46d399d5a6849dbe1916->leave($__internal_1f334f5efedb50f14613e2e47c8330829d47e73d6ead46d399d5a6849dbe1916_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_da989ab8d5d68e6789adab25e335fe96a9406ffe917bce82b37324056c3525ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da989ab8d5d68e6789adab25e335fe96a9406ffe917bce82b37324056c3525ba->enter($__internal_da989ab8d5d68e6789adab25e335fe96a9406ffe917bce82b37324056c3525ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_da989ab8d5d68e6789adab25e335fe96a9406ffe917bce82b37324056c3525ba->leave($__internal_da989ab8d5d68e6789adab25e335fe96a9406ffe917bce82b37324056c3525ba_prof);

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
{% endblock %}", "AsesoresSABundle:Default:listarTransaccion.html.twig", "C:\\xampp\\htdocs\\respaldo\\src\\AsesoresSABundle/Resources/views/Default/listarTransaccion.html.twig");
    }
}
