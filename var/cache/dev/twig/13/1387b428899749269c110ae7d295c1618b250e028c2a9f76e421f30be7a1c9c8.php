<?php

/* base.html.twig */
class __TwigTemplate_16332c0480739ba7d0803ecfb9949fe4e0c2ab6d83a5c924f19b94b1792db95c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31c78584e4054ac42381df5d7caf35d05732fa8479dd81d7450c4789090d18cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c78584e4054ac42381df5d7caf35d05732fa8479dd81d7450c4789090d18cb->enter($__internal_31c78584e4054ac42381df5d7caf35d05732fa8479dd81d7450c4789090d18cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>tp_symfony</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>

    <!-- asset a rajouter pour asset bootstrap-->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>


    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\"
          integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
</head>
<body>
";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
        integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"
        integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"
        integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\"
        crossorigin=\"anonymous\"></script>

<!-- insertion du hinclude fonction d'autoloader sur les nouveaux users-->
<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/hinclude.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_31c78584e4054ac42381df5d7caf35d05732fa8479dd81d7450c4789090d18cb->leave($__internal_31c78584e4054ac42381df5d7caf35d05732fa8479dd81d7450c4789090d18cb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0ec77def4a972a8f301a66865d66615384c027f47d5110a7f9b9611d9db5061e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ec77def4a972a8f301a66865d66615384c027f47d5110a7f9b9611d9db5061e->enter($__internal_0ec77def4a972a8f301a66865d66615384c027f47d5110a7f9b9611d9db5061e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0ec77def4a972a8f301a66865d66615384c027f47d5110a7f9b9611d9db5061e->leave($__internal_0ec77def4a972a8f301a66865d66615384c027f47d5110a7f9b9611d9db5061e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a965e136322f138c473b754e7ff07e3fcc2d86bf60eaa0009c0d7646589154b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a965e136322f138c473b754e7ff07e3fcc2d86bf60eaa0009c0d7646589154b->enter($__internal_6a965e136322f138c473b754e7ff07e3fcc2d86bf60eaa0009c0d7646589154b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6a965e136322f138c473b754e7ff07e3fcc2d86bf60eaa0009c0d7646589154b->leave($__internal_6a965e136322f138c473b754e7ff07e3fcc2d86bf60eaa0009c0d7646589154b_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dcde93eabf4f55705a34a7897a90ca91aa9dc9c5e725ae20cba79c0e710fe72e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcde93eabf4f55705a34a7897a90ca91aa9dc9c5e725ae20cba79c0e710fe72e->enter($__internal_dcde93eabf4f55705a34a7897a90ca91aa9dc9c5e725ae20cba79c0e710fe72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dcde93eabf4f55705a34a7897a90ca91aa9dc9c5e725ae20cba79c0e710fe72e->leave($__internal_dcde93eabf4f55705a34a7897a90ca91aa9dc9c5e725ae20cba79c0e710fe72e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 18,  90 => 17,  79 => 6,  68 => 30,  55 => 19,  53 => 18,  51 => 17,  41 => 10,  34 => 7,  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/var/www/html/udev_symfony/app/Resources/views/base.html.twig");
    }
}
