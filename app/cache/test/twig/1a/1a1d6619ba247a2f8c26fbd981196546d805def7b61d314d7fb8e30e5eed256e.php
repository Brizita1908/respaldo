<?php

/* AsesoresSABundle:InicioSesion:index.html.twig */
class __TwigTemplate_f18fa02dc0b209d97225ce5c5d7e3176be048989dbb0ea6cf12a7ac46dd40f9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSABundle:InicioSesion:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
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
        $__internal_836bd794ad757392011688d573f80b4e3a00f92abd2a0a2df83196d162774330 = $this->env->getExtension("native_profiler");
        $__internal_836bd794ad757392011688d573f80b4e3a00f92abd2a0a2df83196d162774330->enter($__internal_836bd794ad757392011688d573f80b4e3a00f92abd2a0a2df83196d162774330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSABundle:InicioSesion:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_836bd794ad757392011688d573f80b4e3a00f92abd2a0a2df83196d162774330->leave($__internal_836bd794ad757392011688d573f80b4e3a00f92abd2a0a2df83196d162774330_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_da37b7c7553db04561a8ec5df32d5521b31515014f93ed404a38c483132afd5b = $this->env->getExtension("native_profiler");
        $__internal_da37b7c7553db04561a8ec5df32d5521b31515014f93ed404a38c483132afd5b->enter($__internal_da37b7c7553db04561a8ec5df32d5521b31515014f93ed404a38c483132afd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asesores S.A.";
        
        $__internal_da37b7c7553db04561a8ec5df32d5521b31515014f93ed404a38c483132afd5b->leave($__internal_da37b7c7553db04561a8ec5df32d5521b31515014f93ed404a38c483132afd5b_prof);

    }

    // line 3
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7342bff71f2ff6077da9cec55a60a1da85cab6b9ea0c6ac1e4d70923cdd7f5c1 = $this->env->getExtension("native_profiler");
        $__internal_7342bff71f2ff6077da9cec55a60a1da85cab6b9ea0c6ac1e4d70923cdd7f5c1->enter($__internal_7342bff71f2ff6077da9cec55a60a1da85cab6b9ea0c6ac1e4d70923cdd7f5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_7342bff71f2ff6077da9cec55a60a1da85cab6b9ea0c6ac1e4d70923cdd7f5c1->leave($__internal_7342bff71f2ff6077da9cec55a60a1da85cab6b9ea0c6ac1e4d70923cdd7f5c1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb86cdc87e9e00fddcab4218be6f2e5ba4baf5567561b0d538ff70559ced5d99 = $this->env->getExtension("native_profiler");
        $__internal_fb86cdc87e9e00fddcab4218be6f2e5ba4baf5567561b0d538ff70559ced5d99->enter($__internal_fb86cdc87e9e00fddcab4218be6f2e5ba4baf5567561b0d538ff70559ced5d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div>
                    <div class=\"col-md-4 img-logo\"><br>
                        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asesoressa/images/asesoresI.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-thumbnail\" alt=\"Responsive image\" />
                    </div>
                    <div class=\"col-md-2 col-md-offset-6 img-logo\"><br>
                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asesoressa/images/asesoresII.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-thumbnail\" alt=\"Responsive image\" />
                    </div>
                </div>
                <div class=\"col-md-6 col-md-offset-3\">
                    <h1 class=\"text-center\">Bienvenido al Sistema</h1>
                    <h3 class=\"text-center\">Inicia Sesion</h3>
                    ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreusuario", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreusuario", array()), 'label', array("label_attr" => array("for" => "nombreusuario"), "label" => "Nombre de Usuario"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreusuario", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre de Usuario")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contrasenausuario", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contrasenausuario", array()), 'label', array("label_attr" => array("for" => "contrasenausuario"), "label" => "Contraseña"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contrasenausuario", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Contraseña")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-btn\">
                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Ingresar", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-style", "id" => "btn-ingresar")));
        echo "
                    </div>
                    ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_fb86cdc87e9e00fddcab4218be6f2e5ba4baf5567561b0d538ff70559ced5d99->leave($__internal_fb86cdc87e9e00fddcab4218be6f2e5ba4baf5567561b0d538ff70559ced5d99_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_11a8f66d4c05b0efdc5e5bda0f796689905374596985c8fc594106b13699508f = $this->env->getExtension("native_profiler");
        $__internal_11a8f66d4c05b0efdc5e5bda0f796689905374596985c8fc594106b13699508f->enter($__internal_11a8f66d4c05b0efdc5e5bda0f796689905374596985c8fc594106b13699508f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asesoressa/js/validaciones/inisesion.js"), "html", null, true);
        echo "\"></script>   
";
        
        $__internal_11a8f66d4c05b0efdc5e5bda0f796689905374596985c8fc594106b13699508f->leave($__internal_11a8f66d4c05b0efdc5e5bda0f796689905374596985c8fc594106b13699508f_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSABundle:InicioSesion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 42,  145 => 41,  139 => 40,  126 => 33,  121 => 31,  115 => 28,  111 => 27,  107 => 26,  101 => 23,  97 => 22,  93 => 21,  88 => 19,  79 => 13,  73 => 10,  66 => 5,  60 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* {% block title %}Asesores S.A.{% endblock %}*/
/* {% block sidebar %}{% endblock %}*/
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div>*/
/*                     <div class="col-md-4 img-logo"><br>*/
/*                         <img src="{{ asset('bundles/asesoressa/images/asesoresI.jpg') }}" class="img-responsive img-thumbnail" alt="Responsive image" />*/
/*                     </div>*/
/*                     <div class="col-md-2 col-md-offset-6 img-logo"><br>*/
/*                         <img src="{{ asset('bundles/asesoressa/images/asesoresII.jpg') }}" class="img-responsive img-thumbnail" alt="Responsive image" />*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-6 col-md-offset-3">*/
/*                     <h1 class="text-center">Bienvenido al Sistema</h1>*/
/*                     <h3 class="text-center">Inicia Sesion</h3>*/
/*                     {{ form_start(form)}}*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.nombreusuario)}}</div>*/
/*                         <div class="form_label">{{form_label(form.nombreusuario, 'Nombre de Usuario', {'label_attr': {'for': 'nombreusuario'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.nombreusuario, { 'attr': {'class': 'form-control', 'placeholder':'Nombre de Usuario'} })}}</div>*/
/*                     </div>*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.contrasenausuario)}}</div>*/
/*                         <div class="form_label">{{form_label(form.contrasenausuario, 'Contraseña', {'label_attr': {'for': 'contrasenausuario'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.contrasenausuario, { 'attr': {'class': 'form-control', 'placeholder':'Contraseña'} })}}</div>*/
/*                     </div>*/
/*                     <div class="form_bloque form-btn">*/
/*                         {{form_widget(form.Ingresar, { 'attr': {'class': 'btn btn-primary btn-style', 'id':'btn-ingresar'} })}}*/
/*                     </div>*/
/*                     {{ form_end(form) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript" src="{{ asset('bundles/asesoressa/js/validaciones/inisesion.js') }}"></script>   */
/* {% endblock %}*/
