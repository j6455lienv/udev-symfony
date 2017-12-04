<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b61e97c4d8b8bcef85fdb98cc81c3d9532a302489211663fa5499491ec08ca47 extends Twig_Template
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
        $__internal_6a054a53caf1e307b5ec227780dde81e19e44f4d4cece6a616a154267b941530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a054a53caf1e307b5ec227780dde81e19e44f4d4cece6a616a154267b941530->enter($__internal_6a054a53caf1e307b5ec227780dde81e19e44f4d4cece6a616a154267b941530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_cebd4ab133fc0f08105418b18df0d9a760fe64db306b16637e10b3000380c1d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cebd4ab133fc0f08105418b18df0d9a760fe64db306b16637e10b3000380c1d8->enter($__internal_cebd4ab133fc0f08105418b18df0d9a760fe64db306b16637e10b3000380c1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a054a53caf1e307b5ec227780dde81e19e44f4d4cece6a616a154267b941530->leave($__internal_6a054a53caf1e307b5ec227780dde81e19e44f4d4cece6a616a154267b941530_prof);

        
        $__internal_cebd4ab133fc0f08105418b18df0d9a760fe64db306b16637e10b3000380c1d8->leave($__internal_cebd4ab133fc0f08105418b18df0d9a760fe64db306b16637e10b3000380c1d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bbccb6bc765cae083d2a30f21e17abf046762f5c1fe837857e6c35c38be0173e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbccb6bc765cae083d2a30f21e17abf046762f5c1fe837857e6c35c38be0173e->enter($__internal_bbccb6bc765cae083d2a30f21e17abf046762f5c1fe837857e6c35c38be0173e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ac4e228aaa82b0ae1b7a4bcc2011ebfc21880bb774d3a88f21da89a7224f3fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac4e228aaa82b0ae1b7a4bcc2011ebfc21880bb774d3a88f21da89a7224f3fea->enter($__internal_ac4e228aaa82b0ae1b7a4bcc2011ebfc21880bb774d3a88f21da89a7224f3fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ac4e228aaa82b0ae1b7a4bcc2011ebfc21880bb774d3a88f21da89a7224f3fea->leave($__internal_ac4e228aaa82b0ae1b7a4bcc2011ebfc21880bb774d3a88f21da89a7224f3fea_prof);

        
        $__internal_bbccb6bc765cae083d2a30f21e17abf046762f5c1fe837857e6c35c38be0173e->leave($__internal_bbccb6bc765cae083d2a30f21e17abf046762f5c1fe837857e6c35c38be0173e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_970e0aea9a4bd778ad5e8d2e2965d7cf7a871a4f87a6540bf4a0796d02bc6ee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_970e0aea9a4bd778ad5e8d2e2965d7cf7a871a4f87a6540bf4a0796d02bc6ee8->enter($__internal_970e0aea9a4bd778ad5e8d2e2965d7cf7a871a4f87a6540bf4a0796d02bc6ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_13655c0538a5e78ac32d011884dd2dd59922007f786aad1b4dd30762ae3f7d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13655c0538a5e78ac32d011884dd2dd59922007f786aad1b4dd30762ae3f7d07->enter($__internal_13655c0538a5e78ac32d011884dd2dd59922007f786aad1b4dd30762ae3f7d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_13655c0538a5e78ac32d011884dd2dd59922007f786aad1b4dd30762ae3f7d07->leave($__internal_13655c0538a5e78ac32d011884dd2dd59922007f786aad1b4dd30762ae3f7d07_prof);

        
        $__internal_970e0aea9a4bd778ad5e8d2e2965d7cf7a871a4f87a6540bf4a0796d02bc6ee8->leave($__internal_970e0aea9a4bd778ad5e8d2e2965d7cf7a871a4f87a6540bf4a0796d02bc6ee8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_873488b124dc69f72c11a68fc62aa5ea40908014ac398c058fc5b5bf7bcd9550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_873488b124dc69f72c11a68fc62aa5ea40908014ac398c058fc5b5bf7bcd9550->enter($__internal_873488b124dc69f72c11a68fc62aa5ea40908014ac398c058fc5b5bf7bcd9550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d766c909078bd2789e65b3f6a9ab76721581a63c46d4201a0ce4d6a86f679139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d766c909078bd2789e65b3f6a9ab76721581a63c46d4201a0ce4d6a86f679139->enter($__internal_d766c909078bd2789e65b3f6a9ab76721581a63c46d4201a0ce4d6a86f679139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d766c909078bd2789e65b3f6a9ab76721581a63c46d4201a0ce4d6a86f679139->leave($__internal_d766c909078bd2789e65b3f6a9ab76721581a63c46d4201a0ce4d6a86f679139_prof);

        
        $__internal_873488b124dc69f72c11a68fc62aa5ea40908014ac398c058fc5b5bf7bcd9550->leave($__internal_873488b124dc69f72c11a68fc62aa5ea40908014ac398c058fc5b5bf7bcd9550_prof);

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
