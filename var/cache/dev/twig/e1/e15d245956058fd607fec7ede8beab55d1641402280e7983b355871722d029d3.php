<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_57a77df7e7c79a89a3cbd49a03940414a35e9f3f586533bd4e527bb2b3e34da4 extends Twig_Template
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
        $__internal_307d7c93cdd8006e678bc7d4609f6da0deb948e1e425177f8b0f5bc51aaa7967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_307d7c93cdd8006e678bc7d4609f6da0deb948e1e425177f8b0f5bc51aaa7967->enter($__internal_307d7c93cdd8006e678bc7d4609f6da0deb948e1e425177f8b0f5bc51aaa7967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_9a5cac10acd388d9aa34a287cdc79986948c9a4e2725096100596044ddba5b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5cac10acd388d9aa34a287cdc79986948c9a4e2725096100596044ddba5b35->enter($__internal_9a5cac10acd388d9aa34a287cdc79986948c9a4e2725096100596044ddba5b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_307d7c93cdd8006e678bc7d4609f6da0deb948e1e425177f8b0f5bc51aaa7967->leave($__internal_307d7c93cdd8006e678bc7d4609f6da0deb948e1e425177f8b0f5bc51aaa7967_prof);

        
        $__internal_9a5cac10acd388d9aa34a287cdc79986948c9a4e2725096100596044ddba5b35->leave($__internal_9a5cac10acd388d9aa34a287cdc79986948c9a4e2725096100596044ddba5b35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
