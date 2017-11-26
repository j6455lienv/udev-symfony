<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_5bb381d2016f4fb31ed76213b789caa25a3f81b0f29e559643b0dd7ce9f134c4 extends Twig_Template
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
        $__internal_32909d8982bbda336a91f4e903acd495957453fc3a4db42e57e6de667bf47013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32909d8982bbda336a91f4e903acd495957453fc3a4db42e57e6de667bf47013->enter($__internal_32909d8982bbda336a91f4e903acd495957453fc3a4db42e57e6de667bf47013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_80dcc6346c6f6d4916da89915123e926d97b3d57e26e09ba9d17ac7ecc23daeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80dcc6346c6f6d4916da89915123e926d97b3d57e26e09ba9d17ac7ecc23daeb->enter($__internal_80dcc6346c6f6d4916da89915123e926d97b3d57e26e09ba9d17ac7ecc23daeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_32909d8982bbda336a91f4e903acd495957453fc3a4db42e57e6de667bf47013->leave($__internal_32909d8982bbda336a91f4e903acd495957453fc3a4db42e57e6de667bf47013_prof);

        
        $__internal_80dcc6346c6f6d4916da89915123e926d97b3d57e26e09ba9d17ac7ecc23daeb->leave($__internal_80dcc6346c6f6d4916da89915123e926d97b3d57e26e09ba9d17ac7ecc23daeb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2644c9604f9b37250c8175c9d361175ca87b147326c926ea8e9da8e22487aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2644c9604f9b37250c8175c9d361175ca87b147326c926ea8e9da8e22487aed->enter($__internal_e2644c9604f9b37250c8175c9d361175ca87b147326c926ea8e9da8e22487aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c151e51b4c932b324c5a0697ec2d7a074ca637ba0a6276ac5332291c405ebe58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c151e51b4c932b324c5a0697ec2d7a074ca637ba0a6276ac5332291c405ebe58->enter($__internal_c151e51b4c932b324c5a0697ec2d7a074ca637ba0a6276ac5332291c405ebe58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c151e51b4c932b324c5a0697ec2d7a074ca637ba0a6276ac5332291c405ebe58->leave($__internal_c151e51b4c932b324c5a0697ec2d7a074ca637ba0a6276ac5332291c405ebe58_prof);

        
        $__internal_e2644c9604f9b37250c8175c9d361175ca87b147326c926ea8e9da8e22487aed->leave($__internal_e2644c9604f9b37250c8175c9d361175ca87b147326c926ea8e9da8e22487aed_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1bbe339b92f25fc54fee0938d7274e56e95e1670c2df595568f0594e02f9b7d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bbe339b92f25fc54fee0938d7274e56e95e1670c2df595568f0594e02f9b7d5->enter($__internal_1bbe339b92f25fc54fee0938d7274e56e95e1670c2df595568f0594e02f9b7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_34ef6749db0136a308dcd81fc74e49671c240447729e5c4bb0796b21c2aa17ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ef6749db0136a308dcd81fc74e49671c240447729e5c4bb0796b21c2aa17ca->enter($__internal_34ef6749db0136a308dcd81fc74e49671c240447729e5c4bb0796b21c2aa17ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_34ef6749db0136a308dcd81fc74e49671c240447729e5c4bb0796b21c2aa17ca->leave($__internal_34ef6749db0136a308dcd81fc74e49671c240447729e5c4bb0796b21c2aa17ca_prof);

        
        $__internal_1bbe339b92f25fc54fee0938d7274e56e95e1670c2df595568f0594e02f9b7d5->leave($__internal_1bbe339b92f25fc54fee0938d7274e56e95e1670c2df595568f0594e02f9b7d5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3219f3e9a82e2d012c560136a83ba741dbfad4f89f236cd941de3f5ba78d22e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3219f3e9a82e2d012c560136a83ba741dbfad4f89f236cd941de3f5ba78d22e0->enter($__internal_3219f3e9a82e2d012c560136a83ba741dbfad4f89f236cd941de3f5ba78d22e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8bdc24f0dc28d4ac68a2858e06956cee6dcda60c383e42faba3940f315a2b88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bdc24f0dc28d4ac68a2858e06956cee6dcda60c383e42faba3940f315a2b88f->enter($__internal_8bdc24f0dc28d4ac68a2858e06956cee6dcda60c383e42faba3940f315a2b88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8bdc24f0dc28d4ac68a2858e06956cee6dcda60c383e42faba3940f315a2b88f->leave($__internal_8bdc24f0dc28d4ac68a2858e06956cee6dcda60c383e42faba3940f315a2b88f_prof);

        
        $__internal_3219f3e9a82e2d012c560136a83ba741dbfad4f89f236cd941de3f5ba78d22e0->leave($__internal_3219f3e9a82e2d012c560136a83ba741dbfad4f89f236cd941de3f5ba78d22e0_prof);

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
