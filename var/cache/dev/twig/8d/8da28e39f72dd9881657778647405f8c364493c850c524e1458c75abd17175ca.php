<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_106381100ca096094ec19a76bf49b8a44bc896a72f685beb71be075e7b303da6 extends Twig_Template
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
        $__internal_81d9c94255ff56e4e98abff47436a138879edf000ba01499508cdfba916226d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81d9c94255ff56e4e98abff47436a138879edf000ba01499508cdfba916226d6->enter($__internal_81d9c94255ff56e4e98abff47436a138879edf000ba01499508cdfba916226d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_4aa21f8a7a520c050317f5500058c5864700518257a05e538938644df4d279bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa21f8a7a520c050317f5500058c5864700518257a05e538938644df4d279bf->enter($__internal_4aa21f8a7a520c050317f5500058c5864700518257a05e538938644df4d279bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_81d9c94255ff56e4e98abff47436a138879edf000ba01499508cdfba916226d6->leave($__internal_81d9c94255ff56e4e98abff47436a138879edf000ba01499508cdfba916226d6_prof);

        
        $__internal_4aa21f8a7a520c050317f5500058c5864700518257a05e538938644df4d279bf->leave($__internal_4aa21f8a7a520c050317f5500058c5864700518257a05e538938644df4d279bf_prof);

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
