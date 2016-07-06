<?php

/* terminal/grafico_sup.html.twig */
class __TwigTemplate_5ad5f1de4dc00da989edd487b8039aace8c4946addd239c06a35dc427a21f5b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'table' => array($this, 'block_table'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79c7deebaa8b1f27fe0ec553bb3fee5f18ffff6b582d7f4e9464e7f7a0b3ce0d = $this->env->getExtension("native_profiler");
        $__internal_79c7deebaa8b1f27fe0ec553bb3fee5f18ffff6b582d7f4e9464e7f7a0b3ce0d->enter($__internal_79c7deebaa8b1f27fe0ec553bb3fee5f18ffff6b582d7f4e9464e7f7a0b3ce0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "terminal/grafico_sup.html.twig"));

        // line 1
        $this->displayBlock('table', $context, $blocks);
        
        $__internal_79c7deebaa8b1f27fe0ec553bb3fee5f18ffff6b582d7f4e9464e7f7a0b3ce0d->leave($__internal_79c7deebaa8b1f27fe0ec553bb3fee5f18ffff6b582d7f4e9464e7f7a0b3ce0d_prof);

    }

    public function block_table($context, array $blocks = array())
    {
        $__internal_0ab70e44fde6860f98b80363e5a48e44931fbbf3a0edba13c5947f9abad88ac2 = $this->env->getExtension("native_profiler");
        $__internal_0ab70e44fde6860f98b80363e5a48e44931fbbf3a0edba13c5947f9abad88ac2->enter($__internal_0ab70e44fde6860f98b80363e5a48e44931fbbf3a0edba13c5947f9abad88ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 2
        echo "<div id=\"tabla_sup\" class=\"\">
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
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["terminals"]) ? $context["terminals"] : $this->getContext($context, "terminals")));
        foreach ($context['_seq'] as $context["_key"] => $context["terminal"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["terminal"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["terminal"], "estado", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["terminal"], "coordenada", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["autos"]) ? $context["autos"] : $this->getContext($context, "autos")), $this->getAttribute($context["terminal"], "id", array()), array(), "array"), 0, array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["autos"]) ? $context["autos"] : $this->getContext($context, "autos")), $this->getAttribute($context["terminal"], "id", array()), array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['terminal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </tbody>
    </table>


</div>
";
        
        $__internal_0ab70e44fde6860f98b80363e5a48e44931fbbf3a0edba13c5947f9abad88ac2->leave($__internal_0ab70e44fde6860f98b80363e5a48e44931fbbf3a0edba13c5947f9abad88ac2_prof);

    }

    public function getTemplateName()
    {
        return "terminal/grafico_sup.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 23,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  56 => 16,  53 => 15,  49 => 14,  35 => 2,  23 => 1,);
    }
}
/* {% block table %}*/
/* <div id="tabla_sup" class="">*/
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
/* */
/* */
/* </div>*/
/* {% endblock %}*/
