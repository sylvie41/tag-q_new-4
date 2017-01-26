<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_710aee32470ff4863fa6724df895817738ad1dc81d4e3feb6d553ff00d7bece8 extends Twig_Template
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
        $__internal_cf98f62a31fef7ac2a0a26450cbaa093b896ea478d206b330fb5844cf98f0dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf98f62a31fef7ac2a0a26450cbaa093b896ea478d206b330fb5844cf98f0dcb->enter($__internal_cf98f62a31fef7ac2a0a26450cbaa093b896ea478d206b330fb5844cf98f0dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_cf98f62a31fef7ac2a0a26450cbaa093b896ea478d206b330fb5844cf98f0dcb->leave($__internal_cf98f62a31fef7ac2a0a26450cbaa093b896ea478d206b330fb5844cf98f0dcb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/var/www/html/tag-q_new-4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
