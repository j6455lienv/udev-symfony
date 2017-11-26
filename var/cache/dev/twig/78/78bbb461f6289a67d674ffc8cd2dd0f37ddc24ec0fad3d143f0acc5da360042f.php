<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_ab5e1d0a47b638fa05a6884a541cbd01a7a9d38dac65acb5a71846b6de0045fc extends Twig_Template
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
        $__internal_ae21a14684ffe635007127de3898801bfa972c94cda6cd524ec650517ae4a63e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae21a14684ffe635007127de3898801bfa972c94cda6cd524ec650517ae4a63e->enter($__internal_ae21a14684ffe635007127de3898801bfa972c94cda6cd524ec650517ae4a63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_13b408f900014edfcd43f2c6134f7af7a71be32be202daeffdfe47282d28de00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b408f900014edfcd43f2c6134f7af7a71be32be202daeffdfe47282d28de00->enter($__internal_13b408f900014edfcd43f2c6134f7af7a71be32be202daeffdfe47282d28de00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_ae21a14684ffe635007127de3898801bfa972c94cda6cd524ec650517ae4a63e->leave($__internal_ae21a14684ffe635007127de3898801bfa972c94cda6cd524ec650517ae4a63e_prof);

        
        $__internal_13b408f900014edfcd43f2c6134f7af7a71be32be202daeffdfe47282d28de00->leave($__internal_13b408f900014edfcd43f2c6134f7af7a71be32be202daeffdfe47282d28de00_prof);

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
