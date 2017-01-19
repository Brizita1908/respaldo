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
        $__internal_39bb6e590b2cdccd3ddd2492f30629bafef796060246e3a52e36cc61fa90cfb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39bb6e590b2cdccd3ddd2492f30629bafef796060246e3a52e36cc61fa90cfb2->enter($__internal_39bb6e590b2cdccd3ddd2492f30629bafef796060246e3a52e36cc61fa90cfb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39bb6e590b2cdccd3ddd2492f30629bafef796060246e3a52e36cc61fa90cfb2->leave($__internal_39bb6e590b2cdccd3ddd2492f30629bafef796060246e3a52e36cc61fa90cfb2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1d8bafe6e1ebee6034aae2185b562ba1a4b7d1d7bc1509cb49d8eeaf441a9ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8bafe6e1ebee6034aae2185b562ba1a4b7d1d7bc1509cb49d8eeaf441a9ee4->enter($__internal_1d8bafe6e1ebee6034aae2185b562ba1a4b7d1d7bc1509cb49d8eeaf441a9ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1d8bafe6e1ebee6034aae2185b562ba1a4b7d1d7bc1509cb49d8eeaf441a9ee4->leave($__internal_1d8bafe6e1ebee6034aae2185b562ba1a4b7d1d7bc1509cb49d8eeaf441a9ee4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_23be608f7e89dcd5bb625be2976ac9f35473c785c76cf5ea6ad83939712a6e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23be608f7e89dcd5bb625be2976ac9f35473c785c76cf5ea6ad83939712a6e89->enter($__internal_23be608f7e89dcd5bb625be2976ac9f35473c785c76cf5ea6ad83939712a6e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_23be608f7e89dcd5bb625be2976ac9f35473c785c76cf5ea6ad83939712a6e89->leave($__internal_23be608f7e89dcd5bb625be2976ac9f35473c785c76cf5ea6ad83939712a6e89_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_42b2f92da45985e7a2428c3716eff85ddd6a0ddfe3af34861e3d4b3ed8159157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b2f92da45985e7a2428c3716eff85ddd6a0ddfe3af34861e3d4b3ed8159157->enter($__internal_42b2f92da45985e7a2428c3716eff85ddd6a0ddfe3af34861e3d4b3ed8159157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_42b2f92da45985e7a2428c3716eff85ddd6a0ddfe3af34861e3d4b3ed8159157->leave($__internal_42b2f92da45985e7a2428c3716eff85ddd6a0ddfe3af34861e3d4b3ed8159157_prof);

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
