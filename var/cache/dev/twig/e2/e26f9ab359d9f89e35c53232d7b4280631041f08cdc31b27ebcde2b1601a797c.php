<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_331d45c5bf5e2c19e9cba6a28b6726f84212a37e218b190eec37ee09e703a77b extends Twig_Template
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
        $__internal_bed4a65d86be7f4ff6f66aa1bb9f1f1ea59d512940f031a68ca69831ed217b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed4a65d86be7f4ff6f66aa1bb9f1f1ea59d512940f031a68ca69831ed217b10->enter($__internal_bed4a65d86be7f4ff6f66aa1bb9f1f1ea59d512940f031a68ca69831ed217b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_3196cae5a836e41cb049bf544e7d359d2c4aeceb89067eb32e407670d926109f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3196cae5a836e41cb049bf544e7d359d2c4aeceb89067eb32e407670d926109f->enter($__internal_3196cae5a836e41cb049bf544e7d359d2c4aeceb89067eb32e407670d926109f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_bed4a65d86be7f4ff6f66aa1bb9f1f1ea59d512940f031a68ca69831ed217b10->leave($__internal_bed4a65d86be7f4ff6f66aa1bb9f1f1ea59d512940f031a68ca69831ed217b10_prof);

        
        $__internal_3196cae5a836e41cb049bf544e7d359d2c4aeceb89067eb32e407670d926109f->leave($__internal_3196cae5a836e41cb049bf544e7d359d2c4aeceb89067eb32e407670d926109f_prof);

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
