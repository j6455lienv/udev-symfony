<?php

/* users/add.html.twig */
class __TwigTemplate_784a4f9e9e3a8a8cf03cb60e7b5d7f54af9288b3e8dd371269f98b5a2180dcc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "users/add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_407df23ee2ce7b9f2fcf467ca1dc62f4782d0dbde14d65a26cacd1674fee3745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_407df23ee2ce7b9f2fcf467ca1dc62f4782d0dbde14d65a26cacd1674fee3745->enter($__internal_407df23ee2ce7b9f2fcf467ca1dc62f4782d0dbde14d65a26cacd1674fee3745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/add.html.twig"));

        $__internal_97ed6c9157b8c45c6591d95230ca564cfa67f1b0bae06cda9478c3ea85d55e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ed6c9157b8c45c6591d95230ca564cfa67f1b0bae06cda9478c3ea85d55e24->enter($__internal_97ed6c9157b8c45c6591d95230ca564cfa67f1b0bae06cda9478c3ea85d55e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_407df23ee2ce7b9f2fcf467ca1dc62f4782d0dbde14d65a26cacd1674fee3745->leave($__internal_407df23ee2ce7b9f2fcf467ca1dc62f4782d0dbde14d65a26cacd1674fee3745_prof);

        
        $__internal_97ed6c9157b8c45c6591d95230ca564cfa67f1b0bae06cda9478c3ea85d55e24->leave($__internal_97ed6c9157b8c45c6591d95230ca564cfa67f1b0bae06cda9478c3ea85d55e24_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6701593a99dd67a4a5fc23927dfe20837d88354932d78a0c8ab1a8491e0d4a99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6701593a99dd67a4a5fc23927dfe20837d88354932d78a0c8ab1a8491e0d4a99->enter($__internal_6701593a99dd67a4a5fc23927dfe20837d88354932d78a0c8ab1a8491e0d4a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68572e9f66837362d5ce1f27ea3b34458110045d5c5a2cac884a782cc3e22452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68572e9f66837362d5ce1f27ea3b34458110045d5c5a2cac884a782cc3e22452->enter($__internal_68572e9f66837362d5ce1f27ea3b34458110045d5c5a2cac884a782cc3e22452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "layout/mainMenu.html.twig", array("current" => "users"));
        echo "
    ";
        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 6
        echo "    <div class=\"container\">

        <h1>User Add (users/add)</h1>

        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Create\"/>
        <a href=\"http://localhost/udev_symfony/web/app_dev.php/users\"><input type=\"button\" class=\"btn btn-defaut\"
                                                                             value=\"Back\"/></a>
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
";
        
        $__internal_68572e9f66837362d5ce1f27ea3b34458110045d5c5a2cac884a782cc3e22452->leave($__internal_68572e9f66837362d5ce1f27ea3b34458110045d5c5a2cac884a782cc3e22452_prof);

        
        $__internal_6701593a99dd67a4a5fc23927dfe20837d88354932d78a0c8ab1a8491e0d4a99->leave($__internal_6701593a99dd67a4a5fc23927dfe20837d88354932d78a0c8ab1a8491e0d4a99_prof);

    }

    public function getTemplateName()
    {
        return "users/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  66 => 11,  62 => 10,  56 => 6,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ include('layout/mainMenu.html.twig', {'current' : 'users'}) }}
    {% form_theme form 'bootstrap_3_layout.html.twig' %}
    <div class=\"container\">

        <h1>User Add (users/add)</h1>

        {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Create\"/>
        <a href=\"http://localhost/udev_symfony/web/app_dev.php/users\"><input type=\"button\" class=\"btn btn-defaut\"
                                                                             value=\"Back\"/></a>
        {{ form_end(form) }}

    </div>
{% endblock %}
", "users/add.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/add.html.twig");
    }
}
