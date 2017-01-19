<?php

/* ::base.html.twig */
class __TwigTemplate_df1720be2075cddc405f90bdb215b50d8dd039a5cc9e197a78c63a0a2b3cdd0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7f86cfb5f3d8b7cc9f81b24c2b36f851649569a6d9cc56892fcda23aae64d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f86cfb5f3d8b7cc9f81b24c2b36f851649569a6d9cc56892fcda23aae64d85->enter($__internal_e7f86cfb5f3d8b7cc9f81b24c2b36f851649569a6d9cc56892fcda23aae64d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 8
        $this->displayBlock('sidebar', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>";
        
        $__internal_e7f86cfb5f3d8b7cc9f81b24c2b36f851649569a6d9cc56892fcda23aae64d85->leave($__internal_e7f86cfb5f3d8b7cc9f81b24c2b36f851649569a6d9cc56892fcda23aae64d85_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5a9dbb61a977106e6b7faa8dbeea371a9cefb0a2eaffc25373155a36ee2059a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a9dbb61a977106e6b7faa8dbeea371a9cefb0a2eaffc25373155a36ee2059a->enter($__internal_a5a9dbb61a977106e6b7faa8dbeea371a9cefb0a2eaffc25373155a36ee2059a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a5a9dbb61a977106e6b7faa8dbeea371a9cefb0a2eaffc25373155a36ee2059a->leave($__internal_a5a9dbb61a977106e6b7faa8dbeea371a9cefb0a2eaffc25373155a36ee2059a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ebf5a696b9fa0ac4fabaae53d1152c50deb49709d8accd8a2450353dfae90dd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf5a696b9fa0ac4fabaae53d1152c50deb49709d8accd8a2450353dfae90dd6->enter($__internal_ebf5a696b9fa0ac4fabaae53d1152c50deb49709d8accd8a2450353dfae90dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ebf5a696b9fa0ac4fabaae53d1152c50deb49709d8accd8a2450353dfae90dd6->leave($__internal_ebf5a696b9fa0ac4fabaae53d1152c50deb49709d8accd8a2450353dfae90dd6_prof);

    }

    // line 8
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_837e92d26fa3b6dd57ccf140935716f116ccce2f35dd3fed47bb6819f014b98d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837e92d26fa3b6dd57ccf140935716f116ccce2f35dd3fed47bb6819f014b98d->enter($__internal_837e92d26fa3b6dd57ccf140935716f116ccce2f35dd3fed47bb6819f014b98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_837e92d26fa3b6dd57ccf140935716f116ccce2f35dd3fed47bb6819f014b98d->leave($__internal_837e92d26fa3b6dd57ccf140935716f116ccce2f35dd3fed47bb6819f014b98d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fa002c0270baa0153db09aec5da13e5ef9141fef94df087920594aef7d5d57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa002c0270baa0153db09aec5da13e5ef9141fef94df087920594aef7d5d57d->enter($__internal_2fa002c0270baa0153db09aec5da13e5ef9141fef94df087920594aef7d5d57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2fa002c0270baa0153db09aec5da13e5ef9141fef94df087920594aef7d5d57d->leave($__internal_2fa002c0270baa0153db09aec5da13e5ef9141fef94df087920594aef7d5d57d_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c7f4fb6da6d8a9ec7e0af38a61acab4cfa7514c6b33a8ec0e2c16dea3d774c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f4fb6da6d8a9ec7e0af38a61acab4cfa7514c6b33a8ec0e2c16dea3d774c5d->enter($__internal_c7f4fb6da6d8a9ec7e0af38a61acab4cfa7514c6b33a8ec0e2c16dea3d774c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c7f4fb6da6d8a9ec7e0af38a61acab4cfa7514c6b33a8ec0e2c16dea3d774c5d->leave($__internal_c7f4fb6da6d8a9ec7e0af38a61acab4cfa7514c6b33a8ec0e2c16dea3d774c5d_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 12,  97 => 11,  86 => 8,  75 => 6,  63 => 5,  55 => 13,  52 => 12,  50 => 11,  46 => 9,  44 => 8,  39 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        {% block sidebar %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>", "::base.html.twig", "C:\\xampp\\htdocs\\respaldo\\app/Resources\\views/base.html.twig");
    }
}
