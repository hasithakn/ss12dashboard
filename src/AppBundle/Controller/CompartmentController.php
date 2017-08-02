<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 2017-07-29
 * Time: 1:10 PM
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Compartment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CompartmentController extends Controller
{
    /**
     * @Route("/newCompartment", name="newCompartment")
     */
    public function newCompartmentAction(Request $request)
    {

        $compartment = new Compartment();

        $form = $this->createFormBuilder($compartment)
            ->add('compartment_id', TextType::class)
            ->add('item', TextType::class)
            ->add('expire_date', DateType::class)
            ->add('store_date', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Compartment'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            if ($user == null) {
                return $this->redirectToRoute('login');
            } else {
                $compartment = $form->getData();
                $compartment->setEmail($user);
                $em = $this->getDoctrine()->getManager();
                $em->persist($compartment);
                $em->flush();

                return $this->redirectToRoute('userProfile');
            }
        }

        return $this->render('compartment/newCompartment.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    /**
     * @Route("/editCompartment/{compartment_id}", name="editCompartment")
     */
    public function editCompartmentAction($compartment_id, Request $request)
    {
        $compartment = new Compartment();

        $em = $this->getDoctrine()->getManager();
        $compartment = $em->getRepository('AppBundle:Compartment')->find($compartment_id);

        $form = $this->createFormBuilder($compartment)
            ->add('compartment_id', TextType::class)
            ->add('item', TextType::class)
            ->add('expire_date', DateType::class)
            ->add('store_date', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Compartment'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            if ($user == null) {
                return $this->redirectToRoute('login');
            } else {
                $compartment = $form->getData();
                $compartment->setEmail($user);
                $em = $this->getDoctrine()->getManager();
                $em->persist($compartment);
                $em->flush();
                return $this->redirectToRoute('userProfile');
            }
        }

        return $this->render('compartment/editCompartment.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/deleteCompartment/{compartment_id}", name="deleteCompartment")
     */
    public function deleteCompartmentAction($compartment_id)
    {
        $compartment = new Compartment();
        $em = $this->getDoctrine()->getManager();
        $compartment = $em->getRepository('AppBundle:Compartment')->find($compartment_id);

        $user = $this->getUser();
        if ($user == null) {
            return $this->redirectToRoute('login');
        } else {
            $em->remove($compartment);
            $em->flush();
            return $this->redirectToRoute('Compartments');
        }

    }
    /**
     * @Route("/Compartments", name="Compartments")
     */
    public function listCompartmentAction( Request $request)
    {
        $compartments = new Compartment();
        $em = $this->getDoctrine()->getManager();
        $compartments = $em->getRepository('AppBundle:Compartment')->findAll();
        $user = $this->getUser();
        $email= $user->getEmail();
        if ($user == null) {
            return $this->redirectToRoute('login');
        } else {
            return $this->render('compartment/listCompartment.html.twig', array(
                'compartments' => $compartments,
                'email' => $email,
            ));
        }

    }
}