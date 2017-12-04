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
        $__internal_2b86dbf70687b2993cac6f68a9d49c8de9b4b0353c9aaa69b7f0340e06dcd0e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b86dbf70687b2993cac6f68a9d49c8de9b4b0353c9aaa69b7f0340e06dcd0e8->enter($__internal_2b86dbf70687b2993cac6f68a9d49c8de9b4b0353c9aaa69b7f0340e06dcd0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_ccdee8b396a22ea7ed92b7f765d43ca707641d39975d5f62a31447e3e547ada8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccdee8b396a22ea7ed92b7f765d43ca707641d39975d5f62a31447e3e547ada8->enter($__internal_ccdee8b396a22ea7ed92b7f765d43ca707641d39975d5f62a31447e3e547ada8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2b86dbf70687b2993cac6f68a9d49c8de9b4b0353c9aaa69b7f0340e06dcd0e8->leave($__internal_2b86dbf70687b2993cac6f68a9d49c8de9b4b0353c9aaa69b7f0340e06dcd0e8_prof);

        
        $__internal_ccdee8b396a22ea7ed92b7f765d43ca707641d39975d5f62a31447e3e547ada8->leave($__internal_ccdee8b396a22ea7ed92b7f765d43ca707641d39975d5f62a31447e3e547ada8_prof);

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
