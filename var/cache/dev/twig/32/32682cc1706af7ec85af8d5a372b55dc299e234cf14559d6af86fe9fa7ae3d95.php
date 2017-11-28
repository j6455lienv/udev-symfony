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
        $__internal_c66fc2857b4ee1e486fc082f261499090f73f2e03a78e17e13ec069a6875f730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c66fc2857b4ee1e486fc082f261499090f73f2e03a78e17e13ec069a6875f730->enter($__internal_c66fc2857b4ee1e486fc082f261499090f73f2e03a78e17e13ec069a6875f730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_048b72cd1539eb49bbf67e8e6257ae0706e76d5a968b5b5b95d5b775dd6edbbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_048b72cd1539eb49bbf67e8e6257ae0706e76d5a968b5b5b95d5b775dd6edbbf->enter($__internal_048b72cd1539eb49bbf67e8e6257ae0706e76d5a968b5b5b95d5b775dd6edbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c66fc2857b4ee1e486fc082f261499090f73f2e03a78e17e13ec069a6875f730->leave($__internal_c66fc2857b4ee1e486fc082f261499090f73f2e03a78e17e13ec069a6875f730_prof);

        
        $__internal_048b72cd1539eb49bbf67e8e6257ae0706e76d5a968b5b5b95d5b775dd6edbbf->leave($__internal_048b72cd1539eb49bbf67e8e6257ae0706e76d5a968b5b5b95d5b775dd6edbbf_prof);

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
