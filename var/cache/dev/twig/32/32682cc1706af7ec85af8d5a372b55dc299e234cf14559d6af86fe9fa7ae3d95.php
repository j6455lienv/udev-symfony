<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0362041fa34014124a6e42e1ed17fc18d71befda619d477dab4a877c5ae96b2d extends Twig_Template
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
        $__internal_aa15205c1efdf4f53dac5b39ecea950384a0ba565c03a1ee8742d01c5a271946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa15205c1efdf4f53dac5b39ecea950384a0ba565c03a1ee8742d01c5a271946->enter($__internal_aa15205c1efdf4f53dac5b39ecea950384a0ba565c03a1ee8742d01c5a271946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_eea36983b6275c6949d36ab991d98ca6818f20dd87abb08b7fe86f8d11c584eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea36983b6275c6949d36ab991d98ca6818f20dd87abb08b7fe86f8d11c584eb->enter($__internal_eea36983b6275c6949d36ab991d98ca6818f20dd87abb08b7fe86f8d11c584eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_aa15205c1efdf4f53dac5b39ecea950384a0ba565c03a1ee8742d01c5a271946->leave($__internal_aa15205c1efdf4f53dac5b39ecea950384a0ba565c03a1ee8742d01c5a271946_prof);

        
        $__internal_eea36983b6275c6949d36ab991d98ca6818f20dd87abb08b7fe86f8d11c584eb->leave($__internal_eea36983b6275c6949d36ab991d98ca6818f20dd87abb08b7fe86f8d11c584eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
