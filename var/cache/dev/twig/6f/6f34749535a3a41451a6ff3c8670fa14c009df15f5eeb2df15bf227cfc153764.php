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
        $__internal_d80ba08d3de2f2b270b7c8060836e5c0360f9cfed4dd1882ac6836b8921d167e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d80ba08d3de2f2b270b7c8060836e5c0360f9cfed4dd1882ac6836b8921d167e->enter($__internal_d80ba08d3de2f2b270b7c8060836e5c0360f9cfed4dd1882ac6836b8921d167e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_632cdbf3c14b4f187517323a01c8a75a216110e498238ed51c9ea935968c992c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632cdbf3c14b4f187517323a01c8a75a216110e498238ed51c9ea935968c992c->enter($__internal_632cdbf3c14b4f187517323a01c8a75a216110e498238ed51c9ea935968c992c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_d80ba08d3de2f2b270b7c8060836e5c0360f9cfed4dd1882ac6836b8921d167e->leave($__internal_d80ba08d3de2f2b270b7c8060836e5c0360f9cfed4dd1882ac6836b8921d167e_prof);

        
        $__internal_632cdbf3c14b4f187517323a01c8a75a216110e498238ed51c9ea935968c992c->leave($__internal_632cdbf3c14b4f187517323a01c8a75a216110e498238ed51c9ea935968c992c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_81d1844be2d19a4d87e9e682f0b6975be22fd791075a71ae58f6943796757ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81d1844be2d19a4d87e9e682f0b6975be22fd791075a71ae58f6943796757ea0->enter($__internal_81d1844be2d19a4d87e9e682f0b6975be22fd791075a71ae58f6943796757ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5b69a2ee6ee54f74975d01d38be4e1dfa495122c58aac2e94c5f3f12b9bf06ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b69a2ee6ee54f74975d01d38be4e1dfa495122c58aac2e94c5f3f12b9bf06ba->enter($__internal_5b69a2ee6ee54f74975d01d38be4e1dfa495122c58aac2e94c5f3f12b9bf06ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5b69a2ee6ee54f74975d01d38be4e1dfa495122c58aac2e94c5f3f12b9bf06ba->leave($__internal_5b69a2ee6ee54f74975d01d38be4e1dfa495122c58aac2e94c5f3f12b9bf06ba_prof);

        
        $__internal_81d1844be2d19a4d87e9e682f0b6975be22fd791075a71ae58f6943796757ea0->leave($__internal_81d1844be2d19a4d87e9e682f0b6975be22fd791075a71ae58f6943796757ea0_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_63763c892038e512d6f14c1c47805f97a22733753daa284127800951a871cdc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63763c892038e512d6f14c1c47805f97a22733753daa284127800951a871cdc3->enter($__internal_63763c892038e512d6f14c1c47805f97a22733753daa284127800951a871cdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c7e25523bf520442b4d1353bbd145e3ef1e95d9786dd3e8d6952e7a04fc9e40e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e25523bf520442b4d1353bbd145e3ef1e95d9786dd3e8d6952e7a04fc9e40e->enter($__internal_c7e25523bf520442b4d1353bbd145e3ef1e95d9786dd3e8d6952e7a04fc9e40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c7e25523bf520442b4d1353bbd145e3ef1e95d9786dd3e8d6952e7a04fc9e40e->leave($__internal_c7e25523bf520442b4d1353bbd145e3ef1e95d9786dd3e8d6952e7a04fc9e40e_prof);

        
        $__internal_63763c892038e512d6f14c1c47805f97a22733753daa284127800951a871cdc3->leave($__internal_63763c892038e512d6f14c1c47805f97a22733753daa284127800951a871cdc3_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1badc4946407fd6f2a0ad735b9bdc9c2a14343aef5d3166dc72649aabcb02392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1badc4946407fd6f2a0ad735b9bdc9c2a14343aef5d3166dc72649aabcb02392->enter($__internal_1badc4946407fd6f2a0ad735b9bdc9c2a14343aef5d3166dc72649aabcb02392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d39c7aec93324bf036500cf9ed41f5ec967b559b0a445a6354f189f91563d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d39c7aec93324bf036500cf9ed41f5ec967b559b0a445a6354f189f91563d88->enter($__internal_5d39c7aec93324bf036500cf9ed41f5ec967b559b0a445a6354f189f91563d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5d39c7aec93324bf036500cf9ed41f5ec967b559b0a445a6354f189f91563d88->leave($__internal_5d39c7aec93324bf036500cf9ed41f5ec967b559b0a445a6354f189f91563d88_prof);

        
        $__internal_1badc4946407fd6f2a0ad735b9bdc9c2a14343aef5d3166dc72649aabcb02392->leave($__internal_1badc4946407fd6f2a0ad735b9bdc9c2a14343aef5d3166dc72649aabcb02392_prof);

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
