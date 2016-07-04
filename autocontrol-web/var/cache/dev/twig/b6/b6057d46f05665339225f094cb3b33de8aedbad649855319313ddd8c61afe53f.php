<?php

/* security/login.html.twig */
class __TwigTemplate_fad893ed4b70f3ebb4dcfb4330b8a987706873873148487fe9899cdbf5f3969a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5247779e09edbcb6eb7a475600dd2a0b771d7ba0469a1393b05c417aa5e66108 = $this->env->getExtension("native_profiler");
        $__internal_5247779e09edbcb6eb7a475600dd2a0b771d7ba0469a1393b05c417aa5e66108->enter($__internal_5247779e09edbcb6eb7a475600dd2a0b771d7ba0469a1393b05c417aa5e66108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5247779e09edbcb6eb7a475600dd2a0b771d7ba0469a1393b05c417aa5e66108->leave($__internal_5247779e09edbcb6eb7a475600dd2a0b771d7ba0469a1393b05c417aa5e66108_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_56714391359b700861ee10107b6d35824ae0eaa5f633003b3cfa131c7b395fe4 = $this->env->getExtension("native_profiler");
        $__internal_56714391359b700861ee10107b6d35824ae0eaa5f633003b3cfa131c7b395fe4->enter($__internal_56714391359b700861ee10107b6d35824ae0eaa5f633003b3cfa131c7b395fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_56714391359b700861ee10107b6d35824ae0eaa5f633003b3cfa131c7b395fe4->leave($__internal_56714391359b700861ee10107b6d35824ae0eaa5f633003b3cfa131c7b395fe4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cf84af8469a7dbd2c324fa3f919bfb3cf88460d84b5a019850eab09931fc8da = $this->env->getExtension("native_profiler");
        $__internal_6cf84af8469a7dbd2c324fa3f919bfb3cf88460d84b5a019850eab09931fc8da->enter($__internal_6cf84af8469a7dbd2c324fa3f919bfb3cf88460d84b5a019850eab09931fc8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"row\">
    <div class=\"col-sm-6 col-md-4 col-md-offset-4\" id=\"loginCard\">
        <div class=\"account-wall\">
            <h1 class=\"text-center login-title\">Ingresar a Autocontrol</h1>
            <form id=\"form-signin\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"POST\" class=\"form-signin\">
                <input type=\"text\" name=\"username\" id=\"email\" class=\"form-control\" placeholder=\"Username\" required autofocus>
                <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Contraseña\" required>
                <button id=\"aceptarLogin\" class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">
                    Ingresar</button>
            </form>
            <a href=\"/\">Ir al Inicio</a>
        </div>
    </div>
</div>
";
        
        $__internal_6cf84af8469a7dbd2c324fa3f919bfb3cf88460d84b5a019850eab09931fc8da->leave($__internal_6cf84af8469a7dbd2c324fa3f919bfb3cf88460d84b5a019850eab09931fc8da_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Login{% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="row">*/
/*     <div class="col-sm-6 col-md-4 col-md-offset-4" id="loginCard">*/
/*         <div class="account-wall">*/
/*             <h1 class="text-center login-title">Ingresar a Autocontrol</h1>*/
/*             <form id="form-signin" action="{{ path('login_check') }}" method="POST" class="form-signin">*/
/*                 <input type="text" name="username" id="email" class="form-control" placeholder="Username" required autofocus>*/
/*                 <input type="password" name="password" class="form-control" placeholder="Contraseña" required>*/
/*                 <button id="aceptarLogin" class="btn btn-lg btn-primary btn-block" type="submit">*/
/*                     Ingresar</button>*/
/*             </form>*/
/*             <a href="/">Ir al Inicio</a>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
