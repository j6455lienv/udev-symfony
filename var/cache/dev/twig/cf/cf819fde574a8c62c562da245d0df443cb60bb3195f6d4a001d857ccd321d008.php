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
        $__internal_c2d3ebeaeed9732ce4cf27dc3ff34fc86b985433567187d7ae4bb8593d539040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d3ebeaeed9732ce4cf27dc3ff34fc86b985433567187d7ae4bb8593d539040->enter($__internal_c2d3ebeaeed9732ce4cf27dc3ff34fc86b985433567187d7ae4bb8593d539040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0a8e373ac561be2bfab5851149d61f71817836e648ed311ce042fb7186529385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8e373ac561be2bfab5851149d61f71817836e648ed311ce042fb7186529385->enter($__internal_0a8e373ac561be2bfab5851149d61f71817836e648ed311ce042fb7186529385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c2d3ebeaeed9732ce4cf27dc3ff34fc86b985433567187d7ae4bb8593d539040->leave($__internal_c2d3ebeaeed9732ce4cf27dc3ff34fc86b985433567187d7ae4bb8593d539040_prof);

        
        $__internal_0a8e373ac561be2bfab5851149d61f71817836e648ed311ce042fb7186529385->leave($__internal_0a8e373ac561be2bfab5851149d61f71817836e648ed311ce042fb7186529385_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1bf31955edae1ea1c86cbe0a7583b154bda9c75c48cb709ed3f4e4652e9621cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf31955edae1ea1c86cbe0a7583b154bda9c75c48cb709ed3f4e4652e9621cb->enter($__internal_1bf31955edae1ea1c86cbe0a7583b154bda9c75c48cb709ed3f4e4652e9621cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_715d87932fb73e55d65efb8acade1af83ac8fd115b7912063083bbec40413071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715d87932fb73e55d65efb8acade1af83ac8fd115b7912063083bbec40413071->enter($__internal_715d87932fb73e55d65efb8acade1af83ac8fd115b7912063083bbec40413071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_715d87932fb73e55d65efb8acade1af83ac8fd115b7912063083bbec40413071->leave($__internal_715d87932fb73e55d65efb8acade1af83ac8fd115b7912063083bbec40413071_prof);

        
        $__internal_1bf31955edae1ea1c86cbe0a7583b154bda9c75c48cb709ed3f4e4652e9621cb->leave($__internal_1bf31955edae1ea1c86cbe0a7583b154bda9c75c48cb709ed3f4e4652e9621cb_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_021130df68596eed41ddfbf9c1bdd950e15eff4be7383c8938cd4e2d14cf9469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_021130df68596eed41ddfbf9c1bdd950e15eff4be7383c8938cd4e2d14cf9469->enter($__internal_021130df68596eed41ddfbf9c1bdd950e15eff4be7383c8938cd4e2d14cf9469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2be059191e2e896ebd3ae5645f5cbd0972c755f729fe7cab4d324ce57d11984b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be059191e2e896ebd3ae5645f5cbd0972c755f729fe7cab4d324ce57d11984b->enter($__internal_2be059191e2e896ebd3ae5645f5cbd0972c755f729fe7cab4d324ce57d11984b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2be059191e2e896ebd3ae5645f5cbd0972c755f729fe7cab4d324ce57d11984b->leave($__internal_2be059191e2e896ebd3ae5645f5cbd0972c755f729fe7cab4d324ce57d11984b_prof);

        
        $__internal_021130df68596eed41ddfbf9c1bdd950e15eff4be7383c8938cd4e2d14cf9469->leave($__internal_021130df68596eed41ddfbf9c1bdd950e15eff4be7383c8938cd4e2d14cf9469_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f947e0f94882ab41bd7d05567fc43d752ceac08da609e91ce4c5eb7a02bd0dc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f947e0f94882ab41bd7d05567fc43d752ceac08da609e91ce4c5eb7a02bd0dc1->enter($__internal_f947e0f94882ab41bd7d05567fc43d752ceac08da609e91ce4c5eb7a02bd0dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b96a99be269e2469d96212d1f7eecd37739c8f1cee50924eadf8b9b405083c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96a99be269e2469d96212d1f7eecd37739c8f1cee50924eadf8b9b405083c3a->enter($__internal_b96a99be269e2469d96212d1f7eecd37739c8f1cee50924eadf8b9b405083c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b96a99be269e2469d96212d1f7eecd37739c8f1cee50924eadf8b9b405083c3a->leave($__internal_b96a99be269e2469d96212d1f7eecd37739c8f1cee50924eadf8b9b405083c3a_prof);

        
        $__internal_f947e0f94882ab41bd7d05567fc43d752ceac08da609e91ce4c5eb7a02bd0dc1->leave($__internal_f947e0f94882ab41bd7d05567fc43d752ceac08da609e91ce4c5eb7a02bd0dc1_prof);

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
