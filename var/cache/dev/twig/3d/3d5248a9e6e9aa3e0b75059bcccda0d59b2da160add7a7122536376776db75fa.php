<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e0b922686fed76627cf7199173315e68353a48e44bcefde3f622d371009f0541 extends Twig_Template
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
        $__internal_645639942c4779a25bdf85807d81152789ffc28aa8b6740d3e1c60082ea6c3f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_645639942c4779a25bdf85807d81152789ffc28aa8b6740d3e1c60082ea6c3f0->enter($__internal_645639942c4779a25bdf85807d81152789ffc28aa8b6740d3e1c60082ea6c3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_88cd2701966b58c71fe605107dd1c50d8bdb3c2a8c1226d7b67ad5accb5a2d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88cd2701966b58c71fe605107dd1c50d8bdb3c2a8c1226d7b67ad5accb5a2d21->enter($__internal_88cd2701966b58c71fe605107dd1c50d8bdb3c2a8c1226d7b67ad5accb5a2d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_645639942c4779a25bdf85807d81152789ffc28aa8b6740d3e1c60082ea6c3f0->leave($__internal_645639942c4779a25bdf85807d81152789ffc28aa8b6740d3e1c60082ea6c3f0_prof);

        
        $__internal_88cd2701966b58c71fe605107dd1c50d8bdb3c2a8c1226d7b67ad5accb5a2d21->leave($__internal_88cd2701966b58c71fe605107dd1c50d8bdb3c2a8c1226d7b67ad5accb5a2d21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
