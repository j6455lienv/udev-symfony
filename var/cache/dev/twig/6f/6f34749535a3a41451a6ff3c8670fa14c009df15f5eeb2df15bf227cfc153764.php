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
        $__internal_2ca4583cfdd69fe8f0932d64448c08561cb08283787d908dbcb38846358a1e3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ca4583cfdd69fe8f0932d64448c08561cb08283787d908dbcb38846358a1e3a->enter($__internal_2ca4583cfdd69fe8f0932d64448c08561cb08283787d908dbcb38846358a1e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_87a22fbac34276d557909b09fc803d9d7a7ecb198abc7e8e965ad66d6d26a3ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a22fbac34276d557909b09fc803d9d7a7ecb198abc7e8e965ad66d6d26a3ee->enter($__internal_87a22fbac34276d557909b09fc803d9d7a7ecb198abc7e8e965ad66d6d26a3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_2ca4583cfdd69fe8f0932d64448c08561cb08283787d908dbcb38846358a1e3a->leave($__internal_2ca4583cfdd69fe8f0932d64448c08561cb08283787d908dbcb38846358a1e3a_prof);

        
        $__internal_87a22fbac34276d557909b09fc803d9d7a7ecb198abc7e8e965ad66d6d26a3ee->leave($__internal_87a22fbac34276d557909b09fc803d9d7a7ecb198abc7e8e965ad66d6d26a3ee_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b97234f4ba6e7c10b4f4495f1415031c783204599b6a2c29dd50098407d996c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b97234f4ba6e7c10b4f4495f1415031c783204599b6a2c29dd50098407d996c0->enter($__internal_b97234f4ba6e7c10b4f4495f1415031c783204599b6a2c29dd50098407d996c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc8c92a1602b454d43a20a35368c541330da3839410da1c373884d8c4466466d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc8c92a1602b454d43a20a35368c541330da3839410da1c373884d8c4466466d->enter($__internal_fc8c92a1602b454d43a20a35368c541330da3839410da1c373884d8c4466466d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fc8c92a1602b454d43a20a35368c541330da3839410da1c373884d8c4466466d->leave($__internal_fc8c92a1602b454d43a20a35368c541330da3839410da1c373884d8c4466466d_prof);

        
        $__internal_b97234f4ba6e7c10b4f4495f1415031c783204599b6a2c29dd50098407d996c0->leave($__internal_b97234f4ba6e7c10b4f4495f1415031c783204599b6a2c29dd50098407d996c0_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f262a3b1b5ffc806b7f7c911669d982f6ee66d426d95084d792db4b35bdc1a20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f262a3b1b5ffc806b7f7c911669d982f6ee66d426d95084d792db4b35bdc1a20->enter($__internal_f262a3b1b5ffc806b7f7c911669d982f6ee66d426d95084d792db4b35bdc1a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_790266a554e2859c0b60c28fdd38208054c6b1f86578ac391d69e9fb5245a70a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790266a554e2859c0b60c28fdd38208054c6b1f86578ac391d69e9fb5245a70a->enter($__internal_790266a554e2859c0b60c28fdd38208054c6b1f86578ac391d69e9fb5245a70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_790266a554e2859c0b60c28fdd38208054c6b1f86578ac391d69e9fb5245a70a->leave($__internal_790266a554e2859c0b60c28fdd38208054c6b1f86578ac391d69e9fb5245a70a_prof);

        
        $__internal_f262a3b1b5ffc806b7f7c911669d982f6ee66d426d95084d792db4b35bdc1a20->leave($__internal_f262a3b1b5ffc806b7f7c911669d982f6ee66d426d95084d792db4b35bdc1a20_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8211e015e2c3ff65e79615e8d679f1d14f4d7111f11c7e46039f70deaa921e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8211e015e2c3ff65e79615e8d679f1d14f4d7111f11c7e46039f70deaa921e23->enter($__internal_8211e015e2c3ff65e79615e8d679f1d14f4d7111f11c7e46039f70deaa921e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d492e9e9a03a2ded29084cd8285a38ccd477f8d0f8169b22f5351859cf59757f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d492e9e9a03a2ded29084cd8285a38ccd477f8d0f8169b22f5351859cf59757f->enter($__internal_d492e9e9a03a2ded29084cd8285a38ccd477f8d0f8169b22f5351859cf59757f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d492e9e9a03a2ded29084cd8285a38ccd477f8d0f8169b22f5351859cf59757f->leave($__internal_d492e9e9a03a2ded29084cd8285a38ccd477f8d0f8169b22f5351859cf59757f_prof);

        
        $__internal_8211e015e2c3ff65e79615e8d679f1d14f4d7111f11c7e46039f70deaa921e23->leave($__internal_8211e015e2c3ff65e79615e8d679f1d14f4d7111f11c7e46039f70deaa921e23_prof);

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
