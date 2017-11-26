<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_93bcbd5ac05f6797bb022beebea0b7855bd4b3c81d3be4158dcb2fe9bbe6976e extends Twig_Template
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
        $__internal_1a8a93f6cbb1e20ef73255599cb81c2988b1a47b7e61578632b7ab87a80a5234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a8a93f6cbb1e20ef73255599cb81c2988b1a47b7e61578632b7ab87a80a5234->enter($__internal_1a8a93f6cbb1e20ef73255599cb81c2988b1a47b7e61578632b7ab87a80a5234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_5bf4f2f4860450c2f77292d5aa5331f1c105ad78a94fb3dac1a32e794e5c4b09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf4f2f4860450c2f77292d5aa5331f1c105ad78a94fb3dac1a32e794e5c4b09->enter($__internal_5bf4f2f4860450c2f77292d5aa5331f1c105ad78a94fb3dac1a32e794e5c4b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_1a8a93f6cbb1e20ef73255599cb81c2988b1a47b7e61578632b7ab87a80a5234->leave($__internal_1a8a93f6cbb1e20ef73255599cb81c2988b1a47b7e61578632b7ab87a80a5234_prof);

        
        $__internal_5bf4f2f4860450c2f77292d5aa5331f1c105ad78a94fb3dac1a32e794e5c4b09->leave($__internal_5bf4f2f4860450c2f77292d5aa5331f1c105ad78a94fb3dac1a32e794e5c4b09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
