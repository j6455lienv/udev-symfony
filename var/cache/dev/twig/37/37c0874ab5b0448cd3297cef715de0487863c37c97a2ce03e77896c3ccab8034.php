<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2526a9c81c0f83305e3f580d08bf6268d4ea91e0946f99bf9e4e7f411f56607d extends Twig_Template
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
        $__internal_645fb23f7eec3656e62b84fec36e0eaddcbb9ad848f86c8216a851e61cf18ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_645fb23f7eec3656e62b84fec36e0eaddcbb9ad848f86c8216a851e61cf18ec8->enter($__internal_645fb23f7eec3656e62b84fec36e0eaddcbb9ad848f86c8216a851e61cf18ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_2219f29c18561fb42a2304ea1daba23bc2912a7e09abd93ac67027d79ea6b263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2219f29c18561fb42a2304ea1daba23bc2912a7e09abd93ac67027d79ea6b263->enter($__internal_2219f29c18561fb42a2304ea1daba23bc2912a7e09abd93ac67027d79ea6b263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_645fb23f7eec3656e62b84fec36e0eaddcbb9ad848f86c8216a851e61cf18ec8->leave($__internal_645fb23f7eec3656e62b84fec36e0eaddcbb9ad848f86c8216a851e61cf18ec8_prof);

        
        $__internal_2219f29c18561fb42a2304ea1daba23bc2912a7e09abd93ac67027d79ea6b263->leave($__internal_2219f29c18561fb42a2304ea1daba23bc2912a7e09abd93ac67027d79ea6b263_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
