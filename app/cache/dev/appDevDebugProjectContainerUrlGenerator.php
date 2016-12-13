<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listarAseguradora' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSABundle\\Controller\\AseguradoraController::listarAseguradoraAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/aseguradora/listar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nuevaAseguradora' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSABundle\\Controller\\AseguradoraController::nuevaAseguradoraAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/aseguradora/nueva',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editarAseguradora' => array (  0 =>   array (    0 => 'siglaaseguradora',  ),  1 =>   array (    '_controller' => 'AsesoresSABundle\\Controller\\AseguradoraController::editarAseguradoraAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'siglaaseguradora',    ),    1 =>     array (      0 => 'text',      1 => '/aseguradora/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listarCliente' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSABundle\\Controller\\ClienteController::listarClienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cliente/listar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nuevoCliente' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSABundle\\Controller\\ClienteController::nuevoClienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cliente/nuevo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editarCliente' => array (  0 =>   array (    0 => 'filecliente',  ),  1 =>   array (    '_controller' => 'AsesoresSABundle\\Controller\\ClienteController::editarClienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'filecliente',    ),    1 =>     array (      0 => 'text',      1 => '/cliente/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Bienvenida' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSABundle\\Controller\\DefaultController::inicioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inicio',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cerrarSesion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSABundle\\Controller\\DefaultController::cerrarsesionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cerrarSesion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inicioSesion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSABundle\\Controller\\InicioSesionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listarMovimiento' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSABundle\\Controller\\MovimientoController::listarMovimientoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/movimiento/listar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nuevoMovimiento' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSABundle\\Controller\\MovimientoController::nuevoMovimientoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/movimiento/nuevo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editarMovimiento' => array (  0 =>   array (    0 => 'siglamovimiento',  ),  1 =>   array (    '_controller' => 'AsesoresSABundle\\Controller\\MovimientoController::editarMovimientoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'siglamovimiento',    ),    1 =>     array (      0 => 'text',      1 => '/movimiento/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nuevaPoliza' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSABundle\\Controller\\PolizaController::nuevaPolizaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/poliza/nueva',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pdf' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSABundle\\Controller\\PolizaController::pdfAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listarRamo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSABundle\\Controller\\RamoController::listarRamoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ramo/listar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nuevoRamo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSABundle\\Controller\\RamoController::nuevoRamoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ramo/nuevo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editarRamo' => array (  0 =>   array (    0 => 'siglaramo',  ),  1 =>   array (    '_controller' => 'AsesoresSABundle\\Controller\\RamoController::editarRamoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'siglaramo',    ),    1 =>     array (      0 => 'text',      1 => '/ramo/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'verTransaccion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSABundle\\Controller\\TransaccionController::verTransaccionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/transaccion/ver',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listarUsuario' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSABundle\\Controller\\UsuarioController::listarUsuarioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/listar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nuevoUsuario' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AsesoresSABundle\\Controller\\UsuarioController::nuevoUsuarioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/nuevo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editarUsuario' => array (  0 =>   array (    0 => 'nombreusuario',  ),  1 =>   array (    '_controller' => 'AsesoresSABundle\\Controller\\UsuarioController::editarUsuarioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nombreusuario',    ),    1 =>     array (      0 => 'text',      1 => '/usuario/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
