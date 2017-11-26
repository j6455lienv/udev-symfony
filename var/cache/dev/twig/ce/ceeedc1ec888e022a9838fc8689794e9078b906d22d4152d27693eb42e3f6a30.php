<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d594441b1dcb60682f1726b7c2e883c4096dab329026bdda73fa109f8de9463f extends Twig_Template
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
        $__internal_2725e6c8c93511e9de3ac63f1093769f8a062f2a7049a391bf480656308df92f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2725e6c8c93511e9de3ac63f1093769f8a062f2a7049a391bf480656308df92f->enter($__internal_2725e6c8c93511e9de3ac63f1093769f8a062f2a7049a391bf480656308df92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c06b6eeae9a25c587f67785352d9df3eeef7623a3cf8151f5f7fadb455725eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06b6eeae9a25c587f67785352d9df3eeef7623a3cf8151f5f7fadb455725eed->enter($__internal_c06b6eeae9a25c587f67785352d9df3eeef7623a3cf8151f5f7fadb455725eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2725e6c8c93511e9de3ac63f1093769f8a062f2a7049a391bf480656308df92f->leave($__internal_2725e6c8c93511e9de3ac63f1093769f8a062f2a7049a391bf480656308df92f_prof);

        
        $__internal_c06b6eeae9a25c587f67785352d9df3eeef7623a3cf8151f5f7fadb455725eed->leave($__internal_c06b6eeae9a25c587f67785352d9df3eeef7623a3cf8151f5f7fadb455725eed_prof);

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
