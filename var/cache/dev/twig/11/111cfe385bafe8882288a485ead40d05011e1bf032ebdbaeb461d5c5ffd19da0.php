<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_4b4ca4ea426e77a78049bf0021862439d837e4dff88c2f21f3ab8fb5b5db85eb extends Twig_Template
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
        $__internal_92b8f3ecc0529b523e8190abbe8e0b60380c93b23572cc5ec2f64377b57abcff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92b8f3ecc0529b523e8190abbe8e0b60380c93b23572cc5ec2f64377b57abcff->enter($__internal_92b8f3ecc0529b523e8190abbe8e0b60380c93b23572cc5ec2f64377b57abcff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_15d7e2d3531753c7cf6967ad26be455dfd41b36f7df198224b72e36bd8a7fa3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d7e2d3531753c7cf6967ad26be455dfd41b36f7df198224b72e36bd8a7fa3f->enter($__internal_15d7e2d3531753c7cf6967ad26be455dfd41b36f7df198224b72e36bd8a7fa3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_92b8f3ecc0529b523e8190abbe8e0b60380c93b23572cc5ec2f64377b57abcff->leave($__internal_92b8f3ecc0529b523e8190abbe8e0b60380c93b23572cc5ec2f64377b57abcff_prof);

        
        $__internal_15d7e2d3531753c7cf6967ad26be455dfd41b36f7df198224b72e36bd8a7fa3f->leave($__internal_15d7e2d3531753c7cf6967ad26be455dfd41b36f7df198224b72e36bd8a7fa3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
