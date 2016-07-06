<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // front_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'front_default_index');
            }

            return array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front_default_index',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // autos_hora
            if ($pathinfo === '/admin/autoshora') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_autos_hora;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ApiController::indexAction',  '_route' => 'autos_hora',);
            }
            not_autos_hora:

            // verterminales
            if ($pathinfo === '/admin/verterminales') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_verterminales;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ApiController::verTerminales',  '_route' => 'verterminales',);
            }
            not_verterminales:

            if (0 === strpos($pathinfo, '/admin/bateria')) {
                // bateria_index
                if (rtrim($pathinfo, '/') === '/admin/bateria') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_bateria_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'bateria_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\BateriaController::indexAction',  '_route' => 'bateria_index',);
                }
                not_bateria_index:

                // bateria_new
                if ($pathinfo === '/admin/bateria/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_bateria_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\BateriaController::newAction',  '_route' => 'bateria_new',);
                }
                not_bateria_new:

                // bateria_show
                if (preg_match('#^/admin/bateria/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_bateria_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bateria_show')), array (  '_controller' => 'AppBundle\\Controller\\BateriaController::showAction',));
                }
                not_bateria_show:

                // bateria_edit
                if (preg_match('#^/admin/bateria/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_bateria_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bateria_edit')), array (  '_controller' => 'AppBundle\\Controller\\BateriaController::editAction',));
                }
                not_bateria_edit:

                // bateria_delete
                if (preg_match('#^/admin/bateria/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_bateria_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bateria_delete')), array (  '_controller' => 'AppBundle\\Controller\\BateriaController::deleteAction',));
                }
                not_bateria_delete:

            }

            if (0 === strpos($pathinfo, '/admin/centroalmacenamiento')) {
                // centroalmacenamiento_index
                if (rtrim($pathinfo, '/') === '/admin/centroalmacenamiento') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_centroalmacenamiento_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'centroalmacenamiento_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CentroAlmacenamientoController::indexAction',  '_route' => 'centroalmacenamiento_index',);
                }
                not_centroalmacenamiento_index:

                // centroalmacenamiento_new
                if ($pathinfo === '/admin/centroalmacenamiento/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_centroalmacenamiento_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CentroAlmacenamientoController::newAction',  '_route' => 'centroalmacenamiento_new',);
                }
                not_centroalmacenamiento_new:

                // centroalmacenamiento_show
                if (preg_match('#^/admin/centroalmacenamiento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_centroalmacenamiento_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'centroalmacenamiento_show')), array (  '_controller' => 'AppBundle\\Controller\\CentroAlmacenamientoController::showAction',));
                }
                not_centroalmacenamiento_show:

                // centroalmacenamiento_edit
                if (preg_match('#^/admin/centroalmacenamiento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_centroalmacenamiento_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'centroalmacenamiento_edit')), array (  '_controller' => 'AppBundle\\Controller\\CentroAlmacenamientoController::editAction',));
                }
                not_centroalmacenamiento_edit:

                // centroalmacenamiento_delete
                if (preg_match('#^/admin/centroalmacenamiento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_centroalmacenamiento_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'centroalmacenamiento_delete')), array (  '_controller' => 'AppBundle\\Controller\\CentroAlmacenamientoController::deleteAction',));
                }
                not_centroalmacenamiento_delete:

            }

            // login
            if ($pathinfo === '/admin/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'login_check');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::checkLoginAction',  '_route' => 'login_check',);
            }

            // app_security_logout
            if ($pathinfo === '/admin/logout') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logout',  '_route' => 'app_security_logout',);
            }

            if (0 === strpos($pathinfo, '/admin/terminal')) {
                // terminal_index
                if (rtrim($pathinfo, '/') === '/admin/terminal') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_terminal_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'terminal_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TerminalController::indexAction',  '_route' => 'terminal_index',);
                }
                not_terminal_index:

                // terminal_new
                if ($pathinfo === '/admin/terminal/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_terminal_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TerminalController::newAction',  '_route' => 'terminal_new',);
                }
                not_terminal_new:

                // terminal_show
                if (preg_match('#^/admin/terminal/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_terminal_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'terminal_show')), array (  '_controller' => 'AppBundle\\Controller\\TerminalController::showAction',));
                }
                not_terminal_show:

                // terminal_edit
                if (preg_match('#^/admin/terminal/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_terminal_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'terminal_edit')), array (  '_controller' => 'AppBundle\\Controller\\TerminalController::editAction',));
                }
                not_terminal_edit:

                // terminal_delete
                if (preg_match('#^/admin/terminal/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_terminal_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'terminal_delete')), array (  '_controller' => 'AppBundle\\Controller\\TerminalController::deleteAction',));
                }
                not_terminal_delete:

            }

            if (0 === strpos($pathinfo, '/admin/usuario')) {
                // usuario_index
                if (rtrim($pathinfo, '/') === '/admin/usuario') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_usuario_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'usuario_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario_index',);
                }
                not_usuario_index:

                // usuario_new
                if ($pathinfo === '/admin/usuario/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_usuario_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
                }
                not_usuario_new:

                // usuario_show
                if (preg_match('#^/admin/usuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_usuario_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::showAction',));
                }
                not_usuario_show:

                // usuario_edit
                if (preg_match('#^/admin/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_usuario_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::editAction',));
                }
                not_usuario_edit:

                // usuario_delete
                if (preg_match('#^/admin/usuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_usuario_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::deleteAction',));
                }
                not_usuario_delete:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
