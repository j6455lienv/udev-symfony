<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_fbdc04fdaa5979180b8f123b5c189746944f642fdb1033feaf74801e5b3b9994 extends Twig_Template
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
        $__internal_987a47d7227d9c1b34cae970ec219d853a4a48d69c896268a65945af6009e61e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_987a47d7227d9c1b34cae970ec219d853a4a48d69c896268a65945af6009e61e->enter($__internal_987a47d7227d9c1b34cae970ec219d853a4a48d69c896268a65945af6009e61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_5d1e2293ed9cc750cf8dddc8d3d7208c5e6f07644275b0dd1731264f58c12653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1e2293ed9cc750cf8dddc8d3d7208c5e6f07644275b0dd1731264f58c12653->enter($__internal_5d1e2293ed9cc750cf8dddc8d3d7208c5e6f07644275b0dd1731264f58c12653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_987a47d7227d9c1b34cae970ec219d853a4a48d69c896268a65945af6009e61e->leave($__internal_987a47d7227d9c1b34cae970ec219d853a4a48d69c896268a65945af6009e61e_prof);

        
        $__internal_5d1e2293ed9cc750cf8dddc8d3d7208c5e6f07644275b0dd1731264f58c12653->leave($__internal_5d1e2293ed9cc750cf8dddc8d3d7208c5e6f07644275b0dd1731264f58c12653_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
