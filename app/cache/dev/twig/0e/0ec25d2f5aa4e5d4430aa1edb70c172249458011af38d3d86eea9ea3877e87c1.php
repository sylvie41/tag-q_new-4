<?php

/* WCSCoavBundle:reservation:new.html.twig */
class __TwigTemplate_148d2b5ee540f34c2c09a336b8692cd867cdcd0dc95ed37e7e4af9ce39cbd7e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WCSCoavBundle:reservation:new.html.twig", 1);
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
        $__internal_8dd9c6956ca59f9e18a81dab6c661c7f47f86646e6e8e1873a4aea3a44fa76be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd9c6956ca59f9e18a81dab6c661c7f47f86646e6e8e1873a4aea3a44fa76be->enter($__internal_8dd9c6956ca59f9e18a81dab6c661c7f47f86646e6e8e1873a4aea3a44fa76be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSCoavBundle:reservation:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dd9c6956ca59f9e18a81dab6c661c7f47f86646e6e8e1873a4aea3a44fa76be->leave($__internal_8dd9c6956ca59f9e18a81dab6c661c7f47f86646e6e8e1873a4aea3a44fa76be_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c4b72789ca7effdb31084ba5f5db162e472721e925add15e20c117dbf63a734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c4b72789ca7effdb31084ba5f5db162e472721e925add15e20c117dbf63a734->enter($__internal_8c4b72789ca7effdb31084ba5f5db162e472721e925add15e20c117dbf63a734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_8c4b72789ca7effdb31084ba5f5db162e472721e925add15e20c117dbf63a734->leave($__internal_8c4b72789ca7effdb31084ba5f5db162e472721e925add15e20c117dbf63a734_prof);

    }

    public function getTemplateName()
    {
        return "WCSCoavBundle:reservation:new.html.twig";
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
    <h1>Reservation creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('reservation_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "WCSCoavBundle:reservation:new.html.twig", "/var/www/html/tag-q_new-4/src/WCS/CoavBundle/Resources/views/reservation/new.html.twig");
    }
}
