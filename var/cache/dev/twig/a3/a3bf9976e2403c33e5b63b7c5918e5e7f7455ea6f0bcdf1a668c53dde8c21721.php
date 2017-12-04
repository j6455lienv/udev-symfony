<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_c1d712328b6e13036f6c07baa00ea234735054e43266011ea528c328308ec1fa extends Twig_Template
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
        $__internal_04f6b637a94a925c08b6a81c12e558ec44ff9c7a9ef66fed6867dee84b57d552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04f6b637a94a925c08b6a81c12e558ec44ff9c7a9ef66fed6867dee84b57d552->enter($__internal_04f6b637a94a925c08b6a81c12e558ec44ff9c7a9ef66fed6867dee84b57d552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_d92c0e88ff897473601bbbf6a4d6f9328c2d1f3f2398d39e213f1a4c3e692c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92c0e88ff897473601bbbf6a4d6f9328c2d1f3f2398d39e213f1a4c3e692c38->enter($__internal_d92c0e88ff897473601bbbf6a4d6f9328c2d1f3f2398d39e213f1a4c3e692c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_04f6b637a94a925c08b6a81c12e558ec44ff9c7a9ef66fed6867dee84b57d552->leave($__internal_04f6b637a94a925c08b6a81c12e558ec44ff9c7a9ef66fed6867dee84b57d552_prof);

        
        $__internal_d92c0e88ff897473601bbbf6a4d6f9328c2d1f3f2398d39e213f1a4c3e692c38->leave($__internal_d92c0e88ff897473601bbbf6a4d6f9328c2d1f3f2398d39e213f1a4c3e692c38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
