<?php

/* base.html.twig~ */
class __TwigTemplate_ea787f81b0450cf71d94897b3a36b436d5025f4728637c77b41d64b1b5de5528 extends Twig_Template
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
        $__internal_ff7700aa41cde2676f3607772c1841f71171253bde5208093f7f91980eba4b59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff7700aa41cde2676f3607772c1841f71171253bde5208093f7f91980eba4b59->enter($__internal_ff7700aa41cde2676f3607772c1841f71171253bde5208093f7f91980eba4b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig~"));

        $__internal_9e5d58a9973210c42fad6ae92917c60324a5c58256182f9adaaa1f9359b13754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e5d58a9973210c42fad6ae92917c60324a5c58256182f9adaaa1f9359b13754->enter($__internal_9e5d58a9973210c42fad6ae92917c60324a5c58256182f9adaaa1f9359b13754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig~"));

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
        
        $__internal_ff7700aa41cde2676f3607772c1841f71171253bde5208093f7f91980eba4b59->leave($__internal_ff7700aa41cde2676f3607772c1841f71171253bde5208093f7f91980eba4b59_prof);

        
        $__internal_9e5d58a9973210c42fad6ae92917c60324a5c58256182f9adaaa1f9359b13754->leave($__internal_9e5d58a9973210c42fad6ae92917c60324a5c58256182f9adaaa1f9359b13754_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_40990098e7ce3b97af07d9db9b5b18cb50d4915f15acd99fd2e85567106e5e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40990098e7ce3b97af07d9db9b5b18cb50d4915f15acd99fd2e85567106e5e59->enter($__internal_40990098e7ce3b97af07d9db9b5b18cb50d4915f15acd99fd2e85567106e5e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0b182a4355e4ac056f2a545f9028af705040b4c29345208886f04baa8691fb43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b182a4355e4ac056f2a545f9028af705040b4c29345208886f04baa8691fb43->enter($__internal_0b182a4355e4ac056f2a545f9028af705040b4c29345208886f04baa8691fb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome UDEV!";
        
        $__internal_0b182a4355e4ac056f2a545f9028af705040b4c29345208886f04baa8691fb43->leave($__internal_0b182a4355e4ac056f2a545f9028af705040b4c29345208886f04baa8691fb43_prof);

        
        $__internal_40990098e7ce3b97af07d9db9b5b18cb50d4915f15acd99fd2e85567106e5e59->leave($__internal_40990098e7ce3b97af07d9db9b5b18cb50d4915f15acd99fd2e85567106e5e59_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8419492c1d4ab7940e5288bbb40771d47651a7e87ecd1e036411487c7a779f75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8419492c1d4ab7940e5288bbb40771d47651a7e87ecd1e036411487c7a779f75->enter($__internal_8419492c1d4ab7940e5288bbb40771d47651a7e87ecd1e036411487c7a779f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_11d9cf44e6895facfc6448c6c60fd3552e6ad3765492c77628e310385043383e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d9cf44e6895facfc6448c6c60fd3552e6ad3765492c77628e310385043383e->enter($__internal_11d9cf44e6895facfc6448c6c60fd3552e6ad3765492c77628e310385043383e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_11d9cf44e6895facfc6448c6c60fd3552e6ad3765492c77628e310385043383e->leave($__internal_11d9cf44e6895facfc6448c6c60fd3552e6ad3765492c77628e310385043383e_prof);

        
        $__internal_8419492c1d4ab7940e5288bbb40771d47651a7e87ecd1e036411487c7a779f75->leave($__internal_8419492c1d4ab7940e5288bbb40771d47651a7e87ecd1e036411487c7a779f75_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_73451c1c84c2885274449565a32bd684b8063d32e8a1ec7f45dffa185a45e90c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73451c1c84c2885274449565a32bd684b8063d32e8a1ec7f45dffa185a45e90c->enter($__internal_73451c1c84c2885274449565a32bd684b8063d32e8a1ec7f45dffa185a45e90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5cf5121ba7768a96db62a254aab515c9d97eb3207966052deb99148216d0129f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf5121ba7768a96db62a254aab515c9d97eb3207966052deb99148216d0129f->enter($__internal_5cf5121ba7768a96db62a254aab515c9d97eb3207966052deb99148216d0129f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5cf5121ba7768a96db62a254aab515c9d97eb3207966052deb99148216d0129f->leave($__internal_5cf5121ba7768a96db62a254aab515c9d97eb3207966052deb99148216d0129f_prof);

        
        $__internal_73451c1c84c2885274449565a32bd684b8063d32e8a1ec7f45dffa185a45e90c->leave($__internal_73451c1c84c2885274449565a32bd684b8063d32e8a1ec7f45dffa185a45e90c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7e221e0d9e60017a402001b75206a1476dc84e4569c6a2a135e51f690e2213ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e221e0d9e60017a402001b75206a1476dc84e4569c6a2a135e51f690e2213ea->enter($__internal_7e221e0d9e60017a402001b75206a1476dc84e4569c6a2a135e51f690e2213ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_79f5849742e23d599fafb7df9ccc4484c1e8bd69188545f5f7a9674860cdbbd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f5849742e23d599fafb7df9ccc4484c1e8bd69188545f5f7a9674860cdbbd8->enter($__internal_79f5849742e23d599fafb7df9ccc4484c1e8bd69188545f5f7a9674860cdbbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_79f5849742e23d599fafb7df9ccc4484c1e8bd69188545f5f7a9674860cdbbd8->leave($__internal_79f5849742e23d599fafb7df9ccc4484c1e8bd69188545f5f7a9674860cdbbd8_prof);

        
        $__internal_7e221e0d9e60017a402001b75206a1476dc84e4569c6a2a135e51f690e2213ea->leave($__internal_7e221e0d9e60017a402001b75206a1476dc84e4569c6a2a135e51f690e2213ea_prof);

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
