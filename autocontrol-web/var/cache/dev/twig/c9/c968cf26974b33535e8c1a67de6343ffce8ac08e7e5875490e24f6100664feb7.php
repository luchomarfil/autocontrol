<?php

/* terminal/new.html.twig */
class __TwigTemplate_978db8348ab1034284a7de261b15f8d7a2119952921a08c2b0bd1b38589d7ec7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "terminal/new.html.twig", 1);
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
        $__internal_d5ce108947643678f51d32c4b66d598acb90ba2f3870a915b1671c7da69ef0aa = $this->env->getExtension("native_profiler");
        $__internal_d5ce108947643678f51d32c4b66d598acb90ba2f3870a915b1671c7da69ef0aa->enter($__internal_d5ce108947643678f51d32c4b66d598acb90ba2f3870a915b1671c7da69ef0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "terminal/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5ce108947643678f51d32c4b66d598acb90ba2f3870a915b1671c7da69ef0aa->leave($__internal_d5ce108947643678f51d32c4b66d598acb90ba2f3870a915b1671c7da69ef0aa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_73421d331e7cdbe353f3a23144b1ce825ccb979eba05c8daac7e12da76aebf91 = $this->env->getExtension("native_profiler");
        $__internal_73421d331e7cdbe353f3a23144b1ce825ccb979eba05c8daac7e12da76aebf91->enter($__internal_73421d331e7cdbe353f3a23144b1ce825ccb979eba05c8daac7e12da76aebf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container col-md-7 col-md-offset-2\">
    <legend>Alta de Terminal</legend>

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
        echo $this->env->getExtension('routing')->getPath("terminal_index");
        echo "\">Volver al listado</a>
</div>
";
        
        $__internal_73421d331e7cdbe353f3a23144b1ce825ccb979eba05c8daac7e12da76aebf91->leave($__internal_73421d331e7cdbe353f3a23144b1ce825ccb979eba05c8daac7e12da76aebf91_prof);

    }

    public function getTemplateName()
    {
        return "terminal/new.html.twig";
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
/*     <div class="container col-md-7 col-md-offset-2">*/
/*     <legend>Alta de Terminal</legend>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input class="btn btn-success" type="submit" value="Crear" />*/
/*     {{ form_end(form) }}*/
/*     <br>*/
/*     <legend></legend>*/
/*     <a class="btn btn-info" href="{{ path('terminal_index') }}">Volver al listado</a>*/
/* </div>*/
/* {% endblock %}*/
/* */
