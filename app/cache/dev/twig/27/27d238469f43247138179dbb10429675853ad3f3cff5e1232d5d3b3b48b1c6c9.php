<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_07879bf770ec9bc755bfa0afb57ce984c74eef63f40e36161b8686f143753300 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2adafe268430d329618dba9c2af344be4422974c0bfda71e76b8843ef8c28e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2adafe268430d329618dba9c2af344be4422974c0bfda71e76b8843ef8c28e3->enter($__internal_d2adafe268430d329618dba9c2af344be4422974c0bfda71e76b8843ef8c28e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_d2adafe268430d329618dba9c2af344be4422974c0bfda71e76b8843ef8c28e3->leave($__internal_d2adafe268430d329618dba9c2af344be4422974c0bfda71e76b8843ef8c28e3_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_2fa3267cb8b87d0c1caa4b3106241254e0d0b3a911ec1da3aecc091ce9e389bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa3267cb8b87d0c1caa4b3106241254e0d0b3a911ec1da3aecc091ce9e389bd->enter($__internal_2fa3267cb8b87d0c1caa4b3106241254e0d0b3a911ec1da3aecc091ce9e389bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_2fa3267cb8b87d0c1caa4b3106241254e0d0b3a911ec1da3aecc091ce9e389bd->leave($__internal_2fa3267cb8b87d0c1caa4b3106241254e0d0b3a911ec1da3aecc091ce9e389bd_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
