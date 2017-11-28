<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c6c4b2ee3276152ad955fd200e85c24f8be002bdf1a227363e6211bdc6f9563f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_f76b93be79a4f73689d71c43117e57c7de3e77bbbca9e92f8fb49e283d415aa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f76b93be79a4f73689d71c43117e57c7de3e77bbbca9e92f8fb49e283d415aa6->enter($__internal_f76b93be79a4f73689d71c43117e57c7de3e77bbbca9e92f8fb49e283d415aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c261dd5719410461537a87d3dcf64df4c8aae4f4e614eefccf45a562d2dca069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c261dd5719410461537a87d3dcf64df4c8aae4f4e614eefccf45a562d2dca069->enter($__internal_c261dd5719410461537a87d3dcf64df4c8aae4f4e614eefccf45a562d2dca069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f76b93be79a4f73689d71c43117e57c7de3e77bbbca9e92f8fb49e283d415aa6->leave($__internal_f76b93be79a4f73689d71c43117e57c7de3e77bbbca9e92f8fb49e283d415aa6_prof);

        
        $__internal_c261dd5719410461537a87d3dcf64df4c8aae4f4e614eefccf45a562d2dca069->leave($__internal_c261dd5719410461537a87d3dcf64df4c8aae4f4e614eefccf45a562d2dca069_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3010000715483dedaf55bce5acc9c4fe667f8d8495ca38c9688bb69913bf925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3010000715483dedaf55bce5acc9c4fe667f8d8495ca38c9688bb69913bf925->enter($__internal_a3010000715483dedaf55bce5acc9c4fe667f8d8495ca38c9688bb69913bf925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dc6e5b1989c3d0eab7735d612dcd9094911c05c7a22b06cb6c964b5ac246c5e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc6e5b1989c3d0eab7735d612dcd9094911c05c7a22b06cb6c964b5ac246c5e2->enter($__internal_dc6e5b1989c3d0eab7735d612dcd9094911c05c7a22b06cb6c964b5ac246c5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dc6e5b1989c3d0eab7735d612dcd9094911c05c7a22b06cb6c964b5ac246c5e2->leave($__internal_dc6e5b1989c3d0eab7735d612dcd9094911c05c7a22b06cb6c964b5ac246c5e2_prof);

        
        $__internal_a3010000715483dedaf55bce5acc9c4fe667f8d8495ca38c9688bb69913bf925->leave($__internal_a3010000715483dedaf55bce5acc9c4fe667f8d8495ca38c9688bb69913bf925_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fc53e6a4fdd5ea2cd117f5e5c1515ab0a4412586496054bdab85cc8d8eabc391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc53e6a4fdd5ea2cd117f5e5c1515ab0a4412586496054bdab85cc8d8eabc391->enter($__internal_fc53e6a4fdd5ea2cd117f5e5c1515ab0a4412586496054bdab85cc8d8eabc391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2d8393b19053ac8cd2cf0b4fc12dd38e107264c65896af964598ac2e32f77ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8393b19053ac8cd2cf0b4fc12dd38e107264c65896af964598ac2e32f77ebf->enter($__internal_2d8393b19053ac8cd2cf0b4fc12dd38e107264c65896af964598ac2e32f77ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2d8393b19053ac8cd2cf0b4fc12dd38e107264c65896af964598ac2e32f77ebf->leave($__internal_2d8393b19053ac8cd2cf0b4fc12dd38e107264c65896af964598ac2e32f77ebf_prof);

        
        $__internal_fc53e6a4fdd5ea2cd117f5e5c1515ab0a4412586496054bdab85cc8d8eabc391->leave($__internal_fc53e6a4fdd5ea2cd117f5e5c1515ab0a4412586496054bdab85cc8d8eabc391_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_af1d3aea7bbb844b4437527174f29e907739c7ddfb0f5820702fc273b10e67b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af1d3aea7bbb844b4437527174f29e907739c7ddfb0f5820702fc273b10e67b3->enter($__internal_af1d3aea7bbb844b4437527174f29e907739c7ddfb0f5820702fc273b10e67b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cd83c5a58aaa106aa5386a09c6ca475be135d1e1a9e715d466148e1f936ae4c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd83c5a58aaa106aa5386a09c6ca475be135d1e1a9e715d466148e1f936ae4c6->enter($__internal_cd83c5a58aaa106aa5386a09c6ca475be135d1e1a9e715d466148e1f936ae4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_cd83c5a58aaa106aa5386a09c6ca475be135d1e1a9e715d466148e1f936ae4c6->leave($__internal_cd83c5a58aaa106aa5386a09c6ca475be135d1e1a9e715d466148e1f936ae4c6_prof);

        
        $__internal_af1d3aea7bbb844b4437527174f29e907739c7ddfb0f5820702fc273b10e67b3->leave($__internal_af1d3aea7bbb844b4437527174f29e907739c7ddfb0f5820702fc273b10e67b3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
