<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ace432049830ea6e1e1861ed1b347820303fb6a3ceefb9bd123763e85145acfe extends Twig_Template
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
        $__internal_2bd6b39dcf34775220351a53b9148bb0fb39f66b6c9b42a9743b7572fee71b81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd6b39dcf34775220351a53b9148bb0fb39f66b6c9b42a9743b7572fee71b81->enter($__internal_2bd6b39dcf34775220351a53b9148bb0fb39f66b6c9b42a9743b7572fee71b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_37c2a94e0f9240178e90499f752edf5d6e63b6100c44cf6df7922dfdd79825f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c2a94e0f9240178e90499f752edf5d6e63b6100c44cf6df7922dfdd79825f3->enter($__internal_37c2a94e0f9240178e90499f752edf5d6e63b6100c44cf6df7922dfdd79825f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2bd6b39dcf34775220351a53b9148bb0fb39f66b6c9b42a9743b7572fee71b81->leave($__internal_2bd6b39dcf34775220351a53b9148bb0fb39f66b6c9b42a9743b7572fee71b81_prof);

        
        $__internal_37c2a94e0f9240178e90499f752edf5d6e63b6100c44cf6df7922dfdd79825f3->leave($__internal_37c2a94e0f9240178e90499f752edf5d6e63b6100c44cf6df7922dfdd79825f3_prof);

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
