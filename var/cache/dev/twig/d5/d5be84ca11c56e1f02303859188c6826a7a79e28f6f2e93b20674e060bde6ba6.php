<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6fcf938c36fc50ec8da83cb47bd027cf5b90fa09f054ec77eeaa487a6d8d959d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fcf938c36fc50ec8da83cb47bd027cf5b90fa09f054ec77eeaa487a6d8d959d->enter($__internal_6fcf938c36fc50ec8da83cb47bd027cf5b90fa09f054ec77eeaa487a6d8d959d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_972e7e7303836af9659c337953634f54c8114c392e8bfb485f6f1a8032d4e53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972e7e7303836af9659c337953634f54c8114c392e8bfb485f6f1a8032d4e53a->enter($__internal_972e7e7303836af9659c337953634f54c8114c392e8bfb485f6f1a8032d4e53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fcf938c36fc50ec8da83cb47bd027cf5b90fa09f054ec77eeaa487a6d8d959d->leave($__internal_6fcf938c36fc50ec8da83cb47bd027cf5b90fa09f054ec77eeaa487a6d8d959d_prof);

        
        $__internal_972e7e7303836af9659c337953634f54c8114c392e8bfb485f6f1a8032d4e53a->leave($__internal_972e7e7303836af9659c337953634f54c8114c392e8bfb485f6f1a8032d4e53a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_83652f14ed9ffbe48a17d3c312f7ce70cd320830f2169a0fdffab1778c5a0fc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83652f14ed9ffbe48a17d3c312f7ce70cd320830f2169a0fdffab1778c5a0fc2->enter($__internal_83652f14ed9ffbe48a17d3c312f7ce70cd320830f2169a0fdffab1778c5a0fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a279fc4e3c090517b54f81f4fd8df08f8f943928501043e5574a2ce58f2af120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a279fc4e3c090517b54f81f4fd8df08f8f943928501043e5574a2ce58f2af120->enter($__internal_a279fc4e3c090517b54f81f4fd8df08f8f943928501043e5574a2ce58f2af120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a279fc4e3c090517b54f81f4fd8df08f8f943928501043e5574a2ce58f2af120->leave($__internal_a279fc4e3c090517b54f81f4fd8df08f8f943928501043e5574a2ce58f2af120_prof);

        
        $__internal_83652f14ed9ffbe48a17d3c312f7ce70cd320830f2169a0fdffab1778c5a0fc2->leave($__internal_83652f14ed9ffbe48a17d3c312f7ce70cd320830f2169a0fdffab1778c5a0fc2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6d60a89b2c059820adac6d52e46aefdc74bb8570806b47a0a9f106ed9fe2e62a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d60a89b2c059820adac6d52e46aefdc74bb8570806b47a0a9f106ed9fe2e62a->enter($__internal_6d60a89b2c059820adac6d52e46aefdc74bb8570806b47a0a9f106ed9fe2e62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_47d6e4b0591a0b3fc6bc87d39fc17091b9ebe909a38497d13488bc2f3919ab86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d6e4b0591a0b3fc6bc87d39fc17091b9ebe909a38497d13488bc2f3919ab86->enter($__internal_47d6e4b0591a0b3fc6bc87d39fc17091b9ebe909a38497d13488bc2f3919ab86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_47d6e4b0591a0b3fc6bc87d39fc17091b9ebe909a38497d13488bc2f3919ab86->leave($__internal_47d6e4b0591a0b3fc6bc87d39fc17091b9ebe909a38497d13488bc2f3919ab86_prof);

        
        $__internal_6d60a89b2c059820adac6d52e46aefdc74bb8570806b47a0a9f106ed9fe2e62a->leave($__internal_6d60a89b2c059820adac6d52e46aefdc74bb8570806b47a0a9f106ed9fe2e62a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b9f568dfdf16ff99f31c8ae20a2201e3940961e293c82949287d76befe23b13c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f568dfdf16ff99f31c8ae20a2201e3940961e293c82949287d76befe23b13c->enter($__internal_b9f568dfdf16ff99f31c8ae20a2201e3940961e293c82949287d76befe23b13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a00c47231fe6ba2c3aba1f31c824e4fa574fc3c4b2cb7b2b4d8b5cf9d517a87a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00c47231fe6ba2c3aba1f31c824e4fa574fc3c4b2cb7b2b4d8b5cf9d517a87a->enter($__internal_a00c47231fe6ba2c3aba1f31c824e4fa574fc3c4b2cb7b2b4d8b5cf9d517a87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a00c47231fe6ba2c3aba1f31c824e4fa574fc3c4b2cb7b2b4d8b5cf9d517a87a->leave($__internal_a00c47231fe6ba2c3aba1f31c824e4fa574fc3c4b2cb7b2b4d8b5cf9d517a87a_prof);

        
        $__internal_b9f568dfdf16ff99f31c8ae20a2201e3940961e293c82949287d76befe23b13c->leave($__internal_b9f568dfdf16ff99f31c8ae20a2201e3940961e293c82949287d76befe23b13c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
