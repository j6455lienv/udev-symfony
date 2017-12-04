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
        $__internal_4347e237abf500efa39cdb6b30b0884dcb52016536bb739bfa139b0b7686a832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4347e237abf500efa39cdb6b30b0884dcb52016536bb739bfa139b0b7686a832->enter($__internal_4347e237abf500efa39cdb6b30b0884dcb52016536bb739bfa139b0b7686a832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_d899e2d2322460589f2f873aab5676c1279eceb0b58deff57d0c516a03eb8ccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d899e2d2322460589f2f873aab5676c1279eceb0b58deff57d0c516a03eb8ccd->enter($__internal_d899e2d2322460589f2f873aab5676c1279eceb0b58deff57d0c516a03eb8ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_4347e237abf500efa39cdb6b30b0884dcb52016536bb739bfa139b0b7686a832->leave($__internal_4347e237abf500efa39cdb6b30b0884dcb52016536bb739bfa139b0b7686a832_prof);

        
        $__internal_d899e2d2322460589f2f873aab5676c1279eceb0b58deff57d0c516a03eb8ccd->leave($__internal_d899e2d2322460589f2f873aab5676c1279eceb0b58deff57d0c516a03eb8ccd_prof);

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
