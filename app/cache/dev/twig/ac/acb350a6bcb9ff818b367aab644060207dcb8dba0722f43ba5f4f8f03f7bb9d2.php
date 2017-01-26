<?php

/* WCSCoavBundle:Default:index.html.twig */
class __TwigTemplate_089c59c5593f7e8573963f0154b0482f9a51ca1febd29519a76864882f61f3a4 extends Twig_Template
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
        $__internal_847e35a7f3122ef2b84033474a9126366a6726e4835ab7958b8a3a84715f9ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_847e35a7f3122ef2b84033474a9126366a6726e4835ab7958b8a3a84715f9ce5->enter($__internal_847e35a7f3122ef2b84033474a9126366a6726e4835ab7958b8a3a84715f9ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSCoavBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_847e35a7f3122ef2b84033474a9126366a6726e4835ab7958b8a3a84715f9ce5->leave($__internal_847e35a7f3122ef2b84033474a9126366a6726e4835ab7958b8a3a84715f9ce5_prof);

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
