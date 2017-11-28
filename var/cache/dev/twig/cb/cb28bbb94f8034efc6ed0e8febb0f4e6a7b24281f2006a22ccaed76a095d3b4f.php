<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_085b459b312750b6db428ffb7282578a3fcd33c4cb8013c538975eaf801febc6 extends Twig_Template
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
        $__internal_90b9541bb43195d7b702d7456ede1e3dc19032ec8070a47bc6dcc9ea193ab44d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90b9541bb43195d7b702d7456ede1e3dc19032ec8070a47bc6dcc9ea193ab44d->enter($__internal_90b9541bb43195d7b702d7456ede1e3dc19032ec8070a47bc6dcc9ea193ab44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_83f461e1aa2ab0eb2771500836444c2dd0d428023ff6481e99df7bfea3cd3511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f461e1aa2ab0eb2771500836444c2dd0d428023ff6481e99df7bfea3cd3511->enter($__internal_83f461e1aa2ab0eb2771500836444c2dd0d428023ff6481e99df7bfea3cd3511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_90b9541bb43195d7b702d7456ede1e3dc19032ec8070a47bc6dcc9ea193ab44d->leave($__internal_90b9541bb43195d7b702d7456ede1e3dc19032ec8070a47bc6dcc9ea193ab44d_prof);

        
        $__internal_83f461e1aa2ab0eb2771500836444c2dd0d428023ff6481e99df7bfea3cd3511->leave($__internal_83f461e1aa2ab0eb2771500836444c2dd0d428023ff6481e99df7bfea3cd3511_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
