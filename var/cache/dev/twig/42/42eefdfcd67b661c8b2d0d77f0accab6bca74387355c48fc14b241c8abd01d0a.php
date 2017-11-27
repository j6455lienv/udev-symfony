<?php

/* default/index.html.twig */
class __TwigTemplate_c12f1c8e427dafa37c304deaf8933f5490e0b276f70ac2796157b4e87ca63c80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7502128ea7018dab8e9847dfadc8263aabda0b27beff3194074ed95fb7bafc4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7502128ea7018dab8e9847dfadc8263aabda0b27beff3194074ed95fb7bafc4b->enter($__internal_7502128ea7018dab8e9847dfadc8263aabda0b27beff3194074ed95fb7bafc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_95af79f785202d98cd10cad7b8cd8aa0d21d1d67fde8a6c722b919c929c219c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95af79f785202d98cd10cad7b8cd8aa0d21d1d67fde8a6c722b919c929c219c5->enter($__internal_95af79f785202d98cd10cad7b8cd8aa0d21d1d67fde8a6c722b919c929c219c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7502128ea7018dab8e9847dfadc8263aabda0b27beff3194074ed95fb7bafc4b->leave($__internal_7502128ea7018dab8e9847dfadc8263aabda0b27beff3194074ed95fb7bafc4b_prof);

        
        $__internal_95af79f785202d98cd10cad7b8cd8aa0d21d1d67fde8a6c722b919c929c219c5->leave($__internal_95af79f785202d98cd10cad7b8cd8aa0d21d1d67fde8a6c722b919c929c219c5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7786abe0932cd07b0ee10d4e11de6dd31607856900d6aaeb88c6e50a12e03763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7786abe0932cd07b0ee10d4e11de6dd31607856900d6aaeb88c6e50a12e03763->enter($__internal_7786abe0932cd07b0ee10d4e11de6dd31607856900d6aaeb88c6e50a12e03763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_220d1caea46836038d6a0a86c4681989648dafa1155d1eeb40e8753f3a59c5b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220d1caea46836038d6a0a86c4681989648dafa1155d1eeb40e8753f3a59c5b8->enter($__internal_220d1caea46836038d6a0a86c4681989648dafa1155d1eeb40e8753f3a59c5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo twig_include($this->env, $context, "layout/mainMenu.html.twig", array("current" => "homepage"));
        echo "
    <div id=\"wrapper\">
        <div id=\"container\">
            <h1>TP-SYMFONY-Julien Venet</h1>
            <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/img.jpg"), "html", null, true);
        echo "\">

        </div>
    </div>
    <style>
        body {
            background: #F5F5F5;
            font: 18px/1.5 sans-serif;
        }

        h1, h2 {
            line-height: 1.2;
            margin: 0 0 .5em;
        }

        h1 {
            font-size: 36px;
        }

        h2 {
            font-size: 21px;
            margin-bottom: 1em;
        }

        p {
            margin: 0 0 1em 0;
        }

        a {
            color: #0000F0;
        }

        a:hover {
            text-decoration: none;
        }

        code {
            background: #F5F5F5;
            max-width: 100px;
            padding: 2px 6px;
            word-wrap: break-word;
        }

        #wrapper {
            background: #FFF;
            margin: 1em auto;
            max-width: 800px;
            width: 95%;
        }

        #container {
            padding: 2em;
        }

        #welcome, #status {
            margin-bottom: 2em;
        }

        #welcome h1 span {
            display: block;
            font-size: 75%;
        }

        #icon-status, #icon-book {
            float: left;
            height: 64px;
            margin-right: 1em;
            margin-top: -4px;
            width: 64px;
        }

        #icon-book {
            display: none;
        }

        @media (min-width: 768px) {
            #wrapper {
                width: 80%;
                margin: 2em auto;
            }

            #icon-book {
                display: inline-block;
            }

            #status a, #next a {
                display: block;
            }

            @-webkit-keyframes fade-in {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            @keyframes fade-in {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            .sf-toolbar {
                opacity: 0;
                -webkit-animation: fade-in 1s .2s forwards;
                animation: fade-in 1s .2s forwards;
            }
        }
    </style>
";
        
        $__internal_220d1caea46836038d6a0a86c4681989648dafa1155d1eeb40e8753f3a59c5b8->leave($__internal_220d1caea46836038d6a0a86c4681989648dafa1155d1eeb40e8753f3a59c5b8_prof);

        
        $__internal_7786abe0932cd07b0ee10d4e11de6dd31607856900d6aaeb88c6e50a12e03763->leave($__internal_7786abe0932cd07b0ee10d4e11de6dd31607856900d6aaeb88c6e50a12e03763_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  49 => 3,  40 => 2,  11 => 1,);
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
    {{ include('layout/mainMenu.html.twig', {'current' : 'homepage'}) }}
    <div id=\"wrapper\">
        <div id=\"container\">
            <h1>TP-SYMFONY-Julien Venet</h1>
            <img src=\"{{ asset('img/img.jpg') }}\">

        </div>
    </div>
    <style>
        body {
            background: #F5F5F5;
            font: 18px/1.5 sans-serif;
        }

        h1, h2 {
            line-height: 1.2;
            margin: 0 0 .5em;
        }

        h1 {
            font-size: 36px;
        }

        h2 {
            font-size: 21px;
            margin-bottom: 1em;
        }

        p {
            margin: 0 0 1em 0;
        }

        a {
            color: #0000F0;
        }

        a:hover {
            text-decoration: none;
        }

        code {
            background: #F5F5F5;
            max-width: 100px;
            padding: 2px 6px;
            word-wrap: break-word;
        }

        #wrapper {
            background: #FFF;
            margin: 1em auto;
            max-width: 800px;
            width: 95%;
        }

        #container {
            padding: 2em;
        }

        #welcome, #status {
            margin-bottom: 2em;
        }

        #welcome h1 span {
            display: block;
            font-size: 75%;
        }

        #icon-status, #icon-book {
            float: left;
            height: 64px;
            margin-right: 1em;
            margin-top: -4px;
            width: 64px;
        }

        #icon-book {
            display: none;
        }

        @media (min-width: 768px) {
            #wrapper {
                width: 80%;
                margin: 2em auto;
            }

            #icon-book {
                display: inline-block;
            }

            #status a, #next a {
                display: block;
            }

            @-webkit-keyframes fade-in {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            @keyframes fade-in {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            .sf-toolbar {
                opacity: 0;
                -webkit-animation: fade-in 1s .2s forwards;
                animation: fade-in 1s .2s forwards;
            }
        }
    </style>
{% endblock %}", "default/index.html.twig", "/var/www/html/udev_symfony/app/Resources/views/default/index.html.twig");
    }
}
