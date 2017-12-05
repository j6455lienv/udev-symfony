<?php

/* users/add.html.twig */
class __TwigTemplate_04dd32b4a62bd4564ba54969440387ee2fdb6a28718cf8a51c8261976daa2333 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "users/add.html.twig", 1);
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
        $__internal_6fcdfab5d5f49bb19f645d782206d00c8608dbb9fcd26d3473a704ce97d2a4c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fcdfab5d5f49bb19f645d782206d00c8608dbb9fcd26d3473a704ce97d2a4c9->enter($__internal_6fcdfab5d5f49bb19f645d782206d00c8608dbb9fcd26d3473a704ce97d2a4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fcdfab5d5f49bb19f645d782206d00c8608dbb9fcd26d3473a704ce97d2a4c9->leave($__internal_6fcdfab5d5f49bb19f645d782206d00c8608dbb9fcd26d3473a704ce97d2a4c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9fb81ddc39b661985dbb5b917d703ef33bf26666929e40556e10954f4d52910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9fb81ddc39b661985dbb5b917d703ef33bf26666929e40556e10954f4d52910->enter($__internal_f9fb81ddc39b661985dbb5b917d703ef33bf26666929e40556e10954f4d52910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "layout/mainMenu.html.twig", array("current" => "users"));
        echo "
    ";
        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? null), array(0 => "bootstrap_3_layout.html.twig"));
        // line 6
        echo "    <div class=\"container\">

        <h1>User Add (users/add)</h1>

        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Create\"/>
        <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("users");
        echo "\"><input type=\"button\" class=\"btn btn-defaut\"
                                                                             value=\"Back\"/></a>
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

    </div>
";
        
        $__internal_f9fb81ddc39b661985dbb5b917d703ef33bf26666929e40556e10954f4d52910->leave($__internal_f9fb81ddc39b661985dbb5b917d703ef33bf26666929e40556e10954f4d52910_prof);

    }

    public function getTemplateName()
    {
        return "users/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  62 => 13,  57 => 11,  53 => 10,  47 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "users/add.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/add.html.twig");
    }
}
