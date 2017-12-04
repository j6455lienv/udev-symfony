<?php

/* @Twig/layout.html.twig */
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
        $__internal_f103a310f4f4bd02bfaba3755ffbaaf2c1119061af85e37c0efd19e47bd19bd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f103a310f4f4bd02bfaba3755ffbaaf2c1119061af85e37c0efd19e47bd19bd9->enter($__internal_f103a310f4f4bd02bfaba3755ffbaaf2c1119061af85e37c0efd19e47bd19bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a4a094628bcf151f2ce1a0671418e9c78434297647d5c74fcbd6c9028709b846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a094628bcf151f2ce1a0671418e9c78434297647d5c74fcbd6c9028709b846->enter($__internal_a4a094628bcf151f2ce1a0671418e9c78434297647d5c74fcbd6c9028709b846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_f103a310f4f4bd02bfaba3755ffbaaf2c1119061af85e37c0efd19e47bd19bd9->leave($__internal_f103a310f4f4bd02bfaba3755ffbaaf2c1119061af85e37c0efd19e47bd19bd9_prof);

        
        $__internal_a4a094628bcf151f2ce1a0671418e9c78434297647d5c74fcbd6c9028709b846->leave($__internal_a4a094628bcf151f2ce1a0671418e9c78434297647d5c74fcbd6c9028709b846_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_195b431b20f58d7aa1bb1cf0a844910bb4544d602492984cfc7adcab24db7600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_195b431b20f58d7aa1bb1cf0a844910bb4544d602492984cfc7adcab24db7600->enter($__internal_195b431b20f58d7aa1bb1cf0a844910bb4544d602492984cfc7adcab24db7600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe6e59c8081a0b38bc31f83127a92157b6c7b46a2937001a2b1c3841b9692634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6e59c8081a0b38bc31f83127a92157b6c7b46a2937001a2b1c3841b9692634->enter($__internal_fe6e59c8081a0b38bc31f83127a92157b6c7b46a2937001a2b1c3841b9692634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fe6e59c8081a0b38bc31f83127a92157b6c7b46a2937001a2b1c3841b9692634->leave($__internal_fe6e59c8081a0b38bc31f83127a92157b6c7b46a2937001a2b1c3841b9692634_prof);

        
        $__internal_195b431b20f58d7aa1bb1cf0a844910bb4544d602492984cfc7adcab24db7600->leave($__internal_195b431b20f58d7aa1bb1cf0a844910bb4544d602492984cfc7adcab24db7600_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_571e266be87cf303bf9a87e71ba0dac9fac6f9ad5cd0f34d9f03333d5818b926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_571e266be87cf303bf9a87e71ba0dac9fac6f9ad5cd0f34d9f03333d5818b926->enter($__internal_571e266be87cf303bf9a87e71ba0dac9fac6f9ad5cd0f34d9f03333d5818b926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6fb5d3efbeed4ccb50f3cb1835691e2f92b0bd70b90e39707feaa8077e78f010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb5d3efbeed4ccb50f3cb1835691e2f92b0bd70b90e39707feaa8077e78f010->enter($__internal_6fb5d3efbeed4ccb50f3cb1835691e2f92b0bd70b90e39707feaa8077e78f010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6fb5d3efbeed4ccb50f3cb1835691e2f92b0bd70b90e39707feaa8077e78f010->leave($__internal_6fb5d3efbeed4ccb50f3cb1835691e2f92b0bd70b90e39707feaa8077e78f010_prof);

        
        $__internal_571e266be87cf303bf9a87e71ba0dac9fac6f9ad5cd0f34d9f03333d5818b926->leave($__internal_571e266be87cf303bf9a87e71ba0dac9fac6f9ad5cd0f34d9f03333d5818b926_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_91d9bc80c43150df1edbe60cea59ca0c6fea51ab1910ba8b17b71a98f662f001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91d9bc80c43150df1edbe60cea59ca0c6fea51ab1910ba8b17b71a98f662f001->enter($__internal_91d9bc80c43150df1edbe60cea59ca0c6fea51ab1910ba8b17b71a98f662f001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_008d0cc02e003241efe63c4cdc5211cec7ac10c3365516d6e8af2503bf18a93b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008d0cc02e003241efe63c4cdc5211cec7ac10c3365516d6e8af2503bf18a93b->enter($__internal_008d0cc02e003241efe63c4cdc5211cec7ac10c3365516d6e8af2503bf18a93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_008d0cc02e003241efe63c4cdc5211cec7ac10c3365516d6e8af2503bf18a93b->leave($__internal_008d0cc02e003241efe63c4cdc5211cec7ac10c3365516d6e8af2503bf18a93b_prof);

        
        $__internal_91d9bc80c43150df1edbe60cea59ca0c6fea51ab1910ba8b17b71a98f662f001->leave($__internal_91d9bc80c43150df1edbe60cea59ca0c6fea51ab1910ba8b17b71a98f662f001_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
