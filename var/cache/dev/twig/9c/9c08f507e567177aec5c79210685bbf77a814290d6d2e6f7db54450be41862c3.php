<?php

/* users/edit.html.twig */
class __TwigTemplate_4569e29102bd550996c4b9ebec62496e76bc6df8ebee1cb5c2b7e39d7cb9b260 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "users/edit.html.twig", 1);
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
        $__internal_35a8c8e78836363a900df6eef1123001256363487a05580a9305070c7a50d022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35a8c8e78836363a900df6eef1123001256363487a05580a9305070c7a50d022->enter($__internal_35a8c8e78836363a900df6eef1123001256363487a05580a9305070c7a50d022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/edit.html.twig"));

        $__internal_202c4d4cdaac3e5894470f291502d1d50436212a0342870968c7df45230f4721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202c4d4cdaac3e5894470f291502d1d50436212a0342870968c7df45230f4721->enter($__internal_202c4d4cdaac3e5894470f291502d1d50436212a0342870968c7df45230f4721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35a8c8e78836363a900df6eef1123001256363487a05580a9305070c7a50d022->leave($__internal_35a8c8e78836363a900df6eef1123001256363487a05580a9305070c7a50d022_prof);

        
        $__internal_202c4d4cdaac3e5894470f291502d1d50436212a0342870968c7df45230f4721->leave($__internal_202c4d4cdaac3e5894470f291502d1d50436212a0342870968c7df45230f4721_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f48f4465432842f6eee4027a613d61ce054adbd91b72cbf671e3ec582ecb08fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f48f4465432842f6eee4027a613d61ce054adbd91b72cbf671e3ec582ecb08fc->enter($__internal_f48f4465432842f6eee4027a613d61ce054adbd91b72cbf671e3ec582ecb08fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2590effc4108fef2fa03e2728e7bb5d551b5f0e31f08aa4e3589f671359e093b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2590effc4108fef2fa03e2728e7bb5d551b5f0e31f08aa4e3589f671359e093b->enter($__internal_2590effc4108fef2fa03e2728e7bb5d551b5f0e31f08aa4e3589f671359e093b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <a href=\"http://localhost/udev_symfony/web/app_dev.php/users\"><input type=\"button\" class=\"btn btn-defaut\"
                                                                             value=\"Back\"/></a>

        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
";
        
        $__internal_2590effc4108fef2fa03e2728e7bb5d551b5f0e31f08aa4e3589f671359e093b->leave($__internal_2590effc4108fef2fa03e2728e7bb5d551b5f0e31f08aa4e3589f671359e093b_prof);

        
        $__internal_f48f4465432842f6eee4027a613d61ce054adbd91b72cbf671e3ec582ecb08fc->leave($__internal_f48f4465432842f6eee4027a613d61ce054adbd91b72cbf671e3ec582ecb08fc_prof);

    }

    public function getTemplateName()
    {
        return "users/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  62 => 10,  58 => 9,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        <a href=\"http://localhost/udev_symfony/web/app_dev.php/users\"><input type=\"button\" class=\"btn btn-defaut\"
                                                                             value=\"Back\"/></a>

        {{ form_end(form) }}

    </div>
{% endblock %}", "users/edit.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/edit.html.twig");
    }
}
