<?php

/* base.html.twig */
class __TwigTemplate_068d42802cd9c28a87ea1d60baf561792b3629973f89d62881ca5d85dfa996b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfe0ef4972df94611d89a1c724584706ce4ce059cefb97f89da864b46b6851e0 = $this->env->getExtension("native_profiler");
        $__internal_cfe0ef4972df94611d89a1c724584706ce4ce059cefb97f89da864b46b6851e0->enter($__internal_cfe0ef4972df94611d89a1c724584706ce4ce059cefb97f89da864b46b6851e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
    \t<script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>
    \t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <div class=\"container\">
        ";
        // line 13
        $this->displayBlock('navbar', $context, $blocks);
        // line 14
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "\t</div>
</html>
";
        
        $__internal_cfe0ef4972df94611d89a1c724584706ce4ce059cefb97f89da864b46b6851e0->leave($__internal_cfe0ef4972df94611d89a1c724584706ce4ce059cefb97f89da864b46b6851e0_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c2c572983e8e2a7e52c90b1e563ba8ccbe894f77bcbbc1c382ba4cb569a7fe4 = $this->env->getExtension("native_profiler");
        $__internal_7c2c572983e8e2a7e52c90b1e563ba8ccbe894f77bcbbc1c382ba4cb569a7fe4->enter($__internal_7c2c572983e8e2a7e52c90b1e563ba8ccbe894f77bcbbc1c382ba4cb569a7fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Autocontrol";
        
        $__internal_7c2c572983e8e2a7e52c90b1e563ba8ccbe894f77bcbbc1c382ba4cb569a7fe4->leave($__internal_7c2c572983e8e2a7e52c90b1e563ba8ccbe894f77bcbbc1c382ba4cb569a7fe4_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c91299a23ae08cf19373ba1b660aedbac43ab78cbcf55861d0caad40b9162bf3 = $this->env->getExtension("native_profiler");
        $__internal_c91299a23ae08cf19373ba1b660aedbac43ab78cbcf55861d0caad40b9162bf3->enter($__internal_c91299a23ae08cf19373ba1b660aedbac43ab78cbcf55861d0caad40b9162bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c91299a23ae08cf19373ba1b660aedbac43ab78cbcf55861d0caad40b9162bf3->leave($__internal_c91299a23ae08cf19373ba1b660aedbac43ab78cbcf55861d0caad40b9162bf3_prof);

    }

    // line 13
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_3507bd8d6f0e62271dfcbe8df37e4dafad94143a6560a1d943c2ffd49a8779ce = $this->env->getExtension("native_profiler");
        $__internal_3507bd8d6f0e62271dfcbe8df37e4dafad94143a6560a1d943c2ffd49a8779ce->enter($__internal_3507bd8d6f0e62271dfcbe8df37e4dafad94143a6560a1d943c2ffd49a8779ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_3507bd8d6f0e62271dfcbe8df37e4dafad94143a6560a1d943c2ffd49a8779ce->leave($__internal_3507bd8d6f0e62271dfcbe8df37e4dafad94143a6560a1d943c2ffd49a8779ce_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_808019f6680582cc59ce28a12ba6590925a37f13c14006fffbb9ce8c26952c21 = $this->env->getExtension("native_profiler");
        $__internal_808019f6680582cc59ce28a12ba6590925a37f13c14006fffbb9ce8c26952c21->enter($__internal_808019f6680582cc59ce28a12ba6590925a37f13c14006fffbb9ce8c26952c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "\t\t";
        
        $__internal_808019f6680582cc59ce28a12ba6590925a37f13c14006fffbb9ce8c26952c21->leave($__internal_808019f6680582cc59ce28a12ba6590925a37f13c14006fffbb9ce8c26952c21_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 15,  97 => 14,  86 => 13,  75 => 10,  63 => 9,  54 => 16,  51 => 14,  49 => 13,  45 => 11,  43 => 10,  39 => 9,  33 => 6,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">*/
/*         <link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/*     	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>*/
/*     	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/*         <title>{% block title %}Autocontrol{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*     </head>*/
/*     <div class="container">*/
/*         {% block navbar %}{% endblock %}*/
/* 		{% block body %}*/
/* 		{% endblock %}*/
/* 	</div>*/
/* </html>*/
/* */
