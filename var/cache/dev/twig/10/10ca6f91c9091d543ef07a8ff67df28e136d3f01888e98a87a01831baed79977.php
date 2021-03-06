<?php

/* :default:index.html.twig */
class __TwigTemplate_f9e99689f6afa44809b9e2e6b6be78eb45472fdb864771d4cf14f2b52fbe8912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_f392913eb75bbb8ecad5a551887376b59084053e22a0a36c3571745f57276e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f392913eb75bbb8ecad5a551887376b59084053e22a0a36c3571745f57276e40->enter($__internal_f392913eb75bbb8ecad5a551887376b59084053e22a0a36c3571745f57276e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_6e1ebd9668f4aacd137bc0bd05b9e69e838b787cefebfdfdd4dd1ee75994e71c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e1ebd9668f4aacd137bc0bd05b9e69e838b787cefebfdfdd4dd1ee75994e71c->enter($__internal_6e1ebd9668f4aacd137bc0bd05b9e69e838b787cefebfdfdd4dd1ee75994e71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f392913eb75bbb8ecad5a551887376b59084053e22a0a36c3571745f57276e40->leave($__internal_f392913eb75bbb8ecad5a551887376b59084053e22a0a36c3571745f57276e40_prof);

        
        $__internal_6e1ebd9668f4aacd137bc0bd05b9e69e838b787cefebfdfdd4dd1ee75994e71c->leave($__internal_6e1ebd9668f4aacd137bc0bd05b9e69e838b787cefebfdfdd4dd1ee75994e71c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1318a7da41f45c8e8dc1faa91e334835f4a38de3f3127de06619be75ec4deeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1318a7da41f45c8e8dc1faa91e334835f4a38de3f3127de06619be75ec4deeb->enter($__internal_e1318a7da41f45c8e8dc1faa91e334835f4a38de3f3127de06619be75ec4deeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb32a8e6c0541776b38d02e7e1ae7937b08138918ed40905857774d53b5aa5db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb32a8e6c0541776b38d02e7e1ae7937b08138918ed40905857774d53b5aa5db->enter($__internal_eb32a8e6c0541776b38d02e7e1ae7937b08138918ed40905857774d53b5aa5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <!-- ajout d'une feuille de style-->
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 5
        echo twig_include($this->env, $context, "layout/mainMenu.html.twig", array("current" => "homepage"));
        echo "

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <h1>Homepage</h1>
                <h4>Demarrage testing</h4>
                <p>apres avoir cloné le projet de la branch julienVenet_symfony_final</p>
                <ul>
                    <li>Lancer la page depuis son server apache ex: 'localhost/udev_symfony/web/app.php'</li>
                    <li>Ou lancer le projet en démarrant le server interne symfony. A la racine, lancer une commande symfony php bin/console server:run/start/stop... En localhost le port est le 8000, taper dans l'url 127.0.0.1:8000. Vous arrivez sur homepage.</li>
                    <li>Créer la db udev suivant le readMe -> Prealable</li>
                    <li>Ce projet symfony est un crud simple sur 2 tables 'User' & 'Article'</li>
                    <li>Il n'y a pas de relation entre tables</li>
                    <li>Quand tout est installé, créer des User de maniere aléatoire :  php bin/console udev:create-users</li>
                    <li>Quand tout est installé, créer des Articles de maniere aléatoire :  php bin/console udev:create-articles</li>
                </ul>
            </div>
            <div class=\"col-md-4 visible-md col\">
                <img id=\"img\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/symfony.png"), "html", null, true);
        echo "\">
            </div>
        </div>


        <div class=\"row\">
            <div class=\"col-sm-12 col-md-8 left-col\">
                <div class=\"alert alert-success\">
                    <h2>Gestion des utilisateurs</h2>
                    <p>Voir la liste des Users : <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("users");
        echo "\">List Users</a></p>
                    <p>Ajouter un User : <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add");
        echo "\">Add Users</a></p>
                    <p>Je ne peux pas mettre d'autre lien dans cette configuration car je choisis ensuite ma page en
                        fonction d'un ID que j'envoie dans mon URL.
                        Ca dépends donc de ma db</p>
                </div>

                <div class=\"alert alert-success\">
                    <h2>Gestion des articles</h2>
                    <p>Voir la liste des Articles : <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles");
        echo "\">List Articles</a></p>
                    <p>Ajouter un Article : <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_add");
        echo "\">Add Article</a></p>
                    <p>Je ne peux pas mettre d'autre lien dans cette configuration car je choisis ensuite ma page en
                        fonction d'un ID que j'envoie dans mon URL.
                        Ca dépends donc de ma db</p>
                </div>
            </div>

            <div class=\"col-sm-12 col-md-4\">
                <div class=\"alert alert-info\">
                    <h4>Utilisateurs créés aujourd'hui</h4>
                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("hinclude", Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:User:userWidget"), array("default" => "Loading ..."));
        echo "
                </div>

                <div class=\"alert alert-info\">
                    <h4>Articles créés aujourd'hui</h4>
                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("hinclude", Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Article:articleWidget"), array("default" => "Loading ..."));
        echo "
                </div>

                <div class=\"alert alert-info\">
                    <h4>MAJ - Packets ArchLinux</h4>
                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("hinclude", Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:feed"), array("default" => "Loading ..."));
        echo "
                </div>
            </div>

        </div>
    </div>

";
        
        $__internal_eb32a8e6c0541776b38d02e7e1ae7937b08138918ed40905857774d53b5aa5db->leave($__internal_eb32a8e6c0541776b38d02e7e1ae7937b08138918ed40905857774d53b5aa5db_prof);

        
        $__internal_e1318a7da41f45c8e8dc1faa91e334835f4a38de3f3127de06619be75ec4deeb->leave($__internal_e1318a7da41f45c8e8dc1faa91e334835f4a38de3f3127de06619be75ec4deeb_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 63,  130 => 58,  122 => 53,  109 => 43,  105 => 42,  94 => 34,  90 => 33,  78 => 24,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
    <!-- ajout d'une feuille de style-->
    <link href=\"{{ asset('css/index.css') }}\" rel=\"stylesheet\">
    {{ include('layout/mainMenu.html.twig', {'current' : 'homepage'}) }}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <h1>Homepage</h1>
                <h4>Demarrage testing</h4>
                <p>apres avoir cloné le projet de la branch julienVenet_symfony_final</p>
                <ul>
                    <li>Lancer la page depuis son server apache ex: 'localhost/udev_symfony/web/app.php'</li>
                    <li>Ou lancer le projet en démarrant le server interne symfony. A la racine, lancer une commande symfony php bin/console server:run/start/stop... En localhost le port est le 8000, taper dans l'url 127.0.0.1:8000. Vous arrivez sur homepage.</li>
                    <li>Créer la db udev suivant le readMe -> Prealable</li>
                    <li>Ce projet symfony est un crud simple sur 2 tables 'User' & 'Article'</li>
                    <li>Il n'y a pas de relation entre tables</li>
                    <li>Quand tout est installé, créer des User de maniere aléatoire :  php bin/console udev:create-users</li>
                    <li>Quand tout est installé, créer des Articles de maniere aléatoire :  php bin/console udev:create-articles</li>
                </ul>
            </div>
            <div class=\"col-md-4 visible-md col\">
                <img id=\"img\" src=\"{{ asset('img/symfony.png') }}\">
            </div>
        </div>


        <div class=\"row\">
            <div class=\"col-sm-12 col-md-8 left-col\">
                <div class=\"alert alert-success\">
                    <h2>Gestion des utilisateurs</h2>
                    <p>Voir la liste des Users : <a href=\"{{ path('users') }}\">List Users</a></p>
                    <p>Ajouter un User : <a href=\"{{ path('add') }}\">Add Users</a></p>
                    <p>Je ne peux pas mettre d'autre lien dans cette configuration car je choisis ensuite ma page en
                        fonction d'un ID que j'envoie dans mon URL.
                        Ca dépends donc de ma db</p>
                </div>

                <div class=\"alert alert-success\">
                    <h2>Gestion des articles</h2>
                    <p>Voir la liste des Articles : <a href=\"{{ path('articles') }}\">List Articles</a></p>
                    <p>Ajouter un Article : <a href=\"{{ path('article_add') }}\">Add Article</a></p>
                    <p>Je ne peux pas mettre d'autre lien dans cette configuration car je choisis ensuite ma page en
                        fonction d'un ID que j'envoie dans mon URL.
                        Ca dépends donc de ma db</p>
                </div>
            </div>

            <div class=\"col-sm-12 col-md-4\">
                <div class=\"alert alert-info\">
                    <h4>Utilisateurs créés aujourd'hui</h4>
                    {{ render_hinclude(controller('AppBundle:User:userWidget'), {'default': 'Loading ...'}) }}
                </div>

                <div class=\"alert alert-info\">
                    <h4>Articles créés aujourd'hui</h4>
                    {{ render_hinclude(controller('AppBundle:Article:articleWidget'), {'default': 'Loading ...'}) }}
                </div>

                <div class=\"alert alert-info\">
                    <h4>MAJ - Packets ArchLinux</h4>
                    {{ render_hinclude(controller('AppBundle:Default:feed'), {'default': 'Loading ...'}) }}
                </div>
            </div>

        </div>
    </div>

{% endblock %}", ":default:index.html.twig", "/var/www/html/udev_symfony/app/Resources/views/default/index.html.twig");
    }
}
