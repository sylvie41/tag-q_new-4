<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_a4ccde9e22fc428418874826dfdda5572230a09617c2146c50bb4d569c5a99f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_javascript_config' => array($this, 'block_sonata_javascript_config'),
            'sonata_javascript_pool' => array($this, 'block_sonata_javascript_pool'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_top_nav_menu_add_block' => array($this, 'block_sonata_top_nav_menu_add_block'),
            'sonata_top_nav_menu_user_block' => array($this, 'block_sonata_top_nav_menu_user_block'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4509ca7373e7a9597a1d5d2b887578e2c92c6d0f5192a6305211e23c35fdfd92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4509ca7373e7a9597a1d5d2b887578e2c92c6d0f5192a6305211e23c35fdfd92->enter($__internal_4509ca7373e7a9597a1d5d2b887578e2c92c6d0f5192a6305211e23c35fdfd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        // line 11
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (        $this->renderBlock("preview", $context, $blocks)) : (null));
        // line 12
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (        $this->renderBlock("form", $context, $blocks)) : (null));
        // line 13
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (        $this->renderBlock("show", $context, $blocks)) : (null));
        // line 14
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (        $this->renderBlock("list_table", $context, $blocks)) : (null));
        // line 15
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (        $this->renderBlock("list_filters", $context, $blocks)) : (null));
        // line 16
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (        $this->renderBlock("tab_menu", $context, $blocks)) : (null));
        // line 17
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (        $this->renderBlock("content", $context, $blocks)) : (null));
        // line 18
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (        $this->renderBlock("title", $context, $blocks)) : (null));
        // line 19
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (        $this->renderBlock("breadcrumb", $context, $blocks)) : (null));
        // line 20
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (        $this->renderBlock("actions", $context, $blocks)) : (null));
        // line 21
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (        $this->renderBlock("navbar_title", $context, $blocks)) : (null));
        // line 22
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (        $this->renderBlock("list_filters_actions", $context, $blocks)) : (null));
        // line 23
        echo "
<!DOCTYPE html>
<html ";
        // line 25
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 27
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 32
        echo "
        ";
        // line 33
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "
        <title>
        ";
        // line 85
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 111
        echo "        </title>
    </head>
    <body ";
        // line 113
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 117
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 216
        echo "
        ";
        // line 217
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 351
        echo "    </div>

    ";
        // line 353
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 354
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 360
            echo "    ";
        }
        // line 361
        echo "
    </body>
