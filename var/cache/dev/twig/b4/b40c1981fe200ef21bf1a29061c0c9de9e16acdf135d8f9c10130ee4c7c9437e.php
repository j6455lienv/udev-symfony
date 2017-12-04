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
        $__internal_7ddb7b7538a8f44bf6602aabf31c973b6110695bf09c61eb486d80cf08db9fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ddb7b7538a8f44bf6602aabf31c973b6110695bf09c61eb486d80cf08db9fa2->enter($__internal_7ddb7b7538a8f44bf6602aabf31c973b6110695bf09c61eb486d80cf08db9fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_f5e61f96fd3ce677c6a0e8c7591ab748ff0d983fefb45c91046ca7e21c6ddc1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e61f96fd3ce677c6a0e8c7591ab748ff0d983fefb45c91046ca7e21c6ddc1f->enter($__internal_f5e61f96fd3ce677c6a0e8c7591ab748ff0d983fefb45c91046ca7e21c6ddc1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7ddb7b7538a8f44bf6602aabf31c973b6110695bf09c61eb486d80cf08db9fa2->leave($__internal_7ddb7b7538a8f44bf6602aabf31c973b6110695bf09c61eb486d80cf08db9fa2_prof);

        
        $__internal_f5e61f96fd3ce677c6a0e8c7591ab748ff0d983fefb45c91046ca7e21c6ddc1f->leave($__internal_f5e61f96fd3ce677c6a0e8c7591ab748ff0d983fefb45c91046ca7e21c6ddc1f_prof);

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
