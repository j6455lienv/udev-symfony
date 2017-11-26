<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_84497e8a69ff7fbb165cc284cedb74d7ede2775e45353184c450a0469bda60db extends Twig_Template
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
        $__internal_a0e4f4d8370fd8aa78af6a384e055dd14640dd3a0df41f49f5f7dc5e16d287b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0e4f4d8370fd8aa78af6a384e055dd14640dd3a0df41f49f5f7dc5e16d287b6->enter($__internal_a0e4f4d8370fd8aa78af6a384e055dd14640dd3a0df41f49f5f7dc5e16d287b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_ee8119add81c573d2718c38b6bc57004226c397aa709f595df52c9d7797cd9b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8119add81c573d2718c38b6bc57004226c397aa709f595df52c9d7797cd9b2->enter($__internal_ee8119add81c573d2718c38b6bc57004226c397aa709f595df52c9d7797cd9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a0e4f4d8370fd8aa78af6a384e055dd14640dd3a0df41f49f5f7dc5e16d287b6->leave($__internal_a0e4f4d8370fd8aa78af6a384e055dd14640dd3a0df41f49f5f7dc5e16d287b6_prof);

        
        $__internal_ee8119add81c573d2718c38b6bc57004226c397aa709f595df52c9d7797cd9b2->leave($__internal_ee8119add81c573d2718c38b6bc57004226c397aa709f595df52c9d7797cd9b2_prof);

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
