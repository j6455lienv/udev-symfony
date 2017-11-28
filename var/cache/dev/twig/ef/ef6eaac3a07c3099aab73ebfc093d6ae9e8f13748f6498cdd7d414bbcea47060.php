<?php

/* :rss:file.html.twig */
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
        $__internal_64dc7a9b3206b3b792cb78345d0731f13c751ff61dcd18bb31cefb4d9de69541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64dc7a9b3206b3b792cb78345d0731f13c751ff61dcd18bb31cefb4d9de69541->enter($__internal_64dc7a9b3206b3b792cb78345d0731f13c751ff61dcd18bb31cefb4d9de69541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rss:file.html.twig"));

        $__internal_5df38c3bdbfbc2d9dec1dc53191b5d9245fd298767ddbc2a76d14fb20efa9f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df38c3bdbfbc2d9dec1dc53191b5d9245fd298767ddbc2a76d14fb20efa9f59->enter($__internal_5df38c3bdbfbc2d9dec1dc53191b5d9245fd298767ddbc2a76d14fb20efa9f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rss:file.html.twig"));

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
        
        $__internal_64dc7a9b3206b3b792cb78345d0731f13c751ff61dcd18bb31cefb4d9de69541->leave($__internal_64dc7a9b3206b3b792cb78345d0731f13c751ff61dcd18bb31cefb4d9de69541_prof);

        
        $__internal_5df38c3bdbfbc2d9dec1dc53191b5d9245fd298767ddbc2a76d14fb20efa9f59->leave($__internal_5df38c3bdbfbc2d9dec1dc53191b5d9245fd298767ddbc2a76d14fb20efa9f59_prof);

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
{% endfor %}", ":rss:file.html.twig", "/var/www/html/udev_symfony/app/Resources/views/rss/file.html.twig");
    }
}
