<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_f02fd90271593e07e3b1d57788773df6166dc6755638b37a5c118e7688d39062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_baf40420e56df9a717f18eac75f32265484a2a6af0c0e425d8e9671033d7dfde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baf40420e56df9a717f18eac75f32265484a2a6af0c0e425d8e9671033d7dfde->enter($__internal_baf40420e56df9a717f18eac75f32265484a2a6af0c0e425d8e9671033d7dfde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_6cdfe29cb300203d9968662e659fb8b2f8a555ae5da4fcbebe996357212321e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cdfe29cb300203d9968662e659fb8b2f8a555ae5da4fcbebe996357212321e8->enter($__internal_6cdfe29cb300203d9968662e659fb8b2f8a555ae5da4fcbebe996357212321e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_baf40420e56df9a717f18eac75f32265484a2a6af0c0e425d8e9671033d7dfde->leave($__internal_baf40420e56df9a717f18eac75f32265484a2a6af0c0e425d8e9671033d7dfde_prof);

        
        $__internal_6cdfe29cb300203d9968662e659fb8b2f8a555ae5da4fcbebe996357212321e8->leave($__internal_6cdfe29cb300203d9968662e659fb8b2f8a555ae5da4fcbebe996357212321e8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d55d9c8ee3f6e8037ec5e69ed09fa8dc8f130b56b2e2cc30f8e067874159b231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d55d9c8ee3f6e8037ec5e69ed09fa8dc8f130b56b2e2cc30f8e067874159b231->enter($__internal_d55d9c8ee3f6e8037ec5e69ed09fa8dc8f130b56b2e2cc30f8e067874159b231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6e04c51115b63aabbc65c3b2916d2a04ee47125efa3ff33a56ccf614897472e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e04c51115b63aabbc65c3b2916d2a04ee47125efa3ff33a56ccf614897472e9->enter($__internal_6e04c51115b63aabbc65c3b2916d2a04ee47125efa3ff33a56ccf614897472e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_6e04c51115b63aabbc65c3b2916d2a04ee47125efa3ff33a56ccf614897472e9->leave($__internal_6e04c51115b63aabbc65c3b2916d2a04ee47125efa3ff33a56ccf614897472e9_prof);

        
        $__internal_d55d9c8ee3f6e8037ec5e69ed09fa8dc8f130b56b2e2cc30f8e067874159b231->leave($__internal_d55d9c8ee3f6e8037ec5e69ed09fa8dc8f130b56b2e2cc30f8e067874159b231_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_138e277447b5ba32949a85a1b5b12850aad3b3fa82e01a89f25f6a254852a77a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_138e277447b5ba32949a85a1b5b12850aad3b3fa82e01a89f25f6a254852a77a->enter($__internal_138e277447b5ba32949a85a1b5b12850aad3b3fa82e01a89f25f6a254852a77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_344cd188e6884f8e7c77144cf90c815217ada377fc375bad3a62602c8b5a0279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344cd188e6884f8e7c77144cf90c815217ada377fc375bad3a62602c8b5a0279->enter($__internal_344cd188e6884f8e7c77144cf90c815217ada377fc375bad3a62602c8b5a0279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_344cd188e6884f8e7c77144cf90c815217ada377fc375bad3a62602c8b5a0279->leave($__internal_344cd188e6884f8e7c77144cf90c815217ada377fc375bad3a62602c8b5a0279_prof);

        
        $__internal_138e277447b5ba32949a85a1b5b12850aad3b3fa82e01a89f25f6a254852a77a->leave($__internal_138e277447b5ba32949a85a1b5b12850aad3b3fa82e01a89f25f6a254852a77a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
