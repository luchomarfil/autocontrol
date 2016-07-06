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
        $__internal_b10a1e2915347c9a1bd63f6887153da735c15c785db13078d63bcb187b5c8c13 = $this->env->getExtension("native_profiler");
        $__internal_b10a1e2915347c9a1bd63f6887153da735c15c785db13078d63bcb187b5c8c13->enter($__internal_b10a1e2915347c9a1bd63f6887153da735c15c785db13078d63bcb187b5c8c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "terminal/show_car.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b10a1e2915347c9a1bd63f6887153da735c15c785db13078d63bcb187b5c8c13->leave($__internal_b10a1e2915347c9a1bd63f6887153da735c15c785db13078d63bcb187b5c8c13_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4457f37cf3cb734edcca71eb950d595b22525134cd05da127cf6d408c4c7d719 = $this->env->getExtension("native_profiler");
        $__internal_4457f37cf3cb734edcca71eb950d595b22525134cd05da127cf6d408c4c7d719->enter($__internal_4457f37cf3cb734edcca71eb950d595b22525134cd05da127cf6d408c4c7d719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <th>Autos por Hora</th>
                <th>Energía Total Generada</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["terminals"]) ? $context["terminals"] : $this->getContext($context, "terminals")));
        foreach ($context['_seq'] as $context["_key"] => $context["terminal"]) {
            // line 20
            echo "            <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["terminal"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["terminal"], "estado", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["terminal"], "coordenada", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["autos"]) ? $context["autos"] : $this->getContext($context, "autos")), $this->getAttribute($context["terminal"], "id", array()), array(), "array"), 0, array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["autos"]) ? $context["autos"] : $this->getContext($context, "autos")), $this->getAttribute($context["terminal"], "id", array()), array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['terminal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tbody>
    </table>
";
        
        $__internal_4457f37cf3cb734edcca71eb950d595b22525134cd05da127cf6d408c4c7d719->leave($__internal_4457f37cf3cb734edcca71eb950d595b22525134cd05da127cf6d408c4c7d719_prof);

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
        return array (  96 => 28,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  68 => 20,  64 => 19,  51 => 8,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
