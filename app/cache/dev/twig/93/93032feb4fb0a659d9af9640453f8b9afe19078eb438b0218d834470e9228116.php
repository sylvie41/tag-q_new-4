<?php

/* WCSCoavBundle:reservation:show.html.twig */
class __TwigTemplate_3c4d4b5911bfdbd80ee8a46ae89e7ed767ff4ca3f94430b05401b25001033025 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WCSCoavBundle:reservation:show.html.twig", 1);
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
        $__internal_6d3674618a2eda395ae170354e3f90cabe2944c15ea2540c576527d60c49c234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d3674618a2eda395ae170354e3f90cabe2944c15ea2540c576527d60c49c234->enter($__internal_6d3674618a2eda395ae170354e3f90cabe2944c15ea2540c576527d60c49c234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSCoavBundle:reservation:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d3674618a2eda395ae170354e3f90cabe2944c15ea2540c576527d60c49c234->leave($__internal_6d3674618a2eda395ae170354e3f90cabe2944c15ea2540c576527d60c49c234_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2572f458cc60eb36b46c592fc6069ba44efb6c573b9d622d9c249ebad37b0a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2572f458cc60eb36b46c592fc6069ba44efb6c573b9d622d9c249ebad37b0a81->enter($__internal_2572f458cc60eb36b46c592fc6069ba44efb6c573b9d622d9c249ebad37b0a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbseats</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "nbSeats", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_edit", array("id" => $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_2572f458cc60eb36b46c592fc6069ba44efb6c573b9d622d9c249ebad37b0a81->leave($__internal_2572f458cc60eb36b46c592fc6069ba44efb6c573b9d622d9c249ebad37b0a81_prof);

    }

    public function getTemplateName()
    {
        return "WCSCoavBundle:reservation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Reservation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ reservation.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ reservation.name }}</td>
            </tr>
            <tr>
                <th>Nbseats</th>
                <td>{{ reservation.nbSeats }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('reservation_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('reservation_edit', { 'id': reservation.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "WCSCoavBundle:reservation:show.html.twig", "/var/www/html/tag-q_new-4/src/WCS/CoavBundle/Resources/views/reservation/show.html.twig");
    }
}
