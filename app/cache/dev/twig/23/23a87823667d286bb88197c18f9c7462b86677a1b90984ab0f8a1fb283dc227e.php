<?php

/* WCSCoavBundle:flight:new.html.twig */
class __TwigTemplate_e58e9611acfb43145cb58537fb91050f8c55cfd0948d51a3a8fe221bb9c5fe65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WCSCoavBundle:flight:new.html.twig", 1);
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
        $__internal_e4fecb03ff2f3e5c80f1dd309384ae4dec1e00225d286b06eac57516a831d72b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4fecb03ff2f3e5c80f1dd309384ae4dec1e00225d286b06eac57516a831d72b->enter($__internal_e4fecb03ff2f3e5c80f1dd309384ae4dec1e00225d286b06eac57516a831d72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSCoavBundle:flight:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4fecb03ff2f3e5c80f1dd309384ae4dec1e00225d286b06eac57516a831d72b->leave($__internal_e4fecb03ff2f3e5c80f1dd309384ae4dec1e00225d286b06eac57516a831d72b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7be61926182acc4d99ad587b5261f3b855848e6c0200f18a5669d205675a32cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be61926182acc4d99ad587b5261f3b855848e6c0200f18a5669d205675a32cb->enter($__internal_7be61926182acc4d99ad587b5261f3b855848e6c0200f18a5669d205675a32cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Flight creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_7be61926182acc4d99ad587b5261f3b855848e6c0200f18a5669d205675a32cb->leave($__internal_7be61926182acc4d99ad587b5261f3b855848e6c0200f18a5669d205675a32cb_prof);

    }

    public function getTemplateName()
    {
        return "WCSCoavBundle:flight:new.html.twig";
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
    <h1>Flight creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('flight_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "WCSCoavBundle:flight:new.html.twig", "/var/www/html/tag-q_new-4/src/WCS/CoavBundle/Resources/views/flight/new.html.twig");
    }
}
