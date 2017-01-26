<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_32244ac737b449c27c0e58182b5423b161f2ffb21164668143b5869dc75afc2a extends Twig_Template
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
        $__internal_054858ad37d53cf35027b834662b41bec9bd5a9a9bb63ba79b56a9c2dbb783be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_054858ad37d53cf35027b834662b41bec9bd5a9a9bb63ba79b56a9c2dbb783be->enter($__internal_054858ad37d53cf35027b834662b41bec9bd5a9a9bb63ba79b56a9c2dbb783be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_054858ad37d53cf35027b834662b41bec9bd5a9a9bb63ba79b56a9c2dbb783be->leave($__internal_054858ad37d53cf35027b834662b41bec9bd5a9a9bb63ba79b56a9c2dbb783be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/tag-q_new-4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
