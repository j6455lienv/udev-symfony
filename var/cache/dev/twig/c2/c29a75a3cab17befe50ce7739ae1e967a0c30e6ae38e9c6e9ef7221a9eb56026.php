<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ace432049830ea6e1e1861ed1b347820303fb6a3ceefb9bd123763e85145acfe extends Twig_Template
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
        $__internal_d52998350ec20d84a0d9c352e677c0f63b221902ddbe41b40c8d680f9680f1d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d52998350ec20d84a0d9c352e677c0f63b221902ddbe41b40c8d680f9680f1d9->enter($__internal_d52998350ec20d84a0d9c352e677c0f63b221902ddbe41b40c8d680f9680f1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_6c64c8b2f6f1c26d5780699965f59649c91a410a7bcd2a2b1b1cecbdb72d2ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c64c8b2f6f1c26d5780699965f59649c91a410a7bcd2a2b1b1cecbdb72d2ddc->enter($__internal_6c64c8b2f6f1c26d5780699965f59649c91a410a7bcd2a2b1b1cecbdb72d2ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d52998350ec20d84a0d9c352e677c0f63b221902ddbe41b40c8d680f9680f1d9->leave($__internal_d52998350ec20d84a0d9c352e677c0f63b221902ddbe41b40c8d680f9680f1d9_prof);

        
        $__internal_6c64c8b2f6f1c26d5780699965f59649c91a410a7bcd2a2b1b1cecbdb72d2ddc->leave($__internal_6c64c8b2f6f1c26d5780699965f59649c91a410a7bcd2a2b1b1cecbdb72d2ddc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
