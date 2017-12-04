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
        $__internal_db2e31d04561d19c6ad1e89095f1d0902eeccbfe5ffe5a5de77788700a0f495b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db2e31d04561d19c6ad1e89095f1d0902eeccbfe5ffe5a5de77788700a0f495b->enter($__internal_db2e31d04561d19c6ad1e89095f1d0902eeccbfe5ffe5a5de77788700a0f495b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_bb1722232c7b468713bd6a96fb4680c38caa8231bb47ae5932bc7c8b3c711c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1722232c7b468713bd6a96fb4680c38caa8231bb47ae5932bc7c8b3c711c88->enter($__internal_bb1722232c7b468713bd6a96fb4680c38caa8231bb47ae5932bc7c8b3c711c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_db2e31d04561d19c6ad1e89095f1d0902eeccbfe5ffe5a5de77788700a0f495b->leave($__internal_db2e31d04561d19c6ad1e89095f1d0902eeccbfe5ffe5a5de77788700a0f495b_prof);

        
        $__internal_bb1722232c7b468713bd6a96fb4680c38caa8231bb47ae5932bc7c8b3c711c88->leave($__internal_bb1722232c7b468713bd6a96fb4680c38caa8231bb47ae5932bc7c8b3c711c88_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_61f1716baf3508e1e551d7fd2fc215a84182247859933c7e3737e108f27a9b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61f1716baf3508e1e551d7fd2fc215a84182247859933c7e3737e108f27a9b35->enter($__internal_61f1716baf3508e1e551d7fd2fc215a84182247859933c7e3737e108f27a9b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_cc6d2e82c6ceafd89b48a81d9dedbaacf10625eabda4592380140f2750288fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6d2e82c6ceafd89b48a81d9dedbaacf10625eabda4592380140f2750288fea->enter($__internal_cc6d2e82c6ceafd89b48a81d9dedbaacf10625eabda4592380140f2750288fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_cc6d2e82c6ceafd89b48a81d9dedbaacf10625eabda4592380140f2750288fea->leave($__internal_cc6d2e82c6ceafd89b48a81d9dedbaacf10625eabda4592380140f2750288fea_prof);

        
        $__internal_61f1716baf3508e1e551d7fd2fc215a84182247859933c7e3737e108f27a9b35->leave($__internal_61f1716baf3508e1e551d7fd2fc215a84182247859933c7e3737e108f27a9b35_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_107c823e4a3db95a06e0ec62b6d13a3ff7ff8e5c125d924dc02ad3d80517d7c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107c823e4a3db95a06e0ec62b6d13a3ff7ff8e5c125d924dc02ad3d80517d7c2->enter($__internal_107c823e4a3db95a06e0ec62b6d13a3ff7ff8e5c125d924dc02ad3d80517d7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_8f760576f8c62e939bfca83580322d24e67a165e18ccb67bf5794379fdfb8382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f760576f8c62e939bfca83580322d24e67a165e18ccb67bf5794379fdfb8382->enter($__internal_8f760576f8c62e939bfca83580322d24e67a165e18ccb67bf5794379fdfb8382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_8f760576f8c62e939bfca83580322d24e67a165e18ccb67bf5794379fdfb8382->leave($__internal_8f760576f8c62e939bfca83580322d24e67a165e18ccb67bf5794379fdfb8382_prof);

        
        $__internal_107c823e4a3db95a06e0ec62b6d13a3ff7ff8e5c125d924dc02ad3d80517d7c2->leave($__internal_107c823e4a3db95a06e0ec62b6d13a3ff7ff8e5c125d924dc02ad3d80517d7c2_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_ea1f20d4aeb0d19826141660b72d76cc1b44a5d953ac2790debbb7e83a8d7267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea1f20d4aeb0d19826141660b72d76cc1b44a5d953ac2790debbb7e83a8d7267->enter($__internal_ea1f20d4aeb0d19826141660b72d76cc1b44a5d953ac2790debbb7e83a8d7267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_93a221630011cfade3bd049be2d52226de5ff0eadecf8f7c909f2ac6530ace2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a221630011cfade3bd049be2d52226de5ff0eadecf8f7c909f2ac6530ace2c->enter($__internal_93a221630011cfade3bd049be2d52226de5ff0eadecf8f7c909f2ac6530ace2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_93a221630011cfade3bd049be2d52226de5ff0eadecf8f7c909f2ac6530ace2c->leave($__internal_93a221630011cfade3bd049be2d52226de5ff0eadecf8f7c909f2ac6530ace2c_prof);

        
        $__internal_ea1f20d4aeb0d19826141660b72d76cc1b44a5d953ac2790debbb7e83a8d7267->leave($__internal_ea1f20d4aeb0d19826141660b72d76cc1b44a5d953ac2790debbb7e83a8d7267_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_2525a5b60759e5c6cd871f3d7d669ae3ce99070798cb0f6ed12dbbe5fa14d7bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2525a5b60759e5c6cd871f3d7d669ae3ce99070798cb0f6ed12dbbe5fa14d7bb->enter($__internal_2525a5b60759e5c6cd871f3d7d669ae3ce99070798cb0f6ed12dbbe5fa14d7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_8901d378fd31fb2a6d1d98c54390284b9f9eee340c705618c4ec321c25530493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8901d378fd31fb2a6d1d98c54390284b9f9eee340c705618c4ec321c25530493->enter($__internal_8901d378fd31fb2a6d1d98c54390284b9f9eee340c705618c4ec321c25530493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_8901d378fd31fb2a6d1d98c54390284b9f9eee340c705618c4ec321c25530493->leave($__internal_8901d378fd31fb2a6d1d98c54390284b9f9eee340c705618c4ec321c25530493_prof);

        
        $__internal_2525a5b60759e5c6cd871f3d7d669ae3ce99070798cb0f6ed12dbbe5fa14d7bb->leave($__internal_2525a5b60759e5c6cd871f3d7d669ae3ce99070798cb0f6ed12dbbe5fa14d7bb_prof);

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
