<?php

namespace WCS\CoavBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use WCS\CoavBundle\Entity\PlanetModel;
use WCS\CoavBundle\Form\PlanetModelType;

/**
 * PlanetModel controller.
 *
 */
class PlanetModelController extends Controller
{
    /**
     * Lists all PlanetModel entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $planetModels = $em->getRepository('WCSCoavBundle:PlanetModel')->findAll();

        return $this->render('planetmodel/index.html.twig', array(
            'planetModels' => $planetModels,
        ));
    }

    /**
     * Creates a new PlanetModel entity.
     *
     */
    public function newAction(Request $request)
    {
        $planetModel = new PlanetModel();
        $form = $this->createForm('WCS\CoavBundle\Form\PlanetModelType', $planetModel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($planetModel);
            $em->flush();

            return $this->redirectToRoute('planetmodel_show', array('id' => $planetModel->getId()));
        }

        return $this->render('planetmodel/new.html.twig', array(
            'planetModel' => $planetModel,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PlanetModel entity.
     *
     */
    public function showAction(PlanetModel $planetModel)
    {
        $deleteForm = $this->createDeleteForm($planetModel);

        return $this->render('planetmodel/show.html.twig', array(
            'planetModel' => $planetModel,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing PlanetModel entity.
     *
     */
    public function editAction(Request $request, PlanetModel $planetModel)
    {
        $deleteForm = $this->createDeleteForm($planetModel);
        $editForm = $this->createForm('WCS\CoavBundle\Form\PlanetModelType', $planetModel);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($planetModel);
            $em->flush();

            return $this->redirectToRoute('planetmodel_edit', array('id' => $planetModel->getId()));
        }

        return $this->render('planetmodel/edit.html.twig', array(
            'planetModel' => $planetModel,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a PlanetModel entity.
     *
     */
    public function deleteAction(Request $request, PlanetModel $planetModel)
    {
        $form = $this->createDeleteForm($planetModel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($planetModel);
            $em->flush();
        }

        return $this->redirectToRoute('planetmodel_index');
    }

    /**
     * Creates a form to delete a PlanetModel entity.
     *
     * @param PlanetModel $planetModel The PlanetModel entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PlanetModel $planetModel)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('planetmodel_delete', array('id' => $planetModel->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
