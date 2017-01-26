<?php

/* SonataAdminBundle:CRUD:show_trans.html.twig */
class __TwigTemplate_fca1f0b9b5fec46c71c5f1cd7d3ad47b939e7ca1dff29f02737d625d1e333204 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_trans.html.twig", 11);
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
        $__internal_88f0cecd8f7c2e1eb6cdc6340ea85c00411e671c909a682c507e10c3feb7dc1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f0cecd8f7c2e1eb6cdc6340ea85c00411e671c909a682c507e10c3feb7dc1e->enter($__internal_88f0cecd8f7c2e1eb6cdc6340ea85c00411e671c909a682c507e10c3feb7dc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_trans.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88f0cecd8f7c2e1eb6cdc6340ea85c00411e671c909a682c507e10c3feb7dc1e->leave($__internal_88f0cecd8f7c2e1eb6cdc6340ea85c00411e671c909a682c507e10c3feb7dc1e_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_2ef02891c23edce50e41290dff20ef32c76f1c3fb383291d6c6c49aba914f3d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef02891c23edce50e41290dff20ef32c76f1c3fb383291d6c6c49aba914f3d3->enter($__internal_2ef02891c23edce50e41290dff20ef32c76f1c3fb383291d6c6c49aba914f3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 14
        echo "    ";
        if ( !$this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
            // line 15
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value")));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value")), array(), $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "catalogue", array()));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            // line 21
            echo "        ";
            echo ($context["value"] ?? $this->getContext($context, "value"));
            echo "
    ";
        } else {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_2ef02891c23edce50e41290dff20ef32c76f1c3fb383291d6c6c49aba914f3d3->leave($__internal_2ef02891c23edce50e41290dff20ef32c76f1c3fb383291d6c6c49aba914f3d3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  60 => 21,  58 => 20,  55 => 19,  52 => 18,  49 => 17,  46 => 16,  43 => 15,  40 => 14,  34 => 13,  11 => 11,);
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

{% block field%}
    {% if field_description.options.catalogue is not defined %}
        {% set value = value|trans %}
    {% else %}
        {% set value = value|trans({}, field_description.options.catalogue) %}
    {% endif %}

    {% if field_description.options.safe %}
        {{ value|raw }}
    {% else %}
        {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_trans.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_trans.html.twig");
    }
}
