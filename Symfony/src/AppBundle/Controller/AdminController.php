<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController {
    /**
     * @Route("/admin")
     */
    public function adminAction(){
        return new Response( '<html><body>admin panel!</body></html>');
    }
}