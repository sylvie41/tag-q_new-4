<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_fb4c77a7dde8c2db558c95fdb75c7d56e8cd0108df5973c6427c3baf293ad0f8 extends Twig_Template
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
        $__internal_9d2df736a557ac543dbcd39a2b5fc7c6964e568cb15d9a862a721abf5db28f33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2df736a557ac543dbcd39a2b5fc7c6964e568cb15d9a862a721abf5db28f33->enter($__internal_9d2df736a557ac543dbcd39a2b5fc7c6964e568cb15d9a862a721abf5db28f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9d2df736a557ac543dbcd39a2b5fc7c6964e568cb15d9a862a721abf5db28f33->leave($__internal_9d2df736a557ac543dbcd39a2b5fc7c6964e568cb15d9a862a721abf5db28f33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/tag-q_new-4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
