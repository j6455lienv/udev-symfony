<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_dfa6e62f2c0243eb714c74783fdc36babc02b76e29ddac79eefee9c3c6fab42a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6effc5311cf16199011c684c0c956cb989f4720455fd11e95430d5c99ea43eac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6effc5311cf16199011c684c0c956cb989f4720455fd11e95430d5c99ea43eac->enter($__internal_6effc5311cf16199011c684c0c956cb989f4720455fd11e95430d5c99ea43eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? null), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? null), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? null), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6effc5311cf16199011c684c0c956cb989f4720455fd11e95430d5c99ea43eac->leave($__internal_6effc5311cf16199011c684c0c956cb989f4720455fd11e95430d5c99ea43eac_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_5fb4a18f4f7b9cb471e407bdce22d18969387a63ed770c57171366d76750085a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb4a18f4f7b9cb471e407bdce22d18969387a63ed770c57171366d76750085a->enter($__internal_5fb4a18f4f7b9cb471e407bdce22d18969387a63ed770c57171366d76750085a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? null), ($context["about"] ?? null), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? null), ($context["about"] ?? null), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_5fb4a18f4f7b9cb471e407bdce22d18969387a63ed770c57171366d76750085a->leave($__internal_5fb4a18f4f7b9cb471e407bdce22d18969387a63ed770c57171366d76750085a_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f088ca5e97c10ab2dc7a6e8f497b58edd1082269864c5be62b4ba9c19f068ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f088ca5e97c10ab2dc7a6e8f497b58edd1082269864c5be62b4ba9c19f068ec6->enter($__internal_f088ca5e97c10ab2dc7a6e8f497b58edd1082269864c5be62b4ba9c19f068ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? null), ($context["about"] ?? null), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? null), ($context["about"] ?? null), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_f088ca5e97c10ab2dc7a6e8f497b58edd1082269864c5be62b4ba9c19f068ec6->leave($__internal_f088ca5e97c10ab2dc7a6e8f497b58edd1082269864c5be62b4ba9c19f068ec6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  69 => 20,  63 => 19,  52 => 14,  46 => 12,  40 => 11,  33 => 1,  31 => 7,  30 => 6,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Profiler/info.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
