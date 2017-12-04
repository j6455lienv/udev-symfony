<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b3e30b3c01d0af2193f6a19f3eb0b34eb06b8bf4be035ab150bd74712a27e897 extends Twig_Template
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
        $__internal_46ed8df70d99e9571ed47fc135061a8561158823bf2189351b00608e180d718f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46ed8df70d99e9571ed47fc135061a8561158823bf2189351b00608e180d718f->enter($__internal_46ed8df70d99e9571ed47fc135061a8561158823bf2189351b00608e180d718f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_cfac4586d905b24f0dcdd0c09a5f1cbcbcd090be0891dda848ca0009cbd79e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfac4586d905b24f0dcdd0c09a5f1cbcbcd090be0891dda848ca0009cbd79e3d->enter($__internal_cfac4586d905b24f0dcdd0c09a5f1cbcbcd090be0891dda848ca0009cbd79e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_46ed8df70d99e9571ed47fc135061a8561158823bf2189351b00608e180d718f->leave($__internal_46ed8df70d99e9571ed47fc135061a8561158823bf2189351b00608e180d718f_prof);

        
        $__internal_cfac4586d905b24f0dcdd0c09a5f1cbcbcd090be0891dda848ca0009cbd79e3d->leave($__internal_cfac4586d905b24f0dcdd0c09a5f1cbcbcd090be0891dda848ca0009cbd79e3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
