<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_dd2f160b0f99d413e03163b57c3acbea1bf7ba71a6dae23b8f891825c6f1d42f extends Twig_Template
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
        $__internal_0352ed18a4d26bc74577864d0023a23b81e674df6ef5ff0a923e1d826ac0cc31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0352ed18a4d26bc74577864d0023a23b81e674df6ef5ff0a923e1d826ac0cc31->enter($__internal_0352ed18a4d26bc74577864d0023a23b81e674df6ef5ff0a923e1d826ac0cc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_9b21980aaeec468215da1379316cac1075553a91f5b4d0da19c73c89f3136e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b21980aaeec468215da1379316cac1075553a91f5b4d0da19c73c89f3136e34->enter($__internal_9b21980aaeec468215da1379316cac1075553a91f5b4d0da19c73c89f3136e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0352ed18a4d26bc74577864d0023a23b81e674df6ef5ff0a923e1d826ac0cc31->leave($__internal_0352ed18a4d26bc74577864d0023a23b81e674df6ef5ff0a923e1d826ac0cc31_prof);

        
        $__internal_9b21980aaeec468215da1379316cac1075553a91f5b4d0da19c73c89f3136e34->leave($__internal_9b21980aaeec468215da1379316cac1075553a91f5b4d0da19c73c89f3136e34_prof);

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
