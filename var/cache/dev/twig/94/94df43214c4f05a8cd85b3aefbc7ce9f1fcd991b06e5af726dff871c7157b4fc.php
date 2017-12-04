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
        $__internal_0650201a8bfc6d0921069c9b974f87d3e785791be1add1ab2d5831843ec52f5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0650201a8bfc6d0921069c9b974f87d3e785791be1add1ab2d5831843ec52f5a->enter($__internal_0650201a8bfc6d0921069c9b974f87d3e785791be1add1ab2d5831843ec52f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_4dc3b5a5d0c9e2f5d5912cdf9ab4a30c0812766ca5a2c96501670c19ce15173e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc3b5a5d0c9e2f5d5912cdf9ab4a30c0812766ca5a2c96501670c19ce15173e->enter($__internal_4dc3b5a5d0c9e2f5d5912cdf9ab4a30c0812766ca5a2c96501670c19ce15173e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_0650201a8bfc6d0921069c9b974f87d3e785791be1add1ab2d5831843ec52f5a->leave($__internal_0650201a8bfc6d0921069c9b974f87d3e785791be1add1ab2d5831843ec52f5a_prof);

        
        $__internal_4dc3b5a5d0c9e2f5d5912cdf9ab4a30c0812766ca5a2c96501670c19ce15173e->leave($__internal_4dc3b5a5d0c9e2f5d5912cdf9ab4a30c0812766ca5a2c96501670c19ce15173e_prof);

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
