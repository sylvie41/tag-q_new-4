<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_29cb650bafda2ec779d662918988a90fae707f9582cf9fc6cc75987450a6df31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_6c687229632d691a674a4e38ed081de9e77cf1ce4850cd690a8eea508404efaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c687229632d691a674a4e38ed081de9e77cf1ce4850cd690a8eea508404efaa->enter($__internal_6c687229632d691a674a4e38ed081de9e77cf1ce4850cd690a8eea508404efaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c687229632d691a674a4e38ed081de9e77cf1ce4850cd690a8eea508404efaa->leave($__internal_6c687229632d691a674a4e38ed081de9e77cf1ce4850cd690a8eea508404efaa_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2fd59cb22aa7d47011ec8b7f4b779abb03f95040d1d8c62e04c26d831870d44a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd59cb22aa7d47011ec8b7f4b779abb03f95040d1d8c62e04c26d831870d44a->enter($__internal_2fd59cb22aa7d47011ec8b7f4b779abb03f95040d1d8c62e04c26d831870d44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = (($context["value"] ?? $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_2fd59cb22aa7d47011ec8b7f4b779abb03f95040d1d8c62e04c26d831870d44a->leave($__internal_2fd59cb22aa7d47011ec8b7f4b779abb03f95040d1d8c62e04c26d831870d44a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:show_percent.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_percent.html.twig");
    }
}
