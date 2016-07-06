<?php

/* terminal/edit.html.twig */
class __TwigTemplate_4d6714e1651486172743dba0cdb9784802186616b602b9c3be470cfaf2e90d75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "terminal/edit.html.twig", 1);
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
        $__internal_ab5bd06a557781749d3f16636d02792c9b08ceff17e8ebcbf08b89f24902e588 = $this->env->getExtension("native_profiler");
        $__internal_ab5bd06a557781749d3f16636d02792c9b08ceff17e8ebcbf08b89f24902e588->enter($__internal_ab5bd06a557781749d3f16636d02792c9b08ceff17e8ebcbf08b89f24902e588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "terminal/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab5bd06a557781749d3f16636d02792c9b08ceff17e8ebcbf08b89f24902e588->leave($__internal_ab5bd06a557781749d3f16636d02792c9b08ceff17e8ebcbf08b89f24902e588_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d9f919b92f69df38ee7858596770eb5b775887a52759cd6a1e135cdd1027714 = $this->env->getExtension("native_profiler");
        $__internal_4d9f919b92f69df38ee7858596770eb5b775887a52759cd6a1e135cdd1027714->enter($__internal_4d9f919b92f69df38ee7858596770eb5b775887a52759cd6a1e135cdd1027714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container col-md-7 col-md-offset-2\">
    <legend>Editar Terminal</legend>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input class=\"btn btn-success\" type=\"submit\" value=\"Editar\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    <br>
    <legend></legend>
    <a class=\"btn btn-info\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("terminal_index");
        echo "\">Volver al listado</a>
</div>
";
        
        $__internal_4d9f919b92f69df38ee7858596770eb5b775887a52759cd6a1e135cdd1027714->leave($__internal_4d9f919b92f69df38ee7858596770eb5b775887a52759cd6a1e135cdd1027714_prof);

    }

    public function getTemplateName()
    {
        return "terminal/edit.html.twig";
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
/*     <legend>Editar Terminal</legend>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input class="btn btn-success" type="submit" value="Editar" />*/
/*     {{ form_end(edit_form) }}*/
/*     <br>*/
/*     <legend></legend>*/
/*     <a class="btn btn-info" href="{{ path('terminal_index') }}">Volver al listado</a>*/
/* </div>*/
/* {% endblock %}*/
/* */
