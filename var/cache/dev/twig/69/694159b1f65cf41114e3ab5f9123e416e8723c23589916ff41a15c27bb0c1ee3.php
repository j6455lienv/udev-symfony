<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_768c812be1c0efea772d704123068323230fa8b5c330490b44c00949ac9a1bbf extends Twig_Template
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
        $__internal_0cb2cd6d05c14f9bd871a8ea11cf31209d3a23eb007fe3543bfa6e5e708347b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cb2cd6d05c14f9bd871a8ea11cf31209d3a23eb007fe3543bfa6e5e708347b7->enter($__internal_0cb2cd6d05c14f9bd871a8ea11cf31209d3a23eb007fe3543bfa6e5e708347b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_14e42ee1e9506c670f37153688b74a8cca87e031ce118ff6f1c57cdd9290477d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e42ee1e9506c670f37153688b74a8cca87e031ce118ff6f1c57cdd9290477d->enter($__internal_14e42ee1e9506c670f37153688b74a8cca87e031ce118ff6f1c57cdd9290477d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0cb2cd6d05c14f9bd871a8ea11cf31209d3a23eb007fe3543bfa6e5e708347b7->leave($__internal_0cb2cd6d05c14f9bd871a8ea11cf31209d3a23eb007fe3543bfa6e5e708347b7_prof);

        
        $__internal_14e42ee1e9506c670f37153688b74a8cca87e031ce118ff6f1c57cdd9290477d->leave($__internal_14e42ee1e9506c670f37153688b74a8cca87e031ce118ff6f1c57cdd9290477d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
