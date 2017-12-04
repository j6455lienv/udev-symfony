<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_b0e99f9c1f37c66fa23bc3aa365170fadd4c452d87396c38804f0a7b8a765900 extends Twig_Template
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
        $__internal_7a34b6b1bd59cca3d7388be787932a261eeeb2b494d7ce41a01bf25274791d82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a34b6b1bd59cca3d7388be787932a261eeeb2b494d7ce41a01bf25274791d82->enter($__internal_7a34b6b1bd59cca3d7388be787932a261eeeb2b494d7ce41a01bf25274791d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_3ab2270b93a0e47bdf3dfe4c5f4f187937ab81a70ac0adfa21dd5b2aac7a9e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab2270b93a0e47bdf3dfe4c5f4f187937ab81a70ac0adfa21dd5b2aac7a9e0f->enter($__internal_3ab2270b93a0e47bdf3dfe4c5f4f187937ab81a70ac0adfa21dd5b2aac7a9e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_7a34b6b1bd59cca3d7388be787932a261eeeb2b494d7ce41a01bf25274791d82->leave($__internal_7a34b6b1bd59cca3d7388be787932a261eeeb2b494d7ce41a01bf25274791d82_prof);

        
        $__internal_3ab2270b93a0e47bdf3dfe4c5f4f187937ab81a70ac0adfa21dd5b2aac7a9e0f->leave($__internal_3ab2270b93a0e47bdf3dfe4c5f4f187937ab81a70ac0adfa21dd5b2aac7a9e0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
