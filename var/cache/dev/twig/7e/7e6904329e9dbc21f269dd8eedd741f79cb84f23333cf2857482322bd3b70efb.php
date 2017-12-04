<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_5a9c0daaed49cd18f26d31efb041d82bd171de4e26091a41793a51bb439abfe6 extends Twig_Template
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
        $__internal_67e7b98bc13111276c730e1f0dc730c07746294e4e861dcace0fbe49a57fd3b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e7b98bc13111276c730e1f0dc730c07746294e4e861dcace0fbe49a57fd3b1->enter($__internal_67e7b98bc13111276c730e1f0dc730c07746294e4e861dcace0fbe49a57fd3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_40904c7c7085985a8408aa6638f58f831f3d164c9a0e50f6e99d6d8d94bbf2b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40904c7c7085985a8408aa6638f58f831f3d164c9a0e50f6e99d6d8d94bbf2b8->enter($__internal_40904c7c7085985a8408aa6638f58f831f3d164c9a0e50f6e99d6d8d94bbf2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_67e7b98bc13111276c730e1f0dc730c07746294e4e861dcace0fbe49a57fd3b1->leave($__internal_67e7b98bc13111276c730e1f0dc730c07746294e4e861dcace0fbe49a57fd3b1_prof);

        
        $__internal_40904c7c7085985a8408aa6638f58f831f3d164c9a0e50f6e99d6d8d94bbf2b8->leave($__internal_40904c7c7085985a8408aa6638f58f831f3d164c9a0e50f6e99d6d8d94bbf2b8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ada820efcf00abb8aa58561e9cd4e88e6ed17e2c6405e553f95cd609294a753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ada820efcf00abb8aa58561e9cd4e88e6ed17e2c6405e553f95cd609294a753->enter($__internal_4ada820efcf00abb8aa58561e9cd4e88e6ed17e2c6405e553f95cd609294a753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_580e3883ee210a9f1846a6a5ff1d41fba566bf355ff3a6cd21b3dc6e7802b549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_580e3883ee210a9f1846a6a5ff1d41fba566bf355ff3a6cd21b3dc6e7802b549->enter($__internal_580e3883ee210a9f1846a6a5ff1d41fba566bf355ff3a6cd21b3dc6e7802b549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_580e3883ee210a9f1846a6a5ff1d41fba566bf355ff3a6cd21b3dc6e7802b549->leave($__internal_580e3883ee210a9f1846a6a5ff1d41fba566bf355ff3a6cd21b3dc6e7802b549_prof);

        
        $__internal_4ada820efcf00abb8aa58561e9cd4e88e6ed17e2c6405e553f95cd609294a753->leave($__internal_4ada820efcf00abb8aa58561e9cd4e88e6ed17e2c6405e553f95cd609294a753_prof);

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
