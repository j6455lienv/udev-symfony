<?php

/* users/show.html.twig */
class __TwigTemplate_627849667c0779c166e52e6c0c1846cb7f796f8e9d6369a22171f00d1f0d18a6 extends Twig_Template
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
        $__internal_a3fff78e773a61d577a6c333584f1407734e61c12d42975b02e79dad27fc4a8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3fff78e773a61d577a6c333584f1407734e61c12d42975b02e79dad27fc4a8a->enter($__internal_a3fff78e773a61d577a6c333584f1407734e61c12d42975b02e79dad27fc4a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/show.html.twig"));

        $__internal_4f014d0a616429d60ae29ac6ebc564c5139203602d586efc96a91f74800e35fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f014d0a616429d60ae29ac6ebc564c5139203602d586efc96a91f74800e35fe->enter($__internal_4f014d0a616429d60ae29ac6ebc564c5139203602d586efc96a91f74800e35fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3fff78e773a61d577a6c333584f1407734e61c12d42975b02e79dad27fc4a8a->leave($__internal_a3fff78e773a61d577a6c333584f1407734e61c12d42975b02e79dad27fc4a8a_prof);

        
        $__internal_4f014d0a616429d60ae29ac6ebc564c5139203602d586efc96a91f74800e35fe->leave($__internal_4f014d0a616429d60ae29ac6ebc564c5139203602d586efc96a91f74800e35fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6c00a808c0dad91d9bf6f252ce13fee7685eb42c8fbed7a9dcfa92fbb541e1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6c00a808c0dad91d9bf6f252ce13fee7685eb42c8fbed7a9dcfa92fbb541e1e->enter($__internal_f6c00a808c0dad91d9bf6f252ce13fee7685eb42c8fbed7a9dcfa92fbb541e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d52329519db41ec451f40468273610826507825b677ce99f7e02633428b8453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d52329519db41ec451f40468273610826507825b677ce99f7e02633428b8453->enter($__internal_4d52329519db41ec451f40468273610826507825b677ce99f7e02633428b8453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4d52329519db41ec451f40468273610826507825b677ce99f7e02633428b8453->leave($__internal_4d52329519db41ec451f40468273610826507825b677ce99f7e02633428b8453_prof);

        
        $__internal_f6c00a808c0dad91d9bf6f252ce13fee7685eb42c8fbed7a9dcfa92fbb541e1e->leave($__internal_f6c00a808c0dad91d9bf6f252ce13fee7685eb42c8fbed7a9dcfa92fbb541e1e_prof);

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
