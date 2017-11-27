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
        $__internal_1423f045da10c6ad014c119adf6ec40b275436e779655c98581407e4fb665f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1423f045da10c6ad014c119adf6ec40b275436e779655c98581407e4fb665f23->enter($__internal_1423f045da10c6ad014c119adf6ec40b275436e779655c98581407e4fb665f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/users.html.twig"));

        $__internal_036f0d08babfd0020a4029d14b817296f2e4beead46030fa838b3b1b15b257c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036f0d08babfd0020a4029d14b817296f2e4beead46030fa838b3b1b15b257c3->enter($__internal_036f0d08babfd0020a4029d14b817296f2e4beead46030fa838b3b1b15b257c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1423f045da10c6ad014c119adf6ec40b275436e779655c98581407e4fb665f23->leave($__internal_1423f045da10c6ad014c119adf6ec40b275436e779655c98581407e4fb665f23_prof);

        
        $__internal_036f0d08babfd0020a4029d14b817296f2e4beead46030fa838b3b1b15b257c3->leave($__internal_036f0d08babfd0020a4029d14b817296f2e4beead46030fa838b3b1b15b257c3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb76d8a35903ca1c804ff7c3af7a790a5378f4ad3cc86b9b205c305b9f955f8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb76d8a35903ca1c804ff7c3af7a790a5378f4ad3cc86b9b205c305b9f955f8c->enter($__internal_cb76d8a35903ca1c804ff7c3af7a790a5378f4ad3cc86b9b205c305b9f955f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e256068a1864d95fc6f85859dd044731255128fd5331a741f9d19cbcec5a1c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e256068a1864d95fc6f85859dd044731255128fd5331a741f9d19cbcec5a1c4->enter($__internal_6e256068a1864d95fc6f85859dd044731255128fd5331a741f9d19cbcec5a1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <h1>List Users</h1>
        <!-- affichage des select -->
        <table>
            <th>Id</th>
            <th>Username</th>
            <th>eMail</th>
            <th>date</th>
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 13
            echo "                <tr>
                    <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "username", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "email", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>
                            <a href =\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usershow", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\">Show</a>
                            <a href =\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userdelete", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\">Delete</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </table>
        <a href =\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("useradd");
        echo "\" class=\"btn btn-primary btn-xs\">Add</a>
    </div>
";
        
        $__internal_6e256068a1864d95fc6f85859dd044731255128fd5331a741f9d19cbcec5a1c4->leave($__internal_6e256068a1864d95fc6f85859dd044731255128fd5331a741f9d19cbcec5a1c4_prof);

        
        $__internal_cb76d8a35903ca1c804ff7c3af7a790a5378f4ad3cc86b9b205c305b9f955f8c->leave($__internal_cb76d8a35903ca1c804ff7c3af7a790a5378f4ad3cc86b9b205c305b9f955f8c_prof);

    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9708281ccf10ad18d8d3b4ccd61d48e19af2975eb3bc9e12009feb987e415afc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9708281ccf10ad18d8d3b4ccd61d48e19af2975eb3bc9e12009feb987e415afc->enter($__internal_9708281ccf10ad18d8d3b4ccd61d48e19af2975eb3bc9e12009feb987e415afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7f59e9da3d8c1ecb10950163ea5310980869fe380dc287155b49e70f8e23cb03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f59e9da3d8c1ecb10950163ea5310980869fe380dc287155b49e70f8e23cb03->enter($__internal_7f59e9da3d8c1ecb10950163ea5310980869fe380dc287155b49e70f8e23cb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 30
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
        
        $__internal_7f59e9da3d8c1ecb10950163ea5310980869fe380dc287155b49e70f8e23cb03->leave($__internal_7f59e9da3d8c1ecb10950163ea5310980869fe380dc287155b49e70f8e23cb03_prof);

        
        $__internal_9708281ccf10ad18d8d3b4ccd61d48e19af2975eb3bc9e12009feb987e415afc->leave($__internal_9708281ccf10ad18d8d3b4ccd61d48e19af2975eb3bc9e12009feb987e415afc_prof);

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
        return array (  123 => 30,  114 => 29,  101 => 25,  98 => 24,  88 => 20,  84 => 19,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  64 => 13,  60 => 12,  50 => 4,  41 => 3,  11 => 1,);
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
