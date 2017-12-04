<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_9f5606beaec564c4c795e57711b45400a7c0385658e4ec333e99e7d62ca10785 extends Twig_Template
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
        $__internal_797a1b6bc3bcb12e5f56b7c35c9a9ccf85737d5a42083067d51ba3623a69b36b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_797a1b6bc3bcb12e5f56b7c35c9a9ccf85737d5a42083067d51ba3623a69b36b->enter($__internal_797a1b6bc3bcb12e5f56b7c35c9a9ccf85737d5a42083067d51ba3623a69b36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_f64b6d1531d0aa3d4b0f973ada963e9fe897e6f69c8bcdb3454af5a1845683dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f64b6d1531d0aa3d4b0f973ada963e9fe897e6f69c8bcdb3454af5a1845683dd->enter($__internal_f64b6d1531d0aa3d4b0f973ada963e9fe897e6f69c8bcdb3454af5a1845683dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_797a1b6bc3bcb12e5f56b7c35c9a9ccf85737d5a42083067d51ba3623a69b36b->leave($__internal_797a1b6bc3bcb12e5f56b7c35c9a9ccf85737d5a42083067d51ba3623a69b36b_prof);

        
        $__internal_f64b6d1531d0aa3d4b0f973ada963e9fe897e6f69c8bcdb3454af5a1845683dd->leave($__internal_f64b6d1531d0aa3d4b0f973ada963e9fe897e6f69c8bcdb3454af5a1845683dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
