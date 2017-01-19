<?php

/* AsesoresSABundle:InicioSesion:index.html.twig */
class __TwigTemplate_afb07dd9fd9a98cb76cf340ee757333d6cf2810b89d0954dea1465b9a1c4eb20 extends Twig_Template
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
        $__internal_c960bc2fc2bd6b0f661633e18539b3da8a176c0883872412ab782b12124339df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c960bc2fc2bd6b0f661633e18539b3da8a176c0883872412ab782b12124339df->enter($__internal_c960bc2fc2bd6b0f661633e18539b3da8a176c0883872412ab782b12124339df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSABundle:InicioSesion:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c960bc2fc2bd6b0f661633e18539b3da8a176c0883872412ab782b12124339df->leave($__internal_c960bc2fc2bd6b0f661633e18539b3da8a176c0883872412ab782b12124339df_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_91bca6950965524282dd65ff7f4f8fcd851fa7c9ccafb78622fc6dc10ba166db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91bca6950965524282dd65ff7f4f8fcd851fa7c9ccafb78622fc6dc10ba166db->enter($__internal_91bca6950965524282dd65ff7f4f8fcd851fa7c9ccafb78622fc6dc10ba166db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asesores S.A.";
        
        $__internal_91bca6950965524282dd65ff7f4f8fcd851fa7c9ccafb78622fc6dc10ba166db->leave($__internal_91bca6950965524282dd65ff7f4f8fcd851fa7c9ccafb78622fc6dc10ba166db_prof);

    }

    // line 3
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_10b72ff6648366fc1caf905bbecc22d79be23be0a74e86ce0c4c6158e1a397b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b72ff6648366fc1caf905bbecc22d79be23be0a74e86ce0c4c6158e1a397b6->enter($__internal_10b72ff6648366fc1caf905bbecc22d79be23be0a74e86ce0c4c6158e1a397b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_10b72ff6648366fc1caf905bbecc22d79be23be0a74e86ce0c4c6158e1a397b6->leave($__internal_10b72ff6648366fc1caf905bbecc22d79be23be0a74e86ce0c4c6158e1a397b6_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_123380606ae507083895540b6c2fa24a190307b1cdada048026a999a9e4794b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_123380606ae507083895540b6c2fa24a190307b1cdada048026a999a9e4794b1->enter($__internal_123380606ae507083895540b6c2fa24a190307b1cdada048026a999a9e4794b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_123380606ae507083895540b6c2fa24a190307b1cdada048026a999a9e4794b1->leave($__internal_123380606ae507083895540b6c2fa24a190307b1cdada048026a999a9e4794b1_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b36fda9242996687a38503388c239ef3efdd034b5aadfeb33c8035e852bf42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b36fda9242996687a38503388c239ef3efdd034b5aadfeb33c8035e852bf42f->enter($__internal_3b36fda9242996687a38503388c239ef3efdd034b5aadfeb33c8035e852bf42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/js/validaciones/inisesion.js"), "html", null, true);
        echo "\"></script>   
";
        
        $__internal_3b36fda9242996687a38503388c239ef3efdd034b5aadfeb33c8035e852bf42f->leave($__internal_3b36fda9242996687a38503388c239ef3efdd034b5aadfeb33c8035e852bf42f_prof);

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
{% endblock %}", "AsesoresSABundle:InicioSesion:index.html.twig", "C:\\xampp\\htdocs\\respaldo\\src\\AsesoresSABundle/Resources/views/InicioSesion/index.html.twig");
    }
}
