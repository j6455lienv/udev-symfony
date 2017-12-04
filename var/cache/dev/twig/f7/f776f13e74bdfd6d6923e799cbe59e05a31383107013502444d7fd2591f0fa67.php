<?php

/* :articles:show.html.twig */
class __TwigTemplate_a4e255278e412e199aec348d00b45db5eab4931fa5c65b966a91d06b9202abb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":articles:show.html.twig", 1);
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
        $__internal_6db153507dd096578e399902960fd2be7d96db7d417592628427a60669efba7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db153507dd096578e399902960fd2be7d96db7d417592628427a60669efba7f->enter($__internal_6db153507dd096578e399902960fd2be7d96db7d417592628427a60669efba7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":articles:show.html.twig"));

        $__internal_a72d2f38966882d33ad85a69c22a4ad94152aa6557243c584ad4ac5c83438f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72d2f38966882d33ad85a69c22a4ad94152aa6557243c584ad4ac5c83438f0a->enter($__internal_a72d2f38966882d33ad85a69c22a4ad94152aa6557243c584ad4ac5c83438f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":articles:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6db153507dd096578e399902960fd2be7d96db7d417592628427a60669efba7f->leave($__internal_6db153507dd096578e399902960fd2be7d96db7d417592628427a60669efba7f_prof);

        
        $__internal_a72d2f38966882d33ad85a69c22a4ad94152aa6557243c584ad4ac5c83438f0a->leave($__internal_a72d2f38966882d33ad85a69c22a4ad94152aa6557243c584ad4ac5c83438f0a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c78fe9282fdd7cc1d7257c8835a26e8333e45fb24729877cad1405339850a73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c78fe9282fdd7cc1d7257c8835a26e8333e45fb24729877cad1405339850a73->enter($__internal_6c78fe9282fdd7cc1d7257c8835a26e8333e45fb24729877cad1405339850a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44739ca4911d56129a2e02feccacc3e91ffbf73c9242a22d5d9c3f221e2db43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44739ca4911d56129a2e02feccacc3e91ffbf73c9242a22d5d9c3f221e2db43c->enter($__internal_44739ca4911d56129a2e02feccacc3e91ffbf73c9242a22d5d9c3f221e2db43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "layout/mainMenu.html.twig", array("current" => "articles"));
        echo "

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-12\">
                <h1>Show Articles</h1>
                <div>
                    <span>N° : </span><span>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "</span>
                </div>
                <div>
                    <span>Subject : </span><span>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "subject", array()), "html", null, true);
        echo "</span>
                </div>
                <div>
                    <span>Body : </span><span>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "body", array()), "html", null, true);
        echo "</span>
                </div>
                <div>
                    <span>Date : </span><span>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "date", array()), "Y-m-d"), "html", null, true);
        echo "</span>
                </div>
                <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-xs\">Edit</a>
                <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles");
        echo "\"><input type=\"button\" class=\"btn btn-default\" value=\"Back\"/></a>
            </div>

            <div class=\"col-md-6 col-sm-12\">
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Article:otherArticleWidget", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))));
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_44739ca4911d56129a2e02feccacc3e91ffbf73c9242a22d5d9c3f221e2db43c->leave($__internal_44739ca4911d56129a2e02feccacc3e91ffbf73c9242a22d5d9c3f221e2db43c_prof);

        
        $__internal_6c78fe9282fdd7cc1d7257c8835a26e8333e45fb24729877cad1405339850a73->leave($__internal_6c78fe9282fdd7cc1d7257c8835a26e8333e45fb24729877cad1405339850a73_prof);

    }

    public function getTemplateName()
    {
        return ":articles:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 27,  87 => 23,  83 => 22,  78 => 20,  72 => 17,  66 => 14,  60 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
    {{ include('layout/mainMenu.html.twig', {'current' : 'articles'}) }}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-12\">
                <h1>Show Articles</h1>
                <div>
                    <span>N° : </span><span>{{ article.id }}</span>
                </div>
                <div>
                    <span>Subject : </span><span>{{ article.subject }}</span>
                </div>
                <div>
                    <span>Body : </span><span>{{ article.body }}</span>
                </div>
                <div>
                    <span>Date : </span><span>{{ article.date|date(\"Y-m-d\") }}</span>
                </div>
                <a href=\"{{ path('article_edit', {'id' : article.id}) }}\" class=\"btn btn-primary btn-xs\">Edit</a>
                <a href=\"{{ path('articles') }}\"><input type=\"button\" class=\"btn btn-default\" value=\"Back\"/></a>
            </div>

            <div class=\"col-md-6 col-sm-12\">
                {{ render(controller('AppBundle:Article:otherArticleWidget', {'id':article.id})) }}
            </div>
        </div>
    </div>
{% endblock %}", ":articles:show.html.twig", "/var/www/html/udev_symfony/app/Resources/views/articles/show.html.twig");
    }
}
