<?php

/* articles/edit.html.twig */
class __TwigTemplate_7c111c8964b7f36dfc1b98e615b545dfdc626c14632092701b27916047c6b0fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "articles/edit.html.twig", 1);
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
        $__internal_1467b1f51adde249c33383e47197453d75c54990150c9091d546611dd25c1fee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1467b1f51adde249c33383e47197453d75c54990150c9091d546611dd25c1fee->enter($__internal_1467b1f51adde249c33383e47197453d75c54990150c9091d546611dd25c1fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/edit.html.twig"));

        $__internal_c44944f167886f667557151d786544c679db75840a044a67a5d427e8ab88d29f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c44944f167886f667557151d786544c679db75840a044a67a5d427e8ab88d29f->enter($__internal_c44944f167886f667557151d786544c679db75840a044a67a5d427e8ab88d29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1467b1f51adde249c33383e47197453d75c54990150c9091d546611dd25c1fee->leave($__internal_1467b1f51adde249c33383e47197453d75c54990150c9091d546611dd25c1fee_prof);

        
        $__internal_c44944f167886f667557151d786544c679db75840a044a67a5d427e8ab88d29f->leave($__internal_c44944f167886f667557151d786544c679db75840a044a67a5d427e8ab88d29f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6244f5d605b4916b84bf3b744c1e26477568958b9bc6b5aba8d5cdcabd083985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6244f5d605b4916b84bf3b744c1e26477568958b9bc6b5aba8d5cdcabd083985->enter($__internal_6244f5d605b4916b84bf3b744c1e26477568958b9bc6b5aba8d5cdcabd083985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf9af01b64781493a7790c7d87265025fd5cd01d1f9ed1ac843b036b3480a1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9af01b64781493a7790c7d87265025fd5cd01d1f9ed1ac843b036b3480a1a1->enter($__internal_bf9af01b64781493a7790c7d87265025fd5cd01d1f9ed1ac843b036b3480a1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 5
        echo "    <div class=\"container\">

        <h1>Edit (articles/edit)</h1>

        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Update\"/>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles");
        echo "\"><input type=\"button\" class=\"btn btn-defaut\" value=\"Back\"/></a>
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
";
        
        $__internal_bf9af01b64781493a7790c7d87265025fd5cd01d1f9ed1ac843b036b3480a1a1->leave($__internal_bf9af01b64781493a7790c7d87265025fd5cd01d1f9ed1ac843b036b3480a1a1_prof);

        
        $__internal_6244f5d605b4916b84bf3b744c1e26477568958b9bc6b5aba8d5cdcabd083985->leave($__internal_6244f5d605b4916b84bf3b744c1e26477568958b9bc6b5aba8d5cdcabd083985_prof);

    }

    public function getTemplateName()
    {
        return "articles/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  67 => 12,  62 => 10,  58 => 9,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    {% form_theme form 'bootstrap_3_layout.html.twig' %}
    <div class=\"container\">

        <h1>Edit (articles/edit)</h1>

        {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Update\"/>
        <a href=\"{{ path('articles') }}\"><input type=\"button\" class=\"btn btn-defaut\" value=\"Back\"/></a>
        {{ form_end(form) }}

    </div>
{% endblock %}", "articles/edit.html.twig", "/var/www/html/udev_symfony/app/Resources/views/articles/edit.html.twig");
    }
}
