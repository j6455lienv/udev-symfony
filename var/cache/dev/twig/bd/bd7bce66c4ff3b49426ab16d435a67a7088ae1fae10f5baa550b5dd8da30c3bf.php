<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_d063aa8a2cb55541c9f28c714a3206e681af99d9d202ec9c5fb957abf248f7cf extends Twig_Template
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
        $__internal_adbed00d87cd8cc87552815fa6df5c65ce8b86a049acb83c6c6fdeaa504d96e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adbed00d87cd8cc87552815fa6df5c65ce8b86a049acb83c6c6fdeaa504d96e9->enter($__internal_adbed00d87cd8cc87552815fa6df5c65ce8b86a049acb83c6c6fdeaa504d96e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_441bce8d2fced5e0e3a3a571b698c740f0b96b785710f9bbd91d3922ad4030e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441bce8d2fced5e0e3a3a571b698c740f0b96b785710f9bbd91d3922ad4030e8->enter($__internal_441bce8d2fced5e0e3a3a571b698c740f0b96b785710f9bbd91d3922ad4030e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adbed00d87cd8cc87552815fa6df5c65ce8b86a049acb83c6c6fdeaa504d96e9->leave($__internal_adbed00d87cd8cc87552815fa6df5c65ce8b86a049acb83c6c6fdeaa504d96e9_prof);

        
        $__internal_441bce8d2fced5e0e3a3a571b698c740f0b96b785710f9bbd91d3922ad4030e8->leave($__internal_441bce8d2fced5e0e3a3a571b698c740f0b96b785710f9bbd91d3922ad4030e8_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_2b905ba1e17e5f34fde8505e275f3757eea5c22de6918a40ac6cdaaf3ffb00cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b905ba1e17e5f34fde8505e275f3757eea5c22de6918a40ac6cdaaf3ffb00cb->enter($__internal_2b905ba1e17e5f34fde8505e275f3757eea5c22de6918a40ac6cdaaf3ffb00cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_9ef94296585006066a00346be8e718b1f40ef05bcf0ed3126528207a7f259b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef94296585006066a00346be8e718b1f40ef05bcf0ed3126528207a7f259b1f->enter($__internal_9ef94296585006066a00346be8e718b1f40ef05bcf0ed3126528207a7f259b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_9ef94296585006066a00346be8e718b1f40ef05bcf0ed3126528207a7f259b1f->leave($__internal_9ef94296585006066a00346be8e718b1f40ef05bcf0ed3126528207a7f259b1f_prof);

        
        $__internal_2b905ba1e17e5f34fde8505e275f3757eea5c22de6918a40ac6cdaaf3ffb00cb->leave($__internal_2b905ba1e17e5f34fde8505e275f3757eea5c22de6918a40ac6cdaaf3ffb00cb_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6a17ab6cf3adca797ee1de105600a96d7ed7f9d8690171f96495e596d19ba10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6a17ab6cf3adca797ee1de105600a96d7ed7f9d8690171f96495e596d19ba10->enter($__internal_d6a17ab6cf3adca797ee1de105600a96d7ed7f9d8690171f96495e596d19ba10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9488c27ddc0d45cd2891ef7802f6af618bac2d15d61d3525765959fac5912082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9488c27ddc0d45cd2891ef7802f6af618bac2d15d61d3525765959fac5912082->enter($__internal_9488c27ddc0d45cd2891ef7802f6af618bac2d15d61d3525765959fac5912082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_9488c27ddc0d45cd2891ef7802f6af618bac2d15d61d3525765959fac5912082->leave($__internal_9488c27ddc0d45cd2891ef7802f6af618bac2d15d61d3525765959fac5912082_prof);

        
        $__internal_d6a17ab6cf3adca797ee1de105600a96d7ed7f9d8690171f96495e596d19ba10->leave($__internal_d6a17ab6cf3adca797ee1de105600a96d7ed7f9d8690171f96495e596d19ba10_prof);

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
