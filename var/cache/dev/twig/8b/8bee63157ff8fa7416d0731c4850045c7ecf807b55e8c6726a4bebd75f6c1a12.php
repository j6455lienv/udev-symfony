<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_3aac0e01c3bf447df7f6d6d72a09deab0e3cb1f4516f1375d87031223782bd9f extends Twig_Template
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
        $__internal_b2a8fce4e6560fb7e286b876910aca53c9c7d282a91fef719ebe84c60dc31b77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a8fce4e6560fb7e286b876910aca53c9c7d282a91fef719ebe84c60dc31b77->enter($__internal_b2a8fce4e6560fb7e286b876910aca53c9c7d282a91fef719ebe84c60dc31b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        $__internal_60b29ba3395d720d461a993bc074c133db1f8e3baaaeed1ea53ec1e83b27f697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b29ba3395d720d461a993bc074c133db1f8e3baaaeed1ea53ec1e83b27f697->enter($__internal_60b29ba3395d720d461a993bc074c133db1f8e3baaaeed1ea53ec1e83b27f697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_b2a8fce4e6560fb7e286b876910aca53c9c7d282a91fef719ebe84c60dc31b77->leave($__internal_b2a8fce4e6560fb7e286b876910aca53c9c7d282a91fef719ebe84c60dc31b77_prof);

        
        $__internal_60b29ba3395d720d461a993bc074c133db1f8e3baaaeed1ea53ec1e83b27f697->leave($__internal_60b29ba3395d720d461a993bc074c133db1f8e3baaaeed1ea53ec1e83b27f697_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
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
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "KnpPaginatorBundle:Pagination:sortable_link.html.twig", "/var/www/html/udev_symfony/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
