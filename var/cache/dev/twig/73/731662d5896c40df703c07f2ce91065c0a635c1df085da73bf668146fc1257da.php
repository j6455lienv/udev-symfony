<?php

/* :users:add.html.twig */
class __TwigTemplate_a9e2b9c963a5c090b6b82fb0227040fb044c1954812156fe1d48f2b8c0e2230a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":users:add.html.twig", 1);
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
        $__internal_725daa763408fe2dc236948aba1a97ff2acc129847d687033e9f49079149edf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_725daa763408fe2dc236948aba1a97ff2acc129847d687033e9f49079149edf3->enter($__internal_725daa763408fe2dc236948aba1a97ff2acc129847d687033e9f49079149edf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:add.html.twig"));

        $__internal_e624c994250abe3c9f08f0d01098ae3948fb4d2173b887e64335b8cb2a7114f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e624c994250abe3c9f08f0d01098ae3948fb4d2173b887e64335b8cb2a7114f5->enter($__internal_e624c994250abe3c9f08f0d01098ae3948fb4d2173b887e64335b8cb2a7114f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_725daa763408fe2dc236948aba1a97ff2acc129847d687033e9f49079149edf3->leave($__internal_725daa763408fe2dc236948aba1a97ff2acc129847d687033e9f49079149edf3_prof);

        
        $__internal_e624c994250abe3c9f08f0d01098ae3948fb4d2173b887e64335b8cb2a7114f5->leave($__internal_e624c994250abe3c9f08f0d01098ae3948fb4d2173b887e64335b8cb2a7114f5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e493729780f20cdcef2aea9a70110d151b231dbfa129414dfe6b43627ece30d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e493729780f20cdcef2aea9a70110d151b231dbfa129414dfe6b43627ece30d->enter($__internal_0e493729780f20cdcef2aea9a70110d151b231dbfa129414dfe6b43627ece30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d11576ea676f2bc791cceacb686604cf3d724530f98d7b73c44264062793297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d11576ea676f2bc791cceacb686604cf3d724530f98d7b73c44264062793297->enter($__internal_6d11576ea676f2bc791cceacb686604cf3d724530f98d7b73c44264062793297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "layout/mainMenu.html.twig", array("current" => "users"));
        echo "
    ";
        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 6
        echo "    <div class=\"container\">

        <h1>User Add (users/add)</h1>

        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Create\"/>
        <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("users");
        echo "\"><input type=\"button\" class=\"btn btn-defaut\"
                                                                             value=\"Back\"/></a>
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
";
        
        $__internal_6d11576ea676f2bc791cceacb686604cf3d724530f98d7b73c44264062793297->leave($__internal_6d11576ea676f2bc791cceacb686604cf3d724530f98d7b73c44264062793297_prof);

        
        $__internal_0e493729780f20cdcef2aea9a70110d151b231dbfa129414dfe6b43627ece30d->leave($__internal_0e493729780f20cdcef2aea9a70110d151b231dbfa129414dfe6b43627ece30d_prof);

    }

    public function getTemplateName()
    {
        return ":users:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 15,  71 => 13,  66 => 11,  62 => 10,  56 => 6,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    {% form_theme form 'bootstrap_3_layout.html.twig' %}
    <div class=\"container\">

        <h1>User Add (users/add)</h1>

        {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Create\"/>
        <a href=\"{{ path('users') }}\"><input type=\"button\" class=\"btn btn-defaut\"
                                                                             value=\"Back\"/></a>
        {{ form_end(form) }}

    </div>
{% endblock %}
", ":users:add.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/add.html.twig");
    }
}
