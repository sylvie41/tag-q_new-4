<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ed766b1f62963a592ac2c7cdf8069a972b62dad835ad67f379a90e5d75286429 extends Twig_Template
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
        $__internal_0ed33026ddf88f072603d701a1f8389d4c82b5cd95d64c6d7f5f71e804f8a0d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed33026ddf88f072603d701a1f8389d4c82b5cd95d64c6d7f5f71e804f8a0d3->enter($__internal_0ed33026ddf88f072603d701a1f8389d4c82b5cd95d64c6d7f5f71e804f8a0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ed33026ddf88f072603d701a1f8389d4c82b5cd95d64c6d7f5f71e804f8a0d3->leave($__internal_0ed33026ddf88f072603d701a1f8389d4c82b5cd95d64c6d7f5f71e804f8a0d3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b1df4a81eebc9fc10a429f093e8224eee7fe63460fc5292349a4a047abc267a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1df4a81eebc9fc10a429f093e8224eee7fe63460fc5292349a4a047abc267a0->enter($__internal_b1df4a81eebc9fc10a429f093e8224eee7fe63460fc5292349a4a047abc267a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b1df4a81eebc9fc10a429f093e8224eee7fe63460fc5292349a4a047abc267a0->leave($__internal_b1df4a81eebc9fc10a429f093e8224eee7fe63460fc5292349a4a047abc267a0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_31b4ec4e910d759fe1b13f4beea8d2aac59ceeb2835cc95368b4b65d31ea5da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b4ec4e910d759fe1b13f4beea8d2aac59ceeb2835cc95368b4b65d31ea5da1->enter($__internal_31b4ec4e910d759fe1b13f4beea8d2aac59ceeb2835cc95368b4b65d31ea5da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_31b4ec4e910d759fe1b13f4beea8d2aac59ceeb2835cc95368b4b65d31ea5da1->leave($__internal_31b4ec4e910d759fe1b13f4beea8d2aac59ceeb2835cc95368b4b65d31ea5da1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bd02895b6bfd46647f0c03a95330b9ffe4559920252f071440c78d8daef8650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd02895b6bfd46647f0c03a95330b9ffe4559920252f071440c78d8daef8650->enter($__internal_9bd02895b6bfd46647f0c03a95330b9ffe4559920252f071440c78d8daef8650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9bd02895b6bfd46647f0c03a95330b9ffe4559920252f071440c78d8daef8650->leave($__internal_9bd02895b6bfd46647f0c03a95330b9ffe4559920252f071440c78d8daef8650_prof);

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
