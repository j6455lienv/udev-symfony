<?php

/* base.html.twig~ */
class __TwigTemplate_8c6559d38f8dbfe49c095d5ef92d7383b577b464e25dc6f2c66b7a0f56291db7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_349397eb450e53ebbebc3081645e2c818709eb04ae592cc1d6b65bef6b732789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_349397eb450e53ebbebc3081645e2c818709eb04ae592cc1d6b65bef6b732789->enter($__internal_349397eb450e53ebbebc3081645e2c818709eb04ae592cc1d6b65bef6b732789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig~"));

        $__internal_472752e7c913f37287579df42244fd37098462188689f80d63076f5607c9ac74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472752e7c913f37287579df42244fd37098462188689f80d63076f5607c9ac74->enter($__internal_472752e7c913f37287579df42244fd37098462188689f80d63076f5607c9ac74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig~"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_349397eb450e53ebbebc3081645e2c818709eb04ae592cc1d6b65bef6b732789->leave($__internal_349397eb450e53ebbebc3081645e2c818709eb04ae592cc1d6b65bef6b732789_prof);

        
        $__internal_472752e7c913f37287579df42244fd37098462188689f80d63076f5607c9ac74->leave($__internal_472752e7c913f37287579df42244fd37098462188689f80d63076f5607c9ac74_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_92af76e936e575c9aa2c8373ebfaf8202ab7ae52b9fff3f53236f3734ffe26af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92af76e936e575c9aa2c8373ebfaf8202ab7ae52b9fff3f53236f3734ffe26af->enter($__internal_92af76e936e575c9aa2c8373ebfaf8202ab7ae52b9fff3f53236f3734ffe26af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9618ae2215ed8004c828e75cdcc2b5f845b7be57b6fc4f2df52e9a1b7c5ae287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9618ae2215ed8004c828e75cdcc2b5f845b7be57b6fc4f2df52e9a1b7c5ae287->enter($__internal_9618ae2215ed8004c828e75cdcc2b5f845b7be57b6fc4f2df52e9a1b7c5ae287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome UDEV!";
        
        $__internal_9618ae2215ed8004c828e75cdcc2b5f845b7be57b6fc4f2df52e9a1b7c5ae287->leave($__internal_9618ae2215ed8004c828e75cdcc2b5f845b7be57b6fc4f2df52e9a1b7c5ae287_prof);

        
        $__internal_92af76e936e575c9aa2c8373ebfaf8202ab7ae52b9fff3f53236f3734ffe26af->leave($__internal_92af76e936e575c9aa2c8373ebfaf8202ab7ae52b9fff3f53236f3734ffe26af_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_631a88cc3898d6a8ba80e40e019bcb38ea2915f8837ab3336e7b8773e730989c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_631a88cc3898d6a8ba80e40e019bcb38ea2915f8837ab3336e7b8773e730989c->enter($__internal_631a88cc3898d6a8ba80e40e019bcb38ea2915f8837ab3336e7b8773e730989c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d5fb3331403e5d5ce61b8f5ae1b97b99f1aa5899c919779736564a77f4fb6d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5fb3331403e5d5ce61b8f5ae1b97b99f1aa5899c919779736564a77f4fb6d48->enter($__internal_d5fb3331403e5d5ce61b8f5ae1b97b99f1aa5899c919779736564a77f4fb6d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d5fb3331403e5d5ce61b8f5ae1b97b99f1aa5899c919779736564a77f4fb6d48->leave($__internal_d5fb3331403e5d5ce61b8f5ae1b97b99f1aa5899c919779736564a77f4fb6d48_prof);

        
        $__internal_631a88cc3898d6a8ba80e40e019bcb38ea2915f8837ab3336e7b8773e730989c->leave($__internal_631a88cc3898d6a8ba80e40e019bcb38ea2915f8837ab3336e7b8773e730989c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9b66e5c4ef79ac7659ac8821971626f1c9e68ceae3b6e5c5cd3e39132fb8f64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9b66e5c4ef79ac7659ac8821971626f1c9e68ceae3b6e5c5cd3e39132fb8f64->enter($__internal_d9b66e5c4ef79ac7659ac8821971626f1c9e68ceae3b6e5c5cd3e39132fb8f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ee5cb1c601ae5e78c5291129f15c693f71fa203452c6b52c9c039c2f1db16e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee5cb1c601ae5e78c5291129f15c693f71fa203452c6b52c9c039c2f1db16e9->enter($__internal_9ee5cb1c601ae5e78c5291129f15c693f71fa203452c6b52c9c039c2f1db16e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9ee5cb1c601ae5e78c5291129f15c693f71fa203452c6b52c9c039c2f1db16e9->leave($__internal_9ee5cb1c601ae5e78c5291129f15c693f71fa203452c6b52c9c039c2f1db16e9_prof);

        
        $__internal_d9b66e5c4ef79ac7659ac8821971626f1c9e68ceae3b6e5c5cd3e39132fb8f64->leave($__internal_d9b66e5c4ef79ac7659ac8821971626f1c9e68ceae3b6e5c5cd3e39132fb8f64_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_28211238c61f9ee50f52b9552602203948cc771509f28e8f75176ca5f24f4955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28211238c61f9ee50f52b9552602203948cc771509f28e8f75176ca5f24f4955->enter($__internal_28211238c61f9ee50f52b9552602203948cc771509f28e8f75176ca5f24f4955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8794650326144790735c93ca86987bdcebc303b6be54715ce202ab52496e1334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8794650326144790735c93ca86987bdcebc303b6be54715ce202ab52496e1334->enter($__internal_8794650326144790735c93ca86987bdcebc303b6be54715ce202ab52496e1334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8794650326144790735c93ca86987bdcebc303b6be54715ce202ab52496e1334->leave($__internal_8794650326144790735c93ca86987bdcebc303b6be54715ce202ab52496e1334_prof);

        
        $__internal_28211238c61f9ee50f52b9552602203948cc771509f28e8f75176ca5f24f4955->leave($__internal_28211238c61f9ee50f52b9552602203948cc771509f28e8f75176ca5f24f4955_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig~";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome UDEV!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig~", "/var/www/html/udev_symfony/app/Resources/views/base.html.twig~");
    }
}
