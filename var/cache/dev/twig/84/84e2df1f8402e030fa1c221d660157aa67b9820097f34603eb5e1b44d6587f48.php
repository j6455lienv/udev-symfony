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
        $__internal_5f8a9e8ca4f3efe7458e40070874c22d723630619f0c2143fedce747c62a1045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f8a9e8ca4f3efe7458e40070874c22d723630619f0c2143fedce747c62a1045->enter($__internal_5f8a9e8ca4f3efe7458e40070874c22d723630619f0c2143fedce747c62a1045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_b57e5a1dafe5f6e04a2e5cdc8fbe2d3d65721e47d4c5230eb8841345f78c3e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57e5a1dafe5f6e04a2e5cdc8fbe2d3d65721e47d4c5230eb8841345f78c3e39->enter($__internal_b57e5a1dafe5f6e04a2e5cdc8fbe2d3d65721e47d4c5230eb8841345f78c3e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5f8a9e8ca4f3efe7458e40070874c22d723630619f0c2143fedce747c62a1045->leave($__internal_5f8a9e8ca4f3efe7458e40070874c22d723630619f0c2143fedce747c62a1045_prof);

        
        $__internal_b57e5a1dafe5f6e04a2e5cdc8fbe2d3d65721e47d4c5230eb8841345f78c3e39->leave($__internal_b57e5a1dafe5f6e04a2e5cdc8fbe2d3d65721e47d4c5230eb8841345f78c3e39_prof);

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
