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
        $__internal_e988f2448f72481fb83096a95fd85d904c6a142477d79fd57c65162fc7541928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e988f2448f72481fb83096a95fd85d904c6a142477d79fd57c65162fc7541928->enter($__internal_e988f2448f72481fb83096a95fd85d904c6a142477d79fd57c65162fc7541928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_15cf01b218fdde8ec17d01b7575f7b44ff1aa1023bddd92a691a20e0cbecaf9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15cf01b218fdde8ec17d01b7575f7b44ff1aa1023bddd92a691a20e0cbecaf9e->enter($__internal_15cf01b218fdde8ec17d01b7575f7b44ff1aa1023bddd92a691a20e0cbecaf9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_e988f2448f72481fb83096a95fd85d904c6a142477d79fd57c65162fc7541928->leave($__internal_e988f2448f72481fb83096a95fd85d904c6a142477d79fd57c65162fc7541928_prof);

        
        $__internal_15cf01b218fdde8ec17d01b7575f7b44ff1aa1023bddd92a691a20e0cbecaf9e->leave($__internal_15cf01b218fdde8ec17d01b7575f7b44ff1aa1023bddd92a691a20e0cbecaf9e_prof);

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
