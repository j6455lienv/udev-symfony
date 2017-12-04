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
        $__internal_bc5e8ed1aaf43de30692db0864401b342e002001fcafff559863d3a5c084cc0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc5e8ed1aaf43de30692db0864401b342e002001fcafff559863d3a5c084cc0c->enter($__internal_bc5e8ed1aaf43de30692db0864401b342e002001fcafff559863d3a5c084cc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_3f792c16f9398ae9f7d6243242486eddba630bdcf4c3017a797aceb620670406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f792c16f9398ae9f7d6243242486eddba630bdcf4c3017a797aceb620670406->enter($__internal_3f792c16f9398ae9f7d6243242486eddba630bdcf4c3017a797aceb620670406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc5e8ed1aaf43de30692db0864401b342e002001fcafff559863d3a5c084cc0c->leave($__internal_bc5e8ed1aaf43de30692db0864401b342e002001fcafff559863d3a5c084cc0c_prof);

        
        $__internal_3f792c16f9398ae9f7d6243242486eddba630bdcf4c3017a797aceb620670406->leave($__internal_3f792c16f9398ae9f7d6243242486eddba630bdcf4c3017a797aceb620670406_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c171d35caabbe9595c583829c1aec914f59ac6e84b3a6ca1c8e96ebff38e5fc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c171d35caabbe9595c583829c1aec914f59ac6e84b3a6ca1c8e96ebff38e5fc3->enter($__internal_c171d35caabbe9595c583829c1aec914f59ac6e84b3a6ca1c8e96ebff38e5fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6e571cb0d7bcc8e5b1d91a78dea7a534a30a8f882e4e178e3e126583271513a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e571cb0d7bcc8e5b1d91a78dea7a534a30a8f882e4e178e3e126583271513a1->enter($__internal_6e571cb0d7bcc8e5b1d91a78dea7a534a30a8f882e4e178e3e126583271513a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6e571cb0d7bcc8e5b1d91a78dea7a534a30a8f882e4e178e3e126583271513a1->leave($__internal_6e571cb0d7bcc8e5b1d91a78dea7a534a30a8f882e4e178e3e126583271513a1_prof);

        
        $__internal_c171d35caabbe9595c583829c1aec914f59ac6e84b3a6ca1c8e96ebff38e5fc3->leave($__internal_c171d35caabbe9595c583829c1aec914f59ac6e84b3a6ca1c8e96ebff38e5fc3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_26ffb73a8471f4c9178b8c29e15c9c60e00c957e79b276bb8235d8f989f60a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26ffb73a8471f4c9178b8c29e15c9c60e00c957e79b276bb8235d8f989f60a88->enter($__internal_26ffb73a8471f4c9178b8c29e15c9c60e00c957e79b276bb8235d8f989f60a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fddf4ae12295d37ed263f5d8d682d1fd70c8c68b7a68791606575e549311f446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fddf4ae12295d37ed263f5d8d682d1fd70c8c68b7a68791606575e549311f446->enter($__internal_fddf4ae12295d37ed263f5d8d682d1fd70c8c68b7a68791606575e549311f446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_fddf4ae12295d37ed263f5d8d682d1fd70c8c68b7a68791606575e549311f446->leave($__internal_fddf4ae12295d37ed263f5d8d682d1fd70c8c68b7a68791606575e549311f446_prof);

        
        $__internal_26ffb73a8471f4c9178b8c29e15c9c60e00c957e79b276bb8235d8f989f60a88->leave($__internal_26ffb73a8471f4c9178b8c29e15c9c60e00c957e79b276bb8235d8f989f60a88_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a6786272f8aca9f6a20694fe15895fb1fc6bc193a5974affd4265a15d596c206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6786272f8aca9f6a20694fe15895fb1fc6bc193a5974affd4265a15d596c206->enter($__internal_a6786272f8aca9f6a20694fe15895fb1fc6bc193a5974affd4265a15d596c206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3b077232270662c71479cc0d0239f7e3be887a31e4f038bf21a6c76af004fcdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b077232270662c71479cc0d0239f7e3be887a31e4f038bf21a6c76af004fcdd->enter($__internal_3b077232270662c71479cc0d0239f7e3be887a31e4f038bf21a6c76af004fcdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3b077232270662c71479cc0d0239f7e3be887a31e4f038bf21a6c76af004fcdd->leave($__internal_3b077232270662c71479cc0d0239f7e3be887a31e4f038bf21a6c76af004fcdd_prof);

        
        $__internal_a6786272f8aca9f6a20694fe15895fb1fc6bc193a5974affd4265a15d596c206->leave($__internal_a6786272f8aca9f6a20694fe15895fb1fc6bc193a5974affd4265a15d596c206_prof);

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
