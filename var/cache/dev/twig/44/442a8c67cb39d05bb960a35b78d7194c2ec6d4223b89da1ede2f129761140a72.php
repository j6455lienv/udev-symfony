<?php

/* :default:add.html.twig */
class __TwigTemplate_5fd927c4af03179a3871150e88dcffddc15dfe5688542bab67693c54a77b1442 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdea328bd6b48ae62c23bb07f59189c568b1f5bf37b8af8f2ae8edc415c527be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdea328bd6b48ae62c23bb07f59189c568b1f5bf37b8af8f2ae8edc415c527be->enter($__internal_bdea328bd6b48ae62c23bb07f59189c568b1f5bf37b8af8f2ae8edc415c527be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:add.html.twig"));

        $__internal_802f01ca45452a412d7e7ee510ff115908191eda7596fa58e1dbd60dc4dc6680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802f01ca45452a412d7e7ee510ff115908191eda7596fa58e1dbd60dc4dc6680->enter($__internal_802f01ca45452a412d7e7ee510ff115908191eda7596fa58e1dbd60dc4dc6680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdea328bd6b48ae62c23bb07f59189c568b1f5bf37b8af8f2ae8edc415c527be->leave($__internal_bdea328bd6b48ae62c23bb07f59189c568b1f5bf37b8af8f2ae8edc415c527be_prof);

        
        $__internal_802f01ca45452a412d7e7ee510ff115908191eda7596fa58e1dbd60dc4dc6680->leave($__internal_802f01ca45452a412d7e7ee510ff115908191eda7596fa58e1dbd60dc4dc6680_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_394d8dc38d434e3abe33c975e4b39871934e16859579ab40b2f13db7e9e80dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394d8dc38d434e3abe33c975e4b39871934e16859579ab40b2f13db7e9e80dd8->enter($__internal_394d8dc38d434e3abe33c975e4b39871934e16859579ab40b2f13db7e9e80dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8ccabb58798c6396bd5fe031590f631d6d5032ffe1f4439c1862cf3d13b2c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ccabb58798c6396bd5fe031590f631d6d5032ffe1f4439c1862cf3d13b2c99->enter($__internal_a8ccabb58798c6396bd5fe031590f631d6d5032ffe1f4439c1862cf3d13b2c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <h1>page useradd</h1>

        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\"/>
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


    </div>
";
        
        $__internal_a8ccabb58798c6396bd5fe031590f631d6d5032ffe1f4439c1862cf3d13b2c99->leave($__internal_a8ccabb58798c6396bd5fe031590f631d6d5032ffe1f4439c1862cf3d13b2c99_prof);

        
        $__internal_394d8dc38d434e3abe33c975e4b39871934e16859579ab40b2f13db7e9e80dd8->leave($__internal_394d8dc38d434e3abe33c975e4b39871934e16859579ab40b2f13db7e9e80dd8_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bd80884fc044efd12ccf0637114e14f658f1968d33cbf38dd8c595243f6a2c3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd80884fc044efd12ccf0637114e14f658f1968d33cbf38dd8c595243f6a2c3b->enter($__internal_bd80884fc044efd12ccf0637114e14f658f1968d33cbf38dd8c595243f6a2c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_524b8bfb4e7536952b5993ca62d5d289023a4f8033ea4869ffc2fa7be3eee985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_524b8bfb4e7536952b5993ca62d5d289023a4f8033ea4869ffc2fa7be3eee985->enter($__internal_524b8bfb4e7536952b5993ca62d5d289023a4f8033ea4869ffc2fa7be3eee985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "    <style>
        body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
        h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
        h1 { font-size: 36px; }
        h2 { font-size: 21px; margin-bottom: 1em; }
        p { margin: 0 0 1em 0; }
        a { color: #0000F0; }
        a:hover { text-decoration: none; }
        code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
        #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
        #container { padding: 2em; }
        #welcome, #status { margin-bottom: 2em; }
        #welcome h1 span { display: block; font-size: 75%; }
        #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
        #icon-book { display: none; }

        @media (min-width: 768px) {
            #wrapper { width: 80%; margin: 2em auto; }
            #icon-book { display: inline-block; }
            #status a, #next a { display: block; }

            @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
        }
    </style>
";
        
        $__internal_524b8bfb4e7536952b5993ca62d5d289023a4f8033ea4869ffc2fa7be3eee985->leave($__internal_524b8bfb4e7536952b5993ca62d5d289023a4f8033ea4869ffc2fa7be3eee985_prof);

        
        $__internal_bd80884fc044efd12ccf0637114e14f658f1968d33cbf38dd8c595243f6a2c3b->leave($__internal_bd80884fc044efd12ccf0637114e14f658f1968d33cbf38dd8c595243f6a2c3b_prof);

    }

    public function getTemplateName()
    {
        return ":default:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 17,  79 => 16,  64 => 10,  59 => 8,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"wrapper\">
        <h1>page useradd</h1>

        {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\"/>
        {{ form_end(form) }}


    </div>
{% endblock %}

{% block stylesheets %}
    <style>
        body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
        h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
        h1 { font-size: 36px; }
        h2 { font-size: 21px; margin-bottom: 1em; }
        p { margin: 0 0 1em 0; }
        a { color: #0000F0; }
        a:hover { text-decoration: none; }
        code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
        #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
        #container { padding: 2em; }
        #welcome, #status { margin-bottom: 2em; }
        #welcome h1 span { display: block; font-size: 75%; }
        #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
        #icon-book { display: none; }

        @media (min-width: 768px) {
            #wrapper { width: 80%; margin: 2em auto; }
            #icon-book { display: inline-block; }
            #status a, #next a { display: block; }

            @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
        }
    </style>
{% endblock %}
", ":default:add.html.twig", "/var/www/html/udev_symfony/app/Resources/views/default/add.html.twig");
    }
}
