<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1376f6df7c4287bd8eb5a2af0ae136f199f7bf6ab15c81ede94dc1e5df891b24 extends Twig_Template
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
        $__internal_9b73a0be938c6f2e59c80fa01130284f4ebd519cc58cc70c7eab373ef237966e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b73a0be938c6f2e59c80fa01130284f4ebd519cc58cc70c7eab373ef237966e->enter($__internal_9b73a0be938c6f2e59c80fa01130284f4ebd519cc58cc70c7eab373ef237966e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_9b73a0be938c6f2e59c80fa01130284f4ebd519cc58cc70c7eab373ef237966e->leave($__internal_9b73a0be938c6f2e59c80fa01130284f4ebd519cc58cc70c7eab373ef237966e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/tag-q_new-4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
