<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b2e95f3417b6f96811d8fd662fafe3bae25dba3fdb66e82adb2de76e77ae3308 extends Twig_Template
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
        $__internal_83e209824698f707496f2dd32fa0e64843ce7cbd83c057951e00308c9adca75e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e209824698f707496f2dd32fa0e64843ce7cbd83c057951e00308c9adca75e->enter($__internal_83e209824698f707496f2dd32fa0e64843ce7cbd83c057951e00308c9adca75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_36f093e5b580076d8462065d00cf3c04063bec40eeea290d8f4c7cc5c1ab495d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36f093e5b580076d8462065d00cf3c04063bec40eeea290d8f4c7cc5c1ab495d->enter($__internal_36f093e5b580076d8462065d00cf3c04063bec40eeea290d8f4c7cc5c1ab495d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_83e209824698f707496f2dd32fa0e64843ce7cbd83c057951e00308c9adca75e->leave($__internal_83e209824698f707496f2dd32fa0e64843ce7cbd83c057951e00308c9adca75e_prof);

        
        $__internal_36f093e5b580076d8462065d00cf3c04063bec40eeea290d8f4c7cc5c1ab495d->leave($__internal_36f093e5b580076d8462065d00cf3c04063bec40eeea290d8f4c7cc5c1ab495d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
