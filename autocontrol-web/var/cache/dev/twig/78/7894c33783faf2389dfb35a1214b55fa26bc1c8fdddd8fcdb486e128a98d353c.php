<?php

/* bateria/index.html.twig */
class __TwigTemplate_2372ffebe9d55a81bf3c5805bd85bd6edc63f284fdb93dd18f25f9a5b9e53726 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "bateria/index.html.twig", 1);
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
        $__internal_01afe74ca0e08d16627937750c40418630721e8a09896aec9ffcc92ab7848ad9 = $this->env->getExtension("native_profiler");
        $__internal_01afe74ca0e08d16627937750c40418630721e8a09896aec9ffcc92ab7848ad9->enter($__internal_01afe74ca0e08d16627937750c40418630721e8a09896aec9ffcc92ab7848ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bateria/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01afe74ca0e08d16627937750c40418630721e8a09896aec9ffcc92ab7848ad9->leave($__internal_01afe74ca0e08d16627937750c40418630721e8a09896aec9ffcc92ab7848ad9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf213fde200ac7f76d217c36388b69b979ff7bfc947ef3685e6070d01453137f = $this->env->getExtension("native_profiler");
        $__internal_cf213fde200ac7f76d217c36388b69b979ff7bfc947ef3685e6070d01453137f->enter($__internal_cf213fde200ac7f76d217c36388b69b979ff7bfc947ef3685e6070d01453137f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <legend>Listado de Baterias</legend>
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
                <th>Temperatura</th>
                <th>Coordenada</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["baterias"]) ? $context["baterias"] : $this->getContext($context, "baterias")));
        foreach ($context['_seq'] as $context["_key"] => $context["baterium"]) {
            // line 20
            echo "            <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["baterium"], "numero", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["baterium"], "energia", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["baterium"], "temperatura", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["baterium"], "coordenada", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"glyphicon glyphicon-remove\" alt=\"Ver\" title=\"Eliminar\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bateria_show", array("id" => $this->getAttribute($context["baterium"], "id", array()))), "html", null, true);
            echo "\"></a>
                    |
                    <a class=\"glyphicon glyphicon-pencil\" alt=\"Editar\" title=\"Editar\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bateria_edit", array("id" => $this->getAttribute($context["baterium"], "id", array()))), "html", null, true);
            echo "\"></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['baterium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a class=\"btn btn-primary\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("bateria_new");
        echo "\">Crear nueva Batería</a>
        </li>
    </ul>
";
        
        $__internal_cf213fde200ac7f76d217c36388b69b979ff7bfc947ef3685e6070d01453137f->leave($__internal_cf213fde200ac7f76d217c36388b69b979ff7bfc947ef3685e6070d01453137f_prof);

    }

    public function getTemplateName()
    {
        return "bateria/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 37,  103 => 32,  93 => 28,  88 => 26,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  68 => 20,  64 => 19,  51 => 8,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'backend.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <legend>Listado de Baterias</legend>*/
/*     {% if text is defined %}*/
/*         <p class="text-success">{{text}}</p>*/
/*     {% endif %}*/
/*     <table class="table table-striped table-bordered">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Numero</th>*/
/*                 <th>Energia</th>*/
/*                 <th>Temperatura</th>*/
/*                 <th>Coordenada</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for baterium in baterias %}*/
/*             <tr>*/
/*                 <td>{{ baterium.numero }}</td>*/
/*                 <td>{{ baterium.energia }}</td>*/
/*                 <td>{{ baterium.temperatura }}</td>*/
/*                 <td>{{ baterium.coordenada }}</td>*/
/*                 <td>*/
/*                     <a class="glyphicon glyphicon-remove" alt="Ver" title="Eliminar" href="{{ path('bateria_show', { 'id': baterium.id }) }}"></a>*/
/*                     |*/
/*                     <a class="glyphicon glyphicon-pencil" alt="Editar" title="Editar" href="{{ path('bateria_edit', { 'id': baterium.id }) }}"></a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a class="btn btn-primary" href="{{ path('bateria_new') }}">Crear nueva Batería</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
