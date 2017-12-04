<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_c6c4b2ee3276152ad955fd200e85c24f8be002bdf1a227363e6211bdc6f9563f extends Twig_Template
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
        $__internal_49be4eaa8c3eea2abf670d86088f090ca1a844fca7636e5b6e29b1531f713c31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49be4eaa8c3eea2abf670d86088f090ca1a844fca7636e5b6e29b1531f713c31->enter($__internal_49be4eaa8c3eea2abf670d86088f090ca1a844fca7636e5b6e29b1531f713c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_3c5abfabfd3cca9aad2d6c8cabe4d4172308785aeabc730c5d8ec7f9b39c257f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5abfabfd3cca9aad2d6c8cabe4d4172308785aeabc730c5d8ec7f9b39c257f->enter($__internal_3c5abfabfd3cca9aad2d6c8cabe4d4172308785aeabc730c5d8ec7f9b39c257f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49be4eaa8c3eea2abf670d86088f090ca1a844fca7636e5b6e29b1531f713c31->leave($__internal_49be4eaa8c3eea2abf670d86088f090ca1a844fca7636e5b6e29b1531f713c31_prof);

        
        $__internal_3c5abfabfd3cca9aad2d6c8cabe4d4172308785aeabc730c5d8ec7f9b39c257f->leave($__internal_3c5abfabfd3cca9aad2d6c8cabe4d4172308785aeabc730c5d8ec7f9b39c257f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3db2c05d900e1535f60cbe53e0fcef9517ffaea5350e87412e073bf8519e8163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3db2c05d900e1535f60cbe53e0fcef9517ffaea5350e87412e073bf8519e8163->enter($__internal_3db2c05d900e1535f60cbe53e0fcef9517ffaea5350e87412e073bf8519e8163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_23e94d0b53146c89863dc1280279ffd840b2fb589d85cb8f586e9b22eaab6122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e94d0b53146c89863dc1280279ffd840b2fb589d85cb8f586e9b22eaab6122->enter($__internal_23e94d0b53146c89863dc1280279ffd840b2fb589d85cb8f586e9b22eaab6122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_23e94d0b53146c89863dc1280279ffd840b2fb589d85cb8f586e9b22eaab6122->leave($__internal_23e94d0b53146c89863dc1280279ffd840b2fb589d85cb8f586e9b22eaab6122_prof);

        
        $__internal_3db2c05d900e1535f60cbe53e0fcef9517ffaea5350e87412e073bf8519e8163->leave($__internal_3db2c05d900e1535f60cbe53e0fcef9517ffaea5350e87412e073bf8519e8163_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f7735a6f550dd8085a1f2b83b17ece6393be3e021f78f55f698e2ecb0689e099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7735a6f550dd8085a1f2b83b17ece6393be3e021f78f55f698e2ecb0689e099->enter($__internal_f7735a6f550dd8085a1f2b83b17ece6393be3e021f78f55f698e2ecb0689e099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f8c90fb074c30b375b1a3448d4237ef021db2f66f5179a0da6a8a5d537137912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8c90fb074c30b375b1a3448d4237ef021db2f66f5179a0da6a8a5d537137912->enter($__internal_f8c90fb074c30b375b1a3448d4237ef021db2f66f5179a0da6a8a5d537137912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f8c90fb074c30b375b1a3448d4237ef021db2f66f5179a0da6a8a5d537137912->leave($__internal_f8c90fb074c30b375b1a3448d4237ef021db2f66f5179a0da6a8a5d537137912_prof);

        
        $__internal_f7735a6f550dd8085a1f2b83b17ece6393be3e021f78f55f698e2ecb0689e099->leave($__internal_f7735a6f550dd8085a1f2b83b17ece6393be3e021f78f55f698e2ecb0689e099_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4525fe80f5eda3ccfad21001c04a833ca2d4680c4091c473795dcd7411e7cfef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4525fe80f5eda3ccfad21001c04a833ca2d4680c4091c473795dcd7411e7cfef->enter($__internal_4525fe80f5eda3ccfad21001c04a833ca2d4680c4091c473795dcd7411e7cfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c3a0f739f3ba563e117a083c3d33e1fd73bac3d83a79acd3360e31ec51298a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a0f739f3ba563e117a083c3d33e1fd73bac3d83a79acd3360e31ec51298a1e->enter($__internal_c3a0f739f3ba563e117a083c3d33e1fd73bac3d83a79acd3360e31ec51298a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c3a0f739f3ba563e117a083c3d33e1fd73bac3d83a79acd3360e31ec51298a1e->leave($__internal_c3a0f739f3ba563e117a083c3d33e1fd73bac3d83a79acd3360e31ec51298a1e_prof);

        
        $__internal_4525fe80f5eda3ccfad21001c04a833ca2d4680c4091c473795dcd7411e7cfef->leave($__internal_4525fe80f5eda3ccfad21001c04a833ca2d4680c4091c473795dcd7411e7cfef_prof);

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
