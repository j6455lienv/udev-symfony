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
        $__internal_575391188226ddc50519e9ebe4625845d99975be4517be20f44128749789fa2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_575391188226ddc50519e9ebe4625845d99975be4517be20f44128749789fa2f->enter($__internal_575391188226ddc50519e9ebe4625845d99975be4517be20f44128749789fa2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_81e234dce2fafa0cc972d1409e74f9d262d0863f21f96228ca30b38489a9f5a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e234dce2fafa0cc972d1409e74f9d262d0863f21f96228ca30b38489a9f5a6->enter($__internal_81e234dce2fafa0cc972d1409e74f9d262d0863f21f96228ca30b38489a9f5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_575391188226ddc50519e9ebe4625845d99975be4517be20f44128749789fa2f->leave($__internal_575391188226ddc50519e9ebe4625845d99975be4517be20f44128749789fa2f_prof);

        
        $__internal_81e234dce2fafa0cc972d1409e74f9d262d0863f21f96228ca30b38489a9f5a6->leave($__internal_81e234dce2fafa0cc972d1409e74f9d262d0863f21f96228ca30b38489a9f5a6_prof);

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
