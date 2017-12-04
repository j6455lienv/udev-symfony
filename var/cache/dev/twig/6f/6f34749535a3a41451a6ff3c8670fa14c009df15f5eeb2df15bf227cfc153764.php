<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_0612f04bb926d6c648c3ff60328b58f4e2ce9283549b42d057917819fd989493 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_534c3f64f816ee3fb814d1bbd6159edb4f4a4c7b6adb005d27b40b5743851ef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_534c3f64f816ee3fb814d1bbd6159edb4f4a4c7b6adb005d27b40b5743851ef6->enter($__internal_534c3f64f816ee3fb814d1bbd6159edb4f4a4c7b6adb005d27b40b5743851ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_2344821ee48ffd2e9b8e4b1e3f17ea3288f422113504dbded04431318189a2a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2344821ee48ffd2e9b8e4b1e3f17ea3288f422113504dbded04431318189a2a0->enter($__internal_2344821ee48ffd2e9b8e4b1e3f17ea3288f422113504dbded04431318189a2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_534c3f64f816ee3fb814d1bbd6159edb4f4a4c7b6adb005d27b40b5743851ef6->leave($__internal_534c3f64f816ee3fb814d1bbd6159edb4f4a4c7b6adb005d27b40b5743851ef6_prof);

        
        $__internal_2344821ee48ffd2e9b8e4b1e3f17ea3288f422113504dbded04431318189a2a0->leave($__internal_2344821ee48ffd2e9b8e4b1e3f17ea3288f422113504dbded04431318189a2a0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1d9f7d92606143ae2347d9040ce7d4a7c87655e7a011fc5d2e77ca13dd0f49a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1d9f7d92606143ae2347d9040ce7d4a7c87655e7a011fc5d2e77ca13dd0f49a->enter($__internal_d1d9f7d92606143ae2347d9040ce7d4a7c87655e7a011fc5d2e77ca13dd0f49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_19cae66eb61d8abe5d3da30c5c3974fdb825b96b3f2f908d6263dd171770a635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19cae66eb61d8abe5d3da30c5c3974fdb825b96b3f2f908d6263dd171770a635->enter($__internal_19cae66eb61d8abe5d3da30c5c3974fdb825b96b3f2f908d6263dd171770a635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_19cae66eb61d8abe5d3da30c5c3974fdb825b96b3f2f908d6263dd171770a635->leave($__internal_19cae66eb61d8abe5d3da30c5c3974fdb825b96b3f2f908d6263dd171770a635_prof);

        
        $__internal_d1d9f7d92606143ae2347d9040ce7d4a7c87655e7a011fc5d2e77ca13dd0f49a->leave($__internal_d1d9f7d92606143ae2347d9040ce7d4a7c87655e7a011fc5d2e77ca13dd0f49a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a73d70f3a487ac3055b90c449a7c2eaede0cc4c85871dc7a8b2cefa0b4eb5087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a73d70f3a487ac3055b90c449a7c2eaede0cc4c85871dc7a8b2cefa0b4eb5087->enter($__internal_a73d70f3a487ac3055b90c449a7c2eaede0cc4c85871dc7a8b2cefa0b4eb5087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_054f52a9707a0bef4c6df19201043d49ef3d95b7e48ae919ef4c7167e28a55e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_054f52a9707a0bef4c6df19201043d49ef3d95b7e48ae919ef4c7167e28a55e5->enter($__internal_054f52a9707a0bef4c6df19201043d49ef3d95b7e48ae919ef4c7167e28a55e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_054f52a9707a0bef4c6df19201043d49ef3d95b7e48ae919ef4c7167e28a55e5->leave($__internal_054f52a9707a0bef4c6df19201043d49ef3d95b7e48ae919ef4c7167e28a55e5_prof);

        
        $__internal_a73d70f3a487ac3055b90c449a7c2eaede0cc4c85871dc7a8b2cefa0b4eb5087->leave($__internal_a73d70f3a487ac3055b90c449a7c2eaede0cc4c85871dc7a8b2cefa0b4eb5087_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_05e33150619a7ff4d85f34261433068e3a048e504cce75f5947edd5686229b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05e33150619a7ff4d85f34261433068e3a048e504cce75f5947edd5686229b46->enter($__internal_05e33150619a7ff4d85f34261433068e3a048e504cce75f5947edd5686229b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1989b7e5ab06fbc8657aa1027e7522a1a75722989d6819127553ae6749565331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1989b7e5ab06fbc8657aa1027e7522a1a75722989d6819127553ae6749565331->enter($__internal_1989b7e5ab06fbc8657aa1027e7522a1a75722989d6819127553ae6749565331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1989b7e5ab06fbc8657aa1027e7522a1a75722989d6819127553ae6749565331->leave($__internal_1989b7e5ab06fbc8657aa1027e7522a1a75722989d6819127553ae6749565331_prof);

        
        $__internal_05e33150619a7ff4d85f34261433068e3a048e504cce75f5947edd5686229b46->leave($__internal_05e33150619a7ff4d85f34261433068e3a048e504cce75f5947edd5686229b46_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
