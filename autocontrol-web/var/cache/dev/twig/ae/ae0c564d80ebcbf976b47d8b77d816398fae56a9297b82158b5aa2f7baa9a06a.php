<?php

/* centroalmacenamiento/new.html.twig */
class __TwigTemplate_075c7b767dfa98d4684a90d445d9f74c1b001fcb4ecd9bab43ab7c2ededf5a42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "centroalmacenamiento/new.html.twig", 1);
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
        $__internal_fe732aad9b736e9223678de29b9addea8db113dc888d39efb0f6bc39c7030065 = $this->env->getExtension("native_profiler");
        $__internal_fe732aad9b736e9223678de29b9addea8db113dc888d39efb0f6bc39c7030065->enter($__internal_fe732aad9b736e9223678de29b9addea8db113dc888d39efb0f6bc39c7030065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "centroalmacenamiento/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe732aad9b736e9223678de29b9addea8db113dc888d39efb0f6bc39c7030065->leave($__internal_fe732aad9b736e9223678de29b9addea8db113dc888d39efb0f6bc39c7030065_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_83e351e1e1d53baaed244590ea09d0e10c6a0e483a65ed219e321aad284db92b = $this->env->getExtension("native_profiler");
        $__internal_83e351e1e1d53baaed244590ea09d0e10c6a0e483a65ed219e321aad284db92b->enter($__internal_83e351e1e1d53baaed244590ea09d0e10c6a0e483a65ed219e321aad284db92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container col-md-7 col-md-offset-2\">
    <legend>Alta de Centro de Almacenamiento</legend>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input class=\"btn btn-success\" type=\"submit\" value=\"Crear\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    <br>
    <legend></legend>
    <a class=\"btn btn-info\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("centroalmacenamiento_index");
        echo "\">Volver al listado</a>
</div>
";
        
        $__internal_83e351e1e1d53baaed244590ea09d0e10c6a0e483a65ed219e321aad284db92b->leave($__internal_83e351e1e1d53baaed244590ea09d0e10c6a0e483a65ed219e321aad284db92b_prof);

    }

    public function getTemplateName()
    {
        return "centroalmacenamiento/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  54 => 10,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'backend.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="container col-md-7 col-md-offset-2">*/
/*     <legend>Alta de Centro de Almacenamiento</legend>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input class="btn btn-success" type="submit" value="Crear" />*/
/*     {{ form_end(form) }}*/
/*     <br>*/
/*     <legend></legend>*/
/*     <a class="btn btn-info" href="{{ path('centroalmacenamiento_index') }}">Volver al listado</a>*/
/* </div>*/
/* {% endblock %}*/
/* */
