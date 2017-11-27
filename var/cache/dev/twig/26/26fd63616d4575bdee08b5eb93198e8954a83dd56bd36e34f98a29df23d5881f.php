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
        $__internal_fb59c926920ff22a40b93287464907b8e5137f460de7118aa84c62b93956b1bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb59c926920ff22a40b93287464907b8e5137f460de7118aa84c62b93956b1bd->enter($__internal_fb59c926920ff22a40b93287464907b8e5137f460de7118aa84c62b93956b1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/show.html.twig"));

        $__internal_1b3d37710c69badbf020d04dd41464f65cd8dccf7b812570de7ef057dba215b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3d37710c69badbf020d04dd41464f65cd8dccf7b812570de7ef057dba215b3->enter($__internal_1b3d37710c69badbf020d04dd41464f65cd8dccf7b812570de7ef057dba215b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb59c926920ff22a40b93287464907b8e5137f460de7118aa84c62b93956b1bd->leave($__internal_fb59c926920ff22a40b93287464907b8e5137f460de7118aa84c62b93956b1bd_prof);

        
        $__internal_1b3d37710c69badbf020d04dd41464f65cd8dccf7b812570de7ef057dba215b3->leave($__internal_1b3d37710c69badbf020d04dd41464f65cd8dccf7b812570de7ef057dba215b3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9ff46b62ee764ffd8d0ffff209d22a771b9568d206a1536915b6ea40007bcb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9ff46b62ee764ffd8d0ffff209d22a771b9568d206a1536915b6ea40007bcb2->enter($__internal_e9ff46b62ee764ffd8d0ffff209d22a771b9568d206a1536915b6ea40007bcb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f55ba29d87ea7f0627b2d7956fd249b15af183d13a11462008167f4b91e14ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f55ba29d87ea7f0627b2d7956fd249b15af183d13a11462008167f4b91e14ac3->enter($__internal_f55ba29d87ea7f0627b2d7956fd249b15af183d13a11462008167f4b91e14ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Show Users</h1>

    <div id=\"wrapper\">
        <div>
            <span>Id : </span><span>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</span>
        </div>
        <div>
            <span>Username : </span><span>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</span>
        </div>
        <div>
            <span>eMail : </span><span>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</span>
        </div>
        <div>
            <span>Date : </span><span>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "date", array()), "Y-m-d"), "html", null, true);
        echo "</span>
        </div>
        <a href =\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-xs\">Edit</a>
    </div>

";
        
        $__internal_f55ba29d87ea7f0627b2d7956fd249b15af183d13a11462008167f4b91e14ac3->leave($__internal_f55ba29d87ea7f0627b2d7956fd249b15af183d13a11462008167f4b91e14ac3_prof);

        
        $__internal_e9ff46b62ee764ffd8d0ffff209d22a771b9568d206a1536915b6ea40007bcb2->leave($__internal_e9ff46b62ee764ffd8d0ffff209d22a771b9568d206a1536915b6ea40007bcb2_prof);

    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9405ecc6b58b2605cf7624c0515f09af6ca52361c1a02b5ae42c454b66de79d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9405ecc6b58b2605cf7624c0515f09af6ca52361c1a02b5ae42c454b66de79d4->enter($__internal_9405ecc6b58b2605cf7624c0515f09af6ca52361c1a02b5ae42c454b66de79d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4590e7d4113b89de1273f6c6d12495c629b66283519d268ad0e95719c86934a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4590e7d4113b89de1273f6c6d12495c629b66283519d268ad0e95719c86934a3->enter($__internal_4590e7d4113b89de1273f6c6d12495c629b66283519d268ad0e95719c86934a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 26
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
        
        $__internal_4590e7d4113b89de1273f6c6d12495c629b66283519d268ad0e95719c86934a3->leave($__internal_4590e7d4113b89de1273f6c6d12495c629b66283519d268ad0e95719c86934a3_prof);

        
        $__internal_9405ecc6b58b2605cf7624c0515f09af6ca52361c1a02b5ae42c454b66de79d4->leave($__internal_9405ecc6b58b2605cf7624c0515f09af6ca52361c1a02b5ae42c454b66de79d4_prof);

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
        return array (  103 => 26,  94 => 25,  80 => 20,  75 => 18,  69 => 15,  63 => 12,  57 => 9,  50 => 4,  41 => 3,  11 => 1,);
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

    <h1>Show Users</h1>

    <div id=\"wrapper\">
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
", "users/show.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/show.html.twig");
    }
}
