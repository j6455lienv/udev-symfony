<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_12b8785582991e5e3d60fe11deb9cf03625386cc8b9308d98695f8b8a14513ca extends Twig_Template
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
        $__internal_6bec83569d13b5e1bcce6e9e23a906930db4c369b6d941b3cc9df8bd61440718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bec83569d13b5e1bcce6e9e23a906930db4c369b6d941b3cc9df8bd61440718->enter($__internal_6bec83569d13b5e1bcce6e9e23a906930db4c369b6d941b3cc9df8bd61440718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_6bec83569d13b5e1bcce6e9e23a906930db4c369b6d941b3cc9df8bd61440718->leave($__internal_6bec83569d13b5e1bcce6e9e23a906930db4c369b6d941b3cc9df8bd61440718_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_be45ae9f042c0c2fc59f93de1c14a393150b818f9a03516b4106fe268400304c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be45ae9f042c0c2fc59f93de1c14a393150b818f9a03516b4106fe268400304c->enter($__internal_be45ae9f042c0c2fc59f93de1c14a393150b818f9a03516b4106fe268400304c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? null), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_be45ae9f042c0c2fc59f93de1c14a393150b818f9a03516b4106fe268400304c->leave($__internal_be45ae9f042c0c2fc59f93de1c14a393150b818f9a03516b4106fe268400304c_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_fdb98847f9f28d6b0f0ae557546eb239bacca5f617007ba61e63c55c7afe54de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb98847f9f28d6b0f0ae557546eb239bacca5f617007ba61e63c55c7afe54de->enter($__internal_fdb98847f9f28d6b0f0ae557546eb239bacca5f617007ba61e63c55c7afe54de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_fdb98847f9f28d6b0f0ae557546eb239bacca5f617007ba61e63c55c7afe54de->leave($__internal_fdb98847f9f28d6b0f0ae557546eb239bacca5f617007ba61e63c55c7afe54de_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_7a9ca3fd3abd81f29243d742d5f03b171d41aee4249396c51763f48a9234298a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a9ca3fd3abd81f29243d742d5f03b171d41aee4249396c51763f48a9234298a->enter($__internal_7a9ca3fd3abd81f29243d742d5f03b171d41aee4249396c51763f48a9234298a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_7a9ca3fd3abd81f29243d742d5f03b171d41aee4249396c51763f48a9234298a->leave($__internal_7a9ca3fd3abd81f29243d742d5f03b171d41aee4249396c51763f48a9234298a_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_c464572acb75d2f6c512b49c9583d8fd38920290050de14593bf2ada4c6fe7f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c464572acb75d2f6c512b49c9583d8fd38920290050de14593bf2ada4c6fe7f9->enter($__internal_c464572acb75d2f6c512b49c9583d8fd38920290050de14593bf2ada4c6fe7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_d90fe2eeafc763d0eb7d10d78d1beb873e8ebb23de2d7a7a5fbf54195b3b63cb = ($context["money_pattern"] ?? null)) && is_string($__internal_ea7a175b48eeec332a1a4119cd9683280fc54d34000521f775783ec0eef245c2 = "{{") && ('' === $__internal_ea7a175b48eeec332a1a4119cd9683280fc54d34000521f775783ec0eef245c2 || 0 === strpos($__internal_d90fe2eeafc763d0eb7d10d78d1beb873e8ebb23de2d7a7a5fbf54195b3b63cb, $__internal_ea7a175b48eeec332a1a4119cd9683280fc54d34000521f775783ec0eef245c2)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? null)) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? null)) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_c464572acb75d2f6c512b49c9583d8fd38920290050de14593bf2ada4c6fe7f9->leave($__internal_c464572acb75d2f6c512b49c9583d8fd38920290050de14593bf2ada4c6fe7f9_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_4d8b48a2c23ed57336500be2f2e90203e6dd711dbc7800abd9324ce17f22eb63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d8b48a2c23ed57336500be2f2e90203e6dd711dbc7800abd9324ce17f22eb63->enter($__internal_4d8b48a2c23ed57336500be2f2e90203e6dd711dbc7800abd9324ce17f22eb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_4d8b48a2c23ed57336500be2f2e90203e6dd711dbc7800abd9324ce17f22eb63->leave($__internal_4d8b48a2c23ed57336500be2f2e90203e6dd711dbc7800abd9324ce17f22eb63_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_6807ad87e01db476188ce150d5f99c66ff7a803b9bd7d07df33c0b23d625f8f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6807ad87e01db476188ce150d5f99c66ff7a803b9bd7d07df33c0b23d625f8f3->enter($__internal_6807ad87e01db476188ce150d5f99c66ff7a803b9bd7d07df33c0b23d625f8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_6807ad87e01db476188ce150d5f99c66ff7a803b9bd7d07df33c0b23d625f8f3->leave($__internal_6807ad87e01db476188ce150d5f99c66ff7a803b9bd7d07df33c0b23d625f8f3_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_c5cb9971cc1d31c33796a437a02749b9cf52ff35f065613021705dc5e7e7865a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5cb9971cc1d31c33796a437a02749b9cf52ff35f065613021705dc5e7e7865a->enter($__internal_c5cb9971cc1d31c33796a437a02749b9cf52ff35f065613021705dc5e7e7865a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? null), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_c5cb9971cc1d31c33796a437a02749b9cf52ff35f065613021705dc5e7e7865a->leave($__internal_c5cb9971cc1d31c33796a437a02749b9cf52ff35f065613021705dc5e7e7865a_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_d7b718432676a346dc7385378616077f6c98fb79bf1bd09723e8c9be814ff235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b718432676a346dc7385378616077f6c98fb79bf1bd09723e8c9be814ff235->enter($__internal_d7b718432676a346dc7385378616077f6c98fb79bf1bd09723e8c9be814ff235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_d7b718432676a346dc7385378616077f6c98fb79bf1bd09723e8c9be814ff235->leave($__internal_d7b718432676a346dc7385378616077f6c98fb79bf1bd09723e8c9be814ff235_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_6a0302dba7f90084679ffdba5e0754daac39dd296830c7750830bdb295819d11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a0302dba7f90084679ffdba5e0754daac39dd296830c7750830bdb295819d11->enter($__internal_6a0302dba7f90084679ffdba5e0754daac39dd296830c7750830bdb295819d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? null), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? null)) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_6a0302dba7f90084679ffdba5e0754daac39dd296830c7750830bdb295819d11->leave($__internal_6a0302dba7f90084679ffdba5e0754daac39dd296830c7750830bdb295819d11_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_61106ec28bc7706340ab589d6bc44f647a893e6d51adb119f61187137e15401a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61106ec28bc7706340ab589d6bc44f647a893e6d51adb119f61187137e15401a->enter($__internal_61106ec28bc7706340ab589d6bc44f647a893e6d51adb119f61187137e15401a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_61106ec28bc7706340ab589d6bc44f647a893e6d51adb119f61187137e15401a->leave($__internal_61106ec28bc7706340ab589d6bc44f647a893e6d51adb119f61187137e15401a_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_60b8eb3da9caa79fb13d51beab5e033fd8b89dea8fbe48500c67b002c939ed69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b8eb3da9caa79fb13d51beab5e033fd8b89dea8fbe48500c67b002c939ed69->enter($__internal_60b8eb3da9caa79fb13d51beab5e033fd8b89dea8fbe48500c67b002c939ed69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? null)));
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
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? null)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_60b8eb3da9caa79fb13d51beab5e033fd8b89dea8fbe48500c67b002c939ed69->leave($__internal_60b8eb3da9caa79fb13d51beab5e033fd8b89dea8fbe48500c67b002c939ed69_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_5023eedd8ab87cf75aa9146fa4efcadf8b0ee1aaa38e36a88cc359c1d0eaeaa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5023eedd8ab87cf75aa9146fa4efcadf8b0ee1aaa38e36a88cc359c1d0eaeaa8->enter($__internal_5023eedd8ab87cf75aa9146fa4efcadf8b0ee1aaa38e36a88cc359c1d0eaeaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_5023eedd8ab87cf75aa9146fa4efcadf8b0ee1aaa38e36a88cc359c1d0eaeaa8->leave($__internal_5023eedd8ab87cf75aa9146fa4efcadf8b0ee1aaa38e36a88cc359c1d0eaeaa8_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_89b53af831797d938a72c88d9d52a2b6bdc1f1d27a4450a5cfd3ce53af6dcce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89b53af831797d938a72c88d9d52a2b6bdc1f1d27a4450a5cfd3ce53af6dcce9->enter($__internal_89b53af831797d938a72c88d9d52a2b6bdc1f1d27a4450a5cfd3ce53af6dcce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_89b53af831797d938a72c88d9d52a2b6bdc1f1d27a4450a5cfd3ce53af6dcce9->leave($__internal_89b53af831797d938a72c88d9d52a2b6bdc1f1d27a4450a5cfd3ce53af6dcce9_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ff6d61fca927389fdbffeb587a72bd1ab8166159ba60bb16c31b29aaf09601e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff6d61fca927389fdbffeb587a72bd1ab8166159ba60bb16c31b29aaf09601e8->enter($__internal_ff6d61fca927389fdbffeb587a72bd1ab8166159ba60bb16c31b29aaf09601e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_ff6d61fca927389fdbffeb587a72bd1ab8166159ba60bb16c31b29aaf09601e8->leave($__internal_ff6d61fca927389fdbffeb587a72bd1ab8166159ba60bb16c31b29aaf09601e8_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_95cfacacf545d1fc33c6977c347fe7d63fee7d3d4c44ae742906aff0fbd80944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95cfacacf545d1fc33c6977c347fe7d63fee7d3d4c44ae742906aff0fbd80944->enter($__internal_95cfacacf545d1fc33c6977c347fe7d63fee7d3d4c44ae742906aff0fbd80944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_95cfacacf545d1fc33c6977c347fe7d63fee7d3d4c44ae742906aff0fbd80944->leave($__internal_95cfacacf545d1fc33c6977c347fe7d63fee7d3d4c44ae742906aff0fbd80944_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_0a2990aceabfbb35e9825e4af39ee506456b579a7a4e505a0b94b265aa613836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a2990aceabfbb35e9825e4af39ee506456b579a7a4e505a0b94b265aa613836->enter($__internal_0a2990aceabfbb35e9825e4af39ee506456b579a7a4e505a0b94b265aa613836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("for" => ($context["id"] ?? null)));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_0a2990aceabfbb35e9825e4af39ee506456b579a7a4e505a0b94b265aa613836->leave($__internal_0a2990aceabfbb35e9825e4af39ee506456b579a7a4e505a0b94b265aa613836_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_09efe37d58093d9a3db8602bedf6696ea731c9b0ecac6cf28700aa8cf479fa12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09efe37d58093d9a3db8602bedf6696ea731c9b0ecac6cf28700aa8cf479fa12->enter($__internal_09efe37d58093d9a3db8602bedf6696ea731c9b0ecac6cf28700aa8cf479fa12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("for" => ($context["id"] ?? null)));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_09efe37d58093d9a3db8602bedf6696ea731c9b0ecac6cf28700aa8cf479fa12->leave($__internal_09efe37d58093d9a3db8602bedf6696ea731c9b0ecac6cf28700aa8cf479fa12_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_3c3bee008df88b0a8aa10ac579c2851694af4e793474f595d7c3ab745979df2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c3bee008df88b0a8aa10ac579c2851694af4e793474f595d7c3ab745979df2c->enter($__internal_3c3bee008df88b0a8aa10ac579c2851694af4e793474f595d7c3ab745979df2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 201
        echo "    ";
        // line 202
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 203
            echo "        ";
            if (($context["required"] ?? null)) {
                // line 204
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 205
                echo "        ";
            }
            // line 206
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 207
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        ";
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 210
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 211
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), array("%name%" =>                     // line 212
($context["name"] ?? null), "%id%" =>                     // line 213
($context["id"] ?? null)));
                } else {
                    // line 216
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 219
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
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
            echo ($context["widget"] ?? null);
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null))))) : ("")), "html", null, true);
            // line 221
            echo "</label>
    ";
        }
        
        $__internal_3c3bee008df88b0a8aa10ac579c2851694af4e793474f595d7c3ab745979df2c->leave($__internal_3c3bee008df88b0a8aa10ac579c2851694af4e793474f595d7c3ab745979df2c_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_aef3bdc9218c80f2ff4ce2c6c7f80b61ac29ee9133b82f8ba592cc5b4ab47ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aef3bdc9218c80f2ff4ce2c6c7f80b61ac29ee9133b82f8ba592cc5b4ab47ae3->enter($__internal_aef3bdc9218c80f2ff4ce2c6c7f80b61ac29ee9133b82f8ba592cc5b4ab47ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 228
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 231
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 232
        echo "</div>";
        
        $__internal_aef3bdc9218c80f2ff4ce2c6c7f80b61ac29ee9133b82f8ba592cc5b4ab47ae3->leave($__internal_aef3bdc9218c80f2ff4ce2c6c7f80b61ac29ee9133b82f8ba592cc5b4ab47ae3_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_b547005bd03f950719dbe8b503ffd892f6da4f5ef99ddf0ae8c82aae3b8a670c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b547005bd03f950719dbe8b503ffd892f6da4f5ef99ddf0ae8c82aae3b8a670c->enter($__internal_b547005bd03f950719dbe8b503ffd892f6da4f5ef99ddf0ae8c82aae3b8a670c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_b547005bd03f950719dbe8b503ffd892f6da4f5ef99ddf0ae8c82aae3b8a670c->leave($__internal_b547005bd03f950719dbe8b503ffd892f6da4f5ef99ddf0ae8c82aae3b8a670c_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_5a84fa50a9eac3eecfd27e6269b442b75840f5a993796bd1a5e3265f7f8f43ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a84fa50a9eac3eecfd27e6269b442b75840f5a993796bd1a5e3265f7f8f43ff->enter($__internal_5a84fa50a9eac3eecfd27e6269b442b75840f5a993796bd1a5e3265f7f8f43ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5a84fa50a9eac3eecfd27e6269b442b75840f5a993796bd1a5e3265f7f8f43ff->leave($__internal_5a84fa50a9eac3eecfd27e6269b442b75840f5a993796bd1a5e3265f7f8f43ff_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_2f78a3ce3d43a180711a6d6e60336e5e01dbdc560a8eb3d0c19ca4fe3d907ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f78a3ce3d43a180711a6d6e60336e5e01dbdc560a8eb3d0c19ca4fe3d907ff1->enter($__internal_2f78a3ce3d43a180711a6d6e60336e5e01dbdc560a8eb3d0c19ca4fe3d907ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2f78a3ce3d43a180711a6d6e60336e5e01dbdc560a8eb3d0c19ca4fe3d907ff1->leave($__internal_2f78a3ce3d43a180711a6d6e60336e5e01dbdc560a8eb3d0c19ca4fe3d907ff1_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_cda7757a89df9ab2d12163428b08931a345e22af0185338a10769f2b763ccd92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cda7757a89df9ab2d12163428b08931a345e22af0185338a10769f2b763ccd92->enter($__internal_cda7757a89df9ab2d12163428b08931a345e22af0185338a10769f2b763ccd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_cda7757a89df9ab2d12163428b08931a345e22af0185338a10769f2b763ccd92->leave($__internal_cda7757a89df9ab2d12163428b08931a345e22af0185338a10769f2b763ccd92_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_ba25833d15daba1016cfb07d39d1b34c73de30b8302ef1d2fe5733553cee81ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba25833d15daba1016cfb07d39d1b34c73de30b8302ef1d2fe5733553cee81ae->enter($__internal_ba25833d15daba1016cfb07d39d1b34c73de30b8302ef1d2fe5733553cee81ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ba25833d15daba1016cfb07d39d1b34c73de30b8302ef1d2fe5733553cee81ae->leave($__internal_ba25833d15daba1016cfb07d39d1b34c73de30b8302ef1d2fe5733553cee81ae_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_187c88eda4790f0e2c802ccf458fdb73d139382889fee69b40d5e560811520ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187c88eda4790f0e2c802ccf458fdb73d139382889fee69b40d5e560811520ca->enter($__internal_187c88eda4790f0e2c802ccf458fdb73d139382889fee69b40d5e560811520ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 262
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 265
        echo "</div>";
        
        $__internal_187c88eda4790f0e2c802ccf458fdb73d139382889fee69b40d5e560811520ca->leave($__internal_187c88eda4790f0e2c802ccf458fdb73d139382889fee69b40d5e560811520ca_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_98a1623a5f2a41f086903d08b40212ed33e2bdbb8afa9aa1a872f0b1e485583a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98a1623a5f2a41f086903d08b40212ed33e2bdbb8afa9aa1a872f0b1e485583a->enter($__internal_98a1623a5f2a41f086903d08b40212ed33e2bdbb8afa9aa1a872f0b1e485583a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 269
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 272
        echo "</div>";
        
        $__internal_98a1623a5f2a41f086903d08b40212ed33e2bdbb8afa9aa1a872f0b1e485583a->leave($__internal_98a1623a5f2a41f086903d08b40212ed33e2bdbb8afa9aa1a872f0b1e485583a_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_1cc2836e5927a88afb0c9913d29a7bcb89caafcf594f3d2029b2c216bcaced05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cc2836e5927a88afb0c9913d29a7bcb89caafcf594f3d2029b2c216bcaced05->enter($__internal_1cc2836e5927a88afb0c9913d29a7bcb89caafcf594f3d2029b2c216bcaced05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 278
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 279
            if ($this->getAttribute(($context["form"] ?? null), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 280
            echo "    <ul class=\"list-unstyled\">";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
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
            if ($this->getAttribute(($context["form"] ?? null), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_1cc2836e5927a88afb0c9913d29a7bcb89caafcf594f3d2029b2c216bcaced05->leave($__internal_1cc2836e5927a88afb0c9913d29a7bcb89caafcf594f3d2029b2c216bcaced05_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  974 => 285,  971 => 284,  963 => 282,  959 => 281,  957 => 280,  951 => 279,  949 => 278,  943 => 277,  936 => 272,  934 => 271,  932 => 270,  926 => 269,  920 => 268,  913 => 265,  911 => 264,  909 => 263,  903 => 262,  897 => 261,  890 => 258,  888 => 257,  882 => 256,  875 => 253,  873 => 252,  867 => 251,  860 => 248,  858 => 247,  852 => 246,  845 => 243,  843 => 242,  837 => 241,  830 => 238,  828 => 237,  826 => 236,  820 => 235,  813 => 232,  811 => 231,  809 => 230,  807 => 229,  801 => 228,  795 => 227,  786 => 221,  782 => 220,  767 => 219,  763 => 216,  760 => 213,  759 => 212,  758 => 211,  756 => 210,  753 => 209,  750 => 208,  747 => 207,  744 => 206,  741 => 205,  738 => 204,  735 => 203,  732 => 202,  730 => 201,  724 => 200,  717 => 197,  715 => 195,  709 => 194,  702 => 191,  700 => 189,  694 => 188,  687 => 185,  685 => 184,  679 => 182,  672 => 179,  670 => 178,  664 => 177,  656 => 171,  654 => 170,  652 => 169,  649 => 167,  647 => 166,  645 => 165,  639 => 164,  631 => 160,  629 => 159,  627 => 158,  624 => 156,  622 => 155,  620 => 154,  614 => 153,  606 => 149,  600 => 146,  599 => 145,  598 => 144,  594 => 143,  590 => 142,  583 => 138,  582 => 137,  581 => 136,  577 => 135,  575 => 134,  569 => 133,  562 => 130,  560 => 129,  554 => 128,  546 => 124,  542 => 123,  537 => 119,  531 => 118,  525 => 117,  519 => 116,  513 => 115,  507 => 114,  501 => 113,  495 => 112,  490 => 108,  484 => 107,  478 => 106,  472 => 105,  466 => 104,  460 => 103,  454 => 102,  448 => 101,  443 => 98,  440 => 97,  438 => 96,  434 => 95,  432 => 94,  429 => 92,  427 => 91,  421 => 90,  412 => 85,  409 => 84,  399 => 83,  394 => 81,  392 => 80,  390 => 79,  387 => 77,  385 => 76,  379 => 75,  370 => 70,  368 => 69,  366 => 67,  365 => 66,  364 => 65,  363 => 64,  358 => 62,  356 => 61,  354 => 60,  351 => 58,  349 => 57,  343 => 56,  335 => 52,  333 => 51,  331 => 50,  329 => 49,  327 => 48,  323 => 47,  321 => 46,  318 => 44,  316 => 43,  310 => 42,  302 => 38,  300 => 37,  298 => 36,  292 => 35,  285 => 32,  279 => 30,  277 => 29,  275 => 28,  269 => 26,  266 => 25,  264 => 24,  261 => 23,  255 => 22,  248 => 19,  246 => 18,  240 => 17,  233 => 14,  231 => 13,  225 => 12,  218 => 9,  215 => 7,  213 => 6,  207 => 5,  200 => 277,  197 => 276,  194 => 274,  192 => 268,  189 => 267,  187 => 261,  184 => 260,  182 => 256,  179 => 255,  177 => 251,  174 => 250,  172 => 246,  169 => 245,  167 => 241,  164 => 240,  162 => 235,  159 => 234,  157 => 227,  154 => 226,  151 => 224,  149 => 200,  146 => 199,  144 => 194,  141 => 193,  139 => 188,  136 => 187,  134 => 182,  131 => 181,  129 => 177,  126 => 176,  123 => 174,  121 => 164,  118 => 163,  116 => 153,  113 => 152,  111 => 133,  108 => 132,  106 => 128,  104 => 90,  102 => 75,  99 => 74,  97 => 56,  94 => 55,  92 => 42,  89 => 41,  87 => 35,  84 => 34,  82 => 22,  79 => 21,  77 => 17,  74 => 16,  72 => 12,  69 => 11,  67 => 5,  64 => 4,  61 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bootstrap_3_layout.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
