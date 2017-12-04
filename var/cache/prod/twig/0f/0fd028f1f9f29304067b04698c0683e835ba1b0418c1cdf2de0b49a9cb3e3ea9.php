<?php

/* :default:feed.html.twig */
class __TwigTemplate_faa3b14698d36dfaaf16101b9d2512c9f7d5cc573360ebc85b0b58392c2c0ff5 extends Twig_Template
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
        // line 1
        echo "    <div class=\"sidebar-module well\">
        <h4>";
        // line 2
        echo twig_escape_filter($this->env, ($context["feedTitle"] ?? null), "html", null, true);
        echo "</h4>
        <ul class=\"list-unstyled\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["feed"] ?? null), "getFeed", array(), "method"));
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
        return array (  42 => 7,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:feed.html.twig", "/var/www/html/udev_symfony/app/Resources/views/default/feed.html.twig");
    }
}
