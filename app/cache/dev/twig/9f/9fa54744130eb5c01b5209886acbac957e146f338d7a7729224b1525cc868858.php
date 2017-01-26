<?php

/* QuetesymfonyBundle:quete:new.html.twig */
class __TwigTemplate_dcd2e4b0b2c4f84907b999bd8e064cfac22cfea887ab91e8d4eb7fb85edea7f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "QuetesymfonyBundle:quete:new.html.twig", 1);
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
        $__internal_46b7fd0fd5565f9dd63dcb19ca86bd898f124ce07132a73f00b47e2830895f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b7fd0fd5565f9dd63dcb19ca86bd898f124ce07132a73f00b47e2830895f07->enter($__internal_46b7fd0fd5565f9dd63dcb19ca86bd898f124ce07132a73f00b47e2830895f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuetesymfonyBundle:quete:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46b7fd0fd5565f9dd63dcb19ca86bd898f124ce07132a73f00b47e2830895f07->leave($__internal_46b7fd0fd5565f9dd63dcb19ca86bd898f124ce07132a73f00b47e2830895f07_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fb43e0a11001ea7e908dfe17c8efdf3fc8f0c623c54e59fc475ad85878ce387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb43e0a11001ea7e908dfe17c8efdf3fc8f0c623c54e59fc475ad85878ce387->enter($__internal_3fb43e0a11001ea7e908dfe17c8efdf3fc8f0c623c54e59fc475ad85878ce387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Quete creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quete_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_3fb43e0a11001ea7e908dfe17c8efdf3fc8f0c623c54e59fc475ad85878ce387->leave($__internal_3fb43e0a11001ea7e908dfe17c8efdf3fc8f0c623c54e59fc475ad85878ce387_prof);

    }

    public function getTemplateName()
    {
        return "QuetesymfonyBundle:quete:new.html.twig";
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
    <h1>Quete creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('quete_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "QuetesymfonyBundle:quete:new.html.twig", "/var/www/html/tag-q_new-4/src/QuetesymfonyBundle/Resources/views/quete/new.html.twig");
    }
}
