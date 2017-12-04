<?php

/* :users:edit.html.twig */
class __TwigTemplate_3ac45d958a1c52c8f295722b07b6e9ad818296bf99ad9b4152d5099d578ef2f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":users:edit.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? null), array(0 => "bootstrap_3_layout.html.twig"));
        // line 5
        echo "    <div class=\"container\">

        <h1>Edit (users/edit)</h1>

        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Update\"/>
        <a href=\"http://localhost/udev_symfony/web/app_dev.php/users\"><input type=\"button\" class=\"btn btn-defaut\" value=\"Back\"/></a>
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

    </div>
";
    }

    public function getTemplateName()
    {
        return ":users:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  44 => 10,  40 => 9,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":users:edit.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/edit.html.twig");
    }
}
