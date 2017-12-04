<?php

/* articles/articleWidget.html.twig */
class __TwigTemplate_aaa877c4bb7c0ad5d82a6054937c9b45704012cca35b34b96a1ddebc93eb6e42 extends Twig_Template
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
        $__internal_481c77517656a9370ae55ab04a47953c3e698e9b29c307151466bad470353146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_481c77517656a9370ae55ab04a47953c3e698e9b29c307151466bad470353146->enter($__internal_481c77517656a9370ae55ab04a47953c3e698e9b29c307151466bad470353146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/articleWidget.html.twig"));

        $__internal_e6699d61b183fc48cbe5988111916e6a5c46ab3a61275087e45e90475925ea17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6699d61b183fc48cbe5988111916e6a5c46ab3a61275087e45e90475925ea17->enter($__internal_e6699d61b183fc48cbe5988111916e6a5c46ab3a61275087e45e90475925ea17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/articleWidget.html.twig"));

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
        
        $__internal_481c77517656a9370ae55ab04a47953c3e698e9b29c307151466bad470353146->leave($__internal_481c77517656a9370ae55ab04a47953c3e698e9b29c307151466bad470353146_prof);

        
        $__internal_e6699d61b183fc48cbe5988111916e6a5c46ab3a61275087e45e90475925ea17->leave($__internal_e6699d61b183fc48cbe5988111916e6a5c46ab3a61275087e45e90475925ea17_prof);

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
        return array (  45 => 7,  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <div class=\"sidebar-module well\">
        <ol class=\"list-unstyled\">
            {% for article in article %}
                <li><a href=\"{{ path('article_show', {'id':article.id}) }}\">{{ article.subject }}</a></li>
            {% endfor %}
        </ol>
    </div>
</div>", "articles/articleWidget.html.twig", "/var/www/html/udev_symfony/app/Resources/views/articles/articleWidget.html.twig");
    }
}
