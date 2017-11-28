<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_075164d9ae4aed7fe9648d2e184778002a0723592bf7b450de7039b64c720d46 extends Twig_Template
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
        $__internal_c8336a48e14aae4f028f24144127d96000076d692c37886beba7d9fd4f9bee65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8336a48e14aae4f028f24144127d96000076d692c37886beba7d9fd4f9bee65->enter($__internal_c8336a48e14aae4f028f24144127d96000076d692c37886beba7d9fd4f9bee65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_ebaa5c30eecbd8b820579d1ff1935ca649b6ffb3fcd6f111ecc7dade370f6c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebaa5c30eecbd8b820579d1ff1935ca649b6ffb3fcd6f111ecc7dade370f6c65->enter($__internal_ebaa5c30eecbd8b820579d1ff1935ca649b6ffb3fcd6f111ecc7dade370f6c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c8336a48e14aae4f028f24144127d96000076d692c37886beba7d9fd4f9bee65->leave($__internal_c8336a48e14aae4f028f24144127d96000076d692c37886beba7d9fd4f9bee65_prof);

        
        $__internal_ebaa5c30eecbd8b820579d1ff1935ca649b6ffb3fcd6f111ecc7dade370f6c65->leave($__internal_ebaa5c30eecbd8b820579d1ff1935ca649b6ffb3fcd6f111ecc7dade370f6c65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
