<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_934487904de7750eae3bb9a36ab55da2f1f0fff30aeaf91e58468f5bfb958b4a extends Twig_Template
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
        $__internal_c72ccadb9c03617b5c9a4e205ce98626ad674c2d12e1f6c278ea678219400180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c72ccadb9c03617b5c9a4e205ce98626ad674c2d12e1f6c278ea678219400180->enter($__internal_c72ccadb9c03617b5c9a4e205ce98626ad674c2d12e1f6c278ea678219400180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_d69d8248fda90417dcc43e6a465641ccbd642e22cd9e375fda0996f2bddc8917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69d8248fda90417dcc43e6a465641ccbd642e22cd9e375fda0996f2bddc8917->enter($__internal_d69d8248fda90417dcc43e6a465641ccbd642e22cd9e375fda0996f2bddc8917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c72ccadb9c03617b5c9a4e205ce98626ad674c2d12e1f6c278ea678219400180->leave($__internal_c72ccadb9c03617b5c9a4e205ce98626ad674c2d12e1f6c278ea678219400180_prof);

        
        $__internal_d69d8248fda90417dcc43e6a465641ccbd642e22cd9e375fda0996f2bddc8917->leave($__internal_d69d8248fda90417dcc43e6a465641ccbd642e22cd9e375fda0996f2bddc8917_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
