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
        $__internal_eed2d1a69e2328282dbd2b0d5603ba78c4e3a4114c3787d3a4282f959dd09c73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed2d1a69e2328282dbd2b0d5603ba78c4e3a4114c3787d3a4282f959dd09c73->enter($__internal_eed2d1a69e2328282dbd2b0d5603ba78c4e3a4114c3787d3a4282f959dd09c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_6158b7e633981675ca28444e559e115435c80b7f5c05c3c9fc6f22985cfb7462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6158b7e633981675ca28444e559e115435c80b7f5c05c3c9fc6f22985cfb7462->enter($__internal_6158b7e633981675ca28444e559e115435c80b7f5c05c3c9fc6f22985cfb7462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_eed2d1a69e2328282dbd2b0d5603ba78c4e3a4114c3787d3a4282f959dd09c73->leave($__internal_eed2d1a69e2328282dbd2b0d5603ba78c4e3a4114c3787d3a4282f959dd09c73_prof);

        
        $__internal_6158b7e633981675ca28444e559e115435c80b7f5c05c3c9fc6f22985cfb7462->leave($__internal_6158b7e633981675ca28444e559e115435c80b7f5c05c3c9fc6f22985cfb7462_prof);

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
