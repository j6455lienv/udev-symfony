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
        $__internal_b8f01679b884cd1d7ed5ea54e5e3a1aab85ec0a11ffeaa1fa317ca944d3e8285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f01679b884cd1d7ed5ea54e5e3a1aab85ec0a11ffeaa1fa317ca944d3e8285->enter($__internal_b8f01679b884cd1d7ed5ea54e5e3a1aab85ec0a11ffeaa1fa317ca944d3e8285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_77852cb7bf6d64eccab90b5cdc70b871401f5e4215d0db95e868e6f8367a921a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77852cb7bf6d64eccab90b5cdc70b871401f5e4215d0db95e868e6f8367a921a->enter($__internal_77852cb7bf6d64eccab90b5cdc70b871401f5e4215d0db95e868e6f8367a921a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_b8f01679b884cd1d7ed5ea54e5e3a1aab85ec0a11ffeaa1fa317ca944d3e8285->leave($__internal_b8f01679b884cd1d7ed5ea54e5e3a1aab85ec0a11ffeaa1fa317ca944d3e8285_prof);

        
        $__internal_77852cb7bf6d64eccab90b5cdc70b871401f5e4215d0db95e868e6f8367a921a->leave($__internal_77852cb7bf6d64eccab90b5cdc70b871401f5e4215d0db95e868e6f8367a921a_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_edab4efd14d0249791e39f2b415fb87f88cc13edc073b7e2649f72bcf987d20d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edab4efd14d0249791e39f2b415fb87f88cc13edc073b7e2649f72bcf987d20d->enter($__internal_edab4efd14d0249791e39f2b415fb87f88cc13edc073b7e2649f72bcf987d20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_ba2aaea3abb8780f1bd1f1a41d2302d657cd7a4dc7d925cfdcaa7f81c6d484a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2aaea3abb8780f1bd1f1a41d2302d657cd7a4dc7d925cfdcaa7f81c6d484a5->enter($__internal_ba2aaea3abb8780f1bd1f1a41d2302d657cd7a4dc7d925cfdcaa7f81c6d484a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ba2aaea3abb8780f1bd1f1a41d2302d657cd7a4dc7d925cfdcaa7f81c6d484a5->leave($__internal_ba2aaea3abb8780f1bd1f1a41d2302d657cd7a4dc7d925cfdcaa7f81c6d484a5_prof);

        
        $__internal_edab4efd14d0249791e39f2b415fb87f88cc13edc073b7e2649f72bcf987d20d->leave($__internal_edab4efd14d0249791e39f2b415fb87f88cc13edc073b7e2649f72bcf987d20d_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_ddd9badd017aea9ab9f1022436df4775cae8721c34f6f99656c73b1fcdbb88a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddd9badd017aea9ab9f1022436df4775cae8721c34f6f99656c73b1fcdbb88a6->enter($__internal_ddd9badd017aea9ab9f1022436df4775cae8721c34f6f99656c73b1fcdbb88a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_4c4a77394300244b7ac8857903526e4e4587ff905a616309c88db8e860f100cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c4a77394300244b7ac8857903526e4e4587ff905a616309c88db8e860f100cd->enter($__internal_4c4a77394300244b7ac8857903526e4e4587ff905a616309c88db8e860f100cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_4c4a77394300244b7ac8857903526e4e4587ff905a616309c88db8e860f100cd->leave($__internal_4c4a77394300244b7ac8857903526e4e4587ff905a616309c88db8e860f100cd_prof);

        
        $__internal_ddd9badd017aea9ab9f1022436df4775cae8721c34f6f99656c73b1fcdbb88a6->leave($__internal_ddd9badd017aea9ab9f1022436df4775cae8721c34f6f99656c73b1fcdbb88a6_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_a719b8bc994bb558cfef0023acc1d2f433fdcefe2fe3b3913213f42b18f62225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a719b8bc994bb558cfef0023acc1d2f433fdcefe2fe3b3913213f42b18f62225->enter($__internal_a719b8bc994bb558cfef0023acc1d2f433fdcefe2fe3b3913213f42b18f62225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_0379a8781657f989bc8d93eadb333a6f390e946d0066d76a7c11febe7dd5642c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0379a8781657f989bc8d93eadb333a6f390e946d0066d76a7c11febe7dd5642c->enter($__internal_0379a8781657f989bc8d93eadb333a6f390e946d0066d76a7c11febe7dd5642c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_0379a8781657f989bc8d93eadb333a6f390e946d0066d76a7c11febe7dd5642c->leave($__internal_0379a8781657f989bc8d93eadb333a6f390e946d0066d76a7c11febe7dd5642c_prof);

        
        $__internal_a719b8bc994bb558cfef0023acc1d2f433fdcefe2fe3b3913213f42b18f62225->leave($__internal_a719b8bc994bb558cfef0023acc1d2f433fdcefe2fe3b3913213f42b18f62225_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_0c79d80f92c8a299cce475a85ed72c0b181f66628f828b912f11b7e511d453f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c79d80f92c8a299cce475a85ed72c0b181f66628f828b912f11b7e511d453f8->enter($__internal_0c79d80f92c8a299cce475a85ed72c0b181f66628f828b912f11b7e511d453f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_998c1ffa6c906cf6a731db102f254f861d96824ad63b43bf053e7f2070006463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_998c1ffa6c906cf6a731db102f254f861d96824ad63b43bf053e7f2070006463->enter($__internal_998c1ffa6c906cf6a731db102f254f861d96824ad63b43bf053e7f2070006463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_c992b1a53af28e9dfa70f940885a1932ea9dc215bb9b5eaab6f2a21a345e1045 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_97387fc960a9d2ab22ac93c3af2832aba6a26dfad0c631402ebd0c63e2e6d54f = "{{") && ('' === $__internal_97387fc960a9d2ab22ac93c3af2832aba6a26dfad0c631402ebd0c63e2e6d54f || 0 === strpos($__internal_c992b1a53af28e9dfa70f940885a1932ea9dc215bb9b5eaab6f2a21a345e1045, $__internal_97387fc960a9d2ab22ac93c3af2832aba6a26dfad0c631402ebd0c63e2e6d54f)));
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
        
        $__internal_998c1ffa6c906cf6a731db102f254f861d96824ad63b43bf053e7f2070006463->leave($__internal_998c1ffa6c906cf6a731db102f254f861d96824ad63b43bf053e7f2070006463_prof);

        
        $__internal_0c79d80f92c8a299cce475a85ed72c0b181f66628f828b912f11b7e511d453f8->leave($__internal_0c79d80f92c8a299cce475a85ed72c0b181f66628f828b912f11b7e511d453f8_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_adf670ad5a4cfe2c236cf5e0be325096502648ad1279b993c5bb3a30778ac157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adf670ad5a4cfe2c236cf5e0be325096502648ad1279b993c5bb3a30778ac157->enter($__internal_adf670ad5a4cfe2c236cf5e0be325096502648ad1279b993c5bb3a30778ac157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_33b52d5256b52bdf4e8ce040a78b25bdf22dd04ac5724af9837214f41d478daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b52d5256b52bdf4e8ce040a78b25bdf22dd04ac5724af9837214f41d478daf->enter($__internal_33b52d5256b52bdf4e8ce040a78b25bdf22dd04ac5724af9837214f41d478daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_33b52d5256b52bdf4e8ce040a78b25bdf22dd04ac5724af9837214f41d478daf->leave($__internal_33b52d5256b52bdf4e8ce040a78b25bdf22dd04ac5724af9837214f41d478daf_prof);

        
        $__internal_adf670ad5a4cfe2c236cf5e0be325096502648ad1279b993c5bb3a30778ac157->leave($__internal_adf670ad5a4cfe2c236cf5e0be325096502648ad1279b993c5bb3a30778ac157_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_d2a7f59bd429dae817016a592b366dc1ad23d074052c26081977c12c58ed5957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2a7f59bd429dae817016a592b366dc1ad23d074052c26081977c12c58ed5957->enter($__internal_d2a7f59bd429dae817016a592b366dc1ad23d074052c26081977c12c58ed5957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_c7d55d1ac41d23f6c2de59c1ab92414f46cdf8af8cd9e3bd559a912c0ea16c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7d55d1ac41d23f6c2de59c1ab92414f46cdf8af8cd9e3bd559a912c0ea16c78->enter($__internal_c7d55d1ac41d23f6c2de59c1ab92414f46cdf8af8cd9e3bd559a912c0ea16c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_c7d55d1ac41d23f6c2de59c1ab92414f46cdf8af8cd9e3bd559a912c0ea16c78->leave($__internal_c7d55d1ac41d23f6c2de59c1ab92414f46cdf8af8cd9e3bd559a912c0ea16c78_prof);

        
        $__internal_d2a7f59bd429dae817016a592b366dc1ad23d074052c26081977c12c58ed5957->leave($__internal_d2a7f59bd429dae817016a592b366dc1ad23d074052c26081977c12c58ed5957_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_95fb8cc3eede3b0602886a09f79579908f442ae0c9bef4d03dbba35eaff81b2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95fb8cc3eede3b0602886a09f79579908f442ae0c9bef4d03dbba35eaff81b2b->enter($__internal_95fb8cc3eede3b0602886a09f79579908f442ae0c9bef4d03dbba35eaff81b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_efb818059bee9b9a4e1fd9c083009fc4e1afa989f0f27fb87a5b71bf9d44494a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb818059bee9b9a4e1fd9c083009fc4e1afa989f0f27fb87a5b71bf9d44494a->enter($__internal_efb818059bee9b9a4e1fd9c083009fc4e1afa989f0f27fb87a5b71bf9d44494a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_efb818059bee9b9a4e1fd9c083009fc4e1afa989f0f27fb87a5b71bf9d44494a->leave($__internal_efb818059bee9b9a4e1fd9c083009fc4e1afa989f0f27fb87a5b71bf9d44494a_prof);

        
        $__internal_95fb8cc3eede3b0602886a09f79579908f442ae0c9bef4d03dbba35eaff81b2b->leave($__internal_95fb8cc3eede3b0602886a09f79579908f442ae0c9bef4d03dbba35eaff81b2b_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_d263b20eb83f0ca3188e51cd41548f216ed3a3c2f7d1872f58a563e10c3a7eb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d263b20eb83f0ca3188e51cd41548f216ed3a3c2f7d1872f58a563e10c3a7eb0->enter($__internal_d263b20eb83f0ca3188e51cd41548f216ed3a3c2f7d1872f58a563e10c3a7eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_d5d7f66fb8c9e40049e1cb6bbac07090c09d15aeb3ede65c14d29058a51eeeff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d7f66fb8c9e40049e1cb6bbac07090c09d15aeb3ede65c14d29058a51eeeff->enter($__internal_d5d7f66fb8c9e40049e1cb6bbac07090c09d15aeb3ede65c14d29058a51eeeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_d5d7f66fb8c9e40049e1cb6bbac07090c09d15aeb3ede65c14d29058a51eeeff->leave($__internal_d5d7f66fb8c9e40049e1cb6bbac07090c09d15aeb3ede65c14d29058a51eeeff_prof);

        
        $__internal_d263b20eb83f0ca3188e51cd41548f216ed3a3c2f7d1872f58a563e10c3a7eb0->leave($__internal_d263b20eb83f0ca3188e51cd41548f216ed3a3c2f7d1872f58a563e10c3a7eb0_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_2330682c8baea4ef73e9a6194506a205cc6777225f727813e0a9f4c87fda82e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2330682c8baea4ef73e9a6194506a205cc6777225f727813e0a9f4c87fda82e6->enter($__internal_2330682c8baea4ef73e9a6194506a205cc6777225f727813e0a9f4c87fda82e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_273dcfbc0ac821859ecb31b52c96e8919ca4749aedd0a1a43c56615e2943acca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273dcfbc0ac821859ecb31b52c96e8919ca4749aedd0a1a43c56615e2943acca->enter($__internal_273dcfbc0ac821859ecb31b52c96e8919ca4749aedd0a1a43c56615e2943acca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_273dcfbc0ac821859ecb31b52c96e8919ca4749aedd0a1a43c56615e2943acca->leave($__internal_273dcfbc0ac821859ecb31b52c96e8919ca4749aedd0a1a43c56615e2943acca_prof);

        
        $__internal_2330682c8baea4ef73e9a6194506a205cc6777225f727813e0a9f4c87fda82e6->leave($__internal_2330682c8baea4ef73e9a6194506a205cc6777225f727813e0a9f4c87fda82e6_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_eb593c71824aed4d02fc7a1c0dd0450c6cff026ca79d2b567231c108af083b81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb593c71824aed4d02fc7a1c0dd0450c6cff026ca79d2b567231c108af083b81->enter($__internal_eb593c71824aed4d02fc7a1c0dd0450c6cff026ca79d2b567231c108af083b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_c888b32cbb318834345a4c44217086542acd2ac7967a04a50a5a6b25f412fa61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c888b32cbb318834345a4c44217086542acd2ac7967a04a50a5a6b25f412fa61->enter($__internal_c888b32cbb318834345a4c44217086542acd2ac7967a04a50a5a6b25f412fa61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_c888b32cbb318834345a4c44217086542acd2ac7967a04a50a5a6b25f412fa61->leave($__internal_c888b32cbb318834345a4c44217086542acd2ac7967a04a50a5a6b25f412fa61_prof);

        
        $__internal_eb593c71824aed4d02fc7a1c0dd0450c6cff026ca79d2b567231c108af083b81->leave($__internal_eb593c71824aed4d02fc7a1c0dd0450c6cff026ca79d2b567231c108af083b81_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_af5603bba26e7b2afc5af94c12de07d80d0dd81ef6efe54b2b89bca08d5e1160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af5603bba26e7b2afc5af94c12de07d80d0dd81ef6efe54b2b89bca08d5e1160->enter($__internal_af5603bba26e7b2afc5af94c12de07d80d0dd81ef6efe54b2b89bca08d5e1160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_ca96e8bbbc0c9ed23623f672767ac82e414d4db1a8f34bf34d9dbf5115263622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca96e8bbbc0c9ed23623f672767ac82e414d4db1a8f34bf34d9dbf5115263622->enter($__internal_ca96e8bbbc0c9ed23623f672767ac82e414d4db1a8f34bf34d9dbf5115263622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_ca96e8bbbc0c9ed23623f672767ac82e414d4db1a8f34bf34d9dbf5115263622->leave($__internal_ca96e8bbbc0c9ed23623f672767ac82e414d4db1a8f34bf34d9dbf5115263622_prof);

        
        $__internal_af5603bba26e7b2afc5af94c12de07d80d0dd81ef6efe54b2b89bca08d5e1160->leave($__internal_af5603bba26e7b2afc5af94c12de07d80d0dd81ef6efe54b2b89bca08d5e1160_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a1d2664fff72125a0cd1e838c95b9efebd14b359a0bc273a6bddece3e0625853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1d2664fff72125a0cd1e838c95b9efebd14b359a0bc273a6bddece3e0625853->enter($__internal_a1d2664fff72125a0cd1e838c95b9efebd14b359a0bc273a6bddece3e0625853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_f389acf73fc7124fb564d04e20cb321a1ccd59af4417c7d157b0e46b282cfd0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f389acf73fc7124fb564d04e20cb321a1ccd59af4417c7d157b0e46b282cfd0e->enter($__internal_f389acf73fc7124fb564d04e20cb321a1ccd59af4417c7d157b0e46b282cfd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_f389acf73fc7124fb564d04e20cb321a1ccd59af4417c7d157b0e46b282cfd0e->leave($__internal_f389acf73fc7124fb564d04e20cb321a1ccd59af4417c7d157b0e46b282cfd0e_prof);

        
        $__internal_a1d2664fff72125a0cd1e838c95b9efebd14b359a0bc273a6bddece3e0625853->leave($__internal_a1d2664fff72125a0cd1e838c95b9efebd14b359a0bc273a6bddece3e0625853_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_209382d5a57475e04a0db101d458ff2b540bec141d5c934286edc913b4eee2ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_209382d5a57475e04a0db101d458ff2b540bec141d5c934286edc913b4eee2ce->enter($__internal_209382d5a57475e04a0db101d458ff2b540bec141d5c934286edc913b4eee2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_0f18a885748d583a23b062767457bc2d6a45e7cf21803bda9d81514bb74066ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f18a885748d583a23b062767457bc2d6a45e7cf21803bda9d81514bb74066ed->enter($__internal_0f18a885748d583a23b062767457bc2d6a45e7cf21803bda9d81514bb74066ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_0f18a885748d583a23b062767457bc2d6a45e7cf21803bda9d81514bb74066ed->leave($__internal_0f18a885748d583a23b062767457bc2d6a45e7cf21803bda9d81514bb74066ed_prof);

        
        $__internal_209382d5a57475e04a0db101d458ff2b540bec141d5c934286edc913b4eee2ce->leave($__internal_209382d5a57475e04a0db101d458ff2b540bec141d5c934286edc913b4eee2ce_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d6261b8af4f8b174729ef86ffa8c83a2431d632a313b96f8b7ff10b302f3ada7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6261b8af4f8b174729ef86ffa8c83a2431d632a313b96f8b7ff10b302f3ada7->enter($__internal_d6261b8af4f8b174729ef86ffa8c83a2431d632a313b96f8b7ff10b302f3ada7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_30227ef6d3cc9a1086143d3baba38022347503a934dacbabb370082e6b74c02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30227ef6d3cc9a1086143d3baba38022347503a934dacbabb370082e6b74c02f->enter($__internal_30227ef6d3cc9a1086143d3baba38022347503a934dacbabb370082e6b74c02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_30227ef6d3cc9a1086143d3baba38022347503a934dacbabb370082e6b74c02f->leave($__internal_30227ef6d3cc9a1086143d3baba38022347503a934dacbabb370082e6b74c02f_prof);

        
        $__internal_d6261b8af4f8b174729ef86ffa8c83a2431d632a313b96f8b7ff10b302f3ada7->leave($__internal_d6261b8af4f8b174729ef86ffa8c83a2431d632a313b96f8b7ff10b302f3ada7_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_d18b43e6b8181c789e6afea3acb29ef86d721a740a5bc5f92dfc3aff69e24293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d18b43e6b8181c789e6afea3acb29ef86d721a740a5bc5f92dfc3aff69e24293->enter($__internal_d18b43e6b8181c789e6afea3acb29ef86d721a740a5bc5f92dfc3aff69e24293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_70e927a721eb637968367f34809a0a2c11187c4be78e0196448bf62edbcbdc60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e927a721eb637968367f34809a0a2c11187c4be78e0196448bf62edbcbdc60->enter($__internal_70e927a721eb637968367f34809a0a2c11187c4be78e0196448bf62edbcbdc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_70e927a721eb637968367f34809a0a2c11187c4be78e0196448bf62edbcbdc60->leave($__internal_70e927a721eb637968367f34809a0a2c11187c4be78e0196448bf62edbcbdc60_prof);

        
        $__internal_d18b43e6b8181c789e6afea3acb29ef86d721a740a5bc5f92dfc3aff69e24293->leave($__internal_d18b43e6b8181c789e6afea3acb29ef86d721a740a5bc5f92dfc3aff69e24293_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_7c3b5143777dc8f9c4a7a0e7b514ac8c616ff968506571032cf1e1d691bc05af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c3b5143777dc8f9c4a7a0e7b514ac8c616ff968506571032cf1e1d691bc05af->enter($__internal_7c3b5143777dc8f9c4a7a0e7b514ac8c616ff968506571032cf1e1d691bc05af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_879862f52a304fbfe11a0b6a3f604d5c56509b18f581cf4ce5bf63ddc6c4f053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_879862f52a304fbfe11a0b6a3f604d5c56509b18f581cf4ce5bf63ddc6c4f053->enter($__internal_879862f52a304fbfe11a0b6a3f604d5c56509b18f581cf4ce5bf63ddc6c4f053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_879862f52a304fbfe11a0b6a3f604d5c56509b18f581cf4ce5bf63ddc6c4f053->leave($__internal_879862f52a304fbfe11a0b6a3f604d5c56509b18f581cf4ce5bf63ddc6c4f053_prof);

        
        $__internal_7c3b5143777dc8f9c4a7a0e7b514ac8c616ff968506571032cf1e1d691bc05af->leave($__internal_7c3b5143777dc8f9c4a7a0e7b514ac8c616ff968506571032cf1e1d691bc05af_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_0fd4ff78a15ef99e5bf83c215399be1b1a82ec3d380154d3cd63c03980b9e648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd4ff78a15ef99e5bf83c215399be1b1a82ec3d380154d3cd63c03980b9e648->enter($__internal_0fd4ff78a15ef99e5bf83c215399be1b1a82ec3d380154d3cd63c03980b9e648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_92c9e16eb67607f1d05bb82cd54411ee8ae290642cce9098177901422099db35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c9e16eb67607f1d05bb82cd54411ee8ae290642cce9098177901422099db35->enter($__internal_92c9e16eb67607f1d05bb82cd54411ee8ae290642cce9098177901422099db35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_92c9e16eb67607f1d05bb82cd54411ee8ae290642cce9098177901422099db35->leave($__internal_92c9e16eb67607f1d05bb82cd54411ee8ae290642cce9098177901422099db35_prof);

        
        $__internal_0fd4ff78a15ef99e5bf83c215399be1b1a82ec3d380154d3cd63c03980b9e648->leave($__internal_0fd4ff78a15ef99e5bf83c215399be1b1a82ec3d380154d3cd63c03980b9e648_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_ab097a8b27060738555fead3cabb2dc267dc0029c4a63bfe8f5dedb8a63160c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab097a8b27060738555fead3cabb2dc267dc0029c4a63bfe8f5dedb8a63160c9->enter($__internal_ab097a8b27060738555fead3cabb2dc267dc0029c4a63bfe8f5dedb8a63160c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_33134e95b8131015b8d09d63954b4cfca0ff0c042ed5585af9416e9fd46ced20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33134e95b8131015b8d09d63954b4cfca0ff0c042ed5585af9416e9fd46ced20->enter($__internal_33134e95b8131015b8d09d63954b4cfca0ff0c042ed5585af9416e9fd46ced20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_33134e95b8131015b8d09d63954b4cfca0ff0c042ed5585af9416e9fd46ced20->leave($__internal_33134e95b8131015b8d09d63954b4cfca0ff0c042ed5585af9416e9fd46ced20_prof);

        
        $__internal_ab097a8b27060738555fead3cabb2dc267dc0029c4a63bfe8f5dedb8a63160c9->leave($__internal_ab097a8b27060738555fead3cabb2dc267dc0029c4a63bfe8f5dedb8a63160c9_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_73dd6de799d2fcca649f891abd0a8a78024d0b648f2fb7b4f003598e887fd198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73dd6de799d2fcca649f891abd0a8a78024d0b648f2fb7b4f003598e887fd198->enter($__internal_73dd6de799d2fcca649f891abd0a8a78024d0b648f2fb7b4f003598e887fd198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9942115f4e38ac7669456120952a67206514b3ae075a9247741939a9d93bdf0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9942115f4e38ac7669456120952a67206514b3ae075a9247741939a9d93bdf0b->enter($__internal_9942115f4e38ac7669456120952a67206514b3ae075a9247741939a9d93bdf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_9942115f4e38ac7669456120952a67206514b3ae075a9247741939a9d93bdf0b->leave($__internal_9942115f4e38ac7669456120952a67206514b3ae075a9247741939a9d93bdf0b_prof);

        
        $__internal_73dd6de799d2fcca649f891abd0a8a78024d0b648f2fb7b4f003598e887fd198->leave($__internal_73dd6de799d2fcca649f891abd0a8a78024d0b648f2fb7b4f003598e887fd198_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_77a9922b49e56d009f17e81fc0b287629e92bc98c94e5378c684deb508e13070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77a9922b49e56d009f17e81fc0b287629e92bc98c94e5378c684deb508e13070->enter($__internal_77a9922b49e56d009f17e81fc0b287629e92bc98c94e5378c684deb508e13070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_f69b5a0b3b53578698618b3c3d8291c95e44c83fb388dd7ff084373af06683e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f69b5a0b3b53578698618b3c3d8291c95e44c83fb388dd7ff084373af06683e4->enter($__internal_f69b5a0b3b53578698618b3c3d8291c95e44c83fb388dd7ff084373af06683e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_f69b5a0b3b53578698618b3c3d8291c95e44c83fb388dd7ff084373af06683e4->leave($__internal_f69b5a0b3b53578698618b3c3d8291c95e44c83fb388dd7ff084373af06683e4_prof);

        
        $__internal_77a9922b49e56d009f17e81fc0b287629e92bc98c94e5378c684deb508e13070->leave($__internal_77a9922b49e56d009f17e81fc0b287629e92bc98c94e5378c684deb508e13070_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_443875299854826d76e340a87ed6f36363b8268cbf40a7392719670882adc690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_443875299854826d76e340a87ed6f36363b8268cbf40a7392719670882adc690->enter($__internal_443875299854826d76e340a87ed6f36363b8268cbf40a7392719670882adc690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_888e2c1c30ee4548e9db3d94d5c164ce4587cf39852e881ff90cac78357b66b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888e2c1c30ee4548e9db3d94d5c164ce4587cf39852e881ff90cac78357b66b2->enter($__internal_888e2c1c30ee4548e9db3d94d5c164ce4587cf39852e881ff90cac78357b66b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_888e2c1c30ee4548e9db3d94d5c164ce4587cf39852e881ff90cac78357b66b2->leave($__internal_888e2c1c30ee4548e9db3d94d5c164ce4587cf39852e881ff90cac78357b66b2_prof);

        
        $__internal_443875299854826d76e340a87ed6f36363b8268cbf40a7392719670882adc690->leave($__internal_443875299854826d76e340a87ed6f36363b8268cbf40a7392719670882adc690_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_8428bf9ef39da9b5baca479c16f89e139010d66da1fcf6861829de234f6587bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8428bf9ef39da9b5baca479c16f89e139010d66da1fcf6861829de234f6587bd->enter($__internal_8428bf9ef39da9b5baca479c16f89e139010d66da1fcf6861829de234f6587bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_013c68e20a108d1fa8629aa8daa97010190018b60a82203fd35129b2d3aae514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013c68e20a108d1fa8629aa8daa97010190018b60a82203fd35129b2d3aae514->enter($__internal_013c68e20a108d1fa8629aa8daa97010190018b60a82203fd35129b2d3aae514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_013c68e20a108d1fa8629aa8daa97010190018b60a82203fd35129b2d3aae514->leave($__internal_013c68e20a108d1fa8629aa8daa97010190018b60a82203fd35129b2d3aae514_prof);

        
        $__internal_8428bf9ef39da9b5baca479c16f89e139010d66da1fcf6861829de234f6587bd->leave($__internal_8428bf9ef39da9b5baca479c16f89e139010d66da1fcf6861829de234f6587bd_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_23a327dad028481afced076a9f431ec837a4d9899fe014ed5a58df0e58c2ef5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23a327dad028481afced076a9f431ec837a4d9899fe014ed5a58df0e58c2ef5a->enter($__internal_23a327dad028481afced076a9f431ec837a4d9899fe014ed5a58df0e58c2ef5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_9d6871cc527258858981cd2c0ee6ee7335b49c9121beae4af0bdda601cb00008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6871cc527258858981cd2c0ee6ee7335b49c9121beae4af0bdda601cb00008->enter($__internal_9d6871cc527258858981cd2c0ee6ee7335b49c9121beae4af0bdda601cb00008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9d6871cc527258858981cd2c0ee6ee7335b49c9121beae4af0bdda601cb00008->leave($__internal_9d6871cc527258858981cd2c0ee6ee7335b49c9121beae4af0bdda601cb00008_prof);

        
        $__internal_23a327dad028481afced076a9f431ec837a4d9899fe014ed5a58df0e58c2ef5a->leave($__internal_23a327dad028481afced076a9f431ec837a4d9899fe014ed5a58df0e58c2ef5a_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_42e054b9ac86060982d9932fc50aa28ec8249f65ff97c47b824df09887ede46f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e054b9ac86060982d9932fc50aa28ec8249f65ff97c47b824df09887ede46f->enter($__internal_42e054b9ac86060982d9932fc50aa28ec8249f65ff97c47b824df09887ede46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_d28ee2f75acc18a220c06ecfb088329acb0d04b221d0b37a6562474d24c0b0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28ee2f75acc18a220c06ecfb088329acb0d04b221d0b37a6562474d24c0b0e4->enter($__internal_d28ee2f75acc18a220c06ecfb088329acb0d04b221d0b37a6562474d24c0b0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d28ee2f75acc18a220c06ecfb088329acb0d04b221d0b37a6562474d24c0b0e4->leave($__internal_d28ee2f75acc18a220c06ecfb088329acb0d04b221d0b37a6562474d24c0b0e4_prof);

        
        $__internal_42e054b9ac86060982d9932fc50aa28ec8249f65ff97c47b824df09887ede46f->leave($__internal_42e054b9ac86060982d9932fc50aa28ec8249f65ff97c47b824df09887ede46f_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_8ebb3c0f35b080e7f7c7828e23b4fb936a07ca07b5cfcc8aa083e67d5a373c8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ebb3c0f35b080e7f7c7828e23b4fb936a07ca07b5cfcc8aa083e67d5a373c8a->enter($__internal_8ebb3c0f35b080e7f7c7828e23b4fb936a07ca07b5cfcc8aa083e67d5a373c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_0a9bdcaf1637ed63678dd02125e2ad09157a006c325d110523f48b32b46470fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9bdcaf1637ed63678dd02125e2ad09157a006c325d110523f48b32b46470fa->enter($__internal_0a9bdcaf1637ed63678dd02125e2ad09157a006c325d110523f48b32b46470fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_0a9bdcaf1637ed63678dd02125e2ad09157a006c325d110523f48b32b46470fa->leave($__internal_0a9bdcaf1637ed63678dd02125e2ad09157a006c325d110523f48b32b46470fa_prof);

        
        $__internal_8ebb3c0f35b080e7f7c7828e23b4fb936a07ca07b5cfcc8aa083e67d5a373c8a->leave($__internal_8ebb3c0f35b080e7f7c7828e23b4fb936a07ca07b5cfcc8aa083e67d5a373c8a_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_967bead381c03bca3ae9c2963956981e8f18d6597f90fc07ee082bde3b36170e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_967bead381c03bca3ae9c2963956981e8f18d6597f90fc07ee082bde3b36170e->enter($__internal_967bead381c03bca3ae9c2963956981e8f18d6597f90fc07ee082bde3b36170e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_9cc3f62880a4a1688233704f0bd19dc07b92278a7bfa216c0421c1952eaf0852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc3f62880a4a1688233704f0bd19dc07b92278a7bfa216c0421c1952eaf0852->enter($__internal_9cc3f62880a4a1688233704f0bd19dc07b92278a7bfa216c0421c1952eaf0852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_9cc3f62880a4a1688233704f0bd19dc07b92278a7bfa216c0421c1952eaf0852->leave($__internal_9cc3f62880a4a1688233704f0bd19dc07b92278a7bfa216c0421c1952eaf0852_prof);

        
        $__internal_967bead381c03bca3ae9c2963956981e8f18d6597f90fc07ee082bde3b36170e->leave($__internal_967bead381c03bca3ae9c2963956981e8f18d6597f90fc07ee082bde3b36170e_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_926282491ed3f4dbeee24301b0dc8c4f64457e7bc70a838933343bef4d98fb17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_926282491ed3f4dbeee24301b0dc8c4f64457e7bc70a838933343bef4d98fb17->enter($__internal_926282491ed3f4dbeee24301b0dc8c4f64457e7bc70a838933343bef4d98fb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_7bef343b1421474048a7418dcd6cac4d0854b3accf06e26a96a8bc8c67bf7dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bef343b1421474048a7418dcd6cac4d0854b3accf06e26a96a8bc8c67bf7dbd->enter($__internal_7bef343b1421474048a7418dcd6cac4d0854b3accf06e26a96a8bc8c67bf7dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_7bef343b1421474048a7418dcd6cac4d0854b3accf06e26a96a8bc8c67bf7dbd->leave($__internal_7bef343b1421474048a7418dcd6cac4d0854b3accf06e26a96a8bc8c67bf7dbd_prof);

        
        $__internal_926282491ed3f4dbeee24301b0dc8c4f64457e7bc70a838933343bef4d98fb17->leave($__internal_926282491ed3f4dbeee24301b0dc8c4f64457e7bc70a838933343bef4d98fb17_prof);

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
