<?php

/* rss/file.html.twig */
class __TwigTemplate_967f575dbf929564843ab1014e4c6783062e71e364107d0f1ff4583902440803 extends Twig_Template
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
        $__internal_da8a931ab0f68a2c753cfc2795e740cba0f458c955dba5bb654334c21d706819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da8a931ab0f68a2c753cfc2795e740cba0f458c955dba5bb654334c21d706819->enter($__internal_da8a931ab0f68a2c753cfc2795e740cba0f458c955dba5bb654334c21d706819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rss/file.html.twig"));

        $__internal_5216708bae95a32785e5aabc597b95006c21f43649158169bceae50051c19b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5216708bae95a32785e5aabc597b95006c21f43649158169bceae50051c19b18->enter($__internal_5216708bae95a32785e5aabc597b95006c21f43649158169bceae50051c19b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rss/file.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["result"]);
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 2
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "getLink", array(), "method"), "html", null, true);
            echo "\"></a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_da8a931ab0f68a2c753cfc2795e740cba0f458c955dba5bb654334c21d706819->leave($__internal_da8a931ab0f68a2c753cfc2795e740cba0f458c955dba5bb654334c21d706819_prof);

        
        $__internal_5216708bae95a32785e5aabc597b95006c21f43649158169bceae50051c19b18->leave($__internal_5216708bae95a32785e5aabc597b95006c21f43649158169bceae50051c19b18_prof);

    }

    public function getTemplateName()
    {
        return "rss/file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for result in result %}
<li><a href=\"{{ result.getLink() }}\"></a></li>
{% endfor %}", "rss/file.html.twig", "/var/www/html/udev_symfony/app/Resources/views/rss/file.html.twig");
    }
}
