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
        $__internal_4d88e05047bc967a23ca495a53b6195029cf4698267b97451be3b89a683cc084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d88e05047bc967a23ca495a53b6195029cf4698267b97451be3b89a683cc084->enter($__internal_4d88e05047bc967a23ca495a53b6195029cf4698267b97451be3b89a683cc084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_2aa0dfb9d92d1d210d0d4ae37b3dd3085575e0cb40467f7797ff2f130c44c77e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa0dfb9d92d1d210d0d4ae37b3dd3085575e0cb40467f7797ff2f130c44c77e->enter($__internal_2aa0dfb9d92d1d210d0d4ae37b3dd3085575e0cb40467f7797ff2f130c44c77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4d88e05047bc967a23ca495a53b6195029cf4698267b97451be3b89a683cc084->leave($__internal_4d88e05047bc967a23ca495a53b6195029cf4698267b97451be3b89a683cc084_prof);

        
        $__internal_2aa0dfb9d92d1d210d0d4ae37b3dd3085575e0cb40467f7797ff2f130c44c77e->leave($__internal_2aa0dfb9d92d1d210d0d4ae37b3dd3085575e0cb40467f7797ff2f130c44c77e_prof);

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
