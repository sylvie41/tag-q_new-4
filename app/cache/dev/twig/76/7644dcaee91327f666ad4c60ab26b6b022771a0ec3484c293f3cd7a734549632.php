<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_07c11a44e274a51e6776ef7b7f1ca0c2b65ffb38dba27a2da5775d353b718573 extends Twig_Template
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
        $__internal_e60dbc35c2c8e8087c4e4bc361cfcc321e339cb153e712cc164146d3e95a04d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e60dbc35c2c8e8087c4e4bc361cfcc321e339cb153e712cc164146d3e95a04d4->enter($__internal_e60dbc35c2c8e8087c4e4bc361cfcc321e339cb153e712cc164146d3e95a04d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e60dbc35c2c8e8087c4e4bc361cfcc321e339cb153e712cc164146d3e95a04d4->leave($__internal_e60dbc35c2c8e8087c4e4bc361cfcc321e339cb153e712cc164146d3e95a04d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/tag-q_new-4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
