<?php

/* articles/articles.html.twig */
class __TwigTemplate_3b209ff18526773c98ed44c4ab749b5721b27a866f4e7175ba9d8f212cb90ee4 extends Twig_Template
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
        $__internal_52b828615cae0fdeac6405fd5c1574b6483cf791c8ae8fb6bcd67d8516ed7f69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52b828615cae0fdeac6405fd5c1574b6483cf791c8ae8fb6bcd67d8516ed7f69->enter($__internal_52b828615cae0fdeac6405fd5c1574b6483cf791c8ae8fb6bcd67d8516ed7f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52b828615cae0fdeac6405fd5c1574b6483cf791c8ae8fb6bcd67d8516ed7f69->leave($__internal_52b828615cae0fdeac6405fd5c1574b6483cf791c8ae8fb6bcd67d8516ed7f69_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b3104d41c354049e241b4a4359b259ecacd29940ed83902da690340dc33395f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b3104d41c354049e241b4a4359b259ecacd29940ed83902da690340dc33395f->enter($__internal_5b3104d41c354049e241b4a4359b259ecacd29940ed83902da690340dc33395f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
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
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["articles"] ?? null));
        echo "</div>
        </div>

    </div>
";
        
        $__internal_5b3104d41c354049e241b4a4359b259ecacd29940ed83902da690340dc33395f->leave($__internal_5b3104d41c354049e241b4a4359b259ecacd29940ed83902da690340dc33395f_prof);

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
        return array (  113 => 37,  108 => 35,  103 => 32,  93 => 28,  89 => 27,  84 => 25,  80 => 24,  76 => 23,  72 => 22,  69 => 21,  65 => 20,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "articles/articles.html.twig", "/var/www/html/udev_symfony/app/Resources/views/articles/articles.html.twig");
    }
}
