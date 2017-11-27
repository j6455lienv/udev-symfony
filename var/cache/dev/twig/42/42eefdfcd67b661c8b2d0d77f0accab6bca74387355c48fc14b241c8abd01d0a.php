<?php

/* default/index.html.twig */
class __TwigTemplate_c12f1c8e427dafa37c304deaf8933f5490e0b276f70ac2796157b4e87ca63c80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_03d571d593271e12e7b2868510f9c19abdad7c6cc8aea3bcba4c297f25ee120c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d571d593271e12e7b2868510f9c19abdad7c6cc8aea3bcba4c297f25ee120c->enter($__internal_03d571d593271e12e7b2868510f9c19abdad7c6cc8aea3bcba4c297f25ee120c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_f222065f388b7e7edc4fa76dfc1ef91a07defe4e2e0e77cd820493cd0c472009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f222065f388b7e7edc4fa76dfc1ef91a07defe4e2e0e77cd820493cd0c472009->enter($__internal_f222065f388b7e7edc4fa76dfc1ef91a07defe4e2e0e77cd820493cd0c472009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03d571d593271e12e7b2868510f9c19abdad7c6cc8aea3bcba4c297f25ee120c->leave($__internal_03d571d593271e12e7b2868510f9c19abdad7c6cc8aea3bcba4c297f25ee120c_prof);

        
        $__internal_f222065f388b7e7edc4fa76dfc1ef91a07defe4e2e0e77cd820493cd0c472009->leave($__internal_f222065f388b7e7edc4fa76dfc1ef91a07defe4e2e0e77cd820493cd0c472009_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8e824af4932edba4a10b2ca3a9a661f0d0b4fc2f34b1f286ec6a21ed105df70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8e824af4932edba4a10b2ca3a9a661f0d0b4fc2f34b1f286ec6a21ed105df70->enter($__internal_a8e824af4932edba4a10b2ca3a9a661f0d0b4fc2f34b1f286ec6a21ed105df70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69e4d2ff2c55b40af1886c1d7aec39dfd7764f84a70f0b8ac9ff97135a85f871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e4d2ff2c55b40af1886c1d7aec39dfd7764f84a70f0b8ac9ff97135a85f871->enter($__internal_69e4d2ff2c55b40af1886c1d7aec39dfd7764f84a70f0b8ac9ff97135a85f871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <!-- ajout d'une feuille de style-->
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
        // line 7
        echo twig_include($this->env, $context, "layout/mainMenu.html.twig", array("current" => "homepage"));
        echo "

        <div class=\"container-fluid\">
            <h1>HOME</h1>
            <img id=\"img\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/img.jpg"), "html", null, true);
        echo "\">

        </div>
";
        
        $__internal_69e4d2ff2c55b40af1886c1d7aec39dfd7764f84a70f0b8ac9ff97135a85f871->leave($__internal_69e4d2ff2c55b40af1886c1d7aec39dfd7764f84a70f0b8ac9ff97135a85f871_prof);

        
        $__internal_a8e824af4932edba4a10b2ca3a9a661f0d0b4fc2f34b1f286ec6a21ed105df70->leave($__internal_a8e824af4932edba4a10b2ca3a9a661f0d0b4fc2f34b1f286ec6a21ed105df70_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  58 => 7,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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

    <!-- ajout d'une feuille de style-->
    <link href=\"{{ asset('css/index.css') }}\" rel=\"stylesheet\">

    {{ include('layout/mainMenu.html.twig', {'current' : 'homepage'}) }}

        <div class=\"container-fluid\">
            <h1>HOME</h1>
            <img id=\"img\" src=\"{{ asset('img/img.jpg') }}\">

        </div>
{% endblock %}", "default/index.html.twig", "/var/www/html/udev_symfony/app/Resources/views/default/index.html.twig");
    }
}
