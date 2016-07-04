<?php

/* centroalmacenamiento/index.html.twig */
class __TwigTemplate_46663d7d783897914214042e9a55fed3639a0581252188cb319d248af3c75609 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "centroalmacenamiento/index.html.twig", 1);
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
        $__internal_9ff9306d5f16ca2e6cfc80527b2654bb4c5f522b99003f5f39a86340704e6021 = $this->env->getExtension("native_profiler");
        $__internal_9ff9306d5f16ca2e6cfc80527b2654bb4c5f522b99003f5f39a86340704e6021->enter($__internal_9ff9306d5f16ca2e6cfc80527b2654bb4c5f522b99003f5f39a86340704e6021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "centroalmacenamiento/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ff9306d5f16ca2e6cfc80527b2654bb4c5f522b99003f5f39a86340704e6021->leave($__internal_9ff9306d5f16ca2e6cfc80527b2654bb4c5f522b99003f5f39a86340704e6021_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a435d81a9b125e246096273084b444c28ed14c046a984bcf1971a8e6c7bd0381 = $this->env->getExtension("native_profiler");
        $__internal_a435d81a9b125e246096273084b444c28ed14c046a984bcf1971a8e6c7bd0381->enter($__internal_a435d81a9b125e246096273084b444c28ed14c046a984bcf1971a8e6c7bd0381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <legend>Listado de Centros de Almacenamiento</legend>
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
                <th>Numero</th>
                <th>Energia</th>
                <th>Coordenada</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["centroAlmacenamientos"]) ? $context["centroAlmacenamientos"] : $this->getContext($context, "centroAlmacenamientos")));
        foreach ($context['_seq'] as $context["_key"] => $context["centroAlmacenamiento"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["centroAlmacenamiento"], "numero", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["centroAlmacenamiento"], "energia", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["centroAlmacenamiento"], "coordenada", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"glyphicon glyphicon-remove\" alt=\"Ver\" title=\"Eliminar\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("centroalmacenamiento_show", array("id" => $this->getAttribute($context["centroAlmacenamiento"], "id", array()))), "html", null, true);
            echo "\"></a>
                    |
                    <a class=\"glyphicon glyphicon-pencil\" alt=\"Editar\" title=\"Editar\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("centroalmacenamiento_edit", array("id" => $this->getAttribute($context["centroAlmacenamiento"], "id", array()))), "html", null, true);
            echo "\"></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centroAlmacenamiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a class=\"btn btn-primary\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("centroalmacenamiento_new");
        echo "\">Crear un nuevo Centro</a>
        </li>
    </ul>
";
        
        $__internal_a435d81a9b125e246096273084b444c28ed14c046a984bcf1971a8e6c7bd0381->leave($__internal_a435d81a9b125e246096273084b444c28ed14c046a984bcf1971a8e6c7bd0381_prof);

    }

    public function getTemplateName()
    {
        return "centroalmacenamiento/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 35,  98 => 30,  88 => 26,  83 => 24,  78 => 22,  74 => 21,  70 => 20,  67 => 19,  63 => 18,  51 => 8,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'backend.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <legend>Listado de Centros de Almacenamiento</legend>*/
/*     {% if text is defined %}*/
/*         <p class="text-success">{{text}}</p>*/
/*     {% endif %}*/
/*     <table class="table table-striped table-bordered">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Numero</th>*/
/*                 <th>Energia</th>*/
/*                 <th>Coordenada</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for centroAlmacenamiento in centroAlmacenamientos %}*/
/*             <tr>*/
/*                 <td>{{ centroAlmacenamiento.numero }}</td>*/
/*                 <td>{{ centroAlmacenamiento.energia }}</td>*/
/*                 <td>{{ centroAlmacenamiento.coordenada }}</td>*/
/*                 <td>*/
/*                     <a class="glyphicon glyphicon-remove" alt="Ver" title="Eliminar" href="{{ path('centroalmacenamiento_show', { 'id': centroAlmacenamiento.id }) }}"></a>*/
/*                     |*/
/*                     <a class="glyphicon glyphicon-pencil" alt="Editar" title="Editar" href="{{ path('centroalmacenamiento_edit', { 'id': centroAlmacenamiento.id }) }}"></a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a class="btn btn-primary" href="{{ path('centroalmacenamiento_new') }}">Crear un nuevo Centro</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
