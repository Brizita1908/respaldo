<?php

/* AsesoresSABundle:Default:transaccion.html.twig */
class __TwigTemplate_751a94da36008718289b82ac74fe6f9eae59c1b4736e28133735050fe4cced7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSABundle:Default:transaccion.html.twig", 1);
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
        $__internal_e35b42e845a26f24529371556a8d10c622fc4a6f46bb56afabd0d2e276a08156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35b42e845a26f24529371556a8d10c622fc4a6f46bb56afabd0d2e276a08156->enter($__internal_e35b42e845a26f24529371556a8d10c622fc4a6f46bb56afabd0d2e276a08156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSABundle:Default:transaccion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e35b42e845a26f24529371556a8d10c622fc4a6f46bb56afabd0d2e276a08156->leave($__internal_e35b42e845a26f24529371556a8d10c622fc4a6f46bb56afabd0d2e276a08156_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3192114ac5a77d4863a95a68c34be7deef2325e8cc30515fa2dc3269289a31e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3192114ac5a77d4863a95a68c34be7deef2325e8cc30515fa2dc3269289a31e->enter($__internal_c3192114ac5a77d4863a95a68c34be7deef2325e8cc30515fa2dc3269289a31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Registro de Transacción";
        
        $__internal_c3192114ac5a77d4863a95a68c34be7deef2325e8cc30515fa2dc3269289a31e->leave($__internal_c3192114ac5a77d4863a95a68c34be7deef2325e8cc30515fa2dc3269289a31e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b336fc532648b0e2ea1802315989384dc17876a6435dbc5c4c5c0512bfde1071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b336fc532648b0e2ea1802315989384dc17876a6435dbc5c4c5c0512bfde1071->enter($__internal_b336fc532648b0e2ea1802315989384dc17876a6435dbc5c4c5c0512bfde1071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-8 col-md-offset-2\">
                    <h3 class=\"text-center\">Registro de Transacción</h3>
                    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formPoliza"] ?? $this->getContext($context, "formPoliza")), 'form_start');
        echo "
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPoliza"] ?? $this->getContext($context, "formPoliza")), "numeropoliza", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPoliza"] ?? $this->getContext($context, "formPoliza")), "numeropoliza", array()), 'label', array("label_attr" => array("for" => "poliza_numeropoliza"), "label" => "Número de Poliza : "));
        echo "</div>
                        <div class=\"form_input\">";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPoliza"] ?? $this->getContext($context, "formPoliza")), "numeropoliza", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingrese un número de poliza para registrar o consultar.")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group Pvisible\">
                        <div class=\"form_error\">";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPoliza"] ?? $this->getContext($context, "formPoliza")), "idcliente", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPoliza"] ?? $this->getContext($context, "formPoliza")), "idcliente", array()), 'label', array("label_attr" => array("for" => "Cliente"), "label" => "Cliente : "));
        echo "</div>
                        <div class=\"form_input\">";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPoliza"] ?? $this->getContext($context, "formPoliza")), "idcliente", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group Pvisible\">
                        <div class=\"form_error\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPoliza"] ?? $this->getContext($context, "formPoliza")), "idaseguradora", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPoliza"] ?? $this->getContext($context, "formPoliza")), "idaseguradora", array()), 'label', array("label_attr" => array("for" => "Movimiento"), "label" => "Aseguradora : "));
        echo "</div>
                        <div class=\"form_input\">";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPoliza"] ?? $this->getContext($context, "formPoliza")), "idaseguradora", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Movimiento")));
        echo "</div>
                    </div>
                    ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formPoliza"] ?? $this->getContext($context, "formPoliza")), 'form_end');
        echo "
                    <div class=\"form-btn Pvisible\">
                        <button class=\"btn btn-primary btnGuardaPoliza\">Registrar Póliza</button>
                    </div>
                    <br>
                    <div class=\"form_bloque form-group Pvisible table-responsive\" id=\"tabla_anexos\">
                    </div>
                    <!-- Button trigger modal -->
                    <button type=\"button\" class=\"btn btn-primary btn-lg Pvisible btnAnexo\" data-toggle=\"modal\" data-target=\"#ModalAnexo\">
                      Nuevo Anexo
                    </button>
                    <!-- Modal Confirmacion Poliza -->
                    <div class=\"modal fade\" id=\"modalConfirmacionPoliza\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                      <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                            <center style=\"color:red\"><h4 class=\"modal-title\">Confirmación de Registro de Poliza</h4></center>
                          </div>
                          <div class=\"modal-body\" id=\"contenidoModalConfirmacionPoliza\">
                          </div>
                          <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
                            <button type=\"button\" class=\"btn btn-primary btnConfirmaGuardaPoliza\">Registrar Poliza</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal Confirmacion Anexo -->
                    <div class=\"modal fade\" id=\"modalConfirmacionAnexo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                      <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                            <center style=\"color:red\"><h4 class=\"modal-title\">Confirmación de Registro de Anexo</h4></center>
                          </div>
                          <div class=\"modal-body\" id=\"contenidoModalConfirmacionAnexo\">
                          </div>
                          <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default btnCancelarAnexo\" data-dismiss=\"modal\">Cerrar</button>
                            <button type=\"button\" class=\"btn btn-primary btnConfirmaGuardaAnexo\">Registrar Anexo</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal Anexo -->
                    <div class=\"modal fade\" id=\"ModalAnexo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                      <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                            <h4 class=\"modal-title\" id=\"myModalLabel\">Registro de Nuevo Anexo</h4>
                          </div>
                          <div class=\"modal-body\">
                            ";
        // line 81
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), 'form_start');
        echo "
                            <div class=\"form_bloque form-group\">
                                <div class=\"form_error\">";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "numeroanexo", array()), 'errors');
        echo "</div>
                                <div class=\"form_label\">";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "numeroanexo", array()), 'label', array("label_attr" => array("for" => "Vendedor"), "label" => "Número Anexo"));
        echo "</div>
                                <div class=\"form_input\">";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "numeroanexo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numero de Anexo")));
        echo "</div>
                            </div>
                            <div class=\"form_bloque form-group\">
                                <div class=\"form_error\">";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "idramo", array()), 'errors');
        echo "</div>
                                <div class=\"form_label\">";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "idramo", array()), 'label', array("label_attr" => array("for" => "Vendedor"), "label" => "Ramo"));
        echo "</div>
                                <div class=\"form_input\">";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "idramo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Vendedor")));
        echo "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form_bloque form-group\">
                                            <div class=\"form_error\">";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "iniciovigenciaanexo", array()), 'errors');
        echo "</div>
                                            <div class=\"form_label\">";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "iniciovigenciaanexo", array()), 'label', array("label_attr" => array("for" => "Vendedor"), "label" => "Inicio Vigencia"));
        echo "</div>
                                            <div class=\"form_input\">";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "iniciovigenciaanexo", array()), 'widget');
        echo "</div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form_bloque form-group\">
                                            <div class=\"form_error\">";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "finvigenciaanexo", array()), 'errors');
        echo "</div>
                                            <div class=\"form_label\">";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "finvigenciaanexo", array()), 'label', array("label_attr" => array("for" => "Vendedor"), "label" => "Fin Vigencia"));
        echo "</div>
                                            <div class=\"form_input\">";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "finvigenciaanexo", array()), 'widget');
        echo "</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form_bloque form-group\">
                                            <div class=\"form_error\">";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "valortotalaseguradoanexo", array()), 'errors');
        echo "</div>
                                            <div class=\"form_label\">";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "valortotalaseguradoanexo", array()), 'label', array("label_attr" => array("for" => "Vendedor"), "label" => "Valor"));
        echo "</div>
                                            <div class=\"form_input\">";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "valortotalaseguradoanexo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Valor Total")));
        echo "</div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\"></div>
                                </div>
                            </div>
                            ";
        // line 122
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), 'form_end');
        echo "
                            <h4>Información de Pago</h4>
                            ";
        // line 124
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formPago"] ?? $this->getContext($context, "formPago")), 'form_start');
        echo "
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form_bloque form-group\">
                                            <div class=\"form_error\">";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "tasapago", array()), 'errors');
        echo "</div>
                                            <div class=\"form_label\">";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "tasapago", array()), 'label', array("label_attr" => array("for" => "Vendedor"), "label" => "Tasa Pago"));
        echo "</div>
                                            <div class=\"form_input\">";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "tasapago", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Tasa de Pago")));
        echo "</div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\"></div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form_bloque form-group\">
                                            <div class=\"form_error\">";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "metodopago", array()), 'errors');
        echo "</div>
                                            <div class=\"form_label\">";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "metodopago", array()), 'label', array("label_attr" => array("for" => "Vendedor"), "label" => "Metodo de Pago"));
        echo "</div>
                                            <div class=\"form_input\">";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "metodopago", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Metodo de Pago")));
        echo "</div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form_bloque form-group\">
                                            <div class=\"form_error\">";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "numerocuotas", array()), 'errors');
        echo "</div>
                                            <div class=\"form_label\">";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "numerocuotas", array()), 'label', array("label_attr" => array("for" => "Vendedor"), "label" => "Numero de Cuotas"));
        echo "</div>
                                            <div class=\"form_input\">";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "numerocuotas", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numero de Cuotas")));
        echo "</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form_bloque form-group\">
                                <div class=\"form_error\">";
        // line 154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "primapago", array()), 'errors');
        echo "</div>
                                <div class=\"form_label\">";
        // line 155
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "primapago", array()), 'label', array("label_attr" => array("for" => "Vendedor"), "label" => "Prima"));
        echo "</div>
                                <div class=\"form_input\">";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "primapago", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prima")));
        echo "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form_bloque form-group\">
                                            <div class=\"form_error\">";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "porcentajecomisionpago", array()), 'errors');
        echo "</div>
                                            <div class=\"form_label\">";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "porcentajecomisionpago", array()), 'label', array("label_attr" => array("for" => "Vendedor"), "label" => "% Comision"));
        echo "</div>
                                            <div class=\"form_input\">";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "porcentajecomisionpago", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Porcentaje Comision")));
        echo "</div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form_bloque form-group\">
                                            <div class=\"form_error\">";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "comisionpago", array()), 'errors');
        echo "</div>
                                            <div class=\"form_label\">";
        // line 170
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "comisionpago", array()), 'label', array("label_attr" => array("for" => "Vendedor"), "label" => "Comision"));
        echo "</div>
                                            <div class=\"form_input\">";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "comisionpago", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Comision")));
        echo "</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 176
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formPago"] ?? $this->getContext($context, "formPago")), 'form_end');
        echo "
                            
                          </div>
                          <div class=\"modal-footer\">
                            <center><p><b class=\"notificaAnexo\" style=\"background-color:red;color: white\"></b></p></center>
                            <button type=\"button\" class=\"btn btn-default btnCerrarAnexo\" data-dismiss=\"modal\">Cerrar</button>
                            <button type=\"button\" class=\"btn btn-primary btnGuardarAnexo\">Registrar Anexo</button>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <br><br><br>
                    ";
        // line 189
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <center><h4>Ingrese los datos para el anexo seleccionado</h4></center>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idmovimiento", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idmovimiento", array()), 'label', array("label_attr" => array("for" => "Movimiento"), "label" => "Movimiento"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idmovimiento", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Movimiento")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mediosolicitud", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mediosolicitud", array()), 'label', array("label_attr" => array("for" => "Medio de Solicitud"), "label" => "Medio de Solicitud"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mediosolicitud", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Medio de Solicitud")));
        echo "</div>
                    </div>
                    
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"col-md-6\">
                                <div class=\"form_bloque form-group\">
                                    <div class=\"form_error\">";
        // line 206
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numerocartasolicitud", array()), 'errors');
        echo "</div>
                                    <div class=\"form_label\">";
        // line 207
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numerocartasolicitud", array()), 'label', array("label_attr" => array("for" => "Numero de carta de solicitud"), "label" => "Numero de carta de solicitud"));
        echo "</div>
                                    <div class=\"form_input\">";
        // line 208
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numerocartasolicitud", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numero de carta de solicitud")));
        echo "</div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form_bloque form-group\">
                                    <div class=\"form_error\">";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechasolicitud", array()), 'errors');
        echo "</div>
                                    <div class=\"form_label\">";
        // line 214
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechasolicitud", array()), 'label', array("label_attr" => array("for" => "Fecha de Solicitud"), "label" => "Fecha de Solicitud"));
        echo "</div>
                                    <div class=\"form_input\">";
        // line 215
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechasolicitud", array()), 'widget');
        echo "</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"col-md-6\">
                                <div class=\"form_bloque form-group\">
                                    <div class=\"form_error\">";
        // line 225
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cartafirmadaentrega", array()), 'errors');
        echo "</div>
                                    <div class=\"form_label\">";
        // line 226
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cartafirmadaentrega", array()), 'label', array("label_attr" => array("for" => "Numero Carta Entregada"), "label" => "Numero Carta Entregada"));
        echo "</div>
                                    <div class=\"form_input\">";
        // line 227
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cartafirmadaentrega", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numero Carta Entregada")));
        echo "</div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form_bloque form-group\">
                                    <div class=\"form_error\">";
        // line 232
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaentrega", array()), 'errors');
        echo "</div>
                                    <div class=\"form_label\">";
        // line 233
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaentrega", array()), 'label', array("label_attr" => array("for" => "Fecha de Entrega"), "label" => "Fecha de Entrega"));
        echo "</div>
                                    <div class=\"form_input\">";
        // line 234
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaentrega", array()), 'widget');
        echo "</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 241
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estadotransaccion", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 242
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estadotransaccion", array()), 'label', array("label_attr" => array("for" => "Estado Transaccion"), "label" => "Estado Transaccion"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 243
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estadotransaccion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Estado Transaccion")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 246
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idusuario", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 247
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idusuario", array()), 'label', array("label_attr" => array("for" => "Vendedor"), "label" => "Vendedor"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 248
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idusuario", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Vendedor")));
        echo "</div>
                    </div>
                    <button type=\"button\" class=\"btn btn-primary btnGuardarTransaccion\">Registrar Transacción</button>
                    ";
        // line 251
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                    <!-- Modal Confirmacion Transaccion -->
                    <div class=\"modal fade\" id=\"modalConfirmacionTransaccion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                      <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                            <center style=\"color:red\"><h4 class=\"modal-title\">Confirmación de Registro de Transaccion</h4></center>
                          </div>
                          <div class=\"modal-body\" id=\"contenidoModalConfirmacionTransaccion\">
                          </div>
                          <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default btnCancelarTransaccion\" data-dismiss=\"modal\">Cerrar</button>
                            <button type=\"button\" class=\"btn btn-primary btnConfirmaGuardaTransaccion\">Registrar Transaccion</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <center><h4><span class=\"label label-default notificaTransaccion\">*Ingrese en el campo de texto el número de poliza a registrar o buscar.</span></h4></center>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_b336fc532648b0e2ea1802315989384dc17876a6435dbc5c4c5c0512bfde1071->leave($__internal_b336fc532648b0e2ea1802315989384dc17876a6435dbc5c4c5c0512bfde1071_prof);

    }

    // line 276
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3893a92eb0ef4a2178a33a066f27cc4929aabbb22998377e61bf3464f5bc71e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3893a92eb0ef4a2178a33a066f27cc4929aabbb22998377e61bf3464f5bc71e8->enter($__internal_3893a92eb0ef4a2178a33a066f27cc4929aabbb22998377e61bf3464f5bc71e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 277
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/js/transaccion/regTransaccion.js"), "html", null, true);
        echo "\"></script>   
";
        
        $__internal_3893a92eb0ef4a2178a33a066f27cc4929aabbb22998377e61bf3464f5bc71e8->leave($__internal_3893a92eb0ef4a2178a33a066f27cc4929aabbb22998377e61bf3464f5bc71e8_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSABundle:Default:transaccion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  562 => 278,  557 => 277,  551 => 276,  520 => 251,  514 => 248,  510 => 247,  506 => 246,  500 => 243,  496 => 242,  492 => 241,  482 => 234,  478 => 233,  474 => 232,  466 => 227,  462 => 226,  458 => 225,  445 => 215,  441 => 214,  437 => 213,  429 => 208,  425 => 207,  421 => 206,  411 => 199,  407 => 198,  403 => 197,  397 => 194,  393 => 193,  389 => 192,  383 => 189,  367 => 176,  359 => 171,  355 => 170,  351 => 169,  343 => 164,  339 => 163,  335 => 162,  326 => 156,  322 => 155,  318 => 154,  309 => 148,  305 => 147,  301 => 146,  293 => 141,  289 => 140,  285 => 139,  274 => 131,  270 => 130,  266 => 129,  258 => 124,  253 => 122,  244 => 116,  240 => 115,  236 => 114,  224 => 105,  220 => 104,  216 => 103,  208 => 98,  204 => 97,  200 => 96,  191 => 90,  187 => 89,  183 => 88,  177 => 85,  173 => 84,  169 => 83,  164 => 81,  107 => 27,  102 => 25,  98 => 24,  94 => 23,  88 => 20,  84 => 19,  80 => 18,  74 => 15,  70 => 14,  66 => 13,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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

{% block title %}Registro de Transacción{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-8 col-md-offset-2\">
                    <h3 class=\"text-center\">Registro de Transacción</h3>
                    {{ form_start(formPoliza) }}
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">{{form_errors(formPoliza.numeropoliza)}}</div>
                        <div class=\"form_label\">{{form_label(formPoliza.numeropoliza, 'Número de Poliza : ', {'label_attr': {'for': 'poliza_numeropoliza'}})}}</div>
                        <div class=\"form_input\">{{form_widget(formPoliza.numeropoliza, { 'attr': {'class': 'form-control', 'placeholder':'Ingrese un número de poliza para registrar o consultar.'} })}}</div>
                    </div>
                    <div class=\"form_bloque form-group Pvisible\">
                        <div class=\"form_error\">{{form_errors(formPoliza.idcliente)}}</div>
                        <div class=\"form_label\">{{form_label(formPoliza.idcliente, 'Cliente : ', {'label_attr': {'for': 'Cliente'}})}}</div>
                        <div class=\"form_input\">{{form_widget(formPoliza.idcliente, { 'attr': {'class': 'form-control'} })}}</div>
                    </div>
                    <div class=\"form_bloque form-group Pvisible\">
                        <div class=\"form_error\">{{form_errors(formPoliza.idaseguradora)}}</div>
                        <div class=\"form_label\">{{form_label(formPoliza.idaseguradora, 'Aseguradora : ', {'label_attr': {'for': 'Movimiento'}})}}</div>
                        <div class=\"form_input\">{{form_widget(formPoliza.idaseguradora, { 'attr': {'class': 'form-control', 'placeholder':'Movimiento'} })}}</div>
                    </div>
                    {{ form_end(formPoliza)}}
                    <div class=\"form-btn Pvisible\">
                        <button class=\"btn btn-primary btnGuardaPoliza\">Registrar Póliza</button>
                    </div>
                    <br>
                    <div class=\"form_bloque form-group Pvisible table-responsive\" id=\"tabla_anexos\">
                    </div>
                    <!-- Button trigger modal -->
                    <button type=\"button\" class=\"btn btn-primary btn-lg Pvisible btnAnexo\" data-toggle=\"modal\" data-target=\"#ModalAnexo\">
                      Nuevo Anexo
                    </button>
                    <!-- Modal Confirmacion Poliza -->
                    <div class=\"modal fade\" id=\"modalConfirmacionPoliza\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                      <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                            <center style=\"color:red\"><h4 class=\"modal-title\">Confirmación de Registro de Poliza</h4></center>
                          </div>
                          <div class=\"modal-body\" id=\"contenidoModalConfirmacionPoliza\">
                          </div>
                          <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
                            <button type=\"button\" class=\"btn btn-primary btnConfirmaGuardaPoliza\">Registrar Poliza</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal Confirmacion Anexo -->
                    <div class=\"modal fade\" id=\"modalConfirmacionAnexo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                      <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                            <center style=\"color:red\"><h4 class=\"modal-title\">Confirmación de Registro de Anexo</h4></center>
                          </div>
                          <div class=\"modal-body\" id=\"contenidoModalConfirmacionAnexo\">
                          </div>
                          <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default btnCancelarAnexo\" data-dismiss=\"modal\">Cerrar</button>
                            <button type=\"button\" class=\"btn btn-primary btnConfirmaGuardaAnexo\">Registrar Anexo</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal Anexo -->
                    <div class=\"modal fade\" id=\"ModalAnexo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                      <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                            <h4 class=\"modal-title\" id=\"myModalLabel\">Registro de Nuevo Anexo</h4>
                          </div>
                          <div class=\"modal-body\">
                            {{ form_start(formAnexo)}}
                            <div class=\"form_bloque form-group\">
                                <div class=\"form_error\">{{form_errors(formAnexo.numeroanexo)}}</div>
                                <div class=\"form_label\">{{form_label(formAnexo.numeroanexo, 'Número Anexo', {'label_attr': {'for': 'Vendedor'}})}}</div>
                                <div class=\"form_input\">{{form_widget(formAnexo.numeroanexo, { 'attr': {'class': 'form-control', 'placeholder':'Numero de Anexo'} })}}</div>
                            </div>
                            <div class=\"form_bloque form-group\">
                                <div class=\"form_error\">{{form_errors(formAnexo.idramo)}}</div>
                                <div class=\"form_label\">{{form_label(formAnexo.idramo, 'Ramo', {'label_attr': {'for': 'Vendedor'}})}}</div>
                                <div class=\"form_input\">{{form_widget(formAnexo.idramo, { 'attr': {'class': 'form-control', 'placeholder':'Vendedor'} })}}</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form_bloque form-group\">
                                            <div class=\"form_error\">{{form_errors(formAnexo.iniciovigenciaanexo)}}</div>
                                            <div class=\"form_label\">{{form_label(formAnexo.iniciovigenciaanexo, 'Inicio Vigencia', {'label_attr': {'for': 'Vendedor'}})}}</div>
                                            <div class=\"form_input\">{{form_widget(formAnexo.iniciovigenciaanexo)}}</div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form_bloque form-group\">
                                            <div class=\"form_error\">{{form_errors(formAnexo.finvigenciaanexo)}}</div>
                                            <div class=\"form_label\">{{form_label(formAnexo.finvigenciaanexo, 'Fin Vigencia', {'label_attr': {'for': 'Vendedor'}})}}</div>
                                            <div class=\"form_input\">{{form_widget(formAnexo.finvigenciaanexo)}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form_bloque form-group\">
                                            <div class=\"form_error\">{{form_errors(formAnexo.valortotalaseguradoanexo)}}</div>
                                            <div class=\"form_label\">{{form_label(formAnexo.valortotalaseguradoanexo, 'Valor', {'label_attr': {'for': 'Vendedor'}})}}</div>
                                            <div class=\"form_input\">{{form_widget(formAnexo.valortotalaseguradoanexo, { 'attr': {'class': 'form-control', 'placeholder':'Valor Total'} })}}</div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\"></div>
                                </div>
                            </div>
                            {{form_end(formAnexo)}}
                            <h4>Información de Pago</h4>
                            {{ form_start(formPago)}}
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form_bloque form-group\">
                                            <div class=\"form_error\">{{form_errors(formPago.tasapago)}}</div>
                                            <div class=\"form_label\">{{form_label(formPago.tasapago, 'Tasa Pago', {'label_attr': {'for': 'Vendedor'}})}}</div>
                                            <div class=\"form_input\">{{form_widget(formPago.tasapago, { 'attr': {'class': 'form-control', 'placeholder':'Tasa de Pago'} })}}</div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\"></div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form_bloque form-group\">
                                            <div class=\"form_error\">{{form_errors(formPago.metodopago)}}</div>
                                            <div class=\"form_label\">{{form_label(formPago.metodopago, 'Metodo de Pago', {'label_attr': {'for': 'Vendedor'}})}}</div>
                                            <div class=\"form_input\">{{form_widget(formPago.metodopago, { 'attr': {'class': 'form-control', 'placeholder':'Metodo de Pago'} })}}</div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form_bloque form-group\">
                                            <div class=\"form_error\">{{form_errors(formPago.numerocuotas)}}</div>
                                            <div class=\"form_label\">{{form_label(formPago.numerocuotas, 'Numero de Cuotas', {'label_attr': {'for': 'Vendedor'}})}}</div>
                                            <div class=\"form_input\">{{form_widget(formPago.numerocuotas, { 'attr': {'class': 'form-control', 'placeholder':'Numero de Cuotas'} })}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form_bloque form-group\">
                                <div class=\"form_error\">{{form_errors(formPago.primapago)}}</div>
                                <div class=\"form_label\">{{form_label(formPago.primapago, 'Prima', {'label_attr': {'for': 'Vendedor'}})}}</div>
                                <div class=\"form_input\">{{form_widget(formPago.primapago, { 'attr': {'class': 'form-control', 'placeholder':'Prima'} })}}</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form_bloque form-group\">
                                            <div class=\"form_error\">{{form_errors(formPago.porcentajecomisionpago)}}</div>
                                            <div class=\"form_label\">{{form_label(formPago.porcentajecomisionpago, '% Comision', {'label_attr': {'for': 'Vendedor'}})}}</div>
                                            <div class=\"form_input\">{{form_widget(formPago.porcentajecomisionpago, { 'attr': {'class': 'form-control', 'placeholder':'Porcentaje Comision'} })}}</div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form_bloque form-group\">
                                            <div class=\"form_error\">{{form_errors(formPago.comisionpago)}}</div>
                                            <div class=\"form_label\">{{form_label(formPago.comisionpago, 'Comision', {'label_attr': {'for': 'Vendedor'}})}}</div>
                                            <div class=\"form_input\">{{form_widget(formPago.comisionpago, { 'attr': {'class': 'form-control', 'placeholder':'Comision'} })}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{form_end(formPago)}}
                            
                          </div>
                          <div class=\"modal-footer\">
                            <center><p><b class=\"notificaAnexo\" style=\"background-color:red;color: white\"></b></p></center>
                            <button type=\"button\" class=\"btn btn-default btnCerrarAnexo\" data-dismiss=\"modal\">Cerrar</button>
                            <button type=\"button\" class=\"btn btn-primary btnGuardarAnexo\">Registrar Anexo</button>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <br><br><br>
                    {{ form_start(form)}}
                    <center><h4>Ingrese los datos para el anexo seleccionado</h4></center>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">{{form_errors(form.idmovimiento)}}</div>
                        <div class=\"form_label\">{{form_label(form.idmovimiento, 'Movimiento', {'label_attr': {'for': 'Movimiento'}})}}</div>
                        <div class=\"form_input\">{{form_widget(form.idmovimiento, { 'attr': {'class': 'form-control', 'placeholder':'Movimiento'} })}}</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">{{form_errors(form.mediosolicitud)}}</div>
                        <div class=\"form_label\">{{form_label(form.mediosolicitud, 'Medio de Solicitud', {'label_attr': {'for': 'Medio de Solicitud'}})}}</div>
                        <div class=\"form_input\">{{form_widget(form.mediosolicitud, { 'attr': {'class': 'form-control', 'placeholder':'Medio de Solicitud'} })}}</div>
                    </div>
                    
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"col-md-6\">
                                <div class=\"form_bloque form-group\">
                                    <div class=\"form_error\">{{form_errors(form.numerocartasolicitud)}}</div>
                                    <div class=\"form_label\">{{form_label(form.numerocartasolicitud, 'Numero de carta de solicitud', {'label_attr': {'for': 'Numero de carta de solicitud'}})}}</div>
                                    <div class=\"form_input\">{{form_widget(form.numerocartasolicitud, { 'attr': {'class': 'form-control', 'placeholder':'Numero de carta de solicitud'} })}}</div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form_bloque form-group\">
                                    <div class=\"form_error\">{{form_errors(form.fechasolicitud)}}</div>
                                    <div class=\"form_label\">{{form_label(form.fechasolicitud, 'Fecha de Solicitud', {'label_attr': {'for': 'Fecha de Solicitud'}})}}</div>
                                    <div class=\"form_input\">{{form_widget(form.fechasolicitud)}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"col-md-6\">
                                <div class=\"form_bloque form-group\">
                                    <div class=\"form_error\">{{form_errors(form.cartafirmadaentrega)}}</div>
                                    <div class=\"form_label\">{{form_label(form.cartafirmadaentrega, 'Numero Carta Entregada', {'label_attr': {'for': 'Numero Carta Entregada'}})}}</div>
                                    <div class=\"form_input\">{{form_widget(form.cartafirmadaentrega, { 'attr': {'class': 'form-control', 'placeholder':'Numero Carta Entregada'} })}}</div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form_bloque form-group\">
                                    <div class=\"form_error\">{{form_errors(form.fechaentrega)}}</div>
                                    <div class=\"form_label\">{{form_label(form.fechaentrega, 'Fecha de Entrega', {'label_attr': {'for': 'Fecha de Entrega'}})}}</div>
                                    <div class=\"form_input\">{{form_widget(form.fechaentrega)}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">{{form_errors(form.estadotransaccion)}}</div>
                        <div class=\"form_label\">{{form_label(form.estadotransaccion, 'Estado Transaccion', {'label_attr': {'for': 'Estado Transaccion'}})}}</div>
                        <div class=\"form_input\">{{form_widget(form.estadotransaccion, { 'attr': {'class': 'form-control', 'placeholder':'Estado Transaccion'} })}}</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">{{form_errors(form.idusuario)}}</div>
                        <div class=\"form_label\">{{form_label(form.idusuario, 'Vendedor', {'label_attr': {'for': 'Vendedor'}})}}</div>
                        <div class=\"form_input\">{{form_widget(form.idusuario, { 'attr': {'class': 'form-control', 'placeholder':'Vendedor'} })}}</div>
                    </div>
                    <button type=\"button\" class=\"btn btn-primary btnGuardarTransaccion\">Registrar Transacción</button>
                    {{form_end(form)}}
                    <!-- Modal Confirmacion Transaccion -->
                    <div class=\"modal fade\" id=\"modalConfirmacionTransaccion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                      <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                            <center style=\"color:red\"><h4 class=\"modal-title\">Confirmación de Registro de Transaccion</h4></center>
                          </div>
                          <div class=\"modal-body\" id=\"contenidoModalConfirmacionTransaccion\">
                          </div>
                          <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default btnCancelarTransaccion\" data-dismiss=\"modal\">Cerrar</button>
                            <button type=\"button\" class=\"btn btn-primary btnConfirmaGuardaTransaccion\">Registrar Transaccion</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <center><h4><span class=\"label label-default notificaTransaccion\">*Ingrese en el campo de texto el número de poliza a registrar o buscar.</span></h4></center>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{ asset('bundles/asesoressa/js/transaccion/regTransaccion.js') }}\"></script>   
{% endblock %}", "AsesoresSABundle:Default:transaccion.html.twig", "C:\\xampp\\htdocs\\Repositorios\\sym\\src\\AsesoresSABundle/Resources/views/Default/transaccion.html.twig");
    }
}
