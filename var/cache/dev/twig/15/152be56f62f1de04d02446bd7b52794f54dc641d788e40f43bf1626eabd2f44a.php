<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0b1a71fdb1d2381315bfa153960cad3cbdeab79d770b7ed801a6e0771e1bb601 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_733fc76b4f20dddf19dcb9d8217a28d8d03d02ae988cf9c7f494570eea3e2a50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_733fc76b4f20dddf19dcb9d8217a28d8d03d02ae988cf9c7f494570eea3e2a50->enter($__internal_733fc76b4f20dddf19dcb9d8217a28d8d03d02ae988cf9c7f494570eea3e2a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_733fc76b4f20dddf19dcb9d8217a28d8d03d02ae988cf9c7f494570eea3e2a50->leave($__internal_733fc76b4f20dddf19dcb9d8217a28d8d03d02ae988cf9c7f494570eea3e2a50_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a2c1904b899d8f54b25bb18ed80894edbfa881e6db1e0a1860aab62ec927ae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2c1904b899d8f54b25bb18ed80894edbfa881e6db1e0a1860aab62ec927ae0->enter($__internal_3a2c1904b899d8f54b25bb18ed80894edbfa881e6db1e0a1860aab62ec927ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? null), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? null))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3a2c1904b899d8f54b25bb18ed80894edbfa881e6db1e0a1860aab62ec927ae0->leave($__internal_3a2c1904b899d8f54b25bb18ed80894edbfa881e6db1e0a1860aab62ec927ae0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3d53657367acb8e34bfb3c154ee14aaf9146e59ca0062294758df78c933d2998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d53657367acb8e34bfb3c154ee14aaf9146e59ca0062294758df78c933d2998->enter($__internal_3d53657367acb8e34bfb3c154ee14aaf9146e59ca0062294758df78c933d2998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? null), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? null), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3d53657367acb8e34bfb3c154ee14aaf9146e59ca0062294758df78c933d2998->leave($__internal_3d53657367acb8e34bfb3c154ee14aaf9146e59ca0062294758df78c933d2998_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_20f8f642c29fc4c522c53d70ff2bea3ec10405e80bb6b815aabc3c4b5a8680de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20f8f642c29fc4c522c53d70ff2bea3ec10405e80bb6b815aabc3c4b5a8680de->enter($__internal_20f8f642c29fc4c522c53d70ff2bea3ec10405e80bb6b815aabc3c4b5a8680de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? null), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? null))));
            echo "
        </div>
    ";
        }
        
        $__internal_20f8f642c29fc4c522c53d70ff2bea3ec10405e80bb6b815aabc3c4b5a8680de->leave($__internal_20f8f642c29fc4c522c53d70ff2bea3ec10405e80bb6b815aabc3c4b5a8680de_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
