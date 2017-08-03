<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 2017-07-27
 * Time: 5:00 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * @Route("/newUser", name="newUser")
     */
    public function newUserAction(Request $request)
    {
        $user = $this->getUser();
        if ($user != null) {
            return $this->redirectToRoute('userProfile');
        } else {
            $user = new User();
            $user->setIsActive('1');

            $form = $this->createFormBuilder($user)
                ->add('email', EmailType::class, array('label' => 'Email'))
                ->add('password', RepeatedType::class, array(
                    'type' => PasswordType::class,
                    'invalid_message' => 'The password fields must match.',
                    'options' => array('attr' => array('class' => 'password-field')),
                    'required' => true,
                    'first_options' => array('label' => 'Password'),
                    'second_options' => array('label' => 'Confirm Password')))
                ->add('save', SubmitType::class, array('label' => 'Submit'))
                ->getForm();

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $user = $form->getData();
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                return $this->redirectToRoute('login');
            }

        }
        return $this->render('user/newUser.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/profile", name="userProfile")
     */
    public function profileAction(Request $request)
    {
        $user = $this->getUser();
        if ($user != null) {
            $email = $this->getUser()->getEmail();

            $repository = $this->getDoctrine()->getRepository('AppBundle:Compartment');
            $compartments = $repository->findBy(array('email' => $email));

            $curlService = $this->get('api.curl');

            $toTwing = array();
            foreach ($compartments as $cmp) {
                $res = $curlService->httppost('http://localhost/ss12dashboard/web/app_dev.php/api2', array('compartmentId' => $cmp->getCompartmentId()));
                $res = json_decode($res);
                if ($res != null) {
                    $cmp->temp = $res[0]->temp;
                    $cmp->humid = $res[0]->humid;
                    $cmp->time_stamp = $res[0]->time_stamp;
                    $cmp->food_status = $res[0]->food_status;
                    $cmp->compartment_id = $res[0]->compartment_id;
                    array_push($toTwing, $cmp);
                }
            }
            return $this->render('user/profile.html.twig', array(
                'email' => $email,
                'compartments' => $toTwing
            ));
        } else {
            return $this->redirectToRoute('login');
        }

    }

}