<?php

/* SonataAdminBundle:CRUD:list_html.html.twig */
class __TwigTemplate_a0be08a5e280da8d458609c70890f419e2110e2c7ebfe3bc0ca37d6c0f99a13a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_html.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3824f84dc80a9d2efe0b4bff9fd5c7493df10f784189678f71f5b18780198a8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3824f84dc80a9d2efe0b4bff9fd5c7493df10f784189678f71f5b18780198a8e->enter($__internal_3824f84dc80a9d2efe0b4bff9fd5c7493df10f784189678f71f5b18780198a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_html.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3824f84dc80a9d2efe0b4bff9fd5c7493df10f784189678f71f5b18780198a8e->leave($__internal_3824f84dc80a9d2efe0b4bff9fd5c7493df10f784189678f71f5b18780198a8e_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_aea5a89a28415322dee5149791afa3cd893f8a30f49d278ac605fb184a401545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea5a89a28415322dee5149791afa3cd893f8a30f49d278ac605fb184a401545->enter($__internal_aea5a89a28415322dee5149791afa3cd893f8a30f49d278ac605fb184a401545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 5
            echo "&nbsp;
    ";
        } else {
            // line 7
            if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "truncate", array(), "any", true, true)) {
                // line 8
                $context["truncate"] = $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "truncate", array());
                // line 9
                echo "            ";
                $context["length"] = (($this->getAttribute(($context["truncate"] ?? null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["truncate"] ?? null), "length", array()), 30)) : (30));
                // line 10
                echo "            ";
                $context["preserve"] = (($this->getAttribute(($context["truncate"] ?? null), "preserve", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["truncate"] ?? null), "preserve", array()), false)) : (false));
                // line 11
                echo "            ";
                $context["separator"] = (($this->getAttribute(($context["truncate"] ?? null), "separator", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["truncate"] ?? null), "separator", array()), "...")) : ("..."));
                // line 12
                echo "            ";
                echo twig_truncate_filter($this->env, strip_tags(($context["value"] ?? $this->getContext($context, "value"))), ($context["length"] ?? $this->getContext($context, "length")), ($context["preserve"] ?? $this->getContext($context, "preserve")), ($context["separator"] ?? $this->getContext($context, "separator")));
            } else {
                // line 14
                if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "strip", array(), "any", true, true)) {
                    // line 15
                    $context["value"] = strip_tags(($context["value"] ?? $this->getContext($context, "value")));
                }
                // line 17
                echo ($context["value"] ?? $this->getContext($context, "value"));
                echo "
        ";
            }
            // line 19
            echo "    ";
        }
        
        $__internal_aea5a89a28415322dee5149791afa3cd893f8a30f49d278ac605fb184a401545->leave($__internal_aea5a89a28415322dee5149791afa3cd893f8a30f49d278ac605fb184a401545_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  67 => 17,  64 => 15,  62 => 14,  58 => 12,  55 => 11,  52 => 10,  49 => 9,  47 => 8,  45 => 7,  41 => 5,  39 => 4,  33 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {% else %}
        {%- if field_description.options.truncate is defined -%}
            {% set truncate = field_description.options.truncate %}
            {% set length = truncate.length|default(30) %}
            {% set preserve = truncate.preserve|default(false) %}
            {% set separator = truncate.separator|default('...') %}
            {{ value|striptags|truncate(length, preserve, separator)|raw }}
        {%- else -%}
            {%- if field_description.options.strip is defined -%}
                {% set value = value|striptags %}
            {%- endif -%}
            {{ value|raw }}
        {% endif %}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_html.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_html.html.twig");
    }
}
