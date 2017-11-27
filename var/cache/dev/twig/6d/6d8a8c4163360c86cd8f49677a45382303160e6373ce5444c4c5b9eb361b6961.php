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
        $__internal_a9089215b26375310c5b3a92286ae2d119dc7f35720102317e8503411e07a09a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9089215b26375310c5b3a92286ae2d119dc7f35720102317e8503411e07a09a->enter($__internal_a9089215b26375310c5b3a92286ae2d119dc7f35720102317e8503411e07a09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_413b7308ec5c71feae8d10a9e0422d98fe3b361e23804e3432f97d03f35b458c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_413b7308ec5c71feae8d10a9e0422d98fe3b361e23804e3432f97d03f35b458c->enter($__internal_413b7308ec5c71feae8d10a9e0422d98fe3b361e23804e3432f97d03f35b458c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

        <!-- asset a rajouter pour asset bootstrap-->
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
    </head>
    <body>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"/udev_symfony/web/app_dev.php\">Home</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"/udev_symfony/web/app_dev.php/users\">Users<span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/udev_symfony/web/app_dev.php/users/add\">add-user</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/udev_symfony/web/app_dev.php/articles\">Articles</a>
                </li>
            </ul>
        </div>
    </nav>

        ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
    </body>
</html>
";
        
        $__internal_a9089215b26375310c5b3a92286ae2d119dc7f35720102317e8503411e07a09a->leave($__internal_a9089215b26375310c5b3a92286ae2d119dc7f35720102317e8503411e07a09a_prof);

        
        $__internal_413b7308ec5c71feae8d10a9e0422d98fe3b361e23804e3432f97d03f35b458c->leave($__internal_413b7308ec5c71feae8d10a9e0422d98fe3b361e23804e3432f97d03f35b458c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0cf2731643771ec1993321eabdfb8ca3f73c2e1d569fd88c7625a1cd03bd4d99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf2731643771ec1993321eabdfb8ca3f73c2e1d569fd88c7625a1cd03bd4d99->enter($__internal_0cf2731643771ec1993321eabdfb8ca3f73c2e1d569fd88c7625a1cd03bd4d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3f0083f4d78a966c8a53fd42c5f6c1e1fab54ce0c7af356a3f148d7c8a088df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f0083f4d78a966c8a53fd42c5f6c1e1fab54ce0c7af356a3f148d7c8a088df4->enter($__internal_3f0083f4d78a966c8a53fd42c5f6c1e1fab54ce0c7af356a3f148d7c8a088df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "tp_symfony";
        
        $__internal_3f0083f4d78a966c8a53fd42c5f6c1e1fab54ce0c7af356a3f148d7c8a088df4->leave($__internal_3f0083f4d78a966c8a53fd42c5f6c1e1fab54ce0c7af356a3f148d7c8a088df4_prof);

        
        $__internal_0cf2731643771ec1993321eabdfb8ca3f73c2e1d569fd88c7625a1cd03bd4d99->leave($__internal_0cf2731643771ec1993321eabdfb8ca3f73c2e1d569fd88c7625a1cd03bd4d99_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f7c0afb659f18bb6badd2096a1cf035b721f3e6c862ac426bef45c4faf25ce74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7c0afb659f18bb6badd2096a1cf035b721f3e6c862ac426bef45c4faf25ce74->enter($__internal_f7c0afb659f18bb6badd2096a1cf035b721f3e6c862ac426bef45c4faf25ce74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a900f1200ea9c3f0f9635bbafc83a476efe3791bc046280ae216d8155e96bc9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a900f1200ea9c3f0f9635bbafc83a476efe3791bc046280ae216d8155e96bc9f->enter($__internal_a900f1200ea9c3f0f9635bbafc83a476efe3791bc046280ae216d8155e96bc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a900f1200ea9c3f0f9635bbafc83a476efe3791bc046280ae216d8155e96bc9f->leave($__internal_a900f1200ea9c3f0f9635bbafc83a476efe3791bc046280ae216d8155e96bc9f_prof);

        
        $__internal_f7c0afb659f18bb6badd2096a1cf035b721f3e6c862ac426bef45c4faf25ce74->leave($__internal_f7c0afb659f18bb6badd2096a1cf035b721f3e6c862ac426bef45c4faf25ce74_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f3b6b56efe0db13f01168d89541504ee85f9769f332c32c9a6f4cd068ee16d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f3b6b56efe0db13f01168d89541504ee85f9769f332c32c9a6f4cd068ee16d1->enter($__internal_0f3b6b56efe0db13f01168d89541504ee85f9769f332c32c9a6f4cd068ee16d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a812be8ecc33e7cf51f2ec70a769ee57d6ec322db2a91e4ffbc4523bb093ebd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a812be8ecc33e7cf51f2ec70a769ee57d6ec322db2a91e4ffbc4523bb093ebd6->enter($__internal_a812be8ecc33e7cf51f2ec70a769ee57d6ec322db2a91e4ffbc4523bb093ebd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a812be8ecc33e7cf51f2ec70a769ee57d6ec322db2a91e4ffbc4523bb093ebd6->leave($__internal_a812be8ecc33e7cf51f2ec70a769ee57d6ec322db2a91e4ffbc4523bb093ebd6_prof);

        
        $__internal_0f3b6b56efe0db13f01168d89541504ee85f9769f332c32c9a6f4cd068ee16d1->leave($__internal_0f3b6b56efe0db13f01168d89541504ee85f9769f332c32c9a6f4cd068ee16d1_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_038d504fda6ce4ef2c696980635b91520948d8ae11fd538b29cfba7b92f78ab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_038d504fda6ce4ef2c696980635b91520948d8ae11fd538b29cfba7b92f78ab3->enter($__internal_038d504fda6ce4ef2c696980635b91520948d8ae11fd538b29cfba7b92f78ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8321084d270bfd37f4524dcfe414b095735cf5f4f68ee75073dcbf198cfde587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8321084d270bfd37f4524dcfe414b095735cf5f4f68ee75073dcbf198cfde587->enter($__internal_8321084d270bfd37f4524dcfe414b095735cf5f4f68ee75073dcbf198cfde587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8321084d270bfd37f4524dcfe414b095735cf5f4f68ee75073dcbf198cfde587->leave($__internal_8321084d270bfd37f4524dcfe414b095735cf5f4f68ee75073dcbf198cfde587_prof);

        
        $__internal_038d504fda6ce4ef2c696980635b91520948d8ae11fd538b29cfba7b92f78ab3->leave($__internal_038d504fda6ce4ef2c696980635b91520948d8ae11fd538b29cfba7b92f78ab3_prof);

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
        return array (  147 => 35,  130 => 34,  113 => 6,  95 => 5,  80 => 36,  77 => 35,  75 => 34,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}tp_symfony{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

        <!-- asset a rajouter pour asset bootstrap-->
        <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
    </head>
    <body>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"/udev_symfony/web/app_dev.php\">Home</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"/udev_symfony/web/app_dev.php/users\">Users<span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/udev_symfony/web/app_dev.php/users/add\">add-user</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/udev_symfony/web/app_dev.php/articles\">Articles</a>
                </li>
            </ul>
        </div>
    </nav>

        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
    </body>
</html>
", "base.html.twig", "/var/www/html/udev_symfony/app/Resources/views/base.html.twig");
    }
}
