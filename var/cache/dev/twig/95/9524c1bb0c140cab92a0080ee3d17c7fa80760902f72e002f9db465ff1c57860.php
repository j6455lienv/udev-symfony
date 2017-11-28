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
        $__internal_0addbe8458221ed0ffe04f21eeeeef630f0d7c118452fa50feacc7e6e40e915e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0addbe8458221ed0ffe04f21eeeeef630f0d7c118452fa50feacc7e6e40e915e->enter($__internal_0addbe8458221ed0ffe04f21eeeeef630f0d7c118452fa50feacc7e6e40e915e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_326cb590bc89f3c5290e78af20e3d7634fdecaa152755ff26a219d460464e66e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326cb590bc89f3c5290e78af20e3d7634fdecaa152755ff26a219d460464e66e->enter($__internal_326cb590bc89f3c5290e78af20e3d7634fdecaa152755ff26a219d460464e66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0addbe8458221ed0ffe04f21eeeeef630f0d7c118452fa50feacc7e6e40e915e->leave($__internal_0addbe8458221ed0ffe04f21eeeeef630f0d7c118452fa50feacc7e6e40e915e_prof);

        
        $__internal_326cb590bc89f3c5290e78af20e3d7634fdecaa152755ff26a219d460464e66e->leave($__internal_326cb590bc89f3c5290e78af20e3d7634fdecaa152755ff26a219d460464e66e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c0464d48b10487d8f4d76e90dd3cda5dc49c9804401d2d7759e4f159d9168f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0464d48b10487d8f4d76e90dd3cda5dc49c9804401d2d7759e4f159d9168f1e->enter($__internal_c0464d48b10487d8f4d76e90dd3cda5dc49c9804401d2d7759e4f159d9168f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_020f89ae86b1a807a9ca9304c739b54540fe52b231f2b9610b5d1eaff7ee546c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020f89ae86b1a807a9ca9304c739b54540fe52b231f2b9610b5d1eaff7ee546c->enter($__internal_020f89ae86b1a807a9ca9304c739b54540fe52b231f2b9610b5d1eaff7ee546c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_020f89ae86b1a807a9ca9304c739b54540fe52b231f2b9610b5d1eaff7ee546c->leave($__internal_020f89ae86b1a807a9ca9304c739b54540fe52b231f2b9610b5d1eaff7ee546c_prof);

        
        $__internal_c0464d48b10487d8f4d76e90dd3cda5dc49c9804401d2d7759e4f159d9168f1e->leave($__internal_c0464d48b10487d8f4d76e90dd3cda5dc49c9804401d2d7759e4f159d9168f1e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a41d619eb17822fe3b13e93358d514c65936cca7400e5080ef4ce54c7a0ec353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a41d619eb17822fe3b13e93358d514c65936cca7400e5080ef4ce54c7a0ec353->enter($__internal_a41d619eb17822fe3b13e93358d514c65936cca7400e5080ef4ce54c7a0ec353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f5c6be0a72c5b133e8bef60ffe43d37237dd320c2524aae55dfb16be6cbfef2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c6be0a72c5b133e8bef60ffe43d37237dd320c2524aae55dfb16be6cbfef2d->enter($__internal_f5c6be0a72c5b133e8bef60ffe43d37237dd320c2524aae55dfb16be6cbfef2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f5c6be0a72c5b133e8bef60ffe43d37237dd320c2524aae55dfb16be6cbfef2d->leave($__internal_f5c6be0a72c5b133e8bef60ffe43d37237dd320c2524aae55dfb16be6cbfef2d_prof);

        
        $__internal_a41d619eb17822fe3b13e93358d514c65936cca7400e5080ef4ce54c7a0ec353->leave($__internal_a41d619eb17822fe3b13e93358d514c65936cca7400e5080ef4ce54c7a0ec353_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a66970e1125d392cdd8d5484cd319f8007648fd24cd74495a98edeb4afe9d510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a66970e1125d392cdd8d5484cd319f8007648fd24cd74495a98edeb4afe9d510->enter($__internal_a66970e1125d392cdd8d5484cd319f8007648fd24cd74495a98edeb4afe9d510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f84e62cd4bc39653bc2eea6006eaee95d02b57aea58b6f1b36d6cde88b4cd521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84e62cd4bc39653bc2eea6006eaee95d02b57aea58b6f1b36d6cde88b4cd521->enter($__internal_f84e62cd4bc39653bc2eea6006eaee95d02b57aea58b6f1b36d6cde88b4cd521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_f84e62cd4bc39653bc2eea6006eaee95d02b57aea58b6f1b36d6cde88b4cd521->leave($__internal_f84e62cd4bc39653bc2eea6006eaee95d02b57aea58b6f1b36d6cde88b4cd521_prof);

        
        $__internal_a66970e1125d392cdd8d5484cd319f8007648fd24cd74495a98edeb4afe9d510->leave($__internal_a66970e1125d392cdd8d5484cd319f8007648fd24cd74495a98edeb4afe9d510_prof);

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
