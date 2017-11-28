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
        $__internal_94728fc9f8431ea84b79ee858c0247ed302de1f3442e5053b5872549b6648372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94728fc9f8431ea84b79ee858c0247ed302de1f3442e5053b5872549b6648372->enter($__internal_94728fc9f8431ea84b79ee858c0247ed302de1f3442e5053b5872549b6648372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_e5b46ca0035a32643e3fdb8487307ac8f89c4770f2567ead632308d9182f510d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b46ca0035a32643e3fdb8487307ac8f89c4770f2567ead632308d9182f510d->enter($__internal_e5b46ca0035a32643e3fdb8487307ac8f89c4770f2567ead632308d9182f510d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_94728fc9f8431ea84b79ee858c0247ed302de1f3442e5053b5872549b6648372->leave($__internal_94728fc9f8431ea84b79ee858c0247ed302de1f3442e5053b5872549b6648372_prof);

        
        $__internal_e5b46ca0035a32643e3fdb8487307ac8f89c4770f2567ead632308d9182f510d->leave($__internal_e5b46ca0035a32643e3fdb8487307ac8f89c4770f2567ead632308d9182f510d_prof);

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
