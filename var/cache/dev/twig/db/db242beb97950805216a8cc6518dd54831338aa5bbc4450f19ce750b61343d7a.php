<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_88449e4ccb354e7bfac4c2469cea2e131655cced702d41af3fec307ca09e8e91 extends Twig_Template
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
        $__internal_1a4fd385560b402b539535e56367aff82733c10c42010aa8b4c7bc55195d4bc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a4fd385560b402b539535e56367aff82733c10c42010aa8b4c7bc55195d4bc8->enter($__internal_1a4fd385560b402b539535e56367aff82733c10c42010aa8b4c7bc55195d4bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_280a69945e17f0697acf69ae8bea5ea6d7ac04648eb200f0bfddd6eecebd1f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280a69945e17f0697acf69ae8bea5ea6d7ac04648eb200f0bfddd6eecebd1f4a->enter($__internal_280a69945e17f0697acf69ae8bea5ea6d7ac04648eb200f0bfddd6eecebd1f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1a4fd385560b402b539535e56367aff82733c10c42010aa8b4c7bc55195d4bc8->leave($__internal_1a4fd385560b402b539535e56367aff82733c10c42010aa8b4c7bc55195d4bc8_prof);

        
        $__internal_280a69945e17f0697acf69ae8bea5ea6d7ac04648eb200f0bfddd6eecebd1f4a->leave($__internal_280a69945e17f0697acf69ae8bea5ea6d7ac04648eb200f0bfddd6eecebd1f4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
