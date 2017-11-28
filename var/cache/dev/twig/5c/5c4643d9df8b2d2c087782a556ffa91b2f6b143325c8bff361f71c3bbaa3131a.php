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
        $__internal_f120ead5f4a8e9de5c0a67de69bf1662e11b950ad4ca6e5c41ea378d4dde199c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f120ead5f4a8e9de5c0a67de69bf1662e11b950ad4ca6e5c41ea378d4dde199c->enter($__internal_f120ead5f4a8e9de5c0a67de69bf1662e11b950ad4ca6e5c41ea378d4dde199c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_d8580c6d4cfd906569b6e5fd6a891dfc12a1fe17cbe8ca599d3a2b246ee1aa31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8580c6d4cfd906569b6e5fd6a891dfc12a1fe17cbe8ca599d3a2b246ee1aa31->enter($__internal_d8580c6d4cfd906569b6e5fd6a891dfc12a1fe17cbe8ca599d3a2b246ee1aa31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_f120ead5f4a8e9de5c0a67de69bf1662e11b950ad4ca6e5c41ea378d4dde199c->leave($__internal_f120ead5f4a8e9de5c0a67de69bf1662e11b950ad4ca6e5c41ea378d4dde199c_prof);

        
        $__internal_d8580c6d4cfd906569b6e5fd6a891dfc12a1fe17cbe8ca599d3a2b246ee1aa31->leave($__internal_d8580c6d4cfd906569b6e5fd6a891dfc12a1fe17cbe8ca599d3a2b246ee1aa31_prof);

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
