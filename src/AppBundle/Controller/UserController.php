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
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * @Route("/newUser", name="newUser")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $a = new User();
        $a->setEmail("asdssssssasd");
        $a->setPassword("1234");

        $em = $this->getDoctrine()->getManager();
        $em->persist($a);
        $em->flush();
        var_dump($a);
//        exit();
//        return new Response('Saved new product with id ');
        return $this->render('default/index.html.twig');
    }

}