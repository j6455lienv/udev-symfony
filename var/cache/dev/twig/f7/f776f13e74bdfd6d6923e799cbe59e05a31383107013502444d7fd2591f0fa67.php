<?php

/* articles/show.html.twig */
class __TwigTemplate_a4e255278e412e199aec348d00b45db5eab4931fa5c65b966a91d06b9202abb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "articles/show.html.twig", 1);
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
        $__internal_468efaf21a16d34c4787bec6b7e3ee298ded4d46a4b4ac78dc80f4424924dddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_468efaf21a16d34c4787bec6b7e3ee298ded4d46a4b4ac78dc80f4424924dddc->enter($__internal_468efaf21a16d34c4787bec6b7e3ee298ded4d46a4b4ac78dc80f4424924dddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/show.html.twig"));

        $__internal_26326d30e8a1fd65bd2a2bfa3f7dfbe2714a1083057ed09ee4fe61544195a077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26326d30e8a1fd65bd2a2bfa3f7dfbe2714a1083057ed09ee4fe61544195a077->enter($__internal_26326d30e8a1fd65bd2a2bfa3f7dfbe2714a1083057ed09ee4fe61544195a077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_468efaf21a16d34c4787bec6b7e3ee298ded4d46a4b4ac78dc80f4424924dddc->leave($__internal_468efaf21a16d34c4787bec6b7e3ee298ded4d46a4b4ac78dc80f4424924dddc_prof);

        
        $__internal_26326d30e8a1fd65bd2a2bfa3f7dfbe2714a1083057ed09ee4fe61544195a077->leave($__internal_26326d30e8a1fd65bd2a2bfa3f7dfbe2714a1083057ed09ee4fe61544195a077_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4770de31bed79812681f6bd8000da36e5ce3e77cce4d98a006040d2db6a863bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4770de31bed79812681f6bd8000da36e5ce3e77cce4d98a006040d2db6a863bd->enter($__internal_4770de31bed79812681f6bd8000da36e5ce3e77cce4d98a006040d2db6a863bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_512711cad3f0cd52b61294efef3aeede5b58ac7efc6c8533e419a57e5f795266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512711cad3f0cd52b61294efef3aeede5b58ac7efc6c8533e419a57e5f795266->enter($__internal_512711cad3f0cd52b61294efef3aeede5b58ac7efc6c8533e419a57e5f795266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "layout/mainMenu.html.twig", array("current" => "articles"));
        echo "

    <div class=\"container\" style=\"display:flex; justify-content: space-around;\">

        <div id=\"container\">
            <h1>Show Articles</h1>
            <div>
                <span>N° : </span><span>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "</span>
            </div>
            <div>
                <span>Titre : </span><span>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "subject", array()), "html", null, true);
        echo "</span>
            </div>
            <div>
                <span>eMail : </span><span>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "body", array()), "html", null, true);
        echo "</span>
            </div>
            <div>
                <span>Date : </span><span>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "date", array()), "Y-m-d"), "html", null, true);
        echo "</span>
            </div>
            <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-xs\">Edit</a>
            <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles");
        echo "\"><input type=\"button\" class=\"btn btn-defaut\" value=\"Back\"/></a>
        </div>

        <div id=\"container\">
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Article:otherUserWidget", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))));
        echo "
        </div>

    </div>
";
        
        $__internal_512711cad3f0cd52b61294efef3aeede5b58ac7efc6c8533e419a57e5f795266->leave($__internal_512711cad3f0cd52b61294efef3aeede5b58ac7efc6c8533e419a57e5f795266_prof);

        
        $__internal_4770de31bed79812681f6bd8000da36e5ce3e77cce4d98a006040d2db6a863bd->leave($__internal_4770de31bed79812681f6bd8000da36e5ce3e77cce4d98a006040d2db6a863bd_prof);

    }

    public function getTemplateName()
    {
        return "articles/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 27,  87 => 23,  83 => 22,  78 => 20,  72 => 17,  66 => 14,  60 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
    {{ include('layout/mainMenu.html.twig', {'current' : 'articles'}) }}

    <div class=\"container\" style=\"display:flex; justify-content: space-around;\">

        <div id=\"container\">
            <h1>Show Articles</h1>
            <div>
                <span>N° : </span><span>{{ article.id }}</span>
            </div>
            <div>
                <span>Titre : </span><span>{{ article.subject }}</span>
            </div>
            <div>
                <span>eMail : </span><span>{{ article.body }}</span>
            </div>
            <div>
                <span>Date : </span><span>{{ article.date|date(\"Y-m-d\") }}</span>
            </div>
            <a href=\"{{ path('article_edit', {'id' : article.id}) }}\" class=\"btn btn-primary btn-xs\">Edit</a>
            <a href=\"{{ path('articles')}}\"><input type=\"button\" class=\"btn btn-defaut\" value=\"Back\"/></a>
        </div>

        <div id=\"container\">
            {{ render(controller('AppBundle:Article:otherUserWidget', {'id':article.id})) }}
        </div>

    </div>
{% endblock %}", "articles/show.html.twig", "/var/www/html/udev_symfony/app/Resources/views/articles/show.html.twig");
    }
}
