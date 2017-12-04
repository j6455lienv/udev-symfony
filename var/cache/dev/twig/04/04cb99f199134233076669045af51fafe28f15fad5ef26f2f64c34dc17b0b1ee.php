<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_ece6f08ff702d4a7567bc74c443e47f1cd2bfa97307a43cd2d91d84e9847202f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf28647a4c5547a73519cd3c996d9d0250fdc8afdb80064272eeb499225ca8f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf28647a4c5547a73519cd3c996d9d0250fdc8afdb80064272eeb499225ca8f5->enter($__internal_cf28647a4c5547a73519cd3c996d9d0250fdc8afdb80064272eeb499225ca8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_c72f2e548c224fee6a5c91470177ff0dbfc0886bc2c66616b2809e974fef3b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72f2e548c224fee6a5c91470177ff0dbfc0886bc2c66616b2809e974fef3b6c->enter($__internal_c72f2e548c224fee6a5c91470177ff0dbfc0886bc2c66616b2809e974fef3b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_cf28647a4c5547a73519cd3c996d9d0250fdc8afdb80064272eeb499225ca8f5->leave($__internal_cf28647a4c5547a73519cd3c996d9d0250fdc8afdb80064272eeb499225ca8f5_prof);

        
        $__internal_c72f2e548c224fee6a5c91470177ff0dbfc0886bc2c66616b2809e974fef3b6c->leave($__internal_c72f2e548c224fee6a5c91470177ff0dbfc0886bc2c66616b2809e974fef3b6c_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_046d7ce1f5105fe0a6a305c00e10fc9e34fa0d2850563259062e456a0352004c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_046d7ce1f5105fe0a6a305c00e10fc9e34fa0d2850563259062e456a0352004c->enter($__internal_046d7ce1f5105fe0a6a305c00e10fc9e34fa0d2850563259062e456a0352004c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_27b305d120d8dc44c6428d9b986087d03788634cc708ae42ff8031ffb992f1d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b305d120d8dc44c6428d9b986087d03788634cc708ae42ff8031ffb992f1d0->enter($__internal_27b305d120d8dc44c6428d9b986087d03788634cc708ae42ff8031ffb992f1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_27b305d120d8dc44c6428d9b986087d03788634cc708ae42ff8031ffb992f1d0->leave($__internal_27b305d120d8dc44c6428d9b986087d03788634cc708ae42ff8031ffb992f1d0_prof);

        
        $__internal_046d7ce1f5105fe0a6a305c00e10fc9e34fa0d2850563259062e456a0352004c->leave($__internal_046d7ce1f5105fe0a6a305c00e10fc9e34fa0d2850563259062e456a0352004c_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_aedcbcbd48d147a404a8dfc1b5d5e93fb837eeda5f05a90c4b439330bf3defaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aedcbcbd48d147a404a8dfc1b5d5e93fb837eeda5f05a90c4b439330bf3defaa->enter($__internal_aedcbcbd48d147a404a8dfc1b5d5e93fb837eeda5f05a90c4b439330bf3defaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_bedab626d0845da217865b0c2942909200fd9372d42ed7671b9d2120a60914d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bedab626d0845da217865b0c2942909200fd9372d42ed7671b9d2120a60914d0->enter($__internal_bedab626d0845da217865b0c2942909200fd9372d42ed7671b9d2120a60914d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bedab626d0845da217865b0c2942909200fd9372d42ed7671b9d2120a60914d0->leave($__internal_bedab626d0845da217865b0c2942909200fd9372d42ed7671b9d2120a60914d0_prof);

        
        $__internal_aedcbcbd48d147a404a8dfc1b5d5e93fb837eeda5f05a90c4b439330bf3defaa->leave($__internal_aedcbcbd48d147a404a8dfc1b5d5e93fb837eeda5f05a90c4b439330bf3defaa_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_58e5e1634466b7a0535441a3b5ad254665a0ba429587ce85279869b19e7b7929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58e5e1634466b7a0535441a3b5ad254665a0ba429587ce85279869b19e7b7929->enter($__internal_58e5e1634466b7a0535441a3b5ad254665a0ba429587ce85279869b19e7b7929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_ac3742bfd8651f3fe7dc3b1410a9bb1a9f1ef152b6ef383f4b7146d1e83ce03c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3742bfd8651f3fe7dc3b1410a9bb1a9f1ef152b6ef383f4b7146d1e83ce03c->enter($__internal_ac3742bfd8651f3fe7dc3b1410a9bb1a9f1ef152b6ef383f4b7146d1e83ce03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_ac3742bfd8651f3fe7dc3b1410a9bb1a9f1ef152b6ef383f4b7146d1e83ce03c->leave($__internal_ac3742bfd8651f3fe7dc3b1410a9bb1a9f1ef152b6ef383f4b7146d1e83ce03c_prof);

        
        $__internal_58e5e1634466b7a0535441a3b5ad254665a0ba429587ce85279869b19e7b7929->leave($__internal_58e5e1634466b7a0535441a3b5ad254665a0ba429587ce85279869b19e7b7929_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_67c69ef428a6e6901a100c0067971427032e90eeb64aa716ba428af3f628e377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c69ef428a6e6901a100c0067971427032e90eeb64aa716ba428af3f628e377->enter($__internal_67c69ef428a6e6901a100c0067971427032e90eeb64aa716ba428af3f628e377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_d82661213eab0f93b7c1f63ca701deee35899e255f1a042bb31552c66edbee61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d82661213eab0f93b7c1f63ca701deee35899e255f1a042bb31552c66edbee61->enter($__internal_d82661213eab0f93b7c1f63ca701deee35899e255f1a042bb31552c66edbee61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_d82661213eab0f93b7c1f63ca701deee35899e255f1a042bb31552c66edbee61->leave($__internal_d82661213eab0f93b7c1f63ca701deee35899e255f1a042bb31552c66edbee61_prof);

        
        $__internal_67c69ef428a6e6901a100c0067971427032e90eeb64aa716ba428af3f628e377->leave($__internal_67c69ef428a6e6901a100c0067971427032e90eeb64aa716ba428af3f628e377_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_cd60d082da4b292693cbd24f104791d84b1bd05551864ecb5af5d96345674c55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd60d082da4b292693cbd24f104791d84b1bd05551864ecb5af5d96345674c55->enter($__internal_cd60d082da4b292693cbd24f104791d84b1bd05551864ecb5af5d96345674c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c0aa662641218cdb5d550d37f3b6eb43571668c7d06bae6cd654ec49c63e50fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0aa662641218cdb5d550d37f3b6eb43571668c7d06bae6cd654ec49c63e50fe->enter($__internal_c0aa662641218cdb5d550d37f3b6eb43571668c7d06bae6cd654ec49c63e50fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_c0aa662641218cdb5d550d37f3b6eb43571668c7d06bae6cd654ec49c63e50fe->leave($__internal_c0aa662641218cdb5d550d37f3b6eb43571668c7d06bae6cd654ec49c63e50fe_prof);

        
        $__internal_cd60d082da4b292693cbd24f104791d84b1bd05551864ecb5af5d96345674c55->leave($__internal_cd60d082da4b292693cbd24f104791d84b1bd05551864ecb5af5d96345674c55_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_4ca84f83cb2c7d7fa42b2118c6483d3f36ab1a0394f305beed0f04cfaadddb26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ca84f83cb2c7d7fa42b2118c6483d3f36ab1a0394f305beed0f04cfaadddb26->enter($__internal_4ca84f83cb2c7d7fa42b2118c6483d3f36ab1a0394f305beed0f04cfaadddb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_530f4f2daaee5e75c41e6d6a60d6ec4451051ad7a456a6e569eb1f9de605e5e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530f4f2daaee5e75c41e6d6a60d6ec4451051ad7a456a6e569eb1f9de605e5e6->enter($__internal_530f4f2daaee5e75c41e6d6a60d6ec4451051ad7a456a6e569eb1f9de605e5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_530f4f2daaee5e75c41e6d6a60d6ec4451051ad7a456a6e569eb1f9de605e5e6->leave($__internal_530f4f2daaee5e75c41e6d6a60d6ec4451051ad7a456a6e569eb1f9de605e5e6_prof);

        
        $__internal_4ca84f83cb2c7d7fa42b2118c6483d3f36ab1a0394f305beed0f04cfaadddb26->leave($__internal_4ca84f83cb2c7d7fa42b2118c6483d3f36ab1a0394f305beed0f04cfaadddb26_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_019859361da1e34f57f62480b31b72738a4f313cd025fa51e4b732ebc76ab8d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_019859361da1e34f57f62480b31b72738a4f313cd025fa51e4b732ebc76ab8d1->enter($__internal_019859361da1e34f57f62480b31b72738a4f313cd025fa51e4b732ebc76ab8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_885394a99d3948b17e73611d0c6cc95743bf06642109bd692532df374ef31237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885394a99d3948b17e73611d0c6cc95743bf06642109bd692532df374ef31237->enter($__internal_885394a99d3948b17e73611d0c6cc95743bf06642109bd692532df374ef31237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_885394a99d3948b17e73611d0c6cc95743bf06642109bd692532df374ef31237->leave($__internal_885394a99d3948b17e73611d0c6cc95743bf06642109bd692532df374ef31237_prof);

        
        $__internal_019859361da1e34f57f62480b31b72738a4f313cd025fa51e4b732ebc76ab8d1->leave($__internal_019859361da1e34f57f62480b31b72738a4f313cd025fa51e4b732ebc76ab8d1_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_eeb5cc870ce75fccf32b9424d9caf6b308982f81cefea257820b49d72c3a3661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeb5cc870ce75fccf32b9424d9caf6b308982f81cefea257820b49d72c3a3661->enter($__internal_eeb5cc870ce75fccf32b9424d9caf6b308982f81cefea257820b49d72c3a3661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_be8e1ab299a33f1b7c48480171f9b596a9d8e131994e8ddfc1f9429d2c5bffdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8e1ab299a33f1b7c48480171f9b596a9d8e131994e8ddfc1f9429d2c5bffdb->enter($__internal_be8e1ab299a33f1b7c48480171f9b596a9d8e131994e8ddfc1f9429d2c5bffdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_be8e1ab299a33f1b7c48480171f9b596a9d8e131994e8ddfc1f9429d2c5bffdb->leave($__internal_be8e1ab299a33f1b7c48480171f9b596a9d8e131994e8ddfc1f9429d2c5bffdb_prof);

        
        $__internal_eeb5cc870ce75fccf32b9424d9caf6b308982f81cefea257820b49d72c3a3661->leave($__internal_eeb5cc870ce75fccf32b9424d9caf6b308982f81cefea257820b49d72c3a3661_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_79644ebc0ca62ebc9c152659ce9babaefdfe87af70cf546aabf8458ad31ca1c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79644ebc0ca62ebc9c152659ce9babaefdfe87af70cf546aabf8458ad31ca1c9->enter($__internal_79644ebc0ca62ebc9c152659ce9babaefdfe87af70cf546aabf8458ad31ca1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_ac60f9dee877cd7984c080e648b9b815253b76ca947e57da8f4f240730c8cb81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac60f9dee877cd7984c080e648b9b815253b76ca947e57da8f4f240730c8cb81->enter($__internal_ac60f9dee877cd7984c080e648b9b815253b76ca947e57da8f4f240730c8cb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ac60f9dee877cd7984c080e648b9b815253b76ca947e57da8f4f240730c8cb81->leave($__internal_ac60f9dee877cd7984c080e648b9b815253b76ca947e57da8f4f240730c8cb81_prof);

        
        $__internal_79644ebc0ca62ebc9c152659ce9babaefdfe87af70cf546aabf8458ad31ca1c9->leave($__internal_79644ebc0ca62ebc9c152659ce9babaefdfe87af70cf546aabf8458ad31ca1c9_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_b3df440e5e15030746b9f958a0c46fe356e467776230e61a29efb4dad33c9c24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3df440e5e15030746b9f958a0c46fe356e467776230e61a29efb4dad33c9c24->enter($__internal_b3df440e5e15030746b9f958a0c46fe356e467776230e61a29efb4dad33c9c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_812984172bb46d11822f40bdf0a07431eab4a10108eab6f4e36a1a9f95d9caa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812984172bb46d11822f40bdf0a07431eab4a10108eab6f4e36a1a9f95d9caa6->enter($__internal_812984172bb46d11822f40bdf0a07431eab4a10108eab6f4e36a1a9f95d9caa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_812984172bb46d11822f40bdf0a07431eab4a10108eab6f4e36a1a9f95d9caa6->leave($__internal_812984172bb46d11822f40bdf0a07431eab4a10108eab6f4e36a1a9f95d9caa6_prof);

        
        $__internal_b3df440e5e15030746b9f958a0c46fe356e467776230e61a29efb4dad33c9c24->leave($__internal_b3df440e5e15030746b9f958a0c46fe356e467776230e61a29efb4dad33c9c24_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
