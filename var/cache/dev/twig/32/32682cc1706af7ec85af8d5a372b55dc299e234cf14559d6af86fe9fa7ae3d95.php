<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0362041fa34014124a6e42e1ed17fc18d71befda619d477dab4a877c5ae96b2d extends Twig_Template
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
        $__internal_7db1276ae9dbf1d66d2aebe8cfa6b30b88c40e592aa59feab6f84b6706694bc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7db1276ae9dbf1d66d2aebe8cfa6b30b88c40e592aa59feab6f84b6706694bc9->enter($__internal_7db1276ae9dbf1d66d2aebe8cfa6b30b88c40e592aa59feab6f84b6706694bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_3711855f3312887ad05956a12dc1e0fe72796e4341affc109bde4995a2d9e88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3711855f3312887ad05956a12dc1e0fe72796e4341affc109bde4995a2d9e88f->enter($__internal_3711855f3312887ad05956a12dc1e0fe72796e4341affc109bde4995a2d9e88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7db1276ae9dbf1d66d2aebe8cfa6b30b88c40e592aa59feab6f84b6706694bc9->leave($__internal_7db1276ae9dbf1d66d2aebe8cfa6b30b88c40e592aa59feab6f84b6706694bc9_prof);

        
        $__internal_3711855f3312887ad05956a12dc1e0fe72796e4341affc109bde4995a2d9e88f->leave($__internal_3711855f3312887ad05956a12dc1e0fe72796e4341affc109bde4995a2d9e88f_prof);

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
