<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_111af36d9aaec26d61ccec7aa26665d80a6153838da23d07aeb676e957a90213 extends Twig_Template
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
        $__internal_5d62a7a0034c848a0b9282ee28c6f4014e8414cf9d08476a212098d0148a5ce1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d62a7a0034c848a0b9282ee28c6f4014e8414cf9d08476a212098d0148a5ce1->enter($__internal_5d62a7a0034c848a0b9282ee28c6f4014e8414cf9d08476a212098d0148a5ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_1897828744add5017b539953097ffd3321f95983cac51c3e3dd40a83e39412c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1897828744add5017b539953097ffd3321f95983cac51c3e3dd40a83e39412c0->enter($__internal_1897828744add5017b539953097ffd3321f95983cac51c3e3dd40a83e39412c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5d62a7a0034c848a0b9282ee28c6f4014e8414cf9d08476a212098d0148a5ce1->leave($__internal_5d62a7a0034c848a0b9282ee28c6f4014e8414cf9d08476a212098d0148a5ce1_prof);

        
        $__internal_1897828744add5017b539953097ffd3321f95983cac51c3e3dd40a83e39412c0->leave($__internal_1897828744add5017b539953097ffd3321f95983cac51c3e3dd40a83e39412c0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
