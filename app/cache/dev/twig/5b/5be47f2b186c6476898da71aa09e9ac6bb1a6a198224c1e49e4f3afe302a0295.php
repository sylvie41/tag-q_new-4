<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_66df5204d6f19fb97a5ab7254877d1892466d28039b579745455405877b00b1d extends Twig_Template
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
        $__internal_5d7eed869347a0562ab34fce1292ba92005c5fcfa5cfcd8011b67cd860bdd650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7eed869347a0562ab34fce1292ba92005c5fcfa5cfcd8011b67cd860bdd650->enter($__internal_5d7eed869347a0562ab34fce1292ba92005c5fcfa5cfcd8011b67cd860bdd650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d7eed869347a0562ab34fce1292ba92005c5fcfa5cfcd8011b67cd860bdd650->leave($__internal_5d7eed869347a0562ab34fce1292ba92005c5fcfa5cfcd8011b67cd860bdd650_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b8446468c33199ed54f8b69bb94ce50b679a5e38e75240e9565b23acb4399a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8446468c33199ed54f8b69bb94ce50b679a5e38e75240e9565b23acb4399a63->enter($__internal_b8446468c33199ed54f8b69bb94ce50b679a5e38e75240e9565b23acb4399a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b8446468c33199ed54f8b69bb94ce50b679a5e38e75240e9565b23acb4399a63->leave($__internal_b8446468c33199ed54f8b69bb94ce50b679a5e38e75240e9565b23acb4399a63_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_885a56d9ad21f8422606462eac758e278abd7a06feb3dedd051d5ae6422ae657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885a56d9ad21f8422606462eac758e278abd7a06feb3dedd051d5ae6422ae657->enter($__internal_885a56d9ad21f8422606462eac758e278abd7a06feb3dedd051d5ae6422ae657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_885a56d9ad21f8422606462eac758e278abd7a06feb3dedd051d5ae6422ae657->leave($__internal_885a56d9ad21f8422606462eac758e278abd7a06feb3dedd051d5ae6422ae657_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8b86e0be56cb638d4b6f43c9ca57000fe18c565df1a1f0b41224738569b8b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b86e0be56cb638d4b6f43c9ca57000fe18c565df1a1f0b41224738569b8b86->enter($__internal_d8b86e0be56cb638d4b6f43c9ca57000fe18c565df1a1f0b41224738569b8b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d8b86e0be56cb638d4b6f43c9ca57000fe18c565df1a1f0b41224738569b8b86->leave($__internal_d8b86e0be56cb638d4b6f43c9ca57000fe18c565df1a1f0b41224738569b8b86_prof);

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
