<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c1666146a2f6eb159bbdc4ca849be12207a39249dc7ce8fa2f0b9315aa3c6506 extends Twig_Template
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
        $__internal_8adb324d90df9d1bc84d11bac53aa0b6d7286e83a932a69156169b56652984e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8adb324d90df9d1bc84d11bac53aa0b6d7286e83a932a69156169b56652984e4->enter($__internal_8adb324d90df9d1bc84d11bac53aa0b6d7286e83a932a69156169b56652984e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_f70bf68feb5db15436fd0f4ba5bd344ef5ec90ff371313f97722ef04ea0becc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70bf68feb5db15436fd0f4ba5bd344ef5ec90ff371313f97722ef04ea0becc4->enter($__internal_f70bf68feb5db15436fd0f4ba5bd344ef5ec90ff371313f97722ef04ea0becc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_8adb324d90df9d1bc84d11bac53aa0b6d7286e83a932a69156169b56652984e4->leave($__internal_8adb324d90df9d1bc84d11bac53aa0b6d7286e83a932a69156169b56652984e4_prof);

        
        $__internal_f70bf68feb5db15436fd0f4ba5bd344ef5ec90ff371313f97722ef04ea0becc4->leave($__internal_f70bf68feb5db15436fd0f4ba5bd344ef5ec90ff371313f97722ef04ea0becc4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
