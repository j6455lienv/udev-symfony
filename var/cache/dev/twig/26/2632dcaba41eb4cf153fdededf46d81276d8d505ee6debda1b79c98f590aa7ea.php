<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_3ff00fc5ec43e8f27ca68de300623ac53ce6bfaba7ff6caa3011762cb4140693 extends Twig_Template
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
        $__internal_dd0fc2defb6bd78cdd07d9441144d750614e4bc29611f1d9c2ec674311450bbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd0fc2defb6bd78cdd07d9441144d750614e4bc29611f1d9c2ec674311450bbc->enter($__internal_dd0fc2defb6bd78cdd07d9441144d750614e4bc29611f1d9c2ec674311450bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_21d756f2e6ac7a54fd87161b5707b9917555b49f0379addd979d894dc851d54b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d756f2e6ac7a54fd87161b5707b9917555b49f0379addd979d894dc851d54b->enter($__internal_21d756f2e6ac7a54fd87161b5707b9917555b49f0379addd979d894dc851d54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dd0fc2defb6bd78cdd07d9441144d750614e4bc29611f1d9c2ec674311450bbc->leave($__internal_dd0fc2defb6bd78cdd07d9441144d750614e4bc29611f1d9c2ec674311450bbc_prof);

        
        $__internal_21d756f2e6ac7a54fd87161b5707b9917555b49f0379addd979d894dc851d54b->leave($__internal_21d756f2e6ac7a54fd87161b5707b9917555b49f0379addd979d894dc851d54b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
