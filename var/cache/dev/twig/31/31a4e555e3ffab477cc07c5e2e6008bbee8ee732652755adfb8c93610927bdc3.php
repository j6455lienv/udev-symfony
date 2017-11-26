<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a40a6060e1adbd59aef8d786790e899ea0feb7bc866ea79c8b021c1d0e3332f3 extends Twig_Template
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
        $__internal_cff9e38d6dae044c8744143e2cffe58df79428f812feed9e6f6759b07952ad8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cff9e38d6dae044c8744143e2cffe58df79428f812feed9e6f6759b07952ad8c->enter($__internal_cff9e38d6dae044c8744143e2cffe58df79428f812feed9e6f6759b07952ad8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_a8d3e13e3652df99f7f497ba5b8c5dedd2b11ed90847dcf0f6ce94524747692e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d3e13e3652df99f7f497ba5b8c5dedd2b11ed90847dcf0f6ce94524747692e->enter($__internal_a8d3e13e3652df99f7f497ba5b8c5dedd2b11ed90847dcf0f6ce94524747692e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_cff9e38d6dae044c8744143e2cffe58df79428f812feed9e6f6759b07952ad8c->leave($__internal_cff9e38d6dae044c8744143e2cffe58df79428f812feed9e6f6759b07952ad8c_prof);

        
        $__internal_a8d3e13e3652df99f7f497ba5b8c5dedd2b11ed90847dcf0f6ce94524747692e->leave($__internal_a8d3e13e3652df99f7f497ba5b8c5dedd2b11ed90847dcf0f6ce94524747692e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
