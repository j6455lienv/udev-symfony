<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8020539636230066ee4f2cdfdbaafef45c1baea671c770ad4575d9ae6da66ab6 extends Twig_Template
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
        $__internal_47e36cb0814bc94dd78ee28cd4c8cdf8dac2d47b933c641851f2b670f548f77f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e36cb0814bc94dd78ee28cd4c8cdf8dac2d47b933c641851f2b670f548f77f->enter($__internal_47e36cb0814bc94dd78ee28cd4c8cdf8dac2d47b933c641851f2b670f548f77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_ae699c73fd87e2ddb8fc44c0f7b9549b7c3030236c90fc9af0a677ea34634a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae699c73fd87e2ddb8fc44c0f7b9549b7c3030236c90fc9af0a677ea34634a82->enter($__internal_ae699c73fd87e2ddb8fc44c0f7b9549b7c3030236c90fc9af0a677ea34634a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_47e36cb0814bc94dd78ee28cd4c8cdf8dac2d47b933c641851f2b670f548f77f->leave($__internal_47e36cb0814bc94dd78ee28cd4c8cdf8dac2d47b933c641851f2b670f548f77f_prof);

        
        $__internal_ae699c73fd87e2ddb8fc44c0f7b9549b7c3030236c90fc9af0a677ea34634a82->leave($__internal_ae699c73fd87e2ddb8fc44c0f7b9549b7c3030236c90fc9af0a677ea34634a82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
