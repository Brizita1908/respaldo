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
        $__internal_740dca153ac0f56b79137546c1cbfbca4bdbc6bf3484f5d28394fad1067c2780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_740dca153ac0f56b79137546c1cbfbca4bdbc6bf3484f5d28394fad1067c2780->enter($__internal_740dca153ac0f56b79137546c1cbfbca4bdbc6bf3484f5d28394fad1067c2780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_740dca153ac0f56b79137546c1cbfbca4bdbc6bf3484f5d28394fad1067c2780->leave($__internal_740dca153ac0f56b79137546c1cbfbca4bdbc6bf3484f5d28394fad1067c2780_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9fcf165e89a5df1e69477907d366e9a97641252ff7fd688a500333a0a692784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9fcf165e89a5df1e69477907d366e9a97641252ff7fd688a500333a0a692784->enter($__internal_d9fcf165e89a5df1e69477907d366e9a97641252ff7fd688a500333a0a692784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d9fcf165e89a5df1e69477907d366e9a97641252ff7fd688a500333a0a692784->leave($__internal_d9fcf165e89a5df1e69477907d366e9a97641252ff7fd688a500333a0a692784_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_230bcde8f14cf1904ed7b272f26c9963caa12189ccc7a537491dbd880e4faed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230bcde8f14cf1904ed7b272f26c9963caa12189ccc7a537491dbd880e4faed3->enter($__internal_230bcde8f14cf1904ed7b272f26c9963caa12189ccc7a537491dbd880e4faed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_230bcde8f14cf1904ed7b272f26c9963caa12189ccc7a537491dbd880e4faed3->leave($__internal_230bcde8f14cf1904ed7b272f26c9963caa12189ccc7a537491dbd880e4faed3_prof);

    }

    // line 8
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9a3a73664f1e7ea1038e168a58154d1ef7cdd01ba07bcb913ff520e411adc7b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3a73664f1e7ea1038e168a58154d1ef7cdd01ba07bcb913ff520e411adc7b5->enter($__internal_9a3a73664f1e7ea1038e168a58154d1ef7cdd01ba07bcb913ff520e411adc7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_9a3a73664f1e7ea1038e168a58154d1ef7cdd01ba07bcb913ff520e411adc7b5->leave($__internal_9a3a73664f1e7ea1038e168a58154d1ef7cdd01ba07bcb913ff520e411adc7b5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdcc4a1778712ccb93b2bbe9889f1f3af88717fb42c65b5658bad58c089b2de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdcc4a1778712ccb93b2bbe9889f1f3af88717fb42c65b5658bad58c089b2de6->enter($__internal_bdcc4a1778712ccb93b2bbe9889f1f3af88717fb42c65b5658bad58c089b2de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bdcc4a1778712ccb93b2bbe9889f1f3af88717fb42c65b5658bad58c089b2de6->leave($__internal_bdcc4a1778712ccb93b2bbe9889f1f3af88717fb42c65b5658bad58c089b2de6_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fa68373100dee61bc681f77c14de1bbf8d0378277867a3955e864c21097ab42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa68373100dee61bc681f77c14de1bbf8d0378277867a3955e864c21097ab42f->enter($__internal_fa68373100dee61bc681f77c14de1bbf8d0378277867a3955e864c21097ab42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fa68373100dee61bc681f77c14de1bbf8d0378277867a3955e864c21097ab42f->leave($__internal_fa68373100dee61bc681f77c14de1bbf8d0378277867a3955e864c21097ab42f_prof);

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
