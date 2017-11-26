<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d80baaa5f80039075de3c8b09268e471576130ab2c48da65fbc77fd0667ee725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d80baaa5f80039075de3c8b09268e471576130ab2c48da65fbc77fd0667ee725->enter($__internal_d80baaa5f80039075de3c8b09268e471576130ab2c48da65fbc77fd0667ee725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_7ffb22a495d97899b633356a247d78a226949d9c24b05acc7c6a1200c74660f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ffb22a495d97899b633356a247d78a226949d9c24b05acc7c6a1200c74660f6->enter($__internal_7ffb22a495d97899b633356a247d78a226949d9c24b05acc7c6a1200c74660f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d80baaa5f80039075de3c8b09268e471576130ab2c48da65fbc77fd0667ee725->leave($__internal_d80baaa5f80039075de3c8b09268e471576130ab2c48da65fbc77fd0667ee725_prof);

        
        $__internal_7ffb22a495d97899b633356a247d78a226949d9c24b05acc7c6a1200c74660f6->leave($__internal_7ffb22a495d97899b633356a247d78a226949d9c24b05acc7c6a1200c74660f6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7dfa34f27f213e59d60450f76d1cfe8eab7f012db6ad9f0b1286c9c7eca4cb35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dfa34f27f213e59d60450f76d1cfe8eab7f012db6ad9f0b1286c9c7eca4cb35->enter($__internal_7dfa34f27f213e59d60450f76d1cfe8eab7f012db6ad9f0b1286c9c7eca4cb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a6d2792d7c371a8f01aa07b3b5f17db66fb18ef19a14bd4c62346d9018350d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d2792d7c371a8f01aa07b3b5f17db66fb18ef19a14bd4c62346d9018350d80->enter($__internal_a6d2792d7c371a8f01aa07b3b5f17db66fb18ef19a14bd4c62346d9018350d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a6d2792d7c371a8f01aa07b3b5f17db66fb18ef19a14bd4c62346d9018350d80->leave($__internal_a6d2792d7c371a8f01aa07b3b5f17db66fb18ef19a14bd4c62346d9018350d80_prof);

        
        $__internal_7dfa34f27f213e59d60450f76d1cfe8eab7f012db6ad9f0b1286c9c7eca4cb35->leave($__internal_7dfa34f27f213e59d60450f76d1cfe8eab7f012db6ad9f0b1286c9c7eca4cb35_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad91bc17264f539fd1d7992b43390c3551d17657c4816305224ccc9a09acdef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad91bc17264f539fd1d7992b43390c3551d17657c4816305224ccc9a09acdef6->enter($__internal_ad91bc17264f539fd1d7992b43390c3551d17657c4816305224ccc9a09acdef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_66cdce6033625c2306e867cfc365ddbf82242824dfc12f0417eea4b3241e08eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66cdce6033625c2306e867cfc365ddbf82242824dfc12f0417eea4b3241e08eb->enter($__internal_66cdce6033625c2306e867cfc365ddbf82242824dfc12f0417eea4b3241e08eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_66cdce6033625c2306e867cfc365ddbf82242824dfc12f0417eea4b3241e08eb->leave($__internal_66cdce6033625c2306e867cfc365ddbf82242824dfc12f0417eea4b3241e08eb_prof);

        
        $__internal_ad91bc17264f539fd1d7992b43390c3551d17657c4816305224ccc9a09acdef6->leave($__internal_ad91bc17264f539fd1d7992b43390c3551d17657c4816305224ccc9a09acdef6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b7e6bf299ac936e51db2b28a2a56d11bb6f111455f412e323754737b6ed3452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b7e6bf299ac936e51db2b28a2a56d11bb6f111455f412e323754737b6ed3452->enter($__internal_5b7e6bf299ac936e51db2b28a2a56d11bb6f111455f412e323754737b6ed3452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d02f6859b4bc8bda1081cef0d451075f42de2d1daad25e741a24c174d44f0878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02f6859b4bc8bda1081cef0d451075f42de2d1daad25e741a24c174d44f0878->enter($__internal_d02f6859b4bc8bda1081cef0d451075f42de2d1daad25e741a24c174d44f0878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d02f6859b4bc8bda1081cef0d451075f42de2d1daad25e741a24c174d44f0878->leave($__internal_d02f6859b4bc8bda1081cef0d451075f42de2d1daad25e741a24c174d44f0878_prof);

        
        $__internal_5b7e6bf299ac936e51db2b28a2a56d11bb6f111455f412e323754737b6ed3452->leave($__internal_5b7e6bf299ac936e51db2b28a2a56d11bb6f111455f412e323754737b6ed3452_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
