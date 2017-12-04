<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_35c91257792590755cb677dd766ec1fbace307f2a15e30e06d082b573f2f9e95 extends Twig_Template
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
        $__internal_4463aa29d90f2d645f07f2293a8ca6fa2f9e95beac038ae85b12776da06e2a45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4463aa29d90f2d645f07f2293a8ca6fa2f9e95beac038ae85b12776da06e2a45->enter($__internal_4463aa29d90f2d645f07f2293a8ca6fa2f9e95beac038ae85b12776da06e2a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_42c51733a6ef046c2ec6e8efa5732928b49330f1039c70efde6394159f44a495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c51733a6ef046c2ec6e8efa5732928b49330f1039c70efde6394159f44a495->enter($__internal_42c51733a6ef046c2ec6e8efa5732928b49330f1039c70efde6394159f44a495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_4463aa29d90f2d645f07f2293a8ca6fa2f9e95beac038ae85b12776da06e2a45->leave($__internal_4463aa29d90f2d645f07f2293a8ca6fa2f9e95beac038ae85b12776da06e2a45_prof);

        
        $__internal_42c51733a6ef046c2ec6e8efa5732928b49330f1039c70efde6394159f44a495->leave($__internal_42c51733a6ef046c2ec6e8efa5732928b49330f1039c70efde6394159f44a495_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
