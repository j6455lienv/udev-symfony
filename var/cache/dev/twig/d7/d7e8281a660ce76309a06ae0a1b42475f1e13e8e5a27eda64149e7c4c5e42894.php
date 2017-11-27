<?php

/* users/add.html.twig */
class __TwigTemplate_784a4f9e9e3a8a8cf03cb60e7b5d7f54af9288b3e8dd371269f98b5a2180dcc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "users/add.html.twig", 1);
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
        $__internal_04ce91015ad2c44584426e72f5322d44900bb694fd33f5391ad982c1e1bb9742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ce91015ad2c44584426e72f5322d44900bb694fd33f5391ad982c1e1bb9742->enter($__internal_04ce91015ad2c44584426e72f5322d44900bb694fd33f5391ad982c1e1bb9742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/add.html.twig"));

        $__internal_74bf7c3444f1cd91fefc69703407b7def4b21bf401744c75bcc07f6274e2a04b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74bf7c3444f1cd91fefc69703407b7def4b21bf401744c75bcc07f6274e2a04b->enter($__internal_74bf7c3444f1cd91fefc69703407b7def4b21bf401744c75bcc07f6274e2a04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04ce91015ad2c44584426e72f5322d44900bb694fd33f5391ad982c1e1bb9742->leave($__internal_04ce91015ad2c44584426e72f5322d44900bb694fd33f5391ad982c1e1bb9742_prof);

        
        $__internal_74bf7c3444f1cd91fefc69703407b7def4b21bf401744c75bcc07f6274e2a04b->leave($__internal_74bf7c3444f1cd91fefc69703407b7def4b21bf401744c75bcc07f6274e2a04b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_738cd3ed7d7e32ea06c548b57933b1e2f35a8d05d28186e79a790c7735076b84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_738cd3ed7d7e32ea06c548b57933b1e2f35a8d05d28186e79a790c7735076b84->enter($__internal_738cd3ed7d7e32ea06c548b57933b1e2f35a8d05d28186e79a790c7735076b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_732082b118a215f4f0f7e3598e45d7b5cb3f4fa0eb9588639f3f86412cfc3411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_732082b118a215f4f0f7e3598e45d7b5cb3f4fa0eb9588639f3f86412cfc3411->enter($__internal_732082b118a215f4f0f7e3598e45d7b5cb3f4fa0eb9588639f3f86412cfc3411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 5
        echo "    <div id=\"wrapper\">

        <h1>User Add (users/add)</h1>

        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Create\"/>
        <a href=\"http://localhost/udev_symfony/web/app_dev.php/users\"><input type=\"button\" class=\"btn btn-defaut\"
                                                                             value=\"Back\"/></a>

        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
";
        
        $__internal_732082b118a215f4f0f7e3598e45d7b5cb3f4fa0eb9588639f3f86412cfc3411->leave($__internal_732082b118a215f4f0f7e3598e45d7b5cb3f4fa0eb9588639f3f86412cfc3411_prof);

        
        $__internal_738cd3ed7d7e32ea06c548b57933b1e2f35a8d05d28186e79a790c7735076b84->leave($__internal_738cd3ed7d7e32ea06c548b57933b1e2f35a8d05d28186e79a790c7735076b84_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a83007a5334e2ff17c0bcb28e753709e3095c0725850b2c0a73e91dc965beeeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a83007a5334e2ff17c0bcb28e753709e3095c0725850b2c0a73e91dc965beeeb->enter($__internal_a83007a5334e2ff17c0bcb28e753709e3095c0725850b2c0a73e91dc965beeeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_612c47fc4ca93a7e3fc96ecb0fa28df49a7e5a73e5a1f2be0e3f5e26e61e28d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612c47fc4ca93a7e3fc96ecb0fa28df49a7e5a73e5a1f2be0e3f5e26e61e28d9->enter($__internal_612c47fc4ca93a7e3fc96ecb0fa28df49a7e5a73e5a1f2be0e3f5e26e61e28d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_612c47fc4ca93a7e3fc96ecb0fa28df49a7e5a73e5a1f2be0e3f5e26e61e28d9->leave($__internal_612c47fc4ca93a7e3fc96ecb0fa28df49a7e5a73e5a1f2be0e3f5e26e61e28d9_prof);

        
        $__internal_a83007a5334e2ff17c0bcb28e753709e3095c0725850b2c0a73e91dc965beeeb->leave($__internal_a83007a5334e2ff17c0bcb28e753709e3095c0725850b2c0a73e91dc965beeeb_prof);

    }

    public function getTemplateName()
    {
        return "users/add.html.twig";
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

        <h1>User Add (users/add)</h1>

        {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Create\"/>
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
", "users/add.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/add.html.twig");
    }
}
