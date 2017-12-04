<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_74012e3ba4be5b9aeecdb32da4da5386101db8c4dda7159cbb1e75a0038175a1 extends Twig_Template
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
        $__internal_9f55d8a64f47be1786126374b9fe8f4f1ae2f0ab2aaa78d490f2d533018d8bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f55d8a64f47be1786126374b9fe8f4f1ae2f0ab2aaa78d490f2d533018d8bd5->enter($__internal_9f55d8a64f47be1786126374b9fe8f4f1ae2f0ab2aaa78d490f2d533018d8bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_17ccb8a8375cb2b502db403e34f8dd00bcb6710536bf95fee4bb734bbcdcccb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ccb8a8375cb2b502db403e34f8dd00bcb6710536bf95fee4bb734bbcdcccb8->enter($__internal_17ccb8a8375cb2b502db403e34f8dd00bcb6710536bf95fee4bb734bbcdcccb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_9f55d8a64f47be1786126374b9fe8f4f1ae2f0ab2aaa78d490f2d533018d8bd5->leave($__internal_9f55d8a64f47be1786126374b9fe8f4f1ae2f0ab2aaa78d490f2d533018d8bd5_prof);

        
        $__internal_17ccb8a8375cb2b502db403e34f8dd00bcb6710536bf95fee4bb734bbcdcccb8->leave($__internal_17ccb8a8375cb2b502db403e34f8dd00bcb6710536bf95fee4bb734bbcdcccb8_prof);

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
