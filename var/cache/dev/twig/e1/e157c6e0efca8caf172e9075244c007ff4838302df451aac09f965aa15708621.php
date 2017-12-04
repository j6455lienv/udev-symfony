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
        $__internal_cb30b343dd188fc39b39a19010e5e5219b949431628d764399f18112d2dc0aa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb30b343dd188fc39b39a19010e5e5219b949431628d764399f18112d2dc0aa3->enter($__internal_cb30b343dd188fc39b39a19010e5e5219b949431628d764399f18112d2dc0aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_75ac642af31ec2aecfe2f495c56fcb18c0943ed91ec3220fe45a17dce1537c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ac642af31ec2aecfe2f495c56fcb18c0943ed91ec3220fe45a17dce1537c24->enter($__internal_75ac642af31ec2aecfe2f495c56fcb18c0943ed91ec3220fe45a17dce1537c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_cb30b343dd188fc39b39a19010e5e5219b949431628d764399f18112d2dc0aa3->leave($__internal_cb30b343dd188fc39b39a19010e5e5219b949431628d764399f18112d2dc0aa3_prof);

        
        $__internal_75ac642af31ec2aecfe2f495c56fcb18c0943ed91ec3220fe45a17dce1537c24->leave($__internal_75ac642af31ec2aecfe2f495c56fcb18c0943ed91ec3220fe45a17dce1537c24_prof);

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
