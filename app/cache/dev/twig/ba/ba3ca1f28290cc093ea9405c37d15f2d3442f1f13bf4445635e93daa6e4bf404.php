<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_b4e9f98d8e63458732710ec95b5a30bbd23b7976d4277dd8ad5d3ebf11e74195 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_021d73f02dd68932823295a673fdd372ee9ed6c19af12ff6bf416a25273090cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021d73f02dd68932823295a673fdd372ee9ed6c19af12ff6bf416a25273090cc->enter($__internal_021d73f02dd68932823295a673fdd372ee9ed6c19af12ff6bf416a25273090cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_021d73f02dd68932823295a673fdd372ee9ed6c19af12ff6bf416a25273090cc->leave($__internal_021d73f02dd68932823295a673fdd372ee9ed6c19af12ff6bf416a25273090cc_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_d58a30cc7967f7c9a0fa7ed9ba5f0f71ace444c54352926dedeac50869617b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58a30cc7967f7c9a0fa7ed9ba5f0f71ace444c54352926dedeac50869617b5c->enter($__internal_d58a30cc7967f7c9a0fa7ed9ba5f0f71ace444c54352926dedeac50869617b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        $context["_list_table"] = trim(        $this->renderBlock("list_table", $context, $blocks));
        // line 14
        echo "    ";
        $context["_list_filters"] = trim(        $this->renderBlock("list_filters", $context, $blocks));
        // line 15
        echo "    ";
        $context["_list_filters_actions"] =         $this->renderBlock("list_filters_actions", $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('preview', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 20
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 21
        echo "


    ";
        // line 24
        if (( !twig_test_empty(($context["_list_table"] ?? $this->getContext($context, "_list_table"))) ||  !twig_test_empty(($context["_list_filters"] ?? $this->getContext($context, "_list_filters"))))) {
            // line 25
            echo "    <div class=\"container-fluid\">
        <div class=\"row\">

            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        ";
            // line 31
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && (($context["action"] ?? $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 32
                echo "                            <div class=\"nav navbar-right btn-group\">
                                ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 34
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                            </div>
                        ";
            }
            // line 38
            echo "
                        ";
            // line 39
            if ( !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions")))) {
                // line 40
                echo "                            ";
                echo ($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"));
                echo "
                        ";
            }
            // line 42
            echo "
                    </div>
                </div>
            </div>
        </div>

        ";
            // line 48
            if (trim(($context["_list_filters"] ?? $this->getContext($context, "_list_filters")))) {
                // line 49
                echo "             <div class=\"row\">
                 ";
                // line 50
                echo ($context["_list_filters"] ?? $this->getContext($context, "_list_filters"));
                echo "
             </div>
        ";
            }
            // line 53
            echo "
        <div class=\"row\">
            ";
            // line 55
            echo ($context["_list_table"] ?? $this->getContext($context, "_list_table"));
            echo "
        </div>
    </div>
     ";
        }
        // line 59
        echo "
";
        
        $__internal_d58a30cc7967f7c9a0fa7ed9ba5f0f71ace444c54352926dedeac50869617b5c->leave($__internal_d58a30cc7967f7c9a0fa7ed9ba5f0f71ace444c54352926dedeac50869617b5c_prof);

    }

    // line 17
    public function block_preview($context, array $blocks = array())
    {
        $__internal_31d39c50cd79cf835c8c5c6ccd4c8b64bad30caee73fe922141dcc5e9510fa10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d39c50cd79cf835c8c5c6ccd4c8b64bad30caee73fe922141dcc5e9510fa10->enter($__internal_31d39c50cd79cf835c8c5c6ccd4c8b64bad30caee73fe922141dcc5e9510fa10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_31d39c50cd79cf835c8c5c6ccd4c8b64bad30caee73fe922141dcc5e9510fa10->leave($__internal_31d39c50cd79cf835c8c5c6ccd4c8b64bad30caee73fe922141dcc5e9510fa10_prof);

    }

    // line 18
    public function block_form($context, array $blocks = array())
    {
        $__internal_1372eae5c57033fd566d0d85ef926fcd70af0e87653c6a9deceb9c33c143dd13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1372eae5c57033fd566d0d85ef926fcd70af0e87653c6a9deceb9c33c143dd13->enter($__internal_1372eae5c57033fd566d0d85ef926fcd70af0e87653c6a9deceb9c33c143dd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_1372eae5c57033fd566d0d85ef926fcd70af0e87653c6a9deceb9c33c143dd13->leave($__internal_1372eae5c57033fd566d0d85ef926fcd70af0e87653c6a9deceb9c33c143dd13_prof);

    }

    // line 19
    public function block_list($context, array $blocks = array())
    {
        $__internal_8e4698df59e79607d06b81c9952447e2f0832bb93551b56cc260971fd302192a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4698df59e79607d06b81c9952447e2f0832bb93551b56cc260971fd302192a->enter($__internal_8e4698df59e79607d06b81c9952447e2f0832bb93551b56cc260971fd302192a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_8e4698df59e79607d06b81c9952447e2f0832bb93551b56cc260971fd302192a->leave($__internal_8e4698df59e79607d06b81c9952447e2f0832bb93551b56cc260971fd302192a_prof);

    }

    // line 20
    public function block_show($context, array $blocks = array())
    {
        $__internal_402616ae9e070d4ca7fbaff8252ed827891e3017a247e03f6b679602b9663aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402616ae9e070d4ca7fbaff8252ed827891e3017a247e03f6b679602b9663aaf->enter($__internal_402616ae9e070d4ca7fbaff8252ed827891e3017a247e03f6b679602b9663aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_402616ae9e070d4ca7fbaff8252ed827891e3017a247e03f6b679602b9663aaf->leave($__internal_402616ae9e070d4ca7fbaff8252ed827891e3017a247e03f6b679602b9663aaf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  190 => 20,  179 => 19,  168 => 18,  157 => 17,  149 => 59,  142 => 55,  138 => 53,  132 => 50,  129 => 49,  127 => 48,  119 => 42,  113 => 40,  111 => 39,  108 => 38,  104 => 36,  89 => 34,  85 => 33,  82 => 32,  80 => 31,  72 => 25,  70 => 24,  65 => 21,  62 => 20,  59 => 19,  56 => 18,  54 => 17,  51 => 16,  48 => 15,  45 => 14,  42 => 13,  30 => 12,  27 => 11,);
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

{% block content %}
    {% set _list_table           = block('list_table')|trim %}
    {% set _list_filters         = block('list_filters')|trim %}
    {% set _list_filters_actions = block('list_filters_actions') %}

    {% block preview %}{% endblock %}
    {% block form %}{% endblock %}
    {% block list %}{% endblock %}
    {% block show %}{% endblock %}



    {% if _list_table is not empty or _list_filters is not empty %}
    <div class=\"container-fluid\">
        <div class=\"row\">

            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                            <div class=\"nav navbar-right btn-group\">
                                {% for mode, settings in admin.listModes %}
                                    <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if _list_filters_actions is not empty %}
                            {{ _list_filters_actions|raw }}
                        {% endif %}

                    </div>
                </div>
            </div>
        </div>

        {% if _list_filters|trim %}
             <div class=\"row\">
                 {{ _list_filters|raw }}
             </div>
        {% endif %}

        <div class=\"row\">
            {{ _list_table|raw }}
        </div>
    </div>
     {% endif %}

{% endblock %}
", "SonataAdminBundle::ajax_layout.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/admin-bundle/Resources/views/ajax_layout.html.twig");
    }
}
