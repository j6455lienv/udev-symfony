<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_bf8ceec8416a1ed7d879cd211052f8adc46aec8eacaa0239e0792f8516ba301b extends Twig_Template
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
        $__internal_9642623383f23ba10819309872854a96a77a12bcf3a06aa2ecb9886c1e0453e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9642623383f23ba10819309872854a96a77a12bcf3a06aa2ecb9886c1e0453e6->enter($__internal_9642623383f23ba10819309872854a96a77a12bcf3a06aa2ecb9886c1e0453e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_c70b3012eb9bccc63fa6de763d87a592781fad4a70542f2db471609a20c1743d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70b3012eb9bccc63fa6de763d87a592781fad4a70542f2db471609a20c1743d->enter($__internal_c70b3012eb9bccc63fa6de763d87a592781fad4a70542f2db471609a20c1743d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_9642623383f23ba10819309872854a96a77a12bcf3a06aa2ecb9886c1e0453e6->leave($__internal_9642623383f23ba10819309872854a96a77a12bcf3a06aa2ecb9886c1e0453e6_prof);

        
        $__internal_c70b3012eb9bccc63fa6de763d87a592781fad4a70542f2db471609a20c1743d->leave($__internal_c70b3012eb9bccc63fa6de763d87a592781fad4a70542f2db471609a20c1743d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
