<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b6f233a35f9c63cbe07b00cd70fc07e26001ead1657a2ab7efdda353f49b7658 extends Twig_Template
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
        $__internal_b2dd36558cf0b69119349b1487648d71f465a77eb6be59da0a0762bfe1f432cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2dd36558cf0b69119349b1487648d71f465a77eb6be59da0a0762bfe1f432cd->enter($__internal_b2dd36558cf0b69119349b1487648d71f465a77eb6be59da0a0762bfe1f432cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_aa385090ff6e478ac1add7152ad2b378977c57509aa6dbdf02702de3d015f725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa385090ff6e478ac1add7152ad2b378977c57509aa6dbdf02702de3d015f725->enter($__internal_aa385090ff6e478ac1add7152ad2b378977c57509aa6dbdf02702de3d015f725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b2dd36558cf0b69119349b1487648d71f465a77eb6be59da0a0762bfe1f432cd->leave($__internal_b2dd36558cf0b69119349b1487648d71f465a77eb6be59da0a0762bfe1f432cd_prof);

        
        $__internal_aa385090ff6e478ac1add7152ad2b378977c57509aa6dbdf02702de3d015f725->leave($__internal_aa385090ff6e478ac1add7152ad2b378977c57509aa6dbdf02702de3d015f725_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
