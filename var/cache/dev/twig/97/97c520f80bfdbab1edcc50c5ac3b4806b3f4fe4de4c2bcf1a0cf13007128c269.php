<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_964d048ad7d824e917408b6b3581403a9aa19ce8322beba65cf6e1fbefe8a344 extends Twig_Template
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
        $__internal_ce9bbaad7d9b94b2d7d56f69b0cfee27523891675d8e4ff7d21896889a183dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce9bbaad7d9b94b2d7d56f69b0cfee27523891675d8e4ff7d21896889a183dd8->enter($__internal_ce9bbaad7d9b94b2d7d56f69b0cfee27523891675d8e4ff7d21896889a183dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_6c19521b2ef6b8c8c30cfdae749c7f5f5025b4f4ec87adeb7b57c2e2c4817ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c19521b2ef6b8c8c30cfdae749c7f5f5025b4f4ec87adeb7b57c2e2c4817ffb->enter($__internal_6c19521b2ef6b8c8c30cfdae749c7f5f5025b4f4ec87adeb7b57c2e2c4817ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ce9bbaad7d9b94b2d7d56f69b0cfee27523891675d8e4ff7d21896889a183dd8->leave($__internal_ce9bbaad7d9b94b2d7d56f69b0cfee27523891675d8e4ff7d21896889a183dd8_prof);

        
        $__internal_6c19521b2ef6b8c8c30cfdae749c7f5f5025b4f4ec87adeb7b57c2e2c4817ffb->leave($__internal_6c19521b2ef6b8c8c30cfdae749c7f5f5025b4f4ec87adeb7b57c2e2c4817ffb_prof);

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
