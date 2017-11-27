<?php

/* default/articles.html.twig */
class __TwigTemplate_63943a52f8273992f0ccea5c3d212b6fc95e237177d3f7d39e2643e70b30725b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/articles.html.twig", 1);
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
        $__internal_40d3f5e922aafe8184dff4b82ba3161534d93239d09e25720eac7f7a07931769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d3f5e922aafe8184dff4b82ba3161534d93239d09e25720eac7f7a07931769->enter($__internal_40d3f5e922aafe8184dff4b82ba3161534d93239d09e25720eac7f7a07931769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/articles.html.twig"));

        $__internal_d9354e831760197106f65d3be685de599496c7860ff3d818af3e990088009473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9354e831760197106f65d3be685de599496c7860ff3d818af3e990088009473->enter($__internal_d9354e831760197106f65d3be685de599496c7860ff3d818af3e990088009473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40d3f5e922aafe8184dff4b82ba3161534d93239d09e25720eac7f7a07931769->leave($__internal_40d3f5e922aafe8184dff4b82ba3161534d93239d09e25720eac7f7a07931769_prof);

        
        $__internal_d9354e831760197106f65d3be685de599496c7860ff3d818af3e990088009473->leave($__internal_d9354e831760197106f65d3be685de599496c7860ff3d818af3e990088009473_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bce99b138273b9aee33de0ed79e5aa9aa9cd47b6573150a975c99f4216988014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bce99b138273b9aee33de0ed79e5aa9aa9cd47b6573150a975c99f4216988014->enter($__internal_bce99b138273b9aee33de0ed79e5aa9aa9cd47b6573150a975c99f4216988014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a6a5ef096e442c225c12f7e2e2f33f50dc344fbbb177937ee5c5ed7dd10f563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a6a5ef096e442c225c12f7e2e2f33f50dc344fbbb177937ee5c5ed7dd10f563->enter($__internal_5a6a5ef096e442c225c12f7e2e2f33f50dc344fbbb177937ee5c5ed7dd10f563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">


            <!--- Afficher la liste des articles en boucle for -->
            <table border=\"1px\">
                <ul>
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["liste_article"] ?? $this->getContext($context, "liste_article")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 12
            echo "                        <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "</td> <td> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "subject", array()), "html", null, true);
            echo "</td> <td>  ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "date", array()), "Y-m-d"), "html", null, true);
            echo " </td> <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "body", array()), "html", null, true);
            echo " </td> </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                </ul>
            </table>
        </div>
    </div>

";
        
        $__internal_5a6a5ef096e442c225c12f7e2e2f33f50dc344fbbb177937ee5c5ed7dd10f563->leave($__internal_5a6a5ef096e442c225c12f7e2e2f33f50dc344fbbb177937ee5c5ed7dd10f563_prof);

        
        $__internal_bce99b138273b9aee33de0ed79e5aa9aa9cd47b6573150a975c99f4216988014->leave($__internal_bce99b138273b9aee33de0ed79e5aa9aa9cd47b6573150a975c99f4216988014_prof);

    }

    public function getTemplateName()
    {
        return "default/articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  62 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
    <div id=\"wrapper\">
        <div id=\"container\">


            <!--- Afficher la liste des articles en boucle for -->
            <table border=\"1px\">
                <ul>
                    {% for key, value in liste_article %}
                        <tr><td>{{ value.id }}</td> <td> {{ value.subject}}</td> <td>  {{ value.date|date('Y-m-d')}} </td> <td>{{ value.body}} </td> </tr>
                    {% endfor %}
                </ul>
            </table>
        </div>
    </div>

{% endblock %}", "default/articles.html.twig", "/var/www/html/udev_symfony/app/Resources/views/default/articles.html.twig");
    }
}
