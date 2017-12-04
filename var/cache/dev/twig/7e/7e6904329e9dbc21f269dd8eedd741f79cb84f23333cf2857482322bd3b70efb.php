<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_5a9c0daaed49cd18f26d31efb041d82bd171de4e26091a41793a51bb439abfe6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bd20457d575b14925f819b01f246eb64adca9628cdc40f373b90df2c84541ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd20457d575b14925f819b01f246eb64adca9628cdc40f373b90df2c84541ba->enter($__internal_5bd20457d575b14925f819b01f246eb64adca9628cdc40f373b90df2c84541ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_07050024037de18a2e0ee060c6b3f0fe883ff85a0f46a9a8a07aa4ce7bf86db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07050024037de18a2e0ee060c6b3f0fe883ff85a0f46a9a8a07aa4ce7bf86db7->enter($__internal_07050024037de18a2e0ee060c6b3f0fe883ff85a0f46a9a8a07aa4ce7bf86db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5bd20457d575b14925f819b01f246eb64adca9628cdc40f373b90df2c84541ba->leave($__internal_5bd20457d575b14925f819b01f246eb64adca9628cdc40f373b90df2c84541ba_prof);

        
        $__internal_07050024037de18a2e0ee060c6b3f0fe883ff85a0f46a9a8a07aa4ce7bf86db7->leave($__internal_07050024037de18a2e0ee060c6b3f0fe883ff85a0f46a9a8a07aa4ce7bf86db7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fec21e0863291c8a1d2cf56312bc56964584649c409c0c0b3c176f0a97b13585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fec21e0863291c8a1d2cf56312bc56964584649c409c0c0b3c176f0a97b13585->enter($__internal_fec21e0863291c8a1d2cf56312bc56964584649c409c0c0b3c176f0a97b13585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_10827480fb3ed6ee86451ce7709308f15114dd15bdf6fb95cef7862d0e24d10a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10827480fb3ed6ee86451ce7709308f15114dd15bdf6fb95cef7862d0e24d10a->enter($__internal_10827480fb3ed6ee86451ce7709308f15114dd15bdf6fb95cef7862d0e24d10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_10827480fb3ed6ee86451ce7709308f15114dd15bdf6fb95cef7862d0e24d10a->leave($__internal_10827480fb3ed6ee86451ce7709308f15114dd15bdf6fb95cef7862d0e24d10a_prof);

        
        $__internal_fec21e0863291c8a1d2cf56312bc56964584649c409c0c0b3c176f0a97b13585->leave($__internal_fec21e0863291c8a1d2cf56312bc56964584649c409c0c0b3c176f0a97b13585_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
