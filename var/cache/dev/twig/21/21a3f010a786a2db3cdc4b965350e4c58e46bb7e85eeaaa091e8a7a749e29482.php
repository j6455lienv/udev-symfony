<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_f4b9826d8531c0d53aa596655d08ab2e86e5436aa6bf7e0958e632203dd7971b extends Twig_Template
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
        $__internal_3dd29c9e1c27b0573bff59ced3d3889d858f6473066a1767fa4924d3d862131e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dd29c9e1c27b0573bff59ced3d3889d858f6473066a1767fa4924d3d862131e->enter($__internal_3dd29c9e1c27b0573bff59ced3d3889d858f6473066a1767fa4924d3d862131e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_e97a674e6cd0269f07e0a01daa705fdad9dd8ec77862e23e896b507337ee0962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97a674e6cd0269f07e0a01daa705fdad9dd8ec77862e23e896b507337ee0962->enter($__internal_e97a674e6cd0269f07e0a01daa705fdad9dd8ec77862e23e896b507337ee0962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dd29c9e1c27b0573bff59ced3d3889d858f6473066a1767fa4924d3d862131e->leave($__internal_3dd29c9e1c27b0573bff59ced3d3889d858f6473066a1767fa4924d3d862131e_prof);

        
        $__internal_e97a674e6cd0269f07e0a01daa705fdad9dd8ec77862e23e896b507337ee0962->leave($__internal_e97a674e6cd0269f07e0a01daa705fdad9dd8ec77862e23e896b507337ee0962_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_64095e4d85b1d313c6da3fa85408a31790f00ffe4b97e3ba8412524138a01a8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64095e4d85b1d313c6da3fa85408a31790f00ffe4b97e3ba8412524138a01a8c->enter($__internal_64095e4d85b1d313c6da3fa85408a31790f00ffe4b97e3ba8412524138a01a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bd732f7c5960470937f160cdcc1a08aee75f343ffc7d9b1e40ea3a809fe433ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd732f7c5960470937f160cdcc1a08aee75f343ffc7d9b1e40ea3a809fe433ea->enter($__internal_bd732f7c5960470937f160cdcc1a08aee75f343ffc7d9b1e40ea3a809fe433ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_bd732f7c5960470937f160cdcc1a08aee75f343ffc7d9b1e40ea3a809fe433ea->leave($__internal_bd732f7c5960470937f160cdcc1a08aee75f343ffc7d9b1e40ea3a809fe433ea_prof);

        
        $__internal_64095e4d85b1d313c6da3fa85408a31790f00ffe4b97e3ba8412524138a01a8c->leave($__internal_64095e4d85b1d313c6da3fa85408a31790f00ffe4b97e3ba8412524138a01a8c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f35f683c2a3620a7131516b23e7134501cccda77399fb809c5810b88931cfbfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f35f683c2a3620a7131516b23e7134501cccda77399fb809c5810b88931cfbfb->enter($__internal_f35f683c2a3620a7131516b23e7134501cccda77399fb809c5810b88931cfbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b110211839bd25bf9e2d3ea8fdabecc952b3ee4bd6e1914c75133c358cfa3261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b110211839bd25bf9e2d3ea8fdabecc952b3ee4bd6e1914c75133c358cfa3261->enter($__internal_b110211839bd25bf9e2d3ea8fdabecc952b3ee4bd6e1914c75133c358cfa3261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b110211839bd25bf9e2d3ea8fdabecc952b3ee4bd6e1914c75133c358cfa3261->leave($__internal_b110211839bd25bf9e2d3ea8fdabecc952b3ee4bd6e1914c75133c358cfa3261_prof);

        
        $__internal_f35f683c2a3620a7131516b23e7134501cccda77399fb809c5810b88931cfbfb->leave($__internal_f35f683c2a3620a7131516b23e7134501cccda77399fb809c5810b88931cfbfb_prof);

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
