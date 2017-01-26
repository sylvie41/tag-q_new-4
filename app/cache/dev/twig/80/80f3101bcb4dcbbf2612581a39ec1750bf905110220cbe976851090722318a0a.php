<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_3c7344fb24408326d7f4001748053cfbaf696c01b08ac7dadec3b95ca67bd531 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9e49829176641f91a15f1e3058adf21ce001ce916c8188d3c8d1bb51e3dd889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e49829176641f91a15f1e3058adf21ce001ce916c8188d3c8d1bb51e3dd889->enter($__internal_f9e49829176641f91a15f1e3058adf21ce001ce916c8188d3c8d1bb51e3dd889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_f9e49829176641f91a15f1e3058adf21ce001ce916c8188d3c8d1bb51e3dd889->leave($__internal_f9e49829176641f91a15f1e3058adf21ce001ce916c8188d3c8d1bb51e3dd889_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_8d82bd51b645e37d6020660c0fc09b2688e7100b5290f82ec27492c1148aeae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d82bd51b645e37d6020660c0fc09b2688e7100b5290f82ec27492c1148aeae1->enter($__internal_8d82bd51b645e37d6020660c0fc09b2688e7100b5290f82ec27492c1148aeae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_8d82bd51b645e37d6020660c0fc09b2688e7100b5290f82ec27492c1148aeae1->leave($__internal_8d82bd51b645e37d6020660c0fc09b2688e7100b5290f82ec27492c1148aeae1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}{# Customize this value #}{% endblock %}
", "SonataAdminBundle:Core:user_block.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/admin-bundle/Resources/views/Core/user_block.html.twig");
    }
}
