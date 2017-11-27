<?php

/* articles/articles.html.twig */
class __TwigTemplate_8038422df8f788a6b4a636dd6d2a64e7cf489d64e46e9d60c634a611126715eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "articles/articles.html.twig", 1);
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
        $__internal_b769c7ed8de9178d06bd46780dca503739f2e5a069243a3ecbede320ebdc77df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b769c7ed8de9178d06bd46780dca503739f2e5a069243a3ecbede320ebdc77df->enter($__internal_b769c7ed8de9178d06bd46780dca503739f2e5a069243a3ecbede320ebdc77df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/articles.html.twig"));

        $__internal_e9d2f3571b669043e858a055b60bf9dd87e06db64d5aea78c0d55e70ed0e8d63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d2f3571b669043e858a055b60bf9dd87e06db64d5aea78c0d55e70ed0e8d63->enter($__internal_e9d2f3571b669043e858a055b60bf9dd87e06db64d5aea78c0d55e70ed0e8d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b769c7ed8de9178d06bd46780dca503739f2e5a069243a3ecbede320ebdc77df->leave($__internal_b769c7ed8de9178d06bd46780dca503739f2e5a069243a3ecbede320ebdc77df_prof);

        
        $__internal_e9d2f3571b669043e858a055b60bf9dd87e06db64d5aea78c0d55e70ed0e8d63->leave($__internal_e9d2f3571b669043e858a055b60bf9dd87e06db64d5aea78c0d55e70ed0e8d63_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc9956ef85c57cd4fd84ca6d410438415a88533a5cc1ac8507af3c53ada2f062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc9956ef85c57cd4fd84ca6d410438415a88533a5cc1ac8507af3c53ada2f062->enter($__internal_bc9956ef85c57cd4fd84ca6d410438415a88533a5cc1ac8507af3c53ada2f062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4487fdb93c4be746ebff41c8d70f41b687030c652331eec874b189fb58dbd7c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4487fdb93c4be746ebff41c8d70f41b687030c652331eec874b189fb58dbd7c8->enter($__internal_4487fdb93c4be746ebff41c8d70f41b687030c652331eec874b189fb58dbd7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo twig_include($this->env, $context, "layout/mainMenu.html.twig", array("current" => "users"));
        echo "

    <div class=\"container\">
        <h1>Articles</h1>
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">N°</th>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Date de parution</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 18
            echo "                <tr>
                    <th scope=\"row\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "</th>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "subject", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "body", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</td>

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </tbody>
        </table>

    </div>
";
        
        $__internal_4487fdb93c4be746ebff41c8d70f41b687030c652331eec874b189fb58dbd7c8->leave($__internal_4487fdb93c4be746ebff41c8d70f41b687030c652331eec874b189fb58dbd7c8_prof);

        
        $__internal_bc9956ef85c57cd4fd84ca6d410438415a88533a5cc1ac8507af3c53ada2f062->leave($__internal_bc9956ef85c57cd4fd84ca6d410438415a88533a5cc1ac8507af3c53ada2f062_prof);

    }

    public function getTemplateName()
    {
        return "articles/articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 26,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  71 => 18,  67 => 17,  49 => 3,  40 => 2,  11 => 1,);
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
    {{ include('layout/mainMenu.html.twig', {'current' : 'users'}) }}

    <div class=\"container\">
        <h1>Articles</h1>
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">N°</th>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Date de parution</th>
            </tr>
            </thead>
            <tbody>
            {% for value in articles %}
                <tr>
                    <th scope=\"row\">{{ value.id }}</th>
                    <td>{{ value.subject }}</td>
                    <td>{{ value.body }}</td>
                    <td>{{ value.date|date(\"Y-m-d\") }}</td>

                </tr>
            {% endfor %}
            </tbody>
        </table>

    </div>
{% endblock %}
", "articles/articles.html.twig", "/var/www/html/udev_symfony/app/Resources/views/articles/articles.html.twig");
    }
}
