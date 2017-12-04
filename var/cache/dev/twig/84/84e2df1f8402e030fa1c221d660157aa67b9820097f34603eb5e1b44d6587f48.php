<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_bbe99cc200b08922e408372a0ddd8c75360e34a3be4effd88c9e2b86d22ccab9 extends Twig_Template
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
        $__internal_6b8b911af3d866a32a0cd5733c4fb71e9a0198e6eda33e7d68d86165a67d14b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b8b911af3d866a32a0cd5733c4fb71e9a0198e6eda33e7d68d86165a67d14b9->enter($__internal_6b8b911af3d866a32a0cd5733c4fb71e9a0198e6eda33e7d68d86165a67d14b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d7d791ae478fdb9ad8bcd8255082b8022c52f6c32327a2c48c1007dff3e56950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d791ae478fdb9ad8bcd8255082b8022c52f6c32327a2c48c1007dff3e56950->enter($__internal_d7d791ae478fdb9ad8bcd8255082b8022c52f6c32327a2c48c1007dff3e56950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6b8b911af3d866a32a0cd5733c4fb71e9a0198e6eda33e7d68d86165a67d14b9->leave($__internal_6b8b911af3d866a32a0cd5733c4fb71e9a0198e6eda33e7d68d86165a67d14b9_prof);

        
        $__internal_d7d791ae478fdb9ad8bcd8255082b8022c52f6c32327a2c48c1007dff3e56950->leave($__internal_d7d791ae478fdb9ad8bcd8255082b8022c52f6c32327a2c48c1007dff3e56950_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
