<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_93847193f56aae43bbfc2e814aa888e7c1737ce6a72df3acc044a9796cb491d4 extends Twig_Template
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
        $__internal_040fd806f18391ea0b35a005ff1a6354c27b5b791f2c454771269b034f52f92c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040fd806f18391ea0b35a005ff1a6354c27b5b791f2c454771269b034f52f92c->enter($__internal_040fd806f18391ea0b35a005ff1a6354c27b5b791f2c454771269b034f52f92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_734fc071fc110e36720c2e2259dbb5ce28e8effa5c9022c79322fbd75af7af47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734fc071fc110e36720c2e2259dbb5ce28e8effa5c9022c79322fbd75af7af47->enter($__internal_734fc071fc110e36720c2e2259dbb5ce28e8effa5c9022c79322fbd75af7af47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_040fd806f18391ea0b35a005ff1a6354c27b5b791f2c454771269b034f52f92c->leave($__internal_040fd806f18391ea0b35a005ff1a6354c27b5b791f2c454771269b034f52f92c_prof);

        
        $__internal_734fc071fc110e36720c2e2259dbb5ce28e8effa5c9022c79322fbd75af7af47->leave($__internal_734fc071fc110e36720c2e2259dbb5ce28e8effa5c9022c79322fbd75af7af47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
