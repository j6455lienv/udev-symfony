<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c9c6a4c347f210c1b9f9595141e6d014f2e49b4d298470bb52eefab945bcdf56 extends Twig_Template
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
        $__internal_e121ba48d07baa8350609484f1c183a26d8ccb11b3e520e13ba1690120680631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e121ba48d07baa8350609484f1c183a26d8ccb11b3e520e13ba1690120680631->enter($__internal_e121ba48d07baa8350609484f1c183a26d8ccb11b3e520e13ba1690120680631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_c0cff037f0aa23ee4f38dd2af48374bdc6b142ac6d3b14ed2a86f5f182fda214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0cff037f0aa23ee4f38dd2af48374bdc6b142ac6d3b14ed2a86f5f182fda214->enter($__internal_c0cff037f0aa23ee4f38dd2af48374bdc6b142ac6d3b14ed2a86f5f182fda214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e121ba48d07baa8350609484f1c183a26d8ccb11b3e520e13ba1690120680631->leave($__internal_e121ba48d07baa8350609484f1c183a26d8ccb11b3e520e13ba1690120680631_prof);

        
        $__internal_c0cff037f0aa23ee4f38dd2af48374bdc6b142ac6d3b14ed2a86f5f182fda214->leave($__internal_c0cff037f0aa23ee4f38dd2af48374bdc6b142ac6d3b14ed2a86f5f182fda214_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
