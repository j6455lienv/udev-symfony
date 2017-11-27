<?php

/* users/others.html.twig */
class __TwigTemplate_050f5c79798ce43784535c66fa9c28d60b33956935b1ea7aea3fdc303415be40 extends Twig_Template
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
        $__internal_5ebaac10bc21044e874d5c170962e6f5b0c8d2c8e60511426ec9a84a274ca68a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ebaac10bc21044e874d5c170962e6f5b0c8d2c8e60511426ec9a84a274ca68a->enter($__internal_5ebaac10bc21044e874d5c170962e6f5b0c8d2c8e60511426ec9a84a274ca68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/others.html.twig"));

        $__internal_114ad284a123eb7125a6e5036a67bcc2266497b66107e07bf01359974fe4b9c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_114ad284a123eb7125a6e5036a67bcc2266497b66107e07bf01359974fe4b9c9->enter($__internal_114ad284a123eb7125a6e5036a67bcc2266497b66107e07bf01359974fe4b9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/others.html.twig"));

        // line 1
        echo "<div class=\"col-md-3\">
    <div class=\"sidebar-module well\">
        <h4>Other Users</h4>
        <ol class=\"list-unstyled\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 6
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </ol>
    </div>
</div>";
        
        $__internal_5ebaac10bc21044e874d5c170962e6f5b0c8d2c8e60511426ec9a84a274ca68a->leave($__internal_5ebaac10bc21044e874d5c170962e6f5b0c8d2c8e60511426ec9a84a274ca68a_prof);

        
        $__internal_114ad284a123eb7125a6e5036a67bcc2266497b66107e07bf01359974fe4b9c9->leave($__internal_114ad284a123eb7125a6e5036a67bcc2266497b66107e07bf01359974fe4b9c9_prof);

    }

    public function getTemplateName()
    {
        return "users/others.html.twig";
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
        <h4>Other Users</h4>
        <ol class=\"list-unstyled\">
            {% for user in users %}
            <li><a href=\"{{ path('show', {'id':user.id}) }}\">{{ user.username }}</a></li>
            {% endfor %}
        </ol>
    </div>
</div>", "users/others.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/others.html.twig");
    }
}
