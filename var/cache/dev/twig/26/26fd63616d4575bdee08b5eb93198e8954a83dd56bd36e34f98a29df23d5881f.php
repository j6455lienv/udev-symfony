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
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_444224d727fd4d777c6e00cd805b1b78f0ddfcbbe379682c7b1b45dbec8e520d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_444224d727fd4d777c6e00cd805b1b78f0ddfcbbe379682c7b1b45dbec8e520d->enter($__internal_444224d727fd4d777c6e00cd805b1b78f0ddfcbbe379682c7b1b45dbec8e520d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/show.html.twig"));

        $__internal_4326905e11bced81482b10f16f7e4756a4779996f7de13f48208ffed1f27a379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4326905e11bced81482b10f16f7e4756a4779996f7de13f48208ffed1f27a379->enter($__internal_4326905e11bced81482b10f16f7e4756a4779996f7de13f48208ffed1f27a379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_444224d727fd4d777c6e00cd805b1b78f0ddfcbbe379682c7b1b45dbec8e520d->leave($__internal_444224d727fd4d777c6e00cd805b1b78f0ddfcbbe379682c7b1b45dbec8e520d_prof);

        
        $__internal_4326905e11bced81482b10f16f7e4756a4779996f7de13f48208ffed1f27a379->leave($__internal_4326905e11bced81482b10f16f7e4756a4779996f7de13f48208ffed1f27a379_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_716115b6ccf6b9bdb518315d6fd654e55684031503278e7beafe4bc140d1f930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_716115b6ccf6b9bdb518315d6fd654e55684031503278e7beafe4bc140d1f930->enter($__internal_716115b6ccf6b9bdb518315d6fd654e55684031503278e7beafe4bc140d1f930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c42ef29cb4724ba4149a8ae7c90d4fdcef76c2f5c2a29a5075a633adc5e2414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c42ef29cb4724ba4149a8ae7c90d4fdcef76c2f5c2a29a5075a633adc5e2414->enter($__internal_8c42ef29cb4724ba4149a8ae7c90d4fdcef76c2f5c2a29a5075a633adc5e2414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "layout/mainMenu.html.twig", array("current" => "users"));
        echo "

    <div class=\"container\" style=\"display:flex; justify-content: space-around;\">

        <div id=\"container\">
            <h1>Show Users</h1>
            <div>
                <span>Id : </span><span>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</span>
            </div>
            <div>
                <span>Username : </span><span>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</span>
            </div>
            <div>
                <span>eMail : </span><span>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</span>
            </div>
            <div>
                <span>Date : </span><span>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "date", array()), "Y-m-d"), "html", null, true);
        echo "</span>
            </div>
            <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-xs\">Edit</a>
            <a href=\"http://localhost/udev_symfony/web/app_dev.php/users\"><input type=\"button\" class=\"btn btn-defaut\"
                                                                                 value=\"Back\"/></a>
        </div>

        <div id=\"container\">
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:User:otherUserWidget", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))));
        echo "
        </div>

    </div>
";
        
        $__internal_8c42ef29cb4724ba4149a8ae7c90d4fdcef76c2f5c2a29a5075a633adc5e2414->leave($__internal_8c42ef29cb4724ba4149a8ae7c90d4fdcef76c2f5c2a29a5075a633adc5e2414_prof);

        
        $__internal_716115b6ccf6b9bdb518315d6fd654e55684031503278e7beafe4bc140d1f930->leave($__internal_716115b6ccf6b9bdb518315d6fd654e55684031503278e7beafe4bc140d1f930_prof);

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
        return array (  92 => 28,  83 => 22,  78 => 20,  72 => 17,  66 => 14,  60 => 11,  49 => 4,  40 => 3,  11 => 1,);
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

    <div class=\"container\" style=\"display:flex; justify-content: space-around;\">

        <div id=\"container\">
            <h1>Show Users</h1>
            <div>
                <span>Id : </span><span>{{ user.id }}</span>
            </div>
            <div>
                <span>Username : </span><span>{{ user.username }}</span>
            </div>
            <div>
                <span>eMail : </span><span>{{ user.email }}</span>
            </div>
            <div>
                <span>Date : </span><span>{{ user.date|date(\"Y-m-d\") }}</span>
            </div>
            <a href=\"{{ path('edit', {'id' : user.id}) }}\" class=\"btn btn-primary btn-xs\">Edit</a>
            <a href=\"http://localhost/udev_symfony/web/app_dev.php/users\"><input type=\"button\" class=\"btn btn-defaut\"
                                                                                 value=\"Back\"/></a>
        </div>

        <div id=\"container\">
            {{ render(controller('AppBundle:User:otherUserWidget', {'id':user.id})) }}
        </div>

    </div>
{% endblock %}", "users/show.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/show.html.twig");
    }
}
