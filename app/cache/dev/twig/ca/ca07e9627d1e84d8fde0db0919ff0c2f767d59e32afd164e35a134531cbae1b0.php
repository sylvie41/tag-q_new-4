<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_62548d8745fe12642cc60bee93e4694473900c3a403da9bf9123ac0a809ad919 extends Twig_Template
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
        $__internal_9d4aa826e5a33608ee2d9b12f0e22aff0d2554edb8ef8a1f8abb46cac8adcbc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4aa826e5a33608ee2d9b12f0e22aff0d2554edb8ef8a1f8abb46cac8adcbc2->enter($__internal_9d4aa826e5a33608ee2d9b12f0e22aff0d2554edb8ef8a1f8abb46cac8adcbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9d4aa826e5a33608ee2d9b12f0e22aff0d2554edb8ef8a1f8abb46cac8adcbc2->leave($__internal_9d4aa826e5a33608ee2d9b12f0e22aff0d2554edb8ef8a1f8abb46cac8adcbc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/tag-q_new-4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
