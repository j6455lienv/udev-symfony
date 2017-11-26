<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_877508cad7d200fcf78773b6eb6f491100e7815a9640bc823c2181189114503d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7671dc45fda459d74ed1a11351346a2327c91c9d3508581bc704d5a8ba54e0c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7671dc45fda459d74ed1a11351346a2327c91c9d3508581bc704d5a8ba54e0c0->enter($__internal_7671dc45fda459d74ed1a11351346a2327c91c9d3508581bc704d5a8ba54e0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_1136e2353da34fbaa7aaa9dce2e8f0b72edb1726740174c83d362d550f9f6a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1136e2353da34fbaa7aaa9dce2e8f0b72edb1726740174c83d362d550f9f6a07->enter($__internal_1136e2353da34fbaa7aaa9dce2e8f0b72edb1726740174c83d362d550f9f6a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7671dc45fda459d74ed1a11351346a2327c91c9d3508581bc704d5a8ba54e0c0->leave($__internal_7671dc45fda459d74ed1a11351346a2327c91c9d3508581bc704d5a8ba54e0c0_prof);

        
        $__internal_1136e2353da34fbaa7aaa9dce2e8f0b72edb1726740174c83d362d550f9f6a07->leave($__internal_1136e2353da34fbaa7aaa9dce2e8f0b72edb1726740174c83d362d550f9f6a07_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
