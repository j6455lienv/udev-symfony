<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f67d2fc2f7a2285ee9e986e046017b1d8e54b71d0756e0ffdddbf5be77ea14a4 extends Twig_Template
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
        $__internal_082a02953beda98d372d8ff751f4209bc205ec5a8ba8eaa8dea8cd12e93a6a5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_082a02953beda98d372d8ff751f4209bc205ec5a8ba8eaa8dea8cd12e93a6a5b->enter($__internal_082a02953beda98d372d8ff751f4209bc205ec5a8ba8eaa8dea8cd12e93a6a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_f44c3992b307beae83be101fffe748245590c83dc506d29d8af3efe6f69aa076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44c3992b307beae83be101fffe748245590c83dc506d29d8af3efe6f69aa076->enter($__internal_f44c3992b307beae83be101fffe748245590c83dc506d29d8af3efe6f69aa076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_082a02953beda98d372d8ff751f4209bc205ec5a8ba8eaa8dea8cd12e93a6a5b->leave($__internal_082a02953beda98d372d8ff751f4209bc205ec5a8ba8eaa8dea8cd12e93a6a5b_prof);

        
        $__internal_f44c3992b307beae83be101fffe748245590c83dc506d29d8af3efe6f69aa076->leave($__internal_f44c3992b307beae83be101fffe748245590c83dc506d29d8af3efe6f69aa076_prof);

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
