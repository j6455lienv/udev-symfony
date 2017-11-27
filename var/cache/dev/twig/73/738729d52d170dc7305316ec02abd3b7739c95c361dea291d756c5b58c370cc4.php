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
        $__internal_6a2687c9a6f9cdfc642f66b2ed4d39ee25bbd9a5f82eef1c6fe43b15b293a779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a2687c9a6f9cdfc642f66b2ed4d39ee25bbd9a5f82eef1c6fe43b15b293a779->enter($__internal_6a2687c9a6f9cdfc642f66b2ed4d39ee25bbd9a5f82eef1c6fe43b15b293a779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/articles.html.twig"));

        $__internal_86a26405707d71768362235ce8d9317a7f14170200b50befbe99e3e259a2b670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a26405707d71768362235ce8d9317a7f14170200b50befbe99e3e259a2b670->enter($__internal_86a26405707d71768362235ce8d9317a7f14170200b50befbe99e3e259a2b670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a2687c9a6f9cdfc642f66b2ed4d39ee25bbd9a5f82eef1c6fe43b15b293a779->leave($__internal_6a2687c9a6f9cdfc642f66b2ed4d39ee25bbd9a5f82eef1c6fe43b15b293a779_prof);

        
        $__internal_86a26405707d71768362235ce8d9317a7f14170200b50befbe99e3e259a2b670->leave($__internal_86a26405707d71768362235ce8d9317a7f14170200b50befbe99e3e259a2b670_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b39a90b672538ad9967f95c075a94290ca492af80688b01e7dd39f7efca27915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b39a90b672538ad9967f95c075a94290ca492af80688b01e7dd39f7efca27915->enter($__internal_b39a90b672538ad9967f95c075a94290ca492af80688b01e7dd39f7efca27915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc77cc5d5677aaf21a4940cda9b8edcf523c9ed6a008a353db44932d803a5d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc77cc5d5677aaf21a4940cda9b8edcf523c9ed6a008a353db44932d803a5d84->enter($__internal_cc77cc5d5677aaf21a4940cda9b8edcf523c9ed6a008a353db44932d803a5d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cc77cc5d5677aaf21a4940cda9b8edcf523c9ed6a008a353db44932d803a5d84->leave($__internal_cc77cc5d5677aaf21a4940cda9b8edcf523c9ed6a008a353db44932d803a5d84_prof);

        
        $__internal_b39a90b672538ad9967f95c075a94290ca492af80688b01e7dd39f7efca27915->leave($__internal_b39a90b672538ad9967f95c075a94290ca492af80688b01e7dd39f7efca27915_prof);

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

{% endblock %}", "articles/articles.html.twig", "/var/www/html/udev_symfony/app/Resources/views/articles/articles.html.twig");
    }
}
