<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // jn_user_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'jn_user_homepage');
            }

            return array (  '_controller' => 'JN\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'jn_user_homepage',);
        }

        if (0 === strpos($pathinfo, '/siteweb')) {
            // jn_platform_home
            if (preg_match('#^/siteweb(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jn_platform_home')), array (  '_controller' => 'JN\\PlatformBundle\\Controller\\AdvertController::indexAction',  'page' => 1,));
            }

            if (0 === strpos($pathinfo, '/siteweb/ad')) {
                // jn_platform_view
                if (0 === strpos($pathinfo, '/siteweb/advert') && preg_match('#^/siteweb/advert/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'jn_platform_view')), array (  '_controller' => 'JN\\PlatformBundle\\Controller\\AdvertController::viewAction',));
                }

                // jn_platform_add
                if ($pathinfo === '/siteweb/add') {
                    return array (  '_controller' => 'JN\\PlatformBundle\\Controller\\AdvertController::addAction',  '_route' => 'jn_platform_add',);
                }

            }

            // jn_platform_edit
            if (0 === strpos($pathinfo, '/siteweb/edit') && preg_match('#^/siteweb/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jn_platform_edit')), array (  '_controller' => 'JN\\PlatformBundle\\Controller\\AdvertController::editAction',));
            }

            // jn_platform_delete
            if (0 === strpos($pathinfo, '/siteweb/delete') && preg_match('#^/siteweb/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jn_platform_delete')), array (  '_controller' => 'JN\\PlatformBundle\\Controller\\AdvertController::deleteAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'JN\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
