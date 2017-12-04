<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_8283d9b075bf53ba51fc539591e4a394def2ceb310a5df17019527938515efb0 extends Twig_Template
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
        $__internal_4237f2c895a364fb38319047712d55cf9041c2c154f25a6de9d90d8f69ade78e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4237f2c895a364fb38319047712d55cf9041c2c154f25a6de9d90d8f69ade78e->enter($__internal_4237f2c895a364fb38319047712d55cf9041c2c154f25a6de9d90d8f69ade78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_c7553e9c2de19ebab721662426eec08eb4c40f2004bf91b8a04e1e5fd7a861ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7553e9c2de19ebab721662426eec08eb4c40f2004bf91b8a04e1e5fd7a861ca->enter($__internal_c7553e9c2de19ebab721662426eec08eb4c40f2004bf91b8a04e1e5fd7a861ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_4237f2c895a364fb38319047712d55cf9041c2c154f25a6de9d90d8f69ade78e->leave($__internal_4237f2c895a364fb38319047712d55cf9041c2c154f25a6de9d90d8f69ade78e_prof);

        
        $__internal_c7553e9c2de19ebab721662426eec08eb4c40f2004bf91b8a04e1e5fd7a861ca->leave($__internal_c7553e9c2de19ebab721662426eec08eb4c40f2004bf91b8a04e1e5fd7a861ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
