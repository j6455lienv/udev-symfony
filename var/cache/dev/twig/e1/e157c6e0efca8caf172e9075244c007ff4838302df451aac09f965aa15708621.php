<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_756d5b6333332be090852efcde8e8a82b0830ce6331ca6a531e51e5247a0aa88 extends Twig_Template
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
        $__internal_77112c2ffaec6a5fd521115abb854178b5ae38c1ad36e7e4657134c41ef1ccd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77112c2ffaec6a5fd521115abb854178b5ae38c1ad36e7e4657134c41ef1ccd8->enter($__internal_77112c2ffaec6a5fd521115abb854178b5ae38c1ad36e7e4657134c41ef1ccd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_f913164257c45eb00f28d6dcb17ea7d0ebde03f1ef19f87e7cf913e9537af650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f913164257c45eb00f28d6dcb17ea7d0ebde03f1ef19f87e7cf913e9537af650->enter($__internal_f913164257c45eb00f28d6dcb17ea7d0ebde03f1ef19f87e7cf913e9537af650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_77112c2ffaec6a5fd521115abb854178b5ae38c1ad36e7e4657134c41ef1ccd8->leave($__internal_77112c2ffaec6a5fd521115abb854178b5ae38c1ad36e7e4657134c41ef1ccd8_prof);

        
        $__internal_f913164257c45eb00f28d6dcb17ea7d0ebde03f1ef19f87e7cf913e9537af650->leave($__internal_f913164257c45eb00f28d6dcb17ea7d0ebde03f1ef19f87e7cf913e9537af650_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
