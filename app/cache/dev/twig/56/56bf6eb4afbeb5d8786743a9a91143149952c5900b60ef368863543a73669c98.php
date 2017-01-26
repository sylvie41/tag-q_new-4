<?php

/* WCSCoavBundle:planemodel:show.html.twig */
class __TwigTemplate_fb2222692689eee7af681b1d35d5af660fc5657b5791e464220ca8932bf7ea79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WCSCoavBundle:planemodel:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea6a6d6a1cbcceffd1ecc9b0a639e71bc1c7b6eef7605a07be3f6f7486835004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea6a6d6a1cbcceffd1ecc9b0a639e71bc1c7b6eef7605a07be3f6f7486835004->enter($__internal_ea6a6d6a1cbcceffd1ecc9b0a639e71bc1c7b6eef7605a07be3f6f7486835004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSCoavBundle:planemodel:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea6a6d6a1cbcceffd1ecc9b0a639e71bc1c7b6eef7605a07be3f6f7486835004->leave($__internal_ea6a6d6a1cbcceffd1ecc9b0a639e71bc1c7b6eef7605a07be3f6f7486835004_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ce80716dd2a8f230d16e32d30c4cbde8329828580d533bda0a70ee91d91acb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce80716dd2a8f230d16e32d30c4cbde8329828580d533bda0a70ee91d91acb7->enter($__internal_7ce80716dd2a8f230d16e32d30c4cbde8329828580d533bda0a70ee91d91acb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planemodel</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["planeModel"] ?? $this->getContext($context, "planeModel")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Model</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["planeModel"] ?? $this->getContext($context, "planeModel")), "model", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Manufacturer</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["planeModel"] ?? $this->getContext($context, "planeModel")), "manufacturer", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cruisespeed</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["planeModel"] ?? $this->getContext($context, "planeModel")), "cruiseSpeed", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbseats</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["planeModel"] ?? $this->getContext($context, "planeModel")), "nbSeats", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["planeModel"] ?? $this->getContext($context, "planeModel")), "status", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_edit", array("id" => $this->getAttribute(($context["planeModel"] ?? $this->getContext($context, "planeModel")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7ce80716dd2a8f230d16e32d30c4cbde8329828580d533bda0a70ee91d91acb7->leave($__internal_7ce80716dd2a8f230d16e32d30c4cbde8329828580d533bda0a70ee91d91acb7_prof);

    }

    public function getTemplateName()
    {
        return "WCSCoavBundle:planemodel:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 45,  105 => 43,  99 => 40,  93 => 37,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Planemodel</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ planeModel.id }}</td>
            </tr>
            <tr>
                <th>Model</th>
                <td>{{ planeModel.model }}</td>
            </tr>
            <tr>
                <th>Manufacturer</th>
                <td>{{ planeModel.manufacturer }}</td>
            </tr>
            <tr>
                <th>Cruisespeed</th>
                <td>{{ planeModel.cruiseSpeed }}</td>
            </tr>
            <tr>
                <th>Nbseats</th>
                <td>{{ planeModel.nbSeats }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ planeModel.status }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('planemodel_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('planemodel_edit', { 'id': planeModel.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "WCSCoavBundle:planemodel:show.html.twig", "/var/www/html/tag-q_new-4/src/WCS/CoavBundle/Resources/views/planemodel/show.html.twig");
    }
}
