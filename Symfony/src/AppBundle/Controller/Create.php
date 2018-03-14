<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Create {
    /**
     * @Route("/create", name="create")
     */
    public function createAction() {

        $entityManager = $this->getDoctrine()->getManager();

        $mobile = new Mobile();
        $mobile->setNaam('Samsung');
        $mobile->setPrijs('$500,-');
        $mobile->setType('50403204');

        $entityManager->persist($mobile);

        $entityManager->flush();

        return new Response('saved new mobile with id: '.$mobile->getId());
    }
}
