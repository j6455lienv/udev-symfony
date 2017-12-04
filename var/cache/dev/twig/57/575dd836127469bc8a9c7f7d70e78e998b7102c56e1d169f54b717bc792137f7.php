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
        $__internal_a576f0d698fb6e1afe38f615b02cf104f02c30bc5d07d0f911d265b04653a569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a576f0d698fb6e1afe38f615b02cf104f02c30bc5d07d0f911d265b04653a569->enter($__internal_a576f0d698fb6e1afe38f615b02cf104f02c30bc5d07d0f911d265b04653a569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_3c87b7e7f4b599f9d71489cebf8ae4e89fa22319ac1003940a79feb50a9303fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c87b7e7f4b599f9d71489cebf8ae4e89fa22319ac1003940a79feb50a9303fd->enter($__internal_3c87b7e7f4b599f9d71489cebf8ae4e89fa22319ac1003940a79feb50a9303fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_a576f0d698fb6e1afe38f615b02cf104f02c30bc5d07d0f911d265b04653a569->leave($__internal_a576f0d698fb6e1afe38f615b02cf104f02c30bc5d07d0f911d265b04653a569_prof);

        
        $__internal_3c87b7e7f4b599f9d71489cebf8ae4e89fa22319ac1003940a79feb50a9303fd->leave($__internal_3c87b7e7f4b599f9d71489cebf8ae4e89fa22319ac1003940a79feb50a9303fd_prof);

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
