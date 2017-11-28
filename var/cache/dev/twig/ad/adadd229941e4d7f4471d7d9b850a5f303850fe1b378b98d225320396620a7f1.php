<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_fbc8c62ee3f971d2010705d60990751c43a05c21d80dacb5f9486e92c6e9decf extends Twig_Template
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
        $__internal_e6169222caecb42c40bee639723576e2eb465c553c0a9dbc8d1557140f1fbca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6169222caecb42c40bee639723576e2eb465c553c0a9dbc8d1557140f1fbca8->enter($__internal_e6169222caecb42c40bee639723576e2eb465c553c0a9dbc8d1557140f1fbca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2c70ddc38491b001c6019a711fad33cb05421a0236bf6dad735e7b98a62475fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c70ddc38491b001c6019a711fad33cb05421a0236bf6dad735e7b98a62475fb->enter($__internal_2c70ddc38491b001c6019a711fad33cb05421a0236bf6dad735e7b98a62475fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6169222caecb42c40bee639723576e2eb465c553c0a9dbc8d1557140f1fbca8->leave($__internal_e6169222caecb42c40bee639723576e2eb465c553c0a9dbc8d1557140f1fbca8_prof);

        
        $__internal_2c70ddc38491b001c6019a711fad33cb05421a0236bf6dad735e7b98a62475fb->leave($__internal_2c70ddc38491b001c6019a711fad33cb05421a0236bf6dad735e7b98a62475fb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b639e13f7f6018bbd000602be18e7eefb471b6885a89e50752d3614cb3ff2a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b639e13f7f6018bbd000602be18e7eefb471b6885a89e50752d3614cb3ff2a12->enter($__internal_b639e13f7f6018bbd000602be18e7eefb471b6885a89e50752d3614cb3ff2a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1d319dd758f03b178d5afd8f648e83dbd6d1f0bbf45868fe3b1fefd799ac1473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d319dd758f03b178d5afd8f648e83dbd6d1f0bbf45868fe3b1fefd799ac1473->enter($__internal_1d319dd758f03b178d5afd8f648e83dbd6d1f0bbf45868fe3b1fefd799ac1473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1d319dd758f03b178d5afd8f648e83dbd6d1f0bbf45868fe3b1fefd799ac1473->leave($__internal_1d319dd758f03b178d5afd8f648e83dbd6d1f0bbf45868fe3b1fefd799ac1473_prof);

        
        $__internal_b639e13f7f6018bbd000602be18e7eefb471b6885a89e50752d3614cb3ff2a12->leave($__internal_b639e13f7f6018bbd000602be18e7eefb471b6885a89e50752d3614cb3ff2a12_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_499d2bedfc949fe4117bc3aa388e7a3daceeed509c2185085e880788594745a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_499d2bedfc949fe4117bc3aa388e7a3daceeed509c2185085e880788594745a1->enter($__internal_499d2bedfc949fe4117bc3aa388e7a3daceeed509c2185085e880788594745a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3b979a973a62ac45873ca8b6f7e90f84b34f6483eaf4bb94a62cb4a953db2fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b979a973a62ac45873ca8b6f7e90f84b34f6483eaf4bb94a62cb4a953db2fbc->enter($__internal_3b979a973a62ac45873ca8b6f7e90f84b34f6483eaf4bb94a62cb4a953db2fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3b979a973a62ac45873ca8b6f7e90f84b34f6483eaf4bb94a62cb4a953db2fbc->leave($__internal_3b979a973a62ac45873ca8b6f7e90f84b34f6483eaf4bb94a62cb4a953db2fbc_prof);

        
        $__internal_499d2bedfc949fe4117bc3aa388e7a3daceeed509c2185085e880788594745a1->leave($__internal_499d2bedfc949fe4117bc3aa388e7a3daceeed509c2185085e880788594745a1_prof);

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
