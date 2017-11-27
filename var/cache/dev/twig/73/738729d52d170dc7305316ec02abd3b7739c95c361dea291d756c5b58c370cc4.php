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
        $__internal_e8c4dd168fcb2600bbf3b5d9e0ae1efcc6005ae8c1f4b19af2e6ba8a8fbb0f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8c4dd168fcb2600bbf3b5d9e0ae1efcc6005ae8c1f4b19af2e6ba8a8fbb0f4e->enter($__internal_e8c4dd168fcb2600bbf3b5d9e0ae1efcc6005ae8c1f4b19af2e6ba8a8fbb0f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/articles.html.twig"));

        $__internal_70b4b4c35a0dc7629104591a72e1335cb7808f77f295a616bd9f39dddb266721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b4b4c35a0dc7629104591a72e1335cb7808f77f295a616bd9f39dddb266721->enter($__internal_70b4b4c35a0dc7629104591a72e1335cb7808f77f295a616bd9f39dddb266721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8c4dd168fcb2600bbf3b5d9e0ae1efcc6005ae8c1f4b19af2e6ba8a8fbb0f4e->leave($__internal_e8c4dd168fcb2600bbf3b5d9e0ae1efcc6005ae8c1f4b19af2e6ba8a8fbb0f4e_prof);

        
        $__internal_70b4b4c35a0dc7629104591a72e1335cb7808f77f295a616bd9f39dddb266721->leave($__internal_70b4b4c35a0dc7629104591a72e1335cb7808f77f295a616bd9f39dddb266721_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3be4231ed8a816c0dd1860b4f323f149a74ae56320d75117a5eaf37b938d867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3be4231ed8a816c0dd1860b4f323f149a74ae56320d75117a5eaf37b938d867->enter($__internal_f3be4231ed8a816c0dd1860b4f323f149a74ae56320d75117a5eaf37b938d867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd78dcc99b762b9e07f5c6547b03a6b6c58ba407812ebde455d5a39fbc122d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd78dcc99b762b9e07f5c6547b03a6b6c58ba407812ebde455d5a39fbc122d51->enter($__internal_cd78dcc99b762b9e07f5c6547b03a6b6c58ba407812ebde455d5a39fbc122d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "layout/mainMenu.html.twig", array("current" => "homepage-tp"));
        echo "
    <div id=\"wrapper\">
        <div id=\"container\">


            <!--- Afficher la liste des articles en boucle for -->
            <table border=\"1px\">
                <ul>
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["liste_article"] ?? $this->getContext($context, "liste_article")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 14
            echo "                        <tr>
                            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "</td>
                            <td> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "subject", array()), "html", null, true);
            echo "</td>
                            <td>  ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "date", array()), "Y-m-d"), "html", null, true);
            echo " </td>
                            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "body", array()), "html", null, true);
            echo " </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                </ul>
            </table>
        </div>
    </div>

    <style>
        body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
        h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
        h1 { font-size: 36px; }
        h2 { font-size: 21px; margin-bottom: 1em; }
        p { margin: 0 0 1em 0; }
        a { color: #0000F0; }
        a:hover { text-decoration: none; }
        code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
        #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
        #container { padding: 2em; }
        #welcome, #status { margin-bottom: 2em; }
        #welcome h1 span { display: block; font-size: 75%; }
        #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
        #icon-book { display: none; }

        @media (min-width: 768px) {
            #wrapper { width: 80%; margin: 2em auto; }
            #icon-book { display: inline-block; }
            #status a, #next a { display: block; }

            @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
        }
    </style>
";
        
        $__internal_cd78dcc99b762b9e07f5c6547b03a6b6c58ba407812ebde455d5a39fbc122d51->leave($__internal_cd78dcc99b762b9e07f5c6547b03a6b6c58ba407812ebde455d5a39fbc122d51_prof);

        
        $__internal_f3be4231ed8a816c0dd1860b4f323f149a74ae56320d75117a5eaf37b938d867->leave($__internal_f3be4231ed8a816c0dd1860b4f323f149a74ae56320d75117a5eaf37b938d867_prof);

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
        return array (  91 => 21,  82 => 18,  78 => 17,  74 => 16,  70 => 15,  67 => 14,  63 => 13,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

    {{ include('layout/mainMenu.html.twig', {'current' : 'homepage-tp'}) }}
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

    <style>
        body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
        h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
        h1 { font-size: 36px; }
        h2 { font-size: 21px; margin-bottom: 1em; }
        p { margin: 0 0 1em 0; }
        a { color: #0000F0; }
        a:hover { text-decoration: none; }
        code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
        #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
        #container { padding: 2em; }
        #welcome, #status { margin-bottom: 2em; }
        #welcome h1 span { display: block; font-size: 75%; }
        #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
        #icon-book { display: none; }

        @media (min-width: 768px) {
            #wrapper { width: 80%; margin: 2em auto; }
            #icon-book { display: inline-block; }
            #status a, #next a { display: block; }

            @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
        }
    </style>
{% endblock %}
", "articles/articles.html.twig", "/var/www/html/udev_symfony/app/Resources/views/articles/articles.html.twig");
    }
}
