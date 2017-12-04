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
        $__internal_5433acb1d9fae8cde1b7922061db1825651fb917f8235302fe5f601fc4e404ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5433acb1d9fae8cde1b7922061db1825651fb917f8235302fe5f601fc4e404ae->enter($__internal_5433acb1d9fae8cde1b7922061db1825651fb917f8235302fe5f601fc4e404ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_fdbf8c311ccf999934d2ff5c6c7f7fdcc5ecc2cbcafcb357857f06475fa9ef8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdbf8c311ccf999934d2ff5c6c7f7fdcc5ecc2cbcafcb357857f06475fa9ef8e->enter($__internal_fdbf8c311ccf999934d2ff5c6c7f7fdcc5ecc2cbcafcb357857f06475fa9ef8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_5433acb1d9fae8cde1b7922061db1825651fb917f8235302fe5f601fc4e404ae->leave($__internal_5433acb1d9fae8cde1b7922061db1825651fb917f8235302fe5f601fc4e404ae_prof);

        
        $__internal_fdbf8c311ccf999934d2ff5c6c7f7fdcc5ecc2cbcafcb357857f06475fa9ef8e->leave($__internal_fdbf8c311ccf999934d2ff5c6c7f7fdcc5ecc2cbcafcb357857f06475fa9ef8e_prof);

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
