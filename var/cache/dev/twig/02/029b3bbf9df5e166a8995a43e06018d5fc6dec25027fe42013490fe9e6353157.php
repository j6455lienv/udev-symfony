<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_7110c62800385e2f381d95405bce6516e88a7677b86a14f1ed7df6985426a91e extends Twig_Template
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
        $__internal_0a370b9974eb9cdc32c10ad37a0f6ae8ba0f74dddd17d73e30bf8c892416a16f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a370b9974eb9cdc32c10ad37a0f6ae8ba0f74dddd17d73e30bf8c892416a16f->enter($__internal_0a370b9974eb9cdc32c10ad37a0f6ae8ba0f74dddd17d73e30bf8c892416a16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_00ed5d98ee17fe09f08af0440a52b402fcb1bb4ea81c8035c08d636772f1e9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ed5d98ee17fe09f08af0440a52b402fcb1bb4ea81c8035c08d636772f1e9b0->enter($__internal_00ed5d98ee17fe09f08af0440a52b402fcb1bb4ea81c8035c08d636772f1e9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0a370b9974eb9cdc32c10ad37a0f6ae8ba0f74dddd17d73e30bf8c892416a16f->leave($__internal_0a370b9974eb9cdc32c10ad37a0f6ae8ba0f74dddd17d73e30bf8c892416a16f_prof);

        
        $__internal_00ed5d98ee17fe09f08af0440a52b402fcb1bb4ea81c8035c08d636772f1e9b0->leave($__internal_00ed5d98ee17fe09f08af0440a52b402fcb1bb4ea81c8035c08d636772f1e9b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
