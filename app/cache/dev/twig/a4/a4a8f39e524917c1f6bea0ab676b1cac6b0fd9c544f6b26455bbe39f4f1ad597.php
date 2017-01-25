<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e2bc04fe65c7528776b8b4ae50df31ab2e6d96ff5963e29c4c2d9b6e8be9f4d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c14e9dea01fb758aa9aae374bfe730a08de68839521492a4cb9d4894b7932fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14e9dea01fb758aa9aae374bfe730a08de68839521492a4cb9d4894b7932fd8->enter($__internal_c14e9dea01fb758aa9aae374bfe730a08de68839521492a4cb9d4894b7932fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c14e9dea01fb758aa9aae374bfe730a08de68839521492a4cb9d4894b7932fd8->leave($__internal_c14e9dea01fb758aa9aae374bfe730a08de68839521492a4cb9d4894b7932fd8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_795829a52e91d3d1cc98af5c66a3bec80761bf8c91b66e505b5e1eac07b80611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795829a52e91d3d1cc98af5c66a3bec80761bf8c91b66e505b5e1eac07b80611->enter($__internal_795829a52e91d3d1cc98af5c66a3bec80761bf8c91b66e505b5e1eac07b80611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_795829a52e91d3d1cc98af5c66a3bec80761bf8c91b66e505b5e1eac07b80611->leave($__internal_795829a52e91d3d1cc98af5c66a3bec80761bf8c91b66e505b5e1eac07b80611_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad90c014680a3e59d9a368d6d751a7eeb114aa99ce94e6116dc5f0b31624b5e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad90c014680a3e59d9a368d6d751a7eeb114aa99ce94e6116dc5f0b31624b5e8->enter($__internal_ad90c014680a3e59d9a368d6d751a7eeb114aa99ce94e6116dc5f0b31624b5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ad90c014680a3e59d9a368d6d751a7eeb114aa99ce94e6116dc5f0b31624b5e8->leave($__internal_ad90c014680a3e59d9a368d6d751a7eeb114aa99ce94e6116dc5f0b31624b5e8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b736fc8c5d7ea8b750c45405dc455c856204b69460fb6ee1feff3a8397dc7dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b736fc8c5d7ea8b750c45405dc455c856204b69460fb6ee1feff3a8397dc7dc8->enter($__internal_b736fc8c5d7ea8b750c45405dc455c856204b69460fb6ee1feff3a8397dc7dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b736fc8c5d7ea8b750c45405dc455c856204b69460fb6ee1feff3a8397dc7dc8->leave($__internal_b736fc8c5d7ea8b750c45405dc455c856204b69460fb6ee1feff3a8397dc7dc8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/tag-q_new-4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
