<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController {
    /**
     * @Route("/admin", name="admin")
     */
    public function adminAction(){
        return new Response( '<html><body>admin panel!</body></html>');
    }
     /**
     * @Route("/user", name="user")
     */
    public function userAction(){
        return new Response( '<html><body>user panel!</body></html>');
    }
}