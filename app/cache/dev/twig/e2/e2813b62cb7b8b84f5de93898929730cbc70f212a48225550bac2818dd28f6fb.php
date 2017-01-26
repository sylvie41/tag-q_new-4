<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_99358d492a35bd6c36ebdbf374965d3955335ef8815eecdbaa91097409c49faa extends Twig_Template
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
        $__internal_149fb7cc4d759819bd0bf354a13ca3e401619cad10cc837ec1a652f3d004ea5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149fb7cc4d759819bd0bf354a13ca3e401619cad10cc837ec1a652f3d004ea5d->enter($__internal_149fb7cc4d759819bd0bf354a13ca3e401619cad10cc837ec1a652f3d004ea5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_149fb7cc4d759819bd0bf354a13ca3e401619cad10cc837ec1a652f3d004ea5d->leave($__internal_149fb7cc4d759819bd0bf354a13ca3e401619cad10cc837ec1a652f3d004ea5d_prof);

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
