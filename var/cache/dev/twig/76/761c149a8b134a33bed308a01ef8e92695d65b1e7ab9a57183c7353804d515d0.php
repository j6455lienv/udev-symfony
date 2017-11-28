<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_179212be147afe014797e1c0bbb95fbc2a67f4a5b2194afefae039a07181d0cf extends Twig_Template
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
        $__internal_141ed8fe09f323cac5e54e02ce65ff0299107f70d6c513ff3e5fa5e7adf6efc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_141ed8fe09f323cac5e54e02ce65ff0299107f70d6c513ff3e5fa5e7adf6efc6->enter($__internal_141ed8fe09f323cac5e54e02ce65ff0299107f70d6c513ff3e5fa5e7adf6efc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_a4f04f2acc83a707e68dad3771796cba5f0d53528f3294c9abbcf60f58840891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f04f2acc83a707e68dad3771796cba5f0d53528f3294c9abbcf60f58840891->enter($__internal_a4f04f2acc83a707e68dad3771796cba5f0d53528f3294c9abbcf60f58840891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_141ed8fe09f323cac5e54e02ce65ff0299107f70d6c513ff3e5fa5e7adf6efc6->leave($__internal_141ed8fe09f323cac5e54e02ce65ff0299107f70d6c513ff3e5fa5e7adf6efc6_prof);

        
        $__internal_a4f04f2acc83a707e68dad3771796cba5f0d53528f3294c9abbcf60f58840891->leave($__internal_a4f04f2acc83a707e68dad3771796cba5f0d53528f3294c9abbcf60f58840891_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
