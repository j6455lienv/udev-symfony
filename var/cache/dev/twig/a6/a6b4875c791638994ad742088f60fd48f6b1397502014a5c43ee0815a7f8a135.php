<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_966fd360000989762948681146ad0e0c47909dcaa72a461707449c811b8bd0c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_e72f919405a384b4fe05a6e5267bdfd96a76f167d549f5386861bdce80a81389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72f919405a384b4fe05a6e5267bdfd96a76f167d549f5386861bdce80a81389->enter($__internal_e72f919405a384b4fe05a6e5267bdfd96a76f167d549f5386861bdce80a81389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_2d15dfbf7efb87167aa0c47f30d5f7f41826f2dad97a1bea47d756956c432adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d15dfbf7efb87167aa0c47f30d5f7f41826f2dad97a1bea47d756956c432adc->enter($__internal_2d15dfbf7efb87167aa0c47f30d5f7f41826f2dad97a1bea47d756956c432adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e72f919405a384b4fe05a6e5267bdfd96a76f167d549f5386861bdce80a81389->leave($__internal_e72f919405a384b4fe05a6e5267bdfd96a76f167d549f5386861bdce80a81389_prof);

        
        $__internal_2d15dfbf7efb87167aa0c47f30d5f7f41826f2dad97a1bea47d756956c432adc->leave($__internal_2d15dfbf7efb87167aa0c47f30d5f7f41826f2dad97a1bea47d756956c432adc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_81a97f19ef8763bcaf23ce2c6c5e8b3185cd42be3ec29128712833e4c2e8eebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81a97f19ef8763bcaf23ce2c6c5e8b3185cd42be3ec29128712833e4c2e8eebf->enter($__internal_81a97f19ef8763bcaf23ce2c6c5e8b3185cd42be3ec29128712833e4c2e8eebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_95d1d10fad061ae884e55a35c95d54fe31f0c659e55774ec32c1938cf538f0da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d1d10fad061ae884e55a35c95d54fe31f0c659e55774ec32c1938cf538f0da->enter($__internal_95d1d10fad061ae884e55a35c95d54fe31f0c659e55774ec32c1938cf538f0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_95d1d10fad061ae884e55a35c95d54fe31f0c659e55774ec32c1938cf538f0da->leave($__internal_95d1d10fad061ae884e55a35c95d54fe31f0c659e55774ec32c1938cf538f0da_prof);

        
        $__internal_81a97f19ef8763bcaf23ce2c6c5e8b3185cd42be3ec29128712833e4c2e8eebf->leave($__internal_81a97f19ef8763bcaf23ce2c6c5e8b3185cd42be3ec29128712833e4c2e8eebf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
