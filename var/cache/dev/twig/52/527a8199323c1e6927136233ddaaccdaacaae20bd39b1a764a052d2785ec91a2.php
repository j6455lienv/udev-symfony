<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a83c040aa82e9dba82040090713aabce83812f809a5b02cb017548a89c8ba7c6 extends Twig_Template
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
        $__internal_26f71d0552e036cec1a15e136b51fb97d672b3c19e95cc3c2c3e81b9320627bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f71d0552e036cec1a15e136b51fb97d672b3c19e95cc3c2c3e81b9320627bb->enter($__internal_26f71d0552e036cec1a15e136b51fb97d672b3c19e95cc3c2c3e81b9320627bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_daebae426255370e942be7ea8dc37beb082254e249e0f5ac63c25fd564fe33cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daebae426255370e942be7ea8dc37beb082254e249e0f5ac63c25fd564fe33cf->enter($__internal_daebae426255370e942be7ea8dc37beb082254e249e0f5ac63c25fd564fe33cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_26f71d0552e036cec1a15e136b51fb97d672b3c19e95cc3c2c3e81b9320627bb->leave($__internal_26f71d0552e036cec1a15e136b51fb97d672b3c19e95cc3c2c3e81b9320627bb_prof);

        
        $__internal_daebae426255370e942be7ea8dc37beb082254e249e0f5ac63c25fd564fe33cf->leave($__internal_daebae426255370e942be7ea8dc37beb082254e249e0f5ac63c25fd564fe33cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
