<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_77e54d8496f513b546bf748f4534a516e72ef6f65a3ffb3c7500948c210e50ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_9d8df75b7d90ab71df053422df5ba5084e8e58830d4310552acc3e1c70d20dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8df75b7d90ab71df053422df5ba5084e8e58830d4310552acc3e1c70d20dfe->enter($__internal_9d8df75b7d90ab71df053422df5ba5084e8e58830d4310552acc3e1c70d20dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d8df75b7d90ab71df053422df5ba5084e8e58830d4310552acc3e1c70d20dfe->leave($__internal_9d8df75b7d90ab71df053422df5ba5084e8e58830d4310552acc3e1c70d20dfe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_13800c06a1c523d0c2d2123d59a434c744af1092d2177c7d135c3e403a8034d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13800c06a1c523d0c2d2123d59a434c744af1092d2177c7d135c3e403a8034d9->enter($__internal_13800c06a1c523d0c2d2123d59a434c744af1092d2177c7d135c3e403a8034d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_13800c06a1c523d0c2d2123d59a434c744af1092d2177c7d135c3e403a8034d9->leave($__internal_13800c06a1c523d0c2d2123d59a434c744af1092d2177c7d135c3e403a8034d9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_69f8d481956568d957fc2b5026d82fb20d55ded208e6c402516ae8550a36d604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f8d481956568d957fc2b5026d82fb20d55ded208e6c402516ae8550a36d604->enter($__internal_69f8d481956568d957fc2b5026d82fb20d55ded208e6c402516ae8550a36d604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_69f8d481956568d957fc2b5026d82fb20d55ded208e6c402516ae8550a36d604->leave($__internal_69f8d481956568d957fc2b5026d82fb20d55ded208e6c402516ae8550a36d604_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6924f55f630b72d3e23338628215dead228dd2bfe12495b791a5ccce6fff10b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6924f55f630b72d3e23338628215dead228dd2bfe12495b791a5ccce6fff10b5->enter($__internal_6924f55f630b72d3e23338628215dead228dd2bfe12495b791a5ccce6fff10b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6924f55f630b72d3e23338628215dead228dd2bfe12495b791a5ccce6fff10b5->leave($__internal_6924f55f630b72d3e23338628215dead228dd2bfe12495b791a5ccce6fff10b5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/tag-q_new-4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
