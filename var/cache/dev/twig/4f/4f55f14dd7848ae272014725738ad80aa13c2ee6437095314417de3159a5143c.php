<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d9997e02530486a8c69d6bdaeedda434894c94a81c6d9f15ed7afb2ff70cace5 extends Twig_Template
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
        $__internal_9b6c63e47c10818171be5c5edb96a6ad5549e61f6443ad910cba1aeccea803f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b6c63e47c10818171be5c5edb96a6ad5549e61f6443ad910cba1aeccea803f9->enter($__internal_9b6c63e47c10818171be5c5edb96a6ad5549e61f6443ad910cba1aeccea803f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_d99b1fbc3fa93b7fb5f51e28507c6573895b08b7403c019cc282882473c91dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99b1fbc3fa93b7fb5f51e28507c6573895b08b7403c019cc282882473c91dae->enter($__internal_d99b1fbc3fa93b7fb5f51e28507c6573895b08b7403c019cc282882473c91dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_9b6c63e47c10818171be5c5edb96a6ad5549e61f6443ad910cba1aeccea803f9->leave($__internal_9b6c63e47c10818171be5c5edb96a6ad5549e61f6443ad910cba1aeccea803f9_prof);

        
        $__internal_d99b1fbc3fa93b7fb5f51e28507c6573895b08b7403c019cc282882473c91dae->leave($__internal_d99b1fbc3fa93b7fb5f51e28507c6573895b08b7403c019cc282882473c91dae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
