<?php

/* usuario/show.html.twig */
class __TwigTemplate_c48747b580bb5cc335e2201eaea29872fb9dda696573f5df788b8258157ed5f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "usuario/show.html.twig", 1);
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
        $__internal_931b35d3239b6ac2b34251b6f94984e6723ea1ed863c6b83c56963964682398b = $this->env->getExtension("native_profiler");
        $__internal_931b35d3239b6ac2b34251b6f94984e6723ea1ed863c6b83c56963964682398b->enter($__internal_931b35d3239b6ac2b34251b6f94984e6723ea1ed863c6b83c56963964682398b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_931b35d3239b6ac2b34251b6f94984e6723ea1ed863c6b83c56963964682398b->leave($__internal_931b35d3239b6ac2b34251b6f94984e6723ea1ed863c6b83c56963964682398b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_71fe34bbcebaaabcd52ac0bf65a5c36190c98f9efc2ec1ca10efbf46369230ba = $this->env->getExtension("native_profiler");
        $__internal_71fe34bbcebaaabcd52ac0bf65a5c36190c98f9efc2ec1ca10efbf46369230ba->enter($__internal_71fe34bbcebaaabcd52ac0bf65a5c36190c98f9efc2ec1ca10efbf46369230ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <legend>Supervisor a Eliminar:</legend>
    <table>
        <tbody>
            <tr>
                <th>Username</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dni</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "dni", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "password", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tipo_usuario</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "tipousuario", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>
    <br>
    <legend></legend>
    <ul>
        <li>
            ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"btn btn-warning\" type=\"submit\" value=\"Eliminar\">
            ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
        <br>
        <li>
            <a class=\"btn btn-info\" href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("usuario_index");
        echo "\">Volver al listado</a>
        </li>
    </ul>
";
        
        $__internal_71fe34bbcebaaabcd52ac0bf65a5c36190c98f9efc2ec1ca10efbf46369230ba->leave($__internal_71fe34bbcebaaabcd52ac0bf65a5c36190c98f9efc2ec1ca10efbf46369230ba_prof);

    }

    public function getTemplateName()
    {
        return "usuario/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 40,  96 => 36,  91 => 34,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'backend.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <legend>Supervisor a Eliminar:</legend>*/
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Username</th>*/
/*                 <td>{{ usuario.username }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Dni</th>*/
/*                 <td>{{ usuario.dni }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ usuario.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Password</th>*/
/*                 <td>{{ usuario.password }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Tipo_usuario</th>*/
/*                 <td>{% if usuario.tipousuario %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/*     <br>*/
/*     <legend></legend>*/
/*     <ul>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input class="btn btn-warning" type="submit" value="Eliminar">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*         <br>*/
/*         <li>*/
/*             <a class="btn btn-info" href="{{ path('usuario_index') }}">Volver al listado</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
