<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_4190d70e0fc826d936f360df6b6c7f6b6242973a618f7771846516491c26b9c9 extends Twig_Template
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
        $__internal_75e8ac00549e41ad77bc6a8f561d99ffa026f5f6ee46ecfafc41652bad06dcd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75e8ac00549e41ad77bc6a8f561d99ffa026f5f6ee46ecfafc41652bad06dcd9->enter($__internal_75e8ac00549e41ad77bc6a8f561d99ffa026f5f6ee46ecfafc41652bad06dcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_883454111c5c4f51ba581fa5d5bd1546cc825651e8131b9578462fef0aa38f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_883454111c5c4f51ba581fa5d5bd1546cc825651e8131b9578462fef0aa38f6a->enter($__internal_883454111c5c4f51ba581fa5d5bd1546cc825651e8131b9578462fef0aa38f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_75e8ac00549e41ad77bc6a8f561d99ffa026f5f6ee46ecfafc41652bad06dcd9->leave($__internal_75e8ac00549e41ad77bc6a8f561d99ffa026f5f6ee46ecfafc41652bad06dcd9_prof);

        
        $__internal_883454111c5c4f51ba581fa5d5bd1546cc825651e8131b9578462fef0aa38f6a->leave($__internal_883454111c5c4f51ba581fa5d5bd1546cc825651e8131b9578462fef0aa38f6a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
