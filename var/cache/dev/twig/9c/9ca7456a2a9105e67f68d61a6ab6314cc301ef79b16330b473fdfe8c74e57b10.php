<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_66869ba7eff9fd715468a31dfed603debc51a886aad83e18551ac236ba3e16e9 extends Twig_Template
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
        $__internal_190a739bc9c29b042c9d1365b10cea7b9f0cdd568b3f6d70a4374ccf86c75b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_190a739bc9c29b042c9d1365b10cea7b9f0cdd568b3f6d70a4374ccf86c75b4f->enter($__internal_190a739bc9c29b042c9d1365b10cea7b9f0cdd568b3f6d70a4374ccf86c75b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_a0b779b6461e03766aadbf5a324185ac557180e7ba6e66fd17c0accb71bf5f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b779b6461e03766aadbf5a324185ac557180e7ba6e66fd17c0accb71bf5f6d->enter($__internal_a0b779b6461e03766aadbf5a324185ac557180e7ba6e66fd17c0accb71bf5f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_190a739bc9c29b042c9d1365b10cea7b9f0cdd568b3f6d70a4374ccf86c75b4f->leave($__internal_190a739bc9c29b042c9d1365b10cea7b9f0cdd568b3f6d70a4374ccf86c75b4f_prof);

        
        $__internal_a0b779b6461e03766aadbf5a324185ac557180e7ba6e66fd17c0accb71bf5f6d->leave($__internal_a0b779b6461e03766aadbf5a324185ac557180e7ba6e66fd17c0accb71bf5f6d_prof);

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
