<?php

/* AsesoresSABundle:Default:inicio.html.twig */
class __TwigTemplate_9bfc9f372f08b843dd6759748c33ebe15ca678907a27e2c43369e9c61219433c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSABundle:Default:inicio.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25ee379c395913fc934cd78df406a797dcd2b3b8642e86ea267a3c6e1256da19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ee379c395913fc934cd78df406a797dcd2b3b8642e86ea267a3c6e1256da19->enter($__internal_25ee379c395913fc934cd78df406a797dcd2b3b8642e86ea267a3c6e1256da19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSABundle:Default:inicio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25ee379c395913fc934cd78df406a797dcd2b3b8642e86ea267a3c6e1256da19->leave($__internal_25ee379c395913fc934cd78df406a797dcd2b3b8642e86ea267a3c6e1256da19_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c51ce8eed5c81742e66b0085aee374dfdfa5e56f7970ab675a12b7313e11c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c51ce8eed5c81742e66b0085aee374dfdfa5e56f7970ab675a12b7313e11c3e->enter($__internal_1c51ce8eed5c81742e66b0085aee374dfdfa5e56f7970ab675a12b7313e11c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asesores S.A.";
        
        $__internal_1c51ce8eed5c81742e66b0085aee374dfdfa5e56f7970ab675a12b7313e11c3e->leave($__internal_1c51ce8eed5c81742e66b0085aee374dfdfa5e56f7970ab675a12b7313e11c3e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b61fc534035f3ea26244d78b1fefabd297a9f603ba09907c793d5baec27087df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61fc534035f3ea26244d78b1fefabd297a9f603ba09907c793d5baec27087df->enter($__internal_b61fc534035f3ea26244d78b1fefabd297a9f603ba09907c793d5baec27087df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div>
                    <div class=\"col-md-4 img-logo\"><br>
                        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/images/asesoresI.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-thumbnail\" alt=\"Responsive image\" />
                    </div>
                    <div class=\"col-md-2 col-md-offset-6 img-logo\"><br>
                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/images/asesoresII.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-thumbnail\" alt=\"Responsive image\" />
                    </div>
                </div>
                <div class=\"col-md-10 col-md-offset-1\">
                    <center><h1>Bienvenidos al Sistema de Gestión de Transacciones Asesores S.A.</h1>
                        <h3>Su bróker de seguros... experto! </h3>
                    </center>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <p>Desarrollado por Arciniega Jessica y Borja Luis</p>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_b61fc534035f3ea26244d78b1fefabd297a9f603ba09907c793d5baec27087df->leave($__internal_b61fc534035f3ea26244d78b1fefabd297a9f603ba09907c793d5baec27087df_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSABundle:Default:inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  60 => 10,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
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

{% block title %}Asesores S.A.{% endblock %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div>
                    <div class=\"col-md-4 img-logo\"><br>
                        <img src=\"{{ asset('bundles/asesoressa/images/asesoresI.jpg') }}\" class=\"img-responsive img-thumbnail\" alt=\"Responsive image\" />
                    </div>
                    <div class=\"col-md-2 col-md-offset-6 img-logo\"><br>
                        <img src=\"{{ asset('bundles/asesoressa/images/asesoresII.jpg') }}\" class=\"img-responsive img-thumbnail\" alt=\"Responsive image\" />
                    </div>
                </div>
                <div class=\"col-md-10 col-md-offset-1\">
                    <center><h1>Bienvenidos al Sistema de Gestión de Transacciones Asesores S.A.</h1>
                        <h3>Su bróker de seguros... experto! </h3>
                    </center>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <p>Desarrollado por Arciniega Jessica y Borja Luis</p>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "AsesoresSABundle:Default:inicio.html.twig", "C:\\xampp\\htdocs\\Repositorios\\sym\\src\\AsesoresSABundle/Resources/views/Default/inicio.html.twig");
    }
}
