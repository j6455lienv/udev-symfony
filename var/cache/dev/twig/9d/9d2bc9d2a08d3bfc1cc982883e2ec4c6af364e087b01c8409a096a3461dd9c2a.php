<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a0c8a1fe6021d0ac1caf8fb208b64dd35311960f22540a96489f866658114f50 extends Twig_Template
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
        $__internal_41345aa2cca70697931ec069498b60e0f9d107b3eb2fce14be9e0f7f30c359f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41345aa2cca70697931ec069498b60e0f9d107b3eb2fce14be9e0f7f30c359f9->enter($__internal_41345aa2cca70697931ec069498b60e0f9d107b3eb2fce14be9e0f7f30c359f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_7c39c13e27d3dea19a0017a4efa5c0e4c207bc20240d3a014f0ab19d473ca11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c39c13e27d3dea19a0017a4efa5c0e4c207bc20240d3a014f0ab19d473ca11a->enter($__internal_7c39c13e27d3dea19a0017a4efa5c0e4c207bc20240d3a014f0ab19d473ca11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_41345aa2cca70697931ec069498b60e0f9d107b3eb2fce14be9e0f7f30c359f9->leave($__internal_41345aa2cca70697931ec069498b60e0f9d107b3eb2fce14be9e0f7f30c359f9_prof);

        
        $__internal_7c39c13e27d3dea19a0017a4efa5c0e4c207bc20240d3a014f0ab19d473ca11a->leave($__internal_7c39c13e27d3dea19a0017a4efa5c0e4c207bc20240d3a014f0ab19d473ca11a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
