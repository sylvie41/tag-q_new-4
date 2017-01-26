<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_c278ae4ef8fd67099a11ce7c1acc01d9b301e5a92e8e15cb218b5efe43cc293b extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6b2026cc260daa6e69372d3343dcd26dce19e375ed29353801a28523819c070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b2026cc260daa6e69372d3343dcd26dce19e375ed29353801a28523819c070->enter($__internal_f6b2026cc260daa6e69372d3343dcd26dce19e375ed29353801a28523819c070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6b2026cc260daa6e69372d3343dcd26dce19e375ed29353801a28523819c070->leave($__internal_f6b2026cc260daa6e69372d3343dcd26dce19e375ed29353801a28523819c070_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1a5abf252d92ac668fe4ca88b1c2a37018812c17bd8d7c54eb9ab4b82eed4acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5abf252d92ac668fe4ca88b1c2a37018812c17bd8d7c54eb9ab4b82eed4acf->enter($__internal_1a5abf252d92ac668fe4ca88b1c2a37018812c17bd8d7c54eb9ab4b82eed4acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_1a5abf252d92ac668fe4ca88b1c2a37018812c17bd8d7c54eb9ab4b82eed4acf->leave($__internal_1a5abf252d92ac668fe4ca88b1c2a37018812c17bd8d7c54eb9ab4b82eed4acf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
", "SonataAdminBundle:CRUD:edit_array.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_array.html.twig");
    }
}
