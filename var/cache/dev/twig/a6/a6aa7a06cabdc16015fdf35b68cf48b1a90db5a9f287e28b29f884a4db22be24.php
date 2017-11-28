<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_47596c73a26ec6dbd8a370d719ae89f607bd0b9ca1b6b21942440250f581fdcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e9b73367232f063441c75003a5fcf6dea41b62e276c1abebe924ce560d593c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e9b73367232f063441c75003a5fcf6dea41b62e276c1abebe924ce560d593c9->enter($__internal_9e9b73367232f063441c75003a5fcf6dea41b62e276c1abebe924ce560d593c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_cb921c1622c2b26e284fa25c1886eaea635b3567095d0ffd845804e44984105c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb921c1622c2b26e284fa25c1886eaea635b3567095d0ffd845804e44984105c->enter($__internal_cb921c1622c2b26e284fa25c1886eaea635b3567095d0ffd845804e44984105c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('radio_label', $context, $blocks);
        // line 199
        echo "
";
        // line 200
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 224
        echo "
";
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('form_row', $context, $blocks);
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('button_row', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('choice_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('date_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('time_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('radio_row', $context, $blocks);
        // line 274
        echo "
";
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_9e9b73367232f063441c75003a5fcf6dea41b62e276c1abebe924ce560d593c9->leave($__internal_9e9b73367232f063441c75003a5fcf6dea41b62e276c1abebe924ce560d593c9_prof);

        
        $__internal_cb921c1622c2b26e284fa25c1886eaea635b3567095d0ffd845804e44984105c->leave($__internal_cb921c1622c2b26e284fa25c1886eaea635b3567095d0ffd845804e44984105c_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_6ce52f120c6c850f5e4e91d910fd74b5b393691e118a3c5f2e37a21da322b66b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce52f120c6c850f5e4e91d910fd74b5b393691e118a3c5f2e37a21da322b66b->enter($__internal_6ce52f120c6c850f5e4e91d910fd74b5b393691e118a3c5f2e37a21da322b66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_63fcbf2a3bf18d540c23c22627b108ae5615a5e0bc91a408061a7e5a206b9662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63fcbf2a3bf18d540c23c22627b108ae5615a5e0bc91a408061a7e5a206b9662->enter($__internal_63fcbf2a3bf18d540c23c22627b108ae5615a5e0bc91a408061a7e5a206b9662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_63fcbf2a3bf18d540c23c22627b108ae5615a5e0bc91a408061a7e5a206b9662->leave($__internal_63fcbf2a3bf18d540c23c22627b108ae5615a5e0bc91a408061a7e5a206b9662_prof);

        
        $__internal_6ce52f120c6c850f5e4e91d910fd74b5b393691e118a3c5f2e37a21da322b66b->leave($__internal_6ce52f120c6c850f5e4e91d910fd74b5b393691e118a3c5f2e37a21da322b66b_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_a71b66983636ab11b1c24394c952b7a3932dffeba4e33a51acf700d8be87f1dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a71b66983636ab11b1c24394c952b7a3932dffeba4e33a51acf700d8be87f1dc->enter($__internal_a71b66983636ab11b1c24394c952b7a3932dffeba4e33a51acf700d8be87f1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_ed49b6c031326628ed7fcec83aec2d6d6ead6e1807b6af1e065e0aa5e6136c7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed49b6c031326628ed7fcec83aec2d6d6ead6e1807b6af1e065e0aa5e6136c7b->enter($__internal_ed49b6c031326628ed7fcec83aec2d6d6ead6e1807b6af1e065e0aa5e6136c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_ed49b6c031326628ed7fcec83aec2d6d6ead6e1807b6af1e065e0aa5e6136c7b->leave($__internal_ed49b6c031326628ed7fcec83aec2d6d6ead6e1807b6af1e065e0aa5e6136c7b_prof);

        
        $__internal_a71b66983636ab11b1c24394c952b7a3932dffeba4e33a51acf700d8be87f1dc->leave($__internal_a71b66983636ab11b1c24394c952b7a3932dffeba4e33a51acf700d8be87f1dc_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_e0d4c8393c70e37590ad33ca72cd5a42dea339dcf87eec776809be6cb1fe2c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0d4c8393c70e37590ad33ca72cd5a42dea339dcf87eec776809be6cb1fe2c70->enter($__internal_e0d4c8393c70e37590ad33ca72cd5a42dea339dcf87eec776809be6cb1fe2c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_3a6b5631abffd529062d8dbae1b8240809ce9848582bf4dc709255be7382d9e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a6b5631abffd529062d8dbae1b8240809ce9848582bf4dc709255be7382d9e3->enter($__internal_3a6b5631abffd529062d8dbae1b8240809ce9848582bf4dc709255be7382d9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_3a6b5631abffd529062d8dbae1b8240809ce9848582bf4dc709255be7382d9e3->leave($__internal_3a6b5631abffd529062d8dbae1b8240809ce9848582bf4dc709255be7382d9e3_prof);

        
        $__internal_e0d4c8393c70e37590ad33ca72cd5a42dea339dcf87eec776809be6cb1fe2c70->leave($__internal_e0d4c8393c70e37590ad33ca72cd5a42dea339dcf87eec776809be6cb1fe2c70_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_af007b5a903938a8d6ba47b92e994aaeb244ec0f9e9b5fd7c01fff55cd00ff69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af007b5a903938a8d6ba47b92e994aaeb244ec0f9e9b5fd7c01fff55cd00ff69->enter($__internal_af007b5a903938a8d6ba47b92e994aaeb244ec0f9e9b5fd7c01fff55cd00ff69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_9710f0ad67159ae8ced33da01ca211ecbd09ef96b702812e53378ce62e4e6247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9710f0ad67159ae8ced33da01ca211ecbd09ef96b702812e53378ce62e4e6247->enter($__internal_9710f0ad67159ae8ced33da01ca211ecbd09ef96b702812e53378ce62e4e6247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_370cc362ad43c61624b3dc72deea8e5f88ef69bcc812bc744c014ca846bed5a0 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_623769eeda3988c8ea23760828d26001f02d699f922318c21b7ec907cbeb39c7 = "{{") && ('' === $__internal_623769eeda3988c8ea23760828d26001f02d699f922318c21b7ec907cbeb39c7 || 0 === strpos($__internal_370cc362ad43c61624b3dc72deea8e5f88ef69bcc812bc744c014ca846bed5a0, $__internal_623769eeda3988c8ea23760828d26001f02d699f922318c21b7ec907cbeb39c7)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_9710f0ad67159ae8ced33da01ca211ecbd09ef96b702812e53378ce62e4e6247->leave($__internal_9710f0ad67159ae8ced33da01ca211ecbd09ef96b702812e53378ce62e4e6247_prof);

        
        $__internal_af007b5a903938a8d6ba47b92e994aaeb244ec0f9e9b5fd7c01fff55cd00ff69->leave($__internal_af007b5a903938a8d6ba47b92e994aaeb244ec0f9e9b5fd7c01fff55cd00ff69_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_4bc83e94519648eb326f2a7591c37f339b72c70f2001da2cef3a83cacaf9cdb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bc83e94519648eb326f2a7591c37f339b72c70f2001da2cef3a83cacaf9cdb1->enter($__internal_4bc83e94519648eb326f2a7591c37f339b72c70f2001da2cef3a83cacaf9cdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_d9fe350e8bbfd1bae35f28ee321db7341247c3df22449fc8bb230dcf30e2def9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9fe350e8bbfd1bae35f28ee321db7341247c3df22449fc8bb230dcf30e2def9->enter($__internal_d9fe350e8bbfd1bae35f28ee321db7341247c3df22449fc8bb230dcf30e2def9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_d9fe350e8bbfd1bae35f28ee321db7341247c3df22449fc8bb230dcf30e2def9->leave($__internal_d9fe350e8bbfd1bae35f28ee321db7341247c3df22449fc8bb230dcf30e2def9_prof);

        
        $__internal_4bc83e94519648eb326f2a7591c37f339b72c70f2001da2cef3a83cacaf9cdb1->leave($__internal_4bc83e94519648eb326f2a7591c37f339b72c70f2001da2cef3a83cacaf9cdb1_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_09825206c1da360ba94f83adebcb73a8c2a15c4fc6221e828da69c45a6f67948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09825206c1da360ba94f83adebcb73a8c2a15c4fc6221e828da69c45a6f67948->enter($__internal_09825206c1da360ba94f83adebcb73a8c2a15c4fc6221e828da69c45a6f67948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_21cd6c178eb3a39c68a08cc132024e20b0781fff381cd9179f67e6cb8866d145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21cd6c178eb3a39c68a08cc132024e20b0781fff381cd9179f67e6cb8866d145->enter($__internal_21cd6c178eb3a39c68a08cc132024e20b0781fff381cd9179f67e6cb8866d145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_21cd6c178eb3a39c68a08cc132024e20b0781fff381cd9179f67e6cb8866d145->leave($__internal_21cd6c178eb3a39c68a08cc132024e20b0781fff381cd9179f67e6cb8866d145_prof);

        
        $__internal_09825206c1da360ba94f83adebcb73a8c2a15c4fc6221e828da69c45a6f67948->leave($__internal_09825206c1da360ba94f83adebcb73a8c2a15c4fc6221e828da69c45a6f67948_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_5a196dd6496f1e834f48ab8ee41a0e2ba2b358a399d7a1912c4dde18f4f7327c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a196dd6496f1e834f48ab8ee41a0e2ba2b358a399d7a1912c4dde18f4f7327c->enter($__internal_5a196dd6496f1e834f48ab8ee41a0e2ba2b358a399d7a1912c4dde18f4f7327c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_a4f2982d8005ba23176195febbad3b13d1382ec9e7ae5fef437f51030abc99d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f2982d8005ba23176195febbad3b13d1382ec9e7ae5fef437f51030abc99d8->enter($__internal_a4f2982d8005ba23176195febbad3b13d1382ec9e7ae5fef437f51030abc99d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_a4f2982d8005ba23176195febbad3b13d1382ec9e7ae5fef437f51030abc99d8->leave($__internal_a4f2982d8005ba23176195febbad3b13d1382ec9e7ae5fef437f51030abc99d8_prof);

        
        $__internal_5a196dd6496f1e834f48ab8ee41a0e2ba2b358a399d7a1912c4dde18f4f7327c->leave($__internal_5a196dd6496f1e834f48ab8ee41a0e2ba2b358a399d7a1912c4dde18f4f7327c_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_ef9def98e7b769a923170f744e9110b6a950e7518cd81aa940fba69f39706973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef9def98e7b769a923170f744e9110b6a950e7518cd81aa940fba69f39706973->enter($__internal_ef9def98e7b769a923170f744e9110b6a950e7518cd81aa940fba69f39706973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_3fd9a51a6aa620738fb57374267f0fdd934c7462dc207d84b5bea55d3d7fe11f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd9a51a6aa620738fb57374267f0fdd934c7462dc207d84b5bea55d3d7fe11f->enter($__internal_3fd9a51a6aa620738fb57374267f0fdd934c7462dc207d84b5bea55d3d7fe11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_3fd9a51a6aa620738fb57374267f0fdd934c7462dc207d84b5bea55d3d7fe11f->leave($__internal_3fd9a51a6aa620738fb57374267f0fdd934c7462dc207d84b5bea55d3d7fe11f_prof);

        
        $__internal_ef9def98e7b769a923170f744e9110b6a950e7518cd81aa940fba69f39706973->leave($__internal_ef9def98e7b769a923170f744e9110b6a950e7518cd81aa940fba69f39706973_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_ea57f724e00a6324c5a32d548b9a2366cfa165974dbe609abefd9e87fbac424c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea57f724e00a6324c5a32d548b9a2366cfa165974dbe609abefd9e87fbac424c->enter($__internal_ea57f724e00a6324c5a32d548b9a2366cfa165974dbe609abefd9e87fbac424c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_f10c0af7180b3ab76bf51c803cd3ea72898d183fb5f2ffd6beabd15b9a9ba1c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10c0af7180b3ab76bf51c803cd3ea72898d183fb5f2ffd6beabd15b9a9ba1c5->enter($__internal_f10c0af7180b3ab76bf51c803cd3ea72898d183fb5f2ffd6beabd15b9a9ba1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_f10c0af7180b3ab76bf51c803cd3ea72898d183fb5f2ffd6beabd15b9a9ba1c5->leave($__internal_f10c0af7180b3ab76bf51c803cd3ea72898d183fb5f2ffd6beabd15b9a9ba1c5_prof);

        
        $__internal_ea57f724e00a6324c5a32d548b9a2366cfa165974dbe609abefd9e87fbac424c->leave($__internal_ea57f724e00a6324c5a32d548b9a2366cfa165974dbe609abefd9e87fbac424c_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_bcd3b57f6d64cb1f57b6fce754768a8397ae9418aa7be8692f0dffb809a26131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcd3b57f6d64cb1f57b6fce754768a8397ae9418aa7be8692f0dffb809a26131->enter($__internal_bcd3b57f6d64cb1f57b6fce754768a8397ae9418aa7be8692f0dffb809a26131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_c093f443e36e923de71757c4735d032e926c92ee6200b72411e2ea27424e3478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c093f443e36e923de71757c4735d032e926c92ee6200b72411e2ea27424e3478->enter($__internal_c093f443e36e923de71757c4735d032e926c92ee6200b72411e2ea27424e3478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_c093f443e36e923de71757c4735d032e926c92ee6200b72411e2ea27424e3478->leave($__internal_c093f443e36e923de71757c4735d032e926c92ee6200b72411e2ea27424e3478_prof);

        
        $__internal_bcd3b57f6d64cb1f57b6fce754768a8397ae9418aa7be8692f0dffb809a26131->leave($__internal_bcd3b57f6d64cb1f57b6fce754768a8397ae9418aa7be8692f0dffb809a26131_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_31e11ece8a03586f3e289ddac2849b85c5b4afe74b2ae14cf605235d707e00e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31e11ece8a03586f3e289ddac2849b85c5b4afe74b2ae14cf605235d707e00e2->enter($__internal_31e11ece8a03586f3e289ddac2849b85c5b4afe74b2ae14cf605235d707e00e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_bc4b63affed4c05a4cce59f0dbc9700712b745b11341e94db2b67195a1277790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4b63affed4c05a4cce59f0dbc9700712b745b11341e94db2b67195a1277790->enter($__internal_bc4b63affed4c05a4cce59f0dbc9700712b745b11341e94db2b67195a1277790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_bc4b63affed4c05a4cce59f0dbc9700712b745b11341e94db2b67195a1277790->leave($__internal_bc4b63affed4c05a4cce59f0dbc9700712b745b11341e94db2b67195a1277790_prof);

        
        $__internal_31e11ece8a03586f3e289ddac2849b85c5b4afe74b2ae14cf605235d707e00e2->leave($__internal_31e11ece8a03586f3e289ddac2849b85c5b4afe74b2ae14cf605235d707e00e2_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_5c7b07e7543ab7334778ca00624acf828f1bd918e7a9450f8d31b02b2cb99a18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c7b07e7543ab7334778ca00624acf828f1bd918e7a9450f8d31b02b2cb99a18->enter($__internal_5c7b07e7543ab7334778ca00624acf828f1bd918e7a9450f8d31b02b2cb99a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_7fc127d8f62ff7c924a688f35ddf48e88209ac5edd40a2fd4595548daac97860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fc127d8f62ff7c924a688f35ddf48e88209ac5edd40a2fd4595548daac97860->enter($__internal_7fc127d8f62ff7c924a688f35ddf48e88209ac5edd40a2fd4595548daac97860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_7fc127d8f62ff7c924a688f35ddf48e88209ac5edd40a2fd4595548daac97860->leave($__internal_7fc127d8f62ff7c924a688f35ddf48e88209ac5edd40a2fd4595548daac97860_prof);

        
        $__internal_5c7b07e7543ab7334778ca00624acf828f1bd918e7a9450f8d31b02b2cb99a18->leave($__internal_5c7b07e7543ab7334778ca00624acf828f1bd918e7a9450f8d31b02b2cb99a18_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_933ecb034476e51d6f262516f277a6807a7af0a602b5c2bfdd452e05168766da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_933ecb034476e51d6f262516f277a6807a7af0a602b5c2bfdd452e05168766da->enter($__internal_933ecb034476e51d6f262516f277a6807a7af0a602b5c2bfdd452e05168766da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_e938b6b9043ea48fbbe9e274060549ef569395d44b2145fc4e450de69379efdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e938b6b9043ea48fbbe9e274060549ef569395d44b2145fc4e450de69379efdd->enter($__internal_e938b6b9043ea48fbbe9e274060549ef569395d44b2145fc4e450de69379efdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_e938b6b9043ea48fbbe9e274060549ef569395d44b2145fc4e450de69379efdd->leave($__internal_e938b6b9043ea48fbbe9e274060549ef569395d44b2145fc4e450de69379efdd_prof);

        
        $__internal_933ecb034476e51d6f262516f277a6807a7af0a602b5c2bfdd452e05168766da->leave($__internal_933ecb034476e51d6f262516f277a6807a7af0a602b5c2bfdd452e05168766da_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b6fc7e8a4282ec1fa438a756965a4627c65e25a6b33a137644b20b1c706552b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6fc7e8a4282ec1fa438a756965a4627c65e25a6b33a137644b20b1c706552b6->enter($__internal_b6fc7e8a4282ec1fa438a756965a4627c65e25a6b33a137644b20b1c706552b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6f9d8f61e999e020c29525bf41f21a143c81c2725f1df5534c570bb1b3dd6172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f9d8f61e999e020c29525bf41f21a143c81c2725f1df5534c570bb1b3dd6172->enter($__internal_6f9d8f61e999e020c29525bf41f21a143c81c2725f1df5534c570bb1b3dd6172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_6f9d8f61e999e020c29525bf41f21a143c81c2725f1df5534c570bb1b3dd6172->leave($__internal_6f9d8f61e999e020c29525bf41f21a143c81c2725f1df5534c570bb1b3dd6172_prof);

        
        $__internal_b6fc7e8a4282ec1fa438a756965a4627c65e25a6b33a137644b20b1c706552b6->leave($__internal_b6fc7e8a4282ec1fa438a756965a4627c65e25a6b33a137644b20b1c706552b6_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_9f804d5ebc41eee3b69bf11dfbdb47085b3f055204e77c58ec3295bd7f56124b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f804d5ebc41eee3b69bf11dfbdb47085b3f055204e77c58ec3295bd7f56124b->enter($__internal_9f804d5ebc41eee3b69bf11dfbdb47085b3f055204e77c58ec3295bd7f56124b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_6e560258c53430782e4cd69c99e4abe1e76cb12bdfc1a91f2532c903ccad0806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e560258c53430782e4cd69c99e4abe1e76cb12bdfc1a91f2532c903ccad0806->enter($__internal_6e560258c53430782e4cd69c99e4abe1e76cb12bdfc1a91f2532c903ccad0806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_6e560258c53430782e4cd69c99e4abe1e76cb12bdfc1a91f2532c903ccad0806->leave($__internal_6e560258c53430782e4cd69c99e4abe1e76cb12bdfc1a91f2532c903ccad0806_prof);

        
        $__internal_9f804d5ebc41eee3b69bf11dfbdb47085b3f055204e77c58ec3295bd7f56124b->leave($__internal_9f804d5ebc41eee3b69bf11dfbdb47085b3f055204e77c58ec3295bd7f56124b_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_f7ba5770eee357bbfd74f6fd5ab095694838fd342fbebb8bc15975843ec27747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ba5770eee357bbfd74f6fd5ab095694838fd342fbebb8bc15975843ec27747->enter($__internal_f7ba5770eee357bbfd74f6fd5ab095694838fd342fbebb8bc15975843ec27747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_2c5b4980382dcc506c4f21a8661f25d498a30fe6f32b2b96bf9aefd696c5c185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c5b4980382dcc506c4f21a8661f25d498a30fe6f32b2b96bf9aefd696c5c185->enter($__internal_2c5b4980382dcc506c4f21a8661f25d498a30fe6f32b2b96bf9aefd696c5c185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_2c5b4980382dcc506c4f21a8661f25d498a30fe6f32b2b96bf9aefd696c5c185->leave($__internal_2c5b4980382dcc506c4f21a8661f25d498a30fe6f32b2b96bf9aefd696c5c185_prof);

        
        $__internal_f7ba5770eee357bbfd74f6fd5ab095694838fd342fbebb8bc15975843ec27747->leave($__internal_f7ba5770eee357bbfd74f6fd5ab095694838fd342fbebb8bc15975843ec27747_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_191bda25c8e30f3777991e2b808eb6c9a37ba2edad89a0780301ad6212051745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_191bda25c8e30f3777991e2b808eb6c9a37ba2edad89a0780301ad6212051745->enter($__internal_191bda25c8e30f3777991e2b808eb6c9a37ba2edad89a0780301ad6212051745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_d3c126fa902ba40486015aab6c25f9b5a1a41a40372ed699db4aa2050080f8e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c126fa902ba40486015aab6c25f9b5a1a41a40372ed699db4aa2050080f8e0->enter($__internal_d3c126fa902ba40486015aab6c25f9b5a1a41a40372ed699db4aa2050080f8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d3c126fa902ba40486015aab6c25f9b5a1a41a40372ed699db4aa2050080f8e0->leave($__internal_d3c126fa902ba40486015aab6c25f9b5a1a41a40372ed699db4aa2050080f8e0_prof);

        
        $__internal_191bda25c8e30f3777991e2b808eb6c9a37ba2edad89a0780301ad6212051745->leave($__internal_191bda25c8e30f3777991e2b808eb6c9a37ba2edad89a0780301ad6212051745_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_b08ab02f4f33e5514ff98b08da3ddb1c62af1999edbc62628557dd6b54b2763f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b08ab02f4f33e5514ff98b08da3ddb1c62af1999edbc62628557dd6b54b2763f->enter($__internal_b08ab02f4f33e5514ff98b08da3ddb1c62af1999edbc62628557dd6b54b2763f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_3c67024ee32bef72ef6fa0e4537ff43742a9cde7776fa923f6ba0b5216bf6016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c67024ee32bef72ef6fa0e4537ff43742a9cde7776fa923f6ba0b5216bf6016->enter($__internal_3c67024ee32bef72ef6fa0e4537ff43742a9cde7776fa923f6ba0b5216bf6016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 201
        echo "    ";
        // line 202
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 203
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 204
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 205
                echo "        ";
            }
            // line 206
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 207
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 210
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 211
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 212
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 213
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 216
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 219
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 220
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 221
            echo "</label>
    ";
        }
        
        $__internal_3c67024ee32bef72ef6fa0e4537ff43742a9cde7776fa923f6ba0b5216bf6016->leave($__internal_3c67024ee32bef72ef6fa0e4537ff43742a9cde7776fa923f6ba0b5216bf6016_prof);

        
        $__internal_b08ab02f4f33e5514ff98b08da3ddb1c62af1999edbc62628557dd6b54b2763f->leave($__internal_b08ab02f4f33e5514ff98b08da3ddb1c62af1999edbc62628557dd6b54b2763f_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_85102494035547971d8561f05b834c55acea2c80f145447f58b67c72678f7c6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85102494035547971d8561f05b834c55acea2c80f145447f58b67c72678f7c6e->enter($__internal_85102494035547971d8561f05b834c55acea2c80f145447f58b67c72678f7c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_28179c9bd50a7ffdd780853bc3c88c17ee28f7f9e955d2f1d46ab03f22fc5de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28179c9bd50a7ffdd780853bc3c88c17ee28f7f9e955d2f1d46ab03f22fc5de8->enter($__internal_28179c9bd50a7ffdd780853bc3c88c17ee28f7f9e955d2f1d46ab03f22fc5de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 228
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 231
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 232
        echo "</div>";
        
        $__internal_28179c9bd50a7ffdd780853bc3c88c17ee28f7f9e955d2f1d46ab03f22fc5de8->leave($__internal_28179c9bd50a7ffdd780853bc3c88c17ee28f7f9e955d2f1d46ab03f22fc5de8_prof);

        
        $__internal_85102494035547971d8561f05b834c55acea2c80f145447f58b67c72678f7c6e->leave($__internal_85102494035547971d8561f05b834c55acea2c80f145447f58b67c72678f7c6e_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_2ee9916bd31c76f43cea554b04f54cb43fc167b7930eb12bceba62804b35641a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ee9916bd31c76f43cea554b04f54cb43fc167b7930eb12bceba62804b35641a->enter($__internal_2ee9916bd31c76f43cea554b04f54cb43fc167b7930eb12bceba62804b35641a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_b709a8cca277e02a2d9cdda40fa7511302b12eda0f20a14e9a690ab16299377d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b709a8cca277e02a2d9cdda40fa7511302b12eda0f20a14e9a690ab16299377d->enter($__internal_b709a8cca277e02a2d9cdda40fa7511302b12eda0f20a14e9a690ab16299377d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_b709a8cca277e02a2d9cdda40fa7511302b12eda0f20a14e9a690ab16299377d->leave($__internal_b709a8cca277e02a2d9cdda40fa7511302b12eda0f20a14e9a690ab16299377d_prof);

        
        $__internal_2ee9916bd31c76f43cea554b04f54cb43fc167b7930eb12bceba62804b35641a->leave($__internal_2ee9916bd31c76f43cea554b04f54cb43fc167b7930eb12bceba62804b35641a_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_ce0c3188f53fdfb7604fab1355f484d2d68a370308434bef5c4a96a73409f328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce0c3188f53fdfb7604fab1355f484d2d68a370308434bef5c4a96a73409f328->enter($__internal_ce0c3188f53fdfb7604fab1355f484d2d68a370308434bef5c4a96a73409f328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_9b54431b713ec1784a0ffe719d2d6c6c65c5ee2039775e89412ed2399fd0ff7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b54431b713ec1784a0ffe719d2d6c6c65c5ee2039775e89412ed2399fd0ff7c->enter($__internal_9b54431b713ec1784a0ffe719d2d6c6c65c5ee2039775e89412ed2399fd0ff7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9b54431b713ec1784a0ffe719d2d6c6c65c5ee2039775e89412ed2399fd0ff7c->leave($__internal_9b54431b713ec1784a0ffe719d2d6c6c65c5ee2039775e89412ed2399fd0ff7c_prof);

        
        $__internal_ce0c3188f53fdfb7604fab1355f484d2d68a370308434bef5c4a96a73409f328->leave($__internal_ce0c3188f53fdfb7604fab1355f484d2d68a370308434bef5c4a96a73409f328_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_e0f90e757b81bec3a5a5a6c3b2fa5b93ae3ea2e13288c1113713263450305231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f90e757b81bec3a5a5a6c3b2fa5b93ae3ea2e13288c1113713263450305231->enter($__internal_e0f90e757b81bec3a5a5a6c3b2fa5b93ae3ea2e13288c1113713263450305231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_e5aeb1d77e3002a431087471ab8e8f1b3e66f88ca1d575eacd47c2c1d001a496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5aeb1d77e3002a431087471ab8e8f1b3e66f88ca1d575eacd47c2c1d001a496->enter($__internal_e5aeb1d77e3002a431087471ab8e8f1b3e66f88ca1d575eacd47c2c1d001a496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e5aeb1d77e3002a431087471ab8e8f1b3e66f88ca1d575eacd47c2c1d001a496->leave($__internal_e5aeb1d77e3002a431087471ab8e8f1b3e66f88ca1d575eacd47c2c1d001a496_prof);

        
        $__internal_e0f90e757b81bec3a5a5a6c3b2fa5b93ae3ea2e13288c1113713263450305231->leave($__internal_e0f90e757b81bec3a5a5a6c3b2fa5b93ae3ea2e13288c1113713263450305231_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_cdc354ce479c928ced520579662210b5bde85be6be8967eef4d3026892cbe0b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc354ce479c928ced520579662210b5bde85be6be8967eef4d3026892cbe0b7->enter($__internal_cdc354ce479c928ced520579662210b5bde85be6be8967eef4d3026892cbe0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_aaab2150beca8dac28f12535588d2b4bca937e8a873c32923debff4c55800873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaab2150beca8dac28f12535588d2b4bca937e8a873c32923debff4c55800873->enter($__internal_aaab2150beca8dac28f12535588d2b4bca937e8a873c32923debff4c55800873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_aaab2150beca8dac28f12535588d2b4bca937e8a873c32923debff4c55800873->leave($__internal_aaab2150beca8dac28f12535588d2b4bca937e8a873c32923debff4c55800873_prof);

        
        $__internal_cdc354ce479c928ced520579662210b5bde85be6be8967eef4d3026892cbe0b7->leave($__internal_cdc354ce479c928ced520579662210b5bde85be6be8967eef4d3026892cbe0b7_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_3573a72ca4d7e62fa5600dd5ff2ad768a5a37751075c1efff80b5401747d8fb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3573a72ca4d7e62fa5600dd5ff2ad768a5a37751075c1efff80b5401747d8fb8->enter($__internal_3573a72ca4d7e62fa5600dd5ff2ad768a5a37751075c1efff80b5401747d8fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_e3fda37c6ff42ad1e2694746235f78f660f64d73be5f4762e8e1e2ce9f087952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3fda37c6ff42ad1e2694746235f78f660f64d73be5f4762e8e1e2ce9f087952->enter($__internal_e3fda37c6ff42ad1e2694746235f78f660f64d73be5f4762e8e1e2ce9f087952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e3fda37c6ff42ad1e2694746235f78f660f64d73be5f4762e8e1e2ce9f087952->leave($__internal_e3fda37c6ff42ad1e2694746235f78f660f64d73be5f4762e8e1e2ce9f087952_prof);

        
        $__internal_3573a72ca4d7e62fa5600dd5ff2ad768a5a37751075c1efff80b5401747d8fb8->leave($__internal_3573a72ca4d7e62fa5600dd5ff2ad768a5a37751075c1efff80b5401747d8fb8_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_f36ceed55da4c57d4200a42d7aa6f6e8b305cf04ea5e1a81c9a877131152f774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f36ceed55da4c57d4200a42d7aa6f6e8b305cf04ea5e1a81c9a877131152f774->enter($__internal_f36ceed55da4c57d4200a42d7aa6f6e8b305cf04ea5e1a81c9a877131152f774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_3966aae483cea9d616d30410f504cfb87d968432c7e443def3e692e934e6067f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3966aae483cea9d616d30410f504cfb87d968432c7e443def3e692e934e6067f->enter($__internal_3966aae483cea9d616d30410f504cfb87d968432c7e443def3e692e934e6067f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 262
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 265
        echo "</div>";
        
        $__internal_3966aae483cea9d616d30410f504cfb87d968432c7e443def3e692e934e6067f->leave($__internal_3966aae483cea9d616d30410f504cfb87d968432c7e443def3e692e934e6067f_prof);

        
        $__internal_f36ceed55da4c57d4200a42d7aa6f6e8b305cf04ea5e1a81c9a877131152f774->leave($__internal_f36ceed55da4c57d4200a42d7aa6f6e8b305cf04ea5e1a81c9a877131152f774_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_bd53067606f58bc188b8d46016edbe7e748f0854bb6b0545f3dc70501907141c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd53067606f58bc188b8d46016edbe7e748f0854bb6b0545f3dc70501907141c->enter($__internal_bd53067606f58bc188b8d46016edbe7e748f0854bb6b0545f3dc70501907141c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_83a6d2e301325e0c911ca442ddd3682bbeeeb0d724d4693dcf113224350844ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a6d2e301325e0c911ca442ddd3682bbeeeb0d724d4693dcf113224350844ad->enter($__internal_83a6d2e301325e0c911ca442ddd3682bbeeeb0d724d4693dcf113224350844ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 269
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 272
        echo "</div>";
        
        $__internal_83a6d2e301325e0c911ca442ddd3682bbeeeb0d724d4693dcf113224350844ad->leave($__internal_83a6d2e301325e0c911ca442ddd3682bbeeeb0d724d4693dcf113224350844ad_prof);

        
        $__internal_bd53067606f58bc188b8d46016edbe7e748f0854bb6b0545f3dc70501907141c->leave($__internal_bd53067606f58bc188b8d46016edbe7e748f0854bb6b0545f3dc70501907141c_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_454c346f69be042d867d55ebff4130fd5901b65b23d2bca0379af582841f2d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454c346f69be042d867d55ebff4130fd5901b65b23d2bca0379af582841f2d23->enter($__internal_454c346f69be042d867d55ebff4130fd5901b65b23d2bca0379af582841f2d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_07edfd970a9064ae701f1dc3ca7b2a0a365c46427118abcf3035a00245c72d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07edfd970a9064ae701f1dc3ca7b2a0a365c46427118abcf3035a00245c72d2f->enter($__internal_07edfd970a9064ae701f1dc3ca7b2a0a365c46427118abcf3035a00245c72d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 278
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 279
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 280
            echo "    <ul class=\"list-unstyled\">";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 282
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "</ul>
    ";
            // line 285
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_07edfd970a9064ae701f1dc3ca7b2a0a365c46427118abcf3035a00245c72d2f->leave($__internal_07edfd970a9064ae701f1dc3ca7b2a0a365c46427118abcf3035a00245c72d2f_prof);

        
        $__internal_454c346f69be042d867d55ebff4130fd5901b65b23d2bca0379af582841f2d23->leave($__internal_454c346f69be042d867d55ebff4130fd5901b65b23d2bca0379af582841f2d23_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1139 => 285,  1136 => 284,  1128 => 282,  1124 => 281,  1122 => 280,  1116 => 279,  1114 => 278,  1105 => 277,  1095 => 272,  1093 => 271,  1091 => 270,  1085 => 269,  1076 => 268,  1066 => 265,  1064 => 264,  1062 => 263,  1056 => 262,  1047 => 261,  1037 => 258,  1035 => 257,  1026 => 256,  1016 => 253,  1014 => 252,  1005 => 251,  995 => 248,  993 => 247,  984 => 246,  974 => 243,  972 => 242,  963 => 241,  953 => 238,  951 => 237,  949 => 236,  940 => 235,  930 => 232,  928 => 231,  926 => 230,  924 => 229,  918 => 228,  909 => 227,  897 => 221,  893 => 220,  878 => 219,  874 => 216,  871 => 213,  870 => 212,  869 => 211,  867 => 210,  864 => 209,  861 => 208,  858 => 207,  855 => 206,  852 => 205,  849 => 204,  846 => 203,  843 => 202,  841 => 201,  832 => 200,  822 => 197,  820 => 195,  811 => 194,  801 => 191,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 277,  200 => 276,  197 => 274,  195 => 268,  192 => 267,  190 => 261,  187 => 260,  185 => 256,  182 => 255,  180 => 251,  177 => 250,  175 => 246,  172 => 245,  170 => 241,  167 => 240,  165 => 235,  162 => 234,  160 => 227,  157 => 226,  154 => 224,  152 => 200,  149 => 199,  147 => 194,  144 => 193,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
