<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1b0e9c4b22c46743b968e7f0fadebeaacf90d92c6a7ce1c217e3b85c4e748aae extends Twig_Template
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
        $__internal_78b3fb74e9d791b548e80096272e30cbca7c9c0c6475569fdfd15e217022f1e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78b3fb74e9d791b548e80096272e30cbca7c9c0c6475569fdfd15e217022f1e1->enter($__internal_78b3fb74e9d791b548e80096272e30cbca7c9c0c6475569fdfd15e217022f1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_8db0407ba72ec2bdf2456b0690639303386a64c69372437cf8b3773024507ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8db0407ba72ec2bdf2456b0690639303386a64c69372437cf8b3773024507ff0->enter($__internal_8db0407ba72ec2bdf2456b0690639303386a64c69372437cf8b3773024507ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_78b3fb74e9d791b548e80096272e30cbca7c9c0c6475569fdfd15e217022f1e1->leave($__internal_78b3fb74e9d791b548e80096272e30cbca7c9c0c6475569fdfd15e217022f1e1_prof);

        
        $__internal_8db0407ba72ec2bdf2456b0690639303386a64c69372437cf8b3773024507ff0->leave($__internal_8db0407ba72ec2bdf2456b0690639303386a64c69372437cf8b3773024507ff0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
