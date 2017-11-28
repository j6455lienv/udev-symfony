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
        $__internal_38bcefcd4a05fb31e50e16958e726e8930942dca761983d92e6f5a05e2c03dab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38bcefcd4a05fb31e50e16958e726e8930942dca761983d92e6f5a05e2c03dab->enter($__internal_38bcefcd4a05fb31e50e16958e726e8930942dca761983d92e6f5a05e2c03dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_57bebf8fdd3e7ccebe8aaf572e172c259c3cc8a25d8b7d2520ce1c05f3fb739b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57bebf8fdd3e7ccebe8aaf572e172c259c3cc8a25d8b7d2520ce1c05f3fb739b->enter($__internal_57bebf8fdd3e7ccebe8aaf572e172c259c3cc8a25d8b7d2520ce1c05f3fb739b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_38bcefcd4a05fb31e50e16958e726e8930942dca761983d92e6f5a05e2c03dab->leave($__internal_38bcefcd4a05fb31e50e16958e726e8930942dca761983d92e6f5a05e2c03dab_prof);

        
        $__internal_57bebf8fdd3e7ccebe8aaf572e172c259c3cc8a25d8b7d2520ce1c05f3fb739b->leave($__internal_57bebf8fdd3e7ccebe8aaf572e172c259c3cc8a25d8b7d2520ce1c05f3fb739b_prof);

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
