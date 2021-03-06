<?php

/* WCSCoavBundle:flight:edit.html.twig */
class __TwigTemplate_2a6edb24c33e553ac8d2b0d8e81e6b7e4caae22587b5231e6c3595bf3526375d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WCSCoavBundle:flight:edit.html.twig", 1);
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
        $__internal_74d189c8d5c1aba7ce61fa41c5efc0120bc371327d20331f8620d0aebf07afec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d189c8d5c1aba7ce61fa41c5efc0120bc371327d20331f8620d0aebf07afec->enter($__internal_74d189c8d5c1aba7ce61fa41c5efc0120bc371327d20331f8620d0aebf07afec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSCoavBundle:flight:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74d189c8d5c1aba7ce61fa41c5efc0120bc371327d20331f8620d0aebf07afec->leave($__internal_74d189c8d5c1aba7ce61fa41c5efc0120bc371327d20331f8620d0aebf07afec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6995d2e32a12f8d68f73ad7094012f028f1457c75fb2f2faa8b93c7008b20bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6995d2e32a12f8d68f73ad7094012f028f1457c75fb2f2faa8b93c7008b20bc0->enter($__internal_6995d2e32a12f8d68f73ad7094012f028f1457c75fb2f2faa8b93c7008b20bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Flight edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_index");
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
        
        $__internal_6995d2e32a12f8d68f73ad7094012f028f1457c75fb2f2faa8b93c7008b20bc0->leave($__internal_6995d2e32a12f8d68f73ad7094012f028f1457c75fb2f2faa8b93c7008b20bc0_prof);

    }

    public function getTemplateName()
    {
        return "WCSCoavBundle:flight:edit.html.twig";
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
    <h1>Flight edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('flight_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "WCSCoavBundle:flight:edit.html.twig", "/var/www/html/tag-q_new-4/src/WCS/CoavBundle/Resources/views/flight/edit.html.twig");
    }
}
