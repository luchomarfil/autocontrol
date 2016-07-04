<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_14a5e6938fdb1cf3f8547073684c5989d86cd0f19c1201d2d88fb5af67d65129 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee533087234fa87f7435ad76774058d45a24a7da3658ac47c588a5732c5b98f8 = $this->env->getExtension("native_profiler");
        $__internal_ee533087234fa87f7435ad76774058d45a24a7da3658ac47c588a5732c5b98f8->enter($__internal_ee533087234fa87f7435ad76774058d45a24a7da3658ac47c588a5732c5b98f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee533087234fa87f7435ad76774058d45a24a7da3658ac47c588a5732c5b98f8->leave($__internal_ee533087234fa87f7435ad76774058d45a24a7da3658ac47c588a5732c5b98f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_152460f7ed4a2bf855ad059e7f962fdd50e06da6be2bde02fc18c6c25a159e20 = $this->env->getExtension("native_profiler");
        $__internal_152460f7ed4a2bf855ad059e7f962fdd50e06da6be2bde02fc18c6c25a159e20->enter($__internal_152460f7ed4a2bf855ad059e7f962fdd50e06da6be2bde02fc18c6c25a159e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_152460f7ed4a2bf855ad059e7f962fdd50e06da6be2bde02fc18c6c25a159e20->leave($__internal_152460f7ed4a2bf855ad059e7f962fdd50e06da6be2bde02fc18c6c25a159e20_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b299c024bc987fd09a056ef5e22baaea06cb1b5c033cadef411b12d23b7da04 = $this->env->getExtension("native_profiler");
        $__internal_2b299c024bc987fd09a056ef5e22baaea06cb1b5c033cadef411b12d23b7da04->enter($__internal_2b299c024bc987fd09a056ef5e22baaea06cb1b5c033cadef411b12d23b7da04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2b299c024bc987fd09a056ef5e22baaea06cb1b5c033cadef411b12d23b7da04->leave($__internal_2b299c024bc987fd09a056ef5e22baaea06cb1b5c033cadef411b12d23b7da04_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd20da46400f3a8e864851f6476361ba3cfc2111a57f9bbe3bdd21e4a9e68245 = $this->env->getExtension("native_profiler");
        $__internal_dd20da46400f3a8e864851f6476361ba3cfc2111a57f9bbe3bdd21e4a9e68245->enter($__internal_dd20da46400f3a8e864851f6476361ba3cfc2111a57f9bbe3bdd21e4a9e68245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dd20da46400f3a8e864851f6476361ba3cfc2111a57f9bbe3bdd21e4a9e68245->leave($__internal_dd20da46400f3a8e864851f6476361ba3cfc2111a57f9bbe3bdd21e4a9e68245_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
