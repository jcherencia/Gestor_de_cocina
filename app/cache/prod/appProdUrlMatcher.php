<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        // inicio
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'inicio');
            }

            return array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\DefaultController::indexAction',  '_route' => 'inicio',);
        }

        // buscar
        if ($pathinfo === '/buscar') {
            return array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\DefaultController::buscarAction',  '_route' => 'buscar',);
        }

        // registro
        if ($pathinfo === '/registro') {
            return array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\UserController::registroAction',  '_route' => 'registro',);
        }

        // crear_usuario
        if ($pathinfo === '/crear_usuario') {
            return array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\UserController::crear_usuarioAction',  '_route' => 'crear_usuario',);
        }

        // perfil
        if ($pathinfo === '/perfil') {
            return array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\UserController::perfilAction',  '_route' => 'perfil',);
        }

        // edit_usuario
        if (0 === strpos($pathinfo, '/edit_usuario') && preg_match('#^/edit_usuario/(?P<usuario>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_usuario')), array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\UserController::editPerfilAction',));
        }

        // borrarUsuario
        if ($pathinfo === '/borrarUsuario') {
            return array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\UserController::borrarUsuarioAction',  '_route' => 'borrarUsuario',);
        }

        // editarRol
        if ($pathinfo === '/editarRol') {
            return array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\UserController::editarRolAction',  '_route' => 'editarRol',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
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

        if (0 === strpos($pathinfo, '/upload')) {
            // upload_file
            if ($pathinfo === '/upload_file') {
                return array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\DefaultController::upload_fileAction',  '_route' => 'upload_file',);
            }

            // upload
            if ($pathinfo === '/upload') {
                return array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\DefaultController::uploadAction',  '_route' => 'upload',);
            }

        }

        if (0 === strpos($pathinfo, '/receta')) {
            // receta
            if (preg_match('#^/receta/(?P<receta>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'receta')), array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\DefaultController::recetaAction',));
            }

            // recetas
            if ($pathinfo === '/recetas') {
                return array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\DefaultController::recetasAction',  '_route' => 'recetas',);
            }

        }

        // getrecetas
        if ($pathinfo === '/getrecetas') {
            return array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\DefaultController::getRecetasAction',  '_route' => 'getrecetas',);
        }

        if (0 === strpos($pathinfo, '/recetas')) {
            // filtro_cat
            if (0 === strpos($pathinfo, '/recetas/filtrar') && preg_match('#^/recetas/filtrar/(?P<categoria>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filtro_cat')), array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\DefaultController::filtrarAction',));
            }

            if (0 === strpos($pathinfo, '/recetas/nueva_receta')) {
                // nueva_receta
                if ($pathinfo === '/recetas/nueva_receta') {
                    return array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\DefaultController::nueva_recetaAction',  '_route' => 'nueva_receta',);
                }

                if (0 === strpos($pathinfo, '/recetas/nueva_receta/crear')) {
                    // crear_receta
                    if ($pathinfo === '/recetas/nueva_receta/crear') {
                        return array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\FormRecetasController::crear_recetaAction',  '_route' => 'crear_receta',);
                    }

                    // listar_ing
                    if ($pathinfo === '/recetas/nueva_receta/crear/listar_ing') {
                        return array (  '_controller' => 'Gestor_cocina\\AlmacenBundle\\Controller\\DefaultController::listarProductosAction',  '_route' => 'listar_ing',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/recetas/editar')) {
                // editar_receta
                if (preg_match('#^/recetas/editar/(?P<receta>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editar_receta')), array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\DefaultController::editar_recetaAction',));
                }

                // mod_receta
                if (0 === strpos($pathinfo, '/recetas/editar/mod') && preg_match('#^/recetas/editar/mod/(?P<receta>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mod_receta')), array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\FormRecetasController::editar_recetaAction',));
                }

            }

            // borrar_receta
            if (0 === strpos($pathinfo, '/recetas/borrar') && preg_match('#^/recetas/borrar/(?P<receta>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'borrar_receta')), array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\DefaultController::borrar_recetaAction',));
            }

            // nueva_categoria
            if ($pathinfo === '/recetas/nueva_categoria') {
                return array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\FormRecetasController::nueva_categoriaAction',  '_route' => 'nueva_categoria',);
            }

            // edit_categoria
            if ($pathinfo === '/recetas/edit_categoria') {
                return array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\FormRecetasController::edit_categoriaAction',  '_route' => 'edit_categoria',);
            }

            // del_categoria
            if ($pathinfo === '/recetas/del_categoria') {
                return array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\FormRecetasController::del_categoriaAction',  '_route' => 'del_categoria',);
            }

            // valorar
            if ($pathinfo === '/recetas/valorar') {
                return array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\DefaultController::valorarAction',  '_route' => 'valorar',);
            }

        }

        if (0 === strpos($pathinfo, '/solicitudes')) {
            // solicitudes
            if ($pathinfo === '/solicitudes') {
                return array (  '_controller' => 'Gestor_cocina\\CentroLogBundle\\Controller\\DefaultController::solicitudesAction',  '_route' => 'solicitudes',);
            }

            if (0 === strpos($pathinfo, '/solicitudes/p')) {
                // pedir_productos
                if ($pathinfo === '/solicitudes/pedir_productos') {
                    return array (  '_controller' => 'Gestor_cocina\\CentroLogBundle\\Controller\\DefaultController::pedir_productosAction',  '_route' => 'pedir_productos',);
                }

                // prodSolicitado
                if ($pathinfo === '/solicitudes/prodSolicitado') {
                    return array (  '_controller' => 'Gestor_cocina\\CentroLogBundle\\Controller\\DefaultController::prodSolicitadoAction',  '_route' => 'prodSolicitado',);
                }

            }

        }

        // centro_log
        if ($pathinfo === '/centro_log') {
            return array (  '_controller' => 'Gestor_cocina\\CentroLogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'centro_log',);
        }

        if (0 === strpos($pathinfo, '/recetas')) {
            // genSolicitud
            if ($pathinfo === '/recetas/genSolicitud') {
                return array (  '_controller' => 'Gestor_cocina\\CentroLogBundle\\Controller\\DefaultController::genSolicitudAction',  '_route' => 'genSolicitud',);
            }

            // delSolicitud
            if ($pathinfo === '/recetas/delSolicitud') {
                return array (  '_controller' => 'Gestor_cocina\\CentroLogBundle\\Controller\\DefaultController::delSolicitudAction',  '_route' => 'delSolicitud',);
            }

        }

        if (0 === strpos($pathinfo, '/centro_log')) {
            // genPedido
            if ($pathinfo === '/centro_log/genPedido') {
                return array (  '_controller' => 'Gestor_cocina\\CentroLogBundle\\Controller\\DefaultController::genPedidoAction',  '_route' => 'genPedido',);
            }

            // findPedido
            if ($pathinfo === '/centro_log/findPedido') {
                return array (  '_controller' => 'Gestor_cocina\\CentroLogBundle\\Controller\\DefaultController::findPedidoAction',  '_route' => 'findPedido',);
            }

            // editPedido
            if ($pathinfo === '/centro_log/editPedido') {
                return array (  '_controller' => 'Gestor_cocina\\CentroLogBundle\\Controller\\DefaultController::editPedidoAction',  '_route' => 'editPedido',);
            }

            // delPedido
            if ($pathinfo === '/centro_log/delPedido') {
                return array (  '_controller' => 'Gestor_cocina\\CentroLogBundle\\Controller\\DefaultController::delPedidoAction',  '_route' => 'delPedido',);
            }

            // editEstado
            if ($pathinfo === '/centro_log/editEstado') {
                return array (  '_controller' => 'Gestor_cocina\\CentroLogBundle\\Controller\\DefaultController::editEstadoAction',  '_route' => 'editEstado',);
            }

            // validarPedido
            if ($pathinfo === '/centro_log/validarPedido') {
                return array (  '_controller' => 'Gestor_cocina\\CentroLogBundle\\Controller\\DefaultController::validarPedidoAction',  '_route' => 'validarPedido',);
            }

        }

        if (0 === strpos($pathinfo, '/almacen')) {
            // almacen
            if ($pathinfo === '/almacen') {
                return array (  '_controller' => 'Gestor_cocina\\AlmacenBundle\\Controller\\DefaultController::indexAction',  '_route' => 'almacen',);
            }

            // getProd
            if ($pathinfo === '/almacen/getProd') {
                return array (  '_controller' => 'Gestor_cocina\\AlmacenBundle\\Controller\\DefaultController::getProdAction',  '_route' => 'getProd',);
            }

            // nuevo_producto
            if ($pathinfo === '/almacen/nuevo_producto') {
                return array (  '_controller' => 'Gestor_cocina\\AlmacenBundle\\Controller\\DefaultController::nuevo_productoAction',  '_route' => 'nuevo_producto',);
            }

            // mod_producto
            if (0 === strpos($pathinfo, '/almacen/mod_producto') && preg_match('#^/almacen/mod_producto/(?P<producto>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mod_producto')), array (  '_controller' => 'Gestor_cocina\\AlmacenBundle\\Controller\\DefaultController::mod_productoAction',));
            }

            // getproductos
            if ($pathinfo === '/almacen/getproductos') {
                return array (  '_controller' => 'Gestor_cocina\\AlmacenBundle\\Controller\\DefaultController::getProductosAction',  '_route' => 'getproductos',);
            }

            if (0 === strpos($pathinfo, '/almacen/nuevo_producto')) {
                // crear_producto
                if ($pathinfo === '/almacen/nuevo_producto/crear') {
                    return array (  '_controller' => 'Gestor_cocina\\AlmacenBundle\\Controller\\FormProductosController::crear_productoAction',  '_route' => 'crear_producto',);
                }

                // editar_producto
                if (0 === strpos($pathinfo, '/almacen/nuevo_producto/editar') && preg_match('#^/almacen/nuevo_producto/editar/(?P<producto>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editar_producto')), array (  '_controller' => 'Gestor_cocina\\AlmacenBundle\\Controller\\FormProductosController::editar_productoAction',));
                }

            }

            // borrar_producto
            if (0 === strpos($pathinfo, '/almacen/borrar_producto') && preg_match('#^/almacen/borrar_producto/(?P<producto>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'borrar_producto')), array (  '_controller' => 'Gestor_cocina\\AlmacenBundle\\Controller\\FormProductosController::borrar_productoAction',));
            }

        }

        // verproductos
        if ($pathinfo === '/verproductos') {
            return array (  '_controller' => 'Gestor_cocina\\RecetasBundle\\Controller\\DefaultController::verProductosAction',  '_route' => 'verproductos',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
