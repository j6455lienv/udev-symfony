<?php

/* :default:index.html.twig */
class __TwigTemplate_f9e99689f6afa44809b9e2e6b6be78eb45472fdb864771d4cf14f2b52fbe8912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_689ddf86f8c49d1e2592ae0bfc8b90495aec036c00ff2eba17bc857975e0780d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_689ddf86f8c49d1e2592ae0bfc8b90495aec036c00ff2eba17bc857975e0780d->enter($__internal_689ddf86f8c49d1e2592ae0bfc8b90495aec036c00ff2eba17bc857975e0780d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_1fa2dc1a603300ec625b8b75b7cc2e7fafbddc20f6d3f5d2c68eb396604146f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa2dc1a603300ec625b8b75b7cc2e7fafbddc20f6d3f5d2c68eb396604146f4->enter($__internal_1fa2dc1a603300ec625b8b75b7cc2e7fafbddc20f6d3f5d2c68eb396604146f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_689ddf86f8c49d1e2592ae0bfc8b90495aec036c00ff2eba17bc857975e0780d->leave($__internal_689ddf86f8c49d1e2592ae0bfc8b90495aec036c00ff2eba17bc857975e0780d_prof);

        
        $__internal_1fa2dc1a603300ec625b8b75b7cc2e7fafbddc20f6d3f5d2c68eb396604146f4->leave($__internal_1fa2dc1a603300ec625b8b75b7cc2e7fafbddc20f6d3f5d2c68eb396604146f4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6807870758b58d29d9f6299ca19e77dfb66e6455b84cdea61a75dc0a848ba75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6807870758b58d29d9f6299ca19e77dfb66e6455b84cdea61a75dc0a848ba75->enter($__internal_e6807870758b58d29d9f6299ca19e77dfb66e6455b84cdea61a75dc0a848ba75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c7cc47e11f14cb583703af1d02efc7726d7fdbc3caba22a2f8cc5634a1974dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c7cc47e11f14cb583703af1d02efc7726d7fdbc3caba22a2f8cc5634a1974dd->enter($__internal_9c7cc47e11f14cb583703af1d02efc7726d7fdbc3caba22a2f8cc5634a1974dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <h1>Homepage</h1>
    <div class=\"container\">
        <div class=\"container\"><img id=\"img\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/img.jpg"), "html", null, true);
        echo "\"></div>

        <div class=\"alert alert-success\" role=\"alert\">
            <h2>Gestion des utilisateurs</h2>

        </div>
        <div class=\"alert alert-success\" role=\"alert\">
            <h2>Gestion des articles</h2>

        </div>
        <div class=\"well\" role=\"alert\">
            <h2>Utilisateurs créés aujourd'hui</h2>
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("hinclude", Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:User:userWidget", array("defaut" => "Loading Other Users")));
        echo "

        </div>
        <div class=\"well\" role=\"alert\">
            <h2>Articles créés aujourd'hui</h2>
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("hinclude", Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Article:articleWidget", array("defaut" => "Loading Other Articles")));
        echo "
        </div>
        <div class=\"well\" role=\"alert\">
            <h2>Last posts @Symfony Blog</h2>
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("hinclude", Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:User:fluxRSS", array("defaut" => "Loading Other Users")));
        echo "
        </div>
    </div>

";
        
        $__internal_9c7cc47e11f14cb583703af1d02efc7726d7fdbc3caba22a2f8cc5634a1974dd->leave($__internal_9c7cc47e11f14cb583703af1d02efc7726d7fdbc3caba22a2f8cc5634a1974dd_prof);

        
        $__internal_e6807870758b58d29d9f6299ca19e77dfb66e6455b84cdea61a75dc0a848ba75->leave($__internal_e6807870758b58d29d9f6299ca19e77dfb66e6455b84cdea61a75dc0a848ba75_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 29,  85 => 25,  77 => 20,  62 => 8,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
    <h1>Homepage</h1>
    <div class=\"container\">
        <div class=\"container\"><img id=\"img\" src=\"{{ asset('img/img.jpg') }}\"></div>

        <div class=\"alert alert-success\" role=\"alert\">
            <h2>Gestion des utilisateurs</h2>

        </div>
        <div class=\"alert alert-success\" role=\"alert\">
            <h2>Gestion des articles</h2>

        </div>
        <div class=\"well\" role=\"alert\">
            <h2>Utilisateurs créés aujourd'hui</h2>
            {{ render_hinclude(controller('AppBundle:User:userWidget', {'defaut': 'Loading Other Users'})) }}

        </div>
        <div class=\"well\" role=\"alert\">
            <h2>Articles créés aujourd'hui</h2>
            {{ render_hinclude(controller('AppBundle:Article:articleWidget', {'defaut': 'Loading Other Articles'})) }}
        </div>
        <div class=\"well\" role=\"alert\">
            <h2>Last posts @Symfony Blog</h2>
            {{ render_hinclude(controller('AppBundle:User:fluxRSS', {'defaut': 'Loading Other Users'})) }}
        </div>
    </div>

{% endblock %}", ":default:index.html.twig", "/var/www/html/udev_symfony/app/Resources/views/default/index.html.twig");
    }
}
