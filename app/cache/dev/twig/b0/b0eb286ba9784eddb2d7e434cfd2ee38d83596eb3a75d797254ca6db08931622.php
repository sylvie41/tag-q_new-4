<?php

/* QuetesymfonyBundle:quete:index.html.twig */
class __TwigTemplate_2ed3e9855e3255b685fdfbb393af7bad226a3238e16521f5f0f20cb0a3605625 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "QuetesymfonyBundle:quete:index.html.twig", 1);
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
        $__internal_1ea12ecffb187f4d0714e5f6d321d96582a2a5443bf9bd9e172c5d5032b655d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ea12ecffb187f4d0714e5f6d321d96582a2a5443bf9bd9e172c5d5032b655d8->enter($__internal_1ea12ecffb187f4d0714e5f6d321d96582a2a5443bf9bd9e172c5d5032b655d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuetesymfonyBundle:quete:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ea12ecffb187f4d0714e5f6d321d96582a2a5443bf9bd9e172c5d5032b655d8->leave($__internal_1ea12ecffb187f4d0714e5f6d321d96582a2a5443bf9bd9e172c5d5032b655d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd2d8ac2743ed080d8271768fe6e669390d1c162789a40b67cae6925bdcd0273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2d8ac2743ed080d8271768fe6e669390d1c162789a40b67cae6925bdcd0273->enter($__internal_dd2d8ac2743ed080d8271768fe6e669390d1c162789a40b67cae6925bdcd0273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Quetes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["quetes"] ?? $this->getContext($context, "quetes")));
        foreach ($context['_seq'] as $context["_key"] => $context["quete"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quete_show", array("id" => $this->getAttribute($context["quete"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quete"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["quete"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["quete"], "age", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quete_show", array("id" => $this->getAttribute($context["quete"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quete_edit", array("id" => $this->getAttribute($context["quete"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quete'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quete_new");
        echo "\">Create a new quete</a>
        </li>
    </ul>
";
        
        $__internal_dd2d8ac2743ed080d8271768fe6e669390d1c162789a40b67cae6925bdcd0273->leave($__internal_dd2d8ac2743ed080d8271768fe6e669390d1c162789a40b67cae6925bdcd0273_prof);

    }

    public function getTemplateName()
    {
        return "QuetesymfonyBundle:quete:index.html.twig";
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
    <h1>Quetes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for quete in quetes %}
            <tr>
                <td><a href=\"{{ path('quete_show', { 'id': quete.id }) }}\">{{ quete.id }}</a></td>
                <td>{{ quete.name }}</td>
                <td>{{ quete.age }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('quete_show', { 'id': quete.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('quete_edit', { 'id': quete.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('quete_new') }}\">Create a new quete</a>
        </li>
    </ul>
{% endblock %}
", "QuetesymfonyBundle:quete:index.html.twig", "/var/www/html/tag-q_new-4/src/QuetesymfonyBundle/Resources/views/quete/index.html.twig");
    }
}
