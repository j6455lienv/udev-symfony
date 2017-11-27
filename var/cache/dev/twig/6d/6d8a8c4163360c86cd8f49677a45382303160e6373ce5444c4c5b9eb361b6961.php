<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
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
        $__internal_625448e0f942652caaf96f66af7aff6fa77cdbed23774d66594bb3de7eddc968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_625448e0f942652caaf96f66af7aff6fa77cdbed23774d66594bb3de7eddc968->enter($__internal_625448e0f942652caaf96f66af7aff6fa77cdbed23774d66594bb3de7eddc968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_67fb2a2d09a2db5a978b4ddab22a1d86298a006a69c8bd0a8fd34bdfec970f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67fb2a2d09a2db5a978b4ddab22a1d86298a006a69c8bd0a8fd34bdfec970f9d->enter($__internal_67fb2a2d09a2db5a978b4ddab22a1d86298a006a69c8bd0a8fd34bdfec970f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_625448e0f942652caaf96f66af7aff6fa77cdbed23774d66594bb3de7eddc968->leave($__internal_625448e0f942652caaf96f66af7aff6fa77cdbed23774d66594bb3de7eddc968_prof);

        
        $__internal_67fb2a2d09a2db5a978b4ddab22a1d86298a006a69c8bd0a8fd34bdfec970f9d->leave($__internal_67fb2a2d09a2db5a978b4ddab22a1d86298a006a69c8bd0a8fd34bdfec970f9d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_03b928377bf29e1b16e2cf4616f2eab2bba14075e87daca130380699d1a3115a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b928377bf29e1b16e2cf4616f2eab2bba14075e87daca130380699d1a3115a->enter($__internal_03b928377bf29e1b16e2cf4616f2eab2bba14075e87daca130380699d1a3115a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fb2db0e61c844ffe6de3722b2525e9de3e78e418d921f218951c9225a179712d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb2db0e61c844ffe6de3722b2525e9de3e78e418d921f218951c9225a179712d->enter($__internal_fb2db0e61c844ffe6de3722b2525e9de3e78e418d921f218951c9225a179712d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fb2db0e61c844ffe6de3722b2525e9de3e78e418d921f218951c9225a179712d->leave($__internal_fb2db0e61c844ffe6de3722b2525e9de3e78e418d921f218951c9225a179712d_prof);

        
        $__internal_03b928377bf29e1b16e2cf4616f2eab2bba14075e87daca130380699d1a3115a->leave($__internal_03b928377bf29e1b16e2cf4616f2eab2bba14075e87daca130380699d1a3115a_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_46beb5d0489638fc1fd4747a8eba0ac274b103b90731936044d667cfcdbf8030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46beb5d0489638fc1fd4747a8eba0ac274b103b90731936044d667cfcdbf8030->enter($__internal_46beb5d0489638fc1fd4747a8eba0ac274b103b90731936044d667cfcdbf8030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ed10153ec4473e743c425ffa8fce66757b6789545e3756f53f4cc86acd0cd1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ed10153ec4473e743c425ffa8fce66757b6789545e3756f53f4cc86acd0cd1b->enter($__internal_1ed10153ec4473e743c425ffa8fce66757b6789545e3756f53f4cc86acd0cd1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1ed10153ec4473e743c425ffa8fce66757b6789545e3756f53f4cc86acd0cd1b->leave($__internal_1ed10153ec4473e743c425ffa8fce66757b6789545e3756f53f4cc86acd0cd1b_prof);

        
        $__internal_46beb5d0489638fc1fd4747a8eba0ac274b103b90731936044d667cfcdbf8030->leave($__internal_46beb5d0489638fc1fd4747a8eba0ac274b103b90731936044d667cfcdbf8030_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d3c61aed543126d2bfeb9db92eee856c52cf0f418a830f036c5eeec5ae1f428a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3c61aed543126d2bfeb9db92eee856c52cf0f418a830f036c5eeec5ae1f428a->enter($__internal_d3c61aed543126d2bfeb9db92eee856c52cf0f418a830f036c5eeec5ae1f428a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_db58f46ababe33a4309b610027529f59ddccfe2114d18faee7ee6131cf7b2a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db58f46ababe33a4309b610027529f59ddccfe2114d18faee7ee6131cf7b2a54->enter($__internal_db58f46ababe33a4309b610027529f59ddccfe2114d18faee7ee6131cf7b2a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_db58f46ababe33a4309b610027529f59ddccfe2114d18faee7ee6131cf7b2a54->leave($__internal_db58f46ababe33a4309b610027529f59ddccfe2114d18faee7ee6131cf7b2a54_prof);

        
        $__internal_d3c61aed543126d2bfeb9db92eee856c52cf0f418a830f036c5eeec5ae1f428a->leave($__internal_d3c61aed543126d2bfeb9db92eee856c52cf0f418a830f036c5eeec5ae1f428a_prof);

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
        return array (  112 => 17,  95 => 16,  78 => 6,  57 => 18,  55 => 17,  53 => 16,  44 => 10,  37 => 7,  35 => 6,  28 => 1,);
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
