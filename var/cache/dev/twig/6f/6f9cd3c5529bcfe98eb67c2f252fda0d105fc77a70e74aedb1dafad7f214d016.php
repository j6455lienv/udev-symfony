<?php

/* default/articles.html.twig */
class __TwigTemplate_63943a52f8273992f0ccea5c3d212b6fc95e237177d3f7d39e2643e70b30725b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/articles.html.twig", 1);
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
        $__internal_93bf7683327f5b8f4c11138925cf533c875a0d47ca2779f37ace71ed91f01ee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93bf7683327f5b8f4c11138925cf533c875a0d47ca2779f37ace71ed91f01ee8->enter($__internal_93bf7683327f5b8f4c11138925cf533c875a0d47ca2779f37ace71ed91f01ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/articles.html.twig"));

        $__internal_d280540c6de99b46e1373174b9eb9091785412ade767f6fef1eca46763de64fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d280540c6de99b46e1373174b9eb9091785412ade767f6fef1eca46763de64fa->enter($__internal_d280540c6de99b46e1373174b9eb9091785412ade767f6fef1eca46763de64fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93bf7683327f5b8f4c11138925cf533c875a0d47ca2779f37ace71ed91f01ee8->leave($__internal_93bf7683327f5b8f4c11138925cf533c875a0d47ca2779f37ace71ed91f01ee8_prof);

        
        $__internal_d280540c6de99b46e1373174b9eb9091785412ade767f6fef1eca46763de64fa->leave($__internal_d280540c6de99b46e1373174b9eb9091785412ade767f6fef1eca46763de64fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dee628caed9c2532d581a9f16f53532b43a9ce3d4d513b68fa192b3fb22733da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dee628caed9c2532d581a9f16f53532b43a9ce3d4d513b68fa192b3fb22733da->enter($__internal_dee628caed9c2532d581a9f16f53532b43a9ce3d4d513b68fa192b3fb22733da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69872bd9f9d3a13f88822b008be5f5dc212e5662cfc7b9f655a598bfb08a6b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69872bd9f9d3a13f88822b008be5f5dc212e5662cfc7b9f655a598bfb08a6b4d->enter($__internal_69872bd9f9d3a13f88822b008be5f5dc212e5662cfc7b9f655a598bfb08a6b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">


            <!--- Afficher la liste des articles en boucle for -->
            <table border=\"1px\">
                <ul>
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["liste_article"] ?? $this->getContext($context, "liste_article")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 12
            echo "                        <tr>
                            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "</td>
                            <td> ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "subject", array()), "html", null, true);
            echo "</td>
                            <td>  ";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "date", array()), "Y-m-d"), "html", null, true);
            echo " </td>
                            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "body", array()), "html", null, true);
            echo " </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                </ul>
            </table>
        </div>
    </div>

";
        
        $__internal_69872bd9f9d3a13f88822b008be5f5dc212e5662cfc7b9f655a598bfb08a6b4d->leave($__internal_69872bd9f9d3a13f88822b008be5f5dc212e5662cfc7b9f655a598bfb08a6b4d_prof);

        
        $__internal_dee628caed9c2532d581a9f16f53532b43a9ce3d4d513b68fa192b3fb22733da->leave($__internal_dee628caed9c2532d581a9f16f53532b43a9ce3d4d513b68fa192b3fb22733da_prof);

    }

    public function getTemplateName()
    {
        return "default/articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  62 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
        <div id=\"container\">


            <!--- Afficher la liste des articles en boucle for -->
            <table border=\"1px\">
                <ul>
                    {% for key, value in liste_article %}
                        <tr>
                            <td>{{ value.id }}</td>
                            <td> {{ value.subject}}</td>
                            <td>  {{ value.date|date('Y-m-d')}} </td>
                            <td>{{ value.body}} </td>
                        </tr>
                    {% endfor %}
                </ul>
            </table>
        </div>
    </div>

{% endblock %}", "default/articles.html.twig", "/var/www/html/udev_symfony/app/Resources/views/default/articles.html.twig");
    }
}
