<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_309f2543f7a9ae7d75411febd475a8d97e40658c31cd3d35ab190cd816726aff extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_996957aa17f5ba9d091f9335df1afa63fa2467dfb4102503a4cccf6470cfadfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996957aa17f5ba9d091f9335df1afa63fa2467dfb4102503a4cccf6470cfadfd->enter($__internal_996957aa17f5ba9d091f9335df1afa63fa2467dfb4102503a4cccf6470cfadfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_996957aa17f5ba9d091f9335df1afa63fa2467dfb4102503a4cccf6470cfadfd->leave($__internal_996957aa17f5ba9d091f9335df1afa63fa2467dfb4102503a4cccf6470cfadfd_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c4cd71272886212959d47aff4b9d74a82b51678803376ec1082807571f35fbbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4cd71272886212959d47aff4b9d74a82b51678803376ec1082807571f35fbbe->enter($__internal_c4cd71272886212959d47aff4b9d74a82b51678803376ec1082807571f35fbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_c4cd71272886212959d47aff4b9d74a82b51678803376ec1082807571f35fbbe->leave($__internal_c4cd71272886212959d47aff4b9d74a82b51678803376ec1082807571f35fbbe_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_email.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_email.html.twig");
    }
}
