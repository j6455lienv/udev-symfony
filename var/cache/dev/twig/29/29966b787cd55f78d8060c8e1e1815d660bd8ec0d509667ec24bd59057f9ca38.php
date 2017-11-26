<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9052d7f9db30066c789c082a4178b5916a3062aa30506a21ec752c2ec61306d7 extends Twig_Template
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
        $__internal_9d63bf9da159530daf1249ff42c2c9ebf6745aeec4400ca7897132eacb231424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d63bf9da159530daf1249ff42c2c9ebf6745aeec4400ca7897132eacb231424->enter($__internal_9d63bf9da159530daf1249ff42c2c9ebf6745aeec4400ca7897132eacb231424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_d53239a3a5aefaabf65a5be0f5761da5ae6f0966a6bb40c9b250b3a488f56465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53239a3a5aefaabf65a5be0f5761da5ae6f0966a6bb40c9b250b3a488f56465->enter($__internal_d53239a3a5aefaabf65a5be0f5761da5ae6f0966a6bb40c9b250b3a488f56465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_9d63bf9da159530daf1249ff42c2c9ebf6745aeec4400ca7897132eacb231424->leave($__internal_9d63bf9da159530daf1249ff42c2c9ebf6745aeec4400ca7897132eacb231424_prof);

        
        $__internal_d53239a3a5aefaabf65a5be0f5761da5ae6f0966a6bb40c9b250b3a488f56465->leave($__internal_d53239a3a5aefaabf65a5be0f5761da5ae6f0966a6bb40c9b250b3a488f56465_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
