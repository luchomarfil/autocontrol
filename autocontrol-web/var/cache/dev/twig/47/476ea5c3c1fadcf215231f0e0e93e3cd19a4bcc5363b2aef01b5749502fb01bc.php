<?php

/* terminal/show_car.html.twig */
class __TwigTemplate_58da627e30f5875f1d431f5191be9c3f3ddb31e3148798b862ecbcf9beb8a982 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "terminal/show_car.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bf8afde7d9b8215935433fd60db4555f55533f1b638c8f07cb81439e2e612d1 = $this->env->getExtension("native_profiler");
        $__internal_5bf8afde7d9b8215935433fd60db4555f55533f1b638c8f07cb81439e2e612d1->enter($__internal_5bf8afde7d9b8215935433fd60db4555f55533f1b638c8f07cb81439e2e612d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "terminal/show_car.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bf8afde7d9b8215935433fd60db4555f55533f1b638c8f07cb81439e2e612d1->leave($__internal_5bf8afde7d9b8215935433fd60db4555f55533f1b638c8f07cb81439e2e612d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_40c1d723f22e9fdfa35fcaf6de607a9d4e84b08864ad893ed039ea9026b98a2a = $this->env->getExtension("native_profiler");
        $__internal_40c1d723f22e9fdfa35fcaf6de607a9d4e84b08864ad893ed039ea9026b98a2a->enter($__internal_40c1d723f22e9fdfa35fcaf6de607a9d4e84b08864ad893ed039ea9026b98a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <legend>Listado de Terminales</legend>
    ";
        // line 5
        if (array_key_exists("text", $context)) {
            // line 6
            echo "        <p class=\"text-success\">";
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
            echo "</p>
    ";
        }
        // line 8
        echo "    <table class=\"table table-striped table-bordered\">
        <thead>
            <tr>
                <th>id</th>
                <th>Estado</th>
                <th>Coordenada</th>
                <th>Autos / Hora</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["terminals"]) ? $context["terminals"] : $this->getContext($context, "terminals")));
        foreach ($context['_seq'] as $context["_key"] => $context["terminal"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["terminal"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["terminal"], "estado", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["terminal"], "coordenada", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["autos"]) ? $context["autos"] : $this->getContext($context, "autos")), $this->getAttribute($context["terminal"], "id", array()), array(), "array"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['terminal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>
";
        
        $__internal_40c1d723f22e9fdfa35fcaf6de607a9d4e84b08864ad893ed039ea9026b98a2a->leave($__internal_40c1d723f22e9fdfa35fcaf6de607a9d4e84b08864ad893ed039ea9026b98a2a_prof);

    }

    public function getTemplateName()
    {
        return "terminal/show_car.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 26,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  67 => 19,  63 => 18,  51 => 8,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'backend.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <legend>Listado de Terminales</legend>*/
/*     {% if text is defined %}*/
/*         <p class="text-success">{{text}}</p>*/
/*     {% endif %}*/
/*     <table class="table table-striped table-bordered">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>id</th>*/
/*                 <th>Estado</th>*/
/*                 <th>Coordenada</th>*/
/*                 <th>Autos / Hora</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for terminal in terminals %}*/
/*             <tr>*/
/*                 <td>{{ terminal.id }}</td>*/
/*                 <td>{{ terminal.estado }}</td>*/
/*                 <td>{{ terminal.coordenada }}</td>*/
/*                 <td>{{ autos[terminal.id] }}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
