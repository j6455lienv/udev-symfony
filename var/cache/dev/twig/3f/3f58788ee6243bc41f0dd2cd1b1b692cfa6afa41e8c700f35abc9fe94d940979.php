<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_38c8ddcbeb671d5f7a2cbe9b3c36d02aa8c8e506a0164606d3d0d4a5a9ef8025 extends Twig_Template
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
        $__internal_d8ac979365c295812cb9e9b633479c42515ca12d27d91ef1b0aee15fa8268a36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8ac979365c295812cb9e9b633479c42515ca12d27d91ef1b0aee15fa8268a36->enter($__internal_d8ac979365c295812cb9e9b633479c42515ca12d27d91ef1b0aee15fa8268a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_1ac53f1046c86106429352ee9233bb0dbd0c908cb7e4bd2c8083761a91ee0c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac53f1046c86106429352ee9233bb0dbd0c908cb7e4bd2c8083761a91ee0c5f->enter($__internal_1ac53f1046c86106429352ee9233bb0dbd0c908cb7e4bd2c8083761a91ee0c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_d8ac979365c295812cb9e9b633479c42515ca12d27d91ef1b0aee15fa8268a36->leave($__internal_d8ac979365c295812cb9e9b633479c42515ca12d27d91ef1b0aee15fa8268a36_prof);

        
        $__internal_1ac53f1046c86106429352ee9233bb0dbd0c908cb7e4bd2c8083761a91ee0c5f->leave($__internal_1ac53f1046c86106429352ee9233bb0dbd0c908cb7e4bd2c8083761a91ee0c5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
