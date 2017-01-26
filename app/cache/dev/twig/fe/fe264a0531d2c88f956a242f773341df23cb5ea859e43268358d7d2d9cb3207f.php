<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_e593242e8064c1c8ac4ae799fcf0e4e04ba1e8e6e8c39629623bb05a9f524204 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d53ef35b852316c125eccb55775674e90fa0e9aa9097387d2c555c953e63d93d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53ef35b852316c125eccb55775674e90fa0e9aa9097387d2c555c953e63d93d->enter($__internal_d53ef35b852316c125eccb55775674e90fa0e9aa9097387d2c555c953e63d93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d53ef35b852316c125eccb55775674e90fa0e9aa9097387d2c555c953e63d93d->leave($__internal_d53ef35b852316c125eccb55775674e90fa0e9aa9097387d2c555c953e63d93d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_52e847c8f935273175242669c5ba60036a313fceeefff2bffc444c24208f2d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e847c8f935273175242669c5ba60036a313fceeefff2bffc444c24208f2d95->enter($__internal_52e847c8f935273175242669c5ba60036a313fceeefff2bffc444c24208f2d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_52e847c8f935273175242669c5ba60036a313fceeefff2bffc444c24208f2d95->leave($__internal_52e847c8f935273175242669c5ba60036a313fceeefff2bffc444c24208f2d95_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
", "SonataAdminBundle:CRUD:edit_integer.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_integer.html.twig");
    }
}
