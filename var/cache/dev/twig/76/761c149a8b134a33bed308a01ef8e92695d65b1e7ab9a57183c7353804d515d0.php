<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_179212be147afe014797e1c0bbb95fbc2a67f4a5b2194afefae039a07181d0cf extends Twig_Template
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
        $__internal_b39ce4029686d44424430dda95534d3eb84cf6ed374b119a05c1c0f43b926de9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b39ce4029686d44424430dda95534d3eb84cf6ed374b119a05c1c0f43b926de9->enter($__internal_b39ce4029686d44424430dda95534d3eb84cf6ed374b119a05c1c0f43b926de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_0ed6f384fdacc240d81bd27015405c4f34297775bf7a8daef9d1cc1f3696cbe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed6f384fdacc240d81bd27015405c4f34297775bf7a8daef9d1cc1f3696cbe0->enter($__internal_0ed6f384fdacc240d81bd27015405c4f34297775bf7a8daef9d1cc1f3696cbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b39ce4029686d44424430dda95534d3eb84cf6ed374b119a05c1c0f43b926de9->leave($__internal_b39ce4029686d44424430dda95534d3eb84cf6ed374b119a05c1c0f43b926de9_prof);

        
        $__internal_0ed6f384fdacc240d81bd27015405c4f34297775bf7a8daef9d1cc1f3696cbe0->leave($__internal_0ed6f384fdacc240d81bd27015405c4f34297775bf7a8daef9d1cc1f3696cbe0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
