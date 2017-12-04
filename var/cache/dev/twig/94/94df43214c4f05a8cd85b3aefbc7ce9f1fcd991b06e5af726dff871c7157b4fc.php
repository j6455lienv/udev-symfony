<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_08a26c31d1e97b975bf314e03bafaf6dd2b40c53e468303c54764e11b3924341 extends Twig_Template
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
        $__internal_20b7e91c70b554655cb078f29765598eaad5bb6bdbbc258d2a945bda98c6072c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20b7e91c70b554655cb078f29765598eaad5bb6bdbbc258d2a945bda98c6072c->enter($__internal_20b7e91c70b554655cb078f29765598eaad5bb6bdbbc258d2a945bda98c6072c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_28af499ef462a7302aa0bf1f010d85d92b4a4bacc096827acb33fbbdac64b3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28af499ef462a7302aa0bf1f010d85d92b4a4bacc096827acb33fbbdac64b3b7->enter($__internal_28af499ef462a7302aa0bf1f010d85d92b4a4bacc096827acb33fbbdac64b3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_20b7e91c70b554655cb078f29765598eaad5bb6bdbbc258d2a945bda98c6072c->leave($__internal_20b7e91c70b554655cb078f29765598eaad5bb6bdbbc258d2a945bda98c6072c_prof);

        
        $__internal_28af499ef462a7302aa0bf1f010d85d92b4a4bacc096827acb33fbbdac64b3b7->leave($__internal_28af499ef462a7302aa0bf1f010d85d92b4a4bacc096827acb33fbbdac64b3b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
