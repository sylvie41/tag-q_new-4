<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_f063c1f7620a6aa8002c722bb0471f42d1a670f9fa823751ebbcaa1181343ef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b9eaa93dab8b7d6ada5a230c9e81f9c276388149ce89bf989e853e69d822719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9eaa93dab8b7d6ada5a230c9e81f9c276388149ce89bf989e853e69d822719->enter($__internal_2b9eaa93dab8b7d6ada5a230c9e81f9c276388149ce89bf989e853e69d822719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b9eaa93dab8b7d6ada5a230c9e81f9c276388149ce89bf989e853e69d822719->leave($__internal_2b9eaa93dab8b7d6ada5a230c9e81f9c276388149ce89bf989e853e69d822719_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_655809b47c60538eb17cb97f7d54ce58e1e450f77d67734eb00b81054accf631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655809b47c60538eb17cb97f7d54ce58e1e450f77d67734eb00b81054accf631->enter($__internal_655809b47c60538eb17cb97f7d54ce58e1e450f77d67734eb00b81054accf631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_655809b47c60538eb17cb97f7d54ce58e1e450f77d67734eb00b81054accf631->leave($__internal_655809b47c60538eb17cb97f7d54ce58e1e450f77d67734eb00b81054accf631_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_40b2853a8bb06c9219858a635eff111d82140000411fd5c28bfee6886575aca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b2853a8bb06c9219858a635eff111d82140000411fd5c28bfee6886575aca7->enter($__internal_40b2853a8bb06c9219858a635eff111d82140000411fd5c28bfee6886575aca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_40b2853a8bb06c9219858a635eff111d82140000411fd5c28bfee6886575aca7->leave($__internal_40b2853a8bb06c9219858a635eff111d82140000411fd5c28bfee6886575aca7_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_5335d488a64741edca59c0caa08cdf34dc8b7f6efd36efedd05a660278fc6740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5335d488a64741edca59c0caa08cdf34dc8b7f6efd36efedd05a660278fc6740->enter($__internal_5335d488a64741edca59c0caa08cdf34dc8b7f6efd36efedd05a660278fc6740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_5335d488a64741edca59c0caa08cdf34dc8b7f6efd36efedd05a660278fc6740->leave($__internal_5335d488a64741edca59c0caa08cdf34dc8b7f6efd36efedd05a660278fc6740_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  68 => 24,  57 => 20,  54 => 19,  48 => 18,  41 => 15,  35 => 14,  20 => 12,);
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

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
", "SonataAdminBundle:CRUD:action.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/admin-bundle/Resources/views/CRUD/action.html.twig");
    }
}
