<?php

/* base.html.twig~ */
class __TwigTemplate_8c6559d38f8dbfe49c095d5ef92d7383b577b464e25dc6f2c66b7a0f56291db7 extends Twig_Template
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
        $__internal_eb929bb45a42ec184ce227ae8dd2d42ea9d163a09ac87914705b6b60b2ad3ce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb929bb45a42ec184ce227ae8dd2d42ea9d163a09ac87914705b6b60b2ad3ce5->enter($__internal_eb929bb45a42ec184ce227ae8dd2d42ea9d163a09ac87914705b6b60b2ad3ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig~"));

        $__internal_d6737511ab1b1429482d318f705e832188acf511686778f60ded38f8250dcde9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6737511ab1b1429482d318f705e832188acf511686778f60ded38f8250dcde9->enter($__internal_d6737511ab1b1429482d318f705e832188acf511686778f60ded38f8250dcde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig~"));

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
        
        $__internal_eb929bb45a42ec184ce227ae8dd2d42ea9d163a09ac87914705b6b60b2ad3ce5->leave($__internal_eb929bb45a42ec184ce227ae8dd2d42ea9d163a09ac87914705b6b60b2ad3ce5_prof);

        
        $__internal_d6737511ab1b1429482d318f705e832188acf511686778f60ded38f8250dcde9->leave($__internal_d6737511ab1b1429482d318f705e832188acf511686778f60ded38f8250dcde9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_836a1e811ac971a4a6b4215846d8ba38e792458f1d3118f5b24d0a439625d36a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_836a1e811ac971a4a6b4215846d8ba38e792458f1d3118f5b24d0a439625d36a->enter($__internal_836a1e811ac971a4a6b4215846d8ba38e792458f1d3118f5b24d0a439625d36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_730308bf3fbe4950f8e884489568e2b3c7470cf7d18172d2640e7523a712884b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730308bf3fbe4950f8e884489568e2b3c7470cf7d18172d2640e7523a712884b->enter($__internal_730308bf3fbe4950f8e884489568e2b3c7470cf7d18172d2640e7523a712884b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome UDEV!";
        
        $__internal_730308bf3fbe4950f8e884489568e2b3c7470cf7d18172d2640e7523a712884b->leave($__internal_730308bf3fbe4950f8e884489568e2b3c7470cf7d18172d2640e7523a712884b_prof);

        
        $__internal_836a1e811ac971a4a6b4215846d8ba38e792458f1d3118f5b24d0a439625d36a->leave($__internal_836a1e811ac971a4a6b4215846d8ba38e792458f1d3118f5b24d0a439625d36a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_945990fa190d5977b908c427ea48dbd93ecdc279eec211479d8715b158d9ff50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_945990fa190d5977b908c427ea48dbd93ecdc279eec211479d8715b158d9ff50->enter($__internal_945990fa190d5977b908c427ea48dbd93ecdc279eec211479d8715b158d9ff50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e59a0d21551b8f2b1294fb875bd5644af3180aa34e23faf01d79f17c56f8badf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59a0d21551b8f2b1294fb875bd5644af3180aa34e23faf01d79f17c56f8badf->enter($__internal_e59a0d21551b8f2b1294fb875bd5644af3180aa34e23faf01d79f17c56f8badf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e59a0d21551b8f2b1294fb875bd5644af3180aa34e23faf01d79f17c56f8badf->leave($__internal_e59a0d21551b8f2b1294fb875bd5644af3180aa34e23faf01d79f17c56f8badf_prof);

        
        $__internal_945990fa190d5977b908c427ea48dbd93ecdc279eec211479d8715b158d9ff50->leave($__internal_945990fa190d5977b908c427ea48dbd93ecdc279eec211479d8715b158d9ff50_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdb7cd935d52dd76da7d8f3812ea4ecd650ffd5e21397b38adbdce77770ff33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb7cd935d52dd76da7d8f3812ea4ecd650ffd5e21397b38adbdce77770ff33e->enter($__internal_cdb7cd935d52dd76da7d8f3812ea4ecd650ffd5e21397b38adbdce77770ff33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84f64000109dc5ea616cefc130ed76479c06a161e89c2f13e2d728cafe4018aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f64000109dc5ea616cefc130ed76479c06a161e89c2f13e2d728cafe4018aa->enter($__internal_84f64000109dc5ea616cefc130ed76479c06a161e89c2f13e2d728cafe4018aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_84f64000109dc5ea616cefc130ed76479c06a161e89c2f13e2d728cafe4018aa->leave($__internal_84f64000109dc5ea616cefc130ed76479c06a161e89c2f13e2d728cafe4018aa_prof);

        
        $__internal_cdb7cd935d52dd76da7d8f3812ea4ecd650ffd5e21397b38adbdce77770ff33e->leave($__internal_cdb7cd935d52dd76da7d8f3812ea4ecd650ffd5e21397b38adbdce77770ff33e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5d81dafa5f5eb282a47e7cbc055aa414e1233ce9e09301dbdaa61d8a21495240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d81dafa5f5eb282a47e7cbc055aa414e1233ce9e09301dbdaa61d8a21495240->enter($__internal_5d81dafa5f5eb282a47e7cbc055aa414e1233ce9e09301dbdaa61d8a21495240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_32b736615a56b6c3ad0e81de7e9585b5f8fe7afa65ade18d0adbd710f4efe151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b736615a56b6c3ad0e81de7e9585b5f8fe7afa65ade18d0adbd710f4efe151->enter($__internal_32b736615a56b6c3ad0e81de7e9585b5f8fe7afa65ade18d0adbd710f4efe151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_32b736615a56b6c3ad0e81de7e9585b5f8fe7afa65ade18d0adbd710f4efe151->leave($__internal_32b736615a56b6c3ad0e81de7e9585b5f8fe7afa65ade18d0adbd710f4efe151_prof);

        
        $__internal_5d81dafa5f5eb282a47e7cbc055aa414e1233ce9e09301dbdaa61d8a21495240->leave($__internal_5d81dafa5f5eb282a47e7cbc055aa414e1233ce9e09301dbdaa61d8a21495240_prof);

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
