<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_4c65c2982325a7c3b3a1b20fa93f5d230851179bdd21abaa6932edf1b4a3f65c extends Twig_Template
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
        $__internal_08d68e230273317f4ab25aa58398f22e7bc688b0e03dcfe31423bfa26c5be6be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d68e230273317f4ab25aa58398f22e7bc688b0e03dcfe31423bfa26c5be6be->enter($__internal_08d68e230273317f4ab25aa58398f22e7bc688b0e03dcfe31423bfa26c5be6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_6d942a988ef6e80993c52dea525e9fd8fe8a027342506392bc823c93385def93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d942a988ef6e80993c52dea525e9fd8fe8a027342506392bc823c93385def93->enter($__internal_6d942a988ef6e80993c52dea525e9fd8fe8a027342506392bc823c93385def93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_08d68e230273317f4ab25aa58398f22e7bc688b0e03dcfe31423bfa26c5be6be->leave($__internal_08d68e230273317f4ab25aa58398f22e7bc688b0e03dcfe31423bfa26c5be6be_prof);

        
        $__internal_6d942a988ef6e80993c52dea525e9fd8fe8a027342506392bc823c93385def93->leave($__internal_6d942a988ef6e80993c52dea525e9fd8fe8a027342506392bc823c93385def93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
