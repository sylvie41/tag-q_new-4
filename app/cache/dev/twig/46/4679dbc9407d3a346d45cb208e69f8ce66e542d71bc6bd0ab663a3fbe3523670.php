<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_ca15de6483e8e775872b7a21846d5503dd600a8a1d4c183789493ccd25a367b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'show' => array($this, 'block_show'),
            'show_groups' => array($this, 'block_show_groups'),
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_show.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d45a3ca79d4bb9633cb7a4d72cd32e2782dc423f21d327aae36d2068bba20db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45a3ca79d4bb9633cb7a4d72cd32e2782dc423f21d327aae36d2068bba20db9->enter($__internal_d45a3ca79d4bb9633cb7a4d72cd32e2782dc423f21d327aae36d2068bba20db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d45a3ca79d4bb9633cb7a4d72cd32e2782dc423f21d327aae36d2068bba20db9->leave($__internal_d45a3ca79d4bb9633cb7a4d72cd32e2782dc423f21d327aae36d2068bba20db9_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_d0a6ad5ace601a7a1ea372813fb5b5c0102a1ab251e90ced3400c81c3671d7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a6ad5ace601a7a1ea372813fb5b5c0102a1ab251e90ced3400c81c3671d7af->enter($__internal_d0a6ad5ace601a7a1ea372813fb5b5c0102a1ab251e90ced3400c81c3671d7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_show.html.twig", 15)->display($context);
        
        $__internal_d0a6ad5ace601a7a1ea372813fb5b5c0102a1ab251e90ced3400c81c3671d7af->leave($__internal_d0a6ad5ace601a7a1ea372813fb5b5c0102a1ab251e90ced3400c81c3671d7af_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_53ce9521d1892b0b847d7e2b8009599c55a8bad665f28539159f880b3a74be53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ce9521d1892b0b847d7e2b8009599c55a8bad665f28539159f880b3a74be53->enter($__internal_53ce9521d1892b0b847d7e2b8009599c55a8bad665f28539159f880b3a74be53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(        // line 21
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        // line 22
        echo "
";
        
        $__internal_53ce9521d1892b0b847d7e2b8009599c55a8bad665f28539159f880b3a74be53->leave($__internal_53ce9521d1892b0b847d7e2b8009599c55a8bad665f28539159f880b3a74be53_prof);

    }

    // line 25
    public function block_show($context, array $blocks = array())
    {
        $__internal_5d48c00b8cc236b0f6a315892a2de8d5c456e48dcd18cd36b98a7546519dd6c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d48c00b8cc236b0f6a315892a2de8d5c456e48dcd18cd36b98a7546519dd6c3->enter($__internal_5d48c00b8cc236b0f6a315892a2de8d5c456e48dcd18cd36b98a7546519dd6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        // line 26
        echo "    <div class=\"sonata-ba-view\">

        ";
        // line 28
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.top", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")), "object" => ($context["object"] ?? $this->getContext($context, "object")))));
        echo "

        ";
        // line 30
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array())) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array())) > 1));
        // line 31
        echo "
        ";
        // line 32
        if (($context["has_tab"] ?? $this->getContext($context, "has_tab"))) {
            // line 33
            echo "            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["show_tab"]) {
                // line 36
                echo "                        <li";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " class=\"active\"";
                }
                echo ">
                            <a href=\"#tab_";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                ";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), (($this->getAttribute($context["show_tab"], "translation_domain", array())) ? ($this->getAttribute($context["show_tab"], "translation_domain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                </ul>

                <div class=\"tab-content\">
                    ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["code"] => $context["show_tab"]) {
                // line 47
                echo "                        <div
                                class=\"tab-pane fade";
                // line 48
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\"
                                id=\"tab_";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 53
                if (($this->getAttribute($context["show_tab"], "description", array()) != false)) {
                    // line 54
                    echo "                                        <p>";
                    echo $this->getAttribute($context["show_tab"], "description", array());
                    echo "</p>
                                    ";
                }
                // line 56
                echo "
                                    ";
                // line 57
                $context["groups"] = $this->getAttribute($context["show_tab"], "groups", array());
                // line 58
                echo "                                    ";
                $this->displayBlock("show_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                </div>
            </div>
        ";
        } elseif (twig_test_iterable($this->getAttribute(        // line 65
($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array()))) {
            // line 66
            echo "            ";
            $context["groups"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array()), "default", array()), "groups", array());
            // line 67
            echo "            ";
            $this->displayBlock("show_groups", $context, $blocks);
            echo "
        ";
        }
        // line 69
        echo "
    </div>

    ";
        // line 72
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.bottom", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")), "object" => ($context["object"] ?? $this->getContext($context, "object")))));
        echo "
