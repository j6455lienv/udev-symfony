<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_9e31802d0594819cebfa4850313d3c7d3d9c27bb426f1eb08186940b83a52fcb extends Twig_Template
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
        $__internal_c9cc08056e45e9c55df015ba06f5c8ead55c17dd3b770578a9cb446390420612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9cc08056e45e9c55df015ba06f5c8ead55c17dd3b770578a9cb446390420612->enter($__internal_c9cc08056e45e9c55df015ba06f5c8ead55c17dd3b770578a9cb446390420612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_973d03a5dc9ba03c3439d77e2586fa8187a4eabaa58821e6616d60899147a6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_973d03a5dc9ba03c3439d77e2586fa8187a4eabaa58821e6616d60899147a6b4->enter($__internal_973d03a5dc9ba03c3439d77e2586fa8187a4eabaa58821e6616d60899147a6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c9cc08056e45e9c55df015ba06f5c8ead55c17dd3b770578a9cb446390420612->leave($__internal_c9cc08056e45e9c55df015ba06f5c8ead55c17dd3b770578a9cb446390420612_prof);

        
        $__internal_973d03a5dc9ba03c3439d77e2586fa8187a4eabaa58821e6616d60899147a6b4->leave($__internal_973d03a5dc9ba03c3439d77e2586fa8187a4eabaa58821e6616d60899147a6b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
