<?php

/* users/add.html.twig */
class __TwigTemplate_a9e2b9c963a5c090b6b82fb0227040fb044c1954812156fe1d48f2b8c0e2230a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "users/add.html.twig", 1);
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
        $__internal_95332ec41aba14aea9da8cc1523e4400fa7804df5e98f63146f0b9926a2532c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95332ec41aba14aea9da8cc1523e4400fa7804df5e98f63146f0b9926a2532c2->enter($__internal_95332ec41aba14aea9da8cc1523e4400fa7804df5e98f63146f0b9926a2532c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/add.html.twig"));

        $__internal_3d74427ac53fa12905a2201c0dbe9945bb9f443a5246ca896cb94a0a93ae58d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d74427ac53fa12905a2201c0dbe9945bb9f443a5246ca896cb94a0a93ae58d3->enter($__internal_3d74427ac53fa12905a2201c0dbe9945bb9f443a5246ca896cb94a0a93ae58d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95332ec41aba14aea9da8cc1523e4400fa7804df5e98f63146f0b9926a2532c2->leave($__internal_95332ec41aba14aea9da8cc1523e4400fa7804df5e98f63146f0b9926a2532c2_prof);

        
        $__internal_3d74427ac53fa12905a2201c0dbe9945bb9f443a5246ca896cb94a0a93ae58d3->leave($__internal_3d74427ac53fa12905a2201c0dbe9945bb9f443a5246ca896cb94a0a93ae58d3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9c365457513de116d7904bbe2b6be088af3ebffccbb4565bd96065fb0aa216b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c365457513de116d7904bbe2b6be088af3ebffccbb4565bd96065fb0aa216b->enter($__internal_f9c365457513de116d7904bbe2b6be088af3ebffccbb4565bd96065fb0aa216b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_866d77f6528d8ab2147c77a7178060934b6435fb9df06cd60e844cc3be042abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866d77f6528d8ab2147c77a7178060934b6435fb9df06cd60e844cc3be042abf->enter($__internal_866d77f6528d8ab2147c77a7178060934b6435fb9df06cd60e844cc3be042abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_866d77f6528d8ab2147c77a7178060934b6435fb9df06cd60e844cc3be042abf->leave($__internal_866d77f6528d8ab2147c77a7178060934b6435fb9df06cd60e844cc3be042abf_prof);

        
        $__internal_f9c365457513de116d7904bbe2b6be088af3ebffccbb4565bd96065fb0aa216b->leave($__internal_f9c365457513de116d7904bbe2b6be088af3ebffccbb4565bd96065fb0aa216b_prof);

    }

    public function getTemplateName()
    {
        return "users/add.html.twig";
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
", "users/add.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/add.html.twig");
    }
}
