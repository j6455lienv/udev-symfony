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
        $__internal_08fc3b4b475adb206b22f0f7bae4890970dee7d599e9e2b25ddb49ed3ae47fdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08fc3b4b475adb206b22f0f7bae4890970dee7d599e9e2b25ddb49ed3ae47fdf->enter($__internal_08fc3b4b475adb206b22f0f7bae4890970dee7d599e9e2b25ddb49ed3ae47fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_922f7e442f5e71df3438aa51161ff5c200d9a2075608389033e863f6fe4d7e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922f7e442f5e71df3438aa51161ff5c200d9a2075608389033e863f6fe4d7e6f->enter($__internal_922f7e442f5e71df3438aa51161ff5c200d9a2075608389033e863f6fe4d7e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_08fc3b4b475adb206b22f0f7bae4890970dee7d599e9e2b25ddb49ed3ae47fdf->leave($__internal_08fc3b4b475adb206b22f0f7bae4890970dee7d599e9e2b25ddb49ed3ae47fdf_prof);

        
        $__internal_922f7e442f5e71df3438aa51161ff5c200d9a2075608389033e863f6fe4d7e6f->leave($__internal_922f7e442f5e71df3438aa51161ff5c200d9a2075608389033e863f6fe4d7e6f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d35402216feae074d1913e1882796f61dad07e4c3711de74553ea744e79ec1d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d35402216feae074d1913e1882796f61dad07e4c3711de74553ea744e79ec1d8->enter($__internal_d35402216feae074d1913e1882796f61dad07e4c3711de74553ea744e79ec1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7f4060ddf2d9463d0101123ef27f4631543339ecd37c972ee01bb58e2d43b395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f4060ddf2d9463d0101123ef27f4631543339ecd37c972ee01bb58e2d43b395->enter($__internal_7f4060ddf2d9463d0101123ef27f4631543339ecd37c972ee01bb58e2d43b395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7f4060ddf2d9463d0101123ef27f4631543339ecd37c972ee01bb58e2d43b395->leave($__internal_7f4060ddf2d9463d0101123ef27f4631543339ecd37c972ee01bb58e2d43b395_prof);

        
        $__internal_d35402216feae074d1913e1882796f61dad07e4c3711de74553ea744e79ec1d8->leave($__internal_d35402216feae074d1913e1882796f61dad07e4c3711de74553ea744e79ec1d8_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d589bf69345e4217c076afefc56521ce66f3a264507db287e14689733ef105b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d589bf69345e4217c076afefc56521ce66f3a264507db287e14689733ef105b4->enter($__internal_d589bf69345e4217c076afefc56521ce66f3a264507db287e14689733ef105b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_926fefb5fae2af183a938f49fe895cbe30dd78eac5ea7880ebcd01c3613c9aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926fefb5fae2af183a938f49fe895cbe30dd78eac5ea7880ebcd01c3613c9aa5->enter($__internal_926fefb5fae2af183a938f49fe895cbe30dd78eac5ea7880ebcd01c3613c9aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_926fefb5fae2af183a938f49fe895cbe30dd78eac5ea7880ebcd01c3613c9aa5->leave($__internal_926fefb5fae2af183a938f49fe895cbe30dd78eac5ea7880ebcd01c3613c9aa5_prof);

        
        $__internal_d589bf69345e4217c076afefc56521ce66f3a264507db287e14689733ef105b4->leave($__internal_d589bf69345e4217c076afefc56521ce66f3a264507db287e14689733ef105b4_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba8bc644b6046f135ca0896e09be559645e857ac4d74a67491688d5da802963a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba8bc644b6046f135ca0896e09be559645e857ac4d74a67491688d5da802963a->enter($__internal_ba8bc644b6046f135ca0896e09be559645e857ac4d74a67491688d5da802963a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5aff3b72d033ff3e4745cad5968781f3bf1ec266f42dffc67f5b3d72e55d64be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aff3b72d033ff3e4745cad5968781f3bf1ec266f42dffc67f5b3d72e55d64be->enter($__internal_5aff3b72d033ff3e4745cad5968781f3bf1ec266f42dffc67f5b3d72e55d64be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5aff3b72d033ff3e4745cad5968781f3bf1ec266f42dffc67f5b3d72e55d64be->leave($__internal_5aff3b72d033ff3e4745cad5968781f3bf1ec266f42dffc67f5b3d72e55d64be_prof);

        
        $__internal_ba8bc644b6046f135ca0896e09be559645e857ac4d74a67491688d5da802963a->leave($__internal_ba8bc644b6046f135ca0896e09be559645e857ac4d74a67491688d5da802963a_prof);

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
