<?php

namespace QuetesymfonyBundle\Controller;

use QuetesymfonyBundle\Entity\Quete;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Quete controller.
 *
 */
class QueteController extends Controller
{
    /**
     * Lists all quete entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $quetes = $em->getRepository('QuetesymfonyBundle:Quete')->findAll();

        return $this->render('QuetesymfonyBundle:Default:index.html.twig', array(
            'quetes' => $quetes,
        ));
    }

    /**
     * Creates a new quete entity.
     *
     */
    public function newAction(Request $request)
    {
        $quete = new Quete();
        $form = $this->createForm('QuetesymfonyBundle\Form\QueteType', $quete);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($quete);
            $em->flush($quete);

            return $this->redirectToRoute('quete_show', array('id' => $quete->getId()));
        }

        return $this->render('QuetesymfonyBundle:quete:new.html.twig', array(
            'quete' => $quete,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a quete entity.
     *
     */
    public function showAction(Quete $quete)
    {
        $deleteForm = $this->createDeleteForm($quete);

        return $this->render('QuetesymfonyBundle:quete:show.html.twig', array(
            'quete' => $quete,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing quete entity.
     *
     */
    public function editAction(Request $request, Quete $quete)
    {
        $deleteForm = $this->createDeleteForm($quete);
        $editForm = $this->createForm('QuetesymfonyBundle\Form\QueteType', $quete);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('quete_edit', array('id' => $quete->getId()));
        }

        return $this->render('QuetesymfonyBundle:quete:edit.html.twig', array(
            'quete' => $quete,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a quete entity.
     *
     */
    public function deleteAction(Request $request, Quete $quete)
    {
        $form = $this->createDeleteForm($quete);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($quete);
            $em->flush($quete);
        }

        return $this->redirectToRoute('quete_index');
    }

    /**
     * Creates a form to delete a quete entity.
     *
     * @param Quete $quete The quete entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Quete $quete)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('quete_delete', array('id' => $quete->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
