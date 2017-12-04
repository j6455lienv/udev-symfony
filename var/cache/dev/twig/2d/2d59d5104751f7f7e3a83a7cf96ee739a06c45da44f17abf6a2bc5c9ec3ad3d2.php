<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_fae258c956965977da06dc595fb767f5f2c8a8526d541d136909564ba87735b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c07cb294e765911fb0dbd4d5761f630ea90abf48e779b7a192de381a084269c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c07cb294e765911fb0dbd4d5761f630ea90abf48e779b7a192de381a084269c0->enter($__internal_c07cb294e765911fb0dbd4d5761f630ea90abf48e779b7a192de381a084269c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_30c51de2103bd0a88e842a93a368bc7525de6cc674936e8e548765f950784c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c51de2103bd0a88e842a93a368bc7525de6cc674936e8e548765f950784c96->enter($__internal_30c51de2103bd0a88e842a93a368bc7525de6cc674936e8e548765f950784c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c07cb294e765911fb0dbd4d5761f630ea90abf48e779b7a192de381a084269c0->leave($__internal_c07cb294e765911fb0dbd4d5761f630ea90abf48e779b7a192de381a084269c0_prof);

        
        $__internal_30c51de2103bd0a88e842a93a368bc7525de6cc674936e8e548765f950784c96->leave($__internal_30c51de2103bd0a88e842a93a368bc7525de6cc674936e8e548765f950784c96_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
