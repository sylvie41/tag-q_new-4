<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_d9835ffdac0fe25bcd5c3ef6d9f0fe11f3dfe2c112f4b727afafeed100c32d84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6cf38c71e3672c47f2bc27652a19a31a8d05981a9f1d4869494061cddc1f238f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf38c71e3672c47f2bc27652a19a31a8d05981a9f1d4869494061cddc1f238f->enter($__internal_6cf38c71e3672c47f2bc27652a19a31a8d05981a9f1d4869494061cddc1f238f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cf38c71e3672c47f2bc27652a19a31a8d05981a9f1d4869494061cddc1f238f->leave($__internal_6cf38c71e3672c47f2bc27652a19a31a8d05981a9f1d4869494061cddc1f238f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
", "SonataAdminBundle:Pager:results.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/admin-bundle/Resources/views/Pager/results.html.twig");
    }
}
