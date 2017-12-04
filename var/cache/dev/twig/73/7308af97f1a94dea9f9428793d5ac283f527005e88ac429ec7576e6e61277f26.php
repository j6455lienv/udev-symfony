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
        $__internal_f686b593d1b9df1a53c150308154bd1ac85402bedd066de304d3bd158e865f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f686b593d1b9df1a53c150308154bd1ac85402bedd066de304d3bd158e865f41->enter($__internal_f686b593d1b9df1a53c150308154bd1ac85402bedd066de304d3bd158e865f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_9d9f6cd2f9232868778b3f04ee185d188bea7bc4594a394d7c93fd762c3c85f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d9f6cd2f9232868778b3f04ee185d188bea7bc4594a394d7c93fd762c3c85f3->enter($__internal_9d9f6cd2f9232868778b3f04ee185d188bea7bc4594a394d7c93fd762c3c85f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f686b593d1b9df1a53c150308154bd1ac85402bedd066de304d3bd158e865f41->leave($__internal_f686b593d1b9df1a53c150308154bd1ac85402bedd066de304d3bd158e865f41_prof);

        
        $__internal_9d9f6cd2f9232868778b3f04ee185d188bea7bc4594a394d7c93fd762c3c85f3->leave($__internal_9d9f6cd2f9232868778b3f04ee185d188bea7bc4594a394d7c93fd762c3c85f3_prof);

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
