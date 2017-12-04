<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_e4fba24289a6062cc528ccbf9699c938455d1f86f795d6cae31b78c704c6058e extends Twig_Template
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
        $__internal_d2676877867c2a55b3f3e5539f3f9b853b4bb661f9d67919aec8dc267965e26c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2676877867c2a55b3f3e5539f3f9b853b4bb661f9d67919aec8dc267965e26c->enter($__internal_d2676877867c2a55b3f3e5539f3f9b853b4bb661f9d67919aec8dc267965e26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_7c55148cebcdaf638467e9ab3e6268e75510076e811fd8f2295636786e1fce0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c55148cebcdaf638467e9ab3e6268e75510076e811fd8f2295636786e1fce0f->enter($__internal_7c55148cebcdaf638467e9ab3e6268e75510076e811fd8f2295636786e1fce0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_d2676877867c2a55b3f3e5539f3f9b853b4bb661f9d67919aec8dc267965e26c->leave($__internal_d2676877867c2a55b3f3e5539f3f9b853b4bb661f9d67919aec8dc267965e26c_prof);

        
        $__internal_7c55148cebcdaf638467e9ab3e6268e75510076e811fd8f2295636786e1fce0f->leave($__internal_7c55148cebcdaf638467e9ab3e6268e75510076e811fd8f2295636786e1fce0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
