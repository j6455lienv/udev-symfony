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
        $__internal_4367b93724b729fc697a3539d90e10a83830c771e99e607f3311f2c7141dcef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4367b93724b729fc697a3539d90e10a83830c771e99e607f3311f2c7141dcef5->enter($__internal_4367b93724b729fc697a3539d90e10a83830c771e99e607f3311f2c7141dcef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7e4d0764e811709627442be457f9bfa1145f90a573c6e151a1a810d89040741e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4d0764e811709627442be457f9bfa1145f90a573c6e151a1a810d89040741e->enter($__internal_7e4d0764e811709627442be457f9bfa1145f90a573c6e151a1a810d89040741e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4367b93724b729fc697a3539d90e10a83830c771e99e607f3311f2c7141dcef5->leave($__internal_4367b93724b729fc697a3539d90e10a83830c771e99e607f3311f2c7141dcef5_prof);

        
        $__internal_7e4d0764e811709627442be457f9bfa1145f90a573c6e151a1a810d89040741e->leave($__internal_7e4d0764e811709627442be457f9bfa1145f90a573c6e151a1a810d89040741e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9c8feee84b7d6987a8421c6b7178413a46c755d220ac5c7e35626bc96ca27587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c8feee84b7d6987a8421c6b7178413a46c755d220ac5c7e35626bc96ca27587->enter($__internal_9c8feee84b7d6987a8421c6b7178413a46c755d220ac5c7e35626bc96ca27587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0cc380d7d4818a789b825aafbcbc2ec5f3e663fca9b2b1864ec777a9285fdffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc380d7d4818a789b825aafbcbc2ec5f3e663fca9b2b1864ec777a9285fdffb->enter($__internal_0cc380d7d4818a789b825aafbcbc2ec5f3e663fca9b2b1864ec777a9285fdffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0cc380d7d4818a789b825aafbcbc2ec5f3e663fca9b2b1864ec777a9285fdffb->leave($__internal_0cc380d7d4818a789b825aafbcbc2ec5f3e663fca9b2b1864ec777a9285fdffb_prof);

        
        $__internal_9c8feee84b7d6987a8421c6b7178413a46c755d220ac5c7e35626bc96ca27587->leave($__internal_9c8feee84b7d6987a8421c6b7178413a46c755d220ac5c7e35626bc96ca27587_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2ffaf09225d89dae2981d7f1188e433aa045c83d00ae8719af532fb3b7fa654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ffaf09225d89dae2981d7f1188e433aa045c83d00ae8719af532fb3b7fa654->enter($__internal_d2ffaf09225d89dae2981d7f1188e433aa045c83d00ae8719af532fb3b7fa654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6c0343bc22bea14fcbabbdacc28e2bad1285f3934a0d85ed34bc56dac2704200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c0343bc22bea14fcbabbdacc28e2bad1285f3934a0d85ed34bc56dac2704200->enter($__internal_6c0343bc22bea14fcbabbdacc28e2bad1285f3934a0d85ed34bc56dac2704200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6c0343bc22bea14fcbabbdacc28e2bad1285f3934a0d85ed34bc56dac2704200->leave($__internal_6c0343bc22bea14fcbabbdacc28e2bad1285f3934a0d85ed34bc56dac2704200_prof);

        
        $__internal_d2ffaf09225d89dae2981d7f1188e433aa045c83d00ae8719af532fb3b7fa654->leave($__internal_d2ffaf09225d89dae2981d7f1188e433aa045c83d00ae8719af532fb3b7fa654_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_db22eeda568b36b9b99bd764ce4c2dd928b9f1e1af5b8b7c1363bbbac3e14ee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db22eeda568b36b9b99bd764ce4c2dd928b9f1e1af5b8b7c1363bbbac3e14ee2->enter($__internal_db22eeda568b36b9b99bd764ce4c2dd928b9f1e1af5b8b7c1363bbbac3e14ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bd91d46eed55f35b25bb2f61887ae49e18994487fa22299a969d668f9b2f7243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd91d46eed55f35b25bb2f61887ae49e18994487fa22299a969d668f9b2f7243->enter($__internal_bd91d46eed55f35b25bb2f61887ae49e18994487fa22299a969d668f9b2f7243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bd91d46eed55f35b25bb2f61887ae49e18994487fa22299a969d668f9b2f7243->leave($__internal_bd91d46eed55f35b25bb2f61887ae49e18994487fa22299a969d668f9b2f7243_prof);

        
        $__internal_db22eeda568b36b9b99bd764ce4c2dd928b9f1e1af5b8b7c1363bbbac3e14ee2->leave($__internal_db22eeda568b36b9b99bd764ce4c2dd928b9f1e1af5b8b7c1363bbbac3e14ee2_prof);

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
