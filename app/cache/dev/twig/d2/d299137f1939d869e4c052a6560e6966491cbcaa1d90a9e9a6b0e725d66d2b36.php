<?php

/* ::base.html.twig */
class __TwigTemplate_3de8ac96fcf519e9c34ab4d2527f4ec146b78679d74e22efd8c1ada953f95cea extends Twig_Template
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
        $__internal_44ca3971de98a73abbd0e3843c60c5644f57dfe4f707bd091a79fa13ffae94f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ca3971de98a73abbd0e3843c60c5644f57dfe4f707bd091a79fa13ffae94f0->enter($__internal_44ca3971de98a73abbd0e3843c60c5644f57dfe4f707bd091a79fa13ffae94f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_44ca3971de98a73abbd0e3843c60c5644f57dfe4f707bd091a79fa13ffae94f0->leave($__internal_44ca3971de98a73abbd0e3843c60c5644f57dfe4f707bd091a79fa13ffae94f0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ec5652c2c7a075d04e1c36bb903b3c621b2dfc16279813a55a49763a60c1e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec5652c2c7a075d04e1c36bb903b3c621b2dfc16279813a55a49763a60c1e75->enter($__internal_6ec5652c2c7a075d04e1c36bb903b3c621b2dfc16279813a55a49763a60c1e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6ec5652c2c7a075d04e1c36bb903b3c621b2dfc16279813a55a49763a60c1e75->leave($__internal_6ec5652c2c7a075d04e1c36bb903b3c621b2dfc16279813a55a49763a60c1e75_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0f293168bfb727342d6543d9e543dc1375b202cd9ece6c22492caf3ed4d036e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f293168bfb727342d6543d9e543dc1375b202cd9ece6c22492caf3ed4d036e9->enter($__internal_0f293168bfb727342d6543d9e543dc1375b202cd9ece6c22492caf3ed4d036e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0f293168bfb727342d6543d9e543dc1375b202cd9ece6c22492caf3ed4d036e9->leave($__internal_0f293168bfb727342d6543d9e543dc1375b202cd9ece6c22492caf3ed4d036e9_prof);

    }

    // line 8
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_5dd12ccb9735d7823e3b2092cfb3373e14043aca705505a73a68b8f2b641a18b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd12ccb9735d7823e3b2092cfb3373e14043aca705505a73a68b8f2b641a18b->enter($__internal_5dd12ccb9735d7823e3b2092cfb3373e14043aca705505a73a68b8f2b641a18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_5dd12ccb9735d7823e3b2092cfb3373e14043aca705505a73a68b8f2b641a18b->leave($__internal_5dd12ccb9735d7823e3b2092cfb3373e14043aca705505a73a68b8f2b641a18b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9fc587c80645e098ac3f26b24af0369a60a517388357423888d966f6589bfe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9fc587c80645e098ac3f26b24af0369a60a517388357423888d966f6589bfe2->enter($__internal_f9fc587c80645e098ac3f26b24af0369a60a517388357423888d966f6589bfe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f9fc587c80645e098ac3f26b24af0369a60a517388357423888d966f6589bfe2->leave($__internal_f9fc587c80645e098ac3f26b24af0369a60a517388357423888d966f6589bfe2_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fcfd96265d0a5fd4647dcc854ac5acf3500a9123c6f008fd6075e9665bbc4600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcfd96265d0a5fd4647dcc854ac5acf3500a9123c6f008fd6075e9665bbc4600->enter($__internal_fcfd96265d0a5fd4647dcc854ac5acf3500a9123c6f008fd6075e9665bbc4600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fcfd96265d0a5fd4647dcc854ac5acf3500a9123c6f008fd6075e9665bbc4600->leave($__internal_fcfd96265d0a5fd4647dcc854ac5acf3500a9123c6f008fd6075e9665bbc4600_prof);

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
</html>", "::base.html.twig", "C:\\xampp\\htdocs\\Repositorios\\sym\\app/Resources\\views/base.html.twig");
    }
}
