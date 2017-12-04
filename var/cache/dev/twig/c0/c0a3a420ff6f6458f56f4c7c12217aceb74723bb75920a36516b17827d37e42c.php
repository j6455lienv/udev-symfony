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
        $__internal_984ebd37a89817f8e82336cd841e7d8c8bcd002ef1bd44ba568132d328a42b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_984ebd37a89817f8e82336cd841e7d8c8bcd002ef1bd44ba568132d328a42b53->enter($__internal_984ebd37a89817f8e82336cd841e7d8c8bcd002ef1bd44ba568132d328a42b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_2b81969fbff6794fbcd28595b8112c87aee327a9b3c84b820bf0538877578e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b81969fbff6794fbcd28595b8112c87aee327a9b3c84b820bf0538877578e99->enter($__internal_2b81969fbff6794fbcd28595b8112c87aee327a9b3c84b820bf0538877578e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_984ebd37a89817f8e82336cd841e7d8c8bcd002ef1bd44ba568132d328a42b53->leave($__internal_984ebd37a89817f8e82336cd841e7d8c8bcd002ef1bd44ba568132d328a42b53_prof);

        
        $__internal_2b81969fbff6794fbcd28595b8112c87aee327a9b3c84b820bf0538877578e99->leave($__internal_2b81969fbff6794fbcd28595b8112c87aee327a9b3c84b820bf0538877578e99_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3d63d1921b79d05be071eaa677448457d8b9735928a9d8bc95c02c0b4d6956e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d63d1921b79d05be071eaa677448457d8b9735928a9d8bc95c02c0b4d6956e9->enter($__internal_3d63d1921b79d05be071eaa677448457d8b9735928a9d8bc95c02c0b4d6956e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d945fbed505fee764e076df93ac96c53578f0d814e76ead0a482fa1e85706fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d945fbed505fee764e076df93ac96c53578f0d814e76ead0a482fa1e85706fea->enter($__internal_d945fbed505fee764e076df93ac96c53578f0d814e76ead0a482fa1e85706fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d945fbed505fee764e076df93ac96c53578f0d814e76ead0a482fa1e85706fea->leave($__internal_d945fbed505fee764e076df93ac96c53578f0d814e76ead0a482fa1e85706fea_prof);

        
        $__internal_3d63d1921b79d05be071eaa677448457d8b9735928a9d8bc95c02c0b4d6956e9->leave($__internal_3d63d1921b79d05be071eaa677448457d8b9735928a9d8bc95c02c0b4d6956e9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8bc0db0b4b3e4ba6af9daa6a1fd8853085abac1ec1eeb15c2adbafebbd91981b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bc0db0b4b3e4ba6af9daa6a1fd8853085abac1ec1eeb15c2adbafebbd91981b->enter($__internal_8bc0db0b4b3e4ba6af9daa6a1fd8853085abac1ec1eeb15c2adbafebbd91981b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6d6589883e62422a7a5505bb5bbd2965f030172ca30171d47d285d88d3be4161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6589883e62422a7a5505bb5bbd2965f030172ca30171d47d285d88d3be4161->enter($__internal_6d6589883e62422a7a5505bb5bbd2965f030172ca30171d47d285d88d3be4161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6d6589883e62422a7a5505bb5bbd2965f030172ca30171d47d285d88d3be4161->leave($__internal_6d6589883e62422a7a5505bb5bbd2965f030172ca30171d47d285d88d3be4161_prof);

        
        $__internal_8bc0db0b4b3e4ba6af9daa6a1fd8853085abac1ec1eeb15c2adbafebbd91981b->leave($__internal_8bc0db0b4b3e4ba6af9daa6a1fd8853085abac1ec1eeb15c2adbafebbd91981b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_59c49e1b6b1ee29580d0ed611fc642b89aa5d9934112cc2d07716dd1b927d04e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59c49e1b6b1ee29580d0ed611fc642b89aa5d9934112cc2d07716dd1b927d04e->enter($__internal_59c49e1b6b1ee29580d0ed611fc642b89aa5d9934112cc2d07716dd1b927d04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e232de85212f3d9734cc1eccb1cfe9db97d6c9983659bba41decbde5104f4589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e232de85212f3d9734cc1eccb1cfe9db97d6c9983659bba41decbde5104f4589->enter($__internal_e232de85212f3d9734cc1eccb1cfe9db97d6c9983659bba41decbde5104f4589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e232de85212f3d9734cc1eccb1cfe9db97d6c9983659bba41decbde5104f4589->leave($__internal_e232de85212f3d9734cc1eccb1cfe9db97d6c9983659bba41decbde5104f4589_prof);

        
        $__internal_59c49e1b6b1ee29580d0ed611fc642b89aa5d9934112cc2d07716dd1b927d04e->leave($__internal_59c49e1b6b1ee29580d0ed611fc642b89aa5d9934112cc2d07716dd1b927d04e_prof);

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
