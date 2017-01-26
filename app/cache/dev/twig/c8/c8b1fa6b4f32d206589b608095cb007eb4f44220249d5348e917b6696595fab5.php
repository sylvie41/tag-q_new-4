<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_9b17665508324252b924f27ad02af1d27ddc10fe6a1b8e4cb2b3ae0d9d8e1487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_form_action_url' => array($this, 'block_sonata_form_action_url'),
            'sonata_form_attributes' => array($this, 'block_sonata_form_attributes'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_tab_content' => array($this, 'block_sonata_tab_content'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
            'sonata_form_actions' => array($this, 'block_sonata_form_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7aed4baa3b36c89ddeb6bcc2f1d27dc36822de2a60299b0f74ed7fbe68a458d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aed4baa3b36c89ddeb6bcc2f1d27dc36822de2a60299b0f74ed7fbe68a458d8->enter($__internal_7aed4baa3b36c89ddeb6bcc2f1d27dc36822de2a60299b0f74ed7fbe68a458d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form.html.twig"));

        // line 1
        $this->displayBlock('form', $context, $blocks);
        
        $__internal_7aed4baa3b36c89ddeb6bcc2f1d27dc36822de2a60299b0f74ed7fbe68a458d8->leave($__internal_7aed4baa3b36c89ddeb6bcc2f1d27dc36822de2a60299b0f74ed7fbe68a458d8_prof);

    }

    public function block_form($context, array $blocks = array())
    {
        $__internal_0e5bad2485d3529e5f14f4853e3c75121df2155fa3c37c53e279f85df2cdad86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5bad2485d3529e5f14f4853e3c75121df2155fa3c37c53e279f85df2cdad86->enter($__internal_0e5bad2485d3529e5f14f4853e3c75121df2155fa3c37c53e279f85df2cdad86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 2
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.top", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")), "object" => ($context["object"] ?? $this->getContext($context, "object")))));
        echo "

    ";
        // line 4
        $context["url"] = (( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) ? ("edit") : ("create"));
        // line 5
        echo "
    ";
        // line 6
        if ( !$this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => ($context["url"] ?? $this->getContext($context, "url"))), "method")) {
            // line 7
            echo "        <div>
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 11
            echo "        <form
              ";
            // line 12
            if (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "form_type"), "method") == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 13
            echo "              role=\"form\"
              action=\"";
            // line 14
            $this->displayBlock('sonata_form_action_url', $context, $blocks);
            echo "\"
              ";
            // line 15
            if ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "multipart", array())) {
                echo " enctype=\"multipart/form-data\"";
            }
            // line 16
            echo "              method=\"POST\"
              ";
            // line 17
            if ( !$this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "html5_validate"), "method")) {
                echo "novalidate=\"novalidate\"";
            }
            // line 18
            echo "              ";
            $this->displayBlock('sonata_form_attributes', $context, $blocks);
            // line 19
            echo "              >

            ";
            // line 21
            echo twig_include($this->env, $context, "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig");
            echo "

            ";
            // line 23
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 26
            echo "
            ";
            // line 27
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 59
            echo "
            ";
            // line 60
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 63
            echo "
            ";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
            echo "

            ";
            // line 66
            $this->displayBlock('formactions', $context, $blocks);
            // line 110
            echo "        </form>
    ";
        }
        // line 112
        echo "
    ";
        // line 113
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")), "object" => ($context["object"] ?? $this->getContext($context, "object")))));
        echo "

