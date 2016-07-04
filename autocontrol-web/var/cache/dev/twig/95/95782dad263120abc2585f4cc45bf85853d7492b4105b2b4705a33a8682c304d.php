<?php

/* usuario/new.html.twig */
class __TwigTemplate_b42d083425b2d4850dcf434a4e504a0f7a2407ade3c3c077b3a869d5f62ccd35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "usuario/new.html.twig", 1);
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
        $__internal_966d18674e188ac60cc83a4e8b17ee44ddeee316dce8463e2add8797817a2576 = $this->env->getExtension("native_profiler");
        $__internal_966d18674e188ac60cc83a4e8b17ee44ddeee316dce8463e2add8797817a2576->enter($__internal_966d18674e188ac60cc83a4e8b17ee44ddeee316dce8463e2add8797817a2576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_966d18674e188ac60cc83a4e8b17ee44ddeee316dce8463e2add8797817a2576->leave($__internal_966d18674e188ac60cc83a4e8b17ee44ddeee316dce8463e2add8797817a2576_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b9360c104d85f3695008382918a47b5576f6f47aa0ed6838dac938b94f99ddc = $this->env->getExtension("native_profiler");
        $__internal_3b9360c104d85f3695008382918a47b5576f6f47aa0ed6838dac938b94f99ddc->enter($__internal_3b9360c104d85f3695008382918a47b5576f6f47aa0ed6838dac938b94f99ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container col-md-7 col-md-offset-2\">
    <legend>Alta de Supervisor</legend>

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
        echo $this->env->getExtension('routing')->getPath("usuario_index");
        echo "\">Volver al listado</a>
</div>
";
        
        $__internal_3b9360c104d85f3695008382918a47b5576f6f47aa0ed6838dac938b94f99ddc->leave($__internal_3b9360c104d85f3695008382918a47b5576f6f47aa0ed6838dac938b94f99ddc_prof);

    }

    public function getTemplateName()
    {
        return "usuario/new.html.twig";
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
/*     <legend>Alta de Supervisor</legend>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input class="btn btn-success" type="submit" value="Crear" />*/
/*     {{ form_end(form) }}*/
/*     <br>*/
/*     <legend></legend>*/
/*     <a class="btn btn-info" href="{{ path('usuario_index') }}">Volver al listado</a>*/
/* </div>*/
/* {% endblock %}*/
/* */
