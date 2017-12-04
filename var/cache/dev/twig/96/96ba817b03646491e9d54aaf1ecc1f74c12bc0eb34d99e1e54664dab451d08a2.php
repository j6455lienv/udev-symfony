<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ffa3e6904c0161f97838448f0b822bdf9beaac1cdabb47ea1a9f0975b821fc0e extends Twig_Template
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
        $__internal_bd46c60306a8377bb1a3c02d7fdda73a4954ddc3b871c4576965c73e17dfb7d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd46c60306a8377bb1a3c02d7fdda73a4954ddc3b871c4576965c73e17dfb7d7->enter($__internal_bd46c60306a8377bb1a3c02d7fdda73a4954ddc3b871c4576965c73e17dfb7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_f61c6b3b9bdbe0856708f04714fc648a2faaac297498c2d203371917479343a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f61c6b3b9bdbe0856708f04714fc648a2faaac297498c2d203371917479343a3->enter($__internal_f61c6b3b9bdbe0856708f04714fc648a2faaac297498c2d203371917479343a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_bd46c60306a8377bb1a3c02d7fdda73a4954ddc3b871c4576965c73e17dfb7d7->leave($__internal_bd46c60306a8377bb1a3c02d7fdda73a4954ddc3b871c4576965c73e17dfb7d7_prof);

        
        $__internal_f61c6b3b9bdbe0856708f04714fc648a2faaac297498c2d203371917479343a3->leave($__internal_f61c6b3b9bdbe0856708f04714fc648a2faaac297498c2d203371917479343a3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
