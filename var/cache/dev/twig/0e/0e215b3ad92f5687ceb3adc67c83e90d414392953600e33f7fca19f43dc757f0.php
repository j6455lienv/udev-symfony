<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_4190d70e0fc826d936f360df6b6c7f6b6242973a618f7771846516491c26b9c9 extends Twig_Template
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
        $__internal_1894a93f192991879901167d3c3cffecb88b49710a2d51e9d87c9d9cecc52602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1894a93f192991879901167d3c3cffecb88b49710a2d51e9d87c9d9cecc52602->enter($__internal_1894a93f192991879901167d3c3cffecb88b49710a2d51e9d87c9d9cecc52602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_1449d0ac8a11f58420c51df811dca7248ec5fe693db3c0d115058b1027c84059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1449d0ac8a11f58420c51df811dca7248ec5fe693db3c0d115058b1027c84059->enter($__internal_1449d0ac8a11f58420c51df811dca7248ec5fe693db3c0d115058b1027c84059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_1894a93f192991879901167d3c3cffecb88b49710a2d51e9d87c9d9cecc52602->leave($__internal_1894a93f192991879901167d3c3cffecb88b49710a2d51e9d87c9d9cecc52602_prof);

        
        $__internal_1449d0ac8a11f58420c51df811dca7248ec5fe693db3c0d115058b1027c84059->leave($__internal_1449d0ac8a11f58420c51df811dca7248ec5fe693db3c0d115058b1027c84059_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
