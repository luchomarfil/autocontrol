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
        $__internal_6c0fed0a3c87759fadc91b7ddada6d2b5e7126d17e53f00b28c6ff82e0de4824 = $this->env->getExtension("native_profiler");
        $__internal_6c0fed0a3c87759fadc91b7ddada6d2b5e7126d17e53f00b28c6ff82e0de4824->enter($__internal_6c0fed0a3c87759fadc91b7ddada6d2b5e7126d17e53f00b28c6ff82e0de4824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c0fed0a3c87759fadc91b7ddada6d2b5e7126d17e53f00b28c6ff82e0de4824->leave($__internal_6c0fed0a3c87759fadc91b7ddada6d2b5e7126d17e53f00b28c6ff82e0de4824_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b8db94f13be6e70126d05c7607cfecec2b60ea8bff75f3ca6de21172bae0e8c = $this->env->getExtension("native_profiler");
        $__internal_2b8db94f13be6e70126d05c7607cfecec2b60ea8bff75f3ca6de21172bae0e8c->enter($__internal_2b8db94f13be6e70126d05c7607cfecec2b60ea8bff75f3ca6de21172bae0e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"jumbotron\">
\t\t<h1>Bienvenido</h1>
\t\t<legend>Estadísticas disponibles:</legend>
\t\t<p>
\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"/admin/autoshora\" role=\"button\">Autos por Hora</a>
\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Autos por Terminales</a>
\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Energia total Acumulada</a>
\t\t</p>
\t</div>
";
        
        $__internal_2b8db94f13be6e70126d05c7607cfecec2b60ea8bff75f3ca6de21172bae0e8c->leave($__internal_2b8db94f13be6e70126d05c7607cfecec2b60ea8bff75f3ca6de21172bae0e8c_prof);

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
/* 			<a class="btn btn-primary btn-lg" href="/admin/autoshora" role="button">Autos por Hora</a>*/
/* 			<a class="btn btn-primary btn-lg" href="#" role="button">Autos por Terminales</a>*/
/* 			<a class="btn btn-primary btn-lg" href="#" role="button">Energia total Acumulada</a>*/
/* 		</p>*/
/* 	</div>*/
/* {% endblock %}*/
