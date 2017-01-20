<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_db3084f471db0806f42cdfc8942bded20a3514e4ab092cc1eb43fc9a6d3a22a4 extends Twig_Template
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
        $__internal_cee23e446df7aab9c127482f4d9fe2b1b1d9f7f71d473e16c7950af6ff7a9c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee23e446df7aab9c127482f4d9fe2b1b1d9f7f71d473e16c7950af6ff7a9c01->enter($__internal_cee23e446df7aab9c127482f4d9fe2b1b1d9f7f71d473e16c7950af6ff7a9c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cee23e446df7aab9c127482f4d9fe2b1b1d9f7f71d473e16c7950af6ff7a9c01->leave($__internal_cee23e446df7aab9c127482f4d9fe2b1b1d9f7f71d473e16c7950af6ff7a9c01_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8537b062306491b89f0ed395adddb7e05e08800f599e95dd7ceac254e492fe4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8537b062306491b89f0ed395adddb7e05e08800f599e95dd7ceac254e492fe4f->enter($__internal_8537b062306491b89f0ed395adddb7e05e08800f599e95dd7ceac254e492fe4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8537b062306491b89f0ed395adddb7e05e08800f599e95dd7ceac254e492fe4f->leave($__internal_8537b062306491b89f0ed395adddb7e05e08800f599e95dd7ceac254e492fe4f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a30ad2fec50783c9598639a0dc8afb85a7e6e11418fc9689945c34a429a90d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a30ad2fec50783c9598639a0dc8afb85a7e6e11418fc9689945c34a429a90d3->enter($__internal_9a30ad2fec50783c9598639a0dc8afb85a7e6e11418fc9689945c34a429a90d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9a30ad2fec50783c9598639a0dc8afb85a7e6e11418fc9689945c34a429a90d3->leave($__internal_9a30ad2fec50783c9598639a0dc8afb85a7e6e11418fc9689945c34a429a90d3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a05fcf7a4f824d7eddf0295cfc63e06e41063bb69a7d486a05d86726aed28ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05fcf7a4f824d7eddf0295cfc63e06e41063bb69a7d486a05d86726aed28ab8->enter($__internal_a05fcf7a4f824d7eddf0295cfc63e06e41063bb69a7d486a05d86726aed28ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a05fcf7a4f824d7eddf0295cfc63e06e41063bb69a7d486a05d86726aed28ab8->leave($__internal_a05fcf7a4f824d7eddf0295cfc63e06e41063bb69a7d486a05d86726aed28ab8_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\respaldo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
