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
        $__internal_7c71753f0d410fe940f78b8e51af98a0ee4c110fe7bbe4a15524d0e85dcefe87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c71753f0d410fe940f78b8e51af98a0ee4c110fe7bbe4a15524d0e85dcefe87->enter($__internal_7c71753f0d410fe940f78b8e51af98a0ee4c110fe7bbe4a15524d0e85dcefe87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ee0e48ae5d78bb08b4b3ae64779623065d137aa981441d96e33b43f642bf3b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee0e48ae5d78bb08b4b3ae64779623065d137aa981441d96e33b43f642bf3b07->enter($__internal_ee0e48ae5d78bb08b4b3ae64779623065d137aa981441d96e33b43f642bf3b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7c71753f0d410fe940f78b8e51af98a0ee4c110fe7bbe4a15524d0e85dcefe87->leave($__internal_7c71753f0d410fe940f78b8e51af98a0ee4c110fe7bbe4a15524d0e85dcefe87_prof);

        
        $__internal_ee0e48ae5d78bb08b4b3ae64779623065d137aa981441d96e33b43f642bf3b07->leave($__internal_ee0e48ae5d78bb08b4b3ae64779623065d137aa981441d96e33b43f642bf3b07_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_39ed268c8b14f27540f272585f9240b94131a43f4eff3d539e62c70d27ea9ea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39ed268c8b14f27540f272585f9240b94131a43f4eff3d539e62c70d27ea9ea8->enter($__internal_39ed268c8b14f27540f272585f9240b94131a43f4eff3d539e62c70d27ea9ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d1b0f599b9405ed8f7f6c9e2b85de568c8267909c97623e0b9057785941bc708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b0f599b9405ed8f7f6c9e2b85de568c8267909c97623e0b9057785941bc708->enter($__internal_d1b0f599b9405ed8f7f6c9e2b85de568c8267909c97623e0b9057785941bc708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d1b0f599b9405ed8f7f6c9e2b85de568c8267909c97623e0b9057785941bc708->leave($__internal_d1b0f599b9405ed8f7f6c9e2b85de568c8267909c97623e0b9057785941bc708_prof);

        
        $__internal_39ed268c8b14f27540f272585f9240b94131a43f4eff3d539e62c70d27ea9ea8->leave($__internal_39ed268c8b14f27540f272585f9240b94131a43f4eff3d539e62c70d27ea9ea8_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_6272efb7203a60d1c420eb0092d2dabca5b6bf076ecd0b6904ee7dfa6fa49314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6272efb7203a60d1c420eb0092d2dabca5b6bf076ecd0b6904ee7dfa6fa49314->enter($__internal_6272efb7203a60d1c420eb0092d2dabca5b6bf076ecd0b6904ee7dfa6fa49314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25da8d1a31d77b8df9d1768694c4964e7f1559d0aed7bcac731c21f18700a9a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25da8d1a31d77b8df9d1768694c4964e7f1559d0aed7bcac731c21f18700a9a3->enter($__internal_25da8d1a31d77b8df9d1768694c4964e7f1559d0aed7bcac731c21f18700a9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_25da8d1a31d77b8df9d1768694c4964e7f1559d0aed7bcac731c21f18700a9a3->leave($__internal_25da8d1a31d77b8df9d1768694c4964e7f1559d0aed7bcac731c21f18700a9a3_prof);

        
        $__internal_6272efb7203a60d1c420eb0092d2dabca5b6bf076ecd0b6904ee7dfa6fa49314->leave($__internal_6272efb7203a60d1c420eb0092d2dabca5b6bf076ecd0b6904ee7dfa6fa49314_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1140f5f0f4139e9947abfc5efa5f7483b6a96bddedd8911e47e2e7771312c06a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1140f5f0f4139e9947abfc5efa5f7483b6a96bddedd8911e47e2e7771312c06a->enter($__internal_1140f5f0f4139e9947abfc5efa5f7483b6a96bddedd8911e47e2e7771312c06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_881d819afe6156d88a28dae0c6135e1cd185d28b848ef55253638046d8fce01b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881d819afe6156d88a28dae0c6135e1cd185d28b848ef55253638046d8fce01b->enter($__internal_881d819afe6156d88a28dae0c6135e1cd185d28b848ef55253638046d8fce01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_881d819afe6156d88a28dae0c6135e1cd185d28b848ef55253638046d8fce01b->leave($__internal_881d819afe6156d88a28dae0c6135e1cd185d28b848ef55253638046d8fce01b_prof);

        
        $__internal_1140f5f0f4139e9947abfc5efa5f7483b6a96bddedd8911e47e2e7771312c06a->leave($__internal_1140f5f0f4139e9947abfc5efa5f7483b6a96bddedd8911e47e2e7771312c06a_prof);

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
