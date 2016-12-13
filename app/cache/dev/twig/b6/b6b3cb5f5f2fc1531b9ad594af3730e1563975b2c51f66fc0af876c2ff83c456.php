<?php

/* AsesoresSABundle:Default:listarMovimiento.html.twig */
class __TwigTemplate_6526972ed4751250594f38c0773d04ce7adc8210a088fb556def9d63ca1bfff5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSABundle:Default:listarMovimiento.html.twig", 1);
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
        $__internal_7b7c6977cd3126d92e8918f548bec7d564ffda6813e5a7b0eed397d1f8d79e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b7c6977cd3126d92e8918f548bec7d564ffda6813e5a7b0eed397d1f8d79e4e->enter($__internal_7b7c6977cd3126d92e8918f548bec7d564ffda6813e5a7b0eed397d1f8d79e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSABundle:Default:listarMovimiento.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b7c6977cd3126d92e8918f548bec7d564ffda6813e5a7b0eed397d1f8d79e4e->leave($__internal_7b7c6977cd3126d92e8918f548bec7d564ffda6813e5a7b0eed397d1f8d79e4e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a50626615973023e5037ddaed0afdb24cf86bb22eb820eaaa912f4fc3ecbf9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a50626615973023e5037ddaed0afdb24cf86bb22eb820eaaa912f4fc3ecbf9a->enter($__internal_6a50626615973023e5037ddaed0afdb24cf86bb22eb820eaaa912f4fc3ecbf9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Movimientos";
        
        $__internal_6a50626615973023e5037ddaed0afdb24cf86bb22eb820eaaa912f4fc3ecbf9a->leave($__internal_6a50626615973023e5037ddaed0afdb24cf86bb22eb820eaaa912f4fc3ecbf9a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f855f4160eb9334ae10d8c34aa8b702d9c3736eb15ac7abd626f16a34b9c297e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f855f4160eb9334ae10d8c34aa8b702d9c3736eb15ac7abd626f16a34b9c297e->enter($__internal_f855f4160eb9334ae10d8c34aa8b702d9c3736eb15ac7abd626f16a34b9c297e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <h3 class=\"text-center\">Movimientos</h3>
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <td>Sigla</td>
                                <td>Estado</td>
                                <td>Nombre</td>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movimientos"] ?? $this->getContext($context, "movimientos")));
        foreach ($context['_seq'] as $context["_key"] => $context["mov"]) {
            // line 21
            echo "                                <tr>
                                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["mov"], "siglamovimiento", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["mov"], "nombremovimiento", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["mov"], "estadomovimiento", array()), "html", null, true);
            echo "</td>
                                    <td><a class=\"link-btn\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editarMovimiento", array("siglamovimiento" => $this->getAttribute($context["mov"], "siglamovimiento", array()))), "html", null, true);
            echo "\">Modificar</a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mov'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                        </tbody>
                    </table>
                        
                    <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoMovimiento");
        echo "\" class=\"btn btn-primary\" role=\"button\">Nuevo</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_f855f4160eb9334ae10d8c34aa8b702d9c3736eb15ac7abd626f16a34b9c297e->leave($__internal_f855f4160eb9334ae10d8c34aa8b702d9c3736eb15ac7abd626f16a34b9c297e_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSABundle:Default:listarMovimiento.html.twig";
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

{% block title %}Movimientos{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <h3 class=\"text-center\">Movimientos</h3>
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <td>Sigla</td>
                                <td>Estado</td>
                                <td>Nombre</td>
                            </tr>
                        </thead>
                        <tbody>
                            {% for mov in movimientos %}
                                <tr>
                                    <td>{{ mov.siglamovimiento }}</td>
                                    <td>{{ mov.nombremovimiento }}</td>
                                    <td>{{ mov.estadomovimiento }}</td>
                                    <td><a class=\"link-btn\" href=\"{{ path('editarMovimiento', {'siglamovimiento': mov.siglamovimiento}) }}\">Modificar</a></td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                        
                    <a href=\"{{ path('nuevoMovimiento') }}\" class=\"btn btn-primary\" role=\"button\">Nuevo</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "AsesoresSABundle:Default:listarMovimiento.html.twig", "C:\\xampp\\htdocs\\Repositorios\\sym\\src\\AsesoresSABundle/Resources/views/Default/listarMovimiento.html.twig");
    }
}
