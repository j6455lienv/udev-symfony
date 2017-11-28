<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_4b4ca4ea426e77a78049bf0021862439d837e4dff88c2f21f3ab8fb5b5db85eb extends Twig_Template
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
        $__internal_288aca62166290137f357b38fe82702ee01dafbd10f849dac2c3b1ce774924ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_288aca62166290137f357b38fe82702ee01dafbd10f849dac2c3b1ce774924ff->enter($__internal_288aca62166290137f357b38fe82702ee01dafbd10f849dac2c3b1ce774924ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_ce5a33ed3dc8ebda9d1a730d19f9afa3c72764ce3958bdac4fbe67e46a86de4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5a33ed3dc8ebda9d1a730d19f9afa3c72764ce3958bdac4fbe67e46a86de4a->enter($__internal_ce5a33ed3dc8ebda9d1a730d19f9afa3c72764ce3958bdac4fbe67e46a86de4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_288aca62166290137f357b38fe82702ee01dafbd10f849dac2c3b1ce774924ff->leave($__internal_288aca62166290137f357b38fe82702ee01dafbd10f849dac2c3b1ce774924ff_prof);

        
        $__internal_ce5a33ed3dc8ebda9d1a730d19f9afa3c72764ce3958bdac4fbe67e46a86de4a->leave($__internal_ce5a33ed3dc8ebda9d1a730d19f9afa3c72764ce3958bdac4fbe67e46a86de4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
