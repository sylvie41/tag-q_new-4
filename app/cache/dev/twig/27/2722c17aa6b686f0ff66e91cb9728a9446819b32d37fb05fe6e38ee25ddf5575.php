<?php

/* WCSCoavBundle:planemodel:edit.html.twig */
class __TwigTemplate_14fdc21bf6922c16bd4c9b3ea86e3efdf9a3f5a44e20d77b0e6676db04312199 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WCSCoavBundle:planemodel:edit.html.twig", 1);
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
        $__internal_e9bf88f7bcd23eb36332e86fe84d84a107e055796a7e56ec182d9af3508f4b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9bf88f7bcd23eb36332e86fe84d84a107e055796a7e56ec182d9af3508f4b77->enter($__internal_e9bf88f7bcd23eb36332e86fe84d84a107e055796a7e56ec182d9af3508f4b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSCoavBundle:planemodel:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9bf88f7bcd23eb36332e86fe84d84a107e055796a7e56ec182d9af3508f4b77->leave($__internal_e9bf88f7bcd23eb36332e86fe84d84a107e055796a7e56ec182d9af3508f4b77_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa420ab71b53a7f9e7d7c2381e4d517cda4130bdec8eab986ce4520511d0431a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa420ab71b53a7f9e7d7c2381e4d517cda4130bdec8eab986ce4520511d0431a->enter($__internal_aa420ab71b53a7f9e7d7c2381e4d517cda4130bdec8eab986ce4520511d0431a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planemodel edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_aa420ab71b53a7f9e7d7c2381e4d517cda4130bdec8eab986ce4520511d0431a->leave($__internal_aa420ab71b53a7f9e7d7c2381e4d517cda4130bdec8eab986ce4520511d0431a_prof);

    }

    public function getTemplateName()
    {
        return "WCSCoavBundle:planemodel:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Planemodel edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('planemodel_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "WCSCoavBundle:planemodel:edit.html.twig", "/var/www/html/tag-q_new-4/src/WCS/CoavBundle/Resources/views/planemodel/edit.html.twig");
    }
}
