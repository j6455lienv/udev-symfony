<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_08a26c31d1e97b975bf314e03bafaf6dd2b40c53e468303c54764e11b3924341 extends Twig_Template
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
        $__internal_73cfa300ce75eae84547a22040a7a987288f7c55c61d09eb414fc4a626c857e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73cfa300ce75eae84547a22040a7a987288f7c55c61d09eb414fc4a626c857e1->enter($__internal_73cfa300ce75eae84547a22040a7a987288f7c55c61d09eb414fc4a626c857e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_01194641966d254d810a67253993ad87fed3a0cc8188250000e1a3c0f028d755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01194641966d254d810a67253993ad87fed3a0cc8188250000e1a3c0f028d755->enter($__internal_01194641966d254d810a67253993ad87fed3a0cc8188250000e1a3c0f028d755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_73cfa300ce75eae84547a22040a7a987288f7c55c61d09eb414fc4a626c857e1->leave($__internal_73cfa300ce75eae84547a22040a7a987288f7c55c61d09eb414fc4a626c857e1_prof);

        
        $__internal_01194641966d254d810a67253993ad87fed3a0cc8188250000e1a3c0f028d755->leave($__internal_01194641966d254d810a67253993ad87fed3a0cc8188250000e1a3c0f028d755_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
