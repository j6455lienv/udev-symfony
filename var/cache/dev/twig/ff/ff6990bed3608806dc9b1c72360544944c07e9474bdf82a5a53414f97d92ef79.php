<?php

/* :layout:mainMenu.html.twig */
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
        $__internal_7a8370296ab8bfb66aaadc5d508157dcfdbcb0ef6e43788c6fd96577e91bb52f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8370296ab8bfb66aaadc5d508157dcfdbcb0ef6e43788c6fd96577e91bb52f->enter($__internal_7a8370296ab8bfb66aaadc5d508157dcfdbcb0ef6e43788c6fd96577e91bb52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":layout:mainMenu.html.twig"));

        $__internal_55a09160ace04dc9f8cf12abe95e58f6bba1f28e8c2aa5bbbd5950ace7c575fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a09160ace04dc9f8cf12abe95e58f6bba1f28e8c2aa5bbbd5950ace7c575fd->enter($__internal_55a09160ace04dc9f8cf12abe95e58f6bba1f28e8c2aa5bbbd5950ace7c575fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":layout:mainMenu.html.twig"));

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

           <!-- list deroulante des articles-->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"
                   aria-haspopup=\"true\" aria-expanded=\"false\">Articles</a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles");
        echo "\">List</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_add");
        echo "\">Add</a>
                </div>
            </li>
        </ul>
    </div>
</nav>";
        
        $__internal_7a8370296ab8bfb66aaadc5d508157dcfdbcb0ef6e43788c6fd96577e91bb52f->leave($__internal_7a8370296ab8bfb66aaadc5d508157dcfdbcb0ef6e43788c6fd96577e91bb52f_prof);

        
        $__internal_55a09160ace04dc9f8cf12abe95e58f6bba1f28e8c2aa5bbbd5950ace7c575fd->leave($__internal_55a09160ace04dc9f8cf12abe95e58f6bba1f28e8c2aa5bbbd5950ace7c575fd_prof);

    }

    public function getTemplateName()
    {
        return ":layout:mainMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 28,  53 => 27,  25 => 1,);
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

           <!-- list deroulante des articles-->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"
                   aria-haspopup=\"true\" aria-expanded=\"false\">Articles</a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"{{ path('articles') }}\">List</a>
                    <a class=\"dropdown-item\" href=\"{{ path('article_add') }}\">Add</a>
                </div>
            </li>
        </ul>
    </div>
</nav>", ":layout:mainMenu.html.twig", "/var/www/html/udev_symfony/app/Resources/views/layout/mainMenu.html.twig");
    }
}
