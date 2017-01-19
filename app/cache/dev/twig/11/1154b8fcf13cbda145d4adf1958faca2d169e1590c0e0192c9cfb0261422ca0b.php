<?php

/* AsesoresSABundle:Default:listarUsuarios.html.twig */
class __TwigTemplate_9b774e257fa41b6411f2ed4c643a08e19ee5542bb2f3d7148380c4904cec9252 extends Twig_Template
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
        $__internal_bf4c3eb4eb5f9a36887115a27075f9148c8514b68226ff76ee74e3159b5d177e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4c3eb4eb5f9a36887115a27075f9148c8514b68226ff76ee74e3159b5d177e->enter($__internal_bf4c3eb4eb5f9a36887115a27075f9148c8514b68226ff76ee74e3159b5d177e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSABundle:Default:listarUsuarios.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf4c3eb4eb5f9a36887115a27075f9148c8514b68226ff76ee74e3159b5d177e->leave($__internal_bf4c3eb4eb5f9a36887115a27075f9148c8514b68226ff76ee74e3159b5d177e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd2b51332d05546fb3d22579f362c61855c7963def5b229a960503c29f97dce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2b51332d05546fb3d22579f362c61855c7963def5b229a960503c29f97dce0->enter($__internal_bd2b51332d05546fb3d22579f362c61855c7963def5b229a960503c29f97dce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Usuarios";
        
        $__internal_bd2b51332d05546fb3d22579f362c61855c7963def5b229a960503c29f97dce0->leave($__internal_bd2b51332d05546fb3d22579f362c61855c7963def5b229a960503c29f97dce0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_76ad2bb4c7c08e365502e8a123ec22a42052754c7d9886d8af95402d51c1172e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ad2bb4c7c08e365502e8a123ec22a42052754c7d9886d8af95402d51c1172e->enter($__internal_76ad2bb4c7c08e365502e8a123ec22a42052754c7d9886d8af95402d51c1172e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_76ad2bb4c7c08e365502e8a123ec22a42052754c7d9886d8af95402d51c1172e->leave($__internal_76ad2bb4c7c08e365502e8a123ec22a42052754c7d9886d8af95402d51c1172e_prof);

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
{% endblock %}", "AsesoresSABundle:Default:listarUsuarios.html.twig", "C:\\xampp\\htdocs\\respaldo\\src\\AsesoresSABundle/Resources/views/Default/listarUsuarios.html.twig");
    }
}
