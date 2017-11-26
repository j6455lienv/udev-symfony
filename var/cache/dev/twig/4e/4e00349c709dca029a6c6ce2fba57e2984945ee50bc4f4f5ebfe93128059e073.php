<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_f3a1b1668704238be3b5c94cd8cd5cf8417ee84d09767284e67ceea576dbbb2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_accca3ddb3e38c86fa3a2f6b994f26b24292ea067036773f29548f04580a6489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_accca3ddb3e38c86fa3a2f6b994f26b24292ea067036773f29548f04580a6489->enter($__internal_accca3ddb3e38c86fa3a2f6b994f26b24292ea067036773f29548f04580a6489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_924f63eb58c1d2c83594ab8d8378da28ed2466b6bbb0dae3a9d3e9b4cd2debce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_924f63eb58c1d2c83594ab8d8378da28ed2466b6bbb0dae3a9d3e9b4cd2debce->enter($__internal_924f63eb58c1d2c83594ab8d8378da28ed2466b6bbb0dae3a9d3e9b4cd2debce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_accca3ddb3e38c86fa3a2f6b994f26b24292ea067036773f29548f04580a6489->leave($__internal_accca3ddb3e38c86fa3a2f6b994f26b24292ea067036773f29548f04580a6489_prof);

        
        $__internal_924f63eb58c1d2c83594ab8d8378da28ed2466b6bbb0dae3a9d3e9b4cd2debce->leave($__internal_924f63eb58c1d2c83594ab8d8378da28ed2466b6bbb0dae3a9d3e9b4cd2debce_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_2b03edee53c3e1d098d52678872e4de5ee953265555ecdb7e157a4281e4c3ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b03edee53c3e1d098d52678872e4de5ee953265555ecdb7e157a4281e4c3ff8->enter($__internal_2b03edee53c3e1d098d52678872e4de5ee953265555ecdb7e157a4281e4c3ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_01a72d026e2812ea1e52de5fbaddc4a849495b70b2cf86fdfc45ccd988848d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01a72d026e2812ea1e52de5fbaddc4a849495b70b2cf86fdfc45ccd988848d9d->enter($__internal_01a72d026e2812ea1e52de5fbaddc4a849495b70b2cf86fdfc45ccd988848d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_01a72d026e2812ea1e52de5fbaddc4a849495b70b2cf86fdfc45ccd988848d9d->leave($__internal_01a72d026e2812ea1e52de5fbaddc4a849495b70b2cf86fdfc45ccd988848d9d_prof);

        
        $__internal_2b03edee53c3e1d098d52678872e4de5ee953265555ecdb7e157a4281e4c3ff8->leave($__internal_2b03edee53c3e1d098d52678872e4de5ee953265555ecdb7e157a4281e4c3ff8_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_2ed31c4a879f91fc75ffb299a90cc962bff79aa277a0620e109d3602e3d88744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ed31c4a879f91fc75ffb299a90cc962bff79aa277a0620e109d3602e3d88744->enter($__internal_2ed31c4a879f91fc75ffb299a90cc962bff79aa277a0620e109d3602e3d88744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_f4aedca820a7df3d0d63ad6cf61c479d92ce935caa397db068b2764c1c15ba33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4aedca820a7df3d0d63ad6cf61c479d92ce935caa397db068b2764c1c15ba33->enter($__internal_f4aedca820a7df3d0d63ad6cf61c479d92ce935caa397db068b2764c1c15ba33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f4aedca820a7df3d0d63ad6cf61c479d92ce935caa397db068b2764c1c15ba33->leave($__internal_f4aedca820a7df3d0d63ad6cf61c479d92ce935caa397db068b2764c1c15ba33_prof);

        
        $__internal_2ed31c4a879f91fc75ffb299a90cc962bff79aa277a0620e109d3602e3d88744->leave($__internal_2ed31c4a879f91fc75ffb299a90cc962bff79aa277a0620e109d3602e3d88744_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_a35b4b20af1d86e6312248d135ca2b064c3bcb6b8d1b60fadac6bf60a2fa393f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a35b4b20af1d86e6312248d135ca2b064c3bcb6b8d1b60fadac6bf60a2fa393f->enter($__internal_a35b4b20af1d86e6312248d135ca2b064c3bcb6b8d1b60fadac6bf60a2fa393f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_4aed0b81b127e22629b44f8949fb738eb34f6bcb110dad89b8520aae2a10d79c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aed0b81b127e22629b44f8949fb738eb34f6bcb110dad89b8520aae2a10d79c->enter($__internal_4aed0b81b127e22629b44f8949fb738eb34f6bcb110dad89b8520aae2a10d79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_4aed0b81b127e22629b44f8949fb738eb34f6bcb110dad89b8520aae2a10d79c->leave($__internal_4aed0b81b127e22629b44f8949fb738eb34f6bcb110dad89b8520aae2a10d79c_prof);

        
        $__internal_a35b4b20af1d86e6312248d135ca2b064c3bcb6b8d1b60fadac6bf60a2fa393f->leave($__internal_a35b4b20af1d86e6312248d135ca2b064c3bcb6b8d1b60fadac6bf60a2fa393f_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_2697c79dba67f767fee39e5ccf5b6f30b725e630efe6927b3695614ef063cef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2697c79dba67f767fee39e5ccf5b6f30b725e630efe6927b3695614ef063cef1->enter($__internal_2697c79dba67f767fee39e5ccf5b6f30b725e630efe6927b3695614ef063cef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_18924cde20afc984d6344cb60248d180a3778ae1da5148fe67e321e6aa0f4baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18924cde20afc984d6344cb60248d180a3778ae1da5148fe67e321e6aa0f4baa->enter($__internal_18924cde20afc984d6344cb60248d180a3778ae1da5148fe67e321e6aa0f4baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_18924cde20afc984d6344cb60248d180a3778ae1da5148fe67e321e6aa0f4baa->leave($__internal_18924cde20afc984d6344cb60248d180a3778ae1da5148fe67e321e6aa0f4baa_prof);

        
        $__internal_2697c79dba67f767fee39e5ccf5b6f30b725e630efe6927b3695614ef063cef1->leave($__internal_2697c79dba67f767fee39e5ccf5b6f30b725e630efe6927b3695614ef063cef1_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_1030bbe5ba3686a64c8a9729c72b53c85188b507577e64397f6924318e93ecdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1030bbe5ba3686a64c8a9729c72b53c85188b507577e64397f6924318e93ecdd->enter($__internal_1030bbe5ba3686a64c8a9729c72b53c85188b507577e64397f6924318e93ecdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_41bbae7db83097ca33a2116450cf645b697e69a8c787682d3c11d65d9c189e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41bbae7db83097ca33a2116450cf645b697e69a8c787682d3c11d65d9c189e18->enter($__internal_41bbae7db83097ca33a2116450cf645b697e69a8c787682d3c11d65d9c189e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_41bbae7db83097ca33a2116450cf645b697e69a8c787682d3c11d65d9c189e18->leave($__internal_41bbae7db83097ca33a2116450cf645b697e69a8c787682d3c11d65d9c189e18_prof);

        
        $__internal_1030bbe5ba3686a64c8a9729c72b53c85188b507577e64397f6924318e93ecdd->leave($__internal_1030bbe5ba3686a64c8a9729c72b53c85188b507577e64397f6924318e93ecdd_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_25a1be15c203371d2288325c56d2b67e6c91483a0eca3c0bd6f8f1c5a0f494e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25a1be15c203371d2288325c56d2b67e6c91483a0eca3c0bd6f8f1c5a0f494e6->enter($__internal_25a1be15c203371d2288325c56d2b67e6c91483a0eca3c0bd6f8f1c5a0f494e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_0651c0e6932967462f36ad393935eba9f3acd60f800d316faace4e1ac00faa36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0651c0e6932967462f36ad393935eba9f3acd60f800d316faace4e1ac00faa36->enter($__internal_0651c0e6932967462f36ad393935eba9f3acd60f800d316faace4e1ac00faa36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_0651c0e6932967462f36ad393935eba9f3acd60f800d316faace4e1ac00faa36->leave($__internal_0651c0e6932967462f36ad393935eba9f3acd60f800d316faace4e1ac00faa36_prof);

        
        $__internal_25a1be15c203371d2288325c56d2b67e6c91483a0eca3c0bd6f8f1c5a0f494e6->leave($__internal_25a1be15c203371d2288325c56d2b67e6c91483a0eca3c0bd6f8f1c5a0f494e6_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_fccd85ec4b752f0fc514cee6e56d4b1cf72080d57d841658b564aff41054f13e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fccd85ec4b752f0fc514cee6e56d4b1cf72080d57d841658b564aff41054f13e->enter($__internal_fccd85ec4b752f0fc514cee6e56d4b1cf72080d57d841658b564aff41054f13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_c056a9d1a08e31b22ae8ebd7bccb764248cca133d000267e9218be03a8db852c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c056a9d1a08e31b22ae8ebd7bccb764248cca133d000267e9218be03a8db852c->enter($__internal_c056a9d1a08e31b22ae8ebd7bccb764248cca133d000267e9218be03a8db852c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c056a9d1a08e31b22ae8ebd7bccb764248cca133d000267e9218be03a8db852c->leave($__internal_c056a9d1a08e31b22ae8ebd7bccb764248cca133d000267e9218be03a8db852c_prof);

        
        $__internal_fccd85ec4b752f0fc514cee6e56d4b1cf72080d57d841658b564aff41054f13e->leave($__internal_fccd85ec4b752f0fc514cee6e56d4b1cf72080d57d841658b564aff41054f13e_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_9b8c9ceb60b65236597f9222965a01e2a5b52838d146e96b708f8377d44c902c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b8c9ceb60b65236597f9222965a01e2a5b52838d146e96b708f8377d44c902c->enter($__internal_9b8c9ceb60b65236597f9222965a01e2a5b52838d146e96b708f8377d44c902c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_42bb3db9df34eedb7b5338f3d3df954a94c53e73d0f44d7bd79dae49dee5b5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42bb3db9df34eedb7b5338f3d3df954a94c53e73d0f44d7bd79dae49dee5b5f5->enter($__internal_42bb3db9df34eedb7b5338f3d3df954a94c53e73d0f44d7bd79dae49dee5b5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_42bb3db9df34eedb7b5338f3d3df954a94c53e73d0f44d7bd79dae49dee5b5f5->leave($__internal_42bb3db9df34eedb7b5338f3d3df954a94c53e73d0f44d7bd79dae49dee5b5f5_prof);

        
        $__internal_9b8c9ceb60b65236597f9222965a01e2a5b52838d146e96b708f8377d44c902c->leave($__internal_9b8c9ceb60b65236597f9222965a01e2a5b52838d146e96b708f8377d44c902c_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_6db18ff6d6f8c5f560012a7952a09a115014169c5b3910d1fb82ccbbffbb0812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db18ff6d6f8c5f560012a7952a09a115014169c5b3910d1fb82ccbbffbb0812->enter($__internal_6db18ff6d6f8c5f560012a7952a09a115014169c5b3910d1fb82ccbbffbb0812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_19a55d91d49a126dd5df8e9ded497a4f034973619652fa1818a5e911406c4a17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a55d91d49a126dd5df8e9ded497a4f034973619652fa1818a5e911406c4a17->enter($__internal_19a55d91d49a126dd5df8e9ded497a4f034973619652fa1818a5e911406c4a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_19a55d91d49a126dd5df8e9ded497a4f034973619652fa1818a5e911406c4a17->leave($__internal_19a55d91d49a126dd5df8e9ded497a4f034973619652fa1818a5e911406c4a17_prof);

        
        $__internal_6db18ff6d6f8c5f560012a7952a09a115014169c5b3910d1fb82ccbbffbb0812->leave($__internal_6db18ff6d6f8c5f560012a7952a09a115014169c5b3910d1fb82ccbbffbb0812_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_08952ed635ed08867a37d6ee6c68f64b250399d6b72acaeb2ba08012cbb8ae54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08952ed635ed08867a37d6ee6c68f64b250399d6b72acaeb2ba08012cbb8ae54->enter($__internal_08952ed635ed08867a37d6ee6c68f64b250399d6b72acaeb2ba08012cbb8ae54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_6cb03edb4ec11b6ccdd9b59abf7622a48896d7e32c57f0c203f40733665d38a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb03edb4ec11b6ccdd9b59abf7622a48896d7e32c57f0c203f40733665d38a8->enter($__internal_6cb03edb4ec11b6ccdd9b59abf7622a48896d7e32c57f0c203f40733665d38a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_6cb03edb4ec11b6ccdd9b59abf7622a48896d7e32c57f0c203f40733665d38a8->leave($__internal_6cb03edb4ec11b6ccdd9b59abf7622a48896d7e32c57f0c203f40733665d38a8_prof);

        
        $__internal_08952ed635ed08867a37d6ee6c68f64b250399d6b72acaeb2ba08012cbb8ae54->leave($__internal_08952ed635ed08867a37d6ee6c68f64b250399d6b72acaeb2ba08012cbb8ae54_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
