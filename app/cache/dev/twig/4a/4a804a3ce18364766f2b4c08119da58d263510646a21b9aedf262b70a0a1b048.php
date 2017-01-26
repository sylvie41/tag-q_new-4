<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fa585fdce52d134323334eb21e35fe6e2095f191f128f4cb4aef3a772d812277 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a05b8e9ae17a3ac7cd56c4f31ed86e2a4554b051a10da232f9f4aca70f199e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05b8e9ae17a3ac7cd56c4f31ed86e2a4554b051a10da232f9f4aca70f199e76->enter($__internal_a05b8e9ae17a3ac7cd56c4f31ed86e2a4554b051a10da232f9f4aca70f199e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a05b8e9ae17a3ac7cd56c4f31ed86e2a4554b051a10da232f9f4aca70f199e76->leave($__internal_a05b8e9ae17a3ac7cd56c4f31ed86e2a4554b051a10da232f9f4aca70f199e76_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e9698c0b760d8a737697fc8ffd1caae6e0810c363a34fd90a09b1d1d59bd2e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e9698c0b760d8a737697fc8ffd1caae6e0810c363a34fd90a09b1d1d59bd2e1->enter($__internal_8e9698c0b760d8a737697fc8ffd1caae6e0810c363a34fd90a09b1d1d59bd2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8e9698c0b760d8a737697fc8ffd1caae6e0810c363a34fd90a09b1d1d59bd2e1->leave($__internal_8e9698c0b760d8a737697fc8ffd1caae6e0810c363a34fd90a09b1d1d59bd2e1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1510cb541a2f9d9b39d314256368acf6ee2bd002bc3e15c82b3a229ca44ece48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1510cb541a2f9d9b39d314256368acf6ee2bd002bc3e15c82b3a229ca44ece48->enter($__internal_1510cb541a2f9d9b39d314256368acf6ee2bd002bc3e15c82b3a229ca44ece48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1510cb541a2f9d9b39d314256368acf6ee2bd002bc3e15c82b3a229ca44ece48->leave($__internal_1510cb541a2f9d9b39d314256368acf6ee2bd002bc3e15c82b3a229ca44ece48_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebf5e17c6c06ea6139e598346347f75d40b56be83203448fc83d06d9f0a21ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf5e17c6c06ea6139e598346347f75d40b56be83203448fc83d06d9f0a21ba6->enter($__internal_ebf5e17c6c06ea6139e598346347f75d40b56be83203448fc83d06d9f0a21ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ebf5e17c6c06ea6139e598346347f75d40b56be83203448fc83d06d9f0a21ba6->leave($__internal_ebf5e17c6c06ea6139e598346347f75d40b56be83203448fc83d06d9f0a21ba6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/tag-q_new-4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
