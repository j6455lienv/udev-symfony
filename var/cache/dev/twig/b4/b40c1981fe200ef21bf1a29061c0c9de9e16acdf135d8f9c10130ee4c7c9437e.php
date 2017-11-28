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
        $__internal_45e0db25758ed7af23404750d9ce0119e3ce4c95942e2015460bdb06fa090071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e0db25758ed7af23404750d9ce0119e3ce4c95942e2015460bdb06fa090071->enter($__internal_45e0db25758ed7af23404750d9ce0119e3ce4c95942e2015460bdb06fa090071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_818e1a5211abd43d9535076c621cfb68e16251e12188962c96707f283205e440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818e1a5211abd43d9535076c621cfb68e16251e12188962c96707f283205e440->enter($__internal_818e1a5211abd43d9535076c621cfb68e16251e12188962c96707f283205e440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_45e0db25758ed7af23404750d9ce0119e3ce4c95942e2015460bdb06fa090071->leave($__internal_45e0db25758ed7af23404750d9ce0119e3ce4c95942e2015460bdb06fa090071_prof);

        
        $__internal_818e1a5211abd43d9535076c621cfb68e16251e12188962c96707f283205e440->leave($__internal_818e1a5211abd43d9535076c621cfb68e16251e12188962c96707f283205e440_prof);

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
