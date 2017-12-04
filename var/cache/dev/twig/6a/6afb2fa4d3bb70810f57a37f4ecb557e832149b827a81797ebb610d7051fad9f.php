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
        $__internal_1203904a1e9a950b4e892e0ec3b01dce5739176e520b6f1bc527d25f01269640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1203904a1e9a950b4e892e0ec3b01dce5739176e520b6f1bc527d25f01269640->enter($__internal_1203904a1e9a950b4e892e0ec3b01dce5739176e520b6f1bc527d25f01269640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a3255702491dc4545ac947acce0bb40e34846982726fbc8cfd8e235be337ed0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3255702491dc4545ac947acce0bb40e34846982726fbc8cfd8e235be337ed0c->enter($__internal_a3255702491dc4545ac947acce0bb40e34846982726fbc8cfd8e235be337ed0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1203904a1e9a950b4e892e0ec3b01dce5739176e520b6f1bc527d25f01269640->leave($__internal_1203904a1e9a950b4e892e0ec3b01dce5739176e520b6f1bc527d25f01269640_prof);

        
        $__internal_a3255702491dc4545ac947acce0bb40e34846982726fbc8cfd8e235be337ed0c->leave($__internal_a3255702491dc4545ac947acce0bb40e34846982726fbc8cfd8e235be337ed0c_prof);

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
