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
        $__internal_5128dedad75c463655e1c1dc0af089362f8e9df1f4b18df2fa6bc2c0d51c3ff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5128dedad75c463655e1c1dc0af089362f8e9df1f4b18df2fa6bc2c0d51c3ff6->enter($__internal_5128dedad75c463655e1c1dc0af089362f8e9df1f4b18df2fa6bc2c0d51c3ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_a214a8906ad50e7a44c3b51f458cc90438f2c17c792db4ee104d2e9cf6ae968b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a214a8906ad50e7a44c3b51f458cc90438f2c17c792db4ee104d2e9cf6ae968b->enter($__internal_a214a8906ad50e7a44c3b51f458cc90438f2c17c792db4ee104d2e9cf6ae968b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_5128dedad75c463655e1c1dc0af089362f8e9df1f4b18df2fa6bc2c0d51c3ff6->leave($__internal_5128dedad75c463655e1c1dc0af089362f8e9df1f4b18df2fa6bc2c0d51c3ff6_prof);

        
        $__internal_a214a8906ad50e7a44c3b51f458cc90438f2c17c792db4ee104d2e9cf6ae968b->leave($__internal_a214a8906ad50e7a44c3b51f458cc90438f2c17c792db4ee104d2e9cf6ae968b_prof);

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
