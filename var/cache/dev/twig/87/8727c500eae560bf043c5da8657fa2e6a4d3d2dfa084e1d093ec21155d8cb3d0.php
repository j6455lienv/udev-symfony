<?php

/* articles/show.html.twig */
class __TwigTemplate_c6f05f6f7aacc1c6a6b50eba34db06000b1b81fd3f8f91e5e551d6eaaa52df3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "articles/show.html.twig", 1);
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
        $__internal_dce125011aa56607f8a1e49ba3c184c9e8d41e4683ef457bbb39db065a5a25e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dce125011aa56607f8a1e49ba3c184c9e8d41e4683ef457bbb39db065a5a25e4->enter($__internal_dce125011aa56607f8a1e49ba3c184c9e8d41e4683ef457bbb39db065a5a25e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dce125011aa56607f8a1e49ba3c184c9e8d41e4683ef457bbb39db065a5a25e4->leave($__internal_dce125011aa56607f8a1e49ba3c184c9e8d41e4683ef457bbb39db065a5a25e4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_132f8ab83bd90e9fd4a4c7f22b5c21676cbd780aec9e701fcdce5f57fd05d8a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_132f8ab83bd90e9fd4a4c7f22b5c21676cbd780aec9e701fcdce5f57fd05d8a6->enter($__internal_132f8ab83bd90e9fd4a4c7f22b5c21676cbd780aec9e701fcdce5f57fd05d8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "id", array()), "html", null, true);
        echo "</span>
                </div>
                <div>
                    <span>Subject : </span><span>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "subject", array()), "html", null, true);
        echo "</span>
                </div>
                <div>
                    <span>Body : </span><span>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "body", array()), "html", null, true);
        echo "</span>
                </div>
                <div>
                    <span>Date : </span><span>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? null), "date", array()), "Y-m-d"), "html", null, true);
        echo "</span>
                </div>
                <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute(($context["article"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-xs\">Edit</a>
                <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles");
        echo "\"><input type=\"button\" class=\"btn btn-default\" value=\"Back\"/></a>
            </div>

            <div class=\"col-md-6 col-sm-12\">
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Article:otherArticleWidget", array("id" => $this->getAttribute(($context["article"] ?? null), "id", array()))));
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_132f8ab83bd90e9fd4a4c7f22b5c21676cbd780aec9e701fcdce5f57fd05d8a6->leave($__internal_132f8ab83bd90e9fd4a4c7f22b5c21676cbd780aec9e701fcdce5f57fd05d8a6_prof);

    }

    public function getTemplateName()
    {
        return "articles/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 27,  78 => 23,  74 => 22,  69 => 20,  63 => 17,  57 => 14,  51 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "articles/show.html.twig", "/var/www/html/udev_symfony/app/Resources/views/articles/show.html.twig");
    }
}
