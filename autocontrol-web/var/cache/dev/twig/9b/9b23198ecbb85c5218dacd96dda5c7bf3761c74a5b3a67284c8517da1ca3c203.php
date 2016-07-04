<?php

/* terminal/show.html.twig */
class __TwigTemplate_6e143cb3297d9664909cbaf07f584ccd01148570ca5a123cc5f5434b4fcedbdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "terminal/show.html.twig", 1);
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
        $__internal_fbc64324057ddfc37b0104442900e96a6fae7340c57a05e3b7bfffaefe93db65 = $this->env->getExtension("native_profiler");
        $__internal_fbc64324057ddfc37b0104442900e96a6fae7340c57a05e3b7bfffaefe93db65->enter($__internal_fbc64324057ddfc37b0104442900e96a6fae7340c57a05e3b7bfffaefe93db65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "terminal/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbc64324057ddfc37b0104442900e96a6fae7340c57a05e3b7bfffaefe93db65->leave($__internal_fbc64324057ddfc37b0104442900e96a6fae7340c57a05e3b7bfffaefe93db65_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d959be158e6b09ca50ff536e372b8171d77e80b3ffefa04319dcc6a10e0b0676 = $this->env->getExtension("native_profiler");
        $__internal_d959be158e6b09ca50ff536e372b8171d77e80b3ffefa04319dcc6a10e0b0676->enter($__internal_d959be158e6b09ca50ff536e372b8171d77e80b3ffefa04319dcc6a10e0b0676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <legend>Terminal a Eliminar:</legend>
    <table>
        <tbody>
            <tr>
                <th>Numero: </th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terminal"]) ? $context["terminal"] : $this->getContext($context, "terminal")), "numero", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estado: </th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terminal"]) ? $context["terminal"] : $this->getContext($context, "terminal")), "estado", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Coordenada: </th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terminal"]) ? $context["terminal"] : $this->getContext($context, "terminal")), "coordenada", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <br>
    <legend></legend>
    <ul>
        <li>
            ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"btn btn-warning\" type=\"submit\" value=\"Eliminar\">
            ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
        <br>
        <li>
            <a class=\"btn btn-info\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("terminal_index");
        echo "\">Volver al listado</a>
        </li>
    </ul>
";
        
        $__internal_d959be158e6b09ca50ff536e372b8171d77e80b3ffefa04319dcc6a10e0b0676->leave($__internal_d959be158e6b09ca50ff536e372b8171d77e80b3ffefa04319dcc6a10e0b0676_prof);

    }

    public function getTemplateName()
    {
        return "terminal/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 32,  78 => 28,  73 => 26,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'backend.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <legend>Terminal a Eliminar:</legend>*/
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Numero: </th>*/
/*                 <td>{{ terminal.numero }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Estado: </th>*/
/*                 <td>{{ terminal.estado }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Coordenada: </th>*/
/*                 <td>{{ terminal.coordenada }}</td>*/
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
/*             <a class="btn btn-info" href="{{ path('terminal_index') }}">Volver al listado</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
