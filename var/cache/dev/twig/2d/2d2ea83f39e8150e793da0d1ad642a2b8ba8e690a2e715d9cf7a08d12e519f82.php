<?php

/* :articles:edit.html.twig */
class __TwigTemplate_7c111c8964b7f36dfc1b98e615b545dfdc626c14632092701b27916047c6b0fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":articles:edit.html.twig", 1);
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
        $__internal_d46440e11cdeb4513f9454943c35404f21bbcdb7857d677b6c0ab3b4e754980c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d46440e11cdeb4513f9454943c35404f21bbcdb7857d677b6c0ab3b4e754980c->enter($__internal_d46440e11cdeb4513f9454943c35404f21bbcdb7857d677b6c0ab3b4e754980c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":articles:edit.html.twig"));

        $__internal_afe2ba47c33367d143d55f17768b0e7ca3b79ebdbc71a98fb6ccdfcc1a686873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe2ba47c33367d143d55f17768b0e7ca3b79ebdbc71a98fb6ccdfcc1a686873->enter($__internal_afe2ba47c33367d143d55f17768b0e7ca3b79ebdbc71a98fb6ccdfcc1a686873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":articles:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d46440e11cdeb4513f9454943c35404f21bbcdb7857d677b6c0ab3b4e754980c->leave($__internal_d46440e11cdeb4513f9454943c35404f21bbcdb7857d677b6c0ab3b4e754980c_prof);

        
        $__internal_afe2ba47c33367d143d55f17768b0e7ca3b79ebdbc71a98fb6ccdfcc1a686873->leave($__internal_afe2ba47c33367d143d55f17768b0e7ca3b79ebdbc71a98fb6ccdfcc1a686873_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecfbb4d1382fe68df3d5e27f7a410632ed1462467dcc1f6d47dfeb52f9d23b96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecfbb4d1382fe68df3d5e27f7a410632ed1462467dcc1f6d47dfeb52f9d23b96->enter($__internal_ecfbb4d1382fe68df3d5e27f7a410632ed1462467dcc1f6d47dfeb52f9d23b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d74364aaacd46c1c2195ca2aed6a106866b3848c4a47a1becdae1f3ad43ec6ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74364aaacd46c1c2195ca2aed6a106866b3848c4a47a1becdae1f3ad43ec6ff->enter($__internal_d74364aaacd46c1c2195ca2aed6a106866b3848c4a47a1becdae1f3ad43ec6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d74364aaacd46c1c2195ca2aed6a106866b3848c4a47a1becdae1f3ad43ec6ff->leave($__internal_d74364aaacd46c1c2195ca2aed6a106866b3848c4a47a1becdae1f3ad43ec6ff_prof);

        
        $__internal_ecfbb4d1382fe68df3d5e27f7a410632ed1462467dcc1f6d47dfeb52f9d23b96->leave($__internal_ecfbb4d1382fe68df3d5e27f7a410632ed1462467dcc1f6d47dfeb52f9d23b96_prof);

    }

    public function getTemplateName()
    {
        return ":articles:edit.html.twig";
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
{% endblock %}", ":articles:edit.html.twig", "/var/www/html/udev_symfony/app/Resources/views/articles/edit.html.twig");
    }
}
