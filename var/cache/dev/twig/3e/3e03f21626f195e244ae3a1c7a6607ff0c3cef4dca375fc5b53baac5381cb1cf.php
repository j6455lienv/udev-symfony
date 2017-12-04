<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_c141299f28f7d814a701c54406b10b8f805c009497add8e95c897a41e3cfd5d1 extends Twig_Template
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
        $__internal_46222bfb2770824541d771b529a83dd9e62cedeaa562121786632b21406ca668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46222bfb2770824541d771b529a83dd9e62cedeaa562121786632b21406ca668->enter($__internal_46222bfb2770824541d771b529a83dd9e62cedeaa562121786632b21406ca668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_59b0583f34dd41a9c8944617bc5ed584e435c258f46281389b2ed26377ed3ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b0583f34dd41a9c8944617bc5ed584e435c258f46281389b2ed26377ed3ecd->enter($__internal_59b0583f34dd41a9c8944617bc5ed584e435c258f46281389b2ed26377ed3ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_46222bfb2770824541d771b529a83dd9e62cedeaa562121786632b21406ca668->leave($__internal_46222bfb2770824541d771b529a83dd9e62cedeaa562121786632b21406ca668_prof);

        
        $__internal_59b0583f34dd41a9c8944617bc5ed584e435c258f46281389b2ed26377ed3ecd->leave($__internal_59b0583f34dd41a9c8944617bc5ed584e435c258f46281389b2ed26377ed3ecd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
