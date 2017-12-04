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
        $__internal_8778dd9a941bde07ac79b2b1fa329b28e8b6faaaa344fe3d78a841cbfa1d3494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8778dd9a941bde07ac79b2b1fa329b28e8b6faaaa344fe3d78a841cbfa1d3494->enter($__internal_8778dd9a941bde07ac79b2b1fa329b28e8b6faaaa344fe3d78a841cbfa1d3494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_eeb20e741f5b1adebf7a3815be6e4850dc0239dae384e8caeb0387b8fa76999e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeb20e741f5b1adebf7a3815be6e4850dc0239dae384e8caeb0387b8fa76999e->enter($__internal_eeb20e741f5b1adebf7a3815be6e4850dc0239dae384e8caeb0387b8fa76999e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_8778dd9a941bde07ac79b2b1fa329b28e8b6faaaa344fe3d78a841cbfa1d3494->leave($__internal_8778dd9a941bde07ac79b2b1fa329b28e8b6faaaa344fe3d78a841cbfa1d3494_prof);

        
        $__internal_eeb20e741f5b1adebf7a3815be6e4850dc0239dae384e8caeb0387b8fa76999e->leave($__internal_eeb20e741f5b1adebf7a3815be6e4850dc0239dae384e8caeb0387b8fa76999e_prof);

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
