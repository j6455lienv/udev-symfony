<?php

/* users/delete.html.twig */
class __TwigTemplate_ffe33923167d98d345a4af3892b1190828b5f9a211ee2ee7547c7840978ac90c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "users/delete.html.twig", 1);
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
        $__internal_720f6d7b5fec72fe1bb556cd31b15cff0349ac5ebc416b0140f744f23d708a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_720f6d7b5fec72fe1bb556cd31b15cff0349ac5ebc416b0140f744f23d708a1e->enter($__internal_720f6d7b5fec72fe1bb556cd31b15cff0349ac5ebc416b0140f744f23d708a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/delete.html.twig"));

        $__internal_4d1b2a795245242861eecef4244c9fae086ed514fd19070b39f0bcbd3470c835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1b2a795245242861eecef4244c9fae086ed514fd19070b39f0bcbd3470c835->enter($__internal_4d1b2a795245242861eecef4244c9fae086ed514fd19070b39f0bcbd3470c835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_720f6d7b5fec72fe1bb556cd31b15cff0349ac5ebc416b0140f744f23d708a1e->leave($__internal_720f6d7b5fec72fe1bb556cd31b15cff0349ac5ebc416b0140f744f23d708a1e_prof);

        
        $__internal_4d1b2a795245242861eecef4244c9fae086ed514fd19070b39f0bcbd3470c835->leave($__internal_4d1b2a795245242861eecef4244c9fae086ed514fd19070b39f0bcbd3470c835_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8aa17838257bcb0b95341c04f3e425235aafd75b5672959bb77586551f97fc53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa17838257bcb0b95341c04f3e425235aafd75b5672959bb77586551f97fc53->enter($__internal_8aa17838257bcb0b95341c04f3e425235aafd75b5672959bb77586551f97fc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48b02825d927eae1a4ce756cba9f42891b56d354cbc6744f8d22c6b925e69332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b02825d927eae1a4ce756cba9f42891b56d354cbc6744f8d22c6b925e69332->enter($__internal_48b02825d927eae1a4ce756cba9f42891b56d354cbc6744f8d22c6b925e69332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_48b02825d927eae1a4ce756cba9f42891b56d354cbc6744f8d22c6b925e69332->leave($__internal_48b02825d927eae1a4ce756cba9f42891b56d354cbc6744f8d22c6b925e69332_prof);

        
        $__internal_8aa17838257bcb0b95341c04f3e425235aafd75b5672959bb77586551f97fc53->leave($__internal_8aa17838257bcb0b95341c04f3e425235aafd75b5672959bb77586551f97fc53_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cd7df248ed4c8f8d79dd7afd726ed741b4a4208805ff5bcca6b4f123a4118e44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd7df248ed4c8f8d79dd7afd726ed741b4a4208805ff5bcca6b4f123a4118e44->enter($__internal_cd7df248ed4c8f8d79dd7afd726ed741b4a4208805ff5bcca6b4f123a4118e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3301998f7ccf049fc7d6028e2ebc613c845907ca2060c307d1d891d9fe40c464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3301998f7ccf049fc7d6028e2ebc613c845907ca2060c307d1d891d9fe40c464->enter($__internal_3301998f7ccf049fc7d6028e2ebc613c845907ca2060c307d1d891d9fe40c464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3301998f7ccf049fc7d6028e2ebc613c845907ca2060c307d1d891d9fe40c464->leave($__internal_3301998f7ccf049fc7d6028e2ebc613c845907ca2060c307d1d891d9fe40c464_prof);

        
        $__internal_cd7df248ed4c8f8d79dd7afd726ed741b4a4208805ff5bcca6b4f123a4118e44->leave($__internal_cd7df248ed4c8f8d79dd7afd726ed741b4a4208805ff5bcca6b4f123a4118e44_prof);

    }

    public function getTemplateName()
    {
        return "users/delete.html.twig";
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
", "users/delete.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/delete.html.twig");
    }
}
