<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_64c74e02661eeb60046eed6658f4f754038df4a7de31fc7df1c1cd685175dbff extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae89c2deb66c2e539912116f7e3c522fac6b08d2a11b24fbf1ba4cc770653323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae89c2deb66c2e539912116f7e3c522fac6b08d2a11b24fbf1ba4cc770653323->enter($__internal_ae89c2deb66c2e539912116f7e3c522fac6b08d2a11b24fbf1ba4cc770653323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae89c2deb66c2e539912116f7e3c522fac6b08d2a11b24fbf1ba4cc770653323->leave($__internal_ae89c2deb66c2e539912116f7e3c522fac6b08d2a11b24fbf1ba4cc770653323_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
", "SonataAdminBundle:CRUD:list_string.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_string.html.twig");
    }
}
