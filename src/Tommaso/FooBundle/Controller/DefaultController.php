<?php

namespace Tommaso\FooBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tommaso\FooBundle\Entity\User;
use Tommaso\FooBundle\Entity\Phone;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function insertAction($name, $surname, $birthdate)
    {
        //$date = date_parse($birthdate);
        //this is a comment
        $user = new User();
        $user->setName($name)->setSurname($surname)->setBirthdate(null);
        $phone = new Phone();
        $phone->setNumber("+393935345173")->setUser($user);
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->persist($phone);
        $em->flush();
        return $this->render('TommasoFooBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function listAction() {
        $em = $this->getDoctrine()->getManager();
        $phones = $em->getRepository("TommasoFooBundle:Phone")->findAll();
        $dato = array();
        foreach($phones as $user) :
            $dato[]['name'] = $user->getUser()->getName();
        endforeach;
        return new JsonResponse($dato);
    }
}
