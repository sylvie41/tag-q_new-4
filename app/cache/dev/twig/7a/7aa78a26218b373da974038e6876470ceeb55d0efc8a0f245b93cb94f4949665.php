<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_cf9f8f4d997fbb83cca67f8cc5bd4e6ed6a11ec3dd83c70d0e5168005fbc790a extends Twig_Template
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
        $__internal_4c77ce423ab4d7f20dd659c1f687ed4d3f663f72e8813bd7390dedec494b30d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c77ce423ab4d7f20dd659c1f687ed4d3f663f72e8813bd7390dedec494b30d1->enter($__internal_4c77ce423ab4d7f20dd659c1f687ed4d3f663f72e8813bd7390dedec494b30d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_4c77ce423ab4d7f20dd659c1f687ed4d3f663f72e8813bd7390dedec494b30d1->leave($__internal_4c77ce423ab4d7f20dd659c1f687ed4d3f663f72e8813bd7390dedec494b30d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/tag-q_new-4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
