<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_20604180161d0c253980ff4ca6c65c93f43d676d7815de689377ff771ff1960e extends Twig_Template
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
        $__internal_b551712bfc789873b63363daf8a945d4194b1c9c5b0325079514e89decff04ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b551712bfc789873b63363daf8a945d4194b1c9c5b0325079514e89decff04ef->enter($__internal_b551712bfc789873b63363daf8a945d4194b1c9c5b0325079514e89decff04ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_4540f6afd1231f52d84cd7486eef8a35767dbbdb47450bb79ee3ec7f331b01d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4540f6afd1231f52d84cd7486eef8a35767dbbdb47450bb79ee3ec7f331b01d9->enter($__internal_4540f6afd1231f52d84cd7486eef8a35767dbbdb47450bb79ee3ec7f331b01d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b551712bfc789873b63363daf8a945d4194b1c9c5b0325079514e89decff04ef->leave($__internal_b551712bfc789873b63363daf8a945d4194b1c9c5b0325079514e89decff04ef_prof);

        
        $__internal_4540f6afd1231f52d84cd7486eef8a35767dbbdb47450bb79ee3ec7f331b01d9->leave($__internal_4540f6afd1231f52d84cd7486eef8a35767dbbdb47450bb79ee3ec7f331b01d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
