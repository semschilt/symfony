<?php

namespace AppBundle\Handler;

use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface {

    /**
     * @var RouterInterface $router
     */
    protected $authorizationChecker;
    Public function __constuct(RouterInterface $router, AuthorizationCheckerInterface $authorizationChecker) {
        
        $this->router = $router;
        $this->authorizationChecker = $authorizationChecker;
    }
    /**
     * Called when auth succeeds
     * 
     * @param Request $request
     * @param TokenInterface $token
     * 
     * @return Response never null
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token) {
        
        if ($this->authorizationChecker->isGranted('ROLE_ADMIN')) {
            $response = new RedirectResponse($this->router->generate('admin'));
        }
        elseif ($this->authorizationChecker->isGranted('ROLE_USER')) {
            $response = new RedirectResponse ($this->router->generate('user'));
        }
        return $response;
    }
}