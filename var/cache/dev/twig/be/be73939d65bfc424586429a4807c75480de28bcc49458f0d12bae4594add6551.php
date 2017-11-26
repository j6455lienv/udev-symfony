<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_b19e001c1f869eb108a59fbe4576733ab876581284427a92ed847b4e1e61ea71 extends Twig_Template
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
        $__internal_f5872db12cbf839597d7de0015018582fa797d82c79d7da715ff620c9b0257ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5872db12cbf839597d7de0015018582fa797d82c79d7da715ff620c9b0257ce->enter($__internal_f5872db12cbf839597d7de0015018582fa797d82c79d7da715ff620c9b0257ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_e4b846720db6f1a37f2ab3348b945b51b049eb2780bbe11786278f7025c49778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b846720db6f1a37f2ab3348b945b51b049eb2780bbe11786278f7025c49778->enter($__internal_e4b846720db6f1a37f2ab3348b945b51b049eb2780bbe11786278f7025c49778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f5872db12cbf839597d7de0015018582fa797d82c79d7da715ff620c9b0257ce->leave($__internal_f5872db12cbf839597d7de0015018582fa797d82c79d7da715ff620c9b0257ce_prof);

        
        $__internal_e4b846720db6f1a37f2ab3348b945b51b049eb2780bbe11786278f7025c49778->leave($__internal_e4b846720db6f1a37f2ab3348b945b51b049eb2780bbe11786278f7025c49778_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
