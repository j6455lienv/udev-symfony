<?php

/* :default:users.html.twig */
class __TwigTemplate_7627f7cce3b88a8f9d4c8027b80affb62af5ba918d92ad166e9b2ecb20dd6faa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:users.html.twig", 1);
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
        $__internal_b7d75ebc9789bce40062313dc9db73ed5400e47b459de4052b8c7060da6bb12a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7d75ebc9789bce40062313dc9db73ed5400e47b459de4052b8c7060da6bb12a->enter($__internal_b7d75ebc9789bce40062313dc9db73ed5400e47b459de4052b8c7060da6bb12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:users.html.twig"));

        $__internal_eb429c2f759e84624775b07db466ed1a0b237829d16e33b51e206692617c5a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb429c2f759e84624775b07db466ed1a0b237829d16e33b51e206692617c5a2a->enter($__internal_eb429c2f759e84624775b07db466ed1a0b237829d16e33b51e206692617c5a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7d75ebc9789bce40062313dc9db73ed5400e47b459de4052b8c7060da6bb12a->leave($__internal_b7d75ebc9789bce40062313dc9db73ed5400e47b459de4052b8c7060da6bb12a_prof);

        
        $__internal_eb429c2f759e84624775b07db466ed1a0b237829d16e33b51e206692617c5a2a->leave($__internal_eb429c2f759e84624775b07db466ed1a0b237829d16e33b51e206692617c5a2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c1a1a4f9430859a938278f35715ba51c292d64f4918e9ab812bf94dda27be28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c1a1a4f9430859a938278f35715ba51c292d64f4918e9ab812bf94dda27be28->enter($__internal_3c1a1a4f9430859a938278f35715ba51c292d64f4918e9ab812bf94dda27be28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_406b4fbe0aab023bd758f799a2a8585a88e6a32adece52debf9e38370a2aa5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406b4fbe0aab023bd758f799a2a8585a88e6a32adece52debf9e38370a2aa5a5->enter($__internal_406b4fbe0aab023bd758f799a2a8585a88e6a32adece52debf9e38370a2aa5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <h1>page users</h1>
        <!-- affichage des select -->
        <table>
            <th>Nom</th>
            <th>Pass</th>
            <th>eMail</th>
            <th>login</th>
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "username", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "password", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "email", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "login", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</td>

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </table>
    </div>
";
        
        $__internal_406b4fbe0aab023bd758f799a2a8585a88e6a32adece52debf9e38370a2aa5a5->leave($__internal_406b4fbe0aab023bd758f799a2a8585a88e6a32adece52debf9e38370a2aa5a5_prof);

        
        $__internal_3c1a1a4f9430859a938278f35715ba51c292d64f4918e9ab812bf94dda27be28->leave($__internal_3c1a1a4f9430859a938278f35715ba51c292d64f4918e9ab812bf94dda27be28_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b27534662c7b4e56171bcaba2b43d739296020eefe0e2dfd6f5ffb251433ee16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b27534662c7b4e56171bcaba2b43d739296020eefe0e2dfd6f5ffb251433ee16->enter($__internal_b27534662c7b4e56171bcaba2b43d739296020eefe0e2dfd6f5ffb251433ee16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_73e96d389d1abbd1f8ab25a6e41407e5cd71038dea1adee94e03487033d99c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e96d389d1abbd1f8ab25a6e41407e5cd71038dea1adee94e03487033d99c26->enter($__internal_73e96d389d1abbd1f8ab25a6e41407e5cd71038dea1adee94e03487033d99c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
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
        
        $__internal_73e96d389d1abbd1f8ab25a6e41407e5cd71038dea1adee94e03487033d99c26->leave($__internal_73e96d389d1abbd1f8ab25a6e41407e5cd71038dea1adee94e03487033d99c26_prof);

        
        $__internal_b27534662c7b4e56171bcaba2b43d739296020eefe0e2dfd6f5ffb251433ee16->leave($__internal_b27534662c7b4e56171bcaba2b43d739296020eefe0e2dfd6f5ffb251433ee16_prof);

    }

    public function getTemplateName()
    {
        return ":default:users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 29,  107 => 28,  95 => 24,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  66 => 15,  62 => 14,  50 => 4,  41 => 3,  11 => 1,);
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
    <div id=\"wrapper\">
        <h1>page users</h1>
        <!-- affichage des select -->
        <table>
            <th>Nom</th>
            <th>Pass</th>
            <th>eMail</th>
            <th>login</th>
            <th>date</th>

            {% for i in users %}
                <tr>
                    <td>{{i.username}}</td>
                    <td>{{i.password}}</td>
                    <td>{{i.email}}</td>
                    <td>{{i.login}}</td>
                    <td>{{i.date|date(\"Y-m-d\")}}</td>

                </tr>
            {% endfor %}
        </table>
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
", ":default:users.html.twig", "/var/www/html/udev_symfony/app/Resources/views/default/users.html.twig");
    }
}
