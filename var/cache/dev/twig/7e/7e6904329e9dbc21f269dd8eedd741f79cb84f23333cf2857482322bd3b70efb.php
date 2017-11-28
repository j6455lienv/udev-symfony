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
        $__internal_4a61b2e3765145a2b404c256c781b319197ab629f8418a634a4edd865114c99b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a61b2e3765145a2b404c256c781b319197ab629f8418a634a4edd865114c99b->enter($__internal_4a61b2e3765145a2b404c256c781b319197ab629f8418a634a4edd865114c99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_0c302a059c012bd2b85f48c993665229c298a1559a8b46a604ef7c4164c7cfd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c302a059c012bd2b85f48c993665229c298a1559a8b46a604ef7c4164c7cfd9->enter($__internal_0c302a059c012bd2b85f48c993665229c298a1559a8b46a604ef7c4164c7cfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4a61b2e3765145a2b404c256c781b319197ab629f8418a634a4edd865114c99b->leave($__internal_4a61b2e3765145a2b404c256c781b319197ab629f8418a634a4edd865114c99b_prof);

        
        $__internal_0c302a059c012bd2b85f48c993665229c298a1559a8b46a604ef7c4164c7cfd9->leave($__internal_0c302a059c012bd2b85f48c993665229c298a1559a8b46a604ef7c4164c7cfd9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2069fd479505ca8b2ce94af03c77fd478a71ba705c33dc12a7669c1d1db14352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2069fd479505ca8b2ce94af03c77fd478a71ba705c33dc12a7669c1d1db14352->enter($__internal_2069fd479505ca8b2ce94af03c77fd478a71ba705c33dc12a7669c1d1db14352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_accca39643a20c7a16788d4ee8475c42badc03e3da04590b7d46c32ad6c299b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_accca39643a20c7a16788d4ee8475c42badc03e3da04590b7d46c32ad6c299b8->enter($__internal_accca39643a20c7a16788d4ee8475c42badc03e3da04590b7d46c32ad6c299b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_accca39643a20c7a16788d4ee8475c42badc03e3da04590b7d46c32ad6c299b8->leave($__internal_accca39643a20c7a16788d4ee8475c42badc03e3da04590b7d46c32ad6c299b8_prof);

        
        $__internal_2069fd479505ca8b2ce94af03c77fd478a71ba705c33dc12a7669c1d1db14352->leave($__internal_2069fd479505ca8b2ce94af03c77fd478a71ba705c33dc12a7669c1d1db14352_prof);

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
