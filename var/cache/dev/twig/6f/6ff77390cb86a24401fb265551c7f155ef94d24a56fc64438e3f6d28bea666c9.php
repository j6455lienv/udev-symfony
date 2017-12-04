<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9dd9376e6dac90ca58557e44abdea8260d3cf4be6da700d43abf5ac600b688c9 extends Twig_Template
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
        $__internal_1a1b6fcb160d39542524e4d3b01cfebd33e04b43b55e9d04bfbf65e0afb11900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a1b6fcb160d39542524e4d3b01cfebd33e04b43b55e9d04bfbf65e0afb11900->enter($__internal_1a1b6fcb160d39542524e4d3b01cfebd33e04b43b55e9d04bfbf65e0afb11900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_ff6764543e6495b6fc744d2b548949da71eb749901d336d24824d5c511f16515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6764543e6495b6fc744d2b548949da71eb749901d336d24824d5c511f16515->enter($__internal_ff6764543e6495b6fc744d2b548949da71eb749901d336d24824d5c511f16515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_1a1b6fcb160d39542524e4d3b01cfebd33e04b43b55e9d04bfbf65e0afb11900->leave($__internal_1a1b6fcb160d39542524e4d3b01cfebd33e04b43b55e9d04bfbf65e0afb11900_prof);

        
        $__internal_ff6764543e6495b6fc744d2b548949da71eb749901d336d24824d5c511f16515->leave($__internal_ff6764543e6495b6fc744d2b548949da71eb749901d336d24824d5c511f16515_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
