<?php

/* AsesoresSABundle:Default:transaccion.html.twig */
class __TwigTemplate_ba13d256f8309195bce2a48b1089e9e92ab986bcd24f508c78417cab20776b11 extends Twig_Template
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
        $__internal_1ff0821352e95492a8f136706cff6e09400ac7e65897846fe193a5499f06112a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff0821352e95492a8f136706cff6e09400ac7e65897846fe193a5499f06112a->enter($__internal_1ff0821352e95492a8f136706cff6e09400ac7e65897846fe193a5499f06112a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSABundle:Default:transaccion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ff0821352e95492a8f136706cff6e09400ac7e65897846fe193a5499f06112a->leave($__internal_1ff0821352e95492a8f136706cff6e09400ac7e65897846fe193a5499f06112a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_868bfca2383dde1961994d162b148caf3ccacf178b535fa4f758f2afa6034b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_868bfca2383dde1961994d162b148caf3ccacf178b535fa4f758f2afa6034b57->enter($__internal_868bfca2383dde1961994d162b148caf3ccacf178b535fa4f758f2afa6034b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Registro de Transacción";
        
        $__internal_868bfca2383dde1961994d162b148caf3ccacf178b535fa4f758f2afa6034b57->leave($__internal_868bfca2383dde1961994d162b148caf3ccacf178b535fa4f758f2afa6034b57_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a33dd5dff4b37b7ba2b9541930c71d36570d261c6aac1a3adfa0b813fd7e1599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33dd5dff4b37b7ba2b9541930c71d36570d261c6aac1a3adfa0b813fd7e1599->enter($__internal_a33dd5dff4b37b7ba2b9541930c71d36570d261c6aac1a3adfa0b813fd7e1599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-8 col-md-offset-2\">
                    <h3 class=\"text-center\">Registro de Transacción</h3>
                     <center><h4><span class=\"label label-default notificaTransaccion\">*Ingrese en el campo de texto el número de poliza a registrar o buscar.</span></h4></center>
                    ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formPoliza"] ?? $this->getContext($context, "formPoliza")), 'form_start');
        echo "
                     <div class=\"form_bloque form-group\">
                         <div class=\"form_error\">";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPoliza"] ?? $this->getContext($context, "formPoliza")), "numeropoliza", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPoliza"] ?? $this->getContext($context, "formPoliza")), "numeropoliza", array()), 'label', array("label_attr" => array("for" => "poliza_numeropoliza"), "label" => "Número de Poliza : "));
        echo "</div>
                     </div>
                     <div class=\"form_bloque form-group input-group\">
                        <div class=\"form_input\">";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPoliza"] ?? $this->getContext($context, "formPoliza")), "numeropoliza", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingrese un número de poliza para registrar o consultar.")));
        echo "</div>
                        <span class=\"input-group-btn\">
                            <button class=\"btn btn-secondary btnconsultaPoliza\" type=\"button\">Consultar Póliza</button>
                        </span>
                     </div>
                     
                    <div class=\"form_bloque form-group Pvisible\">
                        <div class=\"form_error\">";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPoliza"] ?? $this->getContext($context, "formPoliza")), "idcliente", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPoliza"] ?? $this->getContext($context, "formPoliza")), "idcliente", array()), 'label', array("label_attr" => array("for" => "Cliente"), "label" => "Cliente : "));
        echo "</div>
                        <div class=\"form_input\">";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPoliza"] ?? $this->getContext($context, "formPoliza")), "idcliente", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group Pvisible\">
                        <div class=\"form_error\">";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPoliza"] ?? $this->getContext($context, "formPoliza")), "idaseguradora", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPoliza"] ?? $this->getContext($context, "formPoliza")), "idaseguradora", array()), 'label', array("label_attr" => array("for" => "Movimiento"), "label" => "Aseguradora : "));
        echo "</div>
                        <div class=\"form_input\">";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPoliza"] ?? $this->getContext($context, "formPoliza")), "idaseguradora", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Movimiento")));
        echo "</div>
                    </div>
                    ";
        // line 34
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formPoliza"] ?? $this->getContext($context, "formPoliza")), 'form_end');
        echo "
                    <div class=\"form-btn Pvisible\">
                        <button class=\"btn btn-primary btnGuardaPoliza\">Registrar Póliza</button>
                    </div>
                    <br>
                    <div class=\"form_bloque form-group Pvisible table-responsive\" id=\"tabla_anexos\">
                    </div>
                    <div class=\"form_bloque form-group Pvisible table-responsive\" id=\"tabla_transacciones\">
                    </div>
                    <!-- Button trigger modal -->
                    <center>
                        <button type=\"button\" class=\"btn btn-primary btn-lg Pvisible btnAnexo\" data-toggle=\"modal\" data-target=\"#ModalAnexo\">
                          Nuevo Anexo
                        </button>
                        <button type=\"button\" class=\"btn btn-primary btn-lg btnTransaccion\" data-toggle=\"modal\" data-target=\"#ModalTransaccion\">
                          Nueva Transaccion
                        </button>
                    </center>
                    <!-- Modal Registro Poliza -->
                    <div class=\"modal fade\" id=\"modalRegistroPoliza\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
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
                    <!-- Modal Registro Anexo -->
                    <div class=\"modal\" id=\"modalRegistroAnexo\">
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
                            <button type=\"button\" class=\"btn btn-primary btnConfirmaGuardaAnexo\">Si, Deseo registrar el anexo con los datos ingresados</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal Anexo -->
                    <div class=\"modal\" id=\"ModalAnexo\">
                      <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                            <h4 class=\"modal-title\" id=\"myModalLabel\">Registro de Nuevo Anexo</h4>
                          </div>
                          <div class=\"modal-body\">
                            ";
        // line 95
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), 'form_start');
        echo "
                            <div class=\"form_bloque form-group\">
                                <div class=\"form_error\">";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "numeroanexo", array()), 'errors');
        echo "</div>
                                <div class=\"form_label\">";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "numeroanexo", array()), 'label', array("label_attr" => array("for" => "Vendedor"), "label" => "Número Anexo"));
        echo "</div>
                            </div>
                            <div class=\"form_bloque form-group input-group\">
                                <div class=\"form_input\">";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "numeroanexo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numero de Anexo")));
        echo "</div>
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-secondary btnconsultaAnexo\" type=\"button\">Consultar Anexo</button>
                                </span>
                            </div>
                            
                           
                            <div class=\"Avisible\">
                            <div class=\"form_bloque form-group\">
                                <div class=\"form_error\">";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "idramo", array()), 'errors');
        echo "</div>
                                <div class=\"form_label\">";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "idramo", array()), 'label', array("label_attr" => array("for" => "Vendedor"), "label" => "Ramo"));
        echo "</div>
                                <div class=\"form_input\">";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "idramo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Vendedor")));
        echo "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form_bloque form-group\">
                                            <div class=\"form_error\">";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "iniciovigenciaanexo", array()), 'errors');
        echo "</div>
                                            <div class=\"form_label\">";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "iniciovigenciaanexo", array()), 'label', array("label_attr" => array("for" => "Vendedor"), "label" => "Inicio Vigencia"));
        echo "</div>
                                            <div class=\"form_input\">";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "iniciovigenciaanexo", array()), 'widget');
        echo "</div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form_bloque form-group\">
                                            <div class=\"form_error\">";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "finvigenciaanexo", array()), 'errors');
        echo "</div>
                                            <div class=\"form_label\">";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "finvigenciaanexo", array()), 'label', array("label_attr" => array("for" => "Vendedor"), "label" => "Fin Vigencia"));
        echo "</div>
                                            <div class=\"form_input\">";
        // line 127
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
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "valortotalaseguradoanexo", array()), 'errors');
        echo "</div>
                                            <div class=\"form_label\">";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "valortotalaseguradoanexo", array()), 'label', array("label_attr" => array("for" => "Vendedor"), "label" => "Valor"));
        echo "</div>
                                            <div class=\"form_input\">";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), "valortotalaseguradoanexo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Valor Total")));
        echo "</div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\"></div>
                                </div>
                            </div>
                            </div>
                            ";
        // line 145
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formAnexo"] ?? $this->getContext($context, "formAnexo")), 'form_end');
        echo "
                            <h4 class=\"Avisible\">Información de Pago</h4>
                            ";
        // line 147
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formPago"] ?? $this->getContext($context, "formPago")), 'form_start');
        echo "
                            <div class=\"Avisible\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form_bloque form-group\">
                                            <div class=\"form_error\">";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "tasapago", array()), 'errors');
        echo "</div>
                                            <div class=\"form_label\">";
        // line 154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "tasapago", array()), 'label', array("label_attr" => array("for" => "Vendedor"), "label" => "Tasa Pago"));
        echo "</div>
                                            <div class=\"form_input\">";
        // line 155
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
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "metodopago", array()), 'errors');
        echo "</div>
                                            <div class=\"form_label\">";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "metodopago", array()), 'label', array("label_attr" => array("for" => "Vendedor"), "label" => "Metodo de Pago"));
        echo "</div>
                                            <div class=\"form_input\">";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "metodopago", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Metodo de Pago")));
        echo "</div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form_bloque form-group\">
                                            <div class=\"form_error\">";
        // line 170
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "numerocuotas", array()), 'errors');
        echo "</div>
                                            <div class=\"form_label\">";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "numerocuotas", array()), 'label', array("label_attr" => array("for" => "Vendedor"), "label" => "Numero de Cuotas"));
        echo "</div>
                                            <div class=\"form_input\">";
        // line 172
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "numerocuotas", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numero de Cuotas")));
        echo "</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form_bloque form-group\">
                                <div class=\"form_error\">";
        // line 178
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "primapago", array()), 'errors');
        echo "</div>
                                <div class=\"form_label\">";
        // line 179
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "primapago", array()), 'label', array("label_attr" => array("for" => "Vendedor"), "label" => "Prima"));
        echo "</div>
                                <div class=\"form_input\">";
        // line 180
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "primapago", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prima")));
        echo "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form_bloque form-group\">
                                            <div class=\"form_error\">";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "porcentajecomisionpago", array()), 'errors');
        echo "</div>
                                            <div class=\"form_label\">";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "porcentajecomisionpago", array()), 'label', array("label_attr" => array("for" => "Vendedor"), "label" => "% Comision"));
        echo "</div>
                                            <div class=\"form_input\">";
        // line 188
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "porcentajecomisionpago", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Porcentaje Comision")));
        echo "</div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form_bloque form-group\">
                                            <div class=\"form_error\">";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "comisionpago", array()), 'errors');
        echo "</div>
                                            <div class=\"form_label\">";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "comisionpago", array()), 'label', array("label_attr" => array("for" => "Vendedor"), "label" => "Comision"));
        echo "</div>
                                            <div class=\"form_input\">";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPago"] ?? $this->getContext($context, "formPago")), "comisionpago", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Comision", "disabled" => "true")));
        echo "</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>            
                            ";
        // line 201
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formPago"] ?? $this->getContext($context, "formPago")), 'form_end');
        echo "
                            
                          </div>
                          <div class=\"modal-footer\">
                            <center><h4><span class=\"label label-default notificacionAnexo\">*Ingrese en el campo de texto el número de anexo a registrar.</span></h4></center>
                            <button type=\"button\" class=\"btn btn-default btnCerrarAnexo\" data-dismiss=\"modal\">Cerrar</button>
                            <button type=\"button\" class=\"btn btn-primary Avisible btnGuardarAnexo\">Registrar Anexo</button>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <div class=\"modal\" id=\"ModalTransaccion\">
                      <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                            <h4 class=\"modal-title\" id=\"myModalLabel\">Registro de Nueva Transacción</h4>
                          </div>
                          <div class=\"modal-body\">
                            ";
        // line 221
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), 'form_start');
        echo "
                                <div class=\"form_bloque form-group\">
                                    <div class=\"form_error\">";
        // line 223
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), "idmovimiento", array()), 'errors');
        echo "</div>
                                    <div class=\"form_label\">";
        // line 224
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), "idmovimiento", array()), 'label', array("label_attr" => array("for" => "Movimiento"), "label" => "Movimiento"));
        echo "</div>
                                    <div class=\"form_input\">";
        // line 225
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), "idmovimiento", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Movimiento")));
        echo "</div>
                                </div>
                                <div class=\"Tvisible\">
                                <div class=\"form_bloque form-group\">
                                    <div class=\"form_error\">";
        // line 229
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), "mediosolicitud", array()), 'errors');
        echo "</div>
                                    <div class=\"form_label\">";
        // line 230
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), "mediosolicitud", array()), 'label', array("label_attr" => array("for" => "Medio de Solicitud"), "label" => "Medio de Solicitud"));
        echo "</div>
                                    <div class=\"form_input\">";
        // line 231
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), "mediosolicitud", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Medio de Solicitud")));
        echo "</div>
                                </div>
                                <div class=\"TcartaVisible\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <div class=\"col-md-6\">
                                                <div class=\"form_bloque form-group\">
                                                    <div class=\"form_error\">";
        // line 238
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), "numerocartasolicitud", array()), 'errors');
        echo "</div>
                                                    <div class=\"form_label\">";
        // line 239
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), "numerocartasolicitud", array()), 'label', array("label_attr" => array("for" => "Numero de carta de solicitud"), "label" => "Numero de carta de solicitud"));
        echo "</div>
                                                    <div class=\"form_input\">";
        // line 240
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), "numerocartasolicitud", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numero de carta de solicitud")));
        echo "</div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form_bloque form-group\">
                                                    <div class=\"form_error\">";
        // line 245
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), "fechasolicitud", array()), 'errors');
        echo "</div>
                                                    <div class=\"form_label\">";
        // line 246
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), "fechasolicitud", array()), 'label', array("label_attr" => array("for" => "Fecha de Solicitud"), "label" => "Fecha de Solicitud"));
        echo "</div>
                                                    <div class=\"form_input\">";
        // line 247
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), "fechasolicitud", array()), 'widget');
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
        // line 256
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), "cartafirmadaentrega", array()), 'errors');
        echo "</div>
                                                    <div class=\"form_label\">";
        // line 257
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), "cartafirmadaentrega", array()), 'label', array("label_attr" => array("for" => "Numero Carta Entregada"), "label" => "Numero Carta Entregada"));
        echo "</div>
                                                    <div class=\"form_input\">";
        // line 258
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), "cartafirmadaentrega", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numero Carta Entregada")));
        echo "</div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form_bloque form-group\">
                                                    <div class=\"form_error\">";
        // line 263
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), "fechaentrega", array()), 'errors');
        echo "</div>
                                                    <div class=\"form_label\">";
        // line 264
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), "fechaentrega", array()), 'label', array("label_attr" => array("for" => "Fecha de Entrega"), "label" => "Fecha de Entrega"));
        echo "</div>
                                                    <div class=\"form_input\">";
        // line 265
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), "fechaentrega", array()), 'widget');
        echo "</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"form_bloque form-group\">
                                    <div class=\"form_error\">";
        // line 273
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), "estadotransaccion", array()), 'errors');
        echo "</div>
                                    <div class=\"form_label\">";
        // line 274
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), "estadotransaccion", array()), 'label', array("label_attr" => array("for" => "Estado Transaccion"), "label" => "Estado Transaccion"));
        echo "</div>
                                    <div class=\"form_input\">";
        // line 275
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), "estadotransaccion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Estado Transaccion")));
        echo "</div>
                                </div>
                                <div class=\"form_bloque form-group\">
                                    <div class=\"form_error\">";
        // line 278
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), "idusuario", array()), 'errors');
        echo "</div>
                                    <div class=\"form_label\">";
        // line 279
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), "idusuario", array()), 'label', array("label_attr" => array("for" => "Vendedor"), "label" => "Vendedor"));
        echo "</div>
                                    <div class=\"form_input\">";
        // line 280
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), "idusuario", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Vendedor")));
        echo "</div>
                                </div>
                                </div>
                            ";
        // line 283
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formTransaccion"] ?? $this->getContext($context, "formTransaccion")), 'form_end');
        echo "
                          </div>
                          <div class=\"modal-footer\">
                            <center><h4><span class=\"label label-default notificacionTransaccion\">*Seleccione un movimiento para proceder al registro del anexo.</span></h4></center>
                            <button type=\"button\" class=\"btn btn-default btnCerrarAnexo\" data-dismiss=\"modal\">Cerrar</button>
                            <button type=\"button\" class=\"btn btn-primary btnRegistroTransaccion Tvisible\">Registrar Transaccion</button>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <!-- Modal Confirmacion Transaccion -->
                    <div class=\"modal fade\" id=\"modalConfirmacionTransaccion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                      <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                            <center style=\"color:red\"><h4 class=\"modal-title\">Confirmación de Registro de Transacción</h4></center>
                          </div>
                          <div class=\"modal-body\" id=\"contenidoModalConfirmacionTransaccion\">
                          </div>
                          <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default btnCancelarTransaccion\" data-dismiss=\"modal\">Cerrar</button>
                            <button type=\"button\" class=\"btn btn-primary btnConfirmaGuardaTransaccion\">Si, Deseo registrar la transacción con los datos ingresados</button>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_a33dd5dff4b37b7ba2b9541930c71d36570d261c6aac1a3adfa0b813fd7e1599->leave($__internal_a33dd5dff4b37b7ba2b9541930c71d36570d261c6aac1a3adfa0b813fd7e1599_prof);

    }

    // line 317
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_09e25fd42ef4a00fe93ba4a3a105b6a04d85a6be2e49bd2c2011fefa07279c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e25fd42ef4a00fe93ba4a3a105b6a04d85a6be2e49bd2c2011fefa07279c31->enter($__internal_09e25fd42ef4a00fe93ba4a3a105b6a04d85a6be2e49bd2c2011fefa07279c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 318
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/js/validaciones/anexo.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/js/validaciones/pago.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/js/validaciones/transaccion.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/js/multimodal.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/asesoressa/js/transaccion/regTransaccion.js"), "html", null, true);
        echo "\"></script>   
";
        
        $__internal_09e25fd42ef4a00fe93ba4a3a105b6a04d85a6be2e49bd2c2011fefa07279c31->leave($__internal_09e25fd42ef4a00fe93ba4a3a105b6a04d85a6be2e49bd2c2011fefa07279c31_prof);

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
        return array (  619 => 323,  615 => 322,  611 => 321,  607 => 320,  603 => 319,  598 => 318,  592 => 317,  552 => 283,  546 => 280,  542 => 279,  538 => 278,  532 => 275,  528 => 274,  524 => 273,  513 => 265,  509 => 264,  505 => 263,  497 => 258,  493 => 257,  489 => 256,  477 => 247,  473 => 246,  469 => 245,  461 => 240,  457 => 239,  453 => 238,  443 => 231,  439 => 230,  435 => 229,  428 => 225,  424 => 224,  420 => 223,  415 => 221,  392 => 201,  383 => 195,  379 => 194,  375 => 193,  367 => 188,  363 => 187,  359 => 186,  350 => 180,  346 => 179,  342 => 178,  333 => 172,  329 => 171,  325 => 170,  317 => 165,  313 => 164,  309 => 163,  298 => 155,  294 => 154,  290 => 153,  281 => 147,  276 => 145,  266 => 138,  262 => 137,  258 => 136,  246 => 127,  242 => 126,  238 => 125,  230 => 120,  226 => 119,  222 => 118,  213 => 112,  209 => 111,  205 => 110,  193 => 101,  187 => 98,  183 => 97,  178 => 95,  114 => 34,  109 => 32,  105 => 31,  101 => 30,  95 => 27,  91 => 26,  87 => 25,  77 => 18,  71 => 15,  67 => 14,  62 => 12,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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
                     <center><h4><span class=\"label label-default notificaTransaccion\">*Ingrese en el campo de texto el número de poliza a registrar o buscar.</span></h4></center>
                    {{ form_start(formPoliza) }}
                     <div class=\"form_bloque form-group\">
                         <div class=\"form_error\">{{form_errors(formPoliza.numeropoliza)}}</div>
                        <div class=\"form_label\">{{form_label(formPoliza.numeropoliza, 'Número de Poliza : ', {'label_attr': {'for': 'poliza_numeropoliza'}})}}</div>
                     </div>
                     <div class=\"form_bloque form-group input-group\">
                        <div class=\"form_input\">{{form_widget(formPoliza.numeropoliza, { 'attr': {'class': 'form-control', 'placeholder':'Ingrese un número de poliza para registrar o consultar.'} })}}</div>
                        <span class=\"input-group-btn\">
                            <button class=\"btn btn-secondary btnconsultaPoliza\" type=\"button\">Consultar Póliza</button>
                        </span>
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
                    <div class=\"form_bloque form-group Pvisible table-responsive\" id=\"tabla_transacciones\">
                    </div>
                    <!-- Button trigger modal -->
                    <center>
                        <button type=\"button\" class=\"btn btn-primary btn-lg Pvisible btnAnexo\" data-toggle=\"modal\" data-target=\"#ModalAnexo\">
                          Nuevo Anexo
                        </button>
                        <button type=\"button\" class=\"btn btn-primary btn-lg btnTransaccion\" data-toggle=\"modal\" data-target=\"#ModalTransaccion\">
                          Nueva Transaccion
                        </button>
                    </center>
                    <!-- Modal Registro Poliza -->
                    <div class=\"modal fade\" id=\"modalRegistroPoliza\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
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
                    <!-- Modal Registro Anexo -->
                    <div class=\"modal\" id=\"modalRegistroAnexo\">
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
                            <button type=\"button\" class=\"btn btn-primary btnConfirmaGuardaAnexo\">Si, Deseo registrar el anexo con los datos ingresados</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal Anexo -->
                    <div class=\"modal\" id=\"ModalAnexo\">
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
                            </div>
                            <div class=\"form_bloque form-group input-group\">
                                <div class=\"form_input\">{{form_widget(formAnexo.numeroanexo, { 'attr': {'class': 'form-control', 'placeholder':'Numero de Anexo'} })}}</div>
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-secondary btnconsultaAnexo\" type=\"button\">Consultar Anexo</button>
                                </span>
                            </div>
                            
                           
                            <div class=\"Avisible\">
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
                            </div>
                            {{form_end(formAnexo)}}
                            <h4 class=\"Avisible\">Información de Pago</h4>
                            {{ form_start(formPago)}}
                            <div class=\"Avisible\">
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
                                            <div class=\"form_input\">{{form_widget(formPago.comisionpago, { 'attr': {'class': 'form-control', 'placeholder':'Comision','disabled':'true'} })}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>            
                            {{form_end(formPago)}}
                            
                          </div>
                          <div class=\"modal-footer\">
                            <center><h4><span class=\"label label-default notificacionAnexo\">*Ingrese en el campo de texto el número de anexo a registrar.</span></h4></center>
                            <button type=\"button\" class=\"btn btn-default btnCerrarAnexo\" data-dismiss=\"modal\">Cerrar</button>
                            <button type=\"button\" class=\"btn btn-primary Avisible btnGuardarAnexo\">Registrar Anexo</button>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <div class=\"modal\" id=\"ModalTransaccion\">
                      <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                            <h4 class=\"modal-title\" id=\"myModalLabel\">Registro de Nueva Transacción</h4>
                          </div>
                          <div class=\"modal-body\">
                            {{ form_start(formTransaccion)}}
                                <div class=\"form_bloque form-group\">
                                    <div class=\"form_error\">{{form_errors(formTransaccion.idmovimiento)}}</div>
                                    <div class=\"form_label\">{{form_label(formTransaccion.idmovimiento, 'Movimiento', {'label_attr': {'for': 'Movimiento'}})}}</div>
                                    <div class=\"form_input\">{{form_widget(formTransaccion.idmovimiento, { 'attr': {'class': 'form-control', 'placeholder':'Movimiento'} })}}</div>
                                </div>
                                <div class=\"Tvisible\">
                                <div class=\"form_bloque form-group\">
                                    <div class=\"form_error\">{{form_errors(formTransaccion.mediosolicitud)}}</div>
                                    <div class=\"form_label\">{{form_label(formTransaccion.mediosolicitud, 'Medio de Solicitud', {'label_attr': {'for': 'Medio de Solicitud'}})}}</div>
                                    <div class=\"form_input\">{{form_widget(formTransaccion.mediosolicitud, { 'attr': {'class': 'form-control', 'placeholder':'Medio de Solicitud'} })}}</div>
                                </div>
                                <div class=\"TcartaVisible\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <div class=\"col-md-6\">
                                                <div class=\"form_bloque form-group\">
                                                    <div class=\"form_error\">{{form_errors(formTransaccion.numerocartasolicitud)}}</div>
                                                    <div class=\"form_label\">{{form_label(formTransaccion.numerocartasolicitud, 'Numero de carta de solicitud', {'label_attr': {'for': 'Numero de carta de solicitud'}})}}</div>
                                                    <div class=\"form_input\">{{form_widget(formTransaccion.numerocartasolicitud, { 'attr': {'class': 'form-control', 'placeholder':'Numero de carta de solicitud'} })}}</div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form_bloque form-group\">
                                                    <div class=\"form_error\">{{form_errors(formTransaccion.fechasolicitud)}}</div>
                                                    <div class=\"form_label\">{{form_label(formTransaccion.fechasolicitud, 'Fecha de Solicitud', {'label_attr': {'for': 'Fecha de Solicitud'}})}}</div>
                                                    <div class=\"form_input\">{{form_widget(formTransaccion.fechasolicitud)}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <div class=\"col-md-6\">
                                                <div class=\"form_bloque form-group\">
                                                    <div class=\"form_error\">{{form_errors(formTransaccion.cartafirmadaentrega)}}</div>
                                                    <div class=\"form_label\">{{form_label(formTransaccion.cartafirmadaentrega, 'Numero Carta Entregada', {'label_attr': {'for': 'Numero Carta Entregada'}})}}</div>
                                                    <div class=\"form_input\">{{form_widget(formTransaccion.cartafirmadaentrega, { 'attr': {'class': 'form-control', 'placeholder':'Numero Carta Entregada'} })}}</div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form_bloque form-group\">
                                                    <div class=\"form_error\">{{form_errors(formTransaccion.fechaentrega)}}</div>
                                                    <div class=\"form_label\">{{form_label(formTransaccion.fechaentrega, 'Fecha de Entrega', {'label_attr': {'for': 'Fecha de Entrega'}})}}</div>
                                                    <div class=\"form_input\">{{form_widget(formTransaccion.fechaentrega)}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"form_bloque form-group\">
                                    <div class=\"form_error\">{{form_errors(formTransaccion.estadotransaccion)}}</div>
                                    <div class=\"form_label\">{{form_label(formTransaccion.estadotransaccion, 'Estado Transaccion', {'label_attr': {'for': 'Estado Transaccion'}})}}</div>
                                    <div class=\"form_input\">{{form_widget(formTransaccion.estadotransaccion, { 'attr': {'class': 'form-control', 'placeholder':'Estado Transaccion'} })}}</div>
                                </div>
                                <div class=\"form_bloque form-group\">
                                    <div class=\"form_error\">{{form_errors(formTransaccion.idusuario)}}</div>
                                    <div class=\"form_label\">{{form_label(formTransaccion.idusuario, 'Vendedor', {'label_attr': {'for': 'Vendedor'}})}}</div>
                                    <div class=\"form_input\">{{form_widget(formTransaccion.idusuario, { 'attr': {'class': 'form-control', 'placeholder':'Vendedor'} })}}</div>
                                </div>
                                </div>
                            {{form_end(formTransaccion)}}
                          </div>
                          <div class=\"modal-footer\">
                            <center><h4><span class=\"label label-default notificacionTransaccion\">*Seleccione un movimiento para proceder al registro del anexo.</span></h4></center>
                            <button type=\"button\" class=\"btn btn-default btnCerrarAnexo\" data-dismiss=\"modal\">Cerrar</button>
                            <button type=\"button\" class=\"btn btn-primary btnRegistroTransaccion Tvisible\">Registrar Transaccion</button>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <!-- Modal Confirmacion Transaccion -->
                    <div class=\"modal fade\" id=\"modalConfirmacionTransaccion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                      <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                            <center style=\"color:red\"><h4 class=\"modal-title\">Confirmación de Registro de Transacción</h4></center>
                          </div>
                          <div class=\"modal-body\" id=\"contenidoModalConfirmacionTransaccion\">
                          </div>
                          <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default btnCancelarTransaccion\" data-dismiss=\"modal\">Cerrar</button>
                            <button type=\"button\" class=\"btn btn-primary btnConfirmaGuardaTransaccion\">Si, Deseo registrar la transacción con los datos ingresados</button>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{ asset('bundles/asesoressa/js/validaciones/anexo.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/asesoressa/js/validaciones/pago.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/asesoressa/js/validaciones/transaccion.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/asesoressa/js/multimodal.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/asesoressa/js/transaccion/regTransaccion.js') }}\"></script>   
{% endblock %}", "AsesoresSABundle:Default:transaccion.html.twig", "C:\\xampp\\htdocs\\respaldo\\src\\AsesoresSABundle/Resources/views/Default/transaccion.html.twig");
    }
}
