<?php

/* users/add.html.twig */
class __TwigTemplate_784a4f9e9e3a8a8cf03cb60e7b5d7f54af9288b3e8dd371269f98b5a2180dcc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "users/add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e66d32220de92f7d3c7043adc5b3ee191397817d4b0260e346bbeb7924120627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e66d32220de92f7d3c7043adc5b3ee191397817d4b0260e346bbeb7924120627->enter($__internal_e66d32220de92f7d3c7043adc5b3ee191397817d4b0260e346bbeb7924120627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/add.html.twig"));

        $__internal_774a94a3dc620da3f4bf0e32590fd589f8736f46f93ae640a4ebe4343d86969e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_774a94a3dc620da3f4bf0e32590fd589f8736f46f93ae640a4ebe4343d86969e->enter($__internal_774a94a3dc620da3f4bf0e32590fd589f8736f46f93ae640a4ebe4343d86969e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e66d32220de92f7d3c7043adc5b3ee191397817d4b0260e346bbeb7924120627->leave($__internal_e66d32220de92f7d3c7043adc5b3ee191397817d4b0260e346bbeb7924120627_prof);

        
        $__internal_774a94a3dc620da3f4bf0e32590fd589f8736f46f93ae640a4ebe4343d86969e->leave($__internal_774a94a3dc620da3f4bf0e32590fd589f8736f46f93ae640a4ebe4343d86969e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_615354fb07335e12961e5f3bd9829fb7cdac2c2b5a90cd20a0cfce4042da1586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_615354fb07335e12961e5f3bd9829fb7cdac2c2b5a90cd20a0cfce4042da1586->enter($__internal_615354fb07335e12961e5f3bd9829fb7cdac2c2b5a90cd20a0cfce4042da1586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_482c6018f54756c71c40062e0d36276676fbc1044ce70cf982ee192b116cc664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_482c6018f54756c71c40062e0d36276676fbc1044ce70cf982ee192b116cc664->enter($__internal_482c6018f54756c71c40062e0d36276676fbc1044ce70cf982ee192b116cc664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 5
        echo "    <div id=\"wrapper\">

        <h1>User Add (users/add)</h1>

        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Create\"/>
        <a href=\"http://localhost/udev_symfony/web/app_dev.php/users\"><input type=\"button\" class=\"btn btn-defaut\" value=\"Back\"/></a>

        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
";
        
        $__internal_482c6018f54756c71c40062e0d36276676fbc1044ce70cf982ee192b116cc664->leave($__internal_482c6018f54756c71c40062e0d36276676fbc1044ce70cf982ee192b116cc664_prof);

        
        $__internal_615354fb07335e12961e5f3bd9829fb7cdac2c2b5a90cd20a0cfce4042da1586->leave($__internal_615354fb07335e12961e5f3bd9829fb7cdac2c2b5a90cd20a0cfce4042da1586_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fe74f5035a0ea4efb928f2d1d14380b97dd5fcbef6ba53d082cc2cee91de2221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe74f5035a0ea4efb928f2d1d14380b97dd5fcbef6ba53d082cc2cee91de2221->enter($__internal_fe74f5035a0ea4efb928f2d1d14380b97dd5fcbef6ba53d082cc2cee91de2221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_06624dca6d507c89dc808da31831dc3fe5a9e4c263e5c493464ee17c082bea07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06624dca6d507c89dc808da31831dc3fe5a9e4c263e5c493464ee17c082bea07->enter($__internal_06624dca6d507c89dc808da31831dc3fe5a9e4c263e5c493464ee17c082bea07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    <style>
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
        
        $__internal_06624dca6d507c89dc808da31831dc3fe5a9e4c263e5c493464ee17c082bea07->leave($__internal_06624dca6d507c89dc808da31831dc3fe5a9e4c263e5c493464ee17c082bea07_prof);

        
        $__internal_fe74f5035a0ea4efb928f2d1d14380b97dd5fcbef6ba53d082cc2cee91de2221->leave($__internal_fe74f5035a0ea4efb928f2d1d14380b97dd5fcbef6ba53d082cc2cee91de2221_prof);

    }

    public function getTemplateName()
    {
        return "users/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 20,  84 => 19,  70 => 14,  63 => 10,  59 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
    {% form_theme form 'bootstrap_3_layout.html.twig' %}
    <div id=\"wrapper\">

        <h1>User Add (users/add)</h1>

        {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Create\"/>
        <a href=\"http://localhost/udev_symfony/web/app_dev.php/users\"><input type=\"button\" class=\"btn btn-defaut\" value=\"Back\"/></a>

        {{ form_end(form) }}

    </div>
{% endblock %}

{% block stylesheets %}
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
", "users/add.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/add.html.twig");
    }
}
