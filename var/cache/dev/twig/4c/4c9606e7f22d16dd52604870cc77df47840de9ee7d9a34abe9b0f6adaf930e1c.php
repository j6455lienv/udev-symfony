<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_fb031c3f53f3180a846c3af6d0ddc9bc93284d039028c01b5e95b74a76957808 extends Twig_Template
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
        $__internal_e72f483578c87efb36db01bd70cb2f993899da2fbe73e553a4ca9fed56749003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72f483578c87efb36db01bd70cb2f993899da2fbe73e553a4ca9fed56749003->enter($__internal_e72f483578c87efb36db01bd70cb2f993899da2fbe73e553a4ca9fed56749003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_d56dc9d5b2a092379e5102c2963b897e0d893ba5fa5cff9b16e5ce6b129e41a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56dc9d5b2a092379e5102c2963b897e0d893ba5fa5cff9b16e5ce6b129e41a8->enter($__internal_d56dc9d5b2a092379e5102c2963b897e0d893ba5fa5cff9b16e5ce6b129e41a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_e72f483578c87efb36db01bd70cb2f993899da2fbe73e553a4ca9fed56749003->leave($__internal_e72f483578c87efb36db01bd70cb2f993899da2fbe73e553a4ca9fed56749003_prof);

        
        $__internal_d56dc9d5b2a092379e5102c2963b897e0d893ba5fa5cff9b16e5ce6b129e41a8->leave($__internal_d56dc9d5b2a092379e5102c2963b897e0d893ba5fa5cff9b16e5ce6b129e41a8_prof);

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
