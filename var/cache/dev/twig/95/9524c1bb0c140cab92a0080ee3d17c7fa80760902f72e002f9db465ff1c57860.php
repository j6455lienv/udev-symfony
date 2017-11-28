<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b0944edbb666a4cf498760d4b54db17a4e8945ee4440348764a893714a2c9ce2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_96f6518a1fff11f79f0f185a93b0d043b1c6306d18323192d19e5aef6b213412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f6518a1fff11f79f0f185a93b0d043b1c6306d18323192d19e5aef6b213412->enter($__internal_96f6518a1fff11f79f0f185a93b0d043b1c6306d18323192d19e5aef6b213412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_8f4f12aaaae0c772c1b3520b2d49d612e57261be10c33bbcc41278577c3ba974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f4f12aaaae0c772c1b3520b2d49d612e57261be10c33bbcc41278577c3ba974->enter($__internal_8f4f12aaaae0c772c1b3520b2d49d612e57261be10c33bbcc41278577c3ba974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96f6518a1fff11f79f0f185a93b0d043b1c6306d18323192d19e5aef6b213412->leave($__internal_96f6518a1fff11f79f0f185a93b0d043b1c6306d18323192d19e5aef6b213412_prof);

        
        $__internal_8f4f12aaaae0c772c1b3520b2d49d612e57261be10c33bbcc41278577c3ba974->leave($__internal_8f4f12aaaae0c772c1b3520b2d49d612e57261be10c33bbcc41278577c3ba974_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c3948f1545141f992dc410cfb87c3040ed0b09ceb3adacc8e2d26bd5a76e5f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3948f1545141f992dc410cfb87c3040ed0b09ceb3adacc8e2d26bd5a76e5f83->enter($__internal_c3948f1545141f992dc410cfb87c3040ed0b09ceb3adacc8e2d26bd5a76e5f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c701f817ad7f722ec6a3e361e6d84e60b8107f95895fde45682e401b0b9f577f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c701f817ad7f722ec6a3e361e6d84e60b8107f95895fde45682e401b0b9f577f->enter($__internal_c701f817ad7f722ec6a3e361e6d84e60b8107f95895fde45682e401b0b9f577f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c701f817ad7f722ec6a3e361e6d84e60b8107f95895fde45682e401b0b9f577f->leave($__internal_c701f817ad7f722ec6a3e361e6d84e60b8107f95895fde45682e401b0b9f577f_prof);

        
        $__internal_c3948f1545141f992dc410cfb87c3040ed0b09ceb3adacc8e2d26bd5a76e5f83->leave($__internal_c3948f1545141f992dc410cfb87c3040ed0b09ceb3adacc8e2d26bd5a76e5f83_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_22b44a4ebff52c3368c9afca639c17ce7380c27956b916acd1d46a10346bc5e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b44a4ebff52c3368c9afca639c17ce7380c27956b916acd1d46a10346bc5e9->enter($__internal_22b44a4ebff52c3368c9afca639c17ce7380c27956b916acd1d46a10346bc5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e9b49792672e14635766c436bc44e1303d84023234110d58ac18849a0ccec46e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b49792672e14635766c436bc44e1303d84023234110d58ac18849a0ccec46e->enter($__internal_e9b49792672e14635766c436bc44e1303d84023234110d58ac18849a0ccec46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e9b49792672e14635766c436bc44e1303d84023234110d58ac18849a0ccec46e->leave($__internal_e9b49792672e14635766c436bc44e1303d84023234110d58ac18849a0ccec46e_prof);

        
        $__internal_22b44a4ebff52c3368c9afca639c17ce7380c27956b916acd1d46a10346bc5e9->leave($__internal_22b44a4ebff52c3368c9afca639c17ce7380c27956b916acd1d46a10346bc5e9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_21f17de3a0ed32b217da84f5e9262d3db8b2551a05db131c5b8c9b71cb9408c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21f17de3a0ed32b217da84f5e9262d3db8b2551a05db131c5b8c9b71cb9408c6->enter($__internal_21f17de3a0ed32b217da84f5e9262d3db8b2551a05db131c5b8c9b71cb9408c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f38f531472b45675530c69c22564514c0dc3dac452d3fc8e8740b304fd18bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f38f531472b45675530c69c22564514c0dc3dac452d3fc8e8740b304fd18bbc->enter($__internal_1f38f531472b45675530c69c22564514c0dc3dac452d3fc8e8740b304fd18bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1f38f531472b45675530c69c22564514c0dc3dac452d3fc8e8740b304fd18bbc->leave($__internal_1f38f531472b45675530c69c22564514c0dc3dac452d3fc8e8740b304fd18bbc_prof);

        
        $__internal_21f17de3a0ed32b217da84f5e9262d3db8b2551a05db131c5b8c9b71cb9408c6->leave($__internal_21f17de3a0ed32b217da84f5e9262d3db8b2551a05db131c5b8c9b71cb9408c6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
