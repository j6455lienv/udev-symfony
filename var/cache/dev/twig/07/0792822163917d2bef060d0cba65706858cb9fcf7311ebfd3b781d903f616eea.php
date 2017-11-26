<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8d79c55f328140ddd7570c93b34f5d78e97bc2816749ba598f6029733736d299 extends Twig_Template
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
        $__internal_3a09435727c484295440dc1ad23541ab6ba7173d397139666ca393da22139c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a09435727c484295440dc1ad23541ab6ba7173d397139666ca393da22139c4f->enter($__internal_3a09435727c484295440dc1ad23541ab6ba7173d397139666ca393da22139c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_65f4dab79e3b8fc7dbed447c98da357de52d1fed9fd18540b880de007286f088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f4dab79e3b8fc7dbed447c98da357de52d1fed9fd18540b880de007286f088->enter($__internal_65f4dab79e3b8fc7dbed447c98da357de52d1fed9fd18540b880de007286f088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_3a09435727c484295440dc1ad23541ab6ba7173d397139666ca393da22139c4f->leave($__internal_3a09435727c484295440dc1ad23541ab6ba7173d397139666ca393da22139c4f_prof);

        
        $__internal_65f4dab79e3b8fc7dbed447c98da357de52d1fed9fd18540b880de007286f088->leave($__internal_65f4dab79e3b8fc7dbed447c98da357de52d1fed9fd18540b880de007286f088_prof);

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
