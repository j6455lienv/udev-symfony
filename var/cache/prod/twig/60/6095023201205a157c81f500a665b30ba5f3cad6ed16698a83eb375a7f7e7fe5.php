<?php

/* users/others.html.twig */
class __TwigTemplate_fc5c1e09eac5c2089820331b04c89d1c8ebe3a3b207e4027b7cba309f823d506 extends Twig_Template
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
        $__internal_a00997bc3e961a407da7af86bcf510381152766855401191cbbe6c340af09602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a00997bc3e961a407da7af86bcf510381152766855401191cbbe6c340af09602->enter($__internal_a00997bc3e961a407da7af86bcf510381152766855401191cbbe6c340af09602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/others.html.twig"));

        $__internal_1caf1de14adb55ae2719b4a48b2af9d4dcf3acd62b35d5b9b14822c2f4ed4689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1caf1de14adb55ae2719b4a48b2af9d4dcf3acd62b35d5b9b14822c2f4ed4689->enter($__internal_1caf1de14adb55ae2719b4a48b2af9d4dcf3acd62b35d5b9b14822c2f4ed4689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/others.html.twig"));

        // line 1
        echo "<div>
    <div class=\"sidebar-module well\">
        <h4>Other Users</h4>
        <ol class=\"list-unstyled\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["user"]);
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
        
        $__internal_a00997bc3e961a407da7af86bcf510381152766855401191cbbe6c340af09602->leave($__internal_a00997bc3e961a407da7af86bcf510381152766855401191cbbe6c340af09602_prof);

        
        $__internal_1caf1de14adb55ae2719b4a48b2af9d4dcf3acd62b35d5b9b14822c2f4ed4689->leave($__internal_1caf1de14adb55ae2719b4a48b2af9d4dcf3acd62b35d5b9b14822c2f4ed4689_prof);

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
        return new Twig_Source("<div>
    <div class=\"sidebar-module well\">
        <h4>Other Users</h4>
        <ol class=\"list-unstyled\">
            {% for user in user %}
                <li><a href=\"{{ path('show', {'id':user.id}) }}\">{{ user.username }}</a></li>
            {% endfor %}
        </ol>
    </div>
</div>", "users/others.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/others.html.twig");
    }
}
