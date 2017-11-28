<?php

/* default/index.html.twig */
class __TwigTemplate_f9e99689f6afa44809b9e2e6b6be78eb45472fdb864771d4cf14f2b52fbe8912 extends Twig_Template
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
        $__internal_835a88ce3261b0bf06e5b576f5c9a6aaa15f8d7d6a8d49a9447e401327f49377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_835a88ce3261b0bf06e5b576f5c9a6aaa15f8d7d6a8d49a9447e401327f49377->enter($__internal_835a88ce3261b0bf06e5b576f5c9a6aaa15f8d7d6a8d49a9447e401327f49377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_d5d456529acac826b0351b0af64c801b554427bcc5210e961ab52d86d703de27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d456529acac826b0351b0af64c801b554427bcc5210e961ab52d86d703de27->enter($__internal_d5d456529acac826b0351b0af64c801b554427bcc5210e961ab52d86d703de27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_835a88ce3261b0bf06e5b576f5c9a6aaa15f8d7d6a8d49a9447e401327f49377->leave($__internal_835a88ce3261b0bf06e5b576f5c9a6aaa15f8d7d6a8d49a9447e401327f49377_prof);

        
        $__internal_d5d456529acac826b0351b0af64c801b554427bcc5210e961ab52d86d703de27->leave($__internal_d5d456529acac826b0351b0af64c801b554427bcc5210e961ab52d86d703de27_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f434488dba902608922a682634671a68b67e61e58f7e238fa1829f6fb382df9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f434488dba902608922a682634671a68b67e61e58f7e238fa1829f6fb382df9->enter($__internal_0f434488dba902608922a682634671a68b67e61e58f7e238fa1829f6fb382df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26c11ae53452e272659501612b8c77ac09164530e8781f70da8b632508fc4233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c11ae53452e272659501612b8c77ac09164530e8781f70da8b632508fc4233->enter($__internal_26c11ae53452e272659501612b8c77ac09164530e8781f70da8b632508fc4233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <!-- ajout d'une feuille de style-->
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 5
        echo twig_include($this->env, $context, "layout/mainMenu.html.twig", array("current" => "homepage"));
        echo "

    <div class=\"container\">
        <div class=\"container-fluid\">
            <h1>Homepage</h1>
            <img id=\"img\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/img.jpg"), "html", null, true);
        echo "\">
        </div>
        <div class=\"alert alert-success\" role=\"alert\">
            <h2>Gestion des utilisateurs</h2>

        </div>
        <div class=\"alert alert-success\" role=\"alert\">
            <h2>Gestion des articles</h2>

        </div>
        <div class=\"alert alert-success\" role=\"alert\">
            <h2>Utilisateurs créés aujourd'hui</h2>
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("hinclude", Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:User:userWidget", array("defaut" => "Loading Other Users")));
        echo "

        </div>
        <div class=\"alert alert-success\" role=\"alert\">
            <h2>Articles créés aujourd'hui</h2>

        </div>
        <div class=\"alert alert-success\" role=\"alert\">
            <h2>Last posts @Symfony Blog</h2>
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("hinclude", Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:User:fluxRSS", array("defaut" => "Loading Other Users")));
        echo "
        </div>
    </div>

";
        
        $__internal_26c11ae53452e272659501612b8c77ac09164530e8781f70da8b632508fc4233->leave($__internal_26c11ae53452e272659501612b8c77ac09164530e8781f70da8b632508fc4233_prof);

        
        $__internal_0f434488dba902608922a682634671a68b67e61e58f7e238fa1829f6fb382df9->leave($__internal_0f434488dba902608922a682634671a68b67e61e58f7e238fa1829f6fb382df9_prof);

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
        return array (  91 => 31,  79 => 22,  64 => 10,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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

    <div class=\"container\">
        <div class=\"container-fluid\">
            <h1>Homepage</h1>
            <img id=\"img\" src=\"{{ asset('img/img.jpg') }}\">
        </div>
        <div class=\"alert alert-success\" role=\"alert\">
            <h2>Gestion des utilisateurs</h2>

        </div>
        <div class=\"alert alert-success\" role=\"alert\">
            <h2>Gestion des articles</h2>

        </div>
        <div class=\"alert alert-success\" role=\"alert\">
            <h2>Utilisateurs créés aujourd'hui</h2>
            {{ render_hinclude(controller('AppBundle:User:userWidget', {'defaut': 'Loading Other Users'})) }}

        </div>
        <div class=\"alert alert-success\" role=\"alert\">
            <h2>Articles créés aujourd'hui</h2>

        </div>
        <div class=\"alert alert-success\" role=\"alert\">
            <h2>Last posts @Symfony Blog</h2>
            {{ render_hinclude(controller('AppBundle:User:fluxRSS', {'defaut': 'Loading Other Users'})) }}
        </div>
    </div>

{% endblock %}", "default/index.html.twig", "/var/www/html/udev_symfony/app/Resources/views/default/index.html.twig");
    }
}
