<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_40542104a753724d464a5e77f684b78b98fbef5ff5d1fb8d328c2d7c49fdcf80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_618cc32ed1c06c8e1d805cfda1ea9bc4701f5c9fa2cb1085f7111e2d8249f7c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618cc32ed1c06c8e1d805cfda1ea9bc4701f5c9fa2cb1085f7111e2d8249f7c1->enter($__internal_618cc32ed1c06c8e1d805cfda1ea9bc4701f5c9fa2cb1085f7111e2d8249f7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_618cc32ed1c06c8e1d805cfda1ea9bc4701f5c9fa2cb1085f7111e2d8249f7c1->leave($__internal_618cc32ed1c06c8e1d805cfda1ea9bc4701f5c9fa2cb1085f7111e2d8249f7c1_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/var/www/html/tag-q_new-4/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
