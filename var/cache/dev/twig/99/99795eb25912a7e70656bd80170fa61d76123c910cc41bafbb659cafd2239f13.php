<?php

/* :users:userWidget.html.twig */
class __TwigTemplate_ecc8c5c70697157b559a1fc9d3ffcbdc23cefc0e7ed977912bfbf8917b5ae2b9 extends Twig_Template
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
        $__internal_7a27a033a87f961a13b9a6f7a35fbb32804a03efbbf826657dbc999b59f02239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a27a033a87f961a13b9a6f7a35fbb32804a03efbbf826657dbc999b59f02239->enter($__internal_7a27a033a87f961a13b9a6f7a35fbb32804a03efbbf826657dbc999b59f02239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:userWidget.html.twig"));

        $__internal_c512b6e2a7fc2e2a0ad8da6211a87852e8cf926147dabf30744579303d150bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c512b6e2a7fc2e2a0ad8da6211a87852e8cf926147dabf30744579303d150bf3->enter($__internal_c512b6e2a7fc2e2a0ad8da6211a87852e8cf926147dabf30744579303d150bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:userWidget.html.twig"));

        // line 1
        echo "<div class=\"col-md-3\">
    <div class=\"sidebar-module well\">
        <ol class=\"list-unstyled\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["user"]);
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 5
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "        </ol>
    </div>
</div>";
        
        $__internal_7a27a033a87f961a13b9a6f7a35fbb32804a03efbbf826657dbc999b59f02239->leave($__internal_7a27a033a87f961a13b9a6f7a35fbb32804a03efbbf826657dbc999b59f02239_prof);

        
        $__internal_c512b6e2a7fc2e2a0ad8da6211a87852e8cf926147dabf30744579303d150bf3->leave($__internal_c512b6e2a7fc2e2a0ad8da6211a87852e8cf926147dabf30744579303d150bf3_prof);

    }

    public function getTemplateName()
    {
        return ":users:userWidget.html.twig";
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
        return new Twig_Source("<div class=\"col-md-3\">
    <div class=\"sidebar-module well\">
        <ol class=\"list-unstyled\">
            {% for user in user %}
                <li><a href=\"{{ path('show', {'id':user.id}) }}\">{{ user.username }}</a></li>
            {% endfor %}
        </ol>
    </div>
</div>", ":users:userWidget.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/userWidget.html.twig");
    }
}
