<?php

/* SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_4f98ecd33e082f04d8bd62be38324917fa19253631e016d3138a79f931e949dd extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3293165009676ac8fc3ceae544a3f5b8ad62876b15239266ef8eec3f6143183d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3293165009676ac8fc3ceae544a3f5b8ad62876b15239266ef8eec3f6143183d->enter($__internal_3293165009676ac8fc3ceae544a3f5b8ad62876b15239266ef8eec3f6143183d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3293165009676ac8fc3ceae544a3f5b8ad62876b15239266ef8eec3f6143183d->leave($__internal_3293165009676ac8fc3ceae544a3f5b8ad62876b15239266ef8eec3f6143183d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig";
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

{% extends base_template %}
", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_sonata_type_immutable_array.html.twig");
    }
}
