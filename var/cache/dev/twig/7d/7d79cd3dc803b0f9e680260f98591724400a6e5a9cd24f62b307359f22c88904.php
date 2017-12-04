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
        $__internal_74b2f5375a3dbdf9c8cd483a3ef2972c0960a512a83052c005720a36c31e0b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74b2f5375a3dbdf9c8cd483a3ef2972c0960a512a83052c005720a36c31e0b4f->enter($__internal_74b2f5375a3dbdf9c8cd483a3ef2972c0960a512a83052c005720a36c31e0b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_838dcbdae2c9ceca6a10bacb5fb798a8abefc7f5da1f90bfe3e81634c6b6a374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_838dcbdae2c9ceca6a10bacb5fb798a8abefc7f5da1f90bfe3e81634c6b6a374->enter($__internal_838dcbdae2c9ceca6a10bacb5fb798a8abefc7f5da1f90bfe3e81634c6b6a374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_74b2f5375a3dbdf9c8cd483a3ef2972c0960a512a83052c005720a36c31e0b4f->leave($__internal_74b2f5375a3dbdf9c8cd483a3ef2972c0960a512a83052c005720a36c31e0b4f_prof);

        
        $__internal_838dcbdae2c9ceca6a10bacb5fb798a8abefc7f5da1f90bfe3e81634c6b6a374->leave($__internal_838dcbdae2c9ceca6a10bacb5fb798a8abefc7f5da1f90bfe3e81634c6b6a374_prof);

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
