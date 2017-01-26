<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_46799935231646cd518e94e13ed00fd7f193c1adbb0fa7a6e284b11431eae8db extends Twig_Template
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
        $__internal_d8fe2d8a7370fbc068c51f00ce3d96e3de9c4b3ed44610c87d48ef151e1f9600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8fe2d8a7370fbc068c51f00ce3d96e3de9c4b3ed44610c87d48ef151e1f9600->enter($__internal_d8fe2d8a7370fbc068c51f00ce3d96e3de9c4b3ed44610c87d48ef151e1f9600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_d8fe2d8a7370fbc068c51f00ce3d96e3de9c4b3ed44610c87d48ef151e1f9600->leave($__internal_d8fe2d8a7370fbc068c51f00ce3d96e3de9c4b3ed44610c87d48ef151e1f9600_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_e7cfa56fd1d238f8d7fbb669ce73d8619d3defe6b16c2874d1c321446dc40536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7cfa56fd1d238f8d7fbb669ce73d8619d3defe6b16c2874d1c321446dc40536->enter($__internal_e7cfa56fd1d238f8d7fbb669ce73d8619d3defe6b16c2874d1c321446dc40536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_e7cfa56fd1d238f8d7fbb669ce73d8619d3defe6b16c2874d1c321446dc40536->leave($__internal_e7cfa56fd1d238f8d7fbb669ce73d8619d3defe6b16c2874d1c321446dc40536_prof);

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
