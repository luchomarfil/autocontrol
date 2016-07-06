<?php

/* default/index.html.twig */
class __TwigTemplate_60e9a29e0895cf63aa53dcbc02b9bf936dc400a4a2c27340fadcc93e29317ed0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b29ae8e8bd4fbda6431a4b6f53dd92b1e18d1ceddbbe311ae964adc24bbc1ba6 = $this->env->getExtension("native_profiler");
        $__internal_b29ae8e8bd4fbda6431a4b6f53dd92b1e18d1ceddbbe311ae964adc24bbc1ba6->enter($__internal_b29ae8e8bd4fbda6431a4b6f53dd92b1e18d1ceddbbe311ae964adc24bbc1ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b29ae8e8bd4fbda6431a4b6f53dd92b1e18d1ceddbbe311ae964adc24bbc1ba6->leave($__internal_b29ae8e8bd4fbda6431a4b6f53dd92b1e18d1ceddbbe311ae964adc24bbc1ba6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_42b40a2893d786a61a1ab53f04643bbfd8eeac35a8ea1fa3072955e9243f2d2b = $this->env->getExtension("native_profiler");
        $__internal_42b40a2893d786a61a1ab53f04643bbfd8eeac35a8ea1fa3072955e9243f2d2b->enter($__internal_42b40a2893d786a61a1ab53f04643bbfd8eeac35a8ea1fa3072955e9243f2d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"jumbotron\">
\t\t<h1>Bienvenido</h1>
\t\t<legend>Estadísticas disponibles:</legend>
\t\t<p>
\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"/admin/autoshora\" role=\"button\">Autos y Eenrgia</a>
\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Autos por Terminales</a>
\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Energia total Acumulada</a>
\t\t</p>
\t</div>
";
        
        $__internal_42b40a2893d786a61a1ab53f04643bbfd8eeac35a8ea1fa3072955e9243f2d2b->leave($__internal_42b40a2893d786a61a1ab53f04643bbfd8eeac35a8ea1fa3072955e9243f2d2b_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'backend.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<div class="jumbotron">*/
/* 		<h1>Bienvenido</h1>*/
/* 		<legend>Estadísticas disponibles:</legend>*/
/* 		<p>*/
/* 			<a class="btn btn-primary btn-lg" href="/admin/autoshora" role="button">Autos y Eenrgia</a>*/
/* 			<a class="btn btn-primary btn-lg" href="#" role="button">Autos por Terminales</a>*/
/* 			<a class="btn btn-primary btn-lg" href="#" role="button">Energia total Acumulada</a>*/
/* 		</p>*/
/* 	</div>*/
/* {% endblock %}*/
