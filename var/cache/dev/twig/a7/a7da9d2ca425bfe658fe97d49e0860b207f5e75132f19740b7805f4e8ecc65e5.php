<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_1a37618efb58b6bb9b230a34a82180c27dab6d046af4d0bbd1d9b6b5f0adf055 extends Twig_Template
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
        $__internal_a1e6d501def8ed3aa8e33f5383ce41c471a0c878575250bafbcc0c6b2e681cb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e6d501def8ed3aa8e33f5383ce41c471a0c878575250bafbcc0c6b2e681cb9->enter($__internal_a1e6d501def8ed3aa8e33f5383ce41c471a0c878575250bafbcc0c6b2e681cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_387c81404e9fdab371e0746faf19a6afdf8b3b73ba3e9fef1ea9335c6147a71b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387c81404e9fdab371e0746faf19a6afdf8b3b73ba3e9fef1ea9335c6147a71b->enter($__internal_387c81404e9fdab371e0746faf19a6afdf8b3b73ba3e9fef1ea9335c6147a71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a1e6d501def8ed3aa8e33f5383ce41c471a0c878575250bafbcc0c6b2e681cb9->leave($__internal_a1e6d501def8ed3aa8e33f5383ce41c471a0c878575250bafbcc0c6b2e681cb9_prof);

        
        $__internal_387c81404e9fdab371e0746faf19a6afdf8b3b73ba3e9fef1ea9335c6147a71b->leave($__internal_387c81404e9fdab371e0746faf19a6afdf8b3b73ba3e9fef1ea9335c6147a71b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
