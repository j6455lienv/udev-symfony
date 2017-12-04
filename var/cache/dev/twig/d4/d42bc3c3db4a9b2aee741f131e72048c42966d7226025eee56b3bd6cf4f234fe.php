<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d32171687c3dc7d3ecdc1dd23b9929237c8a21a4f54d9954b9f010133676c148 extends Twig_Template
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
        $__internal_77f02932423734d28c7be4232399a0389e67d20c5382c7fbb919c2ddd3e7bcc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f02932423734d28c7be4232399a0389e67d20c5382c7fbb919c2ddd3e7bcc0->enter($__internal_77f02932423734d28c7be4232399a0389e67d20c5382c7fbb919c2ddd3e7bcc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f0f44aee74e2609e91e46433239786538ce35e5d6037ce7742a1a28286777f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f44aee74e2609e91e46433239786538ce35e5d6037ce7742a1a28286777f83->enter($__internal_f0f44aee74e2609e91e46433239786538ce35e5d6037ce7742a1a28286777f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_77f02932423734d28c7be4232399a0389e67d20c5382c7fbb919c2ddd3e7bcc0->leave($__internal_77f02932423734d28c7be4232399a0389e67d20c5382c7fbb919c2ddd3e7bcc0_prof);

        
        $__internal_f0f44aee74e2609e91e46433239786538ce35e5d6037ce7742a1a28286777f83->leave($__internal_f0f44aee74e2609e91e46433239786538ce35e5d6037ce7742a1a28286777f83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
