<?php

/* :rss:file.html.twig */
class __TwigTemplate_fac34333cc26f3cad42d6a1b81b5aa5aece0bc00a97a05428ed03da84064f6ef extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return ":rss:file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":rss:file.html.twig", "/var/www/html/udev_symfony/app/Resources/views/rss/file.html.twig");
    }
}
