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
        $__internal_6f205597598e067c58abd0e8d153793a9a2571a2701142a9cd4ec088757fa034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f205597598e067c58abd0e8d153793a9a2571a2701142a9cd4ec088757fa034->enter($__internal_6f205597598e067c58abd0e8d153793a9a2571a2701142a9cd4ec088757fa034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/others.html.twig"));

        $__internal_b737617877899278d810b279f21493d729623e213b7e81a87152cb5f7b380d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b737617877899278d810b279f21493d729623e213b7e81a87152cb5f7b380d33->enter($__internal_b737617877899278d810b279f21493d729623e213b7e81a87152cb5f7b380d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/others.html.twig"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usershow", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
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
        
        $__internal_6f205597598e067c58abd0e8d153793a9a2571a2701142a9cd4ec088757fa034->leave($__internal_6f205597598e067c58abd0e8d153793a9a2571a2701142a9cd4ec088757fa034_prof);

        
        $__internal_b737617877899278d810b279f21493d729623e213b7e81a87152cb5f7b380d33->leave($__internal_b737617877899278d810b279f21493d729623e213b7e81a87152cb5f7b380d33_prof);

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
            <li><a href=\"{{ path('usershow', {'id':user.id}) }}\">{{ user.username }}</a></li>
            {% endfor %}
        </ol>
    </div>
</div>", "users/others.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/others.html.twig");
    }
}
