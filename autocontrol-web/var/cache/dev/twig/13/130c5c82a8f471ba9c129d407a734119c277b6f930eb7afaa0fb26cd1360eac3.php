<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_97d5556d8063dafacdf8655566836941edb6274efe0a4bd7117274f4cae749b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_0c2b9c35779ca4b34205faf55261b2f5cf144acca9c64aff3ff7ca080e54506a = $this->env->getExtension("native_profiler");
        $__internal_0c2b9c35779ca4b34205faf55261b2f5cf144acca9c64aff3ff7ca080e54506a->enter($__internal_0c2b9c35779ca4b34205faf55261b2f5cf144acca9c64aff3ff7ca080e54506a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c2b9c35779ca4b34205faf55261b2f5cf144acca9c64aff3ff7ca080e54506a->leave($__internal_0c2b9c35779ca4b34205faf55261b2f5cf144acca9c64aff3ff7ca080e54506a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ad54af5e4cedf1feedbda93b544034b398cb707adf9761d449284fe461bf09bd = $this->env->getExtension("native_profiler");
        $__internal_ad54af5e4cedf1feedbda93b544034b398cb707adf9761d449284fe461bf09bd->enter($__internal_ad54af5e4cedf1feedbda93b544034b398cb707adf9761d449284fe461bf09bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ad54af5e4cedf1feedbda93b544034b398cb707adf9761d449284fe461bf09bd->leave($__internal_ad54af5e4cedf1feedbda93b544034b398cb707adf9761d449284fe461bf09bd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1f8dc1cda4f582c17df8f6e8e7fd71197e5fe7643dab502f4220ba12475ad39e = $this->env->getExtension("native_profiler");
        $__internal_1f8dc1cda4f582c17df8f6e8e7fd71197e5fe7643dab502f4220ba12475ad39e->enter($__internal_1f8dc1cda4f582c17df8f6e8e7fd71197e5fe7643dab502f4220ba12475ad39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1f8dc1cda4f582c17df8f6e8e7fd71197e5fe7643dab502f4220ba12475ad39e->leave($__internal_1f8dc1cda4f582c17df8f6e8e7fd71197e5fe7643dab502f4220ba12475ad39e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d771c7c05911e855d9c9bb60d673a0f122467864dfae19f654dd4a6cec1e9748 = $this->env->getExtension("native_profiler");
        $__internal_d771c7c05911e855d9c9bb60d673a0f122467864dfae19f654dd4a6cec1e9748->enter($__internal_d771c7c05911e855d9c9bb60d673a0f122467864dfae19f654dd4a6cec1e9748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d771c7c05911e855d9c9bb60d673a0f122467864dfae19f654dd4a6cec1e9748->leave($__internal_d771c7c05911e855d9c9bb60d673a0f122467864dfae19f654dd4a6cec1e9748_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
