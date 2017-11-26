<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_92d09a900be8462e5dc42f917e0534283c8e46401f961a7f9ef3b44326e9cbb1 extends Twig_Template
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
        $__internal_af18afa88fe468669b1e15b755a9ef438174cb8f27a9865b132e04ca09e0d997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af18afa88fe468669b1e15b755a9ef438174cb8f27a9865b132e04ca09e0d997->enter($__internal_af18afa88fe468669b1e15b755a9ef438174cb8f27a9865b132e04ca09e0d997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_34f71062c051a7f77706de799680efba22270ec6289f7d0c8e6a52d46e2b4b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34f71062c051a7f77706de799680efba22270ec6289f7d0c8e6a52d46e2b4b9b->enter($__internal_34f71062c051a7f77706de799680efba22270ec6289f7d0c8e6a52d46e2b4b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_af18afa88fe468669b1e15b755a9ef438174cb8f27a9865b132e04ca09e0d997->leave($__internal_af18afa88fe468669b1e15b755a9ef438174cb8f27a9865b132e04ca09e0d997_prof);

        
        $__internal_34f71062c051a7f77706de799680efba22270ec6289f7d0c8e6a52d46e2b4b9b->leave($__internal_34f71062c051a7f77706de799680efba22270ec6289f7d0c8e6a52d46e2b4b9b_prof);

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
