<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Bateria;
use AppBundle\Form\BateriaType;

/**
 * Bateria controller.
 *
 * @Route("/bateria")
 */
class BateriaController extends Controller
{
    /**
     * Lists all Bateria entities.
     *
     * @Route("/", name="bateria_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $baterias = $em->getRepository('AppBundle:Bateria')->findAll();

        return $this->render('bateria/index.html.twig', array(
            'baterias' => $baterias,
        ));
    }

    /**
     * Creates a new Bateria entity.
     *
     * @Route("/new", name="bateria_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $baterium = new Bateria();
        $form = $this->createForm('AppBundle\Form\BateriaType', $baterium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($baterium);
            $em->flush();

            $text = "La Batería Fue Creada Exitosamente!";
            $baterias = $em->getRepository('AppBundle:Bateria')->findAll();
            return $this->render('usuario/index.html.twig', array('baterias' => $baterias, 'text' => $text,));         }

        return $this->render('bateria/new.html.twig', array(
            'baterium' => $baterium,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Bateria entity.
     *
     * @Route("/{id}", name="bateria_show")
     * @Method("GET")
     */
    public function showAction(Bateria $baterium)
    {
        $deleteForm = $this->createDeleteForm($baterium);

        return $this->render('bateria/show.html.twig', array(
            'baterium' => $baterium,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Bateria entity.
     *
     * @Route("/{id}/edit", name="bateria_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Bateria $baterium)
    {
        $deleteForm = $this->createDeleteForm($baterium);
        $editForm = $this->createForm('AppBundle\Form\BateriaType', $baterium);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($baterium);
            $em->flush();

            return $this->redirectToRoute('bateria_edit', array('id' => $baterium->getId()));
        }

        return $this->render('bateria/edit.html.twig', array(
            'baterium' => $baterium,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Bateria entity.
     *
     * @Route("/{id}", name="bateria_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Bateria $baterium)
    {
        $form = $this->createDeleteForm($baterium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($baterium);
            $em->flush();
        }

        return $this->redirectToRoute('bateria_index');
    }

    /**
     * Creates a form to delete a Bateria entity.
     *
     * @param Bateria $baterium The Bateria entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Bateria $baterium)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('bateria_delete', array('id' => $baterium->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
