<?php

/* form_table_layout.html.twig */
class __TwigTemplate_eda4aa66faf47cf7b622462ddec65aede4f4ae2711eb76fd2a050ee9d72d5dc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f0b978d14b4145f4a71719e93429cd28a72b94d55f50638d4d2840972fa79e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f0b978d14b4145f4a71719e93429cd28a72b94d55f50638d4d2840972fa79e3->enter($__internal_1f0b978d14b4145f4a71719e93429cd28a72b94d55f50638d4d2840972fa79e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_4198cfb9e54c7fe4b8eae40586ca1888904a9a0730fd6ff24fa23daccb1b5315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4198cfb9e54c7fe4b8eae40586ca1888904a9a0730fd6ff24fa23daccb1b5315->enter($__internal_4198cfb9e54c7fe4b8eae40586ca1888904a9a0730fd6ff24fa23daccb1b5315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_1f0b978d14b4145f4a71719e93429cd28a72b94d55f50638d4d2840972fa79e3->leave($__internal_1f0b978d14b4145f4a71719e93429cd28a72b94d55f50638d4d2840972fa79e3_prof);

        
        $__internal_4198cfb9e54c7fe4b8eae40586ca1888904a9a0730fd6ff24fa23daccb1b5315->leave($__internal_4198cfb9e54c7fe4b8eae40586ca1888904a9a0730fd6ff24fa23daccb1b5315_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1d3b97af40b8a10f7ec71327259eda5821f4318bbcfa6cc250bc6eca816f37ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d3b97af40b8a10f7ec71327259eda5821f4318bbcfa6cc250bc6eca816f37ba->enter($__internal_1d3b97af40b8a10f7ec71327259eda5821f4318bbcfa6cc250bc6eca816f37ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6d48856563ab9cf2638c13dc4316afcaadc751dcef80f55d240df3c73ee86a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d48856563ab9cf2638c13dc4316afcaadc751dcef80f55d240df3c73ee86a0d->enter($__internal_6d48856563ab9cf2638c13dc4316afcaadc751dcef80f55d240df3c73ee86a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_6d48856563ab9cf2638c13dc4316afcaadc751dcef80f55d240df3c73ee86a0d->leave($__internal_6d48856563ab9cf2638c13dc4316afcaadc751dcef80f55d240df3c73ee86a0d_prof);

        
        $__internal_1d3b97af40b8a10f7ec71327259eda5821f4318bbcfa6cc250bc6eca816f37ba->leave($__internal_1d3b97af40b8a10f7ec71327259eda5821f4318bbcfa6cc250bc6eca816f37ba_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_311d1fa97767a04cc8e4ad48ff565d72b5db3abdc926fa090bc4839e3c63e1b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_311d1fa97767a04cc8e4ad48ff565d72b5db3abdc926fa090bc4839e3c63e1b4->enter($__internal_311d1fa97767a04cc8e4ad48ff565d72b5db3abdc926fa090bc4839e3c63e1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_230314d76b1987f6efdc5f548995321cabdef86921e642e1114da22e3dd4d553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230314d76b1987f6efdc5f548995321cabdef86921e642e1114da22e3dd4d553->enter($__internal_230314d76b1987f6efdc5f548995321cabdef86921e642e1114da22e3dd4d553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_230314d76b1987f6efdc5f548995321cabdef86921e642e1114da22e3dd4d553->leave($__internal_230314d76b1987f6efdc5f548995321cabdef86921e642e1114da22e3dd4d553_prof);

        
        $__internal_311d1fa97767a04cc8e4ad48ff565d72b5db3abdc926fa090bc4839e3c63e1b4->leave($__internal_311d1fa97767a04cc8e4ad48ff565d72b5db3abdc926fa090bc4839e3c63e1b4_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_5a1dd72a5e9be8cc330434f2555ffa85f9ca40b6d3ae688457f6def4b8dba7ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a1dd72a5e9be8cc330434f2555ffa85f9ca40b6d3ae688457f6def4b8dba7ab->enter($__internal_5a1dd72a5e9be8cc330434f2555ffa85f9ca40b6d3ae688457f6def4b8dba7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_a9a012283f68ee17b05104a8890be0271dbad67252eae08c1c8db6da05b63af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9a012283f68ee17b05104a8890be0271dbad67252eae08c1c8db6da05b63af0->enter($__internal_a9a012283f68ee17b05104a8890be0271dbad67252eae08c1c8db6da05b63af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_a9a012283f68ee17b05104a8890be0271dbad67252eae08c1c8db6da05b63af0->leave($__internal_a9a012283f68ee17b05104a8890be0271dbad67252eae08c1c8db6da05b63af0_prof);

        
        $__internal_5a1dd72a5e9be8cc330434f2555ffa85f9ca40b6d3ae688457f6def4b8dba7ab->leave($__internal_5a1dd72a5e9be8cc330434f2555ffa85f9ca40b6d3ae688457f6def4b8dba7ab_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_69d7ba2abe68716b9e4ca8334eed8713f9821d95b876c260c33a4710aebcf051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d7ba2abe68716b9e4ca8334eed8713f9821d95b876c260c33a4710aebcf051->enter($__internal_69d7ba2abe68716b9e4ca8334eed8713f9821d95b876c260c33a4710aebcf051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_b31744a6cf30df8b12477bfa34e59beceef3a568a7b6384e57d72a0292a2943a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b31744a6cf30df8b12477bfa34e59beceef3a568a7b6384e57d72a0292a2943a->enter($__internal_b31744a6cf30df8b12477bfa34e59beceef3a568a7b6384e57d72a0292a2943a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_b31744a6cf30df8b12477bfa34e59beceef3a568a7b6384e57d72a0292a2943a->leave($__internal_b31744a6cf30df8b12477bfa34e59beceef3a568a7b6384e57d72a0292a2943a_prof);

        
        $__internal_69d7ba2abe68716b9e4ca8334eed8713f9821d95b876c260c33a4710aebcf051->leave($__internal_69d7ba2abe68716b9e4ca8334eed8713f9821d95b876c260c33a4710aebcf051_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
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

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
