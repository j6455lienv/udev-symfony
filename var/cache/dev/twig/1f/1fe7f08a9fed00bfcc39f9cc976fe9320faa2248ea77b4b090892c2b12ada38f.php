<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3fa16428e705fb4d6a5f2b0f7be4675e40404e7fba5397215b9b82048b68f139 extends Twig_Template
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
        $__internal_84237b752be7d301258f23d08669e1e530a7679971861180cbc6b960f7e1a7c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84237b752be7d301258f23d08669e1e530a7679971861180cbc6b960f7e1a7c8->enter($__internal_84237b752be7d301258f23d08669e1e530a7679971861180cbc6b960f7e1a7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_fd33feb9f13d3fbf7875ad62850055e470211ee757a994b67849c7ad80b45585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd33feb9f13d3fbf7875ad62850055e470211ee757a994b67849c7ad80b45585->enter($__internal_fd33feb9f13d3fbf7875ad62850055e470211ee757a994b67849c7ad80b45585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_84237b752be7d301258f23d08669e1e530a7679971861180cbc6b960f7e1a7c8->leave($__internal_84237b752be7d301258f23d08669e1e530a7679971861180cbc6b960f7e1a7c8_prof);

        
        $__internal_fd33feb9f13d3fbf7875ad62850055e470211ee757a994b67849c7ad80b45585->leave($__internal_fd33feb9f13d3fbf7875ad62850055e470211ee757a994b67849c7ad80b45585_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
