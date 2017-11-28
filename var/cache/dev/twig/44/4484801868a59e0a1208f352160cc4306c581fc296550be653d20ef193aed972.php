<?php

/* articles/articles.html.twig */
class __TwigTemplate_ae3cd22c1918364351063fb7c9ee03dc656a02caa5c16ba1a10b91d1a6a790f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "articles/articles.html.twig", 1);
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
        $__internal_c2cf47d86a84bd6745ae4e3ea0d6e6bc2f07b2c65eff163b176c7af3b94e5178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2cf47d86a84bd6745ae4e3ea0d6e6bc2f07b2c65eff163b176c7af3b94e5178->enter($__internal_c2cf47d86a84bd6745ae4e3ea0d6e6bc2f07b2c65eff163b176c7af3b94e5178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/articles.html.twig"));

        $__internal_397e4cadb5acf8b24cb6f33f3038fefe508483af24c1fdb97d566e69016ac7d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_397e4cadb5acf8b24cb6f33f3038fefe508483af24c1fdb97d566e69016ac7d5->enter($__internal_397e4cadb5acf8b24cb6f33f3038fefe508483af24c1fdb97d566e69016ac7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2cf47d86a84bd6745ae4e3ea0d6e6bc2f07b2c65eff163b176c7af3b94e5178->leave($__internal_c2cf47d86a84bd6745ae4e3ea0d6e6bc2f07b2c65eff163b176c7af3b94e5178_prof);

        
        $__internal_397e4cadb5acf8b24cb6f33f3038fefe508483af24c1fdb97d566e69016ac7d5->leave($__internal_397e4cadb5acf8b24cb6f33f3038fefe508483af24c1fdb97d566e69016ac7d5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_39c1f997b7392fa0ff498cdc758b2acbd4e96c5c97965fc16d3876fedf3e2d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39c1f997b7392fa0ff498cdc758b2acbd4e96c5c97965fc16d3876fedf3e2d6d->enter($__internal_39c1f997b7392fa0ff498cdc758b2acbd4e96c5c97965fc16d3876fedf3e2d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c3fc20e79c976336db8b27c3559d025c7309eaaf410f92329af4ceb809a38b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3fc20e79c976336db8b27c3559d025c7309eaaf410f92329af4ceb809a38b5->enter($__internal_4c3fc20e79c976336db8b27c3559d025c7309eaaf410f92329af4ceb809a38b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
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
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Update</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 19
            echo "                <tr>
                    <th scope=\"row\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "</th>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "subject", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "body", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("id" => $this->getAttribute($context["value"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\">Show</a>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_delete", array("id" => $this->getAttribute($context["value"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\">Delete</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </tbody>
        </table>
        <div class=\"container footer-button\" style=\"display: flex\">
            <div class=\"container button\"><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_add");
        echo "\" class=\"btn btn-primary btn-xs\">Add</a></div>
            <div class=\"container  button\">";
        // line 34
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["articles"] ?? $this->getContext($context, "articles")));
        echo "</div>
        </div>

    </div>
";
        
        $__internal_4c3fc20e79c976336db8b27c3559d025c7309eaaf410f92329af4ceb809a38b5->leave($__internal_4c3fc20e79c976336db8b27c3559d025c7309eaaf410f92329af4ceb809a38b5_prof);

        
        $__internal_39c1f997b7392fa0ff498cdc758b2acbd4e96c5c97965fc16d3876fedf3e2d6d->leave($__internal_39c1f997b7392fa0ff498cdc758b2acbd4e96c5c97965fc16d3876fedf3e2d6d_prof);

    }

    public function getTemplateName()
    {
        return "articles/articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 34,  111 => 33,  106 => 30,  96 => 26,  92 => 25,  87 => 23,  83 => 22,  79 => 21,  75 => 20,  72 => 19,  68 => 18,  49 => 3,  40 => 2,  11 => 1,);
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
    {{ include('layout/mainMenu.html.twig', {'current' : 'article'}) }}

    <div class=\"container\">
        <h1>Articles</h1>
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">N°</th>
                <th scope=\"col\">Subject</th>
                <th scope=\"col\">Body</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Update</th>
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
                        <a href=\"{{ path('article_show', {'id' : value.id}) }}\" class=\"btn btn-primary btn-xs\">Show</a>
                        <a href=\"{{ path('article_delete', {'id' : value.id}) }}\" class=\"btn btn-primary btn-xs\">Delete</a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        <div class=\"container footer-button\" style=\"display: flex\">
            <div class=\"container button\"><a href=\"{{ path('article_add') }}\" class=\"btn btn-primary btn-xs\">Add</a></div>
            <div class=\"container  button\">{{ knp_pagination_render(articles) }}</div>
        </div>

    </div>
{% endblock %}
", "articles/articles.html.twig", "/var/www/html/udev_symfony/app/Resources/views/articles/articles.html.twig");
    }
}
