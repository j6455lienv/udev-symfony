<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_6d728330bd68cd7ddfa9cf316c64b7ef0cc49a51c08ff99c40c874500c3200b4 extends Twig_Template
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
        $__internal_be360a475f5b8485ae91e6f533e1bde703fdf7e33ae38b574cedbe86a848807b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be360a475f5b8485ae91e6f533e1bde703fdf7e33ae38b574cedbe86a848807b->enter($__internal_be360a475f5b8485ae91e6f533e1bde703fdf7e33ae38b574cedbe86a848807b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_3c3b706eddaf4c22f4673b9fc9761495923fda5152f76b0060565306eb11cc76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c3b706eddaf4c22f4673b9fc9761495923fda5152f76b0060565306eb11cc76->enter($__internal_3c3b706eddaf4c22f4673b9fc9761495923fda5152f76b0060565306eb11cc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_be360a475f5b8485ae91e6f533e1bde703fdf7e33ae38b574cedbe86a848807b->leave($__internal_be360a475f5b8485ae91e6f533e1bde703fdf7e33ae38b574cedbe86a848807b_prof);

        
        $__internal_3c3b706eddaf4c22f4673b9fc9761495923fda5152f76b0060565306eb11cc76->leave($__internal_3c3b706eddaf4c22f4673b9fc9761495923fda5152f76b0060565306eb11cc76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
