<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_3f71d20dab851f4c6453989f30beda6fe4143d8b3d8e80df74319446636331f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
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
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8f98fa665ea40d4d28f775deb660a810a3ecaf190d978564793975f76ba7ed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f98fa665ea40d4d28f775deb660a810a3ecaf190d978564793975f76ba7ed7->enter($__internal_a8f98fa665ea40d4d28f775deb660a810a3ecaf190d978564793975f76ba7ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_5bf111eaabe31592325faa7da18edc43c8955d845445c27848a7e1ad3f673899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf111eaabe31592325faa7da18edc43c8955d845445c27848a7e1ad3f673899->enter($__internal_5bf111eaabe31592325faa7da18edc43c8955d845445c27848a7e1ad3f673899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8f98fa665ea40d4d28f775deb660a810a3ecaf190d978564793975f76ba7ed7->leave($__internal_a8f98fa665ea40d4d28f775deb660a810a3ecaf190d978564793975f76ba7ed7_prof);

        
        $__internal_5bf111eaabe31592325faa7da18edc43c8955d845445c27848a7e1ad3f673899->leave($__internal_5bf111eaabe31592325faa7da18edc43c8955d845445c27848a7e1ad3f673899_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c27c8ff310c530216bd3713f26bb74c3b9f8016e4e3caa5771d4a0135d8b6e4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c27c8ff310c530216bd3713f26bb74c3b9f8016e4e3caa5771d4a0135d8b6e4e->enter($__internal_c27c8ff310c530216bd3713f26bb74c3b9f8016e4e3caa5771d4a0135d8b6e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_8bab8f5febf1fc612c6d21edaf532fd85faee22988e7bf64e564412230f2758c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bab8f5febf1fc612c6d21edaf532fd85faee22988e7bf64e564412230f2758c->enter($__internal_8bab8f5febf1fc612c6d21edaf532fd85faee22988e7bf64e564412230f2758c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8bab8f5febf1fc612c6d21edaf532fd85faee22988e7bf64e564412230f2758c->leave($__internal_8bab8f5febf1fc612c6d21edaf532fd85faee22988e7bf64e564412230f2758c_prof);

        
        $__internal_c27c8ff310c530216bd3713f26bb74c3b9f8016e4e3caa5771d4a0135d8b6e4e->leave($__internal_c27c8ff310c530216bd3713f26bb74c3b9f8016e4e3caa5771d4a0135d8b6e4e_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_46b8cd01a4f891aec7bcd07e9e14a6df7b04186dec2f6ff5be09b46005c03c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46b8cd01a4f891aec7bcd07e9e14a6df7b04186dec2f6ff5be09b46005c03c1e->enter($__internal_46b8cd01a4f891aec7bcd07e9e14a6df7b04186dec2f6ff5be09b46005c03c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_21d98be66f9c4560d124f980d428a6a4d9055a6f94d746252afda0cbcf5f8b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d98be66f9c4560d124f980d428a6a4d9055a6f94d746252afda0cbcf5f8b32->enter($__internal_21d98be66f9c4560d124f980d428a6a4d9055a6f94d746252afda0cbcf5f8b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_21d98be66f9c4560d124f980d428a6a4d9055a6f94d746252afda0cbcf5f8b32->leave($__internal_21d98be66f9c4560d124f980d428a6a4d9055a6f94d746252afda0cbcf5f8b32_prof);

        
        $__internal_46b8cd01a4f891aec7bcd07e9e14a6df7b04186dec2f6ff5be09b46005c03c1e->leave($__internal_46b8cd01a4f891aec7bcd07e9e14a6df7b04186dec2f6ff5be09b46005c03c1e_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_456b2d7527022f9760857b328117e7d252a2493b306fca4f0774f8c39cae072e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_456b2d7527022f9760857b328117e7d252a2493b306fca4f0774f8c39cae072e->enter($__internal_456b2d7527022f9760857b328117e7d252a2493b306fca4f0774f8c39cae072e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_d2e9d0200a6179be441007b14f1283c8a6943418ef21669237a4e6433b5ca271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2e9d0200a6179be441007b14f1283c8a6943418ef21669237a4e6433b5ca271->enter($__internal_d2e9d0200a6179be441007b14f1283c8a6943418ef21669237a4e6433b5ca271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_d2e9d0200a6179be441007b14f1283c8a6943418ef21669237a4e6433b5ca271->leave($__internal_d2e9d0200a6179be441007b14f1283c8a6943418ef21669237a4e6433b5ca271_prof);

        
        $__internal_456b2d7527022f9760857b328117e7d252a2493b306fca4f0774f8c39cae072e->leave($__internal_456b2d7527022f9760857b328117e7d252a2493b306fca4f0774f8c39cae072e_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_0ad5af35ecc1004195e02a89da628eb8a0adff23d47f4ebc60324ba5e09d2ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ad5af35ecc1004195e02a89da628eb8a0adff23d47f4ebc60324ba5e09d2ff8->enter($__internal_0ad5af35ecc1004195e02a89da628eb8a0adff23d47f4ebc60324ba5e09d2ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_8a2108d31c7a051fd5acef685e9f76d25f08a40d69039814b13a5b47e03dd77a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a2108d31c7a051fd5acef685e9f76d25f08a40d69039814b13a5b47e03dd77a->enter($__internal_8a2108d31c7a051fd5acef685e9f76d25f08a40d69039814b13a5b47e03dd77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_8a2108d31c7a051fd5acef685e9f76d25f08a40d69039814b13a5b47e03dd77a->leave($__internal_8a2108d31c7a051fd5acef685e9f76d25f08a40d69039814b13a5b47e03dd77a_prof);

        
        $__internal_0ad5af35ecc1004195e02a89da628eb8a0adff23d47f4ebc60324ba5e09d2ff8->leave($__internal_0ad5af35ecc1004195e02a89da628eb8a0adff23d47f4ebc60324ba5e09d2ff8_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_39daf230fe57dfdec21d93884baac899566b4767be01d6cb45a05b4856eb5292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39daf230fe57dfdec21d93884baac899566b4767be01d6cb45a05b4856eb5292->enter($__internal_39daf230fe57dfdec21d93884baac899566b4767be01d6cb45a05b4856eb5292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_cdea64ba4220895cccc3eb55469e6a52fbaaeb193804706df81257e0018dc0df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdea64ba4220895cccc3eb55469e6a52fbaaeb193804706df81257e0018dc0df->enter($__internal_cdea64ba4220895cccc3eb55469e6a52fbaaeb193804706df81257e0018dc0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_cdea64ba4220895cccc3eb55469e6a52fbaaeb193804706df81257e0018dc0df->leave($__internal_cdea64ba4220895cccc3eb55469e6a52fbaaeb193804706df81257e0018dc0df_prof);

        
        $__internal_39daf230fe57dfdec21d93884baac899566b4767be01d6cb45a05b4856eb5292->leave($__internal_39daf230fe57dfdec21d93884baac899566b4767be01d6cb45a05b4856eb5292_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_9a0de29bd393e3aef44200b992e06be06f62cc41855aa795cf2d49b2ef9c6f4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a0de29bd393e3aef44200b992e06be06f62cc41855aa795cf2d49b2ef9c6f4a->enter($__internal_9a0de29bd393e3aef44200b992e06be06f62cc41855aa795cf2d49b2ef9c6f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_d7bdb3d8638daeeb96667c6e1ef0ccc1f0aee4e769af669ca8bc5c05c11d25db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7bdb3d8638daeeb96667c6e1ef0ccc1f0aee4e769af669ca8bc5c05c11d25db->enter($__internal_d7bdb3d8638daeeb96667c6e1ef0ccc1f0aee4e769af669ca8bc5c05c11d25db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_d7bdb3d8638daeeb96667c6e1ef0ccc1f0aee4e769af669ca8bc5c05c11d25db->leave($__internal_d7bdb3d8638daeeb96667c6e1ef0ccc1f0aee4e769af669ca8bc5c05c11d25db_prof);

        
        $__internal_9a0de29bd393e3aef44200b992e06be06f62cc41855aa795cf2d49b2ef9c6f4a->leave($__internal_9a0de29bd393e3aef44200b992e06be06f62cc41855aa795cf2d49b2ef9c6f4a_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_4a2c8fd25cf3348656aed0f49017d333446da28d738dfc910c68d15de92598e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a2c8fd25cf3348656aed0f49017d333446da28d738dfc910c68d15de92598e1->enter($__internal_4a2c8fd25cf3348656aed0f49017d333446da28d738dfc910c68d15de92598e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_86e7beacf53cbe79fcc8535e9b0fb7b6848e0f8891b5d763eaac4d88a6efb4d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e7beacf53cbe79fcc8535e9b0fb7b6848e0f8891b5d763eaac4d88a6efb4d7->enter($__internal_86e7beacf53cbe79fcc8535e9b0fb7b6848e0f8891b5d763eaac4d88a6efb4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_86e7beacf53cbe79fcc8535e9b0fb7b6848e0f8891b5d763eaac4d88a6efb4d7->leave($__internal_86e7beacf53cbe79fcc8535e9b0fb7b6848e0f8891b5d763eaac4d88a6efb4d7_prof);

        
        $__internal_4a2c8fd25cf3348656aed0f49017d333446da28d738dfc910c68d15de92598e1->leave($__internal_4a2c8fd25cf3348656aed0f49017d333446da28d738dfc910c68d15de92598e1_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_e929ed99c616b163d5704242d60fe2d9a9e6e80bdc98bb67492e3e91cb4db830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e929ed99c616b163d5704242d60fe2d9a9e6e80bdc98bb67492e3e91cb4db830->enter($__internal_e929ed99c616b163d5704242d60fe2d9a9e6e80bdc98bb67492e3e91cb4db830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_75b13e17c53e992fe7bbb326b86ac0638a34bf4dda8323358db9171fb00305ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b13e17c53e992fe7bbb326b86ac0638a34bf4dda8323358db9171fb00305ed->enter($__internal_75b13e17c53e992fe7bbb326b86ac0638a34bf4dda8323358db9171fb00305ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_75b13e17c53e992fe7bbb326b86ac0638a34bf4dda8323358db9171fb00305ed->leave($__internal_75b13e17c53e992fe7bbb326b86ac0638a34bf4dda8323358db9171fb00305ed_prof);

        
        $__internal_e929ed99c616b163d5704242d60fe2d9a9e6e80bdc98bb67492e3e91cb4db830->leave($__internal_e929ed99c616b163d5704242d60fe2d9a9e6e80bdc98bb67492e3e91cb4db830_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_45016b7c226e4340e71161b94b419c02e95b43470a456926c2cdd989b3b5e3b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45016b7c226e4340e71161b94b419c02e95b43470a456926c2cdd989b3b5e3b1->enter($__internal_45016b7c226e4340e71161b94b419c02e95b43470a456926c2cdd989b3b5e3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_2eaba098f492de3ba7476e0a2a05c32dd3b549ab6414fbff6ea9cf98231663ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eaba098f492de3ba7476e0a2a05c32dd3b549ab6414fbff6ea9cf98231663ff->enter($__internal_2eaba098f492de3ba7476e0a2a05c32dd3b549ab6414fbff6ea9cf98231663ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_2eaba098f492de3ba7476e0a2a05c32dd3b549ab6414fbff6ea9cf98231663ff->leave($__internal_2eaba098f492de3ba7476e0a2a05c32dd3b549ab6414fbff6ea9cf98231663ff_prof);

        
        $__internal_45016b7c226e4340e71161b94b419c02e95b43470a456926c2cdd989b3b5e3b1->leave($__internal_45016b7c226e4340e71161b94b419c02e95b43470a456926c2cdd989b3b5e3b1_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_ed91d2cb97d7d4a9855ba6bb701b46a922c6b204c93d6514780b28bbea2094e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed91d2cb97d7d4a9855ba6bb701b46a922c6b204c93d6514780b28bbea2094e5->enter($__internal_ed91d2cb97d7d4a9855ba6bb701b46a922c6b204c93d6514780b28bbea2094e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_15374ac9c0c9e1e2ae254715ee1833bc69691ba264b74b36e785039227dee48e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15374ac9c0c9e1e2ae254715ee1833bc69691ba264b74b36e785039227dee48e->enter($__internal_15374ac9c0c9e1e2ae254715ee1833bc69691ba264b74b36e785039227dee48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_15374ac9c0c9e1e2ae254715ee1833bc69691ba264b74b36e785039227dee48e->leave($__internal_15374ac9c0c9e1e2ae254715ee1833bc69691ba264b74b36e785039227dee48e_prof);

        
        $__internal_ed91d2cb97d7d4a9855ba6bb701b46a922c6b204c93d6514780b28bbea2094e5->leave($__internal_ed91d2cb97d7d4a9855ba6bb701b46a922c6b204c93d6514780b28bbea2094e5_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_012fe16459b9109ed324c1e97f0c186f937eafb2ec6f846c0cb75c174c9fbb3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_012fe16459b9109ed324c1e97f0c186f937eafb2ec6f846c0cb75c174c9fbb3d->enter($__internal_012fe16459b9109ed324c1e97f0c186f937eafb2ec6f846c0cb75c174c9fbb3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_81a55dfd45fbee75754eca1d9ce72891aac1d4f8bde4aff4ceb858ad977f4581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a55dfd45fbee75754eca1d9ce72891aac1d4f8bde4aff4ceb858ad977f4581->enter($__internal_81a55dfd45fbee75754eca1d9ce72891aac1d4f8bde4aff4ceb858ad977f4581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_81a55dfd45fbee75754eca1d9ce72891aac1d4f8bde4aff4ceb858ad977f4581->leave($__internal_81a55dfd45fbee75754eca1d9ce72891aac1d4f8bde4aff4ceb858ad977f4581_prof);

        
        $__internal_012fe16459b9109ed324c1e97f0c186f937eafb2ec6f846c0cb75c174c9fbb3d->leave($__internal_012fe16459b9109ed324c1e97f0c186f937eafb2ec6f846c0cb75c174c9fbb3d_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_7b394dafb2e112f4a4a0cbfbd82887c5dda362fa2fd80436a33af82f01534316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b394dafb2e112f4a4a0cbfbd82887c5dda362fa2fd80436a33af82f01534316->enter($__internal_7b394dafb2e112f4a4a0cbfbd82887c5dda362fa2fd80436a33af82f01534316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_62f036a27573cb9c67fa4fc7925258d2150a3f953840e27ee4a2cb5dcaacc734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f036a27573cb9c67fa4fc7925258d2150a3f953840e27ee4a2cb5dcaacc734->enter($__internal_62f036a27573cb9c67fa4fc7925258d2150a3f953840e27ee4a2cb5dcaacc734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_62f036a27573cb9c67fa4fc7925258d2150a3f953840e27ee4a2cb5dcaacc734->leave($__internal_62f036a27573cb9c67fa4fc7925258d2150a3f953840e27ee4a2cb5dcaacc734_prof);

        
        $__internal_7b394dafb2e112f4a4a0cbfbd82887c5dda362fa2fd80436a33af82f01534316->leave($__internal_7b394dafb2e112f4a4a0cbfbd82887c5dda362fa2fd80436a33af82f01534316_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_eb15221b3a5c2db3994c958b66993fd7a01a3f7bfc6bb51346bf2ec5a98ac4f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb15221b3a5c2db3994c958b66993fd7a01a3f7bfc6bb51346bf2ec5a98ac4f7->enter($__internal_eb15221b3a5c2db3994c958b66993fd7a01a3f7bfc6bb51346bf2ec5a98ac4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_44aba93248e56f6e677fff8d5ac46fbf4a8503a0e891407539b6539a3d0d1b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44aba93248e56f6e677fff8d5ac46fbf4a8503a0e891407539b6539a3d0d1b80->enter($__internal_44aba93248e56f6e677fff8d5ac46fbf4a8503a0e891407539b6539a3d0d1b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_44aba93248e56f6e677fff8d5ac46fbf4a8503a0e891407539b6539a3d0d1b80->leave($__internal_44aba93248e56f6e677fff8d5ac46fbf4a8503a0e891407539b6539a3d0d1b80_prof);

        
        $__internal_eb15221b3a5c2db3994c958b66993fd7a01a3f7bfc6bb51346bf2ec5a98ac4f7->leave($__internal_eb15221b3a5c2db3994c958b66993fd7a01a3f7bfc6bb51346bf2ec5a98ac4f7_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_df561183ed4f3026221aa17b91c348048471ce53dd1fc5b5f5e7e676dc0e4561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df561183ed4f3026221aa17b91c348048471ce53dd1fc5b5f5e7e676dc0e4561->enter($__internal_df561183ed4f3026221aa17b91c348048471ce53dd1fc5b5f5e7e676dc0e4561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_e555dfae745ca03e23bbb8ee41f849c6b24b3a620a1c2c15ee9697c3edf99a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e555dfae745ca03e23bbb8ee41f849c6b24b3a620a1c2c15ee9697c3edf99a69->enter($__internal_e555dfae745ca03e23bbb8ee41f849c6b24b3a620a1c2c15ee9697c3edf99a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_e555dfae745ca03e23bbb8ee41f849c6b24b3a620a1c2c15ee9697c3edf99a69->leave($__internal_e555dfae745ca03e23bbb8ee41f849c6b24b3a620a1c2c15ee9697c3edf99a69_prof);

        
        $__internal_df561183ed4f3026221aa17b91c348048471ce53dd1fc5b5f5e7e676dc0e4561->leave($__internal_df561183ed4f3026221aa17b91c348048471ce53dd1fc5b5f5e7e676dc0e4561_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_40b86de8888d92d167d9bf95f4e0d719e92ce8b7fb24076040d6b6c6302d6b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40b86de8888d92d167d9bf95f4e0d719e92ce8b7fb24076040d6b6c6302d6b7c->enter($__internal_40b86de8888d92d167d9bf95f4e0d719e92ce8b7fb24076040d6b6c6302d6b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_925a4acbc8c5e65e6ec0eec59b1337fc49e78bb03f0fd7db9141ca74a700eea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_925a4acbc8c5e65e6ec0eec59b1337fc49e78bb03f0fd7db9141ca74a700eea8->enter($__internal_925a4acbc8c5e65e6ec0eec59b1337fc49e78bb03f0fd7db9141ca74a700eea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_925a4acbc8c5e65e6ec0eec59b1337fc49e78bb03f0fd7db9141ca74a700eea8->leave($__internal_925a4acbc8c5e65e6ec0eec59b1337fc49e78bb03f0fd7db9141ca74a700eea8_prof);

        
        $__internal_40b86de8888d92d167d9bf95f4e0d719e92ce8b7fb24076040d6b6c6302d6b7c->leave($__internal_40b86de8888d92d167d9bf95f4e0d719e92ce8b7fb24076040d6b6c6302d6b7c_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_292bca01f16f2df72b1c9f23993a78b907eee57cbf0aec6cf31a88062e890dd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_292bca01f16f2df72b1c9f23993a78b907eee57cbf0aec6cf31a88062e890dd9->enter($__internal_292bca01f16f2df72b1c9f23993a78b907eee57cbf0aec6cf31a88062e890dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_972e740c41591334b95e80f59d6bc6f4f3680c6bbea8a25f50ac46ff48a29661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972e740c41591334b95e80f59d6bc6f4f3680c6bbea8a25f50ac46ff48a29661->enter($__internal_972e740c41591334b95e80f59d6bc6f4f3680c6bbea8a25f50ac46ff48a29661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_972e740c41591334b95e80f59d6bc6f4f3680c6bbea8a25f50ac46ff48a29661->leave($__internal_972e740c41591334b95e80f59d6bc6f4f3680c6bbea8a25f50ac46ff48a29661_prof);

        
        $__internal_292bca01f16f2df72b1c9f23993a78b907eee57cbf0aec6cf31a88062e890dd9->leave($__internal_292bca01f16f2df72b1c9f23993a78b907eee57cbf0aec6cf31a88062e890dd9_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_417cabf1f94a76b84f9dcf1db2d4d55b383ebe0adc699d64c005f4f449c03d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417cabf1f94a76b84f9dcf1db2d4d55b383ebe0adc699d64c005f4f449c03d0e->enter($__internal_417cabf1f94a76b84f9dcf1db2d4d55b383ebe0adc699d64c005f4f449c03d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_7de627441d3485f98368f58b578bba5497ad58c1e7adc9f3433208646fce2c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de627441d3485f98368f58b578bba5497ad58c1e7adc9f3433208646fce2c84->enter($__internal_7de627441d3485f98368f58b578bba5497ad58c1e7adc9f3433208646fce2c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
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
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_7de627441d3485f98368f58b578bba5497ad58c1e7adc9f3433208646fce2c84->leave($__internal_7de627441d3485f98368f58b578bba5497ad58c1e7adc9f3433208646fce2c84_prof);

        
        $__internal_417cabf1f94a76b84f9dcf1db2d4d55b383ebe0adc699d64c005f4f449c03d0e->leave($__internal_417cabf1f94a76b84f9dcf1db2d4d55b383ebe0adc699d64c005f4f449c03d0e_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9beb779e89c65d5d4eea10c50c7ca764c415dd796ad7efdd131c0bf4aa57260d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9beb779e89c65d5d4eea10c50c7ca764c415dd796ad7efdd131c0bf4aa57260d->enter($__internal_9beb779e89c65d5d4eea10c50c7ca764c415dd796ad7efdd131c0bf4aa57260d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ac16708c5ec121d09b0e30d084aa40fedf9d4f4f72989e5253c0edfea4504659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac16708c5ec121d09b0e30d084aa40fedf9d4f4f72989e5253c0edfea4504659->enter($__internal_ac16708c5ec121d09b0e30d084aa40fedf9d4f4f72989e5253c0edfea4504659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_ac16708c5ec121d09b0e30d084aa40fedf9d4f4f72989e5253c0edfea4504659->leave($__internal_ac16708c5ec121d09b0e30d084aa40fedf9d4f4f72989e5253c0edfea4504659_prof);

        
        $__internal_9beb779e89c65d5d4eea10c50c7ca764c415dd796ad7efdd131c0bf4aa57260d->leave($__internal_9beb779e89c65d5d4eea10c50c7ca764c415dd796ad7efdd131c0bf4aa57260d_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_fa6ce8ba0e5d9dd66739dcad1149367d67eeb10a909563418ab593748a13095b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa6ce8ba0e5d9dd66739dcad1149367d67eeb10a909563418ab593748a13095b->enter($__internal_fa6ce8ba0e5d9dd66739dcad1149367d67eeb10a909563418ab593748a13095b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_a66e6b020c091c294a601b5c34453872ce35926c9ad7baa750aefbe8274c7870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66e6b020c091c294a601b5c34453872ce35926c9ad7baa750aefbe8274c7870->enter($__internal_a66e6b020c091c294a601b5c34453872ce35926c9ad7baa750aefbe8274c7870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a66e6b020c091c294a601b5c34453872ce35926c9ad7baa750aefbe8274c7870->leave($__internal_a66e6b020c091c294a601b5c34453872ce35926c9ad7baa750aefbe8274c7870_prof);

        
        $__internal_fa6ce8ba0e5d9dd66739dcad1149367d67eeb10a909563418ab593748a13095b->leave($__internal_fa6ce8ba0e5d9dd66739dcad1149367d67eeb10a909563418ab593748a13095b_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_51d08f9d9ed84c99861e19674c3d56a2622520d9ef90efca89a6fa17efe1f4fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51d08f9d9ed84c99861e19674c3d56a2622520d9ef90efca89a6fa17efe1f4fd->enter($__internal_51d08f9d9ed84c99861e19674c3d56a2622520d9ef90efca89a6fa17efe1f4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_6a7cbced1015bf2f23c17f37e4d04e0c199bf3f2ea46907923915e4d63d3a8f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a7cbced1015bf2f23c17f37e4d04e0c199bf3f2ea46907923915e4d63d3a8f9->enter($__internal_6a7cbced1015bf2f23c17f37e4d04e0c199bf3f2ea46907923915e4d63d3a8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6a7cbced1015bf2f23c17f37e4d04e0c199bf3f2ea46907923915e4d63d3a8f9->leave($__internal_6a7cbced1015bf2f23c17f37e4d04e0c199bf3f2ea46907923915e4d63d3a8f9_prof);

        
        $__internal_51d08f9d9ed84c99861e19674c3d56a2622520d9ef90efca89a6fa17efe1f4fd->leave($__internal_51d08f9d9ed84c99861e19674c3d56a2622520d9ef90efca89a6fa17efe1f4fd_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_65068b18d72ea7bcdd832e490591bec702ade9a2f061f48232fe89aac111a052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65068b18d72ea7bcdd832e490591bec702ade9a2f061f48232fe89aac111a052->enter($__internal_65068b18d72ea7bcdd832e490591bec702ade9a2f061f48232fe89aac111a052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_7539b4727c16db6ef9a16e94c84e2cf5fe7fb24be86287ee173d2c9d419e1f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7539b4727c16db6ef9a16e94c84e2cf5fe7fb24be86287ee173d2c9d419e1f10->enter($__internal_7539b4727c16db6ef9a16e94c84e2cf5fe7fb24be86287ee173d2c9d419e1f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7539b4727c16db6ef9a16e94c84e2cf5fe7fb24be86287ee173d2c9d419e1f10->leave($__internal_7539b4727c16db6ef9a16e94c84e2cf5fe7fb24be86287ee173d2c9d419e1f10_prof);

        
        $__internal_65068b18d72ea7bcdd832e490591bec702ade9a2f061f48232fe89aac111a052->leave($__internal_65068b18d72ea7bcdd832e490591bec702ade9a2f061f48232fe89aac111a052_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_60f3742f135b9f80b3ce4261cceff31c3925e146c7be528a6291420d829e4ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f3742f135b9f80b3ce4261cceff31c3925e146c7be528a6291420d829e4ad3->enter($__internal_60f3742f135b9f80b3ce4261cceff31c3925e146c7be528a6291420d829e4ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_50a2e9616ce4a2fa076a7bab98421745ee968ddf609bf3bab7fc01adcd0b74c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a2e9616ce4a2fa076a7bab98421745ee968ddf609bf3bab7fc01adcd0b74c8->enter($__internal_50a2e9616ce4a2fa076a7bab98421745ee968ddf609bf3bab7fc01adcd0b74c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_50a2e9616ce4a2fa076a7bab98421745ee968ddf609bf3bab7fc01adcd0b74c8->leave($__internal_50a2e9616ce4a2fa076a7bab98421745ee968ddf609bf3bab7fc01adcd0b74c8_prof);

        
        $__internal_60f3742f135b9f80b3ce4261cceff31c3925e146c7be528a6291420d829e4ad3->leave($__internal_60f3742f135b9f80b3ce4261cceff31c3925e146c7be528a6291420d829e4ad3_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_5a04564de17b740bdf70084c5a79a83d210cbe93e845c81c2d4cdc819b9b6847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a04564de17b740bdf70084c5a79a83d210cbe93e845c81c2d4cdc819b9b6847->enter($__internal_5a04564de17b740bdf70084c5a79a83d210cbe93e845c81c2d4cdc819b9b6847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_49084079fd478c3842c077381cb083d524737af94bef024e138b0065895d5ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49084079fd478c3842c077381cb083d524737af94bef024e138b0065895d5ead->enter($__internal_49084079fd478c3842c077381cb083d524737af94bef024e138b0065895d5ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_49084079fd478c3842c077381cb083d524737af94bef024e138b0065895d5ead->leave($__internal_49084079fd478c3842c077381cb083d524737af94bef024e138b0065895d5ead_prof);

        
        $__internal_5a04564de17b740bdf70084c5a79a83d210cbe93e845c81c2d4cdc819b9b6847->leave($__internal_5a04564de17b740bdf70084c5a79a83d210cbe93e845c81c2d4cdc819b9b6847_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_f8ca942cac07b11fde6b9400dc5c61c6b3b8c1d570ef8eec68edf24d8114a7a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8ca942cac07b11fde6b9400dc5c61c6b3b8c1d570ef8eec68edf24d8114a7a1->enter($__internal_f8ca942cac07b11fde6b9400dc5c61c6b3b8c1d570ef8eec68edf24d8114a7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_e704e642ff68d32501bbcc149aa5f91d048cfcdf411a69799e3745775e792220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e704e642ff68d32501bbcc149aa5f91d048cfcdf411a69799e3745775e792220->enter($__internal_e704e642ff68d32501bbcc149aa5f91d048cfcdf411a69799e3745775e792220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_e704e642ff68d32501bbcc149aa5f91d048cfcdf411a69799e3745775e792220->leave($__internal_e704e642ff68d32501bbcc149aa5f91d048cfcdf411a69799e3745775e792220_prof);

        
        $__internal_f8ca942cac07b11fde6b9400dc5c61c6b3b8c1d570ef8eec68edf24d8114a7a1->leave($__internal_f8ca942cac07b11fde6b9400dc5c61c6b3b8c1d570ef8eec68edf24d8114a7a1_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_ed3432a4c8cffc7ccf632219ca1c9eb56afd22183831740f71dbc5ec7703a5b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3432a4c8cffc7ccf632219ca1c9eb56afd22183831740f71dbc5ec7703a5b8->enter($__internal_ed3432a4c8cffc7ccf632219ca1c9eb56afd22183831740f71dbc5ec7703a5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_864d5da71eace78afeb527ce331a85737923788d97f47c45c7de2b306e9834ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864d5da71eace78afeb527ce331a85737923788d97f47c45c7de2b306e9834ea->enter($__internal_864d5da71eace78afeb527ce331a85737923788d97f47c45c7de2b306e9834ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_864d5da71eace78afeb527ce331a85737923788d97f47c45c7de2b306e9834ea->leave($__internal_864d5da71eace78afeb527ce331a85737923788d97f47c45c7de2b306e9834ea_prof);

        
        $__internal_ed3432a4c8cffc7ccf632219ca1c9eb56afd22183831740f71dbc5ec7703a5b8->leave($__internal_ed3432a4c8cffc7ccf632219ca1c9eb56afd22183831740f71dbc5ec7703a5b8_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
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
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form.parent %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form.parent %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
