<?php

/* terminal/index.html.twig */
class __TwigTemplate_46629d578dd0c456b9cac762ac8423fa80eaae7b9b7c4e8c812e3abeb104fe8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "terminal/index.html.twig", 1);
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
        $__internal_771374327f832752a97c275d4519f44b56a4b52d0b8a70ef6b91835db949da5d = $this->env->getExtension("native_profiler");
        $__internal_771374327f832752a97c275d4519f44b56a4b52d0b8a70ef6b91835db949da5d->enter($__internal_771374327f832752a97c275d4519f44b56a4b52d0b8a70ef6b91835db949da5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "terminal/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_771374327f832752a97c275d4519f44b56a4b52d0b8a70ef6b91835db949da5d->leave($__internal_771374327f832752a97c275d4519f44b56a4b52d0b8a70ef6b91835db949da5d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c60a817bd57f1de4d78a5e3f86ae1694f1c42325755fe3d3d5f91612369f9f87 = $this->env->getExtension("native_profiler");
        $__internal_c60a817bd57f1de4d78a5e3f86ae1694f1c42325755fe3d3d5f91612369f9f87->enter($__internal_c60a817bd57f1de4d78a5e3f86ae1694f1c42325755fe3d3d5f91612369f9f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <th>Numero</th>
                <th>Estado</th>
                <th>Coordenada</th>
                <th>Actions</th>
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["terminal"], "numero", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["terminal"], "estado", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["terminal"], "coordenada", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"glyphicon glyphicon-remove\" alt=\"Ver\" title=\"Eliminar\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("terminal_show", array("id" => $this->getAttribute($context["terminal"], "id", array()))), "html", null, true);
            echo "\"></a>
                    |
                    <a class=\"glyphicon glyphicon-pencil\" alt=\"Editar\" title=\"Editar\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("terminal_edit", array("id" => $this->getAttribute($context["terminal"], "id", array()))), "html", null, true);
            echo "\"></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['terminal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a class=\"btn btn-primary\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("terminal_new");
        echo "\">Crear nueva Terminal</a>
        </li>
    </ul>
";
        
        $__internal_c60a817bd57f1de4d78a5e3f86ae1694f1c42325755fe3d3d5f91612369f9f87->leave($__internal_c60a817bd57f1de4d78a5e3f86ae1694f1c42325755fe3d3d5f91612369f9f87_prof);

    }

    public function getTemplateName()
    {
        return "terminal/index.html.twig";
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
/*     <legend>Listado de Terminales</legend>*/
/*     {% if text is defined %}*/
/*         <p class="text-success">{{text}}</p>*/
/*     {% endif %}*/
/*     <table class="table table-striped table-bordered">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Numero</th>*/
/*                 <th>Estado</th>*/
/*                 <th>Coordenada</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for terminal in terminals %}*/
/*             <tr>*/
/*                 <td>{{ terminal.numero }}</td>*/
/*                 <td>{{ terminal.estado }}</td>*/
/*                 <td>{{ terminal.coordenada }}</td>*/
/*                 <td>*/
/*                     <a class="glyphicon glyphicon-remove" alt="Ver" title="Eliminar" href="{{ path('terminal_show', { 'id': terminal.id }) }}"></a>*/
/*                     |*/
/*                     <a class="glyphicon glyphicon-pencil" alt="Editar" title="Editar" href="{{ path('terminal_edit', { 'id': terminal.id }) }}"></a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a class="btn btn-primary" href="{{ path('terminal_new') }}">Crear nueva Terminal</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
