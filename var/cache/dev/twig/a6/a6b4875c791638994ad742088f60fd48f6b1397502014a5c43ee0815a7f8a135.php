<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_966fd360000989762948681146ad0e0c47909dcaa72a461707449c811b8bd0c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9654ea1fbd2d745f1ccb22be758a86ab951edf17344892345bff1baa69ad0445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9654ea1fbd2d745f1ccb22be758a86ab951edf17344892345bff1baa69ad0445->enter($__internal_9654ea1fbd2d745f1ccb22be758a86ab951edf17344892345bff1baa69ad0445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_27d2830cda03b2d450a6988ba34563f9d6d66e7943c59e8934369ea780b9dc9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d2830cda03b2d450a6988ba34563f9d6d66e7943c59e8934369ea780b9dc9f->enter($__internal_27d2830cda03b2d450a6988ba34563f9d6d66e7943c59e8934369ea780b9dc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9654ea1fbd2d745f1ccb22be758a86ab951edf17344892345bff1baa69ad0445->leave($__internal_9654ea1fbd2d745f1ccb22be758a86ab951edf17344892345bff1baa69ad0445_prof);

        
        $__internal_27d2830cda03b2d450a6988ba34563f9d6d66e7943c59e8934369ea780b9dc9f->leave($__internal_27d2830cda03b2d450a6988ba34563f9d6d66e7943c59e8934369ea780b9dc9f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0d6da3f6b3f721cbbf9f844a1d8824943d341f0fa2bd7e296ec958adb554c006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d6da3f6b3f721cbbf9f844a1d8824943d341f0fa2bd7e296ec958adb554c006->enter($__internal_0d6da3f6b3f721cbbf9f844a1d8824943d341f0fa2bd7e296ec958adb554c006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cb5caa630cebde9df92a3da85fc4ba7d95f1d7d684c657dec1b780a66d9157d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb5caa630cebde9df92a3da85fc4ba7d95f1d7d684c657dec1b780a66d9157d5->enter($__internal_cb5caa630cebde9df92a3da85fc4ba7d95f1d7d684c657dec1b780a66d9157d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_cb5caa630cebde9df92a3da85fc4ba7d95f1d7d684c657dec1b780a66d9157d5->leave($__internal_cb5caa630cebde9df92a3da85fc4ba7d95f1d7d684c657dec1b780a66d9157d5_prof);

        
        $__internal_0d6da3f6b3f721cbbf9f844a1d8824943d341f0fa2bd7e296ec958adb554c006->leave($__internal_0d6da3f6b3f721cbbf9f844a1d8824943d341f0fa2bd7e296ec958adb554c006_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
