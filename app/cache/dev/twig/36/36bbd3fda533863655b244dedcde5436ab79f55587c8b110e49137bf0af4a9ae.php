<?php

/* base.html.twig */
class __TwigTemplate_9a099113a3d6d44d625cba5f2157b49f449ff9102ad48a2c4dd89236f7d6b944 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1b7c7381b953aa643ac2fca8e40722c705df993b0746045a58e00b3407fd928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b7c7381b953aa643ac2fca8e40722c705df993b0746045a58e00b3407fd928->enter($__internal_d1b7c7381b953aa643ac2fca8e40722c705df993b0746045a58e00b3407fd928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d1b7c7381b953aa643ac2fca8e40722c705df993b0746045a58e00b3407fd928->leave($__internal_d1b7c7381b953aa643ac2fca8e40722c705df993b0746045a58e00b3407fd928_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce8af56161ea9f7cb8c9e00b3c458b1881d2ffc505b0198a5b4c15aa954611a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8af56161ea9f7cb8c9e00b3c458b1881d2ffc505b0198a5b4c15aa954611a5->enter($__internal_ce8af56161ea9f7cb8c9e00b3c458b1881d2ffc505b0198a5b4c15aa954611a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ce8af56161ea9f7cb8c9e00b3c458b1881d2ffc505b0198a5b4c15aa954611a5->leave($__internal_ce8af56161ea9f7cb8c9e00b3c458b1881d2ffc505b0198a5b4c15aa954611a5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9f482c0e38e24221ef844a5e943cede93595ecffdd21eb048f4b3f00cc814678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f482c0e38e24221ef844a5e943cede93595ecffdd21eb048f4b3f00cc814678->enter($__internal_9f482c0e38e24221ef844a5e943cede93595ecffdd21eb048f4b3f00cc814678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9f482c0e38e24221ef844a5e943cede93595ecffdd21eb048f4b3f00cc814678->leave($__internal_9f482c0e38e24221ef844a5e943cede93595ecffdd21eb048f4b3f00cc814678_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a12d1b3a626d564365962cf75802c4e4b26e806953abb3c1d61ce703daa2e228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12d1b3a626d564365962cf75802c4e4b26e806953abb3c1d61ce703daa2e228->enter($__internal_a12d1b3a626d564365962cf75802c4e4b26e806953abb3c1d61ce703daa2e228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a12d1b3a626d564365962cf75802c4e4b26e806953abb3c1d61ce703daa2e228->leave($__internal_a12d1b3a626d564365962cf75802c4e4b26e806953abb3c1d61ce703daa2e228_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_adff5fb713931456d775d4e00909cf68c38c22a0852f3a0e7d58b06ecd52331e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adff5fb713931456d775d4e00909cf68c38c22a0852f3a0e7d58b06ecd52331e->enter($__internal_adff5fb713931456d775d4e00909cf68c38c22a0852f3a0e7d58b06ecd52331e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_adff5fb713931456d775d4e00909cf68c38c22a0852f3a0e7d58b06ecd52331e->leave($__internal_adff5fb713931456d775d4e00909cf68c38c22a0852f3a0e7d58b06ecd52331e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/tag-q_new-4/app/Resources/views/base.html.twig");
    }
}
