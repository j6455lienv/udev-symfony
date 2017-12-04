<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_dab25d8ca008bec057e6e9603d76c6c567aa54ae668128f95250c14cda72d4f8 extends Twig_Template
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
        $__internal_b0a6ba5e305084049b7b9f908037d3a027615a5c30e9c6088b7e73ce768d1386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a6ba5e305084049b7b9f908037d3a027615a5c30e9c6088b7e73ce768d1386->enter($__internal_b0a6ba5e305084049b7b9f908037d3a027615a5c30e9c6088b7e73ce768d1386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_d732e3cfba87751aa716c0d35c353cffbbdd8506397d67fce79b6938433e7c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d732e3cfba87751aa716c0d35c353cffbbdd8506397d67fce79b6938433e7c83->enter($__internal_d732e3cfba87751aa716c0d35c353cffbbdd8506397d67fce79b6938433e7c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_b0a6ba5e305084049b7b9f908037d3a027615a5c30e9c6088b7e73ce768d1386->leave($__internal_b0a6ba5e305084049b7b9f908037d3a027615a5c30e9c6088b7e73ce768d1386_prof);

        
        $__internal_d732e3cfba87751aa716c0d35c353cffbbdd8506397d67fce79b6938433e7c83->leave($__internal_d732e3cfba87751aa716c0d35c353cffbbdd8506397d67fce79b6938433e7c83_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
