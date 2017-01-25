<?php

/* WCSCoavBundle:Default:index.html.twig */
class __TwigTemplate_b87cdfe175b55e0ac1c9e5dccce339b5a3defa6df9e558018ab9c51d877a741e extends Twig_Template
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
        $__internal_84f94f8ef2fc8fb64b50a2ca637f42575b6d62111e6a9b53f818070c5cb41894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f94f8ef2fc8fb64b50a2ca637f42575b6d62111e6a9b53f818070c5cb41894->enter($__internal_84f94f8ef2fc8fb64b50a2ca637f42575b6d62111e6a9b53f818070c5cb41894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSCoavBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_84f94f8ef2fc8fb64b50a2ca637f42575b6d62111e6a9b53f818070c5cb41894->leave($__internal_84f94f8ef2fc8fb64b50a2ca637f42575b6d62111e6a9b53f818070c5cb41894_prof);

    }

    public function getTemplateName()
    {
        return "WCSCoavBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "WCSCoavBundle:Default:index.html.twig", "/var/www/html/tag-q_new-4/src/WCS/CoavBundle/Resources/views/Default/index.html.twig");
    }
}
