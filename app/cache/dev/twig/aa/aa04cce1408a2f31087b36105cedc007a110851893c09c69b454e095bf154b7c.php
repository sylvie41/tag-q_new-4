<?php

/* WCSCoavBundle:flight:index.html.twig */
class __TwigTemplate_7ef3b3f6a06a390e7626c06c9c3d4c444caaa3f9c3b4844e0ab4bf5dd5f85128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WCSCoavBundle:flight:index.html.twig", 1);
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
        $__internal_46fc625f4e8308481c9f5f051c6c49872e9a9872e945b289c19a6f5f099132e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46fc625f4e8308481c9f5f051c6c49872e9a9872e945b289c19a6f5f099132e1->enter($__internal_46fc625f4e8308481c9f5f051c6c49872e9a9872e945b289c19a6f5f099132e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSCoavBundle:flight:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46fc625f4e8308481c9f5f051c6c49872e9a9872e945b289c19a6f5f099132e1->leave($__internal_46fc625f4e8308481c9f5f051c6c49872e9a9872e945b289c19a6f5f099132e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_91851410370d20d8f353d47547672ed37a09d22b9c9060aa6d9217890fa36d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91851410370d20d8f353d47547672ed37a09d22b9c9060aa6d9217890fa36d2c->enter($__internal_91851410370d20d8f353d47547672ed37a09d22b9c9060aa6d9217890fa36d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Flights list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Pilot</th>
                <th>Freeseats</th>
                <th>Takeoftime</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["flights"] ?? $this->getContext($context, "flights")));
        foreach ($context['_seq'] as $context["_key"] => $context["flight"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_show", array("id" => $this->getAttribute($context["flight"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["flight"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["flight"], "departure", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["flight"], "arrival", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["flight"], "pilot", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["flight"], "freeSeats", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["flight"], "takeofTime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["flight"], "takeofTime", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_show", array("id" => $this->getAttribute($context["flight"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_edit", array("id" => $this->getAttribute($context["flight"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_new");
        echo "\">Create a new flight</a>
        </li>
    </ul>
";
        
        $__internal_91851410370d20d8f353d47547672ed37a09d22b9c9060aa6d9217890fa36d2c->leave($__internal_91851410370d20d8f353d47547672ed37a09d22b9c9060aa6d9217890fa36d2c_prof);

    }

    public function getTemplateName()
    {
        return "WCSCoavBundle:flight:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 44,  113 => 39,  101 => 33,  95 => 30,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Flights list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Pilot</th>
                <th>Freeseats</th>
                <th>Takeoftime</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for flight in flights %}
            <tr>
                <td><a href=\"{{ path('flight_show', { 'id': flight.id }) }}\">{{ flight.id }}</a></td>
                <td>{{ flight.departure }}</td>
                <td>{{ flight.arrival }}</td>
                <td>{{ flight.pilot }}</td>
                <td>{{ flight.freeSeats }}</td>
                <td>{% if flight.takeofTime %}{{ flight.takeofTime|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('flight_show', { 'id': flight.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('flight_edit', { 'id': flight.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('flight_new') }}\">Create a new flight</a>
        </li>
    </ul>
{% endblock %}
", "WCSCoavBundle:flight:index.html.twig", "/var/www/html/tag-q_new-4/src/WCS/CoavBundle/Resources/views/flight/index.html.twig");
    }
}
