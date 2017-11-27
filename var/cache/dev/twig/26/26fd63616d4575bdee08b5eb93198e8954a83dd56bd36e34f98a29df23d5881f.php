<?php

/* users/show.html.twig */
class __TwigTemplate_10a98feb6cb9b71d09db08126f9d00aba598093483e71eb72aa296f093e8923e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "users/show.html.twig", 1);
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
        $__internal_4b6293415a0173a78a62f2716815053215023bd9510f12e7d7de124f26c5880a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b6293415a0173a78a62f2716815053215023bd9510f12e7d7de124f26c5880a->enter($__internal_4b6293415a0173a78a62f2716815053215023bd9510f12e7d7de124f26c5880a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/show.html.twig"));

        $__internal_072874a5d247900576b318c1d371fc0fad33dfe948a70e53970b08c24ffd3b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_072874a5d247900576b318c1d371fc0fad33dfe948a70e53970b08c24ffd3b79->enter($__internal_072874a5d247900576b318c1d371fc0fad33dfe948a70e53970b08c24ffd3b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b6293415a0173a78a62f2716815053215023bd9510f12e7d7de124f26c5880a->leave($__internal_4b6293415a0173a78a62f2716815053215023bd9510f12e7d7de124f26c5880a_prof);

        
        $__internal_072874a5d247900576b318c1d371fc0fad33dfe948a70e53970b08c24ffd3b79->leave($__internal_072874a5d247900576b318c1d371fc0fad33dfe948a70e53970b08c24ffd3b79_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d09ad72807c538075dd2b0b2ff2920cd0a6140fca5df8630b75c69b81659726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d09ad72807c538075dd2b0b2ff2920cd0a6140fca5df8630b75c69b81659726->enter($__internal_5d09ad72807c538075dd2b0b2ff2920cd0a6140fca5df8630b75c69b81659726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc1f221b8673c3b13068cd4b217e6535d5ad17cd6d5a59ba87ab694c5f6942bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1f221b8673c3b13068cd4b217e6535d5ad17cd6d5a59ba87ab694c5f6942bb->enter($__internal_bc1f221b8673c3b13068cd4b217e6535d5ad17cd6d5a59ba87ab694c5f6942bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"show\" style=\"display:flex; justify-content: center;\">
    <div id=\"wrapper\">
    <h1>Show Users</h1>

        <div>
            <span>Id : </span><span>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</span>
        </div>
        <div>
            <span>Username : </span><span>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</span>
        </div>
        <div>
            <span>eMail : </span><span>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</span>
        </div>
        <div>
            <span>Date : </span><span>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "date", array()), "Y-m-d"), "html", null, true);
        echo "</span>
        </div>
        <a href =\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-xs\">Edit</a>
        <a href=\"http://localhost/udev_symfony/web/app_dev.php/users\"><input type=\"button\" class=\"btn btn-defaut\" value=\"Back\"/></a>
    </div>
    <div id=\"wrapper\">
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:User:otherUserWidget", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))));
        echo "
    </div>
</div>
";
        
        $__internal_bc1f221b8673c3b13068cd4b217e6535d5ad17cd6d5a59ba87ab694c5f6942bb->leave($__internal_bc1f221b8673c3b13068cd4b217e6535d5ad17cd6d5a59ba87ab694c5f6942bb_prof);

        
        $__internal_5d09ad72807c538075dd2b0b2ff2920cd0a6140fca5df8630b75c69b81659726->leave($__internal_5d09ad72807c538075dd2b0b2ff2920cd0a6140fca5df8630b75c69b81659726_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9c3be05e627fb5551754f81971a4ed104f1e8753e72e0c0eccfa3dae5b32d350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c3be05e627fb5551754f81971a4ed104f1e8753e72e0c0eccfa3dae5b32d350->enter($__internal_9c3be05e627fb5551754f81971a4ed104f1e8753e72e0c0eccfa3dae5b32d350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_040084abc404d3fa97f380c5ce41c9045c6b87d7e6e7553ea13f33298ab02380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040084abc404d3fa97f380c5ce41c9045c6b87d7e6e7553ea13f33298ab02380->enter($__internal_040084abc404d3fa97f380c5ce41c9045c6b87d7e6e7553ea13f33298ab02380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 31
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
        .show{
            margin:3em 8em 0 10em;
        }
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
        
        $__internal_040084abc404d3fa97f380c5ce41c9045c6b87d7e6e7553ea13f33298ab02380->leave($__internal_040084abc404d3fa97f380c5ce41c9045c6b87d7e6e7553ea13f33298ab02380_prof);

        
        $__internal_9c3be05e627fb5551754f81971a4ed104f1e8753e72e0c0eccfa3dae5b32d350->leave($__internal_9c3be05e627fb5551754f81971a4ed104f1e8753e72e0c0eccfa3dae5b32d350_prof);

    }

    public function getTemplateName()
    {
        return "users/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 31,  102 => 30,  88 => 25,  81 => 21,  76 => 19,  70 => 16,  64 => 13,  58 => 10,  50 => 4,  41 => 3,  11 => 1,);
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

<div class=\"show\" style=\"display:flex; justify-content: center;\">
    <div id=\"wrapper\">
    <h1>Show Users</h1>

        <div>
            <span>Id : </span><span>{{user.id}}</span>
        </div>
        <div>
            <span>Username : </span><span>{{user.username}}</span>
        </div>
        <div>
            <span>eMail : </span><span>{{user.email}}</span>
        </div>
        <div>
            <span>Date : </span><span>{{user.date|date(\"Y-m-d\")}}</span>
        </div>
        <a href =\"{{ path('edit', {'id' : user.id}) }}\" class=\"btn btn-primary btn-xs\">Edit</a>
        <a href=\"http://localhost/udev_symfony/web/app_dev.php/users\"><input type=\"button\" class=\"btn btn-defaut\" value=\"Back\"/></a>
    </div>
    <div id=\"wrapper\">
        {{ render(controller('AppBundle:User:otherUserWidget', {'id':user.id})) }}
    </div>
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
        .show{
            margin:3em 8em 0 10em;
        }
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
", "users/show.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/show.html.twig");
    }
}
