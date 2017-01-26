<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_f0d3ed0998b39a3ffb078b943321444ea246837d3abdb64a76fb66b9b84111d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin_pool"] ?? $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f7131bfc6897a5140ca212e66ee756c43536d2831068ec4064c78efd5392e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f7131bfc6897a5140ca212e66ee756c43536d2831068ec4064c78efd5392e5a->enter($__internal_1f7131bfc6897a5140ca212e66ee756c43536d2831068ec4064c78efd5392e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f7131bfc6897a5140ca212e66ee756c43536d2831068ec4064c78efd5392e5a->leave($__internal_1f7131bfc6897a5140ca212e66ee756c43536d2831068ec4064c78efd5392e5a_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_87fd6aa39330a19a4a51201fc0f5ece59f9cd2d5a3fc0bc564118ef9a2e064ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87fd6aa39330a19a4a51201fc0f5ece59f9cd2d5a3fc0bc564118ef9a2e064ba->enter($__internal_87fd6aa39330a19a4a51201fc0f5ece59f9cd2d5a3fc0bc564118ef9a2e064ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_87fd6aa39330a19a4a51201fc0f5ece59f9cd2d5a3fc0bc564118ef9a2e064ba->leave($__internal_87fd6aa39330a19a4a51201fc0f5ece59f9cd2d5a3fc0bc564118ef9a2e064ba_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_7d30d7c2f21d6b51244be239dc5b0b918b4ac23b35cb273d5f24f7be79d7b721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d30d7c2f21d6b51244be239dc5b0b918b4ac23b35cb273d5f24f7be79d7b721->enter($__internal_7d30d7c2f21d6b51244be239dc5b0b918b4ac23b35cb273d5f24f7be79d7b721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_7d30d7c2f21d6b51244be239dc5b0b918b4ac23b35cb273d5f24f7be79d7b721->leave($__internal_7d30d7c2f21d6b51244be239dc5b0b918b4ac23b35cb273d5f24f7be79d7b721_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_9d8b8166d8a6cc4a61775614a462624192997ef466308bc06823d16ec4a662eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8b8166d8a6cc4a61775614a462624192997ef466308bc06823d16ec4a662eb->enter($__internal_9d8b8166d8a6cc4a61775614a462624192997ef466308bc06823d16ec4a662eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_9d8b8166d8a6cc4a61775614a462624192997ef466308bc06823d16ec4a662eb->leave($__internal_9d8b8166d8a6cc4a61775614a462624192997ef466308bc06823d16ec4a662eb_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_75d49842100d150c8970e1509b98c6e5d40b68c2ff35fb34f146639016d67913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d49842100d150c8970e1509b98c6e5d40b68c2ff35fb34f146639016d67913->enter($__internal_75d49842100d150c8970e1509b98c6e5d40b68c2ff35fb34f146639016d67913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_75d49842100d150c8970e1509b98c6e5d40b68c2ff35fb34f146639016d67913->leave($__internal_75d49842100d150c8970e1509b98c6e5d40b68c2ff35fb34f146639016d67913_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a5b356d49ba9c59a4acab405694078278808d689e80b0725e4f541e8b16ee35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a5b356d49ba9c59a4acab405694078278808d689e80b0725e4f541e8b16ee35->enter($__internal_5a5b356d49ba9c59a4acab405694078278808d689e80b0725e4f541e8b16ee35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_5a5b356d49ba9c59a4acab405694078278808d689e80b0725e4f541e8b16ee35->leave($__internal_5a5b356d49ba9c59a4acab405694078278808d689e80b0725e4f541e8b16ee35_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_9ca041e567849fa7fbcb5b643cad6cf112e705bb87922d34db796f0b6a588afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca041e567849fa7fbcb5b643cad6cf112e705bb87922d34db796f0b6a588afe->enter($__internal_9ca041e567849fa7fbcb5b643cad6cf112e705bb87922d34db796f0b6a588afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_9ca041e567849fa7fbcb5b643cad6cf112e705bb87922d34db796f0b6a588afe->leave($__internal_9ca041e567849fa7fbcb5b643cad6cf112e705bb87922d34db796f0b6a588afe_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_470696cee2aa5f88e3b9fb552073cb1c671df0afad3419e72f55ce30b9f84983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_470696cee2aa5f88e3b9fb552073cb1c671df0afad3419e72f55ce30b9f84983->enter($__internal_470696cee2aa5f88e3b9fb552073cb1c671df0afad3419e72f55ce30b9f84983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_470696cee2aa5f88e3b9fb552073cb1c671df0afad3419e72f55ce30b9f84983->leave($__internal_470696cee2aa5f88e3b9fb552073cb1c671df0afad3419e72f55ce30b9f84983_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
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

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle::empty_layout.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/admin-bundle/Resources/views/empty_layout.html.twig");
    }
}