";
        
        $__internal_5d48c00b8cc236b0f6a315892a2de8d5c456e48dcd18cd36b98a7546519dd6c3->leave($__internal_5d48c00b8cc236b0f6a315892a2de8d5c456e48dcd18cd36b98a7546519dd6c3_prof);

    }

    // line 75
    public function block_show_groups($context, array $blocks = array())
    {
        $__internal_30f4aa83476ac1f138633d9a677ec29ac5219c53678dce99626a085710d120f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f4aa83476ac1f138633d9a677ec29ac5219c53678dce99626a085710d120f0->enter($__internal_30f4aa83476ac1f138633d9a677ec29ac5219c53678dce99626a085710d120f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_groups"));

        // line 76
        echo "    <div class=\"row\">
        ";
        // line 77
        $this->displayBlock('field_row', $context, $blocks);
        // line 109
        echo "
    </div>
";
        
        $__internal_30f4aa83476ac1f138633d9a677ec29ac5219c53678dce99626a085710d120f0->leave($__internal_30f4aa83476ac1f138633d9a677ec29ac5219c53678dce99626a085710d120f0_prof);

    }

    // line 77
    public function block_field_row($context, array $blocks = array())
    {
        $__internal_3ad2caaf4fa5721f3d49b200462005c7ae476de8c2a2d64a7e39467a959b5d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad2caaf4fa5721f3d49b200462005c7ae476de8c2a2d64a7e39467a959b5d62->enter($__internal_3ad2caaf4fa5721f3d49b200462005c7ae476de8c2a2d64a7e39467a959b5d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 78
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 79
            echo "                ";
            $context["show_group"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showgroups", array()), $context["code"], array(), "array");
            // line 80
            echo "
                <div class=\"";
            // line 81
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["show_group"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["show_group"] ?? null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo ((((array_key_exists("no_padding", $context)) ? (_twig_default_filter(($context["no_padding"] ?? $this->getContext($context, "no_padding")), false)) : (false))) ? ("nopadding") : (""));
            echo "\">
                    <div class=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "box_class", array()), "html", null, true);
            echo "\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                ";
            // line 85
            $this->displayBlock('show_title', $context, $blocks);
            // line 88
            echo "                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 94
                echo "                                    ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 101
                echo "                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "        ";
        
        $__internal_3ad2caaf4fa5721f3d49b200462005c7ae476de8c2a2d64a7e39467a959b5d62->leave($__internal_3ad2caaf4fa5721f3d49b200462005c7ae476de8c2a2d64a7e39467a959b5d62_prof);

    }

    // line 85
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_cad9e1c8c104f24128795b20a7800295e4e6e8bef86c3b78c64c099be4b7e529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad9e1c8c104f24128795b20a7800295e4e6e8bef86c3b78c64c099be4b7e529->enter($__internal_cad9e1c8c104f24128795b20a7800295e4e6e8bef86c3b78c64c099be4b7e529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 86
        echo "                                    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "name", array()), array(), (($this->getAttribute(($context["show_group"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["show_group"] ?? null), "translation_domain", array()), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        echo "
                                ";
        
        $__internal_cad9e1c8c104f24128795b20a7800295e4e6e8bef86c3b78c64c099be4b7e529->leave($__internal_cad9e1c8c104f24128795b20a7800295e4e6e8bef86c3b78c64c099be4b7e529_prof);

    }

    // line 94
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_9e7d913a60495dc7443aa56aa3e16418360a114c083ca45b64be551d8120fd7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7d913a60495dc7443aa56aa3e16418360a114c083ca45b64be551d8120fd7a->enter($__internal_9e7d913a60495dc7443aa56aa3e16418360a114c083ca45b64be551d8120fd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 95
        echo "                                        <tr class=\"sonata-ba-view-container\">
                                            ";
        // line 96
        if ($this->getAttribute(($context["elements"] ?? null), ($context["field_name"] ?? $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 97
            echo "                                                ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute(($context["elements"] ?? $this->getContext($context, "elements")), ($context["field_name"] ?? $this->getContext($context, "field_name")), array(), "array"), ($context["object"] ?? $this->getContext($context, "object")));
            echo "
                                            ";
        }
        // line 99
        echo "                                        </tr>
                                    ";
        
        $__internal_9e7d913a60495dc7443aa56aa3e16418360a114c083ca45b64be551d8120fd7a->leave($__internal_9e7d913a60495dc7443aa56aa3e16418360a114c083ca45b64be551d8120fd7a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 99,  405 => 97,  403 => 96,  400 => 95,  394 => 94,  384 => 86,  378 => 85,  371 => 108,  352 => 102,  338 => 101,  335 => 94,  318 => 93,  311 => 88,  309 => 85,  303 => 82,  297 => 81,  294 => 80,  291 => 79,  273 => 78,  267 => 77,  258 => 109,  256 => 77,  253 => 76,  247 => 75,  238 => 72,  233 => 69,  227 => 67,  224 => 66,  222 => 65,  218 => 63,  198 => 58,  196 => 57,  193 => 56,  187 => 54,  185 => 53,  176 => 49,  170 => 48,  167 => 47,  150 => 46,  145 => 43,  127 => 39,  120 => 37,  113 => 36,  96 => 35,  92 => 33,  90 => 32,  87 => 31,  85 => 30,  80 => 28,  76 => 26,  70 => 25,  62 => 22,  60 => 21,  58 => 19,  52 => 18,  45 => 15,  39 => 14,  24 => 12,);
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
    {{ knp_menu_render(admin.sidemenu(action), {
        'currentClass' : 'active',
        'template': sonata_admin.adminPool.getTemplate('tab_menu_template')
    }, 'twig') }}
{% endblock %}

{% block show %}
    <div class=\"sonata-ba-view\">

        {{ sonata_block_render_event('sonata.admin.show.top', { 'admin': admin, 'object': object }) }}

        {% set has_tab = (admin.showtabs|length == 1 and admin.showtabs|keys[0] != 'default') or admin.showtabs|length > 1 %}

        {% if has_tab %}
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    {% for name, show_tab in admin.showtabs %}
                        <li{% if loop.first %} class=\"active\"{% endif %}>
                            <a href=\"#tab_{{ admin.uniqid }}_{{ loop.index }}\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                {{ name|trans({}, show_tab.translation_domain ?: admin.translationDomain) }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>

                <div class=\"tab-content\">
                    {% for code, show_tab in admin.showtabs %}
                        <div
                                class=\"tab-pane fade{% if loop.first %} in active{% endif %}\"
                                id=\"tab_{{ admin.uniqid }}_{{ loop.index }}\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    {% if show_tab.description != false %}
                                        <p>{{ show_tab.description|raw }}</p>
                                    {% endif %}

                                    {% set groups = show_tab.groups %}
                                    {{ block('show_groups') }}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        {% elseif admin.showtabs is iterable %}
            {% set groups = admin.showtabs.default.groups %}
            {{ block('show_groups') }}
        {% endif %}

    </div>

    {{ sonata_block_render_event('sonata.admin.show.bottom', { 'admin': admin, 'object': object }) }}
{% endblock %}

{% block show_groups %}
    <div class=\"row\">
        {% block field_row %}
            {% for code in groups %}
                {% set show_group = admin.showgroups[code] %}

                <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding|default(false) ? 'nopadding' }}\">
                    <div class=\"{{ show_group.box_class }}\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                {% block show_title %}
                                    {{ show_group.name|trans({}, show_group.translation_domain|default(admin.translationDomain)) }}
                                {% endblock %}
                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                {% for field_name in show_group.fields %}
                                    {% block show_field %}
                                        <tr class=\"sonata-ba-view-container\">
                                            {% if elements[field_name] is defined %}
                                                {{ elements[field_name]|render_view_element(object)}}
                                            {% endif %}
                                        </tr>
                                    {% endblock %}
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            {% endfor %}
        {% endblock %}

    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:base_show.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show.html.twig");
    }
}
