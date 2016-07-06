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
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00ad6e9760f1c71d027e0c37f0f9ef1e89bf27e0b39a6512c2e91386f865ca6e = $this->env->getExtension("native_profiler");
        $__internal_00ad6e9760f1c71d027e0c37f0f9ef1e89bf27e0b39a6512c2e91386f865ca6e->enter($__internal_00ad6e9760f1c71d027e0c37f0f9ef1e89bf27e0b39a6512c2e91386f865ca6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index_sup.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00ad6e9760f1c71d027e0c37f0f9ef1e89bf27e0b39a6512c2e91386f865ca6e->leave($__internal_00ad6e9760f1c71d027e0c37f0f9ef1e89bf27e0b39a6512c2e91386f865ca6e_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_671b16e205e153b4e544b64ce912ee21fd990f96a5eb149bd44eea3d72813501 = $this->env->getExtension("native_profiler");
        $__internal_671b16e205e153b4e544b64ce912ee21fd990f96a5eb149bd44eea3d72813501->enter($__internal_671b16e205e153b4e544b64ce912ee21fd990f96a5eb149bd44eea3d72813501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
";
        
        $__internal_671b16e205e153b4e544b64ce912ee21fd990f96a5eb149bd44eea3d72813501->leave($__internal_671b16e205e153b4e544b64ce912ee21fd990f96a5eb149bd44eea3d72813501_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_648acace493a81129782ab09490f4fb8971d13dc735885a401aa5fc1a8ff45a3 = $this->env->getExtension("native_profiler");
        $__internal_648acace493a81129782ab09490f4fb8971d13dc735885a401aa5fc1a8ff45a3->enter($__internal_648acace493a81129782ab09490f4fb8971d13dc735885a401aa5fc1a8ff45a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "\t<div class=\"jumbotron\">
\t\t<legend>Bienvenido</legend>
\t\t<p>
\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"/admin/verterminales\" role=\"button\">Ver Terminales</a>
\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Estadisticas</a>
\t\t</p>
\t</div>
\t</div>
";
        
        $__internal_648acace493a81129782ab09490f4fb8971d13dc735885a401aa5fc1a8ff45a3->leave($__internal_648acace493a81129782ab09490f4fb8971d13dc735885a401aa5fc1a8ff45a3_prof);

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
        return array (  81 => 33,  75 => 32,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block navbar %}*/
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
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div class="jumbotron">*/
/* 		<legend>Bienvenido</legend>*/
/* 		<p>*/
/* 			<a class="btn btn-primary btn-lg" href="/admin/verterminales" role="button">Ver Terminales</a>*/
/* 			<a class="btn btn-primary btn-lg" href="#" role="button">Estadisticas</a>*/
/* 		</p>*/
/* 	</div>*/
/* 	</div>*/
/* {% endblock %}*/
