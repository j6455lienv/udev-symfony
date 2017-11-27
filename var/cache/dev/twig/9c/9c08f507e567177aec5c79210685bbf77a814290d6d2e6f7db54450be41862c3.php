<?php

/* users/edit.html.twig */
class __TwigTemplate_4569e29102bd550996c4b9ebec62496e76bc6df8ebee1cb5c2b7e39d7cb9b260 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "users/edit.html.twig", 1);
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
        $__internal_554a5cfd8ba4c9c5fd7a6dac6c20518c559c75a11ab3de47dcdc31345594e214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_554a5cfd8ba4c9c5fd7a6dac6c20518c559c75a11ab3de47dcdc31345594e214->enter($__internal_554a5cfd8ba4c9c5fd7a6dac6c20518c559c75a11ab3de47dcdc31345594e214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/edit.html.twig"));

        $__internal_15d7f2f1aec1d620352f5ce63c9687d32f418546c6f2758e651b5216bbbcef23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d7f2f1aec1d620352f5ce63c9687d32f418546c6f2758e651b5216bbbcef23->enter($__internal_15d7f2f1aec1d620352f5ce63c9687d32f418546c6f2758e651b5216bbbcef23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_554a5cfd8ba4c9c5fd7a6dac6c20518c559c75a11ab3de47dcdc31345594e214->leave($__internal_554a5cfd8ba4c9c5fd7a6dac6c20518c559c75a11ab3de47dcdc31345594e214_prof);

        
        $__internal_15d7f2f1aec1d620352f5ce63c9687d32f418546c6f2758e651b5216bbbcef23->leave($__internal_15d7f2f1aec1d620352f5ce63c9687d32f418546c6f2758e651b5216bbbcef23_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e44aad3bbad55bde9a1411d382f2230ff7eaa13fca1c07fcd5bc9ef4fee0b0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e44aad3bbad55bde9a1411d382f2230ff7eaa13fca1c07fcd5bc9ef4fee0b0d->enter($__internal_7e44aad3bbad55bde9a1411d382f2230ff7eaa13fca1c07fcd5bc9ef4fee0b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52f2d48d9bba39a2088b7a9dd4c1c0068f6707d655d9315f2f65a05c4deeac6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f2d48d9bba39a2088b7a9dd4c1c0068f6707d655d9315f2f65a05c4deeac6d->enter($__internal_52f2d48d9bba39a2088b7a9dd4c1c0068f6707d655d9315f2f65a05c4deeac6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 5
        echo "    <div id=\"wrapper\">

        <h1>Edit (users/edit)</h1>

        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Update\"/>
        <a href=\"http://localhost/udev_symfony/web/app_dev.php/users\"><input type=\"button\" class=\"btn btn-defaut\"
                                                                             value=\"Back\"/></a>

        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
";
        
        $__internal_52f2d48d9bba39a2088b7a9dd4c1c0068f6707d655d9315f2f65a05c4deeac6d->leave($__internal_52f2d48d9bba39a2088b7a9dd4c1c0068f6707d655d9315f2f65a05c4deeac6d_prof);

        
        $__internal_7e44aad3bbad55bde9a1411d382f2230ff7eaa13fca1c07fcd5bc9ef4fee0b0d->leave($__internal_7e44aad3bbad55bde9a1411d382f2230ff7eaa13fca1c07fcd5bc9ef4fee0b0d_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0597b6315629821277ca9c74c6dbf4ad2722d693b38491aae130c1539506076a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0597b6315629821277ca9c74c6dbf4ad2722d693b38491aae130c1539506076a->enter($__internal_0597b6315629821277ca9c74c6dbf4ad2722d693b38491aae130c1539506076a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_463bac2ddbd7265c0726901ef8cbd92e7cd1b6c816029411ebc54cccbab6b383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463bac2ddbd7265c0726901ef8cbd92e7cd1b6c816029411ebc54cccbab6b383->enter($__internal_463bac2ddbd7265c0726901ef8cbd92e7cd1b6c816029411ebc54cccbab6b383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 21
        echo "    <style>
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
        
        $__internal_463bac2ddbd7265c0726901ef8cbd92e7cd1b6c816029411ebc54cccbab6b383->leave($__internal_463bac2ddbd7265c0726901ef8cbd92e7cd1b6c816029411ebc54cccbab6b383_prof);

        
        $__internal_0597b6315629821277ca9c74c6dbf4ad2722d693b38491aae130c1539506076a->leave($__internal_0597b6315629821277ca9c74c6dbf4ad2722d693b38491aae130c1539506076a_prof);

    }

    public function getTemplateName()
    {
        return "users/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 21,  85 => 20,  71 => 15,  63 => 10,  59 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
    {% form_theme form 'bootstrap_3_layout.html.twig' %}
    <div id=\"wrapper\">

        <h1>Edit (users/edit)</h1>

        {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Update\"/>
        <a href=\"http://localhost/udev_symfony/web/app_dev.php/users\"><input type=\"button\" class=\"btn btn-defaut\"
                                                                             value=\"Back\"/></a>

        {{ form_end(form) }}

    </div>
{% endblock %}

{% block stylesheets %}
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
{% endblock %}
", "users/edit.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/edit.html.twig");
    }
}
