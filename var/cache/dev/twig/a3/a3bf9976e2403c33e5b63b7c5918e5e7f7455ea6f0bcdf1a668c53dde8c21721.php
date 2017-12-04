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
        $__internal_3b48e530570aa33a89bf729da48c3f575b038ea488b570b16a61ccd8537c7a6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b48e530570aa33a89bf729da48c3f575b038ea488b570b16a61ccd8537c7a6e->enter($__internal_3b48e530570aa33a89bf729da48c3f575b038ea488b570b16a61ccd8537c7a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_738a1e7b79063a806a4031612ca6274892518649ee39ae8d45cd25e78fafe610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738a1e7b79063a806a4031612ca6274892518649ee39ae8d45cd25e78fafe610->enter($__internal_738a1e7b79063a806a4031612ca6274892518649ee39ae8d45cd25e78fafe610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3b48e530570aa33a89bf729da48c3f575b038ea488b570b16a61ccd8537c7a6e->leave($__internal_3b48e530570aa33a89bf729da48c3f575b038ea488b570b16a61ccd8537c7a6e_prof);

        
        $__internal_738a1e7b79063a806a4031612ca6274892518649ee39ae8d45cd25e78fafe610->leave($__internal_738a1e7b79063a806a4031612ca6274892518649ee39ae8d45cd25e78fafe610_prof);

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
