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
        $__internal_61c80a3f048f44cd7a7143686cbb9a2979a8b13cac1febd4e3a0bbabbb0e848e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61c80a3f048f44cd7a7143686cbb9a2979a8b13cac1febd4e3a0bbabbb0e848e->enter($__internal_61c80a3f048f44cd7a7143686cbb9a2979a8b13cac1febd4e3a0bbabbb0e848e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_7018c25da21351a1d20a88f419aa95d83b70099c75a05234f7ee3ae3beaf7072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7018c25da21351a1d20a88f419aa95d83b70099c75a05234f7ee3ae3beaf7072->enter($__internal_7018c25da21351a1d20a88f419aa95d83b70099c75a05234f7ee3ae3beaf7072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_61c80a3f048f44cd7a7143686cbb9a2979a8b13cac1febd4e3a0bbabbb0e848e->leave($__internal_61c80a3f048f44cd7a7143686cbb9a2979a8b13cac1febd4e3a0bbabbb0e848e_prof);

        
        $__internal_7018c25da21351a1d20a88f419aa95d83b70099c75a05234f7ee3ae3beaf7072->leave($__internal_7018c25da21351a1d20a88f419aa95d83b70099c75a05234f7ee3ae3beaf7072_prof);

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
