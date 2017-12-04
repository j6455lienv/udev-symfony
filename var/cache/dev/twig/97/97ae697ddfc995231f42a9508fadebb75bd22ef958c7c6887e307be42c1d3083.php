<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_e4fba24289a6062cc528ccbf9699c938455d1f86f795d6cae31b78c704c6058e extends Twig_Template
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
        $__internal_5148bb21d5b981982df51ad6758dd6eb9b273efd30ffb657b8d40cee269fbfb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5148bb21d5b981982df51ad6758dd6eb9b273efd30ffb657b8d40cee269fbfb0->enter($__internal_5148bb21d5b981982df51ad6758dd6eb9b273efd30ffb657b8d40cee269fbfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_3b2b25f4de36182745708e1611cd6cb1c3627bdd0c6f661e55a622804247921f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b2b25f4de36182745708e1611cd6cb1c3627bdd0c6f661e55a622804247921f->enter($__internal_3b2b25f4de36182745708e1611cd6cb1c3627bdd0c6f661e55a622804247921f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_5148bb21d5b981982df51ad6758dd6eb9b273efd30ffb657b8d40cee269fbfb0->leave($__internal_5148bb21d5b981982df51ad6758dd6eb9b273efd30ffb657b8d40cee269fbfb0_prof);

        
        $__internal_3b2b25f4de36182745708e1611cd6cb1c3627bdd0c6f661e55a622804247921f->leave($__internal_3b2b25f4de36182745708e1611cd6cb1c3627bdd0c6f661e55a622804247921f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
