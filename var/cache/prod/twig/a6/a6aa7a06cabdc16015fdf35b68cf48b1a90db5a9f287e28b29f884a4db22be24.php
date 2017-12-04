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
        $__internal_cb9854e9bd95b0e6f06b348dba1e59b6cd7c573e07d28dc4c42376a346948940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb9854e9bd95b0e6f06b348dba1e59b6cd7c573e07d28dc4c42376a346948940->enter($__internal_cb9854e9bd95b0e6f06b348dba1e59b6cd7c573e07d28dc4c42376a346948940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_18cf1546729c6749b931ff664f071b461f76474945d4155141bea4c36736d197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18cf1546729c6749b931ff664f071b461f76474945d4155141bea4c36736d197->enter($__internal_18cf1546729c6749b931ff664f071b461f76474945d4155141bea4c36736d197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_cb9854e9bd95b0e6f06b348dba1e59b6cd7c573e07d28dc4c42376a346948940->leave($__internal_cb9854e9bd95b0e6f06b348dba1e59b6cd7c573e07d28dc4c42376a346948940_prof);

        
        $__internal_18cf1546729c6749b931ff664f071b461f76474945d4155141bea4c36736d197->leave($__internal_18cf1546729c6749b931ff664f071b461f76474945d4155141bea4c36736d197_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_ad98d810cb56bec7784a1903029cc3bafb43350ff83548d6d4b9ae5c774ac518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad98d810cb56bec7784a1903029cc3bafb43350ff83548d6d4b9ae5c774ac518->enter($__internal_ad98d810cb56bec7784a1903029cc3bafb43350ff83548d6d4b9ae5c774ac518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_d1cbd72ae44f3ce79e443600bdb0d6cde13c2d6f89fa4d1c6d6bf1bbb98b5595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1cbd72ae44f3ce79e443600bdb0d6cde13c2d6f89fa4d1c6d6bf1bbb98b5595->enter($__internal_d1cbd72ae44f3ce79e443600bdb0d6cde13c2d6f89fa4d1c6d6bf1bbb98b5595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d1cbd72ae44f3ce79e443600bdb0d6cde13c2d6f89fa4d1c6d6bf1bbb98b5595->leave($__internal_d1cbd72ae44f3ce79e443600bdb0d6cde13c2d6f89fa4d1c6d6bf1bbb98b5595_prof);

        
        $__internal_ad98d810cb56bec7784a1903029cc3bafb43350ff83548d6d4b9ae5c774ac518->leave($__internal_ad98d810cb56bec7784a1903029cc3bafb43350ff83548d6d4b9ae5c774ac518_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_aaac8972c98036fb085c473bc73decf73fda5218f62dcd955009171ff8b6c904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaac8972c98036fb085c473bc73decf73fda5218f62dcd955009171ff8b6c904->enter($__internal_aaac8972c98036fb085c473bc73decf73fda5218f62dcd955009171ff8b6c904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_8d76fb396b60ebad709a1416e99191185bc230a4acf0bf5ac246c7aaf3783cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d76fb396b60ebad709a1416e99191185bc230a4acf0bf5ac246c7aaf3783cbc->enter($__internal_8d76fb396b60ebad709a1416e99191185bc230a4acf0bf5ac246c7aaf3783cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_8d76fb396b60ebad709a1416e99191185bc230a4acf0bf5ac246c7aaf3783cbc->leave($__internal_8d76fb396b60ebad709a1416e99191185bc230a4acf0bf5ac246c7aaf3783cbc_prof);

        
        $__internal_aaac8972c98036fb085c473bc73decf73fda5218f62dcd955009171ff8b6c904->leave($__internal_aaac8972c98036fb085c473bc73decf73fda5218f62dcd955009171ff8b6c904_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_95e053fb76604530fcd17de47d35eeee847e7d70185573d66f7b4e880c48533e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e053fb76604530fcd17de47d35eeee847e7d70185573d66f7b4e880c48533e->enter($__internal_95e053fb76604530fcd17de47d35eeee847e7d70185573d66f7b4e880c48533e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_08a7d3f33f2ba38f3065dfb6cf33c10412d150339fc288ed3663cabd0e2f3d63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a7d3f33f2ba38f3065dfb6cf33c10412d150339fc288ed3663cabd0e2f3d63->enter($__internal_08a7d3f33f2ba38f3065dfb6cf33c10412d150339fc288ed3663cabd0e2f3d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_08a7d3f33f2ba38f3065dfb6cf33c10412d150339fc288ed3663cabd0e2f3d63->leave($__internal_08a7d3f33f2ba38f3065dfb6cf33c10412d150339fc288ed3663cabd0e2f3d63_prof);

        
        $__internal_95e053fb76604530fcd17de47d35eeee847e7d70185573d66f7b4e880c48533e->leave($__internal_95e053fb76604530fcd17de47d35eeee847e7d70185573d66f7b4e880c48533e_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_9e714f805896e94e99e62357343f9edcf888cab9e0c844e742fbe4fc8ff875a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e714f805896e94e99e62357343f9edcf888cab9e0c844e742fbe4fc8ff875a6->enter($__internal_9e714f805896e94e99e62357343f9edcf888cab9e0c844e742fbe4fc8ff875a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_1a09c3cad5607561e82f481f07af60e8f60c99d0fb7727204fa137165a735cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a09c3cad5607561e82f481f07af60e8f60c99d0fb7727204fa137165a735cda->enter($__internal_1a09c3cad5607561e82f481f07af60e8f60c99d0fb7727204fa137165a735cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_4596d2fe723aee2b6ff46f91da2b2d0402ee84f826845b9e2638132a74c7ed3b = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_928c5ece86f94ec217939a4e96902f9afb01ad05a352d97b0145e20db273ebe2 = "{{") && ('' === $__internal_928c5ece86f94ec217939a4e96902f9afb01ad05a352d97b0145e20db273ebe2 || 0 === strpos($__internal_4596d2fe723aee2b6ff46f91da2b2d0402ee84f826845b9e2638132a74c7ed3b, $__internal_928c5ece86f94ec217939a4e96902f9afb01ad05a352d97b0145e20db273ebe2)));
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
        
        $__internal_1a09c3cad5607561e82f481f07af60e8f60c99d0fb7727204fa137165a735cda->leave($__internal_1a09c3cad5607561e82f481f07af60e8f60c99d0fb7727204fa137165a735cda_prof);

        
        $__internal_9e714f805896e94e99e62357343f9edcf888cab9e0c844e742fbe4fc8ff875a6->leave($__internal_9e714f805896e94e99e62357343f9edcf888cab9e0c844e742fbe4fc8ff875a6_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_5298456864c2c031bfe84674fa4138becc7d118c73068f16bc19401081934a05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5298456864c2c031bfe84674fa4138becc7d118c73068f16bc19401081934a05->enter($__internal_5298456864c2c031bfe84674fa4138becc7d118c73068f16bc19401081934a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_9cc022bbe18ed1d7ff5ad154c8d8b4353d2424b3bd502e575dcff03b88518584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc022bbe18ed1d7ff5ad154c8d8b4353d2424b3bd502e575dcff03b88518584->enter($__internal_9cc022bbe18ed1d7ff5ad154c8d8b4353d2424b3bd502e575dcff03b88518584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_9cc022bbe18ed1d7ff5ad154c8d8b4353d2424b3bd502e575dcff03b88518584->leave($__internal_9cc022bbe18ed1d7ff5ad154c8d8b4353d2424b3bd502e575dcff03b88518584_prof);

        
        $__internal_5298456864c2c031bfe84674fa4138becc7d118c73068f16bc19401081934a05->leave($__internal_5298456864c2c031bfe84674fa4138becc7d118c73068f16bc19401081934a05_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_e5a7d9b9ff076e4fec21d9e7b0c7a4f536bd391bd9baf95e605e6bd23f6b7100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5a7d9b9ff076e4fec21d9e7b0c7a4f536bd391bd9baf95e605e6bd23f6b7100->enter($__internal_e5a7d9b9ff076e4fec21d9e7b0c7a4f536bd391bd9baf95e605e6bd23f6b7100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_df3d861dc05ff26653b6f92a824825d7a89b7dd3e82d09a8df021487edee6950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df3d861dc05ff26653b6f92a824825d7a89b7dd3e82d09a8df021487edee6950->enter($__internal_df3d861dc05ff26653b6f92a824825d7a89b7dd3e82d09a8df021487edee6950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_df3d861dc05ff26653b6f92a824825d7a89b7dd3e82d09a8df021487edee6950->leave($__internal_df3d861dc05ff26653b6f92a824825d7a89b7dd3e82d09a8df021487edee6950_prof);

        
        $__internal_e5a7d9b9ff076e4fec21d9e7b0c7a4f536bd391bd9baf95e605e6bd23f6b7100->leave($__internal_e5a7d9b9ff076e4fec21d9e7b0c7a4f536bd391bd9baf95e605e6bd23f6b7100_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_3ba5a941d3abecd31bee1aa5c5ab7c0e47066cc1a895268a68d74f0179f66f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba5a941d3abecd31bee1aa5c5ab7c0e47066cc1a895268a68d74f0179f66f13->enter($__internal_3ba5a941d3abecd31bee1aa5c5ab7c0e47066cc1a895268a68d74f0179f66f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_73fcf3163fa28798939c6df1b388ece1a5a087de40634bd6f10f716d6e00f1d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73fcf3163fa28798939c6df1b388ece1a5a087de40634bd6f10f716d6e00f1d7->enter($__internal_73fcf3163fa28798939c6df1b388ece1a5a087de40634bd6f10f716d6e00f1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_73fcf3163fa28798939c6df1b388ece1a5a087de40634bd6f10f716d6e00f1d7->leave($__internal_73fcf3163fa28798939c6df1b388ece1a5a087de40634bd6f10f716d6e00f1d7_prof);

        
        $__internal_3ba5a941d3abecd31bee1aa5c5ab7c0e47066cc1a895268a68d74f0179f66f13->leave($__internal_3ba5a941d3abecd31bee1aa5c5ab7c0e47066cc1a895268a68d74f0179f66f13_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_d07a1f93b55f99d52dd585b5b9aee9aeb67a776fb6aae874c3d5d27ae641b7a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d07a1f93b55f99d52dd585b5b9aee9aeb67a776fb6aae874c3d5d27ae641b7a3->enter($__internal_d07a1f93b55f99d52dd585b5b9aee9aeb67a776fb6aae874c3d5d27ae641b7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_eef83ba6a7705e3c6a7e9e154f95e7e78c9e85ced3a2eb4bc0bee086916a7d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef83ba6a7705e3c6a7e9e154f95e7e78c9e85ced3a2eb4bc0bee086916a7d20->enter($__internal_eef83ba6a7705e3c6a7e9e154f95e7e78c9e85ced3a2eb4bc0bee086916a7d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_eef83ba6a7705e3c6a7e9e154f95e7e78c9e85ced3a2eb4bc0bee086916a7d20->leave($__internal_eef83ba6a7705e3c6a7e9e154f95e7e78c9e85ced3a2eb4bc0bee086916a7d20_prof);

        
        $__internal_d07a1f93b55f99d52dd585b5b9aee9aeb67a776fb6aae874c3d5d27ae641b7a3->leave($__internal_d07a1f93b55f99d52dd585b5b9aee9aeb67a776fb6aae874c3d5d27ae641b7a3_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_132fd04ee0acf7eee7f1385a02cd490f09002f4a326a87490a5c79d98ba8d385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_132fd04ee0acf7eee7f1385a02cd490f09002f4a326a87490a5c79d98ba8d385->enter($__internal_132fd04ee0acf7eee7f1385a02cd490f09002f4a326a87490a5c79d98ba8d385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_f7e2075f258cd725e7a8fc2be5b9774835cf30dd59a21243a4d9f9a54828863e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e2075f258cd725e7a8fc2be5b9774835cf30dd59a21243a4d9f9a54828863e->enter($__internal_f7e2075f258cd725e7a8fc2be5b9774835cf30dd59a21243a4d9f9a54828863e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_f7e2075f258cd725e7a8fc2be5b9774835cf30dd59a21243a4d9f9a54828863e->leave($__internal_f7e2075f258cd725e7a8fc2be5b9774835cf30dd59a21243a4d9f9a54828863e_prof);

        
        $__internal_132fd04ee0acf7eee7f1385a02cd490f09002f4a326a87490a5c79d98ba8d385->leave($__internal_132fd04ee0acf7eee7f1385a02cd490f09002f4a326a87490a5c79d98ba8d385_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_87da1733530b9884dae54a5fa31948a8aa879a87201e7ca66a6a27b7d86b3d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87da1733530b9884dae54a5fa31948a8aa879a87201e7ca66a6a27b7d86b3d61->enter($__internal_87da1733530b9884dae54a5fa31948a8aa879a87201e7ca66a6a27b7d86b3d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_12f805b8d1479506eee558c858ea6a39b956b95b6460d9c78067adae90d8fdfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12f805b8d1479506eee558c858ea6a39b956b95b6460d9c78067adae90d8fdfb->enter($__internal_12f805b8d1479506eee558c858ea6a39b956b95b6460d9c78067adae90d8fdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_12f805b8d1479506eee558c858ea6a39b956b95b6460d9c78067adae90d8fdfb->leave($__internal_12f805b8d1479506eee558c858ea6a39b956b95b6460d9c78067adae90d8fdfb_prof);

        
        $__internal_87da1733530b9884dae54a5fa31948a8aa879a87201e7ca66a6a27b7d86b3d61->leave($__internal_87da1733530b9884dae54a5fa31948a8aa879a87201e7ca66a6a27b7d86b3d61_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_d7cf782ad42efd690c204f77974f67d0f46ea91cefb52663a9995dce6c228f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7cf782ad42efd690c204f77974f67d0f46ea91cefb52663a9995dce6c228f38->enter($__internal_d7cf782ad42efd690c204f77974f67d0f46ea91cefb52663a9995dce6c228f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_bc50769eb36773ac01cd140e8c245d4be478e7da6057c5337bf4614313012e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc50769eb36773ac01cd140e8c245d4be478e7da6057c5337bf4614313012e1c->enter($__internal_bc50769eb36773ac01cd140e8c245d4be478e7da6057c5337bf4614313012e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_bc50769eb36773ac01cd140e8c245d4be478e7da6057c5337bf4614313012e1c->leave($__internal_bc50769eb36773ac01cd140e8c245d4be478e7da6057c5337bf4614313012e1c_prof);

        
        $__internal_d7cf782ad42efd690c204f77974f67d0f46ea91cefb52663a9995dce6c228f38->leave($__internal_d7cf782ad42efd690c204f77974f67d0f46ea91cefb52663a9995dce6c228f38_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_0847b3d92930a87f5491a843737b4f25ec8015c2952139593011a779e8a5eb97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0847b3d92930a87f5491a843737b4f25ec8015c2952139593011a779e8a5eb97->enter($__internal_0847b3d92930a87f5491a843737b4f25ec8015c2952139593011a779e8a5eb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_ef3feb48c26597bb7bd6b7e1310129359181771d912c259490803d6b53a2d2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef3feb48c26597bb7bd6b7e1310129359181771d912c259490803d6b53a2d2f7->enter($__internal_ef3feb48c26597bb7bd6b7e1310129359181771d912c259490803d6b53a2d2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_ef3feb48c26597bb7bd6b7e1310129359181771d912c259490803d6b53a2d2f7->leave($__internal_ef3feb48c26597bb7bd6b7e1310129359181771d912c259490803d6b53a2d2f7_prof);

        
        $__internal_0847b3d92930a87f5491a843737b4f25ec8015c2952139593011a779e8a5eb97->leave($__internal_0847b3d92930a87f5491a843737b4f25ec8015c2952139593011a779e8a5eb97_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_497f2ede68480364ba9a150d22320f871d52f5633c81283df6bae93cc9a38186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_497f2ede68480364ba9a150d22320f871d52f5633c81283df6bae93cc9a38186->enter($__internal_497f2ede68480364ba9a150d22320f871d52f5633c81283df6bae93cc9a38186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_162241efb110f1ccac4629b2179463eed341908356196570cedddfb82012b7ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162241efb110f1ccac4629b2179463eed341908356196570cedddfb82012b7ad->enter($__internal_162241efb110f1ccac4629b2179463eed341908356196570cedddfb82012b7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_162241efb110f1ccac4629b2179463eed341908356196570cedddfb82012b7ad->leave($__internal_162241efb110f1ccac4629b2179463eed341908356196570cedddfb82012b7ad_prof);

        
        $__internal_497f2ede68480364ba9a150d22320f871d52f5633c81283df6bae93cc9a38186->leave($__internal_497f2ede68480364ba9a150d22320f871d52f5633c81283df6bae93cc9a38186_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_13c4528ce2b667b6f7d3dc80c847362307cb953033a9cfd8f8628712e12d3732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13c4528ce2b667b6f7d3dc80c847362307cb953033a9cfd8f8628712e12d3732->enter($__internal_13c4528ce2b667b6f7d3dc80c847362307cb953033a9cfd8f8628712e12d3732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_548a90f7ea056366a9ff11f08823b49e43219ca65ee815c7ebcdcaddfbd56ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548a90f7ea056366a9ff11f08823b49e43219ca65ee815c7ebcdcaddfbd56ad5->enter($__internal_548a90f7ea056366a9ff11f08823b49e43219ca65ee815c7ebcdcaddfbd56ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_548a90f7ea056366a9ff11f08823b49e43219ca65ee815c7ebcdcaddfbd56ad5->leave($__internal_548a90f7ea056366a9ff11f08823b49e43219ca65ee815c7ebcdcaddfbd56ad5_prof);

        
        $__internal_13c4528ce2b667b6f7d3dc80c847362307cb953033a9cfd8f8628712e12d3732->leave($__internal_13c4528ce2b667b6f7d3dc80c847362307cb953033a9cfd8f8628712e12d3732_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_55d938ad66cbad1bd0eef18370366b48feb4d8e35dcb533e5043537fe48dba4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55d938ad66cbad1bd0eef18370366b48feb4d8e35dcb533e5043537fe48dba4e->enter($__internal_55d938ad66cbad1bd0eef18370366b48feb4d8e35dcb533e5043537fe48dba4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_a6368189f72751964163f07691a9b78faaadffa5c3b17f0e375ce9962ca0f6ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6368189f72751964163f07691a9b78faaadffa5c3b17f0e375ce9962ca0f6ff->enter($__internal_a6368189f72751964163f07691a9b78faaadffa5c3b17f0e375ce9962ca0f6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_a6368189f72751964163f07691a9b78faaadffa5c3b17f0e375ce9962ca0f6ff->leave($__internal_a6368189f72751964163f07691a9b78faaadffa5c3b17f0e375ce9962ca0f6ff_prof);

        
        $__internal_55d938ad66cbad1bd0eef18370366b48feb4d8e35dcb533e5043537fe48dba4e->leave($__internal_55d938ad66cbad1bd0eef18370366b48feb4d8e35dcb533e5043537fe48dba4e_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_b170a3410451ab6b8f15bd427a1e18585af37efc59318acfa2d75692c4ec0009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b170a3410451ab6b8f15bd427a1e18585af37efc59318acfa2d75692c4ec0009->enter($__internal_b170a3410451ab6b8f15bd427a1e18585af37efc59318acfa2d75692c4ec0009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_692640c19bb1de55676c7b916e0738d2d4cf5c46272242ec86d83deaa26bb4d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692640c19bb1de55676c7b916e0738d2d4cf5c46272242ec86d83deaa26bb4d8->enter($__internal_692640c19bb1de55676c7b916e0738d2d4cf5c46272242ec86d83deaa26bb4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_692640c19bb1de55676c7b916e0738d2d4cf5c46272242ec86d83deaa26bb4d8->leave($__internal_692640c19bb1de55676c7b916e0738d2d4cf5c46272242ec86d83deaa26bb4d8_prof);

        
        $__internal_b170a3410451ab6b8f15bd427a1e18585af37efc59318acfa2d75692c4ec0009->leave($__internal_b170a3410451ab6b8f15bd427a1e18585af37efc59318acfa2d75692c4ec0009_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_d1b9428043f049d651cbdf1b3970f388ffa41ce5f98e89919e033feca71caa89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1b9428043f049d651cbdf1b3970f388ffa41ce5f98e89919e033feca71caa89->enter($__internal_d1b9428043f049d651cbdf1b3970f388ffa41ce5f98e89919e033feca71caa89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_f3ad717eebc127fe88ef0abecc6a4b3be5b6229dad55080def6b273863d41472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ad717eebc127fe88ef0abecc6a4b3be5b6229dad55080def6b273863d41472->enter($__internal_f3ad717eebc127fe88ef0abecc6a4b3be5b6229dad55080def6b273863d41472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_f3ad717eebc127fe88ef0abecc6a4b3be5b6229dad55080def6b273863d41472->leave($__internal_f3ad717eebc127fe88ef0abecc6a4b3be5b6229dad55080def6b273863d41472_prof);

        
        $__internal_d1b9428043f049d651cbdf1b3970f388ffa41ce5f98e89919e033feca71caa89->leave($__internal_d1b9428043f049d651cbdf1b3970f388ffa41ce5f98e89919e033feca71caa89_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_d90231d4e5d0fb4120d9b18ca7ff3b3c99394bf8054bead81ee399df6b49c5a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d90231d4e5d0fb4120d9b18ca7ff3b3c99394bf8054bead81ee399df6b49c5a1->enter($__internal_d90231d4e5d0fb4120d9b18ca7ff3b3c99394bf8054bead81ee399df6b49c5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_79de514f9f6201409cd2e97e154530814515aa521c1235c367cb212b4ed01590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79de514f9f6201409cd2e97e154530814515aa521c1235c367cb212b4ed01590->enter($__internal_79de514f9f6201409cd2e97e154530814515aa521c1235c367cb212b4ed01590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_79de514f9f6201409cd2e97e154530814515aa521c1235c367cb212b4ed01590->leave($__internal_79de514f9f6201409cd2e97e154530814515aa521c1235c367cb212b4ed01590_prof);

        
        $__internal_d90231d4e5d0fb4120d9b18ca7ff3b3c99394bf8054bead81ee399df6b49c5a1->leave($__internal_d90231d4e5d0fb4120d9b18ca7ff3b3c99394bf8054bead81ee399df6b49c5a1_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6150ed549903927814672831c6bdf38e33952a34e5d3a0bf5b2fab8ece19d9e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6150ed549903927814672831c6bdf38e33952a34e5d3a0bf5b2fab8ece19d9e6->enter($__internal_6150ed549903927814672831c6bdf38e33952a34e5d3a0bf5b2fab8ece19d9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e37bf460aecd7df460fc7fc3515d17c83ec5c82fb8a399213a4957139cfeed5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37bf460aecd7df460fc7fc3515d17c83ec5c82fb8a399213a4957139cfeed5f->enter($__internal_e37bf460aecd7df460fc7fc3515d17c83ec5c82fb8a399213a4957139cfeed5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_e37bf460aecd7df460fc7fc3515d17c83ec5c82fb8a399213a4957139cfeed5f->leave($__internal_e37bf460aecd7df460fc7fc3515d17c83ec5c82fb8a399213a4957139cfeed5f_prof);

        
        $__internal_6150ed549903927814672831c6bdf38e33952a34e5d3a0bf5b2fab8ece19d9e6->leave($__internal_6150ed549903927814672831c6bdf38e33952a34e5d3a0bf5b2fab8ece19d9e6_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_3eaeccfb0cfdd924be748f04edaced108552f0076fed83f9b31d6613c19692b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eaeccfb0cfdd924be748f04edaced108552f0076fed83f9b31d6613c19692b0->enter($__internal_3eaeccfb0cfdd924be748f04edaced108552f0076fed83f9b31d6613c19692b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c60f954af3b899b108f037ca5ca2f8225fe1021cf9da6d8a7ffb029134a3ccb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c60f954af3b899b108f037ca5ca2f8225fe1021cf9da6d8a7ffb029134a3ccb8->enter($__internal_c60f954af3b899b108f037ca5ca2f8225fe1021cf9da6d8a7ffb029134a3ccb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_c60f954af3b899b108f037ca5ca2f8225fe1021cf9da6d8a7ffb029134a3ccb8->leave($__internal_c60f954af3b899b108f037ca5ca2f8225fe1021cf9da6d8a7ffb029134a3ccb8_prof);

        
        $__internal_3eaeccfb0cfdd924be748f04edaced108552f0076fed83f9b31d6613c19692b0->leave($__internal_3eaeccfb0cfdd924be748f04edaced108552f0076fed83f9b31d6613c19692b0_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_c11c4881c6a5a400de58588052e075c11df9795cf6a04238c4b51dfafbfd08e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c11c4881c6a5a400de58588052e075c11df9795cf6a04238c4b51dfafbfd08e5->enter($__internal_c11c4881c6a5a400de58588052e075c11df9795cf6a04238c4b51dfafbfd08e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_15d648292e17292e16f7f2c47eff84a482c67265d89b4de121d4d040196084a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d648292e17292e16f7f2c47eff84a482c67265d89b4de121d4d040196084a2->enter($__internal_15d648292e17292e16f7f2c47eff84a482c67265d89b4de121d4d040196084a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_15d648292e17292e16f7f2c47eff84a482c67265d89b4de121d4d040196084a2->leave($__internal_15d648292e17292e16f7f2c47eff84a482c67265d89b4de121d4d040196084a2_prof);

        
        $__internal_c11c4881c6a5a400de58588052e075c11df9795cf6a04238c4b51dfafbfd08e5->leave($__internal_c11c4881c6a5a400de58588052e075c11df9795cf6a04238c4b51dfafbfd08e5_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_906ccf5961793b3bb8d4c1b63d3b59b39f5c7d14ffc06b2d3ff5f97c136542b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_906ccf5961793b3bb8d4c1b63d3b59b39f5c7d14ffc06b2d3ff5f97c136542b6->enter($__internal_906ccf5961793b3bb8d4c1b63d3b59b39f5c7d14ffc06b2d3ff5f97c136542b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_a9bbe5d5a439c5863f377a355149bb457c14247d57c0f2d35f531d8527037d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9bbe5d5a439c5863f377a355149bb457c14247d57c0f2d35f531d8527037d20->enter($__internal_a9bbe5d5a439c5863f377a355149bb457c14247d57c0f2d35f531d8527037d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a9bbe5d5a439c5863f377a355149bb457c14247d57c0f2d35f531d8527037d20->leave($__internal_a9bbe5d5a439c5863f377a355149bb457c14247d57c0f2d35f531d8527037d20_prof);

        
        $__internal_906ccf5961793b3bb8d4c1b63d3b59b39f5c7d14ffc06b2d3ff5f97c136542b6->leave($__internal_906ccf5961793b3bb8d4c1b63d3b59b39f5c7d14ffc06b2d3ff5f97c136542b6_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_cb00de4e32b2cd231912b1b76302f8743e1f327da7dd03cadec0460552541063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb00de4e32b2cd231912b1b76302f8743e1f327da7dd03cadec0460552541063->enter($__internal_cb00de4e32b2cd231912b1b76302f8743e1f327da7dd03cadec0460552541063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_213266fe5cd2be69d7655e1cfdd84d5e7e2bc33311f203baa8e0f7e7e22924ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213266fe5cd2be69d7655e1cfdd84d5e7e2bc33311f203baa8e0f7e7e22924ab->enter($__internal_213266fe5cd2be69d7655e1cfdd84d5e7e2bc33311f203baa8e0f7e7e22924ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_213266fe5cd2be69d7655e1cfdd84d5e7e2bc33311f203baa8e0f7e7e22924ab->leave($__internal_213266fe5cd2be69d7655e1cfdd84d5e7e2bc33311f203baa8e0f7e7e22924ab_prof);

        
        $__internal_cb00de4e32b2cd231912b1b76302f8743e1f327da7dd03cadec0460552541063->leave($__internal_cb00de4e32b2cd231912b1b76302f8743e1f327da7dd03cadec0460552541063_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_f379a8582092544e18239a56d5deca7ffa424f57ded2e826646205e417735245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f379a8582092544e18239a56d5deca7ffa424f57ded2e826646205e417735245->enter($__internal_f379a8582092544e18239a56d5deca7ffa424f57ded2e826646205e417735245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_e124348808a4df7a71a0432021ef500d4a340d75b52e76d3f8be343da9a0269e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e124348808a4df7a71a0432021ef500d4a340d75b52e76d3f8be343da9a0269e->enter($__internal_e124348808a4df7a71a0432021ef500d4a340d75b52e76d3f8be343da9a0269e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e124348808a4df7a71a0432021ef500d4a340d75b52e76d3f8be343da9a0269e->leave($__internal_e124348808a4df7a71a0432021ef500d4a340d75b52e76d3f8be343da9a0269e_prof);

        
        $__internal_f379a8582092544e18239a56d5deca7ffa424f57ded2e826646205e417735245->leave($__internal_f379a8582092544e18239a56d5deca7ffa424f57ded2e826646205e417735245_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_7d22b89332071c4b1ca866d1a34514f787fcc7ed2d144bc6c94e0051d0b2ae7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d22b89332071c4b1ca866d1a34514f787fcc7ed2d144bc6c94e0051d0b2ae7a->enter($__internal_7d22b89332071c4b1ca866d1a34514f787fcc7ed2d144bc6c94e0051d0b2ae7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_4d6504525dfe31e402b35677966e2294e8c65dd799380d6991195af3eb86bb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6504525dfe31e402b35677966e2294e8c65dd799380d6991195af3eb86bb6f->enter($__internal_4d6504525dfe31e402b35677966e2294e8c65dd799380d6991195af3eb86bb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_4d6504525dfe31e402b35677966e2294e8c65dd799380d6991195af3eb86bb6f->leave($__internal_4d6504525dfe31e402b35677966e2294e8c65dd799380d6991195af3eb86bb6f_prof);

        
        $__internal_7d22b89332071c4b1ca866d1a34514f787fcc7ed2d144bc6c94e0051d0b2ae7a->leave($__internal_7d22b89332071c4b1ca866d1a34514f787fcc7ed2d144bc6c94e0051d0b2ae7a_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_7078d9d55c7c64b99eab2287db6f1f95064f0dea37a24944c44ae1fd81cea426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7078d9d55c7c64b99eab2287db6f1f95064f0dea37a24944c44ae1fd81cea426->enter($__internal_7078d9d55c7c64b99eab2287db6f1f95064f0dea37a24944c44ae1fd81cea426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_8cab80080ef65e6a497a6c0883bd6a7569fceade7d6408054b36e2ddec0606a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cab80080ef65e6a497a6c0883bd6a7569fceade7d6408054b36e2ddec0606a9->enter($__internal_8cab80080ef65e6a497a6c0883bd6a7569fceade7d6408054b36e2ddec0606a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_8cab80080ef65e6a497a6c0883bd6a7569fceade7d6408054b36e2ddec0606a9->leave($__internal_8cab80080ef65e6a497a6c0883bd6a7569fceade7d6408054b36e2ddec0606a9_prof);

        
        $__internal_7078d9d55c7c64b99eab2287db6f1f95064f0dea37a24944c44ae1fd81cea426->leave($__internal_7078d9d55c7c64b99eab2287db6f1f95064f0dea37a24944c44ae1fd81cea426_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_027d2da7a003a93e4b6b8ead41be113c279954c364e314aad942b8b73daaae72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_027d2da7a003a93e4b6b8ead41be113c279954c364e314aad942b8b73daaae72->enter($__internal_027d2da7a003a93e4b6b8ead41be113c279954c364e314aad942b8b73daaae72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_ca37e090056aed09857fe430e320d294386af0206754ebf4b2af6323d8473b1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca37e090056aed09857fe430e320d294386af0206754ebf4b2af6323d8473b1d->enter($__internal_ca37e090056aed09857fe430e320d294386af0206754ebf4b2af6323d8473b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_ca37e090056aed09857fe430e320d294386af0206754ebf4b2af6323d8473b1d->leave($__internal_ca37e090056aed09857fe430e320d294386af0206754ebf4b2af6323d8473b1d_prof);

        
        $__internal_027d2da7a003a93e4b6b8ead41be113c279954c364e314aad942b8b73daaae72->leave($__internal_027d2da7a003a93e4b6b8ead41be113c279954c364e314aad942b8b73daaae72_prof);

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
