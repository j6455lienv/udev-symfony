<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_56027a76fb0cbc8231a447146ad120952aab48b1e01687a0b6292b9f65aa1dba extends Twig_Template
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
        $__internal_e230b053da85a6a55697592948b340f0beebd2356d6e1f21d45f87c6f9cf3074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e230b053da85a6a55697592948b340f0beebd2356d6e1f21d45f87c6f9cf3074->enter($__internal_e230b053da85a6a55697592948b340f0beebd2356d6e1f21d45f87c6f9cf3074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_353f2e86b8164bfa67310bf1f88c548ec8e5cb2e4abdf2f52502e7b451cfa91f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353f2e86b8164bfa67310bf1f88c548ec8e5cb2e4abdf2f52502e7b451cfa91f->enter($__internal_353f2e86b8164bfa67310bf1f88c548ec8e5cb2e4abdf2f52502e7b451cfa91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_e230b053da85a6a55697592948b340f0beebd2356d6e1f21d45f87c6f9cf3074->leave($__internal_e230b053da85a6a55697592948b340f0beebd2356d6e1f21d45f87c6f9cf3074_prof);

        
        $__internal_353f2e86b8164bfa67310bf1f88c548ec8e5cb2e4abdf2f52502e7b451cfa91f->leave($__internal_353f2e86b8164bfa67310bf1f88c548ec8e5cb2e4abdf2f52502e7b451cfa91f_prof);

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
