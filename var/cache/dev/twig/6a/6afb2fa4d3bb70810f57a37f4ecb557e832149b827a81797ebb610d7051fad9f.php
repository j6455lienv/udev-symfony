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
        $__internal_5b9de24b4bb51f57158b6639d2d3a7f338098256d3e2d092de81d7387d8f49a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b9de24b4bb51f57158b6639d2d3a7f338098256d3e2d092de81d7387d8f49a5->enter($__internal_5b9de24b4bb51f57158b6639d2d3a7f338098256d3e2d092de81d7387d8f49a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_e660a054fae28eae13f2efa67e407162d0f932a61dc2cfb173be67c4072065f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e660a054fae28eae13f2efa67e407162d0f932a61dc2cfb173be67c4072065f6->enter($__internal_e660a054fae28eae13f2efa67e407162d0f932a61dc2cfb173be67c4072065f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5b9de24b4bb51f57158b6639d2d3a7f338098256d3e2d092de81d7387d8f49a5->leave($__internal_5b9de24b4bb51f57158b6639d2d3a7f338098256d3e2d092de81d7387d8f49a5_prof);

        
        $__internal_e660a054fae28eae13f2efa67e407162d0f932a61dc2cfb173be67c4072065f6->leave($__internal_e660a054fae28eae13f2efa67e407162d0f932a61dc2cfb173be67c4072065f6_prof);

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
