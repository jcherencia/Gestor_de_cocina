<?php

namespace Gestor_cocina\AlmacenBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Gestor_cocina\AlmacenBundle\Entity\Productos;
use Gestor_cocina\AlmacenBundle\Form\ProductosType;

/**
 * Productos controller.
 *
 * @Route("/almacen")
 */
class ProductosController extends Controller
{

    /**
     * Lists all Productos entities.
     *
     * @Route("/", name="almacen")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AlmacenBundle:Productos')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Productos entity.
     *
     * @Route("/", name="almacen_create")
     * @Method("POST")
     * @Template("AlmacenBundle:Productos:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Productos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('almacen_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Productos entity.
    *
    * @param Productos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Productos $entity)
    {
        $form = $this->createForm(new ProductosType(), $entity, array(
            'action' => $this->generateUrl('almacen_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Productos entity.
     *
     * @Route("/new", name="almacen_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Productos();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Productos entity.
     *
     * @Route("/{id}", name="almacen_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AlmacenBundle:Productos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Productos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Productos entity.
     *
     * @Route("/{id}/edit", name="almacen_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AlmacenBundle:Productos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Productos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Productos entity.
    *
    * @param Productos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Productos $entity)
    {
        $form = $this->createForm(new ProductosType(), $entity, array(
            'action' => $this->generateUrl('almacen_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Productos entity.
     *
     * @Route("/{id}", name="almacen_update")
     * @Method("PUT")
     * @Template("AlmacenBundle:Productos:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AlmacenBundle:Productos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Productos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('almacen_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Productos entity.
     *
     * @Route("/{id}", name="almacen_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AlmacenBundle:Productos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Productos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('almacen'));
    }

    /**
     * Creates a form to delete a Productos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('almacen_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
