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
        $__internal_cf4d2e499d5e2042e256d40056ce44afccbb43521172daa179278700d7b5d131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf4d2e499d5e2042e256d40056ce44afccbb43521172daa179278700d7b5d131->enter($__internal_cf4d2e499d5e2042e256d40056ce44afccbb43521172daa179278700d7b5d131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_92b21f19cf646100d6873b961e286a00e5eff55a08e66fbbe2131111c3559221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b21f19cf646100d6873b961e286a00e5eff55a08e66fbbe2131111c3559221->enter($__internal_92b21f19cf646100d6873b961e286a00e5eff55a08e66fbbe2131111c3559221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf4d2e499d5e2042e256d40056ce44afccbb43521172daa179278700d7b5d131->leave($__internal_cf4d2e499d5e2042e256d40056ce44afccbb43521172daa179278700d7b5d131_prof);

        
        $__internal_92b21f19cf646100d6873b961e286a00e5eff55a08e66fbbe2131111c3559221->leave($__internal_92b21f19cf646100d6873b961e286a00e5eff55a08e66fbbe2131111c3559221_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_3f4f928dcc7d75d55737b88bc41753132eb1e76d9cd724a8db6e09cb4f6ed92f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f4f928dcc7d75d55737b88bc41753132eb1e76d9cd724a8db6e09cb4f6ed92f->enter($__internal_3f4f928dcc7d75d55737b88bc41753132eb1e76d9cd724a8db6e09cb4f6ed92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_f2f8c6b9672e590cac6465dcced0d270c46862df549eb76f7d8215ec10d3a45e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f8c6b9672e590cac6465dcced0d270c46862df549eb76f7d8215ec10d3a45e->enter($__internal_f2f8c6b9672e590cac6465dcced0d270c46862df549eb76f7d8215ec10d3a45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f2f8c6b9672e590cac6465dcced0d270c46862df549eb76f7d8215ec10d3a45e->leave($__internal_f2f8c6b9672e590cac6465dcced0d270c46862df549eb76f7d8215ec10d3a45e_prof);

        
        $__internal_3f4f928dcc7d75d55737b88bc41753132eb1e76d9cd724a8db6e09cb4f6ed92f->leave($__internal_3f4f928dcc7d75d55737b88bc41753132eb1e76d9cd724a8db6e09cb4f6ed92f_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_390e04b487c52ba21dcca63ad7c7b552e974543187c0e10fbe5c1f46fdc883a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_390e04b487c52ba21dcca63ad7c7b552e974543187c0e10fbe5c1f46fdc883a1->enter($__internal_390e04b487c52ba21dcca63ad7c7b552e974543187c0e10fbe5c1f46fdc883a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_fc0f28bd4cb96332061506f0f96e33e6ec3586dfe1c94b823943c492fab30111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc0f28bd4cb96332061506f0f96e33e6ec3586dfe1c94b823943c492fab30111->enter($__internal_fc0f28bd4cb96332061506f0f96e33e6ec3586dfe1c94b823943c492fab30111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_fc0f28bd4cb96332061506f0f96e33e6ec3586dfe1c94b823943c492fab30111->leave($__internal_fc0f28bd4cb96332061506f0f96e33e6ec3586dfe1c94b823943c492fab30111_prof);

        
        $__internal_390e04b487c52ba21dcca63ad7c7b552e974543187c0e10fbe5c1f46fdc883a1->leave($__internal_390e04b487c52ba21dcca63ad7c7b552e974543187c0e10fbe5c1f46fdc883a1_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_4430bf7bc2283cb35847aaeb183e98fca33993043c24f91b656d7a71b9f7f057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4430bf7bc2283cb35847aaeb183e98fca33993043c24f91b656d7a71b9f7f057->enter($__internal_4430bf7bc2283cb35847aaeb183e98fca33993043c24f91b656d7a71b9f7f057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_c06cafefb48c7394e5c6afc65b173376637756a4ecacc2f9c21db077b824573a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06cafefb48c7394e5c6afc65b173376637756a4ecacc2f9c21db077b824573a->enter($__internal_c06cafefb48c7394e5c6afc65b173376637756a4ecacc2f9c21db077b824573a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_c06cafefb48c7394e5c6afc65b173376637756a4ecacc2f9c21db077b824573a->leave($__internal_c06cafefb48c7394e5c6afc65b173376637756a4ecacc2f9c21db077b824573a_prof);

        
        $__internal_4430bf7bc2283cb35847aaeb183e98fca33993043c24f91b656d7a71b9f7f057->leave($__internal_4430bf7bc2283cb35847aaeb183e98fca33993043c24f91b656d7a71b9f7f057_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_a895ab952b690f3002f5f7cf77d1a3df3d176fefdc979e50f393c627492b298a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a895ab952b690f3002f5f7cf77d1a3df3d176fefdc979e50f393c627492b298a->enter($__internal_a895ab952b690f3002f5f7cf77d1a3df3d176fefdc979e50f393c627492b298a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_2d1f21cbcbd6ed44e488e8a1444c3ed288ae78e0e7830765eaa8c56d37c18f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d1f21cbcbd6ed44e488e8a1444c3ed288ae78e0e7830765eaa8c56d37c18f29->enter($__internal_2d1f21cbcbd6ed44e488e8a1444c3ed288ae78e0e7830765eaa8c56d37c18f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_2d1f21cbcbd6ed44e488e8a1444c3ed288ae78e0e7830765eaa8c56d37c18f29->leave($__internal_2d1f21cbcbd6ed44e488e8a1444c3ed288ae78e0e7830765eaa8c56d37c18f29_prof);

        
        $__internal_a895ab952b690f3002f5f7cf77d1a3df3d176fefdc979e50f393c627492b298a->leave($__internal_a895ab952b690f3002f5f7cf77d1a3df3d176fefdc979e50f393c627492b298a_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_44d22d11b4f67f58c0dda8d662398cf82fa00184172d119166116662611e7051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44d22d11b4f67f58c0dda8d662398cf82fa00184172d119166116662611e7051->enter($__internal_44d22d11b4f67f58c0dda8d662398cf82fa00184172d119166116662611e7051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_82491f508351b2663d7203e91519eb4e345dbcffba5a99cf5304655880e2233f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82491f508351b2663d7203e91519eb4e345dbcffba5a99cf5304655880e2233f->enter($__internal_82491f508351b2663d7203e91519eb4e345dbcffba5a99cf5304655880e2233f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_82491f508351b2663d7203e91519eb4e345dbcffba5a99cf5304655880e2233f->leave($__internal_82491f508351b2663d7203e91519eb4e345dbcffba5a99cf5304655880e2233f_prof);

        
        $__internal_44d22d11b4f67f58c0dda8d662398cf82fa00184172d119166116662611e7051->leave($__internal_44d22d11b4f67f58c0dda8d662398cf82fa00184172d119166116662611e7051_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_ad5757a03989bbbd54d0f14e908880e3d555689de4e3b414fe2219cd7d7d3c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5757a03989bbbd54d0f14e908880e3d555689de4e3b414fe2219cd7d7d3c04->enter($__internal_ad5757a03989bbbd54d0f14e908880e3d555689de4e3b414fe2219cd7d7d3c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_95aad051917cffc34c7b8c8d629601ab4b7956fba0e63e84871c5c90c9986717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95aad051917cffc34c7b8c8d629601ab4b7956fba0e63e84871c5c90c9986717->enter($__internal_95aad051917cffc34c7b8c8d629601ab4b7956fba0e63e84871c5c90c9986717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_95aad051917cffc34c7b8c8d629601ab4b7956fba0e63e84871c5c90c9986717->leave($__internal_95aad051917cffc34c7b8c8d629601ab4b7956fba0e63e84871c5c90c9986717_prof);

        
        $__internal_ad5757a03989bbbd54d0f14e908880e3d555689de4e3b414fe2219cd7d7d3c04->leave($__internal_ad5757a03989bbbd54d0f14e908880e3d555689de4e3b414fe2219cd7d7d3c04_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_3a3fab4a6b53d077e849463a4d310105158c30035dbdfaf649e1ac0ca5086d88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a3fab4a6b53d077e849463a4d310105158c30035dbdfaf649e1ac0ca5086d88->enter($__internal_3a3fab4a6b53d077e849463a4d310105158c30035dbdfaf649e1ac0ca5086d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_cf43b06b07008976622b56332057c3b3a05057f12ab5454f9bc7184dbe9eb6de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf43b06b07008976622b56332057c3b3a05057f12ab5454f9bc7184dbe9eb6de->enter($__internal_cf43b06b07008976622b56332057c3b3a05057f12ab5454f9bc7184dbe9eb6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_cf43b06b07008976622b56332057c3b3a05057f12ab5454f9bc7184dbe9eb6de->leave($__internal_cf43b06b07008976622b56332057c3b3a05057f12ab5454f9bc7184dbe9eb6de_prof);

        
        $__internal_3a3fab4a6b53d077e849463a4d310105158c30035dbdfaf649e1ac0ca5086d88->leave($__internal_3a3fab4a6b53d077e849463a4d310105158c30035dbdfaf649e1ac0ca5086d88_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_cf58692583f25f818db71e50b4245fa38baf1d087f63271a9b1f0a9e076b980b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf58692583f25f818db71e50b4245fa38baf1d087f63271a9b1f0a9e076b980b->enter($__internal_cf58692583f25f818db71e50b4245fa38baf1d087f63271a9b1f0a9e076b980b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_d90f2db6c178f03a8a17701c65b84a82962676dd34252d6367589440101e975b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90f2db6c178f03a8a17701c65b84a82962676dd34252d6367589440101e975b->enter($__internal_d90f2db6c178f03a8a17701c65b84a82962676dd34252d6367589440101e975b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_d90f2db6c178f03a8a17701c65b84a82962676dd34252d6367589440101e975b->leave($__internal_d90f2db6c178f03a8a17701c65b84a82962676dd34252d6367589440101e975b_prof);

        
        $__internal_cf58692583f25f818db71e50b4245fa38baf1d087f63271a9b1f0a9e076b980b->leave($__internal_cf58692583f25f818db71e50b4245fa38baf1d087f63271a9b1f0a9e076b980b_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_58a6d8ab3d7fd75531b370fbb7845ff6f76d6affd8b72e175f18c487d601efd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a6d8ab3d7fd75531b370fbb7845ff6f76d6affd8b72e175f18c487d601efd7->enter($__internal_58a6d8ab3d7fd75531b370fbb7845ff6f76d6affd8b72e175f18c487d601efd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_b76d26d45bb82acd1bd5294dff38eafe83923456dbb8a5e40cbf8f5962f0b54c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76d26d45bb82acd1bd5294dff38eafe83923456dbb8a5e40cbf8f5962f0b54c->enter($__internal_b76d26d45bb82acd1bd5294dff38eafe83923456dbb8a5e40cbf8f5962f0b54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_b76d26d45bb82acd1bd5294dff38eafe83923456dbb8a5e40cbf8f5962f0b54c->leave($__internal_b76d26d45bb82acd1bd5294dff38eafe83923456dbb8a5e40cbf8f5962f0b54c_prof);

        
        $__internal_58a6d8ab3d7fd75531b370fbb7845ff6f76d6affd8b72e175f18c487d601efd7->leave($__internal_58a6d8ab3d7fd75531b370fbb7845ff6f76d6affd8b72e175f18c487d601efd7_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_1cf5d006bbca8406458da44c5410af9ddc0aed23ab2e1a287cda10e650f4bd6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cf5d006bbca8406458da44c5410af9ddc0aed23ab2e1a287cda10e650f4bd6a->enter($__internal_1cf5d006bbca8406458da44c5410af9ddc0aed23ab2e1a287cda10e650f4bd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_74a3d62a924a6cac3515ce53e894c3d3361bda86d17ba17b2f4984fcab020e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a3d62a924a6cac3515ce53e894c3d3361bda86d17ba17b2f4984fcab020e65->enter($__internal_74a3d62a924a6cac3515ce53e894c3d3361bda86d17ba17b2f4984fcab020e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_74a3d62a924a6cac3515ce53e894c3d3361bda86d17ba17b2f4984fcab020e65->leave($__internal_74a3d62a924a6cac3515ce53e894c3d3361bda86d17ba17b2f4984fcab020e65_prof);

        
        $__internal_1cf5d006bbca8406458da44c5410af9ddc0aed23ab2e1a287cda10e650f4bd6a->leave($__internal_1cf5d006bbca8406458da44c5410af9ddc0aed23ab2e1a287cda10e650f4bd6a_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_9653bd5f22ea97569c5eccbfb662c89b85000d8ac9c6fe7edad61b224b282ffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9653bd5f22ea97569c5eccbfb662c89b85000d8ac9c6fe7edad61b224b282ffb->enter($__internal_9653bd5f22ea97569c5eccbfb662c89b85000d8ac9c6fe7edad61b224b282ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_db46eb9a4dd449f3e1c5c92d5a6696ee2c66d0f0f9d3ee60905d4d6ab718b758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db46eb9a4dd449f3e1c5c92d5a6696ee2c66d0f0f9d3ee60905d4d6ab718b758->enter($__internal_db46eb9a4dd449f3e1c5c92d5a6696ee2c66d0f0f9d3ee60905d4d6ab718b758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_db46eb9a4dd449f3e1c5c92d5a6696ee2c66d0f0f9d3ee60905d4d6ab718b758->leave($__internal_db46eb9a4dd449f3e1c5c92d5a6696ee2c66d0f0f9d3ee60905d4d6ab718b758_prof);

        
        $__internal_9653bd5f22ea97569c5eccbfb662c89b85000d8ac9c6fe7edad61b224b282ffb->leave($__internal_9653bd5f22ea97569c5eccbfb662c89b85000d8ac9c6fe7edad61b224b282ffb_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_474501c2e56afc802e66a488d1944c02a7b99bac43a15dfacaae5ffac83968e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_474501c2e56afc802e66a488d1944c02a7b99bac43a15dfacaae5ffac83968e6->enter($__internal_474501c2e56afc802e66a488d1944c02a7b99bac43a15dfacaae5ffac83968e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_c3ca95b0a6b28e4865504cfe0017965022ff4490b7e7c686bed4140c98efb953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ca95b0a6b28e4865504cfe0017965022ff4490b7e7c686bed4140c98efb953->enter($__internal_c3ca95b0a6b28e4865504cfe0017965022ff4490b7e7c686bed4140c98efb953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_c3ca95b0a6b28e4865504cfe0017965022ff4490b7e7c686bed4140c98efb953->leave($__internal_c3ca95b0a6b28e4865504cfe0017965022ff4490b7e7c686bed4140c98efb953_prof);

        
        $__internal_474501c2e56afc802e66a488d1944c02a7b99bac43a15dfacaae5ffac83968e6->leave($__internal_474501c2e56afc802e66a488d1944c02a7b99bac43a15dfacaae5ffac83968e6_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_9c54ddcb5e52b24218c3f66b02971bb3212d4fe7d7fba7fb0f78c89dd1f03a51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c54ddcb5e52b24218c3f66b02971bb3212d4fe7d7fba7fb0f78c89dd1f03a51->enter($__internal_9c54ddcb5e52b24218c3f66b02971bb3212d4fe7d7fba7fb0f78c89dd1f03a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_b36e454d1d58c4a4af4a3defa52173df5a4260085f7ae29b13e1c37ea5e505d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36e454d1d58c4a4af4a3defa52173df5a4260085f7ae29b13e1c37ea5e505d0->enter($__internal_b36e454d1d58c4a4af4a3defa52173df5a4260085f7ae29b13e1c37ea5e505d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_b36e454d1d58c4a4af4a3defa52173df5a4260085f7ae29b13e1c37ea5e505d0->leave($__internal_b36e454d1d58c4a4af4a3defa52173df5a4260085f7ae29b13e1c37ea5e505d0_prof);

        
        $__internal_9c54ddcb5e52b24218c3f66b02971bb3212d4fe7d7fba7fb0f78c89dd1f03a51->leave($__internal_9c54ddcb5e52b24218c3f66b02971bb3212d4fe7d7fba7fb0f78c89dd1f03a51_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_a3cb89f9c4caadd9cb24c83d7383989cffa9205bec84e7148b7ebab146f40261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3cb89f9c4caadd9cb24c83d7383989cffa9205bec84e7148b7ebab146f40261->enter($__internal_a3cb89f9c4caadd9cb24c83d7383989cffa9205bec84e7148b7ebab146f40261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_4f6e70dc3251ba7ccdb632a566a02085a4dd6c114aedad0480c92982dd8a6a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6e70dc3251ba7ccdb632a566a02085a4dd6c114aedad0480c92982dd8a6a78->enter($__internal_4f6e70dc3251ba7ccdb632a566a02085a4dd6c114aedad0480c92982dd8a6a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

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
        
        $__internal_4f6e70dc3251ba7ccdb632a566a02085a4dd6c114aedad0480c92982dd8a6a78->leave($__internal_4f6e70dc3251ba7ccdb632a566a02085a4dd6c114aedad0480c92982dd8a6a78_prof);

        
        $__internal_a3cb89f9c4caadd9cb24c83d7383989cffa9205bec84e7148b7ebab146f40261->leave($__internal_a3cb89f9c4caadd9cb24c83d7383989cffa9205bec84e7148b7ebab146f40261_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_3a2f462ef99f919e5628a2736259dcc41bd95489b8aa565293c72116ca959a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2f462ef99f919e5628a2736259dcc41bd95489b8aa565293c72116ca959a72->enter($__internal_3a2f462ef99f919e5628a2736259dcc41bd95489b8aa565293c72116ca959a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_edb004a1273fbeed644be9a230a77879c2be602333b900e8f822555994179a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb004a1273fbeed644be9a230a77879c2be602333b900e8f822555994179a08->enter($__internal_edb004a1273fbeed644be9a230a77879c2be602333b900e8f822555994179a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_edb004a1273fbeed644be9a230a77879c2be602333b900e8f822555994179a08->leave($__internal_edb004a1273fbeed644be9a230a77879c2be602333b900e8f822555994179a08_prof);

        
        $__internal_3a2f462ef99f919e5628a2736259dcc41bd95489b8aa565293c72116ca959a72->leave($__internal_3a2f462ef99f919e5628a2736259dcc41bd95489b8aa565293c72116ca959a72_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_4d1e0816e05a93c58675030973d0b5e76ccd4610bad2c9f344cc1f82e0864958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d1e0816e05a93c58675030973d0b5e76ccd4610bad2c9f344cc1f82e0864958->enter($__internal_4d1e0816e05a93c58675030973d0b5e76ccd4610bad2c9f344cc1f82e0864958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_d1fa198d7d97413b18ee528e8ac6191ded05be592c61e2ce3a559d36f9c28d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1fa198d7d97413b18ee528e8ac6191ded05be592c61e2ce3a559d36f9c28d33->enter($__internal_d1fa198d7d97413b18ee528e8ac6191ded05be592c61e2ce3a559d36f9c28d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d1fa198d7d97413b18ee528e8ac6191ded05be592c61e2ce3a559d36f9c28d33->leave($__internal_d1fa198d7d97413b18ee528e8ac6191ded05be592c61e2ce3a559d36f9c28d33_prof);

        
        $__internal_4d1e0816e05a93c58675030973d0b5e76ccd4610bad2c9f344cc1f82e0864958->leave($__internal_4d1e0816e05a93c58675030973d0b5e76ccd4610bad2c9f344cc1f82e0864958_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_bb63c61f4df35e3558d5804c69204c40a9425cab66d0c92f060f8d2b42eb9d49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb63c61f4df35e3558d5804c69204c40a9425cab66d0c92f060f8d2b42eb9d49->enter($__internal_bb63c61f4df35e3558d5804c69204c40a9425cab66d0c92f060f8d2b42eb9d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_7f5df85c1380c9dd38af982cf1a7f5b5c348e1409bc1a77100e1e7991797eb90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5df85c1380c9dd38af982cf1a7f5b5c348e1409bc1a77100e1e7991797eb90->enter($__internal_7f5df85c1380c9dd38af982cf1a7f5b5c348e1409bc1a77100e1e7991797eb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_7f5df85c1380c9dd38af982cf1a7f5b5c348e1409bc1a77100e1e7991797eb90->leave($__internal_7f5df85c1380c9dd38af982cf1a7f5b5c348e1409bc1a77100e1e7991797eb90_prof);

        
        $__internal_bb63c61f4df35e3558d5804c69204c40a9425cab66d0c92f060f8d2b42eb9d49->leave($__internal_bb63c61f4df35e3558d5804c69204c40a9425cab66d0c92f060f8d2b42eb9d49_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_103b9e1460bce721278c435bee3a4d4bed4215f897e7b8b93ff6ebc8e409b5a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_103b9e1460bce721278c435bee3a4d4bed4215f897e7b8b93ff6ebc8e409b5a2->enter($__internal_103b9e1460bce721278c435bee3a4d4bed4215f897e7b8b93ff6ebc8e409b5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_308d446326ed3108677d93d26071748fcadbaad5b465dc09ef03a5e0e169de9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308d446326ed3108677d93d26071748fcadbaad5b465dc09ef03a5e0e169de9b->enter($__internal_308d446326ed3108677d93d26071748fcadbaad5b465dc09ef03a5e0e169de9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_308d446326ed3108677d93d26071748fcadbaad5b465dc09ef03a5e0e169de9b->leave($__internal_308d446326ed3108677d93d26071748fcadbaad5b465dc09ef03a5e0e169de9b_prof);

        
        $__internal_103b9e1460bce721278c435bee3a4d4bed4215f897e7b8b93ff6ebc8e409b5a2->leave($__internal_103b9e1460bce721278c435bee3a4d4bed4215f897e7b8b93ff6ebc8e409b5a2_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_963ebe2760aece2a0aee7716374fa6653f9e32b1e26af2661c2bd0f06b675d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_963ebe2760aece2a0aee7716374fa6653f9e32b1e26af2661c2bd0f06b675d32->enter($__internal_963ebe2760aece2a0aee7716374fa6653f9e32b1e26af2661c2bd0f06b675d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_d7dc39cf23b3aa74de377b0511ccadc83a3adc5b6c512e19d6137574d165a7ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7dc39cf23b3aa74de377b0511ccadc83a3adc5b6c512e19d6137574d165a7ce->enter($__internal_d7dc39cf23b3aa74de377b0511ccadc83a3adc5b6c512e19d6137574d165a7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d7dc39cf23b3aa74de377b0511ccadc83a3adc5b6c512e19d6137574d165a7ce->leave($__internal_d7dc39cf23b3aa74de377b0511ccadc83a3adc5b6c512e19d6137574d165a7ce_prof);

        
        $__internal_963ebe2760aece2a0aee7716374fa6653f9e32b1e26af2661c2bd0f06b675d32->leave($__internal_963ebe2760aece2a0aee7716374fa6653f9e32b1e26af2661c2bd0f06b675d32_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_226953cafdc7631121bb34854c5a891791b10e0fce86508a7a345e069e5ad483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_226953cafdc7631121bb34854c5a891791b10e0fce86508a7a345e069e5ad483->enter($__internal_226953cafdc7631121bb34854c5a891791b10e0fce86508a7a345e069e5ad483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_eef60e824a984883edab6f1bea7c84575f46a33119b40854a11035ab35528a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef60e824a984883edab6f1bea7c84575f46a33119b40854a11035ab35528a24->enter($__internal_eef60e824a984883edab6f1bea7c84575f46a33119b40854a11035ab35528a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_eef60e824a984883edab6f1bea7c84575f46a33119b40854a11035ab35528a24->leave($__internal_eef60e824a984883edab6f1bea7c84575f46a33119b40854a11035ab35528a24_prof);

        
        $__internal_226953cafdc7631121bb34854c5a891791b10e0fce86508a7a345e069e5ad483->leave($__internal_226953cafdc7631121bb34854c5a891791b10e0fce86508a7a345e069e5ad483_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_c2200b45f5f3d06073ce6557bb6e4710f3f87dc6720b17973019fb9abc10fade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2200b45f5f3d06073ce6557bb6e4710f3f87dc6720b17973019fb9abc10fade->enter($__internal_c2200b45f5f3d06073ce6557bb6e4710f3f87dc6720b17973019fb9abc10fade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_51bafe144ccba7c42ec447602312ddff7f7609caa83d85a6d9f1812881a06692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51bafe144ccba7c42ec447602312ddff7f7609caa83d85a6d9f1812881a06692->enter($__internal_51bafe144ccba7c42ec447602312ddff7f7609caa83d85a6d9f1812881a06692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_51bafe144ccba7c42ec447602312ddff7f7609caa83d85a6d9f1812881a06692->leave($__internal_51bafe144ccba7c42ec447602312ddff7f7609caa83d85a6d9f1812881a06692_prof);

        
        $__internal_c2200b45f5f3d06073ce6557bb6e4710f3f87dc6720b17973019fb9abc10fade->leave($__internal_c2200b45f5f3d06073ce6557bb6e4710f3f87dc6720b17973019fb9abc10fade_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_1daaee87a26964fd501e700bcaf264823bc6f6412adc3a08721e90fca71faf54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1daaee87a26964fd501e700bcaf264823bc6f6412adc3a08721e90fca71faf54->enter($__internal_1daaee87a26964fd501e700bcaf264823bc6f6412adc3a08721e90fca71faf54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_e0a94eba4646badc304d5d70297ee8f82ca959013eeabb8c741af963867a70cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a94eba4646badc304d5d70297ee8f82ca959013eeabb8c741af963867a70cf->enter($__internal_e0a94eba4646badc304d5d70297ee8f82ca959013eeabb8c741af963867a70cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e0a94eba4646badc304d5d70297ee8f82ca959013eeabb8c741af963867a70cf->leave($__internal_e0a94eba4646badc304d5d70297ee8f82ca959013eeabb8c741af963867a70cf_prof);

        
        $__internal_1daaee87a26964fd501e700bcaf264823bc6f6412adc3a08721e90fca71faf54->leave($__internal_1daaee87a26964fd501e700bcaf264823bc6f6412adc3a08721e90fca71faf54_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b2e264f4994709fc17379d1b136b62aa5ea4a6141d5a89369e1be18a738be748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e264f4994709fc17379d1b136b62aa5ea4a6141d5a89369e1be18a738be748->enter($__internal_b2e264f4994709fc17379d1b136b62aa5ea4a6141d5a89369e1be18a738be748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_f1b479e2756c4809a69639e416a68c3fb3fd1d2788091fee68c4ce8d93dac44c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b479e2756c4809a69639e416a68c3fb3fd1d2788091fee68c4ce8d93dac44c->enter($__internal_f1b479e2756c4809a69639e416a68c3fb3fd1d2788091fee68c4ce8d93dac44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_f1b479e2756c4809a69639e416a68c3fb3fd1d2788091fee68c4ce8d93dac44c->leave($__internal_f1b479e2756c4809a69639e416a68c3fb3fd1d2788091fee68c4ce8d93dac44c_prof);

        
        $__internal_b2e264f4994709fc17379d1b136b62aa5ea4a6141d5a89369e1be18a738be748->leave($__internal_b2e264f4994709fc17379d1b136b62aa5ea4a6141d5a89369e1be18a738be748_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_a738c6cf63b798e10b8cd520f97acbf5040137533d2bc8ea85d9f29a967a0f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a738c6cf63b798e10b8cd520f97acbf5040137533d2bc8ea85d9f29a967a0f28->enter($__internal_a738c6cf63b798e10b8cd520f97acbf5040137533d2bc8ea85d9f29a967a0f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_6617947783cdc2a1b468116ea67611ca12cd9a68b52e3246fa32803d4cc8e73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6617947783cdc2a1b468116ea67611ca12cd9a68b52e3246fa32803d4cc8e73f->enter($__internal_6617947783cdc2a1b468116ea67611ca12cd9a68b52e3246fa32803d4cc8e73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_6617947783cdc2a1b468116ea67611ca12cd9a68b52e3246fa32803d4cc8e73f->leave($__internal_6617947783cdc2a1b468116ea67611ca12cd9a68b52e3246fa32803d4cc8e73f_prof);

        
        $__internal_a738c6cf63b798e10b8cd520f97acbf5040137533d2bc8ea85d9f29a967a0f28->leave($__internal_a738c6cf63b798e10b8cd520f97acbf5040137533d2bc8ea85d9f29a967a0f28_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_d2d903bb0f10fb31c7fae5055a0f25a0d7df637712c48bcab644f082c1bebf42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d903bb0f10fb31c7fae5055a0f25a0d7df637712c48bcab644f082c1bebf42->enter($__internal_d2d903bb0f10fb31c7fae5055a0f25a0d7df637712c48bcab644f082c1bebf42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_5371e066a07b8baa7dbea6637f0d35be6f5939ac300cdb293be21758d33ef28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5371e066a07b8baa7dbea6637f0d35be6f5939ac300cdb293be21758d33ef28a->enter($__internal_5371e066a07b8baa7dbea6637f0d35be6f5939ac300cdb293be21758d33ef28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_5371e066a07b8baa7dbea6637f0d35be6f5939ac300cdb293be21758d33ef28a->leave($__internal_5371e066a07b8baa7dbea6637f0d35be6f5939ac300cdb293be21758d33ef28a_prof);

        
        $__internal_d2d903bb0f10fb31c7fae5055a0f25a0d7df637712c48bcab644f082c1bebf42->leave($__internal_d2d903bb0f10fb31c7fae5055a0f25a0d7df637712c48bcab644f082c1bebf42_prof);

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
