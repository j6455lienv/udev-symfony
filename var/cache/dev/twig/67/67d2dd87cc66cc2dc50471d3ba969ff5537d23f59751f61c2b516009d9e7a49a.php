<?php

/* :default:feed.html.twig */
class __TwigTemplate_9a22d441936faab6079254897b87ac73fd4d8100d6c396b3d4333e506a3f07bd extends Twig_Template
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
        $__internal_0d44f24b409b9ca3908fb7d5f4a22a5ac099e024bfad28bb918141e5fc88c184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d44f24b409b9ca3908fb7d5f4a22a5ac099e024bfad28bb918141e5fc88c184->enter($__internal_0d44f24b409b9ca3908fb7d5f4a22a5ac099e024bfad28bb918141e5fc88c184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:feed.html.twig"));

        $__internal_2a5c1c545b3d42c378be34f141e6e2afbc0aa980333b025ed156062511154268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5c1c545b3d42c378be34f141e6e2afbc0aa980333b025ed156062511154268->enter($__internal_2a5c1c545b3d42c378be34f141e6e2afbc0aa980333b025ed156062511154268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:feed.html.twig"));

        // line 1
        echo "    <div class=\"sidebar-module well\">
        <h4>";
        // line 2
        echo twig_escape_filter($this->env, ($context["feedTitle"] ?? $this->getContext($context, "feedTitle")), "html", null, true);
        echo "</h4>
        <ul class=\"list-unstyled\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["feed"] ?? $this->getContext($context, "feed")), "getFeed", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 5
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "getLink", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "getTitle", array(), "method"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "        </ul>
    </div>";
        
        $__internal_0d44f24b409b9ca3908fb7d5f4a22a5ac099e024bfad28bb918141e5fc88c184->leave($__internal_0d44f24b409b9ca3908fb7d5f4a22a5ac099e024bfad28bb918141e5fc88c184_prof);

        
        $__internal_2a5c1c545b3d42c378be34f141e6e2afbc0aa980333b025ed156062511154268->leave($__internal_2a5c1c545b3d42c378be34f141e6e2afbc0aa980333b025ed156062511154268_prof);

    }

    public function getTemplateName()
    {
        return ":default:feed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  37 => 5,  33 => 4,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <div class=\"sidebar-module well\">
        <h4>{{ feedTitle }}</h4>
        <ul class=\"list-unstyled\">
            {% for row in feed.getFeed() %}
                <li><a href=\"{{ row.getLink() }}\">{{ row.getTitle() }}</a></li>
            {% endfor %}
        </ul>
    </div>", ":default:feed.html.twig", "/var/www/html/udev_symfony/app/Resources/views/default/feed.html.twig");
    }
}
