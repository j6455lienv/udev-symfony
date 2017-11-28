<?php

/* users/userWidget.html.twig */
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
        $__internal_2a5ac38e7c50eb20f6e6d38fd332958ce8de5596f098cf7204403c4bec72c050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a5ac38e7c50eb20f6e6d38fd332958ce8de5596f098cf7204403c4bec72c050->enter($__internal_2a5ac38e7c50eb20f6e6d38fd332958ce8de5596f098cf7204403c4bec72c050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/userWidget.html.twig"));

        $__internal_0823cc7eb6302b2e4d23d4f729aa86c7c6fab05ea4d2daaf39b7bb3e2062ae6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0823cc7eb6302b2e4d23d4f729aa86c7c6fab05ea4d2daaf39b7bb3e2062ae6f->enter($__internal_0823cc7eb6302b2e4d23d4f729aa86c7c6fab05ea4d2daaf39b7bb3e2062ae6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/userWidget.html.twig"));

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
        // line 8
        echo "        </ol>
    </div>
</div>";
        
        $__internal_2a5ac38e7c50eb20f6e6d38fd332958ce8de5596f098cf7204403c4bec72c050->leave($__internal_2a5ac38e7c50eb20f6e6d38fd332958ce8de5596f098cf7204403c4bec72c050_prof);

        
        $__internal_0823cc7eb6302b2e4d23d4f729aa86c7c6fab05ea4d2daaf39b7bb3e2062ae6f->leave($__internal_0823cc7eb6302b2e4d23d4f729aa86c7c6fab05ea4d2daaf39b7bb3e2062ae6f_prof);

    }

    public function getTemplateName()
    {
        return "users/userWidget.html.twig";
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
</div>", "users/userWidget.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/userWidget.html.twig");
    }
}
