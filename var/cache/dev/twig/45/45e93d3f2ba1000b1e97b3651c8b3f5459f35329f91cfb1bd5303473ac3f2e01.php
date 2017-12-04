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
        $__internal_94fb09c5be145c49b6e90ae972aadd215b3a5fbbc0573fe063ac2700d8769d38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94fb09c5be145c49b6e90ae972aadd215b3a5fbbc0573fe063ac2700d8769d38->enter($__internal_94fb09c5be145c49b6e90ae972aadd215b3a5fbbc0573fe063ac2700d8769d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_c509489f4d1f4c16666d4942a415ac70a71e3ca606823c8df8d4fd90fe30f51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c509489f4d1f4c16666d4942a415ac70a71e3ca606823c8df8d4fd90fe30f51d->enter($__internal_c509489f4d1f4c16666d4942a415ac70a71e3ca606823c8df8d4fd90fe30f51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_94fb09c5be145c49b6e90ae972aadd215b3a5fbbc0573fe063ac2700d8769d38->leave($__internal_94fb09c5be145c49b6e90ae972aadd215b3a5fbbc0573fe063ac2700d8769d38_prof);

        
        $__internal_c509489f4d1f4c16666d4942a415ac70a71e3ca606823c8df8d4fd90fe30f51d->leave($__internal_c509489f4d1f4c16666d4942a415ac70a71e3ca606823c8df8d4fd90fe30f51d_prof);

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
