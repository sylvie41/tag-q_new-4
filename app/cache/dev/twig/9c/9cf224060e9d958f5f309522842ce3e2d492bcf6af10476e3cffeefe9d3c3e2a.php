<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_0b39620c15245bb09dfc0a0e936b6d60473cc1df6ec8ac9534992ebadf6b1e74 extends Twig_Template
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
        $__internal_c25b53dedd50dbc400753c4846f51d7d28328cc2fa21ae1554fdc152373a62f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c25b53dedd50dbc400753c4846f51d7d28328cc2fa21ae1554fdc152373a62f7->enter($__internal_c25b53dedd50dbc400753c4846f51d7d28328cc2fa21ae1554fdc152373a62f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c25b53dedd50dbc400753c4846f51d7d28328cc2fa21ae1554fdc152373a62f7->leave($__internal_c25b53dedd50dbc400753c4846f51d7d28328cc2fa21ae1554fdc152373a62f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/tag-q_new-4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
