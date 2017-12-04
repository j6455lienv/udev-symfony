<?php

/* base.html.twig */
class __TwigTemplate_a8145061ffda5dc347fa8578d7672e59beabdf3b41dbb17980463d91a72f0bfd extends Twig_Template
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
        $__internal_95a7fc5ee1808b577637937eb35cd82a6cc5db191aa3e6aabda13f00dbca5242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95a7fc5ee1808b577637937eb35cd82a6cc5db191aa3e6aabda13f00dbca5242->enter($__internal_95a7fc5ee1808b577637937eb35cd82a6cc5db191aa3e6aabda13f00dbca5242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fb0542337cb63b9b8ea8c72b4d603883cb3e7b8a63f6ca8b71ed63274d15f603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb0542337cb63b9b8ea8c72b4d603883cb3e7b8a63f6ca8b71ed63274d15f603->enter($__internal_fb0542337cb63b9b8ea8c72b4d603883cb3e7b8a63f6ca8b71ed63274d15f603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_95a7fc5ee1808b577637937eb35cd82a6cc5db191aa3e6aabda13f00dbca5242->leave($__internal_95a7fc5ee1808b577637937eb35cd82a6cc5db191aa3e6aabda13f00dbca5242_prof);

        
        $__internal_fb0542337cb63b9b8ea8c72b4d603883cb3e7b8a63f6ca8b71ed63274d15f603->leave($__internal_fb0542337cb63b9b8ea8c72b4d603883cb3e7b8a63f6ca8b71ed63274d15f603_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86d04ec3ef8453588986e040ba0629ee813d70f8beb96b3889441f56de422f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86d04ec3ef8453588986e040ba0629ee813d70f8beb96b3889441f56de422f66->enter($__internal_86d04ec3ef8453588986e040ba0629ee813d70f8beb96b3889441f56de422f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e2deef8db7111040fbb5730f98fdaaa412def2b2be4dc41b7676b2ce889d2f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2deef8db7111040fbb5730f98fdaaa412def2b2be4dc41b7676b2ce889d2f5b->enter($__internal_e2deef8db7111040fbb5730f98fdaaa412def2b2be4dc41b7676b2ce889d2f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e2deef8db7111040fbb5730f98fdaaa412def2b2be4dc41b7676b2ce889d2f5b->leave($__internal_e2deef8db7111040fbb5730f98fdaaa412def2b2be4dc41b7676b2ce889d2f5b_prof);

        
        $__internal_86d04ec3ef8453588986e040ba0629ee813d70f8beb96b3889441f56de422f66->leave($__internal_86d04ec3ef8453588986e040ba0629ee813d70f8beb96b3889441f56de422f66_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d9d4347c33663b146d32c56663677199280d83a2d43ee8a4ee5605c3c3c4cc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d9d4347c33663b146d32c56663677199280d83a2d43ee8a4ee5605c3c3c4cc5->enter($__internal_0d9d4347c33663b146d32c56663677199280d83a2d43ee8a4ee5605c3c3c4cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13bf9b1996cbf3a9e1326cb71966b8b6b928024391a57855413ef9ce9a988336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13bf9b1996cbf3a9e1326cb71966b8b6b928024391a57855413ef9ce9a988336->enter($__internal_13bf9b1996cbf3a9e1326cb71966b8b6b928024391a57855413ef9ce9a988336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_13bf9b1996cbf3a9e1326cb71966b8b6b928024391a57855413ef9ce9a988336->leave($__internal_13bf9b1996cbf3a9e1326cb71966b8b6b928024391a57855413ef9ce9a988336_prof);

        
        $__internal_0d9d4347c33663b146d32c56663677199280d83a2d43ee8a4ee5605c3c3c4cc5->leave($__internal_0d9d4347c33663b146d32c56663677199280d83a2d43ee8a4ee5605c3c3c4cc5_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5a11534be83aaccfb2cd13d91b85e8b8e0daa545e356e04a5675bc294524ff07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a11534be83aaccfb2cd13d91b85e8b8e0daa545e356e04a5675bc294524ff07->enter($__internal_5a11534be83aaccfb2cd13d91b85e8b8e0daa545e356e04a5675bc294524ff07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bb1008b522021e59bd1b39a85edb19cb1d51600cbf20808a7c2274db1966935c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1008b522021e59bd1b39a85edb19cb1d51600cbf20808a7c2274db1966935c->enter($__internal_bb1008b522021e59bd1b39a85edb19cb1d51600cbf20808a7c2274db1966935c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bb1008b522021e59bd1b39a85edb19cb1d51600cbf20808a7c2274db1966935c->leave($__internal_bb1008b522021e59bd1b39a85edb19cb1d51600cbf20808a7c2274db1966935c_prof);

        
        $__internal_5a11534be83aaccfb2cd13d91b85e8b8e0daa545e356e04a5675bc294524ff07->leave($__internal_5a11534be83aaccfb2cd13d91b85e8b8e0daa545e356e04a5675bc294524ff07_prof);

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
        return array (  119 => 18,  102 => 17,  85 => 6,  71 => 30,  58 => 19,  56 => 18,  54 => 17,  44 => 10,  37 => 7,  35 => 6,  28 => 1,);
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
    <meta charset=\"UTF-8\"/>
    <title>tp_symfony</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>

    <!-- asset a rajouter pour asset bootstrap-->
    <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\"/>


    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\"
          integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
</head>
<body>
{% block body %}{% endblock %}
{% block javascripts %}{% endblock %}
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
        integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"
        integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"
        integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\"
        crossorigin=\"anonymous\"></script>

<!-- insertion du hinclude fonction d'autoloader sur les nouveaux users-->
<script src=\"{{ asset('js/hinclude.js') }}\"></script>
</body>
</html>
", "base.html.twig", "/var/www/html/udev_symfony/app/Resources/views/base.html.twig");
    }
}
