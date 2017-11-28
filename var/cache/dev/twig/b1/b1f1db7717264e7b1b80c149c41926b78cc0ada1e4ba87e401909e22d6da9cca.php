<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_1f7cd8d637f5bbadafb1c0e7853802ab31f4cd2edbb91e517d472829942f715c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3ab2f6e1e1c309d4fdb74803c1e174af14a782fce1048211ef50fcc1ad0a10a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3ab2f6e1e1c309d4fdb74803c1e174af14a782fce1048211ef50fcc1ad0a10a->enter($__internal_e3ab2f6e1e1c309d4fdb74803c1e174af14a782fce1048211ef50fcc1ad0a10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_87c8dee7d44d37cf6e9f65dee740f87a0d0c431b7fdd7648dbd7db1661f2fa9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c8dee7d44d37cf6e9f65dee740f87a0d0c431b7fdd7648dbd7db1661f2fa9d->enter($__internal_87c8dee7d44d37cf6e9f65dee740f87a0d0c431b7fdd7648dbd7db1661f2fa9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3ab2f6e1e1c309d4fdb74803c1e174af14a782fce1048211ef50fcc1ad0a10a->leave($__internal_e3ab2f6e1e1c309d4fdb74803c1e174af14a782fce1048211ef50fcc1ad0a10a_prof);

        
        $__internal_87c8dee7d44d37cf6e9f65dee740f87a0d0c431b7fdd7648dbd7db1661f2fa9d->leave($__internal_87c8dee7d44d37cf6e9f65dee740f87a0d0c431b7fdd7648dbd7db1661f2fa9d_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_4c85334e1bb0cc2d62a76b8a9ed9e39ea3f751ba7f51f28e6f0ae8a1f4600061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c85334e1bb0cc2d62a76b8a9ed9e39ea3f751ba7f51f28e6f0ae8a1f4600061->enter($__internal_4c85334e1bb0cc2d62a76b8a9ed9e39ea3f751ba7f51f28e6f0ae8a1f4600061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_cffeee731dce4dd2b6f2eb7e76baa7861072f218335d75cca744e3ef463e7893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cffeee731dce4dd2b6f2eb7e76baa7861072f218335d75cca744e3ef463e7893->enter($__internal_cffeee731dce4dd2b6f2eb7e76baa7861072f218335d75cca744e3ef463e7893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_cffeee731dce4dd2b6f2eb7e76baa7861072f218335d75cca744e3ef463e7893->leave($__internal_cffeee731dce4dd2b6f2eb7e76baa7861072f218335d75cca744e3ef463e7893_prof);

        
        $__internal_4c85334e1bb0cc2d62a76b8a9ed9e39ea3f751ba7f51f28e6f0ae8a1f4600061->leave($__internal_4c85334e1bb0cc2d62a76b8a9ed9e39ea3f751ba7f51f28e6f0ae8a1f4600061_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7ff289a7072f84698a22d50d0e1f1c4044af925166fb79ead15887e10d21b824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff289a7072f84698a22d50d0e1f1c4044af925166fb79ead15887e10d21b824->enter($__internal_7ff289a7072f84698a22d50d0e1f1c4044af925166fb79ead15887e10d21b824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_60c00e657c2c613e2910089cca826da6a7083b06b9e37319d263535b41d9e9f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c00e657c2c613e2910089cca826da6a7083b06b9e37319d263535b41d9e9f5->enter($__internal_60c00e657c2c613e2910089cca826da6a7083b06b9e37319d263535b41d9e9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_60c00e657c2c613e2910089cca826da6a7083b06b9e37319d263535b41d9e9f5->leave($__internal_60c00e657c2c613e2910089cca826da6a7083b06b9e37319d263535b41d9e9f5_prof);

        
        $__internal_7ff289a7072f84698a22d50d0e1f1c4044af925166fb79ead15887e10d21b824->leave($__internal_7ff289a7072f84698a22d50d0e1f1c4044af925166fb79ead15887e10d21b824_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
