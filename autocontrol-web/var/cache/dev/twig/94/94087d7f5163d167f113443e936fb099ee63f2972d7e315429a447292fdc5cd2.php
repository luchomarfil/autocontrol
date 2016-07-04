<?php

/* usuario/index.html.twig */
class __TwigTemplate_9149d58f8e0cca2e7b90be604f5e9f04f5f217e9f5280384f681475e256ac2ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "usuario/index.html.twig", 1);
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
        $__internal_ae3325506285a6d4a72690ddee6fe8d150f8ec510162efdcaa966e1e7cfb542e = $this->env->getExtension("native_profiler");
        $__internal_ae3325506285a6d4a72690ddee6fe8d150f8ec510162efdcaa966e1e7cfb542e->enter($__internal_ae3325506285a6d4a72690ddee6fe8d150f8ec510162efdcaa966e1e7cfb542e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae3325506285a6d4a72690ddee6fe8d150f8ec510162efdcaa966e1e7cfb542e->leave($__internal_ae3325506285a6d4a72690ddee6fe8d150f8ec510162efdcaa966e1e7cfb542e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e27a6904fe604512ab9567bf69cf081a4c2722aadf06248e7fb8b9bf34c3bfa4 = $this->env->getExtension("native_profiler");
        $__internal_e27a6904fe604512ab9567bf69cf081a4c2722aadf06248e7fb8b9bf34c3bfa4->enter($__internal_e27a6904fe604512ab9567bf69cf081a4c2722aadf06248e7fb8b9bf34c3bfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <legend>Listado de Supervisores</legend>
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
                <th>Username</th>
                <th>Dni</th>
                <th>Nombre</th>
                <th>Password</th>
                <th>Tipo_usuario</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "dni", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["usuario"], "tipousuario", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <a class=\"glyphicon glyphicon-remove\" alt=\"Ver\" title=\"Eliminar\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_show", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\"></a>
                    |
                    <a class=\"glyphicon glyphicon-pencil\" alt=\"Editar\" title=\"Editar\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_edit", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\"></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a class=\"btn btn-primary\" href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("usuario_new");
        echo "\">Crear nuevo Supersivor</a>
        </li>
    </ul>
";
        
        $__internal_e27a6904fe604512ab9567bf69cf081a4c2722aadf06248e7fb8b9bf34c3bfa4->leave($__internal_e27a6904fe604512ab9567bf69cf081a4c2722aadf06248e7fb8b9bf34c3bfa4_prof);

    }

    public function getTemplateName()
    {
        return "usuario/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 39,  112 => 34,  102 => 30,  97 => 28,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  72 => 22,  69 => 21,  65 => 20,  51 => 8,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'backend.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <legend>Listado de Supervisores</legend>*/
/*     {% if text is defined %}*/
/*         <p class="text-success">{{text}}</p>*/
/*     {% endif %}*/
/*     <table class="table table-striped table-bordered">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Username</th>*/
/*                 <th>Dni</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Password</th>*/
/*                 <th>Tipo_usuario</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for usuario in usuarios %}*/
/*             <tr>*/
/*                 <td>{{ usuario.username }}</td>*/
/*                 <td>{{ usuario.dni }}</td>*/
/*                 <td>{{ usuario.nombre }}</td>*/
/*                 <td>{{ usuario.password }}</td>*/
/*                 <td>{% if usuario.tipousuario %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>*/
/*                     <a class="glyphicon glyphicon-remove" alt="Ver" title="Eliminar" href="{{ path('usuario_show', { 'id': usuario.id }) }}"></a>*/
/*                     |*/
/*                     <a class="glyphicon glyphicon-pencil" alt="Editar" title="Editar" href="{{ path('usuario_edit', { 'id': usuario.id }) }}"></a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a class="btn btn-primary" href="{{ path('usuario_new') }}">Crear nuevo Supersivor</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
