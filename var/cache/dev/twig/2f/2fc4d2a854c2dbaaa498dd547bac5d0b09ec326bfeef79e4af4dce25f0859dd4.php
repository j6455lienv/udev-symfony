<?php

/* :articles:add.html.twig */
class __TwigTemplate_70c38d8104a5aaddbf20cbb09fb8c07de6358a7c81fad4a1843a9cb22ca6031a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":articles:add.html.twig", 1);
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
        $__internal_c6aa39bfe9165f6af666bef2d518fee80a582420ce28ca35647db62835f49a1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6aa39bfe9165f6af666bef2d518fee80a582420ce28ca35647db62835f49a1b->enter($__internal_c6aa39bfe9165f6af666bef2d518fee80a582420ce28ca35647db62835f49a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":articles:add.html.twig"));

        $__internal_068c427b4449ba72045296750646fd2b5cfa29792712ac0f267090ebb0c522cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068c427b4449ba72045296750646fd2b5cfa29792712ac0f267090ebb0c522cc->enter($__internal_068c427b4449ba72045296750646fd2b5cfa29792712ac0f267090ebb0c522cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":articles:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6aa39bfe9165f6af666bef2d518fee80a582420ce28ca35647db62835f49a1b->leave($__internal_c6aa39bfe9165f6af666bef2d518fee80a582420ce28ca35647db62835f49a1b_prof);

        
        $__internal_068c427b4449ba72045296750646fd2b5cfa29792712ac0f267090ebb0c522cc->leave($__internal_068c427b4449ba72045296750646fd2b5cfa29792712ac0f267090ebb0c522cc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdbfd8f7f2ae01be1362f362e73a9fd2d7b9dc9d16b98a4f614ea9240b03c476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdbfd8f7f2ae01be1362f362e73a9fd2d7b9dc9d16b98a4f614ea9240b03c476->enter($__internal_fdbfd8f7f2ae01be1362f362e73a9fd2d7b9dc9d16b98a4f614ea9240b03c476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_515ae294d0082eaf85ea067ba7cb27a37a7f8fb035f94044cd965778b02619f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_515ae294d0082eaf85ea067ba7cb27a37a7f8fb035f94044cd965778b02619f1->enter($__internal_515ae294d0082eaf85ea067ba7cb27a37a7f8fb035f94044cd965778b02619f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_515ae294d0082eaf85ea067ba7cb27a37a7f8fb035f94044cd965778b02619f1->leave($__internal_515ae294d0082eaf85ea067ba7cb27a37a7f8fb035f94044cd965778b02619f1_prof);

        
        $__internal_fdbfd8f7f2ae01be1362f362e73a9fd2d7b9dc9d16b98a4f614ea9240b03c476->leave($__internal_fdbfd8f7f2ae01be1362f362e73a9fd2d7b9dc9d16b98a4f614ea9240b03c476_prof);

    }

    public function getTemplateName()
    {
        return ":articles:add.html.twig";
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
", ":articles:add.html.twig", "/var/www/html/udev_symfony/app/Resources/views/articles/add.html.twig");
    }
}
