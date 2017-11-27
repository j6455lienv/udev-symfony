<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b108dfc869ebe9bda48efd2aaf91e135f306e162fd208332b93005e3f44ea175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b108dfc869ebe9bda48efd2aaf91e135f306e162fd208332b93005e3f44ea175->enter($__internal_b108dfc869ebe9bda48efd2aaf91e135f306e162fd208332b93005e3f44ea175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_423415f44c5976ad7b826899b7cdd5656106a574ffc0721d902bf6a06f4c05d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423415f44c5976ad7b826899b7cdd5656106a574ffc0721d902bf6a06f4c05d6->enter($__internal_423415f44c5976ad7b826899b7cdd5656106a574ffc0721d902bf6a06f4c05d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b108dfc869ebe9bda48efd2aaf91e135f306e162fd208332b93005e3f44ea175->leave($__internal_b108dfc869ebe9bda48efd2aaf91e135f306e162fd208332b93005e3f44ea175_prof);

        
        $__internal_423415f44c5976ad7b826899b7cdd5656106a574ffc0721d902bf6a06f4c05d6->leave($__internal_423415f44c5976ad7b826899b7cdd5656106a574ffc0721d902bf6a06f4c05d6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_09ea3a1ffc522b20b0e2422151f58b67dfd06bceb8f2c23d8fdd0737f1b1beee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ea3a1ffc522b20b0e2422151f58b67dfd06bceb8f2c23d8fdd0737f1b1beee->enter($__internal_09ea3a1ffc522b20b0e2422151f58b67dfd06bceb8f2c23d8fdd0737f1b1beee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8b09aecdc8540a80525a6fca2b2b1cfd6ed88990b6c545aa023fe080db874c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b09aecdc8540a80525a6fca2b2b1cfd6ed88990b6c545aa023fe080db874c46->enter($__internal_8b09aecdc8540a80525a6fca2b2b1cfd6ed88990b6c545aa023fe080db874c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenu sur le tp Symfony";
        
        $__internal_8b09aecdc8540a80525a6fca2b2b1cfd6ed88990b6c545aa023fe080db874c46->leave($__internal_8b09aecdc8540a80525a6fca2b2b1cfd6ed88990b6c545aa023fe080db874c46_prof);

        
        $__internal_09ea3a1ffc522b20b0e2422151f58b67dfd06bceb8f2c23d8fdd0737f1b1beee->leave($__internal_09ea3a1ffc522b20b0e2422151f58b67dfd06bceb8f2c23d8fdd0737f1b1beee_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_289f59ef29143db511350db1faf8da2e5b8737160d83c49d30f555b5017d6561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289f59ef29143db511350db1faf8da2e5b8737160d83c49d30f555b5017d6561->enter($__internal_289f59ef29143db511350db1faf8da2e5b8737160d83c49d30f555b5017d6561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5fecb05f29ab7a36d6619325cb02cb07487535035dc81877a63285894bf7117e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fecb05f29ab7a36d6619325cb02cb07487535035dc81877a63285894bf7117e->enter($__internal_5fecb05f29ab7a36d6619325cb02cb07487535035dc81877a63285894bf7117e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5fecb05f29ab7a36d6619325cb02cb07487535035dc81877a63285894bf7117e->leave($__internal_5fecb05f29ab7a36d6619325cb02cb07487535035dc81877a63285894bf7117e_prof);

        
        $__internal_289f59ef29143db511350db1faf8da2e5b8737160d83c49d30f555b5017d6561->leave($__internal_289f59ef29143db511350db1faf8da2e5b8737160d83c49d30f555b5017d6561_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_33c8ca47dcb5e651d29472cf6994134757c3c0ac6715a0546e307eeff72e09ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c8ca47dcb5e651d29472cf6994134757c3c0ac6715a0546e307eeff72e09ad->enter($__internal_33c8ca47dcb5e651d29472cf6994134757c3c0ac6715a0546e307eeff72e09ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9abb4f7c67f49a0ccf7c2b7be8ca5ed5dc1aab4c580f7210e5e5c5f622aa0d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9abb4f7c67f49a0ccf7c2b7be8ca5ed5dc1aab4c580f7210e5e5c5f622aa0d1->enter($__internal_c9abb4f7c67f49a0ccf7c2b7be8ca5ed5dc1aab4c580f7210e5e5c5f622aa0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c9abb4f7c67f49a0ccf7c2b7be8ca5ed5dc1aab4c580f7210e5e5c5f622aa0d1->leave($__internal_c9abb4f7c67f49a0ccf7c2b7be8ca5ed5dc1aab4c580f7210e5e5c5f622aa0d1_prof);

        
        $__internal_33c8ca47dcb5e651d29472cf6994134757c3c0ac6715a0546e307eeff72e09ad->leave($__internal_33c8ca47dcb5e651d29472cf6994134757c3c0ac6715a0546e307eeff72e09ad_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_09ff3a2267119502894ba5cfadba8367b6b1c9e6b70350371d9e40864e3d2546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ff3a2267119502894ba5cfadba8367b6b1c9e6b70350371d9e40864e3d2546->enter($__internal_09ff3a2267119502894ba5cfadba8367b6b1c9e6b70350371d9e40864e3d2546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3cb57f8bafb3c779ae86dedfb6326438a26254c1893be7e9dd17d70214bcd56a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb57f8bafb3c779ae86dedfb6326438a26254c1893be7e9dd17d70214bcd56a->enter($__internal_3cb57f8bafb3c779ae86dedfb6326438a26254c1893be7e9dd17d70214bcd56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3cb57f8bafb3c779ae86dedfb6326438a26254c1893be7e9dd17d70214bcd56a->leave($__internal_3cb57f8bafb3c779ae86dedfb6326438a26254c1893be7e9dd17d70214bcd56a_prof);

        
        $__internal_09ff3a2267119502894ba5cfadba8367b6b1c9e6b70350371d9e40864e3d2546->leave($__internal_09ff3a2267119502894ba5cfadba8367b6b1c9e6b70350371d9e40864e3d2546_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Bienvenu sur le tp Symfony{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/udev_symfony/app/Resources/views/base.html.twig");
    }
}
