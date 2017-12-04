<?php

/* users/users.html.twig */
class __TwigTemplate_e2387ed7da90f5b93d3fa9a905f670363e7225b98c8a9a617075aa69e1909055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "users/users.html.twig", 1);
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
        $__internal_108bc2d3db22a830ef9fe088b4f8194ea5e2d1abc73ab5d4e67c5e7e0523d1cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_108bc2d3db22a830ef9fe088b4f8194ea5e2d1abc73ab5d4e67c5e7e0523d1cf->enter($__internal_108bc2d3db22a830ef9fe088b4f8194ea5e2d1abc73ab5d4e67c5e7e0523d1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/users.html.twig"));

        $__internal_df217f78feac23d9f0274650d1d235bbd469082539acbfbb9f199d6de38cbe9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df217f78feac23d9f0274650d1d235bbd469082539acbfbb9f199d6de38cbe9e->enter($__internal_df217f78feac23d9f0274650d1d235bbd469082539acbfbb9f199d6de38cbe9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_108bc2d3db22a830ef9fe088b4f8194ea5e2d1abc73ab5d4e67c5e7e0523d1cf->leave($__internal_108bc2d3db22a830ef9fe088b4f8194ea5e2d1abc73ab5d4e67c5e7e0523d1cf_prof);

        
        $__internal_df217f78feac23d9f0274650d1d235bbd469082539acbfbb9f199d6de38cbe9e->leave($__internal_df217f78feac23d9f0274650d1d235bbd469082539acbfbb9f199d6de38cbe9e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d7162cda1ab487d9d3a0305bfd8e7042dc1b2c19d2f4276e4f97b00c82caef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d7162cda1ab487d9d3a0305bfd8e7042dc1b2c19d2f4276e4f97b00c82caef6->enter($__internal_4d7162cda1ab487d9d3a0305bfd8e7042dc1b2c19d2f4276e4f97b00c82caef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7726cbe2e51c2de3761e9321df8ee120e43c286b71ecf80cb6488247ac49d54c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7726cbe2e51c2de3761e9321df8ee120e43c286b71ecf80cb6488247ac49d54c->enter($__internal_7726cbe2e51c2de3761e9321df8ee120e43c286b71ecf80cb6488247ac49d54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo twig_include($this->env, $context, "layout/mainMenu.html.twig", array("current" => "users"));
        echo "

    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/users.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <div class=\"container\">
        <h1>User List</h1>
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">USERNAME</th>
                <th scope=\"col\">MAIL</th>
                <th scope=\"col\">DATE</th>
                <th scope=\"col\">UPDATE</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            echo "                <tr>
                    <th scope=\"row\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</th>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\">Show</a>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\">Delete</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </tbody>
        </table>
        <div class=\"container footer-button\">
            <div class=\"container button\"><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add");
        echo "\" class=\"btn btn-primary btn-xs\">Add</a></div>
            <div class=\"container navigation button\">";
        // line 33
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["users"] ?? $this->getContext($context, "users")));
        echo "</div>
        </div>
    </div>
";
        
        $__internal_7726cbe2e51c2de3761e9321df8ee120e43c286b71ecf80cb6488247ac49d54c->leave($__internal_7726cbe2e51c2de3761e9321df8ee120e43c286b71ecf80cb6488247ac49d54c_prof);

        
        $__internal_4d7162cda1ab487d9d3a0305bfd8e7042dc1b2c19d2f4276e4f97b00c82caef6->leave($__internal_4d7162cda1ab487d9d3a0305bfd8e7042dc1b2c19d2f4276e4f97b00c82caef6_prof);

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
        return array (  114 => 33,  110 => 32,  105 => 29,  95 => 25,  91 => 24,  86 => 22,  82 => 21,  78 => 20,  75 => 19,  71 => 18,  55 => 5,  49 => 3,  40 => 2,  11 => 1,);
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

    <link href=\"{{ asset('css/users.css') }}\" rel=\"stylesheet\">
    <div class=\"container\">
        <h1>User List</h1>
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">USERNAME</th>
                <th scope=\"col\">MAIL</th>
                <th scope=\"col\">DATE</th>
                <th scope=\"col\">UPDATE</th>
            </tr>
            </thead>
            <tbody>
            {% for user in users %}
                <tr>
                    <th scope=\"row\">{{ user.username }}</th>
                    <td>{{ user.email }}</td>
                    <td>{{ user.date|date(\"Y-m-d\") }}</td>
                    <td>
                        <a href=\"{{ path('show', {'id' : user.id}) }}\" class=\"btn btn-primary btn-xs\">Show</a>
                        <a href=\"{{ path('delete', {'id' : user.id}) }}\" class=\"btn btn-primary btn-xs\">Delete</a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        <div class=\"container footer-button\">
            <div class=\"container button\"><a href=\"{{ path('add') }}\" class=\"btn btn-primary btn-xs\">Add</a></div>
            <div class=\"container navigation button\">{{ knp_pagination_render(users) }}</div>
        </div>
    </div>
{% endblock %}
", "users/users.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/users.html.twig");
    }
}
