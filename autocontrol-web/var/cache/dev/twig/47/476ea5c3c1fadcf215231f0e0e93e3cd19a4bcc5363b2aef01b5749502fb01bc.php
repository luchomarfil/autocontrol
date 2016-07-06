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
        $__internal_7bdfb2ee7e98f2df5382952d64e431dad130dae655b5d9b394255b2fd999a23e = $this->env->getExtension("native_profiler");
        $__internal_7bdfb2ee7e98f2df5382952d64e431dad130dae655b5d9b394255b2fd999a23e->enter($__internal_7bdfb2ee7e98f2df5382952d64e431dad130dae655b5d9b394255b2fd999a23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "terminal/show_car.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bdfb2ee7e98f2df5382952d64e431dad130dae655b5d9b394255b2fd999a23e->leave($__internal_7bdfb2ee7e98f2df5382952d64e431dad130dae655b5d9b394255b2fd999a23e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bde8ed61d9cefd91a6b494dd56d386c37963b23f889aa978817649512e264b0 = $this->env->getExtension("native_profiler");
        $__internal_8bde8ed61d9cefd91a6b494dd56d386c37963b23f889aa978817649512e264b0->enter($__internal_8bde8ed61d9cefd91a6b494dd56d386c37963b23f889aa978817649512e264b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <legend>Listado de Terminales</legend>
    <table class=\"table table-striped table-bordered\">
        <thead>
            <tr>
                <th>id</th>
                <th>Estado</th>
                <th>Coordenada</th>
                <th>Autos por Hora</th>
                <th>Energía Total Generada</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["terminals"]) ? $context["terminals"] : $this->getContext($context, "terminals")));
        foreach ($context['_seq'] as $context["_key"] => $context["terminal"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["terminal"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["terminal"], "estado", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["terminal"], "coordenada", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["autos"]) ? $context["autos"] : $this->getContext($context, "autos")), $this->getAttribute($context["terminal"], "id", array()), array(), "array"), 0, array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["autos"]) ? $context["autos"] : $this->getContext($context, "autos")), $this->getAttribute($context["terminal"], "id", array()), array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['terminal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>
";
        
        $__internal_8bde8ed61d9cefd91a6b494dd56d386c37963b23f889aa978817649512e264b0->leave($__internal_8bde8ed61d9cefd91a6b494dd56d386c37963b23f889aa978817649512e264b0_prof);

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
        return array (  86 => 25,  77 => 22,  73 => 21,  69 => 20,  65 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'backend.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <legend>Listado de Terminales</legend>*/
/*     <table class="table table-striped table-bordered">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>id</th>*/
/*                 <th>Estado</th>*/
/*                 <th>Coordenada</th>*/
/*                 <th>Autos por Hora</th>*/
/*                 <th>Energía Total Generada</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for terminal in terminals %}*/
/*             <tr>*/
/*                 <td>{{ terminal.id }}</td>*/
/*                 <td>{{ terminal.estado }}</td>*/
/*                 <td>{{ terminal.coordenada }}</td>*/
/*                 <td>{{ autos[terminal.id][0] }}</td>*/
/*                 <td>{{ autos[terminal.id][1] }}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
