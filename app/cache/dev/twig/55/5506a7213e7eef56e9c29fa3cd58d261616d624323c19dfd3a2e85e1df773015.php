<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_24714ffda41b4bf9ba18207f0e12c081de8327d0c2926aa3fd336ee57745fa83 extends Twig_Template
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
        $__internal_9c493eb3fd1fd294fcc8e43cc7a170374a2b45cad492ee1da032048e614c014c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c493eb3fd1fd294fcc8e43cc7a170374a2b45cad492ee1da032048e614c014c->enter($__internal_9c493eb3fd1fd294fcc8e43cc7a170374a2b45cad492ee1da032048e614c014c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c493eb3fd1fd294fcc8e43cc7a170374a2b45cad492ee1da032048e614c014c->leave($__internal_9c493eb3fd1fd294fcc8e43cc7a170374a2b45cad492ee1da032048e614c014c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ee20063b83c4afccbdb87841084e36940a99ff32550758d0dc8db6cd15623f24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee20063b83c4afccbdb87841084e36940a99ff32550758d0dc8db6cd15623f24->enter($__internal_ee20063b83c4afccbdb87841084e36940a99ff32550758d0dc8db6cd15623f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ee20063b83c4afccbdb87841084e36940a99ff32550758d0dc8db6cd15623f24->leave($__internal_ee20063b83c4afccbdb87841084e36940a99ff32550758d0dc8db6cd15623f24_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c84fe09a4c1a86094228fb0c8ed21c14eb66db54aa51010dfdf5b8b9b2164af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c84fe09a4c1a86094228fb0c8ed21c14eb66db54aa51010dfdf5b8b9b2164af0->enter($__internal_c84fe09a4c1a86094228fb0c8ed21c14eb66db54aa51010dfdf5b8b9b2164af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c84fe09a4c1a86094228fb0c8ed21c14eb66db54aa51010dfdf5b8b9b2164af0->leave($__internal_c84fe09a4c1a86094228fb0c8ed21c14eb66db54aa51010dfdf5b8b9b2164af0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_82cb3dd71815e10f87c01623d8b3477a724573f623f806d7fbefa4ff3563c3a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82cb3dd71815e10f87c01623d8b3477a724573f623f806d7fbefa4ff3563c3a6->enter($__internal_82cb3dd71815e10f87c01623d8b3477a724573f623f806d7fbefa4ff3563c3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_82cb3dd71815e10f87c01623d8b3477a724573f623f806d7fbefa4ff3563c3a6->leave($__internal_82cb3dd71815e10f87c01623d8b3477a724573f623f806d7fbefa4ff3563c3a6_prof);

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
