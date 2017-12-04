<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_6be2103d29cfe4252338bf4bed356ddf226042dc21fcadf225b40cd4211f0dfc extends Twig_Template
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
        $__internal_be4698e07ba87c89c6b4d00b059c28060f409d5c0f7e1a09e57f0def5fdc73a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be4698e07ba87c89c6b4d00b059c28060f409d5c0f7e1a09e57f0def5fdc73a9->enter($__internal_be4698e07ba87c89c6b4d00b059c28060f409d5c0f7e1a09e57f0def5fdc73a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_af8d3f353835457704e47941f7c058f301202c43fa23b5ddccb963fcf61cf8e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af8d3f353835457704e47941f7c058f301202c43fa23b5ddccb963fcf61cf8e1->enter($__internal_af8d3f353835457704e47941f7c058f301202c43fa23b5ddccb963fcf61cf8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_be4698e07ba87c89c6b4d00b059c28060f409d5c0f7e1a09e57f0def5fdc73a9->leave($__internal_be4698e07ba87c89c6b4d00b059c28060f409d5c0f7e1a09e57f0def5fdc73a9_prof);

        
        $__internal_af8d3f353835457704e47941f7c058f301202c43fa23b5ddccb963fcf61cf8e1->leave($__internal_af8d3f353835457704e47941f7c058f301202c43fa23b5ddccb963fcf61cf8e1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
