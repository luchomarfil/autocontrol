<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\CentroAlmacenamiento;
use AppBundle\Form\CentroAlmacenamientoType;

/**
 * CentroAlmacenamiento controller.
 *
 * @Route("/centroalmacenamiento")
 */
class CentroAlmacenamientoController extends Controller
{
    /**
     * Lists all CentroAlmacenamiento entities.
     *
     * @Route("/", name="centroalmacenamiento_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $centroAlmacenamientos = $em->getRepository('AppBundle:CentroAlmacenamiento')->findAll();

        return $this->render('centroalmacenamiento/index.html.twig', array(
            'centroAlmacenamientos' => $centroAlmacenamientos,
        ));
    }

    /**
     * Creates a new CentroAlmacenamiento entity.
     *
     * @Route("/new", name="centroalmacenamiento_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $centroAlmacenamiento = new CentroAlmacenamiento();
        $form = $this->createForm('AppBundle\Form\CentroAlmacenamientoType', $centroAlmacenamiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($centroAlmacenamiento);
            $em->flush();

            $text = "El Centro de Almacenamiento Fue Creado Exitosamente!";
            $centroAlmacenamientos = $em->getRepository('AppBundle:CentroAlmacenamiento')->findAll();
            return $this->render('centroalmacenamiento/index.html.twig', array('centroAlmacenamientos' => $centroAlmacenamientos, 'text' => $text,));            }

        return $this->render('centroalmacenamiento/new.html.twig', array(
            'centroAlmacenamiento' => $centroAlmacenamiento,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CentroAlmacenamiento entity.
     *
     * @Route("/{id}", name="centroalmacenamiento_show")
     * @Method("GET")
     */
    public function showAction(CentroAlmacenamiento $centroAlmacenamiento)
    {
        $deleteForm = $this->createDeleteForm($centroAlmacenamiento);

        return $this->render('centroalmacenamiento/show.html.twig', array(
            'centroAlmacenamiento' => $centroAlmacenamiento,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing CentroAlmacenamiento entity.
     *
     * @Route("/{id}/edit", name="centroalmacenamiento_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, CentroAlmacenamiento $centroAlmacenamiento)
    {
        $deleteForm = $this->createDeleteForm($centroAlmacenamiento);
        $editForm = $this->createForm('AppBundle\Form\CentroAlmacenamientoType', $centroAlmacenamiento);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($centroAlmacenamiento);
            $em->flush();

            return $this->redirectToRoute('centroalmacenamiento_edit', array('id' => $centroAlmacenamiento->getId()));
        }

        return $this->render('centroalmacenamiento/edit.html.twig', array(
            'centroAlmacenamiento' => $centroAlmacenamiento,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a CentroAlmacenamiento entity.
     *
     * @Route("/{id}", name="centroalmacenamiento_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, CentroAlmacenamiento $centroAlmacenamiento)
    {
        $form = $this->createDeleteForm($centroAlmacenamiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($centroAlmacenamiento);
            $em->flush();
        }

        return $this->redirectToRoute('centroalmacenamiento_index');
    }

    /**
     * Creates a form to delete a CentroAlmacenamiento entity.
     *
     * @param CentroAlmacenamiento $centroAlmacenamiento The CentroAlmacenamiento entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CentroAlmacenamiento $centroAlmacenamiento)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('centroalmacenamiento_delete', array('id' => $centroAlmacenamiento->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
