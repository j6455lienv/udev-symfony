<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_7110c62800385e2f381d95405bce6516e88a7677b86a14f1ed7df6985426a91e extends Twig_Template
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
        $__internal_ece0b21e5dd95504cfc3602b3003ca2f770064851614264541fdc04657a001b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ece0b21e5dd95504cfc3602b3003ca2f770064851614264541fdc04657a001b1->enter($__internal_ece0b21e5dd95504cfc3602b3003ca2f770064851614264541fdc04657a001b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_0e34980222c669d5a592ec9e22ba054f69a5e991cf4160ecd3d8c2d6e5fc98de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e34980222c669d5a592ec9e22ba054f69a5e991cf4160ecd3d8c2d6e5fc98de->enter($__internal_0e34980222c669d5a592ec9e22ba054f69a5e991cf4160ecd3d8c2d6e5fc98de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ece0b21e5dd95504cfc3602b3003ca2f770064851614264541fdc04657a001b1->leave($__internal_ece0b21e5dd95504cfc3602b3003ca2f770064851614264541fdc04657a001b1_prof);

        
        $__internal_0e34980222c669d5a592ec9e22ba054f69a5e991cf4160ecd3d8c2d6e5fc98de->leave($__internal_0e34980222c669d5a592ec9e22ba054f69a5e991cf4160ecd3d8c2d6e5fc98de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
