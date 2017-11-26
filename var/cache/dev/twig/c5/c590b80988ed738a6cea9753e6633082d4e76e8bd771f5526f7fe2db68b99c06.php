<?php

/* form_table_layout.html.twig */
class __TwigTemplate_f7ce00574c5bd29e62984aa134fd8315477d925b1493a8ad7b45ef3c82115038 extends Twig_Template
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
        $__internal_1b545f65bc46ca0a80b6a05b5c34f46f461af299b49c2a820208f914af64133e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b545f65bc46ca0a80b6a05b5c34f46f461af299b49c2a820208f914af64133e->enter($__internal_1b545f65bc46ca0a80b6a05b5c34f46f461af299b49c2a820208f914af64133e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_2955c4998e17349f1d7a49f8ed6307c58483556a65548906e712c44ea77b3781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2955c4998e17349f1d7a49f8ed6307c58483556a65548906e712c44ea77b3781->enter($__internal_2955c4998e17349f1d7a49f8ed6307c58483556a65548906e712c44ea77b3781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_1b545f65bc46ca0a80b6a05b5c34f46f461af299b49c2a820208f914af64133e->leave($__internal_1b545f65bc46ca0a80b6a05b5c34f46f461af299b49c2a820208f914af64133e_prof);

        
        $__internal_2955c4998e17349f1d7a49f8ed6307c58483556a65548906e712c44ea77b3781->leave($__internal_2955c4998e17349f1d7a49f8ed6307c58483556a65548906e712c44ea77b3781_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a446fd281fd5bd2050a4b84b63d93606426c1d20cc11df3994c549ed655777b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a446fd281fd5bd2050a4b84b63d93606426c1d20cc11df3994c549ed655777b8->enter($__internal_a446fd281fd5bd2050a4b84b63d93606426c1d20cc11df3994c549ed655777b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c4d950d69c41421e0d3e4aa9a848d4d2970a4dade3c0e8717a32e7e82c985ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d950d69c41421e0d3e4aa9a848d4d2970a4dade3c0e8717a32e7e82c985ae4->enter($__internal_c4d950d69c41421e0d3e4aa9a848d4d2970a4dade3c0e8717a32e7e82c985ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_c4d950d69c41421e0d3e4aa9a848d4d2970a4dade3c0e8717a32e7e82c985ae4->leave($__internal_c4d950d69c41421e0d3e4aa9a848d4d2970a4dade3c0e8717a32e7e82c985ae4_prof);

        
        $__internal_a446fd281fd5bd2050a4b84b63d93606426c1d20cc11df3994c549ed655777b8->leave($__internal_a446fd281fd5bd2050a4b84b63d93606426c1d20cc11df3994c549ed655777b8_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_44dad1df54c3a933ecabf96b88a01df65ba9955968b2522498e3dc962a75e0e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44dad1df54c3a933ecabf96b88a01df65ba9955968b2522498e3dc962a75e0e7->enter($__internal_44dad1df54c3a933ecabf96b88a01df65ba9955968b2522498e3dc962a75e0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_460b0738bd5c04de4ea2acdc1da3d285d76aeb9c899cecfcd184062e77ac2537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460b0738bd5c04de4ea2acdc1da3d285d76aeb9c899cecfcd184062e77ac2537->enter($__internal_460b0738bd5c04de4ea2acdc1da3d285d76aeb9c899cecfcd184062e77ac2537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_460b0738bd5c04de4ea2acdc1da3d285d76aeb9c899cecfcd184062e77ac2537->leave($__internal_460b0738bd5c04de4ea2acdc1da3d285d76aeb9c899cecfcd184062e77ac2537_prof);

        
        $__internal_44dad1df54c3a933ecabf96b88a01df65ba9955968b2522498e3dc962a75e0e7->leave($__internal_44dad1df54c3a933ecabf96b88a01df65ba9955968b2522498e3dc962a75e0e7_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_218557e6da65e0530754ab7366485d51232a79e3361111465baca9da757457ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_218557e6da65e0530754ab7366485d51232a79e3361111465baca9da757457ce->enter($__internal_218557e6da65e0530754ab7366485d51232a79e3361111465baca9da757457ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_fb654a71409ca6fa6855a21e2431a1bc9d40201bc3a9fbe36a3e1167d30a5791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb654a71409ca6fa6855a21e2431a1bc9d40201bc3a9fbe36a3e1167d30a5791->enter($__internal_fb654a71409ca6fa6855a21e2431a1bc9d40201bc3a9fbe36a3e1167d30a5791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_fb654a71409ca6fa6855a21e2431a1bc9d40201bc3a9fbe36a3e1167d30a5791->leave($__internal_fb654a71409ca6fa6855a21e2431a1bc9d40201bc3a9fbe36a3e1167d30a5791_prof);

        
        $__internal_218557e6da65e0530754ab7366485d51232a79e3361111465baca9da757457ce->leave($__internal_218557e6da65e0530754ab7366485d51232a79e3361111465baca9da757457ce_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_01c2257d47aea41630ba220149d37b8d774b91b6a21a7cec3e736cf12cdb4edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01c2257d47aea41630ba220149d37b8d774b91b6a21a7cec3e736cf12cdb4edf->enter($__internal_01c2257d47aea41630ba220149d37b8d774b91b6a21a7cec3e736cf12cdb4edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_84fe142047901537582346ee80bc0f0f3208f434c11346d98c6f578157ba2717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84fe142047901537582346ee80bc0f0f3208f434c11346d98c6f578157ba2717->enter($__internal_84fe142047901537582346ee80bc0f0f3208f434c11346d98c6f578157ba2717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_84fe142047901537582346ee80bc0f0f3208f434c11346d98c6f578157ba2717->leave($__internal_84fe142047901537582346ee80bc0f0f3208f434c11346d98c6f578157ba2717_prof);

        
        $__internal_01c2257d47aea41630ba220149d37b8d774b91b6a21a7cec3e736cf12cdb4edf->leave($__internal_01c2257d47aea41630ba220149d37b8d774b91b6a21a7cec3e736cf12cdb4edf_prof);

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
