<?php

/* terminal/show_est_sup.html.twig */
class __TwigTemplate_cc9bc5a9b80736bbf7be6af53252ea5b08f8c790aced8dccb01860cc1ade59ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index_sup.html.twig", "terminal/show_est_sup.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index_sup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88db02d1a3c11a4879fce7adb49820c77ffedceed36302f205a8c25c5bc34b4c = $this->env->getExtension("native_profiler");
        $__internal_88db02d1a3c11a4879fce7adb49820c77ffedceed36302f205a8c25c5bc34b4c->enter($__internal_88db02d1a3c11a4879fce7adb49820c77ffedceed36302f205a8c25c5bc34b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "terminal/show_est_sup.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88db02d1a3c11a4879fce7adb49820c77ffedceed36302f205a8c25c5bc34b4c->leave($__internal_88db02d1a3c11a4879fce7adb49820c77ffedceed36302f205a8c25c5bc34b4c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f4735f732edcece098df96e5f05ecbd0609925fa9544a521ee21a51d60b26d6 = $this->env->getExtension("native_profiler");
        $__internal_8f4735f732edcece098df96e5f05ecbd0609925fa9544a521ee21a51d60b26d6->enter($__internal_8f4735f732edcece098df96e5f05ecbd0609925fa9544a521ee21a51d60b26d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <legend>Listado de Terminales</legend>
    <button onclick=\"grafico()\">Boton</button>
    ";
        // line 6
        echo twig_include($this->env, $context, "terminal/grafico_sup.html.twig");
        echo "

    <script type=\"text/javascript\">
        grafico = function () {
            //alert(\"mexican\")
            \$.ajax(
            {     url: '/admin/verterminalesajax', 
                  type: 'get',
                  data: null, 
                  dataType: 'html', 
                  success: function(data, textStatus, jqXHR){
                    \$(\"#tabla_sup\").html(data); }, 
                  error: function(jqXHR, textStatus, errorThrown){}, 
                  complete: function( jqXHR, textStatus ){} 
            });
        }
        setInterval(function(){
                                grafico();         
                              }, 5000);
</script>
";
        
        $__internal_8f4735f732edcece098df96e5f05ecbd0609925fa9544a521ee21a51d60b26d6->leave($__internal_8f4735f732edcece098df96e5f05ecbd0609925fa9544a521ee21a51d60b26d6_prof);

    }

    public function getTemplateName()
    {
        return "terminal/show_est_sup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'default/index_sup.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <legend>Listado de Terminales</legend>*/
/*     <button onclick="grafico()">Boton</button>*/
/*     {{ include('terminal/grafico_sup.html.twig') }}*/
/* */
/*     <script type="text/javascript">*/
/*         grafico = function () {*/
/*             //alert("mexican")*/
/*             $.ajax(*/
/*             {     url: '/admin/verterminalesajax', */
/*                   type: 'get',*/
/*                   data: null, */
/*                   dataType: 'html', */
/*                   success: function(data, textStatus, jqXHR){*/
/*                     $("#tabla_sup").html(data); }, */
/*                   error: function(jqXHR, textStatus, errorThrown){}, */
/*                   complete: function( jqXHR, textStatus ){} */
/*             });*/
/*         }*/
/*         setInterval(function(){*/
/*                                 grafico();         */
/*                               }, 5000);*/
/* </script>*/
/* {% endblock %}*/
/* */
/* */
/* */
