<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_2bec3815133dbdfb9c8ea78f45a953f0df37b976cb9668c04d9908bab093f9af extends Twig_Template
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
        $__internal_19bb2dd4c214919c7d8d7b4f0e939efe61c70a16093e49cb195ee472adb3eec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19bb2dd4c214919c7d8d7b4f0e939efe61c70a16093e49cb195ee472adb3eec1->enter($__internal_19bb2dd4c214919c7d8d7b4f0e939efe61c70a16093e49cb195ee472adb3eec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_219d60cbfe25d7bfa4e89af4c473705bba7a46e5fd313631e45f79221a078bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219d60cbfe25d7bfa4e89af4c473705bba7a46e5fd313631e45f79221a078bdf->enter($__internal_219d60cbfe25d7bfa4e89af4c473705bba7a46e5fd313631e45f79221a078bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_19bb2dd4c214919c7d8d7b4f0e939efe61c70a16093e49cb195ee472adb3eec1->leave($__internal_19bb2dd4c214919c7d8d7b4f0e939efe61c70a16093e49cb195ee472adb3eec1_prof);

        
        $__internal_219d60cbfe25d7bfa4e89af4c473705bba7a46e5fd313631e45f79221a078bdf->leave($__internal_219d60cbfe25d7bfa4e89af4c473705bba7a46e5fd313631e45f79221a078bdf_prof);

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
