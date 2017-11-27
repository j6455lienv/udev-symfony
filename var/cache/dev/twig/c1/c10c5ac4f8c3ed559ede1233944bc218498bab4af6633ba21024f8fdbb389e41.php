<?php

/* users/users.html.twig */
class __TwigTemplate_a3e161c5aaf6a2de51a1b68f3b6ba5dbe02028c6aa20e7892d2ce402a461a3ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "users/users.html.twig", 1);
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
        $__internal_59c66e5bae4ff439c02d037c7d44e6211276927833c9bb9a43bd272f60eba283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59c66e5bae4ff439c02d037c7d44e6211276927833c9bb9a43bd272f60eba283->enter($__internal_59c66e5bae4ff439c02d037c7d44e6211276927833c9bb9a43bd272f60eba283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/users.html.twig"));

        $__internal_6e828616de9e2cae559e41db89179798a5d7d32b55b0964d117cc08ae4737836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e828616de9e2cae559e41db89179798a5d7d32b55b0964d117cc08ae4737836->enter($__internal_6e828616de9e2cae559e41db89179798a5d7d32b55b0964d117cc08ae4737836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59c66e5bae4ff439c02d037c7d44e6211276927833c9bb9a43bd272f60eba283->leave($__internal_59c66e5bae4ff439c02d037c7d44e6211276927833c9bb9a43bd272f60eba283_prof);

        
        $__internal_6e828616de9e2cae559e41db89179798a5d7d32b55b0964d117cc08ae4737836->leave($__internal_6e828616de9e2cae559e41db89179798a5d7d32b55b0964d117cc08ae4737836_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_81361fa4d4da43358be6c35bc1f4dda68665f79bf7f4c14cec54e4e2f149549b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81361fa4d4da43358be6c35bc1f4dda68665f79bf7f4c14cec54e4e2f149549b->enter($__internal_81361fa4d4da43358be6c35bc1f4dda68665f79bf7f4c14cec54e4e2f149549b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ed3d457d2cef457c69d14c505cd4109d88835466d0e96fd7bb47b8b59a85f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed3d457d2cef457c69d14c505cd4109d88835466d0e96fd7bb47b8b59a85f5e->enter($__internal_4ed3d457d2cef457c69d14c505cd4109d88835466d0e96fd7bb47b8b59a85f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo twig_include($this->env, $context, "layout/mainMenu.html.twig", array("current" => "users"));
        echo "

    <div class=\"container\">
        <h1>User List</h1>
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">USERNAME</th>
                <th scope=\"col\">MAIL</th>
                <th scope=\"col\">DATE</th>
                <th scope=\"col\">UPDATE</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 18
            echo "                <tr>
                    <th scope=\"row\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</th>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\">Show</a>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\">Delete</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </tbody>
        </table>
        <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add");
        echo "\" class=\"btn btn-primary btn-xs\">Add</a>
    </div>
";
        
        $__internal_4ed3d457d2cef457c69d14c505cd4109d88835466d0e96fd7bb47b8b59a85f5e->leave($__internal_4ed3d457d2cef457c69d14c505cd4109d88835466d0e96fd7bb47b8b59a85f5e_prof);

        
        $__internal_81361fa4d4da43358be6c35bc1f4dda68665f79bf7f4c14cec54e4e2f149549b->leave($__internal_81361fa4d4da43358be6c35bc1f4dda68665f79bf7f4c14cec54e4e2f149549b_prof);

    }

    public function getTemplateName()
    {
        return "users/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  101 => 28,  91 => 24,  87 => 23,  82 => 21,  78 => 20,  74 => 19,  71 => 18,  67 => 17,  49 => 3,  40 => 2,  11 => 1,);
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
        <h1>User List</h1>
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">USERNAME</th>
                <th scope=\"col\">MAIL</th>
                <th scope=\"col\">DATE</th>
                <th scope=\"col\">UPDATE</th>
            </tr>
            </thead>
            <tbody>
            {% for user in users %}
                <tr>
                    <th scope=\"row\">{{ user.username }}</th>
                    <td>{{ user.email }}</td>
                    <td>{{ user.date|date(\"Y-m-d\") }}</td>
                    <td>
                        <a href=\"{{ path('show', {'id' : user.id}) }}\" class=\"btn btn-primary btn-xs\">Show</a>
                        <a href=\"{{ path('delete', {'id' : user.id}) }}\" class=\"btn btn-primary btn-xs\">Delete</a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        <a href=\"{{ path('add') }}\" class=\"btn btn-primary btn-xs\">Add</a>
    </div>
{% endblock %}
", "users/users.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/users.html.twig");
    }
}
