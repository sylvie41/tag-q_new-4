<?php

/* QuetesymfonyBundle:Default:index.html.twig */
class __TwigTemplate_6a77fa0bec519189bca9b5f70daed4d69985bf93927f2444a666dceca3e96cf7 extends Twig_Template
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
        $__internal_725feaeff7d9a633e2d09eec686d5a4b7d09157e9b3679b8647fa1243bc343c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725feaeff7d9a633e2d09eec686d5a4b7d09157e9b3679b8647fa1243bc343c4->enter($__internal_725feaeff7d9a633e2d09eec686d5a4b7d09157e9b3679b8647fa1243bc343c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuetesymfonyBundle:Default:index.html.twig"));

        // line 1
        echo "Welcome to Symfony !
";
        
        $__internal_725feaeff7d9a633e2d09eec686d5a4b7d09157e9b3679b8647fa1243bc343c4->leave($__internal_725feaeff7d9a633e2d09eec686d5a4b7d09157e9b3679b8647fa1243bc343c4_prof);

    }

    public function getTemplateName()
    {
        return "QuetesymfonyBundle:Default:index.html.twig";
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
        return new Twig_Source("Welcome to Symfony !
", "QuetesymfonyBundle:Default:index.html.twig", "/var/www/html/tag-q_new-4/src/QuetesymfonyBundle/Resources/views/Default/index.html.twig");
    }
}
