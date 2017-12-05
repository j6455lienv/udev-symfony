<?php

/* users/userWidget.html.twig */
class __TwigTemplate_e7da768567302dd99ad5e0f70628f96f44b5b56d4feba0bffda8247d62a6b4ea extends Twig_Template
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
        $__internal_f6f6158d1fd849fbeaebc4cf19346f67cb1d96f265592d17fed8a952ae0b2f57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f6158d1fd849fbeaebc4cf19346f67cb1d96f265592d17fed8a952ae0b2f57->enter($__internal_f6f6158d1fd849fbeaebc4cf19346f67cb1d96f265592d17fed8a952ae0b2f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/userWidget.html.twig"));

        // line 1
        echo "<div>
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
        
        $__internal_f6f6158d1fd849fbeaebc4cf19346f67cb1d96f265592d17fed8a952ae0b2f57->leave($__internal_f6f6158d1fd849fbeaebc4cf19346f67cb1d96f265592d17fed8a952ae0b2f57_prof);

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
        return array (  42 => 7,  31 => 5,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "users/userWidget.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/userWidget.html.twig");
    }
}
