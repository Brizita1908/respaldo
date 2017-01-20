<?php

/* AsesoresSABundle:Default:listarTransaccion.html.twig */
class __TwigTemplate_4dbca1b1fa10d5ca53c7788ce06e4bcf3a4ce8e94b3b09a6ba5c8fab7fe5ae5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSABundle:Default:listarTransaccion.html.twig", 1);
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
        $__internal_db0adac8c2a3fd85932bf7d6740fbb9d0580e5de5ca3b344776199a74237dcd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db0adac8c2a3fd85932bf7d6740fbb9d0580e5de5ca3b344776199a74237dcd5->enter($__internal_db0adac8c2a3fd85932bf7d6740fbb9d0580e5de5ca3b344776199a74237dcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSABundle:Default:listarTransaccion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db0adac8c2a3fd85932bf7d6740fbb9d0580e5de5ca3b344776199a74237dcd5->leave($__internal_db0adac8c2a3fd85932bf7d6740fbb9d0580e5de5ca3b344776199a74237dcd5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2015bd074c75934a0e8f2dced2876550d117c5f68765e56d6238717dc3bf23ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2015bd074c75934a0e8f2dced2876550d117c5f68765e56d6238717dc3bf23ba->enter($__internal_2015bd074c75934a0e8f2dced2876550d117c5f68765e56d6238717dc3bf23ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Transacciones";
        
        $__internal_2015bd074c75934a0e8f2dced2876550d117c5f68765e56d6238717dc3bf23ba->leave($__internal_2015bd074c75934a0e8f2dced2876550d117c5f68765e56d6238717dc3bf23ba_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_49cb10868b449445448da1458579f13bcc49e246bfe3d7ad88f81a16849fd281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49cb10868b449445448da1458579f13bcc49e246bfe3d7ad88f81a16849fd281->enter($__internal_49cb10868b449445448da1458579f13bcc49e246bfe3d7ad88f81a16849fd281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3 class=\"text-center\">Lista de Transacciones</h3>
                <center><a class=\"btn btn-primary\" role=\"button\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pdf");
        echo "\">PDF</a></center>
                <div id=\"listT\" class=\"table-responsive\" style=\"overflow: auto; text-align: center\">
                    <table class=\"table table-condensed\">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>File</td>
                                <td>Vendedor</td>
                                <td>Cliente</td>
                                <td>Aseguradora</td>
                                <td>Movimiento</td>
                                <td>Ramo</td>
                                <td>Poliza</td>
                                <td>Anexo</td>
                                <td>Inicio Vigencia</td>
                                <td>Fin Vigencia</td>
                                <td>Valor asegurado</td>
                                <td>Tasa</td>
                                <td>Prima</td>
                                <td>%</td>
                                <td>Comision</td>
                                <td>Medio de Solicitud</td>
                                <td>Fecha de Solicitud</td>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["transacciones"] ?? $this->getContext($context, "transacciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
            // line 37
            echo "                                <tr>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["tr"], "idtransaccionanexo", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["tr"], "idanexo", array()), "idpoliza", array()), "idcliente", array()), "filecliente", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["tr"], "idtransaccion", array()), "idusuario", array()), "nombreusuario", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["tr"], "idanexo", array()), "idpoliza", array()), "idcliente", array()), "nombrecliente", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["tr"], "idanexo", array()), "idpoliza", array()), "idcliente", array()), "apellidocliente", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["tr"], "idanexo", array()), "idpoliza", array()), "idaseguradora", array()), "siglaaseguradora", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["tr"], "idtransaccion", array()), "idmovimiento", array()), "siglamovimiento", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["tr"], "idanexo", array()), "idramo", array()), "siglaramo", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["tr"], "idanexo", array()), "idpoliza", array()), "numeropoliza", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tr"], "idanexo", array()), "numeroanexo", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 47
            echo "</td>
                                    <td>";
            // line 48
            echo "</td>
                                    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tr"], "idanexo", array()), "valortotalaseguradoanexo", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["tr"], "idanexo", array()), "idpago", array()), "tasapago", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["tr"], "idanexo", array()), "idpago", array()), "primapago", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["tr"], "idanexo", array()), "idpago", array()), "porcentajecomisionpago", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["tr"], "idanexo", array()), "idpago", array()), "comisionpago", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tr"], "idtransaccion", array()), "mediosolicitud", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tr"], "idtransaccion", array()), "fechasolicitud", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_49cb10868b449445448da1458579f13bcc49e246bfe3d7ad88f81a16849fd281->leave($__internal_49cb10868b449445448da1458579f13bcc49e246bfe3d7ad88f81a16849fd281_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4ceb6e8ccd1475d924afeaafec79bfceec2c8712caf4a6b1d7fa3222cffab913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ceb6e8ccd1475d924afeaafec79bfceec2c8712caf4a6b1d7fa3222cffab913->enter($__internal_4ceb6e8ccd1475d924afeaafec79bfceec2c8712caf4a6b1d7fa3222cffab913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/js/transaccion/listarTransaccion.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/js/dataTables.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_4ceb6e8ccd1475d924afeaafec79bfceec2c8712caf4a6b1d7fa3222cffab913->leave($__internal_4ceb6e8ccd1475d924afeaafec79bfceec2c8712caf4a6b1d7fa3222cffab913_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSABundle:Default:listarTransaccion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 69,  198 => 68,  192 => 66,  186 => 65,  173 => 58,  164 => 55,  160 => 54,  156 => 53,  152 => 52,  148 => 51,  144 => 50,  140 => 49,  137 => 48,  134 => 47,  130 => 46,  126 => 45,  122 => 44,  118 => 43,  114 => 42,  108 => 41,  104 => 40,  100 => 39,  96 => 38,  93 => 37,  89 => 36,  60 => 10,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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

{% block title %}Lista de Transacciones{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3 class=\"text-center\">Lista de Transacciones</h3>
                <center><a class=\"btn btn-primary\" role=\"button\" href=\"{{ path('pdf') }}\">PDF</a></center>
                <div id=\"listT\" class=\"table-responsive\" style=\"overflow: auto; text-align: center\">
                    <table class=\"table table-condensed\">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>File</td>
                                <td>Vendedor</td>
                                <td>Cliente</td>
                                <td>Aseguradora</td>
                                <td>Movimiento</td>
                                <td>Ramo</td>
                                <td>Poliza</td>
                                <td>Anexo</td>
                                <td>Inicio Vigencia</td>
                                <td>Fin Vigencia</td>
                                <td>Valor asegurado</td>
                                <td>Tasa</td>
                                <td>Prima</td>
                                <td>%</td>
                                <td>Comision</td>
                                <td>Medio de Solicitud</td>
                                <td>Fecha de Solicitud</td>
                            </tr>
                        </thead>
                        <tbody>
                            {% for tr in transacciones %}
                                <tr>
                                    <td>{{ tr.idtransaccionanexo }}</td>
                                    <td>{{ tr.idanexo.idpoliza.idcliente.filecliente }}</td>
                                    <td>{{ tr.idtransaccion.idusuario.nombreusuario }}</td>
                                    <td>{{ tr.idanexo.idpoliza.idcliente.nombrecliente }} {{ tr.idanexo.idpoliza.idcliente.apellidocliente }}</td>
                                    <td>{{ tr.idanexo.idpoliza.idaseguradora.siglaaseguradora }}</td>
                                    <td>{{ tr.idtransaccion.idmovimiento.siglamovimiento }}</td>
                                    <td>{{ tr.idanexo.idramo.siglaramo }}</td>
                                    <td>{{ tr.idanexo.idpoliza.numeropoliza }}</td>
                                    <td>{{ tr.idanexo.numeroanexo }}</td>
                                    <td>{#{{ tr.idanexo.iniciovigenciaanexo }}#}</td>
                                    <td>{#{{ tr.idanexo.finvigenciaanexo }}#}</td>
                                    <td>{{ tr.idanexo.valortotalaseguradoanexo }}</td>
                                    <td>{{ tr.idanexo.idpago.tasapago }}</td>
                                    <td>{{ tr.idanexo.idpago.primapago }}</td>
                                    <td>{{ tr.idanexo.idpago.porcentajecomisionpago }}</td>
                                    <td>{{ tr.idanexo.idpago.comisionpago }}</td>
                                    <td>{{ tr.idtransaccion.mediosolicitud }}</td>
                                    <td>{{ tr.idtransaccion.fechasolicitud }}</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\" src=\"{{ asset('bundles/asesoressa/js/transaccion/listarTransaccion.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/asesoressa/js/dataTables.min.js') }}\"></script>
{% endblock %}", "AsesoresSABundle:Default:listarTransaccion.html.twig", "C:\\xampp\\htdocs\\respaldo\\src\\AsesoresSABundle/Resources/views/Default/listarTransaccion.html.twig");
    }
}
