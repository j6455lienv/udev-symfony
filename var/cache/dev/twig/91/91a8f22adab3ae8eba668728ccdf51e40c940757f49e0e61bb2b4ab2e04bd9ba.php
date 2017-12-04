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
        $__internal_1f7fa6e181d87263c891e0e80c9630dcd61c8415a22e805cdf262ddc745c3ba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f7fa6e181d87263c891e0e80c9630dcd61c8415a22e805cdf262ddc745c3ba8->enter($__internal_1f7fa6e181d87263c891e0e80c9630dcd61c8415a22e805cdf262ddc745c3ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_2a56d59dc7596318496f4dfe1fbb092fe79f34a4369392885c3c739ef29b14d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a56d59dc7596318496f4dfe1fbb092fe79f34a4369392885c3c739ef29b14d9->enter($__internal_2a56d59dc7596318496f4dfe1fbb092fe79f34a4369392885c3c739ef29b14d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_1f7fa6e181d87263c891e0e80c9630dcd61c8415a22e805cdf262ddc745c3ba8->leave($__internal_1f7fa6e181d87263c891e0e80c9630dcd61c8415a22e805cdf262ddc745c3ba8_prof);

        
        $__internal_2a56d59dc7596318496f4dfe1fbb092fe79f34a4369392885c3c739ef29b14d9->leave($__internal_2a56d59dc7596318496f4dfe1fbb092fe79f34a4369392885c3c739ef29b14d9_prof);

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
