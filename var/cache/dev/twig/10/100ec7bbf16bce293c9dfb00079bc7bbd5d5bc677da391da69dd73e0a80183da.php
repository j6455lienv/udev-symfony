<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_185465045c6dc15145cc74432053d972c640213f9859b623a87d06d8b4f0eb98 extends Twig_Template
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
        $__internal_199a491583620d7fb61344463eed675678884b50afdc7779e547e4c311aa20b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_199a491583620d7fb61344463eed675678884b50afdc7779e547e4c311aa20b9->enter($__internal_199a491583620d7fb61344463eed675678884b50afdc7779e547e4c311aa20b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_8df4e0406b103c08cd2f7e792c39119f271748bc7dce310337876237f28e2897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df4e0406b103c08cd2f7e792c39119f271748bc7dce310337876237f28e2897->enter($__internal_8df4e0406b103c08cd2f7e792c39119f271748bc7dce310337876237f28e2897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_199a491583620d7fb61344463eed675678884b50afdc7779e547e4c311aa20b9->leave($__internal_199a491583620d7fb61344463eed675678884b50afdc7779e547e4c311aa20b9_prof);

        
        $__internal_8df4e0406b103c08cd2f7e792c39119f271748bc7dce310337876237f28e2897->leave($__internal_8df4e0406b103c08cd2f7e792c39119f271748bc7dce310337876237f28e2897_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
