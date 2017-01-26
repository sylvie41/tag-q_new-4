<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_723423569318852a7cb17e0bdc506ba28118c025d56586037e551203562e4735 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21d0d6cbe5490596c53cf71f0021bc4d38c9401d151e44d69bacb6b638754dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d0d6cbe5490596c53cf71f0021bc4d38c9401d151e44d69bacb6b638754dc3->enter($__internal_21d0d6cbe5490596c53cf71f0021bc4d38c9401d151e44d69bacb6b638754dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21d0d6cbe5490596c53cf71f0021bc4d38c9401d151e44d69bacb6b638754dc3->leave($__internal_21d0d6cbe5490596c53cf71f0021bc4d38c9401d151e44d69bacb6b638754dc3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_668eec3d61fdc9120026e961a6e3660dcc4bf67429eea330eefb0da4a8ad48e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668eec3d61fdc9120026e961a6e3660dcc4bf67429eea330eefb0da4a8ad48e4->enter($__internal_668eec3d61fdc9120026e961a6e3660dcc4bf67429eea330eefb0da4a8ad48e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_668eec3d61fdc9120026e961a6e3660dcc4bf67429eea330eefb0da4a8ad48e4->leave($__internal_668eec3d61fdc9120026e961a6e3660dcc4bf67429eea330eefb0da4a8ad48e4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_501397a60665327fc78e99b662e607f4d3fae020b30aedefdfc7685c5f18834d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_501397a60665327fc78e99b662e607f4d3fae020b30aedefdfc7685c5f18834d->enter($__internal_501397a60665327fc78e99b662e607f4d3fae020b30aedefdfc7685c5f18834d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_501397a60665327fc78e99b662e607f4d3fae020b30aedefdfc7685c5f18834d->leave($__internal_501397a60665327fc78e99b662e607f4d3fae020b30aedefdfc7685c5f18834d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3dc2c1382df60f413a5d4ef7f08df9447290457761965878b3fe34e99340eb1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc2c1382df60f413a5d4ef7f08df9447290457761965878b3fe34e99340eb1c->enter($__internal_3dc2c1382df60f413a5d4ef7f08df9447290457761965878b3fe34e99340eb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3dc2c1382df60f413a5d4ef7f08df9447290457761965878b3fe34e99340eb1c->leave($__internal_3dc2c1382df60f413a5d4ef7f08df9447290457761965878b3fe34e99340eb1c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/tag-q_new-4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
