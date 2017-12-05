<?php

/* articles/others.html.twig */
class __TwigTemplate_6ff8f15b961ad3a3a432f03beb91ec1339ddd9c27b2bbd4673c3389cb2e193ae extends Twig_Template
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
        $__internal_583b1abbaadadcfff7c6f4febd622889101ffe52d1adf56118fe094745f033e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_583b1abbaadadcfff7c6f4febd622889101ffe52d1adf56118fe094745f033e5->enter($__internal_583b1abbaadadcfff7c6f4febd622889101ffe52d1adf56118fe094745f033e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/others.html.twig"));

        // line 1
        echo "<div>
    <div class=\"sidebar-module well\">
        <h4>Autres Articles</h4>
        <ol class=\"list-unstyled\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["article"]);
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 6
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
        // line 8
        echo "        </ol>
    </div>
</div>";
        
        $__internal_583b1abbaadadcfff7c6f4febd622889101ffe52d1adf56118fe094745f033e5->leave($__internal_583b1abbaadadcfff7c6f4febd622889101ffe52d1adf56118fe094745f033e5_prof);

    }

    public function getTemplateName()
    {
        return "articles/others.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  32 => 6,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "articles/others.html.twig", "/var/www/html/udev_symfony/app/Resources/views/articles/others.html.twig");
    }
}
