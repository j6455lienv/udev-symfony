<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b2e95f3417b6f96811d8fd662fafe3bae25dba3fdb66e82adb2de76e77ae3308 extends Twig_Template
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
        $__internal_b8cd68484afaa887ecf9826cbe24cde48e0081fc898f4728a2c6ebdfb149c3d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8cd68484afaa887ecf9826cbe24cde48e0081fc898f4728a2c6ebdfb149c3d4->enter($__internal_b8cd68484afaa887ecf9826cbe24cde48e0081fc898f4728a2c6ebdfb149c3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_602f176ea89b46eac4eb49c45260078e919245fe164ef0686a021f27be74d991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602f176ea89b46eac4eb49c45260078e919245fe164ef0686a021f27be74d991->enter($__internal_602f176ea89b46eac4eb49c45260078e919245fe164ef0686a021f27be74d991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_b8cd68484afaa887ecf9826cbe24cde48e0081fc898f4728a2c6ebdfb149c3d4->leave($__internal_b8cd68484afaa887ecf9826cbe24cde48e0081fc898f4728a2c6ebdfb149c3d4_prof);

        
        $__internal_602f176ea89b46eac4eb49c45260078e919245fe164ef0686a021f27be74d991->leave($__internal_602f176ea89b46eac4eb49c45260078e919245fe164ef0686a021f27be74d991_prof);

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
