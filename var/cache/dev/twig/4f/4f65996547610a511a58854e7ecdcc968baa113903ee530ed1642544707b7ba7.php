<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_baf0b68e08d6a6b0e58acee131c9bd68f58ae1f7c3b0453b3699a1416609b8f7 extends Twig_Template
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
        $__internal_7c881e0555ddc31fe4534995f6bb63d4da51f0f2d12e0c617708e205ace9ba9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c881e0555ddc31fe4534995f6bb63d4da51f0f2d12e0c617708e205ace9ba9d->enter($__internal_7c881e0555ddc31fe4534995f6bb63d4da51f0f2d12e0c617708e205ace9ba9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_bf2b00e08317dbbb98e5cb640a67ff8b3275ea02bc9b99c0c648317aefaf441d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2b00e08317dbbb98e5cb640a67ff8b3275ea02bc9b99c0c648317aefaf441d->enter($__internal_bf2b00e08317dbbb98e5cb640a67ff8b3275ea02bc9b99c0c648317aefaf441d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_7c881e0555ddc31fe4534995f6bb63d4da51f0f2d12e0c617708e205ace9ba9d->leave($__internal_7c881e0555ddc31fe4534995f6bb63d4da51f0f2d12e0c617708e205ace9ba9d_prof);

        
        $__internal_bf2b00e08317dbbb98e5cb640a67ff8b3275ea02bc9b99c0c648317aefaf441d->leave($__internal_bf2b00e08317dbbb98e5cb640a67ff8b3275ea02bc9b99c0c648317aefaf441d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