";
        
        $__internal_0e5bad2485d3529e5f14f4853e3c75121df2155fa3c37c53e279f85df2cdad86->leave($__internal_0e5bad2485d3529e5f14f4853e3c75121df2155fa3c37c53e279f85df2cdad86_prof);

    }

    // line 14
    public function block_sonata_form_action_url($context, array $blocks = array())
    {
        $__internal_0467f946cf1d79edc41c808ae893a785fa5eb097fc8267a3e13bea90f56c62e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0467f946cf1d79edc41c808ae893a785fa5eb097fc8267a3e13bea90f56c62e4->enter($__internal_0467f946cf1d79edc41c808ae893a785fa5eb097fc8267a3e13bea90f56c62e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_action_url"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => ($context["url"] ?? $this->getContext($context, "url")), 1 => array("id" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "uniqid" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "subclass" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
        
        $__internal_0467f946cf1d79edc41c808ae893a785fa5eb097fc8267a3e13bea90f56c62e4->leave($__internal_0467f946cf1d79edc41c808ae893a785fa5eb097fc8267a3e13bea90f56c62e4_prof);

    }

    // line 18
    public function block_sonata_form_attributes($context, array $blocks = array())
    {
        $__internal_5ea624482f258f05b1fe700655b030a9ca8041ebdd6c0b6c472eb3c36561007a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea624482f258f05b1fe700655b030a9ca8041ebdd6c0b6c472eb3c36561007a->enter($__internal_5ea624482f258f05b1fe700655b030a9ca8041ebdd6c0b6c472eb3c36561007a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_attributes"));

        
        $__internal_5ea624482f258f05b1fe700655b030a9ca8041ebdd6c0b6c472eb3c36561007a->leave($__internal_5ea624482f258f05b1fe700655b030a9ca8041ebdd6c0b6c472eb3c36561007a_prof);

    }

    // line 23
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        $__internal_1086db50581a652d0f85eaf3f36a27e0a79c7ea03a83f70d135711f83c753afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1086db50581a652d0f85eaf3f36a27e0a79c7ea03a83f70d135711f83c753afc->enter($__internal_1086db50581a652d0f85eaf3f36a27e0a79c7ea03a83f70d135711f83c753afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        // line 24
        echo "                <div class=\"row\">
            ";
        
        $__internal_1086db50581a652d0f85eaf3f36a27e0a79c7ea03a83f70d135711f83c753afc->leave($__internal_1086db50581a652d0f85eaf3f36a27e0a79c7ea03a83f70d135711f83c753afc_prof);

    }

    // line 27
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        $__internal_bb2bfa67f0d42a733249949ed7964ad35a29b0c4d37877805c7221e0f8c4c30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb2bfa67f0d42a733249949ed7964ad35a29b0c4d37877805c7221e0f8c4c30d->enter($__internal_bb2bfa67f0d42a733249949ed7964ad35a29b0c4d37877805c7221e0f8c4c30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        // line 28
        echo "                ";
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formtabs", array())) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formtabs", array())) > 1));
        // line 29
        echo "
                <div class=\"col-md-12\">
                    ";
        // line 31
        if (($context["has_tab"] ?? $this->getContext($context, "has_tab"))) {
            // line 32
            echo "                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formtabs", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["form_tab"]) {
                // line 35
                echo "                                    <li";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    echo " class=\"active\"";
                }
                echo "><a href=\"#tab_";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\"><i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), (($this->getAttribute($context["form_tab"], "translation_domain", array())) ? ($this->getAttribute($context["form_tab"], "translation_domain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                echo "</a></li>
                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                            </ul>
                            <div class=\"tab-content\">
                                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formtabs", array()));
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
            foreach ($context['_seq'] as $context["code"] => $context["form_tab"]) {
                // line 40
                echo "                                    <div class=\"tab-pane fade";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\" id=\"tab_";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                ";
                // line 43
                if (($this->getAttribute($context["form_tab"], "description", array()) != false)) {
                    // line 44
                    echo "                                                    <p>";
                    echo $this->getAttribute($context["form_tab"], "description", array());
                    echo "</p>
                                                ";
                }
                // line 46
                echo "
                                                ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute(($context["form_helper"] ?? $this->getContext($context, "form_helper")), "render_groups", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["form"] ?? $this->getContext($context, "form")), 2 => $this->getAttribute($context["form_tab"], "groups", array(), "array"), 3 => ($context["has_tab"] ?? $this->getContext($context, "has_tab"))), "method"), "html", null, true);
                echo "
                                            </div>
                                        </div>
                                    </div>
                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                            </div>
                        </div>
                    ";
        } else {
            // line 55
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["form_helper"] ?? $this->getContext($context, "form_helper")), "render_groups", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["form"] ?? $this->getContext($context, "form")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formtabs", array()), "default", array(), "array"), "groups", array()), 3 => ($context["has_tab"] ?? $this->getContext($context, "has_tab"))), "method"), "html", null, true);
            echo "
                    ";
        }
        // line 57
        echo "                </div>
            ";
        
        $__internal_bb2bfa67f0d42a733249949ed7964ad35a29b0c4d37877805c7221e0f8c4c30d->leave($__internal_bb2bfa67f0d42a733249949ed7964ad35a29b0c4d37877805c7221e0f8c4c30d_prof);

    }

    // line 60
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        $__internal_f6d1947a539efaf6caf4221beff9508e1ef542872634c9fedd792722ba032266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d1947a539efaf6caf4221beff9508e1ef542872634c9fedd792722ba032266->enter($__internal_f6d1947a539efaf6caf4221beff9508e1ef542872634c9fedd792722ba032266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        // line 61
        echo "                </div>
            ";
        
        $__internal_f6d1947a539efaf6caf4221beff9508e1ef542872634c9fedd792722ba032266->leave($__internal_f6d1947a539efaf6caf4221beff9508e1ef542872634c9fedd792722ba032266_prof);

    }

    // line 66
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_5bab4e6939ecde91ba91597852ca706f7d0d27c2a26f67c93ebc919c44d7d535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bab4e6939ecde91ba91597852ca706f7d0d27c2a26f67c93ebc919c44d7d535->enter($__internal_5bab4e6939ecde91ba91597852ca706f7d0d27c2a26f67c93ebc919c44d7d535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 67
        echo "                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                ";
        // line 68
        $this->displayBlock('sonata_form_actions', $context, $blocks);
        // line 108
        echo "                </div>
            ";
        
        $__internal_5bab4e6939ecde91ba91597852ca706f7d0d27c2a26f67c93ebc919c44d7d535->leave($__internal_5bab4e6939ecde91ba91597852ca706f7d0d27c2a26f67c93ebc919c44d7d535_prof);

    }

    // line 68
    public function block_sonata_form_actions($context, array $blocks = array())
    {
        $__internal_367a7a1df120581ed407ecc6bf537b59625f4e9b557d6b35e4412b95eaaf206f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_367a7a1df120581ed407ecc6bf537b59625f4e9b557d6b35e4412b95eaaf206f->enter($__internal_367a7a1df120581ed407ecc6bf537b59625f4e9b557d6b35e4412b95eaaf206f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_actions"));

        // line 69
        echo "                    ";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isxmlhttprequest", array())) {
            // line 70
            echo "                        ";
            if ( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
                // line 71
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            } else {
                // line 73
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 75
            echo "                    ";
        } else {
            // line 76
            echo "                        ";
            if ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "supportsPreviewMode", array())) {
                // line 77
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                ";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 82
            echo "                        ";
            if ( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
                // line 83
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 85
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                    // line 86
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 88
                echo "
                            ";
                // line 89
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasroute", array(0 => "delete"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "DELETE", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
                    // line 90
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 93
                echo "
                            ";
                // line 94
                if ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasroute", array(0 => "acl"), "method")) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "MASTER", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
                    // line 95
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 97
                echo "                        ";
            } else {
                // line 98
                echo "                            ";
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasroute", array(0 => "edit"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT"), "method"))) {
                    // line 99
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 101
                echo "                            ";
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                    // line 102
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 104
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 106
            echo "                    ";
        }
        // line 107
        echo "                ";
        
        $__internal_367a7a1df120581ed407ecc6bf537b59625f4e9b557d6b35e4412b95eaaf206f->leave($__internal_367a7a1df120581ed407ecc6bf537b59625f4e9b557d6b35e4412b95eaaf206f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  471 => 107,  468 => 106,  462 => 104,  456 => 102,  453 => 101,  447 => 99,  444 => 98,  441 => 97,  433 => 95,  431 => 94,  428 => 93,  421 => 91,  416 => 90,  414 => 89,  411 => 88,  405 => 86,  403 => 85,  397 => 83,  394 => 82,  388 => 79,  384 => 77,  381 => 76,  378 => 75,  372 => 73,  366 => 71,  363 => 70,  360 => 69,  354 => 68,  346 => 108,  344 => 68,  341 => 67,  335 => 66,  327 => 61,  321 => 60,  313 => 57,  307 => 55,  302 => 52,  283 => 47,  280 => 46,  274 => 44,  272 => 43,  259 => 40,  242 => 39,  238 => 37,  213 => 35,  196 => 34,  192 => 32,  190 => 31,  186 => 29,  183 => 28,  177 => 27,  169 => 24,  163 => 23,  152 => 18,  140 => 14,  130 => 113,  127 => 112,  123 => 110,  121 => 66,  116 => 64,  113 => 63,  111 => 60,  108 => 59,  106 => 27,  103 => 26,  101 => 23,  96 => 21,  92 => 19,  89 => 18,  85 => 17,  82 => 16,  78 => 15,  74 => 14,  71 => 13,  67 => 12,  64 => 11,  58 => 8,  55 => 7,  53 => 6,  50 => 5,  48 => 4,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block form %}
    {{ sonata_block_render_event('sonata.admin.edit.form.top', { 'admin': admin, 'object': object }) }}

    {% set url = admin.id(object) is not null ? 'edit' : 'create' %}

    {% if not admin.hasRoute(url)%}
        <div>
            {{ \"form_not_available\"|trans({}, \"SonataAdminBundle\") }}
        </div>
    {% else %}
        <form
              {% if sonata_admin.adminPool.getOption('form_type') == 'horizontal' %}class=\"form-horizontal\"{% endif %}
              role=\"form\"
              action=\"{% block sonata_form_action_url %}{{ admin.generateUrl(url, {'id': admin.id(object), 'uniqid': admin.uniqid, 'subclass': app.request.get('subclass')}) }}{% endblock %}\"
              {% if form.vars.multipart %} enctype=\"multipart/form-data\"{% endif %}
              method=\"POST\"
              {% if not sonata_admin.adminPool.getOption('html5_validate') %}novalidate=\"novalidate\"{% endif %}
              {% block sonata_form_attributes %}{% endblock %}
              >

            {{ include('SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig') }}

            {% block sonata_pre_fieldsets %}
                <div class=\"row\">
            {% endblock %}

            {% block sonata_tab_content %}
                {% set has_tab = ((admin.formtabs|length == 1 and admin.formtabs|keys[0] != 'default') or admin.formtabs|length > 1 ) %}

                <div class=\"col-md-12\">
                    {% if has_tab %}
                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                {% for name, form_tab in admin.formtabs %}
                                    <li{% if loop.index == 1 %} class=\"active\"{% endif %}><a href=\"#tab_{{ admin.uniqid }}_{{ loop.index }}\" data-toggle=\"tab\"><i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> {{ name|trans({}, form_tab.translation_domain ?: admin.translationDomain) }}</a></li>
                                {% endfor %}
                            </ul>
                            <div class=\"tab-content\">
                                {% for code, form_tab in admin.formtabs %}
                                    <div class=\"tab-pane fade{% if loop.first %} in active{% endif %}\" id=\"tab_{{ admin.uniqid }}_{{ loop.index }}\">
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                {% if form_tab.description != false %}
                                                    <p>{{ form_tab.description|raw }}</p>
                                                {% endif %}

                                                {{ form_helper.render_groups(admin, form, form_tab['groups'], has_tab) }}
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    {% else %}
                        {{ form_helper.render_groups(admin, form, admin.formtabs['default'].groups, has_tab) }}
                    {% endif %}
                </div>
            {% endblock %}

            {% block sonata_post_fieldsets %}
                </div>
            {% endblock %}

            {{ form_rest(form) }}

            {% block formactions %}
                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                {% block sonata_form_actions %}
                    {% if app.request.isxmlhttprequest %}
                        {% if admin.id(object) is not null %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_update'|trans({}, 'SonataAdminBundle') }}</button>
                        {% else %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {{ 'btn_create'|trans({}, 'SonataAdminBundle') }}</button>
                        {% endif %}
                    {% else %}
                        {% if admin.supportsPreviewMode %}
                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                {{ 'btn_preview'|trans({}, 'SonataAdminBundle') }}
                            </button>
                        {% endif %}
                        {% if admin.id(object) is not null %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_update_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>

                            {% if admin.hasroute('list') and admin.isGranted('LIST') %}
                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'btn_update_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}

                            {% if admin.hasroute('delete') and admin.isGranted('DELETE', object) %}
                                {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}
                                <a class=\"btn btn-danger\" href=\"{{ admin.generateObjectUrl('delete', object) }}\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> {{ 'link_delete'|trans({}, 'SonataAdminBundle') }}</a>
                            {% endif %}

                            {% if admin.isAclEnabled() and admin.hasroute('acl') and admin.isGranted('MASTER', object) %}
                                <a class=\"btn btn-info\" href=\"{{ admin.generateObjectUrl('acl', object) }}\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> {{ 'link_edit_acl'|trans({}, 'SonataAdminBundle') }}</a>
                            {% endif %}
                        {% else %}
                            {% if admin.hasroute('edit') and admin.isGranted('EDIT') %}
                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_create_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}
                            {% if admin.hasroute('list') and admin.isGranted('LIST') %}
                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'btn_create_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}
                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {{ 'btn_create_and_create_a_new_one'|trans({}, 'SonataAdminBundle') }}</button>
                        {% endif %}
                    {% endif %}
                {% endblock %}
                </div>
            {% endblock formactions %}
        </form>
    {% endif%}

    {{ sonata_block_render_event('sonata.admin.edit.form.bottom', { 'admin': admin, 'object': object }) }}

{% endblock %}
", "SonataAdminBundle:CRUD:base_edit_form.html.twig", "/var/www/html/tag-q_new-4/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit_form.html.twig");
    }
}
