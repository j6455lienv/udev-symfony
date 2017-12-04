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
        $__internal_344e38e9dd7a61a648d4fa0f2cbc563e4c8083467d90d7ac7d5b3cc84afe2c46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_344e38e9dd7a61a648d4fa0f2cbc563e4c8083467d90d7ac7d5b3cc84afe2c46->enter($__internal_344e38e9dd7a61a648d4fa0f2cbc563e4c8083467d90d7ac7d5b3cc84afe2c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_8aefc19909f4c91684c5223e6ad90d331e87a004f0fedc870ce9879afe3a7d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aefc19909f4c91684c5223e6ad90d331e87a004f0fedc870ce9879afe3a7d07->enter($__internal_8aefc19909f4c91684c5223e6ad90d331e87a004f0fedc870ce9879afe3a7d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_344e38e9dd7a61a648d4fa0f2cbc563e4c8083467d90d7ac7d5b3cc84afe2c46->leave($__internal_344e38e9dd7a61a648d4fa0f2cbc563e4c8083467d90d7ac7d5b3cc84afe2c46_prof);

        
        $__internal_8aefc19909f4c91684c5223e6ad90d331e87a004f0fedc870ce9879afe3a7d07->leave($__internal_8aefc19909f4c91684c5223e6ad90d331e87a004f0fedc870ce9879afe3a7d07_prof);

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
