<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_033c02ea86dea3b2e016d8c1216159740fc27f1900fb1e921f08366464d0d8b9 extends Twig_Template
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
        $__internal_8e6e0b6d4f9832a646ed1083b69bff3aa947e4683ca7ddd1dc39a49b608197c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e6e0b6d4f9832a646ed1083b69bff3aa947e4683ca7ddd1dc39a49b608197c9->enter($__internal_8e6e0b6d4f9832a646ed1083b69bff3aa947e4683ca7ddd1dc39a49b608197c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_81168b5e51e62e884daf8fc4137c99f4621c36ef9d57c99b64b02d2aefe192b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81168b5e51e62e884daf8fc4137c99f4621c36ef9d57c99b64b02d2aefe192b3->enter($__internal_81168b5e51e62e884daf8fc4137c99f4621c36ef9d57c99b64b02d2aefe192b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_8e6e0b6d4f9832a646ed1083b69bff3aa947e4683ca7ddd1dc39a49b608197c9->leave($__internal_8e6e0b6d4f9832a646ed1083b69bff3aa947e4683ca7ddd1dc39a49b608197c9_prof);

        
        $__internal_81168b5e51e62e884daf8fc4137c99f4621c36ef9d57c99b64b02d2aefe192b3->leave($__internal_81168b5e51e62e884daf8fc4137c99f4621c36ef9d57c99b64b02d2aefe192b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
