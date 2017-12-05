<?php

/* users/users.html.twig */
class __TwigTemplate_e8bb1748f0e35d2965316d93962b5aac6543a409715fab33c227b18b8360ca0e extends Twig_Template
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
        $__internal_f1005c47e88409b9d487fe9e4f0b56927f0e5b319f5f0ef5d9f6c73f0d190cf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1005c47e88409b9d487fe9e4f0b56927f0e5b319f5f0ef5d9f6c73f0d190cf7->enter($__internal_f1005c47e88409b9d487fe9e4f0b56927f0e5b319f5f0ef5d9f6c73f0d190cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1005c47e88409b9d487fe9e4f0b56927f0e5b319f5f0ef5d9f6c73f0d190cf7->leave($__internal_f1005c47e88409b9d487fe9e4f0b56927f0e5b319f5f0ef5d9f6c73f0d190cf7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_90e0395c22cf46a56888737dbd4929dc7c7a81e4a2bdc6abd22c78be69fa48dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90e0395c22cf46a56888737dbd4929dc7c7a81e4a2bdc6abd22c78be69fa48dd->enter($__internal_90e0395c22cf46a56888737dbd4929dc7c7a81e4a2bdc6abd22c78be69fa48dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo twig_include($this->env, $context, "layout/mainMenu.html.twig", array("current" => "users"));
        echo "

    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/users.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
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
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            echo "                <tr>
                    <th scope=\"row\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</th>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\">Show</a>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\">Delete</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </tbody>
        </table>
        <div class=\"container footer-button\">
            <div class=\"container button\"><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add");
        echo "\" class=\"btn btn-primary btn-xs\">Add</a></div>
            <div class=\"container navigation button\">";
        // line 33
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["users"] ?? null));
        echo "</div>
        </div>
    </div>
";
        
        $__internal_90e0395c22cf46a56888737dbd4929dc7c7a81e4a2bdc6abd22c78be69fa48dd->leave($__internal_90e0395c22cf46a56888737dbd4929dc7c7a81e4a2bdc6abd22c78be69fa48dd_prof);

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
        return array (  105 => 33,  101 => 32,  96 => 29,  86 => 25,  82 => 24,  77 => 22,  73 => 21,  69 => 20,  66 => 19,  62 => 18,  46 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "users/users.html.twig", "/var/www/html/udev_symfony/app/Resources/views/users/users.html.twig");
    }
}
