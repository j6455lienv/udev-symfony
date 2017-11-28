<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_06c15f674de0c968f3854ba46aedc2f6175803e4179714530abd02da5701f148 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa83f351c50be41fe14e8fc95fb7d97f65cb645d61759dcece9be3ede888dd4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa83f351c50be41fe14e8fc95fb7d97f65cb645d61759dcece9be3ede888dd4f->enter($__internal_fa83f351c50be41fe14e8fc95fb7d97f65cb645d61759dcece9be3ede888dd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_40379947191e2d964a1548bbd5e4debe2cf2cd22fde6f98412a225ecba8044f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40379947191e2d964a1548bbd5e4debe2cf2cd22fde6f98412a225ecba8044f2->enter($__internal_40379947191e2d964a1548bbd5e4debe2cf2cd22fde6f98412a225ecba8044f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_fa83f351c50be41fe14e8fc95fb7d97f65cb645d61759dcece9be3ede888dd4f->leave($__internal_fa83f351c50be41fe14e8fc95fb7d97f65cb645d61759dcece9be3ede888dd4f_prof);

        
        $__internal_40379947191e2d964a1548bbd5e4debe2cf2cd22fde6f98412a225ecba8044f2->leave($__internal_40379947191e2d964a1548bbd5e4debe2cf2cd22fde6f98412a225ecba8044f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
