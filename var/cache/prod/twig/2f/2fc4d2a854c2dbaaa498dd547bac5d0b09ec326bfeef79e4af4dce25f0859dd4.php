<?php

/* articles/add.html.twig */
class __TwigTemplate_70c38d8104a5aaddbf20cbb09fb8c07de6358a7c81fad4a1843a9cb22ca6031a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "articles/add.html.twig", 1);
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
        $__internal_0ea6de8970fc0ce8f728ae0efa2326cdfd3069d698963525ad56b841a2c2a783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea6de8970fc0ce8f728ae0efa2326cdfd3069d698963525ad56b841a2c2a783->enter($__internal_0ea6de8970fc0ce8f728ae0efa2326cdfd3069d698963525ad56b841a2c2a783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/add.html.twig"));

        $__internal_ea59dd460b5ae0baf3e74a2232937e297ed08a6b8375e423b5b5a727f3d9ef09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea59dd460b5ae0baf3e74a2232937e297ed08a6b8375e423b5b5a727f3d9ef09->enter($__internal_ea59dd460b5ae0baf3e74a2232937e297ed08a6b8375e423b5b5a727f3d9ef09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ea6de8970fc0ce8f728ae0efa2326cdfd3069d698963525ad56b841a2c2a783->leave($__internal_0ea6de8970fc0ce8f728ae0efa2326cdfd3069d698963525ad56b841a2c2a783_prof);

        
        $__internal_ea59dd460b5ae0baf3e74a2232937e297ed08a6b8375e423b5b5a727f3d9ef09->leave($__internal_ea59dd460b5ae0baf3e74a2232937e297ed08a6b8375e423b5b5a727f3d9ef09_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d8a07df695b3812fc4d8d233808e401f87cce8f26ab93892b5b0c1a9f46f505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d8a07df695b3812fc4d8d233808e401f87cce8f26ab93892b5b0c1a9f46f505->enter($__internal_6d8a07df695b3812fc4d8d233808e401f87cce8f26ab93892b5b0c1a9f46f505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dadad2072188348522581a89fe2c43927730729ea7d409faa729e0bd1f690971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadad2072188348522581a89fe2c43927730729ea7d409faa729e0bd1f690971->enter($__internal_dadad2072188348522581a89fe2c43927730729ea7d409faa729e0bd1f690971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "layout/mainMenu.html.twig", array("current" => "articles"));
        echo "
    ";
        // line 6
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 7
        echo "    <div class=\"container\">

        <h1>Article Add (articles/add)</h1>

        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Create\"/>
        <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles");
        echo "\"><input type=\"button\" class=\"btn btn-defaut\"
                                                value=\"Back\"/></a>
        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    </div>

";
        
        $__internal_dadad2072188348522581a89fe2c43927730729ea7d409faa729e0bd1f690971->leave($__internal_dadad2072188348522581a89fe2c43927730729ea7d409faa729e0bd1f690971_prof);

        
        $__internal_6d8a07df695b3812fc4d8d233808e401f87cce8f26ab93892b5b0c1a9f46f505->leave($__internal_6d8a07df695b3812fc4d8d233808e401f87cce8f26ab93892b5b0c1a9f46f505_prof);

    }

    public function getTemplateName()
    {
        return "articles/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  73 => 14,  68 => 12,  64 => 11,  58 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    {% form_theme form 'bootstrap_3_layout.html.twig' %}
    <div class=\"container\">

        <h1>Article Add (articles/add)</h1>

        {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Create\"/>
        <a href=\"{{ path('articles') }}\"><input type=\"button\" class=\"btn btn-defaut\"
                                                value=\"Back\"/></a>
        {{ form_end(form) }}

    </div>

{% endblock %}
", "articles/add.html.twig", "/var/www/html/udev_symfony/app/Resources/views/articles/add.html.twig");
    }
}
