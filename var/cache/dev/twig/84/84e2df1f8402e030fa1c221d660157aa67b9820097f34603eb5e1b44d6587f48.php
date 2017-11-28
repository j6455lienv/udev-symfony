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
        $__internal_99fb35061ee50efd70666086a14cb8f4ef8b2c71169540fe70dbeed078672bf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99fb35061ee50efd70666086a14cb8f4ef8b2c71169540fe70dbeed078672bf0->enter($__internal_99fb35061ee50efd70666086a14cb8f4ef8b2c71169540fe70dbeed078672bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_274ba87930b3583987c1dd42e8cceee81e8c3c6556c055c5ed0b1fc555f9bba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274ba87930b3583987c1dd42e8cceee81e8c3c6556c055c5ed0b1fc555f9bba8->enter($__internal_274ba87930b3583987c1dd42e8cceee81e8c3c6556c055c5ed0b1fc555f9bba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_99fb35061ee50efd70666086a14cb8f4ef8b2c71169540fe70dbeed078672bf0->leave($__internal_99fb35061ee50efd70666086a14cb8f4ef8b2c71169540fe70dbeed078672bf0_prof);

        
        $__internal_274ba87930b3583987c1dd42e8cceee81e8c3c6556c055c5ed0b1fc555f9bba8->leave($__internal_274ba87930b3583987c1dd42e8cceee81e8c3c6556c055c5ed0b1fc555f9bba8_prof);

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