</html>
";
        
        $__internal_4509ca7373e7a9597a1d5d2b887578e2c92c6d0f5192a6305211e23c35fdfd92->leave($__internal_4509ca7373e7a9597a1d5d2b887578e2c92c6d0f5192a6305211e23c35fdfd92_prof);

    }

    // line 25
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_2fa140676b201b6717ed52674577377defd59b5b15db05333a1e94cbb9d05b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa140676b201b6717ed52674577377defd59b5b15db05333a1e94cbb9d05b71->enter($__internal_2fa140676b201b6717ed52674577377defd59b5b15db05333a1e94cbb9d05b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_2fa140676b201b6717ed52674577377defd59b5b15db05333a1e94cbb9d05b71->leave($__internal_2fa140676b201b6717ed52674577377defd59b5b15db05333a1e94cbb9d05b71_prof);

    }

    // line 27
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_5d6a7ea2aad5dcc2b7ad914f0a75c56f7a009c38388e31e8c3df3c64a4712bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d6a7ea2aad5dcc2b7ad914f0a75c56f7a009c38388e31e8c3df3c64a4712bd5->enter($__internal_5d6a7ea2aad5dcc2b7ad914f0a75c56f7a009c38388e31e8c3df3c64a4712bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 28
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_5d6a7ea2aad5dcc2b7ad914f0a75c56f7a009c38388e31e8c3df3c64a4712bd5->leave($__internal_5d6a7ea2aad5dcc2b7ad914f0a75c56f7a009c38388e31e8c3df3c64a4712bd5_prof);

    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d8fda0fb2b9709f3f0e8580f79ffe91db3626336be33add4b5b7985a0cdd94f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8fda0fb2b9709f3f0e8580f79ffe91db3626336be33add4b5b7985a0cdd94f->enter($__internal_7d8fda0fb2b9709f3f0e8580f79ffe91db3626336be33add4b5b7985a0cdd94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 34
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 35
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        ";
        
        $__internal_7d8fda0fb2b9709f3f0e8580f79ffe91db3626336be33add4b5b7985a0cdd94f->leave($__internal_7d8fda0fb2b9709f3f0e8580f79ffe91db3626336be33add4b5b7985a0cdd94f_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4cb3fcaed2b9d1e34855d8f9f23378562480a1782524e1ce84013a45839d1eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb3fcaed2b9d1e34855d8f9f23378562480a1782524e1ce84013a45839d1eb5->enter($__internal_4cb3fcaed2b9d1e34855d8f9f23378562480a1782524e1ce84013a45839d1eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 60
        echo "
            ";
        // line 61
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 66
        echo "
            ";
        // line 67
        $context["locale"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 68
        echo "            ";
        // line 69
        echo "            ";
        if ((twig_slice($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 70
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter(($context["locale"] ?? $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
            echo "\"></script>
            ";
        }
        // line 72
        echo "
            ";
        // line 74
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 75
            echo "                ";
            if ((($context["locale"] ?? $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 76
            echo "
                ";
            // line 78
            echo "                ";
            if ((twig_slice($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 79
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter(($context["locale"] ?? $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 81
            echo "            ";
        }
        // line 82
        echo "        ";
        
        $__internal_4cb3fcaed2b9d1e34855d8f9f23378562480a1782524e1ce84013a45839d1eb5->leave($__internal_4cb3fcaed2b9d1e34855d8f9f23378562480a1782524e1ce84013a45839d1eb5_prof);

    }

    // line 40
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_da037725e372a9efb71e5c4b601139962a9a9ef3fc86c028b9d6b75492fd7f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da037725e372a9efb71e5c4b601139962a9a9ef3fc86c028b9d6b75492fd7f58->enter($__internal_da037725e372a9efb71e5c4b601139962a9a9ef3fc86c028b9d6b75492fd7f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        // line 41
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 43
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 44
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 45
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 46
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 47
        echo "                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT:  '";
        // line 49
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            ";
        
        $__internal_da037725e372a9efb71e5c4b601139962a9a9ef3fc86c028b9d6b75492fd7f58->leave($__internal_da037725e372a9efb71e5c4b601139962a9a9ef3fc86c028b9d6b75492fd7f58_prof);

    }

    // line 61
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_14d8f6f483af8fc983e04a96b7ddc9d431771f9e8b41829df4a56b429bd08954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14d8f6f483af8fc983e04a96b7ddc9d431771f9e8b41829df4a56b429bd08954->enter($__internal_14d8f6f483af8fc983e04a96b7ddc9d431771f9e8b41829df4a56b429bd08954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        // line 62
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 63
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            ";
        
        $__internal_14d8f6f483af8fc983e04a96b7ddc9d431771f9e8b41829df4a56b429bd08954->leave($__internal_14d8f6f483af8fc983e04a96b7ddc9d431771f9e8b41829df4a56b429bd08954_prof);

    }

    // line 85
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_22d9c4578ef489aaf8dbab0318df9097e4db0f18e21d8586bdf18e2a7ac34137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d9c4578ef489aaf8dbab0318df9097e4db0f18e21d8586bdf18e2a7ac34137->enter($__internal_22d9c4578ef489aaf8dbab0318df9097e4db0f18e21d8586bdf18e2a7ac34137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 86
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 88
        if ( !twig_test_empty(($context["_title"] ?? $this->getContext($context, "_title")))) {
            // line 89
            echo "                ";
            echo ($context["_title"] ?? $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 91
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 92
                echo "                    -
                    ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["action"] ?? $this->getContext($context, "action"))), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 94
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 95
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 96
                            echo "                                &gt;
                            ";
                        }
                        // line 99
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 100
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 101
                        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
                            // line 102
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
                        }
                        // line 105
                        echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                        echo "
                        ";
                    }
                    // line 107
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "                ";
            }
            // line 109
            echo "            ";
        }
        // line 110
        echo "        ";
        
        $__internal_22d9c4578ef489aaf8dbab0318df9097e4db0f18e21d8586bdf18e2a7ac34137->leave($__internal_22d9c4578ef489aaf8dbab0318df9097e4db0f18e21d8586bdf18e2a7ac34137_prof);

    }

    // line 113
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_29e5befb00e36092a6048f6abeb0fae9ac1405d33f1dfd56c4f0ff237c95f017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e5befb00e36092a6048f6abeb0fae9ac1405d33f1dfd56c4f0ff237c95f017->enter($__internal_29e5befb00e36092a6048f6abeb0fae9ac1405d33f1dfd56c4f0ff237c95f017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_29e5befb00e36092a6048f6abeb0fae9ac1405d33f1dfd56c4f0ff237c95f017->leave($__internal_29e5befb00e36092a6048f6abeb0fae9ac1405d33f1dfd56c4f0ff237c95f017_prof);

    }

    // line 117
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_8a34e3d5c4dabe2f60a7d548df67fedd8dd0b4e65daca5fcf29423540358a96f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a34e3d5c4dabe2f60a7d548df67fedd8dd0b4e65daca5fcf29423540358a96f->enter($__internal_8a34e3d5c4dabe2f60a7d548df67fedd8dd0b4e65daca5fcf29423540358a96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 118
        echo "            <header class=\"main-header\">
                ";
        // line 119
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 126
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 138
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 214
        echo "            </header>
        ";
        
        $__internal_8a34e3d5c4dabe2f60a7d548df67fedd8dd0b4e65daca5fcf29423540358a96f->leave($__internal_8a34e3d5c4dabe2f60a7d548df67fedd8dd0b4e65daca5fcf29423540358a96f_prof);

    }

    // line 119
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_4e9b43b091acf98be16f3522c82c19038f6a3d11847f1be83585116a27a38624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e9b43b091acf98be16f3522c82c19038f6a3d11847f1be83585116a27a38624->enter($__internal_4e9b43b091acf98be16f3522c82c19038f6a3d11847f1be83585116a27a38624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 120
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_4e9b43b091acf98be16f3522c82c19038f6a3d11847f1be83585116a27a38624->leave($__internal_4e9b43b091acf98be16f3522c82c19038f6a3d11847f1be83585116a27a38624_prof);

    }

    // line 126
    public function block_logo($context, array $blocks = array())
    {
        $__internal_efbc8e8921887a27133ad11f112e83976d0206c6c7942ca348d406a0efea22f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efbc8e8921887a27133ad11f112e83976d0206c6c7942ca348d406a0efea22f8->enter($__internal_efbc8e8921887a27133ad11f112e83976d0206c6c7942ca348d406a0efea22f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 127
        echo "                    ";
        ob_start();
        // line 128
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 129
        if ((("single_image" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 130
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 132
        echo "                            ";
        if ((("single_text" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 133
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 135
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 137
        echo "                ";
        
        $__internal_efbc8e8921887a27133ad11f112e83976d0206c6c7942ca348d406a0efea22f8->leave($__internal_efbc8e8921887a27133ad11f112e83976d0206c6c7942ca348d406a0efea22f8_prof);

    }

    // line 138
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_96fccd2fff004321f9914a4470c267a61759aa5dbd8954f27b98a1ee83bcfc93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96fccd2fff004321f9914a4470c267a61759aa5dbd8954f27b98a1ee83bcfc93->enter($__internal_96fccd2fff004321f9914a4470c267a61759aa5dbd8954f27b98a1ee83bcfc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 139
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 145
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 184
        echo "                        </div>

                        ";
        // line 186
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 212
        echo "                    </nav>
                ";
        
        $__internal_96fccd2fff004321f9914a4470c267a61759aa5dbd8954f27b98a1ee83bcfc93->leave($__internal_96fccd2fff004321f9914a4470c267a61759aa5dbd8954f27b98a1ee83bcfc93_prof);

    }

    // line 145
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_31f85c6179500f5933611526b69e6decd165b1cb11934f0e79944bdeeac09e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f85c6179500f5933611526b69e6decd165b1cb11934f0e79944bdeeac09e58->enter($__internal_31f85c6179500f5933611526b69e6decd165b1cb11934f0e79944bdeeac09e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 146
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 147
        if (( !twig_test_empty(($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 148
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 149
            if (twig_test_empty(($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb")))) {
                // line 150
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 151
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["action"] ?? $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 152
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 153
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 154
                        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
                            // line 155
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
                        }
                        // line 158
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 159
                            echo "                                                            <li>
                                                                ";
                            // line 160
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 161
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 162
                                if ($this->getAttribute($context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 163
                                    echo ($context["label"] ?? $this->getContext($context, "label"));
                                } else {
                                    // line 165
                                    echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                                }
                                // line 167
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 169
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 171
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 173
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 175
                        echo "                                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 176
                    echo "                                                ";
                }
                // line 177
                echo "                                            ";
            } else {
                // line 178
                echo "                                                ";
                echo ($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 180
            echo "                                        </ol>
                                    ";
        }
        // line 182
        echo "                                </div>
                            ";
        
        $__internal_31f85c6179500f5933611526b69e6decd165b1cb11934f0e79944bdeeac09e58->leave($__internal_31f85c6179500f5933611526b69e6decd165b1cb11934f0e79944bdeeac09e58_prof);

    }

    // line 186
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_31fbaa63b86bdf2a58499713134d9f7a0a5b556b365a9f55ea747c540459a12b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31fbaa63b86bdf2a58499713134d9f7a0a5b556b365a9f55ea747c540459a12b->enter($__internal_31fbaa63b86bdf2a58499713134d9f7a0a5b556b365a9f55ea747c540459a12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 187
        echo "                            ";
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 188
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 190
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 198
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 208
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 211
        echo "                        ";
        
        $__internal_31fbaa63b86bdf2a58499713134d9f7a0a5b556b365a9f55ea747c540459a12b->leave($__internal_31fbaa63b86bdf2a58499713134d9f7a0a5b556b365a9f55ea747c540459a12b_prof);

    }

    // line 190
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_99431e81bcab26de76047cc6aa9f99a3ad6c78c92b8a36d2d9b798c650e3fb90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99431e81bcab26de76047cc6aa9f99a3ad6c78c92b8a36d2d9b798c650e3fb90->enter($__internal_99431e81bcab26de76047cc6aa9f99a3ad6c78c92b8a36d2d9b798c650e3fb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 191
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 195
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 195)->display($context);
        // line 196
        echo "                                            </li>
                                        ";
        
        $__internal_99431e81bcab26de76047cc6aa9f99a3ad6c78c92b8a36d2d9b798c650e3fb90->leave($__internal_99431e81bcab26de76047cc6aa9f99a3ad6c78c92b8a36d2d9b798c650e3fb90_prof);

    }

    // line 198
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_8db6308d77046f9819db27ebb7cafc054238f0542fb92cfff1e2e192f7876621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8db6308d77046f9819db27ebb7cafc054238f0542fb92cfff1e2e192f7876621->enter($__internal_8db6308d77046f9819db27ebb7cafc054238f0542fb92cfff1e2e192f7876621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 199
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 204
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 204)->display($context);
        // line 205
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_8db6308d77046f9819db27ebb7cafc054238f0542fb92cfff1e2e192f7876621->leave($__internal_8db6308d77046f9819db27ebb7cafc054238f0542fb92cfff1e2e192f7876621_prof);

    }

    // line 217
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_9bf7c8e597500cda5dced627834f488c4a92da08f8f6d3c0130e1558d6b2ff80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf7c8e597500cda5dced627834f488c4a92da08f8f6d3c0130e1558d6b2ff80->enter($__internal_9bf7c8e597500cda5dced627834f488c4a92da08f8f6d3c0130e1558d6b2ff80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 218
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 250
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 252
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 349
        echo "            </div>
        ";
        
        $__internal_9bf7c8e597500cda5dced627834f488c4a92da08f8f6d3c0130e1558d6b2ff80->leave($__internal_9bf7c8e597500cda5dced627834f488c4a92da08f8f6d3c0130e1558d6b2ff80_prof);

    }

    // line 218
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_f33ada0a68c02b0e5ddeca141a4b5945519067cad5f6de4e68b7069d9ba37f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f33ada0a68c02b0e5ddeca141a4b5945519067cad5f6de4e68b7069d9ba37f17->enter($__internal_f33ada0a68c02b0e5ddeca141a4b5945519067cad5f6de4e68b7069d9ba37f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 219
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 221
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 247
        echo "                    </section>
                </aside>
            ";
        
        $__internal_f33ada0a68c02b0e5ddeca141a4b5945519067cad5f6de4e68b7069d9ba37f17->leave($__internal_f33ada0a68c02b0e5ddeca141a4b5945519067cad5f6de4e68b7069d9ba37f17_prof);

    }

    // line 221
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_2c188df4394f13a2ee2686f9580a308d07f41712b143ceda4430f1c7485d8ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c188df4394f13a2ee2686f9580a308d07f41712b143ceda4430f1c7485d8ec7->enter($__internal_2c188df4394f13a2ee2686f9580a308d07f41712b143ceda4430f1c7485d8ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 222
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 234
        echo "
                            ";
        // line 235
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 236
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 239
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 246
        echo "                        ";
        
        $__internal_2c188df4394f13a2ee2686f9580a308d07f41712b143ceda4430f1c7485d8ec7->leave($__internal_2c188df4394f13a2ee2686f9580a308d07f41712b143ceda4430f1c7485d8ec7_prof);

    }

    // line 222
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_d2da8cfac9530f6b7549d62b1c81e8ff2f08325699b4493b58f77bb1318eb4ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2da8cfac9530f6b7549d62b1c81e8ff2f08325699b4493b58f77bb1318eb4ae->enter($__internal_d2da8cfac9530f6b7549d62b1c81e8ff2f08325699b4493b58f77bb1318eb4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 223
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn btn-flat\" type=\"submit\">
                                                    <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                                </button>
                                            </span>
                                    </div>
                                </form>
                            ";
        
        $__internal_d2da8cfac9530f6b7549d62b1c81e8ff2f08325699b4493b58f77bb1318eb4ae->leave($__internal_d2da8cfac9530f6b7549d62b1c81e8ff2f08325699b4493b58f77bb1318eb4ae_prof);

    }

    // line 235
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_c131b2a50600357e4797e4c02f862d9bfde68ed0accb722f59ae76b24c404fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c131b2a50600357e4797e4c02f862d9bfde68ed0accb722f59ae76b24c404fc0->enter($__internal_c131b2a50600357e4797e4c02f862d9bfde68ed0accb722f59ae76b24c404fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_c131b2a50600357e4797e4c02f862d9bfde68ed0accb722f59ae76b24c404fc0->leave($__internal_c131b2a50600357e4797e4c02f862d9bfde68ed0accb722f59ae76b24c404fc0_prof);

    }

    // line 236
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_9328aeb5a47a7886fa45d939d85281461b03d2ecc84776a01195c7260fb2216f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9328aeb5a47a7886fa45d939d85281461b03d2ecc84776a01195c7260fb2216f->enter($__internal_9328aeb5a47a7886fa45d939d85281461b03d2ecc84776a01195c7260fb2216f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 237
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_9328aeb5a47a7886fa45d939d85281461b03d2ecc84776a01195c7260fb2216f->leave($__internal_9328aeb5a47a7886fa45d939d85281461b03d2ecc84776a01195c7260fb2216f_prof);

    }

    // line 239
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_f6c8f469fcf7e88d17bfb91db28d996794f9d1550e6784fbce663003e35ef2f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c8f469fcf7e88d17bfb91db28d996794f9d1550e6784fbce663003e35ef2f2->enter($__internal_f6c8f469fcf7e88d17bfb91db28d996794f9d1550e6784fbce663003e35ef2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 240
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 241
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 244
        echo "                                </p>
                            ";
        
        $__internal_f6c8f469fcf7e88d17bfb91db28d996794f9d1550e6784fbce663003e35ef2f2->leave($__internal_f6c8f469fcf7e88d17bfb91db28d996794f9d1550e6784fbce663003e35ef2f2_prof);

    }

    // line 241
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_33780d09e97b5d82969a8923c9b75d74eb5cc62ce3c22adb4dfe45e50e5da8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33780d09e97b5d82969a8923c9b75d74eb5cc62ce3c22adb4dfe45e50e5da8a7->enter($__internal_33780d09e97b5d82969a8923c9b75d74eb5cc62ce3c22adb4dfe45e50e5da8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 242
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_33780d09e97b5d82969a8923c9b75d74eb5cc62ce3c22adb4dfe45e50e5da8a7->leave($__internal_33780d09e97b5d82969a8923c9b75d74eb5cc62ce3c22adb4dfe45e50e5da8a7_prof);

    }

    // line 252
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_cba56dd8d080fc8cc712cbb0595cbe9c57067a7d2d9c14f8098cfe65ee4c052b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba56dd8d080fc8cc712cbb0595cbe9c57067a7d2d9c14f8098cfe65ee4c052b->enter($__internal_cba56dd8d080fc8cc712cbb0595cbe9c57067a7d2d9c14f8098cfe65ee4c052b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 253
        echo "                    <section class=\"content-header\">

                        ";
        // line 255
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 309
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 312
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 347
        echo "                    </section>
                ";
        
        $__internal_cba56dd8d080fc8cc712cbb0595cbe9c57067a7d2d9c14f8098cfe65ee4c052b->leave($__internal_cba56dd8d080fc8cc712cbb0595cbe9c57067a7d2d9c14f8098cfe65ee4c052b_prof);

    }

    // line 255
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_4de8a738396c536e090effd38b7024ad9bea095373d86db8f42fc7045d812e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de8a738396c536e090effd38b7024ad9bea095373d86db8f42fc7045d812e6e->enter($__internal_4de8a738396c536e090effd38b7024ad9bea095373d86db8f42fc7045d812e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 256
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 308
        echo "                        ";
        
        $__internal_4de8a738396c536e090effd38b7024ad9bea095373d86db8f42fc7045d812e6e->leave($__internal_4de8a738396c536e090effd38b7024ad9bea095373d86db8f42fc7045d812e6e_prof);

    }

    // line 256
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_7719ef22076e92ee7d26385ea76cd7639f234ffbd8d880a817f2ffe3a6b34cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7719ef22076e92ee7d26385ea76cd7639f234ffbd8d880a817f2ffe3a6b34cbb->enter($__internal_7719ef22076e92ee7d26385ea76cd7639f234ffbd8d880a817f2ffe3a6b34cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 257
        echo "                                ";
        if ((( !twig_test_empty(($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty(($context["_actions"] ?? $this->getContext($context, "_actions")))) ||  !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"))))) {
            // line 258
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 260
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 267
            echo "
                                            <div class=\"navbar-collapse\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 270
            if ( !twig_test_empty(($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu")))) {
                // line 271
                echo "                                                        ";
                echo ($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu"));
                echo "
                                                    ";
            }
            // line 273
            echo "                                                </div>

                                                ";
            // line 275
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && (($context["action"] ?? $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 276
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 277
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 278
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 280
                echo "                                                    </div>
                                                ";
            }
            // line 282
            echo "
                                                ";
            // line 283
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 299
            echo "
                                                ";
            // line 300
            if ( !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions")))) {
                // line 301
                echo "                                                    ";
                echo ($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 303
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 307
        echo "                            ";
        
        $__internal_7719ef22076e92ee7d26385ea76cd7639f234ffbd8d880a817f2ffe3a6b34cbb->leave($__internal_7719ef22076e92ee7d26385ea76cd7639f234ffbd8d880a817f2ffe3a6b34cbb_prof);

    }

    // line 260
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_82f104ed1ded01a8b4e0d8d7b2d286d76ccc5c85d6b196d559f27d184b908d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f104ed1ded01a8b4e0d8d7b2d286d76ccc5c85d6b196d559f27d184b908d8c->enter($__internal_82f104ed1ded01a8b4e0d8d7b2d286d76ccc5c85d6b196d559f27d184b908d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 261
        echo "                                                ";
        if ( !twig_test_empty(($context["_navbar_title"] ?? $this->getContext($context, "_navbar_title")))) {
            // line 262
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 263
            echo ($context["_navbar_title"] ?? $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 266
        echo "                                            ";
        
        $__internal_82f104ed1ded01a8b4e0d8d7b2d286d76ccc5c85d6b196d559f27d184b908d8c->leave($__internal_82f104ed1ded01a8b4e0d8d7b2d286d76ccc5c85d6b196d559f27d184b908d8c_prof);

    }

    // line 283
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_5376654bfb2142c80ff8c344b9aadd365163745ca2b57373d05434d594d98d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5376654bfb2142c80ff8c344b9aadd365163745ca2b57373d05434d594d98d8e->enter($__internal_5376654bfb2142c80ff8c344b9aadd365163745ca2b57373d05434d594d98d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 284
        echo "                                                    ";
        if ( !twig_test_empty(trim(twig_replace_filter(($context["_actions"] ?? $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 285
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 286
            if ((twig_length_filter($this->env, twig_split_filter($this->env, ($context["_actions"] ?? $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 287
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 288
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 290
                echo ($context["_actions"] ?? $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 294
                echo "                                                            ";
                echo ($context["_actions"] ?? $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 296
            echo "                                                        </ul>
                                                    ";
        }
        // line 298
        echo "                                                ";
        
        $__internal_5376654bfb2142c80ff8c344b9aadd365163745ca2b57373d05434d594d98d8e->leave($__internal_5376654bfb2142c80ff8c344b9aadd365163745ca2b57373d05434d594d98d8e_prof);

    }

    // line 312
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_5b8a13f07e6602ac623d0da1ecdcae3a0bea37b8cba1936ab739488f84104f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8a13f07e6602ac623d0da1ecdcae3a0bea37b8cba1936ab739488f84104f9b->enter($__internal_5b8a13f07e6602ac623d0da1ecdcae3a0bea37b8cba1936ab739488f84104f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 313
        echo "
                            ";
        // line 314
        $this->displayBlock('notice', $context, $blocks);
        // line 317
        echo "
                            ";
        // line 318
        if ( !twig_test_empty(($context["_preview"] ?? $this->getContext($context, "_preview")))) {
            // line 319
            echo "                                <div class=\"sonata-ba-preview\">";
            echo ($context["_preview"] ?? $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 321
        echo "
                            ";
        // line 322
        if ( !twig_test_empty(($context["_content"] ?? $this->getContext($context, "_content")))) {
            // line 323
            echo "                                <div class=\"sonata-ba-content\">";
            echo ($context["_content"] ?? $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 325
        echo "
                            ";
        // line 326
        if ( !twig_test_empty(($context["_show"] ?? $this->getContext($context, "_show")))) {
            // line 327
            echo "                                <div class=\"sonata-ba-show\">";
            echo ($context["_show"] ?? $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 329
        echo "
                            ";
        // line 330
        if ( !twig_test_empty(($context["_form"] ?? $this->getContext($context, "_form")))) {
            // line 331
            echo "                                <div class=\"sonata-ba-form\">";
            echo ($context["_form"] ?? $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 333
        echo "
                            ";
        // line 334
        if (( !twig_test_empty(($context["_list_table"] ?? $this->getContext($context, "_list_table"))) ||  !twig_test_empty(($context["_list_filters"] ?? $this->getContext($context, "_list_filters"))))) {
            // line 335
            echo "                                ";
            if (trim(($context["_list_filters"] ?? $this->getContext($context, "_list_filters")))) {
                // line 336
                echo "                                    <div class=\"row\">
                                        ";
                // line 337
                echo ($context["_list_filters"] ?? $this->getContext($context, "_list_filters"));
                echo "
                                    </div>
                                ";
            }
            // line 340
            echo "
                                <div class=\"row\">
                                    ";
            // line 342
            echo ($context["_list_table"] ?? $this->getContext($context, "_list_table"));
            echo "
                                </div>

                            ";
        }
        // line 346
        echo "                        ";
        
        $__internal_5b8a13f07e6602ac623d0da1ecdcae3a0bea37b8cba1936ab739488f84104f9b->leave($__internal_5b8a13f07e6602ac623d0da1ecdcae3a0bea37b8cba1936ab739488f84104f9b_prof);

    }

    // line 314
    public function block_notice($context, array $blocks = array())
    {
        $__internal_7c201bb1e40aba3a2badcbbc225ab30b2f32e59bb9d0bef08cfac78fb21ba755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c201bb1e40aba3a2badcbbc225ab30b2f32e59bb9d0bef08cfac78fb21ba755->enter($__internal_7c201bb1e40aba3a2badcbbc225ab30b2f32e59bb9d0bef08cfac78fb21ba755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 315
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 315)->display($context);
        // line 316
        echo "                            ";
        
        $__internal_7c201bb1e40aba3a2badcbbc225ab30b2f32e59bb9d0bef08cfac78fb21ba755->leave($__internal_7c201bb1e40aba3a2badcbbc225ab30b2f32e59bb9d0bef08cfac78fb21ba755_prof);

    }

    // line 354
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_1d128ebc2435037061fb6c4ab52b9853f241213154dbd14f878ac36361dcec8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d128ebc2435037061fb6c4ab52b9853f241213154dbd14f878ac36361dcec8b->enter($__internal_1d128ebc2435037061fb6c4ab52b9853f241213154dbd14f878ac36361dcec8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 355
        echo "            ";
        // line 356
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_1d128ebc2435037061fb6c4ab52b9853f241213154dbd14f878ac36361dcec8b->leave($__internal_1d128ebc2435037061fb6c4ab52b9853f241213154dbd14f878ac36361dcec8b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1257 => 356,  1255 => 355,  1249 => 354,  1242 => 316,  1239 => 315,  1233 => 314,  1226 => 346,  1219 => 342,  1215 => 340,  1209 => 337,  1206 => 336,  1203 => 335,  1201 => 334,  1198 => 333,  1192 => 331,  1190 => 330,  1187 => 329,  1181 => 327,  1179 => 326,  1176 => 325,  1170 => 323,  1168 => 322,  1165 => 321,  1159 => 319,  1157 => 318,  1154 => 317,  1152 => 314,  1149 => 313,  1143 => 312,  1136 => 298,  1132 => 296,  1126 => 294,  1119 => 290,  1114 => 288,  1111 => 287,  1109 => 286,  1106 => 285,  1103 => 284,  1097 => 283,  1090 => 266,  1084 => 263,  1081 => 262,  1078 => 261,  1072 => 260,  1065 => 307,  1059 => 303,  1053 => 301,  1051 => 300,  1048 => 299,  1046 => 283,  1043 => 282,  1039 => 280,  1024 => 278,  1020 => 277,  1017 => 276,  1015 => 275,  1011 => 273,  1005 => 271,  1003 => 270,  998 => 267,  996 => 260,  992 => 258,  989 => 257,  983 => 256,  976 => 308,  973 => 256,  967 => 255,  959 => 347,  957 => 312,  952 => 309,  950 => 255,  946 => 253,  940 => 252,  932 => 242,  926 => 241,  918 => 244,  916 => 241,  913 => 240,  907 => 239,  897 => 237,  891 => 236,  879 => 235,  861 => 225,  855 => 223,  849 => 222,  842 => 246,  839 => 239,  836 => 236,  834 => 235,  831 => 234,  828 => 222,  822 => 221,  813 => 247,  811 => 221,  807 => 219,  801 => 218,  793 => 349,  791 => 252,  787 => 250,  784 => 218,  778 => 217,  769 => 205,  767 => 204,  760 => 199,  754 => 198,  746 => 196,  744 => 195,  738 => 191,  732 => 190,  725 => 211,  720 => 208,  717 => 198,  715 => 190,  711 => 188,  708 => 187,  702 => 186,  694 => 182,  690 => 180,  684 => 178,  681 => 177,  678 => 176,  664 => 175,  658 => 173,  654 => 171,  648 => 169,  644 => 167,  641 => 165,  638 => 163,  636 => 162,  631 => 161,  629 => 160,  626 => 159,  624 => 158,  621 => 155,  619 => 154,  617 => 153,  615 => 152,  597 => 151,  594 => 150,  592 => 149,  589 => 148,  587 => 147,  584 => 146,  578 => 145,  570 => 212,  568 => 186,  564 => 184,  562 => 145,  554 => 139,  548 => 138,  541 => 137,  537 => 135,  531 => 133,  528 => 132,  520 => 130,  518 => 129,  513 => 128,  510 => 127,  504 => 126,  493 => 122,  489 => 120,  483 => 119,  475 => 214,  472 => 138,  469 => 126,  467 => 119,  464 => 118,  458 => 117,  446 => 113,  439 => 110,  436 => 109,  433 => 108,  419 => 107,  414 => 105,  411 => 102,  409 => 101,  407 => 100,  405 => 99,  401 => 96,  398 => 95,  395 => 94,  378 => 93,  375 => 92,  372 => 91,  366 => 89,  364 => 88,  358 => 86,  352 => 85,  345 => 65,  336 => 63,  331 => 62,  325 => 61,  307 => 49,  303 => 47,  297 => 46,  289 => 45,  281 => 44,  273 => 43,  269 => 41,  263 => 40,  256 => 82,  253 => 81,  247 => 79,  244 => 78,  241 => 76,  236 => 75,  233 => 74,  230 => 72,  224 => 70,  221 => 69,  219 => 68,  217 => 67,  214 => 66,  212 => 61,  209 => 60,  206 => 40,  200 => 39,  193 => 37,  184 => 35,  179 => 34,  173 => 33,  163 => 28,  157 => 27,  145 => 25,  135 => 361,  132 => 360,  129 => 354,  127 => 353,  123 => 351,  121 => 217,  118 => 216,  116 => 117,  109 => 113,  105 => 111,  103 => 85,  99 => 83,  97 => 39,  94 => 38,  92 => 33,  89 => 32,  87 => 27,  82 => 25,  78 => 23,  76 => 22,  74 => 21,  72 => 20,  70 => 19,  68 => 18,  66 => 17,  64 => 16,  62 => 15,  60 => 14,  58 => 13,  56 => 12,  54 => 11,);
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
{% set _preview              = block('preview') is defined ? block('preview') : null %}
{% set _form                 = block('form') is defined ? block('form') : null %}
{% set _show                 = block('show') is defined ? block('show') : null %}
{% set _list_table           = block('list_table') is defined ? block('list_table') : null %}
{% set _list_filters         = block('list_filters') is defined ? block('list_filters') : null %}
{% set _tab_menu             = block('tab_menu') is defined ? block('tab_menu') : null %}
{% set _content              = block('content') is defined ? block('content') : null %}
{% set _title                = block('title') is defined ? block('title') : null %}
{% set _breadcrumb           = block('breadcrumb') is defined ? block('breadcrumb') : null %}
{% set _actions              = block('actions') is defined ? block('actions') : null %}
{% set _navbar_title         = block('navbar_title') is defined ? block('navbar_title') : null %}
{% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions') : null %}

<!DOCTYPE html>
<html {% block html_attributes %}class=\"no-js\"{% endblock %}>
    <head>
        {% block meta_tags %}
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {% endblock %}

        {% block stylesheets %}
            {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}
                    <link rel=\"stylesheet\" href=\"{{ asset(stylesheet) }}\">
            {% endfor %}
        {% endblock %}

        {% block javascripts %}
            {% block sonata_javascript_config %}
                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},
                        USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},
                        USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},
                        USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}
                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT:  '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            {% endblock %}

            {% block sonata_javascript_pool %}
                {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}
                    <script src=\"{{ asset(javascript) }}\"></script>
                {% endfor %}
            {% endblock %}

            {% set locale = app.request.locale %}
            {# localize moment #}
            {% if locale[:2] != 'en' %}
                <script src=\"{{ asset('bundles/sonatacore/vendor/moment/locale/' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
            {% endif %}

            {# localize select2 #}
            {% if sonata_admin.adminPool.getOption('use_select2') %}
                {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}

                {# omit default EN locale #}
                {% if locale[:2] != 'en' %}
                    <script src=\"{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
                {% endif %}
            {% endif %}
        {% endblock %}

        <title>
        {% block sonata_head_title %}
            {{ 'Admin'|trans({}, 'SonataAdminBundle') }}

            {% if _title is not empty %}
                {{ _title|raw }}
            {% else %}
                {% if action is defined %}
                    -
                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                        {% if not loop.first %}
                            {%  if loop.index != 2 %}
                                &gt;
                            {% endif %}

                            {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                            {%- set label = menu.label -%}
                            {%- if translation_domain is not same as(false) -%}
                                {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                            {%- endif -%}

                            {{ label }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endif%}
        {% endblock %}
        </title>
    </head>
    <body {% block body_attributes %}class=\"sonata-bc skin-black fixed\"{% endblock %}>

    <div class=\"wrapper\">

        {% block sonata_header %}
            <header class=\"main-header\">
                {% block sonata_header_noscript_warning %}
                    <noscript>
                        <div class=\"noscript-warning\">
                            {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}
                        </div>
                    </noscript>
                {% endblock %}
                {% block logo %}
                    {% spaceless %}
                        <a class=\"logo\" href=\"{{ path('sonata_admin_dashboard') }}\">
                            {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <img src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                            {% endif %}
                            {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <span>{{ sonata_admin.adminPool.title }}</span>
                            {% endif %}
                        </a>
                    {% endspaceless %}
                {% endblock %}
                {% block sonata_nav %}
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            {% block sonata_breadcrumb %}
                                <div class=\"hidden-xs\">
                                    {% if _breadcrumb is not empty or action is defined %}
                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            {% if _breadcrumb is empty %}
                                                {% if action is defined %}
                                                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                                                        {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                                                        {%- set label = menu.label -%}
                                                        {%- if translation_domain is not same as(false) -%}
                                                            {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                                                        {%- endif -%}

                                                        {% if not loop.last  %}
                                                            <li>
                                                                {% if menu.uri is not empty %}
                                                                    <a href=\"{{ menu.uri }}\">
                                                                        {% if menu.extra('safe_label', true) %}
                                                                            {{- label|raw -}}
                                                                        {% else %}
                                                                            {{- label -}}
                                                                        {% endif %}
                                                                    </a>
                                                                {% else %}
                                                                    {{ label }}
                                                                {% endif %}
                                                            </li>
                                                        {% else %}
                                                            <li class=\"active\"><span>{{ label }}</span></li>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% else %}
                                                {{ _breadcrumb|raw }}
                                            {% endif %}
                                        </ol>
                                    {% endif %}
                                </div>
                            {% endblock sonata_breadcrumb %}
                        </div>

                        {% block sonata_top_nav_menu %}
                            {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}
                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        {% block sonata_top_nav_menu_add_block %}
                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                {% include sonata_admin.adminPool.getTemplate('add_block') %}
                                            </li>
                                        {% endblock %}
                                        {% block sonata_top_nav_menu_user_block %}
                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    {% include sonata_admin.adminPool.getTemplate('user_block') %}
                                                </ul>
                                            </li>
                                        {% endblock %}
                                    </ul>
                                </div>
                            {% endif %}
                        {% endblock %}
                    </nav>
                {% endblock sonata_nav %}
            </header>
        {% endblock sonata_header %}

        {% block sonata_wrapper %}
            {% block sonata_left_side %}
                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        {% block sonata_side_nav %}
                            {% block sonata_sidebar_search %}
                                <form action=\"{{ path('sonata_admin_search') }}\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"{{ app.request.get('q') }}\" class=\"form-control\" placeholder=\"{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn btn-flat\" type=\"submit\">
                                                    <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                                </button>
                                            </span>
                                    </div>
                                </form>
                            {% endblock sonata_sidebar_search %}

                            {% block side_bar_before_nav %} {% endblock %}
                            {% block side_bar_nav %}
                                {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}
                            {% endblock side_bar_nav %}
                            {% block side_bar_after_nav %}
                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    {% block side_bar_after_nav_content %}
                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    {% endblock %}
                                </p>
                            {% endblock %}
                        {% endblock sonata_side_nav %}
                    </section>
                </aside>
            {% endblock sonata_left_side %}

            <div class=\"content-wrapper\">
                {% block sonata_page_content %}
                    <section class=\"content-header\">

                        {% block sonata_page_content_header %}
                            {% block sonata_page_content_nav %}
                                {% if _tab_menu is not empty or _actions is not empty or _list_filters_actions is not empty %}
                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            {% block tab_menu_navbar_header %}
                                                {% if _navbar_title is not empty %}
                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">{{ _navbar_title|raw }}</a>
                                                    </div>
                                                {% endif %}
                                            {% endblock %}

                                            <div class=\"navbar-collapse\">
                                                <div class=\"navbar-left\">
                                                    {% if _tab_menu is not empty %}
                                                        {{ _tab_menu|raw }}
                                                    {% endif %}
                                                </div>

                                                {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                                                    <div class=\"nav navbar-right btn-group\">
                                                        {% for mode, settings in admin.listModes %}
                                                            <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                                        {% endfor %}
                                                    </div>
                                                {% endif %}

                                                {% block sonata_admin_content_actions_wrappers %}
                                                    {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}
                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        {% if _actions|split('</a>')|length > 2 %}
                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    {{ _actions|raw }}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {{ _actions|raw }}
                                                        {% endif %}
                                                        </ul>
                                                    {% endif %}
                                                {% endblock sonata_admin_content_actions_wrappers %}

                                                {% if _list_filters_actions is not empty %}
                                                    {{ _list_filters_actions|raw }}
                                                {% endif %}
                                            </div>
                                        </div>
                                    </nav>
                                {% endif %}
                            {% endblock sonata_page_content_nav %}
                        {% endblock sonata_page_content_header %}
                    </section>

                    <section class=\"content\">
                        {% block sonata_admin_content %}

                            {% block notice %}
                                {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}
                            {% endblock notice %}

                            {% if _preview is not empty %}
                                <div class=\"sonata-ba-preview\">{{ _preview|raw }}</div>
                            {% endif %}

                            {% if _content is not empty %}
                                <div class=\"sonata-ba-content\">{{ _content|raw }}</div>
                            {% endif %}

                            {% if _show is not empty %}
                                <div class=\"sonata-ba-show\">{{ _show|raw }}</div>
                            {% endif %}

                            {% if _form is not empty %}
                                <div class=\"sonata-ba-form\">{{ _form|raw }}</div>
                            {% endif %}

                            {% if _list_table is not empty or _list_filters is not empty %}
                                {% if _list_filters|trim %}
                                    <div class=\"row\">
                                        {{ _list_filters|raw }}
                                    </div>
                                {% endif %}

                                <div class=\"row\">
                                    {{ _list_table|raw }}
                                </div>

                            {% endif %}
                        {% endblock sonata_admin_content %}
                    </section>
                {% endblock sonata_page_content %}
            </div>
        {% endblock sonata_wrapper %}
    </div>

    {% if sonata_admin.adminPool.getOption('use_bootlint') %}
        {% block bootlint %}
            {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}
            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        {% endblock %}
    {% endif %}

    </body>
</html>
", "SonataAdminBundle::standard_layout.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/admin-bundle/Resources/views/standard_layout.html.twig");
    }
}
