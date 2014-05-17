<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),  4 =>   array (  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),  4 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),),
        'inicio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'registro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\UserController::registroAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registro',    ),  ),  4 =>   array (  ),),
        'crear_usuario' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\UserController::crear_usuarioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/crear_usuario',    ),  ),  4 =>   array (  ),),
        'perfil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\UserController::perfilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/perfil',    ),  ),  4 =>   array (  ),),
        'recetas' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\DefaultController::recetasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recetas',    ),  ),  4 =>   array (  ),),
        'nueva_receta' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\DefaultController::nueva_recetaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recetas/nueva_receta',    ),  ),  4 =>   array (  ),),
        'crear_receta' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\FormRecetasController::crear_recetaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recetas/nueva_receta/crear',    ),  ),  4 =>   array (  ),),
        'listar_ing' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestor_cocina\\AlmacenBundle\\Controller\\DefaultController::listarProductosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recetas/nueva_receta/crear/listar_ing',    ),  ),  4 =>   array (  ),),
        'editar_receta' => array (  0 =>   array (    0 => 'receta',  ),  1 =>   array (    '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\DefaultController::editar_recetaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'receta',    ),    1 =>     array (      0 => 'text',      1 => '/recetas/editar',    ),  ),  4 =>   array (  ),),
        'mod_receta' => array (  0 =>   array (    0 => 'receta',  ),  1 =>   array (    '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\FormRecetasController::editar_recetaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'receta',    ),    1 =>     array (      0 => 'text',      1 => '/recetas/editar/mod',    ),  ),  4 =>   array (  ),),
        'borrar_receta' => array (  0 =>   array (    0 => 'receta',  ),  1 =>   array (    '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\DefaultController::borrar_recetaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'receta',    ),    1 =>     array (      0 => 'text',      1 => '/recetas/borrar',    ),  ),  4 =>   array (  ),),
        'centro_log' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestor_cocina\\CentroLogBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/centro_log',    ),  ),  4 =>   array (  ),),
        'genSolicitud' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestor_cocina\\CentroLogBundle\\Controller\\DefaultController::genSolicitudAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/centro_log/genSolicitud',    ),  ),  4 =>   array (  ),),
        'almacen' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestor_cocina\\AlmacenBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/almacen',    ),  ),  4 =>   array (  ),),
        'nuevo_producto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestor_cocina\\AlmacenBundle\\Controller\\DefaultController::nuevo_productoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/almacen/nuevo_producto',    ),  ),  4 =>   array (  ),),
        'mod_producto' => array (  0 =>   array (    0 => 'producto',  ),  1 =>   array (    '_controller' => 'Gestor_cocina\\AlmacenBundle\\Controller\\DefaultController::mod_productoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'producto',    ),    1 =>     array (      0 => 'text',      1 => '/almacen/mod_producto',    ),  ),  4 =>   array (  ),),
        'crear_producto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestor_cocina\\AlmacenBundle\\Controller\\FormProductosController::crear_productoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/almacen/nuevo_producto/crear',    ),  ),  4 =>   array (  ),),
        'editar_producto' => array (  0 =>   array (    0 => 'producto',  ),  1 =>   array (    '_controller' => 'Gestor_cocina\\AlmacenBundle\\Controller\\FormProductosController::editar_productoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'producto',    ),    1 =>     array (      0 => 'text',      1 => '/almacen/nuevo_producto/editar',    ),  ),  4 =>   array (  ),),
        'borrar_producto' => array (  0 =>   array (    0 => 'producto',  ),  1 =>   array (    '_controller' => 'Gestor_cocina\\AlmacenBundle\\Controller\\FormProductosController::borrar_productoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'producto',    ),    1 =>     array (      0 => 'text',      1 => '/almacen/borrar_producto',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
