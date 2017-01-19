<?php

/* AsesoresSABundle:Default:cliente.html.twig */
class __TwigTemplate_9ac0f5e4fa6ea6075b3f2181b0f63fa9b39974d4505a098ab632351852ee34e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSABundle:Default:cliente.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_c8316eb9c0e592c49f483306d4e5ec63694b510780a84a5949e267bcf223bf5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8316eb9c0e592c49f483306d4e5ec63694b510780a84a5949e267bcf223bf5f->enter($__internal_c8316eb9c0e592c49f483306d4e5ec63694b510780a84a5949e267bcf223bf5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSABundle:Default:cliente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8316eb9c0e592c49f483306d4e5ec63694b510780a84a5949e267bcf223bf5f->leave($__internal_c8316eb9c0e592c49f483306d4e5ec63694b510780a84a5949e267bcf223bf5f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1731f4005325fbe49bba6ecb938d3ce231476c0a48b6ebd10ff48c62fbfcdea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1731f4005325fbe49bba6ecb938d3ce231476c0a48b6ebd10ff48c62fbfcdea->enter($__internal_a1731f4005325fbe49bba6ecb938d3ce231476c0a48b6ebd10ff48c62fbfcdea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Registro de Cliente";
        
        $__internal_a1731f4005325fbe49bba6ecb938d3ce231476c0a48b6ebd10ff48c62fbfcdea->leave($__internal_a1731f4005325fbe49bba6ecb938d3ce231476c0a48b6ebd10ff48c62fbfcdea_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa972182c2feeedff625a6c708a6cf257a61f7bb264aeb67675d415a9b933a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa972182c2feeedff625a6c708a6cf257a61f7bb264aeb67675d415a9b933a82->enter($__internal_fa972182c2feeedff625a6c708a6cf257a61f7bb264aeb67675d415a9b933a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-6 col-md-offset-3\">
                    <h3 class=\"text-center\">Registro de Cliente</h3>
                    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "filecliente", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "filecliente", array()), 'label', array("label_attr" => array("for" => "filecliente"), "label" => "File"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "filecliente", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "File")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombrecliente", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombrecliente", array()), 'label', array("label_attr" => array("for" => "nombrescliente"), "label" => "Nombres"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombrecliente", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombres")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "apellidocliente", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "apellidocliente", array()), 'label', array("label_attr" => array("for" => "apellidoscliente"), "label" => "Apellidos"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "apellidocliente", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Apellidos")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-btn\">
                        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-style", "id" => "btn-guardar")));
        echo "
                        <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listarCliente");
        echo "\" class=\"btn btn-primary\" role=\"button\">Ver Clientes</a>
                    </div>
                    ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_fa972182c2feeedff625a6c708a6cf257a61f7bb264aeb67675d415a9b933a82->leave($__internal_fa972182c2feeedff625a6c708a6cf257a61f7bb264aeb67675d415a9b933a82_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_259b647581cd4560763f89b467fcd521505c5475c453308f5d42434b147c0f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259b647581cd4560763f89b467fcd521505c5475c453308f5d42434b147c0f90->enter($__internal_259b647581cd4560763f89b467fcd521505c5475c453308f5d42434b147c0f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/js/validaciones/cliente.js"), "html", null, true);
        echo "\"></script>   
";
        
        $__internal_259b647581cd4560763f89b467fcd521505c5475c453308f5d42434b147c0f90->leave($__internal_259b647581cd4560763f89b467fcd521505c5475c453308f5d42434b147c0f90_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSABundle:Default:cliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 39,  136 => 38,  130 => 37,  117 => 31,  112 => 29,  108 => 28,  102 => 25,  98 => 24,  94 => 23,  88 => 20,  84 => 19,  80 => 18,  74 => 15,  70 => 14,  66 => 13,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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

{% block title %}Registro de Cliente{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-6 col-md-offset-3\">
                    <h3 class=\"text-center\">Registro de Cliente</h3>
                    {{ form_start(form)}}
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">{{form_errors(form.filecliente)}}</div>
                        <div class=\"form_label\">{{form_label(form.filecliente, 'File', {'label_attr': {'for': 'filecliente'}})}}</div>
                        <div class=\"form_input\">{{form_widget(form.filecliente, { 'attr': {'class': 'form-control', 'placeholder':'File'} })}}</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">{{form_errors(form.nombrecliente)}}</div>
                        <div class=\"form_label\">{{form_label(form.nombrecliente, 'Nombres', {'label_attr': {'for': 'nombrescliente'}})}}</div>
                        <div class=\"form_input\">{{form_widget(form.nombrecliente, { 'attr': {'class': 'form-control', 'placeholder':'Nombres'} })}}</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">{{form_errors(form.apellidocliente)}}</div>
                        <div class=\"form_label\">{{form_label(form.apellidocliente, 'Apellidos', {'label_attr': {'for': 'apellidoscliente'}})}}</div>
                        <div class=\"form_input\">{{form_widget(form.apellidocliente, { 'attr': {'class': 'form-control', 'placeholder':'Apellidos'} })}}</div>
                    </div>
                    <div class=\"form_bloque form-btn\">
                        {{form_widget(form.Guardar, { 'attr': {'class': 'btn btn-primary btn-style', 'id':'btn-guardar'} })}}
                        <a href=\"{{ path('listarCliente') }}\" class=\"btn btn-primary\" role=\"button\">Ver Clientes</a>
                    </div>
                    {{form_end(form)}}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{ asset('bundles/asesoressa/js/validaciones/cliente.js') }}\"></script>   
{% endblock %}", "AsesoresSABundle:Default:cliente.html.twig", "C:\\xampp\\htdocs\\respaldo\\src\\AsesoresSABundle/Resources/views/Default/cliente.html.twig");
    }
}
