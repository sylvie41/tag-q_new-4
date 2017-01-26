<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_356a3860487dc9596511e99497084204ff9408890b5a6043a74b6fd199f92bec extends Twig_Template
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
        $__internal_60c58f4590816e41939f9832e808162441b2ab1ceca7aae8bf1d1d37dd6ce5ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c58f4590816e41939f9832e808162441b2ab1ceca7aae8bf1d1d37dd6ce5ad->enter($__internal_60c58f4590816e41939f9832e808162441b2ab1ceca7aae8bf1d1d37dd6ce5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_60c58f4590816e41939f9832e808162441b2ab1ceca7aae8bf1d1d37dd6ce5ad->leave($__internal_60c58f4590816e41939f9832e808162441b2ab1ceca7aae8bf1d1d37dd6ce5ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/tag-q_new-4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
