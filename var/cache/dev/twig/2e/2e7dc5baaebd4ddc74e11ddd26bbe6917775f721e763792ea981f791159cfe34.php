<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_25f33fd65cdea225244a4fa5fe9ad30cf4bfdf4e2f3452fb019efa2435d6a7cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad5e8d563d426c6a0d88143928113627b1c1068bd65003fb003537cb0a8cfc47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5e8d563d426c6a0d88143928113627b1c1068bd65003fb003537cb0a8cfc47->enter($__internal_ad5e8d563d426c6a0d88143928113627b1c1068bd65003fb003537cb0a8cfc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_44d474c4c74427eee4fad8f753693f85ef9db6d7c5c65366f01e076f3ea83a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d474c4c74427eee4fad8f753693f85ef9db6d7c5c65366f01e076f3ea83a71->enter($__internal_44d474c4c74427eee4fad8f753693f85ef9db6d7c5c65366f01e076f3ea83a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ad5e8d563d426c6a0d88143928113627b1c1068bd65003fb003537cb0a8cfc47->leave($__internal_ad5e8d563d426c6a0d88143928113627b1c1068bd65003fb003537cb0a8cfc47_prof);

        
        $__internal_44d474c4c74427eee4fad8f753693f85ef9db6d7c5c65366f01e076f3ea83a71->leave($__internal_44d474c4c74427eee4fad8f753693f85ef9db6d7c5c65366f01e076f3ea83a71_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_41301b0a0a4329ada257b5cf7b492762025ef22463165e6b6d97b49ef4a3a9e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41301b0a0a4329ada257b5cf7b492762025ef22463165e6b6d97b49ef4a3a9e9->enter($__internal_41301b0a0a4329ada257b5cf7b492762025ef22463165e6b6d97b49ef4a3a9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7a5aa08a3ad3e174d6538d646d56e37a2d15b593bde8e12fb9ccbfb54366b2e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5aa08a3ad3e174d6538d646d56e37a2d15b593bde8e12fb9ccbfb54366b2e7->enter($__internal_7a5aa08a3ad3e174d6538d646d56e37a2d15b593bde8e12fb9ccbfb54366b2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7a5aa08a3ad3e174d6538d646d56e37a2d15b593bde8e12fb9ccbfb54366b2e7->leave($__internal_7a5aa08a3ad3e174d6538d646d56e37a2d15b593bde8e12fb9ccbfb54366b2e7_prof);

        
        $__internal_41301b0a0a4329ada257b5cf7b492762025ef22463165e6b6d97b49ef4a3a9e9->leave($__internal_41301b0a0a4329ada257b5cf7b492762025ef22463165e6b6d97b49ef4a3a9e9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
