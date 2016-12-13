<?php

/* AsesoresSABundle:InicioSesion:index.html.twig */
class __TwigTemplate_77afbad132d8a19973709a41b811926502b5295fea0cbc2daed4f200ec5f76ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSABundle:InicioSesion:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6415bc61bcd45a9abcde674debbcc876a327b70c15ae1ef4732f4872669efd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6415bc61bcd45a9abcde674debbcc876a327b70c15ae1ef4732f4872669efd9->enter($__internal_e6415bc61bcd45a9abcde674debbcc876a327b70c15ae1ef4732f4872669efd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSABundle:InicioSesion:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6415bc61bcd45a9abcde674debbcc876a327b70c15ae1ef4732f4872669efd9->leave($__internal_e6415bc61bcd45a9abcde674debbcc876a327b70c15ae1ef4732f4872669efd9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_965c582aac5918e2892c739ce47259506730407d6a64cbf672efdfcab387bc8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965c582aac5918e2892c739ce47259506730407d6a64cbf672efdfcab387bc8a->enter($__internal_965c582aac5918e2892c739ce47259506730407d6a64cbf672efdfcab387bc8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asesores S.A.";
        
        $__internal_965c582aac5918e2892c739ce47259506730407d6a64cbf672efdfcab387bc8a->leave($__internal_965c582aac5918e2892c739ce47259506730407d6a64cbf672efdfcab387bc8a_prof);

    }

    // line 3
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a0e234a5b1e914904e88fe2f02e5c31a499b52f26b27fb98de54f5a8c85a413e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e234a5b1e914904e88fe2f02e5c31a499b52f26b27fb98de54f5a8c85a413e->enter($__internal_a0e234a5b1e914904e88fe2f02e5c31a499b52f26b27fb98de54f5a8c85a413e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_a0e234a5b1e914904e88fe2f02e5c31a499b52f26b27fb98de54f5a8c85a413e->leave($__internal_a0e234a5b1e914904e88fe2f02e5c31a499b52f26b27fb98de54f5a8c85a413e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d695df524c5744063fb6db4310bf9db675063fa521cc9d5ba14dd706dcd7dca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d695df524c5744063fb6db4310bf9db675063fa521cc9d5ba14dd706dcd7dca7->enter($__internal_d695df524c5744063fb6db4310bf9db675063fa521cc9d5ba14dd706dcd7dca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <div class=\"col-md-6 col-md-offset-3\">
                    <h1 class=\"text-center\">Bienvenido al Sistema</h1>
                    <h3 class=\"text-center\">Inicia Sesion</h3>
                    ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombreusuario", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombreusuario", array()), 'label', array("label_attr" => array("for" => "nombreusuario"), "label" => "Nombre de Usuario"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombreusuario", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre de Usuario")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contrasenausuario", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contrasenausuario", array()), 'label', array("label_attr" => array("for" => "contrasenausuario"), "label" => "Contraseña"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contrasenausuario", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Contraseña")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-btn\">
                        ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Ingresar", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-style", "id" => "btn-ingresar")));
        echo "
                    </div>
                    ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_d695df524c5744063fb6db4310bf9db675063fa521cc9d5ba14dd706dcd7dca7->leave($__internal_d695df524c5744063fb6db4310bf9db675063fa521cc9d5ba14dd706dcd7dca7_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_57ad7c9c9b70a43146142bbdf8eed2a41ac957097b09d022488fa69e9d7c0917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ad7c9c9b70a43146142bbdf8eed2a41ac957097b09d022488fa69e9d7c0917->enter($__internal_57ad7c9c9b70a43146142bbdf8eed2a41ac957097b09d022488fa69e9d7c0917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/js/validaciones/inisesion.js"), "html", null, true);
        echo "\"></script>   
";
        
        $__internal_57ad7c9c9b70a43146142bbdf8eed2a41ac957097b09d022488fa69e9d7c0917->leave($__internal_57ad7c9c9b70a43146142bbdf8eed2a41ac957097b09d022488fa69e9d7c0917_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSABundle:InicioSesion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 42,  145 => 41,  139 => 40,  126 => 33,  121 => 31,  115 => 28,  111 => 27,  107 => 26,  101 => 23,  97 => 22,  93 => 21,  88 => 19,  79 => 13,  73 => 10,  66 => 5,  60 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
{% block sidebar %}{% endblock %}
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
                <div class=\"col-md-6 col-md-offset-3\">
                    <h1 class=\"text-center\">Bienvenido al Sistema</h1>
                    <h3 class=\"text-center\">Inicia Sesion</h3>
                    {{ form_start(form)}}
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">{{form_errors(form.nombreusuario)}}</div>
                        <div class=\"form_label\">{{form_label(form.nombreusuario, 'Nombre de Usuario', {'label_attr': {'for': 'nombreusuario'}})}}</div>
                        <div class=\"form_input\">{{form_widget(form.nombreusuario, { 'attr': {'class': 'form-control', 'placeholder':'Nombre de Usuario'} })}}</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">{{form_errors(form.contrasenausuario)}}</div>
                        <div class=\"form_label\">{{form_label(form.contrasenausuario, 'Contraseña', {'label_attr': {'for': 'contrasenausuario'}})}}</div>
                        <div class=\"form_input\">{{form_widget(form.contrasenausuario, { 'attr': {'class': 'form-control', 'placeholder':'Contraseña'} })}}</div>
                    </div>
                    <div class=\"form_bloque form-btn\">
                        {{form_widget(form.Ingresar, { 'attr': {'class': 'btn btn-primary btn-style', 'id':'btn-ingresar'} })}}
                    </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{ asset('bundles/asesoressa/js/validaciones/inisesion.js') }}\"></script>   
{% endblock %}", "AsesoresSABundle:InicioSesion:index.html.twig", "C:\\xampp\\htdocs\\Repositorios\\sym\\src\\AsesoresSABundle/Resources/views/InicioSesion/index.html.twig");
    }
}
