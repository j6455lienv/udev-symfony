<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a95b692defe8fe2e428dc4d6f362207f3e9b0c425e16f79fa17f27f9baf7ba4b extends Twig_Template
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
        $__internal_fd6ac79ce110b96778d180ad8446f58efbff48b5de2321837de27b9ffba44b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6ac79ce110b96778d180ad8446f58efbff48b5de2321837de27b9ffba44b7e->enter($__internal_fd6ac79ce110b96778d180ad8446f58efbff48b5de2321837de27b9ffba44b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_1baf1e4dfff2c6f2e094249481a69c3e731c0db208d5c8d5dfe675ccc14c35d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1baf1e4dfff2c6f2e094249481a69c3e731c0db208d5c8d5dfe675ccc14c35d2->enter($__internal_1baf1e4dfff2c6f2e094249481a69c3e731c0db208d5c8d5dfe675ccc14c35d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_fd6ac79ce110b96778d180ad8446f58efbff48b5de2321837de27b9ffba44b7e->leave($__internal_fd6ac79ce110b96778d180ad8446f58efbff48b5de2321837de27b9ffba44b7e_prof);

        
        $__internal_1baf1e4dfff2c6f2e094249481a69c3e731c0db208d5c8d5dfe675ccc14c35d2->leave($__internal_1baf1e4dfff2c6f2e094249481a69c3e731c0db208d5c8d5dfe675ccc14c35d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
