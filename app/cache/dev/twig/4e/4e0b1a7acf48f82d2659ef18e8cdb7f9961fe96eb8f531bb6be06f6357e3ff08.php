<?php

/* QuetesymfonyBundle:quete:show.html.twig */
class __TwigTemplate_6073f6e6ecebbdda7e9d6767644dbb93db418415e19256437187314ba2876128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "QuetesymfonyBundle:quete:show.html.twig", 1);
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
        $__internal_7ac840b70d26005b38b77cd45262f98510d3175c66346fbb5804884de6f5534b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac840b70d26005b38b77cd45262f98510d3175c66346fbb5804884de6f5534b->enter($__internal_7ac840b70d26005b38b77cd45262f98510d3175c66346fbb5804884de6f5534b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuetesymfonyBundle:quete:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ac840b70d26005b38b77cd45262f98510d3175c66346fbb5804884de6f5534b->leave($__internal_7ac840b70d26005b38b77cd45262f98510d3175c66346fbb5804884de6f5534b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f75be2e942760d7be6df8c437b6eb3536473a99f033ec689806178edda76640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f75be2e942760d7be6df8c437b6eb3536473a99f033ec689806178edda76640->enter($__internal_3f75be2e942760d7be6df8c437b6eb3536473a99f033ec689806178edda76640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Quete</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quete"] ?? $this->getContext($context, "quete")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quete"] ?? $this->getContext($context, "quete")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quete"] ?? $this->getContext($context, "quete")), "age", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quete_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quete_edit", array("id" => $this->getAttribute(($context["quete"] ?? $this->getContext($context, "quete")), "id", array()))), "html", null, true);
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
        
        $__internal_3f75be2e942760d7be6df8c437b6eb3536473a99f033ec689806178edda76640->leave($__internal_3f75be2e942760d7be6df8c437b6eb3536473a99f033ec689806178edda76640_prof);

    }

    public function getTemplateName()
    {
        return "QuetesymfonyBundle:quete:show.html.twig";
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
    <h1>Quete</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ quete.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ quete.name }}</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>{{ quete.age }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('quete_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('quete_edit', { 'id': quete.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "QuetesymfonyBundle:quete:show.html.twig", "/var/www/html/tag-q_new-4/src/QuetesymfonyBundle/Resources/views/quete/show.html.twig");
    }
}
