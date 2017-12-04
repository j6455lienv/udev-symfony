<?php

/* :users:add.html.twig */
class __TwigTemplate_a9e2b9c963a5c090b6b82fb0227040fb044c1954812156fe1d48f2b8c0e2230a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":users:add.html.twig", 1);
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
        $__internal_8f9f46fcfae561152dda011267da07e1471e97bdfca40ee430cb88e2d14677db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f9f46fcfae561152dda011267da07e1471e97bdfca40ee430cb88e2d14677db->enter($__internal_8f9f46fcfae561152dda011267da07e1471e97bdfca40ee430cb88e2d14677db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:add.html.twig"));

        $__internal_7af03acc24c92d3b972bd4fc9ac1d1758540a5d28e13944f03df55ed7c5bfc32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7af03acc24c92d3b972bd4fc9ac1d1758540a5d28e13944f03df55ed7c5bfc32->enter($__internal_7af03acc24c92d3b972bd4fc9ac1d1758540a5d28e13944f03df55ed7c5bfc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f9f46fcfae561152dda011267da07e1471e97bdfca40ee430cb88e2d14677db->leave($__internal_8f9f46fcfae561152dda011267da07e1471e97bdfca40ee430cb88e2d14677db_prof);

        
        $__internal_7af03acc24c92d3b972bd4fc9ac1d1758540a5d28e13944f03df55ed7c5bfc32->leave($__internal_7af03acc24c92d3b972bd4fc9ac1d1758540a5d28e13944f03df55ed7c5bfc32_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a5cb09008ea469e87f9b4971daa156ce1b5e3946268f8593ca003405a111ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a5cb09008ea469e87f9b4971daa156ce1b5e3946268f8593ca003405a111ab8->enter($__internal_8a5cb09008ea469e87f9b4971daa156ce1b5e3946268f8593ca003405a111ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5304b8d30619e7aab400681267e3f640de70d2ee050aa24f2687a4dcfbf2ba73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5304b8d30619e7aab400681267e3f640de70d2ee050aa24f2687a4dcfbf2ba73->enter($__internal_5304b8d30619e7aab400681267e3f640de70d2ee050aa24f2687a4dcfbf2ba73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "layout/mainMenu.html.twig", array("current" => "users"));
        echo "
    ";
        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 6
        echo "    <div class=\"container\">

        <h1>User Add (users/add)</h1>

        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Create\"/>
        <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("users");
        echo "\"><input type=\"button\" class=\"btn btn-defaut\"
                                                                             value=\"Back\"/></a>
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
";
        
        $__internal_5304b8d30619e7aab400681267e3f640de70d2ee050aa24f2687a4dcfbf2ba73->leave($__internal_5304b8d30619e7aab400681267e3f640de70d2ee050aa24f2687a4dcfbf2ba73_prof);

        
        $__internal_8a5cb09008ea469e87f9b4971daa156ce1b5e3946268f8593ca003405a111ab8->leave($__internal_8a5cb09008ea469e87f9b4971daa156ce1b5e3946268f8593ca003405a111ab8_prof);

    }

    public function getTemplateName()
    {
        return ":users:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 15,  71 => 13,  66 => 11,  62 => 10,  56 => 6,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    {% form_theme form 'bootstrap_3_layout.html.twig' %}
    <div class=\"container\">

        <h1>User Add (users/add)</h1>

        {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Create\"/>
        <a href=\"{{ path('users') }}\"><input type=\"button\" class=\"btn btn-defaut\"
                                                                             value=\"Back\"/></a>
        {{ form_end(form) }}

    </div>
{% endblock %}
", ":users:add.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/add.html.twig");
    }
}
