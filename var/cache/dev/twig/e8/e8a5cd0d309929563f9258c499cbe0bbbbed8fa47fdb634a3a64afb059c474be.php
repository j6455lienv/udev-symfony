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
        $__internal_05c96316a17c11c3e502167250c5399995a5420055931e5c9a8ee742a5936025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c96316a17c11c3e502167250c5399995a5420055931e5c9a8ee742a5936025->enter($__internal_05c96316a17c11c3e502167250c5399995a5420055931e5c9a8ee742a5936025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_36c571c54202c806dcec34c4d20cb03b43594f48dfdfa5354d8d8f882edb8360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36c571c54202c806dcec34c4d20cb03b43594f48dfdfa5354d8d8f882edb8360->enter($__internal_36c571c54202c806dcec34c4d20cb03b43594f48dfdfa5354d8d8f882edb8360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05c96316a17c11c3e502167250c5399995a5420055931e5c9a8ee742a5936025->leave($__internal_05c96316a17c11c3e502167250c5399995a5420055931e5c9a8ee742a5936025_prof);

        
        $__internal_36c571c54202c806dcec34c4d20cb03b43594f48dfdfa5354d8d8f882edb8360->leave($__internal_36c571c54202c806dcec34c4d20cb03b43594f48dfdfa5354d8d8f882edb8360_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_963c373f065493fd3d6a45fd83b61fd890c89d81f476d0d003a70575d470f140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_963c373f065493fd3d6a45fd83b61fd890c89d81f476d0d003a70575d470f140->enter($__internal_963c373f065493fd3d6a45fd83b61fd890c89d81f476d0d003a70575d470f140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_559831b823ab01bf3189c613c14493afde9d12ecbfd3d3991b822b077b607b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_559831b823ab01bf3189c613c14493afde9d12ecbfd3d3991b822b077b607b35->enter($__internal_559831b823ab01bf3189c613c14493afde9d12ecbfd3d3991b822b077b607b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_559831b823ab01bf3189c613c14493afde9d12ecbfd3d3991b822b077b607b35->leave($__internal_559831b823ab01bf3189c613c14493afde9d12ecbfd3d3991b822b077b607b35_prof);

        
        $__internal_963c373f065493fd3d6a45fd83b61fd890c89d81f476d0d003a70575d470f140->leave($__internal_963c373f065493fd3d6a45fd83b61fd890c89d81f476d0d003a70575d470f140_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_4fcc0457dcb3406cb56cca7009ef94419fe95b5ee7ced517a510986e2345e34b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fcc0457dcb3406cb56cca7009ef94419fe95b5ee7ced517a510986e2345e34b->enter($__internal_4fcc0457dcb3406cb56cca7009ef94419fe95b5ee7ced517a510986e2345e34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_1bd9b5af38fef0d799f0f15f33e4cdc2f3734a74273fc26e8e28b80b70824f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd9b5af38fef0d799f0f15f33e4cdc2f3734a74273fc26e8e28b80b70824f3c->enter($__internal_1bd9b5af38fef0d799f0f15f33e4cdc2f3734a74273fc26e8e28b80b70824f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_1bd9b5af38fef0d799f0f15f33e4cdc2f3734a74273fc26e8e28b80b70824f3c->leave($__internal_1bd9b5af38fef0d799f0f15f33e4cdc2f3734a74273fc26e8e28b80b70824f3c_prof);

        
        $__internal_4fcc0457dcb3406cb56cca7009ef94419fe95b5ee7ced517a510986e2345e34b->leave($__internal_4fcc0457dcb3406cb56cca7009ef94419fe95b5ee7ced517a510986e2345e34b_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_99508ed8da337d07db26c74c5223eab45458731c529e496d7c74f959631d9314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99508ed8da337d07db26c74c5223eab45458731c529e496d7c74f959631d9314->enter($__internal_99508ed8da337d07db26c74c5223eab45458731c529e496d7c74f959631d9314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_cbebe40f877f77cd275af4a65b035d8a720f8761fbcea88014bdfd5da16656d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbebe40f877f77cd275af4a65b035d8a720f8761fbcea88014bdfd5da16656d4->enter($__internal_cbebe40f877f77cd275af4a65b035d8a720f8761fbcea88014bdfd5da16656d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_cbebe40f877f77cd275af4a65b035d8a720f8761fbcea88014bdfd5da16656d4->leave($__internal_cbebe40f877f77cd275af4a65b035d8a720f8761fbcea88014bdfd5da16656d4_prof);

        
        $__internal_99508ed8da337d07db26c74c5223eab45458731c529e496d7c74f959631d9314->leave($__internal_99508ed8da337d07db26c74c5223eab45458731c529e496d7c74f959631d9314_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_985fd0bcaaa6b6d2c344e1027db4c70e7eab09436e25f3d68ed7ccf09e6ec0e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_985fd0bcaaa6b6d2c344e1027db4c70e7eab09436e25f3d68ed7ccf09e6ec0e3->enter($__internal_985fd0bcaaa6b6d2c344e1027db4c70e7eab09436e25f3d68ed7ccf09e6ec0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_2c4fdddb8a969fc6e3b19bbc547feea45023b0d7377451c21e7384032abc6010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c4fdddb8a969fc6e3b19bbc547feea45023b0d7377451c21e7384032abc6010->enter($__internal_2c4fdddb8a969fc6e3b19bbc547feea45023b0d7377451c21e7384032abc6010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_2c4fdddb8a969fc6e3b19bbc547feea45023b0d7377451c21e7384032abc6010->leave($__internal_2c4fdddb8a969fc6e3b19bbc547feea45023b0d7377451c21e7384032abc6010_prof);

        
        $__internal_985fd0bcaaa6b6d2c344e1027db4c70e7eab09436e25f3d68ed7ccf09e6ec0e3->leave($__internal_985fd0bcaaa6b6d2c344e1027db4c70e7eab09436e25f3d68ed7ccf09e6ec0e3_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_fbb665cbe5d7e555e2e54dfd0c55db4e4ca17ed1304968687644f03b57012f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbb665cbe5d7e555e2e54dfd0c55db4e4ca17ed1304968687644f03b57012f7e->enter($__internal_fbb665cbe5d7e555e2e54dfd0c55db4e4ca17ed1304968687644f03b57012f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_55e02a27e9095670d442f1e00e558f834f18ff9293537c366202397b3cfb9989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e02a27e9095670d442f1e00e558f834f18ff9293537c366202397b3cfb9989->enter($__internal_55e02a27e9095670d442f1e00e558f834f18ff9293537c366202397b3cfb9989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_55e02a27e9095670d442f1e00e558f834f18ff9293537c366202397b3cfb9989->leave($__internal_55e02a27e9095670d442f1e00e558f834f18ff9293537c366202397b3cfb9989_prof);

        
        $__internal_fbb665cbe5d7e555e2e54dfd0c55db4e4ca17ed1304968687644f03b57012f7e->leave($__internal_fbb665cbe5d7e555e2e54dfd0c55db4e4ca17ed1304968687644f03b57012f7e_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_47e531e9ef5565abea072c2bf365f7d985c79347cacce52e22e360c3363fc44a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e531e9ef5565abea072c2bf365f7d985c79347cacce52e22e360c3363fc44a->enter($__internal_47e531e9ef5565abea072c2bf365f7d985c79347cacce52e22e360c3363fc44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_f7bc6e739cc34de1ccd65261d5f39ac6e8f6c81dda7e55f833106c2d2b947835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bc6e739cc34de1ccd65261d5f39ac6e8f6c81dda7e55f833106c2d2b947835->enter($__internal_f7bc6e739cc34de1ccd65261d5f39ac6e8f6c81dda7e55f833106c2d2b947835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_f7bc6e739cc34de1ccd65261d5f39ac6e8f6c81dda7e55f833106c2d2b947835->leave($__internal_f7bc6e739cc34de1ccd65261d5f39ac6e8f6c81dda7e55f833106c2d2b947835_prof);

        
        $__internal_47e531e9ef5565abea072c2bf365f7d985c79347cacce52e22e360c3363fc44a->leave($__internal_47e531e9ef5565abea072c2bf365f7d985c79347cacce52e22e360c3363fc44a_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_351d27c13973cadba8d908cb6431ccf04fe50d48c53d4a0f7cff81984f78078d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_351d27c13973cadba8d908cb6431ccf04fe50d48c53d4a0f7cff81984f78078d->enter($__internal_351d27c13973cadba8d908cb6431ccf04fe50d48c53d4a0f7cff81984f78078d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_0a0768554a57f1905dbc9c13cb47b7f6487c086da280ae05c503792c64bf8650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a0768554a57f1905dbc9c13cb47b7f6487c086da280ae05c503792c64bf8650->enter($__internal_0a0768554a57f1905dbc9c13cb47b7f6487c086da280ae05c503792c64bf8650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_0a0768554a57f1905dbc9c13cb47b7f6487c086da280ae05c503792c64bf8650->leave($__internal_0a0768554a57f1905dbc9c13cb47b7f6487c086da280ae05c503792c64bf8650_prof);

        
        $__internal_351d27c13973cadba8d908cb6431ccf04fe50d48c53d4a0f7cff81984f78078d->leave($__internal_351d27c13973cadba8d908cb6431ccf04fe50d48c53d4a0f7cff81984f78078d_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_367f946e6d7e876731f5be8f7faee920e7ce8ebee746d59e9b4552a6f0c6e252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_367f946e6d7e876731f5be8f7faee920e7ce8ebee746d59e9b4552a6f0c6e252->enter($__internal_367f946e6d7e876731f5be8f7faee920e7ce8ebee746d59e9b4552a6f0c6e252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_7c28cb8d05d59e8f7e8c91ea9e9ae99233b453e15a369a9ff12169adf7124149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c28cb8d05d59e8f7e8c91ea9e9ae99233b453e15a369a9ff12169adf7124149->enter($__internal_7c28cb8d05d59e8f7e8c91ea9e9ae99233b453e15a369a9ff12169adf7124149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_7c28cb8d05d59e8f7e8c91ea9e9ae99233b453e15a369a9ff12169adf7124149->leave($__internal_7c28cb8d05d59e8f7e8c91ea9e9ae99233b453e15a369a9ff12169adf7124149_prof);

        
        $__internal_367f946e6d7e876731f5be8f7faee920e7ce8ebee746d59e9b4552a6f0c6e252->leave($__internal_367f946e6d7e876731f5be8f7faee920e7ce8ebee746d59e9b4552a6f0c6e252_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_659cada16ff1753e603170f084e8e29937bcad6b34ecacfba1f5ed810c677406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_659cada16ff1753e603170f084e8e29937bcad6b34ecacfba1f5ed810c677406->enter($__internal_659cada16ff1753e603170f084e8e29937bcad6b34ecacfba1f5ed810c677406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_354f2b1cfebfb1123ed2c3efb9efd3d73eff99d0f149bd32110d246f451160b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354f2b1cfebfb1123ed2c3efb9efd3d73eff99d0f149bd32110d246f451160b5->enter($__internal_354f2b1cfebfb1123ed2c3efb9efd3d73eff99d0f149bd32110d246f451160b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_354f2b1cfebfb1123ed2c3efb9efd3d73eff99d0f149bd32110d246f451160b5->leave($__internal_354f2b1cfebfb1123ed2c3efb9efd3d73eff99d0f149bd32110d246f451160b5_prof);

        
        $__internal_659cada16ff1753e603170f084e8e29937bcad6b34ecacfba1f5ed810c677406->leave($__internal_659cada16ff1753e603170f084e8e29937bcad6b34ecacfba1f5ed810c677406_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_a1d9f23ee53f6fca267d9f580a347bb0c09d3fcaa86d703885aeb1dca5d2f242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1d9f23ee53f6fca267d9f580a347bb0c09d3fcaa86d703885aeb1dca5d2f242->enter($__internal_a1d9f23ee53f6fca267d9f580a347bb0c09d3fcaa86d703885aeb1dca5d2f242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_d39e1d78a2dbf3efe015d16a9e5eddefbbf53c8a007c1c76fc08d646515d7035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39e1d78a2dbf3efe015d16a9e5eddefbbf53c8a007c1c76fc08d646515d7035->enter($__internal_d39e1d78a2dbf3efe015d16a9e5eddefbbf53c8a007c1c76fc08d646515d7035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_d39e1d78a2dbf3efe015d16a9e5eddefbbf53c8a007c1c76fc08d646515d7035->leave($__internal_d39e1d78a2dbf3efe015d16a9e5eddefbbf53c8a007c1c76fc08d646515d7035_prof);

        
        $__internal_a1d9f23ee53f6fca267d9f580a347bb0c09d3fcaa86d703885aeb1dca5d2f242->leave($__internal_a1d9f23ee53f6fca267d9f580a347bb0c09d3fcaa86d703885aeb1dca5d2f242_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_d023912bcc8a5db884dd5d81a5d9f911544ed3fb13a2a9ef830b93001444af4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d023912bcc8a5db884dd5d81a5d9f911544ed3fb13a2a9ef830b93001444af4d->enter($__internal_d023912bcc8a5db884dd5d81a5d9f911544ed3fb13a2a9ef830b93001444af4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_3dd5767fb12bd37517c183c1b96eab2ddbfbd7338a6969516bb0519ac6dcfaf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd5767fb12bd37517c183c1b96eab2ddbfbd7338a6969516bb0519ac6dcfaf1->enter($__internal_3dd5767fb12bd37517c183c1b96eab2ddbfbd7338a6969516bb0519ac6dcfaf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_3dd5767fb12bd37517c183c1b96eab2ddbfbd7338a6969516bb0519ac6dcfaf1->leave($__internal_3dd5767fb12bd37517c183c1b96eab2ddbfbd7338a6969516bb0519ac6dcfaf1_prof);

        
        $__internal_d023912bcc8a5db884dd5d81a5d9f911544ed3fb13a2a9ef830b93001444af4d->leave($__internal_d023912bcc8a5db884dd5d81a5d9f911544ed3fb13a2a9ef830b93001444af4d_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_474ddc3853e18c2944e92d7ee55b050615a28c6b392c3f6cdb2bdf5038896899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_474ddc3853e18c2944e92d7ee55b050615a28c6b392c3f6cdb2bdf5038896899->enter($__internal_474ddc3853e18c2944e92d7ee55b050615a28c6b392c3f6cdb2bdf5038896899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_a986b465f2e941d375b45b6c2e6a6fd5b1f7e5ff90bd47b4271834133305a5f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a986b465f2e941d375b45b6c2e6a6fd5b1f7e5ff90bd47b4271834133305a5f2->enter($__internal_a986b465f2e941d375b45b6c2e6a6fd5b1f7e5ff90bd47b4271834133305a5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_a986b465f2e941d375b45b6c2e6a6fd5b1f7e5ff90bd47b4271834133305a5f2->leave($__internal_a986b465f2e941d375b45b6c2e6a6fd5b1f7e5ff90bd47b4271834133305a5f2_prof);

        
        $__internal_474ddc3853e18c2944e92d7ee55b050615a28c6b392c3f6cdb2bdf5038896899->leave($__internal_474ddc3853e18c2944e92d7ee55b050615a28c6b392c3f6cdb2bdf5038896899_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_fdd1d62c32c6d05f5bc7d0c379b61e501d936728fbc30b17bee0831abbb3c2e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdd1d62c32c6d05f5bc7d0c379b61e501d936728fbc30b17bee0831abbb3c2e8->enter($__internal_fdd1d62c32c6d05f5bc7d0c379b61e501d936728fbc30b17bee0831abbb3c2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_196a1d7732fe4ad79f2fad5fe95c8e4600e17b8304d32de02882842ce4550632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_196a1d7732fe4ad79f2fad5fe95c8e4600e17b8304d32de02882842ce4550632->enter($__internal_196a1d7732fe4ad79f2fad5fe95c8e4600e17b8304d32de02882842ce4550632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_196a1d7732fe4ad79f2fad5fe95c8e4600e17b8304d32de02882842ce4550632->leave($__internal_196a1d7732fe4ad79f2fad5fe95c8e4600e17b8304d32de02882842ce4550632_prof);

        
        $__internal_fdd1d62c32c6d05f5bc7d0c379b61e501d936728fbc30b17bee0831abbb3c2e8->leave($__internal_fdd1d62c32c6d05f5bc7d0c379b61e501d936728fbc30b17bee0831abbb3c2e8_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_6b63d843d2665da62546a6b17782b09de85eace605aa26272c9a83d8e14f2a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b63d843d2665da62546a6b17782b09de85eace605aa26272c9a83d8e14f2a74->enter($__internal_6b63d843d2665da62546a6b17782b09de85eace605aa26272c9a83d8e14f2a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_5b3650da9edb146a3ede4858c5eaeef0ccc433b568398bdf969020fdc874a24f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3650da9edb146a3ede4858c5eaeef0ccc433b568398bdf969020fdc874a24f->enter($__internal_5b3650da9edb146a3ede4858c5eaeef0ccc433b568398bdf969020fdc874a24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

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
        
        $__internal_5b3650da9edb146a3ede4858c5eaeef0ccc433b568398bdf969020fdc874a24f->leave($__internal_5b3650da9edb146a3ede4858c5eaeef0ccc433b568398bdf969020fdc874a24f_prof);

        
        $__internal_6b63d843d2665da62546a6b17782b09de85eace605aa26272c9a83d8e14f2a74->leave($__internal_6b63d843d2665da62546a6b17782b09de85eace605aa26272c9a83d8e14f2a74_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_788febc489828c67a93aa582a72d0a4b573c319cc09fd4b713daf7b114388061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_788febc489828c67a93aa582a72d0a4b573c319cc09fd4b713daf7b114388061->enter($__internal_788febc489828c67a93aa582a72d0a4b573c319cc09fd4b713daf7b114388061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_e060d1a62cc6dec4eca1070824d94cca094b54cb96d286387f0b571cff87e966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e060d1a62cc6dec4eca1070824d94cca094b54cb96d286387f0b571cff87e966->enter($__internal_e060d1a62cc6dec4eca1070824d94cca094b54cb96d286387f0b571cff87e966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e060d1a62cc6dec4eca1070824d94cca094b54cb96d286387f0b571cff87e966->leave($__internal_e060d1a62cc6dec4eca1070824d94cca094b54cb96d286387f0b571cff87e966_prof);

        
        $__internal_788febc489828c67a93aa582a72d0a4b573c319cc09fd4b713daf7b114388061->leave($__internal_788febc489828c67a93aa582a72d0a4b573c319cc09fd4b713daf7b114388061_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_175e62bdd09e91166207a4cc7a572b7684c7cecd1bdd4235b2ef9f25cfb305b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_175e62bdd09e91166207a4cc7a572b7684c7cecd1bdd4235b2ef9f25cfb305b1->enter($__internal_175e62bdd09e91166207a4cc7a572b7684c7cecd1bdd4235b2ef9f25cfb305b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_34068cee82b41d0b91f8d1370ab5905edd095c7ec29d471a54c1cd921e0dec3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34068cee82b41d0b91f8d1370ab5905edd095c7ec29d471a54c1cd921e0dec3c->enter($__internal_34068cee82b41d0b91f8d1370ab5905edd095c7ec29d471a54c1cd921e0dec3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_34068cee82b41d0b91f8d1370ab5905edd095c7ec29d471a54c1cd921e0dec3c->leave($__internal_34068cee82b41d0b91f8d1370ab5905edd095c7ec29d471a54c1cd921e0dec3c_prof);

        
        $__internal_175e62bdd09e91166207a4cc7a572b7684c7cecd1bdd4235b2ef9f25cfb305b1->leave($__internal_175e62bdd09e91166207a4cc7a572b7684c7cecd1bdd4235b2ef9f25cfb305b1_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_e0262c6e58ef5bebd5dc45ab4c2faf3df5b73a330dcc2fefe0c3a0598803d67e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0262c6e58ef5bebd5dc45ab4c2faf3df5b73a330dcc2fefe0c3a0598803d67e->enter($__internal_e0262c6e58ef5bebd5dc45ab4c2faf3df5b73a330dcc2fefe0c3a0598803d67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_3aa83c891524d5106573201539b30e6c07364a1b4b4fa9585f94cab81ab3af9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa83c891524d5106573201539b30e6c07364a1b4b4fa9585f94cab81ab3af9e->enter($__internal_3aa83c891524d5106573201539b30e6c07364a1b4b4fa9585f94cab81ab3af9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_3aa83c891524d5106573201539b30e6c07364a1b4b4fa9585f94cab81ab3af9e->leave($__internal_3aa83c891524d5106573201539b30e6c07364a1b4b4fa9585f94cab81ab3af9e_prof);

        
        $__internal_e0262c6e58ef5bebd5dc45ab4c2faf3df5b73a330dcc2fefe0c3a0598803d67e->leave($__internal_e0262c6e58ef5bebd5dc45ab4c2faf3df5b73a330dcc2fefe0c3a0598803d67e_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e6f3b7d07d4fe55f210163c21ea7b589b8e8ff21b5f48e897f8d4b102fc3dff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f3b7d07d4fe55f210163c21ea7b589b8e8ff21b5f48e897f8d4b102fc3dff6->enter($__internal_e6f3b7d07d4fe55f210163c21ea7b589b8e8ff21b5f48e897f8d4b102fc3dff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_654dafef7da4ce428756ade65af1b8f389e9ca46f577bd315830726a05f3cf94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654dafef7da4ce428756ade65af1b8f389e9ca46f577bd315830726a05f3cf94->enter($__internal_654dafef7da4ce428756ade65af1b8f389e9ca46f577bd315830726a05f3cf94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_654dafef7da4ce428756ade65af1b8f389e9ca46f577bd315830726a05f3cf94->leave($__internal_654dafef7da4ce428756ade65af1b8f389e9ca46f577bd315830726a05f3cf94_prof);

        
        $__internal_e6f3b7d07d4fe55f210163c21ea7b589b8e8ff21b5f48e897f8d4b102fc3dff6->leave($__internal_e6f3b7d07d4fe55f210163c21ea7b589b8e8ff21b5f48e897f8d4b102fc3dff6_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_7105c4541ba5c6def53102cbc9a7cbb27281641f083bc21190e50d57f758007a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7105c4541ba5c6def53102cbc9a7cbb27281641f083bc21190e50d57f758007a->enter($__internal_7105c4541ba5c6def53102cbc9a7cbb27281641f083bc21190e50d57f758007a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_6b611130baafd465aa9071db219f9d6c687106fe3590bad6fc279d95d8a8eb86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b611130baafd465aa9071db219f9d6c687106fe3590bad6fc279d95d8a8eb86->enter($__internal_6b611130baafd465aa9071db219f9d6c687106fe3590bad6fc279d95d8a8eb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6b611130baafd465aa9071db219f9d6c687106fe3590bad6fc279d95d8a8eb86->leave($__internal_6b611130baafd465aa9071db219f9d6c687106fe3590bad6fc279d95d8a8eb86_prof);

        
        $__internal_7105c4541ba5c6def53102cbc9a7cbb27281641f083bc21190e50d57f758007a->leave($__internal_7105c4541ba5c6def53102cbc9a7cbb27281641f083bc21190e50d57f758007a_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_4e8bdc0339ef7efc25c87811055b616319909b301239d65009319db35a4031dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e8bdc0339ef7efc25c87811055b616319909b301239d65009319db35a4031dc->enter($__internal_4e8bdc0339ef7efc25c87811055b616319909b301239d65009319db35a4031dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_b229c50c1d5ac0a423f4f7543a7065fbd6a9c21b547d3e60e3b569ec1a215bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b229c50c1d5ac0a423f4f7543a7065fbd6a9c21b547d3e60e3b569ec1a215bad->enter($__internal_b229c50c1d5ac0a423f4f7543a7065fbd6a9c21b547d3e60e3b569ec1a215bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b229c50c1d5ac0a423f4f7543a7065fbd6a9c21b547d3e60e3b569ec1a215bad->leave($__internal_b229c50c1d5ac0a423f4f7543a7065fbd6a9c21b547d3e60e3b569ec1a215bad_prof);

        
        $__internal_4e8bdc0339ef7efc25c87811055b616319909b301239d65009319db35a4031dc->leave($__internal_4e8bdc0339ef7efc25c87811055b616319909b301239d65009319db35a4031dc_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_9be2e5638b137b9262257f756ede72ae47decf756455b44fa5b147dd3f013fb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9be2e5638b137b9262257f756ede72ae47decf756455b44fa5b147dd3f013fb9->enter($__internal_9be2e5638b137b9262257f756ede72ae47decf756455b44fa5b147dd3f013fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_2c2240772386ca3e4978a52e658ae6d31d04266c507b3284b59ab6d377693615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c2240772386ca3e4978a52e658ae6d31d04266c507b3284b59ab6d377693615->enter($__internal_2c2240772386ca3e4978a52e658ae6d31d04266c507b3284b59ab6d377693615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2c2240772386ca3e4978a52e658ae6d31d04266c507b3284b59ab6d377693615->leave($__internal_2c2240772386ca3e4978a52e658ae6d31d04266c507b3284b59ab6d377693615_prof);

        
        $__internal_9be2e5638b137b9262257f756ede72ae47decf756455b44fa5b147dd3f013fb9->leave($__internal_9be2e5638b137b9262257f756ede72ae47decf756455b44fa5b147dd3f013fb9_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_d744852a84c62a7fa470d5ff3b64b0af908422a35bfad2deb3af0b831e7b48d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d744852a84c62a7fa470d5ff3b64b0af908422a35bfad2deb3af0b831e7b48d3->enter($__internal_d744852a84c62a7fa470d5ff3b64b0af908422a35bfad2deb3af0b831e7b48d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_442b69a264e994e29b899d6fd7c2a741567e3b348fe5022268ebc36844d75d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442b69a264e994e29b899d6fd7c2a741567e3b348fe5022268ebc36844d75d3a->enter($__internal_442b69a264e994e29b899d6fd7c2a741567e3b348fe5022268ebc36844d75d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_442b69a264e994e29b899d6fd7c2a741567e3b348fe5022268ebc36844d75d3a->leave($__internal_442b69a264e994e29b899d6fd7c2a741567e3b348fe5022268ebc36844d75d3a_prof);

        
        $__internal_d744852a84c62a7fa470d5ff3b64b0af908422a35bfad2deb3af0b831e7b48d3->leave($__internal_d744852a84c62a7fa470d5ff3b64b0af908422a35bfad2deb3af0b831e7b48d3_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c5ce639379a3dd7fb9f36bff9dfc8d84032960718a0be713a3d5492128da0c29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ce639379a3dd7fb9f36bff9dfc8d84032960718a0be713a3d5492128da0c29->enter($__internal_c5ce639379a3dd7fb9f36bff9dfc8d84032960718a0be713a3d5492128da0c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_46825de6e8a215a4ba01b6c071c8beb398f0f41f25ef27e659f5fc731d029c7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46825de6e8a215a4ba01b6c071c8beb398f0f41f25ef27e659f5fc731d029c7a->enter($__internal_46825de6e8a215a4ba01b6c071c8beb398f0f41f25ef27e659f5fc731d029c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_46825de6e8a215a4ba01b6c071c8beb398f0f41f25ef27e659f5fc731d029c7a->leave($__internal_46825de6e8a215a4ba01b6c071c8beb398f0f41f25ef27e659f5fc731d029c7a_prof);

        
        $__internal_c5ce639379a3dd7fb9f36bff9dfc8d84032960718a0be713a3d5492128da0c29->leave($__internal_c5ce639379a3dd7fb9f36bff9dfc8d84032960718a0be713a3d5492128da0c29_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_33c91d971c3aedd0b53c4ea29359c3b67b2bc74d0d71111913a66d47baba4ecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c91d971c3aedd0b53c4ea29359c3b67b2bc74d0d71111913a66d47baba4ecb->enter($__internal_33c91d971c3aedd0b53c4ea29359c3b67b2bc74d0d71111913a66d47baba4ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_948e0b6a4c71d141b7b5aef95bdc2d4e1f61645663826e6724b7a538a88b83b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948e0b6a4c71d141b7b5aef95bdc2d4e1f61645663826e6724b7a538a88b83b9->enter($__internal_948e0b6a4c71d141b7b5aef95bdc2d4e1f61645663826e6724b7a538a88b83b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_948e0b6a4c71d141b7b5aef95bdc2d4e1f61645663826e6724b7a538a88b83b9->leave($__internal_948e0b6a4c71d141b7b5aef95bdc2d4e1f61645663826e6724b7a538a88b83b9_prof);

        
        $__internal_33c91d971c3aedd0b53c4ea29359c3b67b2bc74d0d71111913a66d47baba4ecb->leave($__internal_33c91d971c3aedd0b53c4ea29359c3b67b2bc74d0d71111913a66d47baba4ecb_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_770e4fbecf31475b3394b7b09f5256fc8c47e919c6bacd8a514556c36aa71878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_770e4fbecf31475b3394b7b09f5256fc8c47e919c6bacd8a514556c36aa71878->enter($__internal_770e4fbecf31475b3394b7b09f5256fc8c47e919c6bacd8a514556c36aa71878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_4665db6c2ebe41c77a2891e3be7ee8535df46c4c1b2023bc9d3a40446991c6e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4665db6c2ebe41c77a2891e3be7ee8535df46c4c1b2023bc9d3a40446991c6e4->enter($__internal_4665db6c2ebe41c77a2891e3be7ee8535df46c4c1b2023bc9d3a40446991c6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_4665db6c2ebe41c77a2891e3be7ee8535df46c4c1b2023bc9d3a40446991c6e4->leave($__internal_4665db6c2ebe41c77a2891e3be7ee8535df46c4c1b2023bc9d3a40446991c6e4_prof);

        
        $__internal_770e4fbecf31475b3394b7b09f5256fc8c47e919c6bacd8a514556c36aa71878->leave($__internal_770e4fbecf31475b3394b7b09f5256fc8c47e919c6bacd8a514556c36aa71878_prof);

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
