<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_6f1d75c4e6f251a93928691b6dd7eaaefa638ed300f2d3a1a9483347e5deefcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7e613070b8b554345f1b1be59b01d2348bc6a3e0da35623a43465863ac3a20d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e613070b8b554345f1b1be59b01d2348bc6a3e0da35623a43465863ac3a20d->enter($__internal_d7e613070b8b554345f1b1be59b01d2348bc6a3e0da35623a43465863ac3a20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7e613070b8b554345f1b1be59b01d2348bc6a3e0da35623a43465863ac3a20d->leave($__internal_d7e613070b8b554345f1b1be59b01d2348bc6a3e0da35623a43465863ac3a20d_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_7e7282dfce0b8ac86590d06d847e6f62f76da3be12f58592f6e62ba8e31cef54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e7282dfce0b8ac86590d06d847e6f62f76da3be12f58592f6e62ba8e31cef54->enter($__internal_7e7282dfce0b8ac86590d06d847e6f62f76da3be12f58592f6e62ba8e31cef54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_7e7282dfce0b8ac86590d06d847e6f62f76da3be12f58592f6e62ba8e31cef54->leave($__internal_7e7282dfce0b8ac86590d06d847e6f62f76da3be12f58592f6e62ba8e31cef54_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_0278a8cdfd2f604d2d021b0d687566544a4550dcf5da770705a519ec900ba347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0278a8cdfd2f604d2d021b0d687566544a4550dcf5da770705a519ec900ba347->enter($__internal_0278a8cdfd2f604d2d021b0d687566544a4550dcf5da770705a519ec900ba347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_0278a8cdfd2f604d2d021b0d687566544a4550dcf5da770705a519ec900ba347->leave($__internal_0278a8cdfd2f604d2d021b0d687566544a4550dcf5da770705a519ec900ba347_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_185ae1593e849f8a352adc82bbf2e3ce0e9dce0a8defd6f851ac9bd19814e5d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185ae1593e849f8a352adc82bbf2e3ce0e9dce0a8defd6f851ac9bd19814e5d9->enter($__internal_185ae1593e849f8a352adc82bbf2e3ce0e9dce0a8defd6f851ac9bd19814e5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if (($context["decorator"] ?? $this->getContext($context, "decorator"))) {
            echo $this->getAttribute(($context["decorator"] ?? $this->getContext($context, "decorator")), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if (($context["decorator"] ?? $this->getContext($context, "decorator"))) {
            echo $this->getAttribute(($context["decorator"] ?? $this->getContext($context, "decorator")), "post", array());
        }
        
        $__internal_185ae1593e849f8a352adc82bbf2e3ce0e9dce0a8defd6f851ac9bd19814e5d9->leave($__internal_185ae1593e849f8a352adc82bbf2e3ce0e9dce0a8defd6f851ac9bd19814e5d9_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_068b5a6fe63bc349b57f418ec0221d4ba0e43f0a00a36e3cf214f633c3407c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068b5a6fe63bc349b57f418ec0221d4ba0e43f0a00a36e3cf214f633c3407c41->enter($__internal_068b5a6fe63bc349b57f418ec0221d4ba0e43f0a00a36e3cf214f633c3407c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(($context["child"] ?? $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_068b5a6fe63bc349b57f418ec0221d4ba0e43f0a00a36e3cf214f633c3407c41->leave($__internal_068b5a6fe63bc349b57f418ec0221d4ba0e43f0a00a36e3cf214f633c3407c41_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 25,  123 => 24,  113 => 28,  99 => 27,  96 => 24,  78 => 23,  73 => 22,  67 => 21,  55 => 18,  36 => 15,  21 => 12,);
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

{% extends sonata_block.templates.block_base %}

{# block classes are prepended with a container class #}
{% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}

{# identify a block role used by the page editor #}
{% block block_role %}container{% endblock %}

{# render container block #}
{% block block %}
    {% if decorator %}{{ decorator.pre|raw }}{% endif %}
    {% for child in block.children %}
        {% block block_child_render %}
            {{ sonata_block_render(child) }}
        {% endblock %}
    {% endfor %}
    {% if decorator %}{{ decorator.post|raw }}{% endif %}
{% endblock %}
", "SonataBlockBundle:Block:block_container.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/block-bundle/Resources/views/Block/block_container.html.twig");
    }
}
