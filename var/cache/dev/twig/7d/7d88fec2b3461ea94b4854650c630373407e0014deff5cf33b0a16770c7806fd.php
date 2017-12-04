<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_ae213a41404b6654b5eb16fbd3e324d9df6ca1eb722a4ea1253aa37b80bb3f27 extends Twig_Template
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
        $__internal_261c89122ad395c263c39f9048a820df1f79387ceb7fd437d7bb17d94ec30a0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_261c89122ad395c263c39f9048a820df1f79387ceb7fd437d7bb17d94ec30a0b->enter($__internal_261c89122ad395c263c39f9048a820df1f79387ceb7fd437d7bb17d94ec30a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_f7cce9dd4b77e597441d37a24b1636f545093589ea66fa8211618e8770a6e212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7cce9dd4b77e597441d37a24b1636f545093589ea66fa8211618e8770a6e212->enter($__internal_f7cce9dd4b77e597441d37a24b1636f545093589ea66fa8211618e8770a6e212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_261c89122ad395c263c39f9048a820df1f79387ceb7fd437d7bb17d94ec30a0b->leave($__internal_261c89122ad395c263c39f9048a820df1f79387ceb7fd437d7bb17d94ec30a0b_prof);

        
        $__internal_f7cce9dd4b77e597441d37a24b1636f545093589ea66fa8211618e8770a6e212->leave($__internal_f7cce9dd4b77e597441d37a24b1636f545093589ea66fa8211618e8770a6e212_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
