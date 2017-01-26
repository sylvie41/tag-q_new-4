<?php

/* QuetesymfonyBundle:Default:index.html.twig */
class __TwigTemplate_ff05452b785a31ea096ad02f5941f60846235ef219006930d097273276006c1b extends Twig_Template
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
        $__internal_72c3f49479c109b5f9eaa0ff5054bf0e4ea29d3f0208e13e6e7bb582354fc375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c3f49479c109b5f9eaa0ff5054bf0e4ea29d3f0208e13e6e7bb582354fc375->enter($__internal_72c3f49479c109b5f9eaa0ff5054bf0e4ea29d3f0208e13e6e7bb582354fc375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuetesymfonyBundle:Default:index.html.twig"));

        // line 1
        echo "Welcome to Symfony !
";
        
        $__internal_72c3f49479c109b5f9eaa0ff5054bf0e4ea29d3f0208e13e6e7bb582354fc375->leave($__internal_72c3f49479c109b5f9eaa0ff5054bf0e4ea29d3f0208e13e6e7bb582354fc375_prof);

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
