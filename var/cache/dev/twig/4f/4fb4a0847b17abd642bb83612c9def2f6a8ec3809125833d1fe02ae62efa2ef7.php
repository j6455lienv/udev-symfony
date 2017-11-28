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
        $__internal_f6d0dbd8ea52a008df4fe7eead62873a2652565ae3fc70c8695d97f85e708b50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d0dbd8ea52a008df4fe7eead62873a2652565ae3fc70c8695d97f85e708b50->enter($__internal_f6d0dbd8ea52a008df4fe7eead62873a2652565ae3fc70c8695d97f85e708b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_abcc2da567288ac2de74b6afe5281be0a00f0ed4134731a258d3761875db36fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abcc2da567288ac2de74b6afe5281be0a00f0ed4134731a258d3761875db36fa->enter($__internal_abcc2da567288ac2de74b6afe5281be0a00f0ed4134731a258d3761875db36fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_f6d0dbd8ea52a008df4fe7eead62873a2652565ae3fc70c8695d97f85e708b50->leave($__internal_f6d0dbd8ea52a008df4fe7eead62873a2652565ae3fc70c8695d97f85e708b50_prof);

        
        $__internal_abcc2da567288ac2de74b6afe5281be0a00f0ed4134731a258d3761875db36fa->leave($__internal_abcc2da567288ac2de74b6afe5281be0a00f0ed4134731a258d3761875db36fa_prof);

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
