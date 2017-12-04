<?php

/* users/show.html.twig */
class __TwigTemplate_627849667c0779c166e52e6c0c1846cb7f796f8e9d6369a22171f00d1f0d18a6 extends Twig_Template
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
        $__internal_d93e58c08cd9d4e5f4cce91a4db92a497e2bf59b59f07f9382c0fef1fa6aac27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d93e58c08cd9d4e5f4cce91a4db92a497e2bf59b59f07f9382c0fef1fa6aac27->enter($__internal_d93e58c08cd9d4e5f4cce91a4db92a497e2bf59b59f07f9382c0fef1fa6aac27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/show.html.twig"));

        $__internal_7abf8cc69157af2f3ecc889f7c12c517b4c032b515ae8bd2300ab2c23d604606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7abf8cc69157af2f3ecc889f7c12c517b4c032b515ae8bd2300ab2c23d604606->enter($__internal_7abf8cc69157af2f3ecc889f7c12c517b4c032b515ae8bd2300ab2c23d604606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d93e58c08cd9d4e5f4cce91a4db92a497e2bf59b59f07f9382c0fef1fa6aac27->leave($__internal_d93e58c08cd9d4e5f4cce91a4db92a497e2bf59b59f07f9382c0fef1fa6aac27_prof);

        
        $__internal_7abf8cc69157af2f3ecc889f7c12c517b4c032b515ae8bd2300ab2c23d604606->leave($__internal_7abf8cc69157af2f3ecc889f7c12c517b4c032b515ae8bd2300ab2c23d604606_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_80862eea8c38b6916f19d68f82b8a2b68793d9e85bdf4922b95652cb57b45a45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80862eea8c38b6916f19d68f82b8a2b68793d9e85bdf4922b95652cb57b45a45->enter($__internal_80862eea8c38b6916f19d68f82b8a2b68793d9e85bdf4922b95652cb57b45a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ceee4963f140303ea1bf921a36b2f02d51d4fff1692835c93bc9c2214e53e3fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceee4963f140303ea1bf921a36b2f02d51d4fff1692835c93bc9c2214e53e3fa->enter($__internal_ceee4963f140303ea1bf921a36b2f02d51d4fff1692835c93bc9c2214e53e3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</span>
                </div>
                <div>
                    Username : <span>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</span>
                </div>
                <div>
                    eMail : <span>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</span>
                </div>
                <div>
                    Date : <span>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "date", array()), "Y-m-d"), "html", null, true);
        echo "</span>
                </div>
                <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-xs\">Edit</a>
                <a href=\"http://localhost/udev_symfony/web/app_dev.php/users\"><input type=\"button\"
                                                                                     class=\"btn btn-defaut\"
                                                                                     value=\"Back\"/></a>
            </div>

            <div class=\"col-md-6 col-sm-12\">
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:User:otherUserWidget", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))));
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_ceee4963f140303ea1bf921a36b2f02d51d4fff1692835c93bc9c2214e53e3fa->leave($__internal_ceee4963f140303ea1bf921a36b2f02d51d4fff1692835c93bc9c2214e53e3fa_prof);

        
        $__internal_80862eea8c38b6916f19d68f82b8a2b68793d9e85bdf4922b95652cb57b45a45->leave($__internal_80862eea8c38b6916f19d68f82b8a2b68793d9e85bdf4922b95652cb57b45a45_prof);

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
        return array (  93 => 29,  83 => 22,  78 => 20,  72 => 17,  66 => 14,  60 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ include('layout/mainMenu.html.twig', {'current' : 'users'}) }}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-12\">
                <h1>Show Users</h1>
                <div>
                    Id : <span>{{ user.id }}</span>
                </div>
                <div>
                    Username : <span>{{ user.username }}</span>
                </div>
                <div>
                    eMail : <span>{{ user.email }}</span>
                </div>
                <div>
                    Date : <span>{{ user.date|date(\"Y-m-d\") }}</span>
                </div>
                <a href=\"{{ path('edit', {'id' : user.id}) }}\" class=\"btn btn-primary btn-xs\">Edit</a>
                <a href=\"http://localhost/udev_symfony/web/app_dev.php/users\"><input type=\"button\"
                                                                                     class=\"btn btn-defaut\"
                                                                                     value=\"Back\"/></a>
            </div>

            <div class=\"col-md-6 col-sm-12\">
                {{ render(controller('AppBundle:User:otherUserWidget', {'id':user.id})) }}
            </div>
        </div>
    </div>
{% endblock %}", "users/show.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/show.html.twig");
    }
}
