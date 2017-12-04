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
        $__internal_f5720b4b65cd60058ff8c8a3b8711d1e81b1741d477042dd1e151be4f535f12a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5720b4b65cd60058ff8c8a3b8711d1e81b1741d477042dd1e151be4f535f12a->enter($__internal_f5720b4b65cd60058ff8c8a3b8711d1e81b1741d477042dd1e151be4f535f12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig~"));

        $__internal_fffe8442fadda16e6f673c8b786430daf9b7bbe2a0ae9b85daa416a7f281982b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fffe8442fadda16e6f673c8b786430daf9b7bbe2a0ae9b85daa416a7f281982b->enter($__internal_fffe8442fadda16e6f673c8b786430daf9b7bbe2a0ae9b85daa416a7f281982b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig~"));

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
        
        $__internal_f5720b4b65cd60058ff8c8a3b8711d1e81b1741d477042dd1e151be4f535f12a->leave($__internal_f5720b4b65cd60058ff8c8a3b8711d1e81b1741d477042dd1e151be4f535f12a_prof);

        
        $__internal_fffe8442fadda16e6f673c8b786430daf9b7bbe2a0ae9b85daa416a7f281982b->leave($__internal_fffe8442fadda16e6f673c8b786430daf9b7bbe2a0ae9b85daa416a7f281982b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dee08f420dfc674e97ed61d646fd7ad81e1998ed8e5e362799fbd8128bd5697d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dee08f420dfc674e97ed61d646fd7ad81e1998ed8e5e362799fbd8128bd5697d->enter($__internal_dee08f420dfc674e97ed61d646fd7ad81e1998ed8e5e362799fbd8128bd5697d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f56339b00d1b7b31917c9301ed27e253698de5adb7dc1d71e86a25d6f9c44632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56339b00d1b7b31917c9301ed27e253698de5adb7dc1d71e86a25d6f9c44632->enter($__internal_f56339b00d1b7b31917c9301ed27e253698de5adb7dc1d71e86a25d6f9c44632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome UDEV!";
        
        $__internal_f56339b00d1b7b31917c9301ed27e253698de5adb7dc1d71e86a25d6f9c44632->leave($__internal_f56339b00d1b7b31917c9301ed27e253698de5adb7dc1d71e86a25d6f9c44632_prof);

        
        $__internal_dee08f420dfc674e97ed61d646fd7ad81e1998ed8e5e362799fbd8128bd5697d->leave($__internal_dee08f420dfc674e97ed61d646fd7ad81e1998ed8e5e362799fbd8128bd5697d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a02403d3b6412eb4d0e48dbfc135a9e94187537452969b59171ed980cdbd4168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02403d3b6412eb4d0e48dbfc135a9e94187537452969b59171ed980cdbd4168->enter($__internal_a02403d3b6412eb4d0e48dbfc135a9e94187537452969b59171ed980cdbd4168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9791aaf49bd2e2fd4008714b31838c6968e8fdaae616a7e770cd72d3044f2500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9791aaf49bd2e2fd4008714b31838c6968e8fdaae616a7e770cd72d3044f2500->enter($__internal_9791aaf49bd2e2fd4008714b31838c6968e8fdaae616a7e770cd72d3044f2500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9791aaf49bd2e2fd4008714b31838c6968e8fdaae616a7e770cd72d3044f2500->leave($__internal_9791aaf49bd2e2fd4008714b31838c6968e8fdaae616a7e770cd72d3044f2500_prof);

        
        $__internal_a02403d3b6412eb4d0e48dbfc135a9e94187537452969b59171ed980cdbd4168->leave($__internal_a02403d3b6412eb4d0e48dbfc135a9e94187537452969b59171ed980cdbd4168_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d760bd54f2c6a4a8f50fcd851b5f29c351a22d71690071c20fd26c39ff717512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d760bd54f2c6a4a8f50fcd851b5f29c351a22d71690071c20fd26c39ff717512->enter($__internal_d760bd54f2c6a4a8f50fcd851b5f29c351a22d71690071c20fd26c39ff717512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3619d5ae6ef1e60344135866d3171b49e2f650ccb450b8bbbb1768b0594e3c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3619d5ae6ef1e60344135866d3171b49e2f650ccb450b8bbbb1768b0594e3c16->enter($__internal_3619d5ae6ef1e60344135866d3171b49e2f650ccb450b8bbbb1768b0594e3c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3619d5ae6ef1e60344135866d3171b49e2f650ccb450b8bbbb1768b0594e3c16->leave($__internal_3619d5ae6ef1e60344135866d3171b49e2f650ccb450b8bbbb1768b0594e3c16_prof);

        
        $__internal_d760bd54f2c6a4a8f50fcd851b5f29c351a22d71690071c20fd26c39ff717512->leave($__internal_d760bd54f2c6a4a8f50fcd851b5f29c351a22d71690071c20fd26c39ff717512_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aac6fa08c9463f3906e30235d9d7370053556dece93d61b8b739c86122929724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aac6fa08c9463f3906e30235d9d7370053556dece93d61b8b739c86122929724->enter($__internal_aac6fa08c9463f3906e30235d9d7370053556dece93d61b8b739c86122929724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4f3bcab73ad99b8302498421fd05c845caec09dffee3f1f62d0bb427c5aeedc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3bcab73ad99b8302498421fd05c845caec09dffee3f1f62d0bb427c5aeedc5->enter($__internal_4f3bcab73ad99b8302498421fd05c845caec09dffee3f1f62d0bb427c5aeedc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4f3bcab73ad99b8302498421fd05c845caec09dffee3f1f62d0bb427c5aeedc5->leave($__internal_4f3bcab73ad99b8302498421fd05c845caec09dffee3f1f62d0bb427c5aeedc5_prof);

        
        $__internal_aac6fa08c9463f3906e30235d9d7370053556dece93d61b8b739c86122929724->leave($__internal_aac6fa08c9463f3906e30235d9d7370053556dece93d61b8b739c86122929724_prof);

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
