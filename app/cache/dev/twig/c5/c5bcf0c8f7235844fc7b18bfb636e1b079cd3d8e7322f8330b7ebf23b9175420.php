<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_596213010831d972a78ad7bcedb365dfd87c970e0025d2a61cc49856a08fbdbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_147dfe339d2fb11246149ad32f6f0e209f34e8505cb8fb16c52061885b80686b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147dfe339d2fb11246149ad32f6f0e209f34e8505cb8fb16c52061885b80686b->enter($__internal_147dfe339d2fb11246149ad32f6f0e209f34e8505cb8fb16c52061885b80686b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_147dfe339d2fb11246149ad32f6f0e209f34e8505cb8fb16c52061885b80686b->leave($__internal_147dfe339d2fb11246149ad32f6f0e209f34e8505cb8fb16c52061885b80686b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}
", "SonataAdminBundle:CRUD:history.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/admin-bundle/Resources/views/CRUD/history.html.twig");
    }
}
