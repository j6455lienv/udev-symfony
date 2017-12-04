<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e7df6b6b69edaeac0922dce3bec04194ea421a9f1bce6cd284828c9f5a76057e extends Twig_Template
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
        $__internal_b3045c25ab3d0e53fda107d9f28de8566bcf105a767a01cae4377a692e2a8b92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3045c25ab3d0e53fda107d9f28de8566bcf105a767a01cae4377a692e2a8b92->enter($__internal_b3045c25ab3d0e53fda107d9f28de8566bcf105a767a01cae4377a692e2a8b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_ffd750a11d3ac82f20f2142b3f10b001400f12d6bf51bd2f897d8cc6fea8480a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd750a11d3ac82f20f2142b3f10b001400f12d6bf51bd2f897d8cc6fea8480a->enter($__internal_ffd750a11d3ac82f20f2142b3f10b001400f12d6bf51bd2f897d8cc6fea8480a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b3045c25ab3d0e53fda107d9f28de8566bcf105a767a01cae4377a692e2a8b92->leave($__internal_b3045c25ab3d0e53fda107d9f28de8566bcf105a767a01cae4377a692e2a8b92_prof);

        
        $__internal_ffd750a11d3ac82f20f2142b3f10b001400f12d6bf51bd2f897d8cc6fea8480a->leave($__internal_ffd750a11d3ac82f20f2142b3f10b001400f12d6bf51bd2f897d8cc6fea8480a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
