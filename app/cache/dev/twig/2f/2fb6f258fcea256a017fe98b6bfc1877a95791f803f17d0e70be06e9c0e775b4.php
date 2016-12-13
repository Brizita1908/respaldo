<?php

/* AsesoresSABundle:Default:movimiento.html.twig */
class __TwigTemplate_1c5efef9bd6ef7a769c5c9d45f30ed8c4fa0304da8add7e3b8353986c46fab70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSABundle:Default:movimiento.html.twig", 1);
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
        $__internal_24626c233fce3f37627170a4ee99bd79689d135d7d66fdb28b055e3b42a1f45b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24626c233fce3f37627170a4ee99bd79689d135d7d66fdb28b055e3b42a1f45b->enter($__internal_24626c233fce3f37627170a4ee99bd79689d135d7d66fdb28b055e3b42a1f45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSABundle:Default:movimiento.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24626c233fce3f37627170a4ee99bd79689d135d7d66fdb28b055e3b42a1f45b->leave($__internal_24626c233fce3f37627170a4ee99bd79689d135d7d66fdb28b055e3b42a1f45b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9ebc457804770ee09ff7035f7f43b55d358b7524b0cb5698405fcfe9e7e8e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ebc457804770ee09ff7035f7f43b55d358b7524b0cb5698405fcfe9e7e8e93->enter($__internal_a9ebc457804770ee09ff7035f7f43b55d358b7524b0cb5698405fcfe9e7e8e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Registro de Movimiento";
        
        $__internal_a9ebc457804770ee09ff7035f7f43b55d358b7524b0cb5698405fcfe9e7e8e93->leave($__internal_a9ebc457804770ee09ff7035f7f43b55d358b7524b0cb5698405fcfe9e7e8e93_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_67c7a07a4e065ce62873e34628ca37e48f73e8298ffb2cba56a7c39597622a8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c7a07a4e065ce62873e34628ca37e48f73e8298ffb2cba56a7c39597622a8e->enter($__internal_67c7a07a4e065ce62873e34628ca37e48f73e8298ffb2cba56a7c39597622a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-6 col-md-offset-3\">
                    <h3 class=\"text-center\">Registro de Movimiento</h3>
                    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "siglamovimiento", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "siglamovimiento", array()), 'label', array("label_attr" => array("for" => "sigla"), "label" => "Sigla"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "siglamovimiento", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Sigla")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombremovimiento", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombremovimiento", array()), 'label', array("label_attr" => array("for" => "nombre"), "label" => "Nombre"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombremovimiento", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estadomovimiento", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estadomovimiento", array()), 'label', array("label_attr" => array("for" => "estado"), "label" => "Estado"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estadomovimiento", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-btn\">
                        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-style", "id" => "btn-guardar")));
        echo "
                        <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listarMovimiento");
        echo "\" class=\"btn btn-primary\" role=\"button\">Ver Movimientos</a>
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
        
        $__internal_67c7a07a4e065ce62873e34628ca37e48f73e8298ffb2cba56a7c39597622a8e->leave($__internal_67c7a07a4e065ce62873e34628ca37e48f73e8298ffb2cba56a7c39597622a8e_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4fe651fa284edfa362658acf8f1376c4ae164e8af5138977df3b1b3ee27c871f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe651fa284edfa362658acf8f1376c4ae164e8af5138977df3b1b3ee27c871f->enter($__internal_4fe651fa284edfa362658acf8f1376c4ae164e8af5138977df3b1b3ee27c871f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/js/validaciones/movimiento.js"), "html", null, true);
        echo "\"></script>   
";
        
        $__internal_4fe651fa284edfa362658acf8f1376c4ae164e8af5138977df3b1b3ee27c871f->leave($__internal_4fe651fa284edfa362658acf8f1376c4ae164e8af5138977df3b1b3ee27c871f_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSABundle:Default:movimiento.html.twig";
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

{% block title %}Registro de Movimiento{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-6 col-md-offset-3\">
                    <h3 class=\"text-center\">Registro de Movimiento</h3>
                    {{ form_start(form)}}
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">{{form_errors(form.siglamovimiento)}}</div>
                        <div class=\"form_label\">{{form_label(form.siglamovimiento, 'Sigla', {'label_attr': {'for': 'sigla'}})}}</div>
                        <div class=\"form_input\">{{form_widget(form.siglamovimiento, { 'attr': {'class': 'form-control', 'placeholder':'Sigla'} })}}</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">{{form_errors(form.nombremovimiento)}}</div>
                        <div class=\"form_label\">{{form_label(form.nombremovimiento, 'Nombre', {'label_attr': {'for': 'nombre'}})}}</div>
                        <div class=\"form_input\">{{form_widget(form.nombremovimiento, { 'attr': {'class': 'form-control', 'placeholder':'Nombre'} })}}</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">{{form_errors(form.estadomovimiento)}}</div>
                        <div class=\"form_label\">{{form_label(form.estadomovimiento, 'Estado', {'label_attr': {'for': 'estado'}})}}</div>
                        <div class=\"form_input\">{{form_widget(form.estadomovimiento, { 'attr': {'class': 'form-control'} })}}</div>
                    </div>
                    <div class=\"form_bloque form-btn\">
                        {{form_widget(form.Guardar, { 'attr': {'class': 'btn btn-primary btn-style', 'id':'btn-guardar'} })}}
                        <a href=\"{{ path('listarMovimiento') }}\" class=\"btn btn-primary\" role=\"button\">Ver Movimientos</a>
                    </div>
                    {{form_end(form)}}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{ asset('bundles/asesoressa/js/validaciones/movimiento.js') }}\"></script>   
{% endblock %}", "AsesoresSABundle:Default:movimiento.html.twig", "C:\\xampp\\htdocs\\Repositorios\\sym\\src\\AsesoresSABundle/Resources/views/Default/movimiento.html.twig");
    }
}
