<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a83c040aa82e9dba82040090713aabce83812f809a5b02cb017548a89c8ba7c6 extends Twig_Template
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
        $__internal_65f7b0ab49c323b7fd1696dde442b97a040101d4ed8a411bfedaf73c99952d81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65f7b0ab49c323b7fd1696dde442b97a040101d4ed8a411bfedaf73c99952d81->enter($__internal_65f7b0ab49c323b7fd1696dde442b97a040101d4ed8a411bfedaf73c99952d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_a74da3a69a0ed7013796cc9262e22ca3f987b07fd17c4d0d6e504d06e24bc437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74da3a69a0ed7013796cc9262e22ca3f987b07fd17c4d0d6e504d06e24bc437->enter($__internal_a74da3a69a0ed7013796cc9262e22ca3f987b07fd17c4d0d6e504d06e24bc437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_65f7b0ab49c323b7fd1696dde442b97a040101d4ed8a411bfedaf73c99952d81->leave($__internal_65f7b0ab49c323b7fd1696dde442b97a040101d4ed8a411bfedaf73c99952d81_prof);

        
        $__internal_a74da3a69a0ed7013796cc9262e22ca3f987b07fd17c4d0d6e504d06e24bc437->leave($__internal_a74da3a69a0ed7013796cc9262e22ca3f987b07fd17c4d0d6e504d06e24bc437_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
