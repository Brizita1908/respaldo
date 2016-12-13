<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3901097124cc6469cb0005067ae2571a7eeead5ed59cf20813843112f3a66164 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce8eee05d756abb1fb930a08935fd196efc9e0e62c5c30d0cc77f26c2f19afa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8eee05d756abb1fb930a08935fd196efc9e0e62c5c30d0cc77f26c2f19afa1->enter($__internal_ce8eee05d756abb1fb930a08935fd196efc9e0e62c5c30d0cc77f26c2f19afa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce8eee05d756abb1fb930a08935fd196efc9e0e62c5c30d0cc77f26c2f19afa1->leave($__internal_ce8eee05d756abb1fb930a08935fd196efc9e0e62c5c30d0cc77f26c2f19afa1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e535caa239e4fbf9abdeef3ae63fc4fd3cf672d95371cad9a245e8d270c54a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e535caa239e4fbf9abdeef3ae63fc4fd3cf672d95371cad9a245e8d270c54a59->enter($__internal_e535caa239e4fbf9abdeef3ae63fc4fd3cf672d95371cad9a245e8d270c54a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e535caa239e4fbf9abdeef3ae63fc4fd3cf672d95371cad9a245e8d270c54a59->leave($__internal_e535caa239e4fbf9abdeef3ae63fc4fd3cf672d95371cad9a245e8d270c54a59_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebcba8d1c360074f8f8499b17de2834251452828451f15291be9b9a1824661cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebcba8d1c360074f8f8499b17de2834251452828451f15291be9b9a1824661cb->enter($__internal_ebcba8d1c360074f8f8499b17de2834251452828451f15291be9b9a1824661cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ebcba8d1c360074f8f8499b17de2834251452828451f15291be9b9a1824661cb->leave($__internal_ebcba8d1c360074f8f8499b17de2834251452828451f15291be9b9a1824661cb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_135b8f81f4e235f728af0e36b3ce7bed4e2f5fad7fbe409f60846511d0aab367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_135b8f81f4e235f728af0e36b3ce7bed4e2f5fad7fbe409f60846511d0aab367->enter($__internal_135b8f81f4e235f728af0e36b3ce7bed4e2f5fad7fbe409f60846511d0aab367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_135b8f81f4e235f728af0e36b3ce7bed4e2f5fad7fbe409f60846511d0aab367->leave($__internal_135b8f81f4e235f728af0e36b3ce7bed4e2f5fad7fbe409f60846511d0aab367_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\Repositorios\\sym\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
