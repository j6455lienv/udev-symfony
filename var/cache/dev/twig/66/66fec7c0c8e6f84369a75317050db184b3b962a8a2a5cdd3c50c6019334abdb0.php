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
        $__internal_31c2b39dfe0b25c011c5a8424499f7dd96b359d44a4ae8a3c8854921bd8b7315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c2b39dfe0b25c011c5a8424499f7dd96b359d44a4ae8a3c8854921bd8b7315->enter($__internal_31c2b39dfe0b25c011c5a8424499f7dd96b359d44a4ae8a3c8854921bd8b7315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_c0a1a084cd23e1a540051f56b68624db0cc8777fb72eff58c6c7b3117347b0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a1a084cd23e1a540051f56b68624db0cc8777fb72eff58c6c7b3117347b0b2->enter($__internal_c0a1a084cd23e1a540051f56b68624db0cc8777fb72eff58c6c7b3117347b0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31c2b39dfe0b25c011c5a8424499f7dd96b359d44a4ae8a3c8854921bd8b7315->leave($__internal_31c2b39dfe0b25c011c5a8424499f7dd96b359d44a4ae8a3c8854921bd8b7315_prof);

        
        $__internal_c0a1a084cd23e1a540051f56b68624db0cc8777fb72eff58c6c7b3117347b0b2->leave($__internal_c0a1a084cd23e1a540051f56b68624db0cc8777fb72eff58c6c7b3117347b0b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8652174d30e75550cb1b2911f7bd7304f16cad2b1c2713107d310c9ee3d23921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8652174d30e75550cb1b2911f7bd7304f16cad2b1c2713107d310c9ee3d23921->enter($__internal_8652174d30e75550cb1b2911f7bd7304f16cad2b1c2713107d310c9ee3d23921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b2d67b31c47118bdedc8b371405ea01cc502532ffa2ded296be26d25295a683f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d67b31c47118bdedc8b371405ea01cc502532ffa2ded296be26d25295a683f->enter($__internal_b2d67b31c47118bdedc8b371405ea01cc502532ffa2ded296be26d25295a683f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b2d67b31c47118bdedc8b371405ea01cc502532ffa2ded296be26d25295a683f->leave($__internal_b2d67b31c47118bdedc8b371405ea01cc502532ffa2ded296be26d25295a683f_prof);

        
        $__internal_8652174d30e75550cb1b2911f7bd7304f16cad2b1c2713107d310c9ee3d23921->leave($__internal_8652174d30e75550cb1b2911f7bd7304f16cad2b1c2713107d310c9ee3d23921_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d179b8b24e065050ab764bcaca2d2802e6d0f24e8e46a7d0f7ba1a708de1fa5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d179b8b24e065050ab764bcaca2d2802e6d0f24e8e46a7d0f7ba1a708de1fa5d->enter($__internal_d179b8b24e065050ab764bcaca2d2802e6d0f24e8e46a7d0f7ba1a708de1fa5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d48d51c290833d685bd3443a72cb44b8ac00139e5b0c3ca363e72dba7b1aca5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d48d51c290833d685bd3443a72cb44b8ac00139e5b0c3ca363e72dba7b1aca5c->enter($__internal_d48d51c290833d685bd3443a72cb44b8ac00139e5b0c3ca363e72dba7b1aca5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d48d51c290833d685bd3443a72cb44b8ac00139e5b0c3ca363e72dba7b1aca5c->leave($__internal_d48d51c290833d685bd3443a72cb44b8ac00139e5b0c3ca363e72dba7b1aca5c_prof);

        
        $__internal_d179b8b24e065050ab764bcaca2d2802e6d0f24e8e46a7d0f7ba1a708de1fa5d->leave($__internal_d179b8b24e065050ab764bcaca2d2802e6d0f24e8e46a7d0f7ba1a708de1fa5d_prof);

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
