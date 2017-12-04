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
        $__internal_59d9dbd2a01d5c701ef26f6bfa592300517f23ebc2ce9e815f7708e38bd909dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d9dbd2a01d5c701ef26f6bfa592300517f23ebc2ce9e815f7708e38bd909dd->enter($__internal_59d9dbd2a01d5c701ef26f6bfa592300517f23ebc2ce9e815f7708e38bd909dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_070cc7c0901329bcab7b7f11fecfd1710a9fe7f4cfed23f578fe577dd27199eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070cc7c0901329bcab7b7f11fecfd1710a9fe7f4cfed23f578fe577dd27199eb->enter($__internal_070cc7c0901329bcab7b7f11fecfd1710a9fe7f4cfed23f578fe577dd27199eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59d9dbd2a01d5c701ef26f6bfa592300517f23ebc2ce9e815f7708e38bd909dd->leave($__internal_59d9dbd2a01d5c701ef26f6bfa592300517f23ebc2ce9e815f7708e38bd909dd_prof);

        
        $__internal_070cc7c0901329bcab7b7f11fecfd1710a9fe7f4cfed23f578fe577dd27199eb->leave($__internal_070cc7c0901329bcab7b7f11fecfd1710a9fe7f4cfed23f578fe577dd27199eb_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e67f534e5edaf44c1fc3c2d29431ec998f7c8f46997e7812a05aed6875cf2489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e67f534e5edaf44c1fc3c2d29431ec998f7c8f46997e7812a05aed6875cf2489->enter($__internal_e67f534e5edaf44c1fc3c2d29431ec998f7c8f46997e7812a05aed6875cf2489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c43e21b5323fb8b87d27f9fa16202b3b497516e3f5913d09e3a949f5203c0cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43e21b5323fb8b87d27f9fa16202b3b497516e3f5913d09e3a949f5203c0cb3->enter($__internal_c43e21b5323fb8b87d27f9fa16202b3b497516e3f5913d09e3a949f5203c0cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_c43e21b5323fb8b87d27f9fa16202b3b497516e3f5913d09e3a949f5203c0cb3->leave($__internal_c43e21b5323fb8b87d27f9fa16202b3b497516e3f5913d09e3a949f5203c0cb3_prof);

        
        $__internal_e67f534e5edaf44c1fc3c2d29431ec998f7c8f46997e7812a05aed6875cf2489->leave($__internal_e67f534e5edaf44c1fc3c2d29431ec998f7c8f46997e7812a05aed6875cf2489_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f6280f16c8fee8a7ddcf399c3462f68b61bdf0b5e3dc0657b454e638a90805e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f6280f16c8fee8a7ddcf399c3462f68b61bdf0b5e3dc0657b454e638a90805e->enter($__internal_6f6280f16c8fee8a7ddcf399c3462f68b61bdf0b5e3dc0657b454e638a90805e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a8a75c266505fac17b23ceab290b4a2c421ca1405daae8351ec5a2115eb50ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a75c266505fac17b23ceab290b4a2c421ca1405daae8351ec5a2115eb50ba0->enter($__internal_a8a75c266505fac17b23ceab290b4a2c421ca1405daae8351ec5a2115eb50ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a8a75c266505fac17b23ceab290b4a2c421ca1405daae8351ec5a2115eb50ba0->leave($__internal_a8a75c266505fac17b23ceab290b4a2c421ca1405daae8351ec5a2115eb50ba0_prof);

        
        $__internal_6f6280f16c8fee8a7ddcf399c3462f68b61bdf0b5e3dc0657b454e638a90805e->leave($__internal_6f6280f16c8fee8a7ddcf399c3462f68b61bdf0b5e3dc0657b454e638a90805e_prof);

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
