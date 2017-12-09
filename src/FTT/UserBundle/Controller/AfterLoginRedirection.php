<?php

namespace FTT\UserBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Routing\RouterInterface;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface

;

class AfterLoginRedirection implements AuthenticationSuccessHandlerInterface

{

 /**

 * @var \Symfony\Component\Routing\RouterInterface

 */

 private $router;

 /**

 * @param RouterInterface $router

 */

 public function __construct(RouterInterface $router)

 {

 $this->router = $router;

 }

 /**

 * @param Request $request

 * @param TokenInterface $token

 * @return RedirectResponse

 */

 public function onAuthenticationSuccess(Request $request, TokenInterface $token)

 {

 // Get list of roles for current user

 $roles = $token->getRoles();

 // Tranform this list in array

 $rolesTab = array_map(function($role){ 

 return $role->getRole(); 

 }, $roles);

 if (in_array('ROLE_FAN', $rolesTab, true) )

    $redirection = new RedirectResponse($this->router->generate('frontofficefront_homepage'));

elseif (in_array('ROLE_ADMIN', $rolesTab, true))
    $redirection = new RedirectResponse($this->router->generate('articles'));
elseif (in_array('ROLE_MEDECIN', $rolesTab, true))
    $redirection = new RedirectResponse($this->router->generate('rapport'));
elseif (in_array('ROLE_ARBITRE', $rolesTab, true))
    $redirection = new RedirectResponse($this->router->generate('arbitre'));
else
    $redirection = new RedirectResponse($this->router->generate('frontofficefront_homepage'));
 return $redirection;

 }

}