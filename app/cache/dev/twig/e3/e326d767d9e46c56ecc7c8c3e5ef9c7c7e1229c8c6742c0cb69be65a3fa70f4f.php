<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_8ab72b80ab7542b8173d6d4cf14af792ef09b0a0e35d035b98162abb62feb95c extends Twig_Template
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
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bad0d5e52e766d6dfaec50337af474fd87826548e9d0cab75e6aef02c16371ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad0d5e52e766d6dfaec50337af474fd87826548e9d0cab75e6aef02c16371ff->enter($__internal_bad0d5e52e766d6dfaec50337af474fd87826548e9d0cab75e6aef02c16371ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bad0d5e52e766d6dfaec50337af474fd87826548e9d0cab75e6aef02c16371ff->leave($__internal_bad0d5e52e766d6dfaec50337af474fd87826548e9d0cab75e6aef02c16371ff_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_bc2352d4a3459e56df005f2f559e6b7345fcdf1ee4b959f0f456821fe0e56a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc2352d4a3459e56df005f2f559e6b7345fcdf1ee4b959f0f456821fe0e56a76->enter($__internal_bc2352d4a3459e56df005f2f559e6b7345fcdf1ee4b959f0f456821fe0e56a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_bc2352d4a3459e56df005f2f559e6b7345fcdf1ee4b959f0f456821fe0e56a76->leave($__internal_bc2352d4a3459e56df005f2f559e6b7345fcdf1ee4b959f0f456821fe0e56a76_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_text.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_text.html.twig");
    }
}
