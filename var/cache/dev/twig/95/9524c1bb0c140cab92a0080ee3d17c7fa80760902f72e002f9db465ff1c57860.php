<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b0944edbb666a4cf498760d4b54db17a4e8945ee4440348764a893714a2c9ce2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_30a4048a0bfc58b57502ebcad3d2c6564203bcb6de8bce2b4ce8eca681e1ac3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a4048a0bfc58b57502ebcad3d2c6564203bcb6de8bce2b4ce8eca681e1ac3c->enter($__internal_30a4048a0bfc58b57502ebcad3d2c6564203bcb6de8bce2b4ce8eca681e1ac3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_0156c10ef67c4523808f08291295afdf1eb4ead1c169ff89d29b4f5933876ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0156c10ef67c4523808f08291295afdf1eb4ead1c169ff89d29b4f5933876ce4->enter($__internal_0156c10ef67c4523808f08291295afdf1eb4ead1c169ff89d29b4f5933876ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30a4048a0bfc58b57502ebcad3d2c6564203bcb6de8bce2b4ce8eca681e1ac3c->leave($__internal_30a4048a0bfc58b57502ebcad3d2c6564203bcb6de8bce2b4ce8eca681e1ac3c_prof);

        
        $__internal_0156c10ef67c4523808f08291295afdf1eb4ead1c169ff89d29b4f5933876ce4->leave($__internal_0156c10ef67c4523808f08291295afdf1eb4ead1c169ff89d29b4f5933876ce4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c95f2174e01775099f1bf5d32d4e97482ce24dac159c8efee6997cdf31b1362e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c95f2174e01775099f1bf5d32d4e97482ce24dac159c8efee6997cdf31b1362e->enter($__internal_c95f2174e01775099f1bf5d32d4e97482ce24dac159c8efee6997cdf31b1362e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a10e81a03909a45275c651b82a22043815bdb8829f44c2e2237116c7d4ec33ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10e81a03909a45275c651b82a22043815bdb8829f44c2e2237116c7d4ec33ef->enter($__internal_a10e81a03909a45275c651b82a22043815bdb8829f44c2e2237116c7d4ec33ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_a10e81a03909a45275c651b82a22043815bdb8829f44c2e2237116c7d4ec33ef->leave($__internal_a10e81a03909a45275c651b82a22043815bdb8829f44c2e2237116c7d4ec33ef_prof);

        
        $__internal_c95f2174e01775099f1bf5d32d4e97482ce24dac159c8efee6997cdf31b1362e->leave($__internal_c95f2174e01775099f1bf5d32d4e97482ce24dac159c8efee6997cdf31b1362e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0cd9cfbfbbb215f18bef669d86b86e4a29c6ed722fa72821308692d9055a6964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd9cfbfbbb215f18bef669d86b86e4a29c6ed722fa72821308692d9055a6964->enter($__internal_0cd9cfbfbbb215f18bef669d86b86e4a29c6ed722fa72821308692d9055a6964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7b98732982093eac0ecd9639e6587b217b96283daee6e8e8eaf5f1b1c2ff3e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b98732982093eac0ecd9639e6587b217b96283daee6e8e8eaf5f1b1c2ff3e2c->enter($__internal_7b98732982093eac0ecd9639e6587b217b96283daee6e8e8eaf5f1b1c2ff3e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7b98732982093eac0ecd9639e6587b217b96283daee6e8e8eaf5f1b1c2ff3e2c->leave($__internal_7b98732982093eac0ecd9639e6587b217b96283daee6e8e8eaf5f1b1c2ff3e2c_prof);

        
        $__internal_0cd9cfbfbbb215f18bef669d86b86e4a29c6ed722fa72821308692d9055a6964->leave($__internal_0cd9cfbfbbb215f18bef669d86b86e4a29c6ed722fa72821308692d9055a6964_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_330e4dfa555d49c61e23e88c47c1cbb86be461c481a55ad21f3aa7afea5076a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_330e4dfa555d49c61e23e88c47c1cbb86be461c481a55ad21f3aa7afea5076a8->enter($__internal_330e4dfa555d49c61e23e88c47c1cbb86be461c481a55ad21f3aa7afea5076a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cfb392da02e8cb8f36f5d6286621bc9651dfac0702e618a814b4573585188ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb392da02e8cb8f36f5d6286621bc9651dfac0702e618a814b4573585188ce5->enter($__internal_cfb392da02e8cb8f36f5d6286621bc9651dfac0702e618a814b4573585188ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_cfb392da02e8cb8f36f5d6286621bc9651dfac0702e618a814b4573585188ce5->leave($__internal_cfb392da02e8cb8f36f5d6286621bc9651dfac0702e618a814b4573585188ce5_prof);

        
        $__internal_330e4dfa555d49c61e23e88c47c1cbb86be461c481a55ad21f3aa7afea5076a8->leave($__internal_330e4dfa555d49c61e23e88c47c1cbb86be461c481a55ad21f3aa7afea5076a8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
