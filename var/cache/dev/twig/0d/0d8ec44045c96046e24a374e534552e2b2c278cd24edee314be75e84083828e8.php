<?php

/* layout/mainMenu.html.twig */
class __TwigTemplate_f032a620565c34303fc2de86c931cdf88f2ed57a36dd0dfd35cb9f6c79faaccf extends Twig_Template
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
        $__internal_f9d813659e44926572876ce5061c7aaa81bb82d9b6677186f973d68df4a41ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9d813659e44926572876ce5061c7aaa81bb82d9b6677186f973d68df4a41ac2->enter($__internal_f9d813659e44926572876ce5061c7aaa81bb82d9b6677186f973d68df4a41ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/mainMenu.html.twig"));

        $__internal_eb7d905c122c9230539d8e9790fc96b1183bcc873dd0178c2f755d5196ec76b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb7d905c122c9230539d8e9790fc96b1183bcc873dd0178c2f755d5196ec76b6->enter($__internal_eb7d905c122c9230539d8e9790fc96b1183bcc873dd0178c2f755d5196ec76b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/mainMenu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"/udev_symfony/web/app_dev.php\">Home</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
            aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
            <!-- list deroulante des users-->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"
                   aria-haspopup=\"true\" aria-expanded=\"false\">Users</a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"/udev_symfony/web/app_dev.php/users\">List</a>
                    <a class=\"dropdown-item\" href=\"/udev_symfony/web/app_dev.php/users/add\">Add</a>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/udev_symfony/web/app_dev.php/articles\">Articles</a>
            </li>
        </ul>
    </div>
</nav>";
        
        $__internal_f9d813659e44926572876ce5061c7aaa81bb82d9b6677186f973d68df4a41ac2->leave($__internal_f9d813659e44926572876ce5061c7aaa81bb82d9b6677186f973d68df4a41ac2_prof);

        
        $__internal_eb7d905c122c9230539d8e9790fc96b1183bcc873dd0178c2f755d5196ec76b6->leave($__internal_eb7d905c122c9230539d8e9790fc96b1183bcc873dd0178c2f755d5196ec76b6_prof);

    }

    public function getTemplateName()
    {
        return "layout/mainMenu.html.twig";
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
        return new Twig_Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"/udev_symfony/web/app_dev.php\">Home</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
            aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
            <!-- list deroulante des users-->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"
                   aria-haspopup=\"true\" aria-expanded=\"false\">Users</a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"/udev_symfony/web/app_dev.php/users\">List</a>
                    <a class=\"dropdown-item\" href=\"/udev_symfony/web/app_dev.php/users/add\">Add</a>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/udev_symfony/web/app_dev.php/articles\">Articles</a>
            </li>
        </ul>
    </div>
</nav>", "layout/mainMenu.html.twig", "/var/www/html/udev_symfony/app/Resources/views/layout/mainMenu.html.twig");
    }
}
