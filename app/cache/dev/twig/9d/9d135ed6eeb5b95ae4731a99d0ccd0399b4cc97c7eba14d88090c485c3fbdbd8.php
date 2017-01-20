<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_13444184cfb3836f347a8c11cc1c34f329fc9796386486ba9acfeaebfd76a0e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6701317bdaf7f070fd38e7029c025d67aa5d3a8e7d6a68dd8676924a0c1c1067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6701317bdaf7f070fd38e7029c025d67aa5d3a8e7d6a68dd8676924a0c1c1067->enter($__internal_6701317bdaf7f070fd38e7029c025d67aa5d3a8e7d6a68dd8676924a0c1c1067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6701317bdaf7f070fd38e7029c025d67aa5d3a8e7d6a68dd8676924a0c1c1067->leave($__internal_6701317bdaf7f070fd38e7029c025d67aa5d3a8e7d6a68dd8676924a0c1c1067_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2040d070a0c92486fe4663dde9be026f960e79a743990467f11d23b263ef1190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2040d070a0c92486fe4663dde9be026f960e79a743990467f11d23b263ef1190->enter($__internal_2040d070a0c92486fe4663dde9be026f960e79a743990467f11d23b263ef1190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2040d070a0c92486fe4663dde9be026f960e79a743990467f11d23b263ef1190->leave($__internal_2040d070a0c92486fe4663dde9be026f960e79a743990467f11d23b263ef1190_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0793e21ea48473412faf4ea235555b82354d02164a25051a951525226fbc4b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0793e21ea48473412faf4ea235555b82354d02164a25051a951525226fbc4b96->enter($__internal_0793e21ea48473412faf4ea235555b82354d02164a25051a951525226fbc4b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0793e21ea48473412faf4ea235555b82354d02164a25051a951525226fbc4b96->leave($__internal_0793e21ea48473412faf4ea235555b82354d02164a25051a951525226fbc4b96_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_75c848fdb7fadadb1a3a30d2c9f158b4ffc6d09360c1ceeb405a4709900c4f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c848fdb7fadadb1a3a30d2c9f158b4ffc6d09360c1ceeb405a4709900c4f0e->enter($__internal_75c848fdb7fadadb1a3a30d2c9f158b4ffc6d09360c1ceeb405a4709900c4f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_75c848fdb7fadadb1a3a30d2c9f158b4ffc6d09360c1ceeb405a4709900c4f0e->leave($__internal_75c848fdb7fadadb1a3a30d2c9f158b4ffc6d09360c1ceeb405a4709900c4f0e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\respaldo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
