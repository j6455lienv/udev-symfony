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
        $__internal_d85a0157c446d47f963ec10200a4d8cfd513482ba1f21a5fd9726331aa858157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d85a0157c446d47f963ec10200a4d8cfd513482ba1f21a5fd9726331aa858157->enter($__internal_d85a0157c446d47f963ec10200a4d8cfd513482ba1f21a5fd9726331aa858157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/edit.html.twig"));

        $__internal_659ec6d44ecea48631aa8e8cb1477ae2e184dcb00dec4936855448329240baae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659ec6d44ecea48631aa8e8cb1477ae2e184dcb00dec4936855448329240baae->enter($__internal_659ec6d44ecea48631aa8e8cb1477ae2e184dcb00dec4936855448329240baae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d85a0157c446d47f963ec10200a4d8cfd513482ba1f21a5fd9726331aa858157->leave($__internal_d85a0157c446d47f963ec10200a4d8cfd513482ba1f21a5fd9726331aa858157_prof);

        
        $__internal_659ec6d44ecea48631aa8e8cb1477ae2e184dcb00dec4936855448329240baae->leave($__internal_659ec6d44ecea48631aa8e8cb1477ae2e184dcb00dec4936855448329240baae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_08947596308a92a0234d1b59ca027e17d0d10bc2eaccbd32313169573b8dd665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08947596308a92a0234d1b59ca027e17d0d10bc2eaccbd32313169573b8dd665->enter($__internal_08947596308a92a0234d1b59ca027e17d0d10bc2eaccbd32313169573b8dd665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2415a4c1e0d24119908816d6004ec989edf857a25948e6d26e804715308d329e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2415a4c1e0d24119908816d6004ec989edf857a25948e6d26e804715308d329e->enter($__internal_2415a4c1e0d24119908816d6004ec989edf857a25948e6d26e804715308d329e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2415a4c1e0d24119908816d6004ec989edf857a25948e6d26e804715308d329e->leave($__internal_2415a4c1e0d24119908816d6004ec989edf857a25948e6d26e804715308d329e_prof);

        
        $__internal_08947596308a92a0234d1b59ca027e17d0d10bc2eaccbd32313169573b8dd665->leave($__internal_08947596308a92a0234d1b59ca027e17d0d10bc2eaccbd32313169573b8dd665_prof);

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
