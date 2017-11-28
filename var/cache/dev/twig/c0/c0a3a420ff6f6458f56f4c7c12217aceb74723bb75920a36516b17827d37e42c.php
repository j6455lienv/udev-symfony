<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b61e97c4d8b8bcef85fdb98cc81c3d9532a302489211663fa5499491ec08ca47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b5e15cfbab17c54147bec2312e05bb562f1bd3363b5bd04553ff0062090da11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b5e15cfbab17c54147bec2312e05bb562f1bd3363b5bd04553ff0062090da11->enter($__internal_7b5e15cfbab17c54147bec2312e05bb562f1bd3363b5bd04553ff0062090da11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_921a48f9842289bdea0d4de092f7bd8359bf9fa9739ab8ec54009a931b1cb561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921a48f9842289bdea0d4de092f7bd8359bf9fa9739ab8ec54009a931b1cb561->enter($__internal_921a48f9842289bdea0d4de092f7bd8359bf9fa9739ab8ec54009a931b1cb561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b5e15cfbab17c54147bec2312e05bb562f1bd3363b5bd04553ff0062090da11->leave($__internal_7b5e15cfbab17c54147bec2312e05bb562f1bd3363b5bd04553ff0062090da11_prof);

        
        $__internal_921a48f9842289bdea0d4de092f7bd8359bf9fa9739ab8ec54009a931b1cb561->leave($__internal_921a48f9842289bdea0d4de092f7bd8359bf9fa9739ab8ec54009a931b1cb561_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4cfd02457c26bcdcb8871d2656e7330929bc1110765c783c55566b394a383ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cfd02457c26bcdcb8871d2656e7330929bc1110765c783c55566b394a383ac6->enter($__internal_4cfd02457c26bcdcb8871d2656e7330929bc1110765c783c55566b394a383ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_003d52ea293679dfee30eae798a5083e90c5921db3d43aac9ca2d0eb3130b007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003d52ea293679dfee30eae798a5083e90c5921db3d43aac9ca2d0eb3130b007->enter($__internal_003d52ea293679dfee30eae798a5083e90c5921db3d43aac9ca2d0eb3130b007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_003d52ea293679dfee30eae798a5083e90c5921db3d43aac9ca2d0eb3130b007->leave($__internal_003d52ea293679dfee30eae798a5083e90c5921db3d43aac9ca2d0eb3130b007_prof);

        
        $__internal_4cfd02457c26bcdcb8871d2656e7330929bc1110765c783c55566b394a383ac6->leave($__internal_4cfd02457c26bcdcb8871d2656e7330929bc1110765c783c55566b394a383ac6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_13583eb34d908d2bea92b0a97a181761652268178a48b6f8dbaa54a43f5f8af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13583eb34d908d2bea92b0a97a181761652268178a48b6f8dbaa54a43f5f8af3->enter($__internal_13583eb34d908d2bea92b0a97a181761652268178a48b6f8dbaa54a43f5f8af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3be6593e392cc53c87e2d914b15dcbfbecb505a96ca3462f06261fad07057715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be6593e392cc53c87e2d914b15dcbfbecb505a96ca3462f06261fad07057715->enter($__internal_3be6593e392cc53c87e2d914b15dcbfbecb505a96ca3462f06261fad07057715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3be6593e392cc53c87e2d914b15dcbfbecb505a96ca3462f06261fad07057715->leave($__internal_3be6593e392cc53c87e2d914b15dcbfbecb505a96ca3462f06261fad07057715_prof);

        
        $__internal_13583eb34d908d2bea92b0a97a181761652268178a48b6f8dbaa54a43f5f8af3->leave($__internal_13583eb34d908d2bea92b0a97a181761652268178a48b6f8dbaa54a43f5f8af3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c4561d0d8b7187705aaeafd1e6a2d8e03d92d420d736880579fe8a8933cf65be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4561d0d8b7187705aaeafd1e6a2d8e03d92d420d736880579fe8a8933cf65be->enter($__internal_c4561d0d8b7187705aaeafd1e6a2d8e03d92d420d736880579fe8a8933cf65be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ec8e1bcd89fac8e2fbe3ed33bd60db917f039ee1eaf8790b3b78135012cfff0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec8e1bcd89fac8e2fbe3ed33bd60db917f039ee1eaf8790b3b78135012cfff0f->enter($__internal_ec8e1bcd89fac8e2fbe3ed33bd60db917f039ee1eaf8790b3b78135012cfff0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ec8e1bcd89fac8e2fbe3ed33bd60db917f039ee1eaf8790b3b78135012cfff0f->leave($__internal_ec8e1bcd89fac8e2fbe3ed33bd60db917f039ee1eaf8790b3b78135012cfff0f_prof);

        
        $__internal_c4561d0d8b7187705aaeafd1e6a2d8e03d92d420d736880579fe8a8933cf65be->leave($__internal_c4561d0d8b7187705aaeafd1e6a2d8e03d92d420d736880579fe8a8933cf65be_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
