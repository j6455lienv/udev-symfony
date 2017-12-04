<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f1ab17f8be44f81e98309201dcca70f00b40f4c5a08edf1e16c9c7683eaf346a extends Twig_Template
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
        $__internal_e18e2dc473a14f4df2f531a8a348ccf05cccc57b719aff84628d8036cac22d9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e18e2dc473a14f4df2f531a8a348ccf05cccc57b719aff84628d8036cac22d9f->enter($__internal_e18e2dc473a14f4df2f531a8a348ccf05cccc57b719aff84628d8036cac22d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_b3c8ce0c9a83262b73a47e49105c989b8fe14b86a4f31d1970daae7fc6a2de35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c8ce0c9a83262b73a47e49105c989b8fe14b86a4f31d1970daae7fc6a2de35->enter($__internal_b3c8ce0c9a83262b73a47e49105c989b8fe14b86a4f31d1970daae7fc6a2de35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_e18e2dc473a14f4df2f531a8a348ccf05cccc57b719aff84628d8036cac22d9f->leave($__internal_e18e2dc473a14f4df2f531a8a348ccf05cccc57b719aff84628d8036cac22d9f_prof);

        
        $__internal_b3c8ce0c9a83262b73a47e49105c989b8fe14b86a4f31d1970daae7fc6a2de35->leave($__internal_b3c8ce0c9a83262b73a47e49105c989b8fe14b86a4f31d1970daae7fc6a2de35_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
