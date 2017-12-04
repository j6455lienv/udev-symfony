<?php

/* :users:edit.html.twig */
class __TwigTemplate_1a75c3de4724296755feb35b913ebbc72ebe566f39ac50bb3b47d9e6a92beb41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":users:edit.html.twig", 1);
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
        $__internal_97cae53956e9e5c79e54500ba2da58e991426d7717cf42fcd74b19107c6cad62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97cae53956e9e5c79e54500ba2da58e991426d7717cf42fcd74b19107c6cad62->enter($__internal_97cae53956e9e5c79e54500ba2da58e991426d7717cf42fcd74b19107c6cad62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:edit.html.twig"));

        $__internal_7362a715546618b7182f0d38e81dc8940cf7b519cfec07884528ffee55fc9f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7362a715546618b7182f0d38e81dc8940cf7b519cfec07884528ffee55fc9f4f->enter($__internal_7362a715546618b7182f0d38e81dc8940cf7b519cfec07884528ffee55fc9f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97cae53956e9e5c79e54500ba2da58e991426d7717cf42fcd74b19107c6cad62->leave($__internal_97cae53956e9e5c79e54500ba2da58e991426d7717cf42fcd74b19107c6cad62_prof);

        
        $__internal_7362a715546618b7182f0d38e81dc8940cf7b519cfec07884528ffee55fc9f4f->leave($__internal_7362a715546618b7182f0d38e81dc8940cf7b519cfec07884528ffee55fc9f4f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_78c39b5535ed4991b2fffe537eae38896840c14b862bd5d8bab4b9e31d3caed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c39b5535ed4991b2fffe537eae38896840c14b862bd5d8bab4b9e31d3caed3->enter($__internal_78c39b5535ed4991b2fffe537eae38896840c14b862bd5d8bab4b9e31d3caed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ddb838ee6d2d298086fe44e562a252d71174c154a6e15c4080385c662bffc755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb838ee6d2d298086fe44e562a252d71174c154a6e15c4080385c662bffc755->enter($__internal_ddb838ee6d2d298086fe44e562a252d71174c154a6e15c4080385c662bffc755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 5
        echo "    <div class=\"container\">

        <h1>Edit (users/edit)</h1>

        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Update\"/>
        <a href=\"http://localhost/udev_symfony/web/app_dev.php/users\"><input type=\"button\" class=\"btn btn-defaut\" value=\"Back\"/></a>
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
";
        
        $__internal_ddb838ee6d2d298086fe44e562a252d71174c154a6e15c4080385c662bffc755->leave($__internal_ddb838ee6d2d298086fe44e562a252d71174c154a6e15c4080385c662bffc755_prof);

        
        $__internal_78c39b5535ed4991b2fffe537eae38896840c14b862bd5d8bab4b9e31d3caed3->leave($__internal_78c39b5535ed4991b2fffe537eae38896840c14b862bd5d8bab4b9e31d3caed3_prof);

    }

    public function getTemplateName()
    {
        return ":users:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 13,  62 => 10,  58 => 9,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

        <h1>Edit (users/edit)</h1>

        {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Update\"/>
        <a href=\"http://localhost/udev_symfony/web/app_dev.php/users\"><input type=\"button\" class=\"btn btn-defaut\" value=\"Back\"/></a>
        {{ form_end(form) }}

    </div>
{% endblock %}", ":users:edit.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/edit.html.twig");
    }
}
