<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4599f3ba6c6fa4e8c3dc357717f7e76ac0261e000440ef63937334e17c46b88c extends Twig_Template
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
        $__internal_297d1b752b2eb8f5090e7cfa110d1c8bdddf5cfc5f68fa1013ae8e5b04b479fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_297d1b752b2eb8f5090e7cfa110d1c8bdddf5cfc5f68fa1013ae8e5b04b479fe->enter($__internal_297d1b752b2eb8f5090e7cfa110d1c8bdddf5cfc5f68fa1013ae8e5b04b479fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_2e41b6b50be5ef0a876672009f48b9d6d695f5867fe9fd6ac02b3ab7ff4e2026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e41b6b50be5ef0a876672009f48b9d6d695f5867fe9fd6ac02b3ab7ff4e2026->enter($__internal_2e41b6b50be5ef0a876672009f48b9d6d695f5867fe9fd6ac02b3ab7ff4e2026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_297d1b752b2eb8f5090e7cfa110d1c8bdddf5cfc5f68fa1013ae8e5b04b479fe->leave($__internal_297d1b752b2eb8f5090e7cfa110d1c8bdddf5cfc5f68fa1013ae8e5b04b479fe_prof);

        
        $__internal_2e41b6b50be5ef0a876672009f48b9d6d695f5867fe9fd6ac02b3ab7ff4e2026->leave($__internal_2e41b6b50be5ef0a876672009f48b9d6d695f5867fe9fd6ac02b3ab7ff4e2026_prof);

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
