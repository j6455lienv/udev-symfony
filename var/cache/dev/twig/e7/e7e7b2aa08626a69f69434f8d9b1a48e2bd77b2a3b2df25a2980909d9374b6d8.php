<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f64a4724956a2caf00c03cb76209f1b2b2d3a075757fb12e13f10d9667d15295 extends Twig_Template
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
        $__internal_c397fc148a06fd039b801de8f9c7708db81fc246882617c99250bd1129b42b20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c397fc148a06fd039b801de8f9c7708db81fc246882617c99250bd1129b42b20->enter($__internal_c397fc148a06fd039b801de8f9c7708db81fc246882617c99250bd1129b42b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_96bb29e3e284cd597c5f6075fdef37f5fad6bd757bd8cd362e38cfffe703f372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96bb29e3e284cd597c5f6075fdef37f5fad6bd757bd8cd362e38cfffe703f372->enter($__internal_96bb29e3e284cd597c5f6075fdef37f5fad6bd757bd8cd362e38cfffe703f372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c397fc148a06fd039b801de8f9c7708db81fc246882617c99250bd1129b42b20->leave($__internal_c397fc148a06fd039b801de8f9c7708db81fc246882617c99250bd1129b42b20_prof);

        
        $__internal_96bb29e3e284cd597c5f6075fdef37f5fad6bd757bd8cd362e38cfffe703f372->leave($__internal_96bb29e3e284cd597c5f6075fdef37f5fad6bd757bd8cd362e38cfffe703f372_prof);

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
