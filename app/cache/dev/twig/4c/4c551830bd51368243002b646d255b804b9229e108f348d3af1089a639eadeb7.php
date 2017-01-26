<?php

/* WCSCoavBundle:planemodel:new.html.twig */
class __TwigTemplate_99675ca25c4d27da3fa27fef575425c00a2f170ad6ca76d51c3adae92b282d45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WCSCoavBundle:planemodel:new.html.twig", 1);
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
        $__internal_69fbb1766db9a776a203838602f7a13c15c98f7bd0dc45a0e88124e802f60395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69fbb1766db9a776a203838602f7a13c15c98f7bd0dc45a0e88124e802f60395->enter($__internal_69fbb1766db9a776a203838602f7a13c15c98f7bd0dc45a0e88124e802f60395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSCoavBundle:planemodel:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69fbb1766db9a776a203838602f7a13c15c98f7bd0dc45a0e88124e802f60395->leave($__internal_69fbb1766db9a776a203838602f7a13c15c98f7bd0dc45a0e88124e802f60395_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9a71f58b8635421fe25d096331070cbe49ace2dd0141c11a7c7851102ad7f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9a71f58b8635421fe25d096331070cbe49ace2dd0141c11a7c7851102ad7f6d->enter($__internal_a9a71f58b8635421fe25d096331070cbe49ace2dd0141c11a7c7851102ad7f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planemodel creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a9a71f58b8635421fe25d096331070cbe49ace2dd0141c11a7c7851102ad7f6d->leave($__internal_a9a71f58b8635421fe25d096331070cbe49ace2dd0141c11a7c7851102ad7f6d_prof);

    }

    public function getTemplateName()
    {
        return "WCSCoavBundle:planemodel:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Planemodel creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('planemodel_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "WCSCoavBundle:planemodel:new.html.twig", "/var/www/html/tag-q_new-4/src/WCS/CoavBundle/Resources/views/planemodel/new.html.twig");
    }
}
