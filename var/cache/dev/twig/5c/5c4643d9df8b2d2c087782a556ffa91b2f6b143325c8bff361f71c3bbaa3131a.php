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
        $__internal_3cd7fcbc9275e84a6d662d766ad17d4c49524fd8f224bf40d9b6b8e63db1aedb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cd7fcbc9275e84a6d662d766ad17d4c49524fd8f224bf40d9b6b8e63db1aedb->enter($__internal_3cd7fcbc9275e84a6d662d766ad17d4c49524fd8f224bf40d9b6b8e63db1aedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_99bf30c32c62095f9a151970daa3121aa5d16fb80262481ec48bcefc5e62a2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99bf30c32c62095f9a151970daa3121aa5d16fb80262481ec48bcefc5e62a2b1->enter($__internal_99bf30c32c62095f9a151970daa3121aa5d16fb80262481ec48bcefc5e62a2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_3cd7fcbc9275e84a6d662d766ad17d4c49524fd8f224bf40d9b6b8e63db1aedb->leave($__internal_3cd7fcbc9275e84a6d662d766ad17d4c49524fd8f224bf40d9b6b8e63db1aedb_prof);

        
        $__internal_99bf30c32c62095f9a151970daa3121aa5d16fb80262481ec48bcefc5e62a2b1->leave($__internal_99bf30c32c62095f9a151970daa3121aa5d16fb80262481ec48bcefc5e62a2b1_prof);

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
