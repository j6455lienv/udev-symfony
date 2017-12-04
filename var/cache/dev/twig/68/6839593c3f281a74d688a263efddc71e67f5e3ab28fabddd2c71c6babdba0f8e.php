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
        $__internal_acec3de86fa96692990dc8800d198bae458556c849586f143e40ec80b27c3b83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acec3de86fa96692990dc8800d198bae458556c849586f143e40ec80b27c3b83->enter($__internal_acec3de86fa96692990dc8800d198bae458556c849586f143e40ec80b27c3b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_a96d5fe5293790bdb34f5e7de4a7553f523eb5788f17fc8813ef878290f57deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a96d5fe5293790bdb34f5e7de4a7553f523eb5788f17fc8813ef878290f57deb->enter($__internal_a96d5fe5293790bdb34f5e7de4a7553f523eb5788f17fc8813ef878290f57deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_acec3de86fa96692990dc8800d198bae458556c849586f143e40ec80b27c3b83->leave($__internal_acec3de86fa96692990dc8800d198bae458556c849586f143e40ec80b27c3b83_prof);

        
        $__internal_a96d5fe5293790bdb34f5e7de4a7553f523eb5788f17fc8813ef878290f57deb->leave($__internal_a96d5fe5293790bdb34f5e7de4a7553f523eb5788f17fc8813ef878290f57deb_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0051103f1af6a1fc1850d1aff7878eaf85d7ab072da7a18082443890c22530c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0051103f1af6a1fc1850d1aff7878eaf85d7ab072da7a18082443890c22530c2->enter($__internal_0051103f1af6a1fc1850d1aff7878eaf85d7ab072da7a18082443890c22530c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_7eac741f7d8bfef867a20f7b7dd9b70aeca51379581fa039d5f4b84c73ea3d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eac741f7d8bfef867a20f7b7dd9b70aeca51379581fa039d5f4b84c73ea3d22->enter($__internal_7eac741f7d8bfef867a20f7b7dd9b70aeca51379581fa039d5f4b84c73ea3d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_7eac741f7d8bfef867a20f7b7dd9b70aeca51379581fa039d5f4b84c73ea3d22->leave($__internal_7eac741f7d8bfef867a20f7b7dd9b70aeca51379581fa039d5f4b84c73ea3d22_prof);

        
        $__internal_0051103f1af6a1fc1850d1aff7878eaf85d7ab072da7a18082443890c22530c2->leave($__internal_0051103f1af6a1fc1850d1aff7878eaf85d7ab072da7a18082443890c22530c2_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_8bea173c5de3bb6aec0c7aca70e6bf89451492db501799431852c694d9eacc83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bea173c5de3bb6aec0c7aca70e6bf89451492db501799431852c694d9eacc83->enter($__internal_8bea173c5de3bb6aec0c7aca70e6bf89451492db501799431852c694d9eacc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_cbcaee75a3e695ff9325e1c9187a6ef716d61887e53a1d92345995473a55e3c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbcaee75a3e695ff9325e1c9187a6ef716d61887e53a1d92345995473a55e3c8->enter($__internal_cbcaee75a3e695ff9325e1c9187a6ef716d61887e53a1d92345995473a55e3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_cbcaee75a3e695ff9325e1c9187a6ef716d61887e53a1d92345995473a55e3c8->leave($__internal_cbcaee75a3e695ff9325e1c9187a6ef716d61887e53a1d92345995473a55e3c8_prof);

        
        $__internal_8bea173c5de3bb6aec0c7aca70e6bf89451492db501799431852c694d9eacc83->leave($__internal_8bea173c5de3bb6aec0c7aca70e6bf89451492db501799431852c694d9eacc83_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_4a760dd31ac94dbe239843eb6c008ed86f31cd129f4b6d64e7779798824f8294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a760dd31ac94dbe239843eb6c008ed86f31cd129f4b6d64e7779798824f8294->enter($__internal_4a760dd31ac94dbe239843eb6c008ed86f31cd129f4b6d64e7779798824f8294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_6127b6b314f19d6847bacc8536a45e3b06e8054b01b3840d5b175fca0c1eae6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6127b6b314f19d6847bacc8536a45e3b06e8054b01b3840d5b175fca0c1eae6a->enter($__internal_6127b6b314f19d6847bacc8536a45e3b06e8054b01b3840d5b175fca0c1eae6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_6127b6b314f19d6847bacc8536a45e3b06e8054b01b3840d5b175fca0c1eae6a->leave($__internal_6127b6b314f19d6847bacc8536a45e3b06e8054b01b3840d5b175fca0c1eae6a_prof);

        
        $__internal_4a760dd31ac94dbe239843eb6c008ed86f31cd129f4b6d64e7779798824f8294->leave($__internal_4a760dd31ac94dbe239843eb6c008ed86f31cd129f4b6d64e7779798824f8294_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_4a663355f096e93b21a4855f69e8e929166775a06edb9a6c7215fe3ce6d13995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a663355f096e93b21a4855f69e8e929166775a06edb9a6c7215fe3ce6d13995->enter($__internal_4a663355f096e93b21a4855f69e8e929166775a06edb9a6c7215fe3ce6d13995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_8c69109041f4ebb5395dd8bc0446978ac328a8ec3c6162e707fece5c31ee2a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c69109041f4ebb5395dd8bc0446978ac328a8ec3c6162e707fece5c31ee2a46->enter($__internal_8c69109041f4ebb5395dd8bc0446978ac328a8ec3c6162e707fece5c31ee2a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_8c69109041f4ebb5395dd8bc0446978ac328a8ec3c6162e707fece5c31ee2a46->leave($__internal_8c69109041f4ebb5395dd8bc0446978ac328a8ec3c6162e707fece5c31ee2a46_prof);

        
        $__internal_4a663355f096e93b21a4855f69e8e929166775a06edb9a6c7215fe3ce6d13995->leave($__internal_4a663355f096e93b21a4855f69e8e929166775a06edb9a6c7215fe3ce6d13995_prof);

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
