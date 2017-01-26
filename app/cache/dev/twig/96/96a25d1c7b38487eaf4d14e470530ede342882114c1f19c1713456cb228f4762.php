<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_6b7c0076c9d6390e1dd35aa616dc02bc3f1f45336ddef01627680a95643ccf1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e7b6c192e9480731c5f9f8490a84e65c3df19ed8ed8bced053094f2c2865adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e7b6c192e9480731c5f9f8490a84e65c3df19ed8ed8bced053094f2c2865adf->enter($__internal_2e7b6c192e9480731c5f9f8490a84e65c3df19ed8ed8bced053094f2c2865adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e7b6c192e9480731c5f9f8490a84e65c3df19ed8ed8bced053094f2c2865adf->leave($__internal_2e7b6c192e9480731c5f9f8490a84e65c3df19ed8ed8bced053094f2c2865adf_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b97686a73e13cb5dfe5b39af2e84ee64c784c7e130edf5bdd2c7868c4465631a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97686a73e13cb5dfe5b39af2e84ee64c784c7e130edf5bdd2c7868c4465631a->enter($__internal_b97686a73e13cb5dfe5b39af2e84ee64c784c7e130edf5bdd2c7868c4465631a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_b97686a73e13cb5dfe5b39af2e84ee64c784c7e130edf5bdd2c7868c4465631a->leave($__internal_b97686a73e13cb5dfe5b39af2e84ee64c784c7e130edf5bdd2c7868c4465631a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_time.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_time.html.twig");
    }
}
