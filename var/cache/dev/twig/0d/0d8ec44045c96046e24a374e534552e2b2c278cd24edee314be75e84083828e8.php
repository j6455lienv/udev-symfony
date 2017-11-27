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
        $__internal_ea58a7d78e4e3c878221f2398636ea77203067bca248a4a21ce47f58adee56f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea58a7d78e4e3c878221f2398636ea77203067bca248a4a21ce47f58adee56f6->enter($__internal_ea58a7d78e4e3c878221f2398636ea77203067bca248a4a21ce47f58adee56f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/mainMenu.html.twig"));

        $__internal_dfb1f20ada7d6511a9f4271d0d1e7751411fbf7ff797fd37e2fd5583049a4730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb1f20ada7d6511a9f4271d0d1e7751411fbf7ff797fd37e2fd5583049a4730->enter($__internal_dfb1f20ada7d6511a9f4271d0d1e7751411fbf7ff797fd37e2fd5583049a4730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/mainMenu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"/udev_symfony/web/app_dev.php\">Home</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
            aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"/udev_symfony/web/app_dev.php/users\">Users<span
                            class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/udev_symfony/web/app_dev.php/articles\">Articles</a>
            </li>
        </ul>
    </div>
</nav>";
        
        $__internal_ea58a7d78e4e3c878221f2398636ea77203067bca248a4a21ce47f58adee56f6->leave($__internal_ea58a7d78e4e3c878221f2398636ea77203067bca248a4a21ce47f58adee56f6_prof);

        
        $__internal_dfb1f20ada7d6511a9f4271d0d1e7751411fbf7ff797fd37e2fd5583049a4730->leave($__internal_dfb1f20ada7d6511a9f4271d0d1e7751411fbf7ff797fd37e2fd5583049a4730_prof);

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
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"/udev_symfony/web/app_dev.php/users\">Users<span
                            class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/udev_symfony/web/app_dev.php/articles\">Articles</a>
            </li>
        </ul>
    </div>
</nav>", "layout/mainMenu.html.twig", "/var/www/html/udev_symfony/app/Resources/views/layout/mainMenu.html.twig");
    }
}
