<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_b0e99f9c1f37c66fa23bc3aa365170fadd4c452d87396c38804f0a7b8a765900 extends Twig_Template
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
        $__internal_79999fdfdc58efafd1cae7359e304cd509e48b688c91c2be4d66f60b13f1af47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79999fdfdc58efafd1cae7359e304cd509e48b688c91c2be4d66f60b13f1af47->enter($__internal_79999fdfdc58efafd1cae7359e304cd509e48b688c91c2be4d66f60b13f1af47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_62debf2065aff41ce2fe3c72e7deebb83fc02374fb2d5c3ed3ac640ce9797e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62debf2065aff41ce2fe3c72e7deebb83fc02374fb2d5c3ed3ac640ce9797e41->enter($__internal_62debf2065aff41ce2fe3c72e7deebb83fc02374fb2d5c3ed3ac640ce9797e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_79999fdfdc58efafd1cae7359e304cd509e48b688c91c2be4d66f60b13f1af47->leave($__internal_79999fdfdc58efafd1cae7359e304cd509e48b688c91c2be4d66f60b13f1af47_prof);

        
        $__internal_62debf2065aff41ce2fe3c72e7deebb83fc02374fb2d5c3ed3ac640ce9797e41->leave($__internal_62debf2065aff41ce2fe3c72e7deebb83fc02374fb2d5c3ed3ac640ce9797e41_prof);

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
