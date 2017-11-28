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
        $__internal_97fba80335797ee4fd3e9d2e542f65f8f0f92afb3c1c200498a3f2fd238282ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97fba80335797ee4fd3e9d2e542f65f8f0f92afb3c1c200498a3f2fd238282ea->enter($__internal_97fba80335797ee4fd3e9d2e542f65f8f0f92afb3c1c200498a3f2fd238282ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_667496ec6681b5ea47a59a2a5b5f7d744b7926d5e64dd2298be83427d755af43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_667496ec6681b5ea47a59a2a5b5f7d744b7926d5e64dd2298be83427d755af43->enter($__internal_667496ec6681b5ea47a59a2a5b5f7d744b7926d5e64dd2298be83427d755af43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_97fba80335797ee4fd3e9d2e542f65f8f0f92afb3c1c200498a3f2fd238282ea->leave($__internal_97fba80335797ee4fd3e9d2e542f65f8f0f92afb3c1c200498a3f2fd238282ea_prof);

        
        $__internal_667496ec6681b5ea47a59a2a5b5f7d744b7926d5e64dd2298be83427d755af43->leave($__internal_667496ec6681b5ea47a59a2a5b5f7d744b7926d5e64dd2298be83427d755af43_prof);

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
