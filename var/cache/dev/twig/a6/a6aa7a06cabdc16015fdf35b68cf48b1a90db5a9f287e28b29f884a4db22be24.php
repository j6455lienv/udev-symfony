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
        $__internal_7b119775b1546c5d2ea6b66561a012ee4f0e7b9e5d798a38fecef567ca79497c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b119775b1546c5d2ea6b66561a012ee4f0e7b9e5d798a38fecef567ca79497c->enter($__internal_7b119775b1546c5d2ea6b66561a012ee4f0e7b9e5d798a38fecef567ca79497c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_316fab032f390ca16edb460278650706cdd6b514f462b84c83b2c3888b6bdf88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_316fab032f390ca16edb460278650706cdd6b514f462b84c83b2c3888b6bdf88->enter($__internal_316fab032f390ca16edb460278650706cdd6b514f462b84c83b2c3888b6bdf88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_7b119775b1546c5d2ea6b66561a012ee4f0e7b9e5d798a38fecef567ca79497c->leave($__internal_7b119775b1546c5d2ea6b66561a012ee4f0e7b9e5d798a38fecef567ca79497c_prof);

        
        $__internal_316fab032f390ca16edb460278650706cdd6b514f462b84c83b2c3888b6bdf88->leave($__internal_316fab032f390ca16edb460278650706cdd6b514f462b84c83b2c3888b6bdf88_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_7a25e34a013440857ba10d48e4b5a3fd9f3925a50f5f1db15804e0f76be42bfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a25e34a013440857ba10d48e4b5a3fd9f3925a50f5f1db15804e0f76be42bfe->enter($__internal_7a25e34a013440857ba10d48e4b5a3fd9f3925a50f5f1db15804e0f76be42bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_429807e0f9241acb012c5688cb1d43c742498074692662abdcf0757a3d5eec7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429807e0f9241acb012c5688cb1d43c742498074692662abdcf0757a3d5eec7b->enter($__internal_429807e0f9241acb012c5688cb1d43c742498074692662abdcf0757a3d5eec7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_429807e0f9241acb012c5688cb1d43c742498074692662abdcf0757a3d5eec7b->leave($__internal_429807e0f9241acb012c5688cb1d43c742498074692662abdcf0757a3d5eec7b_prof);

        
        $__internal_7a25e34a013440857ba10d48e4b5a3fd9f3925a50f5f1db15804e0f76be42bfe->leave($__internal_7a25e34a013440857ba10d48e4b5a3fd9f3925a50f5f1db15804e0f76be42bfe_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_6e4978ce9034c08d71eddb5a145b2d978f1d010c4d52a8e2879727cce1f9885b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e4978ce9034c08d71eddb5a145b2d978f1d010c4d52a8e2879727cce1f9885b->enter($__internal_6e4978ce9034c08d71eddb5a145b2d978f1d010c4d52a8e2879727cce1f9885b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_4b50dbd00eaeb720b9f78e366293f2558f31bda3f901188b08b3a5eef18b5504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b50dbd00eaeb720b9f78e366293f2558f31bda3f901188b08b3a5eef18b5504->enter($__internal_4b50dbd00eaeb720b9f78e366293f2558f31bda3f901188b08b3a5eef18b5504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_4b50dbd00eaeb720b9f78e366293f2558f31bda3f901188b08b3a5eef18b5504->leave($__internal_4b50dbd00eaeb720b9f78e366293f2558f31bda3f901188b08b3a5eef18b5504_prof);

        
        $__internal_6e4978ce9034c08d71eddb5a145b2d978f1d010c4d52a8e2879727cce1f9885b->leave($__internal_6e4978ce9034c08d71eddb5a145b2d978f1d010c4d52a8e2879727cce1f9885b_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_908bce3b472ae1ec39c02e6b8ff0c1e4c467514cacaadc73558155e6bb601cf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_908bce3b472ae1ec39c02e6b8ff0c1e4c467514cacaadc73558155e6bb601cf6->enter($__internal_908bce3b472ae1ec39c02e6b8ff0c1e4c467514cacaadc73558155e6bb601cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_ccf4ceee8787ffd562334f1b212dc256ceb45721bdd2a7b3370778dedb9cf00f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccf4ceee8787ffd562334f1b212dc256ceb45721bdd2a7b3370778dedb9cf00f->enter($__internal_ccf4ceee8787ffd562334f1b212dc256ceb45721bdd2a7b3370778dedb9cf00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_ccf4ceee8787ffd562334f1b212dc256ceb45721bdd2a7b3370778dedb9cf00f->leave($__internal_ccf4ceee8787ffd562334f1b212dc256ceb45721bdd2a7b3370778dedb9cf00f_prof);

        
        $__internal_908bce3b472ae1ec39c02e6b8ff0c1e4c467514cacaadc73558155e6bb601cf6->leave($__internal_908bce3b472ae1ec39c02e6b8ff0c1e4c467514cacaadc73558155e6bb601cf6_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_2dc25a34b3bc80905fe856aa245e1803b206e635c9c1e9014ba8745ef2614782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc25a34b3bc80905fe856aa245e1803b206e635c9c1e9014ba8745ef2614782->enter($__internal_2dc25a34b3bc80905fe856aa245e1803b206e635c9c1e9014ba8745ef2614782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_fdc4309ec0062006e1c0c50709918687f1bc977cda54fe4e0b60f8d7d86c928c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc4309ec0062006e1c0c50709918687f1bc977cda54fe4e0b60f8d7d86c928c->enter($__internal_fdc4309ec0062006e1c0c50709918687f1bc977cda54fe4e0b60f8d7d86c928c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_363b7e4b8f989a540258102ae51a62920178b4b5d2b110e2953a570b2e84c734 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_3da28d88faf26d6d56fb4240b183a8b75372d7248061e9d400f30636dfbf59fc = "{{") && ('' === $__internal_3da28d88faf26d6d56fb4240b183a8b75372d7248061e9d400f30636dfbf59fc || 0 === strpos($__internal_363b7e4b8f989a540258102ae51a62920178b4b5d2b110e2953a570b2e84c734, $__internal_3da28d88faf26d6d56fb4240b183a8b75372d7248061e9d400f30636dfbf59fc)));
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
        
        $__internal_fdc4309ec0062006e1c0c50709918687f1bc977cda54fe4e0b60f8d7d86c928c->leave($__internal_fdc4309ec0062006e1c0c50709918687f1bc977cda54fe4e0b60f8d7d86c928c_prof);

        
        $__internal_2dc25a34b3bc80905fe856aa245e1803b206e635c9c1e9014ba8745ef2614782->leave($__internal_2dc25a34b3bc80905fe856aa245e1803b206e635c9c1e9014ba8745ef2614782_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_3105cbd34a3f66e3b30a81af5c5cb93e19c8be48d7c9c7dd6c4ead2cd3c74780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3105cbd34a3f66e3b30a81af5c5cb93e19c8be48d7c9c7dd6c4ead2cd3c74780->enter($__internal_3105cbd34a3f66e3b30a81af5c5cb93e19c8be48d7c9c7dd6c4ead2cd3c74780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_bfbeabfe044b4ce61417932346b968a471291d4829de0fc5133b37c573997de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfbeabfe044b4ce61417932346b968a471291d4829de0fc5133b37c573997de9->enter($__internal_bfbeabfe044b4ce61417932346b968a471291d4829de0fc5133b37c573997de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_bfbeabfe044b4ce61417932346b968a471291d4829de0fc5133b37c573997de9->leave($__internal_bfbeabfe044b4ce61417932346b968a471291d4829de0fc5133b37c573997de9_prof);

        
        $__internal_3105cbd34a3f66e3b30a81af5c5cb93e19c8be48d7c9c7dd6c4ead2cd3c74780->leave($__internal_3105cbd34a3f66e3b30a81af5c5cb93e19c8be48d7c9c7dd6c4ead2cd3c74780_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_4b7fbd8c12cb732ae72ec32bfd6eef85b53a3a1d8fa83a1e24fb3e82d3015f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b7fbd8c12cb732ae72ec32bfd6eef85b53a3a1d8fa83a1e24fb3e82d3015f56->enter($__internal_4b7fbd8c12cb732ae72ec32bfd6eef85b53a3a1d8fa83a1e24fb3e82d3015f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_c7cda9aff4aa20ac606388d9ab109511238cb96cb566784516e09e963947021f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7cda9aff4aa20ac606388d9ab109511238cb96cb566784516e09e963947021f->enter($__internal_c7cda9aff4aa20ac606388d9ab109511238cb96cb566784516e09e963947021f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_c7cda9aff4aa20ac606388d9ab109511238cb96cb566784516e09e963947021f->leave($__internal_c7cda9aff4aa20ac606388d9ab109511238cb96cb566784516e09e963947021f_prof);

        
        $__internal_4b7fbd8c12cb732ae72ec32bfd6eef85b53a3a1d8fa83a1e24fb3e82d3015f56->leave($__internal_4b7fbd8c12cb732ae72ec32bfd6eef85b53a3a1d8fa83a1e24fb3e82d3015f56_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_f2957532c12e0221c8c354ddcfe5b3a5692382860c42bcce770990851be7193e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2957532c12e0221c8c354ddcfe5b3a5692382860c42bcce770990851be7193e->enter($__internal_f2957532c12e0221c8c354ddcfe5b3a5692382860c42bcce770990851be7193e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_3c81d428987058605bf8ea62f3d2a3ce8f10321828846d021cfa9a9cb72ddb74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c81d428987058605bf8ea62f3d2a3ce8f10321828846d021cfa9a9cb72ddb74->enter($__internal_3c81d428987058605bf8ea62f3d2a3ce8f10321828846d021cfa9a9cb72ddb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_3c81d428987058605bf8ea62f3d2a3ce8f10321828846d021cfa9a9cb72ddb74->leave($__internal_3c81d428987058605bf8ea62f3d2a3ce8f10321828846d021cfa9a9cb72ddb74_prof);

        
        $__internal_f2957532c12e0221c8c354ddcfe5b3a5692382860c42bcce770990851be7193e->leave($__internal_f2957532c12e0221c8c354ddcfe5b3a5692382860c42bcce770990851be7193e_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_0201ae320aaa676fa3710f49d3e985ebcf5a98cf0dce90a2b172f80f9825234c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0201ae320aaa676fa3710f49d3e985ebcf5a98cf0dce90a2b172f80f9825234c->enter($__internal_0201ae320aaa676fa3710f49d3e985ebcf5a98cf0dce90a2b172f80f9825234c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_0d9101a34fe5c81478f08f3d718844e5cae266600e85dc626f667332b564ada7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9101a34fe5c81478f08f3d718844e5cae266600e85dc626f667332b564ada7->enter($__internal_0d9101a34fe5c81478f08f3d718844e5cae266600e85dc626f667332b564ada7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_0d9101a34fe5c81478f08f3d718844e5cae266600e85dc626f667332b564ada7->leave($__internal_0d9101a34fe5c81478f08f3d718844e5cae266600e85dc626f667332b564ada7_prof);

        
        $__internal_0201ae320aaa676fa3710f49d3e985ebcf5a98cf0dce90a2b172f80f9825234c->leave($__internal_0201ae320aaa676fa3710f49d3e985ebcf5a98cf0dce90a2b172f80f9825234c_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_280920e0f9bded632bb9a12f87ba07c29703dfee46c376b5d5a33f4b93a0f318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_280920e0f9bded632bb9a12f87ba07c29703dfee46c376b5d5a33f4b93a0f318->enter($__internal_280920e0f9bded632bb9a12f87ba07c29703dfee46c376b5d5a33f4b93a0f318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_e63a85814bff7b2aaade4d7472d0044b148729115e62a908c38e7b5cabb3e5af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e63a85814bff7b2aaade4d7472d0044b148729115e62a908c38e7b5cabb3e5af->enter($__internal_e63a85814bff7b2aaade4d7472d0044b148729115e62a908c38e7b5cabb3e5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_e63a85814bff7b2aaade4d7472d0044b148729115e62a908c38e7b5cabb3e5af->leave($__internal_e63a85814bff7b2aaade4d7472d0044b148729115e62a908c38e7b5cabb3e5af_prof);

        
        $__internal_280920e0f9bded632bb9a12f87ba07c29703dfee46c376b5d5a33f4b93a0f318->leave($__internal_280920e0f9bded632bb9a12f87ba07c29703dfee46c376b5d5a33f4b93a0f318_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_644ccc79b973264c0727c167af3bff66dc0b74c3a8c288e42ea5969258b7eaee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_644ccc79b973264c0727c167af3bff66dc0b74c3a8c288e42ea5969258b7eaee->enter($__internal_644ccc79b973264c0727c167af3bff66dc0b74c3a8c288e42ea5969258b7eaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_dc3677d2313aa3f2d05bb545e04d0470e0cc6514e0d1b813390ed5d307cc2cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc3677d2313aa3f2d05bb545e04d0470e0cc6514e0d1b813390ed5d307cc2cbb->enter($__internal_dc3677d2313aa3f2d05bb545e04d0470e0cc6514e0d1b813390ed5d307cc2cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_dc3677d2313aa3f2d05bb545e04d0470e0cc6514e0d1b813390ed5d307cc2cbb->leave($__internal_dc3677d2313aa3f2d05bb545e04d0470e0cc6514e0d1b813390ed5d307cc2cbb_prof);

        
        $__internal_644ccc79b973264c0727c167af3bff66dc0b74c3a8c288e42ea5969258b7eaee->leave($__internal_644ccc79b973264c0727c167af3bff66dc0b74c3a8c288e42ea5969258b7eaee_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_66fc9b45602095a9abb214d871cf86e47e89e41dc87e99abc9cd8b7192f55ad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66fc9b45602095a9abb214d871cf86e47e89e41dc87e99abc9cd8b7192f55ad7->enter($__internal_66fc9b45602095a9abb214d871cf86e47e89e41dc87e99abc9cd8b7192f55ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_1cfb995b26f8d5f670b96e0bd7307baddc9798f8d0190c73395dc00ce5bee9be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cfb995b26f8d5f670b96e0bd7307baddc9798f8d0190c73395dc00ce5bee9be->enter($__internal_1cfb995b26f8d5f670b96e0bd7307baddc9798f8d0190c73395dc00ce5bee9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_1cfb995b26f8d5f670b96e0bd7307baddc9798f8d0190c73395dc00ce5bee9be->leave($__internal_1cfb995b26f8d5f670b96e0bd7307baddc9798f8d0190c73395dc00ce5bee9be_prof);

        
        $__internal_66fc9b45602095a9abb214d871cf86e47e89e41dc87e99abc9cd8b7192f55ad7->leave($__internal_66fc9b45602095a9abb214d871cf86e47e89e41dc87e99abc9cd8b7192f55ad7_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_b3fa094f54de9b86107619d0152ba3446b73b4c2b9e1d5f9875e6c521c5b34b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3fa094f54de9b86107619d0152ba3446b73b4c2b9e1d5f9875e6c521c5b34b1->enter($__internal_b3fa094f54de9b86107619d0152ba3446b73b4c2b9e1d5f9875e6c521c5b34b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_c271e77cf83e35bc99994c2095e1e8f6fffc70e034a822db1c8b65bf0afeb7c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c271e77cf83e35bc99994c2095e1e8f6fffc70e034a822db1c8b65bf0afeb7c5->enter($__internal_c271e77cf83e35bc99994c2095e1e8f6fffc70e034a822db1c8b65bf0afeb7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_c271e77cf83e35bc99994c2095e1e8f6fffc70e034a822db1c8b65bf0afeb7c5->leave($__internal_c271e77cf83e35bc99994c2095e1e8f6fffc70e034a822db1c8b65bf0afeb7c5_prof);

        
        $__internal_b3fa094f54de9b86107619d0152ba3446b73b4c2b9e1d5f9875e6c521c5b34b1->leave($__internal_b3fa094f54de9b86107619d0152ba3446b73b4c2b9e1d5f9875e6c521c5b34b1_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_dfdaa604c64738c1c8680239036ca02ab44f3e6e05935cc4cd51007dccf9c407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfdaa604c64738c1c8680239036ca02ab44f3e6e05935cc4cd51007dccf9c407->enter($__internal_dfdaa604c64738c1c8680239036ca02ab44f3e6e05935cc4cd51007dccf9c407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_05aa75625b432d4acf098eae2daaac4ef17796f531e1b791090a915c6f3709bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05aa75625b432d4acf098eae2daaac4ef17796f531e1b791090a915c6f3709bd->enter($__internal_05aa75625b432d4acf098eae2daaac4ef17796f531e1b791090a915c6f3709bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_05aa75625b432d4acf098eae2daaac4ef17796f531e1b791090a915c6f3709bd->leave($__internal_05aa75625b432d4acf098eae2daaac4ef17796f531e1b791090a915c6f3709bd_prof);

        
        $__internal_dfdaa604c64738c1c8680239036ca02ab44f3e6e05935cc4cd51007dccf9c407->leave($__internal_dfdaa604c64738c1c8680239036ca02ab44f3e6e05935cc4cd51007dccf9c407_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a557a5b11654a4c8eeb3dee375821271bb7cb6fd0a71127afae1351e2a5a6e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a557a5b11654a4c8eeb3dee375821271bb7cb6fd0a71127afae1351e2a5a6e84->enter($__internal_a557a5b11654a4c8eeb3dee375821271bb7cb6fd0a71127afae1351e2a5a6e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_8e17cd3139f81e726d64034daf81f968ed6a9070bed590e110ed15fdcc15369b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e17cd3139f81e726d64034daf81f968ed6a9070bed590e110ed15fdcc15369b->enter($__internal_8e17cd3139f81e726d64034daf81f968ed6a9070bed590e110ed15fdcc15369b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_8e17cd3139f81e726d64034daf81f968ed6a9070bed590e110ed15fdcc15369b->leave($__internal_8e17cd3139f81e726d64034daf81f968ed6a9070bed590e110ed15fdcc15369b_prof);

        
        $__internal_a557a5b11654a4c8eeb3dee375821271bb7cb6fd0a71127afae1351e2a5a6e84->leave($__internal_a557a5b11654a4c8eeb3dee375821271bb7cb6fd0a71127afae1351e2a5a6e84_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_0a5e8e9309442412e305abc3b220d27ca6e07040f9027fe29e392d0e9316d808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a5e8e9309442412e305abc3b220d27ca6e07040f9027fe29e392d0e9316d808->enter($__internal_0a5e8e9309442412e305abc3b220d27ca6e07040f9027fe29e392d0e9316d808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_c96b6e7f2d7a99a33a22fa5cc0f7fee23d4b9de75d08f17bf4820898726c835d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96b6e7f2d7a99a33a22fa5cc0f7fee23d4b9de75d08f17bf4820898726c835d->enter($__internal_c96b6e7f2d7a99a33a22fa5cc0f7fee23d4b9de75d08f17bf4820898726c835d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_c96b6e7f2d7a99a33a22fa5cc0f7fee23d4b9de75d08f17bf4820898726c835d->leave($__internal_c96b6e7f2d7a99a33a22fa5cc0f7fee23d4b9de75d08f17bf4820898726c835d_prof);

        
        $__internal_0a5e8e9309442412e305abc3b220d27ca6e07040f9027fe29e392d0e9316d808->leave($__internal_0a5e8e9309442412e305abc3b220d27ca6e07040f9027fe29e392d0e9316d808_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_848b97fd88355d7a5e673250adc2dcc13c5723eb20f91c33dccb011b53a62d97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_848b97fd88355d7a5e673250adc2dcc13c5723eb20f91c33dccb011b53a62d97->enter($__internal_848b97fd88355d7a5e673250adc2dcc13c5723eb20f91c33dccb011b53a62d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_035729cedeb699e14a95660547a87dcdd8b5b6d4df30eeec2cbc894b38c2d4e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_035729cedeb699e14a95660547a87dcdd8b5b6d4df30eeec2cbc894b38c2d4e3->enter($__internal_035729cedeb699e14a95660547a87dcdd8b5b6d4df30eeec2cbc894b38c2d4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_035729cedeb699e14a95660547a87dcdd8b5b6d4df30eeec2cbc894b38c2d4e3->leave($__internal_035729cedeb699e14a95660547a87dcdd8b5b6d4df30eeec2cbc894b38c2d4e3_prof);

        
        $__internal_848b97fd88355d7a5e673250adc2dcc13c5723eb20f91c33dccb011b53a62d97->leave($__internal_848b97fd88355d7a5e673250adc2dcc13c5723eb20f91c33dccb011b53a62d97_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_f994512e38d3f07bb4664ade9501b7e31c1f28f52a9d6ccb588b6198f8b0228b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f994512e38d3f07bb4664ade9501b7e31c1f28f52a9d6ccb588b6198f8b0228b->enter($__internal_f994512e38d3f07bb4664ade9501b7e31c1f28f52a9d6ccb588b6198f8b0228b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_31202724b2d7ac2795619d5fb606bea1afd044796300f3f8381ead8ac34b62ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31202724b2d7ac2795619d5fb606bea1afd044796300f3f8381ead8ac34b62ec->enter($__internal_31202724b2d7ac2795619d5fb606bea1afd044796300f3f8381ead8ac34b62ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_31202724b2d7ac2795619d5fb606bea1afd044796300f3f8381ead8ac34b62ec->leave($__internal_31202724b2d7ac2795619d5fb606bea1afd044796300f3f8381ead8ac34b62ec_prof);

        
        $__internal_f994512e38d3f07bb4664ade9501b7e31c1f28f52a9d6ccb588b6198f8b0228b->leave($__internal_f994512e38d3f07bb4664ade9501b7e31c1f28f52a9d6ccb588b6198f8b0228b_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_c319f77242af2ac8f89b22f18ecdd047357d24965ec168c4398f4059bacc36f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c319f77242af2ac8f89b22f18ecdd047357d24965ec168c4398f4059bacc36f7->enter($__internal_c319f77242af2ac8f89b22f18ecdd047357d24965ec168c4398f4059bacc36f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_eba661d4d76e035e200c8031d7e10ca81355a818b9f6e3abf682b1c71cae7f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba661d4d76e035e200c8031d7e10ca81355a818b9f6e3abf682b1c71cae7f2c->enter($__internal_eba661d4d76e035e200c8031d7e10ca81355a818b9f6e3abf682b1c71cae7f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_eba661d4d76e035e200c8031d7e10ca81355a818b9f6e3abf682b1c71cae7f2c->leave($__internal_eba661d4d76e035e200c8031d7e10ca81355a818b9f6e3abf682b1c71cae7f2c_prof);

        
        $__internal_c319f77242af2ac8f89b22f18ecdd047357d24965ec168c4398f4059bacc36f7->leave($__internal_c319f77242af2ac8f89b22f18ecdd047357d24965ec168c4398f4059bacc36f7_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_af52275c830d5be3038fae46ceffe9178fa498c220959e12fab6a8bb63db7b2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af52275c830d5be3038fae46ceffe9178fa498c220959e12fab6a8bb63db7b2d->enter($__internal_af52275c830d5be3038fae46ceffe9178fa498c220959e12fab6a8bb63db7b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_753550b9e39cc0dacab1be710ffa00d5b7fe363454313225483efffab43e167b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753550b9e39cc0dacab1be710ffa00d5b7fe363454313225483efffab43e167b->enter($__internal_753550b9e39cc0dacab1be710ffa00d5b7fe363454313225483efffab43e167b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_753550b9e39cc0dacab1be710ffa00d5b7fe363454313225483efffab43e167b->leave($__internal_753550b9e39cc0dacab1be710ffa00d5b7fe363454313225483efffab43e167b_prof);

        
        $__internal_af52275c830d5be3038fae46ceffe9178fa498c220959e12fab6a8bb63db7b2d->leave($__internal_af52275c830d5be3038fae46ceffe9178fa498c220959e12fab6a8bb63db7b2d_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_9bb2db499f365271f0a0075161143a37ed325d71f3e58db41568c39385f72833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb2db499f365271f0a0075161143a37ed325d71f3e58db41568c39385f72833->enter($__internal_9bb2db499f365271f0a0075161143a37ed325d71f3e58db41568c39385f72833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_bb44e49c0a901438765563ec214de4c6175afdbc1c6938f54a4d38f9e4eebfb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb44e49c0a901438765563ec214de4c6175afdbc1c6938f54a4d38f9e4eebfb7->enter($__internal_bb44e49c0a901438765563ec214de4c6175afdbc1c6938f54a4d38f9e4eebfb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_bb44e49c0a901438765563ec214de4c6175afdbc1c6938f54a4d38f9e4eebfb7->leave($__internal_bb44e49c0a901438765563ec214de4c6175afdbc1c6938f54a4d38f9e4eebfb7_prof);

        
        $__internal_9bb2db499f365271f0a0075161143a37ed325d71f3e58db41568c39385f72833->leave($__internal_9bb2db499f365271f0a0075161143a37ed325d71f3e58db41568c39385f72833_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_848339971be91355a8313737965e9ab34888f7a91a4eb72687effba214108a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_848339971be91355a8313737965e9ab34888f7a91a4eb72687effba214108a74->enter($__internal_848339971be91355a8313737965e9ab34888f7a91a4eb72687effba214108a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_af9268162355c8b43f3d856cb028b2611c40240c3e8923641e61ad054d0ada1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af9268162355c8b43f3d856cb028b2611c40240c3e8923641e61ad054d0ada1c->enter($__internal_af9268162355c8b43f3d856cb028b2611c40240c3e8923641e61ad054d0ada1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_af9268162355c8b43f3d856cb028b2611c40240c3e8923641e61ad054d0ada1c->leave($__internal_af9268162355c8b43f3d856cb028b2611c40240c3e8923641e61ad054d0ada1c_prof);

        
        $__internal_848339971be91355a8313737965e9ab34888f7a91a4eb72687effba214108a74->leave($__internal_848339971be91355a8313737965e9ab34888f7a91a4eb72687effba214108a74_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_9bc1c72f846e3df0f59c5e9c856b80c6ee34e91836b11480e7588cec3a88d3e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bc1c72f846e3df0f59c5e9c856b80c6ee34e91836b11480e7588cec3a88d3e5->enter($__internal_9bc1c72f846e3df0f59c5e9c856b80c6ee34e91836b11480e7588cec3a88d3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_cc6b058b5c3596010a11d9be49ca66990d7d2cbb2ed08f6e598c979c39194b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6b058b5c3596010a11d9be49ca66990d7d2cbb2ed08f6e598c979c39194b6f->enter($__internal_cc6b058b5c3596010a11d9be49ca66990d7d2cbb2ed08f6e598c979c39194b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_cc6b058b5c3596010a11d9be49ca66990d7d2cbb2ed08f6e598c979c39194b6f->leave($__internal_cc6b058b5c3596010a11d9be49ca66990d7d2cbb2ed08f6e598c979c39194b6f_prof);

        
        $__internal_9bc1c72f846e3df0f59c5e9c856b80c6ee34e91836b11480e7588cec3a88d3e5->leave($__internal_9bc1c72f846e3df0f59c5e9c856b80c6ee34e91836b11480e7588cec3a88d3e5_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_72268a2a53ae34e5d7548f803130e11caf96999e2de7ba23cf20366a7fb8e9a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72268a2a53ae34e5d7548f803130e11caf96999e2de7ba23cf20366a7fb8e9a9->enter($__internal_72268a2a53ae34e5d7548f803130e11caf96999e2de7ba23cf20366a7fb8e9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_b021066c8dd19bde69ea6392e7a18de8f608aae8328be593c23dfdc8574cd005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b021066c8dd19bde69ea6392e7a18de8f608aae8328be593c23dfdc8574cd005->enter($__internal_b021066c8dd19bde69ea6392e7a18de8f608aae8328be593c23dfdc8574cd005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b021066c8dd19bde69ea6392e7a18de8f608aae8328be593c23dfdc8574cd005->leave($__internal_b021066c8dd19bde69ea6392e7a18de8f608aae8328be593c23dfdc8574cd005_prof);

        
        $__internal_72268a2a53ae34e5d7548f803130e11caf96999e2de7ba23cf20366a7fb8e9a9->leave($__internal_72268a2a53ae34e5d7548f803130e11caf96999e2de7ba23cf20366a7fb8e9a9_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_36b6df3a6e56445428cbd9d6fa7ae18fa9cddc4b751811ece8a8b6a7375447d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36b6df3a6e56445428cbd9d6fa7ae18fa9cddc4b751811ece8a8b6a7375447d4->enter($__internal_36b6df3a6e56445428cbd9d6fa7ae18fa9cddc4b751811ece8a8b6a7375447d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_bb696a3e1e4ce054ee96cc91a2dcf223a8a98c02e5f3d249bce166e5b3052068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb696a3e1e4ce054ee96cc91a2dcf223a8a98c02e5f3d249bce166e5b3052068->enter($__internal_bb696a3e1e4ce054ee96cc91a2dcf223a8a98c02e5f3d249bce166e5b3052068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_bb696a3e1e4ce054ee96cc91a2dcf223a8a98c02e5f3d249bce166e5b3052068->leave($__internal_bb696a3e1e4ce054ee96cc91a2dcf223a8a98c02e5f3d249bce166e5b3052068_prof);

        
        $__internal_36b6df3a6e56445428cbd9d6fa7ae18fa9cddc4b751811ece8a8b6a7375447d4->leave($__internal_36b6df3a6e56445428cbd9d6fa7ae18fa9cddc4b751811ece8a8b6a7375447d4_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_18712ed4aae281ac774414eb656f9cdb31d06169b658cbe435b29b9fdf6f0bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18712ed4aae281ac774414eb656f9cdb31d06169b658cbe435b29b9fdf6f0bad->enter($__internal_18712ed4aae281ac774414eb656f9cdb31d06169b658cbe435b29b9fdf6f0bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_001aa8dc5c5d2caff3f755659fc32b0aaa509cb63248e68b94e182b2c990c2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001aa8dc5c5d2caff3f755659fc32b0aaa509cb63248e68b94e182b2c990c2bd->enter($__internal_001aa8dc5c5d2caff3f755659fc32b0aaa509cb63248e68b94e182b2c990c2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_001aa8dc5c5d2caff3f755659fc32b0aaa509cb63248e68b94e182b2c990c2bd->leave($__internal_001aa8dc5c5d2caff3f755659fc32b0aaa509cb63248e68b94e182b2c990c2bd_prof);

        
        $__internal_18712ed4aae281ac774414eb656f9cdb31d06169b658cbe435b29b9fdf6f0bad->leave($__internal_18712ed4aae281ac774414eb656f9cdb31d06169b658cbe435b29b9fdf6f0bad_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_a20e2c87a3b22cb251963e5b84c42e681cf0d7b1cb28c1bfa9692ac239718c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a20e2c87a3b22cb251963e5b84c42e681cf0d7b1cb28c1bfa9692ac239718c70->enter($__internal_a20e2c87a3b22cb251963e5b84c42e681cf0d7b1cb28c1bfa9692ac239718c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_77ca526f3dc1c7cc2f4b50be8cf574aaafd70c1d91f7a51e8287e20ed8aa8ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ca526f3dc1c7cc2f4b50be8cf574aaafd70c1d91f7a51e8287e20ed8aa8ecf->enter($__internal_77ca526f3dc1c7cc2f4b50be8cf574aaafd70c1d91f7a51e8287e20ed8aa8ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_77ca526f3dc1c7cc2f4b50be8cf574aaafd70c1d91f7a51e8287e20ed8aa8ecf->leave($__internal_77ca526f3dc1c7cc2f4b50be8cf574aaafd70c1d91f7a51e8287e20ed8aa8ecf_prof);

        
        $__internal_a20e2c87a3b22cb251963e5b84c42e681cf0d7b1cb28c1bfa9692ac239718c70->leave($__internal_a20e2c87a3b22cb251963e5b84c42e681cf0d7b1cb28c1bfa9692ac239718c70_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_abd33c81d0492226fc89a19525a7bba82aa48ad442597c0226a5abb182e5ed4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd33c81d0492226fc89a19525a7bba82aa48ad442597c0226a5abb182e5ed4f->enter($__internal_abd33c81d0492226fc89a19525a7bba82aa48ad442597c0226a5abb182e5ed4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_fc93f7c60646e9ca50ae6ede175c075030d25eccc889fad244c7d691bfdaa133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc93f7c60646e9ca50ae6ede175c075030d25eccc889fad244c7d691bfdaa133->enter($__internal_fc93f7c60646e9ca50ae6ede175c075030d25eccc889fad244c7d691bfdaa133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_fc93f7c60646e9ca50ae6ede175c075030d25eccc889fad244c7d691bfdaa133->leave($__internal_fc93f7c60646e9ca50ae6ede175c075030d25eccc889fad244c7d691bfdaa133_prof);

        
        $__internal_abd33c81d0492226fc89a19525a7bba82aa48ad442597c0226a5abb182e5ed4f->leave($__internal_abd33c81d0492226fc89a19525a7bba82aa48ad442597c0226a5abb182e5ed4f_prof);

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
