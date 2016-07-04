<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Terminal;
use AppBundle\Form\TerminalType;

/**
 * Terminal controller.
 *
 * @Route("/terminal")
 */
class TerminalController extends Controller
{
    /**
     * Lists all Terminal entities.
     *
     * @Route("/", name="terminal_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $terminals = $em->getRepository('AppBundle:Terminal')->findAll();

        return $this->render('terminal/index.html.twig', array(
            'terminals' => $terminals,
        ));
    }

    /**
     * Creates a new Terminal entity.
     *
     * @Route("/new", name="terminal_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $terminal = new Terminal();
        $form = $this->createForm('AppBundle\Form\TerminalType', $terminal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($terminal);
            $em->flush();

            $text = "La Terminal Fue Creada Exitosamente!";
            $terminals = $em->getRepository('AppBundle:Terminal')->findAll();
            return $this->render('terminal/index.html.twig', array('terminals' => $terminals, 'text' => $text,));          }

        return $this->render('terminal/new.html.twig', array(
            'terminal' => $terminal,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Terminal entity.
     *
     * @Route("/{id}", name="terminal_show")
     * @Method("GET")
     */
    public function showAction(Terminal $terminal)
    {
        $deleteForm = $this->createDeleteForm($terminal);

        return $this->render('terminal/show.html.twig', array(
            'terminal' => $terminal,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Terminal entity.
     *
     * @Route("/{id}/edit", name="terminal_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Terminal $terminal)
    {
        $deleteForm = $this->createDeleteForm($terminal);
        $editForm = $this->createForm('AppBundle\Form\TerminalType', $terminal);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($terminal);
            $em->flush();

            return $this->redirectToRoute('terminal_edit', array('id' => $terminal->getId()));
        }

        return $this->render('terminal/edit.html.twig', array(
            'terminal' => $terminal,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Terminal entity.
     *
     * @Route("/{id}", name="terminal_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Terminal $terminal)
    {
        $form = $this->createDeleteForm($terminal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($terminal);
            $em->flush();
        }

        return $this->redirectToRoute('terminal_index');
    }

    /**
     * Creates a form to delete a Terminal entity.
     *
     * @param Terminal $terminal The Terminal entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Terminal $terminal)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('terminal_delete', array('id' => $terminal->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
