<?php

/* articles/add.html.twig */
class __TwigTemplate_70c38d8104a5aaddbf20cbb09fb8c07de6358a7c81fad4a1843a9cb22ca6031a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "articles/add.html.twig", 1);
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
        $__internal_afc5b2222ca6eda16ac65e619f90d501056b94bca2a8c05add67c9c4fad23a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afc5b2222ca6eda16ac65e619f90d501056b94bca2a8c05add67c9c4fad23a74->enter($__internal_afc5b2222ca6eda16ac65e619f90d501056b94bca2a8c05add67c9c4fad23a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/add.html.twig"));

        $__internal_fdd895ffca1149cb4470e9f20f0a2b0669be5d218f37a0c7e6e4e4dfa8c20bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd895ffca1149cb4470e9f20f0a2b0669be5d218f37a0c7e6e4e4dfa8c20bdb->enter($__internal_fdd895ffca1149cb4470e9f20f0a2b0669be5d218f37a0c7e6e4e4dfa8c20bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afc5b2222ca6eda16ac65e619f90d501056b94bca2a8c05add67c9c4fad23a74->leave($__internal_afc5b2222ca6eda16ac65e619f90d501056b94bca2a8c05add67c9c4fad23a74_prof);

        
        $__internal_fdd895ffca1149cb4470e9f20f0a2b0669be5d218f37a0c7e6e4e4dfa8c20bdb->leave($__internal_fdd895ffca1149cb4470e9f20f0a2b0669be5d218f37a0c7e6e4e4dfa8c20bdb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8b23855606ce7f5903b2fa2c2990138f77882385e6afc3c809c852c067bdcd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8b23855606ce7f5903b2fa2c2990138f77882385e6afc3c809c852c067bdcd7->enter($__internal_b8b23855606ce7f5903b2fa2c2990138f77882385e6afc3c809c852c067bdcd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_66a5b1594396fc9a3c59627b44533bd0c1b0ab21276c581e0a289e48f83e7137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a5b1594396fc9a3c59627b44533bd0c1b0ab21276c581e0a289e48f83e7137->enter($__internal_66a5b1594396fc9a3c59627b44533bd0c1b0ab21276c581e0a289e48f83e7137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "layout/mainMenu.html.twig", array("current" => "articles"));
        echo "
    ";
        // line 6
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 7
        echo "    <div class=\"container\">

        <h1>Article Add (articles/add)</h1>

        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Create\"/>
        <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles");
        echo "\"><input type=\"button\" class=\"btn btn-defaut\"
                                                value=\"Back\"/></a>
        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    </div>

";
        
        $__internal_66a5b1594396fc9a3c59627b44533bd0c1b0ab21276c581e0a289e48f83e7137->leave($__internal_66a5b1594396fc9a3c59627b44533bd0c1b0ab21276c581e0a289e48f83e7137_prof);

        
        $__internal_b8b23855606ce7f5903b2fa2c2990138f77882385e6afc3c809c852c067bdcd7->leave($__internal_b8b23855606ce7f5903b2fa2c2990138f77882385e6afc3c809c852c067bdcd7_prof);

    }

    public function getTemplateName()
    {
        return "articles/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  73 => 14,  68 => 12,  64 => 11,  58 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    {% form_theme form 'bootstrap_3_layout.html.twig' %}
    <div class=\"container\">

        <h1>Article Add (articles/add)</h1>

        {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Create\"/>
        <a href=\"{{ path('articles') }}\"><input type=\"button\" class=\"btn btn-defaut\"
                                                value=\"Back\"/></a>
        {{ form_end(form) }}

    </div>

{% endblock %}
", "articles/add.html.twig", "/var/www/html/udev_symfony/app/Resources/views/articles/add.html.twig");
    }
}
