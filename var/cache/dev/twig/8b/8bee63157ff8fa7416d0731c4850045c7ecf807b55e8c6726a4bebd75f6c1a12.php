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
        $__internal_084d608e3e0604d21bd11c42f2487a81956e9b602280ce7f890f660d3853aae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084d608e3e0604d21bd11c42f2487a81956e9b602280ce7f890f660d3853aae5->enter($__internal_084d608e3e0604d21bd11c42f2487a81956e9b602280ce7f890f660d3853aae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        $__internal_3d8bc2fe13d994c9aa509f0b2a212fc5cf39b03dfcd0c4451cbf11f4dc19e42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d8bc2fe13d994c9aa509f0b2a212fc5cf39b03dfcd0c4451cbf11f4dc19e42e->enter($__internal_3d8bc2fe13d994c9aa509f0b2a212fc5cf39b03dfcd0c4451cbf11f4dc19e42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

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
        
        $__internal_084d608e3e0604d21bd11c42f2487a81956e9b602280ce7f890f660d3853aae5->leave($__internal_084d608e3e0604d21bd11c42f2487a81956e9b602280ce7f890f660d3853aae5_prof);

        
        $__internal_3d8bc2fe13d994c9aa509f0b2a212fc5cf39b03dfcd0c4451cbf11f4dc19e42e->leave($__internal_3d8bc2fe13d994c9aa509f0b2a212fc5cf39b03dfcd0c4451cbf11f4dc19e42e_prof);

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
