<?php

/* backend.html.twig */
class __TwigTemplate_76a935685e22b56f77f096b1b78dfcac4fd9f22a03586fbe9c7dfffd7943349e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "backend.html.twig", 1);
        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f6c6d83eef686f721daf4ec447deb8e5e199a3cbf03357435aeab7b4f493d05 = $this->env->getExtension("native_profiler");
        $__internal_9f6c6d83eef686f721daf4ec447deb8e5e199a3cbf03357435aeab7b4f493d05->enter($__internal_9f6c6d83eef686f721daf4ec447deb8e5e199a3cbf03357435aeab7b4f493d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f6c6d83eef686f721daf4ec447deb8e5e199a3cbf03357435aeab7b4f493d05->leave($__internal_9f6c6d83eef686f721daf4ec447deb8e5e199a3cbf03357435aeab7b4f493d05_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_a8afd3d6712874b4771d5364ddfc5fc68468ca418792afeaac09f557bf6ff028 = $this->env->getExtension("native_profiler");
        $__internal_a8afd3d6712874b4771d5364ddfc5fc68468ca418792afeaac09f557bf6ff028->enter($__internal_a8afd3d6712874b4771d5364ddfc5fc68468ca418792afeaac09f557bf6ff028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 4
        echo "<div>
\t<nav class=\"navbar navbar-default\" role=\"navigation\">
\t\t  <div class=\"navbar-header\">
\t\t    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
\t\t            data-target=\".navbar-ex1-collapse\">
\t\t      <span class=\"sr-only\">Desplegar navegación</span>
\t\t      <span class=\"icon-bar\"></span>
\t\t      <span class=\"icon-bar\"></span>
\t\t      <span class=\"icon-bar\"></span>
\t\t    </button>
\t\t    <a class=\"navbar-brand\" href=\"/admin\">Administración</a>
\t\t  </div>
\t\t  <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
\t\t    <ul class=\"nav navbar-nav\">
\t\t      <li class=\"dropdown\">
\t\t        <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t          Usuarios<b class=\"caret\"></b>
\t\t        </a>
\t\t        <ul class=\"dropdown-menu\">
\t\t          <li><a href=\"/admin/usuario/new\">Alta</a></li>
\t\t          <li class=\"divider\"></li>
\t\t          <li><a href=\"/admin/usuario\">Listar</a></li>
\t\t        </ul>
\t\t      </li>
\t\t    </ul>
\t\t    <ul class=\"nav navbar-nav\">
\t\t      <li class=\"dropdown\">
\t\t        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t          Terminales<b class=\"caret\"></b>
\t\t        </a>
\t\t        <ul class=\"dropdown-menu\">
\t\t          <li><a href=\"/admin/terminal/new\">Alta</a></li>
\t\t          <li class=\"divider\"></li>
\t\t          <li><a href=\"/admin/terminal\">Listar</a></li>
\t\t        </ul>
\t\t      </li>
\t\t    </ul>
\t\t    <ul class=\"nav navbar-nav\">
\t\t      <li class=\"dropdown\">
\t\t        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t          Baterias<b class=\"caret\"></b>
\t\t        </a>
\t\t        <ul class=\"dropdown-menu\">
\t\t          <li><a href=\"/admin/bateria/new\">Alta</a></li>
\t\t          <li class=\"divider\"></li>
\t\t          <li><a href=\"/admin/bateria\">Listar</a></li>
\t\t        </ul>
\t\t      </li>
\t\t    </ul>
\t\t    <ul class=\"nav navbar-nav\">
\t\t      <li class=\"dropdown\">
\t\t        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t          Centros de Alm.<b class=\"caret\"></b>
\t\t        </a>
\t\t        <ul class=\"dropdown-menu\">
\t\t          <li><a href=\"/admin/centroalmacenamiento/new\">Alta</a></li>
\t\t          <li class=\"divider\"></li>
\t\t          <li><a href=\"/admin/centroalmacenamiento\">Listar</a></li>
\t\t        </ul>
\t\t      </li>
\t\t    </ul>        

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
</div>
";
        
        $__internal_a8afd3d6712874b4771d5364ddfc5fc68468ca418792afeaac09f557bf6ff028->leave($__internal_a8afd3d6712874b4771d5364ddfc5fc68468ca418792afeaac09f557bf6ff028_prof);

    }

    public function getTemplateName()
    {
        return "backend.html.twig";
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
/* {% block navbar %}*/
/* <div>*/
/* 	<nav class="navbar navbar-default" role="navigation">*/
/* 		  <div class="navbar-header">*/
/* 		    <button type="button" class="navbar-toggle" data-toggle="collapse"*/
/* 		            data-target=".navbar-ex1-collapse">*/
/* 		      <span class="sr-only">Desplegar navegación</span>*/
/* 		      <span class="icon-bar"></span>*/
/* 		      <span class="icon-bar"></span>*/
/* 		      <span class="icon-bar"></span>*/
/* 		    </button>*/
/* 		    <a class="navbar-brand" href="/admin">Administración</a>*/
/* 		  </div>*/
/* 		  <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/* 		    <ul class="nav navbar-nav">*/
/* 		      <li class="dropdown">*/
/* 		        <a href="" class="dropdown-toggle" data-toggle="dropdown">*/
/* 		          Usuarios<b class="caret"></b>*/
/* 		        </a>*/
/* 		        <ul class="dropdown-menu">*/
/* 		          <li><a href="/admin/usuario/new">Alta</a></li>*/
/* 		          <li class="divider"></li>*/
/* 		          <li><a href="/admin/usuario">Listar</a></li>*/
/* 		        </ul>*/
/* 		      </li>*/
/* 		    </ul>*/
/* 		    <ul class="nav navbar-nav">*/
/* 		      <li class="dropdown">*/
/* 		        <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/* 		          Terminales<b class="caret"></b>*/
/* 		        </a>*/
/* 		        <ul class="dropdown-menu">*/
/* 		          <li><a href="/admin/terminal/new">Alta</a></li>*/
/* 		          <li class="divider"></li>*/
/* 		          <li><a href="/admin/terminal">Listar</a></li>*/
/* 		        </ul>*/
/* 		      </li>*/
/* 		    </ul>*/
/* 		    <ul class="nav navbar-nav">*/
/* 		      <li class="dropdown">*/
/* 		        <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/* 		          Baterias<b class="caret"></b>*/
/* 		        </a>*/
/* 		        <ul class="dropdown-menu">*/
/* 		          <li><a href="/admin/bateria/new">Alta</a></li>*/
/* 		          <li class="divider"></li>*/
/* 		          <li><a href="/admin/bateria">Listar</a></li>*/
/* 		        </ul>*/
/* 		      </li>*/
/* 		    </ul>*/
/* 		    <ul class="nav navbar-nav">*/
/* 		      <li class="dropdown">*/
/* 		        <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/* 		          Centros de Alm.<b class="caret"></b>*/
/* 		        </a>*/
/* 		        <ul class="dropdown-menu">*/
/* 		          <li><a href="/admin/centroalmacenamiento/new">Alta</a></li>*/
/* 		          <li class="divider"></li>*/
/* 		          <li><a href="/admin/centroalmacenamiento">Listar</a></li>*/
/* 		        </ul>*/
/* 		      </li>*/
/* 		    </ul>        */
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
/* </div>*/
/* {% endblock %}*/
/* */
