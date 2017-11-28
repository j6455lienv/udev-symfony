<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_e4fba24289a6062cc528ccbf9699c938455d1f86f795d6cae31b78c704c6058e extends Twig_Template
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
        $__internal_ee44628c9068bc41ef09e39f2e615a8872113aa87a6bd6f60db5479bc1c76cec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee44628c9068bc41ef09e39f2e615a8872113aa87a6bd6f60db5479bc1c76cec->enter($__internal_ee44628c9068bc41ef09e39f2e615a8872113aa87a6bd6f60db5479bc1c76cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_c264569700df8dffa8d95962081a345354d2e8f6a29126fad66623b5800eeeb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c264569700df8dffa8d95962081a345354d2e8f6a29126fad66623b5800eeeb3->enter($__internal_c264569700df8dffa8d95962081a345354d2e8f6a29126fad66623b5800eeeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_ee44628c9068bc41ef09e39f2e615a8872113aa87a6bd6f60db5479bc1c76cec->leave($__internal_ee44628c9068bc41ef09e39f2e615a8872113aa87a6bd6f60db5479bc1c76cec_prof);

        
        $__internal_c264569700df8dffa8d95962081a345354d2e8f6a29126fad66623b5800eeeb3->leave($__internal_c264569700df8dffa8d95962081a345354d2e8f6a29126fad66623b5800eeeb3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
