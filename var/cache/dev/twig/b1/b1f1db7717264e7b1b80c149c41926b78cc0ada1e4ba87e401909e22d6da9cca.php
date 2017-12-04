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
        $__internal_15ec2a1adc2da0d6439acaa815546573ce7d188a3aa8989d33d6c09cce1f1353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15ec2a1adc2da0d6439acaa815546573ce7d188a3aa8989d33d6c09cce1f1353->enter($__internal_15ec2a1adc2da0d6439acaa815546573ce7d188a3aa8989d33d6c09cce1f1353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_647f58b5791408d7e73005e6a8fd687e90875dc37f75d1b24375f69e1fc27330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_647f58b5791408d7e73005e6a8fd687e90875dc37f75d1b24375f69e1fc27330->enter($__internal_647f58b5791408d7e73005e6a8fd687e90875dc37f75d1b24375f69e1fc27330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15ec2a1adc2da0d6439acaa815546573ce7d188a3aa8989d33d6c09cce1f1353->leave($__internal_15ec2a1adc2da0d6439acaa815546573ce7d188a3aa8989d33d6c09cce1f1353_prof);

        
        $__internal_647f58b5791408d7e73005e6a8fd687e90875dc37f75d1b24375f69e1fc27330->leave($__internal_647f58b5791408d7e73005e6a8fd687e90875dc37f75d1b24375f69e1fc27330_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_930a8e6d6bf11929d7a31a691a54547e6e25b4e982eb8b4120f63d921a2f67fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_930a8e6d6bf11929d7a31a691a54547e6e25b4e982eb8b4120f63d921a2f67fb->enter($__internal_930a8e6d6bf11929d7a31a691a54547e6e25b4e982eb8b4120f63d921a2f67fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_0b0e0ad3ae9a6bb93c403d65c7ab54512a414003c19f62f75492896deedaf260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0e0ad3ae9a6bb93c403d65c7ab54512a414003c19f62f75492896deedaf260->enter($__internal_0b0e0ad3ae9a6bb93c403d65c7ab54512a414003c19f62f75492896deedaf260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_0b0e0ad3ae9a6bb93c403d65c7ab54512a414003c19f62f75492896deedaf260->leave($__internal_0b0e0ad3ae9a6bb93c403d65c7ab54512a414003c19f62f75492896deedaf260_prof);

        
        $__internal_930a8e6d6bf11929d7a31a691a54547e6e25b4e982eb8b4120f63d921a2f67fb->leave($__internal_930a8e6d6bf11929d7a31a691a54547e6e25b4e982eb8b4120f63d921a2f67fb_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_63a999be176e6a93b55b9fef7f729321718b41acb3cb0e7164d44156891ab93d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63a999be176e6a93b55b9fef7f729321718b41acb3cb0e7164d44156891ab93d->enter($__internal_63a999be176e6a93b55b9fef7f729321718b41acb3cb0e7164d44156891ab93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_610e7ae54c2af0560581e5e32a5827e1c3832e280fde0ef817ae7bcc96d87d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_610e7ae54c2af0560581e5e32a5827e1c3832e280fde0ef817ae7bcc96d87d21->enter($__internal_610e7ae54c2af0560581e5e32a5827e1c3832e280fde0ef817ae7bcc96d87d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_610e7ae54c2af0560581e5e32a5827e1c3832e280fde0ef817ae7bcc96d87d21->leave($__internal_610e7ae54c2af0560581e5e32a5827e1c3832e280fde0ef817ae7bcc96d87d21_prof);

        
        $__internal_63a999be176e6a93b55b9fef7f729321718b41acb3cb0e7164d44156891ab93d->leave($__internal_63a999be176e6a93b55b9fef7f729321718b41acb3cb0e7164d44156891ab93d_prof);

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
