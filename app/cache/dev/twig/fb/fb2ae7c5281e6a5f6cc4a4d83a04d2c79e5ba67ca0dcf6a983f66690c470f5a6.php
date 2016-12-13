<?php

/* AsesoresSABundle:Default:listarUsuarios.html.twig */
class __TwigTemplate_93b4d1c04f973e38930250b85fe56fb7c01de33012e896265fbdf5cea5024481 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSABundle:Default:listarUsuarios.html.twig", 1);
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
        $__internal_f74aac64a85cb314fa4d4bd09e666e5dcf48f8a3e87e23f2f3e260289b9fae23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74aac64a85cb314fa4d4bd09e666e5dcf48f8a3e87e23f2f3e260289b9fae23->enter($__internal_f74aac64a85cb314fa4d4bd09e666e5dcf48f8a3e87e23f2f3e260289b9fae23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSABundle:Default:listarUsuarios.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f74aac64a85cb314fa4d4bd09e666e5dcf48f8a3e87e23f2f3e260289b9fae23->leave($__internal_f74aac64a85cb314fa4d4bd09e666e5dcf48f8a3e87e23f2f3e260289b9fae23_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f0c5708124c68ea84d24cbdc59ee88b6322de651c4f4fcdb768784ff6aaa516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0c5708124c68ea84d24cbdc59ee88b6322de651c4f4fcdb768784ff6aaa516->enter($__internal_7f0c5708124c68ea84d24cbdc59ee88b6322de651c4f4fcdb768784ff6aaa516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Usuarios";
        
        $__internal_7f0c5708124c68ea84d24cbdc59ee88b6322de651c4f4fcdb768784ff6aaa516->leave($__internal_7f0c5708124c68ea84d24cbdc59ee88b6322de651c4f4fcdb768784ff6aaa516_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a704ec68318d1cf124c6f6d23498b614b7c8d711dd078b6b19a36894f9c9eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a704ec68318d1cf124c6f6d23498b614b7c8d711dd078b6b19a36894f9c9eea->enter($__internal_2a704ec68318d1cf124c6f6d23498b614b7c8d711dd078b6b19a36894f9c9eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-6 col-md-offset-3\">
                    <h3 class=\"text-center\">Usuarios</h3>
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <td>Nombre</td>
                                <td>Contraseña</td>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["usuarios"] ?? $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 20
            echo "                                <tr>
                                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombreusuario", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "contrasenausuario", array()), "html", null, true);
            echo "</td>
                                    <td><a class=\"link-btn\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editarUsuario", array("nombreusuario" => $this->getAttribute($context["usuario"], "nombreusuario", array()))), "html", null, true);
            echo "\">
                                            <span class=\"glyphicon glyphicon-erase\" aria-hidden=\"true\"></span>
                                        </a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                        </tbody>
                    </table>
                        
                    <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoUsuario");
        echo "\" class=\"btn btn-primary\" role=\"button\">Nuevo</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_2a704ec68318d1cf124c6f6d23498b614b7c8d711dd078b6b19a36894f9c9eea->leave($__internal_2a704ec68318d1cf124c6f6d23498b614b7c8d711dd078b6b19a36894f9c9eea_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSABundle:Default:listarUsuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 31,  94 => 28,  83 => 23,  79 => 22,  75 => 21,  72 => 20,  68 => 19,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Usuarios{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-6 col-md-offset-3\">
                    <h3 class=\"text-center\">Usuarios</h3>
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <td>Nombre</td>
                                <td>Contraseña</td>
                            </tr>
                        </thead>
                        <tbody>
                            {% for usuario in usuarios %}
                                <tr>
                                    <td>{{ usuario.nombreusuario }}</td>
                                    <td>{{ usuario.contrasenausuario }}</td>
                                    <td><a class=\"link-btn\" href=\"{{ path('editarUsuario', {'nombreusuario': usuario.nombreusuario}) }}\">
                                            <span class=\"glyphicon glyphicon-erase\" aria-hidden=\"true\"></span>
                                        </a></td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                        
                    <a href=\"{{ path('nuevoUsuario') }}\" class=\"btn btn-primary\" role=\"button\">Nuevo</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "AsesoresSABundle:Default:listarUsuarios.html.twig", "C:\\xampp\\htdocs\\Repositorios\\sym\\src\\AsesoresSABundle/Resources/views/Default/listarUsuarios.html.twig");
    }
}
