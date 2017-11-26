<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_474fdf81342910e2c16597ec0560804ec9a40d5a76152337d4630aa7e47a6aca extends Twig_Template
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
        $__internal_b10b5f30137251aa01815b2e953694ac1ded0efd931102ad91a8befd4dafb533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b10b5f30137251aa01815b2e953694ac1ded0efd931102ad91a8befd4dafb533->enter($__internal_b10b5f30137251aa01815b2e953694ac1ded0efd931102ad91a8befd4dafb533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_6d4d7d4d3dd96f35fc18c324413b36098e5d6ad678b4d756696b36a1d580f6c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4d7d4d3dd96f35fc18c324413b36098e5d6ad678b4d756696b36a1d580f6c1->enter($__internal_6d4d7d4d3dd96f35fc18c324413b36098e5d6ad678b4d756696b36a1d580f6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b10b5f30137251aa01815b2e953694ac1ded0efd931102ad91a8befd4dafb533->leave($__internal_b10b5f30137251aa01815b2e953694ac1ded0efd931102ad91a8befd4dafb533_prof);

        
        $__internal_6d4d7d4d3dd96f35fc18c324413b36098e5d6ad678b4d756696b36a1d580f6c1->leave($__internal_6d4d7d4d3dd96f35fc18c324413b36098e5d6ad678b4d756696b36a1d580f6c1_prof);

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
