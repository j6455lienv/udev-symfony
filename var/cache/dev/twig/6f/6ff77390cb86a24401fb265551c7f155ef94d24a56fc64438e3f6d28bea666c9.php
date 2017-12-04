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
        $__internal_498df58196b0616b16f2dd04d0cee572523aa3e6c37b3c5143486c7c2ba582e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_498df58196b0616b16f2dd04d0cee572523aa3e6c37b3c5143486c7c2ba582e0->enter($__internal_498df58196b0616b16f2dd04d0cee572523aa3e6c37b3c5143486c7c2ba582e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_3f81cdca682624d2496ee1e1e03fced8a6bb1f234c091edda6a05c3bd3f24701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f81cdca682624d2496ee1e1e03fced8a6bb1f234c091edda6a05c3bd3f24701->enter($__internal_3f81cdca682624d2496ee1e1e03fced8a6bb1f234c091edda6a05c3bd3f24701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_498df58196b0616b16f2dd04d0cee572523aa3e6c37b3c5143486c7c2ba582e0->leave($__internal_498df58196b0616b16f2dd04d0cee572523aa3e6c37b3c5143486c7c2ba582e0_prof);

        
        $__internal_3f81cdca682624d2496ee1e1e03fced8a6bb1f234c091edda6a05c3bd3f24701->leave($__internal_3f81cdca682624d2496ee1e1e03fced8a6bb1f234c091edda6a05c3bd3f24701_prof);

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
