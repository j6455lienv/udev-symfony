<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5ace0514ac51dddf7015e278581d1ccbc34e9ce9c04fa0c5adac0bc55a3fad5b extends Twig_Template
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
        $__internal_b28c7c175b5a59e4bd53e8ff05348eac24f05849eed87b173ba8bb1797fce226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b28c7c175b5a59e4bd53e8ff05348eac24f05849eed87b173ba8bb1797fce226->enter($__internal_b28c7c175b5a59e4bd53e8ff05348eac24f05849eed87b173ba8bb1797fce226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_fe02447d1402d91417e3022fafc5de2f614fab2f7d91bea5293878c57ef091f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe02447d1402d91417e3022fafc5de2f614fab2f7d91bea5293878c57ef091f3->enter($__internal_fe02447d1402d91417e3022fafc5de2f614fab2f7d91bea5293878c57ef091f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b28c7c175b5a59e4bd53e8ff05348eac24f05849eed87b173ba8bb1797fce226->leave($__internal_b28c7c175b5a59e4bd53e8ff05348eac24f05849eed87b173ba8bb1797fce226_prof);

        
        $__internal_fe02447d1402d91417e3022fafc5de2f614fab2f7d91bea5293878c57ef091f3->leave($__internal_fe02447d1402d91417e3022fafc5de2f614fab2f7d91bea5293878c57ef091f3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ca69466d1aef82cd300b28dadcd484615c3a8a72702ea1dc53c345197a050231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca69466d1aef82cd300b28dadcd484615c3a8a72702ea1dc53c345197a050231->enter($__internal_ca69466d1aef82cd300b28dadcd484615c3a8a72702ea1dc53c345197a050231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1afc43613136c91cc846903db6906379fd524e5826e455d96c0a52d56215002d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1afc43613136c91cc846903db6906379fd524e5826e455d96c0a52d56215002d->enter($__internal_1afc43613136c91cc846903db6906379fd524e5826e455d96c0a52d56215002d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1afc43613136c91cc846903db6906379fd524e5826e455d96c0a52d56215002d->leave($__internal_1afc43613136c91cc846903db6906379fd524e5826e455d96c0a52d56215002d_prof);

        
        $__internal_ca69466d1aef82cd300b28dadcd484615c3a8a72702ea1dc53c345197a050231->leave($__internal_ca69466d1aef82cd300b28dadcd484615c3a8a72702ea1dc53c345197a050231_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_27c31d4f5474064238f0ce0a3e2c4ad477edf14105a837229a746c370aa998f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27c31d4f5474064238f0ce0a3e2c4ad477edf14105a837229a746c370aa998f5->enter($__internal_27c31d4f5474064238f0ce0a3e2c4ad477edf14105a837229a746c370aa998f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7de7ad75809d4d3abffaa80aa998b49cbf4744463de5ff8bf9f9640f54f4cf10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de7ad75809d4d3abffaa80aa998b49cbf4744463de5ff8bf9f9640f54f4cf10->enter($__internal_7de7ad75809d4d3abffaa80aa998b49cbf4744463de5ff8bf9f9640f54f4cf10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7de7ad75809d4d3abffaa80aa998b49cbf4744463de5ff8bf9f9640f54f4cf10->leave($__internal_7de7ad75809d4d3abffaa80aa998b49cbf4744463de5ff8bf9f9640f54f4cf10_prof);

        
        $__internal_27c31d4f5474064238f0ce0a3e2c4ad477edf14105a837229a746c370aa998f5->leave($__internal_27c31d4f5474064238f0ce0a3e2c4ad477edf14105a837229a746c370aa998f5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3579998c44afe59038769cb1539dd7490d0988564b66c437d74b242a9b717874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3579998c44afe59038769cb1539dd7490d0988564b66c437d74b242a9b717874->enter($__internal_3579998c44afe59038769cb1539dd7490d0988564b66c437d74b242a9b717874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c4330e6bc3a33281afa93a3c608486ba5aa8e578f44826934ed7cd4af91b065b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4330e6bc3a33281afa93a3c608486ba5aa8e578f44826934ed7cd4af91b065b->enter($__internal_c4330e6bc3a33281afa93a3c608486ba5aa8e578f44826934ed7cd4af91b065b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_c4330e6bc3a33281afa93a3c608486ba5aa8e578f44826934ed7cd4af91b065b->leave($__internal_c4330e6bc3a33281afa93a3c608486ba5aa8e578f44826934ed7cd4af91b065b_prof);

        
        $__internal_3579998c44afe59038769cb1539dd7490d0988564b66c437d74b242a9b717874->leave($__internal_3579998c44afe59038769cb1539dd7490d0988564b66c437d74b242a9b717874_prof);

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
