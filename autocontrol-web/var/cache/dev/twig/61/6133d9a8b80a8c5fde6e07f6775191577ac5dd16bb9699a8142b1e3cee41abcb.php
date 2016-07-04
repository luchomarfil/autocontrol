<?php

/* bateria/new.html.twig */
class __TwigTemplate_60ad105ac59f594fa934bc273b9991cf4926201e7adac96624fe26196395b472 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "bateria/new.html.twig", 1);
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
        $__internal_833bd5282cc952bd754a5fbfb757e60ed598700ebeb0872810e829f2a1affd96 = $this->env->getExtension("native_profiler");
        $__internal_833bd5282cc952bd754a5fbfb757e60ed598700ebeb0872810e829f2a1affd96->enter($__internal_833bd5282cc952bd754a5fbfb757e60ed598700ebeb0872810e829f2a1affd96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bateria/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_833bd5282cc952bd754a5fbfb757e60ed598700ebeb0872810e829f2a1affd96->leave($__internal_833bd5282cc952bd754a5fbfb757e60ed598700ebeb0872810e829f2a1affd96_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1b257885dc2ebb1d83bdd4fd65e2474729a19dc892a3a36be26cf76cf1642d0 = $this->env->getExtension("native_profiler");
        $__internal_e1b257885dc2ebb1d83bdd4fd65e2474729a19dc892a3a36be26cf76cf1642d0->enter($__internal_e1b257885dc2ebb1d83bdd4fd65e2474729a19dc892a3a36be26cf76cf1642d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container col-md-7 col-md-offset-2\">
    <legend>Alta de Batería</legend>

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
        echo $this->env->getExtension('routing')->getPath("bateria_index");
        echo "\">Volver al listado</a>
</div>
";
        
        $__internal_e1b257885dc2ebb1d83bdd4fd65e2474729a19dc892a3a36be26cf76cf1642d0->leave($__internal_e1b257885dc2ebb1d83bdd4fd65e2474729a19dc892a3a36be26cf76cf1642d0_prof);

    }

    public function getTemplateName()
    {
        return "bateria/new.html.twig";
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
/*     <legend>Alta de Batería</legend>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input class="btn btn-success" type="submit" value="Crear" />*/
/*     {{ form_end(form) }}*/
/*     <br>*/
/*     <legend></legend>*/
/*     <a class="btn btn-info" href="{{ path('bateria_index') }}">Volver al listado</a>*/
/* </div>*/
/* {% endblock %}*/
/* */
