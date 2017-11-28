<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b61e97c4d8b8bcef85fdb98cc81c3d9532a302489211663fa5499491ec08ca47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_099c77b91612b3c121683c6a64674d0d6dde1a21f2bc027381df81cd5197673c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099c77b91612b3c121683c6a64674d0d6dde1a21f2bc027381df81cd5197673c->enter($__internal_099c77b91612b3c121683c6a64674d0d6dde1a21f2bc027381df81cd5197673c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_f7867bb7db9bf278c9bd12a8f96d68bac189d73626521811671f3940d817a705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7867bb7db9bf278c9bd12a8f96d68bac189d73626521811671f3940d817a705->enter($__internal_f7867bb7db9bf278c9bd12a8f96d68bac189d73626521811671f3940d817a705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_099c77b91612b3c121683c6a64674d0d6dde1a21f2bc027381df81cd5197673c->leave($__internal_099c77b91612b3c121683c6a64674d0d6dde1a21f2bc027381df81cd5197673c_prof);

        
        $__internal_f7867bb7db9bf278c9bd12a8f96d68bac189d73626521811671f3940d817a705->leave($__internal_f7867bb7db9bf278c9bd12a8f96d68bac189d73626521811671f3940d817a705_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a5a85deb547b687873a6af34c75d21f075f1d99ceb5a25cb97623f9d43df6df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a5a85deb547b687873a6af34c75d21f075f1d99ceb5a25cb97623f9d43df6df->enter($__internal_2a5a85deb547b687873a6af34c75d21f075f1d99ceb5a25cb97623f9d43df6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8982cf2ad3daa861628983dd7b20501dbed63cec6492c35b013acb9a1346b90f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8982cf2ad3daa861628983dd7b20501dbed63cec6492c35b013acb9a1346b90f->enter($__internal_8982cf2ad3daa861628983dd7b20501dbed63cec6492c35b013acb9a1346b90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8982cf2ad3daa861628983dd7b20501dbed63cec6492c35b013acb9a1346b90f->leave($__internal_8982cf2ad3daa861628983dd7b20501dbed63cec6492c35b013acb9a1346b90f_prof);

        
        $__internal_2a5a85deb547b687873a6af34c75d21f075f1d99ceb5a25cb97623f9d43df6df->leave($__internal_2a5a85deb547b687873a6af34c75d21f075f1d99ceb5a25cb97623f9d43df6df_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0adc9de7cf00f86d4f636066c6e1f72e8aaf4bb59475e194d41cc29171e472cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0adc9de7cf00f86d4f636066c6e1f72e8aaf4bb59475e194d41cc29171e472cc->enter($__internal_0adc9de7cf00f86d4f636066c6e1f72e8aaf4bb59475e194d41cc29171e472cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fb2601892364b45cbbe13deb6306346d8c8619d4674a64945ca7f1f58a51c086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb2601892364b45cbbe13deb6306346d8c8619d4674a64945ca7f1f58a51c086->enter($__internal_fb2601892364b45cbbe13deb6306346d8c8619d4674a64945ca7f1f58a51c086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fb2601892364b45cbbe13deb6306346d8c8619d4674a64945ca7f1f58a51c086->leave($__internal_fb2601892364b45cbbe13deb6306346d8c8619d4674a64945ca7f1f58a51c086_prof);

        
        $__internal_0adc9de7cf00f86d4f636066c6e1f72e8aaf4bb59475e194d41cc29171e472cc->leave($__internal_0adc9de7cf00f86d4f636066c6e1f72e8aaf4bb59475e194d41cc29171e472cc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b8fb39340fbb3813c8d67730cba73d2d9316fe66c85b2e46ac9f19cb32a386b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8fb39340fbb3813c8d67730cba73d2d9316fe66c85b2e46ac9f19cb32a386b5->enter($__internal_b8fb39340fbb3813c8d67730cba73d2d9316fe66c85b2e46ac9f19cb32a386b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2042bca40654900796d46599ae5b9fa69470485674519c3820857486751f3b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2042bca40654900796d46599ae5b9fa69470485674519c3820857486751f3b8c->enter($__internal_2042bca40654900796d46599ae5b9fa69470485674519c3820857486751f3b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2042bca40654900796d46599ae5b9fa69470485674519c3820857486751f3b8c->leave($__internal_2042bca40654900796d46599ae5b9fa69470485674519c3820857486751f3b8c_prof);

        
        $__internal_b8fb39340fbb3813c8d67730cba73d2d9316fe66c85b2e46ac9f19cb32a386b5->leave($__internal_b8fb39340fbb3813c8d67730cba73d2d9316fe66c85b2e46ac9f19cb32a386b5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
