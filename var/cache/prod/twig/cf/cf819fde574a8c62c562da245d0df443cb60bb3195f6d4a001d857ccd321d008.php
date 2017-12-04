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
        $__internal_cbda0199220612031a2b0bee99a184bf52ffc463c8f945cc429a65d7bb2a1a49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbda0199220612031a2b0bee99a184bf52ffc463c8f945cc429a65d7bb2a1a49->enter($__internal_cbda0199220612031a2b0bee99a184bf52ffc463c8f945cc429a65d7bb2a1a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7f24f206a6db1f0d2002ebf0973d3cadb8bbbe9bdf41f4ac0f8f6be7fbf9f308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f24f206a6db1f0d2002ebf0973d3cadb8bbbe9bdf41f4ac0f8f6be7fbf9f308->enter($__internal_7f24f206a6db1f0d2002ebf0973d3cadb8bbbe9bdf41f4ac0f8f6be7fbf9f308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_cbda0199220612031a2b0bee99a184bf52ffc463c8f945cc429a65d7bb2a1a49->leave($__internal_cbda0199220612031a2b0bee99a184bf52ffc463c8f945cc429a65d7bb2a1a49_prof);

        
        $__internal_7f24f206a6db1f0d2002ebf0973d3cadb8bbbe9bdf41f4ac0f8f6be7fbf9f308->leave($__internal_7f24f206a6db1f0d2002ebf0973d3cadb8bbbe9bdf41f4ac0f8f6be7fbf9f308_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ef25c2143847688744dcd1430efd17c4509699765b42038a2229c42b6204c9db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef25c2143847688744dcd1430efd17c4509699765b42038a2229c42b6204c9db->enter($__internal_ef25c2143847688744dcd1430efd17c4509699765b42038a2229c42b6204c9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d702681dc14eeb7c2556e4b1f60cd36e4f8acf836962977e3cab2fb84e59b342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d702681dc14eeb7c2556e4b1f60cd36e4f8acf836962977e3cab2fb84e59b342->enter($__internal_d702681dc14eeb7c2556e4b1f60cd36e4f8acf836962977e3cab2fb84e59b342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d702681dc14eeb7c2556e4b1f60cd36e4f8acf836962977e3cab2fb84e59b342->leave($__internal_d702681dc14eeb7c2556e4b1f60cd36e4f8acf836962977e3cab2fb84e59b342_prof);

        
        $__internal_ef25c2143847688744dcd1430efd17c4509699765b42038a2229c42b6204c9db->leave($__internal_ef25c2143847688744dcd1430efd17c4509699765b42038a2229c42b6204c9db_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_be41d22d82b36198f7a0f2d66839bac647b96c0b2ecc463b4ed1b430f91ca4c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be41d22d82b36198f7a0f2d66839bac647b96c0b2ecc463b4ed1b430f91ca4c2->enter($__internal_be41d22d82b36198f7a0f2d66839bac647b96c0b2ecc463b4ed1b430f91ca4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5090768ef8f0c71e2c80002d090ff47b8c16425c7b34cdc9efba0c2c92b423c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5090768ef8f0c71e2c80002d090ff47b8c16425c7b34cdc9efba0c2c92b423c1->enter($__internal_5090768ef8f0c71e2c80002d090ff47b8c16425c7b34cdc9efba0c2c92b423c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5090768ef8f0c71e2c80002d090ff47b8c16425c7b34cdc9efba0c2c92b423c1->leave($__internal_5090768ef8f0c71e2c80002d090ff47b8c16425c7b34cdc9efba0c2c92b423c1_prof);

        
        $__internal_be41d22d82b36198f7a0f2d66839bac647b96c0b2ecc463b4ed1b430f91ca4c2->leave($__internal_be41d22d82b36198f7a0f2d66839bac647b96c0b2ecc463b4ed1b430f91ca4c2_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3e8f9b36441699a5f59552a0d1290371c6bbd8acf46849e3568ed6dcaf953a6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e8f9b36441699a5f59552a0d1290371c6bbd8acf46849e3568ed6dcaf953a6e->enter($__internal_3e8f9b36441699a5f59552a0d1290371c6bbd8acf46849e3568ed6dcaf953a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f1f7bd050e70df699c50fa5e01c4995c31ba25bedca7e08c520881e21b22c3ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f7bd050e70df699c50fa5e01c4995c31ba25bedca7e08c520881e21b22c3ad->enter($__internal_f1f7bd050e70df699c50fa5e01c4995c31ba25bedca7e08c520881e21b22c3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f1f7bd050e70df699c50fa5e01c4995c31ba25bedca7e08c520881e21b22c3ad->leave($__internal_f1f7bd050e70df699c50fa5e01c4995c31ba25bedca7e08c520881e21b22c3ad_prof);

        
        $__internal_3e8f9b36441699a5f59552a0d1290371c6bbd8acf46849e3568ed6dcaf953a6e->leave($__internal_3e8f9b36441699a5f59552a0d1290371c6bbd8acf46849e3568ed6dcaf953a6e_prof);

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
