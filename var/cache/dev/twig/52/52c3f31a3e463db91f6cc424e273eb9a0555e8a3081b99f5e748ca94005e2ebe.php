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
        $__internal_dcc12d43fa633c0b939889608a158971c6762f9290af8b306d36bf0a33446a43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcc12d43fa633c0b939889608a158971c6762f9290af8b306d36bf0a33446a43->enter($__internal_dcc12d43fa633c0b939889608a158971c6762f9290af8b306d36bf0a33446a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_a58bf02e47e0b0aeda127617bfbbfcc69d947ccdcde3ff29f833f0c2ad4547f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58bf02e47e0b0aeda127617bfbbfcc69d947ccdcde3ff29f833f0c2ad4547f2->enter($__internal_a58bf02e47e0b0aeda127617bfbbfcc69d947ccdcde3ff29f833f0c2ad4547f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_dcc12d43fa633c0b939889608a158971c6762f9290af8b306d36bf0a33446a43->leave($__internal_dcc12d43fa633c0b939889608a158971c6762f9290af8b306d36bf0a33446a43_prof);

        
        $__internal_a58bf02e47e0b0aeda127617bfbbfcc69d947ccdcde3ff29f833f0c2ad4547f2->leave($__internal_a58bf02e47e0b0aeda127617bfbbfcc69d947ccdcde3ff29f833f0c2ad4547f2_prof);

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
