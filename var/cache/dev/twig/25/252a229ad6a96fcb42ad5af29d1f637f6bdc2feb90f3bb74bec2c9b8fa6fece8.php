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
        $__internal_91ebc73d06b0c73f4b781dd66abe668cecf31b252aa7339ee076e62532f8ad90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ebc73d06b0c73f4b781dd66abe668cecf31b252aa7339ee076e62532f8ad90->enter($__internal_91ebc73d06b0c73f4b781dd66abe668cecf31b252aa7339ee076e62532f8ad90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_6ef1147500ec7ec438ed91bec45c67cdb752aa2ba97e7f4ac80a04ea2613369f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef1147500ec7ec438ed91bec45c67cdb752aa2ba97e7f4ac80a04ea2613369f->enter($__internal_6ef1147500ec7ec438ed91bec45c67cdb752aa2ba97e7f4ac80a04ea2613369f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_91ebc73d06b0c73f4b781dd66abe668cecf31b252aa7339ee076e62532f8ad90->leave($__internal_91ebc73d06b0c73f4b781dd66abe668cecf31b252aa7339ee076e62532f8ad90_prof);

        
        $__internal_6ef1147500ec7ec438ed91bec45c67cdb752aa2ba97e7f4ac80a04ea2613369f->leave($__internal_6ef1147500ec7ec438ed91bec45c67cdb752aa2ba97e7f4ac80a04ea2613369f_prof);

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
