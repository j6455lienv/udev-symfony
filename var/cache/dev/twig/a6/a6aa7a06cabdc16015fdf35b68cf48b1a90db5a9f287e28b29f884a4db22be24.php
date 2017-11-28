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
        $__internal_84bc10845a74ef07e5b9296adc594b687857abd04bed54ee00f08cab4186871f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84bc10845a74ef07e5b9296adc594b687857abd04bed54ee00f08cab4186871f->enter($__internal_84bc10845a74ef07e5b9296adc594b687857abd04bed54ee00f08cab4186871f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_dd1e007f56c3ada81b4cebf2fca2fb895fa99458b2785318f2ef817ed675383c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1e007f56c3ada81b4cebf2fca2fb895fa99458b2785318f2ef817ed675383c->enter($__internal_dd1e007f56c3ada81b4cebf2fca2fb895fa99458b2785318f2ef817ed675383c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_84bc10845a74ef07e5b9296adc594b687857abd04bed54ee00f08cab4186871f->leave($__internal_84bc10845a74ef07e5b9296adc594b687857abd04bed54ee00f08cab4186871f_prof);

        
        $__internal_dd1e007f56c3ada81b4cebf2fca2fb895fa99458b2785318f2ef817ed675383c->leave($__internal_dd1e007f56c3ada81b4cebf2fca2fb895fa99458b2785318f2ef817ed675383c_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_562d90ffdb1fb090d2e2a5df80f494b3b6f0e37e715671ff45de3cc18ac7b7e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562d90ffdb1fb090d2e2a5df80f494b3b6f0e37e715671ff45de3cc18ac7b7e8->enter($__internal_562d90ffdb1fb090d2e2a5df80f494b3b6f0e37e715671ff45de3cc18ac7b7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_157586766cde17a5f205ddc6df8923d94f6e321fd8d996d29ad95a687abfc269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157586766cde17a5f205ddc6df8923d94f6e321fd8d996d29ad95a687abfc269->enter($__internal_157586766cde17a5f205ddc6df8923d94f6e321fd8d996d29ad95a687abfc269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_157586766cde17a5f205ddc6df8923d94f6e321fd8d996d29ad95a687abfc269->leave($__internal_157586766cde17a5f205ddc6df8923d94f6e321fd8d996d29ad95a687abfc269_prof);

        
        $__internal_562d90ffdb1fb090d2e2a5df80f494b3b6f0e37e715671ff45de3cc18ac7b7e8->leave($__internal_562d90ffdb1fb090d2e2a5df80f494b3b6f0e37e715671ff45de3cc18ac7b7e8_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_2b29d7daf5271d621d44009e3bf17df74edda8b75df9d671511c0d570a372b57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b29d7daf5271d621d44009e3bf17df74edda8b75df9d671511c0d570a372b57->enter($__internal_2b29d7daf5271d621d44009e3bf17df74edda8b75df9d671511c0d570a372b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_f32231d561bbf35e24f67058df2830cea8205b90eb571ae157ebc6c389b07643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32231d561bbf35e24f67058df2830cea8205b90eb571ae157ebc6c389b07643->enter($__internal_f32231d561bbf35e24f67058df2830cea8205b90eb571ae157ebc6c389b07643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_f32231d561bbf35e24f67058df2830cea8205b90eb571ae157ebc6c389b07643->leave($__internal_f32231d561bbf35e24f67058df2830cea8205b90eb571ae157ebc6c389b07643_prof);

        
        $__internal_2b29d7daf5271d621d44009e3bf17df74edda8b75df9d671511c0d570a372b57->leave($__internal_2b29d7daf5271d621d44009e3bf17df74edda8b75df9d671511c0d570a372b57_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_2414703b4fada73258328f4077fb0ae8b1f2252ddd0eed4f6ada9ce573c109f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2414703b4fada73258328f4077fb0ae8b1f2252ddd0eed4f6ada9ce573c109f0->enter($__internal_2414703b4fada73258328f4077fb0ae8b1f2252ddd0eed4f6ada9ce573c109f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_11b16bf9f704ed0213ad41607c38bd7878f6ad6781fda603e9e33e5f48853c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11b16bf9f704ed0213ad41607c38bd7878f6ad6781fda603e9e33e5f48853c0b->enter($__internal_11b16bf9f704ed0213ad41607c38bd7878f6ad6781fda603e9e33e5f48853c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_11b16bf9f704ed0213ad41607c38bd7878f6ad6781fda603e9e33e5f48853c0b->leave($__internal_11b16bf9f704ed0213ad41607c38bd7878f6ad6781fda603e9e33e5f48853c0b_prof);

        
        $__internal_2414703b4fada73258328f4077fb0ae8b1f2252ddd0eed4f6ada9ce573c109f0->leave($__internal_2414703b4fada73258328f4077fb0ae8b1f2252ddd0eed4f6ada9ce573c109f0_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_344e77738de5c41fac109323f8bb76c6b4256ebfa5a89432a5e124e04433ea96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_344e77738de5c41fac109323f8bb76c6b4256ebfa5a89432a5e124e04433ea96->enter($__internal_344e77738de5c41fac109323f8bb76c6b4256ebfa5a89432a5e124e04433ea96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_964ef74572176499b0b92ef50eea35184e66571b41d26bcecd20d93d12574ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964ef74572176499b0b92ef50eea35184e66571b41d26bcecd20d93d12574ab4->enter($__internal_964ef74572176499b0b92ef50eea35184e66571b41d26bcecd20d93d12574ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_3387df5761774fc33c62e52c70a08fae2a0256d413f93b0dd55bb6d854824df1 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_3c5ea97c356d053bfc6003d1bea09cb81b5b1e6be39f7dc63a323353b2243036 = "{{") && ('' === $__internal_3c5ea97c356d053bfc6003d1bea09cb81b5b1e6be39f7dc63a323353b2243036 || 0 === strpos($__internal_3387df5761774fc33c62e52c70a08fae2a0256d413f93b0dd55bb6d854824df1, $__internal_3c5ea97c356d053bfc6003d1bea09cb81b5b1e6be39f7dc63a323353b2243036)));
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
        
        $__internal_964ef74572176499b0b92ef50eea35184e66571b41d26bcecd20d93d12574ab4->leave($__internal_964ef74572176499b0b92ef50eea35184e66571b41d26bcecd20d93d12574ab4_prof);

        
        $__internal_344e77738de5c41fac109323f8bb76c6b4256ebfa5a89432a5e124e04433ea96->leave($__internal_344e77738de5c41fac109323f8bb76c6b4256ebfa5a89432a5e124e04433ea96_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_d98cd57cb2bdf15f850acf9e4793beb76eb640fdf3eb471dc0a2172c0ad4918e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d98cd57cb2bdf15f850acf9e4793beb76eb640fdf3eb471dc0a2172c0ad4918e->enter($__internal_d98cd57cb2bdf15f850acf9e4793beb76eb640fdf3eb471dc0a2172c0ad4918e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_8a444a3a957034ae86c51777d1d3d64d123c819fe27ee30cd052058ed918fac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a444a3a957034ae86c51777d1d3d64d123c819fe27ee30cd052058ed918fac9->enter($__internal_8a444a3a957034ae86c51777d1d3d64d123c819fe27ee30cd052058ed918fac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_8a444a3a957034ae86c51777d1d3d64d123c819fe27ee30cd052058ed918fac9->leave($__internal_8a444a3a957034ae86c51777d1d3d64d123c819fe27ee30cd052058ed918fac9_prof);

        
        $__internal_d98cd57cb2bdf15f850acf9e4793beb76eb640fdf3eb471dc0a2172c0ad4918e->leave($__internal_d98cd57cb2bdf15f850acf9e4793beb76eb640fdf3eb471dc0a2172c0ad4918e_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_5978066e49e5c8501162c25be19c1484f9f1d1f2d442e50be51f81c9e6eb1cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5978066e49e5c8501162c25be19c1484f9f1d1f2d442e50be51f81c9e6eb1cac->enter($__internal_5978066e49e5c8501162c25be19c1484f9f1d1f2d442e50be51f81c9e6eb1cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_9e25ffcbe909eb9964cb3882c7718c5e2ce823f9c356022bd33913f8e93cce5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e25ffcbe909eb9964cb3882c7718c5e2ce823f9c356022bd33913f8e93cce5f->enter($__internal_9e25ffcbe909eb9964cb3882c7718c5e2ce823f9c356022bd33913f8e93cce5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_9e25ffcbe909eb9964cb3882c7718c5e2ce823f9c356022bd33913f8e93cce5f->leave($__internal_9e25ffcbe909eb9964cb3882c7718c5e2ce823f9c356022bd33913f8e93cce5f_prof);

        
        $__internal_5978066e49e5c8501162c25be19c1484f9f1d1f2d442e50be51f81c9e6eb1cac->leave($__internal_5978066e49e5c8501162c25be19c1484f9f1d1f2d442e50be51f81c9e6eb1cac_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_c14ede7c460b65929b2b0299b23d1d9e71ce05ad17aca1a5a8463031be771fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c14ede7c460b65929b2b0299b23d1d9e71ce05ad17aca1a5a8463031be771fbc->enter($__internal_c14ede7c460b65929b2b0299b23d1d9e71ce05ad17aca1a5a8463031be771fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_c8ffdb5bb09ba0c1bdce128610de025feaa1a1577a3149a4ffb07ad73fc95d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ffdb5bb09ba0c1bdce128610de025feaa1a1577a3149a4ffb07ad73fc95d0c->enter($__internal_c8ffdb5bb09ba0c1bdce128610de025feaa1a1577a3149a4ffb07ad73fc95d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_c8ffdb5bb09ba0c1bdce128610de025feaa1a1577a3149a4ffb07ad73fc95d0c->leave($__internal_c8ffdb5bb09ba0c1bdce128610de025feaa1a1577a3149a4ffb07ad73fc95d0c_prof);

        
        $__internal_c14ede7c460b65929b2b0299b23d1d9e71ce05ad17aca1a5a8463031be771fbc->leave($__internal_c14ede7c460b65929b2b0299b23d1d9e71ce05ad17aca1a5a8463031be771fbc_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_8f345d160d1e2d2148ae7090325b04275b4a17da49bba94d00998f26943de03a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f345d160d1e2d2148ae7090325b04275b4a17da49bba94d00998f26943de03a->enter($__internal_8f345d160d1e2d2148ae7090325b04275b4a17da49bba94d00998f26943de03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_28024e86b366c75ec04113726995fcfae57eb020191abcfe5f8721f13e4801c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28024e86b366c75ec04113726995fcfae57eb020191abcfe5f8721f13e4801c1->enter($__internal_28024e86b366c75ec04113726995fcfae57eb020191abcfe5f8721f13e4801c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_28024e86b366c75ec04113726995fcfae57eb020191abcfe5f8721f13e4801c1->leave($__internal_28024e86b366c75ec04113726995fcfae57eb020191abcfe5f8721f13e4801c1_prof);

        
        $__internal_8f345d160d1e2d2148ae7090325b04275b4a17da49bba94d00998f26943de03a->leave($__internal_8f345d160d1e2d2148ae7090325b04275b4a17da49bba94d00998f26943de03a_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_6ee3a800339de58dfcfb6c09b153974db7740e080bcd7ca0eb6d5474d29e671a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ee3a800339de58dfcfb6c09b153974db7740e080bcd7ca0eb6d5474d29e671a->enter($__internal_6ee3a800339de58dfcfb6c09b153974db7740e080bcd7ca0eb6d5474d29e671a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_800b58a94c358a83054ad709e047ba0fddc276fe7822c0cd49f8a50f431b6608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_800b58a94c358a83054ad709e047ba0fddc276fe7822c0cd49f8a50f431b6608->enter($__internal_800b58a94c358a83054ad709e047ba0fddc276fe7822c0cd49f8a50f431b6608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_800b58a94c358a83054ad709e047ba0fddc276fe7822c0cd49f8a50f431b6608->leave($__internal_800b58a94c358a83054ad709e047ba0fddc276fe7822c0cd49f8a50f431b6608_prof);

        
        $__internal_6ee3a800339de58dfcfb6c09b153974db7740e080bcd7ca0eb6d5474d29e671a->leave($__internal_6ee3a800339de58dfcfb6c09b153974db7740e080bcd7ca0eb6d5474d29e671a_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_c620c30680e7598c0e242cbbc092b0f4bbb126ba197cd6249ecb51f467cf29b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c620c30680e7598c0e242cbbc092b0f4bbb126ba197cd6249ecb51f467cf29b2->enter($__internal_c620c30680e7598c0e242cbbc092b0f4bbb126ba197cd6249ecb51f467cf29b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_2d87b383d2c2d2cf80c4ccd908ccbe2a18ecc975a8c8f2bec9f2186368098135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d87b383d2c2d2cf80c4ccd908ccbe2a18ecc975a8c8f2bec9f2186368098135->enter($__internal_2d87b383d2c2d2cf80c4ccd908ccbe2a18ecc975a8c8f2bec9f2186368098135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_2d87b383d2c2d2cf80c4ccd908ccbe2a18ecc975a8c8f2bec9f2186368098135->leave($__internal_2d87b383d2c2d2cf80c4ccd908ccbe2a18ecc975a8c8f2bec9f2186368098135_prof);

        
        $__internal_c620c30680e7598c0e242cbbc092b0f4bbb126ba197cd6249ecb51f467cf29b2->leave($__internal_c620c30680e7598c0e242cbbc092b0f4bbb126ba197cd6249ecb51f467cf29b2_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_a5a729464b85293cbb2a7d7442fec5c436e856b1ba6faf042d84295466b674be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5a729464b85293cbb2a7d7442fec5c436e856b1ba6faf042d84295466b674be->enter($__internal_a5a729464b85293cbb2a7d7442fec5c436e856b1ba6faf042d84295466b674be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_d20bf3a47828b07b582867031b9356ad06656e63d2385fafed909a389b46b632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d20bf3a47828b07b582867031b9356ad06656e63d2385fafed909a389b46b632->enter($__internal_d20bf3a47828b07b582867031b9356ad06656e63d2385fafed909a389b46b632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_d20bf3a47828b07b582867031b9356ad06656e63d2385fafed909a389b46b632->leave($__internal_d20bf3a47828b07b582867031b9356ad06656e63d2385fafed909a389b46b632_prof);

        
        $__internal_a5a729464b85293cbb2a7d7442fec5c436e856b1ba6faf042d84295466b674be->leave($__internal_a5a729464b85293cbb2a7d7442fec5c436e856b1ba6faf042d84295466b674be_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_0ac2848227c42e52a5f60f43b04df5d6e8e8d1be4125d17c92ae58582965ab09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ac2848227c42e52a5f60f43b04df5d6e8e8d1be4125d17c92ae58582965ab09->enter($__internal_0ac2848227c42e52a5f60f43b04df5d6e8e8d1be4125d17c92ae58582965ab09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_53c48c2b192929d112e6528fe55240a58210172dbe19eabc299bb25c4bcc3905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c48c2b192929d112e6528fe55240a58210172dbe19eabc299bb25c4bcc3905->enter($__internal_53c48c2b192929d112e6528fe55240a58210172dbe19eabc299bb25c4bcc3905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_53c48c2b192929d112e6528fe55240a58210172dbe19eabc299bb25c4bcc3905->leave($__internal_53c48c2b192929d112e6528fe55240a58210172dbe19eabc299bb25c4bcc3905_prof);

        
        $__internal_0ac2848227c42e52a5f60f43b04df5d6e8e8d1be4125d17c92ae58582965ab09->leave($__internal_0ac2848227c42e52a5f60f43b04df5d6e8e8d1be4125d17c92ae58582965ab09_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_ec2d94d2e4c3f6bec5a6c6b975ea109d044af0713d40ce8272dabf52f131816f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec2d94d2e4c3f6bec5a6c6b975ea109d044af0713d40ce8272dabf52f131816f->enter($__internal_ec2d94d2e4c3f6bec5a6c6b975ea109d044af0713d40ce8272dabf52f131816f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_f1dbee8c0ba396de9ac86569770973118cf7c973a6c519322f4d0795400ecc00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1dbee8c0ba396de9ac86569770973118cf7c973a6c519322f4d0795400ecc00->enter($__internal_f1dbee8c0ba396de9ac86569770973118cf7c973a6c519322f4d0795400ecc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_f1dbee8c0ba396de9ac86569770973118cf7c973a6c519322f4d0795400ecc00->leave($__internal_f1dbee8c0ba396de9ac86569770973118cf7c973a6c519322f4d0795400ecc00_prof);

        
        $__internal_ec2d94d2e4c3f6bec5a6c6b975ea109d044af0713d40ce8272dabf52f131816f->leave($__internal_ec2d94d2e4c3f6bec5a6c6b975ea109d044af0713d40ce8272dabf52f131816f_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_0917cc1f5ba0c18bcd7756098bcd390c2406d3c3a998e202ce8eb290d000f817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0917cc1f5ba0c18bcd7756098bcd390c2406d3c3a998e202ce8eb290d000f817->enter($__internal_0917cc1f5ba0c18bcd7756098bcd390c2406d3c3a998e202ce8eb290d000f817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ef504135eba7ee7c9e04f183cf18c30ea4e2c2b810375fdaf4ed174c95f8d337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef504135eba7ee7c9e04f183cf18c30ea4e2c2b810375fdaf4ed174c95f8d337->enter($__internal_ef504135eba7ee7c9e04f183cf18c30ea4e2c2b810375fdaf4ed174c95f8d337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_ef504135eba7ee7c9e04f183cf18c30ea4e2c2b810375fdaf4ed174c95f8d337->leave($__internal_ef504135eba7ee7c9e04f183cf18c30ea4e2c2b810375fdaf4ed174c95f8d337_prof);

        
        $__internal_0917cc1f5ba0c18bcd7756098bcd390c2406d3c3a998e202ce8eb290d000f817->leave($__internal_0917cc1f5ba0c18bcd7756098bcd390c2406d3c3a998e202ce8eb290d000f817_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_17446835edb8b27d0b157bfb917a4e4e40a33c154c2c4e0aca8b387103457d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17446835edb8b27d0b157bfb917a4e4e40a33c154c2c4e0aca8b387103457d2b->enter($__internal_17446835edb8b27d0b157bfb917a4e4e40a33c154c2c4e0aca8b387103457d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_5d8781528dbfa77682215378af443f4ffd01fdd2b28d22181abf4df89c70f37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8781528dbfa77682215378af443f4ffd01fdd2b28d22181abf4df89c70f37e->enter($__internal_5d8781528dbfa77682215378af443f4ffd01fdd2b28d22181abf4df89c70f37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_5d8781528dbfa77682215378af443f4ffd01fdd2b28d22181abf4df89c70f37e->leave($__internal_5d8781528dbfa77682215378af443f4ffd01fdd2b28d22181abf4df89c70f37e_prof);

        
        $__internal_17446835edb8b27d0b157bfb917a4e4e40a33c154c2c4e0aca8b387103457d2b->leave($__internal_17446835edb8b27d0b157bfb917a4e4e40a33c154c2c4e0aca8b387103457d2b_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_69aae0b775c25b70fe1d4645ffec66256bca1ebbfc8fb267ad94004f7253c6ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69aae0b775c25b70fe1d4645ffec66256bca1ebbfc8fb267ad94004f7253c6ee->enter($__internal_69aae0b775c25b70fe1d4645ffec66256bca1ebbfc8fb267ad94004f7253c6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_d3bcfb90ad6057d9f19a90fa51a29a5c0dccf94c1d6bbc0ea233be7ce0f6954c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3bcfb90ad6057d9f19a90fa51a29a5c0dccf94c1d6bbc0ea233be7ce0f6954c->enter($__internal_d3bcfb90ad6057d9f19a90fa51a29a5c0dccf94c1d6bbc0ea233be7ce0f6954c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d3bcfb90ad6057d9f19a90fa51a29a5c0dccf94c1d6bbc0ea233be7ce0f6954c->leave($__internal_d3bcfb90ad6057d9f19a90fa51a29a5c0dccf94c1d6bbc0ea233be7ce0f6954c_prof);

        
        $__internal_69aae0b775c25b70fe1d4645ffec66256bca1ebbfc8fb267ad94004f7253c6ee->leave($__internal_69aae0b775c25b70fe1d4645ffec66256bca1ebbfc8fb267ad94004f7253c6ee_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_699ff063c5a742091815004a0b7f9bdd51adbcb268bdef28fa2f9ebb7f873d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_699ff063c5a742091815004a0b7f9bdd51adbcb268bdef28fa2f9ebb7f873d13->enter($__internal_699ff063c5a742091815004a0b7f9bdd51adbcb268bdef28fa2f9ebb7f873d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_00f4ab4c0ec6df9ce7709feac5c3f29d8602d69407ba1cb8dc341cd2c54d51d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f4ab4c0ec6df9ce7709feac5c3f29d8602d69407ba1cb8dc341cd2c54d51d4->enter($__internal_00f4ab4c0ec6df9ce7709feac5c3f29d8602d69407ba1cb8dc341cd2c54d51d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_00f4ab4c0ec6df9ce7709feac5c3f29d8602d69407ba1cb8dc341cd2c54d51d4->leave($__internal_00f4ab4c0ec6df9ce7709feac5c3f29d8602d69407ba1cb8dc341cd2c54d51d4_prof);

        
        $__internal_699ff063c5a742091815004a0b7f9bdd51adbcb268bdef28fa2f9ebb7f873d13->leave($__internal_699ff063c5a742091815004a0b7f9bdd51adbcb268bdef28fa2f9ebb7f873d13_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_03b782eed2c52a924836d19b3af6b3e3e456be3fdbe0f41947e1e3b411430257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b782eed2c52a924836d19b3af6b3e3e456be3fdbe0f41947e1e3b411430257->enter($__internal_03b782eed2c52a924836d19b3af6b3e3e456be3fdbe0f41947e1e3b411430257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_8f972aa96d761977d44b94ee79fd1b6309eb90bc18297d7ae147aca742f0aebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f972aa96d761977d44b94ee79fd1b6309eb90bc18297d7ae147aca742f0aebd->enter($__internal_8f972aa96d761977d44b94ee79fd1b6309eb90bc18297d7ae147aca742f0aebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_8f972aa96d761977d44b94ee79fd1b6309eb90bc18297d7ae147aca742f0aebd->leave($__internal_8f972aa96d761977d44b94ee79fd1b6309eb90bc18297d7ae147aca742f0aebd_prof);

        
        $__internal_03b782eed2c52a924836d19b3af6b3e3e456be3fdbe0f41947e1e3b411430257->leave($__internal_03b782eed2c52a924836d19b3af6b3e3e456be3fdbe0f41947e1e3b411430257_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_71b7979a65d700863ad6f7a40344585fb8a9d16879ad5042fe3bfcb5a4ee02f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71b7979a65d700863ad6f7a40344585fb8a9d16879ad5042fe3bfcb5a4ee02f7->enter($__internal_71b7979a65d700863ad6f7a40344585fb8a9d16879ad5042fe3bfcb5a4ee02f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c0374ec2bc86f47a5a70c3b3268587e378c5de3cdc48a6b41ea33467fcaf1145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0374ec2bc86f47a5a70c3b3268587e378c5de3cdc48a6b41ea33467fcaf1145->enter($__internal_c0374ec2bc86f47a5a70c3b3268587e378c5de3cdc48a6b41ea33467fcaf1145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_c0374ec2bc86f47a5a70c3b3268587e378c5de3cdc48a6b41ea33467fcaf1145->leave($__internal_c0374ec2bc86f47a5a70c3b3268587e378c5de3cdc48a6b41ea33467fcaf1145_prof);

        
        $__internal_71b7979a65d700863ad6f7a40344585fb8a9d16879ad5042fe3bfcb5a4ee02f7->leave($__internal_71b7979a65d700863ad6f7a40344585fb8a9d16879ad5042fe3bfcb5a4ee02f7_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_5735d707e82a32332e6ab704ed4ef2e190d383e19826da7290ca726579396cb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5735d707e82a32332e6ab704ed4ef2e190d383e19826da7290ca726579396cb9->enter($__internal_5735d707e82a32332e6ab704ed4ef2e190d383e19826da7290ca726579396cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_cc782bc740baa3b9b04ec8f9259794cceb285bac5c4b5b989bd4228c046c566a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc782bc740baa3b9b04ec8f9259794cceb285bac5c4b5b989bd4228c046c566a->enter($__internal_cc782bc740baa3b9b04ec8f9259794cceb285bac5c4b5b989bd4228c046c566a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_cc782bc740baa3b9b04ec8f9259794cceb285bac5c4b5b989bd4228c046c566a->leave($__internal_cc782bc740baa3b9b04ec8f9259794cceb285bac5c4b5b989bd4228c046c566a_prof);

        
        $__internal_5735d707e82a32332e6ab704ed4ef2e190d383e19826da7290ca726579396cb9->leave($__internal_5735d707e82a32332e6ab704ed4ef2e190d383e19826da7290ca726579396cb9_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_e6d965c6c9f9fe242b67b7d7e5ee157d911e9ee9670825fe33c8c603ddf5449c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6d965c6c9f9fe242b67b7d7e5ee157d911e9ee9670825fe33c8c603ddf5449c->enter($__internal_e6d965c6c9f9fe242b67b7d7e5ee157d911e9ee9670825fe33c8c603ddf5449c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_9e9576dda1ee012c28080ff13b80c36a27c57269cdfded916e547aef73f11611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e9576dda1ee012c28080ff13b80c36a27c57269cdfded916e547aef73f11611->enter($__internal_9e9576dda1ee012c28080ff13b80c36a27c57269cdfded916e547aef73f11611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9e9576dda1ee012c28080ff13b80c36a27c57269cdfded916e547aef73f11611->leave($__internal_9e9576dda1ee012c28080ff13b80c36a27c57269cdfded916e547aef73f11611_prof);

        
        $__internal_e6d965c6c9f9fe242b67b7d7e5ee157d911e9ee9670825fe33c8c603ddf5449c->leave($__internal_e6d965c6c9f9fe242b67b7d7e5ee157d911e9ee9670825fe33c8c603ddf5449c_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_b60c2c0ac922350f8fad037b2d2352a13d6381f90f245b72835c99c4102ba26e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b60c2c0ac922350f8fad037b2d2352a13d6381f90f245b72835c99c4102ba26e->enter($__internal_b60c2c0ac922350f8fad037b2d2352a13d6381f90f245b72835c99c4102ba26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_a14744500fae6009bfa6c8f73eac09c7260f4d943ad6be26c4e70c94e5cd90e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a14744500fae6009bfa6c8f73eac09c7260f4d943ad6be26c4e70c94e5cd90e1->enter($__internal_a14744500fae6009bfa6c8f73eac09c7260f4d943ad6be26c4e70c94e5cd90e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a14744500fae6009bfa6c8f73eac09c7260f4d943ad6be26c4e70c94e5cd90e1->leave($__internal_a14744500fae6009bfa6c8f73eac09c7260f4d943ad6be26c4e70c94e5cd90e1_prof);

        
        $__internal_b60c2c0ac922350f8fad037b2d2352a13d6381f90f245b72835c99c4102ba26e->leave($__internal_b60c2c0ac922350f8fad037b2d2352a13d6381f90f245b72835c99c4102ba26e_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_d1cab5c8e666c680408b2d224b82314b8c8e5e29b355421088eb943263c39167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1cab5c8e666c680408b2d224b82314b8c8e5e29b355421088eb943263c39167->enter($__internal_d1cab5c8e666c680408b2d224b82314b8c8e5e29b355421088eb943263c39167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_fb2dbd9cb472ebda9c0c817b3d559895ee89c6ec77066e873490d90f547878e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb2dbd9cb472ebda9c0c817b3d559895ee89c6ec77066e873490d90f547878e8->enter($__internal_fb2dbd9cb472ebda9c0c817b3d559895ee89c6ec77066e873490d90f547878e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_fb2dbd9cb472ebda9c0c817b3d559895ee89c6ec77066e873490d90f547878e8->leave($__internal_fb2dbd9cb472ebda9c0c817b3d559895ee89c6ec77066e873490d90f547878e8_prof);

        
        $__internal_d1cab5c8e666c680408b2d224b82314b8c8e5e29b355421088eb943263c39167->leave($__internal_d1cab5c8e666c680408b2d224b82314b8c8e5e29b355421088eb943263c39167_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_77980c38b7c2473c502c1e69eeac89aa0732ad94903eaed691b189ea610eb711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77980c38b7c2473c502c1e69eeac89aa0732ad94903eaed691b189ea610eb711->enter($__internal_77980c38b7c2473c502c1e69eeac89aa0732ad94903eaed691b189ea610eb711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_e893e4142433bee59232e369360e6c5f931e66bbdac7a592eaf11a327f687b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e893e4142433bee59232e369360e6c5f931e66bbdac7a592eaf11a327f687b8c->enter($__internal_e893e4142433bee59232e369360e6c5f931e66bbdac7a592eaf11a327f687b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e893e4142433bee59232e369360e6c5f931e66bbdac7a592eaf11a327f687b8c->leave($__internal_e893e4142433bee59232e369360e6c5f931e66bbdac7a592eaf11a327f687b8c_prof);

        
        $__internal_77980c38b7c2473c502c1e69eeac89aa0732ad94903eaed691b189ea610eb711->leave($__internal_77980c38b7c2473c502c1e69eeac89aa0732ad94903eaed691b189ea610eb711_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_9d861f8668ce006304d4b9c23ed9b10d7e59828e33f1f6361f5c66d237272ebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d861f8668ce006304d4b9c23ed9b10d7e59828e33f1f6361f5c66d237272ebc->enter($__internal_9d861f8668ce006304d4b9c23ed9b10d7e59828e33f1f6361f5c66d237272ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_7399afe0d7cbe2aa3c597f2ceb7bb2bf2aa0e17d45479601872a9e6e1b56f18e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7399afe0d7cbe2aa3c597f2ceb7bb2bf2aa0e17d45479601872a9e6e1b56f18e->enter($__internal_7399afe0d7cbe2aa3c597f2ceb7bb2bf2aa0e17d45479601872a9e6e1b56f18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_7399afe0d7cbe2aa3c597f2ceb7bb2bf2aa0e17d45479601872a9e6e1b56f18e->leave($__internal_7399afe0d7cbe2aa3c597f2ceb7bb2bf2aa0e17d45479601872a9e6e1b56f18e_prof);

        
        $__internal_9d861f8668ce006304d4b9c23ed9b10d7e59828e33f1f6361f5c66d237272ebc->leave($__internal_9d861f8668ce006304d4b9c23ed9b10d7e59828e33f1f6361f5c66d237272ebc_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_807a6785bd8b08fb5b0d69340f41c05d43fc7d4af201807d85474f174c856866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807a6785bd8b08fb5b0d69340f41c05d43fc7d4af201807d85474f174c856866->enter($__internal_807a6785bd8b08fb5b0d69340f41c05d43fc7d4af201807d85474f174c856866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_e4392fbd5dbb5a553112e86e43f37d75e50bbfd47c81ad3dc1ed2b9621980549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4392fbd5dbb5a553112e86e43f37d75e50bbfd47c81ad3dc1ed2b9621980549->enter($__internal_e4392fbd5dbb5a553112e86e43f37d75e50bbfd47c81ad3dc1ed2b9621980549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_e4392fbd5dbb5a553112e86e43f37d75e50bbfd47c81ad3dc1ed2b9621980549->leave($__internal_e4392fbd5dbb5a553112e86e43f37d75e50bbfd47c81ad3dc1ed2b9621980549_prof);

        
        $__internal_807a6785bd8b08fb5b0d69340f41c05d43fc7d4af201807d85474f174c856866->leave($__internal_807a6785bd8b08fb5b0d69340f41c05d43fc7d4af201807d85474f174c856866_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_b131d26e7c4c961551fba4fb0d6b32881bbb24a4d2c988f5d88b7ca916d061f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b131d26e7c4c961551fba4fb0d6b32881bbb24a4d2c988f5d88b7ca916d061f0->enter($__internal_b131d26e7c4c961551fba4fb0d6b32881bbb24a4d2c988f5d88b7ca916d061f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_ae1cb099919f9a9156d551859e42348ecfaf62d6f3b92d6158a0887029de73b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1cb099919f9a9156d551859e42348ecfaf62d6f3b92d6158a0887029de73b4->enter($__internal_ae1cb099919f9a9156d551859e42348ecfaf62d6f3b92d6158a0887029de73b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_ae1cb099919f9a9156d551859e42348ecfaf62d6f3b92d6158a0887029de73b4->leave($__internal_ae1cb099919f9a9156d551859e42348ecfaf62d6f3b92d6158a0887029de73b4_prof);

        
        $__internal_b131d26e7c4c961551fba4fb0d6b32881bbb24a4d2c988f5d88b7ca916d061f0->leave($__internal_b131d26e7c4c961551fba4fb0d6b32881bbb24a4d2c988f5d88b7ca916d061f0_prof);

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
