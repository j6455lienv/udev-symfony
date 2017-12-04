<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_814d7538d6efe5dec1db9b2fa8a5dbdeafa1419e60b82f3918f0709561aa37ae extends Twig_Template
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
        $__internal_65a82b253f08dc919cdf72ef6bd1f99cb44cbfbdd6683cf533944ae992057c29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65a82b253f08dc919cdf72ef6bd1f99cb44cbfbdd6683cf533944ae992057c29->enter($__internal_65a82b253f08dc919cdf72ef6bd1f99cb44cbfbdd6683cf533944ae992057c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_688ecd12f782e42c68ed418c3aba0d73a23818ce085492aa3c701535c6eccc16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688ecd12f782e42c68ed418c3aba0d73a23818ce085492aa3c701535c6eccc16->enter($__internal_688ecd12f782e42c68ed418c3aba0d73a23818ce085492aa3c701535c6eccc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_65a82b253f08dc919cdf72ef6bd1f99cb44cbfbdd6683cf533944ae992057c29->leave($__internal_65a82b253f08dc919cdf72ef6bd1f99cb44cbfbdd6683cf533944ae992057c29_prof);

        
        $__internal_688ecd12f782e42c68ed418c3aba0d73a23818ce085492aa3c701535c6eccc16->leave($__internal_688ecd12f782e42c68ed418c3aba0d73a23818ce085492aa3c701535c6eccc16_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
