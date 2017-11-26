<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_420662ea07c7eb31eafbc2e4c79560047a4af17b2eea2a28471cad821cd71dc7 extends Twig_Template
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
        $__internal_182d913aee2aa6c1b3e0908b6ea4677934f00eb260f8f95d28492ada7d63aec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_182d913aee2aa6c1b3e0908b6ea4677934f00eb260f8f95d28492ada7d63aec9->enter($__internal_182d913aee2aa6c1b3e0908b6ea4677934f00eb260f8f95d28492ada7d63aec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_fb6e9b653fbab18845d7ec2c0f49acf206294fa6a8007dae8fbc31110280267f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb6e9b653fbab18845d7ec2c0f49acf206294fa6a8007dae8fbc31110280267f->enter($__internal_fb6e9b653fbab18845d7ec2c0f49acf206294fa6a8007dae8fbc31110280267f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_182d913aee2aa6c1b3e0908b6ea4677934f00eb260f8f95d28492ada7d63aec9->leave($__internal_182d913aee2aa6c1b3e0908b6ea4677934f00eb260f8f95d28492ada7d63aec9_prof);

        
        $__internal_fb6e9b653fbab18845d7ec2c0f49acf206294fa6a8007dae8fbc31110280267f->leave($__internal_fb6e9b653fbab18845d7ec2c0f49acf206294fa6a8007dae8fbc31110280267f_prof);

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
