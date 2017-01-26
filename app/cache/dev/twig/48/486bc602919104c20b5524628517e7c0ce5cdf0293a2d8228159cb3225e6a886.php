<?php

/* WCSCoavBundle:flight:show.html.twig */
class __TwigTemplate_bb3afac6c94311471d2730ce885a15286148fceaafbc6ad107ccbdde61a0fd76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WCSCoavBundle:flight:show.html.twig", 1);
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
        $__internal_f3bec6f6462920036d31d598c5df002bf780d64b565dbfee20fae4f37bbf1c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3bec6f6462920036d31d598c5df002bf780d64b565dbfee20fae4f37bbf1c85->enter($__internal_f3bec6f6462920036d31d598c5df002bf780d64b565dbfee20fae4f37bbf1c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSCoavBundle:flight:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3bec6f6462920036d31d598c5df002bf780d64b565dbfee20fae4f37bbf1c85->leave($__internal_f3bec6f6462920036d31d598c5df002bf780d64b565dbfee20fae4f37bbf1c85_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9f150d66f26bd8b6dc7dae8fc7cd3eb7a296271088aa330cf88119bb6c001e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9f150d66f26bd8b6dc7dae8fc7cd3eb7a296271088aa330cf88119bb6c001e9->enter($__internal_a9f150d66f26bd8b6dc7dae8fc7cd3eb7a296271088aa330cf88119bb6c001e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Flight</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Departure</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "departure", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Arrival</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "arrival", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pilot</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "pilot", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Freeseats</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "freeSeats", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Takeoftime</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "takeofTime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "takeofTime", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_edit", array("id" => $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "id", array()))), "html", null, true);
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
        
        $__internal_a9f150d66f26bd8b6dc7dae8fc7cd3eb7a296271088aa330cf88119bb6c001e9->leave($__internal_a9f150d66f26bd8b6dc7dae8fc7cd3eb7a296271088aa330cf88119bb6c001e9_prof);

    }

    public function getTemplateName()
    {
        return "WCSCoavBundle:flight:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 45,  107 => 43,  101 => 40,  95 => 37,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Flight</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ flight.id }}</td>
            </tr>
            <tr>
                <th>Departure</th>
                <td>{{ flight.departure }}</td>
            </tr>
            <tr>
                <th>Arrival</th>
                <td>{{ flight.arrival }}</td>
            </tr>
            <tr>
                <th>Pilot</th>
                <td>{{ flight.pilot }}</td>
            </tr>
            <tr>
                <th>Freeseats</th>
                <td>{{ flight.freeSeats }}</td>
            </tr>
            <tr>
                <th>Takeoftime</th>
                <td>{% if flight.takeofTime %}{{ flight.takeofTime|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('flight_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('flight_edit', { 'id': flight.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "WCSCoavBundle:flight:show.html.twig", "/var/www/html/tag-q_new-4/src/WCS/CoavBundle/Resources/views/flight/show.html.twig");
    }
}
