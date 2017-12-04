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
        $__internal_6d91f798c10a951350967eaed17d5dea364b2afaa5303b547cf68f6d0d67fc4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d91f798c10a951350967eaed17d5dea364b2afaa5303b547cf68f6d0d67fc4e->enter($__internal_6d91f798c10a951350967eaed17d5dea364b2afaa5303b547cf68f6d0d67fc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_0bd1c5dd6297aa4b697aeb634bfcc4994d82a6fcff040f0089b58e78c8036c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd1c5dd6297aa4b697aeb634bfcc4994d82a6fcff040f0089b58e78c8036c19->enter($__internal_0bd1c5dd6297aa4b697aeb634bfcc4994d82a6fcff040f0089b58e78c8036c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_6d91f798c10a951350967eaed17d5dea364b2afaa5303b547cf68f6d0d67fc4e->leave($__internal_6d91f798c10a951350967eaed17d5dea364b2afaa5303b547cf68f6d0d67fc4e_prof);

        
        $__internal_0bd1c5dd6297aa4b697aeb634bfcc4994d82a6fcff040f0089b58e78c8036c19->leave($__internal_0bd1c5dd6297aa4b697aeb634bfcc4994d82a6fcff040f0089b58e78c8036c19_prof);

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
