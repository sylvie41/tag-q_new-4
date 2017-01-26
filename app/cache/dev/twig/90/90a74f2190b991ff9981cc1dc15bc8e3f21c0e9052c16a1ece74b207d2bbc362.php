<?php

/* WCSCoavBundle:reservation:index.html.twig */
class __TwigTemplate_666c52ce140f7a8c7857928e30f345a901e3e2922eb6c9a938f4b891c6a1567b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WCSCoavBundle:reservation:index.html.twig", 1);
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
        $__internal_39472a4b7ec66b1efd4cd9b9312ea7ca69f8c77f38090d7d11dcd3271031db29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39472a4b7ec66b1efd4cd9b9312ea7ca69f8c77f38090d7d11dcd3271031db29->enter($__internal_39472a4b7ec66b1efd4cd9b9312ea7ca69f8c77f38090d7d11dcd3271031db29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSCoavBundle:reservation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39472a4b7ec66b1efd4cd9b9312ea7ca69f8c77f38090d7d11dcd3271031db29->leave($__internal_39472a4b7ec66b1efd4cd9b9312ea7ca69f8c77f38090d7d11dcd3271031db29_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b481336061d473517904bdfe08659b697a3bf66d939cf371a11a30f2943d9735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b481336061d473517904bdfe08659b697a3bf66d939cf371a11a30f2943d9735->enter($__internal_b481336061d473517904bdfe08659b697a3bf66d939cf371a11a30f2943d9735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservations list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Nbseats</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_show", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "nbSeats", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_show", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_edit", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_new");
        echo "\">Create a new reservation</a>
        </li>
    </ul>
";
        
        $__internal_b481336061d473517904bdfe08659b697a3bf66d939cf371a11a30f2943d9735->leave($__internal_b481336061d473517904bdfe08659b697a3bf66d939cf371a11a30f2943d9735_prof);

    }

    public function getTemplateName()
    {
        return "WCSCoavBundle:reservation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Reservations list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Nbseats</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reservation in reservations %}
            <tr>
                <td><a href=\"{{ path('reservation_show', { 'id': reservation.id }) }}\">{{ reservation.id }}</a></td>
                <td>{{ reservation.name }}</td>
                <td>{{ reservation.nbSeats }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('reservation_show', { 'id': reservation.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('reservation_edit', { 'id': reservation.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('reservation_new') }}\">Create a new reservation</a>
        </li>
    </ul>
{% endblock %}
", "WCSCoavBundle:reservation:index.html.twig", "/var/www/html/tag-q_new-4/src/WCS/CoavBundle/Resources/views/reservation/index.html.twig");
    }
}
