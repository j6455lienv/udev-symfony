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
        $__internal_ed1c9c6f6cda82a774a1f3b3a17b738d49587dd8d8502d03f5b73d471a1d6e52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1c9c6f6cda82a774a1f3b3a17b738d49587dd8d8502d03f5b73d471a1d6e52->enter($__internal_ed1c9c6f6cda82a774a1f3b3a17b738d49587dd8d8502d03f5b73d471a1d6e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_dafda1cdce90820772ff5d9b2a0c4c801595a32d0a0e5a88303ba468ef73ac91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dafda1cdce90820772ff5d9b2a0c4c801595a32d0a0e5a88303ba468ef73ac91->enter($__internal_dafda1cdce90820772ff5d9b2a0c4c801595a32d0a0e5a88303ba468ef73ac91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed1c9c6f6cda82a774a1f3b3a17b738d49587dd8d8502d03f5b73d471a1d6e52->leave($__internal_ed1c9c6f6cda82a774a1f3b3a17b738d49587dd8d8502d03f5b73d471a1d6e52_prof);

        
        $__internal_dafda1cdce90820772ff5d9b2a0c4c801595a32d0a0e5a88303ba468ef73ac91->leave($__internal_dafda1cdce90820772ff5d9b2a0c4c801595a32d0a0e5a88303ba468ef73ac91_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_15eceb89a2397dd6deb823398d5305f2dc3bc93bef733a578126a569b17d5f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15eceb89a2397dd6deb823398d5305f2dc3bc93bef733a578126a569b17d5f22->enter($__internal_15eceb89a2397dd6deb823398d5305f2dc3bc93bef733a578126a569b17d5f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b586dadd0c3b3d59ecc6bf1fc5bbb14ccb96f7394def7ee1cf1afc0bcb4ece34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b586dadd0c3b3d59ecc6bf1fc5bbb14ccb96f7394def7ee1cf1afc0bcb4ece34->enter($__internal_b586dadd0c3b3d59ecc6bf1fc5bbb14ccb96f7394def7ee1cf1afc0bcb4ece34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b586dadd0c3b3d59ecc6bf1fc5bbb14ccb96f7394def7ee1cf1afc0bcb4ece34->leave($__internal_b586dadd0c3b3d59ecc6bf1fc5bbb14ccb96f7394def7ee1cf1afc0bcb4ece34_prof);

        
        $__internal_15eceb89a2397dd6deb823398d5305f2dc3bc93bef733a578126a569b17d5f22->leave($__internal_15eceb89a2397dd6deb823398d5305f2dc3bc93bef733a578126a569b17d5f22_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3cce507652de86fe7955de408ada4ed7f8bdfec533ae005f920190e234832e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3cce507652de86fe7955de408ada4ed7f8bdfec533ae005f920190e234832e4->enter($__internal_a3cce507652de86fe7955de408ada4ed7f8bdfec533ae005f920190e234832e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b21b51ae664ffabf725eb7e05e5596740c07d05f683eb5c01f0e115195ea7692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b21b51ae664ffabf725eb7e05e5596740c07d05f683eb5c01f0e115195ea7692->enter($__internal_b21b51ae664ffabf725eb7e05e5596740c07d05f683eb5c01f0e115195ea7692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b21b51ae664ffabf725eb7e05e5596740c07d05f683eb5c01f0e115195ea7692->leave($__internal_b21b51ae664ffabf725eb7e05e5596740c07d05f683eb5c01f0e115195ea7692_prof);

        
        $__internal_a3cce507652de86fe7955de408ada4ed7f8bdfec533ae005f920190e234832e4->leave($__internal_a3cce507652de86fe7955de408ada4ed7f8bdfec533ae005f920190e234832e4_prof);

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
