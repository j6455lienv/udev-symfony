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
        $__internal_dbb040619614981c8946b625138d4399c8cff8f72926b904fe0470702a8aa17d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb040619614981c8946b625138d4399c8cff8f72926b904fe0470702a8aa17d->enter($__internal_dbb040619614981c8946b625138d4399c8cff8f72926b904fe0470702a8aa17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":layout:mainMenu.html.twig"));

        $__internal_949fe51e34bb8f4b240f4e0e6710c41964db62b87d4cb16325e303a224a0afda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949fe51e34bb8f4b240f4e0e6710c41964db62b87d4cb16325e303a224a0afda->enter($__internal_949fe51e34bb8f4b240f4e0e6710c41964db62b87d4cb16325e303a224a0afda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":layout:mainMenu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">

    <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a>

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
                    <a class=\"dropdown-item\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("users");
        echo "\">List</a>
                    <a class=\"dropdown-item\" href=";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add");
        echo ">Add</a>
                </div>
            </li>

           <!-- list deroulante des articles-->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"
                   aria-haspopup=\"true\" aria-expanded=\"false\">Articles</a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles");
        echo "\">List</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_add");
        echo "\">Add</a>
                </div>
            </li>
        </ul>
    </div>
</nav>";
        
        $__internal_dbb040619614981c8946b625138d4399c8cff8f72926b904fe0470702a8aa17d->leave($__internal_dbb040619614981c8946b625138d4399c8cff8f72926b904fe0470702a8aa17d_prof);

        
        $__internal_949fe51e34bb8f4b240f4e0e6710c41964db62b87d4cb16325e303a224a0afda->leave($__internal_949fe51e34bb8f4b240f4e0e6710c41964db62b87d4cb16325e303a224a0afda_prof);

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
        return array (  67 => 29,  63 => 28,  51 => 19,  47 => 18,  29 => 3,  25 => 1,);
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

    <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">Home</a>

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
                    <a class=\"dropdown-item\" href=\"{{ path('users') }}\">List</a>
                    <a class=\"dropdown-item\" href={{ path('add') }}>Add</a>
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
