<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_6c780c23b413e6fddcce80bf73819d9de95e078cec35d7869191fed9a4f46f27 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5b2f2f3e72d625fa8b7373402703d422d2423c418dc2b2e25cc06206a8f8aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b2f2f3e72d625fa8b7373402703d422d2423c418dc2b2e25cc06206a8f8aaf->enter($__internal_b5b2f2f3e72d625fa8b7373402703d422d2423c418dc2b2e25cc06206a8f8aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5b2f2f3e72d625fa8b7373402703d422d2423c418dc2b2e25cc06206a8f8aaf->leave($__internal_b5b2f2f3e72d625fa8b7373402703d422d2423c418dc2b2e25cc06206a8f8aaf_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f915f5f60d0f1cd165328cd6fd5e4fd3df5f4988e7759fb8f71e46598f1eaa63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f915f5f60d0f1cd165328cd6fd5e4fd3df5f4988e7759fb8f71e46598f1eaa63->enter($__internal_f915f5f60d0f1cd165328cd6fd5e4fd3df5f4988e7759fb8f71e46598f1eaa63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_f915f5f60d0f1cd165328cd6fd5e4fd3df5f4988e7759fb8f71e46598f1eaa63->leave($__internal_f915f5f60d0f1cd165328cd6fd5e4fd3df5f4988e7759fb8f71e46598f1eaa63_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
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
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
