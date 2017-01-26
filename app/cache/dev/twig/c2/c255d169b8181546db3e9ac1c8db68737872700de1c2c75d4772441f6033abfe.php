<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2b61359d5cbe5ec4cf842425a4f749b38c0d118e4387ec678a0a417cf4c9cd76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8f42809132f2583cf3d931c8705d39a658a291d70c15022a435f6c44a6c0bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f42809132f2583cf3d931c8705d39a658a291d70c15022a435f6c44a6c0bd2->enter($__internal_a8f42809132f2583cf3d931c8705d39a658a291d70c15022a435f6c44a6c0bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a8f42809132f2583cf3d931c8705d39a658a291d70c15022a435f6c44a6c0bd2->leave($__internal_a8f42809132f2583cf3d931c8705d39a658a291d70c15022a435f6c44a6c0bd2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9864f2879f2f38c5a7a5afe4e82c81f15b989c00e69f72fe2e230eb02f79b27c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9864f2879f2f38c5a7a5afe4e82c81f15b989c00e69f72fe2e230eb02f79b27c->enter($__internal_9864f2879f2f38c5a7a5afe4e82c81f15b989c00e69f72fe2e230eb02f79b27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9864f2879f2f38c5a7a5afe4e82c81f15b989c00e69f72fe2e230eb02f79b27c->leave($__internal_9864f2879f2f38c5a7a5afe4e82c81f15b989c00e69f72fe2e230eb02f79b27c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/tag-q_new-4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
