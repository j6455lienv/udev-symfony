<?php

/* :users:show.html.twig */
class __TwigTemplate_07e0b6b46ec07218920837ac8568c1c71b610b1d0482e0c07d83204b5bccb813 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":users:show.html.twig", 1);
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
        echo twig_include($this->env, $context, "layout/mainMenu.html.twig", array("current" => "users"));
        echo "

    <div class=\"container\" style=\"display:flex; justify-content: space-around;\">

        <div id=\"container\">
            <h1>Show Users</h1>
            <div>
                <span>Id : </span><span>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "id", array()), "html", null, true);
        echo "</span>
            </div>
            <div>
                <span>Username : </span><span>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
        echo "</span>
            </div>
            <div>
                <span>eMail : </span><span>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "email", array()), "html", null, true);
        echo "</span>
            </div>
            <div>
                <span>Date : </span><span>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? null), "date", array()), "Y-m-d"), "html", null, true);
        echo "</span>
            </div>
            <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-xs\">Edit</a>
            <a href=\"http://localhost/udev_symfony/web/app_dev.php/users\"><input type=\"button\" class=\"btn btn-defaut\"
                                                                                 value=\"Back\"/></a>
        </div>

        <div id=\"container\">
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:User:otherUserWidget", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))));
        echo "
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return ":users:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  65 => 22,  60 => 20,  54 => 17,  48 => 14,  42 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":users:show.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/show.html.twig");
    }
}
