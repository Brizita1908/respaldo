<?php

/* AsesoresSABundle:Default:listarAseguradora.html.twig */
class __TwigTemplate_7f877f97bb4c90785a4eb13cb4d96676930945e99d6d2ba226c27ee100ff0112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSABundle:Default:listarAseguradora.html.twig", 1);
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
        $__internal_f3818272f86caaf00dae231150b0f3923f83fa606dc5a7e80b4d70b642f3d255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3818272f86caaf00dae231150b0f3923f83fa606dc5a7e80b4d70b642f3d255->enter($__internal_f3818272f86caaf00dae231150b0f3923f83fa606dc5a7e80b4d70b642f3d255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSABundle:Default:listarAseguradora.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3818272f86caaf00dae231150b0f3923f83fa606dc5a7e80b4d70b642f3d255->leave($__internal_f3818272f86caaf00dae231150b0f3923f83fa606dc5a7e80b4d70b642f3d255_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f4343520f42fea35392af0b470102d4973eeaf6532fe8ada4a7db87e7253b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f4343520f42fea35392af0b470102d4973eeaf6532fe8ada4a7db87e7253b40->enter($__internal_4f4343520f42fea35392af0b470102d4973eeaf6532fe8ada4a7db87e7253b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Aseguradoras";
        
        $__internal_4f4343520f42fea35392af0b470102d4973eeaf6532fe8ada4a7db87e7253b40->leave($__internal_4f4343520f42fea35392af0b470102d4973eeaf6532fe8ada4a7db87e7253b40_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_83e136ac5148b4747b68473db83be7977ce82558d1b2544a2d8141edc6c32521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e136ac5148b4747b68473db83be7977ce82558d1b2544a2d8141edc6c32521->enter($__internal_83e136ac5148b4747b68473db83be7977ce82558d1b2544a2d8141edc6c32521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <h3 class=\"text-center\">Aseguradoras</h3>
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <td>Sigla</td>
                                <td>Nombre</td>
                                <td>Estado</td>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aseguradoras"] ?? $this->getContext($context, "aseguradoras")));
        foreach ($context['_seq'] as $context["_key"] => $context["aseg"]) {
            // line 21
            echo "                                <tr>
                                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["aseg"], "siglaaseguradora", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["aseg"], "nombreaseguradora", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["aseg"], "estadoaseguradora", array()), "html", null, true);
            echo "</td>
                                    <td><a class=\"link-btn\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editarAseguradora", array("siglaaseguradora" => $this->getAttribute($context["aseg"], "siglaaseguradora", array()))), "html", null, true);
            echo "\">Modificar</a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aseg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                        </tbody>
                    </table>
                        
                    <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevaAseguradora");
        echo "\" class=\"btn btn-primary\" role=\"button\">Nuevo</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_83e136ac5148b4747b68473db83be7977ce82558d1b2544a2d8141edc6c32521->leave($__internal_83e136ac5148b4747b68473db83be7977ce82558d1b2544a2d8141edc6c32521_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSABundle:Default:listarAseguradora.html.twig";
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

{% block title %}Aseguradoras{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <h3 class=\"text-center\">Aseguradoras</h3>
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <td>Sigla</td>
                                <td>Nombre</td>
                                <td>Estado</td>
                            </tr>
                        </thead>
                        <tbody>
                            {% for aseg in aseguradoras %}
                                <tr>
                                    <td>{{ aseg.siglaaseguradora }}</td>
                                    <td>{{ aseg.nombreaseguradora }}</td>
                                    <td>{{ aseg.estadoaseguradora }}</td>
                                    <td><a class=\"link-btn\" href=\"{{ path('editarAseguradora', {'siglaaseguradora': aseg.siglaaseguradora}) }}\">Modificar</a></td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                        
                    <a href=\"{{ path('nuevaAseguradora') }}\" class=\"btn btn-primary\" role=\"button\">Nuevo</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "AsesoresSABundle:Default:listarAseguradora.html.twig", "C:\\xampp\\htdocs\\Repositorios\\sym\\src\\AsesoresSABundle/Resources/views/Default/listarAseguradora.html.twig");
    }
}
