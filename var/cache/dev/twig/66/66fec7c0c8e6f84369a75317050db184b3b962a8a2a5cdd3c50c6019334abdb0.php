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
        $__internal_152920c52dd89acf56db70f36f703363ee93001b5348d453b0d5d2f520d81f86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_152920c52dd89acf56db70f36f703363ee93001b5348d453b0d5d2f520d81f86->enter($__internal_152920c52dd89acf56db70f36f703363ee93001b5348d453b0d5d2f520d81f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_e32997c6223bcb2b609f7e4afbcc8065bc0e9376aceb4c629e4d901c527cf80d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32997c6223bcb2b609f7e4afbcc8065bc0e9376aceb4c629e4d901c527cf80d->enter($__internal_e32997c6223bcb2b609f7e4afbcc8065bc0e9376aceb4c629e4d901c527cf80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_152920c52dd89acf56db70f36f703363ee93001b5348d453b0d5d2f520d81f86->leave($__internal_152920c52dd89acf56db70f36f703363ee93001b5348d453b0d5d2f520d81f86_prof);

        
        $__internal_e32997c6223bcb2b609f7e4afbcc8065bc0e9376aceb4c629e4d901c527cf80d->leave($__internal_e32997c6223bcb2b609f7e4afbcc8065bc0e9376aceb4c629e4d901c527cf80d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_270da21bc0bda8c69c7940e444db4b51478873b33d947b1900d9b3c8c8c01eea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_270da21bc0bda8c69c7940e444db4b51478873b33d947b1900d9b3c8c8c01eea->enter($__internal_270da21bc0bda8c69c7940e444db4b51478873b33d947b1900d9b3c8c8c01eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_677a9d6c634d7a8adfdba17d7fde0d2b72201c7c5b80569b210b60a0855fe73a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677a9d6c634d7a8adfdba17d7fde0d2b72201c7c5b80569b210b60a0855fe73a->enter($__internal_677a9d6c634d7a8adfdba17d7fde0d2b72201c7c5b80569b210b60a0855fe73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_677a9d6c634d7a8adfdba17d7fde0d2b72201c7c5b80569b210b60a0855fe73a->leave($__internal_677a9d6c634d7a8adfdba17d7fde0d2b72201c7c5b80569b210b60a0855fe73a_prof);

        
        $__internal_270da21bc0bda8c69c7940e444db4b51478873b33d947b1900d9b3c8c8c01eea->leave($__internal_270da21bc0bda8c69c7940e444db4b51478873b33d947b1900d9b3c8c8c01eea_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c86f1e49bf8e523d2bcb1d49ae9350e86f2d2cf6951645172e5b58626a5b7d9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c86f1e49bf8e523d2bcb1d49ae9350e86f2d2cf6951645172e5b58626a5b7d9b->enter($__internal_c86f1e49bf8e523d2bcb1d49ae9350e86f2d2cf6951645172e5b58626a5b7d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb2c186348a541655ccd041fbea0dcd5d74230ff7652379b783a027e760a175a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb2c186348a541655ccd041fbea0dcd5d74230ff7652379b783a027e760a175a->enter($__internal_bb2c186348a541655ccd041fbea0dcd5d74230ff7652379b783a027e760a175a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bb2c186348a541655ccd041fbea0dcd5d74230ff7652379b783a027e760a175a->leave($__internal_bb2c186348a541655ccd041fbea0dcd5d74230ff7652379b783a027e760a175a_prof);

        
        $__internal_c86f1e49bf8e523d2bcb1d49ae9350e86f2d2cf6951645172e5b58626a5b7d9b->leave($__internal_c86f1e49bf8e523d2bcb1d49ae9350e86f2d2cf6951645172e5b58626a5b7d9b_prof);

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
