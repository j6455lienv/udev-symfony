<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
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
        $__internal_656885c317ab128314a0dcebf8c3b3b004dfd0c1f09f4ae4b6e50c8cb266c3a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_656885c317ab128314a0dcebf8c3b3b004dfd0c1f09f4ae4b6e50c8cb266c3a4->enter($__internal_656885c317ab128314a0dcebf8c3b3b004dfd0c1f09f4ae4b6e50c8cb266c3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a9bda9385db6c6a8dccf080584201db6896e0dd90335ba65670a88ee12bf3fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9bda9385db6c6a8dccf080584201db6896e0dd90335ba65670a88ee12bf3fce->enter($__internal_a9bda9385db6c6a8dccf080584201db6896e0dd90335ba65670a88ee12bf3fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\"
          integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
</head>
<body>
";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
        integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"
        integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"
        integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\"
        crossorigin=\"anonymous\"></script>
</body>
</html>
";
        
        $__internal_656885c317ab128314a0dcebf8c3b3b004dfd0c1f09f4ae4b6e50c8cb266c3a4->leave($__internal_656885c317ab128314a0dcebf8c3b3b004dfd0c1f09f4ae4b6e50c8cb266c3a4_prof);

        
        $__internal_a9bda9385db6c6a8dccf080584201db6896e0dd90335ba65670a88ee12bf3fce->leave($__internal_a9bda9385db6c6a8dccf080584201db6896e0dd90335ba65670a88ee12bf3fce_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_55df2b6d0aee0c563a41dd0758ab8705ed6633c06ce57450e307399d3a98b109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55df2b6d0aee0c563a41dd0758ab8705ed6633c06ce57450e307399d3a98b109->enter($__internal_55df2b6d0aee0c563a41dd0758ab8705ed6633c06ce57450e307399d3a98b109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1eabf0439596933624e6b69f0bbc999ac4aa54c6b6acb7d57cf557025a57afbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eabf0439596933624e6b69f0bbc999ac4aa54c6b6acb7d57cf557025a57afbb->enter($__internal_1eabf0439596933624e6b69f0bbc999ac4aa54c6b6acb7d57cf557025a57afbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "tp_symfony";
        
        $__internal_1eabf0439596933624e6b69f0bbc999ac4aa54c6b6acb7d57cf557025a57afbb->leave($__internal_1eabf0439596933624e6b69f0bbc999ac4aa54c6b6acb7d57cf557025a57afbb_prof);

        
        $__internal_55df2b6d0aee0c563a41dd0758ab8705ed6633c06ce57450e307399d3a98b109->leave($__internal_55df2b6d0aee0c563a41dd0758ab8705ed6633c06ce57450e307399d3a98b109_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2d59d6003dc3f0c8ba3f07724a43d084278da27a9aaaa8e7903001246e378e0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d59d6003dc3f0c8ba3f07724a43d084278da27a9aaaa8e7903001246e378e0a->enter($__internal_2d59d6003dc3f0c8ba3f07724a43d084278da27a9aaaa8e7903001246e378e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4425aae5cd1bdbd9032805abffff4c9e43f4cf1d7639e2e384862578666c77aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4425aae5cd1bdbd9032805abffff4c9e43f4cf1d7639e2e384862578666c77aa->enter($__internal_4425aae5cd1bdbd9032805abffff4c9e43f4cf1d7639e2e384862578666c77aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4425aae5cd1bdbd9032805abffff4c9e43f4cf1d7639e2e384862578666c77aa->leave($__internal_4425aae5cd1bdbd9032805abffff4c9e43f4cf1d7639e2e384862578666c77aa_prof);

        
        $__internal_2d59d6003dc3f0c8ba3f07724a43d084278da27a9aaaa8e7903001246e378e0a->leave($__internal_2d59d6003dc3f0c8ba3f07724a43d084278da27a9aaaa8e7903001246e378e0a_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_56d34a5ebd5dd5678596690228abf9bf0b0f4f595b1506b352fadc09014ac0fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d34a5ebd5dd5678596690228abf9bf0b0f4f595b1506b352fadc09014ac0fb->enter($__internal_56d34a5ebd5dd5678596690228abf9bf0b0f4f595b1506b352fadc09014ac0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d7926c1e11197838eb69269fb90bf9e1c9eddad189d1255de16afb91f7690d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7926c1e11197838eb69269fb90bf9e1c9eddad189d1255de16afb91f7690d0->enter($__internal_9d7926c1e11197838eb69269fb90bf9e1c9eddad189d1255de16afb91f7690d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9d7926c1e11197838eb69269fb90bf9e1c9eddad189d1255de16afb91f7690d0->leave($__internal_9d7926c1e11197838eb69269fb90bf9e1c9eddad189d1255de16afb91f7690d0_prof);

        
        $__internal_56d34a5ebd5dd5678596690228abf9bf0b0f4f595b1506b352fadc09014ac0fb->leave($__internal_56d34a5ebd5dd5678596690228abf9bf0b0f4f595b1506b352fadc09014ac0fb_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8c2b76c3a0348e0c10acb409737d3b499dbb9bb6adc98de0ec2ac07d3e3b987a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c2b76c3a0348e0c10acb409737d3b499dbb9bb6adc98de0ec2ac07d3e3b987a->enter($__internal_8c2b76c3a0348e0c10acb409737d3b499dbb9bb6adc98de0ec2ac07d3e3b987a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1aecb1d81c0dd4094e919a054cffa431a98a3421f03ce54688d95bbc11294ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aecb1d81c0dd4094e919a054cffa431a98a3421f03ce54688d95bbc11294ea9->enter($__internal_1aecb1d81c0dd4094e919a054cffa431a98a3421f03ce54688d95bbc11294ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1aecb1d81c0dd4094e919a054cffa431a98a3421f03ce54688d95bbc11294ea9->leave($__internal_1aecb1d81c0dd4094e919a054cffa431a98a3421f03ce54688d95bbc11294ea9_prof);

        
        $__internal_8c2b76c3a0348e0c10acb409737d3b499dbb9bb6adc98de0ec2ac07d3e3b987a->leave($__internal_8c2b76c3a0348e0c10acb409737d3b499dbb9bb6adc98de0ec2ac07d3e3b987a_prof);

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
        return array (  134 => 17,  117 => 16,  100 => 6,  82 => 5,  61 => 18,  59 => 17,  57 => 16,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
    <title>{% block title %}tp_symfony{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>

    <!-- asset a rajouter pour asset bootstrap-->
    <link href=\"{{ asset('/web/css/main.css') }}\" rel=\"stylesheet\"/>

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
</body>
</html>
", "base.html.twig", "/var/www/html/udev_symfony/app/Resources/views/base.html.twig");
    }
}
