<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_c6c4b2ee3276152ad955fd200e85c24f8be002bdf1a227363e6211bdc6f9563f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db3373ed709c07d4cca398f3e63be9a009fcff61b81f48f6ea1f1f70cfb60e6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db3373ed709c07d4cca398f3e63be9a009fcff61b81f48f6ea1f1f70cfb60e6a->enter($__internal_db3373ed709c07d4cca398f3e63be9a009fcff61b81f48f6ea1f1f70cfb60e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_5173fdf99c6cd084557a36fa665d41e9e46693ea964800ff35861c99799b6c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5173fdf99c6cd084557a36fa665d41e9e46693ea964800ff35861c99799b6c9c->enter($__internal_5173fdf99c6cd084557a36fa665d41e9e46693ea964800ff35861c99799b6c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db3373ed709c07d4cca398f3e63be9a009fcff61b81f48f6ea1f1f70cfb60e6a->leave($__internal_db3373ed709c07d4cca398f3e63be9a009fcff61b81f48f6ea1f1f70cfb60e6a_prof);

        
        $__internal_5173fdf99c6cd084557a36fa665d41e9e46693ea964800ff35861c99799b6c9c->leave($__internal_5173fdf99c6cd084557a36fa665d41e9e46693ea964800ff35861c99799b6c9c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_29ee974228f54f4bb23548ceba40e3309352511b29eac172b638dbce4a870cc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29ee974228f54f4bb23548ceba40e3309352511b29eac172b638dbce4a870cc9->enter($__internal_29ee974228f54f4bb23548ceba40e3309352511b29eac172b638dbce4a870cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f308ca8e374acfa92363d37dd882e6b2b02ba91135237be8976683dff8d8c604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f308ca8e374acfa92363d37dd882e6b2b02ba91135237be8976683dff8d8c604->enter($__internal_f308ca8e374acfa92363d37dd882e6b2b02ba91135237be8976683dff8d8c604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f308ca8e374acfa92363d37dd882e6b2b02ba91135237be8976683dff8d8c604->leave($__internal_f308ca8e374acfa92363d37dd882e6b2b02ba91135237be8976683dff8d8c604_prof);

        
        $__internal_29ee974228f54f4bb23548ceba40e3309352511b29eac172b638dbce4a870cc9->leave($__internal_29ee974228f54f4bb23548ceba40e3309352511b29eac172b638dbce4a870cc9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_daa27598dc3c68a8c1caafe936ac3f9bc123a62f3a30f45cc2ab950dc78afe8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daa27598dc3c68a8c1caafe936ac3f9bc123a62f3a30f45cc2ab950dc78afe8b->enter($__internal_daa27598dc3c68a8c1caafe936ac3f9bc123a62f3a30f45cc2ab950dc78afe8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_31381db1415b2e130015e1addaeb6944cda70437e9f4a4d6a5ff892d5515c9d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31381db1415b2e130015e1addaeb6944cda70437e9f4a4d6a5ff892d5515c9d1->enter($__internal_31381db1415b2e130015e1addaeb6944cda70437e9f4a4d6a5ff892d5515c9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_31381db1415b2e130015e1addaeb6944cda70437e9f4a4d6a5ff892d5515c9d1->leave($__internal_31381db1415b2e130015e1addaeb6944cda70437e9f4a4d6a5ff892d5515c9d1_prof);

        
        $__internal_daa27598dc3c68a8c1caafe936ac3f9bc123a62f3a30f45cc2ab950dc78afe8b->leave($__internal_daa27598dc3c68a8c1caafe936ac3f9bc123a62f3a30f45cc2ab950dc78afe8b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e1f76a47762c19f4357f275b031b104f5334130ee1f110ea25fb496cf1e9fb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e1f76a47762c19f4357f275b031b104f5334130ee1f110ea25fb496cf1e9fb0->enter($__internal_0e1f76a47762c19f4357f275b031b104f5334130ee1f110ea25fb496cf1e9fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dce2fcdd45aab03409bf98ff66853f4644bbcf6d014539a4b4b30cbc9de2f008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce2fcdd45aab03409bf98ff66853f4644bbcf6d014539a4b4b30cbc9de2f008->enter($__internal_dce2fcdd45aab03409bf98ff66853f4644bbcf6d014539a4b4b30cbc9de2f008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_dce2fcdd45aab03409bf98ff66853f4644bbcf6d014539a4b4b30cbc9de2f008->leave($__internal_dce2fcdd45aab03409bf98ff66853f4644bbcf6d014539a4b4b30cbc9de2f008_prof);

        
        $__internal_0e1f76a47762c19f4357f275b031b104f5334130ee1f110ea25fb496cf1e9fb0->leave($__internal_0e1f76a47762c19f4357f275b031b104f5334130ee1f110ea25fb496cf1e9fb0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
