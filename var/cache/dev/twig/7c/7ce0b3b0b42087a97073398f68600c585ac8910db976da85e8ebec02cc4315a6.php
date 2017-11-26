<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_71e2258809b82f59144b607a6119d81147e704f3709f1db7743aeea9dfd4f254 extends Twig_Template
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
        $__internal_d78824c681addffe37cf70b5bda31ca2f691e003b287cf94d017a2dbd6d71f25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d78824c681addffe37cf70b5bda31ca2f691e003b287cf94d017a2dbd6d71f25->enter($__internal_d78824c681addffe37cf70b5bda31ca2f691e003b287cf94d017a2dbd6d71f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_00fdddf61bbcb712eb3db4f44ee1fa418adb57da9ae29c832f2a77796704667d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00fdddf61bbcb712eb3db4f44ee1fa418adb57da9ae29c832f2a77796704667d->enter($__internal_00fdddf61bbcb712eb3db4f44ee1fa418adb57da9ae29c832f2a77796704667d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_d78824c681addffe37cf70b5bda31ca2f691e003b287cf94d017a2dbd6d71f25->leave($__internal_d78824c681addffe37cf70b5bda31ca2f691e003b287cf94d017a2dbd6d71f25_prof);

        
        $__internal_00fdddf61bbcb712eb3db4f44ee1fa418adb57da9ae29c832f2a77796704667d->leave($__internal_00fdddf61bbcb712eb3db4f44ee1fa418adb57da9ae29c832f2a77796704667d_prof);

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
