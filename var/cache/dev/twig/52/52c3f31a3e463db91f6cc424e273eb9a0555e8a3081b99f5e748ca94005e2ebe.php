<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_34277d75581ec15de4a73f432e5eaf8df5d31c8d06b01d496d53c6c25aa4f6e6 extends Twig_Template
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
        $__internal_f5a23725df2a1a48cd9e8b51387aefd3c2b5bd27d936ddc3dd4a67728b0763af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5a23725df2a1a48cd9e8b51387aefd3c2b5bd27d936ddc3dd4a67728b0763af->enter($__internal_f5a23725df2a1a48cd9e8b51387aefd3c2b5bd27d936ddc3dd4a67728b0763af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_6f59b18c37014384becd2119d2840298043cc51d7a86424ddbb63cfdf92b482a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f59b18c37014384becd2119d2840298043cc51d7a86424ddbb63cfdf92b482a->enter($__internal_6f59b18c37014384becd2119d2840298043cc51d7a86424ddbb63cfdf92b482a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_f5a23725df2a1a48cd9e8b51387aefd3c2b5bd27d936ddc3dd4a67728b0763af->leave($__internal_f5a23725df2a1a48cd9e8b51387aefd3c2b5bd27d936ddc3dd4a67728b0763af_prof);

        
        $__internal_6f59b18c37014384becd2119d2840298043cc51d7a86424ddbb63cfdf92b482a->leave($__internal_6f59b18c37014384becd2119d2840298043cc51d7a86424ddbb63cfdf92b482a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
