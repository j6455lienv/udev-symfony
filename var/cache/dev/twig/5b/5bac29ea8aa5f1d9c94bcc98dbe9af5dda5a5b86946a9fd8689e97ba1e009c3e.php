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
        $__internal_cf27c54fc35c0487d2d1f2d6593dfade6371bcaf5b251b2b737df949d65789c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf27c54fc35c0487d2d1f2d6593dfade6371bcaf5b251b2b737df949d65789c9->enter($__internal_cf27c54fc35c0487d2d1f2d6593dfade6371bcaf5b251b2b737df949d65789c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_1f2e809a5093f3ba3db1d170ec0e60e0f921a1bee29e987dd9f6db1c10bb4518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2e809a5093f3ba3db1d170ec0e60e0f921a1bee29e987dd9f6db1c10bb4518->enter($__internal_1f2e809a5093f3ba3db1d170ec0e60e0f921a1bee29e987dd9f6db1c10bb4518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_cf27c54fc35c0487d2d1f2d6593dfade6371bcaf5b251b2b737df949d65789c9->leave($__internal_cf27c54fc35c0487d2d1f2d6593dfade6371bcaf5b251b2b737df949d65789c9_prof);

        
        $__internal_1f2e809a5093f3ba3db1d170ec0e60e0f921a1bee29e987dd9f6db1c10bb4518->leave($__internal_1f2e809a5093f3ba3db1d170ec0e60e0f921a1bee29e987dd9f6db1c10bb4518_prof);

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
