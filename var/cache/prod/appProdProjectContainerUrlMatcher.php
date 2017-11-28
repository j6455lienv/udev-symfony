<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/articles')) {
            // articles
            if ('/articles' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ArticleController::articleAction',  '_route' => 'articles',);
            }

            // article_add
            if ('/articles/add' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ArticleController::addAction',  '_route' => 'article_add',);
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/users')) {
            // users
            if ('/users' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::userAction',  '_route' => 'users',);
            }

            // add
            if ('/users/add' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::addAction',  '_route' => 'add',);
            }

            // edit
            if (0 === strpos($pathinfo, '/users/edit') && preg_match('#^/users/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editAction',));
            }

            // show
            if (0 === strpos($pathinfo, '/users/show') && preg_match('#^/users/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show')), array (  '_controller' => 'AppBundle\\Controller\\UserController::showAction',));
            }

            // delete
            if (preg_match('#^/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete')), array (  '_controller' => 'AppBundle\\Controller\\UserController::deleteAction',));
            }

            // user_others
            if (0 === strpos($pathinfo, '/users/others') && preg_match('#^/users/others/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_others')), array (  '_controller' => 'AppBundle\\Controller\\UserController::otherUserWidgetAction',));
            }

            // user_widget
            if (0 === strpos($pathinfo, '/users/userWidget') && preg_match('#^/users/userWidget/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_widget')), array (  '_controller' => 'AppBundle\\Controller\\UserController::affichageIndexAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
