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
        $__internal_9ef94eb52964c45ce9800a5d21ede554fec7c896c2e0aa8000f163dd1a11b798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ef94eb52964c45ce9800a5d21ede554fec7c896c2e0aa8000f163dd1a11b798->enter($__internal_9ef94eb52964c45ce9800a5d21ede554fec7c896c2e0aa8000f163dd1a11b798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_bc68a1d374a12fd7a8527f6067ffba4726880315087b7438d0f69ce750a5d0cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc68a1d374a12fd7a8527f6067ffba4726880315087b7438d0f69ce750a5d0cc->enter($__internal_bc68a1d374a12fd7a8527f6067ffba4726880315087b7438d0f69ce750a5d0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9ef94eb52964c45ce9800a5d21ede554fec7c896c2e0aa8000f163dd1a11b798->leave($__internal_9ef94eb52964c45ce9800a5d21ede554fec7c896c2e0aa8000f163dd1a11b798_prof);

        
        $__internal_bc68a1d374a12fd7a8527f6067ffba4726880315087b7438d0f69ce750a5d0cc->leave($__internal_bc68a1d374a12fd7a8527f6067ffba4726880315087b7438d0f69ce750a5d0cc_prof);

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
