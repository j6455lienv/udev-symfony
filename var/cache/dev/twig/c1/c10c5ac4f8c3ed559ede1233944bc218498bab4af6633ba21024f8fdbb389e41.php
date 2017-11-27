<?php

/* users/users.html.twig */
class __TwigTemplate_a3e161c5aaf6a2de51a1b68f3b6ba5dbe02028c6aa20e7892d2ce402a461a3ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "users/users.html.twig", 1);
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
        $__internal_068710955c6dfe7a93a412b58700bbb2d9dfe199396fc3c2c19bfb19ffb33c63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_068710955c6dfe7a93a412b58700bbb2d9dfe199396fc3c2c19bfb19ffb33c63->enter($__internal_068710955c6dfe7a93a412b58700bbb2d9dfe199396fc3c2c19bfb19ffb33c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/users.html.twig"));

        $__internal_781a70c21defbac4370ae8a07cec06ec3ca57e0d845c691802c93f592810ee19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_781a70c21defbac4370ae8a07cec06ec3ca57e0d845c691802c93f592810ee19->enter($__internal_781a70c21defbac4370ae8a07cec06ec3ca57e0d845c691802c93f592810ee19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_068710955c6dfe7a93a412b58700bbb2d9dfe199396fc3c2c19bfb19ffb33c63->leave($__internal_068710955c6dfe7a93a412b58700bbb2d9dfe199396fc3c2c19bfb19ffb33c63_prof);

        
        $__internal_781a70c21defbac4370ae8a07cec06ec3ca57e0d845c691802c93f592810ee19->leave($__internal_781a70c21defbac4370ae8a07cec06ec3ca57e0d845c691802c93f592810ee19_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_788100c7c0504387ff49cceeb53f959883d27ccc17065a3281087dffec5adb58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_788100c7c0504387ff49cceeb53f959883d27ccc17065a3281087dffec5adb58->enter($__internal_788100c7c0504387ff49cceeb53f959883d27ccc17065a3281087dffec5adb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb4d62a205e5ab44d4ef391cdbe142faafe42d804b5797d94916200038eb1ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4d62a205e5ab44d4ef391cdbe142faafe42d804b5797d94916200038eb1ee8->enter($__internal_bb4d62a205e5ab44d4ef391cdbe142faafe42d804b5797d94916200038eb1ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "layout/mainMenu.html.twig", array("current" => "userlist"));
        echo "

    <div id=\"wrapper\">
        <h1>List Users</h1>
        <!-- affichage des select -->
        <table>
            <th>Id</th>
            <th>Username</th>
            <th>eMail</th>
            <th>date</th>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 15
            echo "                <tr>
                    <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "username", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "email", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>
                            <a href =\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usershow", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\">Show</a>
                            <a href =\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userdelete", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\">Delete</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </table>
        <a href =\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("useradd");
        echo "\" class=\"btn btn-primary btn-xs\">Add</a>
    </div>
";
        
        $__internal_bb4d62a205e5ab44d4ef391cdbe142faafe42d804b5797d94916200038eb1ee8->leave($__internal_bb4d62a205e5ab44d4ef391cdbe142faafe42d804b5797d94916200038eb1ee8_prof);

        
        $__internal_788100c7c0504387ff49cceeb53f959883d27ccc17065a3281087dffec5adb58->leave($__internal_788100c7c0504387ff49cceeb53f959883d27ccc17065a3281087dffec5adb58_prof);

    }

    // line 31
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e576a641c01d751fed5e675dc9eb3fa71ca12bed5978839ba9baed341a71fc77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e576a641c01d751fed5e675dc9eb3fa71ca12bed5978839ba9baed341a71fc77->enter($__internal_e576a641c01d751fed5e675dc9eb3fa71ca12bed5978839ba9baed341a71fc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0f5e4fe47028fcb6cbcad1ecdcdedb6e59e3a255b0269d7d50e2f92b8edad19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f5e4fe47028fcb6cbcad1ecdcdedb6e59e3a255b0269d7d50e2f92b8edad19a->enter($__internal_0f5e4fe47028fcb6cbcad1ecdcdedb6e59e3a255b0269d7d50e2f92b8edad19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 32
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
        
        $__internal_0f5e4fe47028fcb6cbcad1ecdcdedb6e59e3a255b0269d7d50e2f92b8edad19a->leave($__internal_0f5e4fe47028fcb6cbcad1ecdcdedb6e59e3a255b0269d7d50e2f92b8edad19a_prof);

        
        $__internal_e576a641c01d751fed5e675dc9eb3fa71ca12bed5978839ba9baed341a71fc77->leave($__internal_e576a641c01d751fed5e675dc9eb3fa71ca12bed5978839ba9baed341a71fc77_prof);

    }

    public function getTemplateName()
    {
        return "users/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 32,  118 => 31,  105 => 27,  102 => 26,  92 => 22,  88 => 21,  83 => 19,  79 => 18,  75 => 17,  71 => 16,  68 => 15,  64 => 14,  50 => 4,  41 => 3,  11 => 1,);
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
    {{ include('layout/mainMenu.html.twig', {'current' : 'userlist'}) }}

    <div id=\"wrapper\">
        <h1>List Users</h1>
        <!-- affichage des select -->
        <table>
            <th>Id</th>
            <th>Username</th>
            <th>eMail</th>
            <th>date</th>
            {% for i in users %}
                <tr>
                    <td>{{i.id}}</td>
                    <td>{{i.username}}</td>
                    <td>{{i.email}}</td>
                    <td>{{i.date|date(\"Y-m-d\")}}</td>
                    <td>
                            <a href =\"{{ path('usershow', {'id' : i.id}) }}\" class=\"btn btn-primary btn-xs\">Show</a>
                            <a href =\"{{ path('userdelete', {'id' : i.id}) }}\" class=\"btn btn-primary btn-xs\">Delete</a>
                    </td>
                </tr>
            {% endfor %}
        </table>
        <a href =\"{{ path('useradd') }}\" class=\"btn btn-primary btn-xs\">Add</a>
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
", "users/users.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/users.html.twig");
    }
}
