<?php

/* :default:index.html.twig */
class __TwigTemplate_946504aee358c9eb226ae55c0e88268c5b9822e8131bb141c1f2dad46654509e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
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
        return array (  120 => 63,  112 => 58,  104 => 53,  91 => 43,  87 => 42,  76 => 34,  72 => 33,  60 => 24,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:index.html.twig", "/var/www/html/udev_symfony/app/Resources/views/default/index.html.twig");
    }
}
