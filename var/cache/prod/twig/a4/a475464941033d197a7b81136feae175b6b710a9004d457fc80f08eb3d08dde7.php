<?php

/* :default:index.html.twig */
class __TwigTemplate_fa4c11730dd9c5554a9217a7ead362f26056d679a91ac9bdd768a5a178bbaf77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
    <!-- ajout d'une feuille de style-->
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
        // line 7
        echo twig_include($this->env, $context, "layout/mainMenu.html.twig", array("current" => "homepage"));
        echo "

    <div class=\"container-fluid\">
        <h1>Homepage</h1>
        <img id=\"img\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/img.jpg"), "html", null, true);
        echo "\">
    </div>

        <div class=\"container\">
            <h2>Gestion des utilisateurs</h2>

        </div>

        <div class=\"container\">
            <h2>Gestion des articles</h2>

        </div>

        <div class=\"container\">
            <h2>Utilisateurs créés aujourd'hui</h2>
            ";
        // line 26
        echo twig_include($this->env, $context, "users/userWidget.html.twig");
        echo "
        </div>

        <div class=\"container\">
            <h2>Articles créés aujourd'hui</h2>

        </div>

        <div class=\"container\">
            <h2>Last posts @Symfony Blog</h2>

        </div>



";
    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 26,  47 => 11,  40 => 7,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:index.html.twig", "/var/www/html/udev_symfony/app/Resources/views/default/index.html.twig");
    }
}
