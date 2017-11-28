<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_814d7538d6efe5dec1db9b2fa8a5dbdeafa1419e60b82f3918f0709561aa37ae extends Twig_Template
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
        $__internal_f39fd9e189e0604cb9244c77377f5d60391e196042d40d72e0708a2939a8c371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f39fd9e189e0604cb9244c77377f5d60391e196042d40d72e0708a2939a8c371->enter($__internal_f39fd9e189e0604cb9244c77377f5d60391e196042d40d72e0708a2939a8c371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_f46187cedefec30c373f5e67a5a2a50c7562299de01b7548b51dac0766df349d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46187cedefec30c373f5e67a5a2a50c7562299de01b7548b51dac0766df349d->enter($__internal_f46187cedefec30c373f5e67a5a2a50c7562299de01b7548b51dac0766df349d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f39fd9e189e0604cb9244c77377f5d60391e196042d40d72e0708a2939a8c371->leave($__internal_f39fd9e189e0604cb9244c77377f5d60391e196042d40d72e0708a2939a8c371_prof);

        
        $__internal_f46187cedefec30c373f5e67a5a2a50c7562299de01b7548b51dac0766df349d->leave($__internal_f46187cedefec30c373f5e67a5a2a50c7562299de01b7548b51dac0766df349d_prof);

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
