<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3115bee2334288daa1b5ce430fc705989c5a21940ccb1dc2bb9371685a89fdc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e29e0d8fc351ad5b185fac3c0d14544ff5e8face0b5944fcbad28fc16140c57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e29e0d8fc351ad5b185fac3c0d14544ff5e8face0b5944fcbad28fc16140c57->enter($__internal_8e29e0d8fc351ad5b185fac3c0d14544ff5e8face0b5944fcbad28fc16140c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e29e0d8fc351ad5b185fac3c0d14544ff5e8face0b5944fcbad28fc16140c57->leave($__internal_8e29e0d8fc351ad5b185fac3c0d14544ff5e8face0b5944fcbad28fc16140c57_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_027b44ab66ad1080699ec62d9b2b7791a2d528d2035b16ee1e6a580f9d74a841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_027b44ab66ad1080699ec62d9b2b7791a2d528d2035b16ee1e6a580f9d74a841->enter($__internal_027b44ab66ad1080699ec62d9b2b7791a2d528d2035b16ee1e6a580f9d74a841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_027b44ab66ad1080699ec62d9b2b7791a2d528d2035b16ee1e6a580f9d74a841->leave($__internal_027b44ab66ad1080699ec62d9b2b7791a2d528d2035b16ee1e6a580f9d74a841_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_97d2287e4e4ab4840fe93d42dc0f723d1f5c452034a7346d62af9374970ee756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97d2287e4e4ab4840fe93d42dc0f723d1f5c452034a7346d62af9374970ee756->enter($__internal_97d2287e4e4ab4840fe93d42dc0f723d1f5c452034a7346d62af9374970ee756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_97d2287e4e4ab4840fe93d42dc0f723d1f5c452034a7346d62af9374970ee756->leave($__internal_97d2287e4e4ab4840fe93d42dc0f723d1f5c452034a7346d62af9374970ee756_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ea98d8ae5fbc7e79e5126df722e323b92a2b36f7aca477c1403a4098010d776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea98d8ae5fbc7e79e5126df722e323b92a2b36f7aca477c1403a4098010d776->enter($__internal_0ea98d8ae5fbc7e79e5126df722e323b92a2b36f7aca477c1403a4098010d776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? null))));
        echo "
";
        
        $__internal_0ea98d8ae5fbc7e79e5126df722e323b92a2b36f7aca477c1403a4098010d776->leave($__internal_0ea98d8ae5fbc7e79e5126df722e323b92a2b36f7aca477c1403a4098010d776_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Collector/router.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
