<?php

/* default/index_sup.html.twig */
class __TwigTemplate_cefae8d67499c5a3e552acb17a084ef07b25251ca27f1db807e3240070e21196 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index_sup.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5ab66ff0515c74ce9c2a0cb7608765b224d0a509d0380b56fe0e31f4b555709 = $this->env->getExtension("native_profiler");
        $__internal_f5ab66ff0515c74ce9c2a0cb7608765b224d0a509d0380b56fe0e31f4b555709->enter($__internal_f5ab66ff0515c74ce9c2a0cb7608765b224d0a509d0380b56fe0e31f4b555709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index_sup.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5ab66ff0515c74ce9c2a0cb7608765b224d0a509d0380b56fe0e31f4b555709->leave($__internal_f5ab66ff0515c74ce9c2a0cb7608765b224d0a509d0380b56fe0e31f4b555709_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b685140d0f28173b52667f61b388affbe64b245f4b17d60b32c83ad91276ca83 = $this->env->getExtension("native_profiler");
        $__internal_b685140d0f28173b52667f61b388affbe64b245f4b17d60b32c83ad91276ca83->enter($__internal_b685140d0f28173b52667f61b388affbe64b245f4b17d60b32c83ad91276ca83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div>
\t<nav class=\"navbar navbar-default\" role=\"navigation\">
\t\t  <div class=\"navbar-header\">
\t\t    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
\t\t            data-target=\".navbar-ex1-collapse\">
\t\t      <span class=\"sr-only\">Desplegar navegación</span>
\t\t      <span class=\"icon-bar\"></span>
\t\t      <span class=\"icon-bar\"></span>
\t\t      <span class=\"icon-bar\"></span>
\t\t    </button>
\t\t    <a class=\"navbar-brand\" href=\"/admin\">Supervisión</a>
\t\t  </div>     

\t\t   \t<ul class=\"nav navbar-nav navbar-right\">
\t\t      <li class=\"dropdown\">
\t\t        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t         Usuario <b class=\"caret\"></b>
\t\t        </a>
\t\t        <ul class=\"dropdown-menu\">
\t\t        \t<li><a href=\"/\">Página Principal</a></li>
\t\t        \t<li class=\"divider\"></li>
\t\t        \t<li><a href=\"/admin/logout\">Cerrar Sesión</a></li>
\t\t        </ul>
\t\t      </li>
\t\t    </ul>
\t\t  </div>
\t\t</nav>
\t<div class=\"jumbotron\">
\t\t<legend>Bienvenido</legend>
\t\t<p>
\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Ver Terminales</a>
\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Estadisticas</a>
\t\t</p>
\t</div>
\t</div>
";
        
        $__internal_b685140d0f28173b52667f61b388affbe64b245f4b17d60b32c83ad91276ca83->leave($__internal_b685140d0f28173b52667f61b388affbe64b245f4b17d60b32c83ad91276ca83_prof);

    }

    public function getTemplateName()
    {
        return "default/index_sup.html.twig";
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
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<div>*/
/* 	<nav class="navbar navbar-default" role="navigation">*/
/* 		  <div class="navbar-header">*/
/* 		    <button type="button" class="navbar-toggle" data-toggle="collapse"*/
/* 		            data-target=".navbar-ex1-collapse">*/
/* 		      <span class="sr-only">Desplegar navegación</span>*/
/* 		      <span class="icon-bar"></span>*/
/* 		      <span class="icon-bar"></span>*/
/* 		      <span class="icon-bar"></span>*/
/* 		    </button>*/
/* 		    <a class="navbar-brand" href="/admin">Supervisión</a>*/
/* 		  </div>     */
/* */
/* 		   	<ul class="nav navbar-nav navbar-right">*/
/* 		      <li class="dropdown">*/
/* 		        <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/* 		         Usuario <b class="caret"></b>*/
/* 		        </a>*/
/* 		        <ul class="dropdown-menu">*/
/* 		        	<li><a href="/">Página Principal</a></li>*/
/* 		        	<li class="divider"></li>*/
/* 		        	<li><a href="/admin/logout">Cerrar Sesión</a></li>*/
/* 		        </ul>*/
/* 		      </li>*/
/* 		    </ul>*/
/* 		  </div>*/
/* 		</nav>*/
/* 	<div class="jumbotron">*/
/* 		<legend>Bienvenido</legend>*/
/* 		<p>*/
/* 			<a class="btn btn-primary btn-lg" href="#" role="button">Ver Terminales</a>*/
/* 			<a class="btn btn-primary btn-lg" href="#" role="button">Estadisticas</a>*/
/* 		</p>*/
/* 	</div>*/
/* 	</div>*/
/* {% endblock %}*/
