<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_56a2fe44ea992b9d91cfaedf2c56df26533922f0945133aafab53c0b8d42acfb extends Twig_Template
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
        $__internal_5f97b353ff80b5801df4edf3c4ecfad2fd03926d5bee1558cf808d3c962074e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f97b353ff80b5801df4edf3c4ecfad2fd03926d5bee1558cf808d3c962074e0->enter($__internal_5f97b353ff80b5801df4edf3c4ecfad2fd03926d5bee1558cf808d3c962074e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_a9a7bfcdf57913129a63d725af4c51c565d842beb71fb8c90526cd8b44558526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9a7bfcdf57913129a63d725af4c51c565d842beb71fb8c90526cd8b44558526->enter($__internal_a9a7bfcdf57913129a63d725af4c51c565d842beb71fb8c90526cd8b44558526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_5f97b353ff80b5801df4edf3c4ecfad2fd03926d5bee1558cf808d3c962074e0->leave($__internal_5f97b353ff80b5801df4edf3c4ecfad2fd03926d5bee1558cf808d3c962074e0_prof);

        
        $__internal_a9a7bfcdf57913129a63d725af4c51c565d842beb71fb8c90526cd8b44558526->leave($__internal_a9a7bfcdf57913129a63d725af4c51c565d842beb71fb8c90526cd8b44558526_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
