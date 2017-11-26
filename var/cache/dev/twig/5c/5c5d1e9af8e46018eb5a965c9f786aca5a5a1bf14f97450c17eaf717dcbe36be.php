<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3dac9b7a7409bed7d30a03d5c40b31143f041c0a5ac8e16cdf1d670dacd9efff extends Twig_Template
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
        $__internal_f8f8aa2a435b52a80e5d51d71c51f993297bc4297efe03df77d1163b6e4d83bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f8aa2a435b52a80e5d51d71c51f993297bc4297efe03df77d1163b6e4d83bc->enter($__internal_f8f8aa2a435b52a80e5d51d71c51f993297bc4297efe03df77d1163b6e4d83bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_6709dee7931d0a66555a76e550b5597d17bfae44d3a12112dcc43967bfe1d976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6709dee7931d0a66555a76e550b5597d17bfae44d3a12112dcc43967bfe1d976->enter($__internal_6709dee7931d0a66555a76e550b5597d17bfae44d3a12112dcc43967bfe1d976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f8f8aa2a435b52a80e5d51d71c51f993297bc4297efe03df77d1163b6e4d83bc->leave($__internal_f8f8aa2a435b52a80e5d51d71c51f993297bc4297efe03df77d1163b6e4d83bc_prof);

        
        $__internal_6709dee7931d0a66555a76e550b5597d17bfae44d3a12112dcc43967bfe1d976->leave($__internal_6709dee7931d0a66555a76e550b5597d17bfae44d3a12112dcc43967bfe1d976_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
