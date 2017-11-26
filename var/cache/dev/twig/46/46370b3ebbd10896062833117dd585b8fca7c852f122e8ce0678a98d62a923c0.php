<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_8b80adb9338105607039f313a2856d066d8cef22f533aa2350d29cd16cb1d358 extends Twig_Template
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
        $__internal_2e10cae4dd60c848a5aa507f33696fc1dde7acd2ae0e478436f33f66da8c9a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e10cae4dd60c848a5aa507f33696fc1dde7acd2ae0e478436f33f66da8c9a35->enter($__internal_2e10cae4dd60c848a5aa507f33696fc1dde7acd2ae0e478436f33f66da8c9a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_43a19da942c1a336e3b52ac6ad9b4745b2f090ca3a6198b59522396a8cad347c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a19da942c1a336e3b52ac6ad9b4745b2f090ca3a6198b59522396a8cad347c->enter($__internal_43a19da942c1a336e3b52ac6ad9b4745b2f090ca3a6198b59522396a8cad347c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_2e10cae4dd60c848a5aa507f33696fc1dde7acd2ae0e478436f33f66da8c9a35->leave($__internal_2e10cae4dd60c848a5aa507f33696fc1dde7acd2ae0e478436f33f66da8c9a35_prof);

        
        $__internal_43a19da942c1a336e3b52ac6ad9b4745b2f090ca3a6198b59522396a8cad347c->leave($__internal_43a19da942c1a336e3b52ac6ad9b4745b2f090ca3a6198b59522396a8cad347c_prof);

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
