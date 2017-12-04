<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_4c65c2982325a7c3b3a1b20fa93f5d230851179bdd21abaa6932edf1b4a3f65c extends Twig_Template
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
        $__internal_e682eb98bc3c7c33ddfc69b36869a3054d50e21909a864ea14a475ffeaa753b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e682eb98bc3c7c33ddfc69b36869a3054d50e21909a864ea14a475ffeaa753b0->enter($__internal_e682eb98bc3c7c33ddfc69b36869a3054d50e21909a864ea14a475ffeaa753b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a50337d1b4d0e517e9196cdd8e838dbe6103619d239cb6f6a46e483c893e563d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a50337d1b4d0e517e9196cdd8e838dbe6103619d239cb6f6a46e483c893e563d->enter($__internal_a50337d1b4d0e517e9196cdd8e838dbe6103619d239cb6f6a46e483c893e563d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e682eb98bc3c7c33ddfc69b36869a3054d50e21909a864ea14a475ffeaa753b0->leave($__internal_e682eb98bc3c7c33ddfc69b36869a3054d50e21909a864ea14a475ffeaa753b0_prof);

        
        $__internal_a50337d1b4d0e517e9196cdd8e838dbe6103619d239cb6f6a46e483c893e563d->leave($__internal_a50337d1b4d0e517e9196cdd8e838dbe6103619d239cb6f6a46e483c893e563d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
