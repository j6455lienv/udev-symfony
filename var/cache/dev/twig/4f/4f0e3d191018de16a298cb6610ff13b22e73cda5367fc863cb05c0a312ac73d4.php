<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6fa66abe3f0702243da1b45c26971a0c6acaceb2457b5d3b3e084c9472948408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e59b79fe8f9d0988d2959e36565a699093da9b955c69c055b5c466cd344b8c6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59b79fe8f9d0988d2959e36565a699093da9b955c69c055b5c466cd344b8c6e->enter($__internal_e59b79fe8f9d0988d2959e36565a699093da9b955c69c055b5c466cd344b8c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_09622f2c3d9b57ad44ff0e1de3d78c9031fd1ea0eb36206bea2cd13a05466c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09622f2c3d9b57ad44ff0e1de3d78c9031fd1ea0eb36206bea2cd13a05466c1b->enter($__internal_09622f2c3d9b57ad44ff0e1de3d78c9031fd1ea0eb36206bea2cd13a05466c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e59b79fe8f9d0988d2959e36565a699093da9b955c69c055b5c466cd344b8c6e->leave($__internal_e59b79fe8f9d0988d2959e36565a699093da9b955c69c055b5c466cd344b8c6e_prof);

        
        $__internal_09622f2c3d9b57ad44ff0e1de3d78c9031fd1ea0eb36206bea2cd13a05466c1b->leave($__internal_09622f2c3d9b57ad44ff0e1de3d78c9031fd1ea0eb36206bea2cd13a05466c1b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b87c10a940fd21226dab04a95019d94a3cbce31f23a7bb13753cc3f33421075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b87c10a940fd21226dab04a95019d94a3cbce31f23a7bb13753cc3f33421075->enter($__internal_6b87c10a940fd21226dab04a95019d94a3cbce31f23a7bb13753cc3f33421075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e726b128454970088d2b4a14b1a7e23c854c65ed13acbd75fcd1729bc2da8e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e726b128454970088d2b4a14b1a7e23c854c65ed13acbd75fcd1729bc2da8e17->enter($__internal_e726b128454970088d2b4a14b1a7e23c854c65ed13acbd75fcd1729bc2da8e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e726b128454970088d2b4a14b1a7e23c854c65ed13acbd75fcd1729bc2da8e17->leave($__internal_e726b128454970088d2b4a14b1a7e23c854c65ed13acbd75fcd1729bc2da8e17_prof);

        
        $__internal_6b87c10a940fd21226dab04a95019d94a3cbce31f23a7bb13753cc3f33421075->leave($__internal_6b87c10a940fd21226dab04a95019d94a3cbce31f23a7bb13753cc3f33421075_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_395306488a5f6a5215e3cbacf7a36ca668f1d11c88900e65a51522e093b90191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395306488a5f6a5215e3cbacf7a36ca668f1d11c88900e65a51522e093b90191->enter($__internal_395306488a5f6a5215e3cbacf7a36ca668f1d11c88900e65a51522e093b90191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41869a5aa759d3b4371993a497c839ba866bc27237abedc846362977369534e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41869a5aa759d3b4371993a497c839ba866bc27237abedc846362977369534e4->enter($__internal_41869a5aa759d3b4371993a497c839ba866bc27237abedc846362977369534e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_41869a5aa759d3b4371993a497c839ba866bc27237abedc846362977369534e4->leave($__internal_41869a5aa759d3b4371993a497c839ba866bc27237abedc846362977369534e4_prof);

        
        $__internal_395306488a5f6a5215e3cbacf7a36ca668f1d11c88900e65a51522e093b90191->leave($__internal_395306488a5f6a5215e3cbacf7a36ca668f1d11c88900e65a51522e093b90191_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
