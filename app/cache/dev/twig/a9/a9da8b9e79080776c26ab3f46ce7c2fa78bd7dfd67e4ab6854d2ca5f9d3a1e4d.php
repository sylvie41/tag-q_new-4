<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_21091b47d0f083f95de95e545a1c57b0e91c171715158e72d950d2b8dc569fe4 extends Twig_Template
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
        $__internal_bcda9679abaf537e6307875af828b0e337430dd38c24398fc1b3ff5208de55f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcda9679abaf537e6307875af828b0e337430dd38c24398fc1b3ff5208de55f6->enter($__internal_bcda9679abaf537e6307875af828b0e337430dd38c24398fc1b3ff5208de55f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bcda9679abaf537e6307875af828b0e337430dd38c24398fc1b3ff5208de55f6->leave($__internal_bcda9679abaf537e6307875af828b0e337430dd38c24398fc1b3ff5208de55f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/tag-q_new-4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
