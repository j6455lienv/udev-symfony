<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a330911f56c1bc4cfcb0c9f400f4a9133388e37e2d87b3fa9841acf0b83f427a extends Twig_Template
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
        $__internal_8b896369f72f934422de1aaf7b919ba81e3f7eb2b702309ce6a327c054a1e30c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b896369f72f934422de1aaf7b919ba81e3f7eb2b702309ce6a327c054a1e30c->enter($__internal_8b896369f72f934422de1aaf7b919ba81e3f7eb2b702309ce6a327c054a1e30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_adde48a720e2df4c979f9b41333d4ccc4fa24f313d3fc1c8ed6ad1f3b3a944af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adde48a720e2df4c979f9b41333d4ccc4fa24f313d3fc1c8ed6ad1f3b3a944af->enter($__internal_adde48a720e2df4c979f9b41333d4ccc4fa24f313d3fc1c8ed6ad1f3b3a944af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_8b896369f72f934422de1aaf7b919ba81e3f7eb2b702309ce6a327c054a1e30c->leave($__internal_8b896369f72f934422de1aaf7b919ba81e3f7eb2b702309ce6a327c054a1e30c_prof);

        
        $__internal_adde48a720e2df4c979f9b41333d4ccc4fa24f313d3fc1c8ed6ad1f3b3a944af->leave($__internal_adde48a720e2df4c979f9b41333d4ccc4fa24f313d3fc1c8ed6ad1f3b3a944af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
