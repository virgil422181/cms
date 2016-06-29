<?php
/**
 * Created by Virgil
 * Date: 2/8/2016
 * Time: 7:15 AM
 */

namespace Custom\CMSBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityController extends FacebookController
{

    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(
            'CustomCMSBundle:security:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error'         => $error,
            )
        );
    }
    public function loginCheckAction()
    {
        return new Response(true);
    }

    public function logoutAction ()
    {
        // nothing here .
    }
    public function loginFacebookAction ()
    {
        echo '<pre>';
        print_r(get_class_methods($this->getFb()));
        echo '</pre>';
        die;
    }
}