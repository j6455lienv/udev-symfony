<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_085b459b312750b6db428ffb7282578a3fcd33c4cb8013c538975eaf801febc6 extends Twig_Template
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
        $__internal_0690da4da1c6691c06d3415c087f354969ed52f235f7a871dd0d147eabf1a9d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0690da4da1c6691c06d3415c087f354969ed52f235f7a871dd0d147eabf1a9d3->enter($__internal_0690da4da1c6691c06d3415c087f354969ed52f235f7a871dd0d147eabf1a9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_1931e19e048a6e08d02d12238628bb8602538ae4069743cc98edb7b8d450e27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1931e19e048a6e08d02d12238628bb8602538ae4069743cc98edb7b8d450e27f->enter($__internal_1931e19e048a6e08d02d12238628bb8602538ae4069743cc98edb7b8d450e27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0690da4da1c6691c06d3415c087f354969ed52f235f7a871dd0d147eabf1a9d3->leave($__internal_0690da4da1c6691c06d3415c087f354969ed52f235f7a871dd0d147eabf1a9d3_prof);

        
        $__internal_1931e19e048a6e08d02d12238628bb8602538ae4069743cc98edb7b8d450e27f->leave($__internal_1931e19e048a6e08d02d12238628bb8602538ae4069743cc98edb7b8d450e27f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
