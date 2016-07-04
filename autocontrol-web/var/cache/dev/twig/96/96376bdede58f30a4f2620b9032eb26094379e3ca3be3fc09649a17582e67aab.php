<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_631ebc9e49f96c8650ec3beef3f05ec1ad95703f9f6fabcf88659403275d476b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f78e39ede923fb14fda6532eb75f43b3a581fa893a3f99b74bb3b3417e525ae0 = $this->env->getExtension("native_profiler");
        $__internal_f78e39ede923fb14fda6532eb75f43b3a581fa893a3f99b74bb3b3417e525ae0->enter($__internal_f78e39ede923fb14fda6532eb75f43b3a581fa893a3f99b74bb3b3417e525ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_f78e39ede923fb14fda6532eb75f43b3a581fa893a3f99b74bb3b3417e525ae0->leave($__internal_f78e39ede923fb14fda6532eb75f43b3a581fa893a3f99b74bb3b3417e525ae0_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_b13604e31e84c6204bd0684876aea51f050d36b337be46a2c456c589ec4dda25 = $this->env->getExtension("native_profiler");
        $__internal_b13604e31e84c6204bd0684876aea51f050d36b337be46a2c456c589ec4dda25->enter($__internal_b13604e31e84c6204bd0684876aea51f050d36b337be46a2c456c589ec4dda25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_b13604e31e84c6204bd0684876aea51f050d36b337be46a2c456c589ec4dda25->leave($__internal_b13604e31e84c6204bd0684876aea51f050d36b337be46a2c456c589ec4dda25_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a83691fdd32390bd06413f8e26dabf9227fb6610fc5f610607416ef6024608db = $this->env->getExtension("native_profiler");
        $__internal_a83691fdd32390bd06413f8e26dabf9227fb6610fc5f610607416ef6024608db->enter($__internal_a83691fdd32390bd06413f8e26dabf9227fb6610fc5f610607416ef6024608db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a83691fdd32390bd06413f8e26dabf9227fb6610fc5f610607416ef6024608db->leave($__internal_a83691fdd32390bd06413f8e26dabf9227fb6610fc5f610607416ef6024608db_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_f1d8aa8ffcc45c2268ce8cdba2bbab4acdf4144a2d19b3c623088fd98a16396d = $this->env->getExtension("native_profiler");
        $__internal_f1d8aa8ffcc45c2268ce8cdba2bbab4acdf4144a2d19b3c623088fd98a16396d->enter($__internal_f1d8aa8ffcc45c2268ce8cdba2bbab4acdf4144a2d19b3c623088fd98a16396d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_f1d8aa8ffcc45c2268ce8cdba2bbab4acdf4144a2d19b3c623088fd98a16396d->leave($__internal_f1d8aa8ffcc45c2268ce8cdba2bbab4acdf4144a2d19b3c623088fd98a16396d_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b9d1ff792a12ed3a02afbb515b3cf67b2fd378d3311cc8ed3bd864bed1eccf25 = $this->env->getExtension("native_profiler");
        $__internal_b9d1ff792a12ed3a02afbb515b3cf67b2fd378d3311cc8ed3bd864bed1eccf25->enter($__internal_b9d1ff792a12ed3a02afbb515b3cf67b2fd378d3311cc8ed3bd864bed1eccf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_b9d1ff792a12ed3a02afbb515b3cf67b2fd378d3311cc8ed3bd864bed1eccf25->leave($__internal_b9d1ff792a12ed3a02afbb515b3cf67b2fd378d3311cc8ed3bd864bed1eccf25_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_35878c5e924814b2f214bc1f6c973ed285d7753a6579d9ae555a88a48c9233fd = $this->env->getExtension("native_profiler");
        $__internal_35878c5e924814b2f214bc1f6c973ed285d7753a6579d9ae555a88a48c9233fd->enter($__internal_35878c5e924814b2f214bc1f6c973ed285d7753a6579d9ae555a88a48c9233fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_35878c5e924814b2f214bc1f6c973ed285d7753a6579d9ae555a88a48c9233fd->leave($__internal_35878c5e924814b2f214bc1f6c973ed285d7753a6579d9ae555a88a48c9233fd_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_904682c35e9ecaf6a40061c0c079adab2ee575d4946ef06c7413d44622147bfa = $this->env->getExtension("native_profiler");
        $__internal_904682c35e9ecaf6a40061c0c079adab2ee575d4946ef06c7413d44622147bfa->enter($__internal_904682c35e9ecaf6a40061c0c079adab2ee575d4946ef06c7413d44622147bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_904682c35e9ecaf6a40061c0c079adab2ee575d4946ef06c7413d44622147bfa->leave($__internal_904682c35e9ecaf6a40061c0c079adab2ee575d4946ef06c7413d44622147bfa_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_6b798186949b14460e28b0b0e522ccb8405bc8e13e9ce26c218ce7a29a4acdfe = $this->env->getExtension("native_profiler");
        $__internal_6b798186949b14460e28b0b0e522ccb8405bc8e13e9ce26c218ce7a29a4acdfe->enter($__internal_6b798186949b14460e28b0b0e522ccb8405bc8e13e9ce26c218ce7a29a4acdfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6b798186949b14460e28b0b0e522ccb8405bc8e13e9ce26c218ce7a29a4acdfe->leave($__internal_6b798186949b14460e28b0b0e522ccb8405bc8e13e9ce26c218ce7a29a4acdfe_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_2d8fe168bc4798c8182bf170fd1b5e73c3274c474b9b2e78a51971b858c4bcc5 = $this->env->getExtension("native_profiler");
        $__internal_2d8fe168bc4798c8182bf170fd1b5e73c3274c474b9b2e78a51971b858c4bcc5->enter($__internal_2d8fe168bc4798c8182bf170fd1b5e73c3274c474b9b2e78a51971b858c4bcc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2d8fe168bc4798c8182bf170fd1b5e73c3274c474b9b2e78a51971b858c4bcc5->leave($__internal_2d8fe168bc4798c8182bf170fd1b5e73c3274c474b9b2e78a51971b858c4bcc5_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_5cbc890931bceec0577e76b887dbe423d6a1f36cc96aaf5fc4c95b14c8d2f7c0 = $this->env->getExtension("native_profiler");
        $__internal_5cbc890931bceec0577e76b887dbe423d6a1f36cc96aaf5fc4c95b14c8d2f7c0->enter($__internal_5cbc890931bceec0577e76b887dbe423d6a1f36cc96aaf5fc4c95b14c8d2f7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5cbc890931bceec0577e76b887dbe423d6a1f36cc96aaf5fc4c95b14c8d2f7c0->leave($__internal_5cbc890931bceec0577e76b887dbe423d6a1f36cc96aaf5fc4c95b14c8d2f7c0_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_c89311bcc975a83d5be1e1a480ec4d79eeb90c1041cfcd8278829ef823527ee9 = $this->env->getExtension("native_profiler");
        $__internal_c89311bcc975a83d5be1e1a480ec4d79eeb90c1041cfcd8278829ef823527ee9->enter($__internal_c89311bcc975a83d5be1e1a480ec4d79eeb90c1041cfcd8278829ef823527ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_c89311bcc975a83d5be1e1a480ec4d79eeb90c1041cfcd8278829ef823527ee9->leave($__internal_c89311bcc975a83d5be1e1a480ec4d79eeb90c1041cfcd8278829ef823527ee9_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  327 => 80,  321 => 79,  309 => 73,  305 => 72,  301 => 71,  298 => 70,  296 => 69,  290 => 68,  278 => 62,  274 => 61,  270 => 60,  267 => 59,  265 => 58,  259 => 57,  247 => 51,  243 => 50,  239 => 49,  235 => 48,  228 => 47,  226 => 46,  220 => 45,  213 => 42,  207 => 41,  200 => 38,  194 => 37,  187 => 34,  184 => 33,  182 => 32,  180 => 31,  176 => 30,  174 => 29,  168 => 28,  162 => 27,  155 => 22,  149 => 21,  140 => 16,  137 => 15,  131 => 13,  128 => 12,  126 => 11,  120 => 10,  113 => 5,  111 => 4,  105 => 3,  98 => 79,  95 => 78,  93 => 68,  90 => 67,  88 => 57,  85 => 56,  83 => 45,  80 => 44,  78 => 41,  75 => 40,  73 => 37,  70 => 36,  68 => 27,  65 => 26,  62 => 24,  60 => 21,  57 => 20,  55 => 10,  52 => 9,  49 => 7,  47 => 3,  44 => 2,  14 => 1,);
    }
}
/* {% use "bootstrap_3_layout.html.twig" %}*/
/* */
/* {% block form_start -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_start %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label -%}*/
/* {% spaceless %}*/
/*     {% if label is same as(false) %}*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*     {% else %}*/
/*         {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}*/
/*         {{- parent() -}}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {%- endblock form_label %}*/
/* */
/* {% block form_label_class -%}*/
/* col-sm-2*/
/* {%- endblock form_label_class %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row -%}*/
/*     <div class="form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}">*/
/*         {{- form_label(form) -}}*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{- form_widget(form) -}}*/
/*             {{- form_errors(form) -}}*/
/*         </div>*/
/* {##}</div>*/
/* {%- endblock form_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     {{- block('checkbox_radio_row') -}}*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     {{- block('checkbox_radio_row') -}}*/
/* {%- endblock radio_row %}*/
/* */
/* {% block checkbox_radio_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group{% if not valid %} has-error{% endif %}">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {%- endblock checkbox_radio_row %}*/
/* */
/* {% block submit_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock submit_row %}*/
/* */
/* {% block reset_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock reset_row %}*/
/* */
/* {% block form_group_class -%}*/
/* col-sm-10*/
/* {%- endblock form_group_class %}*/
/* */
