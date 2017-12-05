<?php

/* users/show.html.twig */
class __TwigTemplate_377739c31640e3923ef7646faf508e4f91a929d8551c51d7a5ed13a5c671ed2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "users/show.html.twig", 1);
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
        $__internal_7ebe7b0fe3985d90c2848b22085ea1f09eacc7c5dde2d5b1642cbbf8d1a3330a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ebe7b0fe3985d90c2848b22085ea1f09eacc7c5dde2d5b1642cbbf8d1a3330a->enter($__internal_7ebe7b0fe3985d90c2848b22085ea1f09eacc7c5dde2d5b1642cbbf8d1a3330a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ebe7b0fe3985d90c2848b22085ea1f09eacc7c5dde2d5b1642cbbf8d1a3330a->leave($__internal_7ebe7b0fe3985d90c2848b22085ea1f09eacc7c5dde2d5b1642cbbf8d1a3330a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e89892403273de0f7b177f59815ae12affc06ed44291d58bfc4df81f8481b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e89892403273de0f7b177f59815ae12affc06ed44291d58bfc4df81f8481b94->enter($__internal_7e89892403273de0f7b177f59815ae12affc06ed44291d58bfc4df81f8481b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "layout/mainMenu.html.twig", array("current" => "users"));
        echo "

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-12\">
                <h1>Show Users</h1>
                <div>
                    Id : <span>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "id", array()), "html", null, true);
        echo "</span>
                </div>
                <div>
                    Username : <span>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
        echo "</span>
                </div>
                <div>
                    eMail : <span>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "email", array()), "html", null, true);
        echo "</span>
                </div>
                <div>
                    Date : <span>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? null), "date", array()), "Y-m-d"), "html", null, true);
        echo "</span>
                </div>
                <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-xs\">Edit</a>
                <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("users");
        echo "\"><input type=\"button\"
                                                                                     class=\"btn btn-defaut\"
                                                                                     value=\"Back\"/></a>
            </div>

            <div class=\"col-md-6 col-sm-12\">
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:User:otherUserWidget", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))));
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_7e89892403273de0f7b177f59815ae12affc06ed44291d58bfc4df81f8481b94->leave($__internal_7e89892403273de0f7b177f59815ae12affc06ed44291d58bfc4df81f8481b94_prof);

    }

    public function getTemplateName()
    {
        return "users/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 29,  78 => 23,  74 => 22,  69 => 20,  63 => 17,  57 => 14,  51 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "users/show.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/show.html.twig");
    }
}
