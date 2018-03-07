<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController {
    /**
     * @Route("/user")
     */
    public function userAction(){
        return new Response( '<html><body>user panel!</body></html>');
    }
}