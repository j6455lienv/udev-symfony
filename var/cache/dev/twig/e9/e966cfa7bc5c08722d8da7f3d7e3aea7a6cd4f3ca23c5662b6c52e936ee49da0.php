<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_35c91257792590755cb677dd766ec1fbace307f2a15e30e06d082b573f2f9e95 extends Twig_Template
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
        $__internal_a01796dfa6fdd3e0b944583b755476ddc7ab67143250b3e55e120964f12ed3eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a01796dfa6fdd3e0b944583b755476ddc7ab67143250b3e55e120964f12ed3eb->enter($__internal_a01796dfa6fdd3e0b944583b755476ddc7ab67143250b3e55e120964f12ed3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_7af0ee2ef2a159eb09850271c11ff4410d239d7d29722708c78462aa69c9aed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7af0ee2ef2a159eb09850271c11ff4410d239d7d29722708c78462aa69c9aed7->enter($__internal_7af0ee2ef2a159eb09850271c11ff4410d239d7d29722708c78462aa69c9aed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a01796dfa6fdd3e0b944583b755476ddc7ab67143250b3e55e120964f12ed3eb->leave($__internal_a01796dfa6fdd3e0b944583b755476ddc7ab67143250b3e55e120964f12ed3eb_prof);

        
        $__internal_7af0ee2ef2a159eb09850271c11ff4410d239d7d29722708c78462aa69c9aed7->leave($__internal_7af0ee2ef2a159eb09850271c11ff4410d239d7d29722708c78462aa69c9aed7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
