<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_51b0e8216ac2c73b4c1cb76e1a7095f88ad561e18463912674799b644c3aa2f5 extends Twig_Template
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
        $__internal_ef3710d8de7c233172b2625efdde83a9a79144467008058a40c78bd5abbefcd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef3710d8de7c233172b2625efdde83a9a79144467008058a40c78bd5abbefcd7->enter($__internal_ef3710d8de7c233172b2625efdde83a9a79144467008058a40c78bd5abbefcd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_4f962e8e6e1dbd14c8408e5495474197ceabcb0427775ec844eb29b0e2a5490e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f962e8e6e1dbd14c8408e5495474197ceabcb0427775ec844eb29b0e2a5490e->enter($__internal_4f962e8e6e1dbd14c8408e5495474197ceabcb0427775ec844eb29b0e2a5490e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_ef3710d8de7c233172b2625efdde83a9a79144467008058a40c78bd5abbefcd7->leave($__internal_ef3710d8de7c233172b2625efdde83a9a79144467008058a40c78bd5abbefcd7_prof);

        
        $__internal_4f962e8e6e1dbd14c8408e5495474197ceabcb0427775ec844eb29b0e2a5490e->leave($__internal_4f962e8e6e1dbd14c8408e5495474197ceabcb0427775ec844eb29b0e2a5490e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
