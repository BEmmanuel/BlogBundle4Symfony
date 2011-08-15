<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // ApplicationBlogBundle_homepage
        if ($pathinfo === '/blog') {
            return array (  '_controller' => 'Application\\BlogBundle\\Controller\\BlogController::indexAction',  '_route' => 'ApplicationBlogBundle_homepage',);
        }

        // ApplicationBlogBundle_comment
        if (0 === strpos($pathinfo, '/comment') && preg_match('#^/comment/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Application\\BlogBundle\\Controller\\BlogController::commentAction',)), array('_route' => 'ApplicationBlogBundle_comment'));
        }

        // ApplicationBlogBundle_new
        if ($pathinfo === '/new') {
            return array (  '_controller' => 'Application\\BlogBundle\\Controller\\PostController::newAction',  '_route' => 'ApplicationBlogBundle_new',);
        }

        // ApplicationBlogBundle_edit
        if (preg_match('#^/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Application\\BlogBundle\\Controller\\PostController::editAction',)), array('_route' => 'ApplicationBlogBundle_edit'));
        }

        // default_index
        if ($pathinfo === '/:module') {
            return array (  'action' => 'index',  '_route' => 'default_index',);
        }

        // default
        if ($pathinfo === '/:module/:action/*') {
            return array('_route' => 'default');
        }

        // post_show
        if (preg_match('#^/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Application\\BlogBundle\\Controller\\PostController::showAction',)), array('_route' => 'post_show'));
        }

        // post_create
        if ($pathinfo === '/create') {
            return array (  '_controller' => 'Application\\BlogBundle\\Controller\\PostController::createAction',  '_route' => 'post_create',);
        }

        // post_update
        if (preg_match('#^/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Application\\BlogBundle\\Controller\\PostController::updateAction',)), array('_route' => 'post_update'));
        }

        // post
        if ($pathinfo === '/blog') {
            return array (  '_controller' => 'Application\\BlogBundle\\Controller\\BlogController::indexAction',  '_route' => 'post',);
        }

        // post_delete
        if (preg_match('#^/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Application\\BlogBundle\\Controller\\PostController::deleteAction',)), array('_route' => 'post_delete'));
        }

        // post_edit
        if (preg_match('#^/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Application\\BlogBundle\\Controller\\PostController::editAction',)), array('_route' => 'post_edit'));
        }

        // post_sort
        if (preg_match('#^/(?P<id>[^/]+?)/sort$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Application\\BlogBundle\\Controller\\BlogController::sortAction',)), array('_route' => 'post_sort'));
        }

        // comment_show
        if (0 === strpos($pathinfo, '/comment') && preg_match('#^/comment/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Application\\BlogBundle\\Controller\\CommentController::showAction',)), array('_route' => 'comment_show'));
        }

        // comment_create
        if ($pathinfo === '/comment/create') {
            return array (  '_controller' => 'Application\\BlogBundle\\Controller\\CommentController::createAction',  '_route' => 'comment_create',);
        }

        // comment_update
        if (0 === strpos($pathinfo, '/comment') && preg_match('#^/comment/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Application\\BlogBundle\\Controller\\CommentController::updateAction',)), array('_route' => 'comment_update'));
        }

        // comment_new
        if ($pathinfo === '/comment/new') {
            return array (  '_controller' => 'Application\\BlogBundle\\Controller\\CommentController::newAction',  '_route' => 'comment_new',);
        }

        // comment_delete
        if (0 === strpos($pathinfo, '/comment') && preg_match('#^/comment/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Application\\BlogBundle\\Controller\\CommentController::deleteAction',)), array('_route' => 'comment_delete'));
        }

        // comment_edit
        if (0 === strpos($pathinfo, '/comment') && preg_match('#^/comment/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Application\\BlogBundle\\Controller\\CommentController::editAction',)), array('_route' => 'comment_edit'));
        }

        // AcmeHelloBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\HelloBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'AcmeHelloBundle_homepage'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
