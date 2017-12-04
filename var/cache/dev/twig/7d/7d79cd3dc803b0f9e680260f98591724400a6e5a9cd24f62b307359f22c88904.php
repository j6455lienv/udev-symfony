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
        $__internal_5fd8aebf0499aa0ac5721579f0f482294dab5c55b7744544cf02615ebdcb2545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fd8aebf0499aa0ac5721579f0f482294dab5c55b7744544cf02615ebdcb2545->enter($__internal_5fd8aebf0499aa0ac5721579f0f482294dab5c55b7744544cf02615ebdcb2545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_262e6390d3dfd69786def47c3b1f0901e00afcabe955a5e1d6a847f28199fde5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262e6390d3dfd69786def47c3b1f0901e00afcabe955a5e1d6a847f28199fde5->enter($__internal_262e6390d3dfd69786def47c3b1f0901e00afcabe955a5e1d6a847f28199fde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5fd8aebf0499aa0ac5721579f0f482294dab5c55b7744544cf02615ebdcb2545->leave($__internal_5fd8aebf0499aa0ac5721579f0f482294dab5c55b7744544cf02615ebdcb2545_prof);

        
        $__internal_262e6390d3dfd69786def47c3b1f0901e00afcabe955a5e1d6a847f28199fde5->leave($__internal_262e6390d3dfd69786def47c3b1f0901e00afcabe955a5e1d6a847f28199fde5_prof);

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
