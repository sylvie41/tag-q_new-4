<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_70e7c8403a50d10621e70bbda4594c61d48916d8731d7eac857d71af00b7e5b3 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_016dc76a15ec885321c94d6b705124dcbbbac454af10440afb142c66908e5f33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_016dc76a15ec885321c94d6b705124dcbbbac454af10440afb142c66908e5f33->enter($__internal_016dc76a15ec885321c94d6b705124dcbbbac454af10440afb142c66908e5f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_016dc76a15ec885321c94d6b705124dcbbbac454af10440afb142c66908e5f33->leave($__internal_016dc76a15ec885321c94d6b705124dcbbbac454af10440afb142c66908e5f33_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4a4c8e9ffb97bf25890663a757c9c58b85a5bd85638434beedbef773b21665cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4c8e9ffb97bf25890663a757c9c58b85a5bd85638434beedbef773b21665cb->enter($__internal_4a4c8e9ffb97bf25890663a757c9c58b85a5bd85638434beedbef773b21665cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = (($context["value"] ?? $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_4a4c8e9ffb97bf25890663a757c9c58b85a5bd85638434beedbef773b21665cb->leave($__internal_4a4c8e9ffb97bf25890663a757c9c58b85a5bd85638434beedbef773b21665cb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:list_percent.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_percent.html.twig");
    }
}
