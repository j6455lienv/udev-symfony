<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6bfdf1da10bfc6da47af2a12b918c6600c3c0ae99d970f8551ebd614328a4013 extends Twig_Template
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
        $__internal_44b89f21c54a59f6f2dce2666ef1b31017a93568acfde7e8bc054c027fca1ee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44b89f21c54a59f6f2dce2666ef1b31017a93568acfde7e8bc054c027fca1ee1->enter($__internal_44b89f21c54a59f6f2dce2666ef1b31017a93568acfde7e8bc054c027fca1ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_d64e8b021743dad5f4081c51e6581b7a85a4da06446a29ba9116e73ad13137ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d64e8b021743dad5f4081c51e6581b7a85a4da06446a29ba9116e73ad13137ba->enter($__internal_d64e8b021743dad5f4081c51e6581b7a85a4da06446a29ba9116e73ad13137ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_44b89f21c54a59f6f2dce2666ef1b31017a93568acfde7e8bc054c027fca1ee1->leave($__internal_44b89f21c54a59f6f2dce2666ef1b31017a93568acfde7e8bc054c027fca1ee1_prof);

        
        $__internal_d64e8b021743dad5f4081c51e6581b7a85a4da06446a29ba9116e73ad13137ba->leave($__internal_d64e8b021743dad5f4081c51e6581b7a85a4da06446a29ba9116e73ad13137ba_prof);

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
