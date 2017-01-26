<?php

/* WCSCoavBundle:reservation:edit.html.twig */
class __TwigTemplate_747b177db42f2a3647b27d06ec07585138e0a59415b5d241c17c166e4f1bf9e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WCSCoavBundle:reservation:edit.html.twig", 1);
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
        $__internal_867e6efc1af940a6865f6b9ee0d83c4c632af4ace754ab024a63c60d8c9862e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_867e6efc1af940a6865f6b9ee0d83c4c632af4ace754ab024a63c60d8c9862e6->enter($__internal_867e6efc1af940a6865f6b9ee0d83c4c632af4ace754ab024a63c60d8c9862e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSCoavBundle:reservation:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_867e6efc1af940a6865f6b9ee0d83c4c632af4ace754ab024a63c60d8c9862e6->leave($__internal_867e6efc1af940a6865f6b9ee0d83c4c632af4ace754ab024a63c60d8c9862e6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d61963d08305ca89e9b1426a77b24da9657f9d5d8350cbe00ece47714a181165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d61963d08305ca89e9b1426a77b24da9657f9d5d8350cbe00ece47714a181165->enter($__internal_d61963d08305ca89e9b1426a77b24da9657f9d5d8350cbe00ece47714a181165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
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
        
        $__internal_d61963d08305ca89e9b1426a77b24da9657f9d5d8350cbe00ece47714a181165->leave($__internal_d61963d08305ca89e9b1426a77b24da9657f9d5d8350cbe00ece47714a181165_prof);

    }

    public function getTemplateName()
    {
        return "WCSCoavBundle:reservation:edit.html.twig";
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
    <h1>Reservation edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('reservation_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "WCSCoavBundle:reservation:edit.html.twig", "/var/www/html/tag-q_new-4/src/WCS/CoavBundle/Resources/views/reservation/edit.html.twig");
    }
}
