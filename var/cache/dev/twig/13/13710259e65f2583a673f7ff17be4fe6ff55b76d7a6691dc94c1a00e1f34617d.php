<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_6a73981c1dfc36ebd2879f0f0f120d03219f13e7305867de63e6c1eeb358794e extends Twig_Template
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
        $__internal_052b89dfd8203dae055a3bbe494a0660968594fb24c313fe0d952c69eb4b7690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_052b89dfd8203dae055a3bbe494a0660968594fb24c313fe0d952c69eb4b7690->enter($__internal_052b89dfd8203dae055a3bbe494a0660968594fb24c313fe0d952c69eb4b7690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_d7c5e1bf413aa46e773237e8a9fbdf7071c6d2ecbe61cca97680fb886dc33d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c5e1bf413aa46e773237e8a9fbdf7071c6d2ecbe61cca97680fb886dc33d02->enter($__internal_d7c5e1bf413aa46e773237e8a9fbdf7071c6d2ecbe61cca97680fb886dc33d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_052b89dfd8203dae055a3bbe494a0660968594fb24c313fe0d952c69eb4b7690->leave($__internal_052b89dfd8203dae055a3bbe494a0660968594fb24c313fe0d952c69eb4b7690_prof);

        
        $__internal_d7c5e1bf413aa46e773237e8a9fbdf7071c6d2ecbe61cca97680fb886dc33d02->leave($__internal_d7c5e1bf413aa46e773237e8a9fbdf7071c6d2ecbe61cca97680fb886dc33d02_prof);

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
