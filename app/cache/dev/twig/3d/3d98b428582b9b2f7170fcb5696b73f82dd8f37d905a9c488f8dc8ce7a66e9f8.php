<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_96f4dc2d3394c6d8d079cf410ecca5c9bb7577cea6696186c6dd538835b2c33a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b12548a2172e92da6d308aa8cf3b795269aaceb3d742b41ceb38cb96cd046d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b12548a2172e92da6d308aa8cf3b795269aaceb3d742b41ceb38cb96cd046d2f->enter($__internal_b12548a2172e92da6d308aa8cf3b795269aaceb3d742b41ceb38cb96cd046d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b12548a2172e92da6d308aa8cf3b795269aaceb3d742b41ceb38cb96cd046d2f->leave($__internal_b12548a2172e92da6d308aa8cf3b795269aaceb3d742b41ceb38cb96cd046d2f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_39c087449c3d1774aa689ffbb3c3a9d9a56fe6430e39bcd510b900113f4527d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c087449c3d1774aa689ffbb3c3a9d9a56fe6430e39bcd510b900113f4527d7->enter($__internal_39c087449c3d1774aa689ffbb3c3a9d9a56fe6430e39bcd510b900113f4527d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_39c087449c3d1774aa689ffbb3c3a9d9a56fe6430e39bcd510b900113f4527d7->leave($__internal_39c087449c3d1774aa689ffbb3c3a9d9a56fe6430e39bcd510b900113f4527d7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_63c64d88e8a39ca76ef99c099a2020297899b715ef75904b050c49225d2a662a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c64d88e8a39ca76ef99c099a2020297899b715ef75904b050c49225d2a662a->enter($__internal_63c64d88e8a39ca76ef99c099a2020297899b715ef75904b050c49225d2a662a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_63c64d88e8a39ca76ef99c099a2020297899b715ef75904b050c49225d2a662a->leave($__internal_63c64d88e8a39ca76ef99c099a2020297899b715ef75904b050c49225d2a662a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a848583c9ac92927d15f7a4016fa70b7546169753d3faee852d82d0b810d235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a848583c9ac92927d15f7a4016fa70b7546169753d3faee852d82d0b810d235->enter($__internal_7a848583c9ac92927d15f7a4016fa70b7546169753d3faee852d82d0b810d235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7a848583c9ac92927d15f7a4016fa70b7546169753d3faee852d82d0b810d235->leave($__internal_7a848583c9ac92927d15f7a4016fa70b7546169753d3faee852d82d0b810d235_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/tag-q_new-4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
