<?php

/* articles/articleWidget.html.twig */
class __TwigTemplate_fdbc49a7e0e722c7e766c60b386c572d2307f4d27f1485aa67abbe13f15b212d extends Twig_Template
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
        $__internal_eb4b82059406851599866097bea8e9f273f99bfe6955f07b93b47b4d64072792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb4b82059406851599866097bea8e9f273f99bfe6955f07b93b47b4d64072792->enter($__internal_eb4b82059406851599866097bea8e9f273f99bfe6955f07b93b47b4d64072792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/articleWidget.html.twig"));

        // line 1
        echo "<div>
    <div class=\"sidebar-module well\">
        <ol class=\"list-unstyled\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["article"]);
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 5
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "subject", array()), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "        </ol>
    </div>
</div>";
        
        $__internal_eb4b82059406851599866097bea8e9f273f99bfe6955f07b93b47b4d64072792->leave($__internal_eb4b82059406851599866097bea8e9f273f99bfe6955f07b93b47b4d64072792_prof);

    }

    public function getTemplateName()
    {
        return "articles/articleWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  31 => 5,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "articles/articleWidget.html.twig", "/var/www/html/udev_symfony/app/Resources/views/articles/articleWidget.html.twig");
    }
}
