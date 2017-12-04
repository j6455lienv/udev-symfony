<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_3c519237ff2029c48b04389cc33069f60afe66ee48e1b4e3736f4fc6b756b0cd extends Twig_Template
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
        $__internal_92f4e71591ab078e1cb91648d727152204e0c96587b10c09aab6baa6689b6f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92f4e71591ab078e1cb91648d727152204e0c96587b10c09aab6baa6689b6f15->enter($__internal_92f4e71591ab078e1cb91648d727152204e0c96587b10c09aab6baa6689b6f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_6f2a8dee4a01aa743a3a787ca68973f5eec8a9403c214262fb1f54ff200e2052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f2a8dee4a01aa743a3a787ca68973f5eec8a9403c214262fb1f54ff200e2052->enter($__internal_6f2a8dee4a01aa743a3a787ca68973f5eec8a9403c214262fb1f54ff200e2052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_92f4e71591ab078e1cb91648d727152204e0c96587b10c09aab6baa6689b6f15->leave($__internal_92f4e71591ab078e1cb91648d727152204e0c96587b10c09aab6baa6689b6f15_prof);

        
        $__internal_6f2a8dee4a01aa743a3a787ca68973f5eec8a9403c214262fb1f54ff200e2052->leave($__internal_6f2a8dee4a01aa743a3a787ca68973f5eec8a9403c214262fb1f54ff200e2052_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
