<?php

/* ::base.html.twig */
class __TwigTemplate_29b93bcd180c92a2d192d89a049b322120b3d515b14789b1812c0bd36c3d1fdb extends Twig_Template
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
        $__internal_e57585290ba9612f5aa7ba3203ae476ecde2f734225fdc8d135b86ffb03bb149 = $this->env->getExtension("native_profiler");
        $__internal_e57585290ba9612f5aa7ba3203ae476ecde2f734225fdc8d135b86ffb03bb149->enter($__internal_e57585290ba9612f5aa7ba3203ae476ecde2f734225fdc8d135b86ffb03bb149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_e57585290ba9612f5aa7ba3203ae476ecde2f734225fdc8d135b86ffb03bb149->leave($__internal_e57585290ba9612f5aa7ba3203ae476ecde2f734225fdc8d135b86ffb03bb149_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c02c4f823485217a3d71b67515597ef70ec960bc3c199998ed7867ddf161ef7 = $this->env->getExtension("native_profiler");
        $__internal_1c02c4f823485217a3d71b67515597ef70ec960bc3c199998ed7867ddf161ef7->enter($__internal_1c02c4f823485217a3d71b67515597ef70ec960bc3c199998ed7867ddf161ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1c02c4f823485217a3d71b67515597ef70ec960bc3c199998ed7867ddf161ef7->leave($__internal_1c02c4f823485217a3d71b67515597ef70ec960bc3c199998ed7867ddf161ef7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_99f28693ed0d4552bde8a392291f16b6f136ee66e389120f829736d9d36c0030 = $this->env->getExtension("native_profiler");
        $__internal_99f28693ed0d4552bde8a392291f16b6f136ee66e389120f829736d9d36c0030->enter($__internal_99f28693ed0d4552bde8a392291f16b6f136ee66e389120f829736d9d36c0030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_99f28693ed0d4552bde8a392291f16b6f136ee66e389120f829736d9d36c0030->leave($__internal_99f28693ed0d4552bde8a392291f16b6f136ee66e389120f829736d9d36c0030_prof);

    }

    // line 8
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6c5fdbb425730fb60947fd23d57f8fd397874b81b96875e0b2fc2a451ff6adb1 = $this->env->getExtension("native_profiler");
        $__internal_6c5fdbb425730fb60947fd23d57f8fd397874b81b96875e0b2fc2a451ff6adb1->enter($__internal_6c5fdbb425730fb60947fd23d57f8fd397874b81b96875e0b2fc2a451ff6adb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_6c5fdbb425730fb60947fd23d57f8fd397874b81b96875e0b2fc2a451ff6adb1->leave($__internal_6c5fdbb425730fb60947fd23d57f8fd397874b81b96875e0b2fc2a451ff6adb1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_61dc2dfd9a607dec2b88623b7a48e7114f730871994b3d5a093e031076c3d116 = $this->env->getExtension("native_profiler");
        $__internal_61dc2dfd9a607dec2b88623b7a48e7114f730871994b3d5a093e031076c3d116->enter($__internal_61dc2dfd9a607dec2b88623b7a48e7114f730871994b3d5a093e031076c3d116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_61dc2dfd9a607dec2b88623b7a48e7114f730871994b3d5a093e031076c3d116->leave($__internal_61dc2dfd9a607dec2b88623b7a48e7114f730871994b3d5a093e031076c3d116_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d3d2b082292fc18a96fe4cfb9a40bfad516062399eb35ccd5b7fb7b15f05c269 = $this->env->getExtension("native_profiler");
        $__internal_d3d2b082292fc18a96fe4cfb9a40bfad516062399eb35ccd5b7fb7b15f05c269->enter($__internal_d3d2b082292fc18a96fe4cfb9a40bfad516062399eb35ccd5b7fb7b15f05c269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d3d2b082292fc18a96fe4cfb9a40bfad516062399eb35ccd5b7fb7b15f05c269->leave($__internal_d3d2b082292fc18a96fe4cfb9a40bfad516062399eb35ccd5b7fb7b15f05c269_prof);

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
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         {% block sidebar %}{% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
