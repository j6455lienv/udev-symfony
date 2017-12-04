<?php

/* default/index.html.twig */
class __TwigTemplate_f9e99689f6afa44809b9e2e6b6be78eb45472fdb864771d4cf14f2b52fbe8912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_c3215c3e4069b1cce73f3a52704b9bed8e2b70087e5ba8c16b059cd4c8ef348a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3215c3e4069b1cce73f3a52704b9bed8e2b70087e5ba8c16b059cd4c8ef348a->enter($__internal_c3215c3e4069b1cce73f3a52704b9bed8e2b70087e5ba8c16b059cd4c8ef348a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_dd5220075e363d59661b5bed196c3467a2c31339fbfd1b7332946d5496827eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5220075e363d59661b5bed196c3467a2c31339fbfd1b7332946d5496827eef->enter($__internal_dd5220075e363d59661b5bed196c3467a2c31339fbfd1b7332946d5496827eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3215c3e4069b1cce73f3a52704b9bed8e2b70087e5ba8c16b059cd4c8ef348a->leave($__internal_c3215c3e4069b1cce73f3a52704b9bed8e2b70087e5ba8c16b059cd4c8ef348a_prof);

        
        $__internal_dd5220075e363d59661b5bed196c3467a2c31339fbfd1b7332946d5496827eef->leave($__internal_dd5220075e363d59661b5bed196c3467a2c31339fbfd1b7332946d5496827eef_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_09460cc73af2b0bb1e5d1eb7a1d5291691813dfdbf9a14c02f5c4c844802c671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09460cc73af2b0bb1e5d1eb7a1d5291691813dfdbf9a14c02f5c4c844802c671->enter($__internal_09460cc73af2b0bb1e5d1eb7a1d5291691813dfdbf9a14c02f5c4c844802c671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ef12d6c6d985de47b3de21872207a28c7365e93b5bfb145a83b426836a39b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ef12d6c6d985de47b3de21872207a28c7365e93b5bfb145a83b426836a39b4c->enter($__internal_8ef12d6c6d985de47b3de21872207a28c7365e93b5bfb145a83b426836a39b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8ef12d6c6d985de47b3de21872207a28c7365e93b5bfb145a83b426836a39b4c->leave($__internal_8ef12d6c6d985de47b3de21872207a28c7365e93b5bfb145a83b426836a39b4c_prof);

        
        $__internal_09460cc73af2b0bb1e5d1eb7a1d5291691813dfdbf9a14c02f5c4c844802c671->leave($__internal_09460cc73af2b0bb1e5d1eb7a1d5291691813dfdbf9a14c02f5c4c844802c671_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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

{% endblock %}", "default/index.html.twig", "/var/www/html/udev_symfony/app/Resources/views/default/index.html.twig");
    }
}
