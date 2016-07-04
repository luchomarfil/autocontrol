<?php

/* FrontBundle:Default:index.html.twig */
class __TwigTemplate_5b7f69b997509bcad5e8cf270c6a43596ecd74285dfe3cfe81dfb55ceec36c08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bacf5ddb5598dc64b2d3814585cedccef53affb80f05817831caa88309ebb1d = $this->env->getExtension("native_profiler");
        $__internal_7bacf5ddb5598dc64b2d3814585cedccef53affb80f05817831caa88309ebb1d->enter($__internal_7bacf5ddb5598dc64b2d3814585cedccef53affb80f05817831caa88309ebb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

        // line 1
        echo "﻿<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Autocontrol</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />

    
</head>
<body>
    <nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">Autocontrol</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav navbar-left\">
        <li><a href=\"#\">Ver tráfico</a></li>
      </ul>
            <ul class=\"nav navbar-nav navbar-left\">
        <li><a href=\"#\">Puntos de interés</a></li>
      </ul>
      <form class=\"navbar-form navbar-left\" role=\"search\">
        <div class=\"form-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Buscar\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Buscar</button>
      </form>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"#\">Quiénes Somos</a></li>
      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"#\">Crea tu energía</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>






    <div class=\"container\">
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
  <!-- Indicators -->
  <ol class=\"carousel-indicators\">
    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"item active\">
      <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/auto1.jpg"), "html", null, true);
        echo "\" alt=\"auto1\">
    </div>

    <div class=\"item\">
      <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/auto2.jpg"), "html", null, true);
        echo "\" alt=\"auto2\">
    </div>

    <div class=\"item\">
      <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/auto3.jpg"), "html", null, true);
        echo "\" alt=\"auto3\">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Anterior</span>
  </a>
  <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Siguiente</span>
  </a>
</div>
</div>
</body>
<script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
</html>";
        
        $__internal_7bacf5ddb5598dc64b2d3814585cedccef53affb80f05817831caa88309ebb1d->leave($__internal_7bacf5ddb5598dc64b2d3814585cedccef53affb80f05817831caa88309ebb1d_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 79,  104 => 75,  97 => 71,  35 => 12,  22 => 1,);
    }
}
/* ﻿<!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <title>Autocontrol</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">*/
/* 	<link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/* */
/*     */
/* </head>*/
/* <body>*/
/*     <nav class="navbar navbar-default">*/
/*   <div class="container-fluid">*/
/*     <!-- Brand and toggle get grouped for better mobile display -->*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*       <a class="navbar-brand" href="#">Autocontrol</a>*/
/*     </div>*/
/* */
/*     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*       <ul class="nav navbar-nav navbar-left">*/
/*         <li><a href="#">Ver tráfico</a></li>*/
/*       </ul>*/
/*             <ul class="nav navbar-nav navbar-left">*/
/*         <li><a href="#">Puntos de interés</a></li>*/
/*       </ul>*/
/*       <form class="navbar-form navbar-left" role="search">*/
/*         <div class="form-group">*/
/*           <input type="text" class="form-control" placeholder="Buscar">*/
/*         </div>*/
/*         <button type="submit" class="btn btn-default">Buscar</button>*/
/*       </form>*/
/*       <ul class="nav navbar-nav navbar-right">*/
/*         <li><a href="#">Quiénes Somos</a></li>*/
/*       </ul>*/
/*       <ul class="nav navbar-nav navbar-right">*/
/*         <li><a href="#">Crea tu energía</a></li>*/
/*       </ul>*/
/*     </div><!-- /.navbar-collapse -->*/
/*   </div><!-- /.container-fluid -->*/
/* </nav>*/
/* */
/* */
/* */
/* */
/* */
/* */
/*     <div class="container">*/
/*     <div id="myCarousel" class="carousel slide" data-ride="carousel">*/
/*   <!-- Indicators -->*/
/*   <ol class="carousel-indicators">*/
/*     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/*     <li data-target="#myCarousel" data-slide-to="1"></li>*/
/*     <li data-target="#myCarousel" data-slide-to="2"></li>*/
/*   </ol>*/
/* */
/*   <!-- Wrapper for slides -->*/
/*   <div class="carousel-inner" role="listbox">*/
/*     <div class="item active">*/
/*       <img src="{{ asset('img/auto1.jpg') }}" alt="auto1">*/
/*     </div>*/
/* */
/*     <div class="item">*/
/*       <img src="{{ asset('img/auto2.jpg') }}" alt="auto2">*/
/*     </div>*/
/* */
/*     <div class="item">*/
/*       <img src="{{ asset('img/auto3.jpg') }}" alt="auto3">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <!-- Left and right controls -->*/
/*   <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">*/
/*     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*     <span class="sr-only">Anterior</span>*/
/*   </a>*/
/*   <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">*/
/*     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*     <span class="sr-only">Siguiente</span>*/
/*   </a>*/
/* </div>*/
/* </div>*/
/* </body>*/
/* <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>*/
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/* </html>*/
