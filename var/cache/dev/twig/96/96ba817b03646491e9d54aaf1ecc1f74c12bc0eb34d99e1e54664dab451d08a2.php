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
        $__internal_06e9fb9d4c9b7bddfa1735b4dc06602059f955883bf674eb930c46d8a0076ab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e9fb9d4c9b7bddfa1735b4dc06602059f955883bf674eb930c46d8a0076ab0->enter($__internal_06e9fb9d4c9b7bddfa1735b4dc06602059f955883bf674eb930c46d8a0076ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_689c0833680b8fc4b5ab00b47347edeed5a3885b10d4b52b52919bee8d24dc69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_689c0833680b8fc4b5ab00b47347edeed5a3885b10d4b52b52919bee8d24dc69->enter($__internal_689c0833680b8fc4b5ab00b47347edeed5a3885b10d4b52b52919bee8d24dc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_06e9fb9d4c9b7bddfa1735b4dc06602059f955883bf674eb930c46d8a0076ab0->leave($__internal_06e9fb9d4c9b7bddfa1735b4dc06602059f955883bf674eb930c46d8a0076ab0_prof);

        
        $__internal_689c0833680b8fc4b5ab00b47347edeed5a3885b10d4b52b52919bee8d24dc69->leave($__internal_689c0833680b8fc4b5ab00b47347edeed5a3885b10d4b52b52919bee8d24dc69_prof);

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
