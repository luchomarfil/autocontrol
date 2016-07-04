<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_311adf32807af8dc25717b64fed879615b472d639c99aedb56a01e6241691517 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4897e83c6b2c5585d354fd53c311a6a556fafbd5e78724a37f8ea45944d4dbff = $this->env->getExtension("native_profiler");
        $__internal_4897e83c6b2c5585d354fd53c311a6a556fafbd5e78724a37f8ea45944d4dbff->enter($__internal_4897e83c6b2c5585d354fd53c311a6a556fafbd5e78724a37f8ea45944d4dbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4897e83c6b2c5585d354fd53c311a6a556fafbd5e78724a37f8ea45944d4dbff->leave($__internal_4897e83c6b2c5585d354fd53c311a6a556fafbd5e78724a37f8ea45944d4dbff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_533c6f88ddf6b24781bef8af3388d00240c85d3d065a125aa60441e11dcdc692 = $this->env->getExtension("native_profiler");
        $__internal_533c6f88ddf6b24781bef8af3388d00240c85d3d065a125aa60441e11dcdc692->enter($__internal_533c6f88ddf6b24781bef8af3388d00240c85d3d065a125aa60441e11dcdc692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_533c6f88ddf6b24781bef8af3388d00240c85d3d065a125aa60441e11dcdc692->leave($__internal_533c6f88ddf6b24781bef8af3388d00240c85d3d065a125aa60441e11dcdc692_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_50001a36e6c25c3fefbf9fc3589e44083bc193ac78ff67f63a49af7984bb61c7 = $this->env->getExtension("native_profiler");
        $__internal_50001a36e6c25c3fefbf9fc3589e44083bc193ac78ff67f63a49af7984bb61c7->enter($__internal_50001a36e6c25c3fefbf9fc3589e44083bc193ac78ff67f63a49af7984bb61c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_50001a36e6c25c3fefbf9fc3589e44083bc193ac78ff67f63a49af7984bb61c7->leave($__internal_50001a36e6c25c3fefbf9fc3589e44083bc193ac78ff67f63a49af7984bb61c7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_882626df627bbf09b166d9b42cea9acfb0599fa53a0c8d7504da23da9f335316 = $this->env->getExtension("native_profiler");
        $__internal_882626df627bbf09b166d9b42cea9acfb0599fa53a0c8d7504da23da9f335316->enter($__internal_882626df627bbf09b166d9b42cea9acfb0599fa53a0c8d7504da23da9f335316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_882626df627bbf09b166d9b42cea9acfb0599fa53a0c8d7504da23da9f335316->leave($__internal_882626df627bbf09b166d9b42cea9acfb0599fa53a0c8d7504da23da9f335316_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
