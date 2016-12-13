<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

        if (0 === strpos($pathinfo, '/aseguradora')) {
            // listarAseguradora
            if ($pathinfo === '/aseguradora/listar') {
                return array (  '_controller' => 'AsesoresSABundle\\Controller\\AseguradoraController::listarAseguradoraAction',  '_route' => 'listarAseguradora',);
            }

            // nuevaAseguradora
            if ($pathinfo === '/aseguradora/nueva') {
                return array (  '_controller' => 'AsesoresSABundle\\Controller\\AseguradoraController::nuevaAseguradoraAction',  '_route' => 'nuevaAseguradora',);
            }

            // editarAseguradora
            if (0 === strpos($pathinfo, '/aseguradora/editar') && preg_match('#^/aseguradora/editar/(?P<siglaaseguradora>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editarAseguradora')), array (  '_controller' => 'AsesoresSABundle\\Controller\\AseguradoraController::editarAseguradoraAction',));
            }

        }

        if (0 === strpos($pathinfo, '/cliente')) {
            // listarCliente
            if ($pathinfo === '/cliente/listar') {
                return array (  '_controller' => 'AsesoresSABundle\\Controller\\ClienteController::listarClienteAction',  '_route' => 'listarCliente',);
            }

            // nuevoCliente
            if ($pathinfo === '/cliente/nuevo') {
                return array (  '_controller' => 'AsesoresSABundle\\Controller\\ClienteController::nuevoClienteAction',  '_route' => 'nuevoCliente',);
            }

            // editarCliente
            if (0 === strpos($pathinfo, '/cliente/editar') && preg_match('#^/cliente/editar/(?P<filecliente>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editarCliente')), array (  '_controller' => 'AsesoresSABundle\\Controller\\ClienteController::editarClienteAction',));
            }

        }

        // Bienvenida
        if ($pathinfo === '/inicio') {
            return array (  '_controller' => 'AsesoresSABundle\\Controller\\DefaultController::inicioAction',  '_route' => 'Bienvenida',);
        }

        // cerrarSesion
        if ($pathinfo === '/cerrarSesion') {
            return array (  '_controller' => 'AsesoresSABundle\\Controller\\DefaultController::cerrarsesionAction',  '_route' => 'cerrarSesion',);
        }

        // inicioSesion
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AsesoresSABundle\\Controller\\InicioSesionController::indexAction',  '_route' => 'inicioSesion',);
        }

        if (0 === strpos($pathinfo, '/movimiento')) {
            // listarMovimiento
            if ($pathinfo === '/movimiento/listar') {
                return array (  '_controller' => 'AsesoresSABundle\\Controller\\MovimientoController::listarMovimientoAction',  '_route' => 'listarMovimiento',);
            }

            // nuevoMovimiento
            if ($pathinfo === '/movimiento/nuevo') {
                return array (  '_controller' => 'AsesoresSABundle\\Controller\\MovimientoController::nuevoMovimientoAction',  '_route' => 'nuevoMovimiento',);
            }

            // editarMovimiento
            if (0 === strpos($pathinfo, '/movimiento/editar') && preg_match('#^/movimiento/editar/(?P<siglamovimiento>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editarMovimiento')), array (  '_controller' => 'AsesoresSABundle\\Controller\\MovimientoController::editarMovimientoAction',));
            }

        }

        // nuevaPoliza
        if ($pathinfo === '/poliza/nueva') {
            return array (  '_controller' => 'AsesoresSABundle\\Controller\\PolizaController::nuevaPolizaAction',  '_route' => 'nuevaPoliza',);
        }

        // pdf
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pdf');
            }

            return array (  '_controller' => 'AsesoresSABundle\\Controller\\PolizaController::pdfAction',  '_route' => 'pdf',);
        }

        if (0 === strpos($pathinfo, '/ramo')) {
            // listarRamo
            if ($pathinfo === '/ramo/listar') {
                return array (  '_controller' => 'AsesoresSABundle\\Controller\\RamoController::listarRamoAction',  '_route' => 'listarRamo',);
            }

            // nuevoRamo
            if ($pathinfo === '/ramo/nuevo') {
                return array (  '_controller' => 'AsesoresSABundle\\Controller\\RamoController::nuevoRamoAction',  '_route' => 'nuevoRamo',);
            }

            // editarRamo
            if (0 === strpos($pathinfo, '/ramo/editar') && preg_match('#^/ramo/editar/(?P<siglaramo>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editarRamo')), array (  '_controller' => 'AsesoresSABundle\\Controller\\RamoController::editarRamoAction',));
            }

        }

        // verTransaccion
        if ($pathinfo === '/transaccion/ver') {
            return array (  '_controller' => 'AsesoresSABundle\\Controller\\TransaccionController::verTransaccionAction',  '_route' => 'verTransaccion',);
        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // listarUsuario
            if ($pathinfo === '/usuario/listar') {
                return array (  '_controller' => 'AsesoresSABundle\\Controller\\UsuarioController::listarUsuarioAction',  '_route' => 'listarUsuario',);
            }

            // nuevoUsuario
            if ($pathinfo === '/usuario/nuevo') {
                return array (  '_controller' => 'AsesoresSABundle\\Controller\\UsuarioController::nuevoUsuarioAction',  '_route' => 'nuevoUsuario',);
            }

            // editarUsuario
            if (0 === strpos($pathinfo, '/usuario/editar') && preg_match('#^/usuario/editar/(?P<nombreusuario>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editarUsuario')), array (  '_controller' => 'AsesoresSABundle\\Controller\\UsuarioController::editarUsuarioAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
