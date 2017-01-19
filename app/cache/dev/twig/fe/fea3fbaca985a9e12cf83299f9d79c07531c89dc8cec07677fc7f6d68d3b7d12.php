<?php

/* AsesoresSABundle:Default:listarClientes.html.twig */
class __TwigTemplate_ebef7f04c53577914dee9a1283a6e9a9642f9a4b24947d1509b78931b0141509 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSABundle:Default:listarClientes.html.twig", 1);
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
        $__internal_192ff4f2960bef8f3ad92c848d05ca43399e94f9951c4f38bbfae63f8654a312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192ff4f2960bef8f3ad92c848d05ca43399e94f9951c4f38bbfae63f8654a312->enter($__internal_192ff4f2960bef8f3ad92c848d05ca43399e94f9951c4f38bbfae63f8654a312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSABundle:Default:listarClientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_192ff4f2960bef8f3ad92c848d05ca43399e94f9951c4f38bbfae63f8654a312->leave($__internal_192ff4f2960bef8f3ad92c848d05ca43399e94f9951c4f38bbfae63f8654a312_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2253e26b666a4f4e4e1b8f26054e20dbac5c808871020fe74ed02e8c2f17069a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2253e26b666a4f4e4e1b8f26054e20dbac5c808871020fe74ed02e8c2f17069a->enter($__internal_2253e26b666a4f4e4e1b8f26054e20dbac5c808871020fe74ed02e8c2f17069a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clientes";
        
        $__internal_2253e26b666a4f4e4e1b8f26054e20dbac5c808871020fe74ed02e8c2f17069a->leave($__internal_2253e26b666a4f4e4e1b8f26054e20dbac5c808871020fe74ed02e8c2f17069a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_68b0b26be6a299b6322ecbd69b3e7edb2130c4db24484d9f6fae33a9b05dfbc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b0b26be6a299b6322ecbd69b3e7edb2130c4db24484d9f6fae33a9b05dfbc4->enter($__internal_68b0b26be6a299b6322ecbd69b3e7edb2130c4db24484d9f6fae33a9b05dfbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-8 col-md-offset-2\">
                    <h3 class=\"text-center\">Clientes</h3>
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <td>File</td>
                                <td>Nombres</td>
                                <td>Apellidos</td>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clientes"] ?? $this->getContext($context, "clientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cli"]) {
            // line 21
            echo "                                <tr>
                                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "filecliente", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "nombrecliente", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "apellidocliente", array()), "html", null, true);
            echo "</td>
                                    <td><a class=\"link-btn\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editarCliente", array("filecliente" => $this->getAttribute($context["cli"], "filecliente", array()))), "html", null, true);
            echo "\">Modificar</a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cli'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                        </tbody>
                    </table>
                        
                    <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoCliente");
        echo "\" class=\"btn btn-primary\" role=\"button\">Nuevo</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_68b0b26be6a299b6322ecbd69b3e7edb2130c4db24484d9f6fae33a9b05dfbc4->leave($__internal_68b0b26be6a299b6322ecbd69b3e7edb2130c4db24484d9f6fae33a9b05dfbc4_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSABundle:Default:listarClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 31,  97 => 28,  88 => 25,  84 => 24,  80 => 23,  76 => 22,  73 => 21,  69 => 20,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Clientes{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-8 col-md-offset-2\">
                    <h3 class=\"text-center\">Clientes</h3>
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <td>File</td>
                                <td>Nombres</td>
                                <td>Apellidos</td>
                            </tr>
                        </thead>
                        <tbody>
                            {% for cli in clientes %}
                                <tr>
                                    <td>{{ cli.filecliente }}</td>
                                    <td>{{ cli.nombrecliente }}</td>
                                    <td>{{ cli.apellidocliente }}</td>
                                    <td><a class=\"link-btn\" href=\"{{ path('editarCliente', {'filecliente': cli.filecliente}) }}\">Modificar</a></td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                        
                    <a href=\"{{ path('nuevoCliente') }}\" class=\"btn btn-primary\" role=\"button\">Nuevo</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "AsesoresSABundle:Default:listarClientes.html.twig", "C:\\xampp\\htdocs\\respaldo\\src\\AsesoresSABundle/Resources/views/Default/listarClientes.html.twig");
    }
}
