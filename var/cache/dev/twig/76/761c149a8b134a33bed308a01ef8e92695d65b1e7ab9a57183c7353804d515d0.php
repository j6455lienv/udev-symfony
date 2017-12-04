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
        $__internal_15a26c9bfc7637d64dd757bdbf8da96ab13aa2da0a67a9b1c2a9394875ea8d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a26c9bfc7637d64dd757bdbf8da96ab13aa2da0a67a9b1c2a9394875ea8d15->enter($__internal_15a26c9bfc7637d64dd757bdbf8da96ab13aa2da0a67a9b1c2a9394875ea8d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_1bbe9f8f9dd25614168b216749c8acb3f96f08794ab8097ec2a9323f9b949e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bbe9f8f9dd25614168b216749c8acb3f96f08794ab8097ec2a9323f9b949e93->enter($__internal_1bbe9f8f9dd25614168b216749c8acb3f96f08794ab8097ec2a9323f9b949e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_15a26c9bfc7637d64dd757bdbf8da96ab13aa2da0a67a9b1c2a9394875ea8d15->leave($__internal_15a26c9bfc7637d64dd757bdbf8da96ab13aa2da0a67a9b1c2a9394875ea8d15_prof);

        
        $__internal_1bbe9f8f9dd25614168b216749c8acb3f96f08794ab8097ec2a9323f9b949e93->leave($__internal_1bbe9f8f9dd25614168b216749c8acb3f96f08794ab8097ec2a9323f9b949e93_prof);

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
