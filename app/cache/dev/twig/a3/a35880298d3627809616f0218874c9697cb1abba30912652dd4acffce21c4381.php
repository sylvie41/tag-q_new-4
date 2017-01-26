<?php

/* WCSCoavBundle:Default:index.html.twig */
class __TwigTemplate_aa3616c7ff7af6b740ca10c040d4ae51828576fe629ba5383634ccf188a04152 extends Twig_Template
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
        $__internal_f33ce20764507d13279ccb791ba93ec33ed3d11e4bd0bda3bd174206a317be32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f33ce20764507d13279ccb791ba93ec33ed3d11e4bd0bda3bd174206a317be32->enter($__internal_f33ce20764507d13279ccb791ba93ec33ed3d11e4bd0bda3bd174206a317be32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSCoavBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_f33ce20764507d13279ccb791ba93ec33ed3d11e4bd0bda3bd174206a317be32->leave($__internal_f33ce20764507d13279ccb791ba93ec33ed3d11e4bd0bda3bd174206a317be32_prof);

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
