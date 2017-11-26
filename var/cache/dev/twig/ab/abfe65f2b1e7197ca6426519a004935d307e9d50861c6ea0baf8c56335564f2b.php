<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9b291cd9f8af7becc3484f51122a5aebd6ca3518cc008668e0c015602566f9e5 extends Twig_Template
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
        $__internal_1a3e57b4bec4556048458a2ae156b1de8054697e2e6d3b7666706b8a0272852d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a3e57b4bec4556048458a2ae156b1de8054697e2e6d3b7666706b8a0272852d->enter($__internal_1a3e57b4bec4556048458a2ae156b1de8054697e2e6d3b7666706b8a0272852d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_4ab6332e4523e1509b71d382188d3c332c45207f1485dba38b62ccb7263ec913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab6332e4523e1509b71d382188d3c332c45207f1485dba38b62ccb7263ec913->enter($__internal_4ab6332e4523e1509b71d382188d3c332c45207f1485dba38b62ccb7263ec913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_1a3e57b4bec4556048458a2ae156b1de8054697e2e6d3b7666706b8a0272852d->leave($__internal_1a3e57b4bec4556048458a2ae156b1de8054697e2e6d3b7666706b8a0272852d_prof);

        
        $__internal_4ab6332e4523e1509b71d382188d3c332c45207f1485dba38b62ccb7263ec913->leave($__internal_4ab6332e4523e1509b71d382188d3c332c45207f1485dba38b62ccb7263ec913_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
