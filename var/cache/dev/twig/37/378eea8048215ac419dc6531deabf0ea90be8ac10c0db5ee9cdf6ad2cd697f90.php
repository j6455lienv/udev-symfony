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
        $__internal_fc321684b74a5a5d6caf62bb38df4210bc0e03f26019174910c0743e7b85f093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc321684b74a5a5d6caf62bb38df4210bc0e03f26019174910c0743e7b85f093->enter($__internal_fc321684b74a5a5d6caf62bb38df4210bc0e03f26019174910c0743e7b85f093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:edit.html.twig"));

        $__internal_95187c498dcfb87e4e2adca66a5f8f08c5eb366532637b5ab56bdc0ef8a6d32c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95187c498dcfb87e4e2adca66a5f8f08c5eb366532637b5ab56bdc0ef8a6d32c->enter($__internal_95187c498dcfb87e4e2adca66a5f8f08c5eb366532637b5ab56bdc0ef8a6d32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc321684b74a5a5d6caf62bb38df4210bc0e03f26019174910c0743e7b85f093->leave($__internal_fc321684b74a5a5d6caf62bb38df4210bc0e03f26019174910c0743e7b85f093_prof);

        
        $__internal_95187c498dcfb87e4e2adca66a5f8f08c5eb366532637b5ab56bdc0ef8a6d32c->leave($__internal_95187c498dcfb87e4e2adca66a5f8f08c5eb366532637b5ab56bdc0ef8a6d32c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7625a27e892b961c71b59cad1723f158d4336410a392d393c1a1625843eddff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7625a27e892b961c71b59cad1723f158d4336410a392d393c1a1625843eddff->enter($__internal_f7625a27e892b961c71b59cad1723f158d4336410a392d393c1a1625843eddff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f47515fe07254b8688f83acc1e83c4e4040467057410a52c09feba025fc3d611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47515fe07254b8688f83acc1e83c4e4040467057410a52c09feba025fc3d611->enter($__internal_f47515fe07254b8688f83acc1e83c4e4040467057410a52c09feba025fc3d611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f47515fe07254b8688f83acc1e83c4e4040467057410a52c09feba025fc3d611->leave($__internal_f47515fe07254b8688f83acc1e83c4e4040467057410a52c09feba025fc3d611_prof);

        
        $__internal_f7625a27e892b961c71b59cad1723f158d4336410a392d393c1a1625843eddff->leave($__internal_f7625a27e892b961c71b59cad1723f158d4336410a392d393c1a1625843eddff_prof);

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
