<?php

/* articles/add.html.twig */
class __TwigTemplate_394e28b69e15ebbdb12c86f3b3f5c283e6c91e2f20ea51a2f38018b2b028149f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "articles/add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81ccf25a71c65c9bf2f6b3b33c5ede2894440b0a8a946b93d957d9e03f8db401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81ccf25a71c65c9bf2f6b3b33c5ede2894440b0a8a946b93d957d9e03f8db401->enter($__internal_81ccf25a71c65c9bf2f6b3b33c5ede2894440b0a8a946b93d957d9e03f8db401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81ccf25a71c65c9bf2f6b3b33c5ede2894440b0a8a946b93d957d9e03f8db401->leave($__internal_81ccf25a71c65c9bf2f6b3b33c5ede2894440b0a8a946b93d957d9e03f8db401_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfee5b83b3baedc5a296d291a7e0b20ba33b7f0d3a28c77dae9ff421da721be4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfee5b83b3baedc5a296d291a7e0b20ba33b7f0d3a28c77dae9ff421da721be4->enter($__internal_dfee5b83b3baedc5a296d291a7e0b20ba33b7f0d3a28c77dae9ff421da721be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "layout/mainMenu.html.twig", array("current" => "articles"));
        echo "
    ";
        // line 6
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? null), array(0 => "bootstrap_3_layout.html.twig"));
        // line 7
        echo "    <div class=\"container\">

        <h1>Article Add (articles/add)</h1>

        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Create\"/>
        <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles");
        echo "\"><input type=\"button\" class=\"btn btn-defaut\"
                                                value=\"Back\"/></a>
        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

    </div>

";
        
        $__internal_dfee5b83b3baedc5a296d291a7e0b20ba33b7f0d3a28c77dae9ff421da721be4->leave($__internal_dfee5b83b3baedc5a296d291a7e0b20ba33b7f0d3a28c77dae9ff421da721be4_prof);

    }

    public function getTemplateName()
    {
        return "articles/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  64 => 14,  59 => 12,  55 => 11,  49 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "articles/add.html.twig", "/var/www/html/udev_symfony/app/Resources/views/articles/add.html.twig");
    }
}
