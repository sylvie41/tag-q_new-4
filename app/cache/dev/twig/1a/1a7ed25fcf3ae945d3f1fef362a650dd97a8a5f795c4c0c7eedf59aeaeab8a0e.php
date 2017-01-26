<?php

/* SonataCoreBundle:Form:datepicker.html.twig */
class __TwigTemplate_5fbf13fc41e1ec1b5214c8626bbe3fbf9ad095fd94d2b4d66fed26c04c2a284b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_date_picker_widget_html' => array($this, 'block_sonata_type_date_picker_widget_html'),
            'sonata_type_date_picker_widget' => array($this, 'block_sonata_type_date_picker_widget'),
            'sonata_type_datetime_picker_widget_html' => array($this, 'block_sonata_type_datetime_picker_widget_html'),
            'sonata_type_datetime_picker_widget' => array($this, 'block_sonata_type_datetime_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f35d505cff6a1ed2885ef33810c5c28065499fb726eb7bacfb4dc7df041a2fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f35d505cff6a1ed2885ef33810c5c28065499fb726eb7bacfb4dc7df041a2fa8->enter($__internal_f35d505cff6a1ed2885ef33810c5c28065499fb726eb7bacfb4dc7df041a2fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:datepicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_date_picker_widget_html', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('sonata_type_date_picker_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('sonata_type_datetime_picker_widget_html', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('sonata_type_datetime_picker_widget', $context, $blocks);
        
        $__internal_f35d505cff6a1ed2885ef33810c5c28065499fb726eb7bacfb4dc7df041a2fa8->leave($__internal_f35d505cff6a1ed2885ef33810c5c28065499fb726eb7bacfb4dc7df041a2fa8_prof);

    }

    // line 11
    public function block_sonata_type_date_picker_widget_html($context, array $blocks = array())
    {
        $__internal_b8887818d5292d52a5059bc953147c3f776e256c95bd527622afe39443e928df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8887818d5292d52a5059bc953147c3f776e256c95bd527622afe39443e928df->enter($__internal_b8887818d5292d52a5059bc953147c3f776e256c95bd527622afe39443e928df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_date_picker_widget_html"));

        // line 12
        echo "    ";
        if (($context["datepicker_use_button"] ?? $this->getContext($context, "datepicker_use_button"))) {
            // line 13
            echo "        <div class='input-group date' id='dp_";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "'>
    ";
        }
        // line 15
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-date-format" => ($context["moment_format"] ?? $this->getContext($context, "moment_format"))));
        // line 16
        echo "    ";
        $this->displayBlock("date_widget", $context, $blocks);
        echo "
    ";
        // line 17
        if (($context["datepicker_use_button"] ?? $this->getContext($context, "datepicker_use_button"))) {
            // line 18
            echo "            <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    ";
        }
        
        $__internal_b8887818d5292d52a5059bc953147c3f776e256c95bd527622afe39443e928df->leave($__internal_b8887818d5292d52a5059bc953147c3f776e256c95bd527622afe39443e928df_prof);

    }

    // line 23
    public function block_sonata_type_date_picker_widget($context, array $blocks = array())
    {
        $__internal_bd45c5c053d3eb893be3ad5e5af480beffad40a05174c260dd43f9f27ac4c878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd45c5c053d3eb893be3ad5e5af480beffad40a05174c260dd43f9f27ac4c878->enter($__internal_bd45c5c053d3eb893be3ad5e5af480beffad40a05174c260dd43f9f27ac4c878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_date_picker_widget"));

        // line 24
        echo "    ";
        ob_start();
        // line 25
        echo "        ";
        if (($context["wrap_fields_with_addons"] ?? $this->getContext($context, "wrap_fields_with_addons"))) {
            // line 26
            echo "            <div class=\"input-group\">
                ";
            // line 27
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 30
            echo "            ";
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 32
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 34
        echo ((($context["datepicker_use_button"] ?? $this->getContext($context, "datepicker_use_button"))) ? ("dp_") : (""));
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "').datetimepicker(";
        echo twig_jsonencode_filter(($context["dp_options"] ?? $this->getContext($context, "dp_options")));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bd45c5c053d3eb893be3ad5e5af480beffad40a05174c260dd43f9f27ac4c878->leave($__internal_bd45c5c053d3eb893be3ad5e5af480beffad40a05174c260dd43f9f27ac4c878_prof);

    }

    // line 40
    public function block_sonata_type_datetime_picker_widget_html($context, array $blocks = array())
    {
        $__internal_2d6f27e5052ef6773d0766a53e314ced86b84591e764fa19554f2b5cd15c231c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6f27e5052ef6773d0766a53e314ced86b84591e764fa19554f2b5cd15c231c->enter($__internal_2d6f27e5052ef6773d0766a53e314ced86b84591e764fa19554f2b5cd15c231c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget_html"));

        // line 41
        echo "    ";
        if (($context["datepicker_use_button"] ?? $this->getContext($context, "datepicker_use_button"))) {
            // line 42
            echo "        <div class='input-group date' id='dtp_";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "'>
    ";
        }
        // line 44
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-date-format" => ($context["moment_format"] ?? $this->getContext($context, "moment_format"))));
        // line 45
        echo "    ";
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
    ";
        // line 46
        if (($context["datepicker_use_button"] ?? $this->getContext($context, "datepicker_use_button"))) {
            // line 47
            echo "          <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    ";
        }
        
        $__internal_2d6f27e5052ef6773d0766a53e314ced86b84591e764fa19554f2b5cd15c231c->leave($__internal_2d6f27e5052ef6773d0766a53e314ced86b84591e764fa19554f2b5cd15c231c_prof);

    }

    // line 52
    public function block_sonata_type_datetime_picker_widget($context, array $blocks = array())
    {
        $__internal_34911d8656f3f2bc91a760cd420583d4828e2927f17e51b3b41a66f5950d0df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34911d8656f3f2bc91a760cd420583d4828e2927f17e51b3b41a66f5950d0df9->enter($__internal_34911d8656f3f2bc91a760cd420583d4828e2927f17e51b3b41a66f5950d0df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget"));

        // line 53
        echo "    ";
        ob_start();
        // line 54
        echo "        ";
        if (($context["wrap_fields_with_addons"] ?? $this->getContext($context, "wrap_fields_with_addons"))) {
            // line 55
            echo "            <div class=\"input-group\">
                ";
            // line 56
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 59
            echo "            ";
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 61
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 63
        echo ((($context["datepicker_use_button"] ?? $this->getContext($context, "datepicker_use_button"))) ? ("dtp_") : (""));
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "').datetimepicker(";
        echo twig_jsonencode_filter(($context["dp_options"] ?? $this->getContext($context, "dp_options")));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_34911d8656f3f2bc91a760cd420583d4828e2927f17e51b3b41a66f5950d0df9->leave($__internal_34911d8656f3f2bc91a760cd420583d4828e2927f17e51b3b41a66f5950d0df9_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:datepicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  195 => 63,  191 => 61,  185 => 59,  179 => 56,  176 => 55,  173 => 54,  170 => 53,  164 => 52,  154 => 47,  152 => 46,  147 => 45,  144 => 44,  138 => 42,  135 => 41,  129 => 40,  114 => 34,  110 => 32,  104 => 30,  98 => 27,  95 => 26,  92 => 25,  89 => 24,  83 => 23,  73 => 18,  71 => 17,  66 => 16,  63 => 15,  57 => 13,  54 => 12,  48 => 11,  41 => 52,  38 => 51,  36 => 40,  33 => 39,  31 => 23,  28 => 22,  26 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% block sonata_type_date_picker_widget_html %}
    {% if datepicker_use_button %}
        <div class='input-group date' id='dp_{{ id }}'>
    {% endif %}
    {% set attr = attr|merge({'data-date-format': moment_format}) %}
    {{ block('date_widget') }}
    {% if datepicker_use_button %}
            <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    {% endif %}
{% endblock sonata_type_date_picker_widget_html %}

{% block sonata_type_date_picker_widget %}
    {% spaceless %}
        {% if wrap_fields_with_addons %}
            <div class=\"input-group\">
                {{ block('sonata_type_date_picker_widget_html') }}
            </div>
        {% else %}
            {{ block('sonata_type_date_picker_widget_html') }}
        {% endif %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#{{ datepicker_use_button ? 'dp_' : '' }}{{ id }}').datetimepicker({{ dp_options|json_encode|raw }});
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_date_picker_widget %}

{% block sonata_type_datetime_picker_widget_html %}
    {% if datepicker_use_button %}
        <div class='input-group date' id='dtp_{{ id }}'>
    {% endif %}
    {% set attr = attr|merge({'data-date-format': moment_format}) %}
    {{ block('datetime_widget') }}
    {% if datepicker_use_button %}
          <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    {% endif %}
{% endblock sonata_type_datetime_picker_widget_html %}

{% block sonata_type_datetime_picker_widget %}
    {% spaceless %}
        {% if wrap_fields_with_addons %}
            <div class=\"input-group\">
                {{ block('sonata_type_datetime_picker_widget_html') }}
            </div>
        {% else %}
            {{ block('sonata_type_datetime_picker_widget_html') }}
        {% endif %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#{{ datepicker_use_button ? 'dtp_' : '' }}{{ id }}').datetimepicker({{ dp_options|json_encode|raw }});
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_datetime_picker_widget %}
", "SonataCoreBundle:Form:datepicker.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/core-bundle/Resources/views/Form/datepicker.html.twig");
    }
}
