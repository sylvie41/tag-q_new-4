<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_5fa39b69d39436e91672360584f897b032d2f9d54f197dc5a7170ba90b4bfcdc extends Twig_Template
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
        $__internal_b1dfed38d6aabb22159b7ce90cbb20d226c6752ec852018ca458fc98780e5a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1dfed38d6aabb22159b7ce90cbb20d226c6752ec852018ca458fc98780e5a54->enter($__internal_b1dfed38d6aabb22159b7ce90cbb20d226c6752ec852018ca458fc98780e5a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b1dfed38d6aabb22159b7ce90cbb20d226c6752ec852018ca458fc98780e5a54->leave($__internal_b1dfed38d6aabb22159b7ce90cbb20d226c6752ec852018ca458fc98780e5a54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/tag-q_new-4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
