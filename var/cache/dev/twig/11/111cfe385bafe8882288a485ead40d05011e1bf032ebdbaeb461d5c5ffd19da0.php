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
        $__internal_bc29d0b9aeb896c56d120b2a847c1fbb109419e4c8b03b7f3267ad1ec2d9d88f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc29d0b9aeb896c56d120b2a847c1fbb109419e4c8b03b7f3267ad1ec2d9d88f->enter($__internal_bc29d0b9aeb896c56d120b2a847c1fbb109419e4c8b03b7f3267ad1ec2d9d88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_fea4fa9da283f5fdb049f578cd39e40ed367f3113f365fe189cbc02c57f598e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea4fa9da283f5fdb049f578cd39e40ed367f3113f365fe189cbc02c57f598e2->enter($__internal_fea4fa9da283f5fdb049f578cd39e40ed367f3113f365fe189cbc02c57f598e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_bc29d0b9aeb896c56d120b2a847c1fbb109419e4c8b03b7f3267ad1ec2d9d88f->leave($__internal_bc29d0b9aeb896c56d120b2a847c1fbb109419e4c8b03b7f3267ad1ec2d9d88f_prof);

        
        $__internal_fea4fa9da283f5fdb049f578cd39e40ed367f3113f365fe189cbc02c57f598e2->leave($__internal_fea4fa9da283f5fdb049f578cd39e40ed367f3113f365fe189cbc02c57f598e2_prof);

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
