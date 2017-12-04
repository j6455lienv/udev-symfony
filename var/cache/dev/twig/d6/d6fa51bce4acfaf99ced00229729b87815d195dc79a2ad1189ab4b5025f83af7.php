<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_d1419c3735a8f0a854e61092459ae24b384c5060ff25d21320dada7118d09894 extends Twig_Template
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
        $__internal_6abfe124394f5ea281daace39ae3cc9aadb3abaad0c373d7b63ac109363837ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6abfe124394f5ea281daace39ae3cc9aadb3abaad0c373d7b63ac109363837ce->enter($__internal_6abfe124394f5ea281daace39ae3cc9aadb3abaad0c373d7b63ac109363837ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_cfa7c85091e22cf780424e922b046042f583646d26eaaa8a1a93ff5a161d22f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa7c85091e22cf780424e922b046042f583646d26eaaa8a1a93ff5a161d22f6->enter($__internal_cfa7c85091e22cf780424e922b046042f583646d26eaaa8a1a93ff5a161d22f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_6abfe124394f5ea281daace39ae3cc9aadb3abaad0c373d7b63ac109363837ce->leave($__internal_6abfe124394f5ea281daace39ae3cc9aadb3abaad0c373d7b63ac109363837ce_prof);

        
        $__internal_cfa7c85091e22cf780424e922b046042f583646d26eaaa8a1a93ff5a161d22f6->leave($__internal_cfa7c85091e22cf780424e922b046042f583646d26eaaa8a1a93ff5a161d22f6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
