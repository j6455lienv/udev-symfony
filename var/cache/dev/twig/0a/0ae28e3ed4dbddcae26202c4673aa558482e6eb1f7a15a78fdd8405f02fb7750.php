<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_d6216e705313c38b3bf49787dd870ecdfbdc1a841bfb7c5d67d863a4d754cb18 extends Twig_Template
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
        $__internal_fc1f54e788844149365718f40567dca12940af72b0a73f1e9eb219e781f1c4d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc1f54e788844149365718f40567dca12940af72b0a73f1e9eb219e781f1c4d2->enter($__internal_fc1f54e788844149365718f40567dca12940af72b0a73f1e9eb219e781f1c4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_a3b79e1e4437b3a4779136238ef979d2fdebcac0ef120598297440dfa0ded723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b79e1e4437b3a4779136238ef979d2fdebcac0ef120598297440dfa0ded723->enter($__internal_a3b79e1e4437b3a4779136238ef979d2fdebcac0ef120598297440dfa0ded723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_fc1f54e788844149365718f40567dca12940af72b0a73f1e9eb219e781f1c4d2->leave($__internal_fc1f54e788844149365718f40567dca12940af72b0a73f1e9eb219e781f1c4d2_prof);

        
        $__internal_a3b79e1e4437b3a4779136238ef979d2fdebcac0ef120598297440dfa0ded723->leave($__internal_a3b79e1e4437b3a4779136238ef979d2fdebcac0ef120598297440dfa0ded723_prof);

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
