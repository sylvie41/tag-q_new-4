<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_0ac4e8169800610feb12da24a3b05447696685a400e290e33b5fe2e58fd447f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c08795b2fbc4f303e4cd663f2668b64c41da1ed75cb2e950fe8288e0919cf281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08795b2fbc4f303e4cd663f2668b64c41da1ed75cb2e950fe8288e0919cf281->enter($__internal_c08795b2fbc4f303e4cd663f2668b64c41da1ed75cb2e950fe8288e0919cf281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c08795b2fbc4f303e4cd663f2668b64c41da1ed75cb2e950fe8288e0919cf281->leave($__internal_c08795b2fbc4f303e4cd663f2668b64c41da1ed75cb2e950fe8288e0919cf281_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d70cad8c5cc546c1a89ee1dd7ae1829049b3b9c93645f2c9180a75bd13a071d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d70cad8c5cc546c1a89ee1dd7ae1829049b3b9c93645f2c9180a75bd13a071d->enter($__internal_2d70cad8c5cc546c1a89ee1dd7ae1829049b3b9c93645f2c9180a75bd13a071d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_2d70cad8c5cc546c1a89ee1dd7ae1829049b3b9c93645f2c9180a75bd13a071d->leave($__internal_2d70cad8c5cc546c1a89ee1dd7ae1829049b3b9c93645f2c9180a75bd13a071d_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_b79a2fb66df348393cd7fa2f75bd492e8f3260d7fc5d60a83f5e4ab5f51ac5ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79a2fb66df348393cd7fa2f75bd492e8f3260d7fc5d60a83f5e4ab5f51ac5ad->enter($__internal_b79a2fb66df348393cd7fa2f75bd492e8f3260d7fc5d60a83f5e4ab5f51ac5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b79a2fb66df348393cd7fa2f75bd492e8f3260d7fc5d60a83f5e4ab5f51ac5ad->leave($__internal_b79a2fb66df348393cd7fa2f75bd492e8f3260d7fc5d60a83f5e4ab5f51ac5ad_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_b6366ee07be0dcda2aaef9304e69e7faa04ae46e39a8acf6d773fc94484eadcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6366ee07be0dcda2aaef9304e69e7faa04ae46e39a8acf6d773fc94484eadcd->enter($__internal_b6366ee07be0dcda2aaef9304e69e7faa04ae46e39a8acf6d773fc94484eadcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_b6366ee07be0dcda2aaef9304e69e7faa04ae46e39a8acf6d773fc94484eadcd->leave($__internal_b6366ee07be0dcda2aaef9304e69e7faa04ae46e39a8acf6d773fc94484eadcd_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_ecfbc3725c99568867c56b6712a8e6c259454fa2e9d6fb826cf7b5f2f3d001fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecfbc3725c99568867c56b6712a8e6c259454fa2e9d6fb826cf7b5f2f3d001fe->enter($__internal_ecfbc3725c99568867c56b6712a8e6c259454fa2e9d6fb826cf7b5f2f3d001fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_ecfbc3725c99568867c56b6712a8e6c259454fa2e9d6fb826cf7b5f2f3d001fe->leave($__internal_ecfbc3725c99568867c56b6712a8e6c259454fa2e9d6fb826cf7b5f2f3d001fe_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_64b9482afb1ff5cb49afc3b5c11870987f2a2cc775ba50590b4bbe8f97bfe772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b9482afb1ff5cb49afc3b5c11870987f2a2cc775ba50590b4bbe8f97bfe772->enter($__internal_64b9482afb1ff5cb49afc3b5c11870987f2a2cc775ba50590b4bbe8f97bfe772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_64b9482afb1ff5cb49afc3b5c11870987f2a2cc775ba50590b4bbe8f97bfe772->leave($__internal_64b9482afb1ff5cb49afc3b5c11870987f2a2cc775ba50590b4bbe8f97bfe772_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 36,  125 => 35,  113 => 30,  106 => 27,  100 => 26,  90 => 23,  84 => 22,  73 => 18,  67 => 16,  64 => 15,  58 => 14,  51 => 12,  49 => 33,  40 => 12,  12 => 32,);
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

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}
{% import \"SonataAdminBundle:CRUD:base_edit_form_macro.html.twig\" as form_helper %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
