<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_b033fdbbbb4dab97b1aa6b45ce8db198a6e04fcc0fcd7d7cdcea29c33ae4d1ac extends Twig_Template
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
        $__internal_7cbed8b9080912eb708b93e7be0e75acd071a939e0023cf0e2636ed84b3c1a6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cbed8b9080912eb708b93e7be0e75acd071a939e0023cf0e2636ed84b3c1a6e->enter($__internal_7cbed8b9080912eb708b93e7be0e75acd071a939e0023cf0e2636ed84b3c1a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_6c116d7db251bcc7600e8431479e06a0d338c6ff2cca1a60fc66484e8a1f663a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c116d7db251bcc7600e8431479e06a0d338c6ff2cca1a60fc66484e8a1f663a->enter($__internal_6c116d7db251bcc7600e8431479e06a0d338c6ff2cca1a60fc66484e8a1f663a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_7cbed8b9080912eb708b93e7be0e75acd071a939e0023cf0e2636ed84b3c1a6e->leave($__internal_7cbed8b9080912eb708b93e7be0e75acd071a939e0023cf0e2636ed84b3c1a6e_prof);

        
        $__internal_6c116d7db251bcc7600e8431479e06a0d338c6ff2cca1a60fc66484e8a1f663a->leave($__internal_6c116d7db251bcc7600e8431479e06a0d338c6ff2cca1a60fc66484e8a1f663a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}