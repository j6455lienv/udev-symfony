<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_3c4ec9c562b3c6fb36f1760d22af220ae46ea28b187c00dd18add1f55a1035e9 extends Twig_Template
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
        $__internal_895a4b200c86a812463bd334a93ed34b4722c43698b290fdb5dcda10eb84ea2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_895a4b200c86a812463bd334a93ed34b4722c43698b290fdb5dcda10eb84ea2b->enter($__internal_895a4b200c86a812463bd334a93ed34b4722c43698b290fdb5dcda10eb84ea2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_68db65595c1643607ac92129dfa31bdf2e3898e6b9bd61f574c937f403c66bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68db65595c1643607ac92129dfa31bdf2e3898e6b9bd61f574c937f403c66bcf->enter($__internal_68db65595c1643607ac92129dfa31bdf2e3898e6b9bd61f574c937f403c66bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_895a4b200c86a812463bd334a93ed34b4722c43698b290fdb5dcda10eb84ea2b->leave($__internal_895a4b200c86a812463bd334a93ed34b4722c43698b290fdb5dcda10eb84ea2b_prof);

        
        $__internal_68db65595c1643607ac92129dfa31bdf2e3898e6b9bd61f574c937f403c66bcf->leave($__internal_68db65595c1643607ac92129dfa31bdf2e3898e6b9bd61f574c937f403c66bcf_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_0cf462b6f28fd3b03918c291e398093603d11661a58b07a2d639e0b1095141a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf462b6f28fd3b03918c291e398093603d11661a58b07a2d639e0b1095141a3->enter($__internal_0cf462b6f28fd3b03918c291e398093603d11661a58b07a2d639e0b1095141a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_3d45007cee09f393ac9a7a9ff5da4f4d8f5838eea13d11d16320f681ea90161b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d45007cee09f393ac9a7a9ff5da4f4d8f5838eea13d11d16320f681ea90161b->enter($__internal_3d45007cee09f393ac9a7a9ff5da4f4d8f5838eea13d11d16320f681ea90161b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_3d45007cee09f393ac9a7a9ff5da4f4d8f5838eea13d11d16320f681ea90161b->leave($__internal_3d45007cee09f393ac9a7a9ff5da4f4d8f5838eea13d11d16320f681ea90161b_prof);

        
        $__internal_0cf462b6f28fd3b03918c291e398093603d11661a58b07a2d639e0b1095141a3->leave($__internal_0cf462b6f28fd3b03918c291e398093603d11661a58b07a2d639e0b1095141a3_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_10fb1e9e7a0d296d34fe906aea1a7b6a4317a7b84704b3b21a8ef9363f7c314f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10fb1e9e7a0d296d34fe906aea1a7b6a4317a7b84704b3b21a8ef9363f7c314f->enter($__internal_10fb1e9e7a0d296d34fe906aea1a7b6a4317a7b84704b3b21a8ef9363f7c314f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_195fa2288605b22fede6a3321d8e8d710b7356b01d51d788f4b7f306b9e181fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195fa2288605b22fede6a3321d8e8d710b7356b01d51d788f4b7f306b9e181fb->enter($__internal_195fa2288605b22fede6a3321d8e8d710b7356b01d51d788f4b7f306b9e181fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_195fa2288605b22fede6a3321d8e8d710b7356b01d51d788f4b7f306b9e181fb->leave($__internal_195fa2288605b22fede6a3321d8e8d710b7356b01d51d788f4b7f306b9e181fb_prof);

        
        $__internal_10fb1e9e7a0d296d34fe906aea1a7b6a4317a7b84704b3b21a8ef9363f7c314f->leave($__internal_10fb1e9e7a0d296d34fe906aea1a7b6a4317a7b84704b3b21a8ef9363f7c314f_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_f8f316b758ea5e2d6f007edfde8cd9f2db0ce59e31d1950daa0d80288c5eec36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f316b758ea5e2d6f007edfde8cd9f2db0ce59e31d1950daa0d80288c5eec36->enter($__internal_f8f316b758ea5e2d6f007edfde8cd9f2db0ce59e31d1950daa0d80288c5eec36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_045c50052e4a2a2db157df8cc75723d648d8ead26776b446a874860cd986e274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045c50052e4a2a2db157df8cc75723d648d8ead26776b446a874860cd986e274->enter($__internal_045c50052e4a2a2db157df8cc75723d648d8ead26776b446a874860cd986e274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_045c50052e4a2a2db157df8cc75723d648d8ead26776b446a874860cd986e274->leave($__internal_045c50052e4a2a2db157df8cc75723d648d8ead26776b446a874860cd986e274_prof);

        
        $__internal_f8f316b758ea5e2d6f007edfde8cd9f2db0ce59e31d1950daa0d80288c5eec36->leave($__internal_f8f316b758ea5e2d6f007edfde8cd9f2db0ce59e31d1950daa0d80288c5eec36_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_cbd764f5cfbd41b6539e8f6d9c3f1db7b2888f205cbf2000cc6adbaf1b8264b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd764f5cfbd41b6539e8f6d9c3f1db7b2888f205cbf2000cc6adbaf1b8264b1->enter($__internal_cbd764f5cfbd41b6539e8f6d9c3f1db7b2888f205cbf2000cc6adbaf1b8264b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_3980183f33750c3dcfef914b23ab0c80c523021d7bad1dc0811bd40a5789ee1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3980183f33750c3dcfef914b23ab0c80c523021d7bad1dc0811bd40a5789ee1b->enter($__internal_3980183f33750c3dcfef914b23ab0c80c523021d7bad1dc0811bd40a5789ee1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_d9316be6966c6cce6dda5f10593a56bfbb634656662f92d72ed495e9a0fac69a = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_5d1c492d095c1f9d0be269174b9070c8ea3dedc4adf96ac014d3a38bf37af65f = "{{") && ('' === $__internal_5d1c492d095c1f9d0be269174b9070c8ea3dedc4adf96ac014d3a38bf37af65f || 0 === strpos($__internal_d9316be6966c6cce6dda5f10593a56bfbb634656662f92d72ed495e9a0fac69a, $__internal_5d1c492d095c1f9d0be269174b9070c8ea3dedc4adf96ac014d3a38bf37af65f)));
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
        
        $__internal_3980183f33750c3dcfef914b23ab0c80c523021d7bad1dc0811bd40a5789ee1b->leave($__internal_3980183f33750c3dcfef914b23ab0c80c523021d7bad1dc0811bd40a5789ee1b_prof);

        
        $__internal_cbd764f5cfbd41b6539e8f6d9c3f1db7b2888f205cbf2000cc6adbaf1b8264b1->leave($__internal_cbd764f5cfbd41b6539e8f6d9c3f1db7b2888f205cbf2000cc6adbaf1b8264b1_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_52b59de56fe626bc3ac864a3b53cacb3619c98b70a98e5c3e6ff349b3d591d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52b59de56fe626bc3ac864a3b53cacb3619c98b70a98e5c3e6ff349b3d591d1f->enter($__internal_52b59de56fe626bc3ac864a3b53cacb3619c98b70a98e5c3e6ff349b3d591d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_c27505f2ed15dfc299a1cce081d205eaad6b875e79b4e37ebdbc0adeb0292d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27505f2ed15dfc299a1cce081d205eaad6b875e79b4e37ebdbc0adeb0292d66->enter($__internal_c27505f2ed15dfc299a1cce081d205eaad6b875e79b4e37ebdbc0adeb0292d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_c27505f2ed15dfc299a1cce081d205eaad6b875e79b4e37ebdbc0adeb0292d66->leave($__internal_c27505f2ed15dfc299a1cce081d205eaad6b875e79b4e37ebdbc0adeb0292d66_prof);

        
        $__internal_52b59de56fe626bc3ac864a3b53cacb3619c98b70a98e5c3e6ff349b3d591d1f->leave($__internal_52b59de56fe626bc3ac864a3b53cacb3619c98b70a98e5c3e6ff349b3d591d1f_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_79d6e46f47c58445364799acad92f6638cd1422d0471db85f342d012efdd6280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d6e46f47c58445364799acad92f6638cd1422d0471db85f342d012efdd6280->enter($__internal_79d6e46f47c58445364799acad92f6638cd1422d0471db85f342d012efdd6280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_e11deedabf2d6c449e6179890efdbd9e10d862941cc40665d33f7dc1acc85ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e11deedabf2d6c449e6179890efdbd9e10d862941cc40665d33f7dc1acc85ba4->enter($__internal_e11deedabf2d6c449e6179890efdbd9e10d862941cc40665d33f7dc1acc85ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_e11deedabf2d6c449e6179890efdbd9e10d862941cc40665d33f7dc1acc85ba4->leave($__internal_e11deedabf2d6c449e6179890efdbd9e10d862941cc40665d33f7dc1acc85ba4_prof);

        
        $__internal_79d6e46f47c58445364799acad92f6638cd1422d0471db85f342d012efdd6280->leave($__internal_79d6e46f47c58445364799acad92f6638cd1422d0471db85f342d012efdd6280_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_7f29c28ce9055a9b6f94fd2e640a9af7fb3ed8f8820a1d3d9ddfd92ddf062213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f29c28ce9055a9b6f94fd2e640a9af7fb3ed8f8820a1d3d9ddfd92ddf062213->enter($__internal_7f29c28ce9055a9b6f94fd2e640a9af7fb3ed8f8820a1d3d9ddfd92ddf062213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_367eefff4454def62d1a60b273b87f388863c1f0e07f95a904f619bf6f9c1d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_367eefff4454def62d1a60b273b87f388863c1f0e07f95a904f619bf6f9c1d09->enter($__internal_367eefff4454def62d1a60b273b87f388863c1f0e07f95a904f619bf6f9c1d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_367eefff4454def62d1a60b273b87f388863c1f0e07f95a904f619bf6f9c1d09->leave($__internal_367eefff4454def62d1a60b273b87f388863c1f0e07f95a904f619bf6f9c1d09_prof);

        
        $__internal_7f29c28ce9055a9b6f94fd2e640a9af7fb3ed8f8820a1d3d9ddfd92ddf062213->leave($__internal_7f29c28ce9055a9b6f94fd2e640a9af7fb3ed8f8820a1d3d9ddfd92ddf062213_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_d3505e05a136eaf9bcc5fc8a57743c5d17b7a7999eff62309aadbc0d23227fdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3505e05a136eaf9bcc5fc8a57743c5d17b7a7999eff62309aadbc0d23227fdf->enter($__internal_d3505e05a136eaf9bcc5fc8a57743c5d17b7a7999eff62309aadbc0d23227fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_e9948d6b9fb5083a66906f04b36f52eaada8badfc35e8733825ee3758f734f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9948d6b9fb5083a66906f04b36f52eaada8badfc35e8733825ee3758f734f43->enter($__internal_e9948d6b9fb5083a66906f04b36f52eaada8badfc35e8733825ee3758f734f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_e9948d6b9fb5083a66906f04b36f52eaada8badfc35e8733825ee3758f734f43->leave($__internal_e9948d6b9fb5083a66906f04b36f52eaada8badfc35e8733825ee3758f734f43_prof);

        
        $__internal_d3505e05a136eaf9bcc5fc8a57743c5d17b7a7999eff62309aadbc0d23227fdf->leave($__internal_d3505e05a136eaf9bcc5fc8a57743c5d17b7a7999eff62309aadbc0d23227fdf_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_f2ff775a1f42ce202c31ee2ae33697fcfadc912f8420fd8249b440986256db90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2ff775a1f42ce202c31ee2ae33697fcfadc912f8420fd8249b440986256db90->enter($__internal_f2ff775a1f42ce202c31ee2ae33697fcfadc912f8420fd8249b440986256db90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_a20275978c4b91f36d631e2d2fa1f3f0a6888ad09e2e418ed78de40088a1c512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a20275978c4b91f36d631e2d2fa1f3f0a6888ad09e2e418ed78de40088a1c512->enter($__internal_a20275978c4b91f36d631e2d2fa1f3f0a6888ad09e2e418ed78de40088a1c512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_a20275978c4b91f36d631e2d2fa1f3f0a6888ad09e2e418ed78de40088a1c512->leave($__internal_a20275978c4b91f36d631e2d2fa1f3f0a6888ad09e2e418ed78de40088a1c512_prof);

        
        $__internal_f2ff775a1f42ce202c31ee2ae33697fcfadc912f8420fd8249b440986256db90->leave($__internal_f2ff775a1f42ce202c31ee2ae33697fcfadc912f8420fd8249b440986256db90_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_a532172eb966b794847eb8e3f8d2a71573d7c3ddb1d83025e1dc5072789e436d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a532172eb966b794847eb8e3f8d2a71573d7c3ddb1d83025e1dc5072789e436d->enter($__internal_a532172eb966b794847eb8e3f8d2a71573d7c3ddb1d83025e1dc5072789e436d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_7c69b076677e58ba93b65a1b697aedba30a516ace2046a124de316e2b363dc9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c69b076677e58ba93b65a1b697aedba30a516ace2046a124de316e2b363dc9d->enter($__internal_7c69b076677e58ba93b65a1b697aedba30a516ace2046a124de316e2b363dc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_7c69b076677e58ba93b65a1b697aedba30a516ace2046a124de316e2b363dc9d->leave($__internal_7c69b076677e58ba93b65a1b697aedba30a516ace2046a124de316e2b363dc9d_prof);

        
        $__internal_a532172eb966b794847eb8e3f8d2a71573d7c3ddb1d83025e1dc5072789e436d->leave($__internal_a532172eb966b794847eb8e3f8d2a71573d7c3ddb1d83025e1dc5072789e436d_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_d9ecb8e18998db2145256d5afcac8267ef1587685a45ad8f270deedc51256ab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ecb8e18998db2145256d5afcac8267ef1587685a45ad8f270deedc51256ab4->enter($__internal_d9ecb8e18998db2145256d5afcac8267ef1587685a45ad8f270deedc51256ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_3825558a237fdf9c8fd1035f662635534bf20b4d76c330e12c8951afa9412ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3825558a237fdf9c8fd1035f662635534bf20b4d76c330e12c8951afa9412ea9->enter($__internal_3825558a237fdf9c8fd1035f662635534bf20b4d76c330e12c8951afa9412ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_3825558a237fdf9c8fd1035f662635534bf20b4d76c330e12c8951afa9412ea9->leave($__internal_3825558a237fdf9c8fd1035f662635534bf20b4d76c330e12c8951afa9412ea9_prof);

        
        $__internal_d9ecb8e18998db2145256d5afcac8267ef1587685a45ad8f270deedc51256ab4->leave($__internal_d9ecb8e18998db2145256d5afcac8267ef1587685a45ad8f270deedc51256ab4_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_7d247504c5ab244692256793b5fd2433b1dbc7a7cfbfb1673bf8884fcf328154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d247504c5ab244692256793b5fd2433b1dbc7a7cfbfb1673bf8884fcf328154->enter($__internal_7d247504c5ab244692256793b5fd2433b1dbc7a7cfbfb1673bf8884fcf328154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_1e6a38e3876fd0048da2133c4ed95b33a1e5adcc429bfd96189d28a8cd42afa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e6a38e3876fd0048da2133c4ed95b33a1e5adcc429bfd96189d28a8cd42afa5->enter($__internal_1e6a38e3876fd0048da2133c4ed95b33a1e5adcc429bfd96189d28a8cd42afa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_1e6a38e3876fd0048da2133c4ed95b33a1e5adcc429bfd96189d28a8cd42afa5->leave($__internal_1e6a38e3876fd0048da2133c4ed95b33a1e5adcc429bfd96189d28a8cd42afa5_prof);

        
        $__internal_7d247504c5ab244692256793b5fd2433b1dbc7a7cfbfb1673bf8884fcf328154->leave($__internal_7d247504c5ab244692256793b5fd2433b1dbc7a7cfbfb1673bf8884fcf328154_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_9154a1babfdf7d3eb162ba0d263e7b0232f9fb7e2c73330378e83c0ecd52e5fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9154a1babfdf7d3eb162ba0d263e7b0232f9fb7e2c73330378e83c0ecd52e5fd->enter($__internal_9154a1babfdf7d3eb162ba0d263e7b0232f9fb7e2c73330378e83c0ecd52e5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_b3ad6d1a7bb8de915fa8def83eee638f370b7036eb98c0bbe7bf078d11eb639a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ad6d1a7bb8de915fa8def83eee638f370b7036eb98c0bbe7bf078d11eb639a->enter($__internal_b3ad6d1a7bb8de915fa8def83eee638f370b7036eb98c0bbe7bf078d11eb639a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_b3ad6d1a7bb8de915fa8def83eee638f370b7036eb98c0bbe7bf078d11eb639a->leave($__internal_b3ad6d1a7bb8de915fa8def83eee638f370b7036eb98c0bbe7bf078d11eb639a_prof);

        
        $__internal_9154a1babfdf7d3eb162ba0d263e7b0232f9fb7e2c73330378e83c0ecd52e5fd->leave($__internal_9154a1babfdf7d3eb162ba0d263e7b0232f9fb7e2c73330378e83c0ecd52e5fd_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a39e1e2cbd6a55365e51480efbfee3901c6989998dc11c0d4d7434af8e6d3009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39e1e2cbd6a55365e51480efbfee3901c6989998dc11c0d4d7434af8e6d3009->enter($__internal_a39e1e2cbd6a55365e51480efbfee3901c6989998dc11c0d4d7434af8e6d3009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_509978ac588ce5cebcf832e35afddf746fa6aa781524b5736bf6d52881c90091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509978ac588ce5cebcf832e35afddf746fa6aa781524b5736bf6d52881c90091->enter($__internal_509978ac588ce5cebcf832e35afddf746fa6aa781524b5736bf6d52881c90091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_509978ac588ce5cebcf832e35afddf746fa6aa781524b5736bf6d52881c90091->leave($__internal_509978ac588ce5cebcf832e35afddf746fa6aa781524b5736bf6d52881c90091_prof);

        
        $__internal_a39e1e2cbd6a55365e51480efbfee3901c6989998dc11c0d4d7434af8e6d3009->leave($__internal_a39e1e2cbd6a55365e51480efbfee3901c6989998dc11c0d4d7434af8e6d3009_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_b3cac95ec91d3bba3eed62a34b630e83c4fe184a50c74ed9c036daf669d99525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3cac95ec91d3bba3eed62a34b630e83c4fe184a50c74ed9c036daf669d99525->enter($__internal_b3cac95ec91d3bba3eed62a34b630e83c4fe184a50c74ed9c036daf669d99525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_f81521cb62032a0aa5e3ff29e8a5747b926ea1545fbc498836326afee1fcab64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81521cb62032a0aa5e3ff29e8a5747b926ea1545fbc498836326afee1fcab64->enter($__internal_f81521cb62032a0aa5e3ff29e8a5747b926ea1545fbc498836326afee1fcab64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_f81521cb62032a0aa5e3ff29e8a5747b926ea1545fbc498836326afee1fcab64->leave($__internal_f81521cb62032a0aa5e3ff29e8a5747b926ea1545fbc498836326afee1fcab64_prof);

        
        $__internal_b3cac95ec91d3bba3eed62a34b630e83c4fe184a50c74ed9c036daf669d99525->leave($__internal_b3cac95ec91d3bba3eed62a34b630e83c4fe184a50c74ed9c036daf669d99525_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_b2eeb527a7f20b4d484ccb34374d753152f0aa6b4cd2b97fa7608244999ad31e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2eeb527a7f20b4d484ccb34374d753152f0aa6b4cd2b97fa7608244999ad31e->enter($__internal_b2eeb527a7f20b4d484ccb34374d753152f0aa6b4cd2b97fa7608244999ad31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_6d869b1db0426988b10b39ec438e843f2b86a47684bdab463e4881ed2c21adeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d869b1db0426988b10b39ec438e843f2b86a47684bdab463e4881ed2c21adeb->enter($__internal_6d869b1db0426988b10b39ec438e843f2b86a47684bdab463e4881ed2c21adeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6d869b1db0426988b10b39ec438e843f2b86a47684bdab463e4881ed2c21adeb->leave($__internal_6d869b1db0426988b10b39ec438e843f2b86a47684bdab463e4881ed2c21adeb_prof);

        
        $__internal_b2eeb527a7f20b4d484ccb34374d753152f0aa6b4cd2b97fa7608244999ad31e->leave($__internal_b2eeb527a7f20b4d484ccb34374d753152f0aa6b4cd2b97fa7608244999ad31e_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_a0fd899ce2b4b6cf1fa34b742c4b961fb8d2895abc7faa98eb232effa764b31d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0fd899ce2b4b6cf1fa34b742c4b961fb8d2895abc7faa98eb232effa764b31d->enter($__internal_a0fd899ce2b4b6cf1fa34b742c4b961fb8d2895abc7faa98eb232effa764b31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_e55d57185f6c289175f52e80563bccacc28d4be59015cbd1c67de4f0a673602e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55d57185f6c289175f52e80563bccacc28d4be59015cbd1c67de4f0a673602e->enter($__internal_e55d57185f6c289175f52e80563bccacc28d4be59015cbd1c67de4f0a673602e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e55d57185f6c289175f52e80563bccacc28d4be59015cbd1c67de4f0a673602e->leave($__internal_e55d57185f6c289175f52e80563bccacc28d4be59015cbd1c67de4f0a673602e_prof);

        
        $__internal_a0fd899ce2b4b6cf1fa34b742c4b961fb8d2895abc7faa98eb232effa764b31d->leave($__internal_a0fd899ce2b4b6cf1fa34b742c4b961fb8d2895abc7faa98eb232effa764b31d_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_48bbd46261b28fb83295feedf73afe8a72ef88dabaa08fb6582f4ae49e0d5632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48bbd46261b28fb83295feedf73afe8a72ef88dabaa08fb6582f4ae49e0d5632->enter($__internal_48bbd46261b28fb83295feedf73afe8a72ef88dabaa08fb6582f4ae49e0d5632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_e5ffc4e3682792869e2e0fa9d30b5113427dd6bfae42d11ddeb89493bc6b74b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ffc4e3682792869e2e0fa9d30b5113427dd6bfae42d11ddeb89493bc6b74b4->enter($__internal_e5ffc4e3682792869e2e0fa9d30b5113427dd6bfae42d11ddeb89493bc6b74b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_e5ffc4e3682792869e2e0fa9d30b5113427dd6bfae42d11ddeb89493bc6b74b4->leave($__internal_e5ffc4e3682792869e2e0fa9d30b5113427dd6bfae42d11ddeb89493bc6b74b4_prof);

        
        $__internal_48bbd46261b28fb83295feedf73afe8a72ef88dabaa08fb6582f4ae49e0d5632->leave($__internal_48bbd46261b28fb83295feedf73afe8a72ef88dabaa08fb6582f4ae49e0d5632_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6b77e8e481f6ad914e9ff7f212b5efe5f802b96a34c902674517db158638dfe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b77e8e481f6ad914e9ff7f212b5efe5f802b96a34c902674517db158638dfe1->enter($__internal_6b77e8e481f6ad914e9ff7f212b5efe5f802b96a34c902674517db158638dfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_8ebf2795d407ce53c95b4fbba683fcb0fb722af8bfecafbc64a73e291b977ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ebf2795d407ce53c95b4fbba683fcb0fb722af8bfecafbc64a73e291b977ec6->enter($__internal_8ebf2795d407ce53c95b4fbba683fcb0fb722af8bfecafbc64a73e291b977ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_8ebf2795d407ce53c95b4fbba683fcb0fb722af8bfecafbc64a73e291b977ec6->leave($__internal_8ebf2795d407ce53c95b4fbba683fcb0fb722af8bfecafbc64a73e291b977ec6_prof);

        
        $__internal_6b77e8e481f6ad914e9ff7f212b5efe5f802b96a34c902674517db158638dfe1->leave($__internal_6b77e8e481f6ad914e9ff7f212b5efe5f802b96a34c902674517db158638dfe1_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_c5f09bad084a3067f8087f50e0ed32d2f094c0b274d1d33affc05208b51014f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5f09bad084a3067f8087f50e0ed32d2f094c0b274d1d33affc05208b51014f4->enter($__internal_c5f09bad084a3067f8087f50e0ed32d2f094c0b274d1d33affc05208b51014f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_504ba0ff780852ea35d205824f3b083b0996e8277c1780c6ad64d5698248b34e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504ba0ff780852ea35d205824f3b083b0996e8277c1780c6ad64d5698248b34e->enter($__internal_504ba0ff780852ea35d205824f3b083b0996e8277c1780c6ad64d5698248b34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_504ba0ff780852ea35d205824f3b083b0996e8277c1780c6ad64d5698248b34e->leave($__internal_504ba0ff780852ea35d205824f3b083b0996e8277c1780c6ad64d5698248b34e_prof);

        
        $__internal_c5f09bad084a3067f8087f50e0ed32d2f094c0b274d1d33affc05208b51014f4->leave($__internal_c5f09bad084a3067f8087f50e0ed32d2f094c0b274d1d33affc05208b51014f4_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_54b21033bcb781ede6534c1477e73f7d3fff40bad25c6bbb9ac23e6931cc4538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54b21033bcb781ede6534c1477e73f7d3fff40bad25c6bbb9ac23e6931cc4538->enter($__internal_54b21033bcb781ede6534c1477e73f7d3fff40bad25c6bbb9ac23e6931cc4538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_eccd0b54247faa8205fb0b02b6d99762e0d4121f7a2c5c33ccc2381d813f8e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eccd0b54247faa8205fb0b02b6d99762e0d4121f7a2c5c33ccc2381d813f8e88->enter($__internal_eccd0b54247faa8205fb0b02b6d99762e0d4121f7a2c5c33ccc2381d813f8e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_eccd0b54247faa8205fb0b02b6d99762e0d4121f7a2c5c33ccc2381d813f8e88->leave($__internal_eccd0b54247faa8205fb0b02b6d99762e0d4121f7a2c5c33ccc2381d813f8e88_prof);

        
        $__internal_54b21033bcb781ede6534c1477e73f7d3fff40bad25c6bbb9ac23e6931cc4538->leave($__internal_54b21033bcb781ede6534c1477e73f7d3fff40bad25c6bbb9ac23e6931cc4538_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_563e8b4fac92fc7fd611f3bc2d9e1c5b3425447bcb4ce91e6cc2b09f8fb5d233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_563e8b4fac92fc7fd611f3bc2d9e1c5b3425447bcb4ce91e6cc2b09f8fb5d233->enter($__internal_563e8b4fac92fc7fd611f3bc2d9e1c5b3425447bcb4ce91e6cc2b09f8fb5d233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_41d908955a0cfb08ddc7c46a7b97dfb4b4f3e6c0691843b8b3a559fb6bd69478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d908955a0cfb08ddc7c46a7b97dfb4b4f3e6c0691843b8b3a559fb6bd69478->enter($__internal_41d908955a0cfb08ddc7c46a7b97dfb4b4f3e6c0691843b8b3a559fb6bd69478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_41d908955a0cfb08ddc7c46a7b97dfb4b4f3e6c0691843b8b3a559fb6bd69478->leave($__internal_41d908955a0cfb08ddc7c46a7b97dfb4b4f3e6c0691843b8b3a559fb6bd69478_prof);

        
        $__internal_563e8b4fac92fc7fd611f3bc2d9e1c5b3425447bcb4ce91e6cc2b09f8fb5d233->leave($__internal_563e8b4fac92fc7fd611f3bc2d9e1c5b3425447bcb4ce91e6cc2b09f8fb5d233_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_96898443c176159577590630005e099bfb356b98c8d406ba15ffa5a42c4b210f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96898443c176159577590630005e099bfb356b98c8d406ba15ffa5a42c4b210f->enter($__internal_96898443c176159577590630005e099bfb356b98c8d406ba15ffa5a42c4b210f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_3ddb3769fcbe19412ca0198c9447cf243e1803e79ce8b3293f50b9f8cc69d876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ddb3769fcbe19412ca0198c9447cf243e1803e79ce8b3293f50b9f8cc69d876->enter($__internal_3ddb3769fcbe19412ca0198c9447cf243e1803e79ce8b3293f50b9f8cc69d876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3ddb3769fcbe19412ca0198c9447cf243e1803e79ce8b3293f50b9f8cc69d876->leave($__internal_3ddb3769fcbe19412ca0198c9447cf243e1803e79ce8b3293f50b9f8cc69d876_prof);

        
        $__internal_96898443c176159577590630005e099bfb356b98c8d406ba15ffa5a42c4b210f->leave($__internal_96898443c176159577590630005e099bfb356b98c8d406ba15ffa5a42c4b210f_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_df964183bbbe1e071c6f9953a78d3ec94c511eb80753e087182bc98f81daaac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df964183bbbe1e071c6f9953a78d3ec94c511eb80753e087182bc98f81daaac2->enter($__internal_df964183bbbe1e071c6f9953a78d3ec94c511eb80753e087182bc98f81daaac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_73dcfc0041c16d6cda1fb6261826a62781b077382025ddd140284951bf17e3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73dcfc0041c16d6cda1fb6261826a62781b077382025ddd140284951bf17e3ff->enter($__internal_73dcfc0041c16d6cda1fb6261826a62781b077382025ddd140284951bf17e3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_73dcfc0041c16d6cda1fb6261826a62781b077382025ddd140284951bf17e3ff->leave($__internal_73dcfc0041c16d6cda1fb6261826a62781b077382025ddd140284951bf17e3ff_prof);

        
        $__internal_df964183bbbe1e071c6f9953a78d3ec94c511eb80753e087182bc98f81daaac2->leave($__internal_df964183bbbe1e071c6f9953a78d3ec94c511eb80753e087182bc98f81daaac2_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_5a0cae5c3fbe5585477f40594107c8b1d019026d50fb4965acbfb13e7d7db88f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a0cae5c3fbe5585477f40594107c8b1d019026d50fb4965acbfb13e7d7db88f->enter($__internal_5a0cae5c3fbe5585477f40594107c8b1d019026d50fb4965acbfb13e7d7db88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_0a10ad6f55d6f1bef084abbf63cbc5a568d795d45aea594c8616728d84b31082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a10ad6f55d6f1bef084abbf63cbc5a568d795d45aea594c8616728d84b31082->enter($__internal_0a10ad6f55d6f1bef084abbf63cbc5a568d795d45aea594c8616728d84b31082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_0a10ad6f55d6f1bef084abbf63cbc5a568d795d45aea594c8616728d84b31082->leave($__internal_0a10ad6f55d6f1bef084abbf63cbc5a568d795d45aea594c8616728d84b31082_prof);

        
        $__internal_5a0cae5c3fbe5585477f40594107c8b1d019026d50fb4965acbfb13e7d7db88f->leave($__internal_5a0cae5c3fbe5585477f40594107c8b1d019026d50fb4965acbfb13e7d7db88f_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_4530141753fd65c07593b37b7d96723a4928d76cb6e3be0a5a290dc73ad767e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4530141753fd65c07593b37b7d96723a4928d76cb6e3be0a5a290dc73ad767e4->enter($__internal_4530141753fd65c07593b37b7d96723a4928d76cb6e3be0a5a290dc73ad767e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_4b9349b19147ac6ef022ad139ce85783c119f6613d2850beb029404129c73a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b9349b19147ac6ef022ad139ce85783c119f6613d2850beb029404129c73a20->enter($__internal_4b9349b19147ac6ef022ad139ce85783c119f6613d2850beb029404129c73a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_4b9349b19147ac6ef022ad139ce85783c119f6613d2850beb029404129c73a20->leave($__internal_4b9349b19147ac6ef022ad139ce85783c119f6613d2850beb029404129c73a20_prof);

        
        $__internal_4530141753fd65c07593b37b7d96723a4928d76cb6e3be0a5a290dc73ad767e4->leave($__internal_4530141753fd65c07593b37b7d96723a4928d76cb6e3be0a5a290dc73ad767e4_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_ad6bb971c55bd5debc66b25b2db239b10712868fa6ad94410f00b0bf36799c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad6bb971c55bd5debc66b25b2db239b10712868fa6ad94410f00b0bf36799c59->enter($__internal_ad6bb971c55bd5debc66b25b2db239b10712868fa6ad94410f00b0bf36799c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_064d02ecb9e3cfbc9e06ae9ba1e7f4fe32c45ce9d09257b7108cc1ecf8e10681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064d02ecb9e3cfbc9e06ae9ba1e7f4fe32c45ce9d09257b7108cc1ecf8e10681->enter($__internal_064d02ecb9e3cfbc9e06ae9ba1e7f4fe32c45ce9d09257b7108cc1ecf8e10681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_064d02ecb9e3cfbc9e06ae9ba1e7f4fe32c45ce9d09257b7108cc1ecf8e10681->leave($__internal_064d02ecb9e3cfbc9e06ae9ba1e7f4fe32c45ce9d09257b7108cc1ecf8e10681_prof);

        
        $__internal_ad6bb971c55bd5debc66b25b2db239b10712868fa6ad94410f00b0bf36799c59->leave($__internal_ad6bb971c55bd5debc66b25b2db239b10712868fa6ad94410f00b0bf36799c59_prof);

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
