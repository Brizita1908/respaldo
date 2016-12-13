<?php

/* AsesoresSABundle:Default:usuario.html.twig */
class __TwigTemplate_8a7425f528b18f88d8e2d835a472ec6d9242c8e94cc015f5251ef027210c2a67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSABundle:Default:usuario.html.twig", 1);
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
        $__internal_c6ea38b539d89b26032ed3056bfd0806b694f67100f650ce52db7641fe30ef12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ea38b539d89b26032ed3056bfd0806b694f67100f650ce52db7641fe30ef12->enter($__internal_c6ea38b539d89b26032ed3056bfd0806b694f67100f650ce52db7641fe30ef12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSABundle:Default:usuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6ea38b539d89b26032ed3056bfd0806b694f67100f650ce52db7641fe30ef12->leave($__internal_c6ea38b539d89b26032ed3056bfd0806b694f67100f650ce52db7641fe30ef12_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a8b8607838643e0acba945c6ace8ffb4f11454912b1c886ac5e111d01ff450c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8b8607838643e0acba945c6ace8ffb4f11454912b1c886ac5e111d01ff450c->enter($__internal_8a8b8607838643e0acba945c6ace8ffb4f11454912b1c886ac5e111d01ff450c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Registro de Usuarios";
        
        $__internal_8a8b8607838643e0acba945c6ace8ffb4f11454912b1c886ac5e111d01ff450c->leave($__internal_8a8b8607838643e0acba945c6ace8ffb4f11454912b1c886ac5e111d01ff450c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e00076cf4ac89305a48f0e2cfdec0128efceffe2f5510ba756f6491c83aca68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e00076cf4ac89305a48f0e2cfdec0128efceffe2f5510ba756f6491c83aca68->enter($__internal_0e00076cf4ac89305a48f0e2cfdec0128efceffe2f5510ba756f6491c83aca68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-6 col-md-offset-3\">
                    <h3 class=\"text-center\">Registro de Usuarios</h3>
                    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombreusuario", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombreusuario", array()), 'label', array("label_attr" => array("for" => "idusuario"), "label" => "Usuario"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombreusuario", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Usuario")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contrasenausuario", array()), "first", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contrasenausuario", array()), "first", array()), 'label', array("label_attr" => array("for" => "contrasenausuario"), "label" => "Contraseña"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contrasenausuario", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Contraseña")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contrasenausuario", array()), "second", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contrasenausuario", array()), "second", array()), 'label', array("label_attr" => array("for" => "contrasenausuario"), "label" => "Repita su Contraseña"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contrasenausuario", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Contraseña")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idperfil", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idperfil", array()), 'label', array("label_attr" => array("for" => "rolperfil"), "label" => "Rol de Usuario"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idperfil", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                        
                    </div>
                    <div class=\"form_bloque form-btn\">
                        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-style", "id" => "btn-guardar")));
        echo "
                        <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listarUsuario");
        echo "\" class=\"btn btn-primary\" role=\"button\">Ver Usuarios</a>
                    </div>
                    ";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_0e00076cf4ac89305a48f0e2cfdec0128efceffe2f5510ba756f6491c83aca68->leave($__internal_0e00076cf4ac89305a48f0e2cfdec0128efceffe2f5510ba756f6491c83aca68_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cc7144ab1411324ec12d803ad403cb2bd7c240a113c488b28b14790b2e6759e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7144ab1411324ec12d803ad403cb2bd7c240a113c488b28b14790b2e6759e7->enter($__internal_cc7144ab1411324ec12d803ad403cb2bd7c240a113c488b28b14790b2e6759e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/js/validaciones/usuario.js"), "html", null, true);
        echo "\"></script>   
";
        
        $__internal_cc7144ab1411324ec12d803ad403cb2bd7c240a113c488b28b14790b2e6759e7->leave($__internal_cc7144ab1411324ec12d803ad403cb2bd7c240a113c488b28b14790b2e6759e7_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSABundle:Default:usuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 46,  151 => 45,  145 => 44,  132 => 37,  127 => 35,  123 => 34,  116 => 30,  112 => 29,  108 => 28,  102 => 25,  98 => 24,  94 => 23,  88 => 20,  84 => 19,  80 => 18,  74 => 15,  70 => 14,  66 => 13,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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

{% block title %}Registro de Usuarios{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-6 col-md-offset-3\">
                    <h3 class=\"text-center\">Registro de Usuarios</h3>
                    {{ form_start(form)}}
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">{{form_errors(form.nombreusuario)}}</div>
                        <div class=\"form_label\">{{form_label(form.nombreusuario, 'Usuario', {'label_attr': {'for': 'idusuario'}})}}</div>
                        <div class=\"form_input\">{{form_widget(form.nombreusuario, { 'attr': {'class': 'form-control', 'placeholder':'Usuario'} })}}</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">{{form_errors(form.contrasenausuario.first)}}</div>
                        <div class=\"form_label\">{{form_label(form.contrasenausuario.first, 'Contraseña', {'label_attr': {'for': 'contrasenausuario'}})}}</div>
                        <div class=\"form_input\">{{form_widget(form.contrasenausuario.first, { 'attr': {'class': 'form-control', 'placeholder':'Contraseña'} })}}</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">{{form_errors(form.contrasenausuario.second)}}</div>
                        <div class=\"form_label\">{{form_label(form.contrasenausuario.second, 'Repita su Contraseña', {'label_attr': {'for': 'contrasenausuario'}})}}</div>
                        <div class=\"form_input\">{{form_widget(form.contrasenausuario.second, { 'attr': {'class': 'form-control', 'placeholder':'Contraseña'} })}}</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">{{form_errors(form.idperfil)}}</div>
                        <div class=\"form_label\">{{form_label(form.idperfil, 'Rol de Usuario', {'label_attr': {'for': 'rolperfil'}})}}</div>
                        <div class=\"form_input\">{{form_widget(form.idperfil, { 'attr': {'class': 'form-control'} })}}</div>
                        
                    </div>
                    <div class=\"form_bloque form-btn\">
                        {{form_widget(form.Guardar, { 'attr': {'class': 'btn btn-primary btn-style', 'id':'btn-guardar'} })}}
                        <a href=\"{{ path('listarUsuario') }}\" class=\"btn btn-primary\" role=\"button\">Ver Usuarios</a>
                    </div>
                    {{form_end(form)}}
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{ asset('bundles/asesoressa/js/validaciones/usuario.js') }}\"></script>   
{% endblock %}", "AsesoresSABundle:Default:usuario.html.twig", "C:\\xampp\\htdocs\\Repositorios\\sym\\src\\AsesoresSABundle/Resources/views/Default/usuario.html.twig");
    }
}
