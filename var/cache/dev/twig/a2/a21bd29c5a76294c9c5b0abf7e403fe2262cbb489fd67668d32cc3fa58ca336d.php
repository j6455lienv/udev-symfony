<?php

/* :articles:others.html.twig */
class __TwigTemplate_5d85f2314021c3475e26c25b8487fb24516988348c56407bf5e215b88fab6190 extends Twig_Template
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
        $__internal_99eb53273eb348c555ba000920039f6b974c4ae27c9f21c4746861bfcd06e5f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99eb53273eb348c555ba000920039f6b974c4ae27c9f21c4746861bfcd06e5f5->enter($__internal_99eb53273eb348c555ba000920039f6b974c4ae27c9f21c4746861bfcd06e5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":articles:others.html.twig"));

        $__internal_394b41df06eaee15de633e3a8c3c7bd22602899f0cf44dad7b6efd6097e3fdd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_394b41df06eaee15de633e3a8c3c7bd22602899f0cf44dad7b6efd6097e3fdd8->enter($__internal_394b41df06eaee15de633e3a8c3c7bd22602899f0cf44dad7b6efd6097e3fdd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":articles:others.html.twig"));

        // line 1
        echo "<div class=\"col-md-3\">
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
        
        $__internal_99eb53273eb348c555ba000920039f6b974c4ae27c9f21c4746861bfcd06e5f5->leave($__internal_99eb53273eb348c555ba000920039f6b974c4ae27c9f21c4746861bfcd06e5f5_prof);

        
        $__internal_394b41df06eaee15de633e3a8c3c7bd22602899f0cf44dad7b6efd6097e3fdd8->leave($__internal_394b41df06eaee15de633e3a8c3c7bd22602899f0cf44dad7b6efd6097e3fdd8_prof);

    }

    public function getTemplateName()
    {
        return ":articles:others.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  35 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-3\">
    <div class=\"sidebar-module well\">
        <h4>Autres Articles</h4>
        <ol class=\"list-unstyled\">
            {% for article in article %}
                <li><a href=\"{{ path('article_show', {'id':article.id}) }}\">{{ article.subject }}</a></li>
            {% endfor %}
        </ol>
    </div>
</div>", ":articles:others.html.twig", "/var/www/html/udev_symfony/app/Resources/views/articles/others.html.twig");
    }
}
