<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_756d5b6333332be090852efcde8e8a82b0830ce6331ca6a531e51e5247a0aa88 extends Twig_Template
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
        $__internal_54c621c403edf35a87228c82925e42e4d6fc2eb59feb2d0f2331aba1299f4dbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54c621c403edf35a87228c82925e42e4d6fc2eb59feb2d0f2331aba1299f4dbf->enter($__internal_54c621c403edf35a87228c82925e42e4d6fc2eb59feb2d0f2331aba1299f4dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_d5e19eb73bf4b33053fc301231eb746280c903dd40ccac9e0426755295c5b2ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e19eb73bf4b33053fc301231eb746280c903dd40ccac9e0426755295c5b2ee->enter($__internal_d5e19eb73bf4b33053fc301231eb746280c903dd40ccac9e0426755295c5b2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_54c621c403edf35a87228c82925e42e4d6fc2eb59feb2d0f2331aba1299f4dbf->leave($__internal_54c621c403edf35a87228c82925e42e4d6fc2eb59feb2d0f2331aba1299f4dbf_prof);

        
        $__internal_d5e19eb73bf4b33053fc301231eb746280c903dd40ccac9e0426755295c5b2ee->leave($__internal_d5e19eb73bf4b33053fc301231eb746280c903dd40ccac9e0426755295c5b2ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
