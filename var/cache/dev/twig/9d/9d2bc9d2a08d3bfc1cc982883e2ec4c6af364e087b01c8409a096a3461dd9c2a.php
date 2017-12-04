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
        $__internal_c995a7539d335929674aeff945308a2d9210a907321731a40c93fd4f2356af10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c995a7539d335929674aeff945308a2d9210a907321731a40c93fd4f2356af10->enter($__internal_c995a7539d335929674aeff945308a2d9210a907321731a40c93fd4f2356af10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_8413e331dfe586ea8425f1845b2cc8a71b253afe4b190d5eed83ffb65d6fe35f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8413e331dfe586ea8425f1845b2cc8a71b253afe4b190d5eed83ffb65d6fe35f->enter($__internal_8413e331dfe586ea8425f1845b2cc8a71b253afe4b190d5eed83ffb65d6fe35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c995a7539d335929674aeff945308a2d9210a907321731a40c93fd4f2356af10->leave($__internal_c995a7539d335929674aeff945308a2d9210a907321731a40c93fd4f2356af10_prof);

        
        $__internal_8413e331dfe586ea8425f1845b2cc8a71b253afe4b190d5eed83ffb65d6fe35f->leave($__internal_8413e331dfe586ea8425f1845b2cc8a71b253afe4b190d5eed83ffb65d6fe35f_prof);

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
