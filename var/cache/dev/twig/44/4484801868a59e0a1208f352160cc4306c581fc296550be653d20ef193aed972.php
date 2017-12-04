<?php

/* :articles:articles.html.twig */
class __TwigTemplate_ae3cd22c1918364351063fb7c9ee03dc656a02caa5c16ba1a10b91d1a6a790f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":articles:articles.html.twig", 1);
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
        $__internal_426b96ba4c8c01de6ff503264e01b3eb14046721f37dddeab2f5318f152a296c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_426b96ba4c8c01de6ff503264e01b3eb14046721f37dddeab2f5318f152a296c->enter($__internal_426b96ba4c8c01de6ff503264e01b3eb14046721f37dddeab2f5318f152a296c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":articles:articles.html.twig"));

        $__internal_dcb786a39dd59fde445fb8587f2fbe641c405b9e7ce9c13d8b509aebc44a5060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb786a39dd59fde445fb8587f2fbe641c405b9e7ce9c13d8b509aebc44a5060->enter($__internal_dcb786a39dd59fde445fb8587f2fbe641c405b9e7ce9c13d8b509aebc44a5060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":articles:articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_426b96ba4c8c01de6ff503264e01b3eb14046721f37dddeab2f5318f152a296c->leave($__internal_426b96ba4c8c01de6ff503264e01b3eb14046721f37dddeab2f5318f152a296c_prof);

        
        $__internal_dcb786a39dd59fde445fb8587f2fbe641c405b9e7ce9c13d8b509aebc44a5060->leave($__internal_dcb786a39dd59fde445fb8587f2fbe641c405b9e7ce9c13d8b509aebc44a5060_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4ec4fbc7dfd347be80b19c7889833073a81819b75d3f64cd09d24c135302805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ec4fbc7dfd347be80b19c7889833073a81819b75d3f64cd09d24c135302805->enter($__internal_a4ec4fbc7dfd347be80b19c7889833073a81819b75d3f64cd09d24c135302805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_573deed4058f5b0ec74aa90f9bba084e5f88a84d5066baf0046f2a6825bd79fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_573deed4058f5b0ec74aa90f9bba084e5f88a84d5066baf0046f2a6825bd79fa->enter($__internal_573deed4058f5b0ec74aa90f9bba084e5f88a84d5066baf0046f2a6825bd79fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <!-- ajout d'une feuille de style-->
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/articles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 5
        echo twig_include($this->env, $context, "layout/mainMenu.html.twig", array("current" => "article"));
        echo "

    <div class=\"container\">
        <h1>Articles</h1>
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">N°</th>
                <th scope=\"col\">Subject</th>
                <th scope=\"col\">Body</th>
                <th id=\"thdate\" scope=\"col\">Date</th>
                <th id=\"thbutt\" scope=\"col\">Update</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 21
            echo "                <tr>
                    <th scope=\"row\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "</th>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "subject", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "body", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("id" => $this->getAttribute($context["value"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Show</a>
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_delete", array("id" => $this->getAttribute($context["value"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Delete</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </tbody>
        </table>
        <div class=\"container footer-button\" style=\"display: flex\">
            <div class=\"container button\"><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_add");
        echo "\" class=\"btn btn-primary btn-xs\">Add</a>
            </div>
            <div class=\"container  button\">";
        // line 37
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["articles"] ?? $this->getContext($context, "articles")));
        echo "</div>
        </div>

    </div>
";
        
        $__internal_573deed4058f5b0ec74aa90f9bba084e5f88a84d5066baf0046f2a6825bd79fa->leave($__internal_573deed4058f5b0ec74aa90f9bba084e5f88a84d5066baf0046f2a6825bd79fa_prof);

        
        $__internal_a4ec4fbc7dfd347be80b19c7889833073a81819b75d3f64cd09d24c135302805->leave($__internal_a4ec4fbc7dfd347be80b19c7889833073a81819b75d3f64cd09d24c135302805_prof);

    }

    public function getTemplateName()
    {
        return ":articles:articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 37,  117 => 35,  112 => 32,  102 => 28,  98 => 27,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  78 => 21,  74 => 20,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
    <!-- ajout d'une feuille de style-->
    <link href=\"{{ asset('css/articles.css') }}\" rel=\"stylesheet\">
    {{ include('layout/mainMenu.html.twig', {'current' : 'article'}) }}

    <div class=\"container\">
        <h1>Articles</h1>
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">N°</th>
                <th scope=\"col\">Subject</th>
                <th scope=\"col\">Body</th>
                <th id=\"thdate\" scope=\"col\">Date</th>
                <th id=\"thbutt\" scope=\"col\">Update</th>
            </tr>
            </thead>
            <tbody>
            {% for value in articles %}
                <tr>
                    <th scope=\"row\">{{ value.id }}</th>
                    <td>{{ value.subject }}</td>
                    <td>{{ value.body }}</td>
                    <td>{{ value.date|date(\"Y-m-d\") }}</td>
                    <td>
                        <a href=\"{{ path('article_show', {'id' : value.id}) }}\" class=\"btn btn-primary\">Show</a>
                        <a href=\"{{ path('article_delete', {'id' : value.id}) }}\" class=\"btn btn-primary\">Delete</a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        <div class=\"container footer-button\" style=\"display: flex\">
            <div class=\"container button\"><a href=\"{{ path('article_add') }}\" class=\"btn btn-primary btn-xs\">Add</a>
            </div>
            <div class=\"container  button\">{{ knp_pagination_render(articles) }}</div>
        </div>

    </div>
{% endblock %}
", ":articles:articles.html.twig", "/var/www/html/udev_symfony/app/Resources/views/articles/articles.html.twig");
    }
}
