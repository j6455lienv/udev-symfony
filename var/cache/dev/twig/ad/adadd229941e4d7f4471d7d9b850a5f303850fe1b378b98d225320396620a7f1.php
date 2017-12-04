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
        $__internal_73fbb92d764f834b5d9cafe0b03bcd080a2fb6c1b6d9526b754a67ee55bcbe55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73fbb92d764f834b5d9cafe0b03bcd080a2fb6c1b6d9526b754a67ee55bcbe55->enter($__internal_73fbb92d764f834b5d9cafe0b03bcd080a2fb6c1b6d9526b754a67ee55bcbe55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_3732533dcdac4d453ad2c041b3095d79ad447c1d885462fcd6cb5331b420bada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3732533dcdac4d453ad2c041b3095d79ad447c1d885462fcd6cb5331b420bada->enter($__internal_3732533dcdac4d453ad2c041b3095d79ad447c1d885462fcd6cb5331b420bada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73fbb92d764f834b5d9cafe0b03bcd080a2fb6c1b6d9526b754a67ee55bcbe55->leave($__internal_73fbb92d764f834b5d9cafe0b03bcd080a2fb6c1b6d9526b754a67ee55bcbe55_prof);

        
        $__internal_3732533dcdac4d453ad2c041b3095d79ad447c1d885462fcd6cb5331b420bada->leave($__internal_3732533dcdac4d453ad2c041b3095d79ad447c1d885462fcd6cb5331b420bada_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_31a2e0bcb55d2d46e38a02643d6ec4ff4a3d5ea357ae279433cf129380e0b843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31a2e0bcb55d2d46e38a02643d6ec4ff4a3d5ea357ae279433cf129380e0b843->enter($__internal_31a2e0bcb55d2d46e38a02643d6ec4ff4a3d5ea357ae279433cf129380e0b843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0e8d6c5a0a97cb32dfabc6e751cac2360fe2cc011179ea8d8f7c9249fc54f6fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8d6c5a0a97cb32dfabc6e751cac2360fe2cc011179ea8d8f7c9249fc54f6fd->enter($__internal_0e8d6c5a0a97cb32dfabc6e751cac2360fe2cc011179ea8d8f7c9249fc54f6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0e8d6c5a0a97cb32dfabc6e751cac2360fe2cc011179ea8d8f7c9249fc54f6fd->leave($__internal_0e8d6c5a0a97cb32dfabc6e751cac2360fe2cc011179ea8d8f7c9249fc54f6fd_prof);

        
        $__internal_31a2e0bcb55d2d46e38a02643d6ec4ff4a3d5ea357ae279433cf129380e0b843->leave($__internal_31a2e0bcb55d2d46e38a02643d6ec4ff4a3d5ea357ae279433cf129380e0b843_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0cc42afa1b51a181219ee454ce669fcbde1eac7a6811ba2ceef99a1fa93e3f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0cc42afa1b51a181219ee454ce669fcbde1eac7a6811ba2ceef99a1fa93e3f1->enter($__internal_c0cc42afa1b51a181219ee454ce669fcbde1eac7a6811ba2ceef99a1fa93e3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3065fb1b9348ae3e1c0e4bd7fa14886a9fc7d5228899ff64902a5b20655f5df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3065fb1b9348ae3e1c0e4bd7fa14886a9fc7d5228899ff64902a5b20655f5df9->enter($__internal_3065fb1b9348ae3e1c0e4bd7fa14886a9fc7d5228899ff64902a5b20655f5df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3065fb1b9348ae3e1c0e4bd7fa14886a9fc7d5228899ff64902a5b20655f5df9->leave($__internal_3065fb1b9348ae3e1c0e4bd7fa14886a9fc7d5228899ff64902a5b20655f5df9_prof);

        
        $__internal_c0cc42afa1b51a181219ee454ce669fcbde1eac7a6811ba2ceef99a1fa93e3f1->leave($__internal_c0cc42afa1b51a181219ee454ce669fcbde1eac7a6811ba2ceef99a1fa93e3f1_prof);

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
