<?php

/* layout/mainMenu.html.twig */
class __TwigTemplate_1427ddbd22491267d33ccaf61d8265a515803c9dc40654a96ef7e30f2251a3fd extends Twig_Template
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
        $__internal_4954a710080e27049f2149a00742a5dea46ab7458ba2ac8864e786aa1e4dbcdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4954a710080e27049f2149a00742a5dea46ab7458ba2ac8864e786aa1e4dbcdb->enter($__internal_4954a710080e27049f2149a00742a5dea46ab7458ba2ac8864e786aa1e4dbcdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/mainMenu.html.twig"));

        $__internal_e2b611e7a8213a9516bc0a4333c614dee799d67cee6023900114d6b9a2643058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b611e7a8213a9516bc0a4333c614dee799d67cee6023900114d6b9a2643058->enter($__internal_e2b611e7a8213a9516bc0a4333c614dee799d67cee6023900114d6b9a2643058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/mainMenu.html.twig"));

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
        
        $__internal_4954a710080e27049f2149a00742a5dea46ab7458ba2ac8864e786aa1e4dbcdb->leave($__internal_4954a710080e27049f2149a00742a5dea46ab7458ba2ac8864e786aa1e4dbcdb_prof);

        
        $__internal_e2b611e7a8213a9516bc0a4333c614dee799d67cee6023900114d6b9a2643058->leave($__internal_e2b611e7a8213a9516bc0a4333c614dee799d67cee6023900114d6b9a2643058_prof);

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
