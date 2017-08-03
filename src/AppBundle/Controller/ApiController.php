<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 2017-07-28
 * Time: 12:15 AM
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApiController extends Controller
{
    /**
     * @Route("/api1", name="api1")
     */
    public function api1Action(Request $request)
    {
        //sends the compartment list from email


        $email = $request->query->get('email');
        $repository = $this->getDoctrine()->getRepository('AppBundle:Compartment');
        $compartments = $repository->findBy(array('email' => $email));
        $compartmentList = [];
        //var_dump($compartments);

        foreach ($compartments as $compartment) {

            $temp = new \stdClass();
            $temp->email = $email;
            $temp->compartmentId = $compartment->getCompartmentId();
            $temp->Item = $compartment->getItem();
            $temp->expireDate = $compartment->getExpireDate();
            $temp->storeDate = $compartment->getStoreDate();
            $compartmentList[] = $temp;
        }

        return new JsonResponse($compartmentList);
    }


    /**
     * @Route("/api2", name="api2")
     */
    public function api2Action(Request $request)
    {
        //sends the compartment's least data from compartmentId


        $compartmentId = $request->query->get('compartmentId');
        //var_dump($compartmentId);
        $repository = $this->getDoctrine()->getRepository('AppBundle:DeviceData');
        $compartmentData = $repository->findBy(
            array('compartmentId' => $compartmentId),
            array('timeStamp' => 'DESC'),
            1
        );
        // var_dump($compartmentData);
        $responce = [];
        foreach ($compartmentData as $compartment) {

            $temp = new \stdClass();
            $temp->temp = $compartment->getTemp();
            $temp->humid = $compartment->getHumid();
            $temp->compartment_id = $compartment->getCompartmentId();

            $timestamp = substr($compartment->getTimeStamp(), 0, -3);
            $datetimeFormat = 'Y-m-d H:i:s';
            $date = new \DateTime();
            $date->setTimestamp($timestamp);
            $dateTime = $date->format($datetimeFormat);

            $temp->time_stamp = $dateTime;
            $temp->food_status = $compartment->getFoodStatus();
            $responce[] = $temp;
        }


        return new JsonResponse($responce);
    }

}